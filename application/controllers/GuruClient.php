<?php

defined('BASEPATH') or exit('No direct script access allowed');

class GuruClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = base_url('api/Buku');
        $this->API1 = base_url('api/Ulasan');
        $this->API2= base_url('api/Siswa');
        $this->API3= base_url('api/DetailUlasan');
        $this->API4 = base_url('api/DetailBuku');
        $this->API5 = base_url('api/Split');
        $this->API6 = base_url('api/Sekolah');
        $this->API7 = base_url('api/Guru');
        $this->API8 = base_url('api/BukuBebas');
        $this->API9 = base_url('api/DetailNilai');

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
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['buku'] = json_decode($this->curl->simple_get($this->API4,$params));
        $data['title'] = "Buku";
        $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/buku', $data);
        $this->load->view('footer');
    }
    public function buku_bebas()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['buku_bebas'] = json_decode($this->curl->simple_get($this->API8,$params));
        $data['title'] = "Buku";
        $this->load->view('guru/header');
        $this->load->view('guru/gurubar');
        $this->load->view('guru/buku_bebas', $data);
        $this->load->view('footer');
    }
    public function buku1()
    {
      $data['title'] = "Buku";
      $this->load->view('guru/user/buku', $data, FALSE);
    }
    public function ulasan()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['ulasan'] = json_decode($this->curl->simple_get($this->API1,$params));
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
        $params = array('id_sekolah' =>  $this->uri->segment(3));
        $data['sekolah'] = json_decode($this->curl->simple_get($this->API6, $params));
        $this->load->view('guru/profile', $data);
    }
    public function profile_guru($id = null)
    {
        if ($id === null) {
            redirect('GuruClient');
          }
         $params = array('id_user' =>  $id);
        $data['guru'] = json_decode($this->curl->simple_get($this->API7, $params));
        $this->load->view('guru/user/profile_guru', $data);
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
        redirect('GuruClient/profile_guru/' . $this->input->post('id_user'));
      }
    }
  }
  public function detail()
  {
    if ($this->session->userdata('id_user_role')) {
        $username = $this->session->userdata('username');
        $data['results'] = $this->Login_model->get_user($username);
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3,$params));
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
    $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
    $data['ulasan'] = json_decode($this->curl->simple_get($this->API1, $uri));
    $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3,$params));
    $data['title'] = "Detail Ulasan";
    $this->load->view('guru/header'); 
        $this->load->view('guru/gurubar');
        $this->load->view('guru/user/detail_ulasan', $data);
        $this->load->view('footer');
   
  }

  public function proses_detail() {

    $id_ulasan   = $this->input->post('id_ulasan');
    $ulasan_siswa   = $this->input->post('ket_siswa');
    $nama   = $this->input->post('nama');
    $id_sekolah   = $this->input->post('id_sekolah');
    $ulasan_guru    = $this->input->post('text_buku');
    similar_text($ulasan_siswa, $ulasan_guru, $hasil);
    $data = array(
            'id_ulasan' => $id_ulasan,
            'nama' =>$nama,
            'ulasan_siswa' =>$ulasan_siswa,
            'ulasan_guru' =>$ulasan_guru,
            'id_sekolah' =>$id_sekolah,
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
        redirect('GuruClient/detail');
    }
    public function nilai()
    {
        if($this->session->userdata('id_user_role')){
        $username = $this->session->userdata('username');
        $data['results'] = $this->Login_model->get_user($username);
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3,$params));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API9,$params));
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
