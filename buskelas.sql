-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 01:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busakap`
--

-- --------------------------------------------------------

--
-- Table structure for table `buskelas`
--

CREATE TABLE `buskelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(40) NOT NULL,
  `image_url` text NOT NULL,
  `inter_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buskelas`
--

INSERT INTO `buskelas` (`id`, `kelas`, `deskripsi`, `harga`, `image_url`, `inter_url`) VALUES
(1, 'ekonomi', 'Seat penumpang tiga di kanan dan dua di kiri (3-2)', '10000', 'assets/img/ekonomi/ekonomi.png', 'assets/img/ekonomi/inter-ekonomi.png'),
(2, 'bisnis', 'Seat Penumpang bangku 2-2 sehingga lebih lebar', '20000', 'assets/img/bisnis/bisnis.png', 'assets/img/bisnis/inter-bisnis.png'),
(3, 'eksekutif', 'Model sleeping seat', '30000', 'assets/img/eksekutif/eksekutif.png', 'assets/img/eksekutif/inter-eksekutif.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buskelas`
--
ALTER TABLE `buskelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buskelas`
--
ALTER TABLE `buskelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
