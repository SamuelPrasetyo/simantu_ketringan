-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2025 pada 14.35
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

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `no_ket_lahir`, `nama_bayi`, `hari`, `tgl_lahir`, `jam`, `jenkel`, `jenis_kelahiran`, `anak_ke`, `usia_gestasi`, `berat_lahir`, `panjang_badan`, `lingkar_kepala`, `tempat_lahiran`, `alamat_lahiran`, `nama_ibu`, `umur_ibu`, `nik_ibu`, `nama_ayah`, `nik_ayah`, `pekerjaan`, `alamat_rumah`, `kecamatan`, `kab_kota`) VALUES
(19, '1/KB/2024', 'MUHAMMAD DEVANO FEBRIANSYAH', 'Rabu', '14-2-2024', '16:10:00', 'L', 'Tunggal', '1', '29', '3000', '49', '22', 'Puskesmas', 'Jl. Raya Blora, Cepu', 'Ika Purwati', '23', '3316076111000001', 'Tn. Suripan', '3316151909000000', 'Petani', 'Ketringan 9/1', 'Jiken', 'Blora'),
(20, '2/KB/2024', 'ANISA PUTRI PRATAMA', 'Jumat', '7-6-2024', '12:00:00', 'P', 'Tunggal', '2', '29', '3500', '53', '24', 'Rumah Sakit', 'Jl. Raya Blora, Jiken', 'Ratna Dewi Kusuma', '25', '3174091301970001', 'Ahmad Subagyo', '3174091301970003', 'Guru', 'Ketringan 10/2', 'Jiken', 'Blora'),
(21, '3/KB/2024', 'BUDI SANTOSO WIJAYA', 'Sabtu', '8-6-2024', '17:00:00', 'L', 'Tunggal', '3', '32', '2800', '50', '21', 'Rumah Bersalin', 'Jl. Raya Blora, Jiken', 'Siti Nurhayati', '22', '3174091301970002', 'Budi Hartono', '3174091301970004', 'Buruh', 'Ketringan 12/1', 'Jiken', 'Blora');

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
  `tgl_lahir` varchar(10) NOT NULL,
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
('1234567890112230', '1234567890112230', 'Testing', '2', 'P', 'Lol', '15-02-2024', 'A', 'Islam', 'Belum Kawin', 'Anak', 'TAMAT SD / SEDERAJAT', 'Belum Bekerja', 'Lll', 'Ooo', '001', '002', 'WNI'),
('1234567890112231', '1234567890112230', 'Test Lagi', '2', 'L', 'Lol', '7-6-2024', 'A', 'Islam', 'Kawin Tercatat', 'Anak', 'SLTP / SEDERAJAT', 'Belum Bekerja', 'Lll', 'Ooo', '001', '002', 'WNI'),
('1234567890112232', '1234567890112230', 'Halo', '2', 'L', 'Lol', '8-6-2024', 'A', 'Islam', 'Kawin Tidak Tercatat', 'Anak', 'BELUM MENGISI', 'Belum Bekerja', 'Lll', 'Ooo', '001', '002', 'WNI');

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

--
-- Dumping data untuk tabel `permohonan_ktp`
--

INSERT INTO `permohonan_ktp` (`id_permohonan`, `permohonan`, `nama`, `nik`, `no_kk`, `alamat`, `rt`, `rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kab_kota`, `provinsi`, `nama_pemohon`, `kepala_desa`) VALUES
(26012025001, 'Baru', 'SUGI', '1234567890123456', '1234567890123456', 'jl. suka maju', '01', '02', '58372', 'Ketringan', 'Jiken', 'Blora', 'Jawa Tengah', 'SUGI', 'WAHONO');

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
  `alamat_rumah` varchar(255) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kab_kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `keperluan` varchar(150) DEFAULT NULL,
  `surat_keterangan` varchar(50) DEFAULT NULL,
  `tgl_berlaku` varchar(25) NOT NULL,
  `ket_lain` varchar(255) DEFAULT NULL,
  `pemohon` varchar(50) NOT NULL,
  `kepala_desa` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_pengantar`
--

INSERT INTO `surat_pengantar` (`id_pengantar`, `no_pengantar`, `nik`, `no_kk`, `nama`, `tmp_lahir`, `tgl_lahir`, `jenkel`, `warga_negara`, `agama`, `pekerjaan`, `alamat_rumah`, `kecamatan`, `kab_kota`, `provinsi`, `keperluan`, `surat_keterangan`, `tgl_berlaku`, `ket_lain`, `pemohon`, `kepala_desa`, `created_at`) VALUES
(23022025003, '7878', '1212121212121212', '1212121212121212', 'SILVESTER SAMUEL PRASETYO', 'Jakarta', '05-11-2003', 'L', 'WNI', 'Katolik', 'Staf Junior Programmer', 'Jl. Garuda Perumahan Puri Kristal No. 24, Ciputat, Tangerang Selatan', 'Jiken', 'Blora', 'Jawa Tengah', 'Pinjaman Bank', 'SURAT KETERANGAN PINJAMAN', '23-02-2025 to 28-02-2025', 'keterangan lain', 'SAMUEL PRASETYO', 'WAHONO', '2025-02-23 21:31:04'),
(26012025002, '123', '1234567890123456', '1234567890123456', 'SUGI', 'Blora', '01-01-2022', 'L', 'WNI', 'Islam', 'Guru', 'Jl. Hindia', 'Jiken', 'Blora', 'Jawa Tengah', 'Mutasi', 'PERPINDAHAN KERJA', '', '-', 'SUGI', 'WAHONO', '2025-01-26 21:31:04'),
(26022025004, '888', '1234567890112230', '1234567890112230', 'TESTING', 'Lol', '15-02-2024', 'P', 'WNI', 'Islam', 'Haha', 'Haha', 'Jiken', 'Blora', 'Jawa Tengah', 'Haha', 'HAHA', '26-02-2025 to 28-02-2025', 'haha', 'HAHA', 'WAHONO', '2025-02-26 21:31:04');

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
  MODIFY `id_kelahiran` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `permohonan_ktp`
--
ALTER TABLE `permohonan_ktp`
  MODIFY `id_permohonan` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26012025002;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
