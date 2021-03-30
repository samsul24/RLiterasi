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

        $this->API2 = "http://localhost:8080/RLiterasi/api/user";
        $this->API3 = "http://localhost:8080/RLiterasi/api/guru";
        $this->API4= "http://localhost:8080/RLiterasi/api/siswa";
    }

    public function index()
    {
        if($this->session->userdata('id_user_role')){
        $username = $this->session->userdata('username');
        $data['results'] = $this->login_model->get_user($username);
        $data['title'] = "Dashboard Super Admin";
        $this->load->view('header');
        $this->load->view('superbar');
        $this->load->view('superadmin/index', $data);
        $this->load->view('footer');
    }
}

public function admin()
{
    $data['guru'] = json_decode($this->curl->simple_get($this->API2));
    $data['title'] = "user";
    $this->load->view('header');
    $this->load->view('superbar');
    $this->load->view('admin/useradmin3', $data);
    $this->load->view('footer');

}
    public function guru()
    {
        $data['guru'] = json_decode($this->curl->simple_get($this->API3));
        $data['title'] = "user";
        $this->load->view('header');
        $this->load->view('superbar');
        $this->load->view('admin/useradmin3', $data);
        $this->load->view('footer');
    
    }
    public function siswa()
    {
        $data['siswa'] = json_decode($this->curl->simple_get($this->API4));
        $data['title'] = "user";
        $this->load->view('header');
        $this->load->view('superbar');
        $this->load->view('admin/useradmin4', $data);
        $this->load->view('footer');
    }
}
?>