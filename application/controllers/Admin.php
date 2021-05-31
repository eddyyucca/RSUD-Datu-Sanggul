<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        $this->load->model('dokter_m');
        $this->load->model('admin_m');
        $this->load->library('form_validation');
        // $this->load->library('encryption');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != "admin") {
            $this->session->set_Flashdata('pesan_kembali', "<div class='alert alert-danger' role='alert'>Anda harus login terlebih dahulu ! </div>");
            redirect('login');
        }
    }

    public function index()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['data'] = $this->dokter_m->dokter_row();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/template_admin/footer');
    }

    // dokter
    public function cek_akun_dokter()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['dokter'] = $this->dokter_m->dokter();
        $data['akun_dokter'] = $this->dokter_m->akun_dokter();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/dokter/cek_akun_dokter', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function buat_akun_dokter($id_dokter)
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['dokter'] = $this->dokter_m->dokter();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/dokter/buat_akun_dokter', $data);
        $this->load->view('admin/template_admin/footer');
    }
    // end dokter

    // permintaan
    public function permintaan_kerja()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['dokter'] = $this->dokter_m->dokter();
        $data['data_petugas'] = $this->admin_m->petugas_simrs();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/permintaan/permintaan_kerja', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function petugas_simrs()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['data'] = $this->admin_m->petugas_simrs();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/permintaan/petugas_simrs', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function tambah_petugas()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/permintaan/tambah_petugas', $data);
        $this->load->view('admin/template_admin/footer');
    }

    public function edit_petugas($id_petugas)
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['data'] = $this->admin_m->petugas_simrs_row($id_petugas);
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/permintaan/edit_petugas', $data);
        $this->load->view('admin/template_admin/footer');
    }

    public function proses_tambah_petugas()
    {
        $data = array(
            "nama_petugas" => $this->input->post('nama_petugas')
        );

        $this->db->insert('petugas_simrs', $data);
        return redirect("admin/petugas_simrs");
    }

    public function proses_edit_petugas($id_petugas)
    {
        $data = array(
            "nama_petugas" => $this->input->post('nama_petugas')
        );
        $this->db->where('id_petugas_simrs', $id_petugas);
        $this->db->update('petugas_simrs', $data);
        return redirect("admin/petugas_simrs");
    }

    public function hapus_petugas($id_petugas)
    {
        $this->db->where('id_petugas_simrs', $id_petugas);
        $this->db->delete('petugas_simrs');
        return redirect("admin/petugas_simrs");
    }
    // end permintaan

    // akun Login
    public function akun()
    {
        $data['level_akun'] = $this->session->userdata('level');
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['data'] = $this->admin_m->data_login();;

        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/user/data_user', $data);
        $this->load->view('admin/template_admin/footer');
    }

    public function tambah_akun()
    {
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/user/tambah_user', $data);
        $this->load->view('admin/template_admin/footer');
    }

    public function edit_akun($id_login)
    {

        $data['akun'] = $this->admin_m->data_login_row($id_login);
        $data['nama'] = $this->session->userdata('nama_user');
        // $data['level_akun'] = $this->session->userdata('level');
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/user/edit_user', $data);
        $this->load->view('admin/template_admin/footer');
    }

    public function prosesedit($id_login)
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[web_login.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit_akun($id_login);
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'id_dep' => $this->input->post('id_dep'),
                'level' => $this->input->post('level'),
            );
            $this->db->where('id_login', $id_login);
            $this->db->update('web_login', $data);
            redirect('admin/akun');
        }
    }

    public function prosestambah_akun()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[web_login.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_akun();
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'level' => $this->input->post('level'),
            );

            $this->db->insert('web_login', $data);
            redirect('admin/akun');
        }
    }

    public function prosesHapus($id)
    {
        $this->akun_model->hapus($id);
        redirect('akun');
    }
    // akun login

    // user
    public function tambah_user()
    {
        $data['judul'] = "Tambah User";

        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/user/tambah_user', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function reset_pass($id_login)
    {
        $data = array(
            'password' => md5("12345678"),
        );
        $this->db->where('id_login', $id_login);
        $this->db->update('web_login', $data);
        $this->session->set_Flashdata('notif', "<div class='alert alert-success' role='alert'>Reset Password Berhasil</div>");
        redirect('admin/akun');
    }
    // user
}

/* End of file Admin.php */
