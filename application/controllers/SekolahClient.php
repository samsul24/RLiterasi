<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SekolahClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');

        $this->API = base_url('api/Sekolah');
    }

    public function index()
    {
        $data['sekolah'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Sekolah";
        $this->load->view('superadmin/superbar');
        $this->load->view('superadmin/sekolah', $data);
    }
    public function put()
    {
        $params = array('id_sekolah' => $this->uri->segment(3));
        $data['sekolah'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Sekolah";
        $this->load->view('superadmin/superbar');
        $this->load->view('superadmin/put/sekolah', $data);
    }
    public function put_process()
    {
        $data = array(
            'id_sekolah'          => $this->input->post('id_sekolah'),
            'nama_sekolah'         => $this->input->post('nama_sekolah'),
            'npsn'                 => $this->input->post('npsn'),
            'nss'          => $this->input->post('nss'),
            'alamat_sekolah'          => $this->input->post('alamat_sekolah'),
            'kode_pos'          => $this->input->post('kode_pos'),
            'no_telp'          => $this->input->post('no_telp'),
            'kelurahan'          => $this->input->post('kelurahan'),
            'kecamatan'          => $this->input->post('kecamatan'),
            'kabupaten'          => $this->input->post('kabupaten'),
            'provinsi'          => $this->input->post('provinsi'),
            'website'          => $this->input->post('website'),
            'email'          => $this->input->post('email'),
            'visi'          => $this->input->post('visi'),
            'misi'          => $this->input->post('misi'),
            'verification_key'          => $this->input->post('verification_key'),
            'is_email_verified'          => $this->input->post('is_email_verified'),


        );
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));

        if ($update) {
            $this->session->set_flashdata('result', 'Update Data User Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data User Gagal');
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Ubah.</div>'
        );
        redirect('SekolahClient');
    }
    public function delete()
    {
        $params = array('id_sekolah' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Sekolah Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Sekolah Gagal');
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Hapus.</div>'
        );
        redirect('SekolahClient');
    }
}
