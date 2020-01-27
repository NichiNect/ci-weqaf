<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	
	<div class="row">
		<div class="col-md">
			<?= $this->session->flashdata('message'); ?>
		</div>
	</div>

	<div class="row">

		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">Telepon</th>
					<th scope="col">Pekerjaan</th>
					<th scope="col">No KTP</th>
					<th scope="col">Foto KTP</th>
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
						<td><?= $data['telepon']; ?></td>
						<td><?= $data['pekerjaan']; ?></td>
						<td><?= $data['no_ktp']; ?></td>
						<td>
							<img src="<?= base_url('resources/data/data-investor-pribadi/fotoktp/').$data['foto_ktp']; ?>" class="img img-thumbnail">
						</td>
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
							<a href="<?= base_url('admin/detailp/').$data['id']; ?>" class="badge badge-primary p-2 mt-2">Detail</a>
							<a href="<?= base_url('admin/hapusdata/').$data['id']; ?>" class="badge btn-danger p-2 mt-2" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?');">Hapus</a>
							<a href="<?= base_url('admin/ubahInvp/').$data['id']; ?>" class="badge badge-success p-2 mt-2">Edit</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->