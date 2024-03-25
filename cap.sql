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
-- Database: `cap`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'root@root.com', 'root'),
(2, 'bc0029@bravemail.uncp.edu', '$2y$10$WeZp2xJyyP0HU0j2z9GakeqwV3X6lc.6uA6pxs310FwTzTvQk16W.'),
(3, 'brandon8chen@gmail.com', '$2y$10$C8GOw7yFnFQoFZHrFqdTo.PVEafGBp5Z7K6ad/Fkim2fBZpVUS1ju'),
(4, 'bob@bob.bob', '$2y$10$cThKRJDgZ34pV/YO74bFQe5uigLu8PwjIOFIVl7tHBWjozFOjhLky'),
(5, 'dmh048@bravemail.uncp.edu', '$2y$10$VBGSf0/aQSKX3dgk7lxPGOXBEombix9kAsy5YK8TBQCvrMrfagKo.'),
(6, 'a', '$2y$10$yV32fxCGWXnA/gYmo5XXCuL0CB1E6iBg89LQpTAIa1zA4Mli6TSGm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
