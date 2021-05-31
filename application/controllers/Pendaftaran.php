<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        $this->load->helper('tgl_indo');
    }

    public function index()
    {
        $data['pesan'] = false;

        $this->load->view('home/templates/header');
        $this->load->view('home/pendaftaran_antri', $data);
        $this->load->view('home/templates/footer');
    }

    public function data_pasien()
    {
        $ttl_1 = $this->input->post('ttl');
        $no_ktp = $this->input->post('no_ktp');
        $rm = $this->input->post('rm');

        $tahun = substr($ttl_1, 0, 4);
        $bulan = substr($ttl_1, 5, 2);
        $tgl = substr($ttl_1, 8, 2);

        $tanggal = $tahun . "-" . $bulan . "-" . $tgl;
        $data['data_pasien'] = $this->home_m->get_user_row($no_ktp, $rm, $tanggal);
        $data['poli'] = $this->input->post('poli');
        $data['poliklinik'] = $this->home_m->poliklinik();
        $this->load->view('home/templates/header');
        $this->load->view('home/data_pasien', $data);
        $this->load->view('home/templates/footer');
    }

    public function daftar()
    {

        $tgl = $this->input->post('tgl_berobat');

        $rm = $this->input->post('rm');
        $tahun = substr($tgl, 0, 4);
        $bulan = substr($tgl, 5, 2);
        $tgl = substr($tgl, 8, 2);

        $tanggal = $tahun . "-" . $bulan . "-" . $tgl;
        $result_tgl = preg_replace("/[-]/", "", $tanggal);

        if ($result_tgl == date("Ymd")) {
            if (date("H") < "11") {
                $data['data_pasien'] = $this->home_m->get_pasien_row($rm);
                $data['tgl_berobat'] = longdate_indo($tanggal);
                $str = file_get_contents('http://192.168.66.10:8081/qumatic/standard/api/intkiosk?id=0&date=' . $tanggal);
                $json = json_decode($str, true);
                $data['noantri'] = $json['data'];
                $data['poli'] = $this->input->post('poli');

                $this->load->view('home/templates/header');
                $this->load->view('home/daftar', $data);
                $this->load->view('home/templates/footer');
            } else {
                $data['pesan'] = "<div class='alert alert-danger' role='alert'>Jam pendaftaran sudah lewat, silahkan daftar tanggal besok  !
                </div>";


                $this->load->view('home/templates/header');
                $this->load->view('home/pendaftaran_antri', $data);
                $this->load->view('home/templates/footer');
            }
        } elseif ($result_tgl > date("Ymd")) {
            $data['data_pasien'] = $this->home_m->get_pasien_row($rm);
            $data['tgl_berobat'] = longdate_indo($tanggal);
            $str = file_get_contents('http://192.168.66.10:8081/qumatic/standard/api/intkiosk?id=0&date=' . $tanggal);
            $json = json_decode($str, true);
            $data['noantri'] = $json['data'];
            $data['poli'] = $this->input->post('poli');

            $this->load->view('home/templates/header');
            $this->load->view('home/daftar', $data);
            $this->load->view('home/templates/footer');
        }
    }

    public function cetak_antrian()
    {
        $rkm_medis = $this->input->post('no_rm');
        $data['data_pasien'] = $this->home_m->get_pasien_row($rkm_medis);
        $data['tgl_berobat'] = $this->input->post('tgl_berobat');
        $data['poli_tujuan'] = $this->input->post('poli_tujuan');
        $data['noantri'] = $this->input->post('no_antrian');

        $this->load->view('home/cetak_antrian', $data);
    }
}




    
/* End of file Controllername.php */
