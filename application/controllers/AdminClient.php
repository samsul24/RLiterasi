<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('admin_model');       
        $this->load->model('login_model');       
    }

    public function index()
    {
        if($this->session->userdata('id_user_role')){
        $username = $this->session->userdata('username');
        $data['results'] = $this->login_model->get_user($username);
        $data['title'] = "Dashboard Admin";
        $this->load->view('header1');
        $this->load->view('bar');
        $this->load->view('admin/index', $data);
        $this->load->view('footer');
    }
}
}
?>