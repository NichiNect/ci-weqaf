<style>
	.list-group {
		color: black;
	}
</style>
<div class="container">
		<div class="row">
	<?php foreach ($products as $produk) : ?>
				<div class="col-lg-4">
					<a href="<?= base_url('produk/detail/') . $produk['id']; ?>">
						<div class="card mb-2">
							<img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/') . $produk['fproyek1']; ?>" class="card-img-top img-thumbnail">
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item p-1" id="list-group"><span><b>Harga : </b></span>Rp. <?= $produk['harga']; ?></li>
									<li class="list-group-item p-1" id="list-group"><span><b>Lokasi : </b></span><?= $produk['lokasi']; ?></li>
									<li class="list-group-item p-1" id="list-group"><span><b>Periode : </b></span><?= $produk['periode']; ?></li>
									<li class="list-group-item p-1 ml-auto mr-auto" id="list-group"><b><?= $produk['status']; ?></b></li>
								</ul>
							</div>
						</div>
					</a>
				</div>
	<?php endforeach ?>
		</div>
		

</div>
