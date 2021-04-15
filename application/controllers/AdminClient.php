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
    $data['guru'] = json_decode($this->curl->simple_get($this->API));
    $data['title'] = "user";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/users/guru', $data);

}
public function siswa()
{
    $data['siswa'] = json_decode($this->curl->simple_get($this->API1));
    $data['title'] = "user";
    $this->load->view('admin/adminbar');
    $this->load->view('admin/users/siswa', $data);

}
}
?>