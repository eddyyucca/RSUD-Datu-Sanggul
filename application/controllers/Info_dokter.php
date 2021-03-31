<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        // $this->load->model('');
    }
    public function index()
    {
        $data['data'] = $this->home_m->dokter();
        $this->load->view('home/templates/header');
        $this->load->view('home/info_dokter', $data);
        $this->load->view('home/templates/footer');
    }
}

/* End of file Info_dokter.php */
