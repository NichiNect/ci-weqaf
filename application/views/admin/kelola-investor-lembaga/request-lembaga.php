<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	
	<div class="row">
		<div class="col-lg">
			<?= $this->session->flashdata('message'); ?>
		</div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama Pendaftar</th>
					<th scope="col">Nama Perusahaan</th>
					<th scope="col">Email</th>
					<th scope="col">No Telepon</th>
					<th scope="col">Status Konfirmasi</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php $i=1;
				foreach ($datainvestor as $data) : ?>
					<tr>
						<th scope="row"><?= $i++; ?></th>
						<td><?= $data['nama']; ?></td>
						<td><?= $data['nama_perusahaan']; ?></td>
						<td><?= $data['email']; ?></td>
						<td><?= $data['telepon']; ?></td>
						<td><b>
							<?php 
							if ($data['status_confirm'] == 0) {
								echo "Belum Dikonfirmasi";
							} else if ($data['status_confirm'] == 1) {
								echo "Sudah Dikonfirmasi";
							}
							?></b>
						</td>
						<td>
							<a href="<?= base_url('admin/detaill/').$data['id']; ?>" class="badge badge-primary p-2 mt-2">Detail</a>
							<a href="<?= base_url('admin/konfirm/investor_lembaga/').$data['id']; ?>" class="badge badge-success p-2 mt-2 konfirmM" data-toggle="modal" data-target="#accfile" data-id="<?= $data['id']; ?>">Konfirmasi</a>
							<a href="<?= base_url('admin/reject/investor_lembaga/').$data['id']; ?>" class="badge badge-danger p-2 mt-2" onclick="return confirm('Apakah anda yakin ingin?');">Tolak</a>
						</td>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php if ($datainvestor == []) : ?>
		<h3 class="mx-auto my-4">Data Tidak Ditemukan</h3>
	<?php endif; ?>

</div>

<!-- MODAL ACC -->
<!-- Modal -->
<div class="modal fade" id="accfile" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Kirimkan Dokumen Pengesahan?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/konfirm/investor_lembaga/'); ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="idd" id="idd" value="">
						<label for="accfile">PDF Pengesahan</label>
						<input name="accfile" type="file" class="form-control-file" id="accfile">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Kirimkan PDF</button>
			</div>
				</form>
		</div>
	</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->