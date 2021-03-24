-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 10:12 AM
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
-- Database: `modern medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Mobile Number` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Password` text NOT NULL,
  `Shift` text NOT NULL,
  `Category` text NOT NULL,
  `Gender` text NOT NULL,
  `Date of Birth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`ID`, `Name`, `Email`, `Mobile Number`, `Address`, `Password`, `Shift`, `Category`, `Gender`, `Date of Birth`) VALUES
(1, 'Abdullah Al Amin', 'abdullahalamin1211@gmail.com', 1673691338, '4th floor, house-249, road-2, block-F, bashundhara R\\A, Dhaka- 1229', '@0123456789', 'Day (8AM - 4PM)', 'Receptionist', 'Male', 2000),
(2, 'Alif Abdullah', 'alifabdullah@gmail.com', 1711117448, 'H-24, R-2, Sector-6, Uttara, Dhaka-1230', '$2y$10$ggAcGF.fhsaDpKzBIiDTVeQV0ePW5LSgYsAc8hseVoUOBv0UWG3Zy', 'Night (4PM -12PM)', 'Receptionist', 'Male', 1999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
