-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2024 at 12:33 PM
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
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `id` int(11) NOT NULL,
  `bodybg` varchar(50) NOT NULL,
  `textc` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `texts` varchar(50) NOT NULL,
  `box` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `css`
--

INSERT INTO `css` (`id`, `bodybg`, `textc`, `text`, `texts`, `box`) VALUES
(1, 'white', 'black', '', '40px', '0'),
(1, 'white', 'black', '', '40px', '0');

-- --------------------------------------------------------

--
-- Table structure for table `iot`
--

CREATE TABLE `iot` (
  `id` int(11) NOT NULL,
  `device` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `ua` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `torch` int(11) NOT NULL,
  `vibrate` int(11) NOT NULL,
  `music` int(11) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `iot`
--

INSERT INTO `iot` (`id`, `device`, `date`, `ua`, `ip`, `torch`, `vibrate`, `music`, `lat`, `lot`) VALUES
(1, 'Desktop', 'Date : 03-February-2024 | Time : 04:09 PM', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', '::1', 0, 0, 0, '10.0037578', '76.3579401');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iot`
--
ALTER TABLE `iot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iot`
--
ALTER TABLE `iot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
