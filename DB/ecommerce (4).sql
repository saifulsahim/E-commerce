-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 08:02 PM
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
(1, 'Samsung Laptop', 'Samsung Laptop1', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Samsung Laptop</span></font>', 2),
(2, 'Laptop', 'Laptop', '<font face=\"Arial, Verdana\"><span xss=removed>Laptop</span></font>', 2),
(3, 'Mobile', 'Mobile', '<font face=\"Arial, Verdana\"><span xss=removed>Mobile</span></font>', 2),
(4, 'Mobile', 'Mobile', '<font face=\"Arial, Verdana\"><span xss=removed>Mobile</span></font>', 2),
(5, 'TV', 'TV', '<font face=\"Arial, Verdana\"><span xss=removed>TV</span></font>', 2),
(6, 'Headphone', 'Headphone', '<font face=\"Arial, Verdana\"><span xss=removed>Headphone</span></font>', 2),
(7, 'Projector', 'Projector', '<font face=\"Arial, Verdana\"><span xss=removed>Projector</span></font>', 2),
(8, 'Pendrive', 'Pendrive', '<font face=\"Arial, Verdana\"><span xss=removed>Pendrive</span></font>', 2),
(9, 'Digital Therapy Machine', 'Digital Therapy Machine', '<h1 class=\"title\" xss=removed>Digital Therapy Machine</h1>', 1),
(10, 'Electronic Back Support', 'Electronic Back Support', '<font face=\"Arial, Verdana\"><span xss=removed>Electronic Back Support</span></font>', 1),
(11, 'Blood Pressure Monitor', 'Blood Pressure Monitor', '<h1 class=\"title\" xss=removed>Blood Pressure Monitor</h1>', 1),
(12, 'Blood Glucose Test Strips', 'Blood Glucose Test Strips', '<h1 class=\"title\" xss=removed>Blood Glucose Test Strips</h1>', 1);

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
(1, 'Saiful Sahim', 'sahimalam96@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', 'Select Country...', 0),
(2, 'saifu', 'fahim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 0),
(3, 'Ssd', 'saaaaaaaaaaaaaaahimalam96@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', 0),
(4, 'Ssd', 'fahimomi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', 0),
(5, 'mitun', 'mitun@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 0),
(6, 'demo', 'demo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', 0),
(7, 'Shohag', 'shohag@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5263', 'Chittagong', 'Chittagong', 'Select Country...', 8327),
(8, 'sadman', 'mohiuddin@gmail.com', 'd1d99ef14bb813e29718b9b4df53de52', '01687606755', 'Chittagong', 'Chittagong', 'Bangladesh', 4200);

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
(1, 'DELL Laptop', 'DELL Laptop', '<font face=\"Arial, Verdana\"><span xss=removed>DELL Laptop</span></font>', 2),
(2, 'Samsung Mobile', 'Samsung Mobile1', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Samsung Mobile</span></font>', 2),
(3, 'Sony ', 'Sony  ', '<font face=\"Arial, Verdana\"><span xss=removed>Sony </span></font>', 2),
(4, 'Sony', 'Sony.', '<span xss=removed>Sony.</span>', 2),
(5, 'dgjh', 'rey', 'gjjjg', 2),
(6, 'BenQ', 'BenQ', '<font face=\"Arial, Verdana\"><span xss=removed>BenQ</span></font>', 2),
(7, 'Sandisk', 'Sandisk', '<font face=\"Arial, Verdana\"><span xss=removed>Sandisk</span></font>', 2),
(8, 'Adata', 'Adata', '<font face=\"Arial, Verdana\"><span xss=removed>Adata</span></font>', 2),
(9, 'Volvo', 'Volvo', '<font face=\"Arial, Verdana\"><span xss=removed>Volvo</span></font>', 1),
(10, 'Walgreen', 'Walgreen', '<font face=\"Arial, Verdana\"><span xss=removed>Walgreen<span xss=removed> </span></span></font><div><font face=\"Arial, Verdana\"><br></font></div>', 1),
(11, 'Omron BP742N 5', 'Omron BP742N 5', '<b xss=removed>Omron</b><span xss=removed>BP742N 5</span>', 1),
(12, 'OneTouch', 'OneTouch', '<font face=\"Arial, Verdana\"><span xss=removed>OneTouch</span></font>', 1);

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
(3, 2, 4, 'Sony TV', 50000.00, 6),
(4, 3, 5, 'Headphone', 5000.00, 10),
(5, 3, 1, 'Laptop', 12000.00, 5),
(6, 4, 5, 'Headphone', 5000.00, 4),
(7, 4, 6, 'Projector', 30000.00, 5),
(8, 4, 1, 'Laptop', 12000.00, 5),
(9, 5, 1, 'Laptop', 12000.00, 1),
(10, 5, 4, 'Sony TV', 50000.00, 1),
(11, 6, 3, 'Mobile', 20000.00, 1),
(12, 6, 1, 'Laptop', 12000.00, 1),
(13, 6, 4, 'Sony TV', 50000.00, 1),
(14, 7, 2, 'Laptop', 12000.00, 4),
(15, 7, 4, 'Sony TV', 50000.00, 1),
(16, 8, 1, 'Laptop', 12000.00, 1),
(17, 9, 1, 'Laptop', 12000.00, 1),
(18, 9, 3, 'Mobile', 20000.00, 1),
(19, 25, 9, 'Digital Therapy Machine', 700.00, 2),
(20, 25, 11, 'Blood Pressure Monitor', 3000.00, 1),
(21, 25, 10, 'Electronic Back Support', 800.00, 1),
(22, 26, 3, 'Mobile', 20000.00, 1),
(23, 26, 9, 'Digital Therapy Machine', 700.00, 1),
(24, 26, 11, 'Blood Pressure Monitor', 3000.00, 12),
(25, 27, 9, 'Digital Therapy Machine', 700.00, 1),
(26, 27, 10, 'Electronic Back Support', 800.00, 1);

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
(3, 'cash_on_delivery', 'Pending', '2018-05-22 02:32:37', ' '),
(4, 'ssl_commerz', 'Pending', '2018-06-02 11:29:01', ' '),
(5, 'cash_on_delivery', 'Pending', '2018-06-09 11:05:09', ' '),
(6, 'ssl_commerz', 'Pending', '2018-06-09 11:06:04', ' '),
(7, 'cash_on_delivery', 'Pending', '2018-06-26 05:26:19', ' '),
(8, 'cash_on_delivery', 'Pending', '2018-06-26 05:27:39', ' '),
(9, 'cash_on_delivery', 'Pending', '2018-06-26 05:29:08', ' '),
(10, 'ssl_commerz', 'Pending', '2018-06-26 05:29:44', ' '),
(11, 'cash_on_delivery', 'Pending', '2018-06-26 05:32:11', ' '),
(12, 'cash_on_delivery', 'Pending', '2018-06-26 05:37:40', ' '),
(13, 'cash_on_delivery', 'Pending', '2018-06-26 05:45:43', ' '),
(14, 'cash_on_delivery', 'Pending', '2018-06-26 06:00:16', ' '),
(15, 'cash_on_delivery', 'Pending', '2018-07-24 12:39:52', ' '),
(16, 'ssl_commerz', 'Pending', '2018-07-24 12:40:31', ' '),
(17, 'ssl_commerz', 'Pending', '2018-07-24 12:41:05', ' '),
(18, 'cash_on_delivery', 'Pending', '2018-07-28 04:03:18', ' '),
(19, 'cash_on_delivery', 'Pending', '2018-07-28 05:00:39', ' '),
(20, 'cash_on_delivery', 'Pending', '2018-07-28 05:01:27', ' '),
(21, 'cash_on_delivery', 'Pending', '2018-07-28 05:02:42', ' '),
(22, 'cash_on_delivery', 'Pending', '2018-07-28 05:03:28', ' '),
(23, 'cash_on_delivery', 'Pending', '2018-07-28 05:04:16', ' '),
(24, 'cash_on_delivery', 'Pending', '2018-07-28 05:04:47', ' '),
(25, 'cash_on_delivery', 'Pending', '2018-07-28 05:05:40', ' '),
(26, 'cash_on_delivery', 'Pending', '2018-07-28 05:08:15', ' '),
(27, 'cash_on_delivery', 'Pending', '2018-07-28 05:09:39', ' '),
(28, 'cash_on_delivery', 'Pending', '2018-07-28 05:11:30', ' '),
(29, 'cash_on_delivery', 'Pending', '2018-07-28 05:11:56', ' '),
(30, 'cash_on_delivery', 'Pending', '2018-07-28 05:12:19', ' '),
(31, 'cash_on_delivery', 'Pending', '2018-07-28 05:16:58', ' '),
(32, 'cash_on_delivery', 'Pending', '2018-07-28 05:17:06', ' '),
(33, 'cash_on_delivery', 'Pending', '2018-07-28 05:17:20', ' '),
(34, 'cash_on_delivery', 'Pending', '2018-07-28 05:18:50', ' '),
(35, 'cash_on_delivery', 'Pending', '2018-07-28 06:55:04', ' '),
(36, 'ssl_commerz', 'Pending', '2018-07-28 13:39:13', ' '),
(37, 'ssl_commerz', 'Pending', '2018-07-28 13:39:38', ' '),
(38, 'cash_on_delivery', 'Pending', '2018-08-10 13:51:49', ' '),
(39, 'cash_on_delivery', 'Pending', '2018-08-14 09:52:29', ' '),
(40, 'ssl_commerz', 'Pending', '2018-08-14 09:52:59', ' '),
(41, 'ssl_commerz', 'Pending', '2018-08-14 09:59:37', ' '),
(42, 'ssl_commerz', 'Pending', '2018-08-14 10:25:20', ' '),
(43, 'ssl_commerz', 'Pending', '2018-08-14 10:25:46', ' '),
(44, 'ssl_commerz', 'Pending', '2018-08-14 10:27:38', ' '),
(45, 'ssl_commerz', 'Pending', '2018-08-14 10:29:45', ' ');

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
(1, 2, 1, 'Laptop', 'Laptop', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Laptop</span></font>', -22, 'uploads/1.jpg', 12000.00, 1, 2),
(2, 1, 1, 'Laptop', 'Laptop', '<font face=\"Arial, Verdana\"><span xss=removed>Laptop</span></font>', 6, 'uploads/11.jpg', 12000.00, 1, 3),
(3, 4, 2, 'Mobile', 'Mobile', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Mobile</span></font>', 3, 'uploads/xperia.jpg', 20000.00, 1, 2),
(4, 0, 0, 'Sony TV', 'Sony TV', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Sony TV</span></font>', 6, 'uploads/tv7.jpg', 50000.00, 1, 2),
(5, 6, 3, 'Headphone', 'Sony.', '<span xss=removed>Sony.</span>', -4, 'uploads/headphone4.jpg', 5000.00, 1, 2),
(6, 7, 6, 'Projector', 'Projector', '<font face=\"Arial, Verdana\"><span xss=removed>Projector</span></font>', -1, 'uploads/Projector.jpg', 30000.00, 1, 2),
(7, 8, 7, 'Pendrive 32 GB', 'Pendrive', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Pendrive</span></font>', 3, 'uploads/pendrive.jpg', 1000.00, 0, 2),
(8, 8, 8, 'Adata Pendrive', 'Adata Pendrive', '<font face=\"Arial, Verdana\"><span xss=\"removed\"><i xss=\"removed\"><strike xss=\"removed\"><b>Adata Pendrive</b></strike></i></span></font>', 8, 'uploads/Adata.jpg', 1200.00, 0, 2),
(9, 9, 9, 'Digital Therapy Machine', 'Digital Therapy Machine', '<font face=\"Arial, Verdana\"><span xss=removed>Digital Therapy Machine</span></font>', 16, 'uploads/Digital_Therapy_Machine.jpg', 700.00, 1, 1),
(10, 10, 10, 'Electronic Back Support', 'Electronic Back Support', '<font face=\"Arial, Verdana\"><span xss=\"removed\">Electronic Back Support</span></font>', 13, 'uploads/Ele.jpg', 800.00, 0, 1),
(11, 11, 11, 'Blood Pressure Monitor', 'Blood Pressure Monitor', '<h1 class=\"title\" xss=removed>Blood Pressure Monitor</h1>', 2, 'uploads/blood.jpg', 3000.00, 1, 1),
(12, 12, 12, 'Blood Glucose Test Strips', 'Blood Glucose Test Strips', '<font face=\"Arial, Verdana\"><span xss=removed>Blood Glucose Test Strips</span></font>', 20, 'uploads/glu.jpg', 3000.00, 1, 1);

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
(2, 0, 'Nayan', 'nayan@gmail.com', 'New York', '017561442', 'New York', 'United States', 147),
(4, 0, 'Abedul Alam', 'sahimalam96@gmail.com', 'New York', '01756128527', 'New York', 'United States', 789),
(5, 0, 'Joni', 'Joni@gmail.com', 'Chittagong', '01756128527', 'Chittagong', 'Bangladesh', 456),
(6, 0, 'Haider', 'hAs@gmail.com', 'Chittagong', '01756128527', 'Chittagong', 'Bangladesh', 147),
(12, 0, 'Abedul Alam', 'nayan@gmail.com', 'Chittagong', '01756128527', 'Chittagong', 'Bangladesh', 789),
(13, 0, 'Joni', 'Joni@gmail.com', 'Chittagong', '01756128527', 'Chittagong', 'Bangladesh', 789),
(14, 6, 'demo', 'demo@gmail.com', 'Chittagong', '01756128527', 'Chittagong', 'Bangladesh', 1234),
(15, 6, 'ss', 'nayan@gmail.com', 'Chittagong', '01756128527', 'Chittagong', 'Bangladesh', 789),
(16, 6, 'Abedul Alam', 'nayan@gmail.com', 'Chittagong', '01756128527', 'Chittagong', 'Canada', 1234),
(17, 6, 'Nayan', 'nayan@gmail.com', 'Chittagong', '01756128527', 'Chittagong', 'Canada', 789),
(18, 1, 'Joni', 'Joni@gmail.com', 'New York', '01756128527', 'New York', 'United States', 1234),
(19, 1, '', 'sahimalam96@gmail.com', '', '01756128527', '', 'Select Country...', 0),
(20, 1, '', 'sahimalam96@gmail.com', '', '', '', 'Select Country...', 0),
(21, 8, 'Abedul Alam', 'sahimalam96@gmail.com', 'Dhaka', '01756128527', 'Dhaka', 'Bangladesh', 1235),
(22, 1, 'Joni', 'nayan@gmail.com', '', '', '', 'Select Country...', 0),
(23, 1, 'Joni', 'nayan@gmail.com', '', '', '', 'Select Country...', 0),
(24, 1, 'Nayan', 'sahimalam96@gmail.com', '', '', '', 'Select Country...', 0),
(25, 1, 'Joni', 'sahimalam96@gmail.com', '', '', '', 'Select Country...', 0),
(26, 7, 'Joni', 'Joni@gmail.com', '', '', '', 'Select Country...', 0);

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
(2, 1, 2, 3, 399100.00, 'Pending', '2018-05-22 02:32:37'),
(3, 3, 4, 5, 115600.00, 'Pending', '2018-06-09 11:05:09'),
(4, 4, 5, 12, 0.00, 'Pending', '2018-06-26 05:37:40'),
(5, 4, 6, 13, 65200.00, 'Pending', '2018-06-26 05:45:43'),
(6, 4, 7, 14, 86200.00, 'Pending', '2018-06-26 06:00:16'),
(7, 5, 11, 15, 103000.00, 'Pending', '2018-07-24 12:39:52'),
(8, 6, 14, 18, 12700.00, 'Pending', '2018-07-28 04:03:18'),
(9, 6, 15, 19, 33700.00, 'Pending', '2018-07-28 05:00:40'),
(10, 6, 15, 20, 33700.00, 'Pending', '2018-07-28 05:01:27'),
(11, 6, 15, 21, 33700.00, 'Pending', '2018-07-28 05:02:42'),
(12, 6, 15, 22, 33700.00, 'Pending', '2018-07-28 05:03:28'),
(13, 6, 15, 23, 33700.00, 'Pending', '2018-07-28 05:04:16'),
(14, 6, 15, 24, 33700.00, 'Pending', '2018-07-28 05:04:47'),
(15, 6, 15, 25, 33700.00, 'Pending', '2018-07-28 05:05:40'),
(16, 6, 15, 26, 33700.00, 'Pending', '2018-07-28 05:08:15'),
(17, 6, 15, 27, 33700.00, 'Pending', '2018-07-28 05:09:39'),
(18, 6, 15, 28, 33700.00, 'Pending', '2018-07-28 05:11:30'),
(19, 6, 15, 29, 33700.00, 'Pending', '2018-07-28 05:11:56'),
(20, 6, 15, 30, 33700.00, 'Pending', '2018-07-28 05:12:19'),
(21, 6, 15, 31, 33700.00, 'Pending', '2018-07-28 05:16:58'),
(22, 6, 15, 32, 33700.00, 'Pending', '2018-07-28 05:17:06'),
(23, 6, 15, 33, 33700.00, 'Pending', '2018-07-28 05:17:20'),
(24, 6, 15, 34, 33700.00, 'Pending', '2018-07-28 05:18:50'),
(25, 6, 16, 35, 5560.00, 'Pending', '2018-07-28 06:55:04'),
(26, 8, 21, 38, 59635.00, 'Pending', '2018-08-10 13:51:49'),
(27, 1, 22, 39, 1675.00, 'Pending', '2018-08-14 09:52:29');

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
(1, 'sahim@gmail.com', '$2y$10$0ajRb/yvwyPZhVBElmPRaukT/VoBHNFNzhV0fWGaC8F0vqUuN0dpq', 1),
(2, 'fahim@gmail.com', '$2y$10$a4pNzf0vI92UfCCh.uRz/uESOy2DgGwJuRnEmK3wukpXelE3LcZ2m', 1),
(3, 'nayan@gmail.com', '$2y$10$mAL5gXttXJ/KOxhU97TI0uHGpkDMiWpzOXPQ1xAF9iGcvCmSVUX6q', 1);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
