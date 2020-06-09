-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 09 jun 2020 om 23:11
-- Serverversie: 10.4.10-MariaDB
-- PHP-versie: 7.3.12

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
-- Tabelstructuur voor tabel `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `username` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'webmaster', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `categorie` int(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `preview_image` varchar(100) NOT NULL,
  `archived` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `categorie`, `author`, `preview_image`, `archived`) VALUES
(1, 'G2 Is Your NA Rocket League Spring Series Champions', 'Another tournament, another victory! Our Rocket League squad is unstoppable this year, taking another\r\n                clean tournament win to become your Rocket League Spring Series – North America Champions!\r\n                <br>\r\n                <br>\r\n                After winning the North American Rocket League Championship Season 9 and the Astronauts Star Circuit, we\r\n                have re-established ourselves as the North American Powerhouse we are known as.\r\n                <br>\r\n                <br>\r\n                Winning the RLCS9 meant that we secured our spot in Psyonix’s newest tournament, the Rocket League\r\n                Spring Series. Going in as the favorites, we were eager to get the ball rolling and snag the lion’s\r\n                share of the $125,000 prize pool.\r\n                <br>\r\n                <br>\r\n                Dropping only one game in the opening matches, we breezed past Rogue and Team Envy to secure our spot in\r\n                the winners’ bracket finals against rival NRG. Even NRG’s show stopping attack wasn’t enough to stop us\r\n                as we took the series 4-2 to advance to the Grand Finals.\r\n                <br>\r\n                <br>\r\n                What better way to end a tournament than with an epic rematch against NRG? This epic Grand Final turned\r\n                out to be an epic stomp as we rolled, flicked and demoed our way through NRG to secure the clean 4-0\r\n                sweep!\r\n                <br>\r\n                <br>\r\n                After a couple months of grinding and hard work, the boys are shifting gears and taking a bit of well\r\n                deserved R&R before we get back into the action in RLCS10.\r\n                <br>\r\n                <br>\r\n                Be sure to keep up with these professional ball chasers on Twitter, Facebook, Instagram, YouTube and\r\n                Twitch!', '2020-05-25', 1, 'Remco', 'rl-players.jpg', 0),
(2, 'G2 Is Your NA Rocket League Spring Series Champions', 'Another tournament, another victory! Our Rocket League squad is unstoppable this year, taking another\r\n                clean tournament win to become your Rocket League Spring Series – North America Champions!\r\n                <br>\r\n                <br>\r\n                After winning the North American Rocket League Championship Season 9 and the Astronauts Star Circuit, we\r\n                have re-established ourselves as the North American Powerhouse we are known as.\r\n                <br>\r\n                <br>\r\n                Winning the RLCS9 meant that we secured our spot in Psyonix’s newest tournament, the Rocket League\r\n                Spring Series. Going in as the favorites, we were eager to get the ball rolling and snag the lion’s\r\n                share of the $125,000 prize pool.\r\n                <br>\r\n                <br>\r\n                Dropping only one game in the opening matches, we breezed past Rogue and Team Envy to secure our spot in\r\n                the winners’ bracket finals against rival NRG. Even NRG’s show stopping attack wasn’t enough to stop us\r\n                as we took the series 4-2 to advance to the Grand Finals.\r\n                <br>\r\n                <br>\r\n                What better way to end a tournament than with an epic rematch against NRG? This epic Grand Final turned\r\n                out to be an epic stomp as we rolled, flicked and demoed our way through NRG to secure the clean 4-0\r\n                sweep!\r\n                <br>\r\n                <br>\r\n                After a couple months of grinding and hard work, the boys are shifting gears and taking a bit of well\r\n                deserved R&R before we get back into the action in RLCS10.\r\n                <br>\r\n                <br>\r\n                Be sure to keep up with these professional ball chasers on Twitter, Facebook, Instagram, YouTube and\r\n                Twitch!', '2020-05-26', 1, 'reee', 'reaper.jpg', 0),
(3, 'G2 Is Your NA Rocket League Spring Series Champions', 'Another tournament, another victory! Our Rocket League squad is unstoppable this year, taking another\r\n                clean tournament win to become your Rocket League Spring Series – North America Champions!\r\n                <br>\r\n                <br>\r\n                After winning the North American Rocket League Championship Season 9 and the Astronauts Star Circuit, we\r\n                have re-established ourselves as the North American Powerhouse we are known as.\r\n                <br>\r\n                <br>\r\n                Winning the RLCS9 meant that we secured our spot in Psyonix’s newest tournament, the Rocket League\r\n                Spring Series. Going in as the favorites, we were eager to get the ball rolling and snag the lion’s\r\n                share of the $125,000 prize pool.\r\n                <br>\r\n                <br>\r\n                Dropping only one game in the opening matches, we breezed past Rogue and Team Envy to secure our spot in\r\n                the winners’ bracket finals against rival NRG. Even NRG’s show stopping attack wasn’t enough to stop us\r\n                as we took the series 4-2 to advance to the Grand Finals.\r\n                <br>\r\n                <br>\r\n                What better way to end a tournament than with an epic rematch against NRG? This epic Grand Final turned\r\n                out to be an epic stomp as we rolled, flicked and demoed our way through NRG to secure the clean 4-0\r\n                sweep!\r\n                <br>\r\n                <br>\r\n                After a couple months of grinding and hard work, the boys are shifting gears and taking a bit of well\r\n                deserved R&R before we get back into the action in RLCS10.\r\n                <br>\r\n                <br>\r\n                Be sure to keep up with these professional ball chasers on Twitter, Facebook, Instagram, YouTube and\r\n                Twitch!', '2020-05-26', 1, 'pepe', 'spelers.jpg', 0),
(5, 'G2 Is Your NA Rocket League Spring Series Champions', 'Another tournament, another victory! Our Rocket League squad is unstoppable this year, taking another\r\n                clean tournament win to become your Rocket League Spring Series – North America Champions!\r\n                <br>\r\n                <br>\r\n                After winning the North American Rocket League Championship Season 9 and the Astronauts Star Circuit, we\r\n                have re-established ourselves as the North American Powerhouse we are known as.\r\n                <br>\r\n                <br>\r\n                Winning the RLCS9 meant that we secured our spot in Psyonix’s newest tournament, the Rocket League\r\n                Spring Series. Going in as the favorites, we were eager to get the ball rolling and snag the lion’s\r\n                share of the $125,000 prize pool.\r\n                <br>\r\n                <br>\r\n                Dropping only one game in the opening matches, we breezed past Rogue and Team Envy to secure our spot in\r\n                the winners’ bracket finals against rival NRG. Even NRG’s show stopping attack wasn’t enough to stop us\r\n                as we took the series 4-2 to advance to the Grand Finals.\r\n                <br>\r\n                <br>\r\n                What better way to end a tournament than with an epic rematch against NRG? This epic Grand Final turned\r\n                out to be an epic stomp as we rolled, flicked and demoed our way through NRG to secure the clean 4-0\r\n                sweep!\r\n                <br>\r\n                <br>\r\n                After a couple months of grinding and hard work, the boys are shifting gears and taking a bit of well\r\n                deserved R&R before we get back into the action in RLCS10.\r\n                <br>\r\n                <br>\r\n                Be sure to keep up with these professional ball chasers on Twitter, Facebook, Instagram, YouTube and\r\n                Twitch!', '2020-05-26', 1, 'pepe', 'bmw.jpg', 0),
(11, 'G2 Is Your NA Rocket League Spring Series Champions', 'Another tournament, another victory! Our Rocket League squad is unstoppable this year, taking another\r\n                clean tournament win to become your Rocket League Spring Series – North America Champions!\r\n                <br>\r\n                <br>\r\n                After winning the North American Rocket League Championship Season 9 and the Astronauts Star Circuit, we\r\n                have re-established ourselves as the North American Powerhouse we are known as.\r\n                <br>\r\n                <br>\r\n                Winning the RLCS9 meant that we secured our spot in Psyonix’s newest tournament, the Rocket League\r\n                Spring Series. Going in as the favorites, we were eager to get the ball rolling and snag the lion’s\r\n                share of the $125,000 prize pool.\r\n                <br>\r\n                <br>\r\n                Dropping only one game in the opening matches, we breezed past Rogue and Team Envy to secure our spot in\r\n                the winners’ bracket finals against rival NRG. Even NRG’s show stopping attack wasn’t enough to stop us\r\n                as we took the series 4-2 to advance to the Grand Finals.\r\n                <br>\r\n                <br>\r\n                What better way to end a tournament than with an epic rematch against NRG? This epic Grand Final turned\r\n                out to be an epic stomp as we rolled, flicked and demoed our way through NRG to secure the clean 4-0\r\n                sweep!\r\n                <br>\r\n                <br>\r\n                After a couple months of grinding and hard work, the boys are shifting gears and taking a bit of well\r\n                deserved R&R before we get back into the action in RLCS10.\r\n                <br>\r\n                <br>\r\n                Be sure to keep up with these professional ball chasers on Twitter, Facebook, Instagram, YouTube and\r\n                Twitch!', '2020-05-27', 1, 'Remco', 'rl-players.jpg', 1),
(12, 'test', 'hwaduwaidhawiudh', '2020-05-27', 1, 'etest', 'rl.jpg', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'CSGO');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `name`, `comment`, `date`) VALUES
(1, 1, 'REEE', 'Imaging being that bad XD', '2020-06-05'),
(2, 2, 'Pepe', 'Imaging if milk was gas', '2020-06-05'),
(3, 1, 'Laurens', 'This gay as hell', '2020-06-05'),
(4, 2, 'test', 'testing', '2020-06-08');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `competition`
--

DROP TABLE IF EXISTS `competition`;
CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `title` varchar(240) NOT NULL,
  `game` varchar(240) NOT NULL,
  `competitorsA` varchar(240) NOT NULL,
  `competitorsB` varchar(240) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `archived` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `competition`
--

INSERT INTO `competition` (`id`, `title`, `game`, `competitorsA`, `competitorsB`, `time`, `date`, `archived`) VALUES
(1, 'Anthony is gay', 'CSGO', 'Misfits', 'grizzlys', '05:00:00', '2020-05-21', 0),
(3, 'title', 'Valorant', 'grizzlys', 'g2', '00:00:00', '2020-05-21', 1),
(4, 'dreamhack', 'League of Legends', 'grizzlys', 'Misfits', '00:00:00', '2020-05-22', 0),
(5, 'dreamhack', 'Dota 2', 'Giant panda dream', 'Misfits', '00:00:00', '2020-05-23', 0),
(6, 'dreamhack', 'Rocket League', 'Misfits', 'g2', '00:00:00', '2020-05-24', 0),
(7, 'dreamhack', 'Rocket League', 'Giant panda dream', 'g2', '00:00:00', '2020-05-20', 0),
(15, 'dreamhack', 'Rocket League', 'Misfits', 'grizzlys', '00:00:00', '2020-06-30', 0),
(16, 'dreamhack', 'Dota 2', 'Giant panda dream', 'g2', '00:00:00', '2020-07-04', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `competitors`
--

DROP TABLE IF EXISTS `competitors`;
CREATE TABLE IF NOT EXISTS `competitors` (
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `name` varchar(240) NOT NULL,
  `logo` longtext NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `competitors`
--

INSERT INTO `competitors` (`id`, `name`, `logo`) VALUES
(1, 'g2', 'logo1.png'),
(2, 'Misfits', 'logo2.png'),
(3, 'Giant panda dream', 'logo2.png'),
(4, 'grizzlys', 'logo2.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `email` varchar(240) NOT NULL,
  `firstname` varchar(240) NOT NULL,
  `lastname` varchar(240) NOT NULL,
  `city` varchar(240) NOT NULL,
  `street` varchar(240) NOT NULL,
  `postal` varchar(240) NOT NULL,
  `productID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `email`, `firstname`, `lastname`, `city`, `street`, `postal`, `productID`) VALUES
(1, 'email', 'firstname', 'lastname', 'city', 'street', 'postal', 0),
(2, 'testproductMail', 'testproductfirst', 'testproductlast', 'testproductcit', 'testproductstreet', 'testproductposta', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `name` varchar(240) NOT NULL,
  `description` varchar(240) NOT NULL,
  `src` varchar(240) NOT NULL,
  `stock` int(240) DEFAULT 0,
  `value` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `src`, `stock`, `value`) VALUES
(2, 'G69 shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/shirt.png', 10, '19,99'),
(3, 'G69 cap', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/cap.png', 10, '14,99'),
(4, 'G69 mug', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/mug.png', 10, '9,99'),
(5, 'G69 chair', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/chair.png', 10, '119,99'),
(6, 'G69 flag', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/flag.png', 10, '29,99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
