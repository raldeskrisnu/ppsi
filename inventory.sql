-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2020 at 05:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(5) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `harga_beli` int(20) NOT NULL,
  `harga_jual` int(20) NOT NULL,
  `jumlah_stock` int(20) NOT NULL,
  `supplier` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `jenis_barang`, `nama_barang`, `harga_beli`, `harga_jual`, `jumlah_stock`, `supplier`, `deskripsi`) VALUES
('123R', 'alat kantor', 'kursi', 5000, 6000, -15, 'lorem ipsum', ''),
('123R4', 'Alat kantor', 'Meja', 50, 2, -2298, 'sdf', ''),
('56', 'Alat kantor', 'asd', 123, 3333, 11, 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis_barang` int(5) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis_barang`, `jenis_barang`) VALUES
(1, 'Alat tulis kantor'),
(2, 'Perlengkapan kantor');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_transaksi`
--

CREATE TABLE `jenis_transaksi` (
  `id_jenis_transaksi` int(11) NOT NULL,
  `jenis_transaksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_transaksi`
--

INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES
(1, 'Tunai'),
(2, 'Kredit');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `jenis_transaksi` varchar(20) NOT NULL,
  `jumlah_beli` int(20) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `customer` text NOT NULL,
  `nik_customer` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `jenis_transaksi`, `jumlah_beli`, `total_harga`, `customer`, `nik_customer`, `tempat_lahir`, `tanggal_lahir`) VALUES
(3, '123R', 'Cash', 5, 30000, 'abc', '', '', ''),
(4, '123R', 'Cash', 7, 42000, 'raldes', '', '', ''),
(5, '123R4', 'Cash', 233, 466, 'raldes', '', '', ''),
(6, '123R', 'Cash', 3, 18000, 'raldes', '', '', ''),
(7, '123R4', 'Cash', 3, 6, 'sss', '', '', ''),
(8, '123R4', 'Cash', 3, 6, 'sss', '', '', ''),
(9, '123R', 'Cash', 32, 192000, 'sdd', '', '', ''),
(10, '123R', 'Cash', 32, 192000, 'sdd', '', '', ''),
(11, '123R', 'Cash', 32, 192000, 'sdd', '', '', ''),
(12, '123R', 'Cash', 32, 192000, 'sdd', '', '', ''),
(13, '123R', 'Cash', 32, 192000, 'sdd', '', '', ''),
(14, '123R4', 'Cash', 2, 4, '', '', '', ''),
(15, '123R4', 'Cash', 2, 4, '', '', '', ''),
(16, '123R4', 'Cash', 2, 4, '', '', '', ''),
(17, '123R4', 'Cash', 2, 4, '', '', '', ''),
(18, '123R4', 'Cash', 2, 4, '', '', '', ''),
(19, '123R4', 'Cash', 4, 8, '23', '', '', ''),
(20, '123R4', 'Cash', 1, 2, 'sd', '', '', ''),
(21, '123R4', 'Cash', 1, 2, 'sd', '', '', ''),
(22, '123R', 'Cash', 1, 6000, 'sss', '', '', ''),
(23, '123R', 'Cash', 2, 12000, 'dfff', '', '', ''),
(24, '123R', 'Cash', 1, 6000, 'hhh', '', '', ''),
(25, '123R4', 'Cash', 2342, 4684, 'ssg', '', '', ''),
(26, '123R', 'Kredit', 12, 72000, 'asdff', '', '', ''),
(27, '123R', 'Kredit', 1, 6000, 'raldes', '123asd123123', 'asdaa', '2000-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'owner'),
(3, 'gggg', 'kraldes@yahoo.com', '0bdba65117548964bad7181a1a9f99e4', 'owner'),
(6, '123', 'hahahihi@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id_hutang`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis_barang`);

--
-- Indexes for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  ADD PRIMARY KEY (`id_jenis_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id_hutang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  MODIFY `id_jenis_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
