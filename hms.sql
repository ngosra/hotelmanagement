-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 11:08 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL,
  `StaffID` varchar(10000) NOT NULL,
  `Password` varchar(10000) NOT NULL,
  `Role` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `StaffID`, `Password`, `Role`) VALUES
(1, 'riche23', 'richie', 'manager'),
(2, 'ngosra27', 'ngosra', 'receptionist'),
(3, 'alfred12', 'alfred', 'restaurant'),
(4, 'kofi12', 'kofi', 'gym');

-- --------------------------------------------------------

--
-- Table structure for table `bookroom`
--

CREATE TABLE IF NOT EXISTS `bookroom` (
  `ID` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `RoomNum` varchar(10000) NOT NULL,
  `Check_InDate` varchar(10000) NOT NULL,
  `Check_OutDate` mediumtext NOT NULL,
  `RoomType` varchar(10000) NOT NULL,
  `Cost` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `ID` int(11) NOT NULL,
  `Email` varchar(10000) NOT NULL,
  `Password` varchar(10000) NOT NULL,
  `Cus_Name` varchar(10000) NOT NULL,
  `Phone` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE IF NOT EXISTS `gym` (
  `ID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `Reg_Fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gym_member`
--

CREATE TABLE IF NOT EXISTS `gym_member` (
  `ID` int(100) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Email` mediumtext NOT NULL,
  `Phone` varchar(10000) NOT NULL,
  `Reg_date` varchar(10000) NOT NULL,
  `Reg_month` varchar(10000) NOT NULL,
  `Reg_fee` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gym_member`
--

INSERT INTO `gym_member` (`ID`, `Name`, `Email`, `Phone`, `Reg_date`, `Reg_month`, `Reg_fee`) VALUES
(1, 'Robert Bonsu', 'Richardntiedu123@gmail.com', '', '0000-00-00', '', ''),
(2, 'Robert Bonsu', 'Richardntiedu123@gmail.com', '6308632541', '0000-00-00', 'march', '400'),
(3, 'Richard Ntiedu', 'mcdeduce@gmail.com', '0543599537', '0000-00-00', 'january', '300'),
(4, 'Richard Ntiedu', 'mcdeduce@gmail.com', '0543599537', '0000-00-00', '', ''),
(5, 'Richard Ntiedu', 'mcdeduce@gmail.com', '0543599537', '11/27/2018', 'march', '400');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE IF NOT EXISTS `meal` (
  `ID` int(11) NOT NULL,
  `Meal_Name` varchar(10000) NOT NULL,
  `Meal_Type` varchar(10000) NOT NULL,
  `Meal_Price` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`ID`, `Meal_Name`, `Meal_Type`, `Meal_Price`) VALUES
(1, 'JOLLOF', 'SUPPER', '200'),
(7, 'waakye', 'lunch', '200');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `ID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `Meal` varchar(10000) NOT NULL,
  `Cost` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `ID` int(11) NOT NULL,
  `RoomNum` varchar(10000) NOT NULL,
  `RoomType` varchar(10000) NOT NULL,
  `Cost` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookroom`
--
ALTER TABLE `bookroom`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gym_member`
--
ALTER TABLE `gym_member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bookroom`
--
ALTER TABLE `bookroom`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gym`
--
ALTER TABLE `gym`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gym_member`
--
ALTER TABLE `gym_member`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
