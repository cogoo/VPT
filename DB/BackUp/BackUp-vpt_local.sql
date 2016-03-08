-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2016 at 07:52 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `vpt`
--

-- --------------------------------------------------------

--
-- Table structure for table `Allergy`
--

CREATE TABLE `Allergy` (
  `Allergy_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Allergy_Name` varchar(255) NOT NULL,
  `Linked_Protein` varchar(255) NOT NULL,
  `Linked_Carbs` varchar(255) NOT NULL,
  `Linked_Fat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cal_breakdown`
--

CREATE TABLE `cal_breakdown` (
  `Break_ID` int(11) NOT NULL,
  `Carbs` float NOT NULL,
  `Fat` float NOT NULL,
  `Train_ID` int(11) NOT NULL,
  `Meal_No` int(11) NOT NULL,
  `Goal_ID` int(11) NOT NULL,
  `No_Meals` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=293 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cal_breakdown`
--

INSERT INTO `cal_breakdown` (`Break_ID`, `Carbs`, `Fat`, `Train_ID`, `Meal_No`, `Goal_ID`, `No_Meals`) VALUES
(2, 0.25, 0.1, 0, 1, 1, 6),
(3, 0.2, 0.1, 0, 2, 1, 6),
(4, 0.15, 0.15, 0, 3, 1, 6),
(5, 0.15, 0.2, 0, 4, 1, 6),
(6, 0.15, 0.2, 0, 5, 1, 6),
(7, 0.1, 0.25, 0, 6, 1, 6),
(8, 0.3, 0.15, 1, 13, 2, 6),
(9, 0.2, 0, 1, 12, 2, 6),
(10, 0.3, 0.15, 1, 3, 2, 6),
(11, 0.1, 0.2, 1, 4, 2, 6),
(12, 0.05, 0.25, 1, 5, 2, 6),
(13, 0.05, 0.25, 1, 6, 2, 6),
(14, 0.05, 0.35, 2, 1, 2, 6),
(15, 0.25, 0.1, 2, 11, 2, 6),
(16, 0.2, 0, 2, 12, 2, 6),
(17, 0.3, 0.1, 2, 4, 2, 6),
(18, 0.15, 0.2, 2, 5, 2, 6),
(19, 0.05, 0.25, 2, 6, 2, 6),
(20, 0.05, 0.3, 3, 1, 2, 6),
(21, 0.1, 0.2, 3, 2, 2, 6),
(22, 0.25, 0.1, 3, 11, 2, 6),
(23, 0.2, 0, 3, 12, 2, 6),
(24, 0.3, 0.1, 3, 5, 2, 6),
(25, 0.15, 0.2, 3, 6, 2, 6),
(26, 0.05, 0.3, 4, 1, 2, 6),
(27, 0.1, 0.2, 4, 2, 2, 6),
(28, 0.15, 0.2, 4, 3, 2, 6),
(29, 0.25, 0.1, 4, 11, 2, 6),
(30, 0.2, 0, 4, 12, 2, 6),
(31, 0.3, 0.1, 4, 6, 2, 6),
(32, 0.05, 0.3, 0, 1, 2, 6),
(33, 0.1, 0.2, 0, 2, 2, 6),
(34, 0.2, 0.15, 0, 3, 2, 6),
(35, 0.2, 0.15, 0, 4, 2, 6),
(36, 0.25, 0.1, 0, 5, 2, 6),
(37, 0.3, 0.1, 0, 6, 2, 6),
(38, 0.3, 0.15, 1, 13, 3, 6),
(39, 0.2, 0, 1, 12, 3, 6),
(40, 0.3, 0.15, 1, 3, 3, 6),
(41, 0.1, 0.2, 1, 4, 3, 6),
(42, 0.05, 0.25, 1, 5, 3, 6),
(43, 0.05, 0.25, 1, 6, 3, 6),
(44, 0.05, 0.35, 2, 1, 3, 6),
(45, 0.25, 0.1, 2, 11, 3, 6),
(46, 0.2, 0, 2, 12, 3, 6),
(47, 0.3, 0.1, 2, 4, 3, 6),
(48, 0.15, 0.2, 2, 5, 3, 6),
(49, 0.05, 0.25, 2, 6, 3, 6),
(50, 0.05, 0.3, 3, 1, 3, 6),
(51, 0.1, 0.2, 3, 2, 3, 6),
(52, 0.25, 0.1, 3, 11, 3, 6),
(53, 0.2, 0, 3, 12, 3, 6),
(54, 0.3, 0.1, 3, 5, 3, 6),
(55, 0.15, 0.2, 3, 6, 3, 6),
(56, 0.05, 0.3, 4, 1, 3, 6),
(57, 0.1, 0.2, 4, 2, 3, 6),
(58, 0.15, 0.2, 4, 3, 3, 6),
(59, 0.25, 0.1, 4, 11, 3, 6),
(60, 0.2, 0, 4, 12, 3, 6),
(61, 0.3, 0.1, 4, 6, 3, 6),
(62, 0.05, 0.3, 0, 1, 3, 6),
(63, 0.1, 0.2, 0, 2, 3, 6),
(64, 0.2, 0.15, 0, 3, 3, 6),
(65, 0.2, 0.15, 0, 4, 3, 6),
(66, 0.25, 0.1, 0, 5, 3, 6),
(67, 0.3, 0.1, 0, 6, 3, 6),
(68, 0.3, 0.15, 1, 13, 4, 6),
(69, 0.2, 0, 1, 12, 4, 6),
(70, 0.3, 0.15, 1, 3, 4, 6),
(71, 0.1, 0.2, 1, 4, 4, 6),
(72, 0.05, 0.25, 1, 5, 4, 6),
(73, 0.05, 0.25, 1, 6, 4, 6),
(74, 0.05, 0.35, 2, 1, 4, 6),
(75, 0.25, 0.1, 2, 11, 4, 6),
(76, 0.2, 0, 2, 12, 4, 6),
(77, 0.3, 0.1, 2, 4, 4, 6),
(78, 0.15, 0.2, 2, 5, 4, 6),
(79, 0.05, 0.25, 2, 6, 4, 6),
(80, 0.05, 0.3, 3, 1, 4, 6),
(81, 0.1, 0.2, 3, 2, 4, 6),
(82, 0.25, 0.1, 3, 11, 4, 6),
(83, 0.2, 0, 3, 12, 4, 6),
(84, 0.3, 0.1, 3, 5, 4, 6),
(85, 0.15, 0.2, 3, 6, 4, 6),
(86, 0.05, 0.3, 4, 1, 4, 6),
(87, 0.1, 0.2, 4, 2, 4, 6),
(88, 0.15, 0.2, 4, 3, 4, 6),
(89, 0.25, 0.1, 4, 11, 4, 6),
(90, 0.2, 0, 4, 12, 4, 6),
(91, 0.3, 0.1, 4, 6, 4, 6),
(92, 0.05, 0.3, 0, 1, 4, 6),
(93, 0.1, 0.2, 0, 2, 4, 6),
(94, 0.2, 0.15, 0, 3, 4, 6),
(95, 0.2, 0.15, 0, 4, 4, 6),
(96, 0.25, 0.1, 0, 5, 4, 6),
(97, 0.3, 0.1, 0, 6, 4, 6),
(98, 0.3, 0.15, 1, 13, 5, 6),
(99, 0.2, 0, 1, 12, 5, 6),
(100, 0.3, 0.15, 1, 3, 5, 6),
(101, 0.1, 0.2, 1, 4, 5, 6),
(102, 0.05, 0.25, 1, 5, 5, 6),
(103, 0.05, 0.25, 1, 6, 5, 6),
(104, 0.05, 0.35, 2, 1, 5, 6),
(105, 0.25, 0.1, 2, 11, 5, 6),
(106, 0.2, 0, 2, 12, 5, 6),
(107, 0.3, 0.1, 2, 4, 5, 6),
(108, 0.15, 0.2, 2, 5, 5, 6),
(109, 0.05, 0.25, 2, 6, 5, 6),
(110, 0.05, 0.3, 3, 1, 5, 6),
(111, 0.1, 0.2, 3, 2, 5, 6),
(112, 0.25, 0.1, 3, 11, 5, 6),
(113, 0.2, 0, 3, 12, 5, 6),
(114, 0.3, 0.1, 3, 5, 5, 6),
(115, 0.15, 0.2, 3, 6, 5, 6),
(116, 0.05, 0.3, 4, 1, 5, 6),
(117, 0.1, 0.2, 4, 2, 5, 6),
(118, 0.15, 0.2, 4, 3, 5, 6),
(119, 0.25, 0.1, 4, 11, 5, 6),
(120, 0.2, 0, 4, 12, 5, 6),
(121, 0.3, 0.1, 4, 6, 5, 6),
(122, 0.05, 0.3, 0, 1, 5, 6),
(123, 0.1, 0.2, 0, 2, 5, 6),
(124, 0.2, 0.15, 0, 3, 5, 6),
(125, 0.2, 0.15, 0, 4, 5, 6),
(126, 0.25, 0.1, 0, 5, 5, 6),
(127, 0.3, 0.1, 0, 6, 5, 6),
(128, 0.3, 0.2, 1, 13, 1, 5),
(129, 0.15, 0, 1, 12, 1, 5),
(130, 0.25, 0.15, 1, 3, 1, 5),
(131, 0.15, 0.3, 1, 4, 1, 5),
(132, 0.15, 0.35, 1, 5, 1, 5),
(133, 0.15, 0.3, 2, 1, 1, 5),
(134, 0.25, 0.15, 2, 11, 1, 5),
(135, 0.15, 0, 2, 12, 1, 5),
(136, 0.25, 0.25, 2, 4, 1, 5),
(137, 0.2, 0.3, 2, 5, 1, 5),
(138, 0.2, 0.3, 3, 1, 1, 5),
(139, 0.05, 0.25, 3, 2, 1, 5),
(140, 0.25, 0.2, 3, 11, 1, 5),
(141, 0.15, 0, 3, 12, 1, 5),
(142, 0.35, 0.25, 3, 5, 1, 5),
(143, 0.25, 0.15, 0, 1, 1, 5),
(144, 0.2, 0.15, 0, 2, 1, 5),
(145, 0.15, 0.2, 0, 3, 1, 5),
(146, 0.15, 0.25, 0, 4, 1, 5),
(147, 0.25, 0.25, 0, 5, 1, 5),
(148, 0.3, 0.2, 1, 13, 2, 5),
(149, 0.2, 0, 1, 12, 2, 5),
(150, 0.3, 0.2, 1, 3, 2, 5),
(151, 0.1, 0.3, 1, 4, 2, 5),
(152, 0.1, 0.3, 1, 5, 2, 5),
(153, 0.05, 0.4, 2, 1, 2, 5),
(154, 0.25, 0.15, 2, 11, 2, 5),
(155, 0.2, 0, 2, 12, 2, 5),
(156, 0.3, 0.15, 2, 4, 2, 5),
(157, 0.2, 0.25, 2, 5, 2, 5),
(158, 0.05, 0.35, 3, 1, 2, 5),
(159, 0.1, 0.25, 3, 2, 2, 5),
(160, 0.25, 0.15, 3, 11, 2, 5),
(161, 0.2, 0, 3, 12, 2, 5),
(162, 0.45, 0.15, 3, 5, 2, 5),
(163, 0.05, 0.3, 4, 1, 2, 5),
(164, 0.1, 0.25, 4, 2, 2, 5),
(165, 0.15, 0.25, 4, 3, 2, 5),
(166, 0.25, 0.1, 4, 11, 2, 5),
(167, 0.5, 0, 4, 12, 2, 5),
(168, 0.05, 0.3, 0, 1, 2, 5),
(169, 0.1, 0.25, 0, 2, 2, 5),
(170, 0.2, 0.2, 0, 3, 2, 5),
(171, 0.2, 0.15, 0, 4, 2, 5),
(172, 0.45, 0.1, 0, 5, 2, 5),
(173, 0.3, 0.2, 1, 13, 3, 5),
(174, 0.2, 0, 1, 12, 3, 5),
(175, 0.3, 0.2, 1, 3, 3, 5),
(176, 0.1, 0.3, 1, 4, 3, 5),
(177, 0.1, 0.3, 1, 5, 3, 5),
(178, 0.05, 0.4, 2, 1, 3, 5),
(179, 0.25, 0.15, 2, 11, 3, 5),
(180, 0.2, 0, 2, 12, 3, 5),
(181, 0.3, 0.15, 2, 4, 3, 5),
(182, 0.2, 0.25, 2, 5, 3, 5),
(183, 0.05, 0.35, 3, 1, 3, 5),
(184, 0.1, 0.25, 3, 2, 3, 5),
(185, 0.25, 0.15, 3, 11, 3, 5),
(186, 0.2, 0, 3, 12, 3, 5),
(187, 0.45, 0.15, 3, 5, 3, 5),
(188, 0.05, 0.3, 0, 1, 3, 5),
(189, 0.1, 0.25, 0, 2, 3, 5),
(190, 0.2, 0.2, 0, 3, 3, 5),
(191, 0.2, 0.15, 0, 4, 3, 5),
(192, 0.45, 0.1, 0, 5, 3, 5),
(193, 0.3, 0.2, 1, 13, 4, 5),
(194, 0.2, 0, 1, 12, 4, 5),
(195, 0.3, 0.2, 1, 3, 4, 5),
(196, 0.1, 0.3, 1, 4, 4, 5),
(197, 0.1, 0.3, 1, 5, 4, 5),
(198, 0.05, 0.4, 2, 1, 4, 5),
(199, 0.25, 0.15, 2, 11, 4, 5),
(200, 0.2, 0, 2, 12, 4, 5),
(201, 0.3, 0.15, 2, 4, 4, 5),
(202, 0.2, 0.25, 2, 5, 4, 5),
(203, 0.05, 0.35, 3, 1, 4, 5),
(204, 0.1, 0.25, 3, 2, 4, 5),
(205, 0.25, 0.15, 3, 11, 4, 5),
(206, 0.2, 0, 3, 12, 4, 5),
(207, 0.45, 0.15, 3, 5, 4, 5),
(208, 0.05, 0.3, 0, 1, 4, 5),
(209, 0.1, 0.25, 0, 2, 4, 5),
(210, 0.2, 0.2, 0, 3, 4, 5),
(211, 0.2, 0.15, 0, 4, 4, 5),
(212, 0.45, 0.1, 0, 5, 4, 5),
(213, 0.3, 0.2, 1, 13, 5, 5),
(214, 0.2, 0, 1, 12, 5, 5),
(215, 0.3, 0.2, 1, 3, 5, 5),
(216, 0.1, 0.3, 1, 4, 5, 5),
(217, 0.1, 0.3, 1, 5, 5, 5),
(218, 0.05, 0.4, 2, 1, 5, 5),
(219, 0.25, 0.15, 2, 11, 5, 5),
(220, 0.2, 0, 2, 12, 5, 5),
(221, 0.3, 0.15, 2, 4, 5, 5),
(222, 0.2, 0.25, 2, 5, 5, 5),
(223, 0.05, 0.35, 3, 1, 5, 5),
(224, 0.1, 0.25, 3, 2, 5, 5),
(225, 0.25, 0.15, 3, 11, 5, 5),
(226, 0.2, 0, 3, 12, 5, 5),
(227, 0.45, 0.15, 3, 5, 5, 5),
(228, 0.05, 0.3, 0, 1, 5, 5),
(229, 0.1, 0.25, 0, 2, 5, 5),
(230, 0.2, 0.2, 0, 3, 5, 5),
(231, 0.2, 0.15, 0, 4, 5, 5),
(232, 0.45, 0.1, 0, 5, 5, 5),
(233, 0.3, 0.3, 1, 13, 1, 4),
(234, 0.15, 0, 1, 12, 1, 4),
(235, 0.35, 0.25, 1, 3, 1, 4),
(236, 0.3, 0.45, 1, 4, 1, 4),
(237, 0.15, 0.4, 2, 1, 1, 4),
(238, 0.35, 0.2, 2, 11, 1, 4),
(239, 0.25, 0, 2, 12, 1, 4),
(240, 0.25, 0.4, 2, 4, 1, 4),
(241, 0.3, 0.2, 0, 1, 1, 4),
(242, 0.3, 0.15, 0, 2, 1, 4),
(243, 0.2, 0.3, 0, 3, 1, 4),
(244, 0.2, 0.35, 0, 4, 1, 4),
(245, 0.3, 0.25, 1, 13, 2, 4),
(246, 0.3, 0, 1, 12, 2, 4),
(247, 0.3, 0.25, 1, 3, 2, 4),
(248, 0.1, 0.5, 1, 4, 2, 4),
(249, 0.05, 0.55, 2, 1, 2, 4),
(250, 0.25, 0.25, 2, 11, 2, 4),
(251, 0.2, 0, 2, 12, 2, 4),
(252, 0.5, 0.2, 2, 4, 2, 4),
(253, 0.05, 0.3, 0, 1, 2, 4),
(254, 0.1, 0.35, 0, 2, 2, 4),
(255, 0.4, 0.2, 0, 3, 2, 4),
(256, 0.45, 0.15, 0, 4, 2, 4),
(257, 0.3, 0.25, 1, 13, 3, 4),
(258, 0.3, 0, 1, 12, 3, 4),
(259, 0.3, 0.25, 1, 3, 3, 4),
(260, 0.1, 0.5, 1, 4, 3, 4),
(261, 0.05, 0.55, 2, 1, 3, 4),
(262, 0.25, 0.25, 2, 11, 3, 4),
(263, 0.2, 0, 2, 12, 3, 4),
(264, 0.5, 0.2, 2, 4, 3, 4),
(265, 0.05, 0.3, 0, 1, 3, 4),
(266, 0.1, 0.35, 0, 2, 3, 4),
(267, 0.4, 0.2, 0, 3, 3, 4),
(268, 0.45, 0.15, 0, 4, 3, 4),
(269, 0.3, 0.25, 1, 13, 4, 4),
(270, 0.3, 0, 1, 12, 4, 4),
(271, 0.3, 0.25, 1, 3, 4, 4),
(272, 0.1, 0.5, 1, 4, 4, 4),
(273, 0.05, 0.55, 2, 1, 4, 4),
(274, 0.25, 0.25, 2, 11, 4, 4),
(275, 0.2, 0, 2, 12, 4, 4),
(276, 0.5, 0.2, 2, 4, 4, 4),
(277, 0.05, 0.3, 0, 1, 4, 4),
(278, 0.1, 0.35, 0, 2, 4, 4),
(279, 0.4, 0.2, 0, 3, 4, 4),
(280, 0.45, 0.15, 0, 4, 4, 4),
(281, 0.3, 0.25, 1, 13, 5, 4),
(282, 0.3, 0, 1, 12, 5, 4),
(283, 0.3, 0.25, 1, 3, 5, 4),
(284, 0.1, 0.5, 1, 4, 5, 4),
(285, 0.05, 0.55, 2, 1, 5, 4),
(286, 0.25, 0.25, 2, 11, 5, 4),
(287, 0.2, 0, 2, 12, 5, 4),
(288, 0.5, 0.2, 2, 4, 5, 4),
(289, 0.05, 0.3, 0, 1, 5, 4),
(290, 0.1, 0.35, 0, 2, 5, 4),
(291, 0.4, 0.2, 0, 3, 5, 4),
(292, 0.45, 0.15, 0, 4, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `carbs`
--

CREATE TABLE `carbs` (
  `Carb_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL,
  `Meal_Type` varchar(255) NOT NULL,
  `Linked_Foods` varchar(255) NOT NULL,
  `Live` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carbs`
--

INSERT INTO `carbs` (`Carb_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`, `Meal_Type`, `Linked_Foods`, `Live`) VALUES
(1, 'Wholewheat Pasta', 75, 15, 1, 30, 0, ',2,3,4,5,12,', ',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44,', 1),
(2, 'Instant Oats', 71, 9, 8, 30, 0, ',1,6,11,12,', ',1, 2, 12, 13, 14, 23, 24, 30, ', 1),
(3, 'Qunioa', 64, 14, 6, 30, 0, ',2,3,4,5,11,12,', ',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ', 1),
(4, 'White Basmati', 58, 6, 1, 30, 0, ',2,3,4,5,11,12,', ',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ', 1),
(5, 'Oatbran', 48, 13, 9, 30, 0, ',1,6,12,', ',1, 2, 12, 13, 14, 16, 17, 24, 30, 34, 44, ', 1),
(6, 'Wheat / Oat Bread', 48, 8, 4, 45, 0, ',1,12,', ',1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ', 1),
(7, 'Spouted Grain Bread', 45, 12, 2, 45, 0, ',1,12,', ',1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ', 1),
(8, 'Sweet Potato', 21, 2, 1, 45, 0, ',2,3,4,5,11,12,', ',3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ', 1),
(9, 'Brown Rice', 71, 7, 3, 50, 0, ',2,3,4,5,11,12,', ',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ', 1),
(10, 'Bulgar Wheat', 24, 4, 0, 50, 0, ',2,3,4,5,11,12,', ',3, 4, 5, 6, 7, 8, 9, 10, 15, 16, 17, 18, 19, 20, 21, 22, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ', 1),
(11, 'Porridge Oats', 58, 11, 8, 30, 0, ',1,2,3,4,5,6,11,12,13,', ',1, 2, 12, 13, 14, 16, 17, 24, 30, 34, 44, ', 1),
(12, 'Jelly Babies', 100, 9, 4, 5, 0, ',12,', ',1, 2, ', 1),
(13, 'Jelly Beans', 90, 0, 0, 5, 0, ',12,', ',1, 2, ', 1),
(14, 'Dark Chocolate (90%)', 30, 10, 55, 5, 90, ',1,6,11,12,13,', ',1, 2, 12, 13, 14, 23, 24, 30, 44, ', 1),
(15, 'Dextrose', 96, 0, 0, 15, 0, ',12,', ',1, 2, ', 1),
(16, 'White Potato', 32, 3, 0, 75, 0, ',12,', ',3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, ', 1),
(17, 'Dark Chocolate (80%)', 22, 10, 50, 5, 90, ',1,6,11,12,13,', ',1, 2, 12, 13, 14, 23, 24, 30, 44, ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `Exercise_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `short_description` tinytext NOT NULL,
  `Description` text NOT NULL,
  `Sets` int(11) NOT NULL,
  `Order` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `WorkOut_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`Exercise_ID`, `Name`, `short_description`, `Description`, `Sets`, `Order`, `Type`, `Image`, `WorkOut_ID`) VALUES
(5, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 1),
(6, 'Dumbell Bench Press', 'Tempo: 3-0-X-0\n<br>\nSet 1: 8-10 Reps @ 50% of 1 Rep<br> Maximum \n60 Second Rest', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the bar comfortably, slightly wider than shoulder width apart.\nEnsure bar touches your chest, but does not bounce off it.\nAlso ensure arms do not completely lock out at the peak of the movement - keeping the strain through your chest and protecting your elbows.', 3, 2, 'Weights', '', 1),
(7, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 2),
(8, 'Dumbell Bench Press', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the b', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the bar comfortably, slightly wider than shoulder width apart.\nEnsure bar touches your chest, but does not bounce off it.\nAlso ensure arms do not completely lock out at the peak of the movement - keeping the strain through your chest and protecting your elbows.', 3, 2, 'Weights', '', 2),
(9, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 3),
(10, 'Dumbell Bench Press', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the b', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the bar comfortably, slightly wider than shoulder width apart.\nEnsure bar touches your chest, but does not bounce off it.\nAlso ensure arms do not completely lock out at the peak of the movement - keeping the strain through your chest and protecting your elbows.', 3, 2, 'Weights', '', 3),
(11, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 4),
(12, 'Dumbell Bench Press', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the b', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the bar comfortably, slightly wider than shoulder width apart.\nEnsure bar touches your chest, but does not bounce off it.\nAlso ensure arms do not completely lock out at the peak of the movement - keeping the strain through your chest and protecting your elbows.', 3, 2, 'Weights', '', 4),
(13, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 5),
(14, 'Dumbell Bench Press', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the b', 'Tempo: 3-0-X-0\n\nSet 1: 8-10 Reps @ 50% of 1 Rep Maximum \n60 Second Rest\n\nHands grip the bar comfortably, slightly wider than shoulder width apart.\nEnsure bar touches your chest, but does not bounce off it.\nAlso ensure arms do not completely lock out at the peak of the movement - keeping the strain through your chest and protecting your elbows.', 3, 2, 'Weights', '', 5),
(15, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16869),
(16, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16870),
(17, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16871),
(18, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16872),
(19, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16876),
(20, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16877),
(21, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16878),
(22, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16879),
(23, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16883),
(24, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16884),
(25, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16885),
(26, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16886),
(27, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16890),
(28, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16891),
(29, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16892),
(30, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16893),
(31, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16897),
(32, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16898),
(33, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16899),
(34, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16900),
(35, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16904),
(36, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16905),
(37, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16906),
(38, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16907),
(39, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16911),
(40, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16912),
(41, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16913),
(42, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16914),
(43, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16918),
(44, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16919),
(45, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16920),
(46, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16921),
(47, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16925),
(48, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16926),
(49, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16927),
(50, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16928),
(51, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16932),
(52, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16933),
(53, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16934),
(54, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16935),
(55, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16939),
(56, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16940),
(57, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16941),
(58, 'Warm-up - Cross Trainer', 'Light Cross Trainer for 10 Minutes', 'Light Cross Trainer for 10 Minutes', 1, 1, 'Cardio', '', 16942);

-- --------------------------------------------------------

--
-- Table structure for table `fat`
--

CREATE TABLE `fat` (
  `Fat_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL,
  `Live` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fat`
--

INSERT INTO `fat` (`Fat_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`, `Live`) VALUES
(1, 'Coconut Oil', 0, 0, 100, 4, 0, 1),
(2, 'Olive Oil', 0, 0, 100, 4, 0, 1),
(3, 'Flax Seed Oil', 0, 0, 100, 4, 0, 1),
(4, 'Udos Oil', 0, 2, 97, 4, 0, 1),
(5, 'Almond Butter', 21, 15, 59, 4, 0, 1),
(6, 'Almonds', 20, 21, 51, 25, 0, 1),
(7, 'Peanut Butter', 22, 24, 50, 4, 0, 1),
(8, 'Avocado', 2, 2, 20, 120, 480, 1),
(9, 'Olives', 0, 1, 18, 20, 0, 1),
(10, 'Walnuts', 4, 18, 68, 20, 0, 1),
(11, 'Peanuts', 14, 30, 44, 20, 0, 1),
(12, 'Hazelnuts', 6, 16, 64, 20, 0, 1),
(13, 'Cashews', 17, 22, 48, 20, 0, 1),
(14, 'Pecans', 14, 5, 72, 20, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `Goal_ID` int(11) NOT NULL,
  `Goal` varchar(255) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Calories` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`Goal_ID`, `Goal`, `Gender`, `Calories`, `Name`, `Description`) VALUES
(1, 'Build Muscle', 'M', 500, 'Muscle Builder', ''),
(2, 'Lose Fat', 'M', -500, 'Fat Shredder', ''),
(3, 'Increase Fitness', 'M', -100, 'Peak Fitness', ''),
(4, 'Tone Up', 'F', -100, 'Get Toned', ''),
(5, 'Increase Fitness', 'F', -100, 'Peak Fitness', '');

-- --------------------------------------------------------

--
-- Table structure for table `protein`
--

CREATE TABLE `protein` (
  `Protein_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL,
  `Meal_Type` varchar(255) NOT NULL,
  `Live` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `protein`
--

INSERT INTO `protein` (`Protein_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`, `Meal_Type`, `Live`) VALUES
(1, 'Casein', 7, 79, 1, 15, 60, ',1,6,', 1),
(2, 'Whey', 10, 71, 6, 15, 90, ',1,11,12,13,', 1),
(3, 'Chicken Breast', 0, 31, 4, 75, 300, ',2,3,4,5,11,12,', 1),
(4, 'Turkey Breast', 0, 30, 1, 75, 300, ',2,3,4,5,11,12,', 1),
(5, 'Beef Steak', 0, 30, 15, 75, 300, ',2,3,4,5,12,', 1),
(6, 'Lamb', 0, 25, 17, 75, 300, ',2,3,4,5,12,', 1),
(7, 'Tuna', 0, 24, 3, 100, 200, ',1,2,3,4,5,11,12,', 1),
(8, 'Pork Chop', 0, 22, 3, 100, 300, ',2,3,4,5,12,', 1),
(9, 'Lean Beef Mince', 0, 21, 5, 100, 250, ',2,3,4,5,12,', 1),
(10, 'Salmon', 0, 20, 13, 100, 250, ',1,2,3,4,5,11,12,', 1),
(11, 'Mackerel', 0, 19, 14, 100, 250, ',3,4,5,', 1),
(12, 'Whole Eggs', 1, 13, 11, 50, 300, ',1,2,3,4,5,11,12,13,', 1),
(13, 'Low Fat Cottage Cheese', 3, 11, 1, 50, 250, ',1,6,', 1),
(14, 'Egg Whites', 1, 11, 0, 50, 300, ',1,2,3,4,5,11,12,13,', 1),
(15, 'Duck Breast', 0, 27, 4, 100, 300, ',2,3,4,5,11,12,', 1),
(16, 'Back Bacon', 0, 26, 12, 30, 125, ',1,2,3,4,5,12,13,', 1),
(17, 'Pork Sausage', 5, 9, 13, 80, 240, ',1,2,3,4,5,12,13,', 1),
(18, 'Sea Bass Fillet', 0, 22, 9, 90, 360, ',2,3,4,5,12,', 1),
(19, 'Cod Fillet', 0, 18, 1, 100, 400, ',2,3,4,5,12,', 1),
(20, 'Haddock Fillet', 0, 20, 1, 100, 400, ',2,3,4,5,12,', 1),
(21, 'Trout Fillet', 2, 22, 6, 100, 350, ',2,3,4,5,12,', 1),
(22, 'Lemon Sole Fillet', 0, 20, 2, 100, 300, ',2,3,4,5,12,', 1),
(23, 'Beef Jerky', 24, 40, 5, 25, 100, ',2,3,4,5,11,12,', 1),
(24, 'Total Greek Yoghurt (0%)', 4, 13, 0, 50, 400, ',1,2,3,4,11,12,13,', 1),
(25, 'Ground Beef (95% Lean)', 0, 24, 7, 50, 300, ',1,2,3,4,5,12,', 1),
(26, 'Turkey Mince', 1, 30, 2, 50, 300, ',2,3,4,5,11,12,', 1),
(27, 'Tuna Steak', 0, 32, 1, 50, 400, ',2,3,4,5,11,12,', 1),
(28, 'Chicken Thighs', 0, 25, 14, 75, 350, ',2,3,4,5,12,', 1),
(29, 'Chicken Wings', 0, 21, 15, 75, 300, ',2,3,4,5,12,', 1),
(30, 'Almonds', 20, 23, 50, 5, 100, ',1,2,3,4,5,11,12,13,', 1),
(31, 'Smoked Haddock', 12, 23, 1, 100, 400, ',2,3,4,5,', 1),
(32, 'Tinned Tuna in water', 0, 24, 0, 100, 300, ',2,3,4,5,11,12,', 1),
(33, 'Tinned Tuna in brine', 0, 22, 1, 100, 300, ',2,3,4,5,11,12,', 1),
(34, 'Smoked Salmon', 0, 35, 22, 50, 300, ',1,2,3,4,5,11,12,', 1),
(35, 'Tilapia Fillet', 0, 20, 2, 100, 400, ',1,2,3,4,5,11,12,', 1),
(36, 'Prawns', 0, 15, 1, 100, 400, ',2,3,4,5,12,', 1),
(37, 'Tinned Tuna in Sunflower Oil', 0, 26, 7, 100, 300, ',2,3,4,5,11,12,', 1),
(38, '10% Fat Beef Meatballs', 4, 19, 8, 80, 350, ',3,4,5,12,', 1),
(39, 'Lean Diced Beef', 0, 32, 4, 80, 350, ',1,2,3,4,5,12,', 1),
(40, 'Beef Sirloin Steak', 0, 28, 11, 100, 350, ',1,2,3,4,5,12,', 1),
(41, 'Beef Rump Steak', 0, 22, 12, 100, 350, ',1,2,3,4,5,12,', 1),
(42, 'Beef Fillet Steak', 0, 25, 7, 100, 350, ',1,2,3,4,5,12,', 1),
(43, 'Beef Ribeye Steak', 0, 25, 15, 100, 350, ',1,2,3,4,5,12,', 1),
(44, 'Mature Cheddar Cheese', 0, 25, 35, 100, 350, ',1,2,6,', 1);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `Training_ID` int(11) NOT NULL,
  `Goal_ID` int(11) NOT NULL,
  `Session_Times` int(11) NOT NULL,
  `Gym_Level` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`Training_ID`, `Goal_ID`, `Session_Times`, `Gym_Level`, `Name`) VALUES
(1, 2, 4, 'Intermediate, Advanced', 'Bulking Male 1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `EMail` varchar(255) NOT NULL,
  `UName` varchar(255) NOT NULL,
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
  `Day` int(11) NOT NULL,
  `Month` varchar(255) NOT NULL,
  `Year` int(11) NOT NULL,
  `WeekBegin` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `FName`, `LName`, `EMail`, `UName`, `Weight`, `BodyFat`, `BMR`, `MCalories`, `AFactor`, `CaloriesPerDay`, `Goal_ID`, `Gender`, `Meal_No`, `Password`, `Current_Week`, `Train_ID`, `Session_Times`, `Completed_Day`, `First_Login`, `Day`, `Month`, `Year`, `WeekBegin`) VALUES
(2, 'Adam', 'Kempner', 'a@k.com', '', 75, 16, 1730.8, 3028.9, 1.4, 0, 2, 'M', 6, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 3, 4, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(3, 'Test', 'Tester', 'test@mail.com', '', 82, 14, 0, 0, 1.6, 0, 3, 'M', 4, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(4, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(5, '0', '0', '0', '', 0, 0, 0, 0, 0, 0, 0, '0', 0, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(7, 'tom', 'james', 'woo@1.com', '', 75, 16, 1730.8, 3046.21, 1.6, 0, 1, 'M', 4, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(8, 'Test', 'Beast', 'beast@1.com', '', 100, 8, 2357.2, 6482.3, 2.2, 0, 1, 'M', 3, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(9, 'jack', 'jone', 'colin@ogo11.com', '', 75, 16, 1730.8, 2596.2, 1.2, 2696.2, 1, 'M', 3, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 6, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(10, 'jack', 'jone', 'colin@ogo1311.com', '', 75, 16, 1730.8, 2284.66, 1.2, 1884.84, 3, 'M', 3, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 6, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(11, 'Mrs', 'Kempner', 'mrs@k.com', '', 57, 17, 1391.9, 1990.41, 1.3, 2065.41, 1, 'F', 6, '1a0e131842f600b89238eac8833375e7b781e9ce', 2, 1, 4, 0, 0, 0, '', 0, '0000-00-00 00:00:00'),
(12, 'Colin', 'Ogoo', 'colin@ogoo.com', '', 75, 16, 1730.8, 2284.66, 1.2, 2359.66, 2, 'M', 4, '1a0e131842f600b89238eac8833375e7b781e9ce', 6, 1, 4, 0, 1, 0, '', 0, '2016-03-02 00:00:00'),
(13, 'Caren', 'Regin', 'test@ro.com', 'C_Regin', 0, 0, 0, 0, 0, 0, 0, 'M', 0, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 1, 'January', 1991, '0000-00-00 00:00:00'),
(14, 'Kim', 'Tom', 'kim@tom.com', 'kimtom', 0, 0, 0, 0, 0, 0, 2, 'F', 3, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 1, 1, 'January', 1991, '0000-00-00 00:00:00'),
(16, 'gjgjkh', 'ggjk', 'kim@tom1.com', 'gkgjg', 0, 0, 0, 0, 0, 0, 0, 'M', 0, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 1, 'January', 1991, '0000-00-00 00:00:00'),
(17, 'John', 'James', 'jj@j.com', 'JJ', 0, 0, 0, 0, 0, 0, 0, 'M', 0, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 1, 'January', 1991, '0000-00-00 00:00:00'),
(19, 'dasd', 'dasd', 'kim@tom4545.com', 'dasda', 0, 0, 0, 0, 0, 0, 0, 'M', 0, '1a0e131842f600b89238eac8833375e7b781e9ce', 1, 1, 4, 0, 0, 1, 'January', 1991, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_meals`
--

CREATE TABLE `users_meals` (
  `User_Meal_ID` int(11) NOT NULL,
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
  `Protein_B1` int(11) NOT NULL,
  `Carb_Meal12` int(11) NOT NULL,
  `Fat_Meal1` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=986 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_meals`
--

INSERT INTO `users_meals` (`User_Meal_ID`, `User_ID`, `Week`, `Day`, `Meal_No`, `Protein_Name`, `Protein_Grams`, `Carb_Name`, `Carb_Grams`, `Fat_Name`, `Fat_Grams`, `Green_Veg`, `Failed_Meal`, `Protein_B1`, `Carb_Meal12`, `Fat_Meal1`) VALUES
(790, 12, 1, 1, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(791, 12, 1, 1, 12, 'Turkey Breast', 30, 'White Basmati', 58, NULL, NULL, NULL, 1, 59, 44, 0),
(792, 12, 1, 1, 3, 'Chicken Breast', 31, 'Wholewheat Pasta', 75, 'Udos Oil', 97, 'Broccoli', 1, 59, 44, 23),
(793, 12, 1, 1, 4, 'Pork Chop', 22, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 46),
(794, 12, 1, 2, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(795, 12, 1, 2, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(796, 12, 1, 2, 3, 'Pork Chop', 22, 'Wholewheat Pasta', 75, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 44, 23),
(797, 12, 1, 2, 4, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(798, 12, 1, 3, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Flax Seed Oil', 100, 'Carrot', 1, 59, 7, 28),
(799, 12, 1, 3, 2, 'Pork Chop', 22, NULL, NULL, 'Almonds', 51, 'Broccoli', 1, 59, 15, 32),
(800, 12, 1, 3, 3, 'Pork Chop', 22, 'White Basmati', 58, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 59, 18),
(801, 12, 1, 3, 4, 'Pork Chop', 22, 'White Basmati', 58, 'Coconut Oil', 100, 'Broccoli', 1, 59, 66, 14),
(802, 12, 1, 4, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(803, 12, 1, 4, 12, 'Turkey Breast', 30, 'Qunioa', 64, NULL, NULL, NULL, 1, 59, 44, 0),
(804, 12, 1, 4, 3, 'Pork Chop', 22, 'Sweet Potato', 21, 'Coconut Oil', 100, 'Broccoli', 1, 59, 44, 23),
(805, 12, 1, 4, 4, 'Sea Bass Fillet', 22, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 15, 46),
(806, 12, 1, 5, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 7, 28),
(807, 12, 1, 5, 2, 'Beef Steak', 30, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 15, 32),
(808, 12, 1, 5, 3, 'Turkey Breast', 30, 'White Basmati', 58, 'Udos Oil', 97, 'Broccoli', 1, 59, 59, 18),
(809, 12, 1, 5, 4, 'Pork Chop', 22, 'Wholewheat Pasta', 75, 'Almond Butter', 59, 'Broccoli', 1, 59, 66, 14),
(810, 12, 1, 6, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(811, 12, 1, 6, 12, 'Turkey Breast', 30, 'Spouted Grain Bread', 45, NULL, NULL, NULL, 1, 59, 44, 0),
(812, 12, 1, 6, 3, 'Turkey Breast', 30, 'Wholewheat Pasta', 75, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 44, 23),
(813, 12, 1, 6, 4, 'Duck Breast', 27, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 46),
(814, 12, 1, 7, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Peanut Butter', 50, 'Carrot', 1, 59, 7, 28),
(815, 12, 1, 7, 2, 'Beef Steak', 30, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 15, 32),
(816, 12, 1, 7, 3, 'Pork Chop', 22, 'White Basmati', 58, 'Olive Oil', 100, 'Broccoli', 1, 59, 59, 18),
(817, 12, 1, 7, 4, 'Pork Chop', 22, 'White Basmati', 58, 'Coconut Oil', 100, 'Broccoli', 1, 59, 66, 14),
(818, 12, 2, 1, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(819, 12, 2, 1, 12, 'Turkey Breast', 30, 'White Basmati', 58, NULL, NULL, NULL, 1, 59, 44, 0),
(820, 12, 2, 1, 3, 'Pork Chop', 22, 'White Basmati', 58, 'Udos Oil', 97, 'Broccoli', 1, 59, 44, 23),
(821, 12, 2, 1, 4, 'Chicken Breast', 31, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 15, 46),
(822, 12, 2, 2, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(823, 12, 2, 2, 12, 'Turkey Breast', 30, 'Spouted Grain Bread', 45, NULL, NULL, NULL, 1, 59, 44, 0),
(824, 12, 2, 2, 3, 'Pork Chop', 22, 'Qunioa', 64, 'Almond Butter', 59, 'Broccoli', 1, 59, 44, 23),
(825, 12, 2, 2, 4, 'Lamb', 25, NULL, NULL, 'Peanut Butter', 50, 'Broccoli', 1, 59, 15, 46),
(826, 12, 2, 3, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Flax Seed Oil', 100, 'Carrot', 1, 59, 7, 28),
(827, 12, 2, 3, 2, 'Cod Fillet', 18, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 32),
(828, 12, 2, 3, 3, 'Chicken Breast', 31, 'Wholewheat Pasta', 75, 'Olive Oil', 100, 'Broccoli', 1, 59, 59, 18),
(829, 12, 2, 3, 4, 'Pork Chop', 22, 'Qunioa', 64, NULL, NULL, 'Broccoli', 1, 59, 66, 14),
(830, 12, 2, 4, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(831, 12, 2, 4, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(832, 12, 2, 4, 3, 'Turkey Breast', 30, 'White Basmati', 58, 'Coconut Oil', 100, 'Broccoli', 0, 59, 44, 23),
(833, 12, 2, 4, 4, 'Haddock Fillet', 20, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(834, 12, 2, 5, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Coconut Oil', 100, 'Carrot', 1, 59, 7, 28),
(835, 12, 2, 5, 2, 'Cod Fillet', 18, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 32),
(836, 12, 2, 5, 3, 'Pork Chop', 22, 'White Basmati', 58, 'Almond Butter', 59, 'Broccoli', 1, 59, 59, 18),
(837, 12, 2, 5, 4, 'Pork Chop', 22, 'Wholewheat Pasta', 75, 'Udos Oil', 97, 'Broccoli', 1, 59, 66, 14),
(838, 12, 2, 6, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(839, 12, 2, 6, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(840, 12, 2, 6, 3, 'Turkey Breast', 30, 'White Basmati', 58, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 44, 23),
(841, 12, 2, 6, 4, 'Beef Steak', 30, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 46),
(842, 12, 2, 7, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Peanut Butter', 50, 'Broccoli', 1, 59, 7, 28),
(843, 12, 2, 7, 2, 'Turkey Breast', 30, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 32),
(844, 12, 2, 7, 3, 'Turkey Breast', 30, 'Wholewheat Pasta', 75, 'Udos Oil', 97, 'Broccoli', 1, 59, 59, 18),
(845, 12, 2, 7, 4, 'Chicken Breast', 31, 'Qunioa', 64, NULL, NULL, 'Broccoli', 1, 59, 66, 14),
(846, 12, 3, 1, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(847, 12, 3, 1, 12, 'Turkey Breast', 30, 'Wheat / Oat Bread', 48, NULL, NULL, NULL, 1, 59, 44, 0),
(848, 12, 3, 1, 3, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Udos Oil', 97, 'Broccoli', 1, 59, 44, 23),
(849, 12, 3, 1, 4, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Olive Oil', 100, 'Broccoli', 1, 59, 15, 46),
(850, 12, 3, 2, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(851, 12, 3, 2, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(852, 12, 3, 2, 3, 'Pork Chop', 22, 'Sweet Potato', 21, 'Coconut Oil', 100, 'Broccoli', 1, 59, 44, 23),
(853, 12, 3, 2, 4, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Olive Oil', 100, 'Broccoli', 1, 59, 15, 46),
(854, 12, 3, 3, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Olive Oil', 100, 'Carrot', 1, 59, 7, 28),
(855, 12, 3, 3, 2, 'Turkey Mince', 30, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 32),
(856, 12, 3, 3, 3, 'Turkey Breast', 30, 'Sweet Potato', 21, 'Olive Oil', 100, 'Broccoli', 1, 59, 59, 18),
(857, 12, 3, 3, 4, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 66, 14),
(858, 12, 3, 4, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(859, 12, 3, 4, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(860, 12, 3, 4, 3, 'Chicken Breast', 31, 'Qunioa', 64, 'Coconut Oil', 100, 'Broccoli', 1, 59, 44, 23),
(861, 12, 3, 4, 4, 'Haddock Fillet', 20, NULL, NULL, 'Coconut Oil', 100, 'Broccoli', 1, 59, 15, 46),
(862, 12, 3, 5, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Olive Oil', 100, 'Carrot', 1, 59, 7, 28),
(863, 12, 3, 5, 2, 'Tuna Steak', 32, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 15, 32),
(864, 12, 3, 5, 3, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Udos Oil', 97, 'Broccoli', 1, 59, 59, 18),
(865, 12, 3, 5, 4, 'Turkey Breast', 30, 'Wholewheat Pasta', 75, 'Peanut Butter', 50, 'Broccoli', 1, 59, 66, 14),
(866, 12, 3, 6, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(867, 12, 3, 6, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(868, 12, 3, 6, 3, 'Turkey Breast', 30, 'Sweet Potato', 21, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 44, 23),
(869, 12, 3, 6, 4, 'Turkey Mince', 30, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(870, 12, 3, 7, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Coconut Oil', 100, 'Carrot', 1, 59, 7, 28),
(871, 12, 3, 7, 2, 'Cod Fillet', 18, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 32),
(872, 12, 3, 7, 3, 'Chicken Breast', 31, 'Wholewheat Pasta', 75, 'Udos Oil', 97, 'Broccoli', 1, 59, 59, 18),
(873, 12, 3, 7, 4, 'Chicken Breast', 31, 'Qunioa', 64, NULL, NULL, 'Broccoli', 1, 59, 66, 14),
(874, 12, 4, 1, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(875, 12, 4, 1, 12, 'Turkey Breast', 30, 'Wheat / Oat Bread', 48, NULL, NULL, NULL, 1, 59, 44, 0),
(876, 12, 4, 1, 3, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 44, 23),
(877, 12, 4, 1, 4, 'Chicken Breast', 31, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(878, 12, 4, 2, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(879, 12, 4, 2, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(880, 12, 4, 2, 3, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Olive Oil', 100, 'Broccoli', 0, 59, 44, 23),
(881, 12, 4, 2, 4, 'Pork Chop', 22, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(882, 12, 4, 3, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Olive Oil', 100, 'Carrot', 1, 59, 7, 28),
(883, 12, 4, 3, 2, 'Turkey Mince', 30, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 32),
(884, 12, 4, 3, 3, 'Pork Chop', 22, 'Sweet Potato', 21, 'Coconut Oil', 100, 'Broccoli', 1, 59, 59, 18),
(885, 12, 4, 3, 4, 'Turkey Breast', 30, 'Wholewheat Pasta', 75, 'Olive Oil', 100, 'Broccoli', 1, 59, 66, 14),
(886, 12, 4, 4, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(887, 12, 4, 4, 12, 'Turkey Breast', 30, 'Qunioa', 64, NULL, NULL, NULL, 1, 59, 44, 0),
(888, 12, 4, 4, 3, 'Pork Chop', 22, 'White Basmati', 58, 'Coconut Oil', 100, 'Broccoli', 1, 59, 44, 23),
(889, 12, 4, 4, 4, 'Haddock Fillet', 20, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 46),
(890, 12, 4, 5, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Coconut Oil', 100, 'Broccoli', 1, 59, 7, 28),
(891, 12, 4, 5, 2, 'Duck Breast', 27, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 32),
(892, 12, 4, 5, 3, 'Pork Chop', 22, 'White Basmati', 58, 'Udos Oil', 97, 'Broccoli', 1, 59, 59, 18),
(893, 12, 4, 5, 4, 'Pork Chop', 22, 'White Basmati', 58, 'Udos Oil', 97, 'Broccoli', 1, 59, 66, 14),
(894, 12, 4, 6, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(895, 12, 4, 6, 12, 'Turkey Breast', 30, 'Wheat / Oat Bread', 48, NULL, NULL, NULL, 1, 59, 44, 0),
(896, 12, 4, 6, 3, 'Pork Chop', 22, 'Wholewheat Pasta', 75, 'Olive Oil', 100, 'Broccoli', 1, 59, 44, 23),
(897, 12, 4, 6, 4, 'Pork Chop', 22, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(898, 12, 4, 7, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Peanut Butter', 50, 'Broccoli', 1, 59, 7, 28),
(899, 12, 4, 7, 2, 'Lemon Sole Fillet', 20, NULL, NULL, 'Coconut Oil', 100, 'Broccoli', 1, 59, 15, 32),
(900, 12, 4, 7, 3, 'Pork Chop', 22, 'Wholewheat Pasta', 75, 'Olive Oil', 100, 'Broccoli', 1, 59, 59, 18),
(901, 12, 4, 7, 4, 'Turkey Breast', 30, 'Qunioa', 64, 'Almond Butter', 59, 'Broccoli', 1, 59, 66, 14),
(902, 12, 5, 1, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(903, 12, 5, 1, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(904, 12, 5, 1, 3, 'Turkey Breast', 30, 'Wholewheat Pasta', 75, 'Udos Oil', 97, 'Broccoli', 1, 59, 44, 23),
(905, 12, 5, 1, 4, 'Lemon Sole Fillet', 20, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 15, 46),
(906, 12, 5, 2, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(907, 12, 5, 2, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(908, 12, 5, 2, 3, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Olive Oil', 100, 'Broccoli', 1, 59, 44, 23),
(909, 12, 5, 2, 4, 'Duck Breast', 27, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(910, 12, 5, 3, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Peanut Butter', 50, 'Carrot', 1, 59, 7, 28),
(911, 12, 5, 3, 2, 'Cod Fillet', 18, NULL, NULL, 'Peanut Butter', 50, 'Broccoli', 1, 59, 15, 32),
(912, 12, 5, 3, 3, 'Chicken Breast', 31, 'Qunioa', 64, 'Udos Oil', 97, 'Broccoli', 1, 59, 59, 18),
(913, 12, 5, 3, 4, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Coconut Oil', 100, 'Broccoli', 1, 59, 66, 14),
(914, 12, 5, 4, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(915, 12, 5, 4, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(916, 12, 5, 4, 3, 'Turkey Breast', 30, 'Sweet Potato', 21, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 44, 23),
(917, 12, 5, 4, 4, 'Chicken Thighs', 25, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 15, 46),
(918, 12, 5, 5, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Udos Oil', 97, 'Carrot', 1, 59, 7, 28),
(919, 12, 5, 5, 2, 'Duck Breast', 27, NULL, NULL, 'Peanut Butter', 50, 'Broccoli', 1, 59, 15, 32),
(920, 12, 5, 5, 3, 'Chicken Breast', 31, 'Wholewheat Pasta', 75, 'Coconut Oil', 100, 'Broccoli', 1, 59, 59, 18),
(921, 12, 5, 5, 4, 'Turkey Breast', 30, 'Wholewheat Pasta', 75, 'Peanut Butter', 50, 'Broccoli', 1, 59, 66, 14),
(922, 12, 5, 6, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(923, 12, 5, 6, 12, 'Turkey Breast', 30, 'Qunioa', 64, NULL, NULL, NULL, 1, 59, 44, 0),
(924, 12, 5, 6, 3, 'Chicken Breast', 31, 'White Basmati', 58, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 44, 23),
(925, 12, 5, 6, 4, 'Lamb', 25, NULL, NULL, 'Olive Oil', 100, 'Broccoli', 1, 59, 15, 46),
(926, 12, 5, 7, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Olive Oil', 100, 'Carrot', 1, 59, 7, 28),
(927, 12, 5, 7, 2, 'Tuna Steak', 32, NULL, NULL, 'Almonds', 51, 'Broccoli', 1, 59, 15, 32),
(928, 12, 5, 7, 3, 'Pork Chop', 22, 'Qunioa', 64, 'Udos Oil', 97, 'Broccoli', 0, 59, 59, 18),
(929, 12, 5, 7, 4, 'Chicken Breast', 31, 'White Basmati', 58, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 66, 14),
(930, 12, 6, 1, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(931, 12, 6, 1, 12, 'Turkey Breast', 30, 'Wholewheat Pasta', 75, NULL, NULL, NULL, 1, 59, 44, 0),
(932, 12, 6, 1, 3, 'Chicken Breast', 31, 'Wholewheat Pasta', 75, 'Udos Oil', 97, 'Broccoli', 1, 59, 44, 23),
(933, 12, 6, 1, 4, 'Haddock Fillet', 20, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(934, 12, 6, 2, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(935, 12, 6, 2, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(936, 12, 6, 2, 3, 'Chicken Breast', 31, 'Qunioa', 64, 'Almond Butter', 59, 'Broccoli', 1, 59, 44, 23),
(937, 12, 6, 2, 4, 'Tuna Steak', 32, NULL, NULL, 'Coconut Oil', 100, 'Broccoli', 1, 59, 15, 46),
(938, 12, 6, 3, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 7, 28),
(939, 12, 6, 3, 2, 'Trout Fillet', 22, NULL, NULL, 'Peanut Butter', 50, 'Broccoli', 1, 59, 15, 32),
(940, 12, 6, 3, 3, 'Pork Chop', 22, 'Qunioa', 64, 'Olive Oil', 100, 'Broccoli', 1, 59, 59, 18),
(941, 12, 6, 3, 4, 'Pork Chop', 22, 'White Basmati', 58, 'Olive Oil', 100, 'Broccoli', 1, 59, 66, 14),
(942, 12, 6, 4, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(943, 12, 6, 4, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(944, 12, 6, 4, 3, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Coconut Oil', 100, 'Broccoli', 1, 59, 44, 23),
(945, 12, 6, 4, 4, 'Sea Bass Fillet', 22, NULL, NULL, 'Almond Butter', 59, 'Broccoli', 1, 59, 15, 46),
(946, 12, 6, 5, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 7, 28),
(947, 12, 6, 5, 2, 'Sea Bass Fillet', 22, NULL, NULL, 'Coconut Oil', 100, 'Broccoli', 1, 59, 15, 32),
(948, 12, 6, 5, 3, 'Chicken Breast', 31, 'Wholewheat Pasta', 75, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 59, 18),
(949, 12, 6, 5, 4, 'Pork Chop', 22, 'Qunioa', 64, NULL, NULL, 'Broccoli', 1, 59, 66, 14),
(950, 12, 6, 6, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(951, 12, 6, 6, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(952, 12, 6, 6, 3, 'Pork Chop', 22, 'White Basmati', 58, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 44, 23),
(953, 12, 6, 6, 4, 'Turkey Breast', 30, NULL, NULL, 'Olive Oil', 100, 'Broccoli', 1, 59, 15, 46),
(954, 12, 6, 7, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Peanut Butter', 50, 'Broccoli', 1, 59, 7, 28),
(955, 12, 6, 7, 2, 'Haddock Fillet', 20, NULL, NULL, 'Almonds', 51, 'Broccoli', 1, 59, 15, 32),
(956, 12, 6, 7, 3, 'Pork Chop', 22, 'Qunioa', 64, 'Udos Oil', 97, 'Broccoli', 1, 59, 59, 18),
(957, 12, 6, 7, 4, 'Pork Chop', 22, 'Sweet Potato', 21, 'Peanut Butter', 50, 'Broccoli', 1, 59, 66, 14),
(958, 12, 7, 1, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(959, 12, 7, 1, 12, 'Whey', 71, 'Instant Oats', 71, NULL, NULL, NULL, 1, 59, 44, 0),
(960, 12, 7, 1, 3, 'Turkey Breast', 30, 'Wholewheat Pasta', 75, 'Coconut Oil', 100, 'Broccoli', 1, 59, 44, 23),
(961, 12, 7, 1, 4, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Udos Oil', 97, 'Broccoli', 1, 59, 15, 46),
(962, 12, 7, 2, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(963, 12, 7, 2, 12, 'Turkey Breast', 30, 'Spouted Grain Bread', 45, NULL, NULL, NULL, 1, 59, 44, 0),
(964, 12, 7, 2, 3, 'Turkey Breast', 30, 'Qunioa', 64, 'Udos Oil', 97, 'Broccoli', 1, 59, 44, 23),
(965, 12, 7, 2, 4, 'Turkey Mince', 30, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 46),
(966, 12, 7, 3, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 7, 28),
(967, 12, 7, 3, 2, 'Haddock Fillet', 20, NULL, NULL, 'Almonds', 51, 'Broccoli', 1, 59, 15, 32),
(968, 12, 7, 3, 3, 'Pork Chop', 22, 'Wholewheat Pasta', 75, 'Olive Oil', 100, 'Broccoli', 1, 59, 59, 18),
(969, 12, 7, 3, 4, 'Pork Chop', 22, 'Sweet Potato', 21, 'Peanut Butter', 50, 'Broccoli', 1, 59, 66, 14),
(970, 12, 7, 4, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(971, 12, 7, 4, 12, 'Turkey Breast', 30, 'Qunioa', 64, NULL, NULL, NULL, 1, 59, 44, 0),
(972, 12, 7, 4, 3, 'Pork Chop', 22, 'Sweet Potato', 21, 'Udos Oil', 97, 'Broccoli', 1, 59, 44, 23),
(973, 12, 7, 4, 4, 'Beef Steak', 30, NULL, NULL, 'Olive Oil', 100, 'Broccoli', 1, 59, 15, 46),
(974, 12, 7, 5, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Olive Oil', 100, 'Carrot', 1, 59, 7, 28),
(975, 12, 7, 5, 2, 'Pork Chop', 22, NULL, NULL, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 15, 32),
(976, 12, 7, 5, 3, 'Pork Chop', 22, 'Qunioa', 64, 'Olive Oil', 100, 'Broccoli', 1, 59, 59, 18),
(977, 12, 7, 5, 4, 'Chicken Breast', 31, 'White Basmati', 58, 'Udos Oil', 97, 'Broccoli', 1, 59, 66, 14),
(978, 12, 7, 6, 13, 'Ground Beef (95% Lean)', 24, NULL, NULL, NULL, NULL, NULL, 0, 59, 44, 23),
(979, 12, 7, 6, 12, 'Turkey Breast', 30, 'Spouted Grain Bread', 45, NULL, NULL, NULL, 1, 59, 44, 0),
(980, 12, 7, 6, 3, 'Pork Chop', 22, 'Sweet Potato', 21, 'Udos Oil', 97, 'Broccoli', 1, 59, 44, 23),
(981, 12, 7, 6, 4, 'Chicken Breast', 31, NULL, NULL, 'Olive Oil', 100, 'Broccoli', 1, 59, 15, 46),
(982, 12, 7, 7, 1, 'Ground Beef (95% Lean)', 24, NULL, NULL, 'Almond Butter', 59, 'Carrot', 1, 59, 7, 28),
(983, 12, 7, 7, 2, 'Tuna Steak', 32, NULL, NULL, 'Peanut Butter', 50, 'Broccoli', 1, 59, 15, 32),
(984, 12, 7, 7, 3, 'Chicken Breast', 31, 'Wholewheat Pasta', 75, 'Coconut Oil', 100, 'Broccoli', 1, 59, 59, 18),
(985, 12, 7, 7, 4, 'Chicken Breast', 31, 'Sweet Potato', 21, 'Flax Seed Oil', 100, 'Broccoli', 1, 59, 66, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user_breakdown`
--

CREATE TABLE `user_breakdown` (
  `UB_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Carbs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_dislike`
--

CREATE TABLE `user_dislike` (
  `UD_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Food_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_favourites`
--

CREATE TABLE `user_favourites` (
  `Fav_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Protein_ID` int(11) DEFAULT NULL,
  `Carb_ID` int(11) DEFAULT NULL,
  `Fat_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_favourites`
--

INSERT INTO `user_favourites` (`Fav_ID`, `User_ID`, `Protein_ID`, `Carb_ID`, `Fat_ID`) VALUES
(3, 12, 2, NULL, NULL),
(4, 12, 11, NULL, NULL),
(6, 12, NULL, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `veg`
--

CREATE TABLE `veg` (
  `Veg_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Meal_Type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veg`
--

INSERT INTO `veg` (`Veg_ID`, `Name`, `Meal_Type`) VALUES
(1, 'Broccoli', 'green'),
(2, 'Carrot', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `WorkOut_ID` int(11) NOT NULL,
  `Training_ID` int(11) NOT NULL,
  `Week` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `W_Order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16943 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`WorkOut_ID`, `Training_ID`, `Week`, `Name`, `W_Order`) VALUES
(1, 1, 1, 'Chest, shoulders, back, abs', 1),
(2, 1, 1, 'Legs & Core', 2),
(3, 1, 1, 'Workout 3', 4),
(4, 1, 1, 'Workout 4', 6),
(16869, 1, 2, 'Chest, shoulders, back, abs', 1),
(16870, 1, 2, 'Legs & Core', 2),
(16871, 1, 2, 'Workout 3', 4),
(16872, 1, 2, 'Workout 4', 6),
(16876, 1, 3, 'Chest, shoulders, back, abs', 1),
(16877, 1, 3, 'Legs & Core', 2),
(16878, 1, 3, 'Workout 3', 4),
(16879, 1, 3, 'Workout 4', 6),
(16883, 1, 4, 'Chest, shoulders, back, abs', 1),
(16884, 1, 4, 'Legs & Core', 2),
(16885, 1, 4, 'Workout 3', 4),
(16886, 1, 4, 'Workout 4', 6),
(16890, 1, 5, 'Chest, shoulders, back, abs', 1),
(16891, 1, 5, 'Legs & Core', 2),
(16892, 1, 5, 'Workout 3', 4),
(16893, 1, 5, 'Workout 4', 6),
(16897, 1, 6, 'Chest, shoulders, back, abs', 1),
(16898, 1, 6, 'Legs & Core', 2),
(16899, 1, 6, 'Workout 3', 4),
(16900, 1, 6, 'Workout 4', 6),
(16904, 1, 7, 'Chest, shoulders, back, abs', 1),
(16905, 1, 7, 'Legs & Core', 2),
(16906, 1, 7, 'Workout 3', 4),
(16907, 1, 7, 'Workout 4', 6),
(16911, 1, 8, 'Chest, shoulders, back, abs', 1),
(16912, 1, 8, 'Legs & Core', 2),
(16913, 1, 8, 'Workout 3', 4),
(16914, 1, 8, 'Workout 4', 6),
(16918, 1, 9, 'Chest, shoulders, back, abs', 1),
(16919, 1, 9, 'Legs & Core', 2),
(16920, 1, 9, 'Workout 3', 4),
(16921, 1, 9, 'Workout 4', 6),
(16925, 1, 10, 'Chest, shoulders, back, abs', 1),
(16926, 1, 10, 'Legs & Core', 2),
(16927, 1, 10, 'Workout 3', 4),
(16928, 1, 10, 'Workout 4', 6),
(16932, 1, 11, 'Chest, shoulders, back, abs', 1),
(16933, 1, 11, 'Legs & Core', 2),
(16934, 1, 11, 'Workout 3', 4),
(16935, 1, 11, 'Workout 4', 6),
(16939, 1, 12, 'Chest, shoulders, back, abs', 1),
(16940, 1, 12, 'Legs & Core', 2),
(16941, 1, 12, 'Workout 3', 4),
(16942, 1, 12, 'Workout 4', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Allergy`
--
ALTER TABLE `Allergy`
  ADD PRIMARY KEY (`Allergy_ID`);

--
-- Indexes for table `cal_breakdown`
--
ALTER TABLE `cal_breakdown`
  ADD PRIMARY KEY (`Break_ID`);

--
-- Indexes for table `carbs`
--
ALTER TABLE `carbs`
  ADD PRIMARY KEY (`Carb_ID`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`Exercise_ID`);

--
-- Indexes for table `fat`
--
ALTER TABLE `fat`
  ADD PRIMARY KEY (`Fat_ID`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`Goal_ID`);

--
-- Indexes for table `protein`
--
ALTER TABLE `protein`
  ADD PRIMARY KEY (`Protein_ID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`Training_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email` (`EMail`);

--
-- Indexes for table `users_meals`
--
ALTER TABLE `users_meals`
  ADD PRIMARY KEY (`User_Meal_ID`);

--
-- Indexes for table `user_breakdown`
--
ALTER TABLE `user_breakdown`
  ADD PRIMARY KEY (`UB_ID`);

--
-- Indexes for table `user_dislike`
--
ALTER TABLE `user_dislike`
  ADD PRIMARY KEY (`UD_ID`);

--
-- Indexes for table `user_favourites`
--
ALTER TABLE `user_favourites`
  ADD PRIMARY KEY (`Fav_ID`);

--
-- Indexes for table `veg`
--
ALTER TABLE `veg`
  ADD PRIMARY KEY (`Veg_ID`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`WorkOut_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Allergy`
--
ALTER TABLE `Allergy`
  MODIFY `Allergy_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cal_breakdown`
--
ALTER TABLE `cal_breakdown`
  MODIFY `Break_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=293;
--
-- AUTO_INCREMENT for table `carbs`
--
ALTER TABLE `carbs`
  MODIFY `Carb_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `Exercise_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `fat`
--
ALTER TABLE `fat`
  MODIFY `Fat_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `Goal_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `protein`
--
ALTER TABLE `protein`
  MODIFY `Protein_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `Training_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users_meals`
--
ALTER TABLE `users_meals`
  MODIFY `User_Meal_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=986;
--
-- AUTO_INCREMENT for table `user_breakdown`
--
ALTER TABLE `user_breakdown`
  MODIFY `UB_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_dislike`
--
ALTER TABLE `user_dislike`
  MODIFY `UD_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_favourites`
--
ALTER TABLE `user_favourites`
  MODIFY `Fav_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `veg`
--
ALTER TABLE `veg`
  MODIFY `Veg_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `WorkOut_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16943;