-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 mei 2020 om 20:16
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.3

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
CREATE DATABASE IF NOT EXISTS `g69` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `g69`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(240) NOT NULL,
  `username` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'webmaster', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `competition`
--

CREATE TABLE `competition` (
  `id` int(240) NOT NULL,
  `title` varchar(240) NOT NULL,
  `game` varchar(240) NOT NULL,
  `description` varchar(240) NOT NULL,
  `competitorsA` varchar(240) NOT NULL,
  `competitorsB` varchar(240) NOT NULL,
  `time` datetime NOT NULL,
  `date` date NOT NULL,
  `archived` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `competition`
--

INSERT INTO `competition` (`id`, `title`, `game`, `description`, `competitorsA`, `competitorsB`, `time`, `date`, `archived`) VALUES
(1, 'title', '', 'descr', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', '0000-00-00 00:00:00', '2020-05-21', 0),
(3, 'title', '', 'descr', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', '0000-00-00 00:00:00', '2020-05-21', 0),
(4, 'title', '', 'descr', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', '0000-00-00 00:00:00', '2020-05-21', 0),
(5, 'title', '', 'descr', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', '0000-00-00 00:00:00', '2020-05-21', 0),
(6, 'title', '', 'descre', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"3\";i:2;s:1:\"2\";}', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:1:\"4\";}', '0000-00-00 00:00:00', '2020-05-19', 0),
(7, 'title', '', 'descre', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"3\";i:2;s:1:\"2\";}', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;s:1:\"4\";}', '0000-00-00 00:00:00', '2020-05-19', 0),
(8, 'title', 'game', 'descrip', 'a:1:{i:0;s:1:\"1\";}', 'a:1:{i:0;s:1:\"3\";}', '0000-00-00 00:00:00', '2020-05-18', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `competitors`
--

CREATE TABLE `competitors` (
  `id` int(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `logo` varchar(240) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `competitors`
--

INSERT INTO `competitors` (`id`, `name`, `logo`) VALUES
(1, 'usertest1', 'logo1'),
(2, 'usertest2', 'logo2'),
(3, 'usertest3', 'logo3'),
(4, 'usertest4', 'logo4');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `competitors`
--
ALTER TABLE `competitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `competitors`
--
ALTER TABLE `competitors`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
