-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mei 2020 om 20:06
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
  `competitorsA` varchar(240) NOT NULL,
  `competitorsB` varchar(240) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `archived` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `competition`
--

INSERT INTO `competition` (`id`, `title`, `game`, `competitorsA`, `competitorsB`, `time`, `date`, `archived`) VALUES
(1, 'title', 'CSGO', 'usertest2', 'usertest4', '05:00:00', '2020-05-21', 0),
(3, 'title', '', 'usertest1', 'usertest1', '00:00:00', '2020-05-21', 0),
(4, 'title', '', 'usertest4', 'usertest1', '00:00:00', '2020-05-21', 0),
(5, 'title', '', 'usertest3', 'usertest1', '00:00:00', '2020-05-21', 0),
(6, 'title', '', 'usertest1', 'usertest1', '00:00:00', '2020-05-19', 0),
(7, 'title', '', 'usertest3', 'usertest1', '00:00:00', '2020-05-19', 0),
(8, 'title', 'game', 'usertest1', 'usertest1', '00:00:00', '2020-05-18', 0),
(9, 'test', 'test', 'usertest1', 'usertest1', '06:03:00', '2020-05-18', 0),
(10, 'test', 'test', 'usertest1', 'usertest1', '03:42:00', '2020-05-29', 0),
(11, 'test', 'test', 'usertest1', 'usertest1', '03:42:00', '2020-05-29', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `competitors`
--

CREATE TABLE `competitors` (
  `id` int(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `logo` longtext NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `competitors`
--

INSERT INTO `competitors` (`id`, `name`, `logo`) VALUES
(1, 'usertest1', 'logo1.png'),
(2, 'usertest2', 'logo2.png'),
(3, 'usertest3', 'logo3.png'),
(4, 'usertest4', 'logo4.png');

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
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `competitors`
--
ALTER TABLE `competitors`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
