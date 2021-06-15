<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Splitter extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('curl');

		$this->API = base_url('api/Buku');
		$this->API1 = base_url('api/Split');
	}

	public function index()
	{
		$params = array('id_buku' => $this->uri->segment(3));
		$data['split'] = json_decode($this->curl->simple_get($this->API1, $params));
		$data['title'] = "Split PDF";
		$this->load->view('admin/adminbar');
		$this->load->view('admin/split');
        $this->load->view('footer');

	}

	public function split()
	{
		$this->_pdf(FCPATH . 'file_buku\\' . $this->input->post('pdf_file'));
	}

	public function _pdf($filename)
	{
		$pdf = new \setasign\Fpdi\FPDI();
		$pagecount = $pdf->setSourceFile($filename); // How many pages?

		// Split each page into a new PDF
		for ($i = 1; $i <= $pagecount; $i++) {
			$new_pdf = new \setasign\Fpdi\FPDI();
			$new_pdf->AddPage();
			$new_pdf->setSourceFile($filename);
			$new_pdf->useTemplate($new_pdf->importPage($i));

			try {
				$path = FCPATH . 'file_buku\\';
				$new_path = FCPATH . 'file_buku\split\\';

				$name= str_replace($path,$new_path,$filename);
				$new_filename = str_replace('.pdf', '', $name) . '_' . $i . ".pdf";
				$new_pdf->Output($new_filename, "F");
				echo "Page " . $i . " split into " . $new_filename . "<br />\n";

				$parser = new \Smalot\PdfParser\Parser();
				$convet_pdf = $parser->parseFile($new_filename);
				
				$data = array(
					'id_sekolah'			=> $this->input->post('id_sekolah'),
					'pdf_file'         => str_replace($path, '', $new_filename),
					'deskripsi'			=> $convet_pdf->getText(),
					'nama_buku'			=> $this->input->post('nama_buku'),
				);

				$this->curl->simple_post($this->API1, $data);
			} catch (Exception $e) {
				echo 'Error';
			}
		}
		redirect('Splitter/detail_buku');

	}
	public function detail()
    {
        $uri = array('id_split' =>  $this->uri->segment(3));
        $data['split'] = json_decode($this->curl->simple_get($this->API1,$uri));
		$data['title'] = "Detail PDF";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/users/details', $data);	
    
    }
	public function detail_guru()
    {
        $uri = array('id_split' =>  $this->uri->segment(3));
        $data['split'] = json_decode($this->curl->simple_get($this->API1,$uri));
		$data['title'] = "Detail PDF";
		$this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/details', $data);	
        $this->load->view('footer');
    
    }
	public function detail_buku()
    {
		$params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['buku'] = json_decode($this->curl->simple_get($this->API,$params));
        $data['split'] = json_decode($this->curl->simple_get($this->API1,$params));
        $data['title'] = "Detail PDF";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/users/detail_buku', $data);
    
    }
	public function detail_buku_guru()
    {
		$params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['buku'] = json_decode($this->curl->simple_get($this->API,$params));
        $data['split'] = json_decode($this->curl->simple_get($this->API1,$params));
        $data['title'] = "Detail PDF";
		$this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/detail_buku', $data);
        $this->load->view('footer');

    
    }
	public function delete()
    {
        $params = array('id_split' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API1, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Split Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Split Gagal');
        }
        redirect('Splitter/detail_buku');
    }
	public function delete_guru()
    {
        $params = array('id_split' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API1, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Split Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Split Gagal');
        }
        redirect('Splitter/detail_buku');
    }
}
