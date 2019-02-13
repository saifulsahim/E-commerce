-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 04:39 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_short_desc` varchar(255) NOT NULL,
  `category_long_desc` text NOT NULL,
  `category_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_short_desc`, `category_long_desc`, `category_status`) VALUES
(1, 'Samsung Laptop', 'Samsung Laptop1', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Samsung Laptop</span></font>', 1),
(2, 'Laptop', 'Laptop', '<font face=\"Arial, Verdana\"><span xss=removed>Laptop</span></font>', 1),
(3, 'Mobile', 'Mobile', '<font face=\"Arial, Verdana\"><span xss=removed>Mobile</span></font>', 2),
(4, 'Mobile', 'Mobile', '<font face=\"Arial, Verdana\"><span xss=removed>Mobile</span></font>', 1),
(5, 'TV', 'TV', '<font face=\"Arial, Verdana\"><span xss=removed>TV</span></font>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email_address`, `password`, `mobile_number`, `address`, `city`, `country`, `zip_code`) VALUES
(1, 'Saiful Sahim', 'sahimalam96@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `manufacturer_short_desc` varchar(255) NOT NULL,
  `manufacturer_long_desc` text NOT NULL,
  `manufacturer_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_short_desc`, `manufacturer_long_desc`, `manufacturer_status`) VALUES
(1, 'DELL Laptop', 'DELL Laptop', '<font face=\"Arial, Verdana\"><span xss=removed>DELL Laptop</span></font>', 1),
(2, 'Samsung Mobile', 'Samsung Mobile1', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Samsung Mobile</span></font>', 1),
(3, 'Sony ', 'Sony  ', '<font face=\"Arial, Verdana\"><span xss=removed>Sony </span></font>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_sales_quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`) VALUES
(1, 1, 1, 'Laptop', 12000.00, 18),
(2, 2, 3, 'Mobile', 20000.00, 4),
(3, 2, 4, 'Sony TV', 50000.00, 6);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'Pending',
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_type`, `payment_status`, `payment_date_time`, `comments`) VALUES
(1, 'ssl_commerz', 'Pending', '2018-05-22 02:18:12', ' '),
(2, 'cash_on_delivery', 'Pending', '2018-05-22 02:30:18', ' '),
(3, 'cash_on_delivery', 'Pending', '2018-05-22 02:32:37', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_short_desc` varchar(255) NOT NULL,
  `product_long_desc` text NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `top_product` tinyint(1) NOT NULL DEFAULT '0',
  `product_status` tinyint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `manufacturer_id`, `product_name`, `product_short_desc`, `product_long_desc`, `product_quantity`, `product_image`, `product_price`, `top_product`, `product_status`) VALUES
(1, 1, 1, 'Laptop', 'Laptop', '<font face=\"Arial, Verdana\"><span xss=removed>Laptop</span></font>', -8, 'uploads/1.jpg', 12000.00, 1, 1),
(2, 1, 1, 'Laptop', 'Laptop', '<font face=\"Arial, Verdana\"><span xss=removed>Laptop</span></font>', 10, 'uploads/11.jpg', 12000.00, 1, 2),
(3, 4, 2, 'Mobile', 'Mobile', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Mobile</span></font>', 6, 'uploads/mobile2.jpg', 20000.00, 0, 1),
(4, 5, 3, 'Sony TV', 'Sony TV', '<font face=\"Arial, Verdana\"><span xss=removed>Sony TV</span></font>', 9, 'uploads/tv7.jpg', 50000.00, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_name` varchar(256) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `mobile_no` varchar(16) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `customer_id`, `shipping_name`, `email_address`, `address`, `mobile_no`, `city`, `country`, `zip_code`) VALUES
(1, 0, 'Abedul Alam', 'fahim@gmail.com', 'Chittagong', '01853102132', 'Chittagong', 'Canada', 789),
(2, 0, 'Nayan', 'nayan@gmail.com', 'New York', '017561442', 'New York', 'United States', 147);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'Pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date`) VALUES
(1, 1, 1, 2, 226900.00, 'Pending', '2018-05-22 02:30:18'),
(2, 1, 2, 3, 399100.00, 'Pending', '2018-05-22 02:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_status`) VALUES
(1, 'sahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'fahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
