<div class="container">
	<?= $this->session->flashdata('message'); ?>
	<div class="row">
		<h5 class="mb-3">Isi form sesuai dengan data yang pernah anda daftarkan <br>di Weqaf.com</h5>
		<p class="text-muted mt-5">*Pastikan email yang digunakan adalah email yang masih aktif <br>karena kami akan mengirimkan pemberitahuan ke email tersebut setelahnya</p>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<form action="<?= base_url('produk/penyaluran/').$product['id']; ?>" method="post">
				<div class="form-group row">
					<label for="nama" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama*">
						<small class="form-text text-danger mb-3"><?= form_error('nama'); ?></small>
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email*">
						<small class="form-text text-danger mb-3"><?= form_error('email'); ?></small>
					</div>
				</div>
				<div class="row float-right">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Kirim!</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>