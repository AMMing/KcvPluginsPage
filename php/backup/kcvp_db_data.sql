/*
Navicat MySQL Data Transfer

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2015-01-24 22:42:40
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
-- Records of download_record
-- ----------------------------
INSERT INTO `download_record` VALUES ('60', '1', '127.0.0.1', '2015-01-23 10:30:47', '2015-01-23 10:54:14', '3');

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
-- Records of functions_table
-- ----------------------------
INSERT INTO `functions_table` VALUES ('1', '3', '添加到系统托盘', '0');
INSERT INTO `functions_table` VALUES ('2', '3', '最小化时隐藏任务栏上的kcv', '1');
INSERT INTO `functions_table` VALUES ('3', '3', '退出kcv时提示', '2');
INSERT INTO `functions_table` VALUES ('4', '3', '更换kcv窗体主题', '3');
INSERT INTO `functions_table` VALUES ('5', '3', '设置kcv的工具面板位置', '4');
INSERT INTO `functions_table` VALUES ('6', '3', '肝船用的迷你小窗口（新样式）', '5');
INSERT INTO `functions_table` VALUES ('7', '3', '迷你小窗口添加鼠标穿透模式（幽灵模式）', '6');
INSERT INTO `functions_table` VALUES ('8', '3', '热键（老板键，开关声音，快速截图）等按键设置', '7');
INSERT INTO `functions_table` VALUES ('9', '4', '有通知的时候发出声音提示', '0');
INSERT INTO `functions_table` VALUES ('10', '5', '在win7下模仿win8的通知效果', '0');

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
-- Records of head_slider
-- ----------------------------
INSERT INTO `head_slider` VALUES ('1', '/images/head/1.jpg', '140', '350', '#5EBFFF', '', '', '0000000000');
INSERT INTO `head_slider` VALUES ('2', '/images/head/2.jpg', '400', '10', '#FFDDBE', '', '', '0000000001');
INSERT INTO `head_slider` VALUES ('3', '/images/head/3.jpg', '245', '430', '#3BC7FD', '', '', '0000000002');
INSERT INTO `head_slider` VALUES ('4', '/images/head/4.jpg', '300', '320', '#0066D5', '', '', '0000000003');
INSERT INTO `head_slider` VALUES ('5', '/images/head/5.jpg', '380', '10', '#51B2FF', '', '', '0000000004');
INSERT INTO `head_slider` VALUES ('6', '/images/head/6.jpg', '510', '430', '#0c9eff', '', '', '0000000005');

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
-- Records of logs_table
-- ----------------------------
INSERT INTO `logs_table` VALUES ('1', '3', '<p>忘记记录了_ (:3」∠)_</p>', 'Ver 1.6 —— Ver 1.0', null, '0000000000');
INSERT INTO `logs_table` VALUES ('2', '3', '<p>在MainWindow下的快捷键Ctrl+Tab 切换Tab模式的game和tool面板，Ctrl+M显示隐藏迷你舰队信息</p>\r\n                                    <p>加大了迷你舰队信息的内容大小</p>\r\n                                    <p>在托盘添加了显示迷你舰队信息的菜单</p>', 'Ver 1.7 — 2015.01.12', null, '0000000001');
INSERT INTO `logs_table` VALUES ('3', '3', '<p>将热键弄成一个大模块，可以设置多个热键（功能之后会慢慢加上），迷你状态窗口添加\"幽灵模式\"(๑•́ ₃ •̀๑) 其实就是相当于挂在那边但是鼠标能够穿透过去点击后面的东西</p>\r\n                                    <p>PS：舰娘贴吧被卖了，看来得把自己那几个荒废好久的网站弄个页面来更新发布了(๑•́ ₃ •̀๑)</p>', 'Ver 1.8 —2015.01.14', null, '0000000002');
INSERT INTO `logs_table` VALUES ('4', '3', '<p>由于迷你窗口的舰队信息太过拥挤导致有些字体过小看不清，于是重新设计了样式做成了环形样式(虽然还是蛮拥挤的，但是好看多了不是么_ (:3」∠)_ )，新样式需要各位提督用一段才能适应，这边感谢 @Chaos 吵死老板 在样式设计上给出的建议和idea</p>\r\n                                    <p>_ (:3」∠)_ 有提督的系统是win7，kcv自带的通知插件在win7会加入一个没效果的托盘用来来弹出气泡通知消息，加上本插件就会有两个托盘，于是写了个在win7下模仿win8通知效果的插件，需要的提督可以自行安装同时记得将kcv的通知插件“WindowsNotifier.dll”去掉，否则就重复了。</p>\r\n                                    <p>PS：本来周末这两天打算把大破提醒或者迷你窗口添加更多信息的，结果这两天冷得要死(๑•́ ₃ •̀๑) 我一个人躲在小黑屋里面敲代码手冻得老是敲错字，结果啥都没写好_ (:3」∠)_</p>', 'Ver 1.9 — 2015.01.18', null, '0000000003');
INSERT INTO `logs_table` VALUES ('5', '3', '<p>_ (:3」∠)_ 将kcv本体上面的四个按钮功能加到热键和托盘菜单模块，分别是 截图、开关声音、打开舰娘一览窗口、打开装备一览窗口</p>\r\n                                    <p>PS：_ (:3」∠)_用的提督一多各种环境下各种bug都来了，最近老板又丢了一堆项目过来一直催着赶,好想摸鱼修复bug啊_ (:3」∠)_</p>', 'Ver 1.10 — 2015.01.19', null, '0000000004');

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
-- Records of nav_slider
-- ----------------------------
INSERT INTO `nav_slider` VALUES ('1', '/images/nav1.jpg', '0000000000');
INSERT INTO `nav_slider` VALUES ('2', '/images/nav2.jpg', '0000000001');
INSERT INTO `nav_slider` VALUES ('3', '/images/nav3.jpg', '0000000002');

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
-- Records of page_info
-- ----------------------------
INSERT INTO `page_info` VALUES ('1', '提督很忙的拓展插件(KanColleViewer Plugins)', '<p>(σﾟ∀ﾟ)σ网站终于上线了啦！</p>\r\n<p>(๑´ㅂ`๑)好吧只有一个页面，ie 6 7  8 或者用这些ie内核的浏览器可能会看到奇怪的页面 ฅ(๑*д*๑)ฅ!! 浏览器兼容性什么的完全不想去弄。</p>\r\n<p>(๑´ㅂ`๑)请不要吐槽网站太卡打不开什么的，(๑•́ ₃ •̀๑) 没办法一年才100软妹的小霸王虚拟主机，各种烂，国外那些又被墙得厉害ฅ(๑*д*๑)ฅ我自己都打不开</p>\r\n<p>页面动画效果有点问题，网络卡的时候会看到奇怪的画面(๑´ㅂ`๑)请不要嫌弃，老夫比较懒直接拿两年前写的来用了，(σﾟ∀ﾟ)σ那个啥 插件比较重要嘛，网页什么的等以后有时间再去弄对吧？嗯没错ฅ(๑*д*๑)ฅ</p>', '<p>\r\n<a class=\"img\" href=\"#\">\r\n<img src=\"images/img1.png\" alt=\"插件截图\" />\r\n</a>\r\n<a class=\"img\" href=\"#\">\r\n<img src=\"images/img1.png\" alt=\"插件截图\" />\r\n</a>\r\n</p>\r\n<p>\r\n<strong>下载地址</strong>\r\n<a href=\"https://github.com/AMMing/KcvPlugins/releases/download/1.10/KcvPlugins.Release.Ver1.10.zip\" target=\"_blank\">KcvPlugins.Release.Ver1.10.zip</a>\r\n</p>\r\n<p>\r\n<strong>项目源码</strong>\r\n<a href=\"https://github.com/AMMing/KcvPlugins\" target=\"_blank\">https://github.com/AMMing/KcvPlugins</a>\r\n</p>\r\n\r\n<div class=\"mleft30\">\r\n<p>KanColleViewer 在3.0版本之后增加了插件功能，可以通过添加插件完善kcv的功能。</p>\r\n<p>本插件在只kcv3.4下测试，其他旧版本理论上可以，(๑•́ ₃ •̀๑) 不过没有测试，使用时最好是用最新的kcv。</p>\r\n</div>', '2015-01-20 12:25:21', '提督很忙的拓展插件(KanColleViewer Plugins)', 'KanColleViewer Plugins,KanColleViewer,kcv,kcvp,提督很忙,提督業も忙しい', '提督很忙的拓展插件(KanColleViewer Plugins)');

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
-- Records of soft
-- ----------------------------
INSERT INTO `soft` VALUES ('1', 'KcvPlugins', 'kcvp');
INSERT INTO `soft` VALUES ('3', 'SettingsExtensions', 'settingex');
INSERT INTO `soft` VALUES ('4', 'SoundNotifier', 'soundtoast');
INSERT INTO `soft` VALUES ('5', 'WindowsNotifierForWin7', 'win8toast');

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
-- Records of soft_version
-- ----------------------------
INSERT INTO `soft_version` VALUES ('1', '1', '1.9', '2015-01-18', '/files/KcvPlugins.Release.Ver1.9.zip', 'KcvPlugins.Release.Ver1.9.zip');
INSERT INTO `soft_version` VALUES ('2', '1', '1.10', '2015-01-20', '/files/KcvPlugins.Release.Ver1.10.zip', 'KcvPlugins.Release.Ver1.10.zip');
INSERT INTO `soft_version` VALUES ('3', '3', '1.10', '2015-01-20', '/files/SettingsExtensions.Release.Ver1.10.zip', 'SettingsExtensions.Release.Ver1.10.zip');
INSERT INTO `soft_version` VALUES ('4', '4', '1.1', '2015-01-20', '/files/SoundNotifier.Release.Ver1.1.zip', 'SoundNotifier.Release.Ver1.1.zip');
INSERT INTO `soft_version` VALUES ('5', '5', '1.1', '2015-01-20', '/files/WindowsNotifierForWin7.Release.Ver1.1.zip', 'WindowsNotifierForWin7.Release.Ver1.1.zip');

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

-- ----------------------------
-- Records of version_info
-- ----------------------------
INSERT INTO `version_info` VALUES ('1', '1', '由于迷你窗口的舰队信息太过拥挤导致有些字体过小看不清，于是重新设计了样式做成了环形样式（虽然还是蛮拥挤的，但是好看多了不是么_ (:3」∠)_ ），新样式需要各位提督用一段才能适应，这边感谢 @Chaos 吵死老板 在样式设计上给出的建议和idea\r\n\r\n	_ (:3」∠)_  有提督的系统是win7，kcv自带的通知插件在win7会加入一个没效果的托盘用来来弹出气泡通知消息，加上本插件就会有两个托盘，于是写了个在win7下模仿win8通知效果的插件，需要的提督可以自行安装同时记得将kcv的通知插件（WindowsNotifier.dll）去掉，否则就重复了。\r\n\r\n	PS：本来周末这两天打算把大破提醒或者迷你窗口添加更多信息的，结果这两天冷得要死(๑•́ ₃ •̀๑) 我一个人躲在小黑屋里面敲代码手冻得老是敲错字，结果啥都没写好_ (:3」∠)_\r\n');
