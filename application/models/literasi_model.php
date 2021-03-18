<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class literasi_model extends CI_Model {

    function __construct() {
    parent::__construct();
    }

    public function getLiterasi($limit,$start){
        return $this->db->get('ulasan',$limit,$start)->result_array();
    }   
    public function getAllLiterasi(){
        return $this->db->get('ulasan')->result_array();
    }
    public function getJawab(){
        return $this->db->get('temp_jawab')->result_array();
    }
               
    public function countAllLiterasi()
    {
        return $this->db->get('ulasan')->num_rows();
    }
	function input_data($data){
        $this->db->insert('ulasan',$data);
	
	}
    public function insertJawab($data){
    $this->db->insert('temp_jawab', $data);
  }
}
