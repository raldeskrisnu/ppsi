-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2020 at 06:43 PM
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
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `jenis_barang`, `nama_barang`, `harga_beli`, `harga_jual`, `jumlah_stock`, `supplier`, `deskripsi`, `created_at`) VALUES
('123R', 'alat kantor', 'kursi', 5000, 6000, 9992, 'lorem ipsum', '', '2020-06-11 15:37:56'),
('123R4', 'Alat kantor', 'Meja', 50, 2, 9944, 'sdf', '', '2020-06-11 15:41:13'),
('56', 'Alat kantor', 'asd', 123, 3333, 100000, 'asd', 'asd', '2020-05-01 17:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `tanggal_transaksi` date NOT NULL,
  `nomor_hp` bigint(14) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `jenis_transaksi`, `jumlah_beli`, `total_harga`, `customer`, `nik_customer`, `tempat_lahir`, `tanggal_transaksi`, `nomor_hp`, `alamat`, `created_at`) VALUES
(128, '123R', 'Cash', 1, 6000, 'sss', '123asd12312322', 'asdaa', '2020-06-11', 85774854548, 'asdafgg', '2020-06-11 15:04:37'),
(129, '123R', 'Cash', 5, 30000, 'asdgg', '123asd123123', 'asdaa', '2020-06-11', 8578412484, 'asda', '2020-06-11 15:05:06'),
(130, '123R', 'Cash', 2, 12000, 'adsf', '123asd12312322', 'asdaa', '2020-06-10', 8578544886585, 'asdfff', '2020-06-11 15:37:56'),
(131, '123R4', 'Kredit', 56, 112, 'asdff', '123asd12312322', 'asdaa', '2020-06-08', 1234123, 'asdasda', '2020-06-11 15:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(3, 'gggg', 'kraldes@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', 'owner', '2020-06-01 17:37:47'),
(6, '123', 'hahahihi@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'karyawan', '2020-06-01 17:37:47');

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
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
