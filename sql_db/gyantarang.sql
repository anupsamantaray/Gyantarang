-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 166.62.8.48
-- Generation Time: Sep 12, 2015 at 12:35 PM
-- Server version: 5.5.43
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gyantarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` VALUES(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `donaters`
--

DROP TABLE IF EXISTS `donaters`;
CREATE TABLE `donaters` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Dname` varchar(50) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Filename` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `donaters`
--

INSERT INTO `donaters` VALUES(1, 'Shri. S Behera', '						He has supported our team financially whenever we have approached him. We thank him for all the support he has given to us.', 'Beheraji 2.jpg');
INSERT INTO `donaters` VALUES(3, 'Students', '												We have worked closely with people of various background who won Scholarships and were record holders in their times and have genuinely supported us. We would like to thank them too.', 'Professionalservicecover.JPG');
INSERT INTO `donaters` VALUES(14, 'Students of Odisha', 'We are looking towards some small contribution from existing students also; so as to financially help their counterparts in remote villages who are not so fortunate to buy various schoolbooks by themselves.								', 'IMG-20150802-WA0008.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

DROP TABLE IF EXISTS `scholarship`;
CREATE TABLE `scholarship` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(50) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Filename` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` VALUES(5, 'Scholarship Eaxm at Govt. Girls High School, Patti', '												Scholarship exam being conducted at Govt. Girls High School, Pattisahi, Cuttack on July 7th, 2015. 													\r\n																																				', 'IMG-20150802-WA0007.jpg');
INSERT INTO `scholarship` VALUES(6, 'Scholarship Program ', '								Scholarship exam being conducted at Govt. Girls High School, Pattisahi, Cuttack on July 7th, 2015.										\r\n																		', 'IMG-20150802-WA0002.jpg');
INSERT INTO `scholarship` VALUES(7, 'Scholarship Program', 'Scholarship exam being conducted at Govt. Girls High School, Pattisahi, Cuttack on July 7th, 2015.																		\r\n																		', 'IMG-20150802-WA0003.jpg');
INSERT INTO `scholarship` VALUES(8, 'Letter of Appreciation', '						Letter of Appreciation received from Govt. Girls High School, Pattisahi, Cuttack for conducting quiz.						', 'IMG-20150802-WA0006.jpg');
INSERT INTO `scholarship` VALUES(15, 'Scholarship Program', 'Scholarship Exam under progress at high school Cuttack																		\r\n																		', 'IMG-20150802-WA0001.jpg');
INSERT INTO `scholarship` VALUES(16, 'Scholarship Exam under progress', 'Scholarship Exam under progress at high school Cuttack																', 'IMG-20150802-WA0008.jpg');
INSERT INTO `scholarship` VALUES(17, 'Letter of Appreciation', 'Letter of Appreciation received from Bhagabati Bidyapitha Sukhleshwar, Cuttack												', 'IMG-20150802-WA0004.jpg');
INSERT INTO `scholarship` VALUES(19, 'Prize distribution ', '																								\r\nPrize distribution at Pandarbatiya high school cuttack district																								', 'Aqua Y2 Pro_20150814_093350.jpg');
INSERT INTO `scholarship` VALUES(21, 'Prize distribution ', '																		\r\nPrize distribution at Sukleswar High School																		', 'Aqua Y2 Pro_20150814_111257.jpg');
INSERT INTO `scholarship` VALUES(22, 'Prize distribution ', 'Prize distribution at Sukleswar High School												\r\n												', 'Aqua Y2 Pro_20150814_111320.jpg');
INSERT INTO `scholarship` VALUES(23, 'Prize distribution ', 'Prize distribution at Sukleswar High School											\r\n												', 'Aqua Y2 Pro_20150814_111354.jpg');
INSERT INTO `scholarship` VALUES(25, 'Prize distribution ', '																		\r\nPrize distribution at Nahanga High School Cuttack District																	', 'Aqua Y2 Pro_20150814_114917.jpg');
INSERT INTO `scholarship` VALUES(26, 'Prize distribution ', 'Prize distribution at Nahanga High School Cuttack District												\r\n												', 'Aqua Y2 Pro_20150814_114934.jpg');
INSERT INTO `scholarship` VALUES(27, 'Prize distribution ', 'Prize distribution at Nahanga High School Cuttack District \r\n												\r\n												', 'Aqua Y2 Pro_20150814_114950.jpg');
INSERT INTO `scholarship` VALUES(29, 'Scholarship program', '								Quiz conducted in Guidance Public School, Dumuduma, Bhubaneswar				\r\n												', 'Guidance Public School, Dumuduma, Bhubaneswar.jpg');
INSERT INTO `scholarship` VALUES(30, 'Scholarship program', '						Quiz conducted in Bibekananda School, Bhubaneswar						\r\n												', 'Bibekananda School, Bhubaneswar.jpg');
INSERT INTO `scholarship` VALUES(31, 'Scholarship program', '						Quiz conducted in Nayapalli High School, Bhubaneswar, one of the largest school of Odisha						\r\n												', 'Nayapalli High School.jpg');
