-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 04.58
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `regis`
--

CREATE TABLE `regis` (
  `Nama` varchar(35) NOT NULL,
  `Nim` varchar(10) NOT NULL,
  `Kelas` varchar(15) NOT NULL,
  `Jeniskelamin` varchar(10) NOT NULL,
  `Hobi` varchar(15) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regis`
--

INSERT INTO `regis` (`Nama`, `Nim`, `Kelas`, `Jeniskelamin`, `Hobi`, `Fakultas`, `Alamat`, `Password`) VALUES
('aa', '1234567890', 'D3MI-41-02', 'Laki-Laki', 'Futsal, Basket,', 'FIT', 'pbb c77', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
