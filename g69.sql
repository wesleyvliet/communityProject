-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2020 at 10:56 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g69`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `username` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'webmaster', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

DROP TABLE IF EXISTS `competition`;
CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `title` varchar(240) NOT NULL,
  `game` varchar(240) NOT NULL,
  `description` varchar(240) NOT NULL,
  `competitorsA` varchar(240) NOT NULL,
  `competitorsB` varchar(240) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id`, `title`, `game`, `description`, `competitorsA`, `competitorsB`, `date`) VALUES
(1, 'title', '', 'descr', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', '2020-05-21'),
(3, 'title', '', 'descr', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', '2020-05-21'),
(4, 'title', '', 'descr', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', '2020-05-21'),
(5, 'title', '', 'descr', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', '2020-05-21'),
(6, 'title', '', 'descre', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"3\";i:2;s:1:\"2\";}', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:1:\"4\";}', '2020-05-19'),
(7, 'title', '', 'descre', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"3\";i:2;s:1:\"2\";}', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:1:\"4\";}', '2020-05-19'),
(8, 'title', 'game', 'descrip', 'a:1:{i:0;s:1:\"1\";}', 'a:1:{i:0;s:1:\"3\";}', '2020-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `competitors`
--

DROP TABLE IF EXISTS `competitors`;
CREATE TABLE IF NOT EXISTS `competitors` (
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `name` varchar(240) NOT NULL,
  `logo` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competitors`
--

INSERT INTO `competitors` (`id`, `name`, `logo`) VALUES
(1, 'usertest1', 'logo1'),
(2, 'usertest2', 'logo2'),
(3, 'usertest3', 'logo3'),
(4, 'usertest4', 'logo4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
