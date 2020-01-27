<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					Detail investor pribadi atas nama : <b> <?= $datanazir['nama']; ?> </b>
				</div>
				<ul class="list-group list-group-flush">
					<table class="table table-hover">
						<tr>
							<td>Nama</td>
							<td><?= $datanazir['nama']; ?></td>
						</tr>
						<tr>
							<td>Nama Perusahaan</td>
							<td><?= $datanazir['nama_perusahaan']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?= $datanazir['email']; ?></td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><?= $datanazir['telepon']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><?= $datanazir['alamat']; ?></td>
						</tr>
						<tr>
							<td>provinsi</td>
							<td><?= $datanazir['provinsi']; ?></td>
						</tr>
						<tr>
							<td>Kota</td>
							<td><?= $datanazir['kota']; ?></td>
						</tr>
						<tr>
							<td>Kecamatan</td>
							<td><?= $datanazir['kecamatan']; ?></td>
						</tr>
						<tr>
							<td>Akte Pendirian</td>
							<td>
								<a href="<?= base_url('admin/downloadn/akte-pendirian/').$datanazir['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Surat Izin Bidang Usaha</td>
							<td>
								<a href="<?= base_url('admin/downloadn/surat-izin-bidang-usaha/').$datanazir['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>TDP</td>
							<td>
								<a href="<?= base_url('admin/downloadn/tdp/').$datanazir['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Surat Keterangan Dopmisili</td>
							<td>
								<a href="<?= base_url('admin/downloadn/surat-keterangan-dopmisili/').$datanazir['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>NPWP</td>
							<td>
								<a href="<?= base_url('admin/downloadn/npwp/').$datanazir['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>KTP</td>
							<td>
								<a href="<?= base_url('admin/downloadn/ktp/').$datanazir['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Laporan Pajak Tahunan</td>
							<td>
								<a href="<?= base_url('admin/downloadn/laporan-pajak-tahunan/').$datanazir['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Laporan Keuangan</td>
							<td>
								<a href="<?= base_url('admin/downloadn/laporan-keuangan/').$datanazir['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
					</table>
				</ul>

			</div>
		</div>

		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					Detail Produk
				</div>
				<ul class="list-group list-group-flush">
					<table class="table table-hover">
						<tr>
							<td>Harga Tanah / M<sup>2</sup></td>
							<td>Rp. <?= $datanazir['harga']; ?></td>
						</tr>
						<tr>
							<td>Lokasi</td>
							<td><?= $datanazir['lokasi']; ?></td>
						</tr>
						<tr>
							<td>Periode</td>
							<td><?= $datanazir['periode']; ?></td>
						</tr>
						<tr>
							<td>Return</td>
							<td><?= $datanazir['return_']; ?></td>
						</tr>
						<tr>
							<td>Foto Proyek</td>
							<td>
								<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/').$datanazir['fproyek1']; ?>" class="img img-thumbnail">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/').$datanazir['fproyek2']; ?>" class="img img-thumbnail">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/').$datanazir['fproyek3']; ?>" class="img img-thumbnail">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/').$datanazir['fproyek4']; ?>" class="img img-thumbnail">
							</td>
						</tr>
						<tr>
							<td>Status Produk</td>
							<td><b><?= $datanazir['status']; ?></b></td>
						</tr>
					</table>
				</ul>
			</div>
		</div>

		<a href="<?= base_url('admin/kelolaNazir'); ?>" class="btn btn-primary ml-auto mr-3 mb-3 mt-4 back">Kembali</a>
	</div>

<!-- 	<div class="row">

		<div class="col-lg">
			<div class="card">
				<div class="card-header">
					Featured
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
			</div>
		</div>

	</div> -->





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->