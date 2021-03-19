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

    function index_get()
    {
        $id = $this->get('id_ulasan');
        if ($id == '') {
            $ulasan = $this->db->get('ulasan')->result();
        } else {
            $this->db->where('id_ulasan', $id);
            $ulasan = $this->db->get('ulasan')->result();
        }
        $this->response($ulasan, 200);
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
    function index_delete()
    {
        $id = $this->delete('id_ulasan');
        $this->db->where('id_ulasan', $id);
        $delete = $this->db->delete('ulasan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>