<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Developer";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/home/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function info_dokter()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Developer";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/info_dr/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function info_kamar()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Developer";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/info_kamar/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function profil_rsud()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Developer";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/profil_rsud/index', $data);
        $this->load->view('admin/templates/footer');
    }
}

/* End of file Admin.php */
