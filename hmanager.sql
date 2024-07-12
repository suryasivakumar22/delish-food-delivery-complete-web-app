-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 05:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `hsignup`
--

CREATE TABLE `hsignup` (
  `id` int(11) NOT NULL,
  `Restaurantname` varchar(255) NOT NULL,
  `hemail` varchar(255) NOT NULL,
  `hnumber` varchar(10) NOT NULL,
  `approved` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hsignup`
--

INSERT INTO `hsignup` (`id`, `Restaurantname`, `hemail`, `hnumber`, `approved`) VALUES
(1, 'annapoorna', 'annapoorna@gmail.com', '9999999999', 'notsubmitted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hsignup`
--
ALTER TABLE `hsignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hsignup`
--
ALTER TABLE `hsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
