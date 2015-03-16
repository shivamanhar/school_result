-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2015 at 03:18 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `board_result`
--
CREATE DATABASE IF NOT EXISTS `board_result` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `board_result`;

-- --------------------------------------------------------

--
-- Table structure for table `mark_data`
--

CREATE TABLE IF NOT EXISTS `mark_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `center_no` bigint(20) NOT NULL,
  `school_no` bigint(20) NOT NULL,
  `enrolment_no` varchar(30) NOT NULL,
  `school_cat` varchar(60) NOT NULL,
  `roll_no` bigint(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `father` varchar(60) NOT NULL,
  `mather` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `school` varchar(100) NOT NULL,
  `hindi_total` int(11) NOT NULL,
  `english_total` int(11) NOT NULL,
  `sanskrit_total` int(11) NOT NULL,
  `math_total` int(11) NOT NULL,
  `science_theory` int(11) NOT NULL,
  `science_practical` int(11) NOT NULL,
  `science_total` int(11) NOT NULL,
  `social_total` int(11) NOT NULL,
  `total` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `mark_data`
--

INSERT INTO `mark_data` (`id`, `center_no`, `school_no`, `enrolment_no`, `school_cat`, `roll_no`, `name`, `father`, `mather`, `dob`, `school`, `hindi_total`, `english_total`, `sanskrit_total`, `math_total`, `science_theory`, `science_practical`, `science_total`, `social_total`, `total`, `date`) VALUES
(1, 1234, 1234, 'as/12345678', 'REGULAR', 4343, 'asd', 'sastra', 'ganga bai', '2014-08-13', 'Govt.H.S.SCHOOL MONGAR', 232, 232, 323, 323, 423, 233, 232, 323, 232, '2014-08-08 11:44:11'),
(2, 123, 1234, 'as/12345678', 'REGULAR', 4343, 'LDJLKJFL', 'SASTRA', 'GANGA BAI', '2014-08-14', 'Govt.H.S.SCHOOL MONGAR', 2, 2, 2, 2, 2, 2, 4, 2, 2, '2014-08-09 09:07:36'),
(3, 123, 344, 'ms/23', 'REGULAR', 1526, 'MAYANK SHARMA', 'SDFD', 'SE3', '2014-08-15', 'Govt.H.S.SCHOOL MONGAR', 12, 34, 34, 32, 23, 34, 57, 43, 212, '2014-08-11 06:19:10'),
(4, 123, 344, 'ms/23', 'PRIVATE', 1526, 'MAYANK SHARMA', 'SDFD', 'SE3', '2014-08-29', 'Govt.H.S.SCHOOL MONGAR', 12, 12, 12, 12, 12, 12, 24, 12, 84, '2014-08-11 06:21:17'),
(5, 123, 344, 'ms/23', 'REGULAR', 1526, 'MAYANK SHARMA', 'SDFD', 'SE3', '2014-08-27', 'Govt.H.S.SCHOOL MONGAR', 0, 3, 3, 3, 3, 3, 6, 3, 21, '2014-08-11 09:48:32'),
(6, 123, 344, 'ms/23', 'REGULAR', 1526, 'MAYANK SHARMA', 'SDFD', 'SE3', '2014-08-29', 'Govt.H.S.SCHOOL MONGAR', 5, 5, 5, 5, 5, 5, 10, 5, 35, '2014-08-11 09:56:18'),
(8, 123, 344, 'ms/23', 'REGULAR', 1526, 'MAYANK SHARMA', 'SDFD', 'SE3', '2014-08-15', 'Govt.H.S.SCHOOL MONGAR', 6, 6, 699, 6, 6, 6, 12, 6, 735, '2014-08-11 10:29:11'),
(9, 123, 1234, 'kl/34/2014', 'REGULAR', 1234, 'ABHAY', 'RAHUL', 'RU', '2014-08-21', 'Govt.H.S.SCHOOL BILASPUR', 89, 59, 56, 98, 20, 21, 41, 50, 393, '2014-08-12 09:36:23'),
(10, 101, 425, 'kp/550', 'REGULAR', 525, 'AKASH', 'DEEPALK', 'REENA', '2014-08-12', 'Govt.H.S.SCHOOL KORBA', 79, 67, 80, 57, 68, 0, 68, 58, 409, '2014-08-12 09:39:19'),
(11, 567, 68, 'kp/650', 'REGULAR', 770, 'VIJAY', 'RAHUL', 'NEHA', '2014-08-08', 'Govt.H.S.SCHOOL RAIPUR', 110, 67, 69, 98, 161, 23, 184, 18, 546, '2014-08-12 09:49:14'),
(12, 123, 1234, 'kd/347', 'REGULAR', 771, 'YO', 'YOYO', 'B1', '2014-08-14', 'Govt.H.S.SCHOOL KORBA', 89, 89, 67, 43, 54, 21, 75, 67, 430, '2014-08-12 09:55:40'),
(13, 1112, 1234, '123', 'REGULAR', 112, 'SOURABH', 'DEEPALK', 'DIVYA SHARMA', '1990-02-12', 'Govt.H.S.SCHOOL MONGAR', 23, 33, 34, 55, 55, 23, 78, 55, 278, '2015-01-05 07:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `userid`, `password`, `date`) VALUES
(1, 'shivamanhar@gmail.com', 'fb6d854b311723e45c4a067e9def599d', '2014-02-16 06:15:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
