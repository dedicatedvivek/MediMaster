-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 09:18 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medimaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors_master`
--

CREATE TABLE `doctors_master` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(200) NOT NULL,
  `d_address` varchar(200) NOT NULL,
  `d_city` varchar(200) NOT NULL,
  `d_specialisation` varchar(200) NOT NULL,
  `d_medipoints` int(11) NOT NULL,
  `d_phone` int(11) NOT NULL,
  `fo_p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients_master`
--

CREATE TABLE `patients_master` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_add` varchar(200) NOT NULL,
  `p_city` varchar(200) NOT NULL,
  `p_blood_group` varchar(200) NOT NULL,
  `p_fam_doc` varchar(200) NOT NULL,
  `p_physical_status` varchar(200) NOT NULL,
  `p_physical_part` varchar(200) DEFAULT NULL,
  `p_mental_status` varchar(200) NOT NULL,
  `p_ailments` varchar(200) DEFAULT NULL,
  `p_iq` int(11) NOT NULL,
  `p_phone` int(11) NOT NULL,
  `p_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_master`
--
ALTER TABLE `doctors_master`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `patients_master`
--
ALTER TABLE `patients_master`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_master`
--
ALTER TABLE `doctors_master`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients_master`
--
ALTER TABLE `patients_master`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
