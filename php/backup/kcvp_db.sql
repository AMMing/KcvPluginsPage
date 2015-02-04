-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: pmamysql-green.smartgslb.com
-- Generation Time: 2015-02-04 20:41:58
-- 服务器版本： 5.5.41-debug-log
-- PHP Version: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sql_kcvp`
--

-- --------------------------------------------------------

--
-- 表的结构 `download_record`
--

CREATE TABLE IF NOT EXISTS `download_record` (
  `Id` int(11) NOT NULL,
  `ver_id` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `download_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=566 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `functions_table`
--

CREATE TABLE IF NOT EXISTS `functions_table` (
  `Id` int(11) NOT NULL,
  `soft_Id` int(11) NOT NULL,
  `content` text NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `head_slider`
--

CREATE TABLE IF NOT EXISTS `head_slider` (
  `Id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `avatar_left` int(11) NOT NULL,
  `title_left` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `order` int(10) unsigned zerofill NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `logs_table`
--

CREATE TABLE IF NOT EXISTS `logs_table` (
  `Id` int(11) NOT NULL,
  `soft_Id` int(11) NOT NULL,
  `content` text NOT NULL,
  `ver` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `order` int(10) unsigned zerofill NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `nav_slider`
--

CREATE TABLE IF NOT EXISTS `nav_slider` (
  `Id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `order` int(10) unsigned zerofill NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `page_info`
--

CREATE TABLE IF NOT EXISTS `page_info` (
  `Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brief` text,
  `content` text,
  `updatetime` datetime DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `head_keyword` varchar(255) DEFAULT NULL,
  `head_des` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `soft`
--

CREATE TABLE IF NOT EXISTS `soft` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `order` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `soft_version`
--

CREATE TABLE IF NOT EXISTS `soft_version` (
  `Id` int(11) NOT NULL,
  `soft_id` int(11) NOT NULL DEFAULT '0',
  `ver` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `version_info`
--

CREATE TABLE IF NOT EXISTS `version_info` (
  `Id` int(11) NOT NULL,
  `ver_id` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `des` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `download_record`
--
ALTER TABLE `download_record`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `functions_table`
--
ALTER TABLE `functions_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `head_slider`
--
ALTER TABLE `head_slider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `logs_table`
--
ALTER TABLE `logs_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nav_slider`
--
ALTER TABLE `nav_slider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `page_info`
--
ALTER TABLE `page_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `soft`
--
ALTER TABLE `soft`
  ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `key` (`key`);

--
-- Indexes for table `soft_version`
--
ALTER TABLE `soft_version`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `version_info`
--
ALTER TABLE `version_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download_record`
--
ALTER TABLE `download_record`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=566;
--
-- AUTO_INCREMENT for table `functions_table`
--
ALTER TABLE `functions_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `head_slider`
--
ALTER TABLE `head_slider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `logs_table`
--
ALTER TABLE `logs_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nav_slider`
--
ALTER TABLE `nav_slider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `page_info`
--
ALTER TABLE `page_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soft`
--
ALTER TABLE `soft`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `soft_version`
--
ALTER TABLE `soft_version`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `version_info`
--
ALTER TABLE `version_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
