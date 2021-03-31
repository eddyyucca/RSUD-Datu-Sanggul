<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        $this->load->model('dokter_m');
        $this->load->model('admin_m');
        $this->load->library('form_validation');
        // $this->load->model('');
    }

    public function index()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['data'] = $this->dokter_m->dokter_row();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/template_admin/footer');
    }

    // dokter
    public function cek_akun_dokter()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['dokter'] = $this->dokter_m->dokter();
        $data['akun_dokter'] = $this->dokter_m->akun_dokter();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/dokter/cek_akun_dokter', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function buat_akun_dokter($id_dokter)
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['dokter'] = $this->dokter_m->dokter();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/dokter/buat_akun_dokter', $data);
        $this->load->view('admin/template_admin/footer');
    }
    // end dokter

    // permintaan
    public function permintaan_kerja()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['dokter'] = $this->dokter_m->dokter();
        $data['data_petugas'] = $this->admin_m->petugas_simrs();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/permintaan/permintaan_kerja', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function petugas_simrs()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['data'] = $this->admin_m->petugas_simrs();
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/permintaan/petugas_simrs', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function tambah_petugas()
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/permintaan/tambah_petugas', $data);
        $this->load->view('admin/template_admin/footer');
    }

    public function edit_petugas($id_petugas)
    {
        $data['nama'] = 'dr. Eddy Adha Saputra';
        $data['data'] = $this->admin_m->petugas_simrs_row($id_petugas);
        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/permintaan/edit_petugas', $data);
        $this->load->view('admin/template_admin/footer');
    }

    public function proses_tambah_petugas()
    {
        $data = array(
            "nama_petugas" => $this->input->post('nama_petugas')
        );

        $this->db->insert('petugas_simrs', $data);
        return redirect("admin/petugas_simrs");
    }

    public function proses_edit_petugas($id_petugas)
    {
        $data = array(
            "nama_petugas" => $this->input->post('nama_petugas')
        );
        $this->db->where('id_petugas_simrs', $id_petugas);
        $this->db->update('petugas_simrs', $data);
        return redirect("admin/petugas_simrs");
    }

    public function hapus_petugas($id_petugas)
    {
        $this->db->where('id_petugas_simrs', $id_petugas);
        $this->db->delete('petugas_simrs');
        return redirect("admin/petugas_simrs");
    }
    // end permintaan
}

/* End of file Admin.php */
