<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class BukuBebas extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_buku_bebas');
        $id_sekolah = $this->get('id_sekolah');
        if ($id == '') {
            $this->db->where('buku_bebas.id_sekolah', $id_sekolah);
            $detail_buku = $this->db->get('buku_bebas')->result();
        } else {
            $this->db->where('id_buku_bebas', $id);
            $detail_buku = $this->db->get('buku_bebas')->result_array();
        }
        $this->response($detail_buku, 200);
    }
    function index_post()
    {
        $data = array(
            'cover'         => $this->post('cover'),
            'id_sekolah'         => $this->post('id_sekolah'),
            'nama_buku'         => $this->post('nama_buku'),
            'diskripsi'         => $this->post('diskripsi'),
            'pdf_file'              => $this->post('pdf_file'),
        );
        $insert = $this->db->insert('buku_bebas', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    function index_put()
    {
        $id = $this->put('id_buku_bebas');
        $data = array(
            'id_sekolah'              => $this->put('id_sekolah'),
            'cover'              => $this->put('cover'),
            'nama_buku'         => $this->put('nama_buku'),
            'diskripsi'         => $this->put('diskripsi'),
            'pdf_file'              => $this->put('pdf_file'),
        );
        $this->db->where('id_buku_bebas', $id);
        $update = $this->db->update('buku_bebas', $data);
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
        $id = $this->delete('id_buku_bebas');
        $this->db->where('id_buku_bebas', $id);
        $delete = $this->db->delete('buku_bebas');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
