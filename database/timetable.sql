-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 11:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb`
--

CREATE TABLE `tb` (
  `id` int(11) NOT NULL,
  `day` text NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `third` varchar(255) NOT NULL,
  `fourth` varchar(255) NOT NULL,
  `fifth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb`
--

INSERT INTO `tb` (`id`, `day`, `first`, `second`, `third`, `fourth`, `fifth`) VALUES
(1, 'monday', 'class1', 'class2', 'class3', 'class4', 'class5'),
(2, 'tuesday', 'class1', 'class2', 'class3', 'class4', 'class5'),
(3, 'wednesday', 'class1', 'class2', 'class3', 'class4', 'class5'),
(4, 'thursday', 'class1', 'class2', 'class3', 'class4', 'class5'),
(5, 'friday', 'class1', 'class2', 'class3', 'class4', 'class5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb`
--
ALTER TABLE `tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb`
--
ALTER TABLE `tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
