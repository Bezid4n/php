-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2009 at 08:27 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `wildlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `animal` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`code`, `animal`) VALUES
(1, ''),
(2, 'Ø¨Ø¨Ø±'),
(3, 'Ø´ÛŒØ±'),
(4, 'Ù¾Ù„Ù†Ú¯'),
(5, 'Ù„Ø§Ú© Ù¾Ø´Øª');

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `address` varchar(255) NOT NULL,
  `tell` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact_me`
--


-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `pic` text NOT NULL,
  `file` text NOT NULL,
  `size` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `download`
--


-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `galery`
--


-- --------------------------------------------------------

--
-- Table structure for table `modir`
--

CREATE TABLE `modir` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `user_name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `modir`
--

INSERT INTO `modir` (`code`, `user_name`, `pass`) VALUES
(1, 'modir', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `nazarsanji`
--

CREATE TABLE `nazarsanji` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `question` varchar(255) NOT NULL,
  `test1` varchar(255) NOT NULL,
  `test2` varchar(255) NOT NULL,
  `test3` varchar(255) NOT NULL,
  `test4` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nazarsanji`
--

INSERT INTO `nazarsanji` (`code`, `question`, `test1`, `test2`, `test3`, `test4`) VALUES
(1, 'Ù†Ø¸Ø± Ø´Ù…Ø§ Ø¯Ø± Ù…ÙˆØ±Ø¯ ÙˆØ¨Ø³Ø§ÛŒØª Ø­ÛŒØ§Øª ÙˆØ­Ø´ Ø§ÛŒØ±Ø§Ù† Ú†ÛŒØ³ØªØŸ', 'Ø¹Ø§Ù„ÛŒ', 'Ø®ÙˆØ¨', 'Ù…ØªÙˆØ³Ø·', 'Ø¨Ø¯'),
(2, 'Ù†Ø¸Ø± Ø´Ù…Ø§ Ø¯Ø± Ù…ÙˆØ±Ø¯ ÙˆØ¨Ø³Ø§ÛŒØª Ø­ÛŒØ§Øª ÙˆØ­Ø´ Ø§ÛŒØ±Ø§Ù† Ú†ÛŒØ³ØªØŸ', 'Ø¹Ø§Ù„ÛŒ', 'Ø®ÙˆØ¨', 'Ù…ØªÙˆØ³Ø·', 'Ø¨Ø¯');

-- --------------------------------------------------------

--
-- Table structure for table `nejad_animal`
--

CREATE TABLE `nejad_animal` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `nejad` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nejad_animal`
--

INSERT INTO `nejad_animal` (`code`, `nejad`) VALUES
(1, ''),
(2, 'Ø¢Ø³ÛŒØ§ÛŒÛŒ'),
(3, 'Ø¢ÙØ±ÛŒÙ‚Ø§ÛŒÛŒ'),
(4, 'Ø§Ø±ÙˆÙ¾Ø§ÛŒÛŒ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) character set ucs2 collate ucs2_persian_ci NOT NULL,
  `date` varchar(255) character set ucs2 collate ucs2_persian_ci NOT NULL,
  `pic` text character set ucs2 collate ucs2_persian_ci,
  `text` longtext character set ucs2 collate ucs2_persian_ci NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `ostan`
--

CREATE TABLE `ostan` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `ostan` varchar(255) character set utf8 collate utf8_persian_ci NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `ostan`
--

INSERT INTO `ostan` (`code`, `ostan`) VALUES
(1, 'Ø¢Ø°Ø±Ø¨Ø§ÛŒØ¬Ø§Ù† Ø´Ø±Ù‚ÛŒ'),
(2, 'Ø¢Ø°Ø±Ø¨Ø§ÛŒØ¬Ø§Ù† ØºØ±Ø¨ÛŒ'),
(3, 'Ø§Ø±Ø¯Ø¨ÛŒÙ„'),
(4, 'Ø§ØµÙÙ‡Ø§Ù†'),
(5, 'Ø§ÛŒÙ„Ø§Ù…'),
(6, 'Ø¨ÙˆØ´Ù‡Ø±'),
(7, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø±Ø¶ÙˆÛŒ'),
(8, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø´Ù…Ø§Ù„ÛŒ'),
(9, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø¬Ù†ÙˆØ¨ÛŒ'),
(10, 'Ù‡Ù…Ø¯Ø§Ù†'),
(11, 'Ù‡Ø±Ù…Ø²Ú¯Ø§Ù†'),
(12, 'Ù‚Ø²ÙˆÛŒÙ†'),
(13, 'Ù‚Ù…'),
(14, 'ØªÙ‡Ø±Ø§Ù†'),
(15, 'ÛŒØ²Ø¯'),
(16, 'Ú©Ø±Ù…Ø§Ù†'),
(17, 'Ú©Ø±Ù…Ø§Ù†Ø´Ø§Ù‡'),
(18, 'Ø³ÛŒØ³ØªØ§Ù† Ùˆ Ø¨Ù„ÙˆÚ†Ø³ØªØ§Ù†'),
(19, 'Ú†Ù‡Ø§Ø±Ù…Ø­Ø§Ù„ Ùˆ Ø¨Ø®ØªÛŒØ§Ø±ÛŒ'),
(20, 'Ú©Ù‡Ú¯ÛŒÙ„ÙˆÛŒÙ‡ Ùˆ Ø¨ÙˆÛŒØ±Ø§Ø­Ù…Ø¯'),
(21, 'Ù„Ø±Ø³ØªØ§Ù†'),
(22, 'Ù…Ø±Ú©Ø²ÛŒ'),
(23, 'Ú©Ø±Ø¯Ø³ØªØ§Ù†'),
(24, 'Ú¯ÛŒÙ„Ø§Ù†'),
(25, 'Ú¯Ù„Ø³ØªØ§Ù†'),
(26, 'Ù…Ø§Ø²Ù†Ø¯Ø±Ø§Ù†'),
(27, 'Ø²Ù†Ø¬Ø§Ù†'),
(28, 'ÙØ§Ø±Ø³'),
(29, 'Ø³Ù…Ù†Ø§Ù†'),
(30, 'Ø®ÙˆØ²Ø³ØªØ§Ù†');

-- --------------------------------------------------------

--
-- Table structure for table `result_nazar`
--

CREATE TABLE `result_nazar` (
  `num` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_nazar`
