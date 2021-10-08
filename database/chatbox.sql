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
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`) VALUES
(24, 'santhosh', 'hie da'),
(25, 'hari', 'sollda'),
(26, 'santhosh', 'ena da pannra?'),
(27, 'hari', 'vettiya irukean da nee?'),
(28, 'sivabalan', 'iam anilkutty..!'),
(29, 'sunil chetty', 'kya raeee..?.'),
(30, 'prakash', 'vanakam'),
(31, 'bbibhy', ' jhjbhbjhbhj'),
(32, 'pauliina', 'heyyaaa!'),
(33, 'enter your name here...', 'enter your question...'),
(34, 'enter your name here...', 'enter your question...'),
(35, 'enter your name here...', 'enter your question...'),
(36, 'enter your name here...', 'enter your question...'),
(37, 'enter your name here...', 'enter your question...'),
(38, 'enter your name here...', 'enter your question...'),
(39, 'enter your name here...', 'enter your question...'),
(40, 'enter your name here...', 'enter your question...'),
(41, 'hello', 'hie'),
(42, 'harry', 'mi daw'),
(43, 'hari', 'mi forever daw'),
(44, 'vishal', 'hie'),
(45, 'santhosh', 'hi'),
(46, 'siva', 'anil'),
(47, 'santhosh', 'valga'),
(48, 'sugumar', 'hie'),
(49, 'santhosh', 'hello'),
(50, 'asraf', 'hello'),
(51, 'NEW ENTRY', 'HELLO'),
(52, 'NEW ENTRY', 'HELLO'),
(53, 'NEW ENTRY', 'HELLO'),
(54, 'niga', 'higa'),
(55, 'niga', 'he he'),
(56, 'dummy', 'testing'),
(57, 'hey', 'hello'),
(58, 'singles', 'oru naal engal kaigalum oongum'),
(59, 'santhosh', 'hello'),
(60, 'ikjdslie', ',kndkea'),
(61, 'captain', 'hello'),
(62, 'santhosh', 'captain thimingalam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
