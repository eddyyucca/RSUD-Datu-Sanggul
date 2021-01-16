<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pendaftaran extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
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

    public function daftar()
    {
        $tgl = $this->input->post('tgl_berobat');
        $rm = $this->input->post('rm');
        $cek = $this->home_m->get_pasien_row($rm);
        if (condition) {
            # code...
        }
        $data['data_pasien'] = $this->home_m->get_pasien_row($rm);

        $tahun = substr($tgl, 0, 4);
        $bulan = substr($tgl, 5, 2);
        $tgl = substr($tgl, 8, 2);

        $tanggal = $tahun . "-" . $bulan . "-" . $tgl;

        $data['tgl_berobat'] = $this->input->post('tgl_berobat');
        $str = file_get_contents('http://192.168.11.83:8081/qumatic/standard/api/intkiosk?id=0&date=' . $tanggal);
        $json = json_decode($str, true);
        $data['noantri'] = $json['data'];
        $data['poli'] = $this->input->post('poli');

        $this->load->view('home/templates/header');
        $this->load->view('home/daftar', $data);
        $this->load->view('home/templates/footer');
    }




    function getNum()
    {
        //        $str = file_get_contents('http://192.168.11.15/qumatic/standard/api/intkiosk?id=1');
        ////        $json = json_decode($str, true);
        $x = date('Y-m-d');
        $str = file_get_contents('http://192.168.11.5:8081/qumatic/standard/api/intkiosk?id=0&date=' . $x);
        //$json = json_decode($str, true);
        //$str = '{"data": "0003","type": "donut"}';
        echo $str;
    }

    function save($param)
    {
        $x = '2121';
        $data['tglreg'] = $x[0];
        $data['idpasien'] = $x[2];
        $data['nama'] = str_replace('%20', ' ', $x[3]); //$x[3];
        $data['poli'] = str_replace('%20', ' ', $x[4]);
        $data['noantri'] = str_replace('%20', ' ', $x[1]); //$x[1];
        $this->load->view('main/vantrian_pdf', $data, true);
        $idpasien = '2121';
        $pdf = $this->m_pdf->load();
        $pdf->allow_charset_conversion = true;
        $pdf->charset_in = 'UTF-8';
        $html = $this->load->view('main/vantrian_pdf', $data, true);
        $pdf->WriteHTML($html);
        $output = 'Q' . $idpasien . date('Y_m_d_H_i_s') . '.pdf';
        $pdf->Output("$output", 'I');
    }
}
    
/* End of file Controllername.php */
