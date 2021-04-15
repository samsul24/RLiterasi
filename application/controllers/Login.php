<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->library('curl');
    $this->load->library('session');
    $this->load->model('Login_model');
    $this->load->model('Regist_model');
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
    $check = $this->Login_model->login($user, $password);
    if ($check) {
      foreach ($check as $rows) {
        $session_data = array(
          'username' => $rows->username,
          'id_user_role' => $rows->id_user_role,
          'id_user' => $rows->id_user,
          'id_sekolah' => $rows->id_sekolah,
          'nama_sekolah' => $rows->nama_sekolah,
          'visi' => $rows->visi,
          'misi' => $rows->misi,
          'email' => $rows->email,
          'no_telp' => $rows->no_telp,
          'alamat_sekolah' => $rows->alamat_sekolah,
          'website' => $rows->website,
          'kabupaten' => $rows->kabupaten,
        );
        $this->session->set_userdata($session_data);
      }
      if ($this->session->userdata('id_user_role') == 1) {
        redirect('SuperAdminClient');
      } elseif ($this->session->userdata('id_user_role') == 2) {
        redirect('AdminClient');
      } elseif ($this->session->userdata('id_user_role') == 3) {
        redirect('GuruClient');
      } elseif ($this->session->userdata('id_user_role') == 4) {
        redirect('SiswaClient');
      } else {
        redirect('UserLogin');
      }
    } else {
      $this->session->set_flashdata('result', 'Login gagal');
      redirect('Login');
    }
    redirect('Login');
  }

  public function reg()
  {
    $data['title'] = 'registrasi';
    $this->load->view('header3', $data, FALSE);
    $this->load->view('login/registrasi', $data, FALSE);
  }

  public function reg_process()
  {

    $verification_key = md5(rand());
    $this->API = "http://localhost:8080/RLiterasi/api/Sekolah";
    $data = array(

      'nama_sekolah'         => $this->input->post('nama_sekolah'),
      'npsn'                 => $this->input->post('npsn'),
      'nss'                  => 'null',
      'alamat_sekolah'          => 'null',
      'kode_pos'                => 'null',
      'no_telp'                 => 'null',
      'kelurahan'               => 'null',
      'kecamatan'               => 'null',
      'kabupaten'               => 'null',
      'provinsi'                => 'null',
      'website'                 => 'null',
      'email'                   => $this->input->post('email'),
      'visi'                    => 'null',
      'misi'                    => 'null',
      'verification_key'        =>  $verification_key
    );
    $update = $this->Regist_model->insert($data);
    if ($update > 0) {
      $resultText = "Harap Verifikasi EMail untuk Login";
      $message = "<p> HI " . $this->input->post('nama_sekolah') . "</p>
        <p>Terimakasih sudah registrasi, tahap selanjutnya silahkan klik <a href='" . base_url() . "login/verify_email/" . $verification_key . "'>link</a>.</p>
        <p>Terimakasih,</p>";

      $config = [
        'protocol' => 'smtp',
        'smtp_ssl' => 'auto',
        'smtp_host' => 'smtp.googlemail.com',
        'smtp_user' => 'ensiserver2021@gmail.com',
        'smtp_pass' => 'literasi2021',
        'smtp_port' => 465,
        'smtp_crypto' => 'ssl',
        'mailtype' => 'html',
        'smtp_timeout' => '4',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
      ];

      $this->load->library('email', $config);
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");
      $this->email->from('ensiserver2021@gmail.com');
      $this->email->to($this->input->post('email'));
      $this->email->cc('ensiserver2021@gmail.com');
      $this->email->subject($resultText);
      $this->email->message($message);

      if ($data = $this->email->send()) {
        $berhasil = array('berhasil' => 'Selamat registrasi anda kami proses, cek email anda');
        $this->load->view('welcome_message', $berhasil);
      } else {
        $gagal = array('gagal' => 'cek server anda');
        $this->load->view('welcome_message', $gagal);
      }
      redirect('Login/', 'refresh');
    }
  }

  function verify_email()
  {

    if ($this->uri->segment(3)) {
      $verification_key = $this->uri->segment(3);
      if ($this->Regist_model->verify_email($verification_key)) {
        $data['message'] = '<h1 align="center"> EMAIL SUdah diverifikasi silahkan anda bisa masuk <a href="' . base_url() . 'Login">here</a></h1>';
      } else {
        $data['message'] = '<h1 align="center">Invalid Link</h1>';
      }

      $this->load->view('login/email_verification', $data);
    }
  }

  public function out()
  {
    $this->session->sess_destroy();
    redirect('Login', 'refresh');
  }
}
