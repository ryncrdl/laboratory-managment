-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2025 at 02:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labaratory_management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `m_school_id` int(11) NOT NULL,
  `m_fname` varchar(255) NOT NULL,
  `m_lname` varchar(255) NOT NULL,
  `m_type` varchar(255) NOT NULL,
  `m_department` varchar(255) NOT NULL,
  `year_section` varchar(255) NOT NULL,
  `time_in` varchar(255) NOT NULL,
  `time_out` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `m_school_id`, `m_fname`, `m_lname`, `m_type`, `m_department`, `year_section`, `time_in`, `time_out`) VALUES
(6, 2005, 'ryan', 'test', 'Student', 'BSIT', '1st - A', '11/03/24 01:16 am', '11/03/24 01:17 am'),
(7, 2000, 'Nayr', 'Laid', 'Student', 'BSED', '4th- C', '11/05/24 12:22 am', '11/05/24 12:23 am'),
(8, 2000, 'Nayr', 'Laid', 'Student', 'BSED', '4th- C', '11/12/24 10:05 pm', '11/12/24 10:06 pm'),
(9, 2000, 'Nayr', 'Laid', 'Student', 'BSED', '4th- C', '01/06/25 11:04 pm', '01/06/25 11:09 pm'),
(10, 2005, 'ryan', 'test', 'Student', 'BSIT', '1st - A', '01/12/25 08:00 pm', '01/12/25 10:21 pm'),
(11, 2005, 'ryan', 'test', 'Student', 'BSIT', '1st - A', '01/15/25 11:13 pm', '01/15/25 11:18 pm'),
(12, 2005, 'ryan', 'test', 'Student', 'BSIT', '1st - A', '01/19/25 06:46 pm', '01/19/25 06:51 pm'),
(13, 2005, 'ryan', 'test', 'Student', 'BSIT', '1st - A', '01/21/25 11:45 pm', '01/21/25 11:50 pm'),
(14, 2005, 'ryan', 'test', 'Student', 'BSIT', '1st - A', '01/22/25 09:54 pm', '01/22/25 09:59 pm'),
(15, 2000, 'ryan', 'dsadasdsa', 'Student', 'BSIT', '4th - A', '03/24/25 09:30 pm', '03/24/25 09:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `date_borrow` datetime NOT NULL DEFAULT current_timestamp(),
  `borrowcode` bigint(50) NOT NULL,
  `member_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_assigned` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `time_limit` datetime NOT NULL,
  `date_return` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `date_borrow`, `borrowcode`, `member_id`, `item_id`, `stock_id`, `user_id`, `room_assigned`, `status`, `time_limit`, `date_return`) VALUES
