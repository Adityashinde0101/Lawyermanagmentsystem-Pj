-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 10:47 AM
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
-- Database: `lawyermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `administrator_id` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `city`, `address`) VALUES
('Admin010101', 'Dhaka', 'Dhanmondi 32, dhaka -1212');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `lawyer_id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `date`, `description`, `client_id`, `lawyer_id`, `status`) VALUES
(14, '2024-02-27', 'xdtgjhntrfgn', 'Client65dc337380f4a', 'Lawyer65dc33078b33d', 'Accepted'),
(15, '2024-02-20', 'xdfhdxfjn', 'Client65dc3cfd32a0f', 'Lawyer65dc3cce3821a', 'Accepted'),
(16, '2024-02-29', 'xruthudybg', 'Client65dc3cfd32a0f', 'Lawyer65e0466573d6c', 'Accepted'),
(17, '2024-03-01', 'udgh', 'Client65dc3cfd32a0f', 'Lawyer65e17611865be', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(11) NOT NULL,
  `case_name` varchar(255) NOT NULL,
  `case_number` varchar(255) NOT NULL,
  `alternate_number` varchar(255) DEFAULT NULL,
  `case_type` varchar(50) NOT NULL,
  `case_subtype` varchar(50) DEFAULT NULL,
  `case_number_filing` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `crn_number` varchar(255) DEFAULT NULL,
  `filling_date` date DEFAULT NULL,
  `first_hearing_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lawyer_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_id`, `case_name`, `case_number`, `alternate_number`, `case_type`, `case_subtype`, `case_number_filing`, `description`, `registration_number`, `crn_number`, `filling_date`, `first_hearing_date`, `created_at`, `updated_at`, `lawyer_id`) VALUES
