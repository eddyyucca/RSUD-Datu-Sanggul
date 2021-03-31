<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokter_m extends CI_Model
{

    public function dokter()
    {
        return $this->db->get('dokter')->result();
    }

    public function jadwal_dokter($id_jadwal_dokter)
    {
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->join('web_jadwal_dokter', 'dokter.kd_dokter = web_jadwal_dokter.id_dokter');
        $this->db->where('id_jadwal_dokter', $id_jadwal_dokter);
        $query = $this->db->get();
        return $query->row();
    }

    public function tanggal_dokter()
    {
        return $this->db->get('web_tanggal_dokter')->result();
    }
    public function tanggal_dokter_row($id_tgl_dokter)
    {
        $this->db->where('id_tgl_dokter', $id_tgl_dokter);
        return $this->db->get('web_tanggal_dokter')->row();
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
        $this->db->join('web_jadwal_dokter', 'dokter.kd_dokter = web_jadwal_dokter.id_dokter');
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file Admin_model.php */
