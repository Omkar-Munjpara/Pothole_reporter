-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 05:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pothole`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `name` varchar(30) NOT NULL,
  `adhaar_no` int(30) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `rode_name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin_code` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `description` varchar(150) NOT NULL,
  `photo` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`name`, `adhaar_no`, `mobile_no`, `address`, `rode_name`, `city`, `pin_code`, `email`, `description`, `photo`) VALUES
('khushi', 74676476, 6456345, 'jhfjh', 'jsfhjd', 'dfjhj', 45345, 'khushi123@gmail.com', '', 'jhdfjdj'),
('khushi', 3244, 43433353, 'jsdbfd', 'hdhvjv', 'djhfbjvb', 3453, 'khushi123@gmail.com', '', 'hddhgdgdh'),
('khushi', 12434, 33334343, 'jsdbfd', 'bcvjhb', 'djhfbjvb', 343, 'khushi123@gmail.com', 'cjxbjhbvj', '');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_login`
--

CREATE TABLE `contractor_login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contractor_login`
--

INSERT INTO `contractor_login` (`email`, `password`) VALUES
('123@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `government_login`
--

CREATE TABLE `government_login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `government_login`
--

INSERT INTO `government_login` (`email`, `password`) VALUES
('abc@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
