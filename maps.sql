-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 05:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maps`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `output_city` varchar(255) NOT NULL,
  `shop1` varchar(255) DEFAULT NULL,
  `shop2` varchar(255) DEFAULT NULL,
  `shop3` varchar(255) DEFAULT NULL,
  `shop4` varchar(255) DEFAULT NULL,
  `shop5` varchar(255) DEFAULT NULL,
  `shop6` varchar(255) DEFAULT NULL,
  `shop7` varchar(255) DEFAULT NULL,
  `shop8` varchar(255) DEFAULT NULL,
  `shop9` varchar(255) DEFAULT NULL,
  `shop10` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `output_city`, `shop1`, `shop2`, `shop3`, `shop4`, `shop5`, `shop6`, `shop7`, `shop8`, `shop9`, `shop10`) VALUES
(1, 'lapulapu', 'Lapu-Lapu', 'Libera', NULL, NULL, 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(2, 'cebu', 'Cebu', 'Libera', NULL, 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(3, 'beijing', 'Beijing', 'Libera', 'shop2', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(4, 'mandaue', 'Mandaue', 'Libera', 'shop2', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(5, 'talisay', 'Talisay', 'Libera', 'shop2', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(6, 'danao', 'Danao', 'Libera', 'shop2', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(7, 'carcar', 'Carcar', 'Libera', 'shop2', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(8, 'bogo', 'Bogo', 'Libera', 'shop2', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(9, 'liloan', 'Liloan', 'Libera', 'isBruh', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(10, 'oslob', 'Oslob', 'Libera', 'shop2', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(11, 'consolacion', 'Consolacion', 'Libera', 'shop2', 'shop3', 'shop4', 'shop5', 'shop6', 'shop7', 'shop8', 'shop9', 'shop10'),
(12, 'manila', 'Manila', 'Rosso\'s Laundry Shop', 'Suds Laundry Shop', 'LLGL Laundry Shop', 'Bigwash Laundry Shop Inc.', 'St Michael\'s Laundry Shop', 'St Michael\'s Laundry Shop', 'Rahms Laundry Shop', 'Kinula Laundry shop', 'Lavandera Ko Laundry Shop', 'ALA Keem Laundry Shop');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'almadendj@gmail.com', 'password123'),
(2, 'teddybartletg88@gmail.com', 'password123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
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
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
