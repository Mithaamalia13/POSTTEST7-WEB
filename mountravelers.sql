-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 02:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mountravelers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `pass`) VALUES
(9, 'Mitha Amalia', 'mitha', '$2y$10$1gIUjmjhBd0jMIxMhShyseEM8SQI9KOOHdTaf8fj/sIHCpRQs1sl.');

-- --------------------------------------------------------

--
-- Table structure for table `datapendaki`
--

CREATE TABLE `datapendaki` (
  `id_pendaki` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `asal_daerah` varchar(30) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `nama_grup` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `gunung` varchar(30) NOT NULL,
  `tgl_naik` varchar(50) NOT NULL,
  `tgl_turun` varchar(50) NOT NULL,
  `status_pendakian` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapendaki`
--

INSERT INTO `datapendaki` (`id_pendaki`, `nama`, `ttl`, `asal_daerah`, `nama_ortu`, `nama_grup`, `telepon`, `gunung`, `tgl_naik`, `tgl_turun`, `status_pendakian`, `foto`) VALUES
(459, 'Mursid', 'Suka,09 September 2022', 'Kobokan', 'Supri', 'Junaedi', '09891279', 'Merbabu', '2022-11-17', '2022-11-14', '', 'Mursid.jpeg'),
(460, 'Alan Nuzulan', 'Lampung, 9 September 2001', 'Sukabumi', 'Euis Malihah', 'Mithland', '089652090730', 'Semeru', '2022-11-10', '2022-11-11', '', 'Alan Nuzulan.jpg'),
(461, 'Mitha Amalia', 'Bandung, 13 Februari 2002', 'Sumedang', 'Cucu Sukaesih', 'Mithland', '081213688007', 'Semeru', '2022-11-11', '2022-11-23', '', 'Mitha Amalia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapendaki`
--
ALTER TABLE `datapendaki`
  ADD PRIMARY KEY (`id_pendaki`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `datapendaki`
--
ALTER TABLE `datapendaki`
  MODIFY `id_pendaki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
