<div class="container">
	<?php $jenis = "Investor Lembaga"; ?>
	
	<div class="row">
		<a href="<?= base_url('mitra');  ?>" class="btn btn-outline-success <?php if ($title == 'Daftar Sebagai Pengolah') { echo 'active'; } ?>">
			Sebagai Nazir/Pengolah
		</a>
		<a href="<?= base_url('mitra/investorLembaga'); ?>" class="btn btn-outline-success ml-auto <?php if ($title == 'Daftar Sebagai Investor') { echo "active"; } ?>">
			Sebagai Investor
		</a>
	</div>
	
	<?= $this->session->flashdata('message'); ?>

	<div class="row mt-2">
		<button class="btn btn-outline-warning ml-auto mr-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Pilih Jenis Investor
		</button>
		<div class="collapse" id="collapseExample">
			<div class="card card-body">
				<a href="<?= base_url('mitra/investorLembaga') ?>" class="btn btn-outline-primary <?php if ($jenis == 'Investor Lembaga') { echo 'active'; } ?>">Investor Lembaga</a>
				<a href="<?= base_url('mitra/investorPribadi') ?>" class="btn btn-outline-primary mt-3 <?php if ($jenis == 'Investor Pribadi') { echo 'active'; } ?>">Investor Pribadi</a>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-lg-8">
			<small class="form-text text-muted mb-3">Field dengan tanda * wajib diisi</small>
			<h6><b>Informasi Kontak</b></h6>
		</div>
	</div>

	<form action="<?= base_url('mitra/investorLembaga'); ?>" method="post" enctype="multipart/form-data">
		<div class="row mt-4">
			<div class="col-lg-6">
				<div class="form-group">
					<!-- <label for="exampleInputEmail1">Nama</label> -->
					<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama*">
					<small class="form-text text-danger mb-3"><?= form_error('nama'); ?></small>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<input name="namaPerusahaan" type="text" class="form-control" id="namaPerusahaan" placeholder="Nama Perusahaan*">
					<small class="form-text text-danger mb-3"><?= form_error('namaPerusahaan'); ?></small>
				</div>
			</div>
		</div>

		<div class="row mt-2">
			<div class="col-lg-6">
				<div class="form-group">
					<input name="email" type="email" class="form-control" id="email" placeholder="Email*">
					<small class="form-text text-danger mb-3"><?= form_error('email'); ?></small>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<input name="telepon" type="text" class="form-control" id="telepon" placeholder="Telepon*">
					<small class="form-text text-danger mb-3"><?= form_error('telepon'); ?></small>
				</div>
			</div>
		</div>

		<div class="row mt-2">
			<div class="col-lg">
				<textarea name="alamat" id="alamat" class="form-control" rows="5" placeholder="Alamat*"></textarea>
				<small class="form-text text-danger mb-3"><?= form_error('alamat'); ?></small>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small class="form-text text-muted mb-2">Provinsi*</small>
				<select name="provinsi" class="form-control" id="provinsi">
					<option> - Pilih Provinsi - </option>
					<?php for ($i=0; $i<34; $i++) : ?>
						<option value="<?= $provinsi[$i]; ?>"><?= $provinsi[$i]; ?></option>
					<?php endfor; ?>
				</select>
				<small class="form-text text-danger mb-3"><?= form_error('provinsi'); ?></small>
			</div>
			<div class="col-lg-4">
				<small class="form-text text-muted mb-2">Kota*</small>
				<input name="kota" type="text" class="form-control" id="kota" placeholder="Kota*">
				<small class="form-text text-danger mb-3"><?= form_error('kota'); ?></small>
			</div>
			<div class="col-lg-4">
				<small class="form-text text-muted mb-2">Kecamatan*</small>
				<input name="kecamatan" type="text" class="form-control" id="kecamatan" placeholder="Kecamatan*">
				<small class="form-text text-danger mb-3"><?= form_error('kecamatan'); ?></small>
			</div>
		</div>

		<!-- File -->
		<p class="mt-5"><b>Informasi Lembaga (PT, Koperasi, CV)</b></p>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small style="font-size: 90%;" class="form-text text-muted">Akte Pendirian/AD/ART dan Perubahan</small>
				<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PDF, Max 20MB</small>
				<div class="form-group">
					<input name="userfile1" type="file" class="form-control-file" id="akte">
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small style="font-size: 90%;" class="form-text text-muted">Surat Izin Sesuai Bidang Usaha (SIUP dsb.)</small>
				<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PDF, Max 20MB</small>
				<div class="form-group">
					<input name="userfile2" type="file" class="form-control-file" id="userfile2">
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small style="font-size: 90%;" class="form-text text-muted">TDP</small>
				<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PDF, Max 20MB</small>
				<div class="form-group">
					<input name="userfile3" type="file" class="form-control-file" id="tdp">
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small style="font-size: 90%;" class="form-text text-muted">SITU/Keterangan Dopmisili</small>
				<small style="font-size: 75%;" class="form-text text-muted mb-2">Format PDF, Max 20MB</small>
				<div class="form-group">
					<input name="userfile4" type="file" class="form-control-file" id="situ">
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small style="font-size: 90%;" class="form-text text-muted">NPWP (atas nama)</small>
				<small style="font-size: 90%;" class="form-text text-muted mb-2">Format PDF, Max 20MB</small>
				<div class="form-group">
					<input name="userfile5" type="file" class="form-control-file" id="npwp">
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small style="font-size: 90%;" class="form-text text-muted">KTP (sebagai penanggung jawab)</small>
				<small style="font-size: 90%;" class="form-text text-muted mb-2">Format PDF, Max 20MB</small>
				<div class="form-group">
					<input name="userfile6" type="file" class="form-control-file" id="ktp">
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small style="font-size: 90%;" class="form-text text-muted">Surat Laporan SPT Pajak Tahunan</small>
				<small style="font-size: 90%;" class="form-text text-muted mb-2">Format PDF, Max 20MB</small>
				<div class="form-group">
					<input name="userfile7" type="file" class="form-control-file" id="laporanPajak">
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-lg-4">
				<small style="font-size: 90%;" class="form-text text-muted">Laporan Keuangan</small>
				<small style="font-size: 90%;" class="form-text text-muted mb-2">Format PDF, Max 20MB</small>
				<div class="form-group">
					<input name="userfile8" type="file" class="form-control-file" id="laporanKeuangan">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg">
				<button type="submit" class="btn btn-primary btn-lg pl-5 pr-5 mt-3 mb-5 ml-auto mr-auto">SUBMIT</button>
			</div>
		</div>
	</form>

</div>