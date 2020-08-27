-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Agu 2020 pada 21.41
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipuji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2020-08-27-162022', 'App\\Database\\Migrations\\TblMhs', 'default', 'App', 1598548842, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `mhs_id` int(11) UNSIGNED NOT NULL,
  `mhs_name` varchar(255) NOT NULL,
  `mhs_nim` varchar(255) NOT NULL,
  `mhs_majors` varchar(255) NOT NULL,
  `mhs_thesis` varchar(255) NOT NULL,
  `mhs_thesis_registered` varchar(2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `mhs_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`mhs_id`, `mhs_name`, `mhs_nim`, `mhs_majors`, `mhs_thesis`, `mhs_thesis_registered`, `created_at`, `updated_at`, `mhs_slug`) VALUES
(1, 'Muhamad Faisal Ramdani', '12191180', 'Fakultas Ilmu Komputer', 'Tata Cara Broadcasting', '1', '2020-08-27 13:11:02', '2020-08-27 13:11:02', 'Tata-Cara-Broad-Casting.html'),
(2, 'Rafel Nuansa', '12191190', 'Fakultas Pertanian', 'Penanggu langan Bencana Alam', '1', '2020-08-27 13:11:02', '2020-08-27 13:11:02', 'Penanggu-langan-Bencana-Alam.html'),
(3, 'Ahmad Hasan Bashori', '12191190', 'Fakultas Ilmu Komputer', 'Pengelolaan Sistem Basis Data', '0', '2020-08-27 13:11:02', '2020-08-27 13:11:02', 'Pengelolaan-Sistem-Basis-Data.html'),
(4, 'Syukri', '12191100', 'Fakultas Ilmu Pangan Halal', 'Mutu Dan Gizi Baik', '2', '2020-08-27 13:11:02', '2020-08-27 13:11:02', 'Mutu-Dan-Gizi.html');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`mhs_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `mhs_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
