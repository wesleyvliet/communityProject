-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 mei 2020 om 21:09
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
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `categorie` int(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `preview_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `categorie`, `author`, `preview_image`) VALUES
(1, 'G2 Is Your NA Rocket League Spring Series Champions', 'Another tournament, another victory! Our Rocket League squad is unstoppable this year, taking another\r\n                clean tournament win to become your Rocket League Spring Series – North America Champions!\r\n                <br>\r\n                <br>\r\n                After winning the North American Rocket League Championship Season 9 and the Astronauts Star Circuit, we\r\n                have re-established ourselves as the North American Powerhouse we are known as.\r\n                <br>\r\n                <br>\r\n                Winning the RLCS9 meant that we secured our spot in Psyonix’s newest tournament, the Rocket League\r\n                Spring Series. Going in as the favorites, we were eager to get the ball rolling and snag the lion’s\r\n                share of the $125,000 prize pool.\r\n                <br>\r\n                <br>\r\n                Dropping only one game in the opening matches, we breezed past Rogue and Team Envy to secure our spot in\r\n                the winners’ bracket finals against rival NRG. Even NRG’s show stopping attack wasn’t enough to stop us\r\n                as we took the series 4-2 to advance to the Grand Finals.\r\n                <br>\r\n                <br>\r\n                What better way to end a tournament than with an epic rematch against NRG? This epic Grand Final turned\r\n                out to be an epic stomp as we rolled, flicked and demoed our way through NRG to secure the clean 4-0\r\n                sweep!\r\n                <br>\r\n                <br>\r\n                After a couple months of grinding and hard work, the boys are shifting gears and taking a bit of well\r\n                deserved R&R before we get back into the action in RLCS10.\r\n                <br>\r\n                <br>\r\n                Be sure to keep up with these professional ball chasers on Twitter, Facebook, Instagram, YouTube and\r\n                Twitch!', '2020-05-25', 1, 'Remco', 'rl-players.jpg'),
(2, 'G2 Is Your NA Rocket League Spring Series Champions', 'test', '2020-05-26', 1, 'test', 'reaper.jpg'),
(3, 'G2 Is Your NA Rocket League Spring Series Champions', 'asdf', '2020-05-26', 1, 'test', 'spelers.jpg'),
(5, 'G2 Is Your NA Rocket League Spring Series Champions', 'awdawd', '2020-05-26', 1, 'awdwad', 'bmw.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'CSGO');

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
(1, 'Anthony is gay', 'CSGO', 'usertest2', 'usertest4', '05:00:00', '2020-05-21', 0),
(3, 'title', 'Valorant', 'usertest4', 'usertest1', '00:00:00', '2020-05-21', 1),
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
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `categorie`
--
ALTER TABLE `categorie`
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
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
