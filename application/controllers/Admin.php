<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin Page
 */
class Admin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Admin_model', 'admin');
	}

	public function index()
	{
		$data['title'] = "Login Page";
		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/blank', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function reqprib()
	{
		$data['title'] = "Request Investor Pribadi";
		$data['datainvestor'] = $this->admin->getAllDataByStatus1('investor_pribadi');

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/kelola-investor-pribadi/request-pribadi', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function detailp($id)
	{
		$data['title'] = "Detail Investor Pribadi";
		$data['datainvestor'] = $this->admin->getDataById('investor_pribadi', $id);
		$data['dataproduk'] = $this->admin->getDataById('data_nazir', $data['datainvestor']['id_produk']);

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/kelola-investor-pribadi/detail-investor-pribadi', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function getkonfirm()
	{
		$idInv = $this->input->post('id');
		
		// echo json_encode($this->db->get_where('investor_pribadi', ['id' => $idInv])->row_array());
		echo json_encode($this->admin->getDataById('investor_pribadi', $idInv));
	}

	public function getkonfirm2()
	{
		$idInv = $this->input->post('id');
		echo json_encode($this->admin->getDataById('investor_lembaga', $idInv));
	}

	public function konfirm($table, $id)
	{
		$idInv = $this->input->post('idd');
		$dataInv = $this->admin->getDataById($table, $idInv);
		$this->admin->confirmInv($table, $id);

		// $tab = $this->uri->segment(3);

		$data = ['status' => 'Sedang Dikelola'];
		$this->db->update('data_nazir', $data, "id = ".$dataInv['id_produk']);

		// send Email
		if ($this->input->post('accfile') == NULL) {
			$accfile = $_FILES['accfile']['name'];

			if (isset($_FILES['accfile'])) {
				$config['allowed_types'] = 'jpeg|jpg|png|pdf';
				$config['max_size']      = '2048';
				$config['upload_path']   = './resources/pengesahan/';
				$this->load->library('upload', $config);

				if ( $this->upload->do_upload('accfile') ) {
					$accfile = $this->upload->data('file_name');
					// (filename, email)
					$this->_sendEmail($accfile, $dataInv['email']);

					unlink(FCPATH . 'resources/pengesahan/' . $accfile);
				} else {
					echo $this->upload->display_errors();
				}
			}
		}

		$this->session->set_flashdata('message', 
			'<div class="alert alert-success alert-dismissible fade show mt-3 col-lg" role="alert">
			Data berhasil dikonfirmasi
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		if ($table == 'investor_pribadi') {
			redirect('admin/reqprib');
		} else if ($table == "investor_lembaga") {
			redirect('admin/reqlemb');
		}
		
	}

	public function reject($table, $id)
	{
		$dataInv = $this->admin->getDataById($table, $id);

		$this->admin->rejectInv($table, $id, $dataInv['foto_ktp']);
		$this->session->set_flashdata('message', 
			'<div class="alert alert-warning alert-dismissible fade show mt-3 col-lg" role="alert">
			Request permintaan telah ditolak
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		if ($table == 'investor_pribadi') {
			redirect('admin/reqprib');
		} else if ($table == "investor_lembaga") {
			redirect('admin/reqlemb');
		}
	}

	public function kelolaInvestorPribadi()
	{
		$data['title'] = "Pengelolaan Investor Pribadi";
		$data['datainvestor'] = $this->admin->getAllData('investor_pribadi');

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/kelola-investor-pribadi/index', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function hapusData($id)
	{
		$datainvestor = $this->admin->getDataById('investor_pribadi', $id);
		unlink(FCPATH . 'resources/data/data-investor-pribadi/fotoktp/' . $datainvestor['foto_ktp']);
		$this->admin->deleteData('investor_pribadi', $id);

		$this->session->set_flashdata('message', 
			'<div class="alert alert-danger alert-dismissible fade show mt-3 col-lg" role="alert">
			Data telah Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('admin/kelolaInvestorPribadi');
	}

	public function ubahInvp($id)
	{
		$data['title'] = "Edit Investor Pribadi";
		$data['datainvestor'] = $this->admin->getDataById('investor_pribadi', $id);

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('pendidikanTerakhir', 'Pendidikan Terakhir', 'trim|required');
		$this->form_validation->set_rules('sumberDana', 'Sumber Dana', 'trim|required');
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
		$this->form_validation->set_rules('penghasilanBulanan', 'penghasilanBulanan', 'trim|required');
		$this->form_validation->set_rules('cabang', 'Cabang', 'trim|required');
		$this->form_validation->set_rules('noRek', 'No Rek', 'trim|required');
		$this->form_validation->set_rules('atasNama', 'atasNama', 'trim|required');
		$this->form_validation->set_rules('noKTP', 'No KTP', 'trim|required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/_adminheader', $data);
			$this->load->view('templates/_adminsidebar', $data);
			$this->load->view('templates/_adminnavbar', $data);
			$this->load->view('admin/kelola-investor-pribadi/edit-investor-pribadi', $data);
			$this->load->view('templates/_adminfooter');
		} else {
			$imageUpload = $_FILES['fotoKTP']['name'];

			if (isset($_FILES['fotoKTP'])) {
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './resources/data/data-investor-pribadi/fotoktp/';
				$this->load->library('upload', $config);

				if ( $this->upload->do_upload('fotoKTP') ) {
					$oldImage = $data['datainvestor']['foto_ktp'];
					unlink(FCPATH . 'resources/data/data-investor-pribadi/fotoktp/' . $oldImage);
					$newImage = $this->upload->data('file_name');
					$this->db->set('foto_ktp', $newImage);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = [
				'nama' => $this->input->post('nama', true),
				'telepon' => $this->input->post('telepon', true),
				'pendidikan_terakhir' => $this->input->post('pendidikanTerakhir', true),
				'sumber_dana' => $this->input->post('sumberDana', true),
				'pekerjaan' => $this->input->post('pekerjaan', true),
				'penghasilan_bulanan' => $this->input->post('penghasilanBulanan', true),
				'bank' => $this->input->post('bank', true),
				'cabang' => $this->input->post('cabang', true),
				'no_rek' => $this->input->post('noRek', true),
				'atas_nama' => $this->input->post('atasNama', true),
				'no_ktp' => $this->input->post('noKTP', true),
				'status_confirm' => $this->input->post('statusConfirm', true),
			];

			if ($this->input->post('status_confirm') == 0) {
				$this->db->set('id_produk', 0);
			}

			$this->db->set($data);
			$this->db->where('id', $id);
			$this->db->update('investor_pribadi');

			$this->session->set_flashdata('message', 
				'<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
				Data Berhasil Diedit!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/kelolaInvestorPribadi');
		}

	}

	public function downloadp($type, $id)
	{	
		$data = $this->admin->getDataById('investor_pribadi', $id);
		force_download(FCPATH . 'resources/data/data-investor-pribadi/fotoktp/' . $data['foto_ktp'], NULL);
	}

	// Investor Lembaga

	public function reqlemb()
	{
		$data['title'] = "Konfirmasi Investor Lembaga";
		$data['datainvestor'] = $this->admin->getAllDataByStatus1('investor_lembaga');

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/kelola-investor-lembaga/request-lembaga', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function detaill($id)
	{
		$data['title'] = "Detail Investor Lembaga";
		$data['datainvestor'] = $this->admin->getDataById('investor_lembaga', $id);
		$data['dataproduk'] = $this->admin->getDataById('data_nazir', $data['datainvestor']['id_produk']);

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/kelola-investor-lembaga/detail-inv-lembaga', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function downloadl()
	{
		$id = $this->uri->segment(4);
		$folder = $this->uri->segment(3);
		$data = $this->admin->getDataById('investor_lembaga', $id);

		switch ($folder) {
			case 'akte-pendirian':
			$fromdb = 'akte_pendirian';
			break;
			case 'surat-izin-bidang-usaha':
			$fromdb = 'surat_izin_bidang_usaha';
			break;
			case 'tdp':
			$fromdb = 'tdp';
			break;
			case 'surat-keterangan-dopmisili':
			$fromdb = 'surat_keterangan_dopmisili';
			break;
			case 'npwp':
			$fromdb = 'npwp';
			break;
			case 'ktp':
			$fromdb = 'ktp_pengurus';
			break;
			case 'laporan-pajak-tahunan':
			$fromdb = 'laporan_pajak_tahunan';
			break;
			case 'laporan-keuangan':
			$fromdb = 'laporan_keuangan';
			break;
			default:
			$this->session->set_flashdata('message', 
				'<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
				Terjadi Kesalahan pada Data!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/reqlemb');
			break;
		}
		force_download(FCPATH . 'resources/data/data-investor-lembaga/' . $folder . '/' . $data[$fromdb], NULL);
	}

	public function kelolaInvestorLembaga()
	{
		$data['title'] = "Pengelolaan Investor Lembaga";
		$data['datainvestor'] = $this->admin->getAllData('investor_lembaga');

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/kelola-investor-lembaga/index', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function hapusDatal($id)
	{
		$datainvestor = $this->admin->getDataById('investor_lembaga', $id);
		// delete file from resources
		unlink(FCPATH . 'resources/data/data-investor-lembaga/akte-pendirian/' . $datainvestor['akte_pendirian']);
		unlink(FCPATH . 'resources/data/data-investor-lembaga/surat-izin-bidang-usaha/' . $datainvestor['surat_izin_bidang_usaha']);
		unlink(FCPATH . 'resources/data/data-investor-lembaga/tdp/' . $datainvestor['tdp']);
		unlink(FCPATH . 'resources/data/data-investor-lembaga/akte-pendirian/' . $datainvestor['akte_pendirian']);
		unlink(FCPATH . 'resources/data/data-investor-lembaga/surat-keterangan-dopmisili/' . $datainvestor['surat_keterangan_dopmisili']);
		unlink(FCPATH . 'resources/data/data-investor-lembaga/npwp/' . $datainvestor['npwp']);
		unlink(FCPATH . 'resources/data/data-investor-lembaga/ktp/' . $datainvestor['ktp_pengurus']);
		unlink(FCPATH . 'resources/data/data-investor-lembaga/laporan-pajak-tahunan/' . $datainvestor['laporan_pajak_tahunan']);
		unlink(FCPATH . 'resources/data/data-investor-lembaga/laporan-keuangan/' . $datainvestor['laporan_keuangan']);

		$this->admin->deleteData('investor_lembaga', $id);

		$this->session->set_flashdata('message', 
			'<div class="alert alert-danger alert-dismissible fade show mt-3 col-lg" role="alert">
			Data telah Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('admin/kelolaInvestorLembaga');
	}

	public function ubahInvl($id)
	{
		$data['title'] = "Edit Investor Lembaga";
		$data['datainvestor'] = $this->admin->getDataById('investor_lembaga', $id);
		$data['provinsi'] = [
			'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Kep. Riau', 'Kep. Bangka Belitung', 'Jambi', 'Sumatera Selatan', 'Bengkulu', 'Lampung', 'DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah', 'Daerah Istimewa Yogyakarta', 'Jawa Timur', 'Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Kalimantan Barat',' Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara', 'Sulawesi Utara', 'Gorontalo', 'Sulawesi', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Barat','Maluku', 'Maluku Utara', 'Papua', 'Papua Barat'
		];

		// validation
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/_adminheader', $data);
			$this->load->view('templates/_adminsidebar', $data);
			$this->load->view('templates/_adminnavbar', $data);
			$this->load->view('admin/kelola-investor-lembaga/edit-investor-lembaga', $data);
			$this->load->view('templates/_adminfooter');
		} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'nama_perusahaan' => $this->input->post('nama_perusahaan', true),
				'email' => $this->input->post('email', true),
				'telepon' => $this->input->post('telepon', true),
				'alamat' => $this->input->post('alamat', true),
				'provinsi' => $this->input->post('provinsi', true),
				'kota' => $this->input->post('kota', true),
				'kecamatan' => $this->input->post('kecamatan', true),
				'status_confirm' => $this->input->post('status_confirm', true),
			];

			if ($this->input->post('status_confirm') == 0) {
				$this->db->set('id_produk', 0);
			}

			$this->db->set($data);
			$this->db->where('id', $id);
			$this->db->update('investor_lembaga');

			$this->session->set_flashdata('message', 
				'<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
				Data Berhasil Diedit!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/kelolaInvestorLembaga');
		}
	}


	// Kelola Nazir


	public function kelolaNazir()
	{
		$data['title'] = "Pengelolaan Nazir";
		$data['datanazir'] = $this->admin->getAllData('data_nazir');

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/kelola-nazir/index', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function detailn($id)
	{
		$data['title'] = "Detail Nazir";
		$data['datanazir'] = $this->admin->getDataById('data_nazir', $id);

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/kelola-nazir/detail-nazir', $data);
		$this->load->view('templates/_adminfooter');
	}

	public function hapusDatan($id)
	{
		$datanazir = $this->admin->getDataById('data_nazir', $id);
		// delete file from resources
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/akte-pendirian/' . $datanazir['akte_pendirian']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/surat-izin-bidang-usaha/' . $datanazir['surat_izin_bidang_usaha']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/tdp/' . $datanazir['tdp']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/surat-keterangan-dopmisili/' . $datanazir['surat_keterangan_dopmisili']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/npwp/' . $datanazir['npwp']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/ktp/' . $datanazir['ktp']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/laporan-pajak-tahunan/' . $datanazir['laporan_pajak_tahunan']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/laporan-keuangan/' . $datanazir['laporan_keuangan']);
		// fproyek
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/foto-proyek/' . $datanazir['fproyek1']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/foto-proyek/' . $datanazir['fproyek2']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/foto-proyek/' . $datanazir['fproyek3']);
		unlink(FCPATH . 'resources/data/data-nazir-pengolah/foto-proyek/' . $datanazir['fproyek4']);

		$this->admin->deleteData('data_nazir', $id);

		$this->session->set_flashdata('message', 
			'<div class="alert alert-danger alert-dismissible fade show mt-3 col-lg" role="alert">
			Data telah Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('admin/kelolaNazir');
	}

	public function ubahInvn($id) 
	{
		$data['title'] = "Edit Data Nazir";
		$data['datanazir'] = $this->admin->getDataById('data_nazir', $id);
		$data['provinsi'] = [
			'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Kep. Riau', 'Kep. Bangka Belitung', 'Jambi', 'Sumatera Selatan', 'Bengkulu', 'Lampung', 'DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah', 'Daerah Istimewa Yogyakarta', 'Jawa Timur', 'Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Kalimantan Barat',' Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara', 'Sulawesi Utara', 'Gorontalo', 'Sulawesi', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Barat','Maluku', 'Maluku Utara', 'Papua', 'Papua Barat'
		];

		// validation
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahan', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		$this->form_validation->set_rules('periode', 'Periode', 'trim|required');
		$this->form_validation->set_rules('return', 'Return', 'trim|required');



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/_adminheader', $data);
			$this->load->view('templates/_adminsidebar', $data);
			$this->load->view('templates/_adminnavbar', $data);
			$this->load->view('admin/kelola-nazir/edit-nazir', $data);
			$this->load->view('templates/_adminfooter');
		} else {


			$data = [
				'nama' => $this->input->post('nama', true),
				'nama_perusahaan' => $this->input->post('nama_perusahaan', true),
				'email' => $this->input->post('email', true),
				'telepon' => $this->input->post('telepon', true),
				'alamat' => $this->input->post('alamat', true),
				'provinsi' => $this->input->post('provinsi', true),
				'kota' => $this->input->post('kota', true),
				'kecamatan' => $this->input->post('kecamatan', true),
				'harga' => $this->input->post('harga', true),
				'lokasi' => $this->input->post('lokasi', true),
				'periode' => $this->input->post('periode', true),
				'return_' => $this->input->post('return', true),
				'status' => $this->input->post('status', true),
			];

			$this->db->set($data);
			$this->db->where('id', $id);
			$this->db->update('data_nazir');


			$this->session->set_flashdata('message', 
				'<div class="alert alert-success alert-dismissible fade show mt-3 col-lg" role="alert">
				Data berhasil diedit!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/kelolaNazir');
		}
	}

	public function downloadn($folder, $id)
	{
		// $id = $this->uri->segment(4);
		// $folder = $this->uri->segment(3);
		$data = $this->admin->getDataById('data_nazir', $id);

		switch ($folder) {
			case 'akte-pendirian':
			$fromdb = 'akte_pendirian';
			break;
			case 'surat-izin-bidang-usaha':
			$fromdb = 'surat_izin_bidang_usaha';
			break;
			case 'tdp':
			$fromdb = 'tdp';
			break;
			case 'surat-keterangan-dopmisili':
			$fromdb = 'surat_keterangan_dopmisili';
			break;
			case 'npwp':
			$fromdb = 'npwp';
			break;
			case 'ktp':
			$fromdb = 'ktp';
			break;
			case 'laporan-pajak-tahunan':
			$fromdb = 'laporan_pajak_tahunan';
			break;
			case 'laporan-keuangan':
			$fromdb = 'laporan_keuangan';
			break;
			case 'fotoproyek1':
			$folder = 'foto-proyek';
			$fromdb = 'fproyek1';
			break;
			case 'fotoproyek2':
			$folder = 'foto-proyek';
			$fromdb = 'fproyek2';
			break;
			case 'fotoproyek3':
			$folder = 'foto-proyek';
			$fromdb = 'fproyek3';
			break;
			case 'fotoproyek4':
			$folder = 'foto-proyek';
			$fromdb = 'fproyek4';
			break;
			default:
			$this->session->set_flashdata('message', 
				'<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
				Terjadi Kesalahan pada Data!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/kelolaNazir');
			break;
		}

		force_download(FCPATH . 'resources/data/data-nazir-pengolah/' . $folder . '/' . $data[$fromdb], NULL);
	}


	// TESTIMONI


	public function testimoni()
	{
		$data['title'] = "Testimoni";
		$data['testi'] = $this->admin->getAllData('testimoni');

		$this->load->view('templates/_adminheader', $data);
		$this->load->view('templates/_adminsidebar', $data);
		$this->load->view('templates/_adminnavbar', $data);
		$this->load->view('admin/testimoni/index', $data);
		$this->load->view('templates/_adminfooter');
	}













	protected function _sendEmail($filename, $em)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'weqafcom@gmail.com',
			'smtp_pass' => 'rootweqaf',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		// config 2nd
		$this->email->from('weqafcom@gmail.com', 'WEQAF');
		$this->email->to($em);

		$this->email->subject('WEQAF COM');
		$this->email->message('Berikut kami lampirkan tanda terima dari pihak pengolah(nazir).<br>
			Untuk informasi lebih lanjut silahkan hubungi zainuddinilham96@gmail.com atau <a href="https://api.whatsapp.com/send?phone=6285242374550">Ilham</a>');
		$this->email->attach(FCPATH . 'resources/pengesahan/' . $filename);


		if( $this->email->send() ) {
			// var_dump($em);
		} else {
			echo $this->email->print_debugger();
			die;
		}
	} 


}