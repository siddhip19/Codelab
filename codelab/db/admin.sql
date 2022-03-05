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
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `image`, `text`) VALUES
(36, 'oCapture.PNG', 'iudiauidua'),
(35, 'IMG_0441.JPG', 'jkjlj'),
(34, 'IMG_0172.JPG', 'ksclkjc'),
(24, 'images/Capture.PNG', 'jkjdkljdkljsa'),
(7, 'oCapture.PNG', 'school'),
(23, 'images/20200328_092606.jpg', 'jhk'),
(33, 'IMG_0172.png', 'yfyufu'),
(32, 'php.jpg', 'php1'),
(31, 'php_PNG5.png', 'php'),
(30, 'IMG_0172.png', 'siddhudi'),
(29, 'Capture.PNG', 'kjdsakldjas'),
(28, 'IMG_0172.JPG', 'akshu'),
(27, 'IMG_0172.JPG', 'ha maza akshi'),
(26, 'IMG_0172.JPG', 'ha maza akshi'),
(25, 'oCapture.PNG', 'mi ahe mand'),
(37, 'IMG_0172.JPG', '1'),
(38, 'php.jpg', 'asd'),
(39, '1.jpeg', 'a'),
(40, 'codelab-removebg-preview.png', 'c'),
(41, 'IMG_0172.png', 'as'),
(42, '20160905_173855.jpg', 'ganpati bappa morya!\r\n\r\ncode run houde'),
(43, '20160905_173840.jpg', 'morya'),
(44, '20160905_173840.jpg', 'morya!'),
(45, '2.jpeg', 'mobile'),
(46, '4.jpeg', 'am'),
(47, '20180605_114254.jpg', 'asdfg'),
(48, '20180605_114254.jpg', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `secret`
--

DROP TABLE IF EXISTS `secret`;
CREATE TABLE IF NOT EXISTS `secret` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secret`
--

INSERT INTO `secret` (`id`, `username`, `password`) VALUES
(1, 'siddhi', '19152002'),
(2, 'restside', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `image`, `text`) VALUES
(1, '20160905_171519.jpg', 'bappa'),
(2, '2.jpeg', 'mobile'),
(3, 'codelab-removebg-preview (1).png', 'codelab'),
(4, '20160905_171336.jpg', 'Ganpati Bappa'),
(5, '20160905_173840.jpg', 'Bappa'),
(6, '20160905_171519.jpg', 'Ganpati Bappa Morya!'),
(7, '20160905_171400.jpg', 'Morya'),
(8, '20160905_171519.jpg', 'Ganpati bappa'),
(9, '20160905_171519.jpg', 'Ganpati Bappa'),
(10, '20160905_171519.jpg', 'Bappa'),
(11, '20160905_171519.jpg', 'morya'),
(12, '20160905_171519.jpg', 'GBM'),
(13, '20160905_171519.jpg', 'pls houde'),
(14, '3.jpeg', 'a'),
(15, '20160905_173840.jpg', '....'),
(16, '20160905_174556.jpg', '............'),
(17, 'php.jpg', 'php'),
(18, 'IMG_0172.png', 'v'),
(19, '20160905_175609.jpg', 'hiii'),
(20, '20160905_171519.jpg', 'bappa'),
(21, 'IMG-20161230-WA0003.jpg', 'kuchbhi'),
(22, '20160905_174556.jpg', '.'),
(23, '20150118_204626-1.jpg', '.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
