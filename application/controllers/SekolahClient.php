<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SekolahClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');

        $this->API = "http://localhost:8080/RLiterasi/api/sekolah";
    }

    public function index()
    {
        $data['sekolah'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Sekolah";
        $this->load->view('superadmin/superbar');
    $this->load->view('superadmin/sekolah', $data);
    }
}
?>