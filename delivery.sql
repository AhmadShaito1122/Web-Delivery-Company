-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 01:36 PM
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
-- Database: `delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'administrator', '123');

-- --------------------------------------------------------

--
-- Table structure for table `driverecom`
--

CREATE TABLE `driverecom` (
  `id` int(11) NOT NULL,
  `clientname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `region2` varchar(100) NOT NULL,
  `area` text NOT NULL,
  `date` date NOT NULL,
  `phone` int(10) NOT NULL,
  `email` text NOT NULL,
  `dname` varchar(20) NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `type` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `dob` date NOT NULL,
  `statusdr` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `pass`, `type`, `phone`, `gender`, `email`, `dob`, `statusdr`) VALUES
(22, 'ahmad', '123', 'Motorcycle', 434234, 'male', 'client@gmail.com', '2000-02-22', ''),
(23, 'driver', '123', 'Car', 10, 'male', 'client@gmail.com', '2000-05-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `ecom`
--

CREATE TABLE `ecom` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `region2` varchar(100) NOT NULL,
  `area` text NOT NULL,
  `date` date NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `descriptio` text NOT NULL,
  `region` text NOT NULL,
  `region2` varchar(100) NOT NULL,
  `area` text NOT NULL,
  `dat` date NOT NULL,
  `phone` int(8) NOT NULL,
  `weigh` int(10) NOT NULL,
  `cost` int(11) NOT NULL,
  `statusord` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userID`, `descriptio`, `region`, `region2`, `area`, `dat`, `phone`, `weigh`, `cost`, `statusord`) VALUES
(45, 24, 'box', '7', '2', 'sd', '2023-05-06', 34234234, 3434, 10, 'untaken');

-- --------------------------------------------------------

--
-- Table structure for table `takeorder`
--

CREATE TABLE `takeorder` (
  `id` int(11) NOT NULL,
  `clientname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `region` varchar(100) NOT NULL,
  `region2` varchar(100) NOT NULL,
  `area` text NOT NULL,
  `date` date NOT NULL,
  `phone` int(8) NOT NULL,
  `pay` varchar(8) NOT NULL,
  `email` text NOT NULL,
  `weight` int(100) NOT NULL,
  `dname` text NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `usertype` text NOT NULL,
  `regionfk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `email`, `usertype`, `regionfk`) VALUES
(24, 'new user', '123', 'client@gmail.com', 'Commercial', 'South'),
(25, 'Ahmad', '123', 'client@gmail.com', 'Regular', 'South'),
(26, '11', '123', 'client@gmail.com', 'Regular', 'South'),
(27, '2', '123', 'client@gmail.com', 'Regular', 'South'),
(28, '2', '123', 'client@gmail.com', 'Regular', 'South'),
(29, '3', '123', 'client@gmail.com', 'Regular', 'South'),
(30, '4', '123', 'client@gmail.com', 'Regular', 'South'),
(31, '5', '123', 'client@gmail.com', 'Regular', 'Beirut'),
(32, '5', '123', 'client@gmail.com', 'Regular', 'Beirut'),
(33, '6', '123', 'client@gmail.com', 'Regular', 'South'),
(34, '22', '123', 'client@gmail.com', 'Regular', 'South'),
(35, '22', '123', 'client@gmail.com', 'Regular', 'South');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driverecom`
--
ALTER TABLE `driverecom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom`
--
ALTER TABLE `ecom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userID`);

--
-- Indexes for table `takeorder`
--
ALTER TABLE `takeorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `driverecom`
--
ALTER TABLE `driverecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ecom`
--
ALTER TABLE `ecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `takeorder`
--
ALTER TABLE `takeorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `userid` FOREIGN KEY (`userID`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
