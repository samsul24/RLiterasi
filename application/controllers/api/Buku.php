<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Buku extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_buku');
        if ($id == '') {
            $buku = $this->db->get('buku')->result();
        } else {
            $this->db->where('id_buku', $id);
            $buku = $this->db->get('buku')->result();
        }
        $this->response($buku, 200);
    }
    

}
?>