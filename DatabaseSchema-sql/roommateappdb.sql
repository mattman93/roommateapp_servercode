-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2016 at 03:01 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roommateappdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Announcements`
--

CREATE TABLE IF NOT EXISTS `Announcements` (
  `id` int(11) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `usersName` varchar(63) NOT NULL,
  `groupId` int(11) NOT NULL,
  `DatePosted` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Announcements`
--

INSERT INTO `Announcements` (`id`, `Message`, `usersName`, `groupId`, `DatePosted`) VALUES
(0, 'package arriving at 2, its an A', 'Albie', 1, '2011-11-15'),
(1, 'Testing....1, 2, 3, ...', 'Albie', 1, '2015-11-11'),
(3, 'Package arriving at 2, its an A.', 'Albie', 1, '2015-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `Bills`
--

CREATE TABLE IF NOT EXISTS `Bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_creator` varchar(155) NOT NULL,
  `assigned_to` varchar(155) NOT NULL,
  `group_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `desc` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `Bills`
--

INSERT INTO `Bills` (`id`, `bill_creator`, `assigned_to`, `group_id`, `amount`, `desc`) VALUES
(14, 'Greco', 'Greco', 0, 6, 'grocery check out'),
(15, 'Albie', 'Greco', 0, 6, 'grocery check out'),
(16, 'Matt', 'Greco', 0, 6, 'grocery check out'),
(61, 'Matt', 'Albie', 1, 400, 'Rent'),
(62, 'Greco', 'Albie', 1, 400, 'Rent'),
(63, 'Greco', 'Albie', 1, 30, 'electric'),
(65, 'Matt', 'Albie', 1, 30, 'electric'),
(66, 'Matt', 'Albie', 1, 42, 'water'),
(67, 'Greco', 'Albie', 1, 42, 'water');

-- --------------------------------------------------------

--
-- Table structure for table `Chores`
--

CREATE TABLE IF NOT EXISTS `Chores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `assigned_to` varchar(155) NOT NULL,
  `point_val` int(11) NOT NULL,
  `posted_by` varchar(155) NOT NULL,
  `completed_by` varchar(155) NOT NULL,
  `groupid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `Chores`
--

INSERT INTO `Chores` (`id`, `name`, `desc`, `assigned_to`, `point_val`, `posted_by`, `completed_by`, `groupid`) VALUES
(14, 'bathroom', 'it smells', ' Matt', 0, 'Greco', '', 1),
(18, 'Sweep', 'cause', ' Matt', 0, 'Greco', '', 1),
(19, 'mop', 'the basement', ' Greco', 0, 'Greco', '', 1),
(20, 'paint', 'the garage', ' Matt', 0, 'Greco', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Grocery_bills`
--

CREATE TABLE IF NOT EXISTS `Grocery_bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_id` int(11) NOT NULL,
  `grocery_item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Grocery_item`
--

CREATE TABLE IF NOT EXISTS `Grocery_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(155) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dateRequested` varchar(100) NOT NULL,
  `datePurchased` varchar(100) NOT NULL,
  `isPurchased` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `requestUser` varchar(100) NOT NULL,
  `purchaseUser` varchar(100) NOT NULL,
  `groupid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `Grocery_item`
--

INSERT INTO `Grocery_item` (`id`, `item_name`, `quantity`, `dateRequested`, `datePurchased`, `isPurchased`, `cost`, `requestUser`, `purchaseUser`, `groupid`) VALUES
(2, 'bread', 1, '11/1/2015', '11/2/2015', 'true', 3, 'Matt', 'Greco', 1),
(3, 'eggs', 1, '10/30/2015', '10/31/2015', 'true', 4, 'Testuser', 'Greco', 1),
(5, 'apples', 3, 'Tue Nov 10 13:41:05 EST 2015', '', 'false', 0, 'Albie', '', 0),
(6, 'chicken ', 1, 'Tue Nov 10 13:43:13 EST 2015', '', 'false', 0, 'Albie', '', 0),
(7, 'banana', 2, 'Tue Nov 10 15:20:09 EST 2015', '', 'false', 0, 'Greco', '', 0),
(10, 'pinapple', 2, 'Tue Nov 10 16:03:41 EST 2015', '', 'true', 0, 'Greco', '', 1),
(11, 'poptarts', 1, 'Tue Nov 10 16:06:29 EST 2015', '', 'true', 0, 'Greco', 'Greco', 1),
(13, 'waffle', 2, 'Tue Nov 10 16:10:22 EST 2015', '', 'true', 0, 'Greco', '', 1),
(14, 'Milk', 1, 'Wed Nov 11 13:08:35 EST 2015', '', 'true', 0, 'Greco', 'Greco', 1),
(15, 'Milk', 1, 'Wed Nov 11 13:08:51 EST 2015', '', 'true', 0, 'Greco', 'Albie', 1),
(16, 'Chicken', 1, 'Wed Nov 11 13:19:51 EST 2015', '', 'true', 0, 'Greco', 'Albie', 1),
(17, 'pancakes', 2, 'Wed Nov 11 13:19:58 EST 2015', '', 'true', 0, 'Greco', 'Greco', 1),
(18, 'apple', 1, 'Wed Nov 11 13:34:30 EST 2015', '', 'true', 0, 'Greco', 'Greco', 1),
(19, 'ham', 4, 'Wed Nov 11 14:02:17 EST 2015', '', 'false', 0, 'Albie', '', 1),
(20, 'papiya', 2, 'Fri Nov 13 15:50:53 EST 2015', '', 'false', 0, 'Greco', '', 1),
(22, 'Bread', 2, 'Mon Nov 30 11:01:58 EST 2015', '', 'false', 0, 'Albie', '', 1),
(23, 'Chicken', 1, 'Mon Nov 30 13:30:04 EST 2015', '', 'false', 0, 'Albie', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Groups`
--

CREATE TABLE IF NOT EXISTS `Groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(155) NOT NULL,
  `house_nick_name` varchar(155) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Groups`
--

INSERT INTO `Groups` (`id`, `address`, `house_nick_name`, `user_id`) VALUES
(1, '201 Mullica Hill Road, Glassoboro, NJ 08028', 'The Roomie''s House', 1),
(2, '123 tester street', 'test house', 17);

-- --------------------------------------------------------

--
-- Table structure for table `Maintenance_bills`
--

CREATE TABLE IF NOT EXISTS `Maintenance_bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maintenance_item` varchar(155) NOT NULL,
  `bill_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Maintenance_item`
--

CREATE TABLE IF NOT EXISTS `Maintenance_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) NOT NULL,
  `causingUser` varchar(155) NOT NULL,
  `purchaseUser` varchar(155) NOT NULL,
  `isComplete` varchar(155) NOT NULL DEFAULT 'false',
  `groupid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Maintenance_item`
--

INSERT INTO `Maintenance_item` (`id`, `desc`, `causingUser`, `purchaseUser`, `isComplete`, `groupid`) VALUES
(4, 'broken light. Need new candle light bulb', 'Greco', '', 'false', 0),
(11, 'lampshade. Need new Lampshade.', 'Greco', '', '', 1),
(12, 'Broken Light bulb. Need new light bulb.', 'Matt', '', '', 1),
(13, 'broke the oven. need to oven handle.', 'Matt', '', '', 1),
(14, 'cheese grater broke', 'Matt', '', '0', 1),
(15, 'broke a window', 'Albie', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Payments`
--

CREATE TABLE IF NOT EXISTS `Payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` int(11) NOT NULL,
  `payer_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(155) NOT NULL,
  `last_name` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `group_id` int(11) NOT NULL,
  `is_house_manager` tinyint(1) NOT NULL,
  `DeviceId` varchar(255) NOT NULL,
  `Points` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `first_name`, `last_name`, `password`, `email`, `phone_number`, `group_id`, `is_house_manager`, `DeviceId`, `Points`) VALUES
(1, 'Matt', 'Cieslak', 'pass', 'cieslakm0@students.rowan.edu', '9085900741', 1, 1, '', 25),
(2, 'Albie', 'Rynkiewicz', 'pass', 'rynkie18@students.rowan.edu', '7326420606', 1, 0, '87d4214e8986c719', 50),
(3, 'Greco', 'Grecenberg', 'pass', 'grecoa66@students.rowan.edu', '7325559099', 1, 0, '3F4E05043D09A8C3', 10),
(17, 'test', 'user', '123', 'test@test.com', '5555555555', 2, 0, '12345d', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
