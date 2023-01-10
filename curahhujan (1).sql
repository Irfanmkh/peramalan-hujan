-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 06:57 AM
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
-- Database: `curahhujan`
--

-- --------------------------------------------------------

--
-- Table structure for table `forecast_hujan`
--

CREATE TABLE `forecast_hujan` (
  `id` int(2) NOT NULL,
  `bulan` varchar(9) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `curah` int(5) DEFAULT 0,
  `forecast` double DEFAULT NULL,
  `mad_3` double DEFAULT NULL,
  `mse_3` double DEFAULT NULL,
  `mape_3` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forecast_hujan`
--

INSERT INTO `forecast_hujan` (`id`, `bulan`, `tahun`, `curah`, `forecast`, `mad_3`, `mse_3`, `mape_3`) VALUES
(1, 'JANUARI', 2015, 30, 0, 0, 0, 0),
(2, 'FEBRUARI', 2015, 40, 0, 0, 0, 0),
(3, 'MARET', 2015, 40, 0, 0, 0, 0),
(4, 'APRIL', 2015, 30, 36.67, 6.67, 44.44, 22.22),
(5, 'MEI', 2015, 30, 36.67, 6.67, 44.44, 22.22),
(6, 'JUNI', 2015, 40, 33.33, 6.67, 44.44, 16.67),
(7, 'JULI', 2015, 25, 33.33, 8.33, 69.44, 33.33),
(8, 'AGUSTUS', 2015, 1, 31.67, 30.6, 940.44, 3066.6),
(9, 'SEPTEMBER', 2015, 1, 22, 21, 441, 2100),
(10, 'OKTOBER', 2015, 50, 9, 41, 1681, 82),
(11, 'NOVEMBER', 2015, 50, 17.33, 32.6, 1067.1, 65.33),
(12, 'DESEMBER', 2015, 30, 33.67, 3.67, 13.44, 12.22),
(13, 'JANUARI', 2016, 30, 43.33, 13.3, 177.78, 44.44),
(14, 'FEBRUARI', 2016, 30, 36.67, 6.67, 44.44, 22.22),
(15, 'MARET', 2016, 30, 30, 0, 0, 0),
(16, 'APRIL', 2016, 30, 30, 0, 0, 0),
(17, 'MEI', 2016, 25, 30, 5, 25, 20),
(18, 'JUNI', 2016, 20, 28.33, 8.33, 69.44, 41.67),
(19, 'JULI', 2016, 14, 25, 11, 121, 78.57),
(20, 'AGUSTUS', 2016, 16, 19.67, 3.67, 13.44, 22.92),
(21, 'SEPTEMBER', 2016, 60, 16.67, 43.3, 1877.7, 72.22),
(22, 'OKTOBER', 2016, 120, 30, 90, 8100, 75),
(23, 'NOVEMBER', 2016, 70, 65.33, 4.67, 21.78, 6.67),
(24, 'DESEMBER', 2016, 70, 83.33, 13.3, 177.78, 19.05),
(25, 'JANUARI', 2017, 101, 86.67, 14.3, 205.44, 14.19),
(26, 'FEBRUARI', 2017, 120, 80.33, 39.6, 1573.4, 33.06),
(27, 'MARET', 2017, 120, 97, 23, 529, 19.17),
(28, 'APRIL', 2017, 121, 113.6, 7.33, 53.78, 6.06),
(29, 'MEI', 2017, 50, 120.3, 70.3, 4946.7, 140.67),
(30, 'JUNI', 2017, 120, 97, 23, 529, 19.17),
(31, 'JULI', 2017, 30, 97, 67, 4489, 223.33),
(32, 'AGUSTUS', 2017, 28, 66.67, 38.6, 1495.1, 138.1),
(33, 'SEPTEMBER', 2017, 48, 59.33, 11.3, 128.44, 23.61),
(34, 'OKTOBER', 2017, 96, 35.33, 60.6, 3680.4, 63.19),
(35, 'NOVEMBER', 2017, 86, 57.33, 28.6, 821.78, 33.33),
(36, 'DESEMBER', 2017, 68, 76.67, 8.67, 75.11, 12.75),
(37, 'JANUARI', 2018, 69, 83.33, 14.3, 205.44, 20.77),
(38, 'FEBRUARI', 2018, 42, 74.33, 32.3, 1045.4, 76.98),
(39, 'MARET', 2018, 80, 59.67, 20.3, 413.44, 25.42),
(40, 'APRIL', 2018, 48, 63.67, 15.6, 245.44, 32.64),
(41, 'MEI', 2018, 42, 56.67, 14.6, 215.11, 34.92),
(42, 'JUNI', 2018, 86, 56.67, 29.3, 860.44, 34.11),
(43, 'JULI', 2018, 1, 58.67, 57.6, 3325.4, 5766.6),
(44, 'AGUSTUS', 2018, 15, 43, 28, 784, 186.67),
(45, 'SEPTEMBER', 2018, 11, 34, 23, 529, 209.09),
(46, 'OKTOBER', 2018, 60, 9, 51, 2601, 85),
(47, 'NOVEMBER', 2018, 87, 28.67, 58.3, 3402.7, 67.05),
(48, 'DESEMBER', 2018, 55, 52.67, 2.33, 5.44, 4.24),
(49, 'JANUARI', 2019, 57, 67.33, 10.3, 106.78, 18.13),
(50, 'FEBRUARI', 2019, 102, 66.33, 35.6, 1272.1, 34.97),
(51, 'MARET', 2019, 115, 71.33, 43.6, 1906.7, 37.97),
(52, 'APRIL', 2019, 76, 91.33, 15.3, 235.11, 20.18),
(53, 'MEI', 2019, 67, 97.67, 30.6, 940.44, 45.77),
(54, 'JUNI', 2019, 34, 86, 52, 2704, 152.94),
(55, 'JULI', 2019, 1, 59, 58, 3364, 5800),
(56, 'AGUSTUS', 2019, 25, 34, 9, 81, 36),
(57, 'SEPTEMBER', 2019, 65, 20, 45, 2025, 69.23),
(58, 'OKTOBER', 2019, 60, 30.33, 29.6, 880.11, 49.44),
(59, 'NOVEMBER', 2019, 55, 50, 5, 25, 9.09),
(60, 'DESEMBER', 2019, 98, 60, 38, 1444, 38.78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forecast_hujan`
--
ALTER TABLE `forecast_hujan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forecast_hujan`
--
ALTER TABLE `forecast_hujan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
