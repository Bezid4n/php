-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ميزبان: localhost
-- زمان توليد: 01 ژوئن 2011 ساعت 07:24 PM
-- نسخه سرور: 5.5.8
-- نسخه PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- پايگاه داده: `zargar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE IF NOT EXISTS `about_me` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `hulf_txt` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- حذف داده‌هاي جدول `about_me`
--

INSERT INTO `about_me` (`id`, `text`, `hulf_txt`) VALUES
(4, 'jkgfhgdhghl;asdjklgj\r\nasljfkasghjfab,mjhnAKLDHgJKLADfbaksdjfkdah,sdmvnklahgskmbn\r\nasmdbvjadgfvadjvb sbc,n\r\namdbvgjasgfasjbfsakdgfslkbnsfkhbskmbnsc,mbnskdfhgksbn\r\nad,nbvkdjsavsndkfgn s cba;sldkf;asifldgnlsd,nb\r\nasldjkdbnsf;b', 'jkgfhgdhghl;asdjklgj');

-- --------------------------------------------------------

--
-- Table structure for table `mahsolat`
--

CREATE TABLE IF NOT EXISTS `mahsolat` (
  `m_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_id` int(10) unsigned NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_ayar` int(3) unsigned DEFAULT NULL,
  `m_pic` varchar(255) DEFAULT NULL,
  `m_fi` int(10) unsigned NOT NULL,
  `m_vazn` float NOT NULL,
  `m_date` date NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- حذف داده‌هاي جدول `mahsolat`
--

INSERT INTO `mahsolat` (`m_id`, `t_id`, `m_name`, `m_ayar`, `m_pic`, `m_fi`, `m_vazn`, `m_date`) VALUES
(12, 2, '66666665', 4, 'pic/mahsolat/3.jpg', 3000000, 4, '2011-06-01'),
(13, 2, 'ghfhjf', 99, 'pic/mahsolat/2.jpg', 1000000, 55, '2011-06-01'),
(14, 2, 'GD', 125, 'pic/mahsolat/54.jpg', 32, 20, '2011-06-01'),
(16, 2, 'ghghjf', 124, 'pic/mahsolat/3.jpg', 54, 5, '2011-06-01'),
(17, 10, 'ffs', 750, 'pic/mahsolat/2.jpg', 8, 8, '2011-06-01'),
(18, 23, 'gdd', 750, 'pic/mahsolat/2.jpg', 6, 6, '2011-06-01'),
(19, 25, 's', 750, 'pic/mahsolat/3_0_3496.jpg', 5, 5, '2011-06-01'),
(20, 36, 'gdgd', 750, 'pic/mahsolat/5.jpg', 77, 7, '2011-06-01'),
(23, 37, 'gfgd', 750, 'pic/mahsolat/3.jpg', 700000, 544, '2011-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `massege`
--

CREATE TABLE IF NOT EXISTS `massege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `massege` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- حذف داده‌هاي جدول `massege`
--

INSERT INTO `massege` (`id`, `name`, `massege`) VALUES
(1, 'jjjjjj', 'hfgdgd'),
(3, 'fichn', 'jlksahflk;ahsdgf'),
(5, 'hbfc', '5454');

-- --------------------------------------------------------

--
-- Table structure for table `modir`
--

CREATE TABLE IF NOT EXISTS `modir` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- حذف داده‌هاي جدول `modir`
--

INSERT INTO `modir` (`id`, `user`, `pass`) VALUES
(10, 'kos', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `tablighat`
--

CREATE TABLE IF NOT EXISTS `tablighat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- حذف داده‌هاي جدول `tablighat`
--

INSERT INTO `tablighat` (`id`, `pic`, `name`, `link`) VALUES
(1, 'tabligh/Penguins.jpg', '88', '55'),
(2, 'tabligh/Desert.jpg', 'fff', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `type_m`
--

CREATE TABLE IF NOT EXISTS `type_m` (
  `t_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_type` varchar(255) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- حذف داده‌هاي جدول `type_m`
--

INSERT INTO `type_m` (`t_id`, `t_type`) VALUES
(37, 'ffds'),
(38, 'gfg');
