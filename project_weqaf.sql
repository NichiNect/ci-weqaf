-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2020 pada 02.37
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_weqaf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_nazir`
--

CREATE TABLE `data_nazir` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nama_perusahaan` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telepon` varchar(256) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `akte_pendirian` varchar(256) DEFAULT NULL,
  `surat_izin_bidang_usaha` varchar(256) DEFAULT NULL,
  `tdp` varchar(256) DEFAULT NULL,
  `surat_keterangan_dopmisili` varchar(256) DEFAULT NULL,
  `npwp` varchar(256) DEFAULT NULL,
  `ktp` varchar(256) DEFAULT NULL,
  `laporan_pajak_tahunan` varchar(256) DEFAULT NULL,
  `laporan_keuangan` varchar(256) DEFAULT NULL,
  `harga` varchar(256) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `periode` varchar(256) NOT NULL,
  `return_` varchar(256) NOT NULL,
  `fproyek1` varchar(256) DEFAULT NULL,
  `fproyek2` varchar(256) DEFAULT NULL,
  `fproyek3` varchar(256) DEFAULT NULL,
  `fproyek4` varchar(256) DEFAULT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_nazir`
--

INSERT INTO `data_nazir` (`id`, `nama`, `nama_perusahaan`, `email`, `telepon`, `alamat`, `provinsi`, `kota`, `kecamatan`, `akte_pendirian`, `surat_izin_bidang_usaha`, `tdp`, `surat_keterangan_dopmisili`, `npwp`, `ktp`, `laporan_pajak_tahunan`, `laporan_keuangan`, `harga`, `lokasi`, `periode`, `return_`, `fproyek1`, `fproyek2`, `fproyek3`, `fproyek4`, `status`) VALUES
(3, 'Yoni Widhi Cahyadi', 'Genm Corp', 'yoniwidhi@asd.ch', '0874121412', 'Disini Oe', 'Jawa Timur', 'Ponorogo', 'Ponorogo', '1g.PNG', '2g.PNG', '3g.PNG', '4g.PNG', '5g.PNG', '6d.PNG', '7d.PNG', '8d.PNG', '15000000', 'Ponorogo', '1 tahun', '30% / Tahun', '5g.PNG', '9d.PNG', '8d.PNG', '7d.PNG', 'Sedang Dikelola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `investor_lembaga`
--

CREATE TABLE `investor_lembaga` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nama_perusahaan` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kota` varchar(256) NOT NULL,
  `kecamatan` varchar(256) NOT NULL,
  `akte_pendirian` varchar(256) NOT NULL,
  `surat_izin_bidang_usaha` varchar(256) NOT NULL,
  `tdp` varchar(256) NOT NULL,
  `surat_keterangan_dopmisili` varchar(256) NOT NULL,
  `npwp` varchar(256) NOT NULL,
  `ktp_pengurus` varchar(256) NOT NULL,
  `laporan_pajak_tahunan` varchar(256) NOT NULL,
  `laporan_keuangan` varchar(256) NOT NULL,
  `status_confirm` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `investor_lembaga`
--

INSERT INTO `investor_lembaga` (`id`, `nama`, `nama_perusahaan`, `email`, `telepon`, `alamat`, `provinsi`, `kota`, `kecamatan`, `akte_pendirian`, `surat_izin_bidang_usaha`, `tdp`, `surat_keterangan_dopmisili`, `npwp`, `ktp_pengurus`, `laporan_pajak_tahunan`, `laporan_keuangan`, `status_confirm`, `id_produk`) VALUES
(2, 'Yoni', 'Genm', 'yoniwidhic1@gmail.com', '0874121412', 'Disini', 'Jawa Timur', 'Ponorogo', 'Ponorogo', '1g.PNG', '2g.PNG', '3g.PNG', '4g.PNG', '6d.PNG', '6d1.PNG', '7d.PNG', '8d.PNG', 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `investor_pribadi`
--

CREATE TABLE `investor_pribadi` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `telepon` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pendidikan_terakhir` varchar(128) NOT NULL,
  `sumber_dana` varchar(256) NOT NULL,
  `pekerjaan` varchar(256) NOT NULL,
  `penghasilan_bulanan` varchar(256) NOT NULL,
  `bank` varchar(128) NOT NULL,
  `cabang` varchar(256) NOT NULL,
  `no_rek` varchar(128) NOT NULL,
  `atas_nama` varchar(256) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `foto_ktp` varchar(256) NOT NULL,
  `status_confirm` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `investor_pribadi`
--

INSERT INTO `investor_pribadi` (`id`, `nama`, `telepon`, `email`, `pendidikan_terakhir`, `sumber_dana`, `pekerjaan`, `penghasilan_bulanan`, `bank`, `cabang`, `no_rek`, `atas_nama`, `no_ktp`, `foto_ktp`, `status_confirm`, `id_produk`) VALUES
(6, 'Yoni Widhi Cahyadi', '0874121412', 'yoniwidhi2@gmail.com', 'Magister', 'Give Away', 'NgePlastik', '5000000', 'Bank BRI Syariah', 'Plastik', '0124912777812749', 'Yoni Widhi Cahyadi', '003918292212314', 'as.PNG', 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `profesi` varchar(256) NOT NULL,
  `kalimat` text NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `profesi`, `kalimat`, `foto`) VALUES
(1, 'Ilham Sainuddin', 'HR STAFF 1', 'WEQAF.COM sangat membantu lembaga wakaf yang sedang mencari modal untuk memproduktifkan tanah wakaf di indonesia.', 'profile1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testing1`
--

CREATE TABLE `testing1` (
  `id` int(11) NOT NULL,
  `nama` varchar(12) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `tdp` varchar(20) NOT NULL,
  `npwp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testing1`
--

INSERT INTO `testing1` (`id`, `nama`, `ktp`, `tdp`, `npwp`) VALUES
(39, 'asd', '7d.PNG', '1g.PNG', '10d.PNG'),
(40, 'Sinichi Kudo', '1g.PNG', '6d.PNG', '8d.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `email`, `password`, `role`) VALUES
(2, 'adminweqaf', 'admin@weqaf.com', '$2y$10$nxhiQQev.FjItIObfK5vKOKxo381DKi8u0fG0UfBpnEKE0SY4jOR.', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_nazir`
--
ALTER TABLE `data_nazir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `investor_lembaga`
--
ALTER TABLE `investor_lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `investor_pribadi`
--
ALTER TABLE `investor_pribadi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testing1`
--
ALTER TABLE `testing1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_nazir`
--
ALTER TABLE `data_nazir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `investor_lembaga`
--
ALTER TABLE `investor_lembaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `investor_pribadi`
--
ALTER TABLE `investor_pribadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testing1`
--
ALTER TABLE `testing1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
