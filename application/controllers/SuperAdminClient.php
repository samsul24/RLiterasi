<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SuperAdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('super_model');       
         $this->load->model('login_model');       

         $this->API1 = base_url('api/Admin');
         $this->API2 = base_url('api/User');
        $this->API3 = base_url('api/Guru');
        $this->API4= base_url('api/Siswa');
    }

    public function index()
    {
        if($this->session->userdata('id_user_role')){
        $username = $this->session->userdata('username');
        $data['users'] = json_decode($this->curl->simple_get($this->API2));

        $data['results'] = $this->login_model->get_user($username);
        $data['title'] = "Dashboard Super Admin";
        $this->load->view('superadmin/superbar');
        $this->load->view('superadmin/dasboard', $data);
    }
}

public function admin()
{
    $data['admin'] = json_decode($this->curl->simple_get($this->API1));
    $data['title'] = "user";
    $this->load->view('superadmin/superbar',true);
    $this->load->view('superadmin/users/admin', $data);

}
    public function guru()
    {
        $data['guru'] = json_decode($this->curl->simple_get($this->API3));
        $data['title'] = "user";
        $this->load->view('superadmin/superbar',true);
        $this->load->view('superadmin/users/guru', $data);
    
    }
    public function user()
    {
        $data['siswa'] = json_decode($this->curl->simple_get($this->API2));
        $data['title'] = "user";
        $this->load->view('superadmin/superbar',true);
        $this->load->view('superadmin/users/user', $data);
    }
    public function put()
    {
        $params = array('id_user'=>$this->uri->segment(3));
        $data['user'] = json_decode($this->curl->simple_get($this->API2,$params));
        $data['title'] = "Edit Data Sekolah";
        $this->load->view('superadmin/superbar',true);
          $this->load->view('superadmin/put/admin', $data);
      }
    public function delete_admin()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API1, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Admin Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Admin Gagal');
        }
        redirect('SuperAdminClient/admin');
    }
    public function delete_guru()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API3, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Guru Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Guru Gagal');
        }
        redirect('SuperAdminClient/guru');
    }
    public function delete_siswa()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API2, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Siswa Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Siswa Gagal');
        }
        redirect('SuperAdminClient/siswa');
    }
}
?>