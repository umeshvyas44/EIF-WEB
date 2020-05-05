-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2015 at 05:07 PM
-- Server version: 5.1.32
-- PHP Version: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE IF NOT EXISTS `admin_master` (
  `AdminId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`AdminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`AdminId`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `CategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`CategoryId`, `CategoryName`, `Description`, `Image`) VALUES
(11, 'Shirts', 'Its a full sleeve cottan shirts', '4.jpg'),
(12, 'T-Shirts', 'Half sleeve non cotton t shirts', '51.jpg'),
(13, 'Jeans Pents', 'We have different quality jeans with different companies.', '34.jpg'),
(14, 'Cotten Pants', 'Its a cotton pants which is comfortable for customer.', '13.jpg'),
(15, 'Jackets', 'Fancy & Stylish Jackets .', '22.jpg'),
(17, 'Cross Checked Shirts', 'Its a Stylish Shirts .', '1.jpg'),
(18, 'Kurta', 'Long Kurta Formal +++++', '45.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE IF NOT EXISTS `customer_registration` (
  `CustomerId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(50) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`CustomerId`, `CustomerName`, `Address`, `City`, `Email`, `Mobile`, `Gender`, `BirthDate`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(1, 'Mehul Poraniya', 'Radhanpur', 'Patan', 'mehul@gmail.com', 9876543210, 'male', '1990-03-05', 'mehul', 'mehul', '', ''),
(2, 'umesh vyas', 'hgf', 'Ahmedabad', 'umesh_vyas@yahoo.com', 8980942813, 'Male', '2007-02-03', 'ums', '123456', '', ''),
(3, 'kashi', 'banaras', 'Patan', 'kashi@gmail.com', 9865741269, 'Male', '1992-02-26', 'kashi', '123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE IF NOT EXISTS `feedback_master` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`FeedbackId`, `CustomerId`, `Feedback`, `Date`) VALUES
(1, 2, 'nice jeans,its comfertable', '2014-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `item_master`
--

CREATE TABLE IF NOT EXISTS `item_master` (
  `ItemId` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(11) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Discount` float NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `item_master`
--

INSERT INTO `item_master` (`ItemId`, `CategoryId`, `ItemName`, `Description`, `Size`, `Image`, `Price`, `Discount`, `Total`) VALUES
(7, 11, 'Raymond bue', 'Its A Blue Shirst', 'M', '11.jpg', 800, 200, 600),
(8, 11, 'Police guyes White', 'Its a white color formal Shirt', 'L', '13.jpg', 900, 100, 800),
(9, 11, 'Siyaram Light blue', 'Its Light blue color formal shirt ', 'XXL', '17.jpg', 1200, 200, 1000),
(10, 12, 'Rebok', 'Its comfortable full sleeve t shirt for man', 'M', '53.jpg', 600, 100, 500),
(11, 12, 'Nike', 'Black & violet lined t shirts', 'M', '54.jpg', 1500, 350, 1150),
(12, 13, 'Pepe jaens', 'Its stretchable jeans', 'M', '37.jpg', 2550, 150, 2400),
(13, 13, 'Lawman', 'Black straight fit', '32', '36.jpg', 1250, 230, 1020),
(14, 14, 'Raymond', 'Black tight Pent', '28', '31.jpg', 1600, 450, 1150),
(15, 14, 'Rowdy', 'Stylish Green Rowdy Cotton pant', '30', '33.jpg', 450, 50, 400),
(16, 15, 'Woodland', 'Dark Blue protective', 'L', '23.jpg', 950, 150, 800),
(17, 16, 'Gradle', 'Yellow Stylish Swater with cap', 'XL', '67.jpg', 1350, 150, 1200),
(18, 13, 'Benzos blue jkjkljkj', 'Its a ice blue jeans which ', '32', '35.jpg', 650, 125, 525),
(19, 13, 'lawman', 'light blue silky jeans with washing strips.', '36', '37.jpg', 850, 150, 700),
(20, 12, 'NAjhu', 'ioujiuio', '32', '6.jpg', 500, 50, 450),
(21, 13, 'blue shirts', 'ghjj', 'xl', '11.jpg', 800, 200, 600);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(5) NOT NULL AUTO_INCREMENT,
  `CartId` int(5) NOT NULL,
  `CustomerId` varchar(5) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Price` int(5) NOT NULL,
  `Total` int(5) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `Status` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`OrderId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `CartId`, `CustomerId`, `ItemName`, `Quantity`, `Price`, `Total`, `OrderDate`, `Status`) VALUES
(1, 3, '2', 'Siyaram Light blue', 1, 1000, 1000, '0000-00-00 00:00:00', ''),
(2, 4, '2', 'Lawman', 1, 1020, 1020, '0000-00-00 00:00:00', ''),
(3, 5, '2', 'Rowdy', 1, 400, 400, '0000-00-00 00:00:00', ''),
(4, 6, '3', 'Nike', 1, 1150, 1150, '0000-00-00 00:00:00', ''),
(5, 1, '2', 'Woodland', 1, 800, 800, '0000-00-00 00:00:00', ''),
(6, 2, '2', 'Nike', 1, 1150, 1150, '0000-00-00 00:00:00', ''),
(7, 3, '2', 'Rebok', 1, 500, 500, '0000-00-00 00:00:00', ''),
(8, 2, '2', 'Siyaram Light blue', 1, 1000, 1000, '0000-00-00 00:00:00', ''),
(9, 4, '2', 'Siyaram Light blue', 1, 1000, 1000, '0000-00-00 00:00:00', ''),
(10, 5, '2', 'Nike', 9, 1150, 10350, '0000-00-00 00:00:00', ''),
(11, 6, '2', 'Nike', 1, 1150, 1150, '0000-00-00 00:00:00', '1'),
(12, 7, '2', 'Rebok', 1, 500, 500, '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `CartId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Total` float NOT NULL,
  `OrderDate` date NOT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `shopping_cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_final`
--

CREATE TABLE IF NOT EXISTS `shopping_cart_final` (
  `CartId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Total` float NOT NULL,
  `OrderDate` date NOT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `shopping_cart_final`
--

