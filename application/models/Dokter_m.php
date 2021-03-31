<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokter_m extends CI_Model
{

    public function dokter()
    {
        return $this->db->get('dokter')->result();
    }

    public function tanggal_dokter()
    {
        return $this->db->get('tanggal_dokter')->result();
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

    public function hari_dokter()
    {
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->join('jadwal_dokter', 'dokter.kd_dokter = jadwal_dokter.id_dokter');
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file Admin_model.php */
