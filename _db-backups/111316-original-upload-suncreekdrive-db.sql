-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 06:55 PM
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
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `hashed_password`) VALUES
(8, 'Wendy', '$2y$10$YWE5YWNhYmZmYzNlODY4ZOrpyR2//ux1x/BEGg50tdr2HIo7Sr76C'),
(9, 'Robert', '$2y$10$NmIxMTFhNmYxMDNjODVkYez8NfGRfye79wZCaQyTL2.pj7Ib78.9m');

-- --------------------------------------------------------

--
-- Table structure for table `neighbors`
--

CREATE TABLE IF NOT EXISTS `neighbors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sun_creek_street_number` varchar(6) NOT NULL,
  `owner1_first_name` varchar(25) NOT NULL,
  `owner1_last_name` varchar(25) NOT NULL,
  `owner1_cell` varchar(10) NOT NULL,
  `owner1_email` varchar(40) NOT NULL,
  `owner2_first_name` varchar(25) NOT NULL,
  `owner2_last_name` varchar(25) NOT NULL,
  `owner2_cell` varchar(10) NOT NULL,
  `owner2_email` varchar(40) NOT NULL,
  `owner_alt_street1` varchar(25) NOT NULL,
  `owner_alt_street2` varchar(25) NOT NULL,
  `owner_alt_city` varchar(25) NOT NULL,
  `owner_alt_state` varchar(2) NOT NULL,
  `owner_alt_zip` varchar(10) NOT NULL,
  `owner_home_phone` varchar(10) NOT NULL,
  `tenant1_first_name` varchar(25) NOT NULL,
  `tenant1_last_name` varchar(25) NOT NULL,
  `tenant1_cell` varchar(10) NOT NULL,
  `tenant1_email` varchar(40) NOT NULL,
  `tenant2_first_name` varchar(25) NOT NULL,
  `tenant2_last_name` varchar(25) NOT NULL,
  `tenant2_cell` varchar(10) NOT NULL,
  `tenant2_email` varchar(40) NOT NULL,
  `tenant_home_phone` varchar(10) NOT NULL,
  `notes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `neighbors`
--

INSERT INTO `neighbors` (`id`, `sun_creek_street_number`, `owner1_first_name`, `owner1_last_name`, `owner1_cell`, `owner1_email`, `owner2_first_name`, `owner2_last_name`, `owner2_cell`, `owner2_email`, `owner_alt_street1`, `owner_alt_street2`, `owner_alt_city`, `owner_alt_state`, `owner_alt_zip`, `owner_home_phone`, `tenant1_first_name`, `tenant1_last_name`, `tenant1_cell`, `tenant1_email`, `tenant2_first_name`, `tenant2_last_name`, `tenant2_cell`, `tenant2_email`, `tenant_home_phone`, `notes`) VALUES
(1, '30601', 'Beth', 'Elmgreen', '', 'belmgreen@hotmail.com', '', '', '', '', '', '', '', '', '', '', 'Rod', 'Griffen', '', 'rod@cqg.com', 'Marilee', '', '', '', '', ''),
(2, '30603', 'Susan', 'Berg', '3033695815', 'susanmb100@aol.com', '', '', '', '', '', '', '', '', '', '', 'Regan', 'Jones', '7209855254', 'rljones05@yahoo.com', '', '', '', '', '', ''),
(3, '30611', 'Joe', 'O''Connor', '3032461314', 'jeoconnor68@gmail.com', '', '', '', '', '', '', '', '', '', '', 'Scott', 'Bender', '3038032699', 'Scott.Bender@efirstbank.com', '', '', '', '', '', ''),
(4, '30613', 'Brett', 'Sullivan', '3035228545', 'btsully2@yahoo.com', 'Tammy', 'Sullivan', '3039194050', '', '921 Park Place', '', 'Alamosa', 'CO', '81101', '', 'Jeremy', 'Grady', '7207490216', 'graydoggrady@gmail.com', 'Katy', 'Delaplane', '7204718791', 'ktchanning@gmail.com', '', ''),
(5, '30621', 'Wendy', 'Naylor', '3035233460', 'wseacliff@aol.com', '', '', '', '', '', '', '', '', '', '3036702196', '', '', '', '', '', '', '', '', '', ''),
(6, '30623', 'Nancy', 'Scott', '7196792120', 'nancylee.scott@gmail.com', 'Dennis', 'Scott', '7192425618', 'jdennis.scott@gmail.com', '33711 Mountain View', '', 'Trinidad', 'CO', '81082-3994', '7198458660', 'Robert', 'Means', '7203198316', 'robert@robertmeans.com', '', '', '', '', '3036741577', ''),
(7, '30631', 'Barbara', 'Klaus', '3033585685', 'bdklaus@comcast.net', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '30633', 'Duncan', 'Williams', '9043477309', 'hobie904@gmail.com', 'Beth', 'Williams', '', 'hobie904@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '30641', 'Cindy', 'Alvarez', '3033240919', 'cindydalvarez@yahoo.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '30643', 'Jim', 'Wallace', '', '', 'Barb', 'Wallace', '3033492976', 'babs1wallace@comcast.net', '', '', '', '', '', '3033492976', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
