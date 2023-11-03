/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50739
 Source Host           : localhost:3306
 Source Schema         : test_laravel

 Target Server Type    : MySQL
 Target Server Version : 50739
 File Encoding         : 65001

 Date: 03/11/2023 13:56:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for books
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books
-- ----------------------------
BEGIN;
INSERT INTO `books` (`id`, `name`, `description`) VALUES (1, 'Martha Powell', 'TM6vKcw0qh');
INSERT INTO `books` (`id`, `name`, `description`) VALUES (2, 'Bradley Reed', '40LAkkDhdo');
INSERT INTO `books` (`id`, `name`, `description`) VALUES (3, 'Robin Collins', 'gymFx4NC5n');
INSERT INTO `books` (`id`, `name`, `description`) VALUES (4, 'Liu Zitao', '8WtQIkqj6n');
INSERT INTO `books` (`id`, `name`, `description`) VALUES (5, 'Luo Lu', 'phk1pxk6Ci');
INSERT INTO `books` (`id`, `name`, `description`) VALUES (6, 'Maruyama Aoshi', 'eiPcLKMBew');
INSERT INTO `books` (`id`, `name`, `description`) VALUES (7, 'Jeremy Sprintzzzz', 's1KPZ4qdNhaaaa');
INSERT INTO `books` (`id`, `name`, `description`) VALUES (8, 'Kondo Mitsuki', 'EKQGgLHJd2');
INSERT INTO `books` (`id`, `name`, `description`) VALUES (9, 'Xiong Jialun', 'ljvQJ6Lvi8');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
