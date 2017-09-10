/*
Navicat MySQL Data Transfer

Source Server         : school
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : school

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-06-15 17:55:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for footer
-- ----------------------------
DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `footertitle` varchar(255) DEFAULT NULL,
  `footernum` varchar(255) DEFAULT NULL,
  `addtime` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of footer
-- ----------------------------
INSERT INTO `footer` VALUES ('1', '©2017 华为技术有限公司 ', '粤A2-20044005号', '1496221034');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `addtime` int(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('17', 'php练习', 'php', '丁省会', '0', '  php');
INSERT INTO `news` VALUES ('31', '2017.6.20', '新闻', '丁省会', '1496715118', '2017年6.6');
INSERT INTO `news` VALUES ('32', '12', '12', '12', '1496715145', '12');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `num` int(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `age` int(20) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('2', '12', '12', '12', '12', '12', '12', '12');
INSERT INTO `student` VALUES ('1', '丁省会', '2015150820', '男', '22', '信息系', '安徽', '123');

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('1', 'admin', '123');
INSERT INTO `userinfo` VALUES ('2', 'ding', '123');
INSERT INTO `userinfo` VALUES ('3', '丁省会', '000');
INSERT INTO `userinfo` VALUES ('4', 'admin', '123');
INSERT INTO `userinfo` VALUES ('5', '2', '2');
