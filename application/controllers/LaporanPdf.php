<?php

defined('BASEPATH') or exit('No direct script access allowed');

Class Laporanpdf extends CI_Controller{
    
  public function __construct(){    
    parent::__construct();        
    // $this->load->model('siswa_model');  
    $this->load->library('curl');

    $this->API = base_url('api/DetailUlasan');
    $this->API1 = base_url('api/DetailNilai');
    $this->API2 = base_url('api/Sekolah');
  
  }
  public function index(){   
    $this->load->library('pdf');
    $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
    $data['detail_nilai'] = json_decode($this->curl->simple_get($this->API,$params));
    $data['sekolah'] = json_decode($this->curl->simple_get($this->API2));
    $data['kategori'] = json_decode($this->curl->simple_get($this->API1));
    $this->load->view('data/laporan_pdf', $data);$paper_size = 'A4';
    $orientation = 'potrait';
    $html = $this->output->get_output();
    $this->pdf->set_paper($paper_size, $orientation);
    $this->pdf->load_html($html);
    $this->pdf->render();
    $this->pdf->stream("Hasil Literasi.pdf", array('Attachment' => 0)); }    
 
  public function cetak(){    
    ob_start();    
    $data['detail_nilai'] =json_decode($this->curl->simple_get($this->API)); 
    $this->load->view('data/laporan_pdf', $data);    
    $html = ob_get_contents();        
    ob_end_clean();                
    require_once('./assets/html2pdf/html2pdf.class.php');    
    $pdf = new HTML2PDF('P','A4','en');    
    $pdf->WriteHTML($html);    
    $pdf->Output('Latihan laporan.pdf', 'D');  
  }

}
