-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2010 at 09:23 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `biugerafi`
--

CREATE TABLE `biugerafi` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `biugerafi`
--

INSERT INTO `biugerafi` (`code`, `title`, `text`) VALUES
(1, 'Ø¨ÛŒÙˆÚ¯Ø±Ø§ÙÛŒ Ø¯ÛŒ Ø¬ÛŒ Ø¬Ù„ÛŒÙ„', 'ÛŒÙ‡ Ø¨Ú†Ù‡ Ú©ÙˆÙ† Ù¾Ø§Ø±Ù‡ Ú©Ù‡ Ù‡ÛŒÚ† Ø³Ø±Ø±Ø´ØªÙ‡ Ø§ÛŒ Ø§Ø² Ù…ÙˆØ³ÛŒÙ‚ÛŒ Ù†Ø¯Ø§Ø±Ø¯'),
(2, 'Ø¨ÛŒÙˆÚ¯Ø±Ø§ÙÛŒ Ø³Ø§Ø³ÛŒ Ù…Ø§Ù†Ú©Ù†', 'Ø³ÙˆØ³ÙˆÙ„ÛŒ Ø¨ÛŒØ´ Ù†ÛŒØ³Øª');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_me`
--

INSERT INTO `contact_me` (`code`, `address`, `tell`, `fax`, `mobile`, `email`) VALUES
(1, 'fhdgfsgfs', '6666666', '5555555', '09999999', 'sgsfhg6');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `kholase` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `mahsoul` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`code`, `title`, `name`, `pic`, `file`, `artist`, `director`, `kholase`, `size`, `mahsoul`) VALUES
(3, 'gfsfgs', 'fgsfgs', 'pic/film/4.jpg', 'film/Mehdi Moghaddarian - Parvandeh (Paein) [[WwW.Bia2Club.Com]].wmv', 'fgsfgs', 'fgs', 'fgsgfs', '0', 'fgs'),
(6, 'jhj', 'olljklj', 'pic/film/Nancy-Ajram205.jpg', 'film/20tmob7.jpg', 'jlkjkhklh', 'ljklj', 'pppppppp', '74723', 'kjkhkjbg');

-- --------------------------------------------------------

--
-- Table structure for table `massege`
--

CREATE TABLE `massege` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `massege` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `massege`
--

INSERT INTO `massege` (`code`, `name`, `massege`) VALUES
(1, 't', 't'),
(2, 'kir', ';kose nanat'),
(3, 'Ù†Ø§Ù…', 'Ù¾ÙŠØºØ§Ù…');

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
-- Table structure for table `modiriat`
--

CREATE TABLE `modiriat` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `modiriat`
--

INSERT INTO `modiriat` (`code`, `name`, `email`) VALUES
(1, 'Ø¨Ù‡Ø²Ø§Ø¯', 'b@b.com'),
(3, 'behzad', 'b@b.ll');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nazarsanji`
--

INSERT INTO `nazarsanji` (`code`, `question`, `test1`, `test2`, `test3`, `test4`) VALUES
(1, 'Ø¨Ù‡ØªØ±ÛŒÙ† Ø®ÙˆØ§Ù†Ù†Ø¯Ù‡ Ú©ÛŒØ³ØªØŸ', 'Ø¯ÛŒ Ø¬ÛŒ Ø¬Ù„ÛŒÙ„', 'Ø¨Ø§Ø±Ø²', 'Ø³Ø§Ø³ÛŒ Ù…Ø§Ù†Ú©Ù†', 'Ø®Ø±Ú†Ù†Ú¯');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`code`, `title`, `pic`, `file`) VALUES
(1, 'fgfgdghsd', 'pic/post/tornoment 2.jpg', 'post/The_Tournament_2009_moalefin_com.jpg'),
(2, 'ugtdfgsds', 'pic/post/20tmob7.jpg', 'post/7pk9e1hsisodkbsstmfc.jpg');

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
(1, 'Ø¯ÛŒ Ø¬ÛŒ Ø¬Ù„ÛŒÙ„'),
(1, 'Ø¨Ø§Ø±Ø²'),
(1, 'Ø³Ø§Ø³ÛŒ Ù…Ø§Ù†Ú©Ù†'),
(2, 'Ø®Ø±Ú†Ù†Ú¯');

-- --------------------------------------------------------

--
-- Table structure for table `sabt_music`
--

