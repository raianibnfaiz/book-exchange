-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 28, 2021 at 07:04 AM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u406899770_book_exchange`
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
(24, 'raian', 'the firm'),
(25, 'raian', 'shontu kothae'),
(26, 'raian', 'lalushalu'),
(27, 'syeed', 'Sapiens');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `reply` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sender`, `receiver`, `book_title`, `id`, `msg`, `reply`) VALUES
('shomoresh', 'raian', 'Botol Bhoot', 5, 'Can I have this book?', 0),
('Kumar', 'raian', 'amar bondhu rashed', 15, 'ok. i will give you this book :)', 1),
('raian', 'shomoresh', 'Botol Bhoot', 16, 'you can have it', 1),
('shomoresh', 'Kumar', 'amar bondhu rashed', 17, 'i need this book', 0),
('Kumar', 'shomoresh', 'manobjomin', 34, 'I want this book. Do you want any of my books as exchange?', 0),
('shomoresh', 'Kumar', 'Gitanjoli', 35, 'I want this book as exchange with the book \"manobjomin\"', 0),
('shomoresh', 'Kumar', 'manobjomin', 36, 'I already sent you book request of gitajnoli as exchange of my book manobjomin', 1),
('Kumar', 'shomoresh', 'manobjomin', 37, 'I get your message. I will inform you later', 1),
('raian', 'Kumar', 'amar bondhu rashed', 39, 'i need this book', 0),
('raian', 'shomoresh', 'manobjomin', 40, 'give me this book please', 0),
('raian', 'Kumar', 'amar bondhu rashed', 41, 'give me this book please', 0),
('raian', 'Kumar', 'amar bondhu rashed', 42, 'give me this book again please', 0),
('raian', 'Kumar', 'amar bondhu rashed', 43, 'Can I have this book?', 0),
('raian', 'Kumar', 'Robin Er Golpo', 44, 'when?', 0),
('raian', 'Kumar', 'amar bondhu rashed', 45, '?', 0),
('kumar', 'raian', 'shontu kothae', 46, 'I need this book. Can you give me this book? ', 0),
('raian', 'kumar', 'shontu kothae', 47, 'I can give you this book. I want \"Gitanjoli\" book in exchange. ', 1),
('syeed', 'raian', 'Amar Chotobela', 48, 'Test', 0);

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
('Mir', '555', 'Mir', 'Babu ', '8903 ', 'Dar@gmail.com'),
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
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
