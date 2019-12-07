-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2019 at 07:44 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mistore`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(50) NOT NULL,
  `f_rating` int(11) NOT NULL,
  `f_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` int(50) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `i_rating` double NOT NULL,
  `brand` varchar(50) NOT NULL,
  `fileField` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `product_name`, `price`, `quantity`, `details`, `i_rating`, `brand`, `fileField`) VALUES
(4, 'Iphone 11', 3399, 0, 'Base line for iphone product series 11', 0, 'apple', 0),
(5, 'Iphone 11 pro', 4599, 0, 'Apple flagship phone 2019 for 11 series', 0, 'apple', 0),
(6, 'Samsung Galaxy Note9', 3699, 0, 'Samsung Flagship 2019 for note Series', 0, 'samsung', 0),
(7, 'Samsung Galaxy S9+', 2899, 0, 'Samsung 2019 flagship for S series', 0, 'samsung', 0),
(8, 'Pocophone F1', 1599, 0, 'Xioami flagship killer 2019', 0, 'xiaomi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nophone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `poskod` int(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `access` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstname`, `lastname`, `username`, `nophone`, `email`, `password`, `gender`, `address`, `poskod`, `state`, `country`, `access`) VALUES
(4, 'MOHD. NUR HAZIQ ', 'JUNAIDI', 'haziq', 1657674301, 'ziq1995@gmail.com', 'haziq123', 'Male', 'No 427, Lot 8537,, Taman lee Ling, Km 6,', 93050, 'KUL', 'Malaysia', 'user'),
(5, 'admin', 'store', 'admin', 12345789, 'admin@mistore.com', 'admin', 'male', 'mistore', 93050, 'sarawak', 'malaysia', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
