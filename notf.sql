-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2019 at 04:19 AM
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
-- Table structure for table `notf`
--

DROP TABLE IF EXISTS `notf`;
CREATE TABLE IF NOT EXISTS `notf` (
  `Food` int(100) NOT NULL,
  `Clothes` int(100) NOT NULL,
  `Movie` int(100) NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `Date` date DEFAULT NULL,
  `Gadget` int(10) NOT NULL,
  `Book` int(10) NOT NULL,
  `Tourism` int(10) NOT NULL,
  `Event` int(10) NOT NULL,
  `Sport` int(10) NOT NULL,
  `Recharge` int(10) NOT NULL,
  `Roll` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notf`
--

INSERT INTO `notf` (`Food`, `Clothes`, `Movie`, `Remark`, `Date`, `Gadget`, `Book`, `Tourism`, `Event`, `Sport`, `Recharge`, `Roll`) VALUES
(800, 6848, 848, 'good', '2008-08-18', 788, 6989, 6877, 7698, 7698, 79, '123'),
(4545, 435, 3533, 'Nice', '2009-08-17', 687, 877, 798, 7687, 789, 68, '234'),
(76876, 56876, 686, '', '2019-06-24', 686, 6868, 6868, 688, 68, 686, '345'),
(654, 465, 466, 'Nice', '2019-09-19', 687, 6787, 978, 799, 687, 78, '456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
