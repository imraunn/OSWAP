-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 02:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `members`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `SlNo` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`SlNo`, `Name`) VALUES
(1, 'Raunak Asnani'),
(2, 'Himanshu Das'),
(3, 'Arijit Guha'),
(4, 'Anantarupa Hore Roy'),
(5, 'Ayush Ajay'),
(6, 'Ayush Budhiraja'),
(7, 'Nitu Kumari'),
(8, 'Shreyansh Jain'),
(9, 'Deeksha');

-- --------------------------------------------------------

--
-- Table structure for table `s3cr3t`
--

CREATE TABLE `s3cr3t` (
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s3cr3t`
--

INSERT INTO `s3cr3t` (`flag`) VALUES
('flag{d3mo_flag}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `s3cr3t`
--
ALTER TABLE `s3cr3t`
  ADD PRIMARY KEY (`flag`);

CREATE USER 'oswap_user'@'%' IDENTIFIED BY 'o5wap_u533333rr';
GRANT SELECT ON *.* TO 'oswap_user'@'%';

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
