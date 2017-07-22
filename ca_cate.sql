/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : login

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-07-22 22:48:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ca_cate
-- ----------------------------
DROP TABLE IF EXISTS `ca_cate`;
CREATE TABLE `ca_cate` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL COMMENT '分类的名字',
  `cat_pid` int(11) NOT NULL COMMENT '父级分类',
  `cat_left` int(10) unsigned NOT NULL DEFAULT '0',
  `cat_right` int(10) unsigned NOT NULL DEFAULT '0',
  `cat_level` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
