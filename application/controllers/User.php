<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        // $this->load->model('');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/home/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function info_dokter()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/info_dr/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function info_kamar()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/info_kamar/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function profil_rsud()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/profil_rsud/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function gallery()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/profil_rsud/index', $data);
        $this->load->view('user/templates/footer');
    }

    // public function post()
    // {
    //     $this->form_validation->set_rules('nama_bidang', 'Bidang', 'required');
    //     if ($this->form_validation->run() == FALSE) {
    //         $data['judul'] = "Dashboard";
    //         $data['nama'] = "Eddy Adha Saputra";
    //         $this->load->view('user/templates/header', $data);
    //         $this->load->view('user/profil_rsud/index', $data);
    //         $this->load->view('user/templates/footer');
    //     } else {

    //         $data['judul'] = "Dashboard";
    //         $data['nama'] = "Eddy Adha Saputra";
    //         $this->load->view('user/templates/header', $data);
    //         $this->load->view('user/profil_rsud/index', $data);
    //         $this->load->view('user/templates/footer');
    //     }
    // }
    public function post()
    {
        $this->form_validation->set_rules('judul_berita', 'Judul berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Dashboard";
            $data['nama'] = "Eddy Adha Saputra";
            $this->load->view('user/templates/header', $data);
            $this->load->view('user/post/post_baru', $data);
            $this->load->view('user/templates/footer');
        } else {
            $judul_berita = $this->input->post('judul_berita');
            $url = str_replace(" ", "_", $judul_berita);
            $url_sum = $this->user_m->hitung_berita($url);
            $url_berita = $url . "-" . $url_sum;

            $config['upload_path']   = './assets/foto_berita/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['remove_space'] = TRUE;
            //$config['max_size']      = 100; 
            //$config['max_width']     = 1024; 
            //$config['max_height']    = 768;  
            $this->load->library('upload', $config);
            // script upload file 1
            $this->upload->do_upload('foto_berita');
            $x = $this->upload->data();

            $data = array(
                'url' => $url_berita,
                'judul_berita' => $this->input->post('judul_berita'),
                'isi_berita' => $this->input->post('isi_berita'),
                'foto_berita' =>  $x["orig_name"],
                'date_berita' => date("Y-m-d")
            );

            $this->db->insert('blog', $data);
            return redirect('user/berita');
        }
    }

    public function berita()
    {
        $data['judul'] = "Dashboard";
        $data['nama'] = "Eddy Adha Saputra";
        $data['data_berita'] = $this->user_m->post_berita();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/post/index', $data);
        $this->load->view('user/templates/footer');
    }
}

/* End of file user.php */
