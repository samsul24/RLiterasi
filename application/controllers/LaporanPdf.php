<?php

defined('BASEPATH') or exit('No direct script access allowed');

Class Laporanpdf extends CI_Controller{
    
  public function __construct(){    
    parent::__construct();        
    // $this->load->model('siswa_model');  
    $this->load->library('curl');

    $this->API = base_url('api/DetailUlasan');
    $this->API1 = base_url('api/DetailNilai');
  
  }
    public function index(){   
        $this->load->library('pdf');
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API1));
        $this->load->view('data/laporan_pdf', $data);$paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->pdf->set_paper($paper_size, $orientation);
        $this->pdf->load_html($html);
        $this->pdf->render();
        $this->pdf->stream("laporan.pdf", array('Attachment' => 0)); 
      }    

    //     function exportToPDF() {

    //       // header attribute
    //       $name_file = 'PRODUKSI-'.rand(1, 999999).'-'.date('Y-m-d');
    //       $pdf = $this->header_attr( $name_file );
    
    //       // add a page
    //       $pdf->AddPage('P', 'A4');
    
    
    //       // Sub header
    //       // $pdf->Ln(5, false);
    //       $html = '<table border="0">
    //           <tr>
    //               <td align="center"><h2>LAPORAN DATA PRODUKSI</h2> <br> Lorepisum dolar sit amlet</td>
              
    //           </tr>
      
          
    //       </table>';
    
    //       $pdf->writeHTML($html, true, false, true, false, '');
    //       $pdf->Ln(5, false);
    
          
          
    
    //       // header table
    //       $table_body = "";
    //       $data['produksi'] = json_decode($this->curl->simple_get($this->API));
          
    //       if ( count( $data['produksi'] ) > 0 ) {
    
    //         $i = 1;
    //         foreach ( $data['produksi'] AS $item ) {
    
    //             $table_body .= '<tr>
                
    //                 <td>'.$i.'</td>
    //                 <td>'.$item->tanggal.'</td>
    //                 <td>'.$item->nama_staff.'</td>
    //                 <td>'.$item->shift.'</td>
    //                 <td>'.$item->jumlah_produksi.'</td>
                
    //             </tr>';
    
    //             $i++;
    //         }
    //       }
    
    
    
    //       $table = '
    //           <table border="1" width="100%" cellpadding="6">
    //               <tr>
    //                   <th width="5%" height="20" padding="5" align="center"><b>No</b></th>
    //                   <th width="15%" align="center"><b>Tanggal</b></th>
    //                   <th width="30%" align="center"><b>Nama Staff</b></th>
    //                   <th width="20%" align="center"><b>Shift Produksi</b></th>
    //                   <th width="30%" align="center"><b>Hasil Produksi Hari ini</b></th>
              
    //               </tr>
    //               '.$table_body.'
    //           </table>';
    
    //       $pdf->writeHTML($table, true, false, true, false, '');
    
    
    
    //       $pdf->Ln(10, false);
    //       $ttd = '
    //           <table border="0">
    //               <tr>
    //                   <td colspan="2" align="right">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    //                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.date('Y').'</td>
    //               </tr>
    //               <tr>
    //                   <td colspan="2" height="80"></td>
    //               </tr>
    //               <tr>
    //                   <td width="75%"></td>
    //                   <td width="20%" align="center">(. . . . . . . . . . . . . . . . .)</td>
    //               </tr>
    //           </table>
    //       ';
    
    //       $pdf->writeHTML($ttd, true, false, true, false, '');
    
    
    //       // output
    //       $pdf->Output($name_file.'.pdf', 'I');
    //   }
    
    
    
    
    
    //   // header attr
    //   function header_attr( $title ) {
    
    //     // create new PDF document
    //     $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    //     // set document information
    //     $pdf->SetCreator(PDF_CREATOR);
    //     $pdf->SetAuthor('Dwi Nur Cahyo');
    //     $pdf->SetTitle($title);
    //     // $pdf->SetSubject('TCPDF Tutorial');
    //     // $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
    
    //     // set default header data
    //     $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);
    
    //     // set header and footer fonts
    //     $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    //     $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
    //     // set default monospaced font
    //     $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
    //     // set margins
    //     $pdf->SetMargins(PDF_MARGIN_LEFT, 35, PDF_MARGIN_RIGHT);
    //     $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    //     $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
    //     // set auto page breaks
    //     $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
    //     // set image scale factor
    //     $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
    //     // set some language-dependent strings (optional)
    //     if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    //         require_once(dirname(__FILE__).'/lang/eng.php');
    //         $pdf->setLanguageArray($l);
    //     }
    
    //     // ---------------------------------------------------------
    
    //     // set font
    //     $pdf->SetFont('times', '', 10);
    
    //     return $pdf;
    // }
    

}
?>