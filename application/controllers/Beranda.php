<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$data['title'] = "WEQAF";
		$this->load->view('templates/_beranda_navbar', $data);
		$this->load->view('beranda/index', $data);
		$this->load->view('templates/_beranda_footer');
	}
}