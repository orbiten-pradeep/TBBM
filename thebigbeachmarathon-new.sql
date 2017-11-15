-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2017 at 03:15 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `website` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `msgtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `firstname`, `email`, `website`, `message`, `msgtime`) VALUES
(1, 'roslin', 'roslin.albert@gmail.com', 'lkjhgf', 'gfggh', '2017-09-02 06:11:13'),
(2, 'roslin', 'roslin.albert@gmail.com', 'lkjhgf', 'gfggh', '2017-09-02 06:12:59'),
(3, 'roslin', 'roslin.albert@gmail.com', 'lkjhgf', 'gfggh', '2017-09-02 06:13:03'),
(4, 'roslin', 'roslin.albert@gmail.com', '8786757565', 'kljhgfgvbnb', '2017-09-04 12:29:36'),
(5, 'vasanthaprakash', 'vasanth1407@gmail.com', '9566192227', 'ffgsfdgshf', '2017-09-05 10:52:11'),
(6, 'vasanthaprakash', 'vasanth1407@gmail.com', '9566192227', 'sdfsgd', '2017-09-05 10:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
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
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `Height` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Membership` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `groups` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `email`, `password`, `DOB`, `Gender`, `ContactNumber`, `Height`, `Weight`, `Membership`, `blood`, `role`, `groups`, `userid`, `profile`, `created`) VALUES
(1, 'roslin', 'a', 'roslin.albert@gmail.com', '$2y$10$qnTfohNI0b/NylYCquddyuRav81B3FFPJJhPKHKWyfyGCPPXpKt5y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'User', NULL, NULL, NULL, '2017-09-05 11:14:31'),
(2, 'lilly', 'a', 'roslina558@yahoo.com', '$2y$10$rTRu8rROKCk4vFfPhyKnL.gJV6E.Q5v8F9Yk053A7nWrXH.C8KXWm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', NULL, NULL, NULL, '2017-09-05 11:14:59'),
(3, 'vasanthaprakash', 'chandrasekaran', 'vasanth1407@gmail.com', '$2y$10$djChbVGjO9HsS5YDVH/Uteg.MP6yH3C.jL7Ra7ufq8omZ3LqerFe6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'User', NULL, NULL, NULL, '2017-09-05 16:26:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
