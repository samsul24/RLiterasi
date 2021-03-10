<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BukuClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');

        $this->API = "http://localhost:8080/RLiterasi/api/buku";
    }

    public function index()
    {
        $data['buku'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Buku";
        $this->load->view('header1');
        $this->load->view('bar');
        $this->load->view('admin/buku', $data);
        $this->load->view('footer');
    }
}
?>