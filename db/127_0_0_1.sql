-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 02:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plus_care1`
--
CREATE DATABASE IF NOT EXISTS `plus_care1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `plus_care1`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `p_id` int(5) NOT NULL,
  `P_name` varchar(50) NOT NULL,
  `P_no` bigint(10) NOT NULL,
  `Age` int(5) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Time` time NOT NULL,
  `Symptoms` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_name` varchar(50) DEFAULT NULL,
  `Department_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_name`, `Department_id`) VALUES
('Eye', 1),
('Cardiology', 2),
('Gynaecology', 3),
('Orthopedic', 4),
('dev1', 22);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_id` int(5) NOT NULL,
  `D_name` varchar(50) NOT NULL,
  `Doctor_mobileNo` bigint(10) NOT NULL,
  `Birthdate` date NOT NULL,
  `Age` int(5) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Blood_group` varchar(50) NOT NULL,
  `Addharno` varchar(15) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Specilization` varchar(50) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_id`, `D_name`, `Doctor_mobileNo`, `Birthdate`, `Age`, `Language`, `Email`, `Blood_group`, `Addharno`, `City`, `Pincode`, `Address`, `Department`, `Specilization`, `Experience`, `Photo`) VALUES
(1, 'ahil', 131242141, '2002-10-31', 21, 'english', 'ahil@gmail.com', 'ob', '2147483647', 'sur', 363001, 'fvfebb', 'eye', 'wdsd', 'wdsdqw', 'hello.jpg'),
(3, 'ahil', 214232323, '0024-12-31', 2, 'welpmflwm', 'kdmwemfowam', 'mefmesgkopek', '0', 'efmemkfperk', 54634, 'lkremgmeorgk', 'mwefmfofmo', 'mweaffko', 'wqkefmwolek', 'doctor/module_table_bottom.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `G_id` int(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `File` varchar(50) NOT NULL,
  `U_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `P_id` int(5) NOT NULL,
  `P_name` varchar(50) NOT NULL,
  `Mobil_no` bigint(10) NOT NULL,
  `Age` int(5) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Blood_group` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Pin_code` bigint(15) NOT NULL,
  `Dob` varchar(50) NOT NULL,
  `u_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`P_id`, `P_name`, `Mobil_no`, `Age`, `gender`, `Email_id`, `Blood_group`, `Address`, `City`, `Pin_code`, `Dob`, `u_id`) VALUES
(1, 'Alish', 3456789012, 25, 'Female', 'alish@example.com', 'B+', '456 Main Street', 'New York', 12345, '1998-03-15', 3),
(2, 'Ayan', 4567890123, 37, 'Male', 'ayan@example.com', 'O-', '789 Elm Street', 'Los Angeles', 67890, '1986-07-22', 4),
(3, 'Rishit', 5678901234, 48, 'Female', 'rishit@example.com', 'AB+', '123 Oak Street', 'Chicago', 54321, '1975-12-01', 5),
(4, 'Jaydeep', 6789012345, 29, 'Male', 'jaydeep@example.com', 'A-', '321 Maple Street', 'Houston', 98765, '1992-06-05', 6),
(5, 'Yuvraj', 7890123456, 29, 'Male', 'yuvraj@example.com', 'A-', '321 Maple Street', 'Houston', 98765, '1992-06-05', 7);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `U_id` int(5) NOT NULL,
  `E-mail_id` varchar(50) NOT NULL,
  `Massage` varchar(100) NOT NULL,
  `D_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`U_id`, `E-mail_id`, `Massage`, `D_id`) VALUES
(1, 'sujal.@email.com', 'Need to reschedule my appointment to next week.', 4),
(2, 'shalin.@email.com', 'I\'m experiencing some side effects from my medication.', 2),
(3, 'niher.@email.com', 'Can I request an earlier appointment time?', 6),
(4, 'darshan.@email.com', 'My child\'s fever hasn\'t gone down despite the medication.', 3),
(5, 'arman.@email.com', 'I need to cancel my appointment due to a family emergency.', 5),
(6, 'vivek.@email.com', 'I\'m interested in scheduling a consultation for a potential surgery.', 1),
(7, 'shalin.@email.com', 'I need to refill my prescription, can you please assist?', 2),
(8, 'niher.@email.com', 'My insurance provider has changed, do I need to update my information?', 6),
(9, 'sujal.@email.com', 'I\'m experiencing some pain in my lower back, can I schedule an appointment?', 4),
(10, 'kapil.@email.com', 'I need a referral for a specialist, can you please provide?', 10);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `S_id` int(5) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Doctor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`S_id`, `Date`, `Time`, `Doctor_id`) VALUES
(3, '2023-02-01', '13:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_id` int(10) NOT NULL,
  `U_name` varchar(100) DEFAULT NULL,
  `E_mail` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `U_type` varchar(100) DEFAULT NULL,
  `Phone_no` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_id`, `U_name`, `E_mail`, `password`, `U_type`, `Phone_no`) VALUES
(1, 'Renish', 'renish@example.com', 'password1', 'admin', 1234567890),
(2, 'Jainam', 'jainam@example.com', 'password2', 'admin', 2345678901),
(3, 'Alish', 'alish@example.com', 'password3', 'patient', 3456789012),
(4, 'Ayan', 'ayan@example.com', 'password4', 'patient', 4567890123),
(5, 'Rishit', 'rishit@example.com', 'password5', 'patient', 5678901234),
(6, 'Jaydeep', 'jaydeep@example.com', 'password6', 'patient', 6789012345),
(7, 'Yuvraj', 'yuvraj@example.com', 'password7', 'patient', 7890123456),
(8, ' Dr.Vivek', 'vivek@example.com', 'password8', 'doctor', 8901234567),
(9, 'Dr.Shalin', 'shalin@example.com', 'password9', 'doctor', 9012345678),
(10, 'Dr.Darshan', 'darshan@example.com', 'password10', 'doctor', 1234567895),
(11, 'Dr.Sujal', 'sujal@example.com', 'password11', 'doctor', 1233456789),
(12, 'Dr.Arman', 'arman@example.com', 'password12', 'doctor', 2345678909),
(13, 'Dr.Niher', 'niher@example.com', 'password13', 'doctor', 3456578493),
(14, 'Dr.Ashish', 'ashish@example.com', 'password14', 'doctor', 4566743456),
(15, 'Dr.Priyansh', 'priyansh@example.com', 'password15', 'doctor', 5678901234),
(16, 'Dr.Hardik', 'hardik@example.com', 'password16', 'doctor', 6786785432),
(17, 'Dr.Kapil', 'kapil@example.com', 'password17', 'doctor', 987654321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`G_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`P_id`),
  ADD UNIQUE KEY `Mobil_no` (`Mobil_no`),
  ADD UNIQUE KEY `Email_id` (`Email_id`),
  ADD KEY `fk_uid` (`u_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `fk7` (`U_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `D_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `G_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `S_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`u_id`) REFERENCES `user` (`U_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
