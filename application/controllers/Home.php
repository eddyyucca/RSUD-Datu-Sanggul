<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        $this->load->model('user_m');
        // $this->load->model('');
    }
    public function index()
    {
        $data['data'] = $this->user_m->pasien();
        $this->load->view('home/templates/header');
        $this->load->view('home/home', $data);
        $this->load->view('home/templates/footer');
    }
}

/* End of file Home.php */
