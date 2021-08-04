-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2021 at 06:24 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suncreekdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `hashed_password`) VALUES
(1, 'Robert', '$2y$10$MzU5YzBhZWE2NGU1NjMwZeCr4ahQne1m5cGRhOXKbyCjI7WNz51ke'),
(6, 'Wendy', '$2y$10$ZTM3NjZhZjg5Zjk4OTMwMeJHdySh76uJ2LD5OGFYpcod5/rA/h6Ai');

-- --------------------------------------------------------

--
-- Table structure for table `neighbors`
--

CREATE TABLE `neighbors` (
  `id` int(11) NOT NULL,
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
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neighbors`
--

INSERT INTO `neighbors` (`id`, `sun_creek_street_number`, `owner1_first_name`, `owner1_last_name`, `owner1_cell`, `owner1_email`, `owner2_first_name`, `owner2_last_name`, `owner2_cell`, `owner2_email`, `owner_alt_street1`, `owner_alt_street2`, `owner_alt_city`, `owner_alt_state`, `owner_alt_zip`, `owner_home_phone`, `tenant1_first_name`, `tenant1_last_name`, `tenant1_cell`, `tenant1_email`, `tenant2_first_name`, `tenant2_last_name`, `tenant2_cell`, `tenant2_email`, `tenant_home_phone`, `notes`) VALUES
(1, '30601', 'Sarah', 'Booth', '7204709927', 'sarah.booth5@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kids: Carley, Will, & Jack'),
(2, '30603', 'Regan', 'Jones', '7209855254', 'rljones05@yahoo.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '30611', 'Joe', 'O\'Connor', '3032461314', 'jeoconnor68@gmail.com', '', '', '', '', '31656 Canyon Circle', '', 'Evergreen', 'CO', '80439', '', 'Scott', 'Brattebo', '3032498572', 'stbrattebo@yahoo.com', 'Kaitlen', 'Horne', '', 'khorne1995@gmail.com', '', ''),
(4, '30613', 'Brett', 'Sullivan', '3035228545', 'btsully2@yahoo.com', 'Tammy', 'Sullivan', '3039194050', '', '921 Park Place', '', 'Alamosa', 'CO', '81101', '', 'Drew', 'Vogan', '3039578864', 'surfingtauren@yahoo.com', 'Elaine', 'Vogan', '', '', '', ''),
(5, '30621', 'Wendy', 'Naylor', '3035233460', 'wseacliff@aol.com', '', '', '', '', '', '', '', '', '', '3036702196', '', '', '', '', '', '', '', '', '', ''),
(6, '30623', 'Nancy', 'Scott', '7196792120', 'nancylee.scott@gmail.com', 'Dennis', 'Scott', '7192425618', 'jdennis.scott@gmail.com', '33711 Mountain View', '', 'Trinidad', 'CO', '81082-3994', '7198458660', 'Robert', 'Means', '7203198316', 'robert@robertmeans.com', '', '', '', '', '', 'Kids: Stanton & Meredith'),
(7, '30631', 'Barbara', 'Klaus', '3033585685', 'bdklaus@comcast.net', '', '', '', '', '', '', '', '', '', '3036741102', '', '', '', '', '', '', '', '', '', ''),
(8, '30633', 'Erich', 'Meyer', '3033783395', 'erich52@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '30641', 'Cindy', 'Alvarez', '3033240919', 'cindydalvarez@yahoo.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kids: Alex & Bella'),
(10, '30643', 'Jim', 'Wallace', '', '', 'Barb', 'Wallace', '3033492976', 'babs1wallace@comcast.net', '', '', '', '', '', '3036701931', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neighbors`
--
ALTER TABLE `neighbors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `neighbors`
--
ALTER TABLE `neighbors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
