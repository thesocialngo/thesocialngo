-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2016 at 06:31 AM
-- Server version: 5.6.29
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rojgarti_ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) NOT NULL,
  `item` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `upload_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `image`, `item`, `name`, `location`, `phone`, `state`, `city`, `description`, `upload_date`) VALUES
(1, 'CB18-RAIN2_1241236g4.jpg', 'testing1', 'ramesh', 'rajasthan', '1234567890', '', 'Gurgoan', 'Sample content for testing.', '2016-03-05'),
(6, 'Hydrangeas2.jpg', 'item', 'testing', 'pickup location', '7865249788', '-------', 'sikar', 'description', '2016-03-08'),
(7, 'Koala4.jpg', 'item test', 'vikas', 'pickup location', '9782324336', 'rajasthan', 'delhi', 'descrtion test', '2016-03-10'),
(8, 'logo3.png', 'shirt', 'vikram singh', 'bhadae', '9384384884', 'rajasthan', 'bhadra', 'Social services by the social NGO', '2016-03-10'),
(9, 'Presentation1.pptx', 'Hello', 'Prateek Bajpai', 'Gali no 4', '9999999', 'Maryland', 'Baltimore', 'Hello', '2016-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE IF NOT EXISTS `business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `item` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `landmark` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `upload_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `image`, `item`, `phone`, `name`, `state`, `city`, `landmark`, `location`, `description`, `upload_date`) VALUES
(1, 'Street-kids-Girls-in-hunger-India4.jpg', 'item', '1234567890', 'name', '------', 'Lukhnow', 'landmark', '', 'Sample content for testing.', '2016-03-05'),
(3, 'Penguins2.jpg', 'dsfds', '9782324336', 'Corina', 'sadfsadas', 'sikar', 'landmark', '', 'sdfdsf', '2016-03-08'),
(4, 'logo.png', 'shirts', '98238338842', 'vikram singh', 'rajasthan', 'jaipur', '202 collection', '', '98238338842', '2016-03-10'),
(5, 'Untitled-1_copy.png', 'Balanket', '9882243823', 'vikram singh', 'rajasthan', 'hanumangarh', 'bhadra', '', 'social service', '2016-03-10'),
(6, 'humunity_bazar.png', 'bhadra', '7865249788', 'Carla', 'rajasthan', 'sikar', '202 collection', '202 collection', '7865249788', '2016-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Social'),
(2, 'Finance'),
(3, 'Health & Fitness'),
(4, 'Sports'),
(5, 'Transportation'),
(6, 'Music'),
(7, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE IF NOT EXISTS `contact_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `downloads_by_user`
--

CREATE TABLE IF NOT EXISTS `downloads_by_user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `download_by` int(50) NOT NULL,
  `app_id` int(50) NOT NULL,
  `download_on` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `downloads_by_user`
--

INSERT INTO `downloads_by_user` (`id`, `download_by`, `app_id`, `download_on`) VALUES
(1, 33, 12, ''),
(2, 33, 10, ''),
(3, 34, 7, ''),
(4, 33, 12, '2016-02-17'),
(5, 33, 9, '17-02-2016'),
(6, 33, 12, '18-02-2016'),
(7, 33, 10, '18-02-2016'),
(8, 33, 10, '19-02-2016');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `registration_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `gender`, `email`, `password`, `dob`, `contact`, `country`, `registration_date`) VALUES
(1, 'Shubham', 'Mathur', 'male', 'mathurshubham12@gmail.com', '2da23ffd13bafe0b19c3c1541749e04c', '12-04-1995', '9828205730', 'India', '2016-03-05'),
(2, 'Anjani', 'Sharma', 'male', 'anjani.kumarsharma08@gmail.com', '3dc1e4c3bc5b2ae63520627ea44df7fd', '12-04-1995', '9828205730', 'India', '2016-03-05'),
(3, 'vikram', 'singh', 'male', 'vikram@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '18/11/1994', '9782324336', 'India', '2016-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `register_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `register_id`, `username`, `password`, `status`) VALUES
(1, 1, 'mathurshubham12@gmail.com', '2da23ffd13bafe0b19c3c1541749e04c', '0'),
(2, 2, 'anjani.kumarsharma08@gmail.com', '3dc1e4c3bc5b2ae63520627ea44df7fd', '0'),
(3, 3, 'vikram@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`) VALUES
(3, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
