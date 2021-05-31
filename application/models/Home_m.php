<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{
    public function dokter()
    {
        return $this->db->get('dokter')->result();
    }

    public function get_user_row($no_ktp, $rm,  $tanggal)
    {

        $this->db->where('no_ktp', $no_ktp);
        $this->db->where('no_rkm_medis', $rm);
        $this->db->where('tgl_lahir', $tanggal);
        $this->db->limit(1);
        $query = $this->db->get('pasien');
        if ($query->num_rows() == 1) {
            return $query->row();
        } elseif ($query->num_rows() == 0) {
            return false;
        }
    }

    public function get_pasien_row($rm)
    {
        $this->db->where('no_rkm_medis', $rm);
        return $this->db->get('pasien')->row();
    }


    public function poliklinik()
    {
        return $this->db->get('poliklinik')->result();
    }
    public function post_berita()
    {
        $this->db->order_by('id_berita', 'DESC');
        return  $this->db->get('web_blog')->result();
    }
    public function kepala_berita()
    {
        $this->db->order_by('id_berita', 'DESC');
        return  $this->db->get('web_blog')->row();
    }
}

/* End of file Admin_model.php */
