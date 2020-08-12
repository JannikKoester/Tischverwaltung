/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : calender

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-08-12 07:42:10
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of calenderplanner
-- ----------------------------
INSERT INTO `calenderplanner` VALUES ('26', '2020', '5', '11', '1', 'Jannik', '1');
INSERT INTO `calenderplanner` VALUES ('27', '2020', '12', '19', '1', 'fsdfsdf', '4');
