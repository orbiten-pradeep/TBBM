-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2017 at 01:27 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thebigbeachmarathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactid` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `website` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `msgtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `transactions_id` int(11) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `tickets` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `tshirt` varchar(255) DEFAULT NULL,
  `KM` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ID`, `transactions_id`, `txnid`, `tickets`, `fullname`, `tshirt`, `KM`, `gender`, `email`, `phone`, `Status`, `created`) VALUES
(3, 2, '3bd6685042c2f6867d1e', '1', 'Pradeep', 'XXL', '10KM', 'Male', 'pradeep.j@orbiten.in', '9677859889', 'failure', '2017-09-15 07:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `productinfo` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `unmappedstatus` varchar(255) DEFAULT NULL,
  `field9` varchar(255) DEFAULT NULL,
  `bank_ref_num` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`ID`, `users_id`, `firstname`, `email`, `txnid`, `amount`, `productinfo`, `hash`, `status`, `unmappedstatus`, `field9`, `bank_ref_num`, `phone`, `created`) VALUES
(2, NULL, 'Pradeep', 'pradeep.j@orbiten.in', '3bd6685042c2f6867d1e', '650', 'The Big Beah Marathon', 'ccae0b54d3d2d5a25eb75b4581c04c7c402e8dd43f3240ad13dd21cea5c02b2fe6ec19df5d1ff6a7ce3fa4dfb1f3cc199c52c173fc0565fe271fbb713af22f4f', 'failure', 'userCancelled', 'Cancelled by user', '163252506', '9677859889', '2017-09-15 00:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `active_code` varchar(200) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `Height` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Membership` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `profiile` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `email`, `password`, `role`, `active_code`, `DOB`, `Gender`, `ContactNumber`, `Height`, `Weight`, `Membership`, `userid`, `profiile`, `created`) VALUES
(1, 'Pradeep', 'Jeyachandran', 'pradeep.j@orbiten.in', '$2y$10$Z9iNQKoXi21giNpgtMQiD.oV6ZXWQ4pcPA4j5F94lIFfAdl57XWFy', 'User', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-15 00:26:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
