-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2016 at 04:37 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BookHook`
--

-- --------------------------------------------------------

--
-- Table structure for table `siteusers`
--

CREATE TABLE `siteusers` (
  `userID` int(11) NOT NULL,
  `First` varchar(50) NOT NULL,
  `Last` varchar(50) NOT NULL,
  `StreetAddress` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zipcode` char(5) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `stripeID` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteusers`
--

INSERT INTO `siteusers` (`userID`, `First`, `Last`, `StreetAddress`, `City`, `State`, `Zipcode`, `Email`, `stripeID`, `Password`) VALUES
(29, 'Happy', 'Happers', 'happy place', 'cville', 'VA', '22903', 'philipliberato@gmail.com', 'cus_86F61lmzKZTs54', 'happy'),
(30, 'sad', 'sadders', 'sad land', 'cville', 'VA', '22903', 'sad@gmail.com', 'cus_86FFiglpiTURTJ', 'sadddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siteusers`
--
ALTER TABLE `siteusers`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siteusers`
--
ALTER TABLE `siteusers`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
