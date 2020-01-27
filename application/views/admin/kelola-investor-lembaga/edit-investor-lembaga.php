<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<form action="<?= base_url('admin/ubahInvl/').$datainvestor['id']; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" value="<?= $datainvestor['id']; ?>">
		<h4>Informasi Data Diri Investor</h4>
		<div class="form-group row">
			<label for="nama" class="col-md-2 col-form-label">Nama</label>
			<div class="col-md-8">
				<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="<?= $datainvestor['nama']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('nama'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="nama_perusahaan" class="col-md-2 col-form-label">Nama Perusahaan</label>
			<div class="col-md-8">
				<input name="nama_perusahaan" type="text" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" value="<?= $datainvestor['nama_perusahaan']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('nama_perusahaan'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-md-2 col-form-label">Email</label>
			<div class="col-md-8">
				<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?= $datainvestor['email']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('email'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="telepon" class="col-md-2 col-form-label">Telepon</label>
			<div class="col-md-8">
				<input name="telepon" type="text" class="form-control" id="telepon" placeholder="Telepon" value="<?= $datainvestor['telepon']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('telepon'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-md-2 col-form-label">Alamat</label>
			<div class="col-md-8">
				<input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat" value="<?= $datainvestor['alamat']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('alamat'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="provinsi" class="col-md-2 col-form-label">Provinsi</label>
			<div class="col-md-8">
				<select name="provinsi" id="provinsi" class="form-control">
					<option value="<?= $datainvestor['provinsi']; ?>"><?= $datainvestor['provinsi']; ?></option>
					<?php foreach ($provinsi as $prov): ?>
						<option value="<?= $prov; ?>"><?= $prov; ?></option>
					<?php endforeach ?>
				</select>
				<small id="message" class="form-text text-danger ml-3"><?= form_error('provinsi'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="kota" class="col-md-2 col-form-label">Kota</label>
			<div class="col-md-8">
				<input name="kota" type="text" class="form-control" id="kota" placeholder="Kota" value="<?= $datainvestor['kota']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('kota'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="kecamatan" class="col-md-2 col-form-label">Kecamatan</label>
			<div class="col-md-8">
				<input name="kecamatan" type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" value="<?= $datainvestor['kecamatan']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('kecamatan'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="akte_pendirian" class="col-md-2 col-form-label">Akte Pendirian</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadl/akte-pendirian/').$datainvestor['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
				<!-- <div class="col-md ml-5">
					<input name="akte_pendirian" type="file" class="form-control-file" id="akte_pendirian">
					<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PDF Max 20MB</small>
					<small id="message" class="form-text text-danger ml-3"><?= form_error('akte_pendirian'); ?></small>
				</div> -->
			</div>
		</div>
		<div class="form-group row">
			<label for="surat_izin_bidang_usaha" class="col-md-2 col-form-label">Surat Izin Bidang Usaha</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadl/surat-izin-bidang-usaha/').$datainvestor['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="tdp" class="col-md-2 col-form-label">TDP</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadl/tdp/').$datainvestor['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="surat_keterangan_dopmisili" class="col-md-2 col-form-label">Surat Keterangan Dopmisili</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadl/surat-keterangan-dopmisili/').$datainvestor['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="npwp" class="col-md-2 col-form-label">NPWP</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadl/npwp/').$datainvestor['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="ktp" class="col-md-2 col-form-label">KTP Pengurus</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadl/ktp/').$datainvestor['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="laporan_pajak_tahunan" class="col-md-2 col-form-label">Laporan Pajak Tahunan</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadl/laporan-pajak-tahunan/').$datainvestor['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="laporan_keuangan" class="col-md-2 col-form-label">Laporan Keuangan</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadl/laporan-keuangan/').$datainvestor['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<br>
		<h4>Status Konfirmasi</h4>
		<div class="form-group row">
			<label for="bank" class="col-md-2 col-form-label">Status Konfirmasi</label>
			<div class="col-md-3">
				<select name="statusConfirm" id="bank" class="form-control">
					<option value="<?= $datainvestor['status_confirm']; ?>">
						<?php 
							if ($datainvestor['status_confirm'] == 0) {
								echo "Belum Melakukan Request";
							} else if($datainvestor['status_confirm'] == 1) {
								echo "Telah Mengajukan Request";
							} else if($datainvestor['status_confirm'] == 2) {
								echo "Request Telah Dikonfirmasi";
							}
						 ?>
					</option>
					<option value="0">Belum Melakukan Request</option>
					<option value="1">Telah Mengajukan Request</option>
					<option value="2">Request Telah Dikonfirmasi</option>
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10">
				<button type="submit" class="btn btn-primary float-right px-4 py-2 mb-5">Edit!</button>
				<a href="<?= base_url('admin/kelolaInvestorLembaga'); ?>" class="float-right mt-2 mx-4">Kembali</a>
			</div>
		</div>

	</form>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->