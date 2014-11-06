-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2014 at 12:38 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajax_chat`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `check`()
BEGIN
DECLARE I INT;
DECLARE cur CURSOR FOR SELECT id FROM chat_chats;

OPEN cur;

FETCH cur INTO I;

INSERT INTO auto_suggest(text) VALUES ('AA');

CLOSE cur;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `auto_suggest`
--

CREATE TABLE IF NOT EXISTS `auto_suggest` (
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto_suggest`
--

INSERT INTO `auto_suggest` (`text`) VALUES
('hello'),
('hi'),
('am'),
('is'),
('what'),
('why'),
('check'),
('AA'),
('AA'),
('AA'),
('AA'),
('DELETE'),
('message delete'),
('check'),
('AA'),
('AA'),
('AA'),
('AA'),
('AA'),
('DELETE'),
('message delete'),
('DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `chat_active`
--

CREATE TABLE IF NOT EXISTS `chat_active` (
  `user` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_active`
--

INSERT INTO `chat_active` (`user`, `time`, `id`) VALUES
('chandra shekhar', '1400330716', 4),
('chandan', '1400335514', 1);

--
-- Triggers `chat_active`
--
DROP TRIGGER IF EXISTS `hello`;
DELIMITER //
CREATE TRIGGER `hello` AFTER DELETE ON `chat_active`
 FOR EACH ROW INSERT INTO auto_suggest (text) VALUES ('DELETE')
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `chat_chats`
--

CREATE TABLE IF NOT EXISTS `chat_chats` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `text` varchar(1040) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `chat_chats`
--

INSERT INTO `chat_chats` (`id`, `user`, `time`, `text`) VALUES
(43, 'bambam', '1397406420', 'hello there'),
(44, 'chandan', '1397406434', 'hi how are you'),
(48, 'chandan', '1397449796', 'hi my name is '),
(49, 'nishant', '1397454100', 'hey there'),
(50, 'bambam1', '1397455009', 'hi'),
(51, 'chandra shekhar', '1397456997', 'me too'),
(53, 'chandan', '1397494364', 'Your program should report when there is a collision and must specify the position (starting at 1 for the 1st element) in the input list of that key value where the collision occurred. It should also report the bucket number and the number of entries in each bucket'),
(54, 'chandan', '1397494813', 'anything to say'),
(55, 'chandan', '1397494831', 'lets talk about heartbleed.'),
(56, 'bambam', '1397498882', 'hello'),
(57, 'bambam', '1397498916', 'Heart Bleed ?'),
(58, 'bambam', '1397498923', 'How muc??'),
(59, 'chandan', '1397505927', 'hello'),
(61, 'chandan', '1397506167', 'hi'),
(64, 'nishant', '1397506711', 'what about you'),
(65, 'chandan', '1397508401', 'hello'),
(66, 'chandan', '1397508408', 'again'),
(67, 'nishant', '1397508432', 'lets try'),
(68, 'nishant', '1397508564', 'one more time.'),
(69, 'nishant', '1397508574', 'do it again'),
(70, 'nishant', '1397508587', 'it works this time.'),
(71, 'nishant', '1397508926', 'not working.'),
(72, 'nishant', '1397508935', 'check again.'),
(73, 'nishant', '1397509193', 'check.'),
(74, 'nishant', '1397509213', 'working..'),
(75, 'chandan', '1397530981', 'how are you?'),
(76, 'nishant', '1397531247', 'whats down?'),
(77, 'nishant', '1397531258', 'whats down?'),
(78, 'nishant', '1397531290', 'a man is got to do wbat a man has got to do'),
(79, 'bambam', '1397534665', 'hello again.'),
(80, 'bambam', '1397534674', 'hello.'),
(81, 'chandan', '1397537705', 'hello'),
(82, 'chandra shekhar', '1397927170', 'hello'),
(83, 'chandra shekhar', '1397927216', 'heello'),
(84, 'chandra shekhar', '1397927218', ''),
(85, 'chandra shekhar', '1397927218', ''),
(86, 'chandra shekhar', '1397927219', ''),
(88, 'chandan', '1397927327', 'blank'),
(89, 'chandan', '1397927337', 'kyun bhej rha hai?'),
(92, 'chandra shekhar', '1397927683', 'aaja mere bhai '),
(95, 'chandra shekhar', '1397928501', 'heloooo'),
(96, 'chandra shekhar', '1397928512', ''),
(97, 'chandra shekhar', '1397928549', 'heloooo'),
(98, 'chandra shekhar', '1397928834', 'helooooooo'),
(102, 'bambam', '1398144919', 'hello'),
(103, 'bambam', '1398244069', 'aa'),
(104, 'bambam', '1398244341', 'check'),
(105, 'bambam', '1398244349', 'working yeah.'),
(106, 'bambam', '1398244406', 'check again.'),
(107, 'nishant', '1398702676', 'hello.'),
(108, 'nishant', '1398703348', ' China buries over 100 stray dogs alive, triggers massive online outrage .'),
(109, 'bambam', '1398706675', ' Ahmedabad FIR against Ramdev under SCST act .'),
(110, 'deo', '1399579595', 'no fir no arres no talk.'),
(111, 'chandan', '1400330197', 'hello.'),
(112, 'chandan', '1400330762', 'check there.'),
(113, 'chandra shekhar', '1400330785', 'where r u.'),
(114, 'chandra shekhar', '1400330820', 'r u okok.');

--
-- Triggers `chat_chats`
--
DROP TRIGGER IF EXISTS `pp`;
DELIMITER //
CREATE TRIGGER `pp` AFTER DELETE ON `chat_chats`
 FOR EACH ROW INSERT INTO auto_suggest( text )
VALUES (
'message delete'
)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE IF NOT EXISTS `chat_users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(55) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`userid`, `user`, `password`, `email`, `role`) VALUES
(1, 'chandan', 'chandan', 'chandan2495@gmail.com', 'user'),
(3, 'nishant', 'nishu', 'leonishant@gmail.com', 'user'),
(4, 'chandra shekhar', 'chandra', 'shekhar@gmail.com', 'user'),
(5, 'bambam', 'bambam', 'bambam@gmail.com', 'user'),
(6, 'prince', 'prince', 'prince@gmail.com', 'user'),
(7, 'bambam1', 'bambam', 'bambam@gmai.com', 'user'),
(8, 'deo', 'deo', 'bnm@df.hyg', 'user'),
(10, 'new', 'new', 'new@gmail.com', 'user'),
(12, 'sunil', 'sunil', 'sunil@gmail.com', 'user');

--
-- Triggers `chat_users`
--
DROP TRIGGER IF EXISTS `check`;
DELIMITER //
CREATE TRIGGER `check` AFTER INSERT ON `chat_users`
 FOR EACH ROW insert into auto_suggest (text) values ('check')
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
