<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class DetailUlasan extends REST_Controller
{

    function __construct($config ='rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_detail_ulasan');
        if ($id == '') {
            $detail_ulasan = $this->db->get('detail_ulasan')->result();
        } else {
            $this->db->where('id_detail_ulasan', $id);
            $detail_ulasan = $this->db->get('detail_ulasan')->result();
        }
        $this->response($detail_ulasan, 200);
    }

    function index_post()
    {
        $data = array(
          'id_ulasan'      => $this->input->post('id_ulasan'),
          'ket_guru'         => $this->input->post('ket_guru'),
      
        );
        $insert = $this->db->insert('ulasan',$data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete()
    {
        $id = $this->delete('id_detail_ulasan');
        $this->db->where('id_detail_ulasan', $id);
        $delete = $this->db->delete('detail_ulasan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>