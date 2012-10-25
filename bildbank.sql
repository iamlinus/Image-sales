-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 25 okt 2012 kl 18:32
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `bildbank`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `images`
--

CREATE TABLE `images` (
  `imageID` int(11) NOT NULL AUTO_INCREMENT,
  `imageName` varchar(50) NOT NULL,
  `imageSrc` varchar(100) NOT NULL,
  `thumbSrc` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `uploadDate` datetime NOT NULL,
  `user` varchar(30) NOT NULL,
  `ratingSum` int(11) DEFAULT NULL,
  `ratingAmount` int(11) DEFAULT NULL,
  PRIMARY KEY (`imageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumpning av Data i tabell `images`
--

INSERT INTO `images` (`imageID`, `imageName`, `imageSrc`, `thumbSrc`, `description`, `uploadDate`, `user`, `ratingSum`, `ratingAmount`) VALUES
(7, 'Barcelona', 'uploads/DSCN0418.JPG', 'thumbs/DSCN0418.JPG', 'Barca baby', '2012-10-25 16:21:08', 'linus', NULL, NULL),
(8, 'Barcelona 2', 'uploads/DSCN0432.JPG', 'thumbs/DSCN0432.JPG', 'Barcelona ocks&aring;', '2012-10-25 16:41:29', 'linus', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `imageID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `deliveryDate` datetime NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isSeller` tinyint(4) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `email`, `isSeller`) VALUES
(7, 'lalle', 'c9089f3c9adaf0186f6ffb1ee8d6501c', 'la', 0),
(8, 'linus', '6cd71071ccd0edfe7500231c77eea572', 'linus', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
