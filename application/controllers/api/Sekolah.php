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

}
?>