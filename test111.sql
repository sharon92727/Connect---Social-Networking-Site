-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2012 at 06:44 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comm_det`
--

CREATE TABLE IF NOT EXISTS `comm_det` (
  `comm_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `owner` int(11) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `pic` longblob NOT NULL,
  PRIMARY KEY (`comm_no`),
  KEY `owner` (`owner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comm_det`
--

INSERT INTO `comm_det` (`comm_no`, `name`, `owner`, `desc`, `pic`) VALUES
(1, 'xanthronz', 1, 'community for all 2k9 m.sc students..', 0x32323070782d54657874757265646d3161322e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `con_info`
--

CREATE TABLE IF NOT EXISTS `con_info` (
  `lno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `website` varchar(50) NOT NULL,
  PRIMARY KEY (`lno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con_info`
--

INSERT INTO `con_info` (`lno`, `email`, `ph_no`, `address`, `city`, `zipcode`, `website`) VALUES
(1, 'saipujitha.psg26@gmail.co', '987654321', 'psgg', 'hosur', 635109, 'hknhjo'),
(2, 'badhri.gmail.com', '987654321', 'homme', 'karur', 98776, 'tgnh'),
(3, 'nishi.mit44@gmail.com', '7654321', 'psgg', 'hosur', 635109, 'sgg');

-- --------------------------------------------------------

--
-- Table structure for table `edu_info`
--

CREATE TABLE IF NOT EXISTS `edu_info` (
  `lno` int(11) NOT NULL,
  `working` varchar(300) NOT NULL,
  `college` varchar(300) NOT NULL,
  `school` varchar(300) NOT NULL,
  PRIMARY KEY (`lno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='educational info';

--
-- Dumping data for table `edu_info`
--

INSERT INTO `edu_info` (`lno`, `working`, `college`, `school`) VALUES
(1, '--', 'psg tech', 'maharishi'),
(2, 'nil', 'psg', 'bvb'),
(3, 'WABAG', 'mit,chennai', 'parimalam');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `lno` int(11) NOT NULL COMMENT 'user',
  `frnd_no` int(11) NOT NULL COMMENT 'user''s frd',
  PRIMARY KEY (`lno`,`frnd_no`),
  KEY `frnd_no` (`frnd_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='friends table';

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`lno`, `frnd_no`) VALUES
(2, 1),
(3, 1),
(1, 2),
(3, 2),
(1, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) CHARACTER SET utf8 NOT NULL,
  `ext` varchar(8) CHARACTER SET utf8 NOT NULL,
  `image_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data` mediumblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lno` int(11) NOT NULL AUTO_INCREMENT,
  `eid` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`lno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lno`, `eid`, `password`) VALUES
(1, 'sai pujitha', 'puji'),
(2, 'badhri', 'badhri'),
(3, 'nishitha', 'nishi');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_no` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(600) NOT NULL,
  PRIMARY KEY (`msg_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_no`, `msg`) VALUES
(1, 'hi ve :)');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `p_no` int(11) NOT NULL AUTO_INCREMENT,
  `photo` longblob NOT NULL,
  `date_sub` date NOT NULL,
  `info` varchar(300) NOT NULL,
  PRIMARY KEY (`p_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`p_no`, `photo`, `date_sub`, `info`) VALUES
(1, 0x636f636f6e75747368656c6c7368616972792e6a7067, '0000-00-00', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `po_info`
--

CREATE TABLE IF NOT EXISTS `po_info` (
  `lno` int(11) NOT NULL,
  `profile_pic` longblob NOT NULL,
  `activities` varchar(500) NOT NULL,
  `interests` varchar(500) NOT NULL,
  `sports` varchar(500) NOT NULL,
  PRIMARY KEY (`lno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='profile general info';

--
-- Dumping data for table `po_info`
--

INSERT INTO `po_info` (`lno`, `profile_pic`, `activities`, `interests`, `sports`) VALUES
(1, 0x616e6e2e6a7067, ':)', ':)', ':)'),
(2, 0x32323070782d54657874757265646d3161322e706e67, 'aa', 'ss', 'ss'),
(3, 0x746872697368612e6a7067, 'books', 'music', ':)');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `lno` int(11) NOT NULL,
  `cur_loc` varchar(30) NOT NULL,
  `hometown` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`lno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='registration table';

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`lno`, `cur_loc`, `hometown`, `gender`, `dob`, `email`) VALUES
(1, 'coimbatore', 'hosur', 'f', '1991-07-17', 'coolsai.puji@gmail.com'),
(9, '', '', '', '0000-00-00', ''),
(10, '', '', '', '0000-00-00', ''),
(11, '', '', '', '0000-00-00', ''),
(12, 'q', 'q', 'f', '1991-09-09', 's'),
(13, 'q', 'q', 'f', '1991-09-09', 's'),
(14, 'q', 'q', 'f', '1991-09-09', 's'),
(15, 'q', 'q', 'f', '1991-09-09', 's'),
(16, 'q', 'q', 'f', '1991-09-09', 's'),
(17, 'r', 'r', 'f', '1991-06-06', 'e'),
(18, 'r', 'r', 'f', '1991-06-06', 'e@gmail.com'),
(19, 'r', 'r', 'f', '1991-06-06', 'e@gmail.com'),
(20, 'r', 'r', 'f', '1991-06-06', 'e@gmail.com'),
(21, 'r', 'r', 'f', '1991-06-06', 'e@gmail.com'),
(22, 'r', 'r', 'f', '1991-06-06', 'e@gmail.com'),
(23, 'r', 'r', 'f', '1991-06-06', 'e@gmail.com'),
(24, 'r', 'r', 'f', '1991-06-06', 'e@gmail.com'),
(25, 'r', 'r', 'f', '1991-06-06', 'e@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE IF NOT EXISTS `registration1` (
  `lno` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`lno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='registration table' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`lno`, `city`, `country`, `gender`, `dob`, `email`) VALUES
(1, 'hosur', 'India', 'f', '1957-07-17', 'saipujitha.psg26@gmail.co'),
(2, 'karur', 'india', 'm', '1966-04-17', 'badhri.gmail.com'),
(3, 'hosur', 'India', 'f', '1962-06-14', 'nishi.mit44@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `from` int(11) NOT NULL COMMENT 'from frnd',
  `to` int(11) NOT NULL COMMENT 'to frnd',
  PRIMARY KEY (`from`,`to`),
  KEY `to` (`to`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='friend requests shown';

--
-- Dumping data for table `requests`
--


-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE IF NOT EXISTS `t1` (
  `no` int(2) NOT NULL AUTO_INCREMENT,
  `name` int(10) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t1`
--

INSERT INTO `t1` (`no`, `name`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_comm`
--

CREATE TABLE IF NOT EXISTS `user_comm` (
  `lno` int(11) NOT NULL,
  `comm_no` int(11) NOT NULL,
  PRIMARY KEY (`lno`,`comm_no`),
  KEY `comm_no` (`comm_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comm`
--

INSERT INTO `user_comm` (`lno`, `comm_no`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_msg`
--

CREATE TABLE IF NOT EXISTS `user_msg` (
  `lno` int(11) NOT NULL,
  `msg_no` int(11) NOT NULL AUTO_INCREMENT,
  `sender` int(11) NOT NULL,
  PRIMARY KEY (`lno`,`msg_no`),
  KEY `msg_no` (`msg_no`),
  KEY `sender` (`sender`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='all msgs in db' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_msg`
--

INSERT INTO `user_msg` (`lno`, `msg_no`, `sender`) VALUES
(1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_photo`
--

CREATE TABLE IF NOT EXISTS `user_photo` (
  `lno` int(11) NOT NULL,
  `p_no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`lno`,`p_no`),
  KEY `p_no` (`p_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='photos of user' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_photo`
--

INSERT INTO `user_photo` (`lno`, `p_no`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_video`
--

CREATE TABLE IF NOT EXISTS `user_video` (
  `lno` int(11) NOT NULL,
  `v_no` int(11) NOT NULL,
  PRIMARY KEY (`lno`,`v_no`),
  KEY `v_no` (`v_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_video`
--


-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `v_no` int(11) NOT NULL AUTO_INCREMENT,
  `video` longblob NOT NULL,
  `date_sub` date NOT NULL,
  `info` varchar(300) NOT NULL,
  PRIMARY KEY (`v_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `videos`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `comm_det`
--
ALTER TABLE `comm_det`
  ADD CONSTRAINT `comm_det_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `login` (`lno`);

--
-- Constraints for table `con_info`
--
ALTER TABLE `con_info`
  ADD CONSTRAINT `con_info_ibfk_1` FOREIGN KEY (`lno`) REFERENCES `registration1` (`lno`);

--
-- Constraints for table `edu_info`
--
ALTER TABLE `edu_info`
  ADD CONSTRAINT `edu_info_ibfk_1` FOREIGN KEY (`lno`) REFERENCES `registration1` (`lno`);

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_3` FOREIGN KEY (`lno`) REFERENCES `registration1` (`lno`),
  ADD CONSTRAINT `friends_ibfk_4` FOREIGN KEY (`frnd_no`) REFERENCES `registration1` (`lno`);

--
-- Constraints for table `po_info`
--
ALTER TABLE `po_info`
  ADD CONSTRAINT `po_info_ibfk_1` FOREIGN KEY (`lno`) REFERENCES `registration1` (`lno`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`from`) REFERENCES `registration1` (`lno`),
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`to`) REFERENCES `registration1` (`lno`);

--
-- Constraints for table `user_comm`
--
ALTER TABLE `user_comm`
  ADD CONSTRAINT `user_comm_ibfk_2` FOREIGN KEY (`comm_no`) REFERENCES `comm_det` (`comm_no`),
  ADD CONSTRAINT `user_comm_ibfk_3` FOREIGN KEY (`lno`) REFERENCES `registration1` (`lno`);

--
-- Constraints for table `user_msg`
--
ALTER TABLE `user_msg`
  ADD CONSTRAINT `user_msg_ibfk_2` FOREIGN KEY (`msg_no`) REFERENCES `messages` (`msg_no`),
  ADD CONSTRAINT `user_msg_ibfk_5` FOREIGN KEY (`lno`) REFERENCES `login` (`lno`),
  ADD CONSTRAINT `user_msg_ibfk_6` FOREIGN KEY (`sender`) REFERENCES `login` (`lno`);

--
-- Constraints for table `user_photo`
--
ALTER TABLE `user_photo`
  ADD CONSTRAINT `user_photo_ibfk_3` FOREIGN KEY (`lno`) REFERENCES `registration1` (`lno`),
  ADD CONSTRAINT `user_photo_ibfk_4` FOREIGN KEY (`p_no`) REFERENCES `photos` (`p_no`);

--
-- Constraints for table `user_video`
--
ALTER TABLE `user_video`
  ADD CONSTRAINT `user_video_ibfk_2` FOREIGN KEY (`v_no`) REFERENCES `videos` (`v_no`),
  ADD CONSTRAINT `user_video_ibfk_3` FOREIGN KEY (`lno`) REFERENCES `registration1` (`lno`);
