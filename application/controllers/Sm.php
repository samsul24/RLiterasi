<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    $this->API = "http://localhost:8080/RLiterasi/api/Similar";
        
    }
    public function index()
    {
        $data['similar'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Similar";
        $this->load->view('hasil',$data );
    
    }
    public function post()
    {
        $data['title'] = "Role user";
        $this->load->view('sm',true);
    
    }
    public function post_process()
    {
           
        $data = array(
            'ulasan1'         => $this->input->post('ulasan1'),
            'ulasan2'         => $this->input->post('ulasan2'),
            'hasil'         => 'hasil= ',
        );
        $insert = $this->curl->simple_post($this->API, $data);
        if ($insert) {
          $this->session->set_flashdata('result', '');
  
          redirect('Sm', 'refresh');
        } else {
          $this->session->set_flashdata('result', '');
        }
        print_r($data);
        exit;
        redirect('Sm', 'refresh');
      }
    }

