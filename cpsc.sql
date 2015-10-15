-- phpMyAdmin SQL Dump
-- version 2.8.0.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 19, 2006 at 11:38 PM
-- Server version: 5.0.21
-- PHP Version: 5.1.4
-- 
-- Database: `cpsc_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_fee`
-- 

CREATE TABLE `tbl_fee` (
  `fee_id` int(11) NOT NULL auto_increment,
  `level` varchar(20) default NULL,
  `fee_title` varchar(20) default NULL,
  `total_amount` int(11) default NULL,
  `effective_date` date default NULL,
  `ending_date` date default NULL,
  PRIMARY KEY  (`fee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `tbl_fee`
-- 

INSERT INTO `tbl_fee` VALUES (8, 'Primary', 'monthly pay', 123, '1976-01-27', '0000-00-00');
INSERT INTO `tbl_fee` VALUES (9, 'Secondary', 'yearly pay', 23, '1976-01-28', '0000-00-00');
INSERT INTO `tbl_fee` VALUES (10, 'College', 'first month pay', 234, '1976-01-28', '0000-00-00');
INSERT INTO `tbl_fee` VALUES (11, 'Primary', 'yearly pay', 234, '1977-02-28', '0000-00-00');
INSERT INTO `tbl_fee` VALUES (12, '', '', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_fee_amount`
-- 

CREATE TABLE `tbl_fee_amount` (
  `fee_id` int(11) NOT NULL,
  `fee_type_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tbl_fee_amount`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_fee_type`
-- 

CREATE TABLE `tbl_fee_type` (
  `fee_type_id` int(11) NOT NULL auto_increment,
  `type_title` varchar(30) default NULL,
  `fee_type` varchar(10) default NULL,
  PRIMARY KEY  (`fee_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `tbl_fee_type`
-- 

INSERT INTO `tbl_fee_type` VALUES (4, 'Admission', 'SINGLE');
INSERT INTO `tbl_fee_type` VALUES (5, 'Session', 'SINGLE');
INSERT INTO `tbl_fee_type` VALUES (6, 'new_field', 'SINGLE');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_multiple_fee`
-- 

CREATE TABLE `tbl_multiple_fee` (
  `fee_id` int(11) NOT NULL,
  `multiple_fee_id` int(11) default NULL,
  `single_fee_id` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tbl_multiple_fee`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_tution_book`
-- 

CREATE TABLE `tbl_tution_book` (
  `student_fee_id` int(11) NOT NULL auto_increment,
  `Admission` varchar(20) default NULL,
  `Session` varchar(20) default NULL,
  `new_field` varchar(20) default NULL,
  PRIMARY KEY  (`student_fee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tbl_tution_book`
-- 

