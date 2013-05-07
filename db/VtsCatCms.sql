/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : VtsCatCms

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-05-08 00:31:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `Menus`
-- ----------------------------
DROP TABLE IF EXISTS `Menus`;
CREATE TABLE `Menus` (
  `MenuId` int(11) NOT NULL AUTO_INCREMENT,
  `MenuName` varchar(200) DEFAULT NULL,
  `MenuTitle` varchar(200) DEFAULT NULL,
  `IsActive` tinyint(4) DEFAULT '1',
  `Link` varchar(240) DEFAULT NULL,
  PRIMARY KEY (`MenuId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Menus
-- ----------------------------
INSERT INTO `Menus` VALUES ('1', 'Home', 'Home ', '1', '/');
INSERT INTO `Menus` VALUES ('2', 'About Us', 'About Us', '1', 'page/view/1');
INSERT INTO `Menus` VALUES ('3', 'Contact Us', 'Contact Us', '0', 'contact');
INSERT INTO `Menus` VALUES ('4', 'Products', 'Products', '1', 'product');

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
  `CreatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UpdatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`PageId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Pages
-- ----------------------------
INSERT INTO `Pages` VALUES ('1', 'About Us', 'About Us', 'We are a team with a lot of money and design and developer...', '1', '0', null, '2013-05-06 23:30:38', null);
INSERT INTO `Pages` VALUES ('2', 'Terms of Use', 'Terms of Use', 'Terms of Use', '1', '0', null, '2013-05-06 23:30:42', null);
INSERT INTO `Pages` VALUES ('3', 'Pravicy Information', 'Pravicy Information', 'Pravicy Information', '0', '0', null, '2013-05-07 23:44:11', null);
INSERT INTO `Pages` VALUES ('4', 'Licensing Information', 'Licensing Information', 'Licensing Information', '1', '0', null, '2013-05-06 23:30:48', null);
