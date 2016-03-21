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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
