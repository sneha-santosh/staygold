-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 04:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staygold`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES
(2, 'Sk', 'nair', 'sk@gmail.com', '123654789', '123'),
(3, 'AA', 'mm', 'am@gmail.com', '123654789', 'abc'),
(4, 'tae', 'tae', 'tae@gmail.com', '1236547890', 'taetae'),
(8, 'm', 'y', 'my@gmail.com', '7412589630', 'my'),
(10, 's', 'j', 'sj@gmail.com', '7456981230', 'sj'),
(11, 'r', 'm', 'rm@gmail.com', '7412589630', 'rm'),
(13, 'jm', 'jm', 'jm@gmail.com', 'sss', 'jm'),
(14, 'jk', 'jk', 'jk@gmail.com', 'mm', 'jk'),
(15, 'jk', 'jk', 'jk@gmail.com', 'mm', 'jk'),
(16, 'jh', 'jh', 'jh@gmail.com', '123', 'jh'),
(17, 'aa', 'aa', 'aa@gmail.com', 'mm', 'aa'),
(18, 'ss', 'ss', 'ss@gmail.com', 'dcd', 'ss'),
(19, 'sneha', 'riya', 'shruti@gmail.com', '00', 'ss'),
(20, 'riya', 'sneha', 'suku@gmail.com', '11', 'ss'),
(21, 'aa', 'aa', 'aa@gmail.com', '1223', 'aa'),
(22, 'aa', 'aa', 'aa@gmail.com', '77', 'aa'),
(23, 'aa', 'aa', 'aa@gmail.com', '9833955554', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
