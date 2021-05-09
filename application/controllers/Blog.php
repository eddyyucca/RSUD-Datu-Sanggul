<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
	}
	public function index()
	{
		$data['data_berita'] = $this->home_m->post_berita();
		$data['kepala_berita'] = $this->home_m->kepala_berita();
		$this->load->view('home/templates/header');
		$this->load->view('home/blog', $data);
		$this->load->view('home/templates/footer');
	}
}
