-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 09:20 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `regNo` varchar(20) NOT NULL,
  `FirstName` text NOT NULL,
  `MiddleName` text NOT NULL,
  `LastName` text NOT NULL,
  `FatherName` text NOT NULL,
  `MotherName` text NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Batch` int(4) NOT NULL,
  `Branch` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `aadhar` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `category` text NOT NULL,
  `FatherOccupation` text NOT NULL,
  `MotherOccupation` text NOT NULL,
  `FatherMobile` bigint(10) NOT NULL,
  `MotherMobile` bigint(10) NOT NULL,
  `localAddress` text NOT NULL,
  `PermanentAddress` text NOT NULL,
  `SOD` text NOT NULL,
  `Nationality` text NOT NULL,
  `Religion` text NOT NULL,
  `pic_source` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`regNo`, `FirstName`, `MiddleName`, `LastName`, `FatherName`, `MotherName`, `DOB`, `Batch`, `Branch`, `Email`, `aadhar`, `mobile`, `category`, `FatherOccupation`, `MotherOccupation`, `FatherMobile`, `MotherMobile`, `localAddress`, `PermanentAddress`, `SOD`, `Nationality`, `Religion`, `pic_source`) VALUES
('2017UGCS069', 'akash', '', 'kumar', 'mr binod kumar', 'mrs pramiladevi', '26-05-1998', 2017, 'cse', 'akashkumarpr9801@gmail.com', '852147963321', 9801322, 'SC', 'businessman', 'housewife', 9031381712, 8210120034, 'tata road chaibasa,near j.m.p chawk.', 'tata road chaibasa,near j.m.p chawk.', 'jharkhand', 'Indian', 'Hinduism', 'images/20180423_131038.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`regNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
