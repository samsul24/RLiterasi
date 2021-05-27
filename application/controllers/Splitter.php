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
	}

	public function split()
	{
		$this->_upload();
	}

	public function _upload()
	{
		$file_name = $_FILES['pdf_file']['name'];
		if ($file_name != '') {
			$config['upload_path'] = 'img/foto' ;
			$config['max_size'] = 2000;
			$config['allowed_types'] = '*';
	
			$new_name = $file_name;
			$config['file_name'] = $new_name;
	
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('pdf_file')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$dataFile  = $this->upload->data();
				$file_name = $dataFile['file_name'];
			$data = array(
				'pdf_file'         =>$file_name,
			);
			$insert = $this->curl->simple_post($this->API1, $data);
			if ($insert) {
				$this->_pdf($data['upload_data']['full_path']);
				$this->session->set_flashdata('result', '');
				redirect('AdminClient/split', 'refresh');
			} else {
				$this->session->set_flashdata('result', '');
			}
			redirect('AdminClient/split', 'refresh');
			}
		}
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
				$new_filename = str_replace('.pdf', '', $filename) . '_' . $i . ".pdf";
				$new_pdf->Output($new_filename, "F");
				echo "Page " . $i . " split into " . $new_filename . "<br />\n";
			} catch (Exception $e) {
				echo 'Error';
			}
		}
	}
}
