-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 12:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suncreekdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `neighbors`
--

CREATE TABLE IF NOT EXISTS `neighbors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sun_creek_street_number` varchar(6) NOT NULL,
  `owner1_first_name` varchar(25) NOT NULL DEFAULT 'x',
  `owner1_last_name` varchar(25) NOT NULL DEFAULT 'x',
  `owner1_cell` varchar(10) NOT NULL DEFAULT 'x',
  `owner1_email` varchar(40) DEFAULT NULL,
  `owner2_first_name` varchar(25) NOT NULL,
  `owner2_last_name` varchar(25) NOT NULL,
  `owner2_cell` varchar(10) NOT NULL DEFAULT 'x',
  `owner2_email` varchar(40) NOT NULL,
  `owner_alt_street1` varchar(25) NOT NULL DEFAULT 'x',
  `owner_alt_street2` varchar(25) NOT NULL DEFAULT 'x',
  `owner_alt_city` varchar(25) NOT NULL DEFAULT 'x',
  `owner_alt_state` varchar(2) NOT NULL DEFAULT 'x',
  `owner_alt_zip` varchar(10) NOT NULL DEFAULT 'x',
  `owner_home_phone` varchar(10) NOT NULL DEFAULT 'x',
  `tenant1_first_name` varchar(25) NOT NULL DEFAULT 'x',
  `tenant1_last_name` varchar(25) NOT NULL DEFAULT 'x',
  `tenant1_cell` varchar(10) NOT NULL DEFAULT 'x',
  `tenant1_email` varchar(40) NOT NULL DEFAULT 'x',
  `tenant2_first_name` varchar(25) NOT NULL DEFAULT 'x',
  `tenant2_last_name` varchar(25) NOT NULL DEFAULT 'x',
  `tenant2_cell` varchar(10) NOT NULL DEFAULT 'x',
  `tenant2_email` varchar(40) NOT NULL DEFAULT 'x',
  `tenant_home_phone` varchar(10) NOT NULL DEFAULT 'x',
  `notes` varchar(255) NOT NULL DEFAULT 'x',
  `hoa_secretary` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `neighbors`
--

INSERT INTO `neighbors` (`id`, `sun_creek_street_number`, `owner1_first_name`, `owner1_last_name`, `owner1_cell`, `owner1_email`, `owner2_first_name`, `owner2_last_name`, `owner2_cell`, `owner2_email`, `owner_alt_street1`, `owner_alt_street2`, `owner_alt_city`, `owner_alt_state`, `owner_alt_zip`, `owner_home_phone`, `tenant1_first_name`, `tenant1_last_name`, `tenant1_cell`, `tenant1_email`, `tenant2_first_name`, `tenant2_last_name`, `tenant2_cell`, `tenant2_email`, `tenant_home_phone`, `notes`, `hoa_secretary`) VALUES
(1, '30601', 'Beth', 'Elmgreen', '7202104423', 'belmgreen@hotmail.com', 'x', 'sdaf', 'x', '', 'x', 'x', 'x', 'x', 'x', 'x', 'Rod', 'Griffen', '7206298799', 'rod@cqg.com', 'Marilee', 'x', 'x', 'x', 'x', 'x', 0),
(2, '30603', 'Susan', 'Berg', '3033695815', 'susanmb100@aol.com', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'Regan', 'Jones', '7209855254', 'rljones05@yahoo.com', 'x', 'x', 'x', 'x', 'x', 'x', 0),
(3, '30611', 'Joe', 'O''Connor', '3032461314', 'jeoconnor68@gmail.com', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'Scott', 'Bender', '3038032699', 'Scott.Bender@efirstbank.com', 'x', 'x', 'x', 'x', 'x', 'x', 0),
(4, '30613', 'Brett', 'Sullivan', '3035228545', 'btsully2@yahoo.com', 'Tammy', 'Sullivan', '3039194050', 'x', '921 Park Place', 'x', 'Alamosa', 'CO', '81101', 'x', 'Jeremy', 'Grady', '7207490216', 'graydoggrady@gmail.com', 'Katy', 'Delaplane', '7204718791', 'ktchanning@gmail.com', 'x', 'x', 0),
(5, '30621', 'Wendy', 'Naylor', '3035233460', 'wseacliff@aol.com', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', '3036702196', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 1),
(6, '30623', 'Nancy', 'Scott', '7196792120', 'nancylee.scott@gmail.com', 'Dennis', 'Scott', '7192425618', 'jdennis.scott@gmail.com', '33711 Mountain View', 'x', 'Trinidad', 'CO', '81082-3994', '7198458660', 'Robert', 'Means', '7203198316', 'robert@robertmeans.com', 'x', 'x', 'x', 'x', 'x', 'x', 0),
(7, '30631', 'Barbara', 'Klaus', '3033585685', 'bdklaus@comcast.net', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', '3036741102', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'ooo you got no idea the business I''ve got on this loopy cat. I saw her eat an entire pineapple while juggling shoes in the creek.', 0),
(8, '30633', 'Duncan', 'Williams', '9043477309', 'x', 'Beth', 'Williams', 'x', 'hobie904@gmail.com', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 0),
(9, '30641', 'Cindy', 'Alvarez', '3033240919', 'cindydalvarez@yahoo.com', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 0),
(10, '30643', 'Jim', 'Wallace', 'x', 'x', 'Barb', 'Wallace', '3033492976', 'babs1wallace@comcast.net', 'x', 'x', 'x', 'x', 'x', '3036701931', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
