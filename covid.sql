-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2020 at 07:39 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Jaya', 'jaya@gmail.com', 'Good', 'Play, dance and groove.');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(100) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `symptons` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `gender`, `symptons`, `disease`, `activity`, `age`, `date`) VALUES
(1, 'Radhe', 'male', 'cough,breathingd', 'hypertension,lungd', 'healthworker', 'no', '2020-08-21 09:52:10'),
(2, 'nandini', 'female', 'fever', 'kidneyd', 'none', 'no', '2020-08-21 10:06:42'),
(3, 'Radhe mohan', 'dont', 'fever', 'hypertension,heartd', 'healthworker', 'no', '2020-08-21 10:09:28'),
(4, 'Kirti', 'dont', '', '', 'healthworker', 'no', '2020-08-21 10:10:43'),
(5, 'Vishakha', 'dont', 'fever', 'kidneyd', 'healthworker', 'no', '2020-08-21 10:11:30'),
(6, 'Jai', 'dont', '', 'kidneyd', 'healthworker', 'no', '2020-08-21 10:13:40'),
(7, 'Vijay Shekhawat', 'male', '', '', 'none', 'yes', '2020-08-21 10:15:08'),
(8, 'Vikas', 'male', '', '', 'none', 'no', '2020-08-21 10:16:30'),
(9, 'Akbar', 'male', '', 'lungd,heartd', 'healthworker', 'no', '2020-08-21 10:17:08'),
(10, 'Krishna', 'male', 'cough,breathingd,loss', 'diabetes,hypertension,lungd,heartd,kidneyd', 'healthworker', 'yes', '2020-08-21 10:52:43'),
(11, 'Khadija', 'female', 'cough,loss', 'diabetes,hypertension,lungd', 'healthworker', 'no', '2020-08-21 11:05:56'),
(12, 'Vartika', 'female', 'fever,breathingd', 'lungd,heartd,kidneyd', 'healthworker', 'no', '2020-08-21 11:09:17'),
(13, 'Krish', 'female', 'loss', '', 'healthworker', 'no', '2020-08-21 11:10:20'),
(14, 'Jaya', 'female', 'breathingd', '', 'livedwith', 'no', '2020-08-22 19:28:27'),
(15, 'Vibhuti Mishra', 'male', 'cough', 'lungd', 'healthworker', 'no', '2020-08-22 19:30:42'),
(16, 'Jevan', 'others', 'loss', 'diabetes', 'none', 'no', '2020-08-22 19:34:05'),
(17, 'gunju', 'dont', '', '', 'none', 'no', '2020-08-22 19:38:14');
