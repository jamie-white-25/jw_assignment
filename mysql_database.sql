-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2019 at 01:25 PM
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
-- Database: `jw_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `coin_flip`
--

DROP TABLE IF EXISTS `coin_flip`;
CREATE TABLE IF NOT EXISTS `coin_flip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_coin_filps` varchar(255) NOT NULL,
  `number_heads` varchar(255) NOT NULL,
  `number_tails` varchar(255) NOT NULL,
  `percent_heads` varchar(255) NOT NULL,
  `percent_tails` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coin_flip`
--

INSERT INTO `coin_flip` (`id`, `number_coin_filps`, `number_heads`, `number_tails`, `percent_heads`, `percent_tails`, `created_at`) VALUES
(1, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 08:20:47'),
(2, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 08:21:40'),
(3, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 08:21:45'),
(4, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 08:21:46'),
(5, '6', '4', '2', '66.67%', '33.33%', '2019-05-24 08:21:48'),
(6, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:31'),
(7, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:33'),
(8, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:37'),
(9, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:37'),
(10, '6', '2', '4', '33.33%', '66.67%', '2019-05-24 11:20:38'),
(11, '6', '4', '2', '66.67%', '33.33%', '2019-05-24 11:20:38'),
(12, '6', '5', '1', '83.33%', '16.67%', '2019-05-24 11:20:39'),
(13, '6', '4', '2', '66.67%', '33.33%', '2019-05-24 11:20:39'),
(14, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:39'),
(15, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:40'),
(16, '6', '2', '4', '33.33%', '66.67%', '2019-05-24 11:20:42'),
(17, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:43'),
(18, '6', '2', '4', '33.33%', '66.67%', '2019-05-24 11:20:44'),
(19, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:44'),
(20, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:44'),
(21, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:20:45'),
(22, '6', '5', '1', '83.33%', '16.67%', '2019-05-24 11:20:45'),
(23, '6', '4', '2', '66.67%', '33.33%', '2019-05-24 11:20:46'),
(24, '6', '4', '2', '66.67%', '33.33%', '2019-05-24 11:21:18'),
(25, '6', '2', '4', '33.33%', '66.67%', '2019-05-24 11:21:19'),
(26, '6', '1', '5', '16.67%', '83.33%', '2019-05-24 11:21:20'),
(27, '6', '2', '4', '33.33%', '66.67%', '2019-05-24 11:21:21'),
(28, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:21:22'),
(29, '6', '3', '3', '50.00%', '50.00%', '2019-05-24 11:21:23'),
(30, '6', '2', '4', '33.33%', '66.67%', '2019-05-24 11:21:23'),
(31, '22', '12', '10', '54.55%', '45.45%', '2019-05-24 11:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `email_check`
--

DROP TABLE IF EXISTS `email_check`;
CREATE TABLE IF NOT EXISTS `email_check` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_check`
--

INSERT INTO `email_check` (`id`, `email`, `created_at`) VALUES
(1, 'ffdsf@fdsdff.com', '2019-05-24 08:08:09'),
(2, '6', '2019-05-24 08:19:33'),
(3, '6', '2019-05-24 08:19:59'),
(4, 'ffdsf@fdsdff.com', '2019-05-24 11:16:14'),
(5, 'fdsfsd@fsdf.com', '2019-05-24 11:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `offset_date`
--

DROP TABLE IF EXISTS `offset_date`;
CREATE TABLE IF NOT EXISTS `offset_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orginal_raw_date` varchar(255) NOT NULL,
  `offset_raw_date` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offset_date`
--

INSERT INTO `offset_date` (`id`, `orginal_raw_date`, `offset_raw_date`, `date`, `created_at`) VALUES
(1, '4684554456', '468455445665', '06-Oct-16814', '2019-05-24 08:03:52'),
(2, '4684554456', '468455445665', '06-Oct-16814', '2019-05-24 11:37:22'),
(3, '486456456', '4864564565465', '30-Nov-156121', '2019-05-24 11:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `unix_date`
--

DROP TABLE IF EXISTS `unix_date`;
CREATE TABLE IF NOT EXISTS `unix_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raw_time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unix_date`
--

INSERT INTO `unix_date` (`id`, `raw_time`, `date`, `created_at`) VALUES
(1, '4684865', '24-Feb-1970', '2019-05-24 08:03:08'),
(2, '4684865', '24-Feb-1970', '2019-05-24 08:03:08'),
(3, '46845544', '27-Jun-1971', '2019-05-24 08:03:08'),
(4, '4684554456', '13-Jun-2118', '2019-05-24 08:03:08'),
(5, '4684554456', '13-Jun-2118', '2019-05-24 08:03:08'),
(6, '4684554456', '13-Jun-2118', '2019-05-24 08:03:08'),
(7, '4684554456', '13-Jun-2118', '2019-05-24 08:03:08'),
(8, '4684554456', '13-Jun-2118', '2019-05-24 08:03:08'),
(9, '4684554456', '13-Jun-2118', '2019-05-24 08:03:14'),
(10, '4684554456', '13-Jun-2118', '2019-05-24 11:36:59'),
(11, '4684554456', '13-Jun-2118', '2019-05-24 11:37:20'),
(12, '486456456', '01-Jun-1985', '2019-05-24 11:55:12'),
(13, '486456456', '01-Jun-1985', '2019-05-24 11:56:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
