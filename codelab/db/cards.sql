-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2021 at 01:00 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cards`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_in_time` datetime(6) NOT NULL,
  `check_out_date` date NOT NULL,
  `occupancy` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `image`, `type`, `description`, `link`, `information`) VALUES
(52, 'Delux', 'upload/doublebed.jpg', '201', 'Rs.1500/-', '', 'kk'),
(41, 'Single', 'upload/familybed.jpg', '105', 'Rs.1500/-', '', ''),
(39, 'Delux', 'upload/deluxe_double.png', '103', 'RS.2000/-', '', ''),
(51, 'Guest', 'upload/single_bed.jpg', '105', 'Rs.3000/-', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phoneNumber`, `password`, `confirm_pass`) VALUES
(35, 'siddhi patil', 'siddhi@gmail.com', '1234556789', 'f2285b68e227f7a9d4481a80a3b1b186', 'f2285b68e227f7a9d4481a80a3b1b186'),
(2, 'siddhi', 'siddhi@gmail.com', '890765432', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `topic`, `description`) VALUES
(15, 'New Special Offers', 'book your rooms now and avail the best discount'),
(10, 'New Rooms', 'More spacy and best view'),
(14, 'New Rooms!!', 'avail new offer now'),
(7, 'New Rooms!!', 'We have introduced some new spacy rooms that you will really enjoy. Register now to enjoy the amazing view and Services.'),
(8, 'Special Offers', 'Book your Rooms now and avail upto 20% discount');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

DROP TABLE IF EXISTS `tutorials`;
CREATE TABLE IF NOT EXISTS `tutorials` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `topic`, `link`, `description`) VALUES
(12, 'Python', 'https://www.youtube.com/watch?v=vLnPwxZdW4Y', 'Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991'),
(10, 'PHP', 'https://www.youtube.com/embed/OK_JCtrrv-c', 'PHP web development');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