--

INSERT INTO `result_nazar` (`num`, `title`) VALUES
(3, 'Ø¹Ø§Ù„ÛŒ'),
(1, 'Ø®ÙˆØ¨'),
(1, 'Ù…ØªÙˆØ³Ø·'),
(1, 'Ø¨Ø¯');

-- --------------------------------------------------------

--
-- Table structure for table `sabt_nam`
--

CREATE TABLE `sabt_nam` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `name_karbari` varchar(255) character set utf8 collate utf8_persian_ci NOT NULL,
  `pass` varchar(255) character set utf8 collate utf8_persian_ci NOT NULL,
  `name` varchar(255) character set utf8 collate utf8_persian_ci default NULL,
  `family` varchar(255) character set utf8 collate utf8_persian_ci default NULL,
  `day` int(11) default NULL,
  `moth` varchar(255) character set utf8 collate utf8_persian_ci default NULL,
  `year` int(11) default NULL,
  `sex` tinyint(2) default NULL,
  `email` varchar(255) character set utf8 collate utf8_persian_ci default NULL,
  `address` varchar(255) character set utf8 collate utf8_persian_ci default NULL,
  `pic` text,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sabt_nam`
--

INSERT INTO `sabt_nam` (`code`, `name_karbari`, `pass`, `name`, `family`, `day`, `moth`, `year`, `sex`, `email`, `address`, `pic`) VALUES
(1, 'r', '4b43b0aee35624cd95b910189b3dc231', '', '', 1, '1', 1360, 2, '', '', '../../pic/user/'),
(2, 'oo', 'd95679752134a2d9eb61dbd7b91c4bcc', '', '', 1, '1', 1360, 2, '', '', '../../pic/user/');

-- --------------------------------------------------------

--
-- Table structure for table `tablighat`
--

CREATE TABLE `tablighat` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `pic` text NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tablighat`
--


-- --------------------------------------------------------

--
-- Table structure for table `type_animal`
--

CREATE TABLE `type_animal` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `type_animal`
--

INSERT INTO `type_animal` (`code`, `type`) VALUES
(1, ''),
(2, 'Ù¾Ø³ØªØ§Ù†Ø¯Ø§Ø±'),
(3, 'ØªØ®Ù…Ú¯Ø°Ø§Ø±'),
(4, 'Ø¯ÙˆØ²ÛŒØ³Øª');

-- --------------------------------------------------------

--
-- Table structure for table `wildlife`
--

CREATE TABLE `wildlife` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `code_ostan` int(10) unsigned NOT NULL,
  `code_animal` int(10) unsigned NOT NULL,
  `code_type` int(10) unsigned default NULL,
  `code_nejad` int(10) unsigned default NULL,
  `pic` text,
  `sen` int(11) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wildlife`
--

INSERT INTO `wildlife` (`code`, `code_ostan`, `code_animal`, `code_type`, `code_nejad`, `pic`, `sen`) VALUES
(1, 19, 2, 2, 2, 'pic/animal/3.bmp', 2),
(2, 15, 3, 2, 2, 'pic/animal/8.JPG', 2);
