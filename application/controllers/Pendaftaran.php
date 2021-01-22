<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_m');
        $this->load->helper('tgl_indo');
        $this->load->library('Pdf');
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

    public function daftar($cetak = null)
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

        if ($cetak == false) {

            $this->load->view('home/templates/header');
            $this->load->view('home/daftar', $data);
            $this->load->view('home/templates/footer');
        } elseif ($cetak == true) {
            error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL

            $pdf = new FPDF('L', 'mm', 'Letter');

            $pdf->AddPage();

            $pdf->SetFont('Arial', 'B', 16);
            $pdf->Cell(0, 7, 'DAFTAR PEGAWAI AYONGODING.COM', 0, 1, 'C');
            $pdf->Cell(10, 7, '', 0, 1);

            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(10, 6, 'No', 1, 0, 'C');
            $pdf->Cell(90, 6, 'Nama Pegawai', 1, 0, 'C');
            $pdf->Cell(120, 6, 'Alamat', 1, 0, 'C');
            $pdf->Cell(40, 6, 'Telp', 1, 1, 'C');

            $pdf->SetFont('Arial', '', 10);
            $pegawai = $this->db->get('pegawai')->result();
            $no = 0;
            foreach ($pegawai as $data) {
                $no++;
                $pdf->Cell(10, 6, $no, 1, 0, 'C');
                $pdf->Cell(90, 6, $data->nama, 1, 0);
                $pdf->Cell(120, 6, $data->alamat, 1, 0);
                $pdf->Cell(40, 6, $data->telp, 1, 1);
            }
            $pdf->Output();
        }
    }




    // function getNum()
    // {
    //     //        $str = file_get_contents('http://192.168.11.15/qumatic/standard/api/intkiosk?id=1');
    //     ////        $json = json_decode($str, true);
    //     $x = date('Y-m-d');
    //     $str = file_get_contents('http://192.168.11.5:8081/qumatic/standard/api/intkiosk?id=0&date=' . $x);
    //     //$json = json_decode($str, true);
    //     //$str = '{"data": "0003","type": "donut"}';
    //     echo $str;
    // }

    // function save()
    // {
    //     $x = explode('__', $param);
    //     $data['tglreg'] = $x[0];
    //     $data['idpasien'] = $x[2];
    //     $data['nama'] = str_replace('%20', ' ', $x[3]); //$x[3];
    //     $data['poli'] = str_replace('%20', ' ', $x[4]);
    //     $data['noantri'] = str_replace('%20', ' ', $x[1]); //$x[1];
    //     $this->load->view('home/cetak_antrian', $data, true);

    //     $pdf = $this->pdf->load();
    //     $pdf->allow_charset_conversion = true;
    //     $pdf->charset_in = 'UTF-8';
    //     $html = $this->load->view('home/cetak_antrian', $data, true);
    //     $pdf->WriteHTML($html);
    //     $output = 'Q' . $idpasien . date('Y_m_d_H_i_s') . '.pdf';
    //     $pdf->Output("$output", 'I');
    // }
}

    
/* End of file Controllername.php */
