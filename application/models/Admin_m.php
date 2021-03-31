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
}

/* End of file Admin_m.php */
