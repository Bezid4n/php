-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- ميزبان: localhost
-- زمان توليد: 13 جولاي 2011 ساعت 03:19 AM
-- نسخه سرور: 5.0.51
-- نسخه PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- پايگاه داده: `zargar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE IF NOT EXISTS `about_me` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `text` text NOT NULL,
  `hulf_txt` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- حذف داده‌هاي جدول `about_me`
--

INSERT INTO `about_me` (`id`, `text`, `hulf_txt`) VALUES
(5, ' Ø¬ÙˆØ§Ù‡Ø± ÙØ±ÙˆØ´ÛŒ Ø¢Ø±ÛŒØ§ Ø§Ø±Ø§Ø¦Ù‡ Ø¯Ù‡Ù†Ø¯Ù‡ ÛŒ Ø§Ù†ÙˆØ§Ø¹ Ø·Ù„Ø§ Ùˆ Ø¬ÙˆØ§Ù‡Ø± Ø¨Ø§ Ù‚ÛŒÙ…Øª Ø±ÙˆØ² Ù…ÛŒØ¨Ø§Ø´Ø¯ Ú©Ù‡ Ø¨Ù‡ Ù…Ø¯Ø±ÛŒØª Ø¨Ø±Ø§Ø¯Ø±Ø§Ù† Ø±Ø¬Ø¨ÛŒ Ù…ÛŒØ¨Ø§Ø´Ø¯.\r\n\r\nØ¢Ø¯Ø±Ø³ :ÛŒØ²Ø¯-Ø®ÛŒØ§Ø¨Ø§Ù† Ù‚ÛŒØ§Ù…-Ø¨Ø§Ø²Ø§Ø± Ø®Ø§Ù†///////                  \r\n\r\ngold_aria@yahoo.com ', ' Ø¬ÙˆØ§Ù‡Ø± ÙØ±ÙˆØ´');

-- --------------------------------------------------------

--
-- Table structure for table `mahsolat`
--

CREATE TABLE IF NOT EXISTS `mahsolat` (
  `m_id` int(10) unsigned NOT NULL auto_increment,
  `t_id` int(10) unsigned NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_ayar` int(3) unsigned default NULL,
  `m_pic` varchar(255) default NULL,
  `m_fi` int(10) unsigned NOT NULL,
  `m_vazn` float NOT NULL,
  `m_date` date NOT NULL,
  PRIMARY KEY  (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- حذف داده‌هاي جدول `mahsolat`
--


-- --------------------------------------------------------

--
-- Table structure for table `massege`
--

CREATE TABLE IF NOT EXISTS `massege` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `massege` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- حذف داده‌هاي جدول `massege`
--

INSERT INTO `massege` (`id`, `name`, `massege`) VALUES
(11, 'shayan', 'mer30 az site khubeton'),
(10, 'shayan', 'slm'),
(9, 'x', 'y'),
(8, 'ali', 'salam'),
(12, 'Ø§Ø³Ù…Ø§Ø¹ÛŒÙ„ÛŒ', 'Ø§Ø³ØªØ§Ø¯ Ø§Ù„Ø­Ù‚ Ú©Ù‡ Ø³Ø§ÛŒØªØ´ÙˆÙ† Ø­Ø±Ù Ù†Ø¯Ø§Ø±Ù‡ Ù„Ø·ÙØ§ Ù†Ù…Ø±Ù‡ Ú©Ø§Ù…Ù„ Ø±Ø§Ø¨Ù‡Ø´ÙˆÙ† Ø¨Ø¯ÛŒØ¯');

-- --------------------------------------------------------

--
-- Table structure for table `modir`
--

CREATE TABLE IF NOT EXISTS `modir` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- حذف داده‌هاي جدول `modir`
--

INSERT INTO `modir` (`id`, `user`, `pass`) VALUES
(13, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tablighat`
--

CREATE TABLE IF NOT EXISTS `tablighat` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- حذف داده‌هاي جدول `tablighat`
--

INSERT INTO `tablighat` (`id`, `pic`, `name`, `link`) VALUES
(6, 'tabligh/DSC00300.jpg', 'madar', 'www.madar.com'),
(5, 'tabligh/ppp.jpg', 'ali', 'www.facebook.com/ali-sia.aspx'),
(7, 'tabligh/aa-k.jpg', 'sia', 'www.facebook.com/alisia.aspx');

-- --------------------------------------------------------

--
-- Table structure for table `type_m`
--

CREATE TABLE IF NOT EXISTS `type_m` (
  `t_id` int(10) unsigned NOT NULL auto_increment,
  `t_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- حذف داده‌هاي جدول `type_m`
--

