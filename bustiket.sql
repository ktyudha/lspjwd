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
-- Table structure for table `bustiket`
--

CREATE TABLE `bustiket` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jadwal` date NOT NULL,
  `penumpang` int(20) NOT NULL,
  `penumpanglansia` int(20) NOT NULL,
  `harga` int(40) NOT NULL,
  `hargalansia` int(40) NOT NULL,
  `totalbayar` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bustiket`
--

INSERT INTO `bustiket` (`id`, `nama`, `nohp`, `nik`, `kelas`, `jadwal`, `penumpang`, `penumpanglansia`, `harga`, `hargalansia`, `totalbayar`) VALUES
(10, 'Kurniawan Try Yudha', '0085848250548', '3516080908030002', '2', '2022-10-28', 2, 1, 20000, 18000, 58000),
(14, 'yud', '086848250548', '3516080908030002', '2', '2022-10-28', 1, 2, 20000, 18000, 56000),
(15, 'indra tirta', '0851234567890', '3516080908030211', '3', '2022-10-29', 5, 1, 30000, 27000, 177000),
(16, 'Kurniawan Try Yudha', '085848250548', '3516080908030002', '1', '2022-10-28', 5, 1, 10000, 9000, 59000),
(17, 'Kurniawan Try Yudha', '085848250548', '3516080908030002', '1', '2022-10-28', 5, 1, 10000, 9000, 59000),
(18, 'Kurniawan Try Yudha', '085848250548', '3156080908030002', '2', '2022-10-28', 2, 5, 20000, 18000, 130000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bustiket`
--
ALTER TABLE `bustiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bustiket`
--
ALTER TABLE `bustiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
