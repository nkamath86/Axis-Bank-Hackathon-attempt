-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2016 at 12:00 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aadhaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `street` text NOT NULL,
  `district` text NOT NULL,
  `state` text NOT NULL,
  `pincode` text NOT NULL,
  `pan` int(11) NOT NULL,
  `constitution` varchar(255) NOT NULL,
  `channel` varchar(255) NOT NULL,
  `operating_system` varchar(255) NOT NULL,
  `interface_language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `uid`, `name`, `dob`, `phone`, `email`, `street`, `district`, `state`, `pincode`, `pan`, `constitution`, `channel`, `operating_system`, `interface_language`) VALUES
(0, '999999990019', 'Shivshankar Choudhury', '13-05-1968', '2810806979', 'sschoudhury@dummyemail.com', '12 Maulana Azad Marg', '12 Maulana Azad Marg', 'New Delhi', '110002', 1111111111, 'Private Company', 'Credit Card,Debit Card,Net Banking', 'Windows', 'java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
