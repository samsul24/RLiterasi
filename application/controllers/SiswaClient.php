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
    if ($this->session->userdata('id_user_role')) {
      $params = array('id_user' => $this->session->userdata('id_user'));
      $siswa = json_decode($this->curl->simple_get($this->API3, $params))[0];
      if (!$siswa->nis) {
        $this->session->set_flashdata('warning', 'Harap untuk melakukan pengisian seluruh data sesuai dengan form');
        redirect("SiswaClient/profile/" . $this->session->userdata('id_user'));
      } else {
        $username = $this->session->userdata('username');
        $data['results'] = $this->Login_model->get_user($username);
        $this->load->library('curl');
        $data['user'] = json_decode($this->curl->simple_get($this->API));
        $data['sekolah'] = json_decode($this->curl->simple_get($this->API2));
        $data['title'] = "Dashboard";
        $this->load->view('user/index', $data, FALSE);
      }
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
  public function gagal()
  {
    $data['title'] = "Berhasil";
    $this->load->view('user/gagal', $data, FALSE);
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
    $data['buku'] = json_decode($this->curl->simple_get($this->API));
    $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
    $data['title'] = "Buku";
    $this->load->view('user/ulasan', $data, FALSE);
  }
  public function ulasan_process()
  {
    $data = array(
      'judul' => $this->input->post('judul'),
      'keterangan' => $this->input->post('keterangan'),
    );
    $insert = $this->curl->simple_post($this->API1, $data);
    if ($insert) {
      $this->session->set_flashdata('result', 'success');
    }
    redirect('SiswaClient/buku');
  }
  public function profile($id = null)
  {
    if ($id === null) {
      redirect('SiswaClient');
    }
    $params = array('id_user' =>  $id);
    $data['siswa'] = json_decode($this->curl->simple_get($this->API3, $params));
    $this->load->view('user/profile', $data);
  }

  public function put_process()
  {
    $data = array(
      "id_user" => $this->input->post('id_user'),
      'foto' => $this->input->post('foto'),
      'nis' => $this->input->post('nis'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'nama' => $this->input->post('nama'),
      'jenis_kelamin' => $this->input->post('kelamin'),
      'kelas' => $this->input->post('kelas'),
      'email' => $this->input->post('email'),
      'jurusan' => $this->input->post('jurusan'),
      'no_telp' => $this->input->post('no_telp'),
      'id_user_role' => $this->input->post('id_user_role'),
      'id_sekolah' => $this->input->post('id_sekolah'),
    );
    $update =  $this->curl->simple_put($this->API3, $data, array(CURLOPT_BUFFERSIZE => 10));

    if ($update) {
      $this->session->set_flashdata('result', 'success');
    } else {
      $this->session->set_flashdata('result', 'failed');
    }
    redirect('SiswaClient/profile/' . $this->input->post('id_user'));
  }
}
