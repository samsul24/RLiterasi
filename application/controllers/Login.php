<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->user= $this->session->userdata('user_login');
    // if(empty($this->user)){
    //   redirect('login');
    // }
    $this->load->library('curl');
    $this->load->library('session');
    $this->load->model('login_model');
  }

  public function index()
  {

    $data['title'] = 'login';
    $this->load->view('login/index', $data);
  }
  public function log_process()
  {
    $user = $this->input->post('user');
    $password = $this->input->post('password');
    $check = $this->login_model->login($user, $password);
    if ($check) {
      foreach ($check as $rows) {
        $session_data = array(
          'username' => $rows->username,
          'id_user_role' => $rows->id_user_role,
          'id_user' => $rows->id_user,
          'id_sekolah' => $rows->id_sekolah,
          'nama_sekolah' => $rows->nama_sekolah,
          'kabupaten' => $rows->kabupaten
      );
      // var_dump($session_data);
      // exit;
      $this->session->set_userdata($session_data);
    }
      if ($this->session->userdata('id_user_role') == 1) {
        redirect('superadminclient');
      } elseif ($this->session->userdata('id_user_role') == 2) {
        redirect('adminclient');
      } elseif ($this->session->userdata('id_user_role') == 3) {
        redirect('guruclient');
      } elseif($this->session->userdata('id_user_role') == 4){
        redirect('siswaclient');
      } else {
        redirect('userlogin');
      }
    } else {
      $this->session->set_flashdata('result', 'Login gagal');
      redirect('login');
    }
    redirect('login');
  }

  public function reg()
  {
    $data['title'] = 'registrasi';
    $this->load->view('header1', $data, FALSE);
    $this->load->view('login/registrasi', $data, FALSE);
    $this->load->view('footer', $data, FALSE);
  }

  public function reg_process()
  {
    $this->API = "http://localhost:8080/antrian/user";
    $data = array(
      'id_sosmed'          => $this->input->post('id_sosmed'),
      'username'         => $this->input->post('username'),
      'email'          => $this->input->post('email'),
      'password'         => $this->input->post('password'),
      'status'          => $this->input->post('status'),
      'nama_user'          => $this->input->post('nama_user'),
      'telepom'          => $this->input->post('telepom'),
      'alamat'          => $this->input->post('alamat'),
      'tgl_lhr_user'          => $this->input->post('tgl_lhr_user'),
      'foto_user'          => $this->input->post('nama'),
      'id_kota'          => $this->input->post('nama'),
    );

    $update =  $this->curl->simple_post($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
    if ($update) {
      $this->session->set_flashdata('result', 'Regsitrasi Berhasil,please wait for verification');
    } else {
      $this->session->set_flashdata('result', 'Registrasi Gagal');
    }
    redirect('login', 'refresh');
  }
  public function out()
  {
    $this->session->sess_destroy();
    redirect('login', 'refresh');
  }
}

/* End of file Home.php */
