<?php

defined('BASEPATH') or exit('No direct script access allowed');

Class Laporanpdf extends CI_Controller{
    
  public function __construct(){    
    parent::__construct();        
    // $this->load->model('siswa_model');  
    $this->load->library('curl');

    $this->API = "http://localhost:8080/antrian/DetailUlasan";
  
  }
    public function index(){   
        $this->load->library('pdf');
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API));
        $this->load->view('data/laporan_pdf', $data);$paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->pdf->set_paper($paper_size, $orientation);
        $this->pdf->load_html($html);
        $this->pdf->render();
        $this->pdf->stream("laporan.pdf", array('Attachment' => 0)); }    

}
?>