<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Sekolah extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_sekolah');
        if ($id == '') {
            $sekolah = $this->db->get('sekolah')->result();
        } else {
            $this->db->where('id_sekolah', $id);
            $sekolah = $this->db->get('sekolah')->result();
        }
        $this->response($sekolah, 200);
    }
    function index_post()
    {
        $data = array(
            // 'id_sekolah'          => $this->post('id_sekolah'),
      'nama_sekolah'         => $this->post('nama_sekolah'),
      'npsn'                 => $this->post('npsn'),
      'nss'          => $this->post('nss'),
      'alamat_sekolah'          => $this->post('alamat_sekolah'),
      'kode_pos'          => $this->post('kode_pos'),
      'no_telp'          => $this->post('no_telp'),
      'kelurahan'          => $this->post('kelurahan'),
      'kecamatan'          => $this->post('kecamatan'),
      'kabupaten'          => $this->post('kabupaten'),
      'provinsi'          => $this->post('provinsi'),
      'website'          => $this->post('website'),
      'email'          => $this->post('email'),
      'visi'          => $this->post('visi'),
      'misi'          => $this->post('misi'),
            
        );
        $insert = $this->db->insert('login', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put()
    {
        $id = $this->put('id_sekolah');
        $data = array(
            'nama_sekolah'         => $this->put('nama_sekolah'),
            'npsn'                 => $this->put('npsn'),
            'nss'          => $this->put('nss'),
            'alamat_sekolah'          => $this->put('alamat_sekolah'),
            'kode_pos'          => $this->put('kode_pos'),
            'no_telp'          => $this->put('no_telp'),
            'kelurahan'          => $this->put('kelurahan'),
            'kecamatan'          => $this->put('kecamatan'),
            'kabupaten'          => $this->put('kabupaten'),
            'provinsi'          => $this->put('provinsi'),
            'website'          => $this->put('website'),
            'email'          => $this->put('email'),
            'visi'          => $this->put('visi'),
            'misi'          => $this->put('misi'),
      'verification_key'          => $this->put('verification_key'),
      'is_email_verified'          => $this->put('is_email_verified'),
        );
        $this->db->where('id_sekolah', $id);
        $update = $this->db->update('sekolah', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>