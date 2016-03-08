# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: vpt.mysql.eu1.frbit.com (MySQL 5.5.40-log)
# Database: vpt
# Generation Time: 2016-03-08 18:35:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Allergy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Allergy`;

CREATE TABLE `Allergy` (
  `Allergy_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Allergy_Name` varchar(255) NOT NULL,
  `Linked_Protein` varchar(255) NOT NULL,
  `Linked_Carbs` varchar(255) NOT NULL,
  `Linked_Fat` varchar(255) NOT NULL,
  PRIMARY KEY (`Allergy_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table cal_breakdown
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cal_breakdown`;

CREATE TABLE `cal_breakdown` (
  `Break_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Carbs` float NOT NULL,
  `Fat` float NOT NULL,
  `Train_ID` int(11) NOT NULL,
  `Meal_No` int(11) NOT NULL,
  `Goal_ID` int(11) NOT NULL,
  `No_Meals` int(1) NOT NULL,
  PRIMARY KEY (`Break_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cal_breakdown` WRITE;
/*!40000 ALTER TABLE `cal_breakdown` DISABLE KEYS */;

INSERT INTO `cal_breakdown` (`Break_ID`, `Carbs`, `Fat`, `Train_ID`, `Meal_No`, `Goal_ID`, `No_Meals`)
VALUES
	(2,0.25,0.1,0,1,1,6),
	(3,0.2,0.1,0,2,1,6),
	(4,0.15,0.15,0,3,1,6),
	(5,0.15,0.2,0,4,1,6),
	(6,0.15,0.2,0,5,1,6),
	(7,0.1,0.25,0,6,1,6),
	(8,0.3,0.15,1,13,2,6),
	(9,0.2,0,1,12,2,6),
	(10,0.3,0.15,1,3,2,6),
	(11,0.1,0.2,1,4,2,6),
	(12,0.05,0.25,1,5,2,6),
	(13,0.05,0.25,1,6,2,6),
	(14,0.05,0.35,2,1,2,6),
	(15,0.25,0.1,2,11,2,6),
	(16,0.2,0,2,12,2,6),
	(17,0.3,0.1,2,4,2,6),
	(18,0.15,0.2,2,5,2,6),
	(19,0.05,0.25,2,6,2,6),
	(20,0.05,0.3,3,1,2,6),
	(21,0.1,0.2,3,2,2,6),
	(22,0.25,0.1,3,11,2,6),
	(23,0.2,0,3,12,2,6),
	(24,0.3,0.1,3,5,2,6),
	(25,0.15,0.2,3,6,2,6),
	(26,0.05,0.3,4,1,2,6),
	(27,0.1,0.2,4,2,2,6),
	(28,0.15,0.2,4,3,2,6),
	(29,0.25,0.1,4,11,2,6),
	(30,0.2,0,4,12,2,6),
	(31,0.3,0.1,4,6,2,6),
	(32,0.05,0.3,0,1,2,6),
	(33,0.1,0.2,0,2,2,6),
	(34,0.2,0.15,0,3,2,6),
	(35,0.2,0.15,0,4,2,6),
	(36,0.25,0.1,0,5,2,6),
	(37,0.3,0.1,0,6,2,6),
	(38,0.3,0.15,1,13,3,6),
	(39,0.2,0,1,12,3,6),
	(40,0.3,0.15,1,3,3,6),
	(41,0.1,0.2,1,4,3,6),
	(42,0.05,0.25,1,5,3,6),
	(43,0.05,0.25,1,6,3,6),
	(44,0.05,0.35,2,1,3,6),
	(45,0.25,0.1,2,11,3,6),
	(46,0.2,0,2,12,3,6),
	(47,0.3,0.1,2,4,3,6),
	(48,0.15,0.2,2,5,3,6),
	(49,0.05,0.25,2,6,3,6),
	(50,0.05,0.3,3,1,3,6),
	(51,0.1,0.2,3,2,3,6),
	(52,0.25,0.1,3,11,3,6),
	(53,0.2,0,3,12,3,6),
	(54,0.3,0.1,3,5,3,6),
	(55,0.15,0.2,3,6,3,6),
	(56,0.05,0.3,4,1,3,6),
	(57,0.1,0.2,4,2,3,6),
	(58,0.15,0.2,4,3,3,6),
	(59,0.25,0.1,4,11,3,6),
	(60,0.2,0,4,12,3,6),
	(61,0.3,0.1,4,6,3,6),
	(62,0.05,0.3,0,1,3,6),
	(63,0.1,0.2,0,2,3,6),
	(64,0.2,0.15,0,3,3,6),
	(65,0.2,0.15,0,4,3,6),
	(66,0.25,0.1,0,5,3,6),
	(67,0.3,0.1,0,6,3,6),
	(68,0.3,0.15,1,13,4,6),
	(69,0.2,0,1,12,4,6),
	(70,0.3,0.15,1,3,4,6),
	(71,0.1,0.2,1,4,4,6),
	(72,0.05,0.25,1,5,4,6),
	(73,0.05,0.25,1,6,4,6),
	(74,0.05,0.35,2,1,4,6),
	(75,0.25,0.1,2,11,4,6),
	(76,0.2,0,2,12,4,6),
	(77,0.3,0.1,2,4,4,6),
	(78,0.15,0.2,2,5,4,6),
	(79,0.05,0.25,2,6,4,6),
	(80,0.05,0.3,3,1,4,6),
	(81,0.1,0.2,3,2,4,6),
	(82,0.25,0.1,3,11,4,6),
	(83,0.2,0,3,12,4,6),
	(84,0.3,0.1,3,5,4,6),
	(85,0.15,0.2,3,6,4,6),
	(86,0.05,0.3,4,1,4,6),
	(87,0.1,0.2,4,2,4,6),
	(88,0.15,0.2,4,3,4,6),
	(89,0.25,0.1,4,11,4,6),
	(90,0.2,0,4,12,4,6),
	(91,0.3,0.1,4,6,4,6),
	(92,0.05,0.3,0,1,4,6),
	(93,0.1,0.2,0,2,4,6),
	(94,0.2,0.15,0,3,4,6),
	(95,0.2,0.15,0,4,4,6),
	(96,0.25,0.1,0,5,4,6),
	(97,0.3,0.1,0,6,4,6),
	(98,0.3,0.15,1,13,5,6),
	(99,0.2,0,1,12,5,6),
	(100,0.3,0.15,1,3,5,6),
	(101,0.1,0.2,1,4,5,6),
	(102,0.05,0.25,1,5,5,6),
	(103,0.05,0.25,1,6,5,6),
	(104,0.05,0.35,2,1,5,6),
	(105,0.25,0.1,2,11,5,6),
	(106,0.2,0,2,12,5,6),
	(107,0.3,0.1,2,4,5,6),
	(108,0.15,0.2,2,5,5,6),
	(109,0.05,0.25,2,6,5,6),
	(110,0.05,0.3,3,1,5,6),
	(111,0.1,0.2,3,2,5,6),
	(112,0.25,0.1,3,11,5,6),
	(113,0.2,0,3,12,5,6),
	(114,0.3,0.1,3,5,5,6),
	(115,0.15,0.2,3,6,5,6),
	(116,0.05,0.3,4,1,5,6),
	(117,0.1,0.2,4,2,5,6),
	(118,0.15,0.2,4,3,5,6),
	(119,0.25,0.1,4,11,5,6),
	(120,0.2,0,4,12,5,6),
	(121,0.3,0.1,4,6,5,6),
	(122,0.05,0.3,0,1,5,6),
	(123,0.1,0.2,0,2,5,6),
	(124,0.2,0.15,0,3,5,6),
	(125,0.2,0.15,0,4,5,6),
	(126,0.25,0.1,0,5,5,6),
	(127,0.3,0.1,0,6,5,6),
	(128,0.3,0.2,1,13,1,5),
	(129,0.15,0,1,12,1,5),
	(130,0.25,0.15,1,3,1,5),
	(131,0.15,0.3,1,4,1,5),
	(132,0.15,0.35,1,5,1,5),
	(133,0.15,0.3,2,1,1,5),
	(134,0.25,0.15,2,11,1,5),
	(135,0.15,0,2,12,1,5),
	(136,0.25,0.25,2,4,1,5),
	(137,0.2,0.3,2,5,1,5),
	(138,0.2,0.3,3,1,1,5),
	(139,0.05,0.25,3,2,1,5),
	(140,0.25,0.2,3,11,1,5),
	(141,0.15,0,3,12,1,5),
	(142,0.35,0.25,3,5,1,5),
	(143,0.25,0.15,0,1,1,5),
	(144,0.2,0.15,0,2,1,5),
	(145,0.15,0.2,0,3,1,5),
	(146,0.15,0.25,0,4,1,5),
	(147,0.25,0.25,0,5,1,5),
	(148,0.3,0.2,1,13,2,5),
	(149,0.2,0,1,12,2,5),
	(150,0.3,0.2,1,3,2,5),
	(151,0.1,0.3,1,4,2,5),
	(152,0.1,0.3,1,5,2,5),
	(153,0.05,0.4,2,1,2,5),
	(154,0.25,0.15,2,11,2,5),
	(155,0.2,0,2,12,2,5),
	(156,0.3,0.15,2,4,2,5),
	(157,0.2,0.25,2,5,2,5),
	(158,0.05,0.35,3,1,2,5),
	(159,0.1,0.25,3,2,2,5),
	(160,0.25,0.15,3,11,2,5),
	(161,0.2,0,3,12,2,5),
	(162,0.45,0.15,3,5,2,5),
	(163,0.05,0.3,4,1,2,5),
	(164,0.1,0.25,4,2,2,5),
	(165,0.15,0.25,4,3,2,5),
	(166,0.25,0.1,4,11,2,5),
	(167,0.5,0,4,12,2,5),
	(168,0.05,0.3,0,1,2,5),
	(169,0.1,0.25,0,2,2,5),
	(170,0.2,0.2,0,3,2,5),
	(171,0.2,0.15,0,4,2,5),
	(172,0.45,0.1,0,5,2,5),
	(173,0.3,0.2,1,13,3,5),
	(174,0.2,0,1,12,3,5),
	(175,0.3,0.2,1,3,3,5),
	(176,0.1,0.3,1,4,3,5),
	(177,0.1,0.3,1,5,3,5),
	(178,0.05,0.4,2,1,3,5),
	(179,0.25,0.15,2,11,3,5),
	(180,0.2,0,2,12,3,5),
	(181,0.3,0.15,2,4,3,5),
	(182,0.2,0.25,2,5,3,5),
	(183,0.05,0.35,3,1,3,5),
	(184,0.1,0.25,3,2,3,5),
	(185,0.25,0.15,3,11,3,5),
	(186,0.2,0,3,12,3,5),
	(187,0.45,0.15,3,5,3,5),
	(188,0.05,0.3,0,1,3,5),
	(189,0.1,0.25,0,2,3,5),
	(190,0.2,0.2,0,3,3,5),
	(191,0.2,0.15,0,4,3,5),
	(192,0.45,0.1,0,5,3,5),
	(193,0.3,0.2,1,13,4,5),
	(194,0.2,0,1,12,4,5),
	(195,0.3,0.2,1,3,4,5),
	(196,0.1,0.3,1,4,4,5),
	(197,0.1,0.3,1,5,4,5),
	(198,0.05,0.4,2,1,4,5),
	(199,0.25,0.15,2,11,4,5),
	(200,0.2,0,2,12,4,5),
	(201,0.3,0.15,2,4,4,5),
	(202,0.2,0.25,2,5,4,5),
	(203,0.05,0.35,3,1,4,5),
	(204,0.1,0.25,3,2,4,5),
	(205,0.25,0.15,3,11,4,5),
	(206,0.2,0,3,12,4,5),
	(207,0.45,0.15,3,5,4,5),
	(208,0.05,0.3,0,1,4,5),
	(209,0.1,0.25,0,2,4,5),
	(210,0.2,0.2,0,3,4,5),
	(211,0.2,0.15,0,4,4,5),
	(212,0.45,0.1,0,5,4,5),
	(213,0.3,0.2,1,13,5,5),
	(214,0.2,0,1,12,5,5),
	(215,0.3,0.2,1,3,5,5),
	(216,0.1,0.3,1,4,5,5),
	(217,0.1,0.3,1,5,5,5),
	(218,0.05,0.4,2,1,5,5),
	(219,0.25,0.15,2,11,5,5),
	(220,0.2,0,2,12,5,5),
	(221,0.3,0.15,2,4,5,5),
	(222,0.2,0.25,2,5,5,5),
	(223,0.05,0.35,3,1,5,5),
	(224,0.1,0.25,3,2,5,5),
	(225,0.25,0.15,3,11,5,5),
	(226,0.2,0,3,12,5,5),
	(227,0.45,0.15,3,5,5,5),
	(228,0.05,0.3,0,1,5,5),
	(229,0.1,0.25,0,2,5,5),
	(230,0.2,0.2,0,3,5,5),
	(231,0.2,0.15,0,4,5,5),
	(232,0.45,0.1,0,5,5,5),
	(233,0.3,0.3,1,13,1,4),
	(234,0.15,0,1,12,1,4),
	(235,0.35,0.25,1,3,1,4),
	(236,0.3,0.45,1,4,1,4),
	(237,0.15,0.4,2,1,1,4),
	(238,0.35,0.2,2,11,1,4),
	(239,0.25,0,2,12,1,4),
	(240,0.25,0.4,2,4,1,4),
	(241,0.3,0.2,0,1,1,4),
	(242,0.3,0.15,0,2,1,4),
	(243,0.2,0.3,0,3,1,4),
	(244,0.2,0.35,0,4,1,4),
	(245,0.3,0.25,1,13,2,4),
	(246,0.3,0,1,12,2,4),
	(247,0.3,0.25,1,3,2,4),
	(248,0.1,0.5,1,4,2,4),
	(249,0.05,0.55,2,1,2,4),
	(250,0.25,0.25,2,11,2,4),
	(251,0.2,0,2,12,2,4),
	(252,0.5,0.2,2,4,2,4),
	(253,0.05,0.3,0,1,2,4),
	(254,0.1,0.35,0,2,2,4),
	(255,0.4,0.2,0,3,2,4),
	(256,0.45,0.15,0,4,2,4),
	(257,0.3,0.25,1,13,3,4),
	(258,0.3,0,1,12,3,4),
	(259,0.3,0.25,1,3,3,4),
	(260,0.1,0.5,1,4,3,4),
	(261,0.05,0.55,2,1,3,4),
	(262,0.25,0.25,2,11,3,4),
	(263,0.2,0,2,12,3,4),
	(264,0.5,0.2,2,4,3,4),
	(265,0.05,0.3,0,1,3,4),
	(266,0.1,0.35,0,2,3,4),
	(267,0.4,0.2,0,3,3,4),
	(268,0.45,0.15,0,4,3,4),
	(269,0.3,0.25,1,13,4,4),
	(270,0.3,0,1,12,4,4),
	(271,0.3,0.25,1,3,4,4),
	(272,0.1,0.5,1,4,4,4),
	(273,0.05,0.55,2,1,4,4),
	(274,0.25,0.25,2,11,4,4),
	(275,0.2,0,2,12,4,4),
	(276,0.5,0.2,2,4,4,4),
	(277,0.05,0.3,0,1,4,4),
	(278,0.1,0.35,0,2,4,4),
	(279,0.4,0.2,0,3,4,4),
	(280,0.45,0.15,0,4,4,4),
	(281,0.3,0.25,1,13,5,4),
	(282,0.3,0,1,12,5,4),
	(283,0.3,0.25,1,3,5,4),
	(284,0.1,0.5,1,4,5,4),
	(285,0.05,0.55,2,1,5,4),
	(286,0.25,0.25,2,11,5,4),
	(287,0.2,0,2,12,5,4),
	(288,0.5,0.2,2,4,5,4),
	(289,0.05,0.3,0,1,5,4),
	(290,0.1,0.35,0,2,5,4),
	(291,0.4,0.2,0,3,5,4),
	(292,0.45,0.15,0,4,5,4);

/*!40000 ALTER TABLE `cal_breakdown` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table carbs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carbs`;

CREATE TABLE `carbs` (
  `Carb_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL,
  `Meal_Type` varchar(255) NOT NULL,
  `Linked_Foods` varchar(255) NOT NULL,
  `Live` int(1) DEFAULT '0',
  PRIMARY KEY (`Carb_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `carbs` WRITE;
/*!40000 ALTER TABLE `carbs` DISABLE KEYS */;

INSERT INTO `carbs` (`Carb_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`, `Meal_Type`, `Linked_Foods`, `Live`)
VALUES
	(1,'Wholewheat Pasta',75,15,1,30,0,',2,3,4,5,12,',',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44,',1),
	(2,'Instant Oats',71,9,8,30,0,',1,6,11,12,',',1, 2, 12, 13, 14, 23, 24, 30, ',1),
	(3,'Qunioa',64,14,6,30,0,',2,3,4,5,11,12,',',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ',1),
	(4,'White Basmati',58,6,1,30,0,',2,3,4,5,11,12,',',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ',1),
	(5,'Oatbran',48,13,9,30,0,',1,6,12,',',1, 2, 12, 13, 14, 16, 17, 24, 30, 34, 44, ',1),
	(6,'Wheat / Oat Bread',48,8,4,45,0,',1,12,',',1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ',1),
	(7,'Spouted Grain Bread',45,12,2,45,0,',1,12,',',1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ',1),
	(8,'Sweet Potato',21,2,1,45,0,',2,3,4,5,11,12,',',3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ',1),
	(9,'Brown Rice',71,7,3,50,0,',2,3,4,5,11,12,',',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ',1),
	(10,'Bulgar Wheat',24,4,0,50,0,',2,3,4,5,11,12,',',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ',1),
	(11,'Porridge Oats',58,11,8,30,0,',1,2,3,4,5,6,11,12,13,',',1, 2, 12, 13, 14, 16, 17, 24, 30, 34, 44, ',1),
	(12,'Jelly Babies',100,9,4,5,0,',12,',',1, 2, ',1),
	(13,'Jelly Beans',90,0,0,5,0,',12,',',1, 2, ',1),
	(14,'Dark Chocolate (90%)',30,10,55,5,90,',1,6,11,12,13,',',1, 2, 12, 13, 14, 23, 24, 30, 44, ',1),
	(15,'Dextrose',96,0,0,15,0,',12,',',1, 2, ',1),
	(16,'White Potato',32,3,0,75,0,',12,',',3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ',1),
	(17,'Dark Chocolate (80%)',22,10,50,5,90,',1,6,11,12,13,',',1, 2, 12, 13, 14, 23, 24, 30, 44, ',1);

/*!40000 ALTER TABLE `carbs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table exercise
# ------------------------------------------------------------

DROP TABLE IF EXISTS `exercise`;

CREATE TABLE `exercise` (
  `Exercise_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Sets` int(11) NOT NULL,
  `Order` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `WorkOut_ID` int(11) NOT NULL,
  PRIMARY KEY (`Exercise_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `exercise` WRITE;
/*!40000 ALTER TABLE `exercise` DISABLE KEYS */;

INSERT INTO `exercise` (`Exercise_ID`, `Name`, `Description`, `Sets`, `Order`, `Type`, `Image`, `WorkOut_ID`)
VALUES
	(2,'Barbell Bench press','Set 1 - 6 Reps\r\nSet 2 - 3 Reps\r\nSet 3 - 1 Rep\r\n\r\nTempo: 3-0-x-0',3,1,'Weights','',1),
	(3,'Dumbbell Shoulder press','Set 1 - 3 Reps\r\nSet 2 - 3 Reps\r\nSet 3 - 3 Reps\r\n\r\nTempo: 2-0-x-1',3,2,'Weights','',1),
	(4,'Test','fhshfisfsd\r\nfdf\r\ndsg\r\ndf\r\ngdf\r\ngd',4,3,'Weights','',1);

/*!40000 ALTER TABLE `exercise` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fat
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fat`;

CREATE TABLE `fat` (
  `Fat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL,
  `Live` int(1) DEFAULT '0',
  PRIMARY KEY (`Fat_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fat` WRITE;
/*!40000 ALTER TABLE `fat` DISABLE KEYS */;

INSERT INTO `fat` (`Fat_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`, `Live`)
VALUES
	(1,'Coconut Oil',0,0,100,4,0,1),
	(2,'Olive Oil',0,0,100,4,0,1),
	(3,'Flax Seed Oil',0,0,100,4,0,1),
	(4,'Udos Oil',0,2,97,4,0,1),
	(5,'Almond Butter',21,15,59,4,0,1),
	(6,'Almonds',20,21,51,25,0,1),
	(7,'Peanut Butter',22,24,50,4,0,1),
	(8,'Avocado',2,2,20,120,480,1),
	(9,'Olives',0,1,18,20,0,1),
	(10,'Walnuts',4,18,68,20,0,1),
	(11,'Peanuts',14,30,44,20,0,1),
	(12,'Hazelnuts',6,16,64,20,0,1),
	(13,'Cashews',17,22,48,20,0,1),
	(14,'Pecans',14,5,72,20,0,1);

/*!40000 ALTER TABLE `fat` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table goals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `goals`;

CREATE TABLE `goals` (
  `Goal_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Goal` varchar(255) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Calories` int(11) NOT NULL,
  PRIMARY KEY (`Goal_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `goals` WRITE;
/*!40000 ALTER TABLE `goals` DISABLE KEYS */;

INSERT INTO `goals` (`Goal_ID`, `Goal`, `Gender`, `Calories`)
VALUES
	(1,'Build Muscle','M',500),
	(2,'Lose Fat','M',-500),
	(3,'Increase Fitness','M',-100),
	(4,'Tone Up','F',-100),
	(5,'Increase Fitness','F',-100),
	(6,'Healthy Eating','U',0);

/*!40000 ALTER TABLE `goals` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table protein
# ------------------------------------------------------------

DROP TABLE IF EXISTS `protein`;

CREATE TABLE `protein` (
  `Protein_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL,
  `Meal_Type` varchar(255) NOT NULL,
  `Live` int(1) DEFAULT '0',
  PRIMARY KEY (`Protein_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `protein` WRITE;
/*!40000 ALTER TABLE `protein` DISABLE KEYS */;

INSERT INTO `protein` (`Protein_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`, `Meal_Type`, `Live`)
VALUES
	(1,'Casein',7,79,1,15,60,',1,6,',1),
	(2,'Whey',10,71,6,15,90,',1,11,12,13,',1),
	(3,'Chicken Breast',0,31,4,75,300,',2,3,4,5,11,12,',1),
	(4,'Turkey Breast',0,30,1,75,300,',2,3,4,5,11,12,',1),
	(5,'Beef Steak',0,30,15,75,300,',2,3,4,5,12,',1),
	(6,'Lamb',0,25,17,75,300,',2,3,4,5,12,',1),
	(7,'Tuna',0,24,3,100,200,',1,2,3,4,5,11,12,',1),
	(8,'Pork Chop',0,22,3,100,300,',2,3,4,5,12,',1),
	(9,'Lean Beef Mince',0,21,5,100,250,',2,3,4,5,12,',1),
	(10,'Salmon',0,20,13,100,250,',1,2,3,4,5,11,12,',1),
	(11,'Mackerel',0,19,14,100,250,',3,4,5,',1),
	(12,'Whole Eggs',1,13,11,50,300,',1,2,3,4,5,11,12,13,',1),
	(13,'Low Fat Cottage Cheese',3,11,1,50,250,',1,6,',1),
	(14,'Egg Whites',1,11,0,50,300,',1,2,3,4,5,11,12,13,',1),
	(15,'Duck Breast',0,27,4,100,300,',2,3,4,5,11,12,',1),
	(16,'Back Bacon',0,26,12,30,125,',1,2,3,4,5,12,13,',1),
	(17,'Pork Sausage',5,9,13,80,240,',1,2,3,4,5,12,13,',1),
	(18,'Sea Bass Fillet',0,22,9,90,360,',2,3,4,5,12,',1),
	(19,'Cod Fillet',0,18,1,100,400,',2,3,4,5,12,',1),
	(20,'Haddock Fillet',0,20,1,100,400,',2,3,4,5,12,',1),
	(21,'Trout Fillet',2,22,6,100,350,',2,3,4,5,12,',1),
	(22,'Lemon Sole Fillet',0,20,2,100,300,',2,3,4,5,12,',1),
	(23,'Beef Jerky',24,40,5,25,100,',2,3,4,5,11,12,',1),
	(24,'Total Greek Yoghurt (0%)',4,13,0,50,400,',1,2,3,4,11,12,13,',1),
	(25,'Ground Beef (95% Lean)',0,24,7,50,300,',1,2,3,4,5,12,',1),
	(26,'Turkey Mince',1,30,2,50,300,',2,3,4,5,11,12,',1),
	(27,'Tuna Steak',0,32,1,50,400,',2,3,4,5,11,12,',1),
	(28,'Chicken Thighs',0,25,14,75,350,',2,3,4,5,12,',1),
	(29,'Chicken Wings',0,21,15,75,300,',2,3,4,5,12,',1),
	(30,'Almonds',20,23,50,5,100,',1,2,3,4,5,11,12,13,',1),
	(31,'Smoked Haddock',12,23,1,100,400,',2,3,4,5,',1),
	(32,'Tinned Tuna in water',0,24,0,100,300,',2,3,4,5,11,12,',1),
	(33,'Tinned Tuna in brine',0,22,1,100,300,',2,3,4,5,11,12,',1),
	(34,'Smoked Salmon',0,35,22,50,300,',1,2,3,4,5,11,12,',1),
	(35,'Tilapia Fillet',0,20,2,100,400,',1,2,3,4,5,11,12,',1),
	(36,'Prawns',0,15,1,100,400,',2,3,4,5,12,',1),
	(37,'Tinned Tuna in Sunflower Oil',0,26,7,100,300,',2,3,4,5,11,12,',1),
	(38,'10% Fat Beef Meatballs',4,19,8,80,350,',3,4,5,12,',1),
	(39,'Lean Diced Beef',0,32,4,80,350,',1,2,3,4,5,12,',1),
	(40,'Beef Sirloin Steak',0,28,11,100,350,',1,2,3,4,5,12,',1),
	(41,'Beef Rump Steak',0,22,12,100,350,',1,2,3,4,5,12,',1),
	(42,'Beef Fillet Steak',0,25,7,100,350,',1,2,3,4,5,12,',1),
	(43,'Beef Ribeye Steak',0,25,15,100,350,',1,2,3,4,5,12,',1),
	(44,'Mature Cheddar Cheese',0,25,35,100,350,',1,2,6,',1);

/*!40000 ALTER TABLE `protein` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table training
# ------------------------------------------------------------

DROP TABLE IF EXISTS `training`;

CREATE TABLE `training` (
  `Training_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Goal_ID` int(11) NOT NULL,
  `Session_Times` int(11) NOT NULL,
  `Gym_Level` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Training_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `training` WRITE;
/*!40000 ALTER TABLE `training` DISABLE KEYS */;

INSERT INTO `training` (`Training_ID`, `Goal_ID`, `Session_Times`, `Gym_Level`, `Name`)
VALUES
	(1,2,6,'Intermediate, Advanced','Cutting Male 1'),
	(2,1,6,'Advanced','Blueprint to Mass'),
	(3,1,3,'Beginner','Beginner to Advanced');

/*!40000 ALTER TABLE `training` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_breakdown
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_breakdown`;

CREATE TABLE `user_breakdown` (
  `UB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Carbs` float NOT NULL,
  PRIMARY KEY (`UB_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table user_dislike
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_dislike`;

CREATE TABLE `user_dislike` (
  `UD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Food_ID` int(11) NOT NULL,
  PRIMARY KEY (`UD_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table user_favourites
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_favourites`;

CREATE TABLE `user_favourites` (
  `Fav_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Protein_ID` int(11) DEFAULT NULL,
  `Carb_ID` int(11) DEFAULT NULL,
  `Fat_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Fav_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_favourites` WRITE;
/*!40000 ALTER TABLE `user_favourites` DISABLE KEYS */;

INSERT INTO `user_favourites` (`Fav_ID`, `User_ID`, `Protein_ID`, `Carb_ID`, `Fat_ID`)
VALUES
	(3,12,2,NULL,NULL),
	(4,12,11,NULL,NULL),
	(6,12,NULL,6,NULL);

/*!40000 ALTER TABLE `user_favourites` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `EMail` varchar(255) NOT NULL,
  `Weight` float NOT NULL,
  `BodyFat` float NOT NULL,
  `BMR` float NOT NULL,
  `MCalories` float NOT NULL,
  `AFactor` float NOT NULL,
  `CaloriesPerDay` float NOT NULL,
  `Goal_ID` int(11) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Meal_No` int(1) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Current_Week` int(11) NOT NULL DEFAULT '1',
  `Train_ID` int(11) NOT NULL DEFAULT '1',
  `Session_Times` int(1) NOT NULL DEFAULT '4',
  `Completed_Day` int(1) NOT NULL DEFAULT '0',
  `First_Login` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`User_ID`, `FName`, `LName`, `EMail`, `Weight`, `BodyFat`, `BMR`, `MCalories`, `AFactor`, `CaloriesPerDay`, `Goal_ID`, `Gender`, `Meal_No`, `Password`, `Current_Week`, `Train_ID`, `Session_Times`, `Completed_Day`, `First_Login`)
VALUES
	(2,'Adam','Kempner','a@k.com',75,16,1730.8,3028.9,1.4,3561,2,'M',6,'1a0e131842f600b89238eac8833375e7b781e9ce',1,3,4,0,0),
	(3,'Test','Tester','test@mail.com',82,14,0,0,1.6,0,3,'M',4,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,4,0,0),
	(4,'','','',0,0,0,0,0,0,0,'',0,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,4,0,0),
	(5,'0','0','0',0,0,0,0,0,0,0,'0',0,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,4,0,0),
	(7,'tom','james','woo@1.com',75,16,1730.8,3046.21,1.6,0,1,'M',4,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,4,0,0),
	(8,'Test','Beast','beast@1.com',100,8,2357.2,6482.3,2.2,0,1,'M',3,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,4,0,0),
	(9,'jack','jone','colin@ogo11.com',75,16,1730.8,2596.2,1.2,2696.2,1,'M',3,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,6,0,0),
	(10,'jack','jone','colin@ogo1311.com',75,16,1730.8,2284.66,1.2,1884.84,3,'M',3,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,6,0,0),
	(11,'Mrs','Kempner','mrs@k.com',57,17,1391.9,1990.41,1.3,2065.41,1,'F',6,'1a0e131842f600b89238eac8833375e7b781e9ce',2,1,4,0,0),
	(12,'Colin','Ogoo','colin@ogoo.com',75,16,1730.8,2284.66,1.2,2359.66,2,'M',4,'1a0e131842f600b89238eac8833375e7b781e9ce',3,1,4,2,1),
	(13,'fgd','gfdgdf','gg@1.com',75,16,1730.8,3461.6,1.6,3561.6,1,'M',5,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,6,0,1),
	(14,'Steve','Jobs','s@ogoo.com',90.7,20,1937.3,2557.23,1.2,2632.23,1,'M',4,'1a0e131842f600b89238eac8833375e7b781e9ce',1,1,4,0,0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_meals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_meals`;

CREATE TABLE `users_meals` (
  `User_Meal_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Week` int(2) NOT NULL,
  `Day` int(1) NOT NULL,
  `Meal_No` int(2) NOT NULL,
  `Protein_Name` varchar(255) NOT NULL,
  `Protein_Grams` int(11) DEFAULT NULL,
  `Carb_Name` varchar(255) DEFAULT NULL,
  `Carb_Grams` int(11) DEFAULT NULL,
  `Fat_Name` varchar(255) DEFAULT NULL,
  `Fat_Grams` int(11) DEFAULT NULL,
  `Green_Veg` varchar(255) DEFAULT NULL,
  `Failed_Meal` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`User_Meal_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users_meals` WRITE;
/*!40000 ALTER TABLE `users_meals` DISABLE KEYS */;

INSERT INTO `users_meals` (`User_Meal_ID`, `User_ID`, `Week`, `Day`, `Meal_No`, `Protein_Name`, `Protein_Grams`, `Carb_Name`, `Carb_Grams`, `Fat_Name`, `Fat_Grams`, `Green_Veg`, `Failed_Meal`)
VALUES
	(3,12,1,1,3,'Turkey Breast',30,'Wholewheat Pasta',75,'Coconut Oil',100,'Broccoli',1),
	(4,12,1,1,4,'Turkey Breast',30,'White Basmati',58,'Coconut Oil',100,'Broccoli',1),
	(5,12,1,2,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(6,12,1,2,12,'Turkey Breast',30,'Qunioa',64,NULL,NULL,NULL,1),
	(7,12,1,2,3,'Chicken Breast',31,'Qunioa',64,'Flax Seed Oil',100,'Broccoli',1),
	(8,12,1,2,4,'Turkey Breast',30,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(9,12,1,3,1,'Whey',71,'Instant Oats',71,'Flax Seed Oil',100,NULL,0),
	(10,12,1,3,2,'Chicken Breast',31,'Sweet Potato',21,'Peanut Butter',50,'Broccoli',1),
	(11,12,1,3,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(12,12,1,3,4,'Pork Chop',22,'Sweet Potato',21,'Flax Seed Oil',100,'Broccoli',0),
	(14,12,1,4,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,1),
	(15,12,1,4,3,'Chicken Breast',31,'Sweet Potato',21,'Flax Seed Oil',100,'Broccoli',1),
	(16,12,1,4,4,'Turkey Breast',30,'Sweet Potato',21,'Flax Seed Oil',100,'Broccoli',1),
	(18,12,1,5,2,'Chicken Breast',31,'Qunioa',64,'Almond Butter',59,'Broccoli',1),
	(19,12,1,5,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Coconut Oil',100,'Broccoli',1),
	(20,12,1,5,4,'Pork Chop',22,'Sweet Potato',21,'Olive Oil',100,'Broccoli',0),
	(21,12,1,6,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(22,12,1,6,12,'Turkey Breast',30,'Qunioa',64,NULL,NULL,NULL,1),
	(23,12,1,6,3,'Turkey Breast',30,'Wholewheat Pasta',75,'Coconut Oil',100,'Broccoli',1),
	(24,12,1,6,4,'Chicken Breast',31,'Qunioa',64,'Flax Seed Oil',100,'Broccoli',1),
	(25,12,1,7,1,'Whey',71,'Instant Oats',71,'Coconut Oil',100,NULL,0),
	(26,12,1,7,2,'Turkey Breast',30,'White Basmati',58,'Coconut Oil',100,'Broccoli',1),
	(27,12,1,7,3,'Chicken Breast',31,'White Basmati',58,'Udos Oil',97,'Broccoli',1),
	(28,12,1,7,4,'Chicken Breast',31,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(29,12,2,1,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(30,12,2,1,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,1),
	(31,12,2,1,3,'Chicken Breast',31,'Qunioa',64,'Olive Oil',100,'Broccoli',1),
	(32,12,2,1,4,'Turkey Breast',30,'Sweet Potato',21,'Udos Oil',97,'Broccoli',1),
	(36,12,2,2,4,'Turkey Breast',30,'Qunioa',64,'Flax Seed Oil',100,'Broccoli',1),
	(37,12,2,3,1,'Whey',71,'Oatbran',48,'Udos Oil',97,NULL,0),
	(38,12,2,3,2,'Chicken Breast',31,'Sweet Potato',21,'Almond Butter',59,'Broccoli',1),
	(39,12,2,3,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(40,12,2,3,4,'Turkey Breast',30,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(41,12,2,4,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(42,12,2,4,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,1),
	(43,12,2,4,3,'Chicken Breast',31,'White Basmati',58,'Udos Oil',97,'Broccoli',1),
	(44,12,2,4,4,'Turkey Breast',30,'White Basmati',58,'Coconut Oil',100,'Broccoli',1),
	(45,12,2,5,1,'Whey',71,'Instant Oats',71,'Almond Butter',59,NULL,0),
	(46,12,2,5,2,'Turkey Breast',30,'Sweet Potato',21,'Olive Oil',100,'Broccoli',1),
	(47,12,2,5,3,'Chicken Breast',31,'Sweet Potato',21,'Olive Oil',100,'Broccoli',1),
	(48,12,2,5,4,'Turkey Breast',30,'Sweet Potato',21,'Udos Oil',97,'Broccoli',1),
	(49,12,2,6,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(50,12,2,6,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,0),
	(51,12,2,6,3,'Turkey Breast',30,'Sweet Potato',21,'Olive Oil',100,'Broccoli',1),
	(52,12,2,6,4,'Turkey Breast',30,'Qunioa',64,'Coconut Oil',100,'Broccoli',1),
	(53,12,2,7,1,'Whey',71,'Oatbran',48,'Coconut Oil',100,NULL,0),
	(54,12,2,7,2,'Chicken Breast',31,'White Basmati',58,'Udos Oil',97,'Broccoli',1),
	(55,12,2,7,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Coconut Oil',100,'Broccoli',1),
	(56,12,2,7,4,'Chicken Breast',31,'Sweet Potato',21,'Coconut Oil',100,'Broccoli',1),
	(78,12,1,1,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(83,12,1,1,12,'Whey',71,'Instant Oats',71,NULL,NULL,NULL,1),
	(87,12,1,5,1,'Ground Beef (95% Lean)',24,NULL,NULL,'Peanut Butter',50,'Broccoli',1),
	(89,12,1,4,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(91,12,3,1,12,'Whey',71,'Instant Oats',71,NULL,NULL,NULL,1),
	(95,12,3,2,12,'Whey',71,'Instant Oats',71,NULL,NULL,NULL,1),
	(97,12,3,2,4,'Chicken Wings',21,NULL,NULL,'Peanut Butter',50,'Broccoli',1),
	(99,12,3,3,2,'Sea Bass Fillet',22,NULL,NULL,'Udos Oil',97,'Broccoli',1),
	(100,12,3,3,3,'Turkey Breast',30,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(101,12,3,3,4,'Chicken Breast',31,'Sweet Potato',21,'Udos Oil',97,'Broccoli',1),
	(102,12,3,4,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(103,12,3,4,12,'Turkey Breast',30,'White Basmati',58,NULL,NULL,NULL,1),
	(104,12,3,4,3,'Pork Chop',22,'Sweet Potato',21,'Olive Oil',100,'Broccoli',1),
	(105,12,3,4,4,'Chicken Breast',31,NULL,NULL,'Olive Oil',100,'Broccoli',1),
	(107,12,3,5,2,'Ground Beef (95% Lean)',24,NULL,NULL,'Peanut Butter',50,'Broccoli',1),
	(108,12,3,5,3,'Turkey Breast',30,'Sweet Potato',21,'Coconut Oil',100,'Broccoli',1),
	(109,12,3,5,4,'Chicken Breast',31,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(110,12,3,6,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(111,12,3,6,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,1),
	(112,12,3,6,3,'Turkey Breast',30,'Wholewheat Pasta',75,'Udos Oil',97,'Broccoli',1),
	(113,12,3,6,4,'Chicken Breast',31,NULL,NULL,'Almond Butter',59,'Broccoli',1),
	(114,12,3,7,1,'Ground Beef (95% Lean)',24,NULL,NULL,'Flax Seed Oil',100,'Broccoli',1),
	(115,12,3,7,2,'Lemon Sole Fillet',20,NULL,NULL,'Almond Butter',59,'Broccoli',1),
	(116,12,3,7,3,'Pork Chop',22,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(117,12,3,7,4,'Pork Chop',22,'Sweet Potato',21,'Peanut Butter',50,'Broccoli',1),
	(123,13,1,1,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(124,13,1,1,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,1),
	(125,13,1,1,3,'Chicken Breast',31,'White Basmati',58,'Olive Oil',100,'Broccoli',1),
	(126,13,1,1,4,'Lean Beef Mince',21,'White Basmati',58,'Flax Seed Oil',100,'Broccoli',1),
	(127,13,1,1,5,'Lean Beef Mince',21,'Sweet Potato',21,'Coconut Oil',100,'Broccoli',1),
	(128,13,1,2,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(129,13,1,2,12,'Turkey Breast',30,'White Basmati',58,NULL,NULL,NULL,1),
	(130,13,1,2,3,'Tuna',24,'Sweet Potato',21,'Peanut Butter',50,'Broccoli',1),
	(131,13,1,2,4,'Salmon',20,'White Basmati',58,NULL,NULL,'Broccoli',1),
	(132,13,1,2,5,'Turkey Breast',30,'Qunioa',64,'Olive Oil',100,'Broccoli',1),
	(133,13,1,3,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(134,13,1,3,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,1),
	(135,13,1,3,3,'Tuna',24,'White Basmati',58,'Udos Oil',97,'Broccoli',1),
	(136,13,1,3,4,'Lean Beef Mince',21,'Wholewheat Pasta',75,'Almond Butter',59,'Broccoli',1),
	(137,13,1,3,5,'Beef Steak',30,'Qunioa',64,'Olive Oil',100,'Broccoli',1),
	(138,13,1,4,1,'Tuna',24,'Spouted Grain Bread',45,'Olive Oil',100,NULL,1),
	(139,13,1,4,2,'Tuna',24,'White Basmati',58,'Almond Butter',59,'Broccoli',1),
	(140,13,1,4,3,'Pork Chop',22,'Qunioa',64,'Flax Seed Oil',100,'Broccoli',1),
	(141,13,1,4,4,'Beef Steak',30,'Sweet Potato',21,NULL,NULL,'Broccoli',1),
	(142,13,1,4,5,'Beef Steak',30,'White Basmati',58,'Peanut Butter',50,'Broccoli',1),
	(143,13,1,5,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(144,13,1,5,12,'Turkey Breast',30,'White Basmati',58,NULL,NULL,NULL,1),
	(145,13,1,5,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(146,13,1,5,4,'Turkey Breast',30,'White Basmati',58,'Udos Oil',97,'Broccoli',1),
	(147,13,1,5,5,'Salmon',20,'White Basmati',58,'Coconut Oil',100,'Broccoli',1),
	(148,13,1,6,13,'Total Greek Yoghurt (0%)',13,NULL,NULL,NULL,NULL,NULL,0),
	(149,13,1,6,12,'Turkey Breast',30,'Spouted Grain Bread',45,NULL,NULL,NULL,1),
	(150,13,1,6,3,'Lean Beef Mince',21,'White Basmati',58,'Almond Butter',59,'Broccoli',1),
	(151,13,1,6,4,'Pork Chop',22,'Qunioa',64,'Almond Butter',59,'Broccoli',1),
	(152,13,1,6,5,'Turkey Breast',30,'White Basmati',58,'Udos Oil',97,'Broccoli',1),
	(153,13,1,7,13,'Total Greek Yoghurt (0%)',13,NULL,NULL,NULL,NULL,NULL,0),
	(154,13,1,7,12,'Turkey Breast',30,'Wholewheat Pasta',75,NULL,NULL,NULL,1),
	(155,13,1,7,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(156,13,1,7,4,'Tuna',24,'Wholewheat Pasta',75,'Coconut Oil',100,'Broccoli',1),
	(157,13,1,7,5,'Pork Chop',22,'White Basmati',58,'Olive Oil',100,'Broccoli',1),
	(158,13,2,1,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(159,13,2,1,12,'Total Greek Yoghurt (0%)',13,NULL,NULL,NULL,NULL,NULL,0),
	(160,13,2,1,3,'Lean Beef Mince',21,'Wholewheat Pasta',75,'Peanut Butter',50,'Broccoli',1),
	(161,13,2,1,4,'Tuna',24,'Wholewheat Pasta',75,'Coconut Oil',100,'Broccoli',1),
	(162,13,2,1,5,'Beef Steak',30,'Sweet Potato',21,'Peanut Butter',50,'Broccoli',1),
	(163,13,2,2,13,'Total Greek Yoghurt (0%)',13,NULL,NULL,NULL,NULL,NULL,0),
	(164,13,2,2,12,'Turkey Breast',30,'Spouted Grain Bread',45,NULL,NULL,NULL,0),
	(165,13,2,2,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Peanut Butter',50,'Broccoli',1),
	(166,13,2,2,4,'Chicken Breast',31,'White Basmati',58,'Olive Oil',100,'Broccoli',1),
	(167,13,2,2,5,'Pork Chop',22,'Qunioa',64,'Udos Oil',97,'Broccoli',1),
	(168,13,2,3,13,'Total Greek Yoghurt (0%)',13,NULL,NULL,NULL,NULL,NULL,0),
	(169,13,2,3,12,'Turkey Breast',30,'Wholewheat Pasta',75,NULL,NULL,NULL,1),
	(170,13,2,3,3,'Pork Chop',22,'Wholewheat Pasta',75,'Coconut Oil',100,'Broccoli',1),
	(171,13,2,3,4,'Lamb',25,'Wholewheat Pasta',75,NULL,NULL,'Broccoli',1),
	(172,13,2,3,5,'Lamb',25,'Wholewheat Pasta',75,'Udos Oil',97,'Broccoli',1),
	(173,13,2,4,1,'Casein',79,'Instant Oats',71,'Peanut Butter',50,NULL,1),
	(174,13,2,4,2,'Pork Chop',22,'Wholewheat Pasta',75,'Almond Butter',59,'Broccoli',1),
	(175,13,2,4,3,'Turkey Breast',30,'Sweet Potato',21,'Udos Oil',97,'Broccoli',1),
	(176,13,2,4,4,'Lean Beef Mince',21,'White Basmati',58,'Almonds',51,'Broccoli',1),
	(177,13,2,4,5,'Lean Beef Mince',21,'Sweet Potato',21,'Coconut Oil',100,'Broccoli',1),
	(178,13,2,5,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(179,13,2,5,12,'Turkey Breast',30,'White Basmati',58,NULL,NULL,NULL,1),
	(180,13,2,5,3,'Chicken Breast',31,'White Basmati',58,'Almond Butter',59,'Broccoli',1),
	(181,13,2,5,4,'Chicken Breast',31,'Sweet Potato',21,'Olive Oil',100,'Broccoli',1),
	(182,13,2,5,5,'Salmon',20,'Qunioa',64,NULL,NULL,'Broccoli',1),
	(183,13,2,6,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(184,13,2,6,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,1),
	(185,13,2,6,3,'Turkey Breast',30,'Qunioa',64,'Peanut Butter',50,'Broccoli',1),
	(186,13,2,6,4,'Salmon',20,'Wholewheat Pasta',75,NULL,NULL,'Broccoli',1),
	(187,13,2,6,5,'Tuna',24,'Wholewheat Pasta',75,'Udos Oil',97,'Broccoli',1),
	(188,13,2,7,13,'Total Greek Yoghurt (0%)',13,NULL,NULL,NULL,NULL,NULL,0),
	(189,13,2,7,12,'Turkey Breast',30,'Wholewheat Pasta',75,NULL,NULL,NULL,1),
	(190,13,2,7,3,'Turkey Breast',30,'Qunioa',64,'Almond Butter',59,'Broccoli',1),
	(191,13,2,7,4,'Salmon',20,'White Basmati',58,NULL,NULL,'Broccoli',1),
	(192,13,2,7,5,'Pork Chop',22,'Qunioa',64,'Coconut Oil',100,'Broccoli',1),
	(193,2,1,1,1,'Ground Beef (95% Lean)',24,NULL,NULL,'Almond Butter',59,'Carrot',1),
	(194,2,1,1,2,'Turkey Breast',30,'White Basmati',58,'Flax Seed Oil',100,'Broccoli',1),
	(195,2,1,1,11,'Whey',71,'Instant Oats',71,'Almond Butter',59,NULL,1),
	(196,2,1,1,12,'Whey',71,'Instant Oats',71,NULL,NULL,NULL,1),
	(197,2,1,1,5,'Turkey Breast',30,'Qunioa',64,'Peanut Butter',50,'Broccoli',1),
	(200,12,2,2,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(220,12,2,2,12,'Turkey Breast',30,'White Basmati',58,NULL,NULL,NULL,1),
	(248,12,2,2,3,'Pork Chop',22,'Qunioa',64,'Udos Oil',97,'Broccoli',2),
	(252,12,4,1,4,'Chicken Breast',31,NULL,NULL,'Olive Oil',100,'Broccoli',1),
	(253,12,4,2,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(254,12,4,2,12,'Turkey Breast',30,'Wheat / Oat Bread',48,NULL,NULL,NULL,1),
	(255,12,4,2,3,'Chicken Breast',31,'Sweet Potato',21,'Flax Seed Oil',100,'Broccoli',1),
	(256,12,4,2,4,'Haddock Fillet',20,NULL,NULL,'Udos Oil',97,'Broccoli',1),
	(257,12,4,3,1,'Ground Beef (95% Lean)',24,NULL,NULL,'Flax Seed Oil',100,'Carrot',1),
	(258,12,4,3,2,'Pork Chop',22,NULL,NULL,'Peanut Butter',50,'Broccoli',1),
	(259,12,4,3,3,'Chicken Breast',31,'Sweet Potato',21,'Flax Seed Oil',100,'Broccoli',1),
	(260,12,4,3,4,'Turkey Breast',30,'Wholewheat Pasta',75,'Udos Oil',97,'Broccoli',1),
	(261,12,4,4,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(262,12,4,4,12,'Turkey Breast',30,'Wheat / Oat Bread',48,NULL,NULL,NULL,1),
	(263,12,4,4,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(264,12,4,4,4,'Chicken Wings',21,NULL,NULL,'Peanut Butter',50,'Broccoli',1),
	(265,12,4,5,1,'Ground Beef (95% Lean)',24,NULL,NULL,'Flax Seed Oil',100,'Carrot',1),
	(266,12,4,5,2,'Chicken Breast',31,NULL,NULL,'Almond Butter',59,'Broccoli',1),
	(267,12,4,5,3,'Turkey Breast',30,'White Basmati',58,'Flax Seed Oil',100,'Broccoli',1),
	(268,12,4,5,4,'Pork Chop',22,'Qunioa',64,NULL,NULL,'Broccoli',1),
	(269,12,4,6,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(270,12,4,6,12,'Turkey Breast',30,'Spouted Grain Bread',45,NULL,NULL,NULL,1),
	(271,12,4,6,3,'Turkey Breast',30,'White Basmati',58,'Flax Seed Oil',100,'Broccoli',1),
	(272,12,4,6,4,'Turkey Mince',30,NULL,NULL,'Udos Oil',97,'Broccoli',1),
	(273,12,4,7,1,'Ground Beef (95% Lean)',24,NULL,NULL,'Almond Butter',59,'Broccoli',1),
	(274,12,4,7,2,'Sea Bass Fillet',22,NULL,NULL,'Udos Oil',97,'Broccoli',1),
	(275,12,4,7,3,'Turkey Breast',30,'Wholewheat Pasta',75,'Olive Oil',100,'Broccoli',1),
	(276,12,4,7,4,'Pork Chop',22,'Sweet Potato',21,'Peanut Butter',50,'Broccoli',1),
	(277,12,3,1,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(279,12,3,1,4,'Duck Breast',27,NULL,NULL,'Flax Seed Oil',100,'Broccoli',1),
	(280,12,5,1,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(281,12,5,1,12,'Whey',71,'Instant Oats',71,NULL,NULL,NULL,1),
	(282,12,5,1,3,'Pork Chop',22,'White Basmati',58,'Flax Seed Oil',100,'Broccoli',1),
	(283,12,5,1,4,'Trout Fillet',22,NULL,NULL,'Olive Oil',100,'Broccoli',1),
	(284,12,5,2,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(285,12,5,2,12,'Whey',71,'Instant Oats',71,NULL,NULL,NULL,1),
	(286,12,5,2,3,'Turkey Breast',30,'Wholewheat Pasta',75,'Pecans',72,'Broccoli',1),
	(287,12,5,2,4,'Tinned Tuna in Sunflower Oil',26,NULL,NULL,'Almonds',51,'Broccoli',1),
	(288,12,5,3,1,'Beef Sirloin Steak',28,NULL,NULL,'Flax Seed Oil',100,'Carrot',1),
	(289,12,5,3,2,'Lean Diced Beef',32,NULL,NULL,'Cashews',48,'Broccoli',1),
	(290,12,5,3,3,'Pork Chop',22,'Wholewheat Pasta',75,'Peanuts',44,'Broccoli',1),
	(291,12,5,3,4,'Chicken Breast',31,'Wholewheat Pasta',75,'Flax Seed Oil',100,'Broccoli',1),
	(292,12,5,4,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(293,12,5,4,12,'Turkey Breast',30,'Sweet Potato',21,NULL,NULL,NULL,1),
	(294,12,5,4,3,'Turkey Breast',30,'Sweet Potato',21,'Olives',18,'Broccoli',1),
	(295,12,5,4,4,'Lamb',25,NULL,NULL,'Peanuts',44,'Broccoli',1),
	(296,12,5,5,1,'Beef Fillet Steak',25,NULL,NULL,'Olives',18,'Broccoli',1),
	(297,12,5,5,2,'Chicken Thighs',25,NULL,NULL,'Almond Butter',59,'Broccoli',1),
	(298,12,5,5,3,'Pork Chop',22,'White Basmati',58,'Almond Butter',59,'Broccoli',1),
	(299,12,5,5,4,'Chicken Breast',31,'Sweet Potato',21,'Flax Seed Oil',100,'Broccoli',1),
	(300,12,5,6,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(301,12,5,6,12,'Whey',71,'Instant Oats',71,NULL,NULL,NULL,1),
	(302,12,5,6,3,'Tilapia Fillet',20,NULL,NULL,'Olive Oil',100,'Broccoli',0),
	(303,12,5,6,4,'Chicken Wings',21,NULL,NULL,'Flax Seed Oil',100,'Broccoli',1),
	(304,12,5,7,1,'Tilapia Fillet',20,NULL,NULL,'Pecans',72,'Broccoli',1),
	(305,12,5,7,2,'Beef Sirloin Steak',28,NULL,NULL,'Udos Oil',97,'Broccoli',1),
	(306,12,5,7,3,'Chicken Breast',31,'Wholewheat Pasta',75,'Olive Oil',100,'Broccoli',1),
	(307,12,5,7,4,'Pork Chop',22,'Sweet Potato',21,'Olives',18,'Broccoli',1),
	(311,12,3,1,3,'Chicken Breast',31,'Qunioa',64,'Cashews',48,'Broccoli',2),
	(313,12,3,2,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(320,12,3,2,3,'Turkey Breast',30,'Wholewheat Pasta',75,'Walnuts',68,'Broccoli',2),
	(321,12,4,1,13,'Ground Beef (95% Lean)',24,NULL,NULL,NULL,NULL,NULL,0),
	(323,12,4,1,12,'Prawns',15,NULL,NULL,NULL,NULL,NULL,0),
	(324,12,4,1,3,'Tuna Steak',32,NULL,NULL,NULL,NULL,NULL,0),
	(329,12,3,3,1,'Beef Sirloin Steak',28,NULL,NULL,'Coconut Oil',100,'Broccoli',1),
	(330,12,3,5,1,'Tilapia Fillet',20,NULL,NULL,'Walnuts',68,'Carrot',1);

/*!40000 ALTER TABLE `users_meals` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table veg
# ------------------------------------------------------------

DROP TABLE IF EXISTS `veg`;

CREATE TABLE `veg` (
  `Veg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Meal_Type` varchar(255) NOT NULL,
  PRIMARY KEY (`Veg_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `veg` WRITE;
/*!40000 ALTER TABLE `veg` DISABLE KEYS */;

INSERT INTO `veg` (`Veg_ID`, `Name`, `Meal_Type`)
VALUES
	(1,'Broccoli','green'),
	(2,'Carrot','all');

/*!40000 ALTER TABLE `veg` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table workout
# ------------------------------------------------------------

DROP TABLE IF EXISTS `workout`;

CREATE TABLE `workout` (
  `WorkOut_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Training_ID` int(11) NOT NULL,
  `Week` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Order` int(11) NOT NULL,
  PRIMARY KEY (`WorkOut_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `workout` WRITE;
/*!40000 ALTER TABLE `workout` DISABLE KEYS */;

INSERT INTO `workout` (`WorkOut_ID`, `Training_ID`, `Week`, `Name`, `Order`)
VALUES
	(1,1,1,'Chest, shoulders, back, abs',1),
	(2,1,1,'Legs & Core',2);

/*!40000 ALTER TABLE `workout` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
