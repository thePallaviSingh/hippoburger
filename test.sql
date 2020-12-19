-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 04:56 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `p_id`, `p_name`, `p_price`, `p_quantity`) VALUES
(1, 'p001', 'mdh', '70', '10'),
(2, 'p001', 'abc', '200', '30');

-- --------------------------------------------------------

--
-- Table structure for table `employe_record`
--

CREATE TABLE `employe_record` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employe_record`
--

INSERT INTO `employe_record` (`id`, `name`, `email`, `mobile`, `address`) VALUES
(3, 'pallavi ', 'sikriwal319@gmail.com', '6207054448', 'noida'),
(4, 'priya', 'root@gmail.com', '6207054467', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `password`) VALUES
(1, 'pallavi ', 'singh1@gmail.com', '12'),
(2, 'pallavi ', 'singh1@gmail.com', '12'),
(4, 'sneha', 'root@gmail.com', '121'),
(5, 'priya', 'sharma1@gmail.com', '12345'),
(6, 'priya', 'sharma1@gmail.com', '12345'),
(7, 'priya', 'root@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `stdrecord`
--

CREATE TABLE `stdrecord` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdrecord`
--

INSERT INTO `stdrecord` (`id`, `name`, `email`, `password`, `gender`) VALUES
(1, 'pallavi ', 'sikriwal319@gmail.com', '', ''),
(2, 'pallavi ', 'sikriwal319@gmail.com', '', ''),
(4, 'pallavi ', 'sikriwal319@gmail.com', '', ''),
(23, 'pallavi ', 'sikriwal319@gmail.com', '', ''),
(24, 'pallavi ', 'sikriwal319@gmail.com', '', ''),
(25, 'pallavi ', 'sikriwal319@gmail.com', '', ''),
(26, 'pallavi ', 'sikriwal319@gmail.com', '', ''),
(27, 'sneha', 'abc@gmail.com', '', ''),
(28, 'sneha', 'abc@gmail.com', 'password', ''),
(29, 'pallavi ', 'abc@gmail.com', 'password', ''),
(30, 'pallavi ', 'abc@gmail.com', '123', ''),
(31, 'neha', 'gasgdj@gjda.com', '101', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'pallavi', '38b3eff8baf56627478ec76a704e9b52'),
(2, 'Amir', 'ec8956637a99787bd197eacd77acce5e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employe_record`
--
ALTER TABLE `employe_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdrecord`
--
ALTER TABLE `stdrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employe_record`
--
ALTER TABLE `employe_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stdrecord`
--
ALTER TABLE `stdrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
