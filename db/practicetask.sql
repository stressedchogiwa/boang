-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 11:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practicetask`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(11) NOT NULL,
  `fk_uid` int(11) NOT NULL COMMENT 'id in tbl_users',
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `job_discipline` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinytext NOT NULL DEFAULT '0' COMMENT '0 - disabled | 1 - enabled',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `fk_uid`, `first_name`, `middle_name`, `last_name`, `address`, `job_discipline`, `email`, `status`, `created_at`) VALUES
(1, 44, 'Elijah', 'Meghan Heath', 'Fox', 'Ea adipisci deleniti', 'coruqy@mailinator.com', 'vukehymu@mailinator.com', '1', '2022-10-10 03:00:03'),
(2, 45, 'Otto', 'Galvin Wagner', 'Duncan', 'In in sint officiis ', 'tozosygam@mailinator.com', 'vagidyzix@mailinator.com', '0', '2022-10-10 03:01:33'),
(3, 46, 'Melanie', 'Alfreda Rodgers', 'Lane', 'Occaecat consequuntu', 'kilor@mailinator.com', 'vuteta@mailinator.com', '0', '2022-10-10 03:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_materials`
--

CREATE TABLE `tbl_materials` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_materials`
--

INSERT INTO `tbl_materials` (`id`, `file_name`, `material_name`, `created_at`) VALUES
(1, 'MEDSTAR_HEALTHCARE_STAFFING-101.pdf', 'Testicles', '2022-10-10 08:09:37'),
(2, 'STUDENT_ENROLLMENT_FORM_+-1.pdf', 'morning dew', '2022-10-10 09:06:14'),
(3, 'ID_Form_fillable.pdf', 'testicles 3', '2022-10-10 09:06:41'),
(4, 'STUDENT_ENROLLMENT_FORM_+-2.pdf', 'testicles 4', '2022-10-10 09:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 1 COMMENT '1 - admin | 2 - employee',
  `user_status` int(11) NOT NULL DEFAULT 0 COMMENT '0 - disabled | 1 - enabled'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `fullname`, `username`, `password`, `user_type`, `user_status`) VALUES
(36, 'test', 'test', 'test', 1, 1),
(37, 'test1', 'test1', 'test1', 1, 1),
(38, 'test3', 'test3', 'test3', 1, 1),
(39, 'test4', 'test4', 'test4', 1, 1),
(40, 'Test', 'test', 'test', 1, 1),
(41, 'dsa', 'dasd', 'safdasd', 1, 1),
(42, 'Jonas Kenyon Fuller Chambers', 'dokudawiru', 'Pa$$w0rd!', 2, 1),
(43, 'Ethan Nigel Mclean Walters', 'cywob', 'Pa$$w0rd!', 2, 1),
(44, 'Elijah Meghan Heath Fox', 'rogisyvalu', 'Pa$$w0rd!', 2, 1),
(45, 'Otto Galvin Wagner Duncan', 'mepuwepic', 'Pa$$w0rd!', 2, 0),
(46, 'Melanie Alfreda Rodgers Lane', 'gutyvosi', 'Pa$$w0rd!', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`id`, `user_id`, `email`, `address`) VALUES
(1, 1, 'eduwow@proweaver.net', 'test address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_materials`
--
ALTER TABLE `tbl_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_materials`
--
ALTER TABLE `tbl_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
