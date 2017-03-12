-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2017 at 08:03 PM
-- Server version: 5.6.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_k1301029`
--

-- --------------------------------------------------------

--
-- Table structure for table `Address`
--

CREATE TABLE IF NOT EXISTS `Address` (
  `addressID` int(4) NOT NULL,
  `buildingNameNo` varchar(25) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `line1` varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `line2` varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `city` varchar(25) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `postcode` varchar(8) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `county` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Addresses`
--

CREATE TABLE IF NOT EXISTS `Addresses` (
  `customerID` int(4) NOT NULL,
  `addressID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Basket`
--

CREATE TABLE IF NOT EXISTS `Basket` (
  `basketID` int(4) NOT NULL,
  `customerID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `BasketItem`
--

CREATE TABLE IF NOT EXISTS `BasketItem` (
  `basketID` int(4) NOT NULL,
  `wineID` int(4) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `customerID` int(4) NOT NULL,
  `forename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customerID`, `forename`, `lastname`, `email`, `phoneNumber`, `password`) VALUES
(2, 'Steve', 'K', 'st@s.com', '12091021211', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `CustomerOrder`
--

CREATE TABLE IF NOT EXISTS `CustomerOrder` (
  `orderID` int(4) NOT NULL,
  `customerID` int(4) NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `addressID` int(4) NOT NULL,
  `paymentTaken` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CustomerOrderItem`
--

CREATE TABLE IF NOT EXISTS `CustomerOrderItem` (
  `orderID` int(4) NOT NULL,
  `wineID` int(4) NOT NULL,
  `quantity` int(4) NOT NULL,
  `deliveryDate` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Offer`
--

CREATE TABLE IF NOT EXISTS `Offer` (
  `offerID` int(4) NOT NULL,
  `offerDescription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OnOffer`
--

CREATE TABLE IF NOT EXISTS `OnOffer` (
  `wineID` int(4) NOT NULL,
  `offerID` int(4) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SListItem`
--

CREATE TABLE IF NOT EXISTS `SListItem` (
  `wineID` int(4) NOT NULL,
  `customerID` int(4) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Wine`
--

CREATE TABLE IF NOT EXISTS `Wine` (
  `wineID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `colour` varchar(10) NOT NULL,
  `flavour` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `bottleSize` int(4) NOT NULL,
  `costPerBottle` decimal(10,0) NOT NULL,
  `countryOfOrigin` varchar(25) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Address`
--
ALTER TABLE `Address`
  ADD PRIMARY KEY (`addressID`);

--
-- Indexes for table `Addresses`
--
ALTER TABLE `Addresses`
  ADD PRIMARY KEY (`addressID`,`customerID`),
  ADD KEY `customer key` (`customerID`);

--
-- Indexes for table `Basket`
--
ALTER TABLE `Basket`
  ADD PRIMARY KEY (`basketID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `BasketItem`
--
ALTER TABLE `BasketItem`
  ADD PRIMARY KEY (`basketID`,`wineID`),
  ADD KEY `wine key` (`wineID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `CustomerOrder`
--
ALTER TABLE `CustomerOrder`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `addressID` (`addressID`);

--
-- Indexes for table `CustomerOrderItem`
--
ALTER TABLE `CustomerOrderItem`
  ADD PRIMARY KEY (`orderID`,`wineID`),
  ADD KEY `wineIDForeignKey` (`wineID`);

--
-- Indexes for table `Offer`
--
ALTER TABLE `Offer`
  ADD PRIMARY KEY (`offerID`);

--
-- Indexes for table `OnOffer`
--
ALTER TABLE `OnOffer`
  ADD PRIMARY KEY (`wineID`,`offerID`),
  ADD KEY `offer key` (`offerID`);

--
-- Indexes for table `SListItem`
--
ALTER TABLE `SListItem`
  ADD PRIMARY KEY (`wineID`,`customerID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `Wine`
--
ALTER TABLE `Wine`
  ADD PRIMARY KEY (`wineID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Address`
--
ALTER TABLE `Address`
  MODIFY `addressID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Basket`
--
ALTER TABLE `Basket`
  MODIFY `basketID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `customerID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `CustomerOrder`
--
ALTER TABLE `CustomerOrder`
  MODIFY `orderID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Offer`
--
ALTER TABLE `Offer`
  MODIFY `offerID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Wine`
--
ALTER TABLE `Wine`
  MODIFY `wineID` int(4) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Addresses`
--
ALTER TABLE `Addresses`
  ADD CONSTRAINT `address key` FOREIGN KEY (`addressID`) REFERENCES `Address` (`addressID`),
  ADD CONSTRAINT `customer key` FOREIGN KEY (`customerID`) REFERENCES `Customer` (`customerID`);

--
-- Constraints for table `Basket`
--
ALTER TABLE `Basket`
  ADD CONSTRAINT `Basket_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `Customer` (`customerID`);

--
-- Constraints for table `BasketItem`
--
ALTER TABLE `BasketItem`
  ADD CONSTRAINT `basket key` FOREIGN KEY (`basketID`) REFERENCES `Basket` (`basketID`),
  ADD CONSTRAINT `wine key` FOREIGN KEY (`wineID`) REFERENCES `Wine` (`wineID`);

--
-- Constraints for table `CustomerOrder`
--
ALTER TABLE `CustomerOrder`
  ADD CONSTRAINT `CustomerOrder_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `Customer` (`customerID`),
  ADD CONSTRAINT `addressID` FOREIGN KEY (`addressID`) REFERENCES `Address` (`addressID`);

--
-- Constraints for table `CustomerOrderItem`
--
ALTER TABLE `CustomerOrderItem`
  ADD CONSTRAINT `order id` FOREIGN KEY (`orderID`) REFERENCES `CustomerOrder` (`orderID`),
  ADD CONSTRAINT `wineIDForeignKey` FOREIGN KEY (`wineID`) REFERENCES `Wine` (`wineID`);

--
-- Constraints for table `OnOffer`
--
ALTER TABLE `OnOffer`
  ADD CONSTRAINT `OnOffer_ibfk_1` FOREIGN KEY (`wineID`) REFERENCES `Wine` (`wineID`),
  ADD CONSTRAINT `offer key` FOREIGN KEY (`offerID`) REFERENCES `Offer` (`offerID`);

--
-- Constraints for table `SListItem`
--
ALTER TABLE `SListItem`
  ADD CONSTRAINT `customerID` FOREIGN KEY (`customerID`) REFERENCES `Customer` (`customerID`),
  ADD CONSTRAINT `wineID` FOREIGN KEY (`wineID`) REFERENCES `Wine` (`wineID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
