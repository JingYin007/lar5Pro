/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : lar_pro

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-11-09 10:02:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lar5_admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `lar5_admin_roles`;
CREATE TABLE `lar5_admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '角色称呼',
  `nav_menu_ids` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '权限下的菜单ID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态标识',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar5_admin_roles
-- ----------------------------
INSERT INTO `lar5_admin_roles` VALUES ('1', '终级管理员', '1|2|3|4|5|6|7|8|', '2018-02-01 07:31:50', '2018-02-06 01:49:15', '1');
INSERT INTO `lar5_admin_roles` VALUES ('2', '初级管理员', '3|4|5|', '2018-02-01 07:31:50', '2018-02-05 04:03:14', '1');
INSERT INTO `lar5_admin_roles` VALUES ('3', '测试账号', '1|2|3|4|6|8|', '2018-02-01 12:20:36', '2018-02-05 04:02:53', '1');

-- ----------------------------
-- Table structure for lar5_admins
-- ----------------------------
DROP TABLE IF EXISTS `lar5_admins`;
CREATE TABLE `lar5_admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '管理员昵称',
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '管理员头像',
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL DEFAULT '87d9bb400c0634691f0e3baaf1e2fd0d' COMMENT '管理员登录密码',
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色ID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态标识',
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '世界上没有两片完全相同的叶子！' COMMENT '备注信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar5_admins
-- ----------------------------
INSERT INTO `lar5_admins` VALUES ('1', '百里守约', '/cms/images/user.png', '87d9bb400c0634691f0e3baaf1e2fd0d', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50', '1', '世界上没有两片完全相同的叶子！');
INSERT INTO `lar5_admins` VALUES ('2', '百里玄策', '/cms/images/user.png', '87d9bb400c0634691f0e3baaf1e2fd0d', '2', '2018-02-01 07:31:50', '2018-02-01 07:31:50', '1', '世界上没有两片完全相同的叶子！');
INSERT INTO `lar5_admins` VALUES ('3', 'moTzxx@admin', 'http://lar5pro.com/cms/images/user.png', 'db69fc039dcbd2962cb4d28f5891aae1', '1', '2018-02-01 08:01:00', '2018-02-07 03:51:47', '1', 'HELLO MY WORLD !');

-- ----------------------------
-- Table structure for lar5_article_points
-- ----------------------------
DROP TABLE IF EXISTS `lar5_article_points`;
CREATE TABLE `lar5_article_points` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID 标识',
  `article_id` int(11) DEFAULT NULL COMMENT '文章标识',
  `view` int(11) NOT NULL DEFAULT '0' COMMENT '文章浏览量',
  `keywords` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '关键词',
  `picture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '文章配图',
  `abstract` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '文章摘要',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '删除标记',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar5_article_points
-- ----------------------------
INSERT INTO `lar5_article_points` VALUES ('1', '1', '11', '', '/home/images/article_1.jpg', '曾长时间使用过苹果产品的人都会有一个感性的认识，产品用的久了就容易变卡，应用的使用不太顺畅，这种现象在如付费支付、户外定位等急切情况下会令人非常焦急。', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_article_points` VALUES ('2', '2', '10', '', '/home/images/article_2.jpg', '早晨醒来第一件事情便是解锁手机,瞄一眼朋友圈和工作群组的更新消息,手机电量少于30%就开始焦虑恐慌', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_article_points` VALUES ('3', '3', '10', '', '/home/images/article_3.jpg', '北京时间12月23日，NBA常规赛继续进行，新奥尔良鹈鹕客场挑战奥兰多魔术，魔术97-111不敌鹈鹕', '1', '2018-02-01 07:31:50', '2018-02-07 11:17:20');

-- ----------------------------
-- Table structure for lar5_articles
-- ----------------------------
DROP TABLE IF EXISTS `lar5_articles`;
CREATE TABLE `lar5_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Article 主键',
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '标题',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '作者ID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `list_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序标识 越大越靠前',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '文章内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar5_articles
-- ----------------------------
INSERT INTO `lar5_articles` VALUES ('1', '讲个笑话：苹果为了“保护你” 让你手机变卡了', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50', '1', '曾长时间使用过苹果产品的人都会有一个感性的认识，产品用的久了就容易变卡，应用的使用不太顺畅，这种现象在如付费支付、户外定位等急切情况下会令人非常焦急。');
INSERT INTO `lar5_articles` VALUES ('2', '放不下的是手机，感受不到的是生活', '2', '2018-02-01 07:31:50', '2018-02-01 07:31:50', '1', '早晨醒来第一件事情便是解锁手机,瞄一眼朋友圈和工作群组的更新消息,手机电量少于30%就开始焦虑恐慌,偶尔和老友涮火锅,吃到一半抱着手机出去回电话,回桌发现涮好的肥牛早就凉了');
INSERT INTO `lar5_articles` VALUES ('3', '魔术97-111不敌鹈鹕 惨遭七连败', '1', '2018-02-01 07:31:50', '2018-02-07 11:17:20', '6', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;开场后，第32秒，佩顿在朗多投篮时犯规，送给鹈鹕2次罚球机会。第1分35秒，考辛斯妙传，朱-霍勒迪三分远投命中。第7分28秒，佩顿手滑丢球，被考辛斯抢断。鹈鹕对篮板发起疯狂进攻，本节共抢下16个篮板，包括6个前场篮板，其中戴维斯一人就贡献4个篮板球。 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>');

-- ----------------------------
-- Table structure for lar5_comments
-- ----------------------------
DROP TABLE IF EXISTS `lar5_comments`;
CREATE TABLE `lar5_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL DEFAULT '0' COMMENT '文章ID',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `reply_id` int(11) NOT NULL DEFAULT '0' COMMENT '所回复的评论ID,0表示原始评论',
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '评论内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar5_comments
-- ----------------------------
INSERT INTO `lar5_comments` VALUES ('1', '1', '2', '0', '这是一个神奇的世界，你是个神奇的人！', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_comments` VALUES ('2', '1', '1', '1', '嗯，你说的对！', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_comments` VALUES ('3', '2', '2', '0', '我们啊，其实都一样', '2018-02-01 07:31:50', '2018-02-01 07:31:50');

-- ----------------------------
-- Table structure for lar5_migrations
-- ----------------------------
DROP TABLE IF EXISTS `lar5_migrations`;
CREATE TABLE `lar5_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lar5_migrations
-- ----------------------------
INSERT INTO `lar5_migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `lar5_migrations` VALUES ('2', '2017_12_25_111038_create_articles_table', '1');
INSERT INTO `lar5_migrations` VALUES ('3', '2017_12_26_063736_create_comments_table', '1');
INSERT INTO `lar5_migrations` VALUES ('4', '2018_01_01_115202_create_nav_menus_table', '1');
INSERT INTO `lar5_migrations` VALUES ('5', '2018_01_09_074013_create_article_points_table', '1');
INSERT INTO `lar5_migrations` VALUES ('6', '2018_01_09_075218_create_today_words_table', '1');
INSERT INTO `lar5_migrations` VALUES ('7', '2018_01_28_081729_create_admin_roles_table', '1');
INSERT INTO `lar5_migrations` VALUES ('8', '2018_01_28_081817_create_admins_table', '1');
INSERT INTO `lar5_migrations` VALUES ('9', '2018_02_07_065703_create_sessions_table', '2');
INSERT INTO `lar5_migrations` VALUES ('10', '2018_02_07_105721_create_sessions_table', '3');

-- ----------------------------
-- Table structure for lar5_nav_menus
-- ----------------------------
DROP TABLE IF EXISTS `lar5_nav_menus`;
CREATE TABLE `lar5_nav_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'navMenu 主键',
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '菜单名称',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父级菜单ID',
  `action` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'action地址（etc:admin/home）',
  `icon` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '自定义图标样式',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态，1：正常，-1：删除',
  `list_order` tinyint(4) NOT NULL DEFAULT '0' COMMENT '排序标识，越大越靠前',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar5_nav_menus
-- ----------------------------
INSERT INTO `lar5_nav_menus` VALUES ('0', '根级菜单', '0', '', '/cms/images/icon/menu_icon.png', '1', '0', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_nav_menus` VALUES ('1', '菜单管理', '0', '', '/cms/images/icon/menu_icon.png', '1', '2', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_nav_menus` VALUES ('2', '菜单列表', '1', 'cms/menu/index', '/cms/images/icon/menu_list.png', '1', '0', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_nav_menus` VALUES ('3', '前台管理', '0', '', '/cms/images/icon/desktop.png', '1', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_nav_menus` VALUES ('4', '今日赠言', '3', 'cms/todayWords/index', '/cms/images/icon/diplom.png', '1', '0', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_nav_menus` VALUES ('5', '文章列表', '3', 'cms/article/index', '/cms/images/icon/adaptive.png', '1', '0', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_nav_menus` VALUES ('6', '管理员', '0', '', '/cms/images/icon/manage.png', '1', '0', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_nav_menus` VALUES ('7', '管理员列表', '6', 'cms/admin/index', '/cms/images/icon/admin.png', '1', '0', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_nav_menus` VALUES ('8', '角色列表', '6', 'cms/admin/role', '/cms/images/icon/role.png', '1', '0', '2018-02-01 07:31:50', '2018-02-01 11:03:38');

-- ----------------------------
-- Table structure for lar5_sessions
-- ----------------------------
DROP TABLE IF EXISTS `lar5_sessions`;
CREATE TABLE `lar5_sessions` (
  `id` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lar5_sessions
-- ----------------------------
INSERT INTO `lar5_sessions` VALUES ('zDoFYKTKI8QXtN2Kwis49qSMtqjRJjD5zVIOBHWD', null, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36', 'ZXlKcGRpSTZJbTF6VUV3d2NtVmxjekFyTmt3NWRGa3pORUZNYlVFOVBTSXNJblpoYkhWbElqb2lOaXM1WkZOMlRVZDFUM2t3VDBsMU5WaFBXVkZUYWs5UlJ6ZDZja2RsU1hrd09HRTBNRkJFTkRSTGRIUlpSRFVyT0RCSVVtUjJSRTVTWmtsWWJVdG5Oamx5V0ZaS01XbGtTSEZ6WEM5TVUyVTJkSFZvVUVGbVFYWnNUR1ZVVVVRNWRrZHpjRmgwY1RSNlNVSldlbkJsZG5SWVpFNHdkbWRMTnpoVWJIVnVRU3RUTmtGWFpVcG5UREJ6WlV4cVZsSkVlVWQ2WTAxMmNXNHpNblJSYkRoNVZrSmlVMFZoWWtWcmIzTmpZekEwUlRab1ZqQjBWVWswYXpOS1hDOUNabXR4V1ZjMlpVNU9XRXN4T0ZwTlFXVkRjR1JHWkN0NGFqTmNMMjFCZFN0ME1WWlJVV05XUVZodlhDOXBja05JU0dwRFVtTnJjRXhwUjNjMk1rNXNkR2hUVDBGcGMzTnZSRVk1VVRkV1dtRjVWRlJSWVhocWJIRk5LMkpsV210Q1lsTTRXSGh5ZUdaRGVHWmpXV1ppYTBRMFBTSXNJbTFoWXlJNkltRTNZV1l6TnpSa05HWXpaVGs1TkRCa05XTXhOVGMyTVdVd05tUmxNVE5qTVRNME5UWXpZalk0WmpJMk9XSmhOekV3WTJRME1XVmlOekJtT1RJNVlUUWlmUT09', '1519720638');
INSERT INTO `lar5_sessions` VALUES ('dqF5ptxsurP1cNdZL7K2NkriRjP71Bt0wnwf89x4', null, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36', 'ZXlKcGRpSTZJak15WVU5SlhDOUpkWHBrZVZSd1ZFeHpSVGhqV2sxQlBUMGlMQ0oyWVd4MVpTSTZJbkkwUjJGcGIxWnNaV0Z5YUVkclZEaG9lRnBoYUVodlowWkRhbTVuV1ZGWVlXbHFTV0ozVVVORksyVjBZVWRqUmxaVVZXNHJNME5aZVRCWlRqazBUMFJqZDBKWlEyeE1jbFkzZG1kc1dEZG1TbVpUWjJkNGNFVndTWEp3WjJWdGRVNVJPV0ZKY1hoVWFXZEpabnB4VVU1emEyUnRaM1pUVUZaeFdXdHJaMVZ0VVVaamIwSTFTemcxYzJwUVMwNW5Va00zVVhFMmVUaFJNMWhhZWxSc2RVbFNabTFpTTFJeWVqbG5kMWRWVkVsSU5HOVlaVTVOV1d0UFMzTlBWa3d4VlRWR09FRjFLMlJMTjBoT2REaElPRzVpTXpjelVrYzFibFpxVEhOd1FXUnRhMk5CYjFKc01USnVPVzlYZWtjeE1ERldWM1J6VFNzMVZsbGFlbmR3ZW5OaFREQjNhVVpoWnl0aUt6WjBTVlJDYkVSd05VbFhTbTFSVEhwcE5WZzVkVkJYTWpCdVJIbENSVUZIYzIxU2VFNXlZazgwVW5NeFREQnhiWFJjTDFkQ1VsVldlV3B6WVZsRmVtcHNUek5rTUhsTE5HMW9VSGM5UFNJc0ltMWhZeUk2SWpoa1lUWmxOekE1Tmprek56ZzFNekkxWW1Rd01EUTNPR0k1T0RoaU5ESmtOVFF3TlRRNVlXUm1ZbUZrWmpZd1pqVmlPRGxpTVRFM1pqVTJOell6WXpraWZRPT0=', '1518091061');
INSERT INTO `lar5_sessions` VALUES ('xdmdLR6eI8nRVWsWESB3i4K4Jh5gn8sAGomZRAo6', null, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36', 'ZXlKcGRpSTZJbEY0YlRGVmFEVnhjU3N4T0V0eWFUSkNjVTVYZWxFOVBTSXNJblpoYkhWbElqb2lObmhETnpCaVdESjNWM1JoY2psc2NWTnRhMDFoWm1Jd05Hb3plVU5SVHpCT1MyaFpPVVJ6VFN0ck5XWnRjbEZ2V25WWlFXeFFla3RSVUdWNEszZHhOSE5ZTUhaRmNVTTBjbGhFSzJadVJVaEtkVTE2VDFSME0wMUxLMFpVYmpKbmRERkZSbmhPYVVWT01GUlVTbk5rWlU0NGEwdDRjVkZ6ZFZwRVlYcE1kVXhjTHpNMmMyTTVTSFp6UTNWNlpUWktaekJqVlRkNU4wNVFkazVsWlRKQk0wVXlORUpuZWxoNFQxTTFTMGx2T0VsM1JscEZYQzk2ZFZGc1V6aG1TbHd2UkZaSFNVSnNWMHBvYXpnM2FUUjFUa0ZMTldsT1VFMWlSa1JYWTBOVlRtUTRZV2Q2Y1d0Y0wzVkllVEE0YkhSbVRUaHpWV1IwUm5sdFFYRlZheXRyVDNZNVlWUTFWMEZKUkZKeVoycDJiRXA0VWpJNVFqSmtSa3RSYXpBNVUzZFBjSGxJZFZCcU4ydEhibmg0V2xOeFVqUndUbFF5YnpGNWJFVkNZVXhwYTNoRU1XbFJWRUZKTnpsbGJXSmhTelYyU1d4dFdrUnNOR2RxUVQwOUlpd2liV0ZqSWpvaU5XWXpPV1V4TXpJeE1EYzVZbU16TmpaaU5tVTJObVpqTVRjellUbGpaRGt4Tm1JMVpUSXhaR013TkdSbU5HUmxORFprTmpCaE0yRmxPR1l6WVROaE5DSjk=', '1518077044');

-- ----------------------------
-- Table structure for lar5_today_words
-- ----------------------------
DROP TABLE IF EXISTS `lar5_today_words`;
CREATE TABLE `lar5_today_words` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `word` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '摘句内容，不要太长',
  `from` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '出处',
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '插图',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态，1：正常，-1：删除',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar5_today_words
-- ----------------------------
INSERT INTO `lar5_today_words` VALUES ('1', '谁的青春不迷茫，其实我们都一样！', '谁的青春不迷茫', '/home/images/ps.jpg', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_today_words` VALUES ('2', '想和你重新认识一次 从你叫什么名字说起', '你的名字', '/home/images/ps2.png', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_today_words` VALUES ('3', '我是一只雁，你是南方云烟。但愿山河宽，相隔只一瞬间.', '秦时明月', '/home/images/ps3.png', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_today_words` VALUES ('4', '人老了的好处，就是可失去的东西越来越少了.', '哈尔的移动城堡', '/home/images/ps4.png', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_today_words` VALUES ('5', '到底要怎么才能证明自己成长了 那种事情我也不知道啊 但是只要那一抹笑容尚存 我便心无旁骛 ', '声之形', '/home/images/ps5.png', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_today_words` VALUES ('6', '你觉得被圈养的鸟儿为什么无法自由地翱翔天际？是因为鸟笼不是属于它的东西', '东京食尸鬼', '/home/images/ps6.png', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_today_words` VALUES ('7', '我手里拿着刀，没法抱你。我放下刀，没法保护你', '死神', '/home/images/ps7.png', '1', '2018-02-01 07:31:50', '2018-02-01 07:31:50');

-- ----------------------------
-- Table structure for lar5_users
-- ----------------------------
DROP TABLE IF EXISTS `lar5_users`;
CREATE TABLE `lar5_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User 主键',
  `user_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '登录密码',
  `head_portrait` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '头像',
  `age` tinyint(4) NOT NULL DEFAULT '0' COMMENT '年龄',
  `signature` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '个性签名',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar5_users
-- ----------------------------
INSERT INTO `lar5_users` VALUES ('1', 'MoTzxx', 'e10adc3949ba59abbe56e057f20f883e', 'home/images/user_img1.jpg', '22', '你若盛开，清风自来', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_users` VALUES ('2', '百里守约', 'c33367701511b4f6020ec61ded352059', 'home/images/user_img2.jpg', '25', '放心，我一直都在！', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
INSERT INTO `lar5_users` VALUES ('3', '牧云骑星', 'e10adc3949ba59abbe56e057f20f883e', 'home/images/user_img3.jpg', '23', '天上的每一颗星星，都是一个值得还念的故人！', '2018-02-01 07:31:50', '2018-02-01 07:31:50');
