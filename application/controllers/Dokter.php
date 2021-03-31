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

    public function data_tanggal()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['judul'] = 'dr. Eddy Adha Saputra';
        $data['hari_dokter'] = $this->dokter_m->hari_dokter();
        $data['data'] = $this->dokter_m->tanggal_dokter();
        $this->load->view('dokter/template_dokter/header', $data);
        $this->load->view('dokter/data_tanggal', $data);
        $this->load->view('dokter/template_dokter/footer');
    }

    public function tambah_dokter($id_tgl)
    {
        $this->form_validation->set_rules('waktu_masuk', 'Waktu Masuk', 'required');
        $this->form_validation->set_rules('waktu_keluar', 'Waktu Pulang', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['nama'] = 'dr. Eddy Adha Saputra';
            $data['judul'] = 'Jadwal Dokter';
            $data['id_tgl'] = $id_tgl;
            $data['dokter'] = $this->dokter_m->dokter();
            $this->load->view('dokter/template_dokter/header', $data);
            $this->load->view('dokter/jadwal_dokter', $data);
            $this->load->view('dokter/template_dokter/footer');
        } else {
            $xx = "";
            foreach ($this->input->post('waktu[]') as $x) {
                $xx .= $x . ",";
            }
            $data = array(
                'id_dokter' => $this->input->post('id_dokter'),
                'id_tgl_dokter' => $this->input->post('id_tgl_dokter'),
                'waktu_masuk' => $this->input->post('waktu_masuk'),
                'waktu_keluar' => $this->input->post('waktu_keluar'),
                'hari' => $xx,
            );

            $this->db->insert('jadwal_dokter', $data);
            return redirect('dokter/data_tanggal');
        }
    }

    public function tanggal_dokter()
    {
        $this->form_validation->set_rules('tanggal_awal', 'Tanggal Awal', 'required');
        $this->form_validation->set_rules('tanggal_akhir', 'Tanggal Akhir', 'required');
        $this->form_validation->set_rules('poli', 'Poli', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['nama'] = 'dr. Eddy Adha Saputra';
            $data['judul'] = 'Jadwal Dokter';
            $data['poliklinik'] = $this->home_m->poliklinik();
            $this->load->view('dokter/template_dokter/header', $data);
            $this->load->view('dokter/tanggal_dokter', $data);
            $this->load->view('dokter/template_dokter/footer');
        } else {
            $data = array(
                'tanggal_awal' => $this->input->post('tanggal_awal'),
                'tanggal_akhir' => $this->input->post('tanggal_akhir'),
                'poli' => $this->input->post('poli'),
            );
            $this->db->insert('tanggal_dokter', $data);
            return redirect('dokter/tanggal_dokter');
        }
    }
}

/* End of file Dokter.php */
