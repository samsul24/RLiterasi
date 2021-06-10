<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('Login_model');


        $this->API = base_url('api/Guru');
        $this->API1 = base_url('api/Siswa');
        $this->API2 = base_url('api/Ulasan');
        $this->API3 = base_url('api/DetailUlasan');
        $this->API4 = base_url('api/DetailBuku');
        $this->API5 = base_url('api/Split');
        $this->API6 = base_url('api/DetailNilai');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('id_user_role')) {
            $username = $this->session->userdata('username');
            $data['results'] = $this->Login_model->get_user($username);
            $data['title'] = "Dashboard Admin";
            $this->load->view('admin/adminbar');    
            $this->load->view('admin/dashboard', $data);
        }
    }
    public function guru()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['guru'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "user";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/users/guru', $data);
    }
    public function delete_guru()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Guru Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Guru Gagal');
        }
        redirect('AdminClient/guru');
    }

    public function siswa()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['siswa'] = json_decode($this->curl->simple_get($this->API1, $params));
        $data['title'] = "user";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/users/siswa', $data);
    }
    public function delete_siswa()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API1, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Siswa Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Siswa Gagal');
        }
        redirect('AdminClient/siswa');
    }
    public function buku()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['buku'] = json_decode($this->curl->simple_get($this->API4, $params));
        $data['title'] = "Buku";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/buku', $data);
    }
    public function ulasan()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['ulasan'] = json_decode($this->curl->simple_get($this->API2, $params));
        $data['title'] = "Ulasan";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/ulasan', $data);
    }
    public function split()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['split'] = json_decode($this->curl->simple_get($this->API4, $params));
        $data['title'] = "Detail Buku";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/splitHasil', $data);
    }


    public function detail()
    {
        if ($this->session->userdata('id_user_role')) {
            $username = $this->session->userdata('username');
            $data['results'] = $this->Login_model->get_user($username);
            $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
            $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3,$params));
            $data['title'] = "Detail Ulasan";
            $this->load->view('admin/adminbar');
            $this->load->view('admin/detail_ulasan', $data, False);
        }
    }
    public function detail_ulasan()
    {
        $uri = array('id_ulasan' =>  $this->uri->segment(3));
        $data['ulasan'] = json_decode($this->curl->simple_get($this->API2, $uri));
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3));
        $data['title'] = "Detail Ulasan";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/users/detail_ulasan', $data);
    }


    public function proses_detail()
    {

        $this->form_validation->set_rules('ulasan_guru', 'Ulasan Guru', 'trim|required');
        if ($this->form_validation->run() === true) {
            $id_ulasan   = $this->input->post('id_ulasan');
            $ulasan_siswa   = $this->input->post('ket_siswa');
            $nama   = $this->input->post('nama');
            $ulasan_guru    = $this->input->post('text_buku');
            $hasil         = $this->input->post('hasil');
            $data = array(
                'id_ulasan' => $id_ulasan,
                'nama' => $nama,
                'ulasan_siswa' => $ulasan_siswa,
                'ulasan_guru' => $ulasan_guru,
                'hasil' => $hasil
            );
            $insert =   $this->curl->simple_post($this->API3, $data);
            // var_dump($insert);
            // exit;
            if ($insert) {
                echo "berhasil";
                redirect('GuruClient/detail');
            } else {
                echo "gagal";
            }
        } else {
            redirect('GuruClient/detail');
        }
    }



    public function post_guru()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['guru'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Detail Ulasan";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/users/post_guru', $data, False);
    }

    public function post_process_guru()
    {
        $data = array(
            'id_sekolah'         => $this->input->post('id_sekolah'),
            'nama_buku'         => $this->input->post('nama_buku'),
            'diskripsi'         => $this->input->post('diskripsi'),
          );
        // var_dump($data);
        // exit;
        $insert = $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', '');
            redirect('AdminClient/guru', 'refresh');
        } else {
            $this->session->set_flashdata('result', '');
        }
        redirect('AdminClient/guru', 'refresh');
    }

    public function nilai()
    {
        if ($this->session->userdata('id_user_role')) {
            $username = $this->session->userdata('username');
            $data['results'] = $this->Login_model->get_user($username);
            $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3));
            $data['kategori'] = json_decode($this->curl->simple_get($this->API6));
            $data['title'] = "Detail Ulasan";
            $this->load->view('admin/adminbar');
            $this->load->view('admin/nilai', $data, False);
        }
    }
    public function kategori_nilai()
    {
        // $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API6,$params));
        $data['title'] = "Detail Ulasan";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/kategori_nilai', $data, False);
    }

    public function post_kategori()
    {
        $data['kategori'] = json_decode($this->curl->simple_get($this->API6));
        $data['count'] = $this->input->post('count');
        $data['title'] = "Edit Data Sekolah";
          $this->load->view('admin/adminbar');
          $this->load->view('admin/post/kategori', $data);
      }

      public function post_process_kategori()
      {
        $count = $this->input->post('count');
        
        for ($i=0; $i < $count; $i++) { 
          $data = array(
            'id_sekolah'         => $this->input->post('id_sekolah')[$i],
            'grade'         => $this->input->post('grade')[$i],
            'start'         => $this->input->post('start')[$i],
            'end'         => $this->input->post('end')[$i],
           
            );
            // var_dump($data);
            // exit;
            $insert = $this->curl->simple_post($this->API6, $data);
        }
          if ($insert) {
            $this->session->set_flashdata('result', '');
    
            redirect('AdminClient/kategori_nilai', 'refresh');
          } else {
            $this->session->set_flashdata('result', '');
          }
          redirect('AdminClient/kategori_nilai', 'refresh');
        }
  

    public function put_kategori()
    {
        $params = array('id_kategori'=>$this->uri->segment(3));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API6,$params));
        $data['title'] = "Edit Data Sekolah";
          $this->load->view('admin/adminbar');
          $this->load->view('admin/put/kategori', $data);
      }
    public function kategori_process()
    {
        $data = array(
            'id_kategori'         => $this->input->post('id_kategori'),
            'id_sekolah'         => $this->input->post('id_sekolah'),
            'grade'         => $this->input->post('grade'),
            'start'         => $this->input->post('start'),
            'end'         => $this->input->post('end'),
         
        );
        $update =  $this->curl->simple_put($this->API6, $data, array(CURLOPT_BUFFERSIZE => 10));

        if ($update) {
          echo"berhasil";
          $this->session->set_flashdata('result', 'Update Data User Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data User Gagal');
          }
        // print_r($update);
        // exit;
        redirect('AdminClient/kategori_nilai');
    }
    
    public function delete_kategori()
    {
        $params = array('id_kategori' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API6, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Kategori Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Kategori Gagal');
        }
        redirect('AdminClient/kategori_nilai');
    }
    public function delete_nilai()
    {
        $params = array('id_detail_ulasan' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API3, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data nilai Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data nilai Gagal');
        }
        redirect('AdminClient/nilai');
    }
}
