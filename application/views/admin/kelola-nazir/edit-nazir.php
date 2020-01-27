<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<h4>Informasi Data Diri Investor</h4>

	<form action="<?= base_url('admin/ubahInvn/').$datanazir['id']; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" value="<?= $datanazir['id']; ?>">
		<div class="form-group row">
			<label for="nama" class="col-md-2 col-form-label">Nama</label>
			<div class="col-md-8">
				<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="<?= $datanazir['nama']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('nama'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="nama_perusahaan" class="col-md-2 col-form-label">Nama Perusahaan</label>
			<div class="col-md-8">
				<input name="nama_perusahaan" type="text" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" value="<?= $datanazir['nama_perusahaan']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('nama_perusahaan'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-md-2 col-form-label">Email</label>
			<div class="col-md-8">
				<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?= $datanazir['email']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('email'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="telepon" class="col-md-2 col-form-label">Telepon</label>
			<div class="col-md-8">
				<input name="telepon" type="text" class="form-control" id="telepon" placeholder="Telepon" value="<?= $datanazir['telepon']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('telepon'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-md-2 col-form-label">Alamat</label>
			<div class="col-md-8">
				<input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat" value="<?= $datanazir['alamat']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('alamat'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="provinsi" class="col-md-2 col-form-label">Provinsi</label>
			<div class="col-md-8">
				<select name="provinsi" id="provinsi" class="form-control">
					<option value="<?= $datanazir['provinsi']; ?>"><?= $datanazir['provinsi']; ?></option>
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
				<input name="kota" type="text" class="form-control" id="kota" placeholder="Kota" value="<?= $datanazir['kota']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('kota'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="kecamatan" class="col-md-2 col-form-label">Kecamatan</label>
			<div class="col-md-8">
				<input name="kecamatan" type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" value="<?= $datanazir['kecamatan']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('kecamatan'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="akte_pendirian" class="col-md-2 col-form-label">Akte Pendirian</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/akte-pendirian/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
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
					<a href="<?= base_url('admin/downloadn/surat-izin-bidang-usaha/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="tdp" class="col-md-2 col-form-label">TDP</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/tdp/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="surat_keterangan_dopmisili" class="col-md-2 col-form-label">Surat Keterangan Dopmisili</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/surat-keterangan-dopmisili/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="npwp" class="col-md-2 col-form-label">NPWP</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/npwp/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="ktp" class="col-md-2 col-form-label">KTP</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/ktp/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="laporan_pajak_tahunan" class="col-md-2 col-form-label">Laporan Pajak Tahunan</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/laporan-pajak-tahunan/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="laporan_keuangan" class="col-md-2 col-form-label">Laporan Keuangan</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/laporan-keuangan/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="harga" class="col-md-2 col-form-label">Harga</label>
			<div class="col-md-8">
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text">Rp.</div>
					</div>
					<input name="harga" type="text" class="form-control" id="harga" placeholder="Harga" value="<?= $datanazir['harga']; ?>">
					<small id="message" class="form-text text-danger ml-3"><?= form_error('harga'); ?></small> 
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="lokasi" class="col-md-2 col-form-label">Lokasi</label>
			<div class="col-md-8">
				<input name="lokasi" type="text" class="form-control" id="lokasi" placeholder="Lokasi" value="<?= $datanazir['lokasi']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('lokasi'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="periode" class="col-md-2 col-form-label">Periode</label>
			<div class="col-md-8">
				<input name="periode" type="text" class="form-control" id="periode" placeholder="Periode" value="<?= $datanazir['periode']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('periode'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="return" class="col-md-2 col-form-label">Return</label>
			<div class="col-md-8">
				<input name="return" type="text" class="form-control" id="return" placeholder="Return" value="<?= $datanazir['return_']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('return'); ?></small>
			</div>
		</div>
		<!-- Foto Proyek -->
		<div class="form-group row">
			<label for="fotoproyek1" class="col-md-2 col-form-label">Foto Proyek 1</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/fotoproyek1/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
				<div class="col-md ml-5">
					<input name="fotoproyek1" type="file" class="form-control-file" id="fotoproyek1">
					<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PNG, JPG, JPEG Max 2MB</small>
					<small id="message" class="form-text text-danger ml-3"><?= form_error('fotoproyek1'); ?></small>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="fotoproyek2" class="col-md-2 col-form-label">Foto Proyek 2</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/fotoproyek2/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
				<div class="col-md ml-5">
					<input name="fotoproyek2" type="file" class="form-control-file" id="fotoproyek2">
					<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PNG, JPG, JPEG Max 2MB</small>
					<small id="message" class="form-text text-danger ml-3"><?= form_error('fotoproyek2'); ?></small>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="fotoproyek3" class="col-md-2 col-form-label">Foto Proyek 3</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/fotoproyek3/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
				<div class="col-md ml-5">
					<input name="fotoproyek3" type="file" class="form-control-file" id="fotoproyek3">
					<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PNG, JPG, JPEG Max 2MB</small>
					<small id="message" class="form-text text-danger ml-3"><?= form_error('fotoproyek3'); ?></small>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="fotoproyek4" class="col-md-2 col-form-label">Foto Proyek 4</label>
			<div class="row">
				<div class="col-md-3">
					<a href="<?= base_url('admin/downloadn/fotoproyek4/').$datanazir['id']; ?>" class="badge badge-warning ml-3">Download</a>
				</div>
				<div class="col-md ml-5">
					<input name="fotoproyek4" type="file" class="form-control-file" id="fotoproyek4">
					<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PNG, JPG, JPEG Max 2MB</small>
					<small id="message" class="form-text text-danger ml-3"><?= form_error('fotoproyek4'); ?></small>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="status" class="col-md-2 col-form-label">Status</label>
			<div class="col-md-3">
				<select name="status" id="status" class="form-control">
					<option value="<?= $datanazir['status']; ?>"><?= $datanazir['status']; ?></option>
					<option value="Belum Dikelola">Belum Dikelola</option>
					<option value="Sedang Dikelola">Sedang Dikelola</option>
					<option value="Sudah Dikelola">Sudah Dikelola</option>
				</select>
				<small id="message" class="form-text text-danger ml-3"><?= form_error('status'); ?></small>
			</div>
		</div>
		<!-- submit -->
		<div class="row">
			<div class="col-md-10">
				<button type="submit" class="btn btn-primary float-right px-4 py-2 mb-5">Edit!</button>
				<a href="<?= base_url('admin/kelolaNazir'); ?>" class="float-right mt-2 mx-4">Kembali</a>
			</div>
		</div>
	</form>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content