-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2023 at 08:15 PM
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
-- Database: `caps`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `year` int(255) NOT NULL,
  `quality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `itemName`, `description`, `year`, `quality`) VALUES
(3, 'Puma', 'Blue', 11, 'New'),
(4, 'Jordans', 'Red and Black', 22, 'New'),
(5, 'Nike', 'White', 3, 'Used'),
(6, 'Under Armor', 'Gray', 98, 'Used'),
(7, 'Adidas', 'Black and White', 3, 'Used'),
(8, 'Skechers', 'Pink', 8, 'Used'),
(9, 'Puma', 'Purple', 99, 'Used'),
(10, 'Puma', 'Gray', 11, 'New'),
(11, 'Puma', 'Green', 12, 'New'),
(12, 'Nike', 'Red and Purple', 18, 'New'),
(13, 'Nike', 'Purple and Black', 1, 'Used'),
(14, 'Under Armor', 'Orange', 12, 'New'),
(15, 'Under Armor', 'Purple', 8, 'Used'),
(16, 'New Balance', 'Red', 9, 'Used'),
(17, 'Timberland', 'Brown', 99, 'Used'),
(18, 'Vans', 'White', 5, 'Used');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
