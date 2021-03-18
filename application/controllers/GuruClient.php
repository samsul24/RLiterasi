<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }

    public function index()
    {
        $data['title'] = "Dashboard Admin";
        $this->load->view('header1');
        $this->load->view('bar1');
        $this->load->view('guru/index', $data);
        $this->load->view('footer');
    }
}
?>