-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2011 at 03:31 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `gsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `text` longtext NOT NULL,
  `hulf_txt` varchar(100) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `about_me`
--


-- --------------------------------------------------------

--
-- Table structure for table `baner`
--

CREATE TABLE `baner` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `pic` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `baner`
--

INSERT INTO `baner` (`code`, `pic`, `title`, `link`) VALUES
(6, 'pic/baner/Sunset.jpg', 'fghhhhhhhhhh', 'google.com');

-- --------------------------------------------------------

--
-- Table structure for table `barasi`
--

CREATE TABLE `barasi` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `date` date NOT NULL,
  `hulf_text` varchar(150) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `barasi`
--

INSERT INTO `barasi` (`code`, `title`, `pic`, `text`, `date`, `hulf_text`) VALUES
(2, 'ghdghsdhfs', 'pic/upload_barasi/Sunset.jpg', 'ghdhgsdfs', '2011-02-23', 'ghdhgsdfs'),
(3, 'jkgfhrhgd', 'pic/upload_barasi/Blue hills.jpg', 'jhdfgdghs', '2011-02-23', 'jhdfgdghs'),
(4, 'ghdhgd', 'pic/upload_barasi/Water lilies.jpg', 'hgdghd', '2011-02-25', 'hgdghd'),
(5, 'hgdhgd', 'pic/upload_barasi/Blue hills.jpg', 'ghdghd', '2011-02-25', 'ghdghd');

-- --------------------------------------------------------

--
-- Table structure for table `battry_mob`
--

CREATE TABLE `battry_mob` (
  `cod_mob` int(11) NOT NULL,
  `battry` varchar(255) NOT NULL,
  `time_mokaleme` varchar(255) NOT NULL,
  `time_janeshin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `battry_mob`
--

INSERT INTO `battry_mob` (`cod_mob`, `battry`, `time_mokaleme`, `time_janeshin`) VALUES
(0, 'jkg', 'kjg', 'jkgf'),
(8, 'yryr', 'yuryur', 'yuruyr'),
(10, 'iu', 'iuy', 'utyut'),
(4, 'utrt', 'yuryur', 'yury'),
(1, 'hjf', 'fgd', 'ghdghd'),
(3, 'grhjg``', 'sdghs', 'sdghfhb'),
(2, 'wsq', 'wetyer', 'wtye'),
(5, 'jkgjhgf', 'hfhjf', 'hjfhjffh'),
(6, 'dfadfa', 'dfadfa', 'dfadfa'),
(7, 'tywtrw', 'ghdhgsd', 'gdhsfs');

-- --------------------------------------------------------

--
-- Table structure for table `camera_mob`
--

