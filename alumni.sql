-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2025 pada 05.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_alumni11`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id_alumnii` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `pekerjaan_saat_ini` varchar(50) NOT NULL,
  `nomor_telpon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id_alumnii`, `nama_lengkap`, `nik`, `nisn`, `pekerjaan_saat_ini`, `nomor_telpon`, `alamat`, `tahun_lulus`, `jurusan`) VALUES
(1, 'suci cantik', '0735735', '323', 'cina', '11-072009', 'pringsewu', '2035', 'RPL'),
(2, 'litakk', '08088412', '56137181', ' kedondong', '0000000008', 'buah kedondong\r\n\r\n', '2050', 'TJAT'),
(3, 'rasyid asalelo', '25276562', '461231', 'peringsiwu', '36543624', 'pringsewu', '2060', 'Animasi'),
(4, 'reihan', '13216', '242231', 'tanggamus', '250529', 'tanggamus', '2070', 'TKJ'),
(5, 'reihannnn', '125476427', '124571347', 'pelajar', '164312', '', '2070', 'Pilihan Jurusan'),
(6, 'rehan', '2365321', '17345321', 'pelajar', '080808', '', '2029', 'Pilihan Jurusan'),
(7, '', '', '', '', '', '', '0000', 'Pilihan Jurusan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumnii`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumnii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
