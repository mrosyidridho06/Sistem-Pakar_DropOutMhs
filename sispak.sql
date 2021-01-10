-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 04:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('ridho', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kesimpulan`
--

CREATE TABLE `tb_kesimpulan` (
  `kode_kesimpulan` int(11) NOT NULL,
  `solusi` varchar(50) NOT NULL,
  `fakta` varchar(255) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kesimpulan`
--

INSERT INTO `tb_kesimpulan` (`kode_kesimpulan`, `solusi`, `fakta`, `oleh`, `status`) VALUES
(1, 'Mahasiswa status Tetap', 'IPK lebih dari sama dengan 2', 'pakar', 'setuju'),
(2, 'Mahasiswa status Tetap', 'Jumlah SKS nilai D kurang dari sama dengan 4 dan nilai E sama dengan 0', 'pakar', 'setuju'),
(3, 'Mahasiswa status Percobaan', 'Jumlah sks Nilai D lebih dari 4 dan kurang dari 8 dan nilai E sama dengan 0', 'pakar', 'setuju'),
(4, 'Mahasiswa status Percobaan', 'IPK diantara 1,75 - 2,00 dan jumlah sks D kurang dari sama dengan 8 dan nilai E sama dengan 0', 'pakar', 'setuju'),
(5, 'Mahasiswa status Drop Out secara akademik', 'IPK < 1,75 atau jumlah sks nilai D > 8 atau status percobaan sudah 2 kali berturut atau nilai E lebih dari 0', 'pakar ', 'setuju'),
(6, 'Mahasiswa status Drop Out secara akademik', 'Mahasiswa tidak sanggup secara akademik', 'pakar', 'setuju'),
(7, 'Mahasiswa status Drop Out karena kehadiran', 'Mahasiswa tidak ada kabar selama 2 semester berturut - turut', 'pakar', 'setuju'),
(8, 'Mahasiswa status Drop Out karena pelanggaran', 'Mahasiswa melakukan pelanggaran berat', 'pakar', 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `isi_pertanyaan`) VALUES
('m1', 'Apakah mahsiswa tidak mampu secara akademis'),
('m10', 'Apakah IPK mahasiswa lebih dari samadengan => 2 ?'),
('m10-a', 'Apakah Jumlah sama sks nilai mahasiswa D kurang dari sama dengan 4 (D=<4)dan nilai E sama dengan 0 ? Ket: harus semuanya terpenuhi '),
('m11-a', 'Apakah Jumlah sama sks nilai mahasiswa D lebih dari 4 (D>4) nilai D kurang dari 8 dan nilai E sama dengan 0 ? Ket: harus semuanya terpenuhi '),
('m2', 'Apakah IPK diantara 1,75 - 2,00 dan jumlah sks nilai mahasiswa D kurang dari sama dengan 8 (D=<8) dan nilai E = 0 ? Ket: harus semuanya terpenuhi  '),
('m21', 'Apakah mahasiswa tidak ada kabar selama 2 semester berturut turut'),
('m3', 'Apakah mahasiswa melakukan pelanggaran berat ?'),
('m3-a', 'Apakah IPK kurang 1,75 jumlah sks nilai mahasiswa D lebih dri 8 (D>8) atau sudah status mahasiwa perbaan 2 kali atau nilai E = 0 ? Ket: salah satu ataupun semuanya terpenuhi  ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `kode_solusi` varchar(50) NOT NULL,
  `isi_solusi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`kode_solusi`, `isi_solusi`) VALUES
('S1', 'Mahasiswa status Tetap'),
('S2', 'Mahasiswa status Percobaan'),
('S3', 'Mahasiswa status Drop out secara akademik'),
('S4', 'x-1'),
('S5', 'Mahasiswa status Drop Out karena kehadiran'),
('S6', 'Mahasiswa status Drop Out karena pelanggaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  ADD PRIMARY KEY (`kode_kesimpulan`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`kode_solusi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  MODIFY `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
