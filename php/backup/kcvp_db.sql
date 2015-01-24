/*
Navicat MySQL Data Transfer

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2015-01-24 20:07:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for download_record
-- ----------------------------
DROP TABLE IF EXISTS `download_record`;
CREATE TABLE `download_record` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ver_id` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `download_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `download_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for functions_table
-- ----------------------------
DROP TABLE IF EXISTS `functions_table`;
CREATE TABLE `functions_table` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `soft_Id` int(11) NOT NULL,
  `content` text NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for head_slider
-- ----------------------------
DROP TABLE IF EXISTS `head_slider`;
CREATE TABLE `head_slider` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `avatar_left` int(11) NOT NULL,
  `title_left` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `order` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for logs_table
-- ----------------------------
DROP TABLE IF EXISTS `logs_table`;
CREATE TABLE `logs_table` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `soft_Id` int(11) NOT NULL,
  `content` text NOT NULL,
  `ver` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `order` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for nav_slider
-- ----------------------------
DROP TABLE IF EXISTS `nav_slider`;
CREATE TABLE `nav_slider` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `order` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for page_info
-- ----------------------------
DROP TABLE IF EXISTS `page_info`;
CREATE TABLE `page_info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `brief` text,
  `content` text,
  `updatetime` datetime DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `head_keyword` varchar(255) DEFAULT NULL,
  `head_des` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for soft
-- ----------------------------
DROP TABLE IF EXISTS `soft`;
CREATE TABLE `soft` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for soft_version
-- ----------------------------
DROP TABLE IF EXISTS `soft_version`;
CREATE TABLE `soft_version` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `soft_id` int(11) NOT NULL DEFAULT '0',
  `ver` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for version_info
-- ----------------------------
DROP TABLE IF EXISTS `version_info`;
CREATE TABLE `version_info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ver_id` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `des` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
