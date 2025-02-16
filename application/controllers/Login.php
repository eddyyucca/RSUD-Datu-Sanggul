<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data['data'] = false;
        $data['judul'] = 'RSUDDS - Login';
        $this->load->view('login/template_auth/header', $data);
        $this->load->view('login/index', $data);
        $this->load->view('login/template_auth/footer', $data);
    }

    public function auth()
    {
        $this->form_validation->set_rules('nip', 'NIP Pegawai', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['data'] = false;
            $data['judul'] = 'Login';
            $this->load->view('auth/template/header', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('auth/template/footer');
        } else {

            $nip = $this->input->post('nip');
            $password =  md5($this->input->post('password'));
            $cek = $this->auth_m->login($nip, $password);
            if ($cek == true) {
                foreach ($cek as $row);
                $this->session->set_userdata('nip', $row->nip);
                $this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
                $this->session->set_userdata('id_pegawai', $row->id_pegawai);
                $this->session->set_userdata('level', $row->level);
                if ($row->level == "admin") {
                    redirect('admin');
                } elseif ($row->level == "user") {
                    $this->session->set_Flashdata('pesan', "<div class='alert alert-danger' role='alert'>Password Salah !
                    </div>");
                    redirect("auth/index");
                }
            } else {
                $data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';
                $data['judul'] = 'Login';
                $this->load->view('auth/template_auth/header', $data);
                $this->load->view('auth/index', $data);
                $this->load->view('auth/template_auth/footer');
            }
        }
    }
    public function auth_user()
    {
        $this->form_validation->set_rules('nip', 'NIP Pegawai', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['data'] = false;

            $data['judul'] = 'Login';
            $this->load->view('auth/template/header', $data);
            $this->load->view('auth/user_login', $data);
            $this->load->view('auth/template/footer');
        }

        $nip = $this->input->post('nip');
        $password =  md5($this->input->post('password'));
        $cek = $this->auth_m->login($nip, $password);
        if ($cek == true) {
            foreach ($cek as $row);
            $this->session->set_userdata('nip', $row->nip);
            $this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
            $this->session->set_userdata('id_pegawai', $row->id_pegawai);
            $this->session->set_userdata('level', $row->level);
            if ($row->level == "user") {
                redirect('user');
            } elseif ($row->level == "admin") {
                $this->session->set_Flashdata('pesan', "<div class='alert alert-danger' role='alert'>Password Salah !
        </div>");
                redirect("auth/user_login");
            }
        } else {
            $data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';
            $data['judul'] = 'Login';
            $this->load->view('auth/template_auth/header', $data);
            $this->load->view('auth/user_login', $data);
            $this->load->view('auth/template_auth/footer');
        }
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}

/* End of file Login.php */
