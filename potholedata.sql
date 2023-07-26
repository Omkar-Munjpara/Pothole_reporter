-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 08:00 AM
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
-- Database: `porthole`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('abc@gmail.com', '12345'),
('abc@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `porthole`
--

--CREATE TABLE `porthole` (
 -- `s_name` varchar(30) NOT NULL,
 -- `id` int(30) NOT NULL,
 -- `s_address` varchar(50) NOT NULL,
 -- `contact` bigint(10) NOT NULL,
 -- `email` varchar(30) NOT NULL
--) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `porthole`
--

--INSERT INTO `porthole` (`s_name`, `id`, `s_address`, `contact`, `email`) VALUES
--('khushi', 12345, 'jsdbfd', 2242343, 'ayushi@gmail.com'),
--('khushi jani', 123, 'vdghvh', 2635462, 'khushi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `porthole`
--
--ALTER TABLE `porthole`
 -- ADD PRIMARY KEY (`email`);
--COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
