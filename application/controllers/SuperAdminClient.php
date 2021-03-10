<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SuperAdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('super_model');       

    }

    public function index()
    {
        $data['title'] = "Dashboard Super Admin";
        $this->load->view('header');
        $this->load->view('superbar');
        $this->load->view('superadmin/index', $data);
        $this->load->view('footer');
    }
}
?>