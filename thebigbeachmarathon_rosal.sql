-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2017 at 10:46 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thebigbeachmarathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `website` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `msgtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contactid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `firstname`, `email`, `website`, `message`, `msgtime`) VALUES
(1, 'roslin', 'roslin.albert@gmail.com', '987654321', 'ghgsdh', '2017-10-10 10:11:04'),
(2, 'roslin', 'roslin.albert@gmail.com', '987654321', 'ghgsdh', '2017-10-10 10:15:28'),
(3, 'roslin', 'roslin.albert@gmail.com', '987654321', 'ghgsdh', '2017-10-10 10:18:09'),
(4, 'roslin', 'roslin.albert@gmail.com', '987654321', 'ghgsdh', '2017-10-10 10:18:43'),
(5, 'roslin', 'roslin.albert@gmail.com', '987654321', 'ghgsdh', '2017-10-10 10:20:16'),
(6, 'lilly', 'pradeep@orbiten.in', '8786757565', 'm ,m', '2017-10-10 10:28:15'),
(7, 'lilly', 'pradeep@orbiten.in', '8786757565', 'm ,m', '2017-10-10 10:29:46'),
(8, 'lilly', 'pradeep@orbiten.in', '8786757565', 'm ,m', '2017-10-10 10:30:05'),
(9, 'lilly', 'pradeep@orbiten.in', '8786757565', 'm ,m', '2017-10-10 10:32:45'),
(10, 'lilly', 'pradeep@orbiten.in', '8786757565', 'm ,m', '2017-10-10 10:34:38'),
(11, 'vasanthaprakash', 'vidhimangal.v@gmail.com', '95655666565656', ' n n n', '2017-10-10 10:35:07'),
(12, 'vasanthaprakash', 'vidhimangal.v@gmail.com', '95655666565656', ' n n n', '2017-10-10 10:39:47'),
(13, 'vasanthaprakash', 'vidhimangal.v@gmail.com', '95655666565656', ' n n n', '2017-10-10 10:40:18'),
(14, 'Roslin', 'pradeep@orbiten.in', '54546464', 'nvbzn', '2017-10-10 11:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ID`, `transactions_id`, `txnid`, `tickets`, `fullname`, `tshirt`, `KM`, `gender`, `email`, `phone`, `Status`, `created`) VALUES
(2, 3, '3bd6685042c2f6867d1e', '2', 'Roslin', 'M', '21.1KM', 'female', 'roslin.albert@gmail.com', '804515547', 'success', '2017-09-16 09:03:53'),
(3, 2, '3bd6685042c2f6867d1e', '1', 'Pradeep', 'XXL', '10KM', 'Male', 'pradeep.j@orbiten.in', '9677859889', 'failure', '2017-09-15 07:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
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
  `paygatestatus` varchar(255) DEFAULT NULL,
  `bank_ref_num` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`ID`, `users_id`, `firstname`, `email`, `txnid`, `amount`, `productinfo`, `hash`, `status`, `unmappedstatus`, `paygatestatus`, `bank_ref_num`, `phone`, `created`) VALUES
(2, NULL, 'Pradeep', 'pradeep.j@orbiten.in', '3bd6685042c2f6867d1e', '650', 'The Big Beah Marathon', 'ccae0b54d3d2d5a25eb75b4581c04c7c402e8dd43f3240ad13dd21cea5c02b2fe6ec19df5d1ff6a7ce3fa4dfb1f3cc199c52c173fc0565fe271fbb713af22f4f', 'failure', 'userCancelled', 'Cancelled by user', '163252506', '9677859889', '2017-09-15 00:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `Status` int(10) NOT NULL,
  `active_code` varchar(200) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `Height` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Membership` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `email`, `password`, `role`, `Status`, `active_code`, `DOB`, `Gender`, `ContactNumber`, `Height`, `Weight`, `Membership`, `userid`, `profile`, `created`) VALUES
(1, 'Pradeep', 'Jeyachandran', 'pradeep.j@orbiten.in', '$2y$10$lgtlR.Vq49MzEA2sZjxlK.zWWpSkkGG57MGJ94hU0j3DV9l/MA1Sm', 'User', 1, '', NULL, NULL, NULL, NULL, NULL, '', NULL, '1506080184environment.jpg', '2017-09-15 00:26:39'),
(2, 'roslin', 'a', 'roslin.albert@gmail.com', '$2y$10$lgtlR.Vq49MzEA2sZjxlK.zWWpSkkGG57MGJ94hU0j3DV9l/MA1Sm', 'Admin', 2, ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1506080193images.jpggfvgh.jpg', '2017-09-16 14:29:32'),
(3, 'lilly roslin', 'A', 'roslina558@yahoo.com', '$2y$10$D7v55yiAx5tIf6yaUgGwmeJhXol7gMy5vusrJrkCHKBAM84TbJgUO', 'User', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1507360923IMG-20170512-WA0007.jpg', '2017-09-20 11:11:13'),
(8, 'vasanthaprakash', 'Chandrasekaran', 'vasanth1407@gmail.com', '$2y$10$Y9CHK21h5izDwnQC08Xf0eS0LgQc8YEbItLCGi/H6psQuR0DaQhB2', 'Admin', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-26 12:04:01'),
(9, 'roslin', 'a', 'rosalbert1994@yahoo.com', '$2y$10$yQuPzxm1zx61BRA6qpEVyOSmFrZzy2RhUgGBUXRoLMGdZooU6PsPG', 'Admin', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-26 17:18:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
