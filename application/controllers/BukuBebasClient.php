<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BukuBebasClient extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');

    $this->API = base_url('api/BukuBebas');
    $this->API1 = base_url('api/Sekolah');

  }

  public function index()
  {
    $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Buku";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/buku_bebas', $data);
  }
  public function post()
  {

    $params = array('id_sekolah' =>  $this->uri->segment(3));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Tambah Data buku";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/post/buku_bebas', $data, FALSE);
  }

  public function post_process()
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

      $insert = $this->curl->simple_post($this->API, $data);

      if ($insert) {
        $this->session->set_flashdata('result', '');

        redirect('BukuBebasClient', 'refresh');
      } else {
        $this->session->set_flashdata('result', '');
      }
      redirect('BukuBebasClient', 'refresh');
    }
  }


  public function put()
  {
    $params = array('id_buku_bebas' => $this->uri->segment(3));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Edit Data Sekolah";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/put/buku_bebas', $data);
  }
  public function put_process()
  {
    $pdf_file = $_FILES['pdf_file']['name'];
    $cover = $_FILES['cover']['name'];
    $nama_buku     = $this->input->post('nama_buku');
    $diskripsi     = $this->input->post('diskripsi');
    if ($pdf_file != ''  || $cover != '' || $nama_buku != '' ||$diskripsi != '') {
      $config['upload_path'] = 'file_buku/bebas';
      $config['allowed_types'] = 'pdf';

      $this->load->library('upload', $config, 'pdf_file_upload');

      if (!is_dir(FCPATH . 'file_buku\\cover')) {
        mkdir(FCPATH . 'file_buku\\cover', 0777, true);
      }

      $config['upload_path'] = 'file_buku/cover';
      $config['allowed_types'] = 'jpg|png';

      $this->load->library('upload', $config, 'cover_upload');

      if ($pdf_file != '' && $this->pdf_file_upload->do_upload('pdf_file')) {
        unlink(FCPATH . 'file_buku\bebas\\' . $this->input->post('old_pdf_file'));

        $pdf_file = $this->pdf_file_upload->data('file_name');
      } else {
        $pdf_file = $this->input->post('old_pdf_file');
      }

      if ($cover != '' && $this->cover_upload->do_upload('cover')) {
        unlink(FCPATH . 'file_buku\cover\\' . $this->input->post('old_cover'));

        $cover = $this->cover_upload->data('file_name');
      } else {
        $cover = $this->input->post('old_cover');
      }

      $data = array(
        'id_buku_bebas'       => $this->input->post('id_buku_bebas'),
        'id_sekolah'    => $this->input->post('id_sekolah'),
        'nama_buku'     => $this->input->post('nama_buku'),
        'diskripsi'     => $this->input->post('diskripsi'),
        'cover'         => $cover,
        'pdf_file'      => $pdf_file,
      );

      $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));

      if ($update) {
        $this->session->set_flashdata('result', 'Update Data  Berhasil');
      } else {
        $this->session->set_flashdata('result', 'Update Data  Gagal');
      }

      redirect('BukuBebasClient');
    }
  }
  public function delete()
  {
    $params = array('id_buku_bebas' =>  $this->uri->segment(3));
    $delete =  $this->curl->simple_delete($this->API, $params);
    if ($delete) {
      $this->session->set_flashdata('result', 'Hapus Data Berhasil');
    } else {
      $this->session->set_flashdata('result', 'Hapus Data Gagal');
    }
    redirect('BukuBebasClient');
  }
  public function detail()
  {
    $uri = array('id_buku_bebas' =>  $this->uri->segment(3));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API, $uri));
    $data['title'] = "Detail PDF";  
    $this->load->view('admin/adminbar');
    $this->load->view('admin/users/details_bebas', $data);
  }


  // GURU


  public function post_buku()
  {

    $params = array('id_sekolah' =>  $this->uri->segment(3));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Tambah Data buku";
    $this->load->view('guru/header');
    $this->load->view('guru/gurubar');
    $this->load->view('guru/post/buku_bebas', $data, FALSE);
    $this->load->view('footer');
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

      $insert = $this->curl->simple_post($this->API, $data);

      if ($insert) {
        $this->session->set_flashdata('result', '');

        redirect('GuruClient/buku_bebas', 'refresh');
      } else {
        $this->session->set_flashdata('result', '');
      }
      redirect('GuruClient/buku_bebas', 'refresh');
    }
  }

  public function put_buku_bebas()
  {
    $params = array('id_buku_bebas' => $this->uri->segment(3));
    $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Edit Data Sekolah";
    $this->load->view('guru/header');
    $this->load->view('guru/gurubar');
    $this->load->view('guru/put/buku_bebas', $data);
    $this->load->view('footer');
  }
  public function put_process_buku_bebas()
  {
    $pdf_file = $_FILES['pdf_file']['name'];
    $cover = $_FILES['cover']['name'];
    $nama_buku     = $this->input->post('nama_buku');
    $diskripsi     = $this->input->post('diskripsi');
    
    if ($pdf_file != ''  || $cover != '' || $nama_buku != '' ||$diskripsi != '') {
      $config['upload_path'] = 'file_buku/bebas';
      $config['allowed_types'] = 'pdf';

      $this->load->library('upload', $config, 'pdf_file_upload');

      if (!is_dir(FCPATH . 'file_buku\\cover')) {
        mkdir(FCPATH . 'file_buku\\cover', 0777, true);
      }

      $config['upload_path'] = 'file_buku/cover';
      $config['allowed_types'] = 'jpg|png';

      $this->load->library('upload', $config, 'cover_upload');

      if ($pdf_file != '' && $this->pdf_file_upload->do_upload('pdf_file')) {
        unlink(FCPATH . 'file_buku\bebas\\' . $this->input->post('old_pdf_file'));

        $pdf_file = $this->pdf_file_upload->data('file_name');
      } else {
        $pdf_file = $this->input->post('old_pdf_file');
      }

      if ($cover != '' && $this->cover_upload->do_upload('cover')) {
        unlink(FCPATH . 'file_buku\cover\\' . $this->input->post('old_cover'));

        $cover = $this->cover_upload->data('file_name');
      } else {
        $cover = $this->input->post('old_cover');
      }

      $data = array(
        'id_buku_bebas'       => $this->input->post('id_buku_bebas'),
        'id_sekolah'    => $this->input->post('id_sekolah'),
        'nama_buku'     => $this->input->post('nama_buku'),
        'diskripsi'     => $this->input->post('diskripsi'),
        'cover'         => $cover,
        'pdf_file'      => $pdf_file,
      );

      $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));

      if ($update) {
        $this->session->set_flashdata('result', 'Update Data Berhasil');
      } else {
        $this->session->set_flashdata('result', 'Update Data Gagal');
      }
        redirect('GuruClient/buku_bebas');
      }
    }
    public function delete_buku_bebas()
  {
    $params = array('id_buku_bebas' =>  $this->uri->segment(3));
    $delete =  $this->curl->simple_delete($this->API, $params);
    if ($delete) {
      $this->session->set_flashdata('result', 'Hapus Data Berhasil');
    } else {
      $this->session->set_flashdata('result', 'Hapus Data Gagal');
    }
    redirect('GuruClient/buku_bebas');
  }
  }

