-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3316
-- Generation Time: Nov 29, 2020 at 05:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` bigint(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userid` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `ordertime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `images_path` varchar(60) NOT NULL,
  `price` double NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `description` varchar(70) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_added`
--

CREATE TABLE `product_added` (
  `admin_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `product_id` int(20) NOT NULL,
  `model_number` varchar(30) DEFAULT NULL,
  `model_name` varchar(50) DEFAULT NULL,
  `RAM` varchar(30) DEFAULT NULL,
  `ROM` varchar(30) DEFAULT NULL,
  `display_size` varchar(40) DEFAULT NULL,
  `sim_type` varchar(30) DEFAULT NULL,
  `battery` varchar(40) DEFAULT NULL,
  `processor` varchar(30) DEFAULT NULL,
  `clock_speed` varchar(30) DEFAULT NULL,
  `expandable_memory` varchar(30) DEFAULT NULL,
  `primary_cam` varchar(30) DEFAULT NULL,
  `primary_camquality` varchar(30) DEFAULT NULL,
  `secondary_camquality` varchar(40) DEFAULT NULL,
  `connectivity` varchar(40) DEFAULT NULL,
  `width` varchar(30) DEFAULT NULL,
  `height` varchar(30) DEFAULT NULL,
  `weight` varchar(30) DEFAULT NULL,
  `warrenty` varchar(20) DEFAULT NULL,
  `charger_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `age` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `pincode` int(20) NOT NULL,
  `house_number` varchar(30) NOT NULL,
  `area` varchar(100) NOT NULL,
  `sub_area` varchar(200) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `uid` (`userid`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_added`
--
ALTER TABLE `product_added`
  ADD KEY `fk_admin` (`admin_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD KEY `fk` (`product_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `pid` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `uid` FOREIGN KEY (`userid`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_pid` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `product_added`
--
ALTER TABLE `product_added`
  ADD CONSTRAINT `fk_adminid` FOREIGN KEY (`admin_id`) REFERENCES `admin_info` (`admin_id`),
  ADD CONSTRAINT `product_added_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `specifications`
--
ALTER TABLE `specifications`
  ADD CONSTRAINT `fk_p` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `fk` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
