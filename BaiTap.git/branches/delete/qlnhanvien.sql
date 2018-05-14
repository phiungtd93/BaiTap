-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 09:50 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlnhanvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `dayoffdetail`
--

CREATE TABLE `dayoffdetail` (
  `row_number` int(11) NOT NULL,
  `user_cd` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offday_type` int(3) NOT NULL,
  `offdate_salary_type` int(3) DEFAULT NULL,
  `approval_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` int(3) DEFAULT NULL,
  `date_off_from` date DEFAULT NULL,
  `date_off_to` date DEFAULT NULL,
  `reason` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `created_by` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `updated_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_flag` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `language_id` int(6) NOT NULL,
  `library_id` int(6) NOT NULL,
  `number` int(6) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `created_by` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `updated_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_flag` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`language_id`, `library_id`, `number`, `name`, `note`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `deleted_flag`) VALUES
(1, 1, 1, 'Male', '', '2018-05-09 08:46:18.094977', '', NULL, '', NULL, '', b'0'),
(1, 1, 2, 'Female', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 1, 3, 'Unknow', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 2, 1, 'Nghỉ buổi sáng', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 2, 2, 'Nghỉ buổi chiều', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 2, 3, 'Nghỉ 1 ngày', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 2, 4, 'Nghỉ ốm, điều dưỡng', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 2, 5, 'Nghỉ thai sản ', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 3, 1, 'Nghỉ  có lương', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 3, 2, 'Nghỉ không lương', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 4, 1, 'Approved', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 4, 2, 'Unapproval', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 4, 3, 'Reject', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 999, 1, 'Gender', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 999, 2, 'OffDate', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0'),
(1, 999, 3, 'OffDateSalary', '', '0000-00-00 00:00:00.000000', '', NULL, '', NULL, '', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `totaldateoff`
--

CREATE TABLE `totaldateoff` (
  `user_cd` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `total_day` float NOT NULL,
  `day_left` float NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `update_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_flag` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_cd` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ab` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_kn` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ard` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_day` date DEFAULT NULL,
  `gender` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `created_by` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` timestamp(6) NULL DEFAULT NULL,
  `update_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_flag` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_cd`, `user_nm`, `user_ab`, `user_kn`, `password`, `user_ard`, `birth_day`, `gender`, `avatar`, `note`, `created_at`, `created_by`, `update_at`, `update_by`, `deleted_at`, `deleted_by`, `deleted_flag`) VALUES
('DATINS0001', 'Dan Tri', 'dantri', 'tri', '123456', 'da nang', '0000-00-00', 'Mal', 'Image/report-icon.gi', '', '2018-05-10 07:34:00.090556', 'dat', NULL, NULL, NULL, NULL, b'0'),
('DATINS0002', 'Thanh Duy', 'thanhduy', 'duy', '123456', 'da nang', '0000-00-00', 'Mal', '', '', '2018-05-09 09:34:56.314553', 'dat', NULL, NULL, NULL, NULL, b'0'),
('DATINS0003', 'Thanh Kieu', 'thanhkieu', 'kieu', '123456', 'da nang', '0000-00-00', 'Fem', '', '', '2018-05-09 09:34:59.822741', 'dat', NULL, NULL, NULL, NULL, b'0'),
('DATINS0004', 'Huu Dung', 'huudung', 'dung', '123456', 'da nang', '0000-00-00', 'Mal', '', '', '2018-05-09 09:35:02.164579', 'dat', NULL, NULL, NULL, NULL, b'0'),
('DATINS0005', 'Vo Muu', 'vomuu', 'muu', '123456', 'da nang', '0000-00-00', 'Fem', '', '', '2018-05-09 09:35:04.961736', 'dat', NULL, NULL, NULL, NULL, b'0'),
('DATINS0006', 'Van Han', 'vanhan', 'han', '123456', 'da nang', '0000-00-00', 'Mal', '', '', '2018-05-09 09:35:08.591615', 'dat', NULL, NULL, NULL, NULL, b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dayoffdetail`
--
ALTER TABLE `dayoffdetail`
  ADD PRIMARY KEY (`row_number`,`user_cd`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`language_id`,`library_id`,`number`);

--
-- Indexes for table `totaldateoff`
--
ALTER TABLE `totaldateoff`
  ADD PRIMARY KEY (`user_cd`,`year`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_cd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dayoffdetail`
--
ALTER TABLE `dayoffdetail`
  MODIFY `row_number` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
