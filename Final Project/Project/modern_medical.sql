-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 12:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern_medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(50) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Mobile Number` text NOT NULL,
  `Shift` text NOT NULL,
  `Address` text NOT NULL,
  `Category` text NOT NULL,
  `Gender` text NOT NULL,
  `Date of Birth` date NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(20) NOT NULL,
  `Appointment Date` date NOT NULL,
  `Appointment Time` text NOT NULL,
  `Patient Id` int(20) NOT NULL,
  `Doctor Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `Appointment Date`, `Appointment Time`, `Patient Id`, `Doctor Id`) VALUES
(1, '2021-04-27', '8:00PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(20) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Mobile Number` text NOT NULL,
  `Type` text NOT NULL,
  `Shift` text NOT NULL,
  `Doctor Fee` text NOT NULL,
  `Address` text NOT NULL,
  `Category` text NOT NULL,
  `Date of Birth` date NOT NULL,
  `Gender` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Name`, `Email`, `Password`, `Mobile Number`, `Type`, `Shift`, `Doctor Fee`, `Address`, `Category`, `Date of Birth`, `Gender`, `Image`) VALUES
(1, 'Arnab Shaha', 'arnabshaha@gmail.com', '+0123456789', '01766449553', 'MBBS', 'Day (8AM - 2PM)', '600TK', 'Dhaka', 'Doctor', '0000-00-00', 'Male', 'whatsapp.png'),
(2, 'R. Karim', 'rk@gmail.com', '+0123456789', '01766449553', 'MBBS', 'Day (8AM - 2PM)', '600TK', 'Dhaka', 'Doctor', '0000-00-00', 'Male', 'whatsapp.png');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(20) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Mobile Number` text NOT NULL,
  `Address` text NOT NULL,
  `Category` text NOT NULL,
  `Gender` text NOT NULL,
  `Date of Birth` date NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `Name`, `Email`, `Password`, `Mobile Number`, `Address`, `Category`, `Gender`, `Date of Birth`, `Image`) VALUES
(1, 'Md Rahim', 'mdrahim@gmail.com', '=0123456789', '01685963114', 'Dhaka', 'Patient', 'Male', '0000-00-00', 'a.png'),
(2, 'k. Rahim', 'k.rahim@gmail.com', '=0123456789', '01685963114', 'Dhaka', 'Patient', 'Male', '0000-00-00', 'a.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(20) NOT NULL,
  `Payment Amount` text NOT NULL,
  `Payment Date` date NOT NULL,
  `Payment Time` text NOT NULL,
  `Appoinment Serial` int(20) NOT NULL,
  `Patient Id` int(20) NOT NULL,
  `Doctor Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Payment Amount`, `Payment Date`, `Payment Time`, `Appoinment Serial`, `Patient Id`, `Doctor Id`) VALUES
(1, '600Tk', '2021-04-25', '2:00PM', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Id` int(20) NOT NULL,
  `Doctor Id` int(20) NOT NULL,
  `Patient Id` int(20) NOT NULL,
  `Test` text NOT NULL,
  `Medicine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `Id` int(20) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Mobile Number` text NOT NULL,
  `Shift` text NOT NULL,
  `Address` text NOT NULL,
  `Category` text NOT NULL,
  `Gender` text NOT NULL,
  `Date of Birth` date NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`Id`, `Name`, `Email`, `Password`, `Mobile Number`, `Shift`, `Address`, `Category`, `Gender`, `Date of Birth`, `Image`) VALUES
(1, 'Abdullah Al Amin', 'abdullahalamin1211@gmail.com', '$2y$10$7RuumM91hNWODCBOoyMONOGij4DCSNViuai8KMrJLx/BK3cLVzjYu', '1673691338', 'Day (8AM - 4PM)', '4th floor, house-249, road-2, block-F, bashundhara R\\A, Dhaka- 1229', 'Receptionist', 'Male', '2000-10-25', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`) USING BTREE,
  ADD KEY `Patient Id` (`Patient Id`),
  ADD KEY `Doctor Id` (`Doctor Id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Appoinment Serial` (`Appoinment Serial`),
  ADD KEY `Patient Id` (`Patient Id`),
  ADD KEY `Doctor Id` (`Doctor Id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Doctor Id` (`Doctor Id`),
  ADD KEY `Patient Id` (`Patient Id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`Patient Id`) REFERENCES `patient` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`Doctor Id`) REFERENCES `doctor` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Appoinment Serial`) REFERENCES `appointment` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`Patient Id`) REFERENCES `patient` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`Doctor Id`) REFERENCES `doctor` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`Doctor Id`) REFERENCES `doctor` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`Patient Id`) REFERENCES `patient` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
