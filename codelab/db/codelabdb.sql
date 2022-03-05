-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2021 at 12:59 PM
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
-- Database: `codelabdb`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `image`, `type`, `description`, `link`, `information`) VALUES
(13, 'choti siddhi', 'upload/20150306_182359.jpg', 'cute hoti pan tevha', 'C++ is a general-purpose programming language created by Bjarne Stroustrup ', '', ''),
(14, 'choti siddhi', 'upload/20150306_182359.jpg', 'cute hoti pan tevha', 'C++ is a general-purpose programming language created by Bjarne Stroustrup ', '', ''),
(5, 'C++', 'upload/1051.png', '10', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\"', '', ''),
(6, 'shiiii', 'upload/IMG_20170728_122012.jpg', '10', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\"', '', ''),
(8, 'PYTHON', 'upload/unnamed.png', '10', 'Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991', '', ''),
(11, 'siddhi', 'upload/IMG_20170728_122012.jpg', 'cute', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\"', '', ''),
(10, 'Akshay Kudtarkar', 'upload/c-programming-569564.png', 'chidkya', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\"', '', ''),
(12, 'devillook', 'upload/20160628_063218-1.jpg', 'cute', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\"', '', ''),
(15, 'choti siddhi', 'upload/20150306_182359.jpg', 'cute hoti pan tevha', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\"', '', ''),
(16, 'choti siddhi', 'upload/20150306_182359.jpg', 'cute hoti pan tevha', 'C++ is a general-purpose ', '', ''),
(17, 'akshay', 'upload/Capture.PNG', 'cute', 'jghghgj', '', ''),
(18, 'akshay', 'upload/departmentco.jpg', 'cute', 'co', '', ''),
(19, 'Siddhya', 'upload/g3.jpg', 'cute', 'sweetie', 'https://forms.gle/HjrCM2sNP36vcPNKA', ''),
(20, 'Akshay Kudtarkar', 'upload/20150118_204626-1.jpg', 'chidky', 'harami', 'https://www.youtube.com/watch?v=0n_vz0ddoT8', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phoneNumber`, `password`, `confirm_pass`) VALUES
(1, 'siddhi patil', 'siddhi@gmail.com', '8807373345', 'f2285b68e227f7a9d4481a80a3b1b186', 'f2285b68e227f7a9d4481a80a3b1b186'),
(2, 'Akshay', 'akshay@gmail.com', '8812761377', 'b55396e7f33baa8521780e25584e7734', 'b55396e7f33baa8521780e25584e7734'),
(3, 'devil', 'devil@gmail.com', '1234567890', 'c0ff1beca22cd581f6ae5ba844e0ba93', 'c0ff1beca22cd581f6ae5ba844e0ba93'),
(7, 'Devillook', 'devillook99@gmail.com', '1234567890', 'c0ff1beca22cd581f6ae5ba844e0ba93', 'c0ff1beca22cd581f6ae5ba844e0ba93'),
(6, 'Devillook', 'devillook99@gmail.com', '1234567890', 'c0ff1beca22cd581f6ae5ba844e0ba93', 'c0ff1beca22cd581f6ae5ba844e0ba93'),
(8, 'Devillook', 'devillook99@gmail.com', '1234567890', 'c0ff1beca22cd581f6ae5ba844e0ba93', 'c0ff1beca22cd581f6ae5ba844e0ba93'),
(9, 'akshay', 'siddhikshay01@gmail.com', '1234567890', 'c0ff1beca22cd581f6ae5ba844e0ba93', 'c0ff1beca22cd581f6ae5ba844e0ba93'),
(10, 'choti siddhi', 'chotisiddhi@gmail.com', '1234567890', 'fcea920f7412b5da7be0cf42b8c93759', 'fcea920f7412b5da7be0cf42b8c93759'),
(11, 'Siddhi Patil', 'mi@gmail.com', '1234567890', 'c0ff1beca22cd581f6ae5ba844e0ba93', 'c0ff1beca22cd581f6ae5ba844e0ba93');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `topic`, `link`, `description`) VALUES
(1, 'C', 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0', 'Create responsive video or slideshow embeds based on the width of the parent by creating an intrinsic ratio that scales on any device.'),
(8, 'PHP', 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0', 'With the CSS border-radius property, you can give any element \"rounded corners\".');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