(1, '2017-02-21 11:12:17', 22120170412171, 7, 16, 18, 1, 8, 2, '0000-00-00 00:00:00', '2017-02-21 04:12:47'),
(2, '2017-02-21 11:36:07', 22120170436071, 1, 16, 18, 1, 7, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:33'),
(3, '2017-02-21 11:37:01', 22120170437011, 7, 26, 24, 1, 4, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:31'),
(4, '2017-02-21 11:41:12', 22120170441121, 1, 16, 18, 1, 6, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:31'),
(5, '2017-02-21 11:43:39', 22120170443391, 4, 17, 20, 1, 7, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:33'),
(6, '2017-02-21 11:45:31', 22120170445311, 10, 26, 24, 1, 8, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:32'),
(7, '2017-02-21 11:46:36', 22120170446361, 4, 25, 23, 1, 8, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:31'),
(8, '2017-02-21 11:48:49', 22120170448491, 4, 17, 20, 1, 7, 1, '0000-00-00 00:00:00', NULL),
(9, '2017-02-21 11:50:40', 22120170450401, 10, 18, 21, 1, 7, 1, '0000-00-00 00:00:00', NULL),
(10, '2017-02-21 11:51:30', 22120170451301, 8, 24, 22, 1, 7, 1, '0000-00-00 00:00:00', NULL),
(11, '2017-02-21 11:52:38', 22120170452381, 6, 26, 24, 1, 7, 1, '0000-00-00 00:00:00', NULL),
(12, '2017-02-21 18:48:52', 22120171148521, 4, 16, 18, 1, 7, 1, '0000-00-00 00:00:00', NULL),
(13, '2024-08-07 18:32:58', 807202412322113, 13, 16, 18, 1, 6, 1, '2024-08-10 02:36:00', NULL),
(14, '2024-09-22 17:24:59', 917202404131513, 13, 30, 25, 1, 1, 2, '2024-09-27 09:29:00', '2024-10-20 11:55:32'),
(15, '2024-09-22 17:25:08', 917202404201413, 13, 30, 25, 1, 1, 2, '2024-09-27 09:29:00', '2024-10-20 11:55:31'),
(16, '2024-10-20 17:54:31', 1020202411515013, 13, 32, 26, 1, 1, 2, '2024-10-21 05:51:00', '2024-10-20 11:55:05'),
(17, '2024-10-20 17:58:26', 1020202411565813, 13, 32, 26, 1, 1, 0, '2024-10-21 05:56:00', NULL),
(18, '2025-01-06 23:05:07', 106202504044713, 13, 33, 27, 1, 1, 0, '2025-01-27 11:04:00', NULL),
(19, '2025-01-06 23:05:07', 106202504044713, 13, 34, 28, 1, 1, 0, '2025-01-27 11:04:00', NULL),
(20, '2025-01-06 23:07:48', 106202504074313, 13, 34, 28, 1, 1, 0, '2025-01-27 11:04:00', NULL),
(21, '2025-01-06 23:11:09', 917202404201413, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(22, '2025-01-06 23:11:36', 917202404131513, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(23, '2025-01-06 23:12:42', 1020202411515013, 13, 32, 26, 1, 1, 1, '2024-10-21 05:51:00', NULL),
(24, '2025-01-06 23:13:05', 1020202411565813, 13, 32, 26, 1, 1, 1, '2024-10-21 05:56:00', NULL),
(25, '2025-01-06 23:22:00', 106202504044713, 13, 33, 27, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(26, '2025-01-06 23:22:00', 106202504044713, 13, 34, 28, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(27, '2025-01-06 23:22:21', 106202504074313, 13, 34, 28, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(28, '2025-01-06 23:22:45', 917202404131513, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(29, '2025-01-06 23:23:25', 917202404201413, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(30, '2025-01-06 23:23:44', 1020202411515013, 13, 32, 26, 1, 1, 1, '2024-10-21 05:51:00', NULL),
(31, '2025-01-06 23:23:56', 1020202411565813, 13, 32, 26, 1, 1, 1, '2024-10-21 05:56:00', NULL),
(32, '2025-01-06 23:24:57', 106202504044713, 13, 33, 27, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(33, '2025-01-06 23:24:57', 106202504044713, 13, 34, 28, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(34, '2025-01-06 23:25:52', 106202504074313, 13, 34, 28, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(35, '2025-01-06 23:26:34', 917202404131513, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(36, '2025-01-06 23:26:49', 917202404201413, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(37, '2025-01-06 23:27:04', 1020202411515013, 13, 32, 26, 1, 1, 1, '2024-10-21 05:51:00', NULL),
(38, '2025-01-06 23:27:48', 1020202411565813, 13, 32, 26, 1, 1, 1, '2024-10-21 05:56:00', NULL),
(39, '2025-01-06 23:28:51', 106202504044713, 13, 33, 27, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(40, '2025-01-06 23:28:51', 106202504044713, 13, 34, 28, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(41, '2025-01-06 23:29:49', 106202504074313, 13, 34, 28, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(42, '2025-01-06 23:30:08', 917202404131513, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(43, '2025-01-06 23:30:25', 917202404201413, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(44, '2025-01-06 23:30:53', 1020202411515013, 13, 32, 26, 1, 1, 1, '2024-10-21 05:51:00', NULL),
(45, '2025-01-06 23:32:38', 1020202411565813, 13, 32, 26, 1, 1, 1, '2024-10-21 05:56:00', NULL),
(46, '2025-01-06 23:33:16', 917202404131513, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(47, '2025-01-06 23:33:48', 917202404201413, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(48, '2025-01-06 23:34:21', 917202404131513, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(49, '2025-01-06 23:42:47', 917202404131513, 13, 30, 25, 1, 1, 1, '2024-09-27 09:29:00', NULL),
(50, '2025-01-12 22:27:39', 106202504390313, 13, 34, 28, 1, 1, 1, '2025-01-27 11:04:00', NULL),
(51, '2025-01-12 22:39:36', 112202503391326, 26, 37, 31, 1, 18, 1, '2024-09-18 09:29:00', NULL),
(52, '2025-01-12 22:39:36', 112202503391326, 26, 38, 32, 1, 18, 1, '2024-09-18 09:29:00', NULL),
(53, '2025-01-12 22:41:34', 112202503405226, 26, 37, 31, 1, 18, 1, '2024-09-18 09:29:00', NULL),
(54, '2025-01-12 22:41:34', 112202503405226, 26, 38, 32, 1, 18, 1, '2024-09-18 09:29:00', NULL),
(55, '2025-01-12 22:47:21', 112202503471426, 26, 37, 31, 1, 18, 1, '2024-09-18 09:29:00', NULL),
(56, '2025-01-12 22:47:21', 112202503471426, 26, 38, 32, 1, 18, 1, '2024-09-18 09:29:00', NULL),
(57, '2025-01-12 22:49:16', 112202503490726, 26, 37, 31, 1, 18, 1, '2024-09-18 09:29:00', NULL),
(58, '2025-01-12 22:49:16', 112202503490726, 26, 38, 32, 1, 18, 1, '2024-09-18 09:29:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `e_deviceid` varchar(50) NOT NULL,
  `e_model` varchar(50) NOT NULL,
  `e_category` varchar(50) NOT NULL,
  `e_brand` varchar(50) NOT NULL,
  `e_description` text NOT NULL,
  `e_stock` int(11) NOT NULL,
  `e_stockleft` int(11) NOT NULL,
  `e_type` varchar(50) NOT NULL,
  `e_status` varchar(50) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_inventory`
--

CREATE TABLE `equipment_inventory` (
  `id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_logs`
--

CREATE TABLE `history_logs` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `status_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history_logs`
--

INSERT INTO `history_logs` (`id`, `description`, `table_name`, `status_name`, `user_id`, `user_type`, `date_created`) VALUES
(49, 'add new equipmentSM-922 , Mouse', 'equipment', '', 1, 1, '2017-02-17 13:28:52'),
(50, 'add 2items toSM-922quantity', 'equipment', '', 1, 1, '2017-02-17 13:46:29'),
(51, 'add 2items toSM-9221quantity', 'equipment', '', 1, 1, '2017-02-17 14:15:46'),
(52, 'add new equipment---- , AVR', 'equipment', '', 1, 1, '2017-02-21 11:20:20'),
(53, 'add new equipmentH328C , Projector', 'equipment', '', 1, 1, '2017-02-21 11:24:12'),
(54, 'add new equipmentOM-130006A/K , Keyboard', 'equipment', '', 1, 1, '2017-02-21 11:28:04'),
(55, 'add new equipment---- , Remote', 'equipment', '', 1, 1, '2017-02-21 11:31:19'),
(56, 'add new equipment58E510 , TV', 'equipment', '', 1, 1, '2017-02-21 11:35:07'),
(57, 'add new student', 'client', '', 1, 1, '2024-08-07 09:55:43'),
(58, 'edit client', 'client', '', 1, 1, '2024-08-07 11:11:27'),
(59, 'edit client', 'client', '', 1, 1, '2024-08-07 11:15:19'),
(60, 'edit client', 'client', '', 1, 1, '2024-08-08 19:41:06'),
(61, 'add userdsad', 'user', '', 1, 1, '2024-08-17 22:48:59'),
(62, 'add user1234', 'user', '', 1, 1, '2024-08-17 22:49:11'),
(63, 'edit client', 'client', '', 1, 1, '2024-08-18 00:36:05'),
(64, 'edit client', 'client', '', 1, 1, '2024-08-18 00:37:42'),
(65, 'edit client', 'client', '', 1, 1, '2024-08-18 00:40:20'),
(66, 'edit client', 'client', '', 1, 1, '2024-08-18 00:40:27'),
(67, 'edit client', 'client', '', 1, 1, '2024-08-18 01:04:58'),
(68, 'edit client', 'client', '', 1, 1, '2024-08-18 01:05:34'),
(69, 'edit client', 'client', '', 1, 1, '2024-08-18 01:05:43'),
(70, 'edit client', 'client', '', 1, 1, '2024-08-18 01:06:27'),
(71, 'edit client', 'client', '', 1, 1, '2024-08-18 01:06:48'),
(72, 'edit client', 'client', '', 1, 1, '2024-08-18 01:07:02'),
(73, 'add new equipment1 , Monitor', 'equipment', '', 1, 1, '2024-08-18 01:44:14'),
(74, 'add new equipment1 , Keyboard', 'equipment', '', 1, 1, '2024-10-20 17:37:17'),
(75, 'add new equipment1 , Mouse', 'equipment', '', 1, 1, '2024-10-20 18:02:50'),
(76, 'add new equipment1 , Mouse', 'equipment', '', 1, 1, '2024-10-20 18:02:57'),
(77, 'add new equipment1 , Mouse', 'equipment', '', 1, 1, '2024-10-20 18:03:03'),
(78, 'add new equipment1 , Mouse', 'equipment', '', 1, 1, '2024-10-20 18:03:06'),
(79, 'add new equipmentKeyboard Model , Keyboard', 'equipment', '', 1, 1, '2025-01-12 22:34:35'),
(80, 'add new equipmentMouse Model , Mouse', 'equipment', '', 1, 1, '2025-01-12 22:37:24'),
(81, 'add new equipment12 , Mouse', 'equipment', '', 1, 1, '2025-01-12 23:31:34'),
(82, 'add new equipment1 , Keyboard', 'equipment', '', 1, 1, '2025-01-12 23:32:57'),
(83, 'add new equipment1 , Keyboard', 'equipment', '', 1, 1, '2025-01-12 23:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(5) NOT NULL,
  `i_deviceID` varchar(50) NOT NULL,
  `i_model` varchar(50) NOT NULL,
  `i_category` varchar(50) NOT NULL,
  `i_brand` varchar(50) NOT NULL,
  `i_description` text NOT NULL,
  `i_type` varchar(50) NOT NULL,
  `item_rawstock` int(11) NOT NULL,
  `i_status` int(11) NOT NULL DEFAULT 1,
  `i_mr` varchar(50) NOT NULL,
  `i_price` decimal(10,2) NOT NULL,
  `i_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_inventory`
--

CREATE TABLE `item_inventory` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `inventory_itemstock` int(11) NOT NULL,
  `inventory_status` int(11) NOT NULL,
  `item_remarks` text NOT NULL,
  `date_change` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_stock`
--

CREATE TABLE `item_stock` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `items_stock` int(11) NOT NULL,
  `item_status` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_transfer`
--

CREATE TABLE `item_transfer` (
  `id` int(11) NOT NULL,
  `t_itemID` int(11) NOT NULL,
  `t_roomID` int(11) NOT NULL,
  `t_stockID` int(11) NOT NULL,
  `t_quantity` int(11) NOT NULL,
  `date_transfer` timestamp NOT NULL DEFAULT current_timestamp(),
  `t_status` int(11) NOT NULL DEFAULT 1,
  `personincharge` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `m_school_id` int(11) NOT NULL,
  `m_fname` varchar(50) NOT NULL,
  `m_lname` varchar(50) NOT NULL,
  `m_gender` varchar(10) NOT NULL,
  `m_contact` varchar(15) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_department` varchar(50) NOT NULL,
  `m_year_section` varchar(20) NOT NULL,
  `m_type` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `m_school_id`, `m_fname`, `m_lname`, `m_gender`, `m_contact`, `m_email`, `m_department`, `m_year_section`, `m_type`, `m_password`, `m_status`) VALUES
(27, 2005, 'ryan', 'test', 'Male', '09514900411', 'ryancordial2k22@gmail.com', 'AB', '1st - A', 'Student', '5b582ac6e298340cde3c03be26bc5a9f', 1),
(28, 2000, 'ryan', 'dsadasdsa', 'Male', '09512312312', 'ryancordial.s@gmail.com', 'BSIT', '4th - A', 'Student', '1dfd1c78dc1634b5d12b483a43acc7db', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservation_code` varchar(60) NOT NULL,
  `member_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `reserve_date` varchar(50) DEFAULT NULL,
  `reservation_time` varchar(20) NOT NULL,
  `time_limit` datetime NOT NULL,
  `assign_room` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `remarks` text NOT NULL,
  `r_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_status`
--

CREATE TABLE `reservation_status` (
  `id` int(11) NOT NULL,
  `reservation_code` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `res_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `rm_name` varchar(50) NOT NULL,
  `rm_date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `rm_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `rm_name`, `rm_date_added`, `rm_status`) VALUES
(17, 'Room 101', '2025-01-12 22:38:46', 0),
(18, 'Room 102', '2025-01-12 22:38:46', 0),
(19, 'Room 107', '2025-01-12 22:38:46', 0),
(20, 'Lasquety', '2025-01-12 22:38:46', 0),
(21, 'Study Kiosk', '2025-01-12 22:38:46', 0),
(22, 'SSC Office', '2025-01-12 22:38:46', 0),
(23, 'Faculty Room', '2025-01-12 22:38:46', 0),
(24, 'QAC Director\'s', '2025-01-12 22:38:46', 0),
(25, 'Office Cashier', '2025-01-12 22:38:46', 0),
(26, 'Admin & Property', '2025-01-12 22:38:46', 0),
(27, 'Office Medical Clinic', '2025-01-12 22:38:46', 0),
(28, 'Admission and Registration', '2025-01-12 22:38:46', 0),
(29, 'Office Library', '2025-01-12 22:38:46', 0),
(30, 'Computer Laboratory', '2025-01-12 22:38:46', 0),
(31, 'Gymnasium', '2025-01-12 22:38:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_equipment`
--

CREATE TABLE `room_equipment` (
  `id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `re_quantity` int(11) NOT NULL,
  `stats` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_equipment`
--

INSERT INTO `room_equipment` (`id`, `equipment_id`, `room_id`, `re_quantity`, `stats`) VALUES
(1, 1, 14, 12, 1),
(2, 2, 14, 12, 1),
(3, 3, 14, 12, 1),
(4, 4, 14, 12, 1),
(5, 5, 14, 12, 1),
(6, 6, 14, 12, 1),
(7, 7, 14, 12, 1),
(8, 8, 14, 12, 1),
(9, 1, 14, 10, 1),
(10, 2, 14, 10, 1),
(11, 1, 14, 12, 1),
(12, 2, 14, 12, 1),
(13, 3, 14, 2, 1),
(14, 1, 14, 12, 1),
(15, 2, 14, 10, 1),
(16, 3, 14, 10, 1),
(17, 1, 14, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_reservation`
--

CREATE TABLE `room_reservation` (
  `id` int(11) NOT NULL,
  `reservation_code` varchar(60) NOT NULL,
  `m_school_id` int(11) NOT NULL,
  `reserve_date` varchar(50) NOT NULL,
  `reservation_time` varchar(20) NOT NULL,
  `time_limit` datetime NOT NULL,
  `assign_room` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `r_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_reservation`
--

INSERT INTO `room_reservation` (`id`, `reservation_code`, `m_school_id`, `reserve_date`, `reservation_time`, `time_limit`, `assign_room`, `status`, `remarks`, `r_date`) VALUES
(33, '012220250258411', 1, '2025-01-27', '21:58', '2025-01-28 09:58:00', 'COM LAB', 0, '', '2025-01-22 21:58:41'),
(34, '012220250301001', 1, '2025-01-22', '22:00', '2025-01-28 10:00:00', 'COM LAB', 0, '', '2025-01-22 22:01:00'),
(35, '012220250303332005', 2005, '2025-01-28', '13:03', '2025-01-28 10:03:00', 'COM LAB', 0, '', '2025-01-22 22:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `room_reservation_status`
--

CREATE TABLE `room_reservation_status` (
  `id` int(11) NOT NULL,
  `reservation_code` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `res_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=admin, 2=stafff',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 2=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `type`, `status`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 1, 1),
(2, 'John Doe', 'staff1', 'de9bf5643eabf80f4a56fda3bbb84483', 2, 1),
(3, 'Juan', 'juan', 'f5737d25829e95b9c234b7fa06af8736', 2, 1),
(4, 'Maria Cruz', 'maria', '263bce650e68ab4e23f28263760b9fa5', 2, 1),
(5, 'Pedro Jose', 'pedro', 'd3ce9efea6244baa7bf718f12dd0c331', 2, 1),
(6, 'Administrator 2', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 1, 1),
(7, 'dsad', 'a', '5f039b4ef0058a1d652f13d612375a5b', 0, 1),
(8, '1234', '123', '5f039b4ef0058a1d652f13d612375a5b', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `equipment_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `equipment_inventory`
--
ALTER TABLE `equipment_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Indexes for table `history_logs`
--
ALTER TABLE `history_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_inventory`
--
ALTER TABLE `item_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_stock`
--
ALTER TABLE `item_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_transfer`
--
ALTER TABLE `item_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `equipment_id` (`item_id`);

--
-- Indexes for table `reservation_status`
--
ALTER TABLE `reservation_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_equipment`
--
ALTER TABLE `room_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_reservation`
--
ALTER TABLE `room_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_reservation_status`
--
ALTER TABLE `room_reservation_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipment_inventory`
--
ALTER TABLE `equipment_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_logs`
--
ALTER TABLE `history_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `item_inventory`
--
ALTER TABLE `item_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item_stock`
--
ALTER TABLE `item_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `item_transfer`
--
ALTER TABLE `item_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reservation_status`
--
ALTER TABLE `reservation_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `room_equipment`
--
ALTER TABLE `room_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `room_reservation`
--
ALTER TABLE `room_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `room_reservation_status`
--
ALTER TABLE `room_reservation_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