CREATE TABLE `sabt_music` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `moth` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `mtype` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sabt_music`
--

INSERT INTO `sabt_music` (`code`, `title`, `day`, `moth`, `year`, `mtype`, `file`, `pic`, `desc`, `size`) VALUES
(1, 'fgsfgs', '1', 'Ø®Ø±Ø¯Ø§Ø¯', '1389', 't_i', 'download/Blue hills.jpg', 'pic/upload_music/Sunset.jpg', 'sgfsgfs', '28521'),
(2, 'k;hklh', '1', 'Ø¢Ø°Ø±', '1389', 'a_i', 'download/Winter.jpg', 'pic/upload_music/Blue hills.jpg', ';lkjkl;h', '105542'),
(3, 'lkhklh', '1', 'Ø§Ø³ÙÙ†Ø¯', '1389', 'a_i', 'download/Sunset.jpg', 'pic/upload_music/Winter.jpg', 'klhklhgkl', '71189'),
(4, 'klhklh', '1', 'Ø§Ø±Ø¯ÛŒØ¨Ù‡Ø´Øª', '1389', 'a_i', 'download/Water lilies.jpg', 'pic/upload_music/Water lilies.jpg', 'hklhklh', '83794'),
(5, ';lkj', '1', 'Ù…Ù‡Ø±', '1389', 'a_i', 'download/Sunset.jpg', 'pic/upload_music/Sunset.jpg', ';lj;j', '71189'),
(6, 'ghdchgdg', '1', 'ÙØ±ÙˆØ±Ø¯ÛŒÙ†', '1389', 'a_i', 'download/03 - Dariush - Man Az To.mp3', 'pic/upload_download/Dariuush.jpg', 'ghdhgd', '0'),
(7, 'hjfgd', '11', 'Ø§Ø±Ø¯ÛŒØ¨Ù‡Ø´Øª', '1390', 't_i', 'download/07 - Dariush - Gheysar.mp3', 'pic/upload_music/Dariush.jpg', 'ghdsghsd', '0'),
(8, 'jhjjkgkj', '1', 'ÙØ±ÙˆØ±Ø¯ÛŒÙ†', '1389', 'f_a', 'download/07 - Dariush - Gheysar.mp3', 'pic/upload_music/Dariuush.jpg', 'gfdsd', '0'),
(9, 'ljkhkh', '1', 'ÙØ±ÙˆØ±Ø¯ÛŒÙ†', '1389', 'a_i', 'download/Neapolitan_soultion_ch(1,2,3).zip', 'pic/upload_music/', 'klhkljhjlg', '301809'),
(10, 'o', '1', 'ÙØ±ÙˆØ±Ø¯ÛŒÙ†', '1389', 'a_i', 'download/Winter.jpg', 'pic/upload_music/Water lilies.jpg', 'ooooooo', '105542'),
(11, 'ttt', '1', 'ÙØ±ÙˆØ±Ø¯ÛŒÙ†', '1389', 'm_v', 'download/Water lilies.jpg', 'pic/upload_music/Blue hills.jpg', 'eeeeeeeeee', '83794'),
(12, 'p', '1', 'ÙØ±ÙˆØ±Ø¯ÛŒÙ†', '1389', 'm_v', 'download/Winter.jpg', 'pic/upload_music/Water lilies.jpg', 'pppppppppppppp', '105542');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sabt_nam`
--

INSERT INTO `sabt_nam` (`code`, `name_karbari`, `pass`, `name`, `family`, `day`, `moth`, `year`, `sex`, `email`, `address`, `pic`) VALUES
(1, 'o', 'd95679752134a2d9eb61dbd7b91c4bcc', 'oo', NULL, NULL, NULL, NULL, 2, 'ooo', NULL, NULL),
(2, 'g', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 1, '1', 1360, 2, '', '', '../../pic/user/'),
(3, 'y', 'e358efa489f58062f10dd7316b65649e', 'y', NULL, NULL, NULL, NULL, 2, 't', NULL, NULL),
(4, 'i', '865c0c0b4ab0e063e5caa3387c1a8741', 'i', NULL, NULL, NULL, NULL, 2, 'i', NULL, NULL),
(5, 'u', '7b774effe4a349c6dd82ad4f4f21d34c', 'u', NULL, NULL, NULL, NULL, 2, 'u', NULL, NULL),
(6, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', NULL, NULL, NULL, NULL, 2, 'a', NULL, NULL),
(7, 'b', '415290769594460e2e485922904f345d', 'b', NULL, NULL, NULL, NULL, 2, 'b@b.ir', NULL, NULL),
(8, 'rr', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 1, '1', 1360, 2, 'r@r.com', '', '../../pic/user/'),
(9, '77', '8f14e45fceea167a5a36dedd4bea2543', '77', NULL, NULL, NULL, NULL, 2, '7@7.com', NULL, NULL),
(10, 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'q', NULL, NULL, NULL, NULL, 2, 'q@q.com', NULL, NULL),
(11, '88', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 1, '1', 1360, 2, 'e@e.com', '', '../../pic/user/');

-- --------------------------------------------------------

--
-- Table structure for table `tablighat`
--

CREATE TABLE `tablighat` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `pic` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tablighat`
--

INSERT INTO `tablighat` (`code`, `pic`, `name`, `link`) VALUES
(5, 'tabligh/agha dariysh.jpg', 'ÙˆØ¨Ø³Ø§ÛŒØª Ø¯Ø§Ø±ÛŒÙˆØ´', 'dariush2000.com');

-- --------------------------------------------------------

--
-- Table structure for table `type_music`
--

CREATE TABLE `type_music` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `type` varchar(255) NOT NULL,
  `mtype` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `type_music`
--

INSERT INTO `type_music` (`code`, `type`, `mtype`) VALUES
(1, 'Ø¢Ù„Ø¨ÙˆÙ… Ù‡Ø§ÛŒ Ø§ÛŒØ±Ø§Ù†ÛŒ', 'a_i'),
(2, 'Ø¢Ù„Ø¨ÙˆÙ… Ù‡Ø§ÛŒ Ø®Ø§Ø±Ø¬ÛŒ', 'a_k'),
(3, 'ØªÚ© Ø¢Ù‡Ù†Ú¯ Ù‡Ø§ÛŒ Ø§ÛŒØ±Ø§Ù†ÛŒ', 't_i'),
(4, 'ØªÚ© Ø¢Ù‡Ù†Ú¯ Ù‡Ø§ÛŒ Ø®Ø§Ø±Ø¬ÛŒ', 't_k'),
(5, 'Ù…ÙˆØ²ÛŒÚ© ÙˆÛŒØ¯Ø¦Ùˆ', 'm_v'),
(6, 'ÙÙˆÙ„ Ø¢Ù„Ø¨ÙˆÙ…', 'f_a');
