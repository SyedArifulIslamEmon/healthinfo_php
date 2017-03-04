-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2015 at 09:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ohms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cid`, `cname`) VALUES
(0, 'Cardiology'),
(1, 'Dentistry'),
(2, 'Dermatology'),
(3, 'Medicine'),
(4, 'Neurology'),
(5, 'Nephrology'),
(6, 'Surgery'),
(7, 'Radiology');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_tbl`
--

CREATE TABLE IF NOT EXISTS `doctor_tbl` (
  `did` int(20) NOT NULL AUTO_INCREMENT,
  `dname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `image_path` varchar(30) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `doctor_tbl`
--

INSERT INTO `doctor_tbl` (`did`, `dname`, `email`, `age`, `degree`, `cname`, `password`, `create_date`, `image_path`) VALUES
(5, 'Nazmus Sakib', 'sakib.shakib@gmail.c', '30', 'MBBS', 'Nephrology', '12345', '2015-03-26 00:00:00', 'img_5513af3d31c3a.JPG'),
(6, 'Jayeed', 'Jayeed@gmail.com', '28', 'MBBS', 'Medicine', '12345', '2015-03-26 00:00:00', 'img_5513af7b7c9bd.JPG'),
(7, 'Nazmus Sakib', 'sakib.shakib@gmail.c', '30', 'MBBS', 'Dentistry', '123', '2015-03-26 00:00:00', 'img_5513b4fdd71aa.jpg'),
(8, 'Allauddain', 'Allauddain@gmail.com', '32', 'MBBS,FCPS', 'Dentistry', '897', '2015-03-26 00:00:00', 'img_5513bc9739746.jpg'),
(9, 'Muna', 'Muna@gmail.com', '35', 'MBBS', 'Dermatology', 'muna', '2015-03-26 00:00:00', 'img_5513bcd4d22bb.jpg'),
(10, 'Sormi', 'Sormi@gmail.com', '28', 'MBBS', 'Neurology', '765', '2015-03-26 00:00:00', 'img_5513bd0087d46.jpg'),
(11, 'Nazmus Sakib', 'sakib.shakib@gmail.c', '28', 'MBBS', 'Cardiology', '12345', '2015-03-26 00:00:00', 'img_5513bd5e82cb5.jpg'),
(12, 'Tanbir', 'tanbir@gmail.com', '28', 'MBBS', 'Dentistry', '12345', '2015-03-26 00:00:00', 'img_5513be435855d.jpg'),
(13, 'Tanbir', 'tanbir@gmail.com', '28', 'MBBS', 'Dentistry', '12345', '2015-03-26 00:00:00', 'img_5513c3102a431.jpg'),
(14, 'Moon', 'Moon@gmail.com', '30', 'FCPS', 'Cardiology', '2345', '2015-03-26 00:00:00', 'img_55141d1a5edb0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `labretorist_tbl`
--

CREATE TABLE IF NOT EXISTS `labretorist_tbl` (
  `lid` int(20) NOT NULL AUTO_INCREMENT,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `diagname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `image_path` varchar(20) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `labretorist_tbl`
--

INSERT INTO `labretorist_tbl` (`lid`, `lname`, `email`, `diagname`, `password`, `create_date`, `image_path`) VALUES
(1, 'jayeed', 'jayeed38@gmail.com', 'Ibne Sina', '1234', '2015-03-25 00:00:00', 'img_55131c52ee468.jp'),
(2, 'Bin Abdul Quddus', 'jayedkhan38@yahoo.co', 'Ibne Sina', '1234', '2015-03-25 00:00:00', 'img_55131c9c32555.jp'),
(3, 'Bin Abdul Quddus', 'jayedkhan38@yahoo.co', 'Ibne Sina', '1234', '2015-03-25 00:00:00', ''),
(4, 'Bin Abdul Quddus', 'jayedkhan38@yahoo.co', 'Ibne Sina', '1234', '2015-03-25 00:00:00', 'img_55131d6fa6144.jp'),
(5, 'emon', 'jayeed38@gmail.com', 'Ibne Sina', '1234', '2015-03-25 00:00:00', 'img_55131d88a62f2.jp'),
(6, 'jayeed', 'jayeed38@gmail.com', 'Ibne Sina', '1234', '2015-03-25 00:00:00', 'img_55131dc82bc7a.jp');

-- --------------------------------------------------------

--
-- Table structure for table `pproblem_tbl`
--

CREATE TABLE IF NOT EXISTS `pproblem_tbl` (
  `prbid` int(30) NOT NULL AUTO_INCREMENT,
  `did` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`prbid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pproblem_tbl`
--

INSERT INTO `pproblem_tbl` (`prbid`, `did`, `pname`, `description`, `create_date`) VALUES
(1, '6', 'Tanvir', 'Hie', '2015-03-26 00:00:00'),
(4, '4', 'jayeed', ',jsdfhacjlv,jascv b k.smcb ,sm', '2015-03-26 00:00:00'),
(5, '9', 'sakib', 'kmhgvkasjbfaslbfas,jfas,jdfksd', '2015-03-26 00:00:00'),
(6, '9', 'muzahid', 'Fever & Pain', '2015-03-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_tbl`
--

CREATE TABLE IF NOT EXISTS `prescription_tbl` (
  `prid` int(20) NOT NULL AUTO_INCREMENT,
  `did` int(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `simptoms` varchar(20) NOT NULL,
  `test` varchar(20) NOT NULL,
  `drug` varchar(20) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`prid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `prescription_tbl`
--

INSERT INTO `prescription_tbl` (`prid`, `did`, `pid`, `simptoms`, `test`, `drug`, `create_date`) VALUES
(1, 0, 1, 'feaver', 'blood Test', 'Napa', '2015-03-26'),
(2, 5, 4, 'Fever', 'Blood Test', 'Napa', '2015-03-27'),
(3, 7, 5, 'Fever', 'Blood Test', 'Napa', '2015-03-27'),
(4, 9, 7, 'Fever & Pain', 'Blood Test & Urain T', 'Histacian (1+0+1)', '2015-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `registration_tbl`
--

CREATE TABLE IF NOT EXISTS `registration_tbl` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `pname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `image_path` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registration_tbl`
--

INSERT INTO `registration_tbl` (`pid`, `pname`, `email`, `age`, `sex`, `dob`, `blood`, `address`, `password`, `create_date`, `image_path`) VALUES
(1, 'jayeed', 'jayeed38@gmail.com', '25', 'Male', '2-3-15', 'A+', 'dhanmondi', '1234', '2015-03-26 00:00:00', 'img_55138ff2bcfde.jp'),
(3, 'alauddin', 'alauddin0055@gmail.c', '25', 'Male', '2-3-15', 'A+', 'hatirpul', '1234', '2015-03-26 00:00:00', ''),
(4, 'alauddin', 'jayeed38@gmail.com', '25', 'Male', '2-3-15', 'A+', 'hatirpul', '1234', '2015-03-26 00:00:00', 'img_5513934adcc50.jp'),
(5, 'sakib', 'sakib.shakib@gmail.c', '28', 'on', '26/8/1994', 'O+', 'Barisal', '1234', '2015-03-26 00:00:00', 'img_55143dd44b2af.jp'),
(6, 'sakib', 'sakib.shakib@gmail.c', '28', 'on', '26/8/1994', 'O+', 'Barisal', '1234', '2015-03-26 00:00:00', 'img_55143eaa27947.jp'),
(7, 'muzahid', 'muzahid@gmail.com', '30', 'male', '26/8/1994', 'AB+', 'mirpur 2', '0987', '2015-03-29 00:00:00', 'img_5518410e142bb.jp');

-- --------------------------------------------------------

--
-- Table structure for table `report_tbl`
--

CREATE TABLE IF NOT EXISTS `report_tbl` (
  `rid` int(30) NOT NULL AUTO_INCREMENT,
  `pname` varchar(40) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `tname` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `report_tbl`
--

INSERT INTO `report_tbl` (`rid`, `pname`, `dname`, `tname`, `image`, `create_date`) VALUES
(1, 'alauddin', 'jayeed', 'x-ray', 'img_5513a0cd4f8e6.jpg', '2015-03-26 00:00:00'),
(2, 'muzahid', 'muna', 'X-ray', 'img_551843ecd9330.jpg', '2015-03-29 00:00:00'),
(3, '', '9', 'X-ray', 'img_55184490c295f.jpg', '2015-03-29 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
