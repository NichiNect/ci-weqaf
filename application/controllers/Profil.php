<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		$data['title'] = "Profil";
		$this->load->view('templates/_navbar', $data);
		$this->load->view('profil/profil', $data);
		$this->load->view('templates/_footer');
	}
}