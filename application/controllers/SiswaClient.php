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
    $this->API = base_url('api/Buku');
    $this->API1 = base_url('api/Ulasan');
    $this->API2 = base_url('api/Sekolah');
    $this->API3 = base_url('api/Siswa');
    $this->API4 = base_url('api/User');
    $this->API5 = base_url('api/Split');
    $this->API6 = base_url('api/BukuBebas');
    $this->API7 = base_url('api/DetailUlasan');
    $this->API8 = base_url('api/DetailNilai');

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
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['user'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['sekolah'] = json_decode($this->curl->simple_get($this->API2));
        $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API6, $params));
        $data['title'] = "Dashboard";
        $this->load->view('user/index', $data, FALSE);
      }
    }
  }
  public function nilai()
  {
    $params = array('id_user' =>  $this->session->userdata('id_user'));
    $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API7, $params));
    $data['kategori'] = json_decode($this->curl->simple_get($this->API8, $params));
    $data['title'] = "Buku";
    $this->load->view('user/nilai/nilai_siswa', $data, FALSE);
  }
  public function buku()
  {
    $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API6, $params));
    $data['title'] = "Buku";
    $this->load->view('user/buku', $data, FALSE);
  }
  public function post_buku()
  {

    $params = array('id_sekolah' =>  $this->uri->segment(3));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API6, $params));
    $data['title'] = "Tambah Data buku";
    $this->load->view('user/post/buku_bebas', $data, FALSE);
  }

  public function post_process_buku()
  {
    $pdf_file = $_FILES['pdf_file']['name'];
    $cover = $_FILES['cover']['name'];

    if ($pdf_file != '' && $cover != '') {
      $config['upload_path'] = 'file_buku/bebas';
      $config['allowed_types'] = 'pdf';
      // $config['max_size']	= '4000';


      $this->load->library('upload', $config, 'pdf_file_upload');

      if (!is_dir(FCPATH . 'file_buku\\cover')) {
        mkdir(FCPATH . 'file_buku\\cover', 0777, true);
      }

      $config['upload_path'] = 'file_buku/cover';
      $config['allowed_types'] = 'jpg|png';

      $this->load->library('upload', $config, 'cover_upload');

      if ($this->pdf_file_upload->do_upload('pdf_file')) {
        $pdf_file = $this->pdf_file_upload->data('file_name');
      }

      if ($this->cover_upload->do_upload('cover')) {
        $cover = $this->cover_upload->data('file_name');
      }

      $data = array(
        'id_sekolah'    => $this->input->post('id_sekolah'),
        'nama_buku'     => $this->input->post('nama_buku'),
        'diskripsi'     => $this->input->post('diskripsi'),
        'cover'         => $cover,
        'pdf_file'      => $pdf_file,
      );

      $insert = $this->curl->simple_post($this->API6, $data);

      if ($insert) {
        $this->session->set_flashdata('result', '');

        redirect('SiswaClient/buku', 'refresh');
      } else {
        $this->session->set_flashdata('result', '');
      }
      redirect('SiswaClient/buku', 'refresh');
    }
  }




  public function baca()
  {
    $params = array('id_buku_bebas' => $this->uri->segment(3));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API6, $params));
    $data['title'] = "Buku Sekolah";
    $this->load->view('user/baca_buku', $data);
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
    $data['title'] = "Buku";

    if (!$this->session->has_userdata('buku') && !$this->session->has_userdata('ulasan')) {
      $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));

      $buku = json_decode($this->curl->simple_get($this->API, $params));
      $ulasan = json_decode($this->curl->simple_get($this->API1));

      $this->session->set_userdata('buku', $buku);
      $this->session->set_userdata('ulasan', $ulasan);
    }

    $data['buku'] = $this->session->userdata('buku');
    $data['ulasan'] = $this->session->userdata('ulasan');

    $this->load->view('user/literasi', $data, FALSE);
  }
  public function ulasan()
  {
    $data['user'] = json_decode($this->curl->simple_get($this->API4));


    if (!$this->session->has_userdata('buku') && !$this->session->has_userdata('ulasan')) {
      $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
      $buku = json_decode($this->curl->simple_get($this->API, $params));
      $ulasan = json_decode($this->curl->simple_get($this->API1));

      $this->session->set_userdata('buku', $buku);
      $this->session->set_userdata('ulasan', $ulasan);
    }

    $data['buku'] = $this->session->userdata('buku');
    $data['ulasan'] = $this->session->userdata('ulasan');

    $data['title'] = "Buku";

    $this->load->view('user/post/ulasan', $data, FALSE);
  }

  // public function literasi()
  // {
  //   $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
  //   $data['buku'] = json_decode($this->curl->simple_get($this->API,$params));
  //   $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
  //   $data['title'] = "Buku";
  //   $this->load->view('user/literasi', $data, FALSE);
  // }

  // public function ulasan()
  // {
  //   $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
  //   $data['user'] = json_decode($this->curl->simple_get($this->API4));
  //   $data['buku'] = json_decode($this->curl->simple_get($this->API,$params));
  //   $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
  //   $data['title'] = "Buku";
  //   $this->load->view('user/post/ulasan', $data, FALSE);
  // }
  public function ulasan_process()
  {
    $nama = $this->input->post('nama');
    $id_user = $this->input->post('id_user');
    $judul = $this->input->post('nama_buku');
    $ket_siswa = $this->input->post('ket_siswa');
    $text_buku = $this->input->post('text_buku');
    $tanggal = $this->input->post('tanggal');
    $id_buku = $this->input->post('id_buku');
    $id_sekolah = $this->input->post('id_sekolah');
    $data = array(
      'id_buku' => $id_buku,
      'id_user' => $id_user,
      'nama' => $nama,
      'judul' => $judul,
      'ket_siswa' => $ket_siswa,
      'text_buku' => $text_buku,
      'id_sekolah' => $id_sekolah,
      'tanggal' => $tanggal

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
    $file_name = $_FILES['foto']['name'];
    if ($file_name != '') {
      $config['upload_path'] = 'img/foto';
      $config['allowed_types'] = '*';

      $new_name = $file_name;
      $config['file_name'] = $new_name;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('foto')) {
        // redirect($_SERVER['HTTP_REFERER']);
        echo "gagal";
      } else {
        $dataFile  = $this->upload->data();
        $file_name = $dataFile['file_name'];
        $data = array(
          "id_user" => $this->input->post('id_user'),
          'foto' => $file_name,
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
  }
}
