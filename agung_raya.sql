-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2021 pada 07.06
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agung_raya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_acara`
--

CREATE TABLE `berita_acara` (
  `id_ba` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_container` varchar(128) NOT NULL,
  `nama_kapal` varchar(128) NOT NULL,
  `tgl_datang` date NOT NULL,
  `konsolidator` varchar(128) NOT NULL,
  `importir` varchar(128) NOT NULL,
  `no_bl` varchar(128) NOT NULL,
  `jumlah` int(128) NOT NULL,
  `jenis_barang` varchar(128) NOT NULL,
  `weight` int(128) NOT NULL,
  `kubikasi` int(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita_acara`
--

INSERT INTO `berita_acara` (`id_ba`, `tanggal`, `no_container`, `nama_kapal`, `tgl_datang`, `konsolidator`, `importir`, `no_bl`, `jumlah`, `jenis_barang`, `weight`, `kubikasi`, `keterangan`) VALUES
(1, '2021-07-01', 'PFLU2015678', 'ARICA BRIDGE', '2021-06-30', 'PT LOGISTICS INTERNATIONAL', 'PT INPUTAM', 'RFLU20090037', 4, 'DG', 1008, 5, 'kemasan penyol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_stripping`
--

CREATE TABLE `log_stripping` (
  `id_log` int(11) NOT NULL,
  `asal` varchar(128) NOT NULL,
  `no_container` varchar(128) NOT NULL,
  `seal` varchar(128) NOT NULL,
  `nama_kapal` varchar(128) NOT NULL,
  `konsolidator` varchar(128) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_stripping`
--

INSERT INTO `log_stripping` (`id_log`, `asal`, `no_container`, `seal`, `nama_kapal`, `konsolidator`, `tgl_mulai`, `waktu_mulai`, `waktu_akhir`, `keterangan`) VALUES
(1, 'JITC', 'PLFU2015678', 'ICARRY024729', 'ARICA BRIDGE', 'PT LOGISTICS INTERNATIONAL', '2021-07-01', '10:49:00', '11:12:00', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tally_sheet`
--

CREATE TABLE `tally_sheet` (
  `id` int(1) NOT NULL,
  `consolidator` varchar(255) NOT NULL,
  `no_container` varchar(255) NOT NULL,
  `kondisi_container` varchar(255) NOT NULL,
  `no_segel` varchar(255) NOT NULL,
  `no_mbl` varchar(255) NOT NULL,
  `no_order` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kapal` varchar(255) NOT NULL,
  `voy` varchar(255) NOT NULL,
  `tgl_tiba` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tally_sheet`
--

INSERT INTO `tally_sheet` (`id`, `consolidator`, `no_container`, `kondisi_container`, `no_segel`, `no_mbl`, `no_order`, `tanggal`, `kapal`, `voy`, `tgl_tiba`) VALUES
(1, '', '', 'cacad', '', '', '', '2021-07-17', '', '', '2021-07-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tally_sheet_detail`
--

CREATE TABLE `tally_sheet_detail` (
  `id` int(1) NOT NULL,
  `consignee` varchar(128) NOT NULL,
  `marking` varchar(128) NOT NULL,
  `pckg` int(1) NOT NULL,
  `tally` int(1) NOT NULL,
  `total` int(1) NOT NULL,
  `weight` int(1) NOT NULL,
  `no_tally` varchar(128) NOT NULL,
  `no_hbl` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tally_sheet_detail`
--

INSERT INTO `tally_sheet_detail` (`id`, `consignee`, `marking`, `pckg`, `tally`, `total`, `weight`, `no_tally`, `no_hbl`, `keterangan`) VALUES
(1, 'PT Summi Rubber Indonesia', 'Summi Rubber Jakarta', 4, 4, 4, 1008, 'LCL3221/20016', 'UKBJKT21456', '5 robek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level` varchar(15) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `last_activity`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2021-01-24 23:41:19'),
(2, 'Jamal Bahri', '3002910022210001', '3002910022210001', 'user', '2021-01-24 23:41:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`id_ba`);

--
-- Indeks untuk tabel `log_stripping`
--
ALTER TABLE `log_stripping`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `tally_sheet`
--
ALTER TABLE `tally_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tally_sheet_detail`
--
ALTER TABLE `tally_sheet_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  MODIFY `id_ba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `log_stripping`
--
ALTER TABLE `log_stripping`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tally_sheet`
--
ALTER TABLE `tally_sheet`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tally_sheet_detail`
--
ALTER TABLE `tally_sheet_detail`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
