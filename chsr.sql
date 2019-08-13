-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 12:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(300) NOT NULL,
  `account_type` varchar(15) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `email`, `password`, `account_type`, `date_created`, `created_by`) VALUES
(1, 'ssgdgegg', '$2y$10$QrQxP3amiYj2Izp.j4Uu9uetLZN/j1Rn1fbqTvdFY9vNaGJlEtwrK', 'Admin', '2019-07-28 21:58:57', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(10) NOT NULL,
  `service_department` varchar(40) NOT NULL,
  `asset_no` varchar(30) NOT NULL,
  `equipment_type` varchar(30) NOT NULL,
  `user_department` varchar(40) NOT NULL,
  `nature_of_request` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  `number` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `service_department`, `asset_no`, `equipment_type`, `user_department`, `nature_of_request`, `name`, `position`, `number`, `date`) VALUES
(1, 'IT', '3t4t4t43', 'ggbbgb', 'volvo', 'saab', 'bel aqua', '43t43t43t43', '66', '2019-07-27 03:58:43'),
(2, 'IT', '3t4t4t43', 'ggbbgb', 'volvo', 'saab', '43wetgretqgregrett3tg1q', '43t43t43t43', '3', '2019-07-27 04:07:50'),
(3, 'Engineering', '3t4t4t43', 'ggbbgb', 'volvo', 'saab', 'sdgsdцыв', '43t43t43t43', '43464', '2019-07-27 05:54:37'),
(4, 'Engineering', '3t4t4t43', 'ggbbgb', 'volvo', 'saab', 'sdgsdцыв', '43t43t43t43', '43464', '2019-07-27 05:55:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
