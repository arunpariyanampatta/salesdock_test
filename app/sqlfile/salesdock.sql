-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 12:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesdock`
--

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `ID` bigint(20) NOT NULL,
  `PRODUCT_NAME` varchar(50) NOT NULL,
  `TYPE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`ID`, `PRODUCT_NAME`, `TYPE_ID`) VALUES
(1, 'Modem', 1),
(2, 'Samsung', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_rules`
--

CREATE TABLE `product_rules` (
  `ID` int(11) NOT NULL,
  `RULE_NAME` varchar(100) NOT NULL,
  `RULE_VALUE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rules`
--

INSERT INTO `product_rules` (`ID`, `RULE_NAME`, `RULE_VALUE`) VALUES
(1, 'ruleStaticIP', 'Yes'),
(2, 'is4G', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `product_rule_mapping`
--

CREATE TABLE `product_rule_mapping` (
  `ID` int(11) NOT NULL,
  `RULE_ID` int(11) NOT NULL,
  `PRODUCT_ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rule_mapping`
--

INSERT INTO `product_rule_mapping` (`ID`, `RULE_ID`, `PRODUCT_ID`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ID` int(11) NOT NULL,
  `TYPE_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ID`, `TYPE_NAME`) VALUES
(1, 'INTERNET PRODUCT'),
(2, 'MobilePhone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `type` (`TYPE_ID`);

--
-- Indexes for table `product_rules`
--
ALTER TABLE `product_rules`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_rule_mapping`
--
ALTER TABLE `product_rule_mapping`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_rules`
--
ALTER TABLE `product_rules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_rule_mapping`
--
ALTER TABLE `product_rule_mapping`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
