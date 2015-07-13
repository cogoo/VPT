-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 10, 2015 at 09:28 AM
-- Server version: 5.6.17-debug-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vpt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cal_breakdown`
--

CREATE TABLE IF NOT EXISTS `cal_breakdown` (
`Break_ID` int(11) NOT NULL,
  `Carbs` float NOT NULL,
  `Fat` float NOT NULL,
  `Train_ID` int(11) NOT NULL,
  `Meal_No` int(11) NOT NULL,
  `Goal_ID` int(11) NOT NULL,
  `No_Meals` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `cal_breakdown`
--

INSERT INTO `cal_breakdown` (`Break_ID`, `Carbs`, `Fat`, `Train_ID`, `Meal_No`, `Goal_ID`, `No_Meals`) VALUES
(1, 0.3, 0.15, 1, 11, 1, 6),
(2, 0.15, 0, 1, 12, 1, 6),
(3, 0.25, 0.1, 1, 3, 1, 6),
(4, 0.15, 0.2, 1, 4, 1, 6),
(5, 0.1, 0.25, 1, 5, 1, 6),
(6, 0.05, 0.3, 1, 6, 1, 6),
(7, 0.15, 0.25, 2, 1, 1, 6),
(8, 0.25, 0.1, 2, 11, 1, 6),
(9, 0.15, 0, 2, 12, 1, 6),
(10, 0.25, 0.15, 2, 4, 1, 6),
(11, 0.15, 0.2, 2, 5, 1, 6),
(12, 0.05, 0.3, 2, 6, 1, 6),
(13, 0.2, 0.25, 3, 1, 1, 6),
(14, 0.05, 0.2, 3, 2, 1, 6),
(15, 0.25, 0.1, 3, 11, 1, 6),
(16, 0.15, 0, 3, 12, 1, 6),
(17, 0.25, 0.15, 3, 5, 1, 6),
(18, 0.1, 0.3, 3, 6, 1, 6),
(20, 0.2, 0.25, 4, 1, 1, 6),
(21, 0.05, 0.2, 4, 2, 1, 6),
(22, 0.1, 0.3, 4, 3, 1, 6),
(23, 0.25, 0.1, 4, 11, 1, 6),
(24, 0.15, 0, 4, 12, 1, 6),
(25, 0.25, 0.15, 5, 6, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `carbs`
--

CREATE TABLE IF NOT EXISTS `carbs` (
`Carb_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL,
  `Meal_Type` varchar(255) NOT NULL,
  `Linked_Foods` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `carbs`
--

INSERT INTO `carbs` (`Carb_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`, `Meal_Type`, `Linked_Foods`) VALUES
(1, 'Wholewheat Pasta', 75, 15, 1, 30, 0, ',2,3,4,5,12,', ',3,4,5,6,7,8,9,10,11,'),
(2, 'Instant Oats', 71, 9, 8, 30, 0, ',1,6,11,12,', ',1,2,12,14,'),
(3, 'Qunioa', 64, 14, 6, 30, 0, ',2,3,4,5,11,12,', ',3,4,5,6,7,8,9,10,11,'),
(4, 'White Basmati', 58, 6, 1, 30, 0, ',2,3,4,5,11,12,', ',3,4,5,6,7,8,9,10,11,'),
(5, 'Oatbran', 48, 13, 9, 30, 0, ',1,6,12,', ',1,2,12,14,'),
(6, 'Wheat / Oat Bread', 48, 8, 4, 45, 0, ',1,12,', ',3,4,7,12,14,'),
(7, 'Spouted Grain Bread', 45, 12, 2, 45, 0, ',1,12,', ',3,4,7,12,14,'),
(8, 'Sweet Potato', 21, 2, 1, 45, 0, ',2,3,4,5,11,12,', ',3,4,5,6,7,8,9,10,11,12,14,');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE IF NOT EXISTS `exercise` (
`Exercise_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Sets` int(11) NOT NULL,
  `Order` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Train_ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`Exercise_ID`, `Name`, `Description`, `Sets`, `Order`, `Type`, `Image`, `Train_ID`) VALUES
(1, 'Barbell Bench press', 'Set 1 - 6 Reps\r\nSet 2 - 3 Reps\r\nSet 3 - 1 Rep\r\n\r\nTempo: 3-0-x-0', 3, 1, 'Weights', '', 1),
(3, 'Dumbbell Shoulder press', 'Set 1 - 3 Reps\r\nSet 2 - 3 Reps\r\nSet 3 - 3 Reps\r\n\r\nTempo: 2-0-x-1', 3, 2, 'Weights', '', 1),
(4, 'Test', 'fhshfisfsd\r\nfdf\r\ndsg\r\ndf\r\ngdf\r\ngd', 4, 3, 'Weights', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fat`
--

CREATE TABLE IF NOT EXISTS `fat` (
`Fat_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fat`
--

INSERT INTO `fat` (`Fat_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`) VALUES
(1, 'Coconut Oil', 0, 0, 100, 4, 0),
(2, 'Olive Oil', 0, 0, 100, 4, 0),
(3, 'Flax Seed Oil', 0, 0, 100, 4, 0),
(4, 'Udos Oil', 0, 2, 97, 4, 0),
(5, 'Almond Butter', 21, 15, 59, 4, 0),
(6, 'Almonds', 20, 21, 51, 25, 0),
(7, 'Peanut Butter', 22, 24, 50, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE IF NOT EXISTS `goals` (
`Goal_ID` int(11) NOT NULL,
  `Goal` varchar(255) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Calories` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`Goal_ID`, `Goal`, `Gender`, `Calories`) VALUES
