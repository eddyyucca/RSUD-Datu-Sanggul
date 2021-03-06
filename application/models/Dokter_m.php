<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokter_m extends CI_Model
{

    public function dokter()
    {
        return $this->db->get('dokter')->result();
    }

    public function akun_dokter()
    {
        return $this->db->get('akun_dokter')->result();
    }
    public function dokter_row()
    {
        $this->db->where('kd_dokter', 'D0000001');
        return $this->db->get('dokter')->row();
    }
}

/* End of file Admin_model.php */
