<?php

defined('BASEPATH') or exit('No direct script access allowed');

Class LaporanExcel extends CI_Controller{
    
  public function __construct(){    
    parent::__construct();        
    // $this->load->model('siswa_model');  
    $this->load->library('curl');

    $this->API = base_url('api/DetailUlasan');

  
  }
    public function index(){   
        $data['DetailUlasan'] = json_decode($this->curl->simple_get($this->API));
        require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php'); 
        require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php'); 
        $object= new PHPExcel();
        $object->getProperties()->setCreator("Literasi Malang");
        $object->getProperties()->setLastModifiedBy("Literasi Malang");
        $object->getProperties()->setTitle("Literasi");

        
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama');
        $object->getActiveSheet()->setCellValue('C1', 'Ulasan Siswa');
        $object->getActiveSheet()->setCellValue('D1', 'Text PDF');
        $object->getActiveSheet()->setCellValue('E1', 'Hasil');

            $baris = 2;
            $no = 1;
            foreach($data['DetailUlasan'] as $rows)
            {
              $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
              $object->getActiveSheet()->setCellValue('B'.$baris, $rows->Nama);
              $object->getActiveSheet()->setCellValue('C'.$baris, $rows->ulasan_siswa);
              $object->getActiveSheet()->setCellValue('D'.$baris, $rows->ulasan_guru);
              $object->getActiveSheet()->setCellValue('E'.$baris, $rows->hasil);
              $baris++;
                  }
              $filename="Data_Literasi".'.xlsx';
              $object->getActiveSheet()->setTitle("Data Literasi");
              header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
              header('Content-Disposition: attachment;filename="'.$filename.'"');
              header('Cache-Control: max-age=0');
              header("Pragma: no-cache");
              header("Expires: 0");

              $writer=PHPExcel_IOFactory::createwriter($object,'Excel2007');
              ob_end_clean();
              $writer->save('php://output');
              exit;
    }    
}
?>