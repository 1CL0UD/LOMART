-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 09:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adsi_lomart`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `email`, `password`) VALUES
(1, 'Shalahuddin Abdul Aziz', 'a@gmail.com', 'abc123'),
(4, 'dasufdjas', 'jadshd@gajfabd.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `username`, `email`, `password`) VALUES
(1, 'Shalahuddin Kasir', 'a@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_cabang`
--

CREATE TABLE `kepala_cabang` (
  `id_kc` int(11) NOT NULL,
  `nama_kc` varchar(255) NOT NULL,
  `pass_kc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kepala_cabang`
--

INSERT INTO `kepala_cabang` (`id_kc`, `nama_kc`, `pass_kc`) VALUES
(1, 'Shalahuddin KC', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `pesanan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `prog_cuci` int(3) NOT NULL,
  `prog_setrika` int(3) NOT NULL,
  `prog_kirim` int(3) NOT NULL,
  `kode_mc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_customer`, `pesanan`, `alamat`, `hari`, `jumlah`, `prog_cuci`, `prog_setrika`, `prog_kirim`, `kode_mc`) VALUES
(1, 'Shalahuddin Abdul Aziz', 'Setrika\r\n', '', 'Kemarin', 20000, 80, 0, 0, '21as12'),
(2, 'Salsabila Juandira', 'Cuci', '', '8 Hari ', 90000, 100, 70, 0, '42w3sq'),
(3, 'Azzahra Adellia', 'Cuci & Setrika', '', '30 Hari Yang Lalu', 120000, 100, 100, 100, 'xe341'),
(6, 'Shalahuddin Abdul Aziz', 'Cuci', '', 'Hari Ini', 56000, 0, 0, 0, ''),
(7, 'test', 'Cuci', '', 'Hari Ini', 28000, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_pesanan`
--

CREATE TABLE `rekap_pesanan` (
  `id_rekap` int(255) NOT NULL,
  `hari` date NOT NULL,
  `cuci` int(255) NOT NULL,
  `setrika` int(255) NOT NULL,
  `cuci_setrika` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekap_pesanan`
--

INSERT INTO `rekap_pesanan` (`id_rekap`, `hari`, `cuci`, `setrika`, `cuci_setrika`) VALUES
(1, '2023-05-31', 23, 32, 15);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(255) NOT NULL,
  `voucher` varchar(255) NOT NULL,
  `sisa_hari` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `voucher`, `sisa_hari`, `jumlah`) VALUES
(1, 'Gratis Ongkir', 'Unlimited', 10),
(2, 'Diskon 80%', '2 Hari', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `kepala_cabang`
--
ALTER TABLE `kepala_cabang`
  ADD PRIMARY KEY (`id_kc`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `rekap_pesanan`
--
ALTER TABLE `rekap_pesanan`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kepala_cabang`
--
ALTER TABLE `kepala_cabang`
  MODIFY `id_kc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekap_pesanan`
--
ALTER TABLE `rekap_pesanan`
  MODIFY `id_rekap` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
