-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 04:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2023_223040131_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `prospek_kerja` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `deskripsi`, `prospek_kerja`, `gambar`) VALUES
(1, 'Teknik informatika', 'jurusan Teknik Informatika mempelajari serta menerapkan prinsip-prinsip ilmu komputer', 'prospek kerja', '05312023_080211.jpg'),
(2, 'Teknik pangan ', 'jurusan teknik pangan ber gelud di bidang pangan dan gizi', 'Prospek pangan ', '05312023_080446.jpg'),
(3, 'Teknik mesin', 'jurusan ini mempelajari tentang mesin mesin modern', 'Prospek teknik mesin', '05312023_080620.jpg'),
(4, 'Teknik Industri', 'Jurusan yang mempelajari tentang dunia industri', 'Prospek kerja teknik industri', '05312023_080737.jpg'),
(5, 'Desain Komunikasi Visual', 'Jurusan DKV ini mempelajari tentang Visual desain modern terkini', 'Prospek kerja Jurusan DKV', '05312023_081034.webp'),
(6, 'Teknik Lingkungan', 'Jurusan ini mempelajari tentang tatanan kota dan lingkungan yg asri bersih dan sehat', 'Prospek kerja Teknik Lingkungan', '05312023_081323.jpg'),
(7, 'Perencanaan Wilayah Dan Kota', 'Jurusan perencanaan wilayah dan kota adalah jurusan yg mempelajari akan bangunan dan tatanan kota', 'prospek PWK', '05312023_112301.jpg'),
(8, 'Hukum', 'Jurusan ini mempelajari tentang hukum ', 'Prospek Hukum', '05312023_112548.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `level` enum('Admin','Pengguna') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `jurusan_id`, `nama_depan`, `nama_belakang`, `email`, `password`, `no_telepon`, `level`) VALUES
(1, NULL, 'Naufal', 'Zul Faza', 'Naufalzul45@gmail.com', '12345', '0123456789', 'Admin'),
(2, 4, 'Kasih', 'Suherman123', 'ahmad@gmail.com123', '123', '0112233123', 'Pengguna'),
(9, 1, 'andien', 'eka', 'andien@gmail.com', '0987', '081321551874', 'Pengguna'),
(10, 3, 'epon', 'anto', 'eponsssucantik@gmail.com', 'ekaa08', '081316938243', 'Pengguna'),
(11, 5, 'Nova', 'Asyifa', 'novaasyifa389@gmail.com', '2222', '08996949682', 'Pengguna'),
(12, 1, 'Nayara', 'Paul', 'MiraHan570@gmail.com', '#Elearning4study', '0812245911188', 'Pengguna'),
(13, 2, 'humaira', 'syafaira', 'humaira.syafair@gmail.com', '12345678', '081280595950', 'Pengguna'),
(14, 6, 'Ramlan', 'Ahmad', '123@gmail.com', 'nau', '08133322241', 'Pengguna'),
(15, 3, 'Asyifa ', 'Amelia', 'amelia@gmail.com', '321', '081321551875', 'Pengguna'),
(16, 4, 'cinta', 'laura', 'cinta@gmail.com', 'cintakamu123', '08978882521', 'Pengguna'),
(19, 2, 'Riandia', 'Syarif', 'nazwa@gmail.com', '123', '08166655587', 'Pengguna'),
(20, 5, 'khilda', 'nailah', 'khilda@gmail.com', '123', '08978825765', 'Pengguna'),
(21, 6, 'arya', 'madep', 'arya@gmail.com', '098', '08975543212', 'Pengguna'),
(22, 1, 'ibnu ', 'rusdianto', 'ibnu@gmail.com', '123', '081321661873', 'Pengguna'),
(24, 8, 'ade ', 'fajar', 'fajar@gmail.com', '123', '08576662423', 'Pengguna'),
(25, 6, 'Rizky', 'alfarizi', 'rizky@gmail.com', '123', '087677988765', 'Pengguna'),
(27, 2, 'sofyan', 'arip', 'sofyah@gmail.com', '123', '987123125', 'Pengguna'),
(28, 1, 'dena', 'pea', 'dena@gmail.com', '123', '0876113657', 'Pengguna'),
(29, 1, 'ekaa', 'andin', 'andienekaaa25@gmail.com', 'ekaaaepon', '081316938243', 'Pengguna'),
(30, 7, 'irsan', 'kon', 'ahmad@gmail.com', '121', '08166655587', 'Pengguna'),
(31, 1, 'RURU123', 'RIRI123', 'ruru@gmail.com123', '123', '0987654321234', 'Pengguna'),
(32, 6, 'koki', 'keke', 'keke@gmail.com', '123', '098765432', 'Pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pengguna_jurusan_id` (`jurusan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `fk_pengguna_jurusan_id` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
