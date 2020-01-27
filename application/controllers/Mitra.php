<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$data['title'] = 'Daftar Sebagai Pengolah';

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('namaPerusahaan', 'Nama Perusahaan', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');

		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		$this->form_validation->set_rules('periode', 'Periode', 'trim|required');
		$this->form_validation->set_rules('return', 'Return', 'trim|required');
		$this->form_validation->set_rules('aturlok', 'Lokasi', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['provinsi'] = [
				'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Kep. Riau', 'Kep. Bangka Belitung', 'Jambi', 'Sumatera Selatan', 'Bengkulu', 'Lampung', 'DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah', 'Daerah Istimewa Yogyakarta', 'Jawa Timur', 'Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Kalimantan Barat',' Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara', 'Sulawesi Utara', 'Gorontalo', 'Sulawesi', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Barat','Maluku', 'Maluku Utara', 'Papua', 'Papua Barat'
			];
			$this->load->view('templates/_navbar', $data);
			$this->load->view('mitra/index', $data);
			$this->load->view('templates/_footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'nama_perusahaan' => $this->input->post('namaPerusahaan', true),
				'email' => $this->input->post('email', true),
				'telepon' => $this->input->post('telepon', true),
				'alamat' => $this->input->post('alamat', true),
				'provinsi' => $this->input->post('provinsi', true),
				'kota' => $this->input->post('kota', true),
				'kecamatan' => $this->input->post('kecamatan', true)
			];
			$this->db->set($data);

			// params  =  $dir, $name, $fileName, $type
			if (isset($_FILES['userfile1'])) {
				$this->_uploadpdfnazir('akte-pendirian', 'userfile1', $_FILES['userfile1']['name'], 'akte_pendirian');
			}
			if (isset($_FILES['userfile2'])) {
				$this->_uploadpdfnazir('surat-izin-bidang-usaha', 'userfile2', $_FILES['userfile2']['name'], 'surat_izin_bidang_usaha');
			}
			if (isset($_FILES['userfile3'])) {
				$this->_uploadpdfnazir('tdp', 'userfile3', $_FILES['userfile3']['name'], 'tdp');
			}
			if (isset($_FILES['userfile4'])) {
				$this->_uploadpdfnazir('surat-keterangan-dopmisili', 'userfile4', $_FILES['userfile4']['name'], 'surat_keterangan_dopmisili');
			}
			if (isset($_FILES['userfile5'])) {
				$this->_uploadpdfnazir('npwp', 'userfile5', $_FILES['userfile5']['name'], 'npwp');
			}
			if (isset($_FILES['userfile6'])) {
				$this->_uploadpdfnazir('ktp', 'userfile6', $_FILES['userfile6']['name'], 'ktp');
			}
			if (isset($_FILES['userfile7'])) {
				$this->_uploadpdfnazir('laporan-pajak-tahunan', 'userfile7', $_FILES['userfile7']['name'], 'laporan_pajak_tahunan');
			}
			if (isset($_FILES['userfile8'])) {
				$this->_uploadpdfnazir('laporan-keuangan', 'userfile8', $_FILES['userfile8']['name'], 'laporan_keuangan');
			}

			// info product
			$data_product = [
				'harga' => $this->input->post('harga', true),
				'lokasi' => $this->input->post('lokasi', true),
				'periode' => $this->input->post('periode', true),
				'return_' => $this->input->post('return', true),
				'status' => 'Belum Dikelola',
			];

			$this->db->set($data_product);

			// foto proyek
			// params  =  $dir, $name, $fileName, $type

			if (isset($_FILES['fproyek1'])) {
				$this->_uploadpdfnazir('foto-proyek', 'fproyek1', $_FILES['fproyek1']['name'], 'fproyek1');
			}
			if (isset($_FILES['fproyek2'])) {
				$this->_uploadpdfnazir('foto-proyek', 'fproyek2', $_FILES['fproyek2']['name'], 'fproyek2');
			}
			if (isset($_FILES['fproyek3'])) {
				$this->_uploadpdfnazir('foto-proyek', 'fproyek3', $_FILES['fproyek3']['name'], 'fproyek3');
			}
			if (isset($_FILES['fproyek4'])) {
				$this->_uploadpdfnazir('foto-proyek', 'fproyek4', $_FILES['fproyek4']['name'], 'fproyek4');
			}

			$this->db->insert('data_nazir');

			$this->session->set_flashdata('message', 
				'<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
				Data berhasil ditambahkan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('mitra');
		}
	}

	protected function _uploadpdfnazir($dir, $name, $fileName, $type)
	{
		$config['allowed_types'] = 'pdf|png';
		$config['max_size']      = '2048';
		$config['upload_path']   = './resources/data/data-nazir-pengolah/'. $dir . '/';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( $this->upload->do_upload($name) ) {
			$usfile = $this->upload->data('file_name');
			$this->db->set($type, $fileName);
		}
	}

	protected function _upload_img($dir, $name, $fileName, $type)
	{
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '2048';
		$config['upload_path']   = './resources/data/data-nazir-pengolah/'. $dir . '/';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( $this->upload->do_upload($name) ) {
			$usfile = $this->upload->data('file_name');
			$this->db->set($type, $fileName);
		}
	}

	public function investorLembaga() 
	{
		$data['title'] = 'Daftar Sebagai Investor';
		$data['provinsi'] = [
			'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Kep. Riau', 'Kep. Bangka Belitung', 'Jambi', 'Sumatera Selatan', 'Bengkulu', 'Lampung', 'DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah', 'Daerah Istimewa Yogyakarta', 'Jawa Timur', 'Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Kalimantan Barat',' Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara', 'Sulawesi Utara', 'Gorontalo', 'Sulawesi', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Barat','Maluku', 'Maluku Utara', 'Papua', 'Papua Barat'
		];

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('namaPerusahaan', 'Nama Perusahaan', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/_navbar', $data);
			$this->load->view('mitra/investor-lembaga', $data);
			$this->load->view('templates/_footer');
		} else {
			$data = [
				'id' => '',
				'nama' => $this->input->post('nama', true),
				'nama_perusahaan' => $this->input->post('namaPerusahaan', true),
				'email' => $this->input->post('email', true),
				'telepon' => $this->input->post('telepon', true),
				'alamat' => $this->input->post('alamat', true),
				'provinsi' => $this->input->post('provinsi', true),
				'kota' => $this->input->post('kota', true),
				'kecamatan' => $this->input->post('kecamatan', true),
			];
			$this->db->set($data);

			if (isset($_FILES['userfile1'])) {
				$this->_uploadpdf('akte-pendirian', 'userfile1', $_FILES['userfile1']['name'], 'akte_pendirian');
			}
			if (isset($_FILES['userfile2'])) {
				$this->_uploadpdf('surat-izin-bidang-usaha', 'userfile2', $_FILES['userfile2']['name'], 'surat_izin_bidang_usaha');
			}
			if (isset($_FILES['userfile3'])) {
				$this->_uploadpdf('tdp', 'userfile3', $_FILES['userfile3']['name'], 'tdp');
			}
			if (isset($_FILES['userfile4'])) {
				$this->_uploadpdf('surat-keterangan-dopmisili', 'userfile4', $_FILES['userfile4']['name'], 'surat_keterangan_dopmisili');
			}
			if (isset($_FILES['userfile5'])) {
				$this->_uploadpdf('npwp', 'userfile5', $_FILES['userfile5']['name'], 'npwp');
			}
			if (isset($_FILES['userfile6'])) {
				$this->_uploadpdf('ktp', 'userfile6', $_FILES['userfile6']['name'], 'npwp');
			}
			if (isset($_FILES['userfile7'])) {
				$this->_uploadpdf('laporan-pajak-tahunan', 'userfile7', $_FILES['userfile7']['name'], 'laporan_pajak_tahunan');
			}
			if (isset($_FILES['userfile8'])) {
				$this->_uploadpdf('laporan-keuangan', 'userfile8', $_FILES['userfile8']['name'], 'laporan_keuangan');
			}



			$this->db->insert('investor_lembaga');
			$this->session->set_flashdata('message', 
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data berhasil ditambahkan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('mitra/investorLembaga');
		}

	}

	protected function _uploadpdf($dir, $name, $fileName, $type)
	{
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']      = '2048';
		$config['upload_path']   = './resources/data/data-investor-lembaga/'. $dir . '/';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( $this->upload->do_upload($name) ) {
			$usfile = $this->upload->data('file_name');
			$this->db->set($type, $fileName);
		}
	}

	public function investorPribadi()
	{
		$data['title'] = 'Daftar Sebagai Investor';

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique');
		$this->form_validation->set_rules('pendidikanTerakhir', 'Pendidikan Terakhir', 'trim|required');
		$this->form_validation->set_rules('sumberDana', 'Sumber Dana', 'trim|required');
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
		$this->form_validation->set_rules('penghasilanBulanan', 'penghasilanBulanan', 'trim|required');
		$this->form_validation->set_rules('cabang', 'Cabang', 'trim|required');
		$this->form_validation->set_rules('norek', 'No Rek', 'trim|required');
		$this->form_validation->set_rules('atasNama', 'atasNama', 'trim|required');
		$this->form_validation->set_rules('noKtp', 'No KTP', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/_navbar', $data);
			$this->load->view('mitra/investor-pribadi', $data);
			$this->load->view('templates/_footer');
		} else {
			$fileKTP = '';
			
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']      = '2048';
			$config['upload_path']   = './resources/data/data-investor-pribadi/fotoktp';

			$this->load->library('upload', $config);

			if ( $this->upload->do_upload('ktp') ) {
				$fileKTP = $this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
			

			$data = [
				'id' => '',
				'nama' => $this->input->post('nama', true),
				'telepon' => $this->input->post('telepon', true),
				'email' => $this->input->post('email', true),
				'pendidikan_terakhir' => $this->input->post('pendidikanTerakhir', true),
				'sumber_dana' => $this->input->post('sumberDana', true),
				'pekerjaan' => $this->input->post('pekerjaan', true),
				'penghasilan_bulanan' => $this->input->post('penghasilanBulanan', true),
				'bank' => $this->input->post('bank', true),
				'cabang' => $this->input->post('cabang', true),
				'no_rek' => $this->input->post('norek', true),
				'atas_nama' => $this->input->post('atasNama', true),
				'no_ktp' => $this->input->post('noKtp'),
				'foto_ktp' => $fileKTP,
				'status_confirm' => 0,
			];

			$this->db->insert('investor_pribadi', $data);

			$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible fade show mt-3 col-lg-6" role="alert">
				Data berhasil ditambahkan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('mitra/investorPribadi');
		}


	}
}