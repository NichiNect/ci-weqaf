<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	
	<div class="row">

		<div class="col-lg-6">

			<div class="card">
				<div class="card-header">
					Detail investor lembaga atas nama : <b> <?= $datainvestor['nama']; ?> </b>
				</div>
				<ul class="list-group list-group-flush">
					<table class="table table-hover">
						<tr>
							<td>Nama</td>
							<td><?= $datainvestor['nama']; ?></td>
						</tr>
						<tr>
							<td>Nama Perusahaan</td>
							<td><?= $datainvestor['nama_perusahaan']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?= $datainvestor['email']; ?></td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><?= $datainvestor['telepon']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><?= $datainvestor['alamat']; ?></td>
						</tr>
						<tr>
							<td>Berasal Dari Provinsi</td>
							<td><?= $datainvestor['provinsi']; ?></td>
						</tr>
						<tr>
							<td>Berasal Dari Kota</td>
							<td><?= $datainvestor['kota']; ?></td>
						</tr>
						<tr>
							<td>Kecamatan</td>
							<td><?= $datainvestor['kecamatan']; ?></td>
						</tr>
					</table>
				</ul>
				<div class="card-header">
					Detail Lembaga
				</div>
				<ul class="list-group list-group-flush">
					<table class="table table-hover">
						<tr>
							<td>Akte Pendirian</td>
							<td>
								<a href="<?= base_url('admin/downloadl/akte-pendirian/').$datainvestor['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Surat Izin Bidang Usaha</td>
							<td>
								<a href="<?= base_url('admin/downloadl/surat-izin-bidang-usaha/').$datainvestor['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>TDP</td>
							<td>
								<a href="<?= base_url('admin/downloadl/tdp/').$datainvestor['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Surat Keterangan Dopmisili</td>
							<td>
								<a href="<?= base_url('admin/downloadl/surat-keterangan-dopmisili/').$datainvestor['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>NPWP</td>
							<td>
								<a href="<?= base_url('admin/downloadl/npwp/').$datainvestor['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>KTP Penanggung Jawab</td>
							<td>
								<a href="<?= base_url('admin/downloadl/ktp/').$datainvestor['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Surat Laporan Pajak SPT Tahunan</td>
							<td>
								<a href="<?= base_url('admin/downloadl/laporan-pajak-tahunan/').$datainvestor['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Laporan Keuangan</td>
							<td>
								<a href="<?= base_url('admin/downloadl/laporan-keuangan/').$datainvestor['id']; ?>" class="badge badge-warning p-1">Download</a>
							</td>
						</tr>
						<tr>
							<td>Status Konfirmasi</td>
							<td><b>
								<?php 
								if ($datainvestor['status_confirm'] == 0) {
									echo "Belum Dikonfirmasi";
								} else if ($datainvestor['status_confirm'] == 1) {
									echo "Telah Mengajukan Request";
								} else if ($datainvestor['status_confirm'] == 2) {
									echo "Sudah Dikonfirmasi";
								}
								?></b>
							</td>
						</tr>

					</table>
				</ul>
				
			</div>
			
		</div>

		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					Detail Produk Yang Diajukan
				</div>
				<ul class="list-group list-group-flush">
					<table class="table table-hover">
						<tr>
							<td>Harga Tanah / M<sup>2</sup></td>
							<td>Rp. <?= $dataproduk['harga']; ?></td>
						</tr>
						<tr>
							<td>Lokasi</td>
							<td><?= $dataproduk['lokasi']; ?></td>
						</tr>
						<tr>
							<td>Periode</td>
							<td><?= $dataproduk['periode']; ?></td>
						</tr>
						<tr>
							<td>Return</td>
							<td><?= $dataproduk['return_']; ?></td>
						</tr>
						<tr>
							<td>Foto Proyek</td>
							<td>
								<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/').$dataproduk['fproyek1']; ?>" class="img img-thumbnail">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/').$dataproduk['fproyek2']; ?>" class="img img-thumbnail">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/').$dataproduk['fproyek3']; ?>" class="img img-thumbnail">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/').$dataproduk['fproyek4']; ?>" class="img img-thumbnail">
							</td>
						</tr>
						<tr>
							<td>Status Produk</td>
							<td><b><?= $dataproduk['status']; ?></b></td>
						</tr>
					</table>
				</ul>
				<div class="card-header">
					Produk Terkait
				</div>
				<ul class="list-group list-group-flush">
					<table class="table table-hover">
						<tr>
							<td>Nama</td>
							<td><?= $dataproduk['nama']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?= $dataproduk['email']; ?></td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><?= $dataproduk['telepon']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><?= $dataproduk['alamat']; ?></td>
						</tr>
						<tr>
							<td>Provinsi</td>
							<td><?= $dataproduk['provinsi']; ?></td>
						</tr>
						<tr>
							<td>Kota</td>
							<td><?= $dataproduk['kota']; ?></td>
						</tr>
					</table>
				</ul>
			</div>
		</div>
		<a href="<?= base_url('admin/reqlemb'); ?>" class="btn btn-primary ml-auto mt-3 mr-3 mb-3">Kembali</a>
	</div>
	



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
