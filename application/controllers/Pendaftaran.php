<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        $this->load->helper('tgl_indo');
        // $this->load->library('Pdf');
    }

    public function index()
    {
        $data['poliklinik'] = $this->home_m->poliklinik();
        $this->load->view('home/templates/header');
        $this->load->view('home/pendaftaran_antri', $data);
        $this->load->view('home/templates/footer');
    }

    public function data_pasien()
    {
        $ttl_1 = $this->input->post('ttl');
        $rm = $this->input->post('rm');

        $tahun = substr($ttl_1, 0, 4);
        $bulan = substr($ttl_1, 5, 2);
        $tgl = substr($ttl_1, 8, 2);

        $tanggal = $tahun . "-" . $bulan . "-" . $tgl;
        $data['data_pasien'] = $this->home_m->get_user_row($rm, $tanggal);
        $data['poli'] = $this->input->post('poli');
        $data['poliklinik'] = $this->home_m->poliklinik();
        $this->load->view('home/templates/header');
        $this->load->view('home/data_pasien', $data);
        $this->load->view('home/templates/footer');
    }

    public function daftar($rm = null)
    {
        $tgl = $this->input->post('tgl_berobat');
        $rm = $this->input->post('rm');

        $data['data_pasien'] = $this->home_m->get_pasien_row($rm);

        $tahun = substr($tgl, 0, 4);
        $bulan = substr($tgl, 5, 2);
        $tgl = substr($tgl, 8, 2);

        if ($tgl == false) {
            $tanggal = date('Y-m-d');
        } elseif ($tgl == true) {
            $tanggal = $tahun . "-" . $bulan . "-" . $tgl;
        }

        $data['tgl_berobat'] = longdate_indo($tanggal);
        $str = file_get_contents('http://192.168.11.83:8081/qumatic/standard/api/intkiosk?id=0&date=' . $tanggal);
        $json = json_decode($str, true);
        $data['noantri'] = $json['data'];
        $data['poli'] = $this->input->post('poli');

        if ($rm == false) {
            $this->load->view('home/templates/header');
            $this->load->view('home/daftar', $data);
            $this->load->view('home/templates/footer');
        } elseif ($rm == true) {
            $pdf = $this->load->library('Pdf');           // $pdf->allow_charset_conversion = true;
            // $pdf->charset_in = 'UTF-8';
            $this->load->view('home/cetak_antrian', $data, true);
            // $pdf->WriteHTML($html);
            // $output = 'Q' . $rm . date('Y_m_d_H_i_s') . '.pdf';
            // $pdf->Output("$output", 'I');
        }
    }
}

    
/* End of file Controllername.php */
