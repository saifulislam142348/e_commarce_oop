-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 09:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(30) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_pass` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `admin_email`, `admin_pass`) VALUES
(3, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ctg_id` int(11) NOT NULL,
  `ctg_name` text NOT NULL,
  `ctg_des` varchar(150) NOT NULL,
  `ctg_status` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctg_id`, `ctg_name`, `ctg_des`, `ctg_status`) VALUES
(19, 'MINI  CYLINDER', 'Medical1 inputMEDICAL PRODUCT', 1),
(20, 'MEDIUM CYLINDER', 'MEDICAL PRODUCT', 1),
(21, 'LARGE  CYLINDER', 'MEDICAL PRODUCT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(150) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sms` varchar(100) NOT NULL,
  `times` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `amounts` varchar(32) NOT NULL,
  `trans_id` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `District` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `times` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `gender`, `email`, `amounts`, `trans_id`, `phone`, `District`, `address`, `times`) VALUES
(1, 'saiful', 'male', 'saiful@gmail.com', '455666', 'ffrgtrgf', '0175426626', 'tangail sador', 'zhaj', '0000-00-00 00:00:00.000000'),
(2, 'ss ss', 'female', 'sss@gmail.com', '0', 'gyyuh', '0162345678', '', 'ghuy', '2022-03-04 18:46:24.638952'),
(3, 'ss ss', 'female', 'sss@gmail.com', '0', 'gyyuh', '0162345678', '', 'ghuy', '2022-03-04 18:52:22.995376'),
(13, 'saiful', 'male', 'saiful@gmail.com', '1000', '22', '0125346356', 'Kalihati', '12', '2022-03-04 19:07:42.540582'),
(14, 'saiful', 'male', 'saiful@gmail.com', '45566', '1234', '0125346356', 'Gatail', '12', '2022-03-04 19:09:51.996009');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pdt_id` int(255) NOT NULL,
  `pdt_name` varchar(200) NOT NULL,
  `pdt_price` int(200) NOT NULL,
  `pdt_des` varchar(250) NOT NULL,
  `pdt_ctg` int(200) NOT NULL,
  `pdt_img` varchar(200) NOT NULL,
  `pdt_status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pdt_id`, `pdt_name`, `pdt_price`, `pdt_des`, `pdt_ctg`, `pdt_img`, `pdt_status`) VALUES
(24, 'RAMA OXYGENCYLINDER', 8000, 'good quality mana', 19, 'mini1.jpg', 1),
(25, 'LINDE OXYGEN CYLINDER', 9000, 'services 24hours', 19, 'mini2.jpg', 1),
(26, 'CHINA OXYGEN CYLINDER', 7000, 'services 24/7hours/days', 19, 'mini3.jpg', 1),
(27, 'REMAX OXYGENCYLINDER', 8000, 'services 24/7hours/days', 19, 'mini4.jpg', 1),
(28, 'OXYJON OXYGEN CYLINDER', 10000, 'services 24/7hours/days', 19, 'mini5.jpg', 1),
(29, 'RAMA OXYGENCYLINDER', 12000, 'services 24/7hours/days', 20, 'medium1.jpg', 1),
(30, 'LINDE OXYGEN CYLINDER', 13000, 'services 24/7hours/days', 20, 'medium2.jpg', 1),
(31, 'CHINA OXYGEN CYLINDER', 10000, 'services 24/7hours/days', 20, 'medium3.jpg', 1),
(32, 'REMAX OXYGENCYLINDER', 125000, 'services 24/7hours/days', 20, 'medium4.jpg', 1),
(33, 'OXYJON OXYGENCYLINDER', 14000, 'services 24/7hours/days', 20, 'medium5.jpg', 1),
(34, 'RAMA OXYGENCYLINDER', 16000, 'services 24/7hours/days', 21, 'large1.jpg', 1),
(35, 'LINDE OXYGEN CYLINDER', 13000, 'services 24/7hours/days', 21, 'large2.jpg', 1),
(36, 'CHINA OXYGEN CYLINDER', 10000, 'services 24/7hours/days', 21, 'large3.jpg', 1),
(37, 'REMAX OXYGENCYLINDER', 15000, 'services 24/7hours/days', 21, 'large4.jpg', 1),
(38, 'OXYJON OXYGENCYLINDER', 18000, 'services 24/7hours/days', 21, 'large5.jpg', 1),
(39, 'chili', 29, 'ggg', 22, 'post-wgt-02.jpg', 1),
(40, 'tangain ocy', 5000, 'goood quality', 19, 'post-wgt-03.jpg', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_info_ctg`
-- (See below for the actual view)
--
CREATE TABLE `product_info_ctg` (
`pdt_id` int(255)
,`pdt_name` varchar(200)
,`pdt_price` int(200)
,`pdt_des` varchar(250)
,`pdt_img` varchar(200)
,`pdt_status` tinyint(5)
,`ctg_id` int(11)
,`ctg_name` text
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_roles` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_mobile`, `user_roles`) VALUES
(5, 'asibur', 'asibur', 'rahman', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, 5),
(6, 'sgggcr', 'ewd3e3', '3e44', 'q@gmail.com', '202cb962ac59075b964b07152d234b70', 1623456734, 5);

-- --------------------------------------------------------

--
-- Structure for view `product_info_ctg`
--
DROP TABLE IF EXISTS `product_info_ctg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_info_ctg`  AS SELECT `products`.`pdt_id` AS `pdt_id`, `products`.`pdt_name` AS `pdt_name`, `products`.`pdt_price` AS `pdt_price`, `products`.`pdt_des` AS `pdt_des`, `products`.`pdt_img` AS `pdt_img`, `products`.`pdt_status` AS `pdt_status`, `category`.`ctg_id` AS `ctg_id`, `category`.`ctg_name` AS `ctg_name` FROM (`products` join `category`) WHERE `products`.`pdt_ctg` = `category`.`ctg_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pdt_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pdt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
