-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 04:33 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cid` int(250) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `country` varchar(15) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `name`, `email`, `mobile`, `address`, `city`, `state`, `zipcode`, `country`) VALUES
(1, 'sumit suthar', 'sumit@nvfti.com', '919929496321', 'udaipur', 'udaipur', 'rajasthan', 313001, 'India'),
(3, 'rajat jain', 'rajat.rj10@gmail.com', '100', 'udaipur', 'udaipur', 'raj', 313002, 'india'),
(4, 'kuldeep', 'kul.knp1313@gmail.com', '919001591313', 'nvfti wooden engineering & packing solutions', 'udaipur', 'rajasthan', 313001, 'India'),
(5, 'mohit', 'mohit@yahoo.com', '9414808032', 'udaipur', 'udaipur', 'rajasthan', 313001, 'India'),
(6, 'rj10', 'rajatrj10@gmail.com', '12984102', '0219421941209', '902148012941298', '1093248092148', 1049410294, '091240921481029'),
(7, 'nvfti', 'info@nvfti.com', '9414808032', 'nvfti wooden engineering & packing solutions', 'udaipur', 'rajasthan', 313001, 'India'),
(27, 'k', 'kul.knp1313@gmail.com', '919001591313', 'nvfti wooden engineering & packing solutions', 'udaipur', 'rajasthan', 313001, 'India'),
(36, 's suthar', 'sumitsuthar94@gmail.com', '919929496321', 'udaipur', 'udaipur', 'rajasthan', 313001, 'India'),
(40, 'parikshit sharma', 'parikshit@nvfti.com', '919929496321', 'udaipur', 'udaipur', 'rajasthan', 313001, 'India'),
(59, 'ssd', 'sadhj', 'bgh', 'vghv', 'ghvghv', 'gvg', 0, 'gv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
