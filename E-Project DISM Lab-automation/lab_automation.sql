-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 08:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_img` varchar(1000) NOT NULL,
  `p_code` varchar(10) NOT NULL,
  `p_cid` int(11) NOT NULL,
  `p_status` varchar(15) NOT NULL DEFAULT 'Ready',
  `p_des` varchar(50) NOT NULL,
  `p_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_img`, `p_code`, `p_cid`, `p_status`, `p_des`, `p_datetime`) VALUES
(2, 'Electric  Fuse-1', 'fuse-5x40mm.jpg', '2136547897', 2, 'Ready', 'Checking', '2021-03-13 20:23:48'),
(3, 'Light', 'images (1).jpg', '1021548796', 1, 'Ready', 'testing', '2021-03-15 19:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_des` varchar(100) NOT NULL,
  `c_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`c_id`, `c_name`, `c_des`, `c_datetime`) VALUES
(1, 'Bulb', 'Check', '2021-03-13 18:33:32'),
(2, 'Fuse', 'testing', '2021-03-13 18:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `test_product`
--

CREATE TABLE `test_product` (
  `t_id` int(11) NOT NULL,
  `t_code` varchar(10) NOT NULL,
  `t_type` varchar(50) NOT NULL,
  `t_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_product`
--

INSERT INTO `test_product` (`t_id`, `t_code`, `t_type`, `t_datetime`) VALUES
(1, '1012453698', 'Level-1', '2021-03-14 08:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `u_id` int(11) NOT NULL,
  `u_fullname` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_psw` varchar(50) NOT NULL,
  `u_role` varchar(10) NOT NULL,
  `u_status` varchar(12) NOT NULL DEFAULT 'Allow',
  `u_img` varchar(1000) NOT NULL,
  `u_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`u_id`, `u_fullname`, `u_email`, `u_psw`, `u_role`, `u_status`, `u_img`, `u_datetime`) VALUES
(3, 'hasnain', 'zain@gmail.com', '123', 'SRS', 'Allow', '117314600_2748238245453164_5126054019472616778_o.jpg', '2021-03-13 09:18:54'),
(4, 'Zain Raza', 'zainr8943@gmail.com', '1234', 'Admin', 'Allow', '91b2XxHIXCL._UL1500_.jpg', '2021-03-13 09:29:22'),
(5, 'saeed', 'saeed@gmail.com', 'za', 'CPRI', 'Allow', 'Plaid-Shirt-Men-Long-Sleeve-Slim-Fit-White-M-5XL-100-Cotton-Dress-Shirts-Male-Clothes_800x.jpg', '2021-03-13 09:29:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`);

--
-- Indexes for table `test_product`
--
ALTER TABLE `test_product`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_id` (`t_id`,`t_code`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test_product`
--
ALTER TABLE `test_product`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
