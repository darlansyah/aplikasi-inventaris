-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 05:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tgl_datang` date NOT NULL,
  `katagori` varchar(20) NOT NULL,
  `status_barang` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`kode_barang`, `nama_barang`, `jumlah`, `satuan`, `tgl_datang`, `katagori`, `status_barang`, `harga`) VALUES
('144', 'motorsss', 3, 'unit', '2019-01-07', 'Elektronik', 'Bagus', 24),
('21515', 'sepeda', 4, 'buah', '2019-01-14', 'Kendaraan', 'Rusak', 34444),
('A003', 'pensil', 3, 'buah', '2019-01-08', 'Alat Tulis Kantor', 'Rusak', 1000),
('A006', 'komper', 2, 'Perawatan', '2019-01-08', 'Elektronik', 'Perawatan', 10000),
('A900', 'sepeda', 1, 'unit', '2019-01-08', 'Kendaraan', 'Perawatan', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`username`, `password`, `nama_lengkap`, `email`, `no_tlp`) VALUES
('darlan', '123140060', 'laode darlansyah', 'darlansyah@gmail', 325370962),
('putra', '123140000', 'putra eka', 'putra_eka@gmail.com', 236774374);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
