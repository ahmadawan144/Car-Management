-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 09:29 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moter_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `branch_code` varchar(10) NOT NULL,
  `branch_name` varchar(40) NOT NULL,
  `emploeey_count` varchar(4) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`branch_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_code`, `branch_name`, `emploeey_count`, `address`) VALUES
('102', 'multan', '10', 'vehari chok'),
('103', 'dhong', '50', 'near bus station multan'),
('104', 'dhom', '35', 'near nistaer hospital station multan');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `car_no` varchar(5) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `name`, `cnic`, `car_no`, `address`) VALUES
(1, 'ahmad', '398741', '36302', 'multan'),
(2, 'ahmad', '398741', '36302', 'multan'),
(3, 'ahmad', 'ali', 'asdcv', 'mulas');

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE IF NOT EXISTS `car_info` (
  `car_no` varchar(5) NOT NULL,
  `car_color` varchar(10) NOT NULL,
  `car_seets` varchar(2) NOT NULL,
  `car_description` varchar(250) NOT NULL,
  `car price` varchar(8) NOT NULL,
  PRIMARY KEY (`car_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`car_no`, `car_color`, `car_seets`, `car_description`, `car price`) VALUES
('11457', 'blue', '5', 'not bad', '100000'),
('12345', 'red', '5', 'good state', '5000000'),
('12457', 'blue', '4', 'not bad', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `car_price`
--

CREATE TABLE IF NOT EXISTS `car_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_no` varchar(5) NOT NULL,
  `sale price` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `car_price`
--

INSERT INTO `car_price` (`id`, `car_no`, `sale price`) VALUES
(2, '11457', '200000'),
(3, '12345', '5200000'),
(4, '12457', '120000');

-- --------------------------------------------------------

--
-- Table structure for table `commition agent`
--

CREATE TABLE IF NOT EXISTS `commition agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mobil_no` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `owner-name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `commition agent`
--

INSERT INTO `commition agent` (`id`, `name`, `mobil_no`, `address`, `owner-name`) VALUES
(1, 'ali', '03126074456', 'multan', 'ahmad'),
(2, 'usman', '03123474456', 'layyah', 'toqeer');

-- --------------------------------------------------------

--
-- Table structure for table `commition _paid`
--

CREATE TABLE IF NOT EXISTS `commition _paid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_nmae` varchar(20) NOT NULL,
  `car_ no` varchar(5) NOT NULL,
  `paid` varchar(8) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `commition _paid`
--

INSERT INTO `commition _paid` (`id`, `agent_nmae`, `car_ no`, `paid`, `date`) VALUES
(3, 'ali', '11457', '2000', '2018-04-01'),
(4, 'usman', '12345', '2500', '2018-04-05'),
(5, 'ali', '12457', '5200', '2018-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `emploeey`
--

CREATE TABLE IF NOT EXISTS `emploeey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `branch_code` varchar(10) NOT NULL,
  `salery` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `emploeey`
--

INSERT INTO `emploeey` (`id`, `name`, `branch_code`, `salery`) VALUES
(1, 'ahmad', '3021', '5000'),
(2, 'hamza', '102', '50000'),
(3, 'toqeer', '102', '15000'),
(4, '123456', 'asdfg', '');

-- --------------------------------------------------------

--
-- Table structure for table ` moter_owner`
--

CREATE TABLE IF NOT EXISTS ` moter_owner` (
  `ownerid` int(11) NOT NULL AUTO_INCREMENT,
  `cnic` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(5) NOT NULL,
  `password` varchar(8) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`ownerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table ` moter_owner`
--

INSERT INTO ` moter_owner` (`ownerid`, `cnic`, `name`, `gender`, `age`, `password`, `address`) VALUES
(101, '36302-506995-9', 'ahmad', 'male', '19', '654321', 'multan'),
(102, '36300-506545-1', 'hamza', 'male', '19', '789654', 'gujrawala'),
(103, '36302-456987-9', 'toqeer', 'male', '19', '124578', 'Abtabad');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `car_no` varchar(5) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `car_no` (`car_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `cnic`, `car_no`, `address`) VALUES
(10, 'rashid', '7896-5412123-4', '11457', 'lahore'),
(11, 'fareed', '12345-678998-7', '12345', 'karachi'),
(12, 'zaryab', '78965-412365-8', '12457', 'peshawe');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`car_no`) REFERENCES `car_info` (`car_no`),
  ADD CONSTRAINT `seller_ibfk_2` FOREIGN KEY (`car_no`) REFERENCES `car_info` (`car_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
