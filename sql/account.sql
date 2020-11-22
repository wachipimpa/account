-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2020 at 06:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bank_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bank_cratedate` date NOT NULL,
  `bank_trash` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_account`
--

CREATE TABLE `book_account` (
  `bc_id` int(11) NOT NULL,
  `bc_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bc_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bc_doc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bc_createdate` date NOT NULL,
  `bc_trash` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chart_account`
--

CREATE TABLE `chart_account` (
  `acc_id` int(11) NOT NULL,
  `acc_code` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `acc_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_createdate` date NOT NULL,
  `acc_trash` int(1) NOT NULL,
  `acc_mode` int(11) NOT NULL,
  `acc_detail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comp_user` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `comp_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comp_serial_tax` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comp_address` text COLLATE utf8_unicode_ci NOT NULL,
  `comp_tax` int(11) NOT NULL,
  `comp_decimal` int(11) NOT NULL,
  `comp_createdate` date NOT NULL,
  `comp_trash` int(1) NOT NULL,
  `comp_imgpath` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `department_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_trash` int(1) NOT NULL,
  `department_createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `book_account`
--
ALTER TABLE `book_account`
  ADD PRIMARY KEY (`bc_id`);

--
-- Indexes for table `chart_account`
--
ALTER TABLE `chart_account`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_account`
--
ALTER TABLE `book_account`
  MODIFY `bc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chart_account`
--
ALTER TABLE `chart_account`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
