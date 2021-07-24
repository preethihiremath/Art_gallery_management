-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 04:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgallery`
--
CREATE DATABASE IF NOT EXISTS `artgallery` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `artgallery`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `loginid` varchar(5) NOT NULL,
  `passwd` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`loginid`, `passwd`) VALUES
('preet', 'preet123'),
('rach', 'rach123');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE `artist` (
  `AID` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `phno` int(10) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

DROP TABLE IF EXISTS `artwork`;
CREATE TABLE `artwork` (
  `AWID` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` double NOT NULL,
  `AID` int(5) DEFAULT NULL,
  `loginid` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `custID` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phno` int(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `name`, `phno`, `age`, `gender`, `address`, `email`) VALUES
(102, 'rachita', 2147483647, 21, 'Female', 'london', 'something@gmail.com'),
(103, 'Preethi', 1234567890, 21, 'Female', 'london', 'something2@gmail.com'),
(104, 'Rakshitha', 123456789, 21, 'Female', 'paris', 'rakshitha3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

DROP TABLE IF EXISTS `customer_login`;
CREATE TABLE `customer_login` (
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`email`, `password`) VALUES
('something@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
('something2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
('rakshitha3@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `OID` int(5) NOT NULL,
  `custID` int(5) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_names`
--

DROP TABLE IF EXISTS `order_names`;
CREATE TABLE `order_names` (
  `OID` int(5) DEFAULT NULL,
  `AWID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`AID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`AWID`),
  ADD KEY `AID` (`AID`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OID`),
  ADD KEY `custID` (`custID`);

--
-- Indexes for table `order_names`
--
ALTER TABLE `order_names`
  ADD KEY `OID` (`OID`),
  ADD KEY `AWID` (`AWID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `AID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `AWID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `artwork_ibfk_1` FOREIGN KEY (`AID`) REFERENCES `artist` (`AID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artwork_ibfk_2` FOREIGN KEY (`loginid`) REFERENCES `admin` (`loginid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD CONSTRAINT `customer_login_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_names`
--
ALTER TABLE `order_names`
  ADD CONSTRAINT `order_names_ibfk_1` FOREIGN KEY (`OID`) REFERENCES `orders` (`OID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_names_ibfk_2` FOREIGN KEY (`AWID`) REFERENCES `artwork` (`AWID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
