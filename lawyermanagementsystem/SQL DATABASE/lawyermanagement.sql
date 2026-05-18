-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2024 at 10:24 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `administrator_id` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`administrator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `city`, `address`) VALUES
('Admin010101', 'Dhaka', 'Dhanmondi 32, dhaka -1212');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `lawyer_id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `case_id` int NOT NULL AUTO_INCREMENT,
  `case_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `case_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alternate_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `case_type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `case_subtype` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `case_number_filing` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `registration_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `crn_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `filling_date` date DEFAULT NULL,
  `first_hearing_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lawyer_id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`case_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` varchar(20) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `document_id` int NOT NULL AUTO_INCREMENT,
  `case_id` int DEFAULT NULL,
  `document_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `document_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`document_id`),
  KEY `case_id` (`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int NOT NULL AUTO_INCREMENT,
  `case_id` int DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`image_id`),
  KEY `case_id` (`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `invoiceno` int NOT NULL AUTO_INCREMENT,
  `invoicedate` date NOT NULL,
  `cname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0850_ai_ci NOT NULL,
  `caddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0850_ai_ci NOT NULL,
  `ccity` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0850_ai_ci NOT NULL,
  `s1name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0850_ai_ci NOT NULL,
  `s1price` decimal(10,2) NOT NULL,
  `s2name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0850_ai_ci NOT NULL,
  `s2price` decimal(10,2) NOT NULL,
  `shipdescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0850_ai_ci NOT NULL,
  `shipamount` decimal(10,2) NOT NULL,
  `tdescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0850_ai_ci NOT NULL,
  `tamount` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `lawyer_id` varchar(20) NOT NULL,
  PRIMARY KEY (`invoiceno`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0850_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

DROP TABLE IF EXISTS `lawyer`;
CREATE TABLE IF NOT EXISTS `lawyer` (
  `lawyer_id` varchar(20) NOT NULL,
  `contact_Number` varchar(15) NOT NULL,
  `university_College` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `passing_year` varchar(100) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `practise_Length` varchar(100) NOT NULL,
  `case_handle` varchar(500) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`lawyer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lclient`
--

DROP TABLE IF EXISTS `lclient`;
CREATE TABLE IF NOT EXISTS `lclient` (
  `c_id` INT AUTO_INCREMENT PRIMARY KEY,
  `f_name` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `m_name` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `l_name` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` ENUM('Male','Female','Other') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alternate_no` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `country` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `state` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city_id` INT NOT NULL,
  `reference_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reference_mobile` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lawyer_id` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task_subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `related` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `task_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `lawyer_id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` varchar(20) NOT NULL,
  `first_Name` varchar(100) NOT NULL,
  `last_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `first_Name`, `last_Name`, `email`, `password`, `status`, `role`) VALUES
('Admin010101', 'admin', 'admin', 'admin@gmail.com', 'admin', 'Active', 'Admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `cases` (`case_id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `cases` (`case_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
