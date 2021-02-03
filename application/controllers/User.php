<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        // $this->load->model('');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/home/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function info_dokter()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/info_dr/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function info_kamar()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/info_kamar/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function profil_rsud()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/profil_rsud/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function gallery()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/profil_rsud/index', $data);
        $this->load->view('user/templates/footer');
    }

    // public function post()
    // {
    //     $this->form_validation->set_rules('nama_bidang', 'Bidang', 'required');
    //     if ($this->form_validation->run() == FALSE) {
    //         $data['judul'] = "Dashboard";
    //         $data['nama'] = "Eddy Adha Saputra";
    //         $this->load->view('user/templates/header', $data);
    //         $this->load->view('user/profil_rsud/index', $data);
    //         $this->load->view('user/templates/footer');
    //     } else {

    //         $data['judul'] = "Dashboard";
    //         $data['nama'] = "Eddy Adha Saputra";
    //         $this->load->view('user/templates/header', $data);
    //         $this->load->view('user/profil_rsud/index', $data);
    //         $this->load->view('user/templates/footer');
    //     }
    // }
    public function post()
    {
        $this->form_validation->set_rules('nama_bidang', 'Bidang', 'required');
        if () {


            $data['judul'] = "Dashboard";
            $data['nama'] = "Eddy Adha Saputra";
            $this->load->view('user/templates/header', $data);
            $this->load->view('user/post/index', $data);
            $this->load->view('user/templates/footer');
        } else {
            # code...
        }
    }

    public function post_baru()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/post/post_baru', $data);
        $this->load->view('user/templates/footer');
    }



    public function data_poli()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/poli/data_poli', $data);
        $this->load->view('user/templates/footer');
    }
}

/* End of file user.php */
