/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : shop

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 05/07/2019 13:13:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `depth` int(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Digital devices', NULL);
INSERT INTO `category` VALUES (2, 'Fashion and clothing', NULL);
INSERT INTO `category` VALUES (5, 'Makeup and hygiene', NULL);
INSERT INTO `category` VALUES (7, 'mo', NULL);

-- ----------------------------
-- Table structure for interface
-- ----------------------------
DROP TABLE IF EXISTS `interface`;
CREATE TABLE `interface`  (
  `cat_id` int(255) NOT NULL,
  `product_id` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`cat_id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  CONSTRAINT `cat_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (3, 'galaxy A7', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (5, 'galaxy s7', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (6, 'galaxy j5', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (7, 'galaxy j5', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (8, 'galaxy a3', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('mohadese', '70349edd0bc81d443b59ff57bd9997bbb24ed44735ef84432ee51af81bebaab2', NULL);
INSERT INTO `users` VALUES ('mehdi', '88a455c7b361ec00d3a62bab8cf2696a30e9fd349e5e8c08e3b48d80daa7e518', NULL);
INSERT INTO `users` VALUES ('mahsa', 'e952365859cccd8759cb10061de201f20ebedfcc16856e7a3f967d72b95b8ede', NULL);
INSERT INTO `users` VALUES (NULL, NULL, NULL);
INSERT INTO `users` VALUES (NULL, NULL, NULL);
INSERT INTO `users` VALUES (NULL, NULL, NULL);
INSERT INTO `users` VALUES (NULL, NULL, NULL);
INSERT INTO `users` VALUES (NULL, NULL, NULL);
INSERT INTO `users` VALUES (NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
