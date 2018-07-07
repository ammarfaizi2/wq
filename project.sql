-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jul 2018 pada 04.23
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_turunan`
--

CREATE TABLE `tb_turunan` (
  `id` int(10) NOT NULL,
  `anak_dari` varchar(200) NOT NULL,
  `parent` varchar(10) NOT NULL,
  `turunan_ke` int(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `panggilan` varchar(150) NOT NULL,
  `nama_istri` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(150) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_turunan`
--

INSERT INTO `tb_turunan` (`id`, `anak_dari`, `parent`, `turunan_ke`, `nama`, `panggilan`, `nama_istri`, `alamat`, `kota`, `no_telp`, `no_hp`, `foto`) VALUES
(21, 'A1', '', 1, 'Joko', 'joko', 'Istri joko', 'Jl.Mawar', 'Bandung', '08999999999', '0222222222', '1530860235555.png'),
(23, 'A1A1', '21', 2, 'Rudi', 'rudi', 'istri rudi', 'Jl.Bunga', 'Bandung', '08888888', '021111111', '1530860855084.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `u_id` int(3) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `u_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `u_paswd` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `role` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`u_id`, `nama`, `u_name`, `u_paswd`, `role`) VALUES
(3, 'User admin', 'User', '21232f297a57a5a743894a0e4a801fc3', 'User'),
(4, 'Galang', 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_turunan`
--
ALTER TABLE `tb_turunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_turunan`
--
ALTER TABLE `tb_turunan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
