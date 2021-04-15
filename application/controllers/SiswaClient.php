<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SiswaClient extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');
    $this->load->model("literasi_model");
    $this->load->model('login_model');       
    $this->API = "http://localhost:8080/RLiterasi/api/Buku";
    $this->API1 = "http://localhost:8080/RLiterasi/api/Ulasan";
    $this->API2 = "http://localhost:8080/RLiterasi/api/Sekolah";



  }

  public function index()
  {
    if($this->session->userdata('id_user_role')){
    $username = $this->session->userdata('username');
    $data['results'] = $this->login_model->get_user($username);
    $this->load->library('curl');
    $data['user'] = json_decode($this->curl->simple_get($this->API));
    $data['sekolah'] = json_decode($this->curl->simple_get($this->API2));
    $data['title'] = "Dashboard";
    $this->load->view('user/index', $data, FALSE);
  }
}
  public function buku()
  {
      $data['title'] = "Buku";
      $this->load->view('user/buku', $data, FALSE);
  }
  public function berhasil()
  {
      $data['title'] = "Berhasil";
      $this->load->view('user/berhasil', $data, FALSE);
  }
  public function literasi()
  {
      $data['buku'] = json_decode($this->curl->simple_get($this->API));
      $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
      $data['title'] = "Buku";
      $this->load->view('user/literasi', $data, FALSE);
  }
  public function ulasan()
  {
      $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
      $data['title'] = "Buku";
      $this->load->view('user/post/ulasan', $data, FALSE);
  }
  public function ulasan_process()
  {
      $data = array(            
          // 'id_user'      => $this->input->post('id_user'),
          'judul'      => $this->input->post('judul'),
          'ket_siswa'         => $this->input->post('ket_siswa'),
      );
      $insert = $this->curl->simple_post($this->API1, $data);
      if ($insert) {
        echo 'berhasil';
      } else {
        echo 'gagal';
      }
      var_dump($insert);
      exit;
      // redirect('SiswaClient/berhasil ','refresh');

    }
}
?>