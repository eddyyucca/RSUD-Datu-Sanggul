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
        $data['nama'] = "Tuhan";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/home/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function x()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Tuhan";
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/home/index', $data);
        $this->load->view('admin/templates/footer');
    }
}

/* End of file Admin.php */
