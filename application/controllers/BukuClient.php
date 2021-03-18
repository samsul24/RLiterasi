<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BukuClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');

        $this->API = "http://localhost:8080/RLiterasi/api/buku";
    }

    public function index()
    {
        $data['buku'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Buku";
        $this->load->view('header1');
        $this->load->view('bar');
        $this->load->view('admin/buku', $data);
        $this->load->view('footer');
    }
    public function post()
    {
    //   $data['buku'] = json_decode($this->curl->simple_get($this->API));
      $data['title'] = "Tambah Data buku";
      $this->load->view('header1');
      $this->load->view('bar');
      $this->load->view('admin/post/buku', $data, FALSE);
      $this->load->view('footer');
    }

    public function post_process()
    {
        $file_name = $_FILES['file_pdf']['name'];
        if ($file_name != '') {
            $config['upload_path'] = 'file_buku' ;
            $config['allowed_types'] = '*';

            $new_name = $file_name;
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file_pdf')) {
                // redirect($_SERVER['HTTP_REFERER']);
              echo"gagal";
            } else {
                $dataFile  = $this->upload->data();
                $file_name = $dataFile['file_name'];
           
        $data = array(
            'nama_buku'         => $this->input->post('nama_buku'),
            'diskripsi'         => $this->input->post('diskripsi'),
            'file_pdf'              => $file_name,
        );
        $insert = $this->curl->simple_post($this->API, $data);
        if ($insert) {
          $this->session->set_flashdata('result', '');
  
          redirect('bukuclient', 'refresh');
        } else {
          $this->session->set_flashdata('result', '');
        }
        redirect('bukuclient', 'refresh');
      }
    }
}
  
    public function delete()
    {
        $params = array('id_buku' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Gagal');
        }
        redirect('bukuclient');
    }
    
}
?>