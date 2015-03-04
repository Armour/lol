-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2015 at 03:44 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lol`
--
CREATE DATABASE IF NOT EXISTS `lol` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lol`;

-- --------------------------------------------------------

--
-- Table structure for table `lol_skin`
--

CREATE TABLE IF NOT EXISTS `lol_skin` (
  `skin_id` int(11) NOT NULL AUTO_INCREMENT,
  `skin_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skin_designer` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skin_vote_number` int(11) NOT NULL DEFAULT '0',
  `skin_file_location` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`skin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lol_skin`
--

INSERT INTO `lol_skin` (`skin_id`, `skin_name`, `skin_designer`, `skin_vote_number`, `skin_file_location`) VALUES
(1, '咩咩咩', '咩咩咩', 4, '1.jpg'),
(2, '秀恩爱', '烧烧烧', 5, '2.jpg'),
(3, '火龙果', '朱鼎含', 3, '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `lol_voice`
--

CREATE TABLE IF NOT EXISTS `lol_voice` (
  `voice_id` int(11) NOT NULL AUTO_INCREMENT,
  `voice_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `voice_designer` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `voice_vote_number` int(11) NOT NULL DEFAULT '0',
  `voice_file_location` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`voice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lol_voice`
--

INSERT INTO `lol_voice` (`voice_id`, `voice_name`, `voice_designer`, `voice_vote_number`, `voice_file_location`) VALUES
(1, '窝是男孩纸', '男孩纸', 4, '2.jpg'),
(2, '窝是女孩纸', '女孩纸', 3, '1.jpg'),
(3, '窝是谁呀。。。', 'FFF团员', 3, '3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
