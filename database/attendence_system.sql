-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 11:02 PM
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
-- Database: `attendence_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `student_name`, `roll_number`) VALUES
(1, 'santhosh', '43'),
(4, 'vishal kannan', '59'),
(8, 'harisuthan', '14'),
(9, 'prasanna', '16bca49');

-- --------------------------------------------------------

--
-- Table structure for table `attendence_records`
--

CREATE TABLE `attendence_records` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `attendence_status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence_records`
--

INSERT INTO `attendence_records` (`id`, `student_name`, `roll_number`, `attendence_status`, `date`) VALUES
(0, 'santhosh', '43', 'present', '2019-01-05'),
(0, 'vishal kannan', '59', 'absent', '2019-01-05'),
(0, 'harisuthan', '14', 'present', '2019-01-05'),
(0, 'santhosh', '43', 'absent', '2019-01-06'),
(0, 'vishal kannan', '59', 'absent', '2019-01-06'),
(0, 'harisuthan', '14', 'absent', '2019-01-06'),
(0, 'santhosh', '43', 'present', '2019-01-05'),
(0, 'vishal kannan', '59', 'present', '2019-01-05'),
(0, 'harisuthan', '14', 'present', '2019-01-05'),
(0, 'santhosh', '43', 'present', '2019-01-05'),
(0, 'vishal kannan', '59', 'present', '2019-01-05'),
(0, 'harisuthan', '14', 'present', '2019-01-05'),
(0, 'santhosh', '43', 'absent', '2019-01-05'),
(0, 'vishal kannan', '59', 'absent', '2019-01-05'),
(0, 'harisuthan', '14', 'absent', '2019-01-05'),
(0, 'santhosh', '43', 'present', '2019-01-09'),
(0, 'vishal kannan', '59', 'absent', '2019-01-09'),
(0, 'harisuthan', '14', 'present', '2019-01-09'),
(0, 'santhosh', '43', 'present', '2019-02-15'),
(0, 'vishal kannan', '59', 'present', '2019-02-15'),
(0, 'harisuthan', '14', 'absent', '2019-02-15'),
(0, 'santhosh', '43', 'absent', '2019-02-15'),
(0, 'vishal kannan', '59', 'present', '2019-02-15'),
(0, 'harisuthan', '14', 'absent', '2019-02-15'),
(0, 'prasanna', '16bca49', 'present', '2019-02-15'),
(0, 'santhosh', '43', 'absent', '2019-02-25'),
(0, 'vishal kannan', '59', 'present', '2019-02-25'),
(0, 'harisuthan', '14', 'absent', '2019-02-25'),
(0, 'prasanna', '16bca49', 'present', '2019-02-25'),
(0, 'santhosh', '43', 'present', '2019-03-11'),
(0, 'vishal kannan', '59', 'present', '2019-03-11'),
(0, 'harisuthan', '14', 'present', '2019-03-11'),
(0, 'prasanna', '16bca49', 'present', '2019-03-11'),
(0, 'santhosh', '43', 'absent', '2019-03-14'),
(0, 'vishal kannan', '59', 'absent', '2019-03-14'),
(0, 'harisuthan', '14', 'absent', '2019-03-14'),
(0, 'prasanna', '16bca49', 'absent', '2019-03-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
