<?php

defined('BASEPATH') or exit('No direct script access allowed');

class GuruClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost:8080/RLiterasi/api/buku";
        $this->API1 = "http://localhost:8080/RLiterasi/api/ulasan";
        $this->API2= "http://localhost:8080/RLiterasi/api/siswa";


    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('guru/index', $data, FALSE);
    }
    public function galeri()
    {
        $data['title'] = "Buku";
        $this->load->view('guru/galeri', $data, FALSE);
    }
    public function akses()
    {
        $data['buku'] = json_decode($this->curl->simple_get($this->API));
        $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
        $data['title'] = "Buku";
        $this->load->view('header2');
        $this->load->view('bar1');
        $this->load->view('guru/akses', $data, FALSE);
        $this->load->view('footer');

    }
    public function siswa()
    {
        $data['siswa'] = json_decode($this->curl->simple_get($this->API2));
        $data['title'] = "user";
        $this->load->view('header2');
        $this->load->view('bar1');
        $this->load->view('guru/user/useradmin4', $data);
        $this->load->view('footer');
    }
    public function buku()
    {
        $data['buku'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Buku";
        $this->load->view('header2');
        $this->load->view('bar1');
        $this->load->view('guru/buku', $data);
        $this->load->view('footer');
    }
}
?>