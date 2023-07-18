-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 07:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteenproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'ishika pawar', 'ishika', '111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `active`) VALUES
(28, 'Burger', 'food_name_9395.jpg', 'Yes'),
(29, 'Pizza', 'food_name_1952.jpg', 'Yes'),
(30, 'Momos', 'food_name_3593.jpg', 'Yes'),
(40, 'Pasta', 'food_name_6628.jpg', 'Yes'),
(41, 'Pav Bhaji', 'food_name_708.jpg', 'Yes'),
(42, 'Sandwich', 'food_name_2968.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `active`) VALUES
(20, 'Cheese Pizza', '', '100.00', 'food_name_1072.jpg', 29, 'Yes'),
(21, 'Veg.Pizaa', '', '110.00', 'food_name_4624.jpg', 29, 'Yes'),
(22, 'Macaroni Pizza', '', '120.00', 'food_name_3596.jpg', 29, 'Yes'),
(23, 'Italian Pizza', '', '140.00', 'food_name_1266.jpg', 29, 'Yes'),
(24, 'Mushroom Pizza', '', '140.00', 'food_name_7643.pizza4', 29, 'Yes'),
(25, 'Thai Pizza', 'Spring onions pizza', '150.00', 'food_name_1388.jpg', 29, 'Yes'),
(26, 'Maggizza', '', '180.00', 'food_name_294.jpg', 29, 'Yes'),
(27, 'Chesse Burger', '', '69.00', 'food_name_7612.jpg', 28, 'Yes'),
(28, 'Strip Burger', '', '109.00', 'food_name_8947.jpg', 28, 'Yes'),
(29, 'Mushroom Burger', 'Mushroom burger', '119.00', 'food_name_5994.jpg', 28, 'Yes'),
(30, 'Spicy Burger', 'Burger', '119.00', 'food_name_735.jpg', 28, 'Yes'),
(31, 'Hot spicy Burger', 'very spicy burger', '119.00', 'food_name_5878.jpg', 28, 'Yes'),
(32, 'Butter Pavbhaji', '', '80.00', 'food_name_633.jpg', 41, 'Yes'),
(33, 'Cheese pavbhaji', '', '90.00', 'food_name_9003.jpg', 41, 'Yes'),
(34, 'Cheese pavbhaji', 'pavbhaji with cheese', '90.00', 'food_name_8766.jpg', 41, 'Yes'),
(35, 'Paneer Pavbhaji', '', '110.00', 'food_name_9295.jpg', 41, 'Yes'),
(36, 'schejwan Pasta', '', '100.00', 'food_name_438.jpg', 40, 'Yes'),
(37, 'Chesse pasta', '', '100.00', 'food_name_3151.jpg', 40, 'Yes'),
(38, 'butter pasta', '', '100.00', 'food_name_1215.jpg', 40, 'Yes'),
(40, 'vegetables sandwich', '', '60.00', 'food_name_1284.jpg', 42, 'Yes'),
(42, 'veg grill sandwich', '', '80.00', 'food_name_2382.jpg', 42, 'Yes'),
(43, 'vegetable momos', '', '30.00', 'food_name_7129.jpg', 30, 'Yes'),
(44, 'veg cheese momos', '', '40.00', 'food_name_2016.jpg', 30, 'Yes'),
(45, 'schejwan momos', '', '30.00', 'food_name_3344.m1', 30, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_addresss` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_addresss`) VALUES
(45, 'Mushroom Pizza', '140.00', 3, '420.00', '2021-11-16 02:57:57', 'Delivered', 'jaya pawar', '56465747', 'jaya@gamil.com', 'kailas nagar'),
(47, 'Macaroni Pizza', '120.00', 4, '480.00', '2021-11-16 03:43:23', 'Ordered', 'Hemanshi pawar', '576567687', 'harshu@gmail.com', '307 Shanti nagar 2 Aaspass'),
(48, 'Paneer Pavbhaji', '110.00', 5, '550.00', '2021-11-16 03:59:17', 'Delivered', 'pooja pawar ', '6575865685', 'pooja@gmail.com', 'sanjay nagar 2\r\n'),
(50, 'Cheese Pizza', '100.00', 6, '600.00', '2021-11-16 05:19:39', 'Ordered', 'ishika pawar', '587587677', 'ishika@gmail.com', 'modal town'),
(52, 'Veg.Pizaa', '110.00', 1, '110.00', '2021-11-19 07:14:37', 'On Delivery', 'Ishani pawar', '9898062900', 'ishu@gmail.com', '307, aastik apartment godadara surat'),
(53, 'Strip Burger', '109.00', 1, '109.00', '2021-11-20 07:50:02', 'On Delivery', 'Rita pawar', '6464646', 'rita@gamil.com', 'sanjay nagar'),
(55, 'Veg.Pizaa', '110.00', 4, '440.00', '2021-11-22 07:07:00', 'Ordered', 'nikhil pawar', '6464646', 'nikhil@gmail.com', 'aastaik apaertment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `mobile_no`, `email`, `password`) VALUES
(1, 'ishika', '', 'ishika@gmail.com', '123'),
(2, 'ishika', '', 'ishika@gmail.com', '123'),
(3, 'tushar', '56474', 'ishika@gmail.com', '123'),
(4, 'tushar pawar', '9898062900', 'tushar@gmail.com', '123'),
(10, 'harshita', '9898062900', 'anjali@gmail.com', '123'),
(11, 'harshita', '9898062900', 'anjali@gmail.com', '123'),
(12, 'mummy', '7687686786', 'anjali@gmail.com', '123'),
(13, 'mummy', '7687686786', 'anjali@gmail.com', '123'),
(14, 'ERHE', '7476', 'anjali@gmail.com', '123'),
(15, 'ishani kapur', '42324323', 'ishu@gmail.com', 'ishu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
