-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 10:36 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(4) NOT NULL,
  `a_few_word` text NOT NULL,
  `why_choose_us` text NOT NULL,
  `testimonials` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `a_few_word`, `why_choose_us`, `testimonials`) VALUES
(1, 'Cras er te facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuad nibh odio ut veliter loki molo. Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum atermolok commodo luctus erito libero.\r\nPraesent faucibus malesuada faucibus. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed nulla facilisis consequatertolomon. Curabitur vel lorem sit amet nulla ullamcorper fermentum.', '', ''),
(2, 'sfgadugfa', '', ''),
(3, 'hello this is anas', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `booking_id` int(5) NOT NULL,
  `vehicle_id` int(4) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `vehicle_status` varchar(20) NOT NULL,
  `curr_rate` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`booking_id`, `vehicle_id`, `customer_id`, `start_date`, `end_date`, `status`, `vehicle_status`, `curr_rate`) VALUES
(156, 31, 52, '2019-09-11', '2019-09-13', '', 'active', 2800),
(157, 16, 63, '2019-09-19', '2019-09-21', '', 'active', 2000),
(161, 46, 52, '2019-09-26', '2019-09-27', '', 'active', 2500),
(163, 32, 52, '2019-09-07', '2019-09-08', '', 'active', 2200),
(165, 46, 52, '2019-09-20', '2019-09-21', '', 'Active', 2500),
(166, 20, 52, '2019-09-10', '2019-09-11', '', 'active', 1500),
(168, 32, 52, '2019-09-10', '2019-09-12', '', 'active', 2200),
(169, 46, 52, '2019-09-30', '2019-10-02', '', 'active', 2500),
(170, 30, 52, '2019-09-25', '2019-09-27', '', 'active', 1800),
(171, 31, 52, '2019-10-09', '2019-10-12', '', 'active', 2800),
(172, 20, 52, '2019-09-17', '2019-09-18', '', 'active', 1500),
(175, 46, 52, '2019-11-01', '2019-11-22', '', 'active', 2500),
(176, 50, 52, '2019-09-19', '2019-09-21', '', 'active', 2200),
(177, 49, 52, '2019-09-25', '2019-09-27', '', 'active', 3500),
(178, 48, 52, '2019-09-13', '2019-09-20', '', 'active', 3000),
(181, 49, 52, '2019-10-03', '2019-10-04', '', 'active', 3500),
(182, 48, 73, '2019-09-21', '2019-09-21', '', 'active', 3000),
(183, 49, 52, '2019-10-10', '2019-10-11', '', 'active', 3500),
(184, 48, 52, '2019-11-13', '2019-11-13', '', 'Active', 3000),
(186, 51, 73, '2019-09-15', '2019-09-15', '', 'active', 2200),
(188, 20, 52, '2019-12-04', '2019-12-05', '', 'active', 1500),
(189, 54, 52, '2019-09-18', '2019-09-19', '', 'active', 2500),
(190, 54, 73, '2019-10-01', '2019-10-02', '', 'active', 2500),
(196, 20, 52, '2019-09-20', '2019-09-20', '', 'active', 1500),
(197, 54, 52, '2019-09-27', '2019-09-27', '', 'active', 2500),
(198, 50, 75, '2019-09-24', '2019-09-25', '', 'active', 2200),
(199, 31, 52, '2019-09-26', '2019-09-27', '', 'active', 2800),
(200, 54, 52, '2019-11-14', '2050-02-01', '', 'active', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `brand_setup`
--

CREATE TABLE `brand_setup` (
  `brand_id` int(10) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `brand_model` varchar(20) NOT NULL,
  `brand_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_setup`
--

INSERT INTO `brand_setup` (`brand_id`, `brand_name`, `brand_model`, `brand_details`) VALUES
(1, 'Toyota', 'TX-340', 'Very good'),
(2, 'Jaguar', 'GH-675', 'Very good Condition'),
(11, 'Ferrari', 'Tx345', 'Very good'),
(18, 'Fiat', 'Fiat', 'very good'),
(19, 'Mazda', '0', 'very good'),
(20, 'Hyundai', '0', 'Good'),
(21, 'Walton', '0', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ctable`
--

CREATE TABLE `ctable` (
  `c_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dep` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `sid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctable`
--

INSERT INTO `ctable` (`c_id`, `name`, `dep`, `batch`, `sid`) VALUES
(9, 'test', 'test', 'test', 86588);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedID` int(11) NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `feedback` varchar(191) DEFAULT NULL,
  `rating` int(1) NOT NULL DEFAULT '0',
  `c_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `order_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedID`, `userID`, `vehicle_id`, `feedback`, `rating`, `c_date`, `order_id`) VALUES
(2, 52, 31, 'very good', 5, '2019-09-14 10:26:57', 156),
(3, 52, 20, 'Very good', 5, '2019-09-15 01:45:58', 166),
(4, 52, 20, 'Good', 3, '2019-09-15 01:46:21', 167),
(5, 52, 20, 'Very', 5, '2019-09-21 01:45:58', 172);

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `lic_id` int(11) NOT NULL,
  `license_no` text NOT NULL,
  `lic_image` varchar(200) NOT NULL,
  `issue` date NOT NULL,
  `valid` date NOT NULL,
  `dob` date NOT NULL,
  `driver_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`lic_id`, `license_no`, `lic_image`, `issue`, `valid`, `dob`, `driver_id`) VALUES
(1, 'Muz15T65', '', '2018-05-02', '2020-02-20', '1992-01-13', 61);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `service_providers_list`
--

CREATE TABLE `service_providers_list` (
  `service_provider_id` int(4) NOT NULL,
  `service_provider_name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `driver_id` int(4) NOT NULL,
  `driver_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_providers_list`
--

INSERT INTO `service_providers_list` (`service_provider_id`, `service_provider_name`, `phone`, `driver_id`, `driver_status`) VALUES
(4, 'araf', '01714725005', 54, 1),
(6, 'Muzahid', '017545445455', 61, 1),
(13, 'Md Ehia', '01712321276', 70, 1),
(15, 'test test', '01714725005', 72, 0),
(16, 'Ahmed Khandakar', '01714725005', 76, 0),
(17, 'Ahmed demo112', '01721043883', 77, 0),
(18, 'Ahmed Ahmed', '01725854687', 78, 0),
(19, 'Ahmed Khandakar', '01714725005', 79, 0),
(20, 'Ahmed Kha', '01715968034', 80, 0),
(21, 'asaa asaa3', '01715968034', 81, 0),
(22, 'anas Kh', '01714725005', 82, 0),
(23, 'Ahmed Demo', '01715968034', 83, 0),
(24, 'anas ahmed', '01754258746', 76, 0),
(25, 'Ahmed try', '01714725005', 77, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_info`
--

CREATE TABLE `transaction_info` (
  `transaction_id` int(11) NOT NULL,
  `booking_id` int(8) NOT NULL,
  `customer_id` int(8) NOT NULL,
  `paid_amount` int(8) NOT NULL,
  `transaction_number` varchar(70) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `transaction_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_info`
--

INSERT INTO `transaction_info` (`transaction_id`, `booking_id`, `customer_id`, `paid_amount`, `transaction_number`, `mobile_number`, `transaction_date`, `transaction_status`) VALUES
(1, 159, 52, 500, 'HB6014596', '0174565545', '2019-09-02 10:06:17', 2),
(2, 160, 52, 500, 'HB6014596', '0174565545', '2019-09-03 12:47:49', 1),
(3, 161, 52, 600, 'HB6014520', '0174565546', '2019-09-03 09:57:55', 1),
(4, 163, 52, 1000, 'Bk348790c', '01714725005', '2019-09-04 12:09:36', 1),
(5, 164, 52, 1000, 'Bk448790c', '01725458762', '2019-09-04 12:18:12', 1),
(6, 165, 52, 500, 'BKashy56789', '01714258605', '2019-09-04 01:05:40', 1),
(7, 168, 52, 1000, 'BKashy56789k', '01725458762', '2019-09-07 05:18:52', 1),
(10, 169, 52, 45, '89898979', '867887', '2019-09-07 09:57:20', 1),
(12, 170, 52, 5800, 'Bkash6547', '01712586459', '2019-09-08 01:28:01', 2),
(13, 172, 52, 3000, 'bkash458', '0174565546', '2019-09-08 01:34:16', 2),
(46, 182, 73, 3000, 'Bk348d790c', '01714725005', '2019-09-12 04:16:42', 1),
(47, 185, 52, 3000, 'HB60145961', '01725458762', '2019-09-14 09:53:33', 1),
(48, 185, 52, 3000, 'HB60145962', '01714725005', '2019-09-14 09:53:40', 2),
(49, 185, 52, 3000, 'HB601459632', '01714258564', '2019-09-14 09:53:54', 2),
(50, 185, 52, 3000, 'HB60145963213', '01714725005', '2019-09-14 09:54:02', 2),
(51, 186, 73, 2200, 'wgrwre', '01714258564', '2019-09-14 10:11:24', 2),
(52, 186, 73, 2200, 'hrtwthsrwh', '01725458762', '2019-09-14 10:11:33', 2),
(53, 186, 73, 2200, 'Bk348790cads', '01714725005', '2019-09-14 10:11:40', 2),
(54, 189, 52, 5000, 'HB6014vcgh5962', '01714725005', '2019-09-15 02:19:22', 1),
(55, 190, 73, 5000, 'Bk34sf8790c', '01714725005', '2019-09-15 03:18:50', 2),
(56, 190, 73, 5000, 'Bk348790c5fs', '0174565546', '2019-09-15 03:18:57', 1),
(57, 190, 73, 5000, 'HB6014sf596', '01714725005', '2019-09-15 03:19:08', 2),
(58, 191, 73, 4400, 'HB6014520ksjf', '01725458762', '2019-09-15 03:41:33', 1),
(59, 191, 73, 4400, 'HB60145kk96sd', '01725458762', '2019-09-15 03:41:42', 2),
(60, 191, 73, 4400, 'HB6014kk520', '01725458762', '2019-09-15 03:41:51', 1),
(61, 191, 73, 4400, 'ouguhhuok', '01714725005', '2019-09-15 03:42:00', 1),
(62, 192, 52, 7000, 'HB60fs14596sd', '01714258564', '2019-09-15 03:59:03', 1),
(63, 192, 52, 7000, 'HB60145fasd96sd', '0174565546', '2019-09-15 03:59:12', 1),
(64, 192, 52, 7000, 'sfffweagw', '01714258605', '2019-09-15 03:59:19', 1),
(65, 193, 73, 3000, 'hgaikafn', '01714725005', '2019-09-15 04:39:03', 1),
(66, 196, 52, 1500, 'HB6014520K', '01714725005', '2019-09-19 03:35:28', 1),
(67, 197, 52, 2500, 'HB6016454596', '01714725005', '2019-09-20 07:16:41', 1),
(69, 197, 52, 2500, 'HB6014131520', '01714725005', '2019-09-20 07:17:17', 0),
(70, 199, 52, 5600, 'HB60gfg14596', '01714725005', '2019-09-21 10:07:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `firstname` varchar(20) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(20) COLLATE utf8_bin NOT NULL,
  `address` varchar(20) COLLATE utf8_bin NOT NULL,
  `mobile` varchar(15) COLLATE utf8_bin NOT NULL,
  `user_type` varchar(12) COLLATE utf8_bin NOT NULL,
  `image_path` varchar(200) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `address`, `mobile`, `user_type`, `image_path`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(49, 'Kawsar', '$2a$08$vhjTDDsl6siz/n/5nfTCUuwp/NRwOKDEAEQHwRfdrQ8pXsYZGpszC', 'kawsar@gmail.com', 'Kawsar', 'Chowdhury', 'sylhet', '01749653350', 'admin', 'assets/image_path/Tarakon-records-logo-small.png', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-13 13:09:12', '2018-10-10 14:15:46', '2019-09-16 15:38:58'),
(52, 'najim', '$2a$08$Zhq/oGnPVyGrHK0GEEL4vOXAFYonwl4LTPTMdfisZGj2x1lphNwxO', 'muzahidahmed4@gmail.com', 'najim', 'Ahmed', 'Taltola, Taltala,Bal', '01714725005', 'customer', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-21 09:07:21', '2019-03-11 10:14:57', '2019-09-21 07:07:21'),
(54, 'araf', '$2a$08$rkQoTPrWvztt.wcPs2j4gOqz6FGeD/gvd8KdWVfyW/N.MCfxtnX..', 'araf@gmail.com', 'Araf', 'Ahmed', 'sylhet', '01721043883', 'admin', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-21 09:05:36', '2019-03-11 10:35:45', '2019-09-21 07:05:36'),
(57, 'suhag', '$2a$08$.VK8W2oX7pVN2HCFuyVXVO/UkX8ckOQpZ1vTlOelcygImqVqTaBaW', 'suhag@gmail.com', 'Suhag', 'Ahmed', 'Sylhet', '0147589456', 'driver', 'assets/image_path/img2.jpg', 1, 1, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-13 18:46:57', '2019-06-18 08:31:37', '2019-09-18 09:27:28'),
(61, 'Muzahid', '$2a$08$EkGnZl0Pa9w9oGSXkrb4hubzet2REEldj.zcyuCuHpVhu/R.xw7qS', 'muzahidahmed4@gmail.com', 'Muzahid', 'Ahmed', 'Sylhet', '01739000666', 'driver', 'assets/image_path/img5.jpg', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-21 09:14:22', '2019-06-22 10:27:33', '2019-09-21 07:14:22'),
(70, 'Ehia', '$2a$08$tVIYBWa9OjwqiC9conb2COn5jd3XgPzsINTTiiH1IwFOJ1M3GahWO', 'khandakar.anas2627@gmail.com', 'Md', 'Ehia', 'Taltola,Sylhet', '01712321276', 'driver', 'assets/image_path/img3.jpg', 1, 1, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-16 11:21:59', '2019-09-07 19:46:07', '2019-09-18 09:27:33'),
(73, 'fahim', '$2a$08$HZEirzYrp/WE/f1iiSWr.uxibqOsdFVHJmAdL.2xYsB3OponFm8pq', 'ahmedkhandakaranas@gmail.com', 'Fahim', 'Khandakar', 'Sylhet', '01715284751', 'customer', 'assets/image_path/fahim.jpg', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-20 21:30:07', '2019-09-11 23:59:18', '2019-09-20 19:30:07'),
(75, 'Sakib', '$2a$08$5Qeoe56Hg9qpMUqIpK08keJJeQUiBXt0aCLQ029heeaJ.k8UU8Ayi', 'anasahmed@gmail.com', 'Sakib', 'Ahmed', 'Sylhet', '01714725880', 'customer', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-20 21:55:10', '2019-09-20 16:00:48', '2019-09-20 19:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 3, NULL, NULL),
(2, 4, NULL, NULL),
(3, 5, NULL, NULL),
(4, 6, NULL, NULL),
(5, 18, NULL, NULL),
(6, 19, NULL, NULL),
(7, 20, NULL, NULL),
(8, 21, NULL, NULL),
(9, 22, NULL, NULL),
(10, 23, NULL, NULL),
(11, 24, NULL, NULL),
(12, 25, NULL, NULL),
(13, 26, NULL, NULL),
(14, 27, NULL, NULL),
(15, 28, NULL, NULL),
(16, 29, NULL, NULL),
(17, 30, NULL, NULL),
(18, 31, NULL, NULL),
(19, 32, NULL, NULL),
(20, 33, NULL, NULL),
(21, 34, NULL, NULL),
(22, 35, NULL, NULL),
(23, 36, NULL, NULL),
(24, 37, NULL, NULL),
(25, 38, NULL, NULL),
(26, 39, NULL, NULL),
(27, 40, NULL, NULL),
(28, 41, NULL, NULL),
(29, 42, NULL, NULL),
(30, 43, NULL, NULL),
(31, 44, NULL, NULL),
(32, 45, NULL, NULL),
(33, 46, NULL, NULL),
(34, 47, NULL, NULL),
(35, 48, NULL, NULL),
(36, 49, NULL, NULL),
(37, 51, NULL, NULL),
(38, 52, NULL, NULL),
(39, 54, NULL, NULL),
(40, 55, NULL, NULL),
(41, 56, NULL, NULL),
(42, 57, NULL, NULL),
(43, 60, NULL, NULL),
(44, 63, NULL, NULL),
(45, 70, NULL, NULL),
(46, 73, NULL, NULL),
(47, 75, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(20) NOT NULL,
  `brand_id` int(3) NOT NULL,
  `vehicle_details` text NOT NULL,
  `vehicle_rate` int(6) NOT NULL,
  `vehicle_plate` text NOT NULL,
  `aircondition` text NOT NULL,
  `vehicle_status` varchar(15) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `user_id` int(4) NOT NULL,
  `driver_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`vehicle_id`, `vehicle_name`, `brand_id`, `vehicle_details`, `vehicle_rate`, `vehicle_plate`, `aircondition`, `vehicle_status`, `image_path`, `user_id`, `driver_id`) VALUES
(16, 'Jaguar BnX44', 2, '1', 2500, 'SYL2097J', 'Yes', '1', 'assets/image_path/ci.png', 2, 61),
(20, 'JaguarBnX21', 2, '2', 1500, 'SYL28H7J', 'Yes', '1', 'assets/image_path/JaguarBnX21.jpg', 0, 61),
(30, 'Jaguar RX9', 2, '1', 1800, 'SYL20RXNE', 'Yes', '1', 'assets/image_path/page3_img1.jpg', 0, 61),
(31, 'Ferrari312', 11, '2', 2800, 'SYL97FER', 'Yes', '1', 'assets/image_path/page3_img6.jpg', 0, 61),
(48, 'Corolla Altis', 1, '2', 3500, 'SYL2076AT', 'Yes', '1', 'assets/image_path/Toyota_Corolla_altis.jpg', 0, 61),
(49, 'Corolla 2000', 1, '2', 3500, 'SYL70CR43', 'Yes', '1', 'assets/image_path/corola2000.jpg', 0, 70),
(50, 'Camry 2000', 1, '1', 2200, 'SYL08CM67', 'Yes', '1', 'assets/image_path/camry2000.jpg', 0, 70),
(54, 'Avalon 1999', 1, '1', 2500, 'SYL16AV09', 'No', '1', 'assets/image_path/avalon.jpg', 0, 70);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_status`
--

CREATE TABLE `vehicle_status` (
  `vcl_id` int(11) NOT NULL,
  `vcl_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_status`
--

INSERT INTO `vehicle_status` (`vcl_id`, `vcl_status`) VALUES
(1, 'Good'),
(2, 'Very Good'),
(3, 'Okay'),
(4, 'Bad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `brand_setup`
--
ALTER TABLE `brand_setup`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `ctable`
--
ALTER TABLE `ctable`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedID`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`lic_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_providers_list`
--
ALTER TABLE `service_providers_list`
  ADD PRIMARY KEY (`service_provider_id`);

--
-- Indexes for table `transaction_info`
--
ALTER TABLE `transaction_info`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vehicle_status`
--
ALTER TABLE `vehicle_status`
  ADD PRIMARY KEY (`vcl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking_list`
--
ALTER TABLE `booking_list`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `brand_setup`
--
ALTER TABLE `brand_setup`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ctable`
--
ALTER TABLE `ctable`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `lic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_providers_list`
--
ALTER TABLE `service_providers_list`
  MODIFY `service_provider_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transaction_info`
--
ALTER TABLE `transaction_info`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `vehicle_status`
--
ALTER TABLE `vehicle_status`
  MODIFY `vcl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
