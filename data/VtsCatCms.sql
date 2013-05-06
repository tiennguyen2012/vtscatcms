/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : VtsCatCms

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-04-14 01:34:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `PageCategorys`
-- ----------------------------
DROP TABLE IF EXISTS `PageCategorys`;
CREATE TABLE `PageCategorys` (
  `PageCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `PageCategoryName` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`PageCategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of PageCategorys
-- ----------------------------
INSERT INTO `PageCategorys` VALUES ('1', 'Project Management');
INSERT INTO `PageCategorys` VALUES ('2', 'Vietnam Bussiness');
INSERT INTO `PageCategorys` VALUES ('3', 'Technology Bussiness');

-- ----------------------------
-- Table structure for `Pages`
-- ----------------------------
DROP TABLE IF EXISTS `Pages`;
CREATE TABLE `Pages` (
  `PageId` int(11) NOT NULL AUTO_INCREMENT,
  `PageTitle` varchar(40) DEFAULT NULL,
  `PageName` varchar(50) DEFAULT NULL,
  `PageContent` text,
  `IsActive` tinyint(4) DEFAULT '1',
  `IsDeleted` tinyint(4) DEFAULT '0',
  `PageCategoryId` int(11) DEFAULT NULL,
  PRIMARY KEY (`PageId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Pages
-- ----------------------------
INSERT INTO `Pages` VALUES ('1', 'About Us', 'About Us', 'We are a team with a lot of money and design and developer...', '1', '0', null);
