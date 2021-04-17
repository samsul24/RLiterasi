<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SiswaClient extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');
    // $this->load->model("Literasi_model");
    $this->load->model('Login_model');       
    $this->API = "http://localhost:8080/RLiterasi/api/Buku";
    $this->API1 = "http://localhost:8080/RLiterasi/api/Ulasan";
    $this->API2 = "http://localhost:8080/RLiterasi/api/Sekolah";
    $this->API3 = "http://localhost:8080/RLiterasi/api/Siswa";



  }

  public function index()
  {
    if($this->session->userdata('id_user_role')){
    $username = $this->session->userdata('username');
    $data['results'] = $this->Login_model->get_user($username);
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
  public function profile()
  {
    $params = array('id_user' =>  $this->uri->segment(3));
    $data['siswa'] = json_decode($this->curl->simple_get($this->API3, $params));
    $this->load->view('user/profile', $data);
  }

  public function put_process()
  {
      $data = array(
        'foto'         => $this->input->post('foto'),
        'nis'         => $this->input->post('nis'),
        'username'         => $this->input->post('username'),
        'password'         => $this->input->post('password'),
        'nama'             => $this->input->post('nama'),
        'jenis_kelamin'    => $this->input->post('jenis_kelamin'),
        'kelas'            => $this->input->post('kelas'),
        'email'          => $this->input->post('email'),
        'jurusan'          => $this->input->post('jurusan'),
        'no_telp'          => $this->input->post('jurusan'),
        'id_user_role'     => $this->input->post('id_user_role'),
        'id_sekolah'     => $this->input->post('id_sekolah'),
          
          
      );
      
      $update =  $this->curl->simple_put($this->API3, $data, array(CURLOPT_BUFFERSIZE => 10));
      if ($update) {
          echo"berhasil";
          // $this->session->set_flashdata('result', 'Update Data pengiriman Berhasil');
      } else {
          echo"gagal";
          // $this->session->set_flashdata('result', 'Update Data pengiriman Gagal');
      }
      // print_r($update);
      // die;
      redirect('SiswaClient');
  }

}
?>