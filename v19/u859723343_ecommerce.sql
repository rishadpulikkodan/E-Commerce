-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2021 at 08:43 AM
-- Server version: 10.4.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u859723343_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `analyz`
--

CREATE TABLE `analyz` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `wb` int(11) NOT NULL,
  `fb` int(11) NOT NULL,
  `gm` int(11) NOT NULL,
  `ig` int(11) NOT NULL,
  `wa` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analyz`
--

INSERT INTO `analyz` (`id`, `total`, `wb`, `fb`, `gm`, `ig`, `wa`, `about`, `event`, `video`) VALUES
(0, 236, 236, 0, 0, 0, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'BackgroundDefault.jpg', 'Particles_Flying_Up_-_Free_HD_Animation_Black_Background_1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `pid`, `uid`, `date`, `status`) VALUES
(27, 1, 8, '30-December-2020', 'arrived'),
(22, 1, 0, '29-December-2020', 'dispatched'),
(29, 2, 0, '01-January-2021', 'dispatched'),
(30, 1, 0, '01-January-2021', 'dispatched'),
(31, 4, 0, '01-January-2021', 'dispatched'),
(33, 6, 0, '02-January-2021', 'dispatched'),
(34, 2, 0, '04-January-2021', 'order_w'),
(35, 1, 0, '05-January-2021', 'dispatched'),
(36, 4, 0, '05-January-2021', 'order_w'),
(37, 4, 0, '06-January-2021', 'order_w'),
(38, 2, 0, '06-January-2021', 'order_w'),
(39, 7, 0, '09-January-2021', 'order_w'),
(40, 7, 11, '09-January-2021', 'order'),
(41, 9, 0, '10-January-2021', 'dispatched'),
(42, 9, 0, '10-January-2021', 'dispatched'),
(43, 8, 0, '10-January-2021', 'dispatched'),
(44, 8, 0, '13-January-2021', 'order_w'),
(45, 9, 0, '13-May-2021', 'dispatched'),
(46, 9, 0, '13-May-2021', 'order_w'),
(47, 9, 11, '', 'cart'),
(48, 8, 11, '', 'cart'),
(49, 7, 11, '', 'cart'),
(50, 6, 11, '', 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `catogerys`
--

CREATE TABLE `catogerys` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catogerys`
--

INSERT INTO `catogerys` (`id`, `name`) VALUES
(1, 'shoes'),
(6, 't-shirt');

-- --------------------------------------------------------

--
-- Table structure for table `favs`
--

CREATE TABLE `favs` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favs`
--

INSERT INTO `favs` (`id`, `pid`, `uid`) VALUES
(4, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `pid`, `name`) VALUES
(21, 8, '8-2-Demo.png'),
(20, 8, '8-1-Demo.png'),
(19, 8, '8-0-Demo.png'),
(25, 8, '8-6-Demo.png'),
(24, 8, '8-5-Demo.png'),
(23, 8, '8-4-Demo.png'),
(22, 8, '8-3-Demo.png'),
(26, 8, '8-7-Demo.png'),
(18, 7, '7-1-P.png'),
(17, 7, '7-0-P.png'),
(13, 6, '6-0-Rsasp.png'),
(14, 6, '6-1-Rsasp.png'),
(15, 6, '6-2-Rsasp.png'),
(16, 6, '6-3-Rsasp.png'),
(27, 9, '9-0-Puma.png'),
(28, 9, '9-1-Puma.png'),
(29, 9, '9-2-Puma.png'),
(30, 9, '9-3-Puma.png'),
(31, 9, '9-4-Puma.png');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `invo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoices_details`
--

CREATE TABLE `invoices_details` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `invo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices_details`
--

INSERT INTO `invoices_details` (`id`, `cus_id`, `type`, `name`, `price`, `invo_id`) VALUES
(281, 9, 'package', 'Rsasp', 100, 4),
(282, 9, 'package', 'Nike', 1000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `invo_count`
--

CREATE TABLE `invo_count` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invo_count`
--

INSERT INTO `invo_count` (`id`, `count`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `date`, `name`, `email`, `subject`, `message`, `uid`, `status`) VALUES
(19, '2021-01-08 20:35:59', 'Aa', '', 'Aa', 'Ggg', 'gust', 1),
(20, '2021-01-14 12:14:18', 'a', '', '', 'aa', 'gust', 1),
(21, '2021-01-14 14:06:21', 'Faris', 'muhammedfariskh@gmail.com', 'Test', 'Test message', 'gust', 0),
(22, '2021-01-15 12:50:44', 'Aa', '', '', 'https://material-components.github.io/material-components-web-catalog/#/component/drawer/modal', 'gust', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `filename`) VALUES
(5, 'Desert.jpg'),
(6, 'Hydrangeas.jpg'),
(7, 'Jellyfish.jpg'),
(8, 'Koala.jpg'),
(10, 'Penguins.jpg'),
(11, 'Tulips.jpg'),
(12, 'ipad-pro_wdpam6.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `info` varchar(50) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `info`, `type`) VALUES
(8, 'Demo', 100, 'Demo Pict', 'none'),
(9, 'Puma', 3500, 'Puma Black & White ', 'shoes'),
(4, 'Nike', 3000, 'Nike black and white ', 'shoes'),
(7, 'P', 1, 'Test', 'none'),
(6, 'Rsasp', 5000, 'Raspberry pi ', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `privilege` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `privilege`, `username`, `password`, `name`, `phone`, `place`, `address`) VALUES
(2, 829, 'adm@rec', '$2y$10$vgJjV3oWz4JVcAfMwIPjmekoZXltRZU0tW7gP4FKkHKBx2/OgrMEi', '', 0, '', ''),
(10, 829, 'rec@dev', '$2y$10$vgJjV3oWz4JVcAfMwIPjmekoZXltRZU0tW7gP4FKkHKBx2/OgrMEi', ' ', 0, ' ', ' '),
(9, 852, 'customer', '$2y$10$OAvEYZR01CUNGxeBBLIKseTIL0xRtwEL32o3EQ1NplrfkaoAoIHcS', 'cus', 11111, 'ccc', 'ccc'),
(8, 852, 'user', '$2y$10$OfYSb/jT05DEgWuiETaUZeY2Wgs/kDkApvymyWQDbZqW3k7D.0EXu', 'u', 111, 'u', 'uuu'),
(11, 852, 'rrr', '$2y$10$PhRei.f73agmEQFHpq0XIOCI0dACg0aJMv1TflZ1M0XfeMby3X7FG', 'Aa', 1234567890, 'Kalpetta ', 'Aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analyz`
--
ALTER TABLE `analyz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catogerys`
--
ALTER TABLE `catogerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favs`
--
ALTER TABLE `favs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices_details`
--
ALTER TABLE `invoices_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invo_count`
--
ALTER TABLE `invo_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analyz`
--
ALTER TABLE `analyz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `catogerys`
--
ALTER TABLE `catogerys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favs`
--
ALTER TABLE `favs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invoices_details`
--
ALTER TABLE `invoices_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `invo_count`
--
ALTER TABLE `invo_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
