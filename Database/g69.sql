-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jun 2020 om 15:29
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
CREATE DATABASE IF NOT EXISTS `g69` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
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
  `preview_image` varchar(100) NOT NULL,
  `archived` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `categorie`, `author`, `preview_image`, `archived`) VALUES
(1, 'G2 Is Your NA Rocket League Spring Series Champions', 'Another tournament, another victory! Our Rocket League squad is unstoppable this year, taking another\r\n                clean tournament win to become your Rocket League Spring Series – North America Champions!\r\n                <br>\r\n                <br>\r\n                After winning the North American Rocket League Championship Season 9 and the Astronauts Star Circuit, we\r\n                have re-established ourselves as the North American Powerhouse we are known as.\r\n                <br>\r\n                <br>\r\n                Winning the RLCS9 meant that we secured our spot in Psyonix’s newest tournament, the Rocket League\r\n                Spring Series. Going in as the favorites, we were eager to get the ball rolling and snag the lion’s\r\n                share of the $125,000 prize pool.\r\n                <br>\r\n                <br>\r\n                Dropping only one game in the opening matches, we breezed past Rogue and Team Envy to secure our spot in\r\n                the winners’ bracket finals against rival NRG. Even NRG’s show stopping attack wasn’t enough to stop us\r\n                as we took the series 4-2 to advance to the Grand Finals.\r\n                <br>\r\n                <br>\r\n                What better way to end a tournament than with an epic rematch against NRG? This epic Grand Final turned\r\n                out to be an epic stomp as we rolled, flicked and demoed our way through NRG to secure the clean 4-0\r\n                sweep!\r\n                <br>\r\n                <br>\r\n                After a couple months of grinding and hard work, the boys are shifting gears and taking a bit of well\r\n                deserved R&R before we get back into the action in RLCS10.\r\n                <br>\r\n                <br>\r\n                Be sure to keep up with these professional ball chasers on Twitter, Facebook, Instagram, YouTube and\r\n                Twitch!', '2020-05-25', 1, 'Remco', 'rl-players.jpg', 0),
(2, 'EVERYTHING TO KNOW – G2 VALORANT EUROPEAN BRAWL', '<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"mso-ansi-language: EN-US;\">G2 Esports&rsquo; first VALORANT Tournament G2 European Brawl, presented by StreamHeroes, is today, on Monday April 27th. Here are all the details about streams, hosts, prize and more for you.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"mso-ansi-language: EN-US;\">VALORANT is most certainly the game of the month and possibly months to come and we&rsquo;re jumping on the hype train with our very own G2 VALORANT European Brawl. We handpicked 8 teams packed with European creators and talent to battle each other in single elimination best of 3 format. The winning team, along with fame and respect will receive a prize of &euro;10,000.00.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"mso-ansi-language: EN-US;\">The games begin at 11:00 CEST on the 27th of April and the winner will be clear the same night! Throughout the day the games will be streamed on G2 Esports Twitch channel https://twitch.tv/g2esports where the voices of Lauren &lsquo;Pansy&rsquo; Scott and Jason &lsquo;Moses&rsquo; O&rsquo;Toole will guide you through every play! Our host and interviewer today will be the beloved Frankie Ward, widely known to the PUBG and CS:GO communities and overall esports lovers.</span></p>', '2020-05-26', 2, 'reee', 'reaper.jpg', 0),
(3, 'G2 ESPORTS INTRODUCES MIXWELL AS FIRST VALORANT PLAYER', '<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"mso-ansi-language: EN-US;\">Having already taken our first steps into VALORANT with two editions of the G2 European Brawl, and the recently announced G2 Esports VALORANT Invitational, we&rsquo;re beyond excited to announce the next big step forward. We are proud to welcome Oscar &lsquo;Mixwell&rsquo; Ca&ntilde;ellas Colocho as the first member and captain of our VALORANT roster. </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"mso-ansi-language: EN-US;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">Mixwell, a former CS:GO pro and one of the winningest Spanish players of all time, will be joining G2 Esports as a VALORANT pro. Mixwell has established himself as a top contender in VALORANT having recently won the biggest event in VALORANT history, Twitch Rivals: Valorant Launch Showdown &mdash; Europe No. 1.<span style=\"mso-spacerun: yes;\">&nbsp; </span>Mixwell is also no stranger to G2 Esports, having joined the G2 CS:GO roster as a temporary player in 2018 and is now coming back with his sights set on being part of the best VALORANT team in the world. </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">In addition to announcing Mixwell&rsquo;s return, we&rsquo;re also very excited to announce that Red Bull will be our first official partner for the G2 VALORANT pro team. Red Bull helped us take The Big Step last year and will help our VALORANT team reach new heights!</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">Mixwell had this to say about joining G2: </span></p>\r\n<p class=\"MsoNormal\" style=\"padding-left: 40px;\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"padding-left: 40px;\"><span lang=\"NL\">&ldquo;G2&rsquo;s history shows that they are competitive in every game they&rsquo;ve been part of and their content is also top, most of my fans are also G2 fans so it makes even more sense for me. The goal is to be the best VALORANT team in the world and I want to be the best player in the game, have fun representing the fans around the world, and I am sure we can do it together.&rdquo; </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">Here is what our CEO Carlos &lsquo;ocelote&rsquo; Rodriguez had to say about the move: </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"padding-left: 40px;\"><span lang=\"NL\">&ldquo;VALORANT really is an amazing game I enjoy both playing and watching. G2 will have a World Championship winning team and it all starts with Mixwell. Many top organizations fought hard for him and we are delighted he&rsquo;s put so much trust into letting us build a killer lineup alongside him. Now you mfers stop poaching him already.&rdquo;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">We&rsquo;ve seen huge success with our G2 EU Brawls and are excited continue this success with Riot&rsquo;s VALORANT IGNITION Series! We&rsquo;re looking forward to building out a new roster in one of the most exciting games out there today. Keep your eyes on this space for more VALORANT news coming soon and please help us in welcoming Mixwell to the team!</span></p>', '2020-05-26', 1, 'Laurens', 'spelers.jpg', 0),
(5, 'G2 ESPORTS PROUDLY WELCOMES BMW AS NEW AUTOMOTIVE PARTNER', '<p class=\"MsoNormal\"><span lang=\"NL\">At G2 Esports, we are very thorough with selecting our partners and are particularly keen to work with those that share our drive for success, innovation, and desire to pioneer. There is no other brand that supports these values in the automotive industry as strongly as BMW, which we are excited to announce has joined the #G2ARMY as our new partner!</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">We truly believe that BMW from today onward will power us as an electric force behind our club as we together stand for innovation and efficiency. BMW stands for joy above and beyond driving and we stand for joy above and beyond esports. We aspire to be the forerunners of the industry, whether it is in viewer entertainment, memes, or competitive success. BMW brings years of knowledge and expertise alongside a powerful brand loved by many across the world. Together, we will accomplish incredible feats in the years to come. BMW will support our League of Legends, Rocket League, Hearthstone, Fortnite competitive players and multiple creators and will most certainly be our official vehicle.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&ldquo;G2 Esports are pioneers both in and out of game and this is evident in our incredible competitive success, entertaining content, and the energy we bring to our fans every day. BMW will power G2 as we build on our vision to create a massive entertainment empire and bring the best innovation to the esports industry. This is more than a sponsorship, this is a united effort to highlight the power and influence of esports&rdquo; says Carlos &ldquo;ocelote&rdquo; Rodriguez, G2 Esports Founder and CEO.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">Together with BMW, we look forward to representing and providing even more exciting content, entertainment and achieving even greater success in esports and beyond. The BMW brand will not only act as a strong partner for us but also as a powerful partner to introduce esports to an even wider audience with aspiration to skyrocket our popularity within the general sports and entertainment industry.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">We are &ldquo;United in Rivalry&rdquo; and &ldquo;United at Home&rdquo;.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"NL\">The teams&rsquo; competitive spirit and their historic rivalries have always been a part of the esports scene&rsquo;s history and lore. At the same time, each team shares a boundless passion for gaming and related activities. This is what &ldquo;United in Rivalry&rdquo; stands for, even more, so in these present times of uncertainty and global challenges. As part of the partnership with BMW and in line with esports&rsquo; culture, G2 Esports, Cloud9, Fnatic, Funplus Phoenix and T1 will challenge and try to outdo each other prior to tournaments, using the #unitedinrivalry hashtag on channels like Instagram, Twitter, Facebook, Weibo, and various streaming platforms across the world. And you know, how much we love banter and memes! It goes without saying that the teams&rsquo; interactions always stay within the parameters of esports&rsquo; etiquette, reflecting the respect they have for each other, and of course will take place at home. Therefore, we will use the #unitedathome hashtag in combination with #unitedinrivalry.</span></p>', '2020-05-26', 1, 'BMW', 'bmw.jpg', 0);

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
(1, 'CSGO'),
(2, 'Dota'),
(3, 'league of legends');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `name`, `comment`, `date`) VALUES
(1, 1, 'REEE', 'I don\'t think that is true', '2020-06-05'),
(2, 2, 'Pepe', 'That is the best thing I heard today', '2020-06-05'),
(3, 1, 'Laurens', 'This like a cool game', '2020-06-05');

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
(1, 'Dreamhack', 'CSGO', 'Misfits', 'grizzlys', '05:00:00', '2020-07-08', 0),
(3, 'title', 'Valorant', 'grizzlys', 'g2', '00:00:00', '2020-05-21', 1),
(4, 'Dreamhack', 'League of Legends', 'grizzlys', 'Misfits', '06:00:00', '2020-08-31', 0),
(5, 'Asia championship', 'Dota 2', 'Giant panda dream', 'Misfits', '02:00:00', '2020-08-08', 0),
(6, 'IEM', 'Rocket League', 'Misfits', 'g2', '10:00:00', '2020-07-28', 0),
(7, 'Dreamhack', 'Rocket League', 'Giant panda dream', 'g2', '05:00:00', '2020-07-03', 0),
(15, 'Dreamhack', 'Rocket League', 'Misfits', 'grizzlys', '05:00:00', '2020-06-30', 0),
(16, 'Asia championship', 'Dota 2', 'Giant panda dream', 'g2', '05:00:00', '2020-07-04', 0);

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
(1, 'g2', 'logo1.png'),
(2, 'Misfits', 'logo2.png'),
(3, 'Giant panda dream', 'logo3.png'),
(4, 'grizzlys', 'logo4.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `firstname` varchar(240) NOT NULL,
  `lastname` varchar(240) NOT NULL,
  `city` varchar(240) NOT NULL,
  `street` varchar(240) NOT NULL,
  `postal` varchar(240) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `products` (
  `id` int(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `description` varchar(240) NOT NULL,
  `src` varchar(240) NOT NULL,
  `stock` int(240) DEFAULT 0,
  `value` varchar(240) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `src`, `stock`, `value`) VALUES
(2, 'G69 shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/shirt.png', 10, '19,99'),
(3, 'G69 cap', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/cap.png', 10, '14,99'),
(4, 'G69 mug', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/mug.png', 10, '9,99'),
(5, 'G69 chair', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/chair.png', 10, '119,99'),
(6, 'G69 flag', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos\r\n                   ', 'view/assets/img/flag.png', 10, '29,99');

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
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
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
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `competitors`
--
ALTER TABLE `competitors`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
