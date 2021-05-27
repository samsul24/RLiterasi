<?php

defined('BASEPATH') or exit('No direct script access allowed');

class GuruClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/RLiterasi/api/Buku";
        $this->API1 = "http://localhost/RLiterasi/api/Ulasan";
        $this->API2= "http://localhost/RLiterasi/api/Siswa";
        $this->API3= "http://localhost/RLiterasi/api/DetailUlasan";
        $this->API4 = "http://localhost/RLiterasi/api/DetailBuku";

        $this->load->model('Login_model');
    $this->load->library('form_validation');



    }

    public function index()
    {
        if($this->session->userdata('id_user_role')){
        $username = $this->session->userdata('username');
        $data['results'] = $this->Login_model->get_user($username);
        $data['title'] = "Dashboard";
        $this->load->view('guru/index', $data, FALSE);
    }
}
    public function galeri()
    {
        $data['title'] = "Buku";
        $this->load->view('guru/galeri', $data, FALSE);
    }
    public function akses()
    {
        $data['buku'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Buku";
        $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/akses', $data, FALSE);
        $this->load->view('footer');

    }
    public function siswa()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['siswa'] = json_decode($this->curl->simple_get($this->API2,$params));
        $data['title'] = "user";
        $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/user/siswa', $data);
        $this->load->view('footer');
    }
    public function buku()
    {
        $data['buku'] = json_decode($this->curl->simple_get($this->API4));
        $data['title'] = "Buku";
        $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/buku', $data);
        $this->load->view('footer');
    }
    public function buku1()
    {
      $data['title'] = "Buku";
      $this->load->view('guru/user/buku', $data, FALSE);
    }
    public function ulasan()
    {
        $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
        $data['title'] = "Ulasan";
        $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/ulasan', $data);
        $this->load->view('footer');
       
    }
    public function delete()
    {
        $params = array('id_ulasan' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API1, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Gagal');
        }
        redirect('GuruClient/ulasan');
    }
    public function profile()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $data['guru'] = json_decode($this->curl->simple_get($this->API3, $params));
        $this->load->view('guru/profile', $data);
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
  public function detail()
  {
      if($this->session->userdata('id_user_role')){
      $username = $this->session->userdata('username');
      $data['results'] = $this->Login_model->get_user($username);
    //   $data['ulasan'] = json_decode($this->curl->simple_get($this->API));
      $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3));
      $data['title'] = "Detail Ulasan";
      $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
      $this->load->view('guru/detail_ulasan', $data, FALSE);
      $this->load->view('footer');

  }
}
  public function detail_ulasan()
  {
    $uri = array('id_ulasan' =>  $this->uri->segment(3));
    $data['ulasan'] = json_decode($this->curl->simple_get($this->API1,$uri));
    $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3));
    $data['title'] = "Detail Ulasan";
    $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/user/detail_ulasan', $data);
        $this->load->view('footer');
   
  }

  public function proses_detail() {

    $this->form_validation->set_rules('ulasan_guru','Ulasan Guru','trim|required');
    // $this->form_validation->set_rules('hasil','Hasil','trim|required');
    // $this->form_validation->set_rules('hasil','Hasil','trim|required');
    // $this->form_validation->set_rules('id_ulasan','Id Ulasan','trim|required');

    if($this->form_validation->run() === true)
    {
      $id_ulasan   = $this->input->post('id_ulasan');
      $ulasan_siswa   = $this->input->post('ket_siswa');
      $nama   = $this->input->post('nama');
      $ulasan_guru    = $this->input->post('ulasan_guru');
      similar_text($ulasan_siswa, $ulasan_guru, $hasil);

      

      $data = array(
              'id_ulasan' => $id_ulasan,
              'nama' =>$nama,
              'ulasan_siswa' =>$ulasan_siswa,
              'ulasan_guru' =>$ulasan_guru,
              'hasil' =>$hasil
            );

            $insert =   $this->curl->simple_post($this->API3,$data);
            // var_dump($insert);
            // exit;
      if($insert){
          echo"berhasil";   
          redirect('GuruClient/detail');
          
        } else {
            echo"gagal";
        }
    } else{
        redirect('GuruClient/detail');
    }
    }
    public function nilai()
    {
        if($this->session->userdata('id_user_role')){
        $username = $this->session->userdata('username');
        $data['results'] = $this->Login_model->get_user($username);
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3));
        $data['title'] = "Nilai";
        $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/user/nilai', $data);
        $this->load->view('footer');
  
    }
  }
  public function delete_nilai()
  {
      $params = array('id_detail_ulasan' =>  $this->uri->segment(3));
      $delete =  $this->curl->simple_delete($this->API3, $params);
      if ($delete) {
          $this->session->set_flashdata('result', 'Hapus Data nilai Berhasil');
      } else {
          $this->session->set_flashdata('result', 'Hapus Data nilai Gagal');
      }
      redirect('GuruClient/nilai');
  }

}
