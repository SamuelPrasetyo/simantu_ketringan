-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2024 pada 02.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simdes_ketringan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` bigint(19) NOT NULL,
  `no_ket_lahir` varchar(20) NOT NULL,
  `nama_bayi` varchar(50) DEFAULT NULL,
  `hari` varchar(10) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `jam` time NOT NULL,
  `jenkel` char(1) NOT NULL,
  `jenis_kelahiran` varchar(15) NOT NULL,
  `anak_ke` char(2) NOT NULL,
  `usia_gestasi` varchar(15) NOT NULL,
  `berat_lahir` varchar(10) NOT NULL,
  `panjang_badan` varchar(5) NOT NULL,
  `lingkar_kepala` varchar(5) NOT NULL,
  `tempat_lahiran` varchar(20) NOT NULL,
  `alamat_lahiran` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `umur_ibu` varchar(3) DEFAULT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kab_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_urut_kk` varchar(2) NOT NULL,
  `jenkel` char(1) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gol_darah` char(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(25) NOT NULL,
  `status_keluarga` varchar(15) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `warga_negara` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `no_urut_kk`, `jenkel`, `tmp_lahir`, `tgl_lahir`, `gol_darah`, `agama`, `status_nikah`, `status_keluarga`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `rt`, `rw`, `warga_negara`) VALUES
('1234567890123456', '1234567890123456', 'Sam', '3', 'L', 'Jakarta', '0000-00-00', 'B', 'Islam', 'Kawin Tidak Tercatat', 'Kepala Keluarga', 'TAMAT SD / SEDERAJAT', 'Petani', 'Ayah', 'Ibu', '001', '001', 'WNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_aturan` varchar(5) NOT NULL,
  `aturan` varchar(50) NOT NULL,
  `data_aturan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_aturan`, `aturan`, `data_aturan`) VALUES
('00001', 'Kepala Desa', 'WAHONO'),
('00002', 'Kode Provinsi', '33'),
('00003', 'Kode Kab/Kota', '16'),
('00004', 'Kode Kecamatan', '07'),
('00005', 'Kode Desa', '2006'),
('00006', 'Nama Provinsi', 'Jawa Tengah'),
('00007', 'Nama Kab/Kota', 'Blora'),
('00008', 'Nama Kecamatan', 'Jiken'),
('00009', 'Nama Desa', 'Ketringan'),
('00010', 'Kode Pos', '58372');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_ktp`
--

CREATE TABLE `permohonan_ktp` (
  `id_permohonan` bigint(19) NOT NULL,
  `permohonan` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kab_kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `kepala_desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pengantar`
--

CREATE TABLE `surat_pengantar` (
  `id_pengantar` bigint(19) NOT NULL,
  `no_pengantar` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `jenkel` char(1) NOT NULL,
  `warga_negara` varchar(3) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kab_kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `keperluan` varchar(150) DEFAULT NULL,
  `surat_keterangan` varchar(50) DEFAULT NULL,
  `tgl_berlaku` varchar(25) NOT NULL,
  `ket_lain` varchar(255) DEFAULT NULL,
  `pemohon` varchar(50) NOT NULL,
  `kepala_desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `nama_pegawai`, `level`) VALUES
(1, 'samuelprasetyo', '$2y$10$V9NdRQS3E3mQ0kopOofQ7eg7zuRQD/1lYyowuMnCF7fRF5h95Rpue', 'Samuel', 'admin'),
(2, 'Ketringan', '$2y$10$281ZMerqAYyEZytNthEqY.5AUSENSXlGf6Km03BGuUwai9fIcGpM6', 'User', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_aturan`);

--
-- Indeks untuk tabel `permohonan_ktp`
--
ALTER TABLE `permohonan_ktp`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indeks untuk tabel `surat_pengantar`
--
ALTER TABLE `surat_pengantar`
  ADD PRIMARY KEY (`id_pengantar`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `permohonan_ktp`
--
ALTER TABLE `permohonan_ktp`
  MODIFY `id_permohonan` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20082024002;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
