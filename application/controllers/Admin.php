<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        $this->load->model('dokter_m');
        $this->load->library('form_validation');
        // $this->load->model('');
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
        $data['data'] = $this->dokter_m->dokter();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/dokter/cek_akun_dokter', $data);
        $this->load->view('admin/template_admin/footer');
    }
    // end dokter
}

/* End of file Admin.php */
