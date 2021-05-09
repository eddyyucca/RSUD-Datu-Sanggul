<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{
    public function petugas_simrs()
    {
        return $this->db->get('petugas_simrs')->result();
    }

    public function petugas_simrs_row($id_petugas)
    {
        $this->db->where('id_petugas_simrs', $id_petugas);
        return $this->db->get('petugas_simrs')->row();
    }

    public function data_login()
    {
        return $this->db->get('web_login')->result();
    }
    public function data_login_row($id_login)
    {
        $this->db->where('id_login', $id_login);
        return $this->db->get('web_login')->row();
    }
}

/* End of file Admin_m.php */