CREATE TABLE `camera_mob` (
  `cod_mob` int(11) NOT NULL,
  `camera` varchar(255) NOT NULL,
  `resulesion` varchar(255) NOT NULL,
  `focus_auto` tinyint(2) NOT NULL,
  `bozorgnema` tinyint(2) NOT NULL,
  `tashkhis_chehre` tinyint(2) NOT NULL,
  `tashkhis_labkhand` tinyint(2) NOT NULL,
  `flash` varchar(255) NOT NULL,
  `filmbardari` tinyint(2) NOT NULL,
  `kahesh_redeye` tinyint(2) NOT NULL,
  `larzeshgir` tinyint(2) NOT NULL,
  `camera2` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera_mob`
--

INSERT INTO `camera_mob` (`cod_mob`, `camera`, `resulesion`, `focus_auto`, `bozorgnema`, `tashkhis_chehre`, `tashkhis_labkhand`, `flash`, `filmbardari`, `kahesh_redeye`, `larzeshgir`, `camera2`) VALUES
(0, 'hjf', 'jhfjhf', 2, 2, 2, 2, 'hjfjhf', 2, 2, 2, 2),
(6, 'fgsgfs', 'yurfg', 2, 2, 2, 2, 'hgdhs', 2, 1, 2, 2),
(3, 'ghdghds', 'ghsds', 2, 2, 2, 1, 'fsfgs', 1, 2, 1, 2),
(7, 'fadfa', 'fsfgsa', 2, 2, 2, 2, 'dfadfa', 2, 2, 2, 2),
(8, '', '', 2, 1, 1, 2, '', 1, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact_me`
--


-- --------------------------------------------------------

--
-- Table structure for table `cpu_mob`
--

CREATE TABLE `cpu_mob` (
  `cod_mob` int(11) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu_mob`
--

INSERT INTO `cpu_mob` (`cod_mob`, `cpu`, `speed`) VALUES
(0, 'tghed', 'sfgs'),
(7, 'dfa', 'dfadfa'),
(6, 'fgs', 'saddfa');

-- --------------------------------------------------------

--
-- Table structure for table `data_mob`
--

CREATE TABLE `data_mob` (
  `cod_mob` int(11) NOT NULL,
  `port` varchar(255) NOT NULL,
  `infrared` tinyint(2) NOT NULL,
  `bluetooth` tinyint(2) NOT NULL,
  `gprs` tinyint(2) NOT NULL,
  `wlan` tinyint(2) NOT NULL,
  `wap` tinyint(2) NOT NULL,
  `html` tinyint(2) NOT NULL,
  `send_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mob`
--

INSERT INTO `data_mob` (`cod_mob`, `port`, `infrared`, `bluetooth`, `gprs`, `wlan`, `wap`, `html`, `send_msg`) VALUES
(0, 'fsfgsfgs', 2, 2, 2, 2, 2, 2, 'fgsfgs'),
(3, 'fdfgsd', 2, 2, 1, 2, 1, 2, 'fgsgfs'),
(7, 'dfa', 2, 2, 2, 2, 2, 2, 'dfadfa');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `cod_mob` int(11) NOT NULL,
  `cod_majol` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`code`, `cod_mob`, `cod_majol`, `pic`, `title`, `size`, `file`) VALUES
(2, 2, 3, 'pic/upload_download/Penguins.jpg', 'klashlh', '0', 'download/Maid with the Flaxen Hair.mp3'),
(4, 2, 2, 'pic/upload_download/Desert.jpg', 'udgdghd', '780831', 'download/Koala.jpg'),
(5, 1, 1, 'pic/upload_download/Jellyfish.jpg', 'gdgdgd', '620888', 'download/Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emkanat_mob`
--

CREATE TABLE `emkanat_mob` (
  `cod_mob` int(11) NOT NULL,
  `os` varchar(255) NOT NULL,
  `gps` tinyint(2) NOT NULL,
  `radio` tinyint(2) NOT NULL,
  `voise_recorder` tinyint(2) NOT NULL,
  `shomaregir_sound` tinyint(2) NOT NULL,
  `monshi_tell` tinyint(2) NOT NULL,
  `output_hedfon` varchar(255) NOT NULL,
  `ifon` tinyint(2) NOT NULL,
  `edit_office` tinyint(2) NOT NULL,
  `display_office` tinyint(2) NOT NULL,
  `display_pdf` tinyint(2) NOT NULL,
  `java` tinyint(2) NOT NULL,
  `output_tv` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emkanat_mob`
--


-- --------------------------------------------------------

--
-- Table structure for table `majol`
--

CREATE TABLE `majol` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `majol`
--

INSERT INTO `majol` (`code`, `name`) VALUES
(1, 'game'),
(2, 'theme'),
(3, 'program');

-- --------------------------------------------------------

--
-- Table structure for table `memory_mob`
--

CREATE TABLE `memory_mob` (
  `cod_mob` int(11) NOT NULL,
  `daftar_tell` varchar(255) NOT NULL,
  `memory_dakheli` varchar(255) NOT NULL,
  `port_memory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memory_mob`
--

INSERT INTO `memory_mob` (`cod_mob`, `daftar_tell`, `memory_dakheli`, `port_memory`) VALUES
(7, 'hgd', 'ghd', 'ghdhgd'),
(0, 'gfgf', 'ghdfsd', 'fgsfgs'),
(3, 'gdghd', 'ghdhgs', 'ghdshgs'),
(6, 'dfa', 'dadf', 'adfafda');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `cod_barand` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `ghimat` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`code`, `cod_barand`, `name`, `pic`, `ghimat`) VALUES
(1, 1, '1100', 'pic/mobile/Water lilies.jpg', ''),
(2, 1, 'n90', 'pic/mobile/Winter.jpg', ''),
(3, 2, 'jktgjhg', 'pic/mobile/Blue hills.jpg', ''),
(4, 2, 'jgjkg', 'pic/mobile/Blue hills.jpg', ''),
(5, 2, 'jkgj', 'pic/mobile/Winter.jpg', ''),
(6, 1, 'dsdfa', 'pic/mobile/Blue hills.jpg', ''),
(7, 2, 'grgefgwsfws', 'pic/mobile/Sunset.jpg', ''),
(8, 3, '54865', 'pic/mobile/Winter.jpg', '57465487'),
(9, 3, '545645632', 'pic/mobile/Water lilies.jpg', '5644'),
(10, 3, 'jhfvgd', 'pic/mobile/Sunset.jpg', '656574');

-- --------------------------------------------------------

--
-- Table structure for table `modir`
--

CREATE TABLE `modir` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `user_name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `modir`
--

INSERT INTO `modir` (`code`, `user_name`, `pass`) VALUES
(3, 'modir', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `monitor_mob`
--

CREATE TABLE `monitor_mob` (
  `cod_mob` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `teadad_color` varchar(255) NOT NULL,
  `resulesion` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `lamsi` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitor_mob`
--

INSERT INTO `monitor_mob` (`cod_mob`, `type`, `teadad_color`, `resulesion`, `size`, `lamsi`) VALUES
(0, 'fgsfdsa', 'dadfa', 'dfadfsa', 'dfafdsa', 1),
(3, 'ghdghd', 'ghsd', 'dghd', 'ghdghd', 1),
(7, 'dfa', 'dfa', 'dfa', 'dfafda', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `hulf_txt` varchar(150) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`code`, `title`, `pic`, `text`, `date`, `hulf_txt`) VALUES
(1, 'rfwsfgwstfsa', 'pic/upload_news/Winter.jpg', 'gfsaggdftgws', '2011/02/23', 'gfsaggdftgws'),
(2, 'fgsfagfa', 'pic/upload_news/Water lilies.jpg', 'fgsafgagca', '2011/02/23', 'fgsafgagca'),
(3, 'sfgstrfwsnbfckjtjg', 'pic/upload_news/Sunset.jpg', 'kfghjf', '2011/02/23', 'kfghjf');

-- --------------------------------------------------------

--
-- Table structure for table `omomi_mob`
--

CREATE TABLE `omomi_mob` (
  `cod_mob` int(11) NOT NULL,
  `vazeiat` varchar(255) NOT NULL,
  `band` varchar(255) NOT NULL,
  `abaad` varchar(255) NOT NULL,
  `vazn` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `form` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `omomi_mob`
--

INSERT INTO `omomi_mob` (`cod_mob`, `vazeiat`, `band`, `abaad`, `vazn`, `color`, `form`) VALUES
(3, 'gbdc', 'ghd', 'ghd', 'ghd', 'dghd', 'ghdhgd'),
(7, 'fdadfa', 'adfa', 'dfa', 'dfadfa', 'dadfa', 'dfadfa'),
(6, 'fda', 'dfada', 'da', 'erw6666666666666', 'fdafda', 'dtgat');

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
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sabt_nam`
--

INSERT INTO `sabt_nam` (`code`, `name_karbari`, `pass`, `name`, `family`, `day`, `moth`, `year`, `sex`, `email`, `address`) VALUES
(1, 'kourosh', 'd41d8cd98f00b204e9800998ecf8427e', 'kourosh', 'aria', 11, '2', 1369, 1, 'kourosh.democrat@gmail.com', 'maskan');

-- --------------------------------------------------------

--
-- Table structure for table `sound_mob`
--

CREATE TABLE `sound_mob` (
  `cod_mob` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `play_music` tinyint(2) NOT NULL,
  `mp3_zang` tinyint(2) NOT NULL,
  `format_sound` varchar(255) NOT NULL,
  `format_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sound_mob`
--

INSERT INTO `sound_mob` (`cod_mob`, `type`, `play_music`, `mp3_zang`, `format_sound`, `format_video`) VALUES
(3, 'd', 2, 2, 'd', 'd'),
(0, 'hjf', 2, 2, 'hjf', 'hjf'),
(7, 'dfa', 2, 2, 'dfadfadf', 'dfadfafda'),
(6, 'gadfa', 1, 1, 'dfadfa', '999999999999');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tablighat`
--

INSERT INTO `tablighat` (`code`, `pic`, `name`, `link`) VALUES
(5, 'tabligh/agha dariysh.jpg', 'ÙˆØ¨Ø³Ø§ÛŒØª Ø¯Ø§Ø±ÛŒÙˆØ´', 'dariush2000.com'),
(6, 'tabligh/Water lilies.jpg', 'mbkg', 'yahoo.com'),
(7, 'tabligh/Sunset.jpg', 'ooljh', 'klkhkh'),
(8, 'tabligh/Sunset.jpg', 'khjklg', 'jgjkg'),
(9, 'tabligh/Blue hills.jpg', 'jkg', 'jkgjkg');

-- --------------------------------------------------------

--
-- Table structure for table `type_mob`
--

CREATE TABLE `type_mob` (
  `code` int(10) unsigned NOT NULL auto_increment,
  `barand` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type_mob`
--

INSERT INTO `type_mob` (`code`, `barand`, `pic`) VALUES
(1, 'nokia', 'pic/barand/Blue hills.jpg'),
(2, 'sony Erickson', 'pic/barand/Blue hills.jpg'),
(3, 'LG', 'pic/barand/Blue hills.jpg');
