-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2014 at 07:50 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_name`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `password`) VALUES
('sumit suthar', 'nvfti');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `serial` int(100) NOT NULL AUTO_INCREMENT,
  `id` int(15) NOT NULL,
  `brandname` varchar(20) NOT NULL,
  `mobname` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `available` varchar(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`),
  UNIQUE KEY `mobname` (`mobname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`serial`, `id`, `brandname`, `mobname`, `price`, `available`, `image`, `warranty`) VALUES
(1, 1, 'APPLE', 'Iphone 5s', 28005, 'yes', 'iphone5s.jpg', 'one year manufacturer warranty'),
(2, 1, 'APPLE', 'Ipad white', 36000, 'yes', 'ipadwhite.jpg', 'one year manufacturer warranty'),
(3, 1, 'APPLE', 'Iphone 5c', 32300, 'yes', 'iphone5c.jpg', 'one year manufacturer warranty'),
(4, 1, 'APPLE', 'Ipad mini 4s', 23556, 'yes', 'ipadmini4s.jpg', 'one year manufacturer warranty'),
(5, 1, 'APPLE', 'Iphone air 32', 32656, 'yes', 'iphoneair32.jpg', 'one year manufacturer warranty'),
(6, 1, 'APPLE', 'Iphone 5c Green', 22686, 'yes', 'iphone5cgreen.jpg', 'one year manufacturer warranty'),
(7, 1, 'APPLE', 'Iphone 4s black', 20350, 'yes', 'iphone4sblack.jpg', 'one year manufacturer warranty'),
(8, 1, 'APPLE', 'Ipad mini', 22350, 'yes', 'ipadmini.jpg', 'one year manufacturer warranty'),
(9, 1, 'APPLE', 'Iphone super', 12550, 'yes', 'iphonesuper.jpg', 'six months manufacturer warranty'),
(10, 2, 'SAMSUNG', 'Samsung galaxy note 2', 15000, 'yes', 'samsunggalaxynote2.jpg', 'six months manufacturer warranty'),
(11, 2, 'SAMSUNG', 'Samsung galaxy s4', 25200, 'yes', 'samsunggalaxys4.jpg', 'one year manufacturer warranty'),
(12, 2, 'SAMSUNG', 'Samsung galaxy note 3', 24200, 'yes', 'samsunggalaxynote3.jpg', 'one year manufacturer warranty'),
(13, 2, 'SAMSUNG', 'Samsung galaxy s5', 34250, 'yes', 'samsunggalaxys5.jpg', 'one year manufacturer warranty'),
(14, 2, 'SAMSUNG', 'Samsung tab7', 24256, 'yes', 'samsungtab7.jpg', 'one year manufacturer warranty'),
(15, 2, 'SAMSUNG', 'Samsung grand neo', 14556, 'yes', 'samsunggrandneo.jpg', 'one year manufacturer warranty'),
(16, 2, 'SAMSUNG', 'Samsung galaxy s duos', 8559, 'yes', 'samsunggalaxysduos.jpg', 'six months manufacturer warranty'),
(17, 2, 'SAMSUNG', 'Samsung galaxy note 5', 18459, 'yes', 'samsunggalaxynote5.jpg', 'one year manufacturer warranty'),
(18, 2, 'SAMSUNG', 'Samsung galaxy note 1', 15455, 'yes', 'samsunggalaxynote1.jpg', 'one year manufacturer warranty'),
(19, 3, 'SONY', 'Sony Xperia Z1', 15555, 'yes', 'sonyxperiaz1.jpg', 'one year manufacturer warranty'),
(20, 3, 'SONY', 'Sony Xperia tab', 5555, 'yes', 'sonyxperiatab.jpg', 'one year manufacturer warranty'),
(21, 3, 'SONY', 'Sony Xperia E', 9155, 'yes', 'sonyxperiae.jpg', 'one year manufacturer warranty'),
(22, 3, 'SONY', 'Sony Xperia Z2', 12145, 'yes', 'sonyxperiaz2.jpg', 'one year manufacturer warranty'),
(23, 3, 'SONY', 'Sony Xperia M', 12895, 'yes', 'sonyxperiam.jpg', 'one year manufacturer warranty'),
(24, 3, 'SONY', 'Sony Xperia E2', 10795, 'yes', 'sonyxperiae2.jpg', 'one year manufacturer warranty'),
(25, 3, 'SONY', 'Sony Xperia Z3', 10965, 'yes', 'sonyxperiaz3.jpg', 'one year manufacturer warranty'),
(26, 3, 'SONY', 'Sony Xperia z5', 6965, 'yes', 'sonyxperiaz5.jpg', 'one year manufacturer warranty'),
(27, 3, 'SONY', 'Sony Xperia Z Ultra', 1995, 'yes', 'sonyxperiazultra.jpg', 'six months manufacturer warranty'),
(28, 4, 'NOKIA', 'Nokia Lumia 900', 6995, 'yes', 'nokialumia900.jpg\r\n', 'one year manufacturer warranty'),
(29, 4, 'NOKIA', 'Nokia Asha 210', 6999, 'yes', 'nokiaasha210.jpg', 'one year manufacturer warranty'),
(30, 4, 'NOKIA', 'Nokia C2', 3990, 'yes', 'nokiac2.jpg', 'six months manufacturer warranty'),
(31, 4, 'NOKIA', 'Nokia Lumia 920', 13990, 'yes', 'nokialumia920.jpg', 'one year manufacturer warranty'),
(32, 4, 'NOKIA', 'Nokia 515 dual sim', 990, 'yes', 'nokia515dualsim.jpg', 'no warranty'),
(33, 4, 'NOKIA', 'Nokia Lumia 625', 7990, 'yes', 'nokialumia625.jpg', 'one year manufacturer warranty'),
(34, 4, 'NOKIA', 'Nokia 1520', 9990, 'yes', 'nokia1520.jpg', 'one year manufacturer warranty'),
(35, 4, 'NOKIA', 'Nokia 1020', 9996, 'yes', 'nokia1020.jpg', 'one year manufacturer warranty'),
(36, 4, 'NOKIA', 'Nokia E1', 4999, 'yes', 'nokiae1.jpg', 'six months manufacturer warranty'),
(37, 5, 'MICROMAX', 'Micromax Canvas', 7998, 'yes', 'micromaxcanvas.jpg', 'one year manufacturer warranty'),
(38, 5, 'MICROMAX', 'Micromax 114', 6666, 'yes', 'micromax114.jpg\r\n', 'one year manufacturer warranty'),
(39, 5, 'MICROMAX', 'Micromax 89', 6655, 'yes', 'micromax89.jpg', 'one year manufacturer warranty'),
(40, 5, 'MICROMAX', 'Micromax 116', 5625, 'yes', 'micromax116.jpg', 'one year manufacturer warranty'),
(41, 5, 'MICROMAX', 'Micromax 350', 925, 'yes', 'micromax350.jpg', 'no warranty'),
(42, 5, 'MICROMAX', 'Micromax smarty', 1925, 'yes', 'micromaxsmarty.jpg', 'six months manufacturer warranty'),
(43, 6, 'HTC', 'HTC Desire', 11925, 'yes', 'htcdesire.jpg', 'one year manufacturer warranty'),
(44, 6, 'HTC', 'HTC One', 4195, 'yes', 'htcone.jpg', 'one year manufacturer warranty'),
(45, 6, 'HTC', 'HTC Explorer', 4687, 'yes', 'htcexplorer.jpg', 'six months manufacturer warranty'),
(46, 6, 'HTC', 'HTC 600', 6445, 'yes', 'htc600.jpg', 'one year manufacturer warranty'),
(47, 6, 'HTC', 'HTC M8', 6856, 'yes', 'htcm8.jpg', 'one year manufacturer warranty'),
(48, 6, 'HTC', 'HTC 89', 6126, 'yes', 'htc89.jpg', 'one year manufacturer warranty'),
(49, 7, 'LENOVO', 'Lenovo 960', 6120, 'yes', 'lenovo960.jpg', 'one year manufacturer warranty'),
(50, 7, 'LENOVO', 'Lenovo 3000', 5230, 'yes', 'lenovo3000.jpg', 'one year manufacturer warranty'),
(51, 7, 'LENOVO', 'Lenovo 1000', 2230, 'yes', 'lenovo1000.jpg', 'one year manufacturer warranty'),
(52, 7, 'LENOVO', 'Lenovo 850', 7890, 'yes', 'lenovo850.jpg', 'one year manufacturer warranty'),
(53, 7, 'LENOVO', 'Lenovo 420', 5690, 'yes', 'lenovo420.jpg', 'one year manufacturer warranty'),
(54, 7, 'LENOVO', 'Lenovo 820', 1690, 'yes', 'lenovo820.jpg', 'one year manufacturer warranty'),
(55, 8, 'BLACKBERRY', 'Blackberry 9720', 9690, 'yes', 'blackberry9720.jpg', 'one year manufacturer warranty'),
(56, 8, 'BLACKBERRY', 'Blackberry 9780', 19890, 'yes', 'blackberry9780.jpg', 'one year manufacturer warranty'),
(57, 8, 'BLACKBERRY', 'Blackberry 9860', 16798, 'yes', 'blackberry9860.jpg', 'one year manufacturer warranty'),
(58, 8, 'BLACKBERRY', 'Blackberry 6720', 15008, 'yes', 'blackberry6720.jpg', 'one year manufacturer warranty'),
(59, 8, 'BLACKBERRY', 'Blackberry Z20', 10007, 'yes', 'blackberryz20.jpg', 'one year manufacturer warranty'),
(60, 8, 'BLACKBERRY', 'Blackberry Z30', 17656, 'yes', 'blackberryz30.jpg', 'one year manufacturer warranty'),
(61, 9, 'SPICE', 'Spice 720', 2650, 'yes', 'spice720.jpg', 'six months manufacturer warranty'),
(62, 9, 'SPICE', 'Spice 5500', 2980, 'yes', 'spice5500.jpg', 'six months manufacturer warranty'),
(63, 9, 'SPICE', 'Spice 202', 1980, 'yes', 'spice202.jpg', 'six months manufacturer warranty'),
(64, 9, 'SPICE', 'Spice Blueberry', 1200, 'yes', 'spiceblueberry.jpg', 'no warranty'),
(65, 9, 'SPICE', 'Spice 500', 800, 'yes', 'spice500.jpg', 'no warranty'),
(66, 9, 'SPICE', 'Spice 5010', 1200, 'yes', 'spice5010.jpg', 'no warranty'),
(67, 10, 'KARBONN', 'Karbonn Titanium', 6200, 'yes', 'karbonntitanium.jpg', 'one year manufacturer warranty'),
(68, 10, 'KARBONN', 'Karbonn 30', 5640, 'yes', 'karbonn30.jpg', 'one year manufacturer warranty'),
(69, 10, 'KARBONN', 'Karbonn K9', 740, 'yes', 'karbonnk9.jpg', 'no warranty'),
(70, 10, 'KARBONN', 'Karbonn 99', 2740, 'yes', 'karbonn99.jpg', 'six months manufacturer warranty'),
(71, 10, 'KARBONN', 'Karbonn S5', 9560, 'yes', 'karbonns5.jpg', 'one year manufacturer warranty'),
(79, 10, 'KARBONN', 'karbonn1151', 25000, 'yes', 'karbonn1151.jpg', 'One year manufacturer warranty');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(250) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `date`, `product_id`, `product_name`, `image`, `quantity`, `price`, `total`) VALUES
(1, 'sumit suthar', '0000-00-00', 23, '0', 'sonyxperiam.jpg', 1, '12895', '12895'),
(2, 'rajat jain', '0000-00-00', 6, '0', 'iphone5cgreen.jpg', 3, '22686', '68058'),
(3, 'kuldeep', '0000-00-00', 33, '0', 'nokialumia625.jpg', 1, '7990', '7990'),
(4, 'mohit', '0000-00-00', 37, '0', 'micromaxcanvas.jpg', 1, '7998', '7998'),
(5, 'rj10', '0000-00-00', 5, '0', 'iphoneair32.jpg', 1, '32656', '32656'),
(6, 'nvfti', '0000-00-00', 38, '0', 'micromax114.jpg\r\n', 1, '6666', '6666'),
(7, 'sumit suthar', '0000-00-00', 41, '0', 'micromax350.jpg', 1, '925', '925'),
(8, 'sumit suthar', '0000-00-00', 18, '0', 'samsunggalaxynote1.jpg', 1, '15455', '15455'),
(9, 'sumit suthar', '0000-00-00', 28, '0', 'nokialumia900.jpg\r\n', 1, '6995', '6995'),
(10, 'sumit suthar', '0000-00-00', 41, '0', 'micromax350.jpg', 1, '925', '925'),
(11, 'sumit suthar', '0000-00-00', 46, '0', 'htc600.jpg', 1, '6445', '6445'),
(12, 'sumit suthar', '0000-00-00', 46, '0', 'htc600.jpg', 1, '6445', '6445'),
(13, 'sumit suthar', '0000-00-00', 48, '0', 'htc89.jpg', 1, '6126', '6126'),
(14, 'sumit suthar', '0000-00-00', 15, '0', 'samsunggrandneo.jpg', 3, '14556', '43668'),
(15, 'k', '0000-00-00', 25, '0', 'sonyxperiaz3.jpg', 1, '10965', '10965'),
(16, 'rajat jain', '2014-06-29', 15, '0', 'samsunggrandneo.jpg', 1, '14556', '14556'),
(17, 'rajat jain', '2014-06-29', 53, '0', 'lenovo420.jpg', 1, '5690', '5690'),
(18, 'sumit suthar', '2014-06-30', 22, '0', 'sonyxperiaz2.jpg', 1, '12145', '12145'),
(19, 'sumit suthar', '2014-06-30', 8, '0', 'ipadmini.jpg', 1, '22350', '22350'),
(20, 'sumit suthar', '2014-06-29', 35, '0', 'nokia1020.jpg', 1, '9996', '9996'),
(21, 's suthar', '0000-00-00', 1, '0', 'iphone5s.jpg', 1, '28005', '28005'),
(22, 'parikshit sharma', '0000-00-00', 51, 'Lenovo 1000', 'lenovo1000.jpg', 1, '2230', '2230'),
(23, 'sumit suthar', '0000-00-00', 12, 'Samsung galaxy note 3', 'samsunggalaxynote3.jpg', 32, '24200', '774400'),
(24, 'kuldeep', '0000-00-00', 19, 'Sony Xperia Z1', 'sonyxperiaz1.jpg', 1, '15555', '15555'),
(25, 'kuldeep', '0000-00-00', 68, 'Karbonn 30', 'karbonn30.jpg', 1, '5640', '5640'),
(26, 'sumit suthar', '0000-00-00', 47, 'HTC M8', 'htcm8.jpg', 1, '6856', '6856'),
(27, 'sumit suthar', '0000-00-00', 11, 'Samsung galaxy s4', 'samsunggalaxys4.jpg', 1, '25200', '25200'),
(28, 'sumit suthar', '0000-00-00', 11, 'Samsung galaxy s4', 'samsunggalaxys4.jpg', 1, '25200', '25200'),
(29, 'sumit suthar', '0000-00-00', 11, 'Samsung galaxy s4', 'samsunggalaxys4.jpg', 1, '25200', '25200'),
(30, 'sumit suthar', '0000-00-00', 11, 'Samsung galaxy s4', 'samsunggalaxys4.jpg', 1, '25200', '25200'),
(31, 'sumit suthar', '0000-00-00', 33, 'Nokia Lumia 625', 'nokialumia625.jpg', 1, '7990', '7990'),
(32, 'sumit suthar', '0000-00-00', 33, 'Nokia Lumia 625', 'nokialumia625.jpg', 1, '7990', '7990'),
(33, 'ssd', '0000-00-00', 13, 'Samsung galaxy s5', 'samsunggalaxys5.jpg', 1, '34250', '34250'),
(34, 'ssd', '0000-00-00', 55, 'Blackberry 9720', 'blackberry9720.jpg', 2, '9690', '19380'),
(35, 'sumit suthar', '2014-07-01', 48, 'HTC 89', 'htc89.jpg', 1, '6126', '6126'),
(36, 'kuldeep', '2014-07-01', 2, 'Ipad white', 'ipadwhite.jpg', 1, '36000', '36000'),
(37, 'kuldeep', '2014-07-02', 56, 'Blackberry 9780', 'blackberry9780.jpg', 1, '19890', '19890'),
(38, 'sumit suthar', '2014-07-04', 28, 'Nokia Lumia 900', 'nokialumia900.jpg\r\n', 1, '6995', '6995');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `id` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`) VALUES
(1, 'sumit suthar', 'sumitsuthar94@gmail.com', 'sumit94'),
(2, 'rajat jain', 'rajat.rj10@gmail.com', 'rj10'),
(3, 'kuldeep', 'kul.knp1313@gmail.com', 'nvfti'),
(4, 'mohit', 'mohit@yahoo.com', 'mohit'),
(5, 'rj10', 'rajatrj10@gmail.com', 'rjaat'),
(6, 'meenakshi', 'meenakshisuthar88@gmail.com', 'm'),
(7, 'parikshit sharma', 'parikshit@nvfti.com', 'pari'),
(8, 'nvfti', 'info@nvfti.com', 'nvfti'),
(9, 'katana', 'katana@katana.com', 'katana'),
(10, 's', 's', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