(1, 'Build Muscle', 'M', 500),
(2, 'Lose Fat', 'M', -500),
(3, 'Increase Fitness', 'M', -100),
(4, 'Tone Up', 'F', -100),
(5, 'Increase Fitness', 'F', -100);

-- --------------------------------------------------------

--
-- Table structure for table `protein`
--

CREATE TABLE IF NOT EXISTS `protein` (
`Protein_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Carbs` float NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Min` float NOT NULL,
  `Max` float NOT NULL,
  `Meal_Type` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `protein`
--

INSERT INTO `protein` (`Protein_ID`, `Name`, `Carbs`, `Protein`, `Fat`, `Min`, `Max`, `Meal_Type`) VALUES
(1, 'Casein', 7, 79, 1, 15, 60, ',1,6,'),
(2, 'Whey', 10, 71, 6, 15, 90, ',1,11,12,'),
(3, 'Chicken Breast', 0, 31, 4, 75, 300, ',2,3,4,5,11,12,'),
(4, 'Turkey Breast', 0, 30, 1, 75, 300, ',2,3,4,5,11,12,'),
(5, 'Beef Steak', 0, 30, 15, 75, 300, ',2,3,4,5,12,'),
(6, 'Lamb', 0, 25, 17, 75, 300, ',2,3,4,5,12,'),
(7, 'Tuna', 0, 24, 3, 100, 200, ',1,2,3,4,5,11,12,'),
(8, 'Pork Chop', 0, 22, 3, 100, 300, ',2,3,4,5,12,'),
(9, 'Lean Beef Mince', 0, 21, 5, 100, 250, ',2,3,4,5,12,'),
(10, 'Salmon', 0, 20, 13, 100, 250, ',1,2,3,4,5,11,12,'),
(11, 'Mackerel', 0, 19, 14, 100, 250, ',3,4,5,'),
(12, 'Whole Eggs', 1, 13, 11, 50, 300, ',1,2,3,4,5,11,12,'),
(13, 'Low Fat Cottage Cheese', 3, 11, 1, 50, 250, ',1,6,'),
(14, 'Egg Whites', 1, 11, 0, 50, 300, ',1,2,3,4,5,11,12,');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
`Train_ID` int(11) NOT NULL,
  `Goal_ID` int(11) NOT NULL,
  `Session_Times` int(11) NOT NULL,
  `Gym_Level` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`Train_ID`, `Goal_ID`, `Session_Times`, `Gym_Level`, `Name`) VALUES
(1, 2, 4, 'Intermediate, Advanced', 'Bulking Male 1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`User_ID` int(11) NOT NULL,
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
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `FName`, `LName`, `EMail`, `Weight`, `BodyFat`, `BMR`, `MCalories`, `AFactor`, `CaloriesPerDay`, `Goal_ID`, `Gender`, `Meal_No`, `Password`) VALUES
(2, 'Adam', 'Kempner', 'a@k.com', 75, 16, 1730.8, 3028.9, 1.4, 0, 2, 'M', 6, '1a0e131842f600b89238eac8833375e7b781e9ce'),
(3, 'Test', 'Tester', 'test@mail.com', 82, 14, 0, 0, 1.6, 0, 3, 'M', 4, '1a0e131842f600b89238eac8833375e7b781e9ce'),
(4, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '1a0e131842f600b89238eac8833375e7b781e9ce'),
(5, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, '0', 0, '1a0e131842f600b89238eac8833375e7b781e9ce'),
(6, 'Colin', 'Ogoo', 'colin@ogoo.com', 75, 16, 1730.8, 3028.9, 1.4, 0, 2, 'M', 6, '1a0e131842f600b89238eac8833375e7b781e9ce');

-- --------------------------------------------------------

--
-- Table structure for table `user_breakdown`
--

CREATE TABLE IF NOT EXISTS `user_breakdown` (
`UB_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Protein` float NOT NULL,
  `Fat` float NOT NULL,
  `Carbs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE IF NOT EXISTS `workout` (
`WorkOut_ID` int(11) NOT NULL,
  `Train_ID` int(11) NOT NULL,
  `Week` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Order` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`WorkOut_ID`, `Train_ID`, `Week`, `Name`, `Order`) VALUES
(1, 1, 1, 'Chest, shoulders, back, abs', 1);

--
-- Indexes for dumped tables
--

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
 ADD PRIMARY KEY (`Train_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `user_breakdown`
--
ALTER TABLE `user_breakdown`
 ADD PRIMARY KEY (`UB_ID`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
 ADD PRIMARY KEY (`WorkOut_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cal_breakdown`
--
ALTER TABLE `cal_breakdown`
MODIFY `Break_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `carbs`
--
ALTER TABLE `carbs`
MODIFY `Carb_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
MODIFY `Exercise_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fat`
--
ALTER TABLE `fat`
MODIFY `Fat_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
MODIFY `Goal_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `protein`
--
ALTER TABLE `protein`
MODIFY `Protein_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
MODIFY `Train_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_breakdown`
--
ALTER TABLE `user_breakdown`
MODIFY `UB_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
MODIFY `WorkOut_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
