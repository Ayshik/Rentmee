-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 05:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sl` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl`, `username`, `Password`, `type`) VALUES
(1, 'A', '@', 'Admin'),
(2, 's', 'e', 'Admin'),
(3, 'aysh', '123321', 'Admin'),
(4, 'Saif', '4321', 'Admin'),
(5, 'Rohan07', '12345', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `sl` int(50) NOT NULL,
  `parkerId` varchar(50) NOT NULL,
  `oid` varchar(100) NOT NULL,
  `oname` varchar(100) NOT NULL,
  `oaddress` varchar(300) NOT NULL,
  `ono` varchar(100) NOT NULL,
  `ospace` varchar(10) NOT NULL,
  `hour` varchar(10) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `Date&Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(200) NOT NULL,
  `ReleaseTime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`sl`, `parkerId`, `oid`, `oname`, `oaddress`, `ono`, `ospace`, `hour`, `cost`, `Date&Time`, `Status`, `ReleaseTime`) VALUES
(1, 'rakib', 'Ayshik112', 'Ayshik Khan', 'Kuril', '01775503498', '8', '13', '390', '2020-09-11 16:59:27', 'Active', 'Sep,26,2020 09:47:42 PM'),
(2, 'Ayshik000', 'Ayshik112', 'Ayshik Khan', 'Kuril', '01775503498', '8', '13', '390', '2020-09-11 16:59:27', 'Released', 'Sep,26,2020 09:47:42 PM'),
(3, 'Rohan01', 'Ayshik112', 'Ayshik Khan', 'Kuril', '01775503498', '7', '20', '600', '2020-09-26 19:19:22', 'Released', 'Sep,27,2020 02:17:03 AM'),
(4, 'Rohan01', 'Rohan', 'Rohan Rashid Dip', 'Basundhara,Dhaka, Mujib Sarak,sirajgonj', '01712345678', '4', '1', '30', '2020-09-26 19:21:34', 'Released', 'Sep,27,2020 01:38:10 AM'),
(5, 'Rohan01', 'Rohan', 'Rohan Rashid Dip', 'Basundhara,Dhaka, Mujib Sarak,sirajgonj', '01712345678', '3', '1', '30', '2020-09-26 19:21:45', 'Released', 'Sep,27,2020 01:38:12 AM'),
(6, 'Rohan01', 'Rohan', 'Rohan Rashid Dip', 'Basundhara,Dhaka, Mujib Sarak,sirajgonj', '01712345678', '2', '1', '30', '2020-09-26 19:21:58', 'Released', 'Sep,27,2020 01:38:14 AM'),
(7, 'Rohan01', 'Rohan', 'Rohan Rashid Dip', 'Basundhara,Dhaka, Mujib Sarak,sirajgonj', '01712345678', '1', '1', '30', '2020-09-26 19:22:19', 'Released', 'Sep,27,2020 02:12:21 AM'),
(9, 'Rohan01', 'Ayshik112', 'Ayshik Khan', 'Kuril', '01775503498', '7', '1', '30', '2020-09-26 20:18:22', 'Released', 'Sep,27,2020 02:19:22 AM'),
(10, 'Rohan01', 'Ayshik112', 'Ayshik Khan', 'Kuril', '01775503498', '6', '1', '30', '2020-09-26 20:18:36', 'Released', 'Sep,27,2020 03:14:32 AM'),
(11, 'Rohan01', 'Ayshik112', 'Ayshik Khan', 'Kuril', '01775503498', '5', '1', '30', '2020-09-26 20:18:56', 'Released', 'Sep,27,2020 03:18:01 AM'),
(12, 'Ayshik000', 'ayshik', 'Ayshik boss', 'Dhaka', '017933240820', '4', '17', '510', '2020-09-26 23:44:29', 'Released', 'Sep,27,2020 05:54:03 AM'),
(13, 'Ayshik000', 'Rohan', 'Rohan Rashid Dip', 'Basundhara,Dhaka, Mujib Sarak,sirajgonj', '01712345678', '0', '1', '30', '2020-09-27 00:08:19', 'Released', 'Sep,27,2020 06:10:51 AM');

-- --------------------------------------------------------

--
-- Table structure for table `homeseeker`
--

