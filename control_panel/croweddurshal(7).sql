-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2017 at 10:32 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `croweddurshal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ad_id` int(10) NOT NULL AUTO_INCREMENT,
  `ad_username` varchar(45) NOT NULL,
  `ad_password` varchar(45) NOT NULL,
  `ad_status` int(11) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ad_id`, `ad_username`, `ad_password`, `ad_status`) VALUES
(1, 'admin', 'admin', 1),
(2, 'haqnawaz', 'haqnawaz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(45) NOT NULL,
  `cat_desc` varchar(45) NOT NULL,
  `cat_status` int(2) unsigned NOT NULL DEFAULT '1',
  `cat_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`cat_id`, `cat_name`, `cat_desc`, `cat_status`, `cat_date`) VALUES
(1, 'Games', 'Apps', 1, '2017-04-17 16:40:42'),
(2, 'IT', 'Apps', 1, '2017-04-17 16:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

CREATE TABLE IF NOT EXISTS `tblproject` (
  `p_id` int(10) unsigned NOT NULL,
  `p_title` varchar(45) NOT NULL,
  `p_amount` varchar(45) NOT NULL,
  `p_duration` varchar(45) NOT NULL,
  `p_photo` varchar(100) NOT NULL,
  `p_link` varchar(45) NOT NULL,
  `p_location` varchar(45) NOT NULL,
  `p_desc` varchar(500) NOT NULL,
  `p_story` varchar(500) NOT NULL,
  `cat_id` int(10) unsigned NOT NULL,
  `UserID` int(10) unsigned NOT NULL,
  `p_status` int(2) unsigned NOT NULL DEFAULT '0',
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p_verification` int(11) NOT NULL DEFAULT '0',
  `p_popular` varchar(255) DEFAULT 'no',
  `p_future` varchar(255) DEFAULT 'no',
  `c_id` int(10) unsigned NOT NULL,
  `p_fname` varchar(45) NOT NULL,
  `p_lastname` varchar(45) NOT NULL,
  `p_dob` varchar(45) NOT NULL,
  `p_phone` varchar(45) NOT NULL,
  `p_fb` varchar(60) NOT NULL,
  `p_lnkdin` varchar(65) NOT NULL,
  `p_profile` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`) USING BTREE,
  KEY `FK_tblproject_1` (`cat_id`),
  KEY `FK_tblproject_2` (`UserID`),
  KEY `FK_tblproject_3` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproject`
--

INSERT INTO `tblproject` (`p_id`, `p_title`, `p_amount`, `p_duration`, `p_photo`, `p_link`, `p_location`, `p_desc`, `p_story`, `cat_id`, `UserID`, `p_status`, `p_date`, `p_verification`, `p_popular`, `p_future`, `c_id`, `p_fname`, `p_lastname`, `p_dob`, `p_phone`, `p_fb`, `p_lnkdin`, `p_profile`) VALUES
(9, 'Mashald', '500000', '90', 'Capture.PNG', 'http://localhost/crowd/pitch_idea.php', 'peshawar', 'asssasssssss', 'asssasssssss', 2, 1, 1, '2017-05-02 22:29:38', 1, 'yes', 'yes', 1, '', '', '', '', '', '', ''),
(10, 'Rehav lives', '500000', '90', 'Desert.jpg', 'http://localhost/crowd/pitch_idea.php', 'peshawar', 'Are a safe and respectful environment for all participants.\r\nAre a place where people are free to fully express their identities.\r\nPresume the value of others. Everyoneâ€™s ideas, skills, and contributions have value.\r\nDonâ€™t assume everyone has the same context, and encourage questions.\r\nFind a way for people to be productive with their skills (technical and not) and energy. Use language such as â€œyes/andâ€, not â€œno/but.â€\r\nEncourage members and participants to listen as much as they spea', 'Work to ensure that the community is well-represented in the planning, design, and implementation of civic tech. This includes encouraging participation from women, minorities, and traditionally marginalized groups.\r\nActively involve community groups and those with subject matter expertise in the decision-making process.\r\nEnsure that the relationships and conversations between community members, the local government staff and community partners remain respectful, participatory, and productive.\r\n', 1, 1, 0, '2017-05-02 22:29:45', 0, 'yes', 'yes', 1, '', '', '', '', '', '', ''),
(11, 'Mashal', '500000', '90', 'Lighthouse.jpg', 'http://localhost/crowd/pitch_idea.php', 'peshawar', 'dada', 'adad', 2, 1, 0, '2017-05-02 22:29:52', 0, 'no', 'no', 1, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblrole`
--

CREATE TABLE IF NOT EXISTS `tblrole` (
  `RoleID` int(11) NOT NULL AUTO_INCREMENT,
  `Role` varchar(30) NOT NULL,
  PRIMARY KEY (`RoleID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tblrole`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `UserID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `NickName` varchar(30) NOT NULL,
  `Role_ID` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`UserID`, `FirstName`, `LastName`, `Email`, `Password`, `NickName`, `Role_ID`, `date`, `status`) VALUES
(1, 'Mian Dawood', 'shh', 'daud@shah.com', '12345', 'David', 1, '2017-04-25 00:53:57', 1),
(4, 'haqnawaz', 'khan', 'haq@nawaz.com', 'haqnawaz', 'Haq', 2, '2017-04-08 23:51:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercompany`
--

CREATE TABLE IF NOT EXISTS `usercompany` (
  `c_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_ntn` varchar(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_regno` varchar(40) NOT NULL,
  `c_email` varchar(15) NOT NULL,
  `c_website` varchar(30) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `c_detail` varchar(400) NOT NULL,
  `UserID` int(10) unsigned NOT NULL,
  `c_status` int(2) unsigned NOT NULL DEFAULT '0',
  `hash` varchar(50) NOT NULL,
  `c_verification` int(8) NOT NULL DEFAULT '0',
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`) USING BTREE,
  KEY `FK_usercompany_1` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=6 ;

--
-- Dumping data for table `usercompany`
--

INSERT INTO `usercompany` (`c_id`, `c_ntn`, `c_name`, `c_regno`, `c_email`, `c_website`, `c_phone`, `c_detail`, `UserID`, `c_status`, `hash`, `c_verification`, `c_date`) VALUES
(1, 'dddd', 'aaaaaaaa', 'aaaaaaaaaa', 'ddddddddddddd', 'ddddddddddd', 'dddddddddddd', 'ddddddddddddd', 1, 1, 'sdddddddddddd', 1, '2017-04-18 15:51:14'),
(2, 'ddddddd', 'aaaaaaaa', 'aaaaaaaaaa', 'asdfsd@gmail.co', 'ddddddddddd', '23423', 'ddddddddddddd', 1, 1, 'sdddddddddddd', 0, '2017-04-26 00:05:18'),
(3, 'ddddddd', 'aaaaaaaa', 'aaaaaaaaaa', 'ddddddddddddd', 'ddddddddddd', 'dddddddddddd', 'ddddddddddddd', 1, 1, 'sdddddddddddd', 0, '2017-04-18 15:51:14'),
(5, 'ntn', 'durshal', '2342kk', 'haqnawazwgbm@gm', '', '', 'sdf', 4, 1, 'd395771085aab05244a4fb8fd91bf4ee', 0, '2017-04-26 00:42:11');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblproject`
--
ALTER TABLE `tblproject`
  ADD CONSTRAINT `FK_tblproject_1` FOREIGN KEY (`cat_id`) REFERENCES `tblcategory` (`cat_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblproject_2` FOREIGN KEY (`UserID`) REFERENCES `tblusers` (`UserID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblproject_3` FOREIGN KEY (`c_id`) REFERENCES `usercompany` (`c_id`) ON UPDATE CASCADE;

--
-- Constraints for table `usercompany`
--
ALTER TABLE `usercompany`
  ADD CONSTRAINT `FK_usercompany_1` FOREIGN KEY (`UserID`) REFERENCES `tblusers` (`UserID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
