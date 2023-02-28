-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 01:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_umroh22feb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jamaah`
--

CREATE TABLE `tb_jamaah` (
  `id_jamaah` int(10) NOT NULL,
  `nama_jamaah` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `id_paket` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jamaah`
--

INSERT INTO `tb_jamaah` (`id_jamaah`, `nama_jamaah`, `alamat`, `jenis_kelamin`, `id_paket`) VALUES
(7, 'arna', 'smg', 'perempuan', 7),
(8, 'nanik', 'Demak', 'perempuan', 8),
(9, 'sofa', 'Demak', 'perempuan', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(10) NOT NULL,
  `nama_paket` enum('gold','silver','platinum') NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `tgl_keberangkatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `tujuan`, `tgl_keberangkatan`) VALUES
(7, 'platinum', 'umroh', '2023-02-06'),
(8, 'silver', 'umrah', '2023-01-30'),
(9, 'platinum', 'umrah', '2023-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jamaah`
--
ALTER TABLE `tb_jamaah`
  ADD PRIMARY KEY (`id_jamaah`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jamaah`
--
ALTER TABLE `tb_jamaah`
  MODIFY `id_jamaah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jamaah`
--
ALTER TABLE `tb_jamaah`
  ADD CONSTRAINT `jamaah` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
