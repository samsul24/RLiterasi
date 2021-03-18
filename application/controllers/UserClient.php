<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/RLiterasi/api/user";
        $this->API3 = "http://localhost:8080/RLiterasi/api/guru";
        $this->API4= "http://localhost:8080/RLiterasi/api/siswa";
    }

    public function index()
    {
        $data['user'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "user";
        $this->load->view('header1');
        $this->load->view('bar');
        $this->load->view('admin/useradmin', $data);
        $this->load->view('footer');
       
    }
    public function guru()
    {
        $data['guru'] = json_decode($this->curl->simple_get($this->API3));
        $data['title'] = "user";
        $this->load->view('header1');
        $this->load->view('bar');
        $this->load->view('admin/useradmin3', $data);
        $this->load->view('footer');
       
    }
    public function siswa()
    {
        $data['siswa'] = json_decode($this->curl->simple_get($this->API4));
        $data['title'] = "user";
        $this->load->view('header1');
        $this->load->view('bar');
        $this->load->view('admin/useradmin4', $data);
        $this->load->view('footer');
       
    }
    public function post()
    {
      $data['title'] = "Tambah Data User";
      $this->load->view('header0');
      $this->load->view('bar');
      $this->load->view('data/post/user', $data);
      $this->load->view('footer');
    }
  
    public function post_process()
    {
        $data = array(
            'foto'         => $this->input->post('foto'),
            'nis'         => $this->input->post('nis'),
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'nama'             => $this->input->post('nama'),
            'jenis_kelamin'    => $this->input->post('jenis_kelamin'),
            'kelas'            => $this->input->post('kelas'),
            'jurusan'          => $this->input->post('jurusan'),
            'id_user_role'     => $this->input->post('id_user_role'),
        );
        $insert =  $this->curl->simple_post($this->API,$data);
        if ($insert) {
            // echo"berhasil";
            $this->session->set_flashdata('result', 'Data User Berhasil Ditambahkan');
        } else {
            // echo"gagal berhasil";
            $this->session->set_flashdata('result', 'Data User Gagal Ditambahkan');
        }
        // print_r($insert);
        // die;
        redirect('userclient');
      }
    

    public function put()
    {
        $params = array('id'=>$this->uri->segment(3));
        $data['user'] = json_decode($this->curl->simple_get($this->API,$params));
        $data['title'] = "Edit Data User";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/put/user', $data);
        $this->load->view('footer');

    }
    public function put_process()
    {
        $data = array(
            'id_user'         => $this->input->post('id_user'),
            'foto'         => $this->input->post('foto'),
            'nis'         => $this->input->post('nis'),
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'nama'             => $this->input->post('nama'),
            'jenis_kelamin'    => $this->input->post('jenis_kelamin'),
            'kelas'            => $this->input->post('kelas'),
            'jurusan'          => $this->input->post('jurusan'),
            'id_user_role'     => $this->input->post('id_user_role'),
            
        );
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
    
        if ($update) {
            echo"berhasil";
            // $this->session->set_flashdata('result', 'Update Data User Berhasil');
        } else {
            echo"gagal";
            // $this->session->set_flashdata('result', 'Update Data User Gagal');
        }
        // print_r($update);
        // exit;
        redirect('userclient');
    }
    public function delete()
    {
        $params = array('id' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data User Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data User Gagal');
        }
        redirect('userclient');
    }
    
}
?>