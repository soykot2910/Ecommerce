-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 09:10 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce_batch_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(256) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_label` tinyint(1) NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `access_label`, `create_date_time`) VALUES
(1, 'qlab', 'qlab@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '2019-03-15 05:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `create_date_time`) VALUES
(18, 'camera', 'camera.. information', 1, '2018-10-24 16:38:02'),
(19, 'fen info', 'fen details', 0, '2018-10-24 16:38:38'),
(20, 'Fridge', 'Fridge...details', 1, '2018-10-24 16:39:06'),
(21, 'Headphone', 'Headphon........details', 1, '2018-10-24 16:39:32'),
(22, 'Keyboard', 'keyboard----details', 1, '2018-10-24 16:39:58'),
(23, 'Laptop', 'laptop details', 1, '2018-10-24 16:40:15'),
(25, 'Monitor', 'monitor&nbsp; details', 1, '2018-10-24 16:40:54'),
(26, 'Mouse', 'mouse ----details', 1, '2018-10-24 16:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(256) NOT NULL,
  `customer_password` varchar(32) NOT NULL,
  `customer_phone` varchar(14) NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `customer_zip_code` varchar(100) NOT NULL,
  `customer_country` varchar(100) NOT NULL,
  `customer_address` text NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `customer_city`, `customer_zip_code`, `customer_country`, `customer_address`, `create_date_time`) VALUES
(1, 'Smo Shajib', 'smoshajib@gmail.com', '202cb962ac59075b964b07152d234b70', '2345678', 'dhaka', '1215', 'Bangladesh', 'customer info...', '2019-04-20 06:05:35'),
(2, 'qlab', 'qlab@gmail.com', '202cb962ac59075b964b07152d234b70', '4321', 'dhaka', '2134', 'Afghanistan', 'santinagar', '2019-04-20 06:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `manufacturer_image` varchar(256) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `manufacturer_image`, `publication_status`, `create_date_time`) VALUES
(1, 'Hp', 'hp info', 'asset/back_end/manufacturer_image/logo1.jpeg', 1, '2019-03-23 06:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(100) NOT NULL,
  `order_confirm` tinyint(1) NOT NULL DEFAULT '0',
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `customer_name`, `shipping_id`, `payment_id`, `order_total`, `order_confirm`, `create_date_time`) VALUES
(1, 2, '', 5, 5, '1800', 0, '2019-05-10 18:07:33'),
(2, 2, '', 5, 6, '1800', 0, '2019-05-10 18:17:44'),
(3, 2, '', 5, 7, '1800', 0, '2019-05-10 18:18:06'),
(4, 2, '', 5, 8, '1800', 0, '2019-05-10 18:18:21'),
(5, 2, '', 5, 9, '1800', 0, '2019-05-10 18:29:26'),
(6, 2, '', 5, 10, '1800', 0, '2019-05-10 18:29:55'),
(7, 2, '', 5, 11, '1800', 0, '2019-05-10 18:33:11'),
(8, 2, 'qlab', 6, 13, '600', 0, '2019-05-11 16:43:43'),
(9, 2, 'qlab', 7, 14, '2400', 0, '2019-05-11 19:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` varchar(100) NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_qty`, `create_date_time`) VALUES
(1, 1, 1, 'Mouse Black', '600', '1', '2019-05-10 18:07:34'),
(2, 1, 3, 'Bed White', '600', '1', '2019-05-10 18:07:34'),
(3, 1, 2, 'Mouse White', '600', '1', '2019-05-10 18:07:34'),
(4, 2, 1, 'Mouse Black', '600', '1', '2019-05-10 18:17:44'),
(5, 2, 3, 'Bed White', '600', '1', '2019-05-10 18:17:44'),
(6, 2, 2, 'Mouse White', '600', '1', '2019-05-10 18:17:44'),
(7, 3, 1, 'Mouse Black', '600', '1', '2019-05-10 18:18:06'),
(8, 3, 3, 'Bed White', '600', '1', '2019-05-10 18:18:06'),
(9, 3, 2, 'Mouse White', '600', '1', '2019-05-10 18:18:06'),
(10, 4, 1, 'Mouse Black', '600', '1', '2019-05-10 18:18:21'),
(11, 4, 3, 'Bed White', '600', '1', '2019-05-10 18:18:21'),
(12, 4, 2, 'Mouse White', '600', '1', '2019-05-10 18:18:21'),
(13, 5, 1, 'Mouse Black', '600', '1', '2019-05-10 18:29:26'),
(14, 5, 3, 'Bed White', '600', '1', '2019-05-10 18:29:26'),
(15, 5, 2, 'Mouse White', '600', '1', '2019-05-10 18:29:27'),
(16, 6, 1, 'Mouse Black', '600', '1', '2019-05-10 18:29:55'),
(17, 6, 3, 'Bed White', '600', '1', '2019-05-10 18:29:55'),
(18, 6, 2, 'Mouse White', '600', '1', '2019-05-10 18:29:55'),
(19, 7, 1, 'Mouse Black', '600', '1', '2019-05-10 18:33:11'),
(20, 7, 3, 'Bed White', '600', '1', '2019-05-10 18:33:11'),
(21, 7, 2, 'Mouse White', '600', '1', '2019-05-10 18:33:11'),
(22, 8, 1, 'Mouse Black', '600', '1', '2019-05-11 16:43:43'),
(23, 9, 1, 'Mouse Black', '600', '4', '2019-05-11 19:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `create_date_time`) VALUES
(1, 'cash on delivery', '2019-05-10 17:40:29'),
(2, 'cash on delivery', '2019-05-10 17:43:55'),
(3, 'cash on delivery', '2019-05-10 17:44:21'),
(4, 'cash on delivery', '2019-05-10 17:51:05'),
(5, 'cash on delivery', '2019-05-10 18:07:33'),
(6, 'cash on delivery', '2019-05-10 18:17:44'),
(7, 'cash on delivery', '2019-05-10 18:18:06'),
(8, 'cash on delivery', '2019-05-10 18:18:21'),
(9, 'cash on delivery', '2019-05-10 18:29:26'),
(10, 'cash on delivery', '2019-05-10 18:29:55'),
(11, 'cash on delivery', '2019-05-10 18:33:11'),
(12, 'cash on delivery', '2019-05-10 18:36:44'),
(13, 'cash on delivery', '2019-05-11 16:43:43'),
(14, 'cash on delivery', '2019-05-11 19:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_old_price` varchar(100) NOT NULL,
  `product_new_price` varchar(100) NOT NULL,
  `product_hit_count` int(11) NOT NULL DEFAULT '0',
  `product_quantity` int(11) NOT NULL,
  `product_sku` varchar(100) NOT NULL,
  `product_review` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_image`, `product_old_price`, `product_new_price`, `product_hit_count`, `product_quantity`, `product_sku`, `product_review`, `product_description`, `publication_status`, `create_date_time`) VALUES
(1, 'Mouse Black', 26, 1, 'asset/back_end/product_image/81+LvBts3LL__SX425_.jpg', '500', '600', 22, 12, 'M1', '', 'mouse info', 1, '2019-04-05 06:36:09'),
(2, 'Mouse White', 26, 1, 'asset/back_end/product_image/81+LvBts3LL__SX425_1.jpg', '500', '600', 6, 17, 'M1', 'https://www.youtube.com/embed/yHx8KdY81BE', 'info mouse', 1, '2019-04-06 05:27:51'),
(3, 'Bed White', 21, 1, 'asset/back_end/product_image/b4.jpg', '500', '600', 14, 17, 'B1', '', 'info bed', 1, '2019-04-06 05:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `shipping_name` varchar(100) NOT NULL,
  `shipping_email` varchar(256) NOT NULL,
  `shipping_phone` varchar(14) NOT NULL,
  `shipping_city` varchar(100) NOT NULL,
  `shipping_zip_code` varchar(100) NOT NULL,
  `shipping_country` varchar(100) NOT NULL,
  `shipping_address` text NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_city`, `shipping_zip_code`, `shipping_country`, `shipping_address`, `create_date_time`) VALUES
