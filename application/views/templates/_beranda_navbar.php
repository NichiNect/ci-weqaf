<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="stylesheet" type='text/css' href=" <?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
</head>
</head>

<body>
    <!--=============================================================================
				/Navbar
            ===============================================================================-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light biru">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img src="<?= base_url('assets/img/logo-putih.png'); ?>" width="30" height="30" alt="">
        </a>
        <a class="navbar-brand" href="<?= base_url(); ?>">WEQAF.COM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda'); ?>">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('profil'); ?>">PROFIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('mitra'); ?>">DAFTAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('produk'); ?>">PRODUK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact'); ?>">KONTAK</a>
                </li>
            </ul>
        </div>
    </nav>