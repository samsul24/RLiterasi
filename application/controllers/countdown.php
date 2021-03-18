<?php

defined('BASEPATH') or exit('No direct script access allowed');

class countdown extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('mcountdown');

    }

public function index()
{
    $data['title'] = "Schedule";
    // $this->load->view('header1');
    // $this->load->view('bar');
    $this->load->view('v_countdown');
    // $this->load->view('footer');

}

public function time(){
    $tanggal_start =$this->input->post('start');
    $waktu_start = $this->input->post('waktu_start');
    $s = strtotime("$waktu_start $tanggal_start");
    $start =array('waktu'=>date('Y:m:d H:i:s', $s));
    $result = $this->mcountdown->time($start);
    if($result == true){
    redirect(site_url('countdown/lihat_countdown'));
    }
    else{
    redirect(site_url());
    }
}
public function lihat_countdown(){
    $result['timer'] = $this->mcountdown->select_time();
    $this->load->view('v_timer', $result);
    }
}
?>