(1, 'smo sharif', 'sharif@gmail.com', '2345678', 'lakshmipur', '1213', 'American Samoa', 'km34 road-10', '2019-04-20 07:33:35'),
(2, 'qlab', 'qlab@gmail.com', '322', 'dhaka', '1217', 'Albania', 'santinagar', '2019-05-10 16:48:33'),
(3, 'qlab', 'q@gmail.com', '12234', 'dhaka', '1217', 'Afghanistan', 'kawran bazar', '2019-05-10 17:40:24'),
(4, 'qlab', 'qm@gmail.com', '12234', 'dhaka', '1217', 'Afghanistan', 'kawran bazar', '2019-05-10 17:44:13'),
(5, 'qlab', 'qlab@gmail.com', '234e234', 'dhaka', '1217', 'Algeria', 'matuil', '2019-05-10 17:50:26'),
(6, 'smo qlab', 'qb@gmail.com', '2345', 'ban', '1234', 'Afghanistan', 'kawran bazar', '2019-05-11 16:43:39'),
(7, 'sds', 's@gmail.com', '234', 'd', '12', 'Afghanistan', 'kaw', '2019-05-11 19:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(100) NOT NULL,
  `slider_description` text NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_description`, `slider_image`, `publication_status`, `create_date_time`) VALUES
(1, 'slider1', '<font face=\"Arial Black\" xss=removed size=\"7\">Text Slider Product </font>', 'asset/back_end/slider_image/slider1.jpg', 1, '2019-05-12 18:26:47'),
(2, 'slider2', 'slider 2 info&nbsp;', 'asset/back_end/slider_image/slider2.jpg', 1, '2019-05-12 18:28:39'),
(3, 'slider3', 'slider 3 info', 'asset/back_end/slider_image/slide_04.jpg', 1, '2019-05-12 18:30:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
