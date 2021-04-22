<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Siswa extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_user');
        if ($id == '') {      
            $this->db->where('id_user_role', 4);     
            $this->db->join('sekolah', 'sekolah.id_sekolah = user.id_sekolah');
            $siswa = $this->db->get('user')->result();
        } 
        else {
            $this->db->where('id_user', $id);
            $siswa = $this->db->get('user')->result();
        }
        $this->response($siswa,200);
       
    }
   
    function index_post()
    {
        $data = array(
            'foto'         => $this->post('foto'),
            'nis'         => $this->post('nis'),
            'username'         => $this->post('username'),
            'password'         => $this->post('password'),
            'nama'             => $this->post('nama'),
            'jenis_kelamin'    => $this->post('jenis_kelamin'),
            'kelas'            => $this->post('kelas'),
            'email'          => $this->post('email'),
            'jurusan'          => $this->post('jurusan'),
            'id_user_role'     => $this->post('id_user_role'),
            
        );
        $insert = $this->db->insert('user', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_user');
        $data = array(
            'foto'         => $this->put('foto'),
            'nis'         => $this->put('nis'),
            'username'         => $this->put('username'),
            'password'         => $this->put('password'),
            'nama'             => $this->put('nama'),
            'jenis_kelamin'    => $this->put('jenis_kelamin'),
            'kelas'            => $this->put('kelas'),
            'email'          => $this->put('email'),
            'jurusan'          => $this->put('jurusan'),
            'no_telp'          => $this->put('no_telp'),
            'id_user_role'     => $this->put('id_user_role'),
            'id_sekolah'     => $this->put('id_sekolah'),
            );
        $this->db->where('id_user', $id);
        $update = $this->db->update('user', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    function index_delete()
    {
        $id = $this->delete('id_user');
        $this->db->where('id_user', $id);
        $delete = $this->db->delete('user');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
