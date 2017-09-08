-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 09:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `donorId` varchar(10) NOT NULL,
  `homeAddress` varchar(255) DEFAULT NULL,
  `officeAddress` varchar(255) DEFAULT NULL,
  `currentAddress` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationId` int(11) NOT NULL,
  `donationDate` date NOT NULL,
  `donationStratTime` time(6) NOT NULL,
  `donationEndTime` time(6) DEFAULT NULL,
  `donationWBCCount` int(11) DEFAULT NULL,
  `donationHemoCount` int(11) DEFAULT NULL,
  `donationPlatelateCount` int(11) DEFAULT NULL,
  `DonationNoOfUnitCollected` double DEFAULT NULL,
  `donorId` varchar(10) DEFAULT NULL,
  `MachineKitSerialNo` varchar(10) DEFAULT NULL,
  `MachineKitDOE` varchar(10) DEFAULT NULL,
  `donorHeight` double DEFAULT NULL,
  `donorWeight` double DEFAULT NULL,
  `machineNo` int(11) DEFAULT NULL,
  `donationPCV` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationId`, `donationDate`, `donationStratTime`, `donationEndTime`, `donationWBCCount`, `donationHemoCount`, `donationPlatelateCount`, `DonationNoOfUnitCollected`, `donorId`, `MachineKitSerialNo`, `MachineKitDOE`, `donorHeight`, `donorWeight`, `machineNo`, `donationPCV`) VALUES
(1, '2017-09-01', '07:14:14.233272', '10:19:00.000000', 10, 5, 52, NULL, '1', '12', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donorId` varchar(10) NOT NULL,
  `donorFname` varchar(45) NOT NULL,
  `donorMname` varchar(45) DEFAULT NULL,
  `donorLname` varchar(45) DEFAULT NULL,
  `donorNIC` varchar(20) DEFAULT NULL,
  `donorGender` varchar(10) NOT NULL,
  `donorAddress` varchar(45) DEFAULT NULL,
  `donorOccupation` varchar(45) DEFAULT NULL,
  `donorEmail` varchar(60) DEFAULT NULL,
  `donorDOB` date DEFAULT NULL,
  `donorBloodGroup` varchar(10) DEFAULT NULL,
  `donorAvailable` varchar(20) DEFAULT NULL,
  `donorResponsetime` int(11) DEFAULT NULL,
  `donorHeight` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorId`, `donorFname`, `donorMname`, `donorLname`, `donorNIC`, `donorGender`, `donorAddress`, `donorOccupation`, `donorEmail`, `donorDOB`, `donorBloodGroup`, `donorAvailable`, `donorResponsetime`, `donorHeight`) VALUES
('1', 'kamal', 'amal', 'nimal', '948403420', 'male', 'dfg', 'dfg', 'sdf', '2017-09-05', 'lk', 'dd', 12, 0),
('2', 'sumudu', 'jayani', 'nissanka', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donorstatus`
--

CREATE TABLE `donorstatus` (
  `donorStatusId` int(11) NOT NULL,
  `donorStatusType` varchar(10) NOT NULL,
  `donorDefferReason` varchar(200) DEFAULT NULL,
  `donorEligibleDate` date DEFAULT NULL,
  `donorId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(15) NOT NULL,
  `employee_firstname` varchar(45) NOT NULL,
  `employee_lastname` varchar(45) NOT NULL,
  `employee_gender` varchar(10) NOT NULL,
  `employee_teleNo` varchar(45) DEFAULT NULL,
  `employee_NIC` varchar(45) DEFAULT NULL,
  `employee_occupation` varchar(45) NOT NULL,
  `employee_email` varchar(60) DEFAULT NULL,
  `employee_username` varchar(45) NOT NULL,
  `employee_password` varchar(45) NOT NULL,
  `lemployeelast_login` datetime NOT NULL,
  `employeeIs_allowed` tinyint(1) NOT NULL,
  `emp_registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_firstname`, `employee_lastname`, `employee_gender`, `employee_teleNo`, `employee_NIC`, `employee_occupation`, `employee_email`, `employee_username`, `employee_password`, `lemployeelast_login`, `employeeIs_allowed`, `emp_registered_at`) VALUES
(42, 'kamal', 'perera', 'male', '1234567890', '1234567894', 'Doctor', 'asdfg@gmail.com', 'kamal', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', 0, '2017-09-07 12:39:28'),
(43, 'sumudu', 'nissanka', 'female', '0178954123', '124567896V', 'Admin', 'sumudu@gmail.com', 'sumudu', 'b7a340faabf4cb89aefd7f3fb0be5a82', '0000-00-00 00:00:00', 0, '2017-09-07 12:27:31'),
(44, 'a', 'a', 'female', '1234567894', '123456789V', 'None', 'asd@gmail.com', 'qwe', '70b4269b412a8af42b1f7b0d26eceff2', '0000-00-00 00:00:00', 0, '2017-09-08 04:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `telephoneno`
--

CREATE TABLE `telephoneno` (
  `donorId` int(11) NOT NULL,
  `landTeleNo` varchar(15) DEFAULT NULL,
  `mobileTeleNo` varchar(15) DEFAULT NULL,
  `officeTeleNo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telephoneno`
--

INSERT INTO `telephoneno` (`donorId`, `landTeleNo`, `mobileTeleNo`, `officeTeleNo`) VALUES
(1, '0332274746', '0717896343', NULL),
(2, NULL, '0718257822', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`donorId`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationId`),
  ADD KEY `donorIdKey_idx` (`donorId`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donorId`);

--
-- Indexes for table `donorstatus`
--
ALTER TABLE `donorstatus`
  ADD PRIMARY KEY (`donorStatusId`),
  ADD KEY `donorIDstTUSKey_idx` (`donorId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `telephoneno`
--
ALTER TABLE `telephoneno`
  ADD PRIMARY KEY (`donorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donorstatus`
--
ALTER TABLE `donorstatus`
  MODIFY `donorStatusId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donorIdKey` FOREIGN KEY (`donorId`) REFERENCES `donor` (`donorId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donorstatus`
--
ALTER TABLE `donorstatus`
  ADD CONSTRAINT `donorIDstTUSKey` FOREIGN KEY (`donorId`) REFERENCES `donor` (`donorId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
