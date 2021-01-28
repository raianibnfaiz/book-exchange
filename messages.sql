-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 06:36 AM
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
('shomoresh', 'raian', 'Botol Bhoot', 18, 'thanks', 1),
('shomoresh', 'Kumar', 'amar bondhu rashed', 20, 'thanks', 1),
('shomoresh', 'Kumar', 'Robin Er Golpo', 21, 'i need this book.Can you give me?', 0),
('shomoresh', 'Kumar', 'Robin Er Golpo', 22, 'i need this book.Can you give me?', 0),
('shomoresh', 'Kumar', 'amar bondhu rashed', 23, 'give me this book please', 0),
('shomoresh', 'Kumar', 'amar bondhu rashed', 24, 'give me this book please', 0),
('shomoresh', 'Kumar', 'amar bondhu rashed', 25, 'give me this book please', 0),
('shomoresh', '<br />\r\n<b>Notice</b>:  Undefined index: receiver in <b>C:\\xampp\\htdocs\\aform\\message.php</b> on line <b>14</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined index: book_title in <b>C:\\xampp\\htdocs\\aform\\message.php</b> on line <b>15</b><br />\r\n', 26, 'i need this book', 0),
('shomoresh', 'Kumar', 'amar bondhu rashed', 27, 'Can I have this book?', 0),
('shomoresh', 'Kumar', 'amar bondhu rashed', 28, 'Can I have this book?', 0),
('shomoresh', 'Kumar', 'amar bondhu rashed', 29, 'Can I have this book?', 0),
('shomoresh', 'Kumar', 'amar bondhu rashed', 30, 'Can I have this book?', 0),
('shomoresh', 'Kumar', 'amar bondhu rashed', 31, 'Can I have this book?', 0),
('shomoresh', '<br />\r\n<b>Notice</b>:  Undefined index: receiver in <b>C:\\xampp\\htdocs\\aform\\message.php</b> on line <b>48</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined index: book_title in <b>C:\\xampp\\htdocs\\aform\\message.php</b> on line <b>49</b><br />\r\n', 32, 'give me this book please', 0),
('shomoresh', '<br />\r\n<b>Notice</b>:  Undefined index: receiver in <b>C:\\xampp\\htdocs\\aform\\message.php</b> on line <b>48</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined index: book_title in <b>C:\\xampp\\htdocs\\aform\\message.php</b> on line <b>49</b><br />\r\n', 33, 'give me this book please', 0),
('Kumar', 'shomoresh', 'manobjomin', 34, 'I want this book. Do you want any of my books as exchange?', 0),
('shomoresh', 'Kumar', 'Gitanjoli', 35, 'I want this book as exchange with the book \"manobjomin\"', 0),
('shomoresh', 'Kumar', 'manobjomin', 36, 'I already sent you book request of gitajnoli as exchange of my book manobjomin', 1),
('Kumar', 'shomoresh', 'manobjomin', 37, 'I get your message. I will inform you later', 1),
('shomoresh', '<br />\r\n<b>Notice</b>:  Undefined index: owner in <b>C:\\xampp\\htdocs\\aform\\request.php</b> on line <b>14</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined index: book_title in <b>C:\\xampp\\htdocs\\aform\\request.php</b> on line <b>15</b><br />\r\n', 38, 'hello', 0),
('raian', 'Kumar', 'amar bondhu rashed', 39, 'i need this book', 0),
('raian', 'shomoresh', 'manobjomin', 40, 'give me this book please', 0),
('raian', 'Kumar', 'amar bondhu rashed', 41, 'give me this book please', 0),
('raian', 'Kumar', 'amar bondhu rashed', 42, 'give me this book again please', 0),
('raian', 'Kumar', 'amar bondhu rashed', 43, 'Can I have this book?', 0),
('raian', 'Kumar', 'Robin Er Golpo', 44, 'when?', 0),
('raian', 'Kumar', 'amar bondhu rashed', 45, '?', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
