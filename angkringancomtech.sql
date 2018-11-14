-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2018 at 04:13 PM
-- Server version: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angkringan`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `iklan` varchar(225) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `nama`, `id_kategori`, `iklan`, `isi`) VALUES
(4, 'CPU Gamming ARMAGEDDON', 4, 'iklan_CPU_Gamming_ARMAGEDDON_1542113158.jpg', 'Free scarlet blade fan (red led) x 3 units full ATX'),
(5, 'Spiker Komputer', 2, 'iklan_Spiker_Komputer_1542113312.jpg', 'Spiker Komputer yang cocok banget untuk gamming'),
(6, 'Laptop DELL', 1, 'iklan_Laptop_DELL_1542113773.jpg', 'Core i5 hardisk 1TB Ram 16 GB. Cocok sekali untuk para Programmer pemula '),
(7, 'Motherboard gamming', 5, 'iklan_Motherboard_gamming_1542114216.jpg', 'Motherboard ini Sangat cocok dengan para gamming ');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(20) NOT NULL,
  `stock` int(20) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `deskripsi`, `harga`, `stock`, `id_kategori`, `gambar`) VALUES
(24, 'Adaptor vivan', 'fast carging, 2.0 output', 30000, 15, 2, 'gambar_Adaptor_vivan_1542111846.jpg'),
(25, 'Flasdisk ', 'sandisk 8 gb', 100000, 10, 2, 'gambar_Flasdisk__1542112227.jpg'),
(26, 'Hardisk', 'hardisk komputer kapasitas 500 gb', 350000, 5, 5, 'gambar_Hardisk_1542112317.jpg'),
(27, 'Laptop', 'merk DELL core i5 hardisk 1 TB', 5000000, 3, 1, 'gambar_Laptop_1542112464.jpg'),
(28, 'Motherboard gamming', 'Z370 gamming M5', 5000000, 5, 5, 'gambar_Motherboard_gamming_1542112561.jpg'),
(29, 'Ram', 'Vengeance LPX 16 GB, DDR4', 100000, 6, 5, 'gambar_Ram_1542112669.jpg'),
(30, 'CPU', 'CPU Gamming', 30000000, 1, 4, 'gambar_CPU_1542112782.jpg'),
(31, 'Kabel Data Vivan', 'fast carging', 25000, 12, 2, 'gambar_Kabel_Data_Vivan_1542112880.jpg'),
(32, 'Spiker Komputer', 'Titan5', 50000, 7, 2, 'gambar_Spiker_Komputer_1542112954.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'laptop'),
(2, 'Accessoris'),
(4, 'komputer'),
(5, 'sperpart');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'ulil', 'ul', 'fc14409ac80e5d5e7cc58ea538538af4'),
(2, 'galih', 'gl', '027dc74f0bbf09a61a36ec7f0d9e08ca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
