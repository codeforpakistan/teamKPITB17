-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 10:27 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tm_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_username` varchar(45) NOT NULL,
  `ad_password` varchar(45) NOT NULL,
  `ad_name` varchar(45) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_password`, `ad_name`) VALUES
(1, 'admin', 'admin', 'DotCom Services');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `b_name` varchar(45) NOT NULL,
  `b_email` varchar(45) NOT NULL,
  `b_contact` varchar(45) NOT NULL,
  `b_checkin` varchar(45) NOT NULL,
  `b_checkout` varchar(45) NOT NULL,
  `b_adults` int(10) unsigned NOT NULL,
  `b_childs` int(10) unsigned NOT NULL,
  `b_room` varchar(45) NOT NULL,
  `b_comments` text NOT NULL,
  `sub_` int(10) NOT NULL DEFAULT '0',
  `r_review` varchar(25) DEFAULT '0',
  `recive_name` varchar(45) NOT NULL DEFAULT '0',
  `b_status` int(2) unsigned NOT NULL DEFAULT '0',
  `b_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seen_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_name`, `b_email`, `b_contact`, `b_checkin`, `b_checkout`, `b_adults`, `b_childs`, `b_room`, `b_comments`, `sub_`, `r_review`, `recive_name`, `b_status`, `b_time`, `seen_time`) VALUES
(33, 'name', 'email', 'conact', '12', '', 0, 0, '', '', 0, 'DotCom Services', 'majid', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'name', 'email', 'conact', '12', '', 0, 0, '', '', 0, 'DotCom Services', 'asdasd', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'name', 'email', 'conact', '12', '12', 2, 22, 'room', '', 3, 'DotCom Services', 'jawad', 1, '2016-11-21 00:19:24', '2016-11-21 12:19:00'),
(36, 'name', 'email', 'conact', '12', '12', 2, 22, 'room', '', 3, 'DotCom Services', 'majid', 1, '2016-11-21 00:16:52', '2016-11-21 12:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `contactlist`
--

CREATE TABLE IF NOT EXISTS `contactlist` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cantact_detail` varchar(45) NOT NULL,
  `sub_` int(3) unsigned NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contactlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_name` varchar(50) NOT NULL,
  `fb_contact` varchar(45) NOT NULL,
  `fb_email` varchar(45) NOT NULL,
  `fb_subject` varchar(100) NOT NULL,
  `fb_message` text NOT NULL,
  `sub_` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `fb_name`, `fb_contact`, `fb_email`, `fb_subject`, `fb_message`, `sub_`) VALUES
