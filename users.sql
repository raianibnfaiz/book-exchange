-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 06:37 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email_address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `phone_number`, `email_address`) VALUES
('babor', '111', 'babor', 'raja ', '56573498 ', 'babor@gmail.com'),
('bari', '11155', 'bari', 'bhai ', '11163 ', 'noreply@gmail.com'),
('dfgd', '3435', '6546fg', 'geryry ', 'ytryrrt ', 'gfgdfg'),
('joy', '345', 'joy', 'bir ', '4433543 ', 'joy@gmail.com'),
('Kumar', '455', 'rajesh', 'kumar ', '4321 ', '2354'),
('Messi', 'lm10', 'lionel', 'messi ', '01232014 ', 'argentina@gmail.com'),
('nikunjo', '0042', 'duronto', 'nikunjo ', '513 ', '42@gmail.com'),
('nilufa', '12', 'salma', 'akhter ', '01552326099 ', 'r@gmail.com'),
('raian', '1234', 'a', 'f ', '1625150186 ', 'ra'),
('raianfaiz', '234', 'the', 'red ', '456 ', 'raianibnfaiz@gmail.com'),
('sabrina', '100', 'sabrina', 'faiz ', '00000000000000 ', 'sabrina@gmail.com'),
('shomoresh', '420', 'shomoresh', 'mojumder ', '091234 ', 'shomoresh@gmail.com'),
('syeed', '1234', 'Syeed', 'Faiz', NULL, 'syeedibnfaiz@gmail.com'),
('tasnim', '1234', 'Tasnim', 'Faiz', NULL, 'tasnim6603@gmail.com'),
('tim', '234', 'tim', 'red ', '3322 ', 'qwz@rr.com'),
('we', 'are', 'the', 'yui ', '1625150186 ', 'rtyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
