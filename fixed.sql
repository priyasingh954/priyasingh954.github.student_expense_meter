-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2019 at 04:20 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expences`
--

-- --------------------------------------------------------

--
-- Table structure for table `fixed`
--

DROP TABLE IF EXISTS `fixed`;
CREATE TABLE IF NOT EXISTS `fixed` (
  `Institute_Fees` int(100) NOT NULL,
  `Hostel_Fees` int(100) NOT NULL,
  `Transportation_Fees` int(100) NOT NULL,
  `Remark` varchar(60) NOT NULL,
  `Date` date DEFAULT NULL,
  `Roll` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixed`
--

INSERT INTO `fixed` (`Institute_Fees`, `Hostel_Fees`, `Transportation_Fees`, `Remark`, `Date`, `Roll`) VALUES
(900, 900, 900, 'good', '2009-09-18', 123),
(500, 367, 786, 'nice', '2009-04-19', 234),
(6875, 7866, 686, 'Good', '2017-06-24', 345),
(658, 658, 6757, 'Food', '2019-06-24', 456);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
