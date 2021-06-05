<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BukuClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');

        $this->API = base_url('api/Buku');
        $this->API1 = base_url('api/Sekolah');
        $this->API2 = base_url('api/DetailBuku');
    }

    public function index()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['buku'] = json_decode($this->curl->simple_get($this->API,$params));
        $data['title'] = "Buku";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/buku', $data);

    }
    public function post()
    {

      $params = array('id_sekolah' =>  $this->uri->segment(3));
      $data['buku'] = json_decode($this->curl->simple_get($this->API,$params));
      $data['title'] = "Tambah Data buku";
      $this->load->view('admin/adminbar');
      $this->load->view('admin/post/buku', $data, FALSE);
    }

    public function post_process()
    {
      $file_name = $_FILES['pdf_file']['name'];
      $cover = $_FILES['cover']['name'];
      if ($file_name != '') {
          $config['upload_path'] = 'file_buku' ;
          $config['allowed_types'] = '*';
  
          $new_name = $file_name;
          $config['file_name'] = $new_name;
  
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
  
          if (!$this->upload->do_upload('pdf_file')) {
            echo"gagal";
          } else {
              $dataFile  = $this->upload->data();
              $file_name = $dataFile['file_name'];
              // $cover = $dataFile['cover'];
        $data = array(
            'id_sekolah'         => $this->input->post('id_sekolah'),
            'nama_buku'         => $this->input->post('nama_buku'),
            'diskripsi'         => $this->input->post('diskripsi'),
            'cover'              => $cover,
            'pdf_file'              => $file_name,
          );
          // var_dump($data);
          // exit;
        $insert = $this->curl->simple_post($this->API, $data);
        if ($insert) {
          $this->session->set_flashdata('result', '');
  
          redirect('AdminClient/buku', 'refresh');
        } else {
          $this->session->set_flashdata('result', '');
        }
        redirect('AdminClient/buku', 'refresh');
      }
    }
}       

public function put()
{
        $params = array('id_buku'=>$this->uri->segment(3));
        $data['buku'] = json_decode($this->curl->simple_get($this->API2,$params));
        $data['title'] = "Edit Data Sekolah";
          $this->load->view('admin/adminbar');
          $this->load->view('admin/put/buku', $data);
      }
      public function put_process()
      {
        $file_name = $_FILES['pdf_file']['name'];
        $cover = $_FILES['cover']['name'];
        if ($file_name != '') {
            $config['upload_path'] = 'file_buku' ;
            $config['allowed_types'] = '*';
            
            $new_name = $file_name;
            $config['file_name'] = $new_name;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload('pdf_file')) {
              echo"gagal";
            } else {
                $dataFile  = $this->upload->data();
                $file_name = $dataFile['file_name'];
          $data = array(
            'id_buku'         => $this->input->post('id_buku'),
            'id_sekolah'         => $this->input->post('id_sekolah'),
            'nama_buku'         => $this->input->post('nama_buku'),
            'diskripsi'         => $this->input->post('diskripsi'),
            'cover'              => $cover,
            'pdf_file'              => $file_name,
          );
          $update =  $this->curl->simple_put($this->API2, $data, array(CURLOPT_BUFFERSIZE => 10));

          if ($update) {
            echo"berhasil";
            $this->session->set_flashdata('result', 'Update Data User Berhasil');
          } else {
              $this->session->set_flashdata('result', 'Update Data User Gagal');
            }
          // print_r($update);
          // exit;
          redirect('AdminClient/buku');
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
        redirect('AdminClient/buku');
    }
    
    public function split()
    {
      $params = array('id_buku'=>$this->uri->segment(3));
      $data['buku'] = json_decode($this->curl->simple_get($this->API2,$params));
        $data['title'] = "Edit Data Sekolah";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/split', $data);
    }
}
