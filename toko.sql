-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2018 at 05:56 PM
-- Server version: 5.7.20
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `stock`, `kategori`, `foto`) VALUES
(1, 'laskar pelangi', 80000, 12, 'fiksi', '220px-Laskar_Pelangi_film.jpg'),
(6, 'adsad', 200000, 12, 'fiksi', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'fiksi'),
(2, 'non fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `jumlah` varchar(200) NOT NULL,
  `status_pembayaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `username`, `nama_barang`, `harga`, `jumlah`, `status_pembayaran`) VALUES
(1, '', 'laskar pelangi', '80000', '1', '0'),
(2, '', 'adsad', '200000', '1', '1'),
(3, '', 'laskar pelangi', '80000', '1', '0'),
(4, 'userbiasa', 'laskar pelangi', '80000', '1', '0'),
(5, 'userbiasa', '', '', '', '1'),
(6, 'userbiasa', '', '', '', '1'),
(7, 'userbiasa', '', '', '', '1'),
(8, 'userbiasa', '', '', '', '1'),
(9, 'userbiasa', '', '', '', '1'),
(10, 'userbiasa', '', '', '', '1'),
(11, 'userbiasa', '', '', '', '1'),
(12, 'userbiasa', '', '', '', '1'),
(13, 'userbiasa', '', '', '', '1'),
(14, 'userbiasa', '', '', '', '1'),
(15, 'userbiasa', '', '', '', '1'),
(16, 'userbiasa', '', '', '', '1'),
(17, 'userbiasa', '', '', '', '1'),
(18, 'userbiasa', '', '', '', '1'),
(19, 'userbiasa', '', '', '', '1'),
(20, 'userbiasa', '', '', '', '1'),
(21, 'userbiasa', '', '', '', '1'),
(22, 'userbiasa', '', '', '', '1'),
(23, 'userbiasa', '', '', '', '1'),
(24, 'userbiasa', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `password`, `role`) VALUES
(1, 'userbiasa', '5ce18dd788da69615cf285d404daa225', 0),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
