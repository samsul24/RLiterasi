<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class User extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->model('Login_model');
    }

    function index_get()
    {
        $id = $this->get('id_user');
        if ($id == '') {      
            // $this->db->order_by('id_user_role', 'asc' );      
            $this->db->order_by('id_sekolah', 'ASC');
            $user = $this->db->get('user')->result();
        } 
        else {
            $this->db->where('id_user', $id);
            $user = $this->db->get('user')->result();
        }
        $this->response($user,200);
       
    }
    function guru()
    {
        $id = $this->get('id_user');
        if ($id == '') { 
            $this->db->where('id_user_role', 3);           
            $guru = $this->db->get('user')->result();
        } else {
            $this->db->where('id_user', $id);
            $guru = $this->db->get('user')->result();
        }
        $this->response($guru, 200);
    } 
    function siswa()
    {
        $id = $this->get('id_user');
        if ($id == '') {     
            $this->db->where('id_user_role', 4);       
            $user4 = $this->db->get('user')->result();
        } else {
            $this->db->where('id_user', $id);
            $user4 = $this->db->get('user')->result();
        }
        $this->response($user4, 200);
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
            'jurusan'          => $this->put('jurusan'),
            'id_user_role'     => $this->put('id_user_role'),
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
    public function login_post()
    {
      $user = $this->post('username');
      $password = $this->post('password');
      $check = $this->Login_model->login($user, $password);
      if ($check) {
        foreach ($check as $rows) {
          $session_data = array(
            'id_user' => $rows->id_user,
            'username' => $rows->username,
            'id_user_role' => $rows->id_user_role,
            'id_user' => $rows->id_user,
            'id_sekolah' => $rows->id_sekolah,
            'nama_sekolah' => $rows->nama_sekolah,
            'visi' => $rows->visi,
            'misi' => $rows->misi,
            'email' => $rows->email,
            'no_telp' => $rows->no_telp,
            'alamat_sekolah' => $rows->alamat_sekolah,
            'website' => $rows->website,
            'kabupaten' => $rows->kabupaten,
          );
        }
        $this->response(array('status' => 'success','data'=>$session_data), 200);
      }else{
        $this->response(array('status' => 'error','data'=>0), 404);
      }
    }
}
?>