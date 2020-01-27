<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	
	<div class="row">
		
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					Detail investor pribadi atas nama : <b> <?= $datainvestor['nama']; ?> </b>
				</div>
				<ul class="list-group list-group-flush">
					<table class="table table-hover">
						<tr>
							<td>Nama</td>
							<td><?= $datainvestor['nama']; ?></td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><?= $datainvestor['telepon']; ?></td>
						</tr>
						<tr>
							<td>Pendidikan Terakhir</td>
							<td><?= $datainvestor['pendidikan_terakhir']; ?></td>
						</tr>
						<tr>
							<td>Sumber Dana</td>
							<td><?= $datainvestor['sumber_dana']; ?></td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td><?= $datainvestor['pekerjaan']; ?></td>
						</tr>
						<tr>
							<td>Penghasilan Bulanan</td>
							<td>Rp. <?= $datainvestor['penghasilan_bulanan']; ?></td>
						</tr>
						<tr>
							<td>Bank Yang Digunakan</td>
							<td><?= $datainvestor['bank']; ?></td>
						</tr>
						<tr>
							<td>Cabang</td>
							<td><?= $datainvestor['cabang']; ?></td>
						</tr>
						<tr>
							<td>No Rek</td>
							<td><?= $datainvestor['no_rek']; ?></td>
						</tr>
						<tr>
							<td>Atas Nama</td>
							<td><?= $datainvestor['atas_nama']; ?></td>
						</tr>
						<tr>
							<td>No Ktp</td>
							<td><?= $datainvestor['no_ktp']; ?></td>
						</tr>
						<tr>
							<td>Foto KTP</td>
							<td>
								<a href="" data-toggle="modal" data-target="#exampleModalCenter">
									<img src="<?= base_url('resources/data/data-investor-pribadi/fotoktp/').$datainvestor['foto_ktp']; ?>" class="img img-thumbnail">
								</a>
								<a href="<?= base_url('admin/downloadp/fotoktp/').$datainvestor['id']; ?>" class="badge badge-primary p-1">Download KTP</a>
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
							<td><?= $dataproduk['status']; ?></td>
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

		<a href="<?= base_url('admin/reqprib'); ?>" class="btn btn-primary ml-auto mr-3 mb-3 mt-4 back">Kembali</a>

	</div>
	



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document"  style="width: 150%;">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Foto KTP dari <?= $datainvestor['nama']; ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="<?= base_url('resources/data/data-investor-pribadi/fotoktp/').$datainvestor['foto_ktp']; ?>" class="img img-thumbnail" style="width: 150%;">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>