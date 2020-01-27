<div class="container padding-top">
        <h3>GAMBAR</h3>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/') . $product['fproyek1']; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/') . $product['fproyek2']; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/') . $product['fproyek3']; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('resources/data/data-nazir-pengolah/foto-proyek/') . $product['fproyek4']; ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="padding-top2">
            <div class="detail-info">
                <h3>INFO</h3>
                <!--TABLE-->
                <div class="padding-l-r">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Harga / M<sup>2</sup></th>
                                <th scope="col">Luas (M<sup>2</sup>)</th>
                                <th scope="col">Periode</th>
                                <th scope="col">Return</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rp. <?= $product['harga']; ?></td>
                                <td>100 M<sup>2</sup></td>
                                <td><?= $product['periode']; ?></td>
                                <td><?= $product['return_']; ?></td>
                                <td>Lokasi : <?= $product['lokasi']; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <a href="<?= base_url('produk/penyaluran/').$product['id']; ?>" class="btn btn-outline-success mt-3 p-2 float-right">Salurkan Pembiayaan</a>
                </div>
            </div>
        </div>
    </div>