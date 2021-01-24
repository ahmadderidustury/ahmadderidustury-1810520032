-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2021 pada 16.33
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
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(12, 'admin', '$2y$10$3eDS4HjAHmOylg07N0JfHO27vBxg5q3pBMJ8yCkcMtngPosLKkNvW'),
(13, 'ahmadderidustury', '$2y$10$SR4OB9OgdiMqUf90CyQGWexTCergtGZaDVH0DYAEnG5h7VfVYHqEe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_vaksin`
--

CREATE TABLE `jenis_vaksin` (
  `id` int(30) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `Jenis_Vaksin` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_vaksin`
--

INSERT INTO `jenis_vaksin` (`id`, `kode`, `Jenis_Vaksin`, `nama`) VALUES
(1, '0801', 'vektor adenoviral rekombinan', 'Oxford-AstraZeneca'),
(7, '0802', 'inactivated vaccine', 'Sinopharm'),
(8, '0803', 'Vaksin COVID-19 Moderna', 'mRNA COVID-19'),
(9, '0804', 'Vaksin COVID-19 Pfizer-BioNTech', 'BNT162b2'),
(10, '0805', 'Vaksin COVID-19 Sinovac', 'ARS-COV-2'),
(11, '0806', 'Vaksin COVID-19 Novavax', 'adjuvan Matrix-M Novavax'),
(12, '0807', 'Vaksin COVID-19 Bio Farma', 'Bio Farma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(50) NOT NULL,
  `NIK` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `NIK`, `Nama`, `tgl_lahir`, `alamat`, `jenis_kelamin`) VALUES
(1, '   5202021803990001 ', '   Ahmad Deri Dustury  ', '   18 Januari 1999   ', '   Jonggat, Kab.Loteng   ', 'Pria'),
(2, '5202020107970002', 'Indra Maulanan Riswan', '01 Juli 1997', 'kenaot Baru, Desa Suangi, Kec.Sakra', 'Pria'),
(12, ' 5202020102990001 ', ' Muhammad  ', ' 01 Februari 1999 ', ' Praya, Kab. Loteng ', 'Pria');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
