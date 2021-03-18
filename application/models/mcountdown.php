<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mcountdown extends CI_Model
{

    public function time($start){
        $this->db->insert('countdowntime', $start);
        if($this->db->affected_rows()>0){
        return true;
        }else{
        return false;
        }
        }

        public function select_time(){
        $this->db->select('*');
        $this->db->from('countdowntime');
        $query = $this->db->get();
        if($query->num_rows()>0){
        return $query->row();
        }
    }
}
?>
