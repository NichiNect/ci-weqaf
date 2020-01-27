<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data['title'] = "Contact Me";
		$this->load->view('templates/_navbar', $data);
		$this->load->view('contact/index', $data);
		$this->load->view('templates/_footer');
	}
}