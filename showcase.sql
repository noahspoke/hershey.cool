-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2016 at 12:27 AM
-- Server version: 5.6.10
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `showcase`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `header_background` varchar(255) NOT NULL,
  `text_source` varchar(255) NOT NULL,
  `header_type` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `header_background`, `text_source`, `header_type`) VALUES
(2, 'Venice', '', '', ''),
(3, 'Downtown', 'hershey_header.jpg', 'downtown.svg', 'image'),
(4, 'Fun', 'hershey_header.jpg', 'fun.svg', 'image'),
(5, 'Shopping', 'hershey_header.jpg', 'shopping.svg', 'image'),
(6, 'Dining', 'hershey_header.jpg', 'dining.svg', 'image'),
(7, 'Culture', 'hershey_header.jpg', 'culture.svg', 'image'),
(8, 'Beyond', 'hershey_header.jpg', 'what.svg', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `attributions` varchar(255) NOT NULL,
  `place_id` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `url`, `type`, `attributions`, `place_id`, `highlight`, `description`) VALUES
(2, 'the_mill.jpg', 'image', 'The Mill', 3, 'Fish and Chips', 'The Mill is an excellent example of fine American cuisine.'),
(3, 'choc_ave.jpg', 'image', 'Chocolate Avenue Grill', 3, 'Butts', ''),
(4, 'https://mtc.cdn.vine.co/r/videos/69DB9B4A-E3BB-46CF-B63D-813B35FB55E9-4386-000001F126D7405F_12565ea0abd.1.3.mp4', 'video', 'Hershey''s Chocolate World', 3, '', ''),
(5, 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg', 'image', 'Chocolate Avenue', 3, 'Press Building', ''),
(6, 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg', 'image', 'Sorrento''s', 3, '', ''),
(15, 'images/clam.jpg', 'image', 'Noahs House', 3, 'Meatloaf', 'Great place with great people'),
(16, 'images/12031637_815243328589353_7042782433089525057_o.jpg', 'image', 'Home', 3, 'Rice Cakes', 'A lovely establishment dedicated to serving customers the greatest meals in human existence.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `password`) VALUES
(1, 'Noah S', 0, 'fbc022c6f9bc3470c1d4b77e1ca2e62e'),
(7, 'Bobby', 0, '3659bf4c406ec4361458ac73c9ab0a89'),
(8, 'thewhtmba', 0, 'ceb3c4152408e0a9f8eb117f47e7857f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
