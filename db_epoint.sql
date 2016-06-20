-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 08:29 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_epoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_access_level` tinyint(1) NOT NULL,
  `admin_registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_access_level`, `admin_registration_date`) VALUES
(1, 'Admin Control', 'admin@admin.com', '09b5fae753766ea6b7599401ae8857f8', 1, '2016-04-26 11:57:00'),
(2, 'A.K.M. JAHIRUL HAQUE', 'jahirul.haque@live.com', '9c2876511cd445278a870b6cd8309ea8', 1, '2016-04-26 11:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL COMMENT 'publication_status=1 Category Publish and publication_status=0 Category Unpublish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'Desktop Computer', 'Desktop Computer Electronics<br>', 1),
(2, 'Laptop Computer', 'Laptop Computer Electronics<br>', 1),
(3, 'Mobile', 'Mobile Electronics', 1),
(4, 'Home Appliances', 'Home Appliances Electronics<br>', 1),
(5, 'Office Appliances', 'Office Appliances', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_first_name` varchar(25) NOT NULL,
  `customer_last_name` varchar(25) NOT NULL,
  `customer_email_address` varchar(100) NOT NULL,
  `customer_password` varchar(32) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_zip_code` varchar(5) NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_country` varchar(50) NOT NULL,
  `customer_dob` date NOT NULL,
  `customer_mobile_number` varchar(14) NOT NULL,
  `customer_access_level` tinyint(1) NOT NULL,
  `customer_registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(3) NOT NULL,
  `manufacturer_name` varchar(50) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL COMMENT 'publication_status=1 Manufacturer Publish and publication_status=0 Manufacturer Unpublish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(1, 'HP', 'Hewlett-Packard', 1),
(2, 'Apple', 'Apple Computer<br>', 1),
(3, 'Samsung', 'Samsung<br>', 1),
(4, 'Motorola', 'Motorola <br>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacturer_id` int(3) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL COMMENT 'publication_status=1 Product Publish and publication_status=0 Product Unpublish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `manufacturer_id`, `product_name`, `product_price`, `product_quantity`, `product_image`, `product_short_description`, `product_long_description`, `publication_status`) VALUES
(1, 2, 1, 'HP Notebook -15-AC650TU', 38650, 5, 'HPNotebook15AC650TU.jpg', '<h4>\r\n                                                (HP Part Code:\r\n                                                V5D75PA)</h4>\r\n                                            <div class="prdt_feature">\r\n                    <ul><li>Intel Core i5 Processor i5-4210U with Intel HD Graphics 4400</li><li>DOS</li><li>4GB RAM / 1TB HDD</li><li>Jack Black / 15.6"</li></ul>\r\n                  <p>1 Year onsite warranty</p>                 \r\n                 </div>', '<div xss=removed class="tab_cont_common" id="overview_info">\r\n                                    <h3>Overview</h3><p>Essentially exciting</p><p>Get\r\n the perfect combination of style and productivity, while keeping your \r\nwallet in mind - now that''s something to get excited about.</p><p>This \r\nHP notebook is all about getting the perfect combination of design, \r\nreliability, and features. Style and productivity while keeping your \r\nwallet in mind - now that''s something to get excited about.</p>\r\n                                    \r\n                                <br>Not all features are available in all editions or versions of Windows. Systems may\r\n                                require upgraded and/or separately purchased hardware, drivers and/or software to\r\n                                take full advantage of Windows functionality. See <a href="http://www.microsoft.com" target="_blank">www.microsoft.com</a><br><br>\r\n                                The following applies to HP systems with Intel Skylake or next-generation silicon chip-based \r\n                            system shipping with Windows 7, Windows 8, Windows 8.1 or Windows 10 Pro systems downgraded to \r\n                            Windows 7 Professional, Windows 8 Pro, or Windows 8.1: This version of Windows running with \r\n                            the processor or chipsets used in this system has limited support from Microsoft.<br></div>', 0),
(2, 3, 3, 'Samsung Galaxy J5', 1590, 12, 'product_images/uk_Front_black.jpg', '<b>Display</b><br><br>5.00-inch<br><br><b>Processor</b><br><br>1.2GHz<br><br><b>Front Camera</b><br><br> 5-megapixel<br><br><b>Resolution</b><br><br> 720x1280 pixels<br><br><b>RAM</b><br><br> 1.5GB<br><br><b>OS</b><br><br> Android 5.1<br><br><b>Storage</b><br><br>8GB<br><br><b>Rear Camera</b><br><br>13-megapixel<br><br><b>Battery capacity</b><br><br>2600mAh', 'Samsung Galaxy J5 smartphone was launched in June 2015. The phone comes with a 5.00-inch touchscreen display with a resolution of 720 pixels by 1280 pixels<br><br>The Samsung Galaxy J5 is powered by 1.2GHz quad-core Qualcomm Snapdragon 410 processor and it comes with 1.5GB of RAM. The phone packs 8GB of internal storage that can be expanded up to 128GB via a microSD card. As far as the cameras are concerned, the Samsung Galaxy J5 packs a 13-megapixel primary camera on the rear and a 5-megapixel front shooter for selfies.<br><br>The Samsung Galaxy J5 runs Android 5.1 and is powered by a 2600mAh removable battery. It measures 142.00 x 73.00 x 7.90 (height x width x thickness) and weighs 149.00 grams.<br><br>The Samsung Galaxy J5 is a dual SIM (GSM and GSM) smartphone that accepts two Micro-SIM. Connectivity options include Wi-Fi, GPS, Bluetooth, FM, 3G, 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include Proximity sensor, Accelerometer.<br><br>About Samsung<br>Founded back in 1969 as Samsung Electric Industries, Suwon, South Korea-headquartered Samsung Electronics today makes everything from televisions to semiconductors. It released its first Android smartphone in 2009, and can be credited with the launch of the first Android tablet back in 2010. The company is among the biggest players in the smartphone market in the world. It has recently developed smartphones running Tizen OS, as an alternative to its Android-based smartphones.<br><br>', 1),
(3, 2, 1, 'HP Notebook - AC650TU', 38550, 8, 'HPNotebook15AC650TU_sview.jpg', 'HP Notebook -15-AC650TU<br>(HP Part Code: V5D75PA)<br><br>    Intel Core i5 Processor i5-4210U with Intel HD Graphics 4400<br>    DOS<br>    4GB RAM / 1TB HDD<br>    Jack Black / 15.6"<br><br>1 Year onsite warranty', 'Overview<br><br>Essentially exciting<br><br>Get the perfect combination of style and productivity, while keeping your wallet in mind - now that''s something to get excited about.<br><br>This HP notebook is all about getting the perfect combination of design, reliability, and features. Style and productivity while keeping your wallet in mind - now that''s something to get excited about.<br><br><br>Not all features are available in all editions or versions of Windows. Systems may require upgraded and/or separately purchased hardware, drivers and/or software to take full advantage of Windows functionality. See www.microsoft.com<br><br>The following applies to HP systems with Intel Skylake or next-generation silicon chip-based system shipping with Windows 7, Windows 8, Windows 8.1 or Windows 10 Pro systems downgraded to Windows 7 Professional, Windows 8 Pro, or Windows 8.1: This version of Windows running with the processor or chipsets used in this system has limited support from Microsoft. For more information about Microsoft’s support, please see Microsoft’s Support Lifecycle FAQ at www.support.microsoft.com/lifecycle', 1);

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
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
