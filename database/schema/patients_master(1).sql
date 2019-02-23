-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 11:14 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
-- Table structure for table `patients_master`
--

CREATE TABLE `patients_master` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_age` int(11) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_city` varchar(200) NOT NULL,
  `p_blood_group` varchar(200) NOT NULL,
  `p_fam_doc` varchar(200) NOT NULL,
  `p_physical_status` varchar(200) NOT NULL,
  `p_mental_status` varchar(200) NOT NULL,
  `p_iq` int(11) DEFAULT NULL,
  `p_phone` varchar(200) NOT NULL,
  `p_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients_master`
--

INSERT INTO `patients_master` (`p_id`, `p_name`, `p_age`, `p_address`, `p_city`, `p_blood_group`, `p_fam_doc`, `p_physical_status`, `p_mental_status`, `p_iq`, `p_phone`, `p_email`) VALUES
(1, 'Vivek', 20, 'Asha Angan', 'Mumbai', 'B +ve', 'Karwa', 'physically_normal', 'mentally_challenged', NULL, '9930838982', 'vivekiyer98@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients_master`
--
ALTER TABLE `patients_master`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients_master`
--
ALTER TABLE `patients_master`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
