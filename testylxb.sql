/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50717
Source Host           : 127.0.0.1:3306
Source Database       : testylxb

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-03-14 08:39:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog_article
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `title` varchar(100) NOT NULL COMMENT '文章标题',
  `desc` varchar(255) NOT NULL COMMENT '文章描述',
  `content` text NOT NULL COMMENT '文章内容',
  `pic` varchar(100) NOT NULL COMMENT '图片路径',
  `cateid` mediumint(10) NOT NULL COMMENT '文章所属栏目',
  `time` int(20) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_article
-- ----------------------------

-- ----------------------------
-- Table structure for blog_banner
-- ----------------------------
DROP TABLE IF EXISTS `blog_banner`;
CREATE TABLE `blog_banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '轮播图片ID',
  `url` varchar(100) NOT NULL COMMENT '轮播图点击的链接',
  `pic` varchar(200) NOT NULL COMMENT '轮播图片的上传路径',
  `sort` int(11) DEFAULT '10' COMMENT '轮播图片排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_banner
-- ----------------------------

-- ----------------------------
-- Table structure for blog_cate
-- ----------------------------
DROP TABLE IF EXISTS `blog_cate`;
CREATE TABLE `blog_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `catename` varchar(60) NOT NULL COMMENT '栏目名称',
  `sort` mediumint(9) NOT NULL DEFAULT '20' COMMENT '栏目排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_cate
-- ----------------------------

-- ----------------------------
-- Table structure for blog_link
-- ----------------------------
DROP TABLE IF EXISTS `blog_link`;
CREATE TABLE `blog_link` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '链接ID',
  `title` varchar(50) NOT NULL COMMENT '链接标题',
  `url` varchar(100) DEFAULT NULL COMMENT '链接路径',
  `desc` varchar(255) NOT NULL COMMENT '链接描述',
  `sort` int(11) DEFAULT '30' COMMENT '排序用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_link
-- ----------------------------

-- ----------------------------
-- Table structure for blog_manager
-- ----------------------------
DROP TABLE IF EXISTS `blog_manager`;
CREATE TABLE `blog_manager` (
  `id` mediumint(10) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` varchar(30) NOT NULL COMMENT '管理员用户名',
  `password` char(32) NOT NULL COMMENT '管理员密码',
  `time` int(100) NOT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_manager
-- ----------------------------
INSERT INTO `blog_manager` VALUES ('1', 'admin', '124bd1296bec0d9d93c7b52a71ad8d5b', '0');
