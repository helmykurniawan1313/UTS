-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mar 2020 pada 09.47
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`nama`, `email`, `password`, `tempat_lahir`, `tanggal_lahir`, `jk`, `jenis`, `telpon`, `alamat`) VALUES
('Helmy Kurniawan', 'helmykurniawan1313@gmail.com', '123456', 'Kota SBY', '2020-03-18', 'Laki - Laki', 'Type R', '08993704720', 'Jl. Wonoayu\r\nMedokan Ayu, Kec. Rungkut'),
('Rika Eko Wahyuni', 'rikaekowahyuni@gmail.com', '123456', 'Kota SBY', '1999-12-30', 'Laki - Laki', 'HRV', '08993704720', 'Jl. Wonoayu\r\nMedokan Ayu, Kec. Rungkut');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
