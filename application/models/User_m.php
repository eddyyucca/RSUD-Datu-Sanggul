<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{

    public function pasien()
    {
        return $this->db->get('pasien')->result();
    }

    public function jadwal_dokter()
    {

        $this->db->select('*');
        $this->db->from('jadwal');
    }
}

/* End of file User_m.php */
