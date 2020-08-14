/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : calender

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-08-14 16:59:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `calenderplanner`
-- ----------------------------
DROP TABLE IF EXISTS `calenderplanner`;
CREATE TABLE `calenderplanner` (
  `uniqueid` int(16) NOT NULL AUTO_INCREMENT,
  `year` int(16) NOT NULL,
  `month` int(16) NOT NULL,
  `day` int(16) NOT NULL,
  `reserviert` int(16) NOT NULL,
  `reserviertvon` varchar(16) NOT NULL,
  `tisch` int(16) NOT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of calenderplanner
-- ----------------------------
INSERT INTO `calenderplanner` VALUES ('167', '2020', '4', '6', '1', 'jannik', '8');
INSERT INTO `calenderplanner` VALUES ('168', '2020', '4', '6', '1', 'jannik2', '7');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uniqueid` int(16) NOT NULL,
  `users` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
