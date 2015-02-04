-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: pmamysql-green.smartgslb.com
-- Generation Time: 2015-02-04 20:41:13
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

--
-- 转存表中的数据 `functions_table`
--

INSERT INTO `functions_table` (`Id`, `soft_Id`, `content`, `order`) VALUES
(1, 3, '添加到系统托盘', 0),
(2, 3, '最小化时隐藏任务栏上的kcv', 1),
(3, 3, '退出kcv时提示', 2),
(4, 3, '更换kcv窗体主题', 3),
(5, 3, '设置kcv的工具面板位置', 4),
(6, 3, '肝船用的迷你小窗口（新样式）', 5),
(7, 3, '迷你小窗口添加鼠标穿透模式（幽灵模式）', 6),
(8, 3, '热键（老板键，开关声音，快速截图）等按键设置', 7),
(9, 4, '有通知的时候发出声音提示', 0),
(10, 5, '在win7下模仿win8的通知效果', 0),
(11, 7, '在队伍里面有大破舰娘的时候发出警告,可以结合“SoundNotifier”和“WindowsNotifierEx”达到更醒目的提示。', 0),
(12, 8, '调试用，弹出异常信息', 0);

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

--
-- 转存表中的数据 `head_slider`
--

INSERT INTO `head_slider` (`Id`, `img`, `avatar_left`, `title_left`, `color`, `title`, `des`, `order`) VALUES
(1, '/images/head/1.jpg', 140, 350, '#5EBFFF', '', '', 0000000000),
(2, '/images/head/2.jpg', 400, 10, '#FFDDBE', '', '', 0000000001),
(3, '/images/head/3.jpg', 245, 430, '#3BC7FD', '', '', 0000000002),
(4, '/images/head/4.jpg', 300, 320, '#0066D5', '', '', 0000000003),
(5, '/images/head/5.jpg', 380, 10, '#51B2FF', '', '', 0000000004),
(6, '/images/head/6.jpg', 510, 430, '#0c9eff', '', '', 0000000005);

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

--
-- 转存表中的数据 `logs_table`
--

INSERT INTO `logs_table` (`Id`, `soft_Id`, `content`, `ver`, `url`, `order`) VALUES
(1, 3, '<p>忘记记录了_ (:3」∠)_</p>', 'Ver 1.6 —— Ver 1.0', NULL, 0000000000),
(2, 3, '<p>在MainWindow下的快捷键Ctrl+Tab 切换Tab模式的game和tool面板，Ctrl+M显示隐藏迷你舰队信息</p>\r\n                                    <p>加大了迷你舰队信息的内容大小</p>\r\n                                    <p>在托盘添加了显示迷你舰队信息的菜单</p>', 'Ver 1.7 — 2015.01.12', NULL, 0000000001),
(3, 3, '<p>将热键弄成一个大模块，可以设置多个热键（功能之后会慢慢加上），迷你状态窗口添加"幽灵模式"(๑•́ ₃ •̀๑) 其实就是相当于挂在那边但是鼠标能够穿透过去点击后面的东西</p>\r\n                                    <p>PS：舰娘贴吧被卖了，看来得把自己那几个荒废好久的网站弄个页面来更新发布了(๑•́ ₃ •̀๑)</p>', 'Ver 1.8 —2015.01.14', NULL, 0000000002),
(4, 3, '<p>由于迷你窗口的舰队信息太过拥挤导致有些字体过小看不清，于是重新设计了样式做成了环形样式(虽然还是蛮拥挤的，但是好看多了不是么_ (:3」∠)_ )，新样式需要各位提督用一段才能适应，这边感谢 @Chaos 吵死老板 在样式设计上给出的建议和idea</p>\r\n                                    <p>_ (:3」∠)_ 有提督的系统是win7，kcv自带的通知插件在win7会加入一个没效果的托盘用来来弹出气泡通知消息，加上本插件就会有两个托盘，于是写了个在win7下模仿win8通知效果的插件，需要的提督可以自行安装同时记得将kcv的通知插件“WindowsNotifier.dll”去掉，否则就重复了。</p>\r\n                                    <p>PS：本来周末这两天打算把大破提醒或者迷你窗口添加更多信息的，结果这两天冷得要死(๑•́ ₃ •̀๑) 我一个人躲在小黑屋里面敲代码手冻得老是敲错字，结果啥都没写好_ (:3」∠)_</p>', 'Ver 1.9 — 2015.01.18', NULL, 0000000003),
(5, 3, '<p>_ (:3」∠)_ 将kcv本体上面的四个按钮功能加到热键和托盘菜单模块，分别是 截图、开关声音、打开舰娘一览窗口、打开装备一览窗口</p>\r\n                                    <p>PS：_ (:3」∠)_用的提督一多各种环境下各种bug都来了，最近老板又丢了一堆项目过来一直催着赶,好想摸鱼修复bug啊_ (:3」∠)_</p>', 'Ver 1.10 — 2015.01.19', NULL, 0000000004),
(6, 3, '<p>拆出通用模块[AMing.Plugins.Core.dll]用于多个插件之间的交互,\r\n添加大破警告插件，添加迷你窗口的舰队样式切换设置(๑´ㅂ`๑)其他那些细节下个版本在继续做吧</p>\r\n                                    <p>PS：_ (:3」∠)_最近五月病犯了，一躲被窝就完全不想出来ฅ(๑*д*๑)ฅ!!</p>', 'Ver 1.11 — 2015.02.04', NULL, 0000000005);

