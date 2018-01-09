/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : lar_pro

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-14 09:17:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bjy_articles
-- ----------------------------
DROP TABLE IF EXISTS `bjy_articles`;
CREATE TABLE `bjy_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章表主键',
  `category_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '分类id',
  `title` char(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '标题',
  `author` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '作者',
  `markdown` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'markdown文章内容',
  `html` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'markdown转的html页面',
  `description` char(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '描述',
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '关键词',
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '封面图',
  `is_top` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否置顶 1是 0否',
  `click` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击数',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_articles
-- ----------------------------
INSERT INTO `bjy_articles` VALUES ('1', '1', ' 写给 thinkphp 开发者的 laravel 系列教程 (一) 序言', '白俊遥', '终于；终于；终于；\n开始正式写 laravel 系列了；\n本系列教程主要面向的是多少懂点 thinkphp3.X 的开发者们；\n我把我从tp3转到laravel的历程转成一篇篇的文章教程；\n愿这一系列的文章；\n能成为童鞋们踏入laravel的引路人；\n\n如果还没下定决定要使用laravel；\n那么我上来就是一个连接；\n[关于 thinkphp 和 laravel 框架的选择](http://baijunyao.com/article/109)\n不是别人说好我也跟着说好的；\n而是我实实在在的使用过后；\n不断的发现 laravel 的优雅；\n真心喜欢；才这么推荐的；\n\n另外学习使用 laravel 不同于 thinkphp；\nthinkphp 的问题；百度一下基本都能解决；\nlaravel 一定要有一把梯子来翻墙；\ngoogle是必不可少的；\n现在体会不到没关系；\n咱边学边感受；\n最近一段时间大批的vpn被关停了；\n这里我推荐一款依然坚挺的；\n我一直在用的；\n也比较喜欢的`免费`翻墙软件；\n[推荐开发工具系列之 -- 翻墙软件 lantern](http://baijunyao.com/article/107)\n\n最后给童鞋们推荐比较不错的国内的laravel网站；\n[Laravel China 社区](https://laravel-china.org/)\n[Laravel 学院](http://laravelacademy.org/)\n[laravel速查表](https://cs.laravel-china.org/)\n\n种一棵树最好的时间是十年前；其次是现在；\n让我们开始吧；\n![laravel](/uploads/article/5958ab4dd9db4.jpg \"laravel\")', '<p>终于；终于；终于；<br>开始正式写 laravel 系列了；<br>本系列教程主要面向的是多少懂点 thinkphp3.X 的开发者们；<br>我把我从tp3转到laravel的历程转成一篇篇的文章教程；<br>愿这一系列的文章；<br>能成为童鞋们踏入laravel的引路人；</p><p>如果还没下定决定要使用laravel；<br>那么我上来就是一个连接；<br><a href=\"http://baijunyao.com/article/109\">关于 thinkphp 和 laravel 框架的选择</a><br>不是别人说好我也跟着说好的；<br>而是我实实在在的使用过后；<br>不断的发现 laravel 的优雅；<br>真心喜欢；才这么推荐的；</p><p>另外学习使用 laravel 不同于 thinkphp；<br>thinkphp 的问题；百度一下基本都能解决；<br>laravel 一定要有一把梯子来翻墙；<br>google是必不可少的；<br>现在体会不到没关系；<br>咱边学边感受；<br>最近一段时间大批的vpn被关停了；<br>这里我推荐一款依然坚挺的；<br>我一直在用的；<br>也比较喜欢的<code>免费</code>翻墙软件；<br><a href=\"http://baijunyao.com/article/107\">推荐开发工具系列之 -- 翻墙软件 lantern</a></p><p>最后给童鞋们推荐比较不错的国内的laravel网站；<br><a href=\"https://laravel-china.org/\">Laravel China 社区</a><br><a href=\"http://laravelacademy.org/\">Laravel 学院</a><br><a href=\"https://cs.laravel-china.org/\">laravel速查表</a></p><p>种一棵树最好的时间是十年前；其次是现在；<br>让我们开始吧；<br><img src=\"/uploads/article/5958ab4dd9db4.jpg\" alt=\"laravel\" title=\"laravel\"></p>', '终于；终于；终于；\n开始正式写 laravel 系列了；\n本系列教程主要面向的是多少懂点 thinkphp3.X 的开发者们；\n我把我从tp3转到laravel的历程转成一篇篇的文章教程；\n愿这一系列的文章；\n能成为童鞋们踏入laravel的引路人；\n\n如果还没下定决定要使用laravel；\n那么我上来就是一个连接；\n\n不是别人说好我也跟着说好的；\n而是我实实在在的使用过后；...', 'laravel,thinkphp, 教程', '/uploads/article/5958ab4dd9db4.jpg', '1', '667', '2017-07-16 07:35:12', '2017-12-13 03:48:38', null);

-- ----------------------------
-- Table structure for bjy_article_tags
-- ----------------------------
DROP TABLE IF EXISTS `bjy_article_tags`;
CREATE TABLE `bjy_article_tags` (
  `article_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文章id',
  `tag_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '标签id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_article_tags
-- ----------------------------
INSERT INTO `bjy_article_tags` VALUES ('1', '1', '2017-07-18 07:35:12', '2016-07-18 07:35:12', null);

-- ----------------------------
-- Table structure for bjy_categories
-- ----------------------------
DROP TABLE IF EXISTS `bjy_categories`;
CREATE TABLE `bjy_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类主键id',
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '分类名称',
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '关键词',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '描述',
  `sort` tinyint(1) NOT NULL DEFAULT '0' COMMENT '排序',
  `pid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '父级栏目id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_categories
-- ----------------------------
INSERT INTO `bjy_categories` VALUES ('1', 'php', 'php', 'php相关的文章', '1', '0', '2017-07-16 07:35:12', '2016-07-16 07:35:12', null);

-- ----------------------------
-- Table structure for bjy_chats
-- ----------------------------
DROP TABLE IF EXISTS `bjy_chats`;
CREATE TABLE `bjy_chats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_chats
-- ----------------------------
INSERT INTO `bjy_chats` VALUES ('1', '技术这东西；懂的越多；不懂的就越多；', '2017-07-18 07:35:12', '2016-07-18 07:35:12', null);

-- ----------------------------
-- Table structure for bjy_comments
-- ----------------------------
DROP TABLE IF EXISTS `bjy_comments`;
CREATE TABLE `bjy_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `oauth_user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论用户id 关联oauth_user表的id',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1：文章评论',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `article_id` int(10) unsigned NOT NULL COMMENT '文章id',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `status` tinyint(1) NOT NULL COMMENT '1:已审核 0：未审核',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_comments
-- ----------------------------
INSERT INTO `bjy_comments` VALUES ('1', '1', '1', '0', '1', '评论的内容', '1', '2017-07-16 07:35:12', '2016-07-16 07:35:12', null);

-- ----------------------------
-- Table structure for bjy_configs
-- ----------------------------
DROP TABLE IF EXISTS `bjy_configs`;
CREATE TABLE `bjy_configs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '配置项键名',
  `value` text COLLATE utf8_unicode_ci COMMENT '配置项键值 1表示开启 0 关闭',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_configs
-- ----------------------------
INSERT INTO `bjy_configs` VALUES ('1', 'WEB_NAME', '白俊遥博客', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('2', 'WEB_KEYWORDS', '个人博客,博客模板,thinkphp,laravel博客,php博客,技术博客,白俊遥', '2017-04-25 12:12:00', '2017-06-21 22:51:54', null);
INSERT INTO `bjy_configs` VALUES ('3', 'WEB_DESCRIPTION', '白俊遥的php博客,个人技术博客,bjyblog,bjyadmin官方网站', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('4', 'WEB_STATUS', '1', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('6', 'WATER_TYPE', '1', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('7', 'TEXT_WATER_WORD', 'baijunyao.com', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('8', 'TEXT_WATER_TTF_PTH', './Public/static/font/ariali.ttf', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('9', 'TEXT_WATER_FONT_SIZE', '15', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('10', 'TEXT_WATER_COLOR', '#008CBA', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('11', 'TEXT_WATER_ANGLE', '0', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('12', 'TEXT_WATER_LOCATE', '9', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('13', 'IMAGE_WATER_PIC_PTAH', './Upload/image/logo/logo.png', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('14', 'IMAGE_WATER_LOCATE', '9', '2017-04-25 12:12:00', '2017-04-25 12:12:00', null);
INSERT INTO `bjy_configs` VALUES ('15', 'IMAGE_WATER_ALPHA', '80', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('16', 'WEB_CLOSE_WORD', '网站升级中，请稍后访问。', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('17', 'WEB_ICP_NUMBER', '豫ICP备14009546号-3', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('18', 'ADMIN_EMAIL', 'baijunyao@baijunyao.com', '2017-04-25 12:12:01', '2017-06-21 22:51:54', null);
INSERT INTO `bjy_configs` VALUES ('19', 'COPYRIGHT_WORD', '本文为白俊遥原创文章,转载无需和我联系,但请注明来自<a href=\"http://baijunyao.com\">白俊遥博客</a>http://baijunyao.com', '2017-04-25 12:12:01', '2017-06-21 22:51:54', null);
INSERT INTO `bjy_configs` VALUES ('20', 'QQ_APP_ID', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('21', 'CHANGYAN_APP_ID', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('22', 'CHANGYAN_CONF', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('23', 'WEB_STATISTICS', '', '2017-04-25 12:12:01', '2017-06-21 22:51:54', null);
INSERT INTO `bjy_configs` VALUES ('24', 'CHANGEYAN_RETURN_COMMENT', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('25', 'AUTHOR', '白俊遥', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('26', 'QQ_APP_KEY', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('27', 'CHANGYAN_COMMENT', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('28', 'BAIDU_SITE_URL', '', '2017-04-25 12:12:01', '2017-06-21 22:51:54', null);
INSERT INTO `bjy_configs` VALUES ('29', 'DOUBAN_API_KEY', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('30', 'DOUBAN_SECRET', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('31', 'RENREN_API_KEY', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('32', 'RENREN_SECRET', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('33', 'SINA_API_KEY', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('34', 'SINA_SECRET', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('35', 'KAIXIN_API_KEY', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('36', 'KAIXIN_SECRET', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('37', 'SOHU_API_KEY', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('38', 'SOHU_SECRET', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('39', 'GITHUB_CLIENT_ID', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('40', 'GITHUB_CLIENT_SECRET', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('41', 'IMAGE_TITLE_ALT_WORD', '白俊遥博客', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('42', 'EMAIL_SMTP', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('43', 'EMAIL_USERNAME', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('44', 'EMAIL_PASSWORD', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('45', 'EMAIL_FROM_NAME', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('46', 'COMMENT_REVIEW', '0', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('47', 'COMMENT_SEND_EMAIL', '1', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('48', 'EMAIL_RECEIVE', '', '2017-04-25 12:12:01', '2017-04-25 12:12:01', null);
INSERT INTO `bjy_configs` VALUES ('49', 'WEB_TITLE', '白俊遥博客,技术博客,个人博客模板, php博客系统', null, null, null);
INSERT INTO `bjy_configs` VALUES ('50', 'QQ_QUN_ARTICLE_ID', '1', null, null, null);
INSERT INTO `bjy_configs` VALUES ('51', 'QQ_QUN_NUMBER', '88199093', null, null, null);
INSERT INTO `bjy_configs` VALUES ('52', 'QQ_QUN_CODE', '<a target=\"_blank\" href=\"//shang.qq.com/wpa/qunwpa?idkey=bba3fea90444ee6caf1fb1366027873fe14e86bada254d41ce67768fadd729ee\"><img border=\"0\" src=\"//pub.idqqimg.com/wpa/images/group.png\" alt=\"白俊遥博客群\" title=\"白俊遥博客群\"></a>', null, null, null);
INSERT INTO `bjy_configs` VALUES ('53', 'QQ_QUN_OR_CODE', '/uploads/images/default.png', null, null, null);

-- ----------------------------
-- Table structure for bjy_failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `bjy_failed_jobs`;
CREATE TABLE `bjy_failed_jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for bjy_friendship_links
-- ----------------------------
DROP TABLE IF EXISTS `bjy_friendship_links`;
CREATE TABLE `bjy_friendship_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '链接名',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '链接地址',
  `sort` tinyint(1) DEFAULT '1' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_friendship_links
-- ----------------------------
INSERT INTO `bjy_friendship_links` VALUES ('1', '白俊遥博客', 'https://baijunyao.com', '1', '2017-07-16 07:35:12', '2016-07-16 07:35:12', null);

-- ----------------------------
-- Table structure for bjy_git_projects
-- ----------------------------
DROP TABLE IF EXISTS `bjy_git_projects`;
CREATE TABLE `bjy_git_projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '项目主键',
  `sort` tinyint(4) NOT NULL DEFAULT '1' COMMENT '排序',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:github 2:gitee',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '项目名',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_git_projects
-- ----------------------------
INSERT INTO `bjy_git_projects` VALUES ('1', '1', '1', 'baijunyao/thinkphp-bjyadmin', '2017-10-23 21:09:04', '2017-10-26 21:42:40', null);
INSERT INTO `bjy_git_projects` VALUES ('2', '2', '2', 'shuaibai123/thinkphp-bjyadmin', '2017-10-26 21:43:07', '2017-10-26 22:02:28', null);
INSERT INTO `bjy_git_projects` VALUES ('3', '3', '1', 'baijunyao/thinkphp-bjyblog', '2017-10-26 21:43:26', '2017-10-26 22:02:40', null);
INSERT INTO `bjy_git_projects` VALUES ('4', '4', '2', 'shuaibai123/thinkbjy', '2017-10-26 21:43:56', '2017-10-26 22:02:59', null);
INSERT INTO `bjy_git_projects` VALUES ('5', '5', '1', 'baijunyao/laravel-bjyadmin', '2017-10-26 22:03:15', '2017-10-26 22:03:15', null);
INSERT INTO `bjy_git_projects` VALUES ('6', '6', '1', 'baijunyao/laravel-bjyblog', '2017-10-26 22:03:23', '2017-10-26 22:03:23', null);
INSERT INTO `bjy_git_projects` VALUES ('7', '7', '2', 'shuaibai123/laravel-bjyadmin', '2017-10-26 22:07:24', '2017-10-26 22:07:59', null);
INSERT INTO `bjy_git_projects` VALUES ('8', '8', '2', 'shuaibai123/laravel-bjyblog', '2017-10-26 22:07:47', '2017-10-26 22:08:04', null);

-- ----------------------------
-- Table structure for bjy_jobs
-- ----------------------------
DROP TABLE IF EXISTS `bjy_jobs`;
CREATE TABLE `bjy_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for bjy_migrations
-- ----------------------------
DROP TABLE IF EXISTS `bjy_migrations`;
CREATE TABLE `bjy_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_migrations
-- ----------------------------
INSERT INTO `bjy_migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `bjy_migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `bjy_migrations` VALUES ('3', '2017_07_11_225347_create_article_tags_table', '1');
INSERT INTO `bjy_migrations` VALUES ('4', '2017_07_11_225347_create_articles_table', '1');
INSERT INTO `bjy_migrations` VALUES ('5', '2017_07_11_225347_create_categories_table', '1');
INSERT INTO `bjy_migrations` VALUES ('6', '2017_07_11_225347_create_chats_table', '1');
INSERT INTO `bjy_migrations` VALUES ('7', '2017_07_11_225347_create_comments_table', '1');
INSERT INTO `bjy_migrations` VALUES ('8', '2017_07_11_225347_create_configs_table', '1');
INSERT INTO `bjy_migrations` VALUES ('9', '2017_07_11_225347_create_friendship_links_table', '1');
INSERT INTO `bjy_migrations` VALUES ('10', '2017_07_11_225347_create_oauth_users_table', '1');
INSERT INTO `bjy_migrations` VALUES ('11', '2017_07_11_225347_create_tags_table', '1');
INSERT INTO `bjy_migrations` VALUES ('12', '2017_08_26_211441_create_jobs_table', '1');
INSERT INTO `bjy_migrations` VALUES ('13', '2017_08_26_212556_create_failed_jobs_table', '1');
INSERT INTO `bjy_migrations` VALUES ('14', '2017_10_18_203752_create_git_projects_table', '1');

-- ----------------------------
-- Table structure for bjy_oauth_users
-- ----------------------------
DROP TABLE IF EXISTS `bjy_oauth_users`;
CREATE TABLE `bjy_oauth_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型 1：QQ  2：新浪微博 3：github',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '第三方昵称',
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '头像',
  `openid` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '第三方用户id',
  `access_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'access_token token',
  `last_login_ip` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '最后登录ip',
  `login_times` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '邮箱',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_oauth_users
-- ----------------------------
INSERT INTO `bjy_oauth_users` VALUES ('1', '1', '白俊遥', '/uploads/article/default.jpg', '', '', '127.0.0.1', '1', 'baijunyao@baijunyao.com', '0', '2017-07-24 07:35:12', '2017-07-24 07:35:12', null);

-- ----------------------------
-- Table structure for bjy_password_resets
-- ----------------------------
DROP TABLE IF EXISTS `bjy_password_resets`;
CREATE TABLE `bjy_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for bjy_tags
-- ----------------------------
DROP TABLE IF EXISTS `bjy_tags`;
CREATE TABLE `bjy_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '标签主键',
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '标签名',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_tags
-- ----------------------------
INSERT INTO `bjy_tags` VALUES ('1', 'laravel', '2017-07-16 07:35:12', '2016-07-16 07:35:12', null);

-- ----------------------------
-- Table structure for bjy_users
-- ----------------------------
DROP TABLE IF EXISTS `bjy_users`;
CREATE TABLE `bjy_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bjy_users
-- ----------------------------
INSERT INTO `bjy_users` VALUES ('1', 'test', 'test@test.com', '$2y$10$OfDnHf7bADEEpGL65RLs5ulrDlS52GD29PKHoCokcUUl/bNMfDvQG', null, '2016-10-22 07:35:12', '2016-10-22 07:35:12', null);

-- ----------------------------
-- Table structure for lar5_migrations
-- ----------------------------
DROP TABLE IF EXISTS `lar5_migrations`;
CREATE TABLE `lar5_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lar5_migrations
-- ----------------------------
INSERT INTO `lar5_migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `lar5_migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for lar5_password_resets
-- ----------------------------
DROP TABLE IF EXISTS `lar5_password_resets`;
CREATE TABLE `lar5_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250)),
  KEY `password_resets_token_index` (`token`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lar5_password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for lar5_users
-- ----------------------------
DROP TABLE IF EXISTS `lar5_users`;
CREATE TABLE `lar5_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lar5_users
-- ----------------------------

-- ----------------------------
-- Table structure for lar_articles
-- ----------------------------
DROP TABLE IF EXISTS `lar_articles`;
CREATE TABLE `lar_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar_articles
-- ----------------------------
INSERT INTO `lar_articles` VALUES ('2', 'Title 1', 'Body 1', '1', '2017-08-22 03:55:36', '2017-08-22 03:55:36');
INSERT INTO `lar_articles` VALUES ('3', 'Title 2', 'Body 2', '1', '2017-08-22 03:55:36', '2017-08-22 03:55:36');
INSERT INTO `lar_articles` VALUES ('4', 'Title 3', 'Body 3', '1', '2017-08-22 03:55:36', '2017-08-22 03:55:36');
INSERT INTO `lar_articles` VALUES ('7', 'Title 6', 'Body 6', '1', '2017-08-22 03:55:37', '2017-08-22 03:55:37');
INSERT INTO `lar_articles` VALUES ('8', 'Title 7777777777', 'Body 77777777', '1', '2017-08-22 03:55:37', '2017-08-22 18:03:02');
INSERT INTO `lar_articles` VALUES ('9', 'Title 8', 'Body 8', '1', '2017-08-22 03:55:37', '2017-08-22 03:55:37');
INSERT INTO `lar_articles` VALUES ('11', '你是那个妖精', '要你管啊！！！', '1', '2017-08-22 17:46:37', '2017-08-22 17:46:37');
INSERT INTO `lar_articles` VALUES ('12', '我是谁', '我怎么知道你是谁！爱谁谁。。。', '1', '2017-08-22 17:47:55', '2017-08-22 17:47:55');

-- ----------------------------
-- Table structure for lar_baby
-- ----------------------------
DROP TABLE IF EXISTS `lar_baby`;
CREATE TABLE `lar_baby` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lar_baby
-- ----------------------------
INSERT INTO `lar_baby` VALUES ('5', 'Kitty', '55', null, '1503571013');
INSERT INTO `lar_baby` VALUES ('6', 'Feaa', '55', null, '1503571013');
INSERT INTO `lar_baby` VALUES ('7', '赵云', '55', null, '1503571013');
INSERT INTO `lar_baby` VALUES ('8', 'TTok', '22', '2017', '2017');
INSERT INTO `lar_baby` VALUES ('9', 'TDegs', '12', null, null);
INSERT INTO `lar_baby` VALUES ('10', 'TDegs', '12', '1503568528', '1503568528');
INSERT INTO `lar_baby` VALUES ('11', '太乙真人', '122', '1503569124', '1503569124');
INSERT INTO `lar_baby` VALUES ('12', '太乙真人2', null, '1503569558', '1503569558');
INSERT INTO `lar_baby` VALUES ('13', '太乙真人33', null, '1503569806', '1503569806');

-- ----------------------------
-- Table structure for lar_comments
-- ----------------------------
DROP TABLE IF EXISTS `lar_comments`;
CREATE TABLE `lar_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `article_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar_comments
-- ----------------------------
INSERT INTO `lar_comments` VALUES ('1', 'bababa', '18831605741@163.com', 'www', '这倒是个有意思的问题................', '2', '2017-08-23 09:17:23', '2017-08-23 09:17:23');
INSERT INTO `lar_comments` VALUES ('2', 'A', 'qinminghui1230@163.com', 'dsdsds', '@bababa sdsadasdasdasdasdas', '2', '2017-08-23 09:18:31', '2017-08-23 09:18:31');

-- ----------------------------
-- Table structure for lar_students
-- ----------------------------
DROP TABLE IF EXISTS `lar_students`;
CREATE TABLE `lar_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) unsigned DEFAULT '0',
  `sex` char(5) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lar_students
-- ----------------------------
INSERT INTO `lar_students` VALUES ('1', 'Batty', '12', '1', null, null);
INSERT INTO `lar_students` VALUES ('2', 'Toms', '13', '0', null, null);
INSERT INTO `lar_students` VALUES ('3', 'Lorry', '15', '0', null, null);
INSERT INTO `lar_students` VALUES ('4', 'Kity', '15', '1', null, null);
INSERT INTO `lar_students` VALUES ('5', 'Rookos', '12', '1', '1504000647', '1504000647');
INSERT INTO `lar_students` VALUES ('6', 'Loss', '9', '2', '1504000812', '1504000812');
INSERT INTO `lar_students` VALUES ('7', 'Beangs', '9', '2', '1504001206', '1504001206');
INSERT INTO `lar_students` VALUES ('8', 'df efsdf', '12', '2', '1504001367', '1504001367');
INSERT INTO `lar_students` VALUES ('9', null, null, null, '1504003085', '1504084546');
INSERT INTO `lar_students` VALUES ('10', 'Senali', '11', '2', '1504079015', '1504079015');
INSERT INTO `lar_students` VALUES ('11', 'Gtilus', '9', '2', '1504079480', '1504079480');
INSERT INTO `lar_students` VALUES ('12', null, null, null, '1504080436', '1504084540');
INSERT INTO `lar_students` VALUES ('13', null, null, null, '1504080454', '1504084506');
INSERT INTO `lar_students` VALUES ('14', '星灵', '15', '2', '1504080486', '1504080486');
INSERT INTO `lar_students` VALUES ('15', '龙鸣', '13', '0', '1504083846', '1504083846');
INSERT INTO `lar_students` VALUES ('16', '龙鸣1', '5656', '2', '1504084592', '1504085178');
INSERT INTO `lar_students` VALUES ('17', '龙鸣', '6666', '1', '1504084607', '1504084996');
INSERT INTO `lar_students` VALUES ('18', 'He偶偶偶偶', '13', '0', '1504084989', '1504084989');
INSERT INTO `lar_students` VALUES ('19', 'GGG', '21', '0', '1504085682', '1504085682');
INSERT INTO `lar_students` VALUES ('20', 'GGG', '121212', '1', '1504085697', '1504085697');
INSERT INTO `lar_students` VALUES ('21', 'HFT', '15', '0', '1504085732', '1504085994');
INSERT INTO `lar_students` VALUES ('22', 'ffT', '2', '2', '1504086288', '1504086288');
INSERT INTO `lar_students` VALUES ('23', 'HFTRF', '1', '2', '1504086301', '1504087301');

-- ----------------------------
-- Table structure for lar_users
-- ----------------------------
DROP TABLE IF EXISTS `lar_users`;
CREATE TABLE `lar_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar_users
-- ----------------------------
INSERT INTO `lar_users` VALUES ('1', 'mutou', '930959696@qq.com', '$2y$10$oCJd.UkBNqfFNg6ovF/4/OVr2FX0wHxg6E3fraNKczqBy4cr5EcCS', 'xmA7XxXz9gps6fv6l9prY3zWlcRWQb9qPEcDqH2GT3J2sq8Pfs76iQhzVnf3', '2017-08-22 02:59:23', '2017-08-22 17:10:40');
INSERT INTO `lar_users` VALUES ('2', 'moTzxx', '930959695@qq.com', '$2y$10$8U8J0yn1OPjpl83sNLtfMucKGHe2hi60axR1HDi6mTyxfVYqT0aQK', 'pJ3EmHZmFMocR3eQicBIyTLVfwmjtTOL7eRowkSho20feegK3EoKtgGMrGhK', '2017-11-01 10:05:54', '2017-11-01 10:06:53');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2017_08_22_034937_create_article_table', '2');
INSERT INTO `migrations` VALUES ('2017_08_23_090921_create_comments_table', '3');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`),
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
