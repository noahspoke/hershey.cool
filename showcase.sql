-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2016 at 10:03 PM
-- Server version: 5.7.12
-- PHP Version: 5.5.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showcase`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `header_background` varchar(255) NOT NULL,
  `text_source` varchar(255) NOT NULL,
  `header_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `header_background`, `text_source`, `header_type`) VALUES
(2, 'Venice', '', '', ''),
(3, 'Downtown', 'hershey_header.jpg', 'downtown.svg', 'image'),
(4, 'Fun', 'hershey_header.jpg', 'fun.svg', 'image'),
(5, 'Shopping', 'hershey_header.jpg', 'shopping.svg', 'image'),
(6, 'Dining', 'hershey_header.jpg', 'dining.svg', 'image'),
(7, 'Pop Culture', 'hershey_header.jpg', 'culture.svg', 'image'),
(8, 'Help', 'hershey_header.jpg', 'what.svg', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `attributions` varchar(255) NOT NULL,
  `place_id` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `url`, `type`, `attributions`, `place_id`, `highlight`, `description`, `link`) VALUES
(2, 'the_mill.jpg', 'image', 'The Mill', 3, 'Fish and Chips', 'The Mill is an excellent example of fine American cuisine.', ''),
(3, 'choc_ave.jpg', 'image', 'Chocolate Avenue Grill', 3, 'Butts', '', ''),
(4, 'https://mtc.cdn.vine.co/r/videos/69DB9B4A-E3BB-46CF-B63D-813B35FB55E9-4386-000001F126D7405F_12565ea0abd.1.3.mp4', 'video', 'Hershey\'s Chocolate World', 3, '', '', ''),
(5, 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg', 'image', 'Chocolate Avenue', 3, 'Press Building', '', ''),
(6, 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg', 'image', 'Sorrento\'s', 3, '', '', ''),
(15, 'images/clam.jpg', 'image', 'Noahs House', 3, 'Meatloaf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales mi nisi, eu convallis odio congue sit amet. Quisque id.', ''),
(16, 'images/12031637_815243328589353_7042782433089525057_o.jpg', 'image', 'Home', 3, 'Rice Cakes', 'A lovely establishment dedicated to serving customers the greatest meals in human existence.', ''),
(20, 'images/greece_hostel.jpg', 'image', 'TurtleVille', 3, 'Rabbit Feet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales mi nisi, eu convallis odio congue sit amet. Quisque id.', ''),
(21, 'images/nanner.jpg', 'image', 'HHSNannerEaters', 7, 'Blahhh', 'Promoting Potassium and healthy Eating! ', ''),
(22, 'images/smoked.jpg', 'image', 'Smoked', 3, 'Grilled Cheese Burger', 'Great american BBQ In the Heart Of Hershey!', 'http://smoked422.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `password`) VALUES
(1, 'Noah S', 0, 'fbc022c6f9bc3470c1d4b77e1ca2e62e'),
(7, 'Bobby', 0, '3659bf4c406ec4361458ac73c9ab0a89'),
(8, 'thewhtmba', 0, 'ceb3c4152408e0a9f8eb117f47e7857f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