-- --------------------------------------------------------

--
-- 表的结构 `nav_slider`
--

CREATE TABLE IF NOT EXISTS `nav_slider` (
  `Id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `order` int(10) unsigned zerofill NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nav_slider`
--

INSERT INTO `nav_slider` (`Id`, `img`, `order`) VALUES
(1, '/images/nav1.jpg', 0000000000),
(2, '/images/nav2.jpg', 0000000001),
(3, '/images/nav3.jpg', 0000000002);

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

--
-- 转存表中的数据 `page_info`
--

INSERT INTO `page_info` (`Id`, `title`, `brief`, `content`, `updatetime`, `head_title`, `head_keyword`, `head_des`) VALUES
(1, '提督很忙的拓展插件(KanColleViewer Plugins)', '<p>(σﾟ∀ﾟ)σ网站终于上线啦！</p>\r\n<p>(๑´ㅂ`๑)好吧只有一个页面，ie 6 7  8 或者用这些ie内核的浏览器可能会看到奇怪的页面 ฅ(๑*д*๑)ฅ!! 浏览器兼容性什么的完全不想去弄。</p>\r\n<p>页面动画效果有点问题，网络卡的时候会看到奇怪的画面(๑´ㅂ`๑)请不要嫌弃，命某比较懒直接拿两年前写的来用了，(σﾟ∀ﾟ)σ那个啥 插件比较重要嘛，网页什么的等以后有时间再去弄对吧？嗯没错ฅ(๑*д*๑)ฅ</p>\r\n<p>(σﾟ∀ﾟ)σ这次新加了一个“大破警告”的插件，命某在很久很久以前（afk之前）(๑´ㅂ`๑)3-2肝船的时候，因为长期爆肝导致注意力下降，某次回港补给的时候没把大破的伊姆雅换下来然后又去了3-2，然后成了粪提( TдT)，虽然那只伊姆雅只有3 4级，虽然母港还有十几只伊姆雅，( TдT)但是那个啥就算是狗粮就算解体，作为一个提督也不应该让她沉掉吧，希望这个插件能帮助大家在肝船的时候保护好自己的舰娘。</p>', '<p>\r\n<a class="img" href="#">\r\n<img src="images/img1.png" alt="插件截图" />\r\n</a>\r\n<a class="img" href="#">\r\n<img src="images/img1.png" alt="插件截图" />\r\n</a>\r\n</p>\r\n<p>\r\n<strong>下载地址</strong>\r\n<a href="https://github.com/AMMing/KcvPlugins/releases/download/1.10/KcvPlugins.Release.Ver1.10.zip" target="_blank">KcvPlugins.Release.Ver1.10.zip</a>\r\n</p>\r\n<p>\r\n<strong>项目源码</strong>\r\n<a href="https://github.com/AMMing/KcvPlugins" target="_blank">https://github.com/AMMing/KcvPlugins</a>\r\n</p>\r\n\r\n<div class="mleft30">\r\n<p>KanColleViewer 在3.0版本之后增加了插件功能，可以通过添加插件完善kcv的功能。</p>\r\n<p>本插件在只kcv3.4下测试，其他旧版本理论上可以，(๑•́ ₃ •̀๑) 不过没有测试，使用时最好是用最新的kcv。</p>\r\n</div>', '2015-02-04 01:49:21', '提督很忙的拓展插件(KanColleViewer Plugins)', 'KanColleViewer Plugins,KanColleViewer,kcv,kcvp,提督很忙,提督業も忙しい,kancolleviewer插件,kcv插件,提督很忙的插件,提督很忙win7,WindowsNotifier', '提督很忙的拓展插件(KanColleViewer Plugins)');

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

--
-- 转存表中的数据 `soft`
--

INSERT INTO `soft` (`Id`, `name`, `key`, `order`) VALUES
(1, 'KcvPlugins', 'kcvp', 1),
(3, 'SettingsExtensions', 'settingex', 2),
(4, 'SoundNotifier', 'soundtoast', 3),
(5, 'WindowsNotifierEx', 'win8toast', 4),
(8, 'DebugExtensions', 'debug', 99),
(7, 'Warning', 'warning', 5);

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

--
-- 转存表中的数据 `soft_version`
--

INSERT INTO `soft_version` (`Id`, `soft_id`, `ver`, `update_date`, `url`, `name`) VALUES
(1, 1, '1.9', '2015-01-18', '/files/KcvPlugins.Release.Ver1.9.zip', 'KcvPlugins.Release.Ver1.9.zip'),
(2, 1, '1.10', '2015-01-20', '/files/KcvPlugins.Release.Ver1.10.zip', 'KcvPlugins.Release.Ver1.10.zip'),
(3, 3, '1.10', '2015-01-20', '/files/SettingsExtensions.Release.Ver1.10.zip', 'SettingsExtensions.Release.Ver1.10.zip'),
(4, 4, '1.1', '2015-01-20', '/files/SoundNotifier.Release.Ver1.1.zip', 'SoundNotifier.Release.Ver1.1.zip'),
(5, 5, '1.1', '2015-01-20', '/files/WindowsNotifierForWin7.Release.Ver1.1.zip', 'WindowsNotifierForWin7.Release.Ver1.1.zip'),
(6, 1, '1.11', '2015-02-04', '/files/KcvPlugins.Release.2015.02.04.zip', 'KcvPlugins.Release.2015.02.04.zip'),
(7, 3, '1.11', '2015-02-04', '/files/SettingsExtensions.Ver1.11.zip', 'SettingsExtensions.Ver1.11.zip'),
(8, 4, '1.2', '2015-02-04', '/files/SoundNotifier.Ver1.2.zip', 'SoundNotifier.Ver1.2.zip'),
(9, 5, '1.2', '2015-02-04', '/files/WindowsNotifierEx.Ver1.2.zip', 'WindowsNotifierEx.Ver1.2.zip'),
(10, 7, '1.0', '2015-02-04', '/files/Warning.Ver1.0.zip', 'Warning.Ver1.0.zip'),
(11, 8, '1.1', '2015-02-04', '/files/DebugExtensions.Ver1.1.zip', 'DebugExtensions.Ver1.1.zip');

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
-- 转存表中的数据 `version_info`
--

INSERT INTO `version_info` (`Id`, `ver_id`, `des`) VALUES
(1, '1', '由于迷你窗口的舰队信息太过拥挤导致有些字体过小看不清，于是重新设计了样式做成了环形样式（虽然还是蛮拥挤的，但是好看多了不是么_ (:3」∠)_ ），新样式需要各位提督用一段才能适应，这边感谢 @Chaos 吵死老板 在样式设计上给出的建议和idea\r\n\r\n  _ (:3」∠)_  有提督的系统是win7，kcv自带的通知插件在win7会加入一个没效果的托盘用来来弹出气泡通知消息，加上本插件就会有两个托盘，于是写了个在win7下模仿win8通知效果的插件，需要的提督可以自行安装同时记得将kcv的通知插件（WindowsNotifier.dll）去掉，否则就重复了。\r\n\r\n  PS：本来周末这两天打算把大破提醒或者迷你窗口添加更多信息的，结果这两天冷得要死(๑•́ ₃ •̀๑) 我一个人躲在小黑屋里面敲代码手冻得老是敲错字，结果啥都没写好_ (:3」∠)_\r\n');

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
