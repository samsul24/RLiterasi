<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Split extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_split');
        if ($id == '') {
            $split = $this->db->get('split')->result();
        } else {
            $this->db->where('id_split', $id);
            $split = $this->db->get('split')->result_array();
        }
        $this->response($split, 200);
    }
    function index_post()
    {
        $data = array(
            'pdf_file'              => $this->post('pdf_file'),
            'deskripsi'              => $this->post('deskripsi'),
        );
        $insert = $this->db->insert('split', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    function index_put()
    {
        $id = $this->put('id_split');
        $data = array(
            'pdf_file'              => $this->put('pdf_file'),
        );
        $this->db->where('id_split', $id);
        $update = $this->db->update('split', $data);
        // print_r($data);
        // exit;
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id_split');
        $this->db->where('id_split', $id);
        $delete = $this->db->delete('split');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
