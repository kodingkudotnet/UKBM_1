-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 06:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_soal`
--

CREATE TABLE `daftar_soal` (
  `kode_soal` varchar(10) NOT NULL,
  `nama_soal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_soal`
--

INSERT INTO `daftar_soal` (`kode_soal`, `nama_soal`) VALUES
('1', 'UKBM 1'),
('2', 'UKBM 2');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_final`
--

CREATE TABLE `jawaban_final` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_soal` varchar(100) NOT NULL,
  `no_soal` int(10) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_sementara`
--

CREATE TABLE `jawaban_sementara` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_soal` varchar(100) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_guru`
--

CREATE TABLE `pengguna_guru` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna_guru`
--

INSERT INTO `pengguna_guru` (`nip`, `nama`, `password`) VALUES
('1761', 'Istaufi', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_siswa`
--

CREATE TABLE `pengguna_siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_absen` varchar(10) NOT NULL,
  `status_pengerjaan` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna_siswa`
--

INSERT INTO `pengguna_siswa` (`nis`, `nama`, `no_absen`, `status_pengerjaan`, `password`) VALUES
('1551', 'Maria', '1', 1, '12345678'),
('1552', 'Anabelle', '2', 1, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `kode_soal` varchar(10) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `deskripsi_soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `kode_soal`, `no_soal`, `deskripsi_soal`) VALUES
(1, '2', 1, 'Berapa jumlah manusia di bumi?'),
(2, '2', 2, 'Berapa jumlah manusia di mars?'),
(3, '2', 3, 'Berapa jumlah manusia di venus?'),
(4, '2', 4, 'Berapa jumlah manusia di jupiter?'),
(5, '1', 1, 'Berapa jumlah manusia di jupiter?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban_final`
--
ALTER TABLE `jawaban_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_sementara`
--
ALTER TABLE `jawaban_sementara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna_guru`
--
ALTER TABLE `pengguna_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pengguna_siswa`
--
ALTER TABLE `pengguna_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban_final`
--
ALTER TABLE `jawaban_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban_sementara`
--
ALTER TABLE `jawaban_sementara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
