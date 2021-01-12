<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        $this->load->model('dokter_m');
        $this->load->library('form_validation');
        // $this->load->model('');
    }

    public function index()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['judul'] = 'dr. Eddy Adha Saputra';
        $data['data'] = $this->dokter_m->dokter_row();
        $this->load->view('dokter/template_dokter/header', $data);
        $this->load->view('dokter/dashboard', $data);
        $this->load->view('dokter/template_dokter/footer');
    }

    public function jadwal_dokter()
    {
        $this->form_validation->set_rules('waktu_masuk', 'Waktu Masuk', 'required');
        $this->form_validation->set_rules('waktu_pulang', 'Waktu Pulang', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['nama'] = 'dr. Eddy Adha Saputra';
            $data['judul'] = 'Jadwal Dokter';
            $this->load->view('dokter/template_dokter/header', $data);
            $this->load->view('dokter/jadwal_dokter', $data);
            $this->load->view('dokter/template_dokter/footer');
        } else {
            $data = array(
                'nama_jab' => $this->input->post('nama_jab')
            );
            $this->db->where('id_bidang',);
            $this->db->update('jabatan', $data);
            return redirect('admin/jabatan');
        }
    }
}

/* End of file Dokter.php */
