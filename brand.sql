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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
