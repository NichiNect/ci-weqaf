<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Auth
 */
class Auth extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Login Page Admin";

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/login', $data);
		} else {
			$usname = $this->input->post('username', true);
			$pasw = $this->input->post('password', true);

			$user = $this->db->get_where('user_admin', ['username' => $usname])->row_array();

			// user found
			if ( $user ) {
				if ( password_verify($pasw, $user['password']) ) {
					// success login
					$data = [
						'username' => $user['username'],
						'email' => $user['email'],
						'role' => $user['role'],
					];
					$this->session->set_userdata($data);

					if ($data['role'] == 1) {
						redirect('admin');
					}
				} else {
					$this->session->set_flashdata('message', 
						'<div class="alert alert-danger alert-dismissible fade show mt-3 col-lg" role="alert">
						Password Salah!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', 
					'<div class="alert alert-danger alert-dismissible fade show mt-3 col-lg" role="alert">
					Username yang anda masukkan tidak sesuai dengan database kami!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('auth');
			}
		}
	}

	public function register() 
	{
		$data['title'] = "Register Page Admin";

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/register', $data);
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$newPassword = password_hash($password, PASSWORD_DEFAULT);
			$data = [
				'username' => $username,
				'email' => 'emasil@kamsd.as',
				'password' => $newPassword,
				'role' => 1
			];
			$this->db->insert('user_admin', $data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');

		$this->session->set_flashdata('message', 
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
			You have been logged out!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('auth/index');
	}

}