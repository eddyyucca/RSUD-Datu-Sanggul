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
}

/* End of file Login.php */
