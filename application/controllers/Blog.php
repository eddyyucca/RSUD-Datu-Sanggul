<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function index()
	{
		$this->load->view('home/templates/header');
		$this->load->view('home/blog');
		$this->load->view('home/templates/footer');
	}
}
