<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class DetailNilai extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_kategori');
        if ($id == '') {
            $nilai_kategori = $this->db->get('nilai_kategori')->result();
        } else {
            $this->db->where('id_kategori', $id);
            $nilai_kategori = $this->db->get('nilai_kategori')->result_array();
        }
        $this->response($nilai_kategori, 200);
    }
    function index_post()
    {
        $data = array(
            'id_sekolah'         => $this->post('id_sekolah'),
            'grade'         => $this->post('grade'),
            'start'         => $this->post('start'),
            'end'         => $this->post('end'),
        );
        $insert = $this->db->insert('nilai_kategori', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    function index_put()
    {
        $id = $this->put('id_kategori');
        $data = array(
            'id_sekolah'              => $this->put('id_sekolah'),
            'grade'         => $this->put('grade'),
            'start'         => $this->put('start'),
            'end'         => $this->put('end'),
        );
        $this->db->where('id_kategori', $id);
        $update = $this->db->update('nilai_kategori', $data);
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
        $id = $this->delete('id_kategori');
        $this->db->where('id_kategori', $id);
        $delete = $this->db->delete('nilai_kategori');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
