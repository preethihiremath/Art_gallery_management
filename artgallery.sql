-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 05:43 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `loginid` varchar(5) NOT NULL,
  `passwd` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`loginid`, `passwd`) VALUES
('preet', 'preet123'),
('pruth', 'pruth123'),
('rach', 'rach123');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `AID` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `phno` int(10) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`AID`, `name`, `age`, `phno`, `gender`, `address`, `email`, `description`) VALUES
(200, 'Preethi', 21, 2147483647, 'Female', 'paris', 'something@gmail.com', 'Saks Afridi is a multi-disciplinary artist who was raised in several countries.\r\n                             Saks\'s art practice is two-fold: Collaborative and Personal. His personal work \r\n                             investigates the predicaments and perplexities of the life of an ‘Insider Outsider’. \r\n                             This is the practice of achieving a sense of belonging while being out of place, \r\n                             finding happiness in a state of temporary permanence');

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `AWID` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `price` double NOT NULL,
  `AID` int(5) DEFAULT NULL,
  `loginid` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`AWID`, `name`, `category`, `description`, `price`, `AID`, `loginid`) VALUES
(1234, 'Blai', 'Mythology', 'Saks Afridi is a multi-disciplinary artist who was raised in several countries. Saks\'s art practice is two-fold: Collaborative and Personal. His personal work investigates the predicaments and perplexities of the life of an ‘Insider Outsider’. This is the practice of achieving a sense of belonging w', 12, 200, 'preet');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

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

CREATE TABLE `customer_login` (
  `email` varchar(100) DEFAULT NULL,
  `passwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`email`, `passwd`) VALUES
('something@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('something2@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('rakshitha3@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
('something2@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` int(5) NOT NULL,
  `AWID` int(5) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `custID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OID`, `AWID`, `amount`, `custID`) VALUES
(9, 1234, 150, 103),
(16, 1234, 0, 103),
(17, 1234, 12, 103),
(19, 1234, 12, 103),
(20, 1234, 12, 103),
(21, 1234, 12, 102),
(22, 1234, 12, 102),
(23, 1234, 12, 102),
(24, 1234, 12, 102),
(25, 1234, 12, 102),
(26, 1234, 12, 102),
(27, 1234, 12, 102),
(28, 1234, 12, 102),
(29, 1234, 12, 102),
(30, 1234, 12, 103);

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
  ADD KEY `AWID` (`AWID`),
  ADD KEY `custID` (`custID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `AID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `AWID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`AWID`) REFERENCES `artwork` (`AWID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
