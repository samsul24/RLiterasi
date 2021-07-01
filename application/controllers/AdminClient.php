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
        $this->API7 = base_url('api/Admin');
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

    public function profile($id = null)
    {
        $params = array('id_user' =>  $this->session->userdata('id_user'));
        $data['user'] = json_decode($this->curl->simple_get($this->API7, $params));
        $data['title'] = "Edit Data Sekolah";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/profile', $data);
    }
    public function edit_profile()
    {
        $params = array('id_user' =>  $this->session->userdata('id_user'));
        $data['user'] = json_decode($this->curl->simple_get($this->API7, $params));
        $data['title'] = "Edit Data Sekolah";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/put/profile', $data);
    }
    public function put_process_profile()
    {
        $foto = $_FILES['foto']['name'];
        if ($foto != '') {
            $config['upload_path'] = 'assets/admin/img';
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config, 'foto_upload');


            if ($this->foto_upload->do_upload('foto')) {
                unlink(FCPATH . 'assets/admin/img/' . $this->input->post('old_foto'));

                $foto = $this->foto_upload->data('file_name');
            }
        } else {
            $foto = $this->input->post('old_foto');
        }

            $data = array(
                "id_user" => $this->input->post('id_user'),
                'foto' => $foto,
                'nis' => $this->input->post('nis'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'kelas' => $this->input->post('kelas'),
                'email' => $this->input->post('email'),
                'jurusan' => $this->input->post('jurusan'),
                'no_telp' => $this->input->post('no_telp'),
                'id_user_role' => $this->input->post('id_user_role'),
                'id_sekolah' => $this->input->post('id_sekolah'),
            );
            $update =  $this->curl->simple_put($this->API7, $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($update) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Ubah.</div>'
                );
            } else {
                $this->session->set_flashdata('result', 'failed');
            }
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Ubah.</div>'
            );
            redirect('AdminClient/profile/');
        }
    

    public function Change_Password()
    {
        $params = array('id_user' =>  $this->session->userdata('id_user'));
        $data['user'] = json_decode($this->curl->simple_get($this->API7, $params));
        $data['title'] = "Change Password";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/change_password', $data);
    }
    public function Change_Password_Process()
    {
        $this->form_validation->set_rules('current_password', 'Kata Sandi Lama', 'required');
        $this->form_validation->set_rules('new_password1', 'Kata Sandi Baru', 'required');
        $this->form_validation->set_rules('new_password2', 'Kata Sandi Baru', 'required|matches[new_password1]');

        if ($this->form_validation->run() == FALSE) {
            $url = base_url('AdminClient/Change_Password');

            echo "<script>
				alert('Password Tidak Sesuai');
				window.location.href='$url';
				</script>";
        } else {
            $params = array('id_user' =>  $this->session->userdata('id_user'));
            $user = json_decode($this->curl->simple_get($this->API7, $params));

            $current = $this->input->post('current_password');
            $new = $this->input->post('new_password1');

            if (password_verify($current, $user[0]->password)) {
                $data = array(
                    'id_user' => $user[0]->id_user,
                    'foto' => $user[0]->foto,
                    'nis' => $user[0]->nis,
                    'username' => $user[0]->username,
                    'password' => password_hash($new, PASSWORD_DEFAULT),
                    'nama' => $user[0]->nama,
                    'jenis_kelamin' => $user[0]->kelamin,
                    'kelas' => $user[0]->kelas,
                    'email' => $user[0]->email,
                    'jurusan' => $user[0]->jurusan,
                    'no_telp' => $user[0]->no_telp,
                    'id_user_role' => $user[0]->id_user_role,
                    'id_sekolah' => $user[0]->id_sekolah,
                );

                $update =  $this->curl->simple_put($this->API7, $data, array(CURLOPT_BUFFERSIZE => 10));

                if ($update) {
                    $this->session->set_flashdata('result', 'success');
                } else {
                    $this->session->set_flashdata('result', 'failed');
                }
                redirect('AdminClient/profile/');
            } else {
                $url = base_url('AdminClient/Change_Password');

                echo "<script>
					alert('Password Tidak Sesuai');
					window.location.href='$url';
					</script>";
            }
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
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Hapus.</div>'
        );
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
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Hapus.</div>'
        );
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
            $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3, $params));
            $data['title'] = "Detail Ulasan";
            $this->load->view('admin/adminbar');
            $this->load->view('admin/detail_ulasan', $data, False);
        }
    }
    public function detail_ulasan()
    {
        $uri = array('id_ulasan' =>  $this->uri->segment(3));
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['ulasan'] = json_decode($this->curl->simple_get($this->API2, $uri));
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3, $params));
        $data['title'] = "Detail Ulasan";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/users/detail_ulasan', $data);
    }
    public function proses_detail()
    {

        $id_ulasan   = $this->input->post('id_ulasan');
        $ulasan_siswa   = $this->input->post('ket_siswa');
        $nama   = $this->input->post('nama');
        $id_sekolah   = $this->input->post('id_sekolah');
        $ulasan_guru    = $this->input->post('text_buku');
        similar_text($ulasan_siswa, $ulasan_guru, $hasil);
        $data = array(
            'id_ulasan' => $id_ulasan,
            'nama' => $nama,
            'ulasan_siswa' => $ulasan_siswa,
            'ulasan_guru' => $ulasan_guru,
            'id_sekolah' => $id_sekolah,
            'hasil' => $hasil
        );

        $insert =   $this->curl->simple_post($this->API3, $data);
        // var_dump($insert);
        // exit;
        if ($insert) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil Masuk.</div>'
            );
            redirect('AdminClient/detail');
        } else {
            echo "gagal";
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil Masuk.</div>'
        );
        redirect('AdminClient/detail');
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
            'nis' => $this->input->post('nis'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'id_sekolah' => $this->session->userdata('id_sekolah'),
            'id_user_role' => 3,
            'is_active' => 'aktif',
            'date_created' => time(),
        );

        $insert = $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', '');
            redirect('AdminClient/guru', 'refresh');
        } else {
            $this->session->set_flashdata('result', '');
        }
        var_dump($$insert);
        exit;
        redirect('AdminClient/guru', 'refresh');
    }




    public function nilai()
    {
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['detail_ulasan'] = json_decode($this->curl->simple_get($this->API3, $params));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API6, $params));
        $data['title'] = "Detail Ulasan";
        $this->load->view('admin/adminbar');
        $this->load->view('admin/nilai', $data, False);
    }
    public function kategori_nilai()
    {
        // $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $params = array('id_sekolah' =>  $this->session->userdata('id_sekolah'));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API6, $params));
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

        for ($i = 0; $i < $count; $i++) {
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
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Tambah.</div>'
            );

            redirect('AdminClient/kategori_nilai', 'refresh');
        } else {
            $this->session->set_flashdata('result', '');
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Tambah.</div>'
        );
        redirect('AdminClient/kategori_nilai', 'refresh');
    }


    public function put_kategori()
    {
        $params = array('id_kategori' => $this->uri->segment(3));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API6, $params));
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
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Ubah.</div>'
            );
            $this->session->set_flashdata('result', 'Update Data User Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data User Gagal');
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Ubah.</div>'
        );
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
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Hapus.</div>'
        );
        redirect('AdminClient/kategori_nilai');
    }
    public function delete()
    {
        $params = array('id_detail_ulasan' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API3, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data nilai Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data nilai Gagal');
        }
        redirect('AdminClient/detail');
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
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-light-success color-success" style=""><i class="bi bi-check-circle"></i> Data Berhasil di Hapus.</div>'
        );
        redirect('AdminClient/nilai');
    }
}
