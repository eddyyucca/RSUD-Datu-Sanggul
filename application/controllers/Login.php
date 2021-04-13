<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['data'] = false;
            $data['judul'] = 'RSUDDS - Login';
            $this->load->view('login/template_auth/header', $data);
            $this->load->view('login/index', $data);
            $this->load->view('login/template_auth/footer', $data);
        } else {
            $username = $this->input->post('username');
            $password =  md5($this->input->post('password'));
            $cek = $this->login_m->login($username, $password);
            if ($cek == true) {
                foreach ($cek as $row);
                $this->session->set_userdata('id_login', $row->id_login);
                $this->session->set_userdata('username', $row->username);
                $this->session->set_userdata('level', $row->level);
                if ($row->level == "admin") {
                    return   redirect('admin');
                } elseif ($row->level == "yanmed") {
                    // $this->session->set_Flashdata('pesan', "<div class='alert alert-danger' role='alert'>Password Salah !
                    // </div>");
                    return redirect("dokter/index");
                }
            } else {
                $data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
                </div>';
                $data['judul'] = 'RSUDDS - Login';
                $this->load->view('login/template_auth/header', $data);
                $this->load->view('login/index', $data);
                $this->load->view('login/template_auth/footer', $data);
            }
        }
        $this->session->sess_destroy();
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

/* End of file Login.php */
