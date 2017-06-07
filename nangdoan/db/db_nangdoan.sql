/*
Navicat MySQL Data Transfer

Source Server         : MY DATABASE
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_nangdoan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-07 19:14:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1489223762');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1489223818');
INSERT INTO `migration` VALUES ('m170311_092353_tbl_province', '1489224395');
INSERT INTO `migration` VALUES ('m170311_111435_tbl_group', '1489231016');
INSERT INTO `migration` VALUES ('m170311_151701_tbl_category', '1489246051');
INSERT INTO `migration` VALUES ('m170311_172307_tbl_product', '1489415609');
INSERT INTO `migration` VALUES ('m170313_143814_tbl_suppliers', '1489416239');

-- ----------------------------
-- Table structure for tbl_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `idCate` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cateName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `group_ID` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`idCate`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('1', '', 'Clothing', '0', 'clothing key', 'clothing key clothing key', '1', '1', '1', '1489250849', '1489250849');
INSERT INTO `tbl_category` VALUES ('2', '', 'Electronics', '0', 'Electronics key', 'Electronics keyElectronics key', '1', '1', '1', '1489250959', '1489250959');
INSERT INTO `tbl_category` VALUES ('3', '', 'Health & Beauty', '0', 'Health & Beauty key', '<p>Health &amp; BeautyHealth &amp; BeautyHealth &amp; Beauty</p>', '1', '1', '1', '1496800709', '1496800709');
INSERT INTO `tbl_category` VALUES ('4', '', 'Men', '1', 'men', '<p>men men</p>', '2', '1', '1', '1496741723', '1496741723');
INSERT INTO `tbl_category` VALUES ('5', '', 'Women', '1', 'Women', 'WomenWomen', '2', '1', '1', '1489252426', '1489252426');
INSERT INTO `tbl_category` VALUES ('6', '', 'Boys', '1', 'Boy', '<p>BoyBoyBoy</p>', '2', '1', '1', '1496742001', '1496742001');
INSERT INTO `tbl_category` VALUES ('7', '', 'Shoes', '4', 'Shoe', '<p>ShoeShoe</p>', '3', '1', '1', '1496741917', '1496741917');
INSERT INTO `tbl_category` VALUES ('10', '', 'Handbags', '3', 'Handbags', '<p>Handbags</p>', '3', '1', '1', '1496741895', '1496741895');
INSERT INTO `tbl_category` VALUES ('11', '', 'Jeans', '4', 'Jeans', '<p>Jeans</p>', '3', '1', '1', '1496741977', '1496741977');
INSERT INTO `tbl_category` VALUES ('12', '', 'Dresses', '4', 'Dresses', '<p>Dresses</p>', '3', '1', '1', '1496801501', '1496801501');
INSERT INTO `tbl_category` VALUES ('13', '', 'Laptop', '2', 'Laptop', '<p>Laptop</p>', '3', '1', '1', '1496801429', '1496801429');
INSERT INTO `tbl_category` VALUES ('14', '', 'Desktop', '2', 'Desktop', '<p>Desktop</p>', '3', '1', '1', '1496801470', '1496801470');
INSERT INTO `tbl_category` VALUES ('15', '', 'Dell', '13', 'Dell', '<p>Dell</p>', '3', '1', '1', '1496801609', '1496801609');

-- ----------------------------
-- Table structure for tbl_group
-- ----------------------------
DROP TABLE IF EXISTS `tbl_group`;
CREATE TABLE `tbl_group` (
  `idGroups` int(11) NOT NULL AUTO_INCREMENT,
  `groupsName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`idGroups`),
  UNIQUE KEY `groupsName` (`groupsName`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_group
-- ----------------------------
INSERT INTO `tbl_group` VALUES ('1', 'Sản phẩm', '1', '1489242503', '1489242503');
INSERT INTO `tbl_group` VALUES ('2', 'Tin tức', '1', '1489242532', '1489242532');
INSERT INTO `tbl_group` VALUES ('3', 'Liên hệ', '1', '1489243178', '1489243178');
INSERT INTO `tbl_group` VALUES ('4', 'Liên hệ 2', '1', '1489243244', '1489243244');
INSERT INTO `tbl_group` VALUES ('6', 'Contact Us', '1', '1496045898', '1496045898');
INSERT INTO `tbl_group` VALUES ('7', 'Contact Us2', '1', '1496045950', '1496045950');
INSERT INTO `tbl_group` VALUES ('8', 'contact', '1', '1496046349', '1496046349');
INSERT INTO `tbl_group` VALUES ('9', 'Dich vu', '1', '1496115274', '1496115274');

-- ----------------------------
-- Table structure for tbl_product
-- ----------------------------
DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product` (
  `proID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `saleOf` int(11) DEFAULT NULL,
  `startSale` date DEFAULT NULL,
  `endSale` date DEFAULT NULL,
  `priceSale` int(11) DEFAULT NULL,
  `quanlity` int(11) DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evaluation` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `group_ID` int(11) NOT NULL,
  `cateID` int(11) NOT NULL,
  `suppliresID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`proID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_product
-- ----------------------------
INSERT INTO `tbl_product` VALUES ('1', 'Quần Jean', '200000', '20', '0000-00-00', '0000-00-00', null, '10', 'S', '', null, 'uploads/Category/1.jpg', 'jean nam', '<p>jean nam</p>', '<p>jean nam</p>\r\n<p><strong>jean nam</strong></p>', '1', '4', '1', null, '1', '1496808717', '1496833148');
INSERT INTO `tbl_product` VALUES ('2', 'Quần Jean2', null, null, '0000-00-00', null, null, null, '', '', null, 'uploads/Category/1.jpg', 'jean nam', '<p>sada<img src=\"http://local.web_learn.vn/nangdoan/uploads/Category/1.jpg\" alt=\"\" width=\"960\" height=\"640\" /></p>', '<p>đấ</p>', '1', '4', '1', null, '1', '1496810164', '1496832661');
INSERT INTO `tbl_product` VALUES ('3', 'dsfsdfs', null, null, null, null, null, '34', '', '', null, 'uploads/Product/1671.jpg', 'zxcz', '<p>zcxzc</p>', '<p>czxcz</p>', '1', '7', null, null, '1', '1496828375', '1496833285');
INSERT INTO `tbl_product` VALUES ('4', 'Laptop lenovo', '12000000', '10', '0000-00-00', '0000-00-00', null, '12', '15\'\'', '', null, 'uploads/Category/1.jpg', 'Laptop lenovo', '<p>Laptop lenovo</p>', '<p>Laptop lenovoLaptop lenovo</p>', '1', '15', '2', null, '1', '1496829216', '1496832626');

-- ----------------------------
-- Table structure for tbl_province
-- ----------------------------
DROP TABLE IF EXISTS `tbl_province`;
CREATE TABLE `tbl_province` (
  `province_id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`province_id`),
  UNIQUE KEY `province_name` (`province_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_province
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_suppliers
-- ----------------------------
DROP TABLE IF EXISTS `tbl_suppliers`;
CREATE TABLE `tbl_suppliers` (
  `suppID` int(11) NOT NULL AUTO_INCREMENT,
  `companyName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`suppID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_suppliers
-- ----------------------------
INSERT INTO `tbl_suppliers` VALUES ('1', 'Nhat Vinh', '123', null, '', '1', '1496228851', '1496228851');
INSERT INTO `tbl_suppliers` VALUES ('2', 'Cu Chung ', 'qwqeq', null, '', '1', '1496228876', '1496228876');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) DEFAULT NULL,
  `province` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'admin', 'nrVJWPy7xdJzWWOmqrX9djFbDsbTkgYn', '$2y$13$AADJnFy0Tb6yK0iLWFHTSuBoT00Ne7lbRtmapNMU9RU4zHvba4uNq', null, 'admin@vn.bn', null, '0', '10', '1490455873', '1490455873');
