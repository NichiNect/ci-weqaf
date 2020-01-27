<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<br>
	<h4>Informasi Data Diri Investor</h4>

	<form action="<?= base_url('admin/ubahInvp/').$datainvestor['id']; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" value="<?= $datainvestor['id']; ?>">
		<div class="form-group row">
			<label for="nama" class="col-md-2 col-form-label">Nama</label>
			<div class="col-md-8">
				<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="<?= $datainvestor['nama']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('nama'); ?></small>
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
			<label for="pendidikanTerakhir" class="col-md-2 col-form-label">Pendidikan Terakhir</label>
			<div class="col-md-8">
				<input name="pendidikanTerakhir" type="text" class="form-control" id="pendidikanTerakhir" placeholder="Pendidikan Terakhir" value="<?= $datainvestor['pendidikan_terakhir']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('pendidikanTerakhir'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="sumberDana" class="col-md-2 col-form-label">Sumber Dana</label>
			<div class="col-md-8">
				<input name="sumberDana" type="text" class="form-control" id="sumberDana" placeholder="Sumber Dana" value="<?= $datainvestor['sumber_dana']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('sumberDana'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="pekerjaan" class="col-md-2 col-form-label">Pekerjaan</label>
			<div class="col-md-8">
				<input name="pekerjaan" type="text" class="form-control" id="pekerjaan" 
				placeholder="Pekerjaan" value="<?= $datainvestor['pekerjaan']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('pekerjaan'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="penghasilanBulanan" class="col-md-2 col-form-label">Penghasilan Bulanan</label>
			<div class="input-group col-md-6">
				<div class="input-group-prepend">
					<div class="input-group-text">Rp.</div>
				</div>
				<input name="penghasilanBulanan" type="text" class="form-control" id="penghasilanBulanan" placeholder="Penghasilan Bulanan" value="<?= $datainvestor['penghasilan_bulanan']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('penghasilanBulanan'); ?></small>
			</div>
		</div>
		<br>
		<h4>Informasi Rekening</h4>
		<div class="form-group row">
			<label for="bank" class="col-md-2 col-form-label">Bank Yang Digunakan</label>
			<div class="col-md-8">
				<select name="bank" id="bank" class="form-control">
					<option value="<?= $datainvestor['bank']; ?>"><?= $datainvestor['bank']; ?></option>
					<option> -- Pilih Bank -- </option>
					<option value="Bank Muamalat">Bank Muamalat</option>
					<option value="Bank BRI Syariah">Bank BRI Syariah</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="cabang" class="col-md-2 col-form-label">Cabang</label>
			<div class="col-md-8">
				<input name="cabang" type="text" class="form-control" id="cabang" placeholder="Cabang" value="<?= $datainvestor['cabang']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('cabang'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="noRek" class="col-md-2 col-form-label">No Rekening</label>
			<div class="col-md-8">
				<input name="noRek" type="text" class="form-control" id="noRek" placeholder="Rekening" value="<?= $datainvestor['no_rek']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('noRek'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="atasNama" class="col-md-2 col-form-label">Atas Nama</label>
			<div class="col-md-8">
				<input name="atasNama" type="text" class="form-control" id="atasNama" placeholder="Atas Nama" value="<?= $datainvestor['atas_nama']; ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('atasNama'); ?></small>
			</div>
		</div>
		<br>
		<h4>Informasi Lanjutan</h4>
		<div class="form-group row">
			<label for="noKTP" class="col-md-2 col-form-label">No KTP</label>
			<div class="col-md-8">
				<input name="noKTP" type="text" class="form-control" id="noKTP" placeholder="No KTP" value="<?= $datainvestor['no_ktp'] ?>">
				<small id="message" class="form-text text-danger ml-3"><?= form_error('noKTP'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="fotoKTP" class="col-md-2 col-form-label">Foto KTP</label>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-3">
						<a href="" data-toggle="modal" data-target="#exampleModal">
							<img src="<?= base_url('resources/data/data-investor-pribadi/fotoktp/').$datainvestor['foto_ktp']; ?>" class="img img-thumbnail" style="width:300px;">
						</a>
					</div>
					<div class="col-md-5 ml-5">
						<input name="fotoKTP" type="file" class="form-control-file" id="fotoKTP">
						<small style="font-size: 75%;" class="form-text text-muted mb-2">Format JPG, JPEG, PNG Max 1MB</small>
						<small id="message" class="form-text text-danger ml-3"><?= form_error('fotoKTP'); ?></small>
					</div>
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
				<a href="<?= base_url('admin/kelolaInvestorPribadi'); ?>" class="float-right mt-2 mx-4">Kembali</a>
			</div>
		</div>

	</form>






</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- MODAL KTP -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Foto KTP</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="<?= base_url('resources/data/data-investor-pribadi/fotoktp/').$datainvestor['foto_ktp']; ?>" class="img img-thumbnail">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>