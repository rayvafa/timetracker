/*
 Navicat Premium Data Transfer

 Source Server         : time
 Source Server Type    : MySQL
 Source Server Version : 50535
 Source Host           : 203.170.85.245
 Source Database       : ramoonph_time

 Target Server Type    : MySQL
 Target Server Version : 50535
 File Encoding         : utf-8

 Date: 02/08/2014 11:49:54 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `tbl_work_time_tracker`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_work_time_tracker`;
CREATE TABLE `tbl_work_time_tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `lunch_duration` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date_unq` (`date`) USING HASH
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;
