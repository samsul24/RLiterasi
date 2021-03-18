<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Ulasan extends REST_Controller
{

    function __construct($config ='rest')
    {
        parent::__construct($config);
    }

    function index_get($limit,$start)
    {
        $id = $this->get('id_ulasan');
        if ($id == '') {
            $soal = $this->db->get('ulasan',$limit=1,$start=1)->result_array();
        } else {
            $this->db->where('id_ulasan', $id);
            $soal = $this->db->get('ulasan',$limit,$start)->result_array();
        }
        $this->response($soal, 200);
    }

    public function getUjian($limit,$start){
        return $this->db->get('ulasan',$limit,$start)->result_array();
    }

    function index_post()
    {
        $data = array(
          'id_user'      => $this->input->post('id_user'),
          'judul'      => $this->input->post('judul'),
          'keterangan'         => $this->input->post('keterangan'),
      
        );
        $insert = $this->db->insert('ulasan',$data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
