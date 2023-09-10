-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2023 at 03:35 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TimeTable`
--
CREATE DATABASE IF NOT EXISTS `TimeTable` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TimeTable`;

-- --------------------------------------------------------

--
-- Table structure for table `TT`
--

CREATE TABLE `TT` (
  `Time` varchar(25) DEFAULT NULL,
  `Monday` varchar(255) DEFAULT NULL,
  `Tuesday` varchar(255) DEFAULT NULL,
  `Wednesday` varchar(255) DEFAULT NULL,
  `Thursday` varchar(255) DEFAULT NULL,
  `Friday` varchar(255) DEFAULT NULL,
  `Saturday` varchar(255) DEFAULT NULL,
  `Sunday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TT`
--

INSERT INTO `TT` (`Time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`) VALUES
('00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('01:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('02:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('03:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('04:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('05:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('06:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('07:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('08:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('09:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('15:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('17:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('18:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('19:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('20:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('21:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('22:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('23:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