CREATE TABLE `homeseeker` (
  `sl` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeseeker`
--

INSERT INTO `homeseeker` (`sl`, `username`, `email`, `phone`, `Address`, `password`, `status`, `nid`, `Name`) VALUES
(3, 'a', 'Ayshikmee@gmail.com', '017933240820', 'Ayshik111', 'a', 'Active', '12345678909876432', 'Ayshik Khan yah'),
(4, 'Rohan23', 'hasemmama@gmail.com', '01633075341', 'Basundhara', '@Ayshikmee1234', 'Active', '123456788543256', 'Rohan Khan');

-- --------------------------------------------------------

--
-- Table structure for table `modarator`
--

CREATE TABLE `modarator` (
  `sl` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modarator`
--

INSERT INTO `modarator` (`sl`, `username`, `Password`, `name`, `phone`, `address`, `email`) VALUES
(1, 'Mehedi', '123', 'mehedi hasan', 'a', 'a', 'a'),
(3, 'T', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `sl` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nid` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`sl`, `username`, `email`, `phone`, `Address`, `password`, `status`, `nid`, `Name`) VALUES
(2, 'w', 'w', '15195951', 'w', 'w', '1', '84198', 'wwww');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `sl` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `room` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `dining` int(10) NOT NULL,
  `drawing` int(10) NOT NULL,
  `attachbathroom` int(10) NOT NULL,
  `commonbathroom` int(10) NOT NULL,
  `balcony` int(10) NOT NULL,
  `floor` int(10) NOT NULL,
  `lift` varchar(10) NOT NULL,
  `block` varchar(10) NOT NULL,
  `road` varchar(10) NOT NULL,
  `rent` varchar(15) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL,
  `owner` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`sl`, `category`, `room`, `bedroom`, `dining`, `drawing`, `attachbathroom`, `commonbathroom`, `balcony`, `floor`, `lift`, `block`, `road`, `rent`, `photo1`, `photo2`, `photo3`, `status`, `owner`) VALUES
(1, 'family', 5, 2, 1, 5, 5, 5, 4, 5, 'available', 'A', '14', '15000', 'null', 'null', 'null', '0', 'w'),
(3, 'Family', 14, 5, 2, 5, 2, 5, 2, 2, 'available', 'A', '5', '15000', 'null', 'null', 'null', '1', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `prequest`
--

CREATE TABLE `prequest` (
  `sl` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prequest`
--

INSERT INTO `prequest` (`sl`, `username`, `email`, `phone`, `Address`, `password`, `status`, `nid`, `Name`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 'Active', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `reportbox`
--

CREATE TABLE `reportbox` (
  `sl` int(10) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `usertype` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reportbox`
--

INSERT INTO `reportbox` (`sl`, `sender`, `receiver`, `subject`, `message`, `date`, `usertype`, `status`) VALUES
(1, 'Ayshik112', 'Admin', 'testing teacher', 'i know you love meeee ooooo loe me like you dooo ooo loe me like you do.', '2020-09-09 12:35:01', 'owner', '0'),
(3, 'Ayshik000', 'Admin', 'testing ch', 'o amar bondhu go chiro sathi poth chola tomar jonno', '2020-09-10 09:39:31', 'Parker', 'Unread'),
(4, 'Rohan', 'Admin', 'Bhallagena', 'parker taka dey na. amr bhallagena. amr onnk tk lagbe. ', '2020-09-26 18:44:30', 'Space Owner', '1'),
(5, 'w', 'a', 'a', 'a', '2021-04-26 18:00:00', 'owner', '1'),
(7, 'w', 'e', 'w', 'w', '2021-04-27 06:49:46', 'owner', '0'),
(8, 'a', 'w', 'w', 'w', '2021-04-27 06:57:08', 'homeseeker', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `homeseeker`
--
ALTER TABLE `homeseeker`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `modarator`
--
ALTER TABLE `modarator`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `prequest`
--
ALTER TABLE `prequest`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `reportbox`
--
ALTER TABLE `reportbox`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `homeseeker`
--
ALTER TABLE `homeseeker`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modarator`
--
ALTER TABLE `modarator`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prequest`
--
ALTER TABLE `prequest`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reportbox`
--
ALTER TABLE `reportbox`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
