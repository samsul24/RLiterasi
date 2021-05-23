<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('Login_model');   
        $this->API = "http://localhost:8080/RLiterasi/api/Guru";
        $this->API1= "http://localhost:8080/RLiterasi/api/Siswa";    
        $this->API2= "http://localhost:8080/RLiterasi/api/Ulasan";    
        $this->API3= "http://localhost:8080/RLiterasi/api/DetailUlasan";
        $this->API4= "http://localhost:8080/RLiterasi/api/DetailBuku";
    $this->load->library('form_validation');


    }

    public function index()
    {
        if($this->session->userdata('id_user_role')){
        $username = $this->session->userdata('username');
        $data['results'] = $this->Login_model->get_user($username);
        $data['title'] = "Dashboard Admin";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/dashboard', $data);
    }
}
public function guru()
{
    $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
    $data['guru'] = json_decode($this->curl->simple_get($this->API,$params));
    $data['title'] = "user";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/users/guru', $data);

}
public function siswa()
{
    $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
    $data['siswa'] = json_decode($this->curl->simple_get($this->API1,$params));
    $data['title'] = "user";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/users/siswa', $data);

}
public function buku()
{
    $data['buku'] = json_decode($this->curl->simple_get($this->API4));
    $data['title'] = "Buku";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/buku', $data);
}
public function ulasan()
{
    $data['ulasan'] = json_decode($this->curl->simple_get($this->API2));
    $data['title'] = "Ulasan";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/ulasan', $data);
   
}
public function detail()
  {
      if($this->session->userdata('id_user_role')){
      $username = $this->session->userdata('username');
      $data['results'] = $this->Login_model->get_user($username);
      $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3));
      $data['title'] = "Detail Ulasan";
      $this->load->view('admin/adminbar');
      $this->load->view('admin/detail_ulasan', $data, False);

  }
}
  public function detail_ulasan()
  {
    $uri = array('id_ulasan' =>  $this->uri->segment(3));
    $data['ulasan'] = json_decode($this->curl->simple_get($this->API2,$uri));
    $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3));
    $data['title'] = "Detail Ulasan";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/users/detail_ulasan', $data);
   
  }

  public function proses_detail() {

    $this->form_validation->set_rules('ulasan_guru','Ulasan Guru','trim|required');
    // $this->form_validation->set_rules('hasil','Hasil','trim|required');
    // $this->form_validation->set_rules('id_ulasan','Id Ulasan','trim|required');
    if($this->form_validation->run() === true)
    {
      $id_ulasan   = $this->input->post('id_ulasan');
      $ulasan_siswa   = $this->input->post('ket_siswa');
      $nama   = $this->input->post('nama');
      $ulasan_guru    = $this->input->post('ulasan_guru');
      $hasil         = $this->input->post('hasil');

      

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
    public function delete_guru()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Guru Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Guru Gagal');
        }
        redirect('AdminClient/guru');
    }
    public function delete_siswa()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API1, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Siswa Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Siswa Gagal');
        }
        redirect('AdminClient/siswa');
    }
    public function nilai()
    {
        if($this->session->userdata('id_user_role')){
        $username = $this->session->userdata('username');
        $data['results'] = $this->Login_model->get_user($username);
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3));
        $data['title'] = "Detail Ulasan";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/nilai', $data, False);
  
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
      redirect('AdminClient/nilai');
  }
}
?>