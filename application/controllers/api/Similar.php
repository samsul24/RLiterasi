<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Similar extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_text');
        if ($id == '') {
            $similar = $this->db->get('similar')->result();
        } else {
            $this->db->where('id_text', $id);
            $similar = $this->db->get('similar')->result();
        }
        $this->response($similar, 200);
    }
    function index_post()
    {
        $data = array(
            'ulasan1'         =>$this->post('ulasan1'),
            'ulasan2'         =>$this->post('ulasan2'),
            'hasil'              =>$this->post('hasil'),
        );
        $insert = $this->db->insert('similar', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_text');
        $data = array(
            // 'file_pdf'              => $this->put('file_pdf'),
            'ulasan1'         => $this->put('ulasan1'),
            'ulasan2'         => $this->put('ulasan2'),
            'hasil'              =>$this->post('hasil'),

            );
        $this->db->where('id_text', $id);
        $update = $this->db->update('similar', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    function index_delete()
    {
        $id = $this->delete('id_text');
        $this->db->where('id_text', $id);
        $delete = $this->db->delete('similar');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>