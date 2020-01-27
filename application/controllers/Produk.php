<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function index()
	{
		$data['title'] = "Produk";
		$data['products'] = $this->db->get('data_nazir')->result_array();

		$this->load->view('templates/_navbar', $data);
		$this->load->view('produk/index', $data);
		$this->load->view('templates/_footer');
	}

	public function detail($id)
	{
		$data['title'] = "Detail Produk";
		$data['product'] = $this->db->get_where('data_nazir', ['id' => $id])->row_array();

		$this->load->view('templates/_navbar', $data);
		$this->load->view('produk/detail', $data);
		$this->load->view('templates/_footer');
	}

	public function penyaluran($id)
	{
		$data['title'] = "Penyaluran Dana";
		$data['product'] = $this->db->get_where('data_nazir', ['id' => $id])->row_array();
		$data['investorpribadi'] = $this->db->get_where('investor_pribadi', ['status_confirm' => 0])->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/_navbar', $data);
			$this->load->view('produk/penyaluran', $data);
			$this->load->view('templates/_footer');
		} else {
			$nama = $this->input->post('nama', true);
			$email = $this->input->post('email', true);
			$invP = $this->db->get_where('investor_pribadi', ['email' => $email])->row_array();
			$invL = $this->db->get_where('investor_lembaga', ['email' => $email])->row_array();

			if ( $invP ) {
				$this->db->set('status_confirm', 1);
				$this->db->set('id_produk', $id);
				$this->db->where('id', $invP['id']);
				$this->db->update('investor_pribadi');

				$this->session->set_flashdata('message', 
					'<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
					Request telah diajukan. Untuk informasi selanjutnya silahkan cek pada email anda!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('produk/penyaluran/'.$id);
			}

			if( $invL ) {
				$this->db->set('status_confirm', 1);
				$this->db->set('id_produk', $id);
				$this->db->where('id', $invL['id']);
				$this->db->update('investor_lembaga');

				$this->session->set_flashdata('message', 
					'<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
					Request telah diajukan. Untuk informasi selanjutnya silahkan cek pada email anda!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('produk/penyaluran/'.$id);
			} else {
				$this->session->set_flashdata('message', 
					'<div class="alert alert-warning bg-warning alert-dismissible fade show mt-3" role="alert">
					Email yang anda masukkan tidak ada pada database kami. Silahkan daftar terlebih dahulu
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('produk/penyaluran/'.$id);
			}

			// $this->_sendEmail('penyaluran');
		}
		
	}

	protected function _sendEmail($type)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'nectitc0@gmail.com',
			'smtp_pass' => 'testing0',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		// config 2nd
		$this->email->from('nectitc0@gmail.com', 'Nect ITC');
		$this->email->to($this->input->post('email', true));

		if($type == 'penyaluran'){
			$this->email->subject('Verification Account');
			$this->email->message('No rek : 91823 <br>
				Hubungi lebih lanjut ke +6218274918241
				');
		}

		if( $this->email->send() ) {
			$this->session->set_flashdata('message', 
				'<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
				Email berhasil dikirim. Silahkan cek email anda!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('produk/penyaluran');
		} else {
			echo $this->email->print_debugger();
			die;
		}
	} 

}