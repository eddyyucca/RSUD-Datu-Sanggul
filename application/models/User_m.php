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

    public function post_berita()
    {
        $this->db->order_by('id_berita', 'DESC');
        return  $this->db->get('web_blog')->result();
    }

    public function cek_url($url)
    {

        $this->db->where('url', $url);
        $this->db->limit(1);
        $query = $this->db->get('web_blog');

        if ($query->num_rows() == 1) {
            return $query->row();
        } elseif ($query->num_rows() == 0) {
            return false;
        }
    }
    public function hitung_berita()
    {
        $this->db->select_sum('id_berita');
        $query = $this->db->get('web_blog');
        if ($query->num_rows() > 0) {
            return $query->row()->id_berita;
        } else {
            return 0;
        }
    }
}

/* End of file User_m.php */