(8, 'fwfav ', '1', '1252', 'criminal', 'subtype1', '671', 'sertjhmnfg', '65468', '365249', '2024-01-31', '2024-01-29', '2024-02-26 06:50:23', '2024-02-26 06:50:23', 'Lawyer65dc33078b33d'),
(9, 'fwfav ', '1', '1252', 'civil', 'subtype1', '671/', 'ass', '65468', '365249', '2024-02-16', '2024-02-23', '2024-02-28 03:18:17', '2024-02-28 03:18:17', 'Lawyer65dc3cce3821a');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(20) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `contact_number`, `full_address`, `city`, `zip_code`, `image`) VALUES
('Client65dc337380f4a', '7066884294', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116 ', '20240226074507_po.png '),
('Client65dc3cfd32a0f', '1234567912', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116 ', '20240226082549_SYME EME  2 PPT METROLOGY.pptx '),
('Client65e0471ddf6f1', '7066884294', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116 ', '20240229095805_IMG_20221018_214600_733.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL,
  `case_id` int(11) DEFAULT NULL,
  `document_name` varchar(255) NOT NULL,
  `document_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `case_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoiceno` int(11) NOT NULL,
  `invoicedate` date NOT NULL,
  `cname` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `ccity` varchar(100) NOT NULL,
  `s1name` varchar(255) NOT NULL,
  `s1price` decimal(10,2) NOT NULL,
  `s2name` varchar(255) NOT NULL,
  `s2price` decimal(10,2) NOT NULL,
  `shipdescription` varchar(255) NOT NULL,
  `shipamount` decimal(10,2) NOT NULL,
  `tdescription` varchar(255) NOT NULL,
  `tamount` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `lawyer_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoiceno`, `invoicedate`, `cname`, `caddress`, `ccity`, `s1name`, `s1price`, `s2name`, `s2price`, `shipdescription`, `shipamount`, `tdescription`, `tamount`, `total`, `lawyer_id`) VALUES
(1, '2024-02-12', 'Shubham Rahile', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', 'drth', 2000.00, 'dryhrt', 20000.00, 'e56h', 2000.00, 'uyh6tgf', 220000.00, 244000.00, 'Lawyer65dc3cce3821a'),
(2, '2024-02-27', 'Shubham Rahile', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', 'drth', 2000.00, 'dryhrt', 20000.00, 'e56h', 2000.00, 'uyh6tgf', 220000.00, 244000.00, 'Lawyer65dc33078b33d'),
(3, '2024-02-28', 'Shubham Rahile', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', 'drth', 2000.00, 'dryhrt', 20000.00, 'e56h', 2000.00, 'uyh6tgf', 220000.00, 244000.00, 'Lawyer65dc3cce3821a'),
(4, '2024-02-28', 'Aditya Shinde', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', 'First Metting ', 2000.00, 'Finding Task', 20000.00, '', 2000.00, '', 220000.00, 244000.00, 'Lawyer65deb23873620');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
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
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`lawyer_id`, `contact_Number`, `university_College`, `degree`, `passing_year`, `full_address`, `city`, `zip_code`, `practise_Length`, `case_handle`, `speciality`, `image`) VALUES
('Lawyer65dc33078b33d', '7066884294', 'K K Wagh ', 'LLB', '2017', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116', '1-5 years', 'Criminal matter,Civil matter,Writ Jurisdiction,', 'IT Law', '20240226074319_IMG_20221018_214600_733.jpg'),
('Lawyer65dc3cce3821a', '1234567456', 'K K Wagh ', 'LLB', '2000', 'At Adgaon post deoli tal chalisgaon dist jalgaon, At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116', '6-10 years', 'Labour Law,Property Law,Others,', 'Property Law', '20240226082502_po.png'),
('Lawyer65deb23873620', '1234567890', 'K K Wagh Institute of law', 'LLB', '2000', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116', '1-5 years', 'Criminal matter,Civil matter,Writ Jurisdiction,', 'IT Law', '20240228051032_lowyer2.jpg'),
('Lawyer65deb2d5b5edd', '1234567890', 'SNJB college of Law', 'LLM', '2010', 'chalishaon', 'Chalisgaon', '424116', '6-10 years', 'Civil matter,Company law,Commercial matter,', 'Criminal Law', '20240228051309_lowyer.jpg'),
('Lawyer65deb323b3e10', '1234567890', 'K K Wagh Institute of law', 'LLB', '2017', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116', '11-15 years', 'Civil matter,Writ Jurisdiction,Contract law,Construction law,Family Law,', 'Taxation Law', '20240228051427_lowyer1.jpg'),
('Lawyer65deb3dd98aea', '1234567890', 'SNJB college of Law', 'LLM', '2000', 'Kamatwada', 'Nashik', '422232', '11-15 years', 'Contract law,Commercial matter,Construction law,Family Law,Others,', 'Labour Law', '20240228051733_lowyer5.jpg'),
('Lawyer65deb4282d66a', '1234567890', 'K K Wagh Institute of law', 'LLM', '2007', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116', 'Most Senior', 'Criminal matter,Civil matter,Writ Jurisdiction,Commercial matter,Family Law,', 'Taxation Law', '20240228051848_lowyer6.webp'),
('Lawyer65deb47478d80', '1245678901', 'SNJB college of Law', 'LLB', '2018', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116', '1-5 years', 'Construction law,Information Technology,Family Law,Religious Matter,Labour Law,Property Law,', 'Family Law', '20240228052004_lowyer8.jpg'),
('Lawyer65e0466573d6c', '7066884294', 'K K Wagh Institute of law', 'LLB', '2018', 'At Adgaon post deoli tal chalisgaon dist jalgaon, At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116', '11-15 years', 'Civil matter,Writ Jurisdiction,Company law,', 'IT Law', '20240229095501_po.png'),
('Lawyer65e17611865be', '7066884294', 'K K Wagh ', 'LLB', '2014', 'At Adgaon post deoli tal chalisgaon dist jalgaon, At Adgaon post deoli tal chalisgaon dist jalgaon', 'Chalisgaon', '424116', '6-10 years', 'Civil matter,Company law,', 'IT Law', '20240301073041_IMG_20221018_214600_733.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lclient`
--

CREATE TABLE `lclient` (
  `c_id` int(11) NOT NULL,
  `f_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `m_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `l_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `alternate_no` varchar(20) DEFAULT NULL,
  `address` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL,
  `reference_name` varchar(255) DEFAULT NULL,
  `reference_mobile` varchar(20) DEFAULT NULL,
  `lawyer_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lclient`
--

INSERT INTO `lclient` (`c_id`, `f_name`, `m_name`, `l_name`, `gender`, `email`, `mobile`, `alternate_no`, `address`, `country`, `state`, `city_id`, `reference_name`, `reference_mobile`, `lawyer_id`) VALUES
(1, 'Shubham', '', 'Rahile', 'Male', 'sd@gmail.com', '7066884294', '1', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'india', 'maharashtra', 6, 'swapnil', '+917066884294', 'Lawyer65dc33078b33d'),
(2, 'Shubham', '', 'Rahile', 'Male', '', '7066884294', '1', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'india', 'maharashtra', 6, 'swapnil', '+917066884294', 'Lawyer65dc3cce3821a'),
(3, 'Shubham', 'Ambar', 'Rahile', 'Male', 'shubhamrahile31@gmail.com', '7066884294', '', 'At Adgaon post deoli tal chalisgaon dist jalgaon', 'india', 'maharashtra', 6, '', '', 'Lawyer65e0466573d6c');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task_subject` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status1` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `related` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `lawyer_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_subject`, `start_date`, `end_date`, `status1`, `priority`, `related`, `task_description`, `lawyer_id`) VALUES
(7, 'murder ', '2024-02-06', '2024-03-01', 'not_starred', 'medium', 'case', 'gvyyubkjh', 'Lawyer65dc33078b33d'),
(8, 'murder ', '2024-02-07', '2024-02-22', 'in_progress', 'medium', 'case', 'frttuyjfyh', 'Lawyer65dc3cce3821a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` varchar(20) NOT NULL,
  `first_Name` varchar(100) NOT NULL,
  `last_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `first_Name`, `last_Name`, `email`, `password`, `status`, `role`) VALUES
('Admin010101', 'admin', 'admin', 'admin@gmail.com', 'admin', 'Active', 'Admin'),
('Client65dc337380f4a', 'Shubham', 'Rahile', 'user@gmail.com ', '64355 ', 'Active', 'User'),
('Client65dc3cfd32a0f', 'aditya', 'shinde', 'user2@gmail.com ', '08943 ', 'Active', 'User'),
('Client65e0471ddf6f1', 'Shubham', 'Rahile', 'shubhamrahile31@gmail.com ', '01159 ', 'Active', 'User'),
('Lawyer65deb23873620', 'Sanjay', 'Patil', 'sanjay@gmail.com ', '94918 ', 'Active', 'Lawyer'),
('Lawyer65deb323b3e10', 'Prathmesh', 'Sharma', 'prathmesh@gmail.com ', '97170 ', 'Active', 'Lawyer'),
('Lawyer65deb3dd98aea', 'Pritam', 'Pathak', 'pritam@gmail.com ', '81826 ', 'Active', 'Lawyer'),
('Lawyer65deb47478d80', 'Prathibha', 'Patil', 'pratibha@gmail.com ', '18858 ', 'Active', 'Lawyer'),
('Lawyer65e17611865be', 'Shubham', 'Rahile', 'sweety.jachak@ggsf.edu.in ', '99887 ', 'Active', 'Lawyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`administrator_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoiceno`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `lclient`
--
ALTER TABLE `lclient`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoiceno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lclient`
--
ALTER TABLE `lclient`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
