-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 12:10 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `can10`
--

-- --------------------------------------------------------

--
-- Table structure for table `kantin`
--

CREATE TABLE `kantin` (
  `id_kantin` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kode_kantin` varchar(5) NOT NULL,
  `nama_kantin` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantin`
--

INSERT INTO `kantin` (`id_kantin`, `username`, `password`, `kode_kantin`, `nama_kantin`, `status`) VALUES
(1, 'kantina@filkom.com', '$2y$10$X9e0/DFtEMy3yJfpu7BcU.WOkEz5t2El5MZhR1i8wgAZvoNoHZ65.', 'AAA', 'Kantin A', 0),
(2, 'kantinb@filkom.com', '$2y$10$X9e0/DFtEMy3yJfpu7BcU.WOkEz5t2El5MZhR1i8wgAZvoNoHZ65.', 'BBB', 'Kantin B', 0),
(3, 'kantinc@filkom.com', '$2y$10$X9e0/DFtEMy3yJfpu7BcU.WOkEz5t2El5MZhR1i8wgAZvoNoHZ65.', 'CCC', 'Kantin C', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `id_kantin` int(10) UNSIGNED NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga_menu` int(10) UNSIGNED NOT NULL,
  `status` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_kantin`, `nama_menu`, `gambar`, `harga_menu`, `status`) VALUES
(1, 1, 'Ayam Kecap', 'A_1', 10000, 0),
(2, 1, 'Laksa Bandung', 'A_2', 12000, 0),
(5, 1, 'Tahu Telor', 'A_3', 10500, 0),
(6, 1, 'Soto Babat', 'A_4', 11000, 0),
(10, 2, 'Mie Kuah', 'B_1', 4000, 0),
(11, 2, 'Gado-Gado', 'B_2', 10000, 0),
(12, 2, 'Mie Goreng', 'B_3', 5000, 0),
(13, 2, 'Nasi Goreng', 'B_4', 12000, 0),
(14, 3, 'Es Jeruk', 'C_1', 3000, 0),
(15, 3, 'Es Teh', 'C_2', 2500, 0),
(16, 3, 'Es Cappucino', 'C_3', 5000, 0),
(17, 3, 'Air Mineral', 'C_4', 3000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) UNSIGNED NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `kode_transaksi` varchar(16) NOT NULL,
  `status` int(5) UNSIGNED NOT NULL DEFAULT '0',
  `nomor_meja` int(5) UNSIGNED DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pemesan`, `kode_transaksi`, `status`, `nomor_meja`, `tanggal`) VALUES
(1, 'Faiz', 'EC9749', 0, NULL, '2018-05-06 09:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_menu`
--

CREATE TABLE `transaksi_menu` (
  `id_transaksi` int(20) UNSIGNED NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga_persatuan` int(10) NOT NULL,
  `tambahan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_menu`
--

INSERT INTO `transaksi_menu` (`id_transaksi`, `id_menu`, `jumlah`, `harga_persatuan`, `tambahan`) VALUES
(1, 1, 2, 10000, 'Gak pake sambel'),
(1, 2, 1, 12000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kantin`
--
ALTER TABLE `kantin`
  ADD PRIMARY KEY (`id_kantin`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `fk_kantin` (`id_kantin`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_menu`
--
ALTER TABLE `transaksi_menu`
  ADD PRIMARY KEY (`id_transaksi`,`id_menu`) USING BTREE,
  ADD KEY `fk_menu` (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kantin`
--
ALTER TABLE `kantin`
  MODIFY `id_kantin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_kantin` FOREIGN KEY (`id_kantin`) REFERENCES `kantin` (`id_kantin`);

--
-- Constraints for table `transaksi_menu`
--
ALTER TABLE `transaksi_menu`
  ADD CONSTRAINT `fk_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
