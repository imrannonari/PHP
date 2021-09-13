-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2020 at 08:43 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gct`
--

-- --------------------------------------------------------

--
-- Table structure for table `gctk`
--

DROP TABLE IF EXISTS `gctk`;
CREATE TABLE IF NOT EXISTS `gctk` (
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `ctn` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gctk`
--

INSERT INTO `gctk` (`name`, `pwd`, `ctn`, `addr`) VALUES
('ewqdf', '', 'jjhkjhjggj5236', 'lkjjkhjv'),
('imran', '', '456987', 'kmllll'),
('usman', '', '14566', ';jkklhjjkh'),
('hafiz', '', '45669', 'kamalia'),
('rehman', '', '55555555', 'KML77777'),
('ewqdf', '', 'jjhkjhjggj5236', 'lkjjkhjv');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
