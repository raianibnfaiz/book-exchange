-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 06:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_exchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `username`, `book_title`) VALUES
(1, 'Kumar', 'amar bondhu rashed'),
(2, 'raian', 'Raju O Agunalir Bhoot'),
(4, 'raian', 'The People Of The Mist'),
(5, 'raian', 'Robin Er Golpo'),
(6, 'Kumar', 'Robin Er Golpo'),
(11, 'raian', 'Amar Chotobela'),
(12, 'raian', 'Gitanjoli'),
(14, 'Kumar', 'Gitanjoli'),
(15, 'raian', 'Botol Bhoot'),
(16, 'raian', 'Gorbhodharini'),
(17, 'raian', 'Shei Shomoy'),
(18, 'raian', 'Gitanjoli'),
(19, 'raian', 'Amar Chotobela'),
(20, 'raian', 'The People Of The Mist'),
(21, 'shomoresh', 'hat kata robin'),
(22, 'shomoresh', 'deshe bideshe'),
(23, 'shomoresh', 'manobjomin'),
(24, 'raian', 'the firm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
