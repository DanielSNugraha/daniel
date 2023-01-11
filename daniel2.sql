-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 10:24 AM
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
-- Database: `daniel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`) VALUES
(1, 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `eo`
--

CREATE TABLE `eo` (
  `id_eo` int(11) NOT NULL,
  `nama_eo` varchar(30) NOT NULL,
  `email_eo` varchar(30) NOT NULL,
  `no_hp_eo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eo`
--

INSERT INTO `eo` (`id_eo`, `nama_eo`, `email_eo`, `no_hp_eo`) VALUES
(2, 'Jon', 'Jon@gmail.com', '1231'),
(3, 'Nike', 'nike@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sewa`
--

CREATE TABLE `jenis_sewa` (
  `id_jenis_sewa` int(11) NOT NULL,
  `nama_jenis_sewa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_sewa`
--

INSERT INTO `jenis_sewa` (`id_jenis_sewa`, `nama_jenis_sewa`) VALUES
(1, 'reguler'),
(2, 'oper');

-- --------------------------------------------------------

--
-- Table structure for table `kios`
--

CREATE TABLE `kios` (
  `id_kios` int(11) NOT NULL,
  `nama_kios` varchar(30) NOT NULL,
  `ukuran_kios` varchar(10) NOT NULL,
  `harga_kios` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_mall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kios`
--

INSERT INTO `kios` (`id_kios`, `nama_kios`, `ukuran_kios`, `harga_kios`, `id_status`, `id_mall`) VALUES
(6, 'A01', '100x100', 10000000, 2, 6),
(9, 'A02', '100x100', 1000000, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `mall`
--

CREATE TABLE `mall` (
  `id_mall` int(11) NOT NULL,
  `nama_mall` varchar(30) NOT NULL,
  `alamat_mall` varchar(100) NOT NULL,
  `peta_kios` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mall`
--

INSERT INTO `mall` (`id_mall`, `nama_mall`, `alamat_mall`, `peta_kios`) VALUES
(6, 'Hartono', 'Jl. Ringroad Selatan, No 22225555', 'Screenshot 2022-12-03 051755.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL,
  `status_bayar` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_sewa`, `tgl_pembayaran`, `bukti_pembayaran`, `status_bayar`) VALUES
(7, 13, '2022-12-16', 'Logo-UKDW-Universitas-Kristen-Duta-Wacana-Original.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_penyewa` int(11) DEFAULT NULL,
  `id_eo` int(11) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_admin`, `id_penyewa`, `id_eo`, `username`, `password`) VALUES
(4, 1, NULL, NULL, 'admin@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(6, NULL, NULL, 2, 'Jon@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(7, NULL, 4, NULL, 'daniel@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(11, NULL, NULL, 3, 'nike@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(12, NULL, 8, NULL, 'steve@gmail.com', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `ktp_penyewa` char(15) NOT NULL,
  `nama_penyewa` varchar(30) NOT NULL,
  `email_penyewa` varchar(30) NOT NULL,
  `no_hp_penyewa` char(15) NOT NULL,
  `alamat_penyewa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `ktp_penyewa`, `nama_penyewa`, `email_penyewa`, `no_hp_penyewa`, `alamat_penyewa`) VALUES
(4, '331313', 'daniel', 'daniel@gmail.com', '1234', 'Jogjakarta'),
(8, '123456221', 'steve', 'steve@gmail.com', '33333', 'klaten');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_kios` int(11) NOT NULL,
  `id_jenis_sewa` int(11) DEFAULT NULL,
  `tgl_awal_sewa` date NOT NULL,
  `tgl_akhir_sewa` date NOT NULL,
  `id_penyewa` int(11) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_kios`, `id_jenis_sewa`, `tgl_awal_sewa`, `tgl_akhir_sewa`, `id_penyewa`, `jenis_usaha`) VALUES
(13, 6, NULL, '2022-12-01', '2022-12-31', 4, 'vv');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'TERSEDIA'),
(2, 'DISEWA'),
(3, 'DIPESAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `eo`
--
ALTER TABLE `eo`
  ADD PRIMARY KEY (`id_eo`);

--
-- Indexes for table `jenis_sewa`
--
ALTER TABLE `jenis_sewa`
  ADD PRIMARY KEY (`id_jenis_sewa`);

--
-- Indexes for table `kios`
--
ALTER TABLE `kios`
  ADD PRIMARY KEY (`id_kios`),
  ADD KEY `fk_status_sewa` (`id_status`),
  ADD KEY `fk_kios_mall` (`id_mall`);

--
-- Indexes for table `mall`
--
ALTER TABLE `mall`
  ADD PRIMARY KEY (`id_mall`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_pembayaran_sewa` (`id_sewa`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `fk_pengguna_admin` (`id_admin`),
  ADD KEY `fk_pengguna_penyewa` (`id_penyewa`),
  ADD KEY `fk_pengguna_eo` (`id_eo`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `fk_sewa_kios` (`id_kios`),
  ADD KEY `fk_jenis_sewa` (`id_jenis_sewa`),
  ADD KEY `fk_penyewa_sewa` (`id_penyewa`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eo`
--
ALTER TABLE `eo`
  MODIFY `id_eo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_sewa`
--
ALTER TABLE `jenis_sewa`
  MODIFY `id_jenis_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kios`
--
ALTER TABLE `kios`
  MODIFY `id_kios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mall`
--
ALTER TABLE `mall`
  MODIFY `id_mall` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kios`
--
ALTER TABLE `kios`
  ADD CONSTRAINT `fk_kios_mall` FOREIGN KEY (`id_mall`) REFERENCES `mall` (`id_mall`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_status_sewa` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_sewa` FOREIGN KEY (`id_sewa`) REFERENCES `sewa` (`id_sewa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `fk_pengguna_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pengguna_eo` FOREIGN KEY (`id_eo`) REFERENCES `eo` (`id_eo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pengguna_penyewa` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `fk_jenis_sewa` FOREIGN KEY (`id_jenis_sewa`) REFERENCES `jenis_sewa` (`id_jenis_sewa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_penyewa_sewa` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sewa_kios` FOREIGN KEY (`id_kios`) REFERENCES `kios` (`id_kios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
