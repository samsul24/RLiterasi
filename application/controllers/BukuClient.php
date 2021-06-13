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
    $data['buku'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Buku";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/buku', $data);
  }
  public function post()
  {

    $params = array('id_sekolah' =>  $this->uri->segment(3));
    $data['buku'] = json_decode($this->curl->simple_get($this->API, $params));
    $data['title'] = "Tambah Data buku";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/post/buku', $data, FALSE);
  }

  public function post_process()
  {
    $pdf_file = $_FILES['pdf_file']['name'];
    $cover = $_FILES['cover']['name'];

    if ($pdf_file != '' && $cover != '') {
      $config['upload_path'] = 'file_buku';
      $config['allowed_types'] = 'pdf';

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
        'cover'         => 'cover/' . $cover,
        'pdf_file'      => $pdf_file,
      );

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

  public function put()
  {
    $params = array('id_buku' => $this->uri->segment(3));
    $data['buku'] = json_decode($this->curl->simple_get($this->API2, $params));
    $data['title'] = "Edit Data Sekolah";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/put/buku', $data);
  }
  public function put_process()
  {
    $pdf_file = $_FILES['pdf_file']['name'];
    $cover = $_FILES['cover']['name'];

    if ($pdf_file != ''  || $cover != '') {
      $config['upload_path'] = 'file_buku';
      $config['allowed_types'] = 'pdf';

      $this->load->library('upload', $config, 'pdf_file_upload');

      if (!is_dir(FCPATH . 'file_buku\\cover')) {
        mkdir(FCPATH . 'file_buku\\cover', 0777, true);
      }

      $config['upload_path'] = 'file_buku/cover';
      $config['allowed_types'] = 'jpg|png';

      $this->load->library('upload', $config, 'cover_upload');

      if ($pdf_file != '' && $this->pdf_file_upload->do_upload('pdf_file')) {
        unlink(FCPATH . 'file_buku\\' . $this->input->post('old_pdf_file'));

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
        'id_buku'       => $this->input->post('id_buku'),
        'id_sekolah'    => $this->input->post('id_sekolah'),
        'nama_buku'     => $this->input->post('nama_buku'),
        'diskripsi'     => $this->input->post('diskripsi'),
        'cover'         => 'cover/' .$cover,
        'pdf_file'      => $pdf_file,
      );

      $update =  $this->curl->simple_put($this->API2, $data, array(CURLOPT_BUFFERSIZE => 10));

      if ($update) {
        $this->session->set_flashdata('result', 'Update Data User Berhasil');
      } else {
        $this->session->set_flashdata('result', 'Update Data User Gagal');
      }

      redirect('AdminClient/buku');
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
    $params = array('id_buku' => $this->uri->segment(3));
    $data['buku'] = json_decode($this->curl->simple_get($this->API2, $params));
    $data['title'] = "Edit Data Sekolah";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/split', $data);
  }
}
