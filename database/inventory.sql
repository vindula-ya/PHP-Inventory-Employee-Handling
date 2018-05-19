-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 11:08 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_Id` int(11) NOT NULL,
  `Order_No` varchar(50) DEFAULT NULL,
  `Line_No` varchar(50) DEFAULT NULL,
  `Release_No` varchar(50) DEFAULT NULL,
  `Part_No` varchar(50) DEFAULT NULL,
  `Part_Description` varchar(100) DEFAULT NULL,
  `Site` varchar(50) DEFAULT NULL,
  `Site_Description` varchar(50) DEFAULT NULL,
  `Available_Qty` varchar(50) DEFAULT NULL,
  `Unit_Cost` varchar(50) DEFAULT NULL,
  `Condition_Code` varchar(50) DEFAULT NULL,
  `Condition_Code_Description` varchar(50) DEFAULT NULL,
  `Internal_Customer_No` varchar(50) DEFAULT NULL,
  `Internal_Customer_Name` varchar(50) DEFAULT NULL,
  `Internal_Destination_ID` varchar(50) DEFAULT NULL,
  `Internal_Destination_Description` varchar(50) DEFAULT NULL,
  `UoM` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Supply_Code` varchar(50) DEFAULT NULL,
  `Created` varchar(50) DEFAULT NULL,
  `Delivery_Date` varchar(50) DEFAULT NULL,
  `Due_Date` varchar(50) DEFAULT NULL,
  `Due_Qty` varchar(50) DEFAULT NULL,
  `Reserved_Qty` varchar(50) DEFAULT NULL,
  `Issued_Qty` varchar(50) DEFAULT NULL,
  `Remaining_Qty` varchar(50) DEFAULT NULL,
  `Qty_on_Order` varchar(50) DEFAULT NULL,
  `Returned_Qty` varchar(50) DEFAULT NULL,
  `Shortage_Qty` varchar(50) DEFAULT NULL,
  `Expense_Type` varchar(50) DEFAULT NULL,
  `Note` varchar(100) DEFAULT NULL,
  `Account` varchar(50) DEFAULT NULL,
  `COST_CNT` varchar(50) DEFAULT NULL,
  `SITE_2_2` varchar(50) DEFAULT NULL,
  `PROJECT` varchar(50) DEFAULT NULL,
  `FA` varchar(50) DEFAULT NULL,
  `MISC` varchar(50) DEFAULT NULL,
  `PRD_CAT` varchar(50) DEFAULT NULL,
  `EXP_TYPE` varchar(50) DEFAULT NULL,
  `Code_I` varchar(50) DEFAULT NULL,
  `Code_J` varchar(50) DEFAULT NULL,
  `Program_ID` varchar(50) DEFAULT NULL,
  `Program_Description` varchar(50) DEFAULT NULL,
  `Project_ID` varchar(50) DEFAULT NULL,
  `Project_Name` varchar(50) DEFAULT NULL,
  `Sub_Project_ID` varchar(50) DEFAULT NULL,
  `Sub_Project_Description` varchar(50) DEFAULT NULL,
  `Activity_ID` varchar(50) DEFAULT NULL,
  `Activity_Description` varchar(50) DEFAULT NULL,
  `Activity_Sequence` varchar(50) DEFAULT NULL,
  `Cancellation_Reason` varchar(50) DEFAULT NULL,
  `Cancellation_Reason_Description` varchar(50) DEFAULT NULL,
  `Type_ID` varchar(50) DEFAULT NULL,
  `Type_Description` varchar(50) DEFAULT NULL,
  `Cost_Center` varchar(50) DEFAULT NULL,
  `Cost_Center_Description` varchar(100) DEFAULT NULL,
  `MIN_Reference_No` varchar(50) DEFAULT NULL,
  `WOService_NoProject_NoVehicle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_Id`, `Order_No`, `Line_No`, `Release_No`, `Part_No`, `Part_Description`, `Site`, `Site_Description`, `Available_Qty`, `Unit_Cost`, `Condition_Code`, `Condition_Code_Description`, `Internal_Customer_No`, `Internal_Customer_Name`, `Internal_Destination_ID`, `Internal_Destination_Description`, `UoM`, `Status`, `Supply_Code`, `Created`, `Delivery_Date`, `Due_Date`, `Due_Qty`, `Reserved_Qty`, `Issued_Qty`, `Remaining_Qty`, `Qty_on_Order`, `Returned_Qty`, `Shortage_Qty`, `Expense_Type`, `Note`, `Account`, `COST_CNT`, `SITE_2_2`, `PROJECT`, `FA`, `MISC`, `PRD_CAT`, `EXP_TYPE`, `Code_I`, `Code_J`, `Program_ID`, `Program_Description`, `Project_ID`, `Project_Name`, `Sub_Project_ID`, `Sub_Project_Description`, `Activity_ID`, `Activity_Description`, `Activity_Sequence`, `Cancellation_Reason`, `Cancellation_Reason_Description`, `Type_ID`, `Type_Description`, `Cost_Center`, `Cost_Center_Description`, `MIN_Reference_No`, `WOService_NoProject_NoVehicle`) VALUES
(1, '130458', '2', '1', '40600200', 'BOLT & NUT L106          4\"X3/8\"', 'NWP', 'NORTH WESTERN PROV', '0', '22', NULL, NULL, '8549', 'AE/CENTRAL PROVINCE', 'KG', 'NWP-KURUNEGALA', 'PCS', 'Closed', 'Inventory Order', '7/15/2003', '7/15/2003', '7/15/2003', '20', '0', '20', '0', '0', '0', '0', 'm11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SER', 'SERVICE NUMBER', '21030204', 'DIT/ Switching & Trans. / Kurunegala', '117656', 'SK/NWP-661'),
(2, '130479', '1', '1', '502205', 'PIPE G.I. (1 1/4\") 32MM- MEDIUM', 'NWP', 'NORTH WESTERN PROV', '0', '132.9', NULL, NULL, '8549', 'AE/CENTRAL PROVINCE', 'KG', 'NWP-KURUNEGALA', 'M', 'Closed', 'Inventory Order', '7/15/2003', '7/15/2003', '7/15/2003', '30', '0', '30', '0', '0', '0', '0', 'M11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SER', 'SERVICE NUMBER', '21030204', 'DIT/ Switching & Trans. / Kurunegala', '117656', 'SK/NWP-661');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salt` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `contact`, `address`, `salt`, `active`) VALUES
(1, 'admin', 'fbf68843dadfb6ca9867cdd8258703616220d209aa005cd791de507cc74957ac', 'test', 'admin', 'ss', 'ssd', 'yÃ Å“Â¤=Â©Ã€xÂ±ÂÃ‡EfÂ¢/â€¹Ã¨7â€“ÂµÃ¹yLmÂ«ÂÃT8Â±', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
