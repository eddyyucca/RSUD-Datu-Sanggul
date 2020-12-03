<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('pages/templates/header');
        $this->load->view('pages/home');
        $this->load->view('pages/templates/footer');
    }
}

/* End of file Home.php */
