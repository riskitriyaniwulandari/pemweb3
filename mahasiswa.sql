-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 03:43 PM
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
-- Database: `pw_701210149`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` int(15) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Email` varchar(18) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(22) NOT NULL,
  `Gambar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama`, `Email`, `Jurusan`, `Fakultas`, `Gambar`) VALUES
(701210064, 'Eka Fitria', 'fitriae854@gmail.c', 'sistem informasi', 'sains dan teknologi', 'EKA.JPEG'),
(701210149, 'Wulandari Riski Triy', 'riskitriyaniwuland', 'Sistem Informasi', 'Sains Dan Teknologi', 'WULAN.JPEG'),
(701210221, 'Asih Amelia Putri', 'asihamelia18@gmail', 'Sistem informasi', 'Sains dan teknologi', 'ASIH.JPEG'),
(701210228, 'Nabila Putri Mareta', 'nabilaputrimareta2', 'sistem informasi', 'sains dan teknologi', 'NABILA.jPE'),
(701210258, 'Dahana Nabila Rizki', 'dahananabila@gmail', 'sistem informasi', 'sains dan teknologi', 'DAHANA.JPE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
