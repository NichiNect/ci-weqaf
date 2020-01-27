<div class="container">
	<?php $jenis = "Investor Pribadi"; ?>

	<div class="row">
		<a href="<?= base_url('mitra');  ?>" class="btn btn-outline-success <?php if ($title == 'Daftar Sebagai Pengolah') { echo 'active'; } ?>">
			Sebagai Nazir/Pengolah
		</a>
		<a href="<?= base_url('mitra/investorLembaga'); ?>" class="btn btn-outline-success ml-auto <?php if ($title == 'Daftar Sebagai Investor') { echo "active"; } ?>">
			Sebagai Investor
		</a>
	</div>


	<div class="row mt-2">
		<button class="btn btn-outline-warning ml-auto mr-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Pilih Jenis Investor
		</button>
		<div class="collapse" id="collapseExample">
			<div class="card card-body row">
				<a href="<?= base_url('mitra/investorLembaga') ?>" class="btn btn-outline-primary <?php if ($jenis == 'Investor Lembaga') { echo 'active'; } ?>">Investor Lembaga</a>
				<a href="<?= base_url('mitra/investorPribadi') ?>" class="btn btn-outline-primary mt-3 <?php if ($jenis == 'Investor Pribadi') { echo 'active'; } ?>">Investor Pribadi</a>
			</div>
		</div>
	</div>

	<div class="row">
		<?= $this->session->flashdata('message'); ?>
	</div>

	<div class="row mt-4">
		<p><b>Data Diri</b></p>
	</div>

	<?php echo form_open_multipart('mitra/investorPribadi'); ?>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="nama">Nama : </label>
			<input name="nama" type="text" class="form-control" id="nama">
			<small style="font-size: 50px;" id="message" class="form-text text-danger ml-3"><?= form_error('nama'); ?></small>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="telepon">Telepon : </label>
			<input name="telepon" type="text" class="form-control" id="telepon">
			<small id="message" class="form-text text-danger ml-3"><?= form_error('telepon'); ?></small>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="email">Email : </label>
			<input name="email" type="email" class="form-control" id="email">
			<small id="message" class="form-text text-danger ml-3"><?= form_error('email'); ?></small>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="pendidikanTerakhir">Pendidikan Terakhir : </label>
			<input name="pendidikanTerakhir" type="text" class="form-control" id="pendidikanTerakhir">
			<small id="message" class="form-text text-danger ml-3"><?= form_error('pendidikanTerakhir'); ?></small>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="sumberDana">Sumber Dana : </label>
			<input name="sumberDana" type="text" class="form-control" id="sumberDana">
			<small id="message" class="form-text text-danger ml-3"><?= form_error('sumberDana'); ?></small>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="pekerjaan">Pekerjaan : </label>
			<input name="pekerjaan" type="text" class="form-control" id="pekerjaan">
			<small id="message" class="form-text text-danger ml-3"><?= form_error('pekerjaan'); ?></small>
		</div>
	</div>
	<label for="penghasilanBulanan">Penghasilan Bulanan : </label>
	<div class="row">
		<div class="input-group col-md-6">
			<div class="input-group-prepend">
				<div class="input-group-text">Rp.</div>
			</div>
			<input name="penghasilanBulanan" type="text" class="form-control" id="penghasilanBulanan">
			<small id="message" class="form-text text-danger ml-3"><?= form_error('penghasilanBulanan'); ?></small>
		</div>
	</div>
	<hr>

	<!-- Informasi Rekening -->

	<div class="row mt-4">
		<p class="ml-auto mr-auto"><b>Informasi Rekening</b></p>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<small style="font-size: 95%;" class="form-text text-muted">Bank*</small>
				<select name="bank" id="bank" class="form-control">
					<option value="Bank Muamalat">Bank Muamalat</option>
					<option value="Bank BRI Syariah">Bank BRI Syariah</option>
				</select>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<small style="font-size: 95%;" class="form-text text-muted">Cabang*</small>
				<input name="cabang" type="text" class="form-control" id="cabang">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('cabang'); ?></small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<small style="font-size: 95%;" class="form-text text-muted">No Rek*</small>
				<input name="norek" type="text" class="form-control" id="norek">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('norek'); ?></small>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<small style="font-size: 95%;" class="form-text text-muted">Atas Nama*</small>
				<input name="atasNama" type="text" class="form-control" id="atasNama">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('atasNama'); ?></small>
			</div>
		</div>
	</div>

	<!-- KTP -->
	<div class="row mt-5">
		<div class="col-lg-6">
			<div class="form-group">
				<small style="font-size: 100%;" class="form-text text-muted">No KTP*</small>
				<input name="noKtp" type="text" class="form-control" id="noKtp" placeholder="No KTP*">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('noKtp'); ?></small>
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-lg-6">
			<div class="form-group">
				<small style="font-size: 100%;" class="form-text text-muted">KTP*</small>
				<input name="ktp" type="file" class="form-control-file" id="ktp">
				<small style="font-size: 75%;" class="form-text text-muted mb-2">Format JPG, JPEG, PNG Max 1MB</small>
				<small id="message" class="form-text text-danger ml-3"><?= form_error('ktp'); ?></small>
			</div>
		</div>
	</div>

	<div class="row">
		<button type="submit" class="btn btn-primary btn-lg mt-2 ml-auto mr-auto pl-5 pr-5 mb-5">SUBMIT</button>
	</div>

</form>

</div>