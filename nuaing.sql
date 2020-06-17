-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2020 pada 05.34
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuaing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `nama` varchar(20) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `kaos` varchar(20) NOT NULL,
  `kemeja` varchar(20) NOT NULL,
  `celanapendek` varchar(20) NOT NULL,
  `celanapanjang` varchar(20) NOT NULL,
  `jaket` varchar(20) NOT NULL,
  `jas` varchar(20) NOT NULL,
  `celanadalam` varchar(20) NOT NULL,
  `sarungmukena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`nama`, `waktu`, `kaos`, `kemeja`, `celanapendek`, `celanapanjang`, `jaket`, `jas`, `celanadalam`, `sarungmukena`) VALUES
('Budi', '11.53 / 14-06-2020', '1 (merah), 2 (hitam)', '1 (biru)', '3 (biru), 1 (oren)', '1 (levis biru)', '-', '2 (hitam)', '5 krem', '2 (sarung hijau)'),
('Andika', '15.39 / 15-06-2020', '2 (hitam), 1 (merah)', '-', '1 (kuning)', '2 (training hitam)', '-', '-', '5 (biru tua)', '4 (sarung samarinda)'),
('Zahra', '18.20 / 15-06-2020', '3 (biru), 1 (putih)', '2 (biru kotak kotak)', '1 (kuning)', '1 (jeans biru)', '1 (putih)', '-', '2 (putih)', '2 (mukena putih)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `admin_ke` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`admin_ke`, `username`, `password`) VALUES
(1, 'irvan', 'hahahehe'),
(2, 'fauzan', 'hahahihi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`waktu`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`admin_ke`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