(1, 'hamid', '03469401428', 'hamidali.ibms@gmail.com', 'dfsdf', 'sdfsdfsd', 0),
(2, 'Hamid Ali', '03469401428', 'hamidali.ibms@mail.com', 'Testing', 'kjshdkjshs', 0),
(3, '', '', '', '', '', 0),
(4, 'Hamid Ali', '03469401428', 'hamidali.ibms@mail.com', 'Testing', 'sdfsdfsdfsdfsdfsd,,mmmmmmmmmmmmmmmmmmmmmm', 1),
(5, 'namee', '', 'programmerzone31@gmail.com', 'stolen my purse', 'ddadsdasds', 0),
(6, 'namee', '', 'programmerzone31@gmail.com', 'stolen my purse', 'ddadsdasds', 0),
(7, 'namee', '', 'programmerzone31@gmail.com', 'stolen my purse', 'ddadsdasds', 0),
(8, 'namee', '', 'programmerzone31@gmail.com', 'stolen my purse', 'ddadsdasds', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(45) NOT NULL,
  `g_image` text NOT NULL,
  `sub_` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_name`, `g_image`, `sub_`) VALUES
(1, 'img1', 'gallery-2.jpg', 1),
(2, 'o', 'gallery-1.jpg', 7),
(3, 'i', 'gallery-3.jpg', 8),
(4, 'ii', 'gallery-6.jpg', 2),
(5, 'iii', 'gallery-7.jpg', 3),
(6, 'iv', 'restaurant-feature-1.jpg', 4),
(7, 'v', 'vacation-package-3.jpg', 5),
(8, 'vi', 'widget-post-1.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `nl_id` int(11) NOT NULL AUTO_INCREMENT,
  `nl_name` varchar(45) NOT NULL,
  `nl_email` varchar(45) NOT NULL,
  `nl_contact` varchar(20) NOT NULL,
  PRIMARY KEY (`nl_id`),
  UNIQUE KEY `nl_email` (`nl_email`,`nl_contact`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`nl_id`, `nl_name`, `nl_email`, `nl_contact`) VALUES
(2, 'Hamid', 'hamidali.ibms@gmail.com', '03469401428'),
(6, '<a href="essaoil.com">essa</a>', '', '11111111111'),
(7, '<a href="http://www.essaoil.com">essa</a>', '', '12312312222'),
(8, '<script>aler();</script>', '', '23423423333');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `place` varchar(45) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`p_id`, `place`) VALUES
(6, 'Uni Tikka Hutt'),
(7, 'Shelton'),
(8, 'Sheriz Arena');

-- --------------------------------------------------------

--
-- Table structure for table `recivers`
--

CREATE TABLE IF NOT EXISTS `recivers` (
  `recv_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `recv_name` varchar(45) NOT NULL,
  `recv_status` varchar(45) NOT NULL,
  PRIMARY KEY (`recv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `recivers`
--


-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `r_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `r_name` varchar(45) NOT NULL,
  `r_contact` varchar(45) NOT NULL,
  `r_email` varchar(45) NOT NULL,
  `r_desc` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `r_status` int(3) NOT NULL DEFAULT '0',
  `r_review` text NOT NULL,
  `recive_name` varchar(45) NOT NULL,
  PRIMARY KEY (`r_id`),
  KEY `FK_reservation_1` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reservation`
--


-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `s_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `s_name` varchar(45) NOT NULL,
  `s_desc` text NOT NULL,
  `s_image` text NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_name`, `s_desc`, `s_image`) VALUES
(10, 'TM Hotels', '', 'Bakelogoy.jpg'),
(11, 'TM Hotels', '', 'conference_rooms.jpg'),
(12, 'TM Hotels', '', 'green.jpg'),
(13, 'TM Hotels', '', 'green2.jpg'),
(14, 'TM Hotels', '', 'LayalinaSLider.jpg'),
(16, 'TM Hotels', '', 'Rezidor_rooms.jpg'),
(17, 'TM Hotels', '', 'rezidorlobby.jpg'),
(18, 'TM Hotels', '', 'rezidorlobby.jpg'),
(19, 'TM Hotels', '', 'RezidorSlider.jpg'),
(20, 'TM Hotels', '', 'ShagunSangat.jpg'),
(21, 'TM Hotels', '', 'SHeltonHouse.jpg'),
(22, 'TM Hotels', '', 'vip2.jpg'),
(23, 'TM Hotels', '', 'Zanzibar_Slider.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subslider`
--

CREATE TABLE IF NOT EXISTS `subslider` (
  `ss_id` int(11) NOT NULL AUTO_INCREMENT,
  `ss_title` varchar(45) NOT NULL,
  `ss_desc` text NOT NULL,
  `ss_image` text NOT NULL,
  `sub_` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ss_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `subslider`
--

INSERT INTO `subslider` (`ss_id`, `ss_title`, `ss_desc`, `ss_image`, `sub_`) VALUES
(8, '1Peshawar title', '1pesh desc', 'home-1.jpg', 1),
(12, '1Peshawar title', '1Pesh desc', 'location-3.jpg', 8),
(13, '2Faisalabad', '', '3.jpg', 2),
(14, '2Faisalabad', '', 'blog-boxed-6.jpg', 2),
(15, '3Islamabad', '', 'home-spa.jpg', 3),
(16, '3Islamabad', '', 'home-spa.jpg', 3),
(17, 'Laylina', '', 'blog-classic-3.jpg', 4),
(18, 'Laylina', '', 'blog-boxed-3.jpg', 4),
(19, '5Quatta', '', 'home-location.jpg', 5),
(20, '5Quatta', '', 'location-1.jpg', 5),
(21, '6Sialkot', '', 'location-2.jpg', 6),
(22, '6Sialkot', '', 'newsletter-banner-1.jpg', 6),
(23, '7Sindh', '', 'vacation-package-1.jpg', 7),
(24, '7Sindh', '', 'vacation-package-2.jpg', 7),
(25, '8Multan', '', 'offer-banner-1.jpg', 8),
(26, '8Multan', '', 'location-1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subtestimonial`
--

CREATE TABLE IF NOT EXISTS `subtestimonial` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_title` varchar(45) NOT NULL,
  `st_desc` text NOT NULL,
  `st_image` text NOT NULL,
  `st_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `subtestimonial`
--

INSERT INTO `subtestimonial` (`st_id`, `st_title`, `st_desc`, `st_image`, `st_date`) VALUES
(4, 'name', 'Above gathered behold. Living, hath good winged fourth herb in unto form earth. Light meat beginning gathered signs may them under under, creeping air, wont midst which great his there he likeness that own, tree set third cattle day man. Is there created beginning thing us Form without. Have his god, cattle midst under gathered god upon him fruitful seasons.', 'users.png', '2016-03-15 03:14:32'),
(9, 'daud', 'Above gathered behold. Living, hath good winged fourth herb in unto form earth. Light meat beginning gathered signs may them under under, creeping air, wont midst which great his there he likeness that own, tree set third cattle day man. Is there created beginning thing us Form without. Have his god, cattle midst under gathered god upon him fruitful seasons.', 'user.PNG', '2016-03-15 03:14:44'),
(10, 'daud', 'Above gathered behold. Living, hath good winged fourth herb in unto form earth. Light meat beginning gathered signs may them under under, creeping air, wont midst which great his there he likeness that own, tree set third cattle day man. Is there created beginning thing us Form without. Have his god, cattle midst under gathered god upon him fruitful seasons.', 'user.PNG', '2016-03-15 03:15:00'),
(11, 'daud', 'hy everey one this is testing for select * from subtestimonial', 'user.PNG', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `t_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_name` varchar(45) NOT NULL,
  `t_designation` varchar(45) NOT NULL,
  `t_desc` text NOT NULL,
  `t_image` text NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`t_id`, `t_name`, `t_designation`, `t_desc`, `t_image`) VALUES
(6, 'Aftab Ahmaed', 'Web Developer Project Manager', 'A fantastic web developer! We have worked together on many projects and never had any problems. ', 'aftab.png'),
(14, 'Wajahat', 'CEO', 'Why should you pay attention to methods of paragraph development and organization in writing? Because if you don''t, all those great ideas', 'wajahat.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_reservation_1` FOREIGN KEY (`p_id`) REFERENCES `place` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
