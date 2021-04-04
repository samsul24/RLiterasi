<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  
    $this->load->library('curl');
    $this->load->library('session');
    $this->load->model('login_model');
    $this->load->model('regist_model');
    $this->load->library('email');
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
        $this->session->set_userdata($session_data);
      }
      if ($this->session->userdata('id_user_role') == 1) {
        redirect('superadminclient');
      } elseif ($this->session->userdata('id_user_role') == 2) {
        redirect('adminclient');
      } elseif ($this->session->userdata('id_user_role') == 3) {
        redirect('guruclient');
      } elseif ($this->session->userdata('id_user_role') == 4) {
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
    $this->load->view('header3', $data, FALSE);
    $this->load->view('login/registrasi', $data, FALSE);
    // $this->load->view('footer', $data, FALSE);
  }

  public function reg_process()
  {
    // $this->form_validation->set_rules('nama_sekolah','Name' ,'required|trim');
    // $this->form_validation->set_rules('email','Email Address' ,'required|trim|valid_email|is_unique[user.email]');
    // $this->form_validation->set_rules('npsn','Password' ,'required');
    // if($this->form_validation->run()){
    // error_reporting(E_ALL);
    // require '../PHPMailer/src/PHPMailer.php';
    // require '../PHPMailer/src/SMTP.php';
    // require '../PHPMailer/src/Exception.php';
    $verification_key = md5(rand());
    $this->API = "http://localhost:8080/RLiterasi/api/sekolah";
    $data = array(
      // 'foto'         => 'null',
      // 'nis'         => 'null',
      // 'username'         => $this->input->post('username'),
      // 'password'         => $this->input->post('password'),
      // 'nama'             => 'null',
      // 'jenis_kelamin'    =>'null',
      // 'kelas'            => 'null',
      // 'email'          => $this->input->post('email'),
      // 'jurusan'          => 'null',
      // 'id_user_role'     => '0'
      // 'id_sekolah'          => $this->input->post('id_sekolah'),
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
    $update = $this->regist_model->insert($data);
    if ($update > 0) {
      $resultText = "Harap Verifikasi EMail untuk Login";
      $message = "<p> HI" . $this->input->post('nama_sekolah') . "</p>
        <p>Terimakasih sudah registrasi, tahap selanjutnya silahkan klik <a href='" . base_url() . "login/verify_email/" . $verification_key . "'>link</a>.</p>
        <p>Terimakasih,</p>";
      // $config['protocol'] = 'smtp'; 
      // $config['smtp_host'] = 'smtp.googlemail.com'; 
      // $config['smtp_port'] = 465;
      // $config['smtp_user'] = 'ensiserver2021@gmail.com';
      // $config['smtp_pass'] = '01101999sayangS3m';
      // $config['smtp_crypto'] = 'ssl'; 
      // $config['mailtype'] ='text'; 
      // $config['smtp_timeout'] = '4'; 
      // $config['charset'] = 'iso-8859-1';
      // $config['wordwrap'] = TRUE;

      
      $config = [
        'protocol' => 'smtp',
        'smtp_host' => 'smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'ensiserver2021@gmail.com',
        'smtp_pass' => '01101999sayangS3m',
        'smtp_crypto' => 'ssl',
        'mailtype' => 'html',
        'smtp_timeout' => '4',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
      ];

      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('ensiserver2021@gmail.com');
      $this->email->to($this->input->post('email'));
      $this->email->cc('ensiserver2021@gmail.com');
      $this->email->subject($resultText);
      $this->email->message($message);
      
      // var_dump($data = $this->email->send());
      
      // exit;

      if (!$data = $this->email->send()) {
        echo "gagal";
        // $gagal=array('gagal'=>'cek server anda');
        // $this->load->view('welcome_message', $gagal);
      } else {
        echo "berhasil";

        // $berhasil=array('gagal'=>'Selamat registrasi anda kami proses, cek email anda');
        // $this->load->view('welcome_message', $berhasil);
      }
      // print_r('gagaal');
      exit;
    }

    // redirect('login/reg', 'refresh');
  }

  function verify_email()
  {

    if ($this->uri->segment(3)) {
      $verification_key = $this->uri->segment(3);
      if ($this->regist_model->verify_email($verification_key)) {
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
    redirect('login', 'refresh');
  }
}

/* End of file Home.php */
