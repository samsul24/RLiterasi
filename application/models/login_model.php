<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    // public function login($username, $password)
    // {
    //     $this->db->select('*');
    //     $this->db->from('user');
    //     $this->db->where('username', $username);
    //     $this->db->where('password', $password);
    //     $this->db->where('id_sekolah', 1);
    //     $this->db->limit(1);
    //     $query = $this->db->get();
    //     if ($query->num_rows() == 1) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->join('sekolah', 'sekolah.id_sekolah = user.id_sekolah');
        $this->db->limit(1);
        $query = $this->db->get();
        // print_r($query);
        // exit;
        $data = array($username, $password);
        if ($query->num_rows() == 1) {
            $cek = $this->db->get('user', $data)->row();
            $data_session = array(
                'id_user' => $cek->id_user,
                'username' => $cek->username,
                'id_sekolah' => $cek->id_sekolah,
                
            );
            $this->session->set_userdata($data_session);
            return $query->result();
        } else {
            return false;
        }
    }
    public function get_user($username)
    {

        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->result();
    }

    // public function data_sekolah()
    // {
    //     $this->db->select('nama_sekolah');
    //     $data = $this->db->get($this->table)->result();
    //     $i = 0;
    //     foreach ($data as $data_sekolah) {
    //         $nama_upt = explode(' ', $data_sekolah->nama_sekolah);
    //         $last_word = array_pop($nama_sekolah);
    //         $upt[$i] = $last_word;
    //         $i++;
    //     }
    //     return json_encode($upt);
    // }

    public function input_data($data)
    {
        $this->db->insert('login', $data);
        // $this->session->set_flashdata('status', 'Registration success, please wait for verification');
    }
}

/* End of file ModelName.php */
