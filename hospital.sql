-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2022 at 02:21 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

DROP TABLE IF EXISTS `appoinment`;
CREATE TABLE IF NOT EXISTS `appoinment` (
  `number` bigint(5) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `p_age` char(3) NOT NULL,
  `address` varchar(30) NOT NULL,
  `p_nic` varchar(12) NOT NULL,
  `service` varchar(10) NOT NULL,
  `p_telephone` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`number`, `date`, `time`, `name`, `p_age`, `address`, `p_nic`, `service`, `p_telephone`) VALUES
(1, '2022-08-10', 'Morning', 'Nadeesha', '23', 'Mathara', '994447853V', 'OPD', '0785544242'),
(2, '2022-08-25', 'Morning', 'Chathuu Amaya Peris', '23', 'Thangalle', '995844785v', 'OPD', '0715866233'),
(3, '2022-08-18', 'Morning', 'Vimal', '25', 'Walasmulla', '975844752311', 'OPD', '0745806200'),
(4, '2022-08-27', 'Evening', 'Dilsha kumari', '29', 'Vigamuwa', '912544778455', 'Dentals', '0714522200'),
(5, '2022-08-12', 'Evening', 'Rahal Adikari', '32', 'Kuliyapitiya', '914789665823', 'OPD', '0715787868'),
(6, '2022-08-12', 'Evening', 'Nimesh', '21', 'Ranna.', '200145458566', 'OPD', '0714448886'),
(7, '2022-08-20', 'Evening', 'Sitha', '65', 'Weerakatiya', '614578555514', 'OPD', 'No Number'),
(8, '2022-08-20', 'Morning', 'Siril', '55', 'Kattakaduwa', '795487569V', 'OPD', '0714544578'),
(9, '2022-08-20', 'Morning', 'Siril', '55', 'Kattakaduwa', '795487569V', 'OPD', '0714544578'),
(10, '2022-08-20', 'Morning', 'Siril', '55', 'Kattakaduwa', '795487569V', 'OPD', '0714544578'),
(11, '2022-09-03', 'Evening', 'Charith', '25', 'Neluwa', '974555501V', 'Dentals', '0711213250'),
(12, '2022-09-03', 'Evening', 'Charith', '25', 'Neluwa', '974555501V', 'Dentals', '0711213250');

-- --------------------------------------------------------

--
-- Table structure for table `registation`
--

DROP TABLE IF EXISTS `registation`;
CREATE TABLE IF NOT EXISTS `registation` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `age` char(3) NOT NULL,
  `tele` char(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registation`
--

INSERT INTO `registation` (`id`, `fname`, `address`, `nic`, `age`, `tele`, `district`, `email`, `password`) VALUES
(1, 'Ganga Thushari', 'Galle', '895454782v', '33', '0775486550', 'Galle', 'gangathushari@gamil.com', 'abcd'),
(2, 'Chathuu Amaya Peris', 'Thangalle', '995247863v', '23', '0715866233', 'Hambantota', 'chathu99@gmail.com', '1234'),
(4, 'Maya Peris', 'Hambantota', '99845781V', '23', '0715866233', 'Hambantota', 'maya@99@gmail.com', '112233');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
