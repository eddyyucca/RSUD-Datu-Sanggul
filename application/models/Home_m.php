<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{

    public function dokter()
    {
        return $this->db->get('dokter')->result();
    }
}

/* End of file Admin_model.php */
