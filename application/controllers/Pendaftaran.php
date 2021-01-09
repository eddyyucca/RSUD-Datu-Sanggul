<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pendaftaran extends CI_Controller

{
    public function index()
    {
        $this->load->view('home/templates/header');
        $this->load->view('home/pendaftaran_antri');
        $this->load->view('home/templates/footer');
    }
}
    
/* End of file Controllername.php */
