<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data['title'] = "test";
		$this->form_validation->set_rules('userfile1', 'Data', 'trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('asd', $data);
		} else {

			$nama = $this->input->post('nama');
			$this->db->set('nama', $nama);

			if (isset($_FILES['userfile1'])) {
				$this->_upl('ktp', 'userfile1', $_FILES['userfile1']['name']);
			}
			if (isset($_FILES['userfile2'])) {
				$this->_upl('tdp', 'userfile2', $_FILES['userfile2']['name']);
			}
			if (isset($_FILES['userfile3'])) {
				$this->_upl('npwp', 'userfile3', $_FILES['userfile3']['name']);
			}
			$this->db->insert('testing1');


			// $nama = $this->input->post('nama');
			// $this->db->set('nama', $nama);

			// for ($i=1; $i<=3; $i++) { 
			// 	$upl = $_FILES['userfile'.$i]['name'];
			// 	if ($i == 1) {
			// 		$type = 'ktp';
			// 	}
			// 	if ($i == 2) {
			// 		$type = 'tdp';
			// 	}
			// 	if ($i == 3) {
			// 		$type = 'npwp';
			// 	}

			// 	if ($upl) {
			// 		$config['allowed_types']    = 'jpg|png|jpeg';
			// 		$config['max_size']         = '20480';
			// 		$config['upload_path']      = './assets/data/' . $type . '/';
			// 		// $config['file_name'] = $type . '|' . $_FILES['userfile'.$i]['name'];

			// 		$this->load->library('upload', $config);
			// 		$this->upload->initialize($config);

			// 		if ( !empty($this->upload->do_upload('userfile'.$i)) ) {
			// 			$file = $type . '|';
			// 			$file .= $this->upload->data('file_name');

			// 			$expFile = explode('|', $file);
			// 			$tp = $expFile[0];

			// 			$this->db->set($tp, $file);

			// 		} else {
			// 			echo $this->upload->display_errors();
			// 		}
			// 	}
			// }
			// $this->db->insert('testing1');


		}
	}

	protected function _upl($type, $name, $fileName)
	{
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '2048';
		$config['upload_path']   = './resources/data/data-investor-lembaga/'. $type . '/';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( $this->upload->do_upload($name) ) {
			$usfile = $this->upload->data('file_name');
			$this->db->set($type, $fileName);
		}
	}
}