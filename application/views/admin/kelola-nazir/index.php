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
					<th scope="col">Nama Perusahaan</th>
					<th scope="col">Email</th>
					<th scope="col">No Telepon</th>
					<th scope="col">Alamat</th>
					<th scope="col">Status Konfirmasi</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1;
				foreach ($datanazir as $data) : ?>
					<tr>
						<th scope="row"><?= $i++; ?></th>
						<td><?= $data['nama']; ?></td>
						<td><?= $data['nama_perusahaan']; ?></td>
						<td><?= $data['email']; ?></td>
						<td><?= $data['telepon']; ?></td>
						<td><?= $data['alamat']; ?></td>
						<td><b><?= $data['status']; ?></b></td>
						<td>
							<a href="<?= base_url('admin/detailn/').$data['id']; ?>" class="badge badge-primary p-2 mt-2">Detail</a>
							<a href="<?= base_url('admin/hapusDatan/').$data['id']; ?>" class="badge btn-danger p-2 mt-2" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?');">Hapus</a>
							<a href="<?= base_url('admin/ubahInvn/').$data['id']; ?>" class="badge badge-success p-2 mt-2">Edit</a>
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