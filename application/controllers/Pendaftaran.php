<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pendaftaran extends CI_Controller

{
    public function index()
    {
        $this->load->view('pages/templates/header');
        $this->load->view('pages/pendaftaran_antri');
        $this->load->view('pages/templates/footer');
    }
}
    
/* End of file Controllername.php */
