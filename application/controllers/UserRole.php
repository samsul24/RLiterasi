<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserRole extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/RLiterasi/api/role";
    }
    public function index()
    {
        $data['role'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Role user";
        $this->load->view('superadmin/superbar',true);
        $this->load->view('superadmin/role', $data);
    
    }
}
