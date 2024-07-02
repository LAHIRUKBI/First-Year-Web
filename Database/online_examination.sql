-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('lahiru', '1234'),
('amaya', '0604');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact_Number` int(255) NOT NULL,
  `Problem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Name`, `Email`, `Contact_Number`, `Problem`) VALUES
('Lahiru Kalpitha bandara illangasinghe', 'lahiruilangasinha@gmail.com', 710910202, 'dsdsddsddd');

-- --------------------------------------------------------

--
-- Table structure for table `examdetails`
--

CREATE TABLE `examdetails` (
  `IndexNo` int(255) NOT NULL,
  `NIC` int(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examdetails`
--

INSERT INTO `examdetails` (`IndexNo`, `NIC`, `Time`, `Location`) VALUES
(54875584, 2147483647, '11.30', 'colombo');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('apsalB', '15896547');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `FullName` varchar(255) NOT NULL,
  `CardNumber` int(255) NOT NULL,
  `Month` int(10) NOT NULL,
  `Year` int(10) NOT NULL,
  `CVC` int(10) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Date` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`FullName`, `CardNumber`, `Month`, `Year`, `CVC`, `Amount`, `Date`, `Email`, `Type`) VALUES
('inoliamaya', 2147483647, 6, 4, 200, 180, 2023, 'inoliamaya@gmail.com', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `DOB` bigint(10) NOT NULL,
  `NIC` int(20) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `FixNo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ConformPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`FirstName`, `LastName`, `FullName`, `DOB`, `NIC`, `Gender`, `Type`, `Address`, `City`, `Mobile`, `FixNo`, `Email`, `Password`, `ConformPassword`) VALUES
('lahiru', 'illangasinghe', 'Lahiru Kalpitha bandara illangasinghe', 2023, 2147483647, 'male', 'student', 'Olukarandagama,', 'Kekirawa', 2147483647, '0252263769', 'lahiruilangasinha@gmail.com', '23054lahiru', '23054lahiru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `examdetails`
--
ALTER TABLE `examdetails`
  ADD PRIMARY KEY (`IndexNo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`FirstName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
