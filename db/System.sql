-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2013 at 02:11 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `System`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(14) NOT NULL AUTO_INCREMENT,
  `comment` varchar(300) NOT NULL,
  `Post_ID` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `Post_ID`) VALUES
(190, 'sadad', 33);

-- --------------------------------------------------------

--
-- Table structure for table `connect_tbl`
--

CREATE TABLE IF NOT EXISTS `connect_tbl` (
  `user_id` int(11) DEFAULT NULL,
  `quotes_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  KEY `user_id` (`user_id`),
  KEY `quotes_id` (`quotes_id`),
  KEY `contact_id` (`contact_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connect_tbl`
--

INSERT INTO `connect_tbl` (`user_id`, `quotes_id`, `contact_id`, `comment_id`) VALUES
(28, NULL, 60, NULL),
(28, NULL, 61, NULL),
(29, NULL, 62, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `pnumber` varchar(20) DEFAULT NULL,
  `tnumber` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `mname`, `lname`, `pnumber`, `tnumber`, `email`) VALUES
(60, 'Rubelyn', 'Daprosa', 'Solayao', '09469911457', 'none', 'success@me.com'),
(61, 'Ruby Ann ', 'Daprosa', 'Solayao', '09094561237', 'none', 'sister.com'),
(62, 'elizer', 'natal', 'rubrico', '09469545191', 'wala foe', 'elizerrubrico@yahoo.');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `quotes_id` int(14) NOT NULL AUTO_INCREMENT,
  `quotesText` text NOT NULL,
  `likeID` int(14) NOT NULL,
  PRIMARY KEY (`quotes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quotes_id`, `quotesText`, `likeID`) VALUES
(25, 'Being in-love with someone who doesnt want you is the worst feeling ever.', 3),
(26, ' I gave you my heart, thinking you loved me back, but I guess you just wanted to use it for a while then smash it. ', 4),
(27, ' I ''m tired of laughing when I want to cry, I''m tired of smiling when I want to die, I say I''m fine when I''m not, All I want is for the pain to stop. ', 5),
(28, 'Hurt is just another part of life. Eventually you pick yourself up, dust yourself off and learn to live with it and eventually see a brighter day.', 6),
(29, 'When your thoughts are too crowded and you can''t form the words, remember, tears are a language God truly understands.', 7),
(30, 'The only worse pain than DEPRESSION, is wondering if it will ever END.', 8),
(31, 'Never stop doing little things for others. Sometimes those little things occupy the biggest part of their hearts.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(28, 'student1', 'password', 'password.com.ph'),
(29, 'keme', 'keme', 'keme@yahoo.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `connect_tbl`
--
ALTER TABLE `connect_tbl`
  ADD CONSTRAINT `connect_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `connect_tbl_ibfk_10` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_11` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_12` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_13` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_14` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_15` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_16` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_17` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_18` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_2` FOREIGN KEY (`quotes_id`) REFERENCES `quotes` (`quotes_id`),
  ADD CONSTRAINT `connect_tbl_ibfk_3` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`),
  ADD CONSTRAINT `connect_tbl_ibfk_4` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`),
  ADD CONSTRAINT `connect_tbl_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_6` FOREIGN KEY (`quotes_id`) REFERENCES `quotes` (`quotes_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_7` FOREIGN KEY (`quotes_id`) REFERENCES `quotes` (`quotes_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_8` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connect_tbl_ibfk_9` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
