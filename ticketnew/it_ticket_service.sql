-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2016 at 08:06 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malwa_operations_arp`
--

-- --------------------------------------------------------

--
-- Table structure for table `it_ticket_service`
--

CREATE TABLE `it_ticket_service` (
  `T_id` int(11) NOT NULL,
  `Assigned_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Proirity` varchar(11) NOT NULL DEFAULT 'low',
  `Status` varchar(11) NOT NULL DEFAULT 'open',
  `ID` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Lab_no` varchar(5) NOT NULL,
  `Pc_no` varchar(10) NOT NULL,
  `Issue` varchar(20) NOT NULL,
  `Issue_decription` varchar(200) NOT NULL,
  `Tech_id` varchar(20) DEFAULT 'Not Assigned',
  `Tech_assigned` datetime NOT NULL,
  `Closed_on` datetime DEFAULT NULL,
  `Closed_by` varchar(20) NOT NULL,
  `Total_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_ticket_service`
--

INSERT INTO `it_ticket_service` (`T_id`, `Assigned_on`, `Proirity`, `Status`, `ID`, `Name`, `Class`, `Email`, `Lab_no`, `Pc_no`, `Issue`, `Issue_decription`, `Tech_id`, `Tech_assigned`, `Closed_on`, `Closed_by`, `Total_time`) VALUES
(107, '2016-03-15 23:22:24', 'low', 'Open', '0862cs121001', 'AAKASH', 'CSE', 'akashvishwakarma777@gmail.com', 'M1', '6', 'Internet', 'browser is not working', 'Not Assigned', '2016-04-01 11:20:42', '2016-04-07 07:48:48', 'T101', '0000-00-00 00:00:00'),
(108, '2016-03-15 23:22:24', 'low', 'Open', '0862cs121001', 'AAKASH', 'CSE', 'akashvishwakarma777@gmail.com', 'M2', '8', 'Internet', 'browser is not working', 'Not Assigned', '2016-04-01 11:30:50', '2016-04-04 11:46:56', 'T101', '0000-00-00 00:00:00'),
(109, '2016-03-15 23:22:24', 'low', 'Open', '0862cs121002', 'Abbas', 'CSE', 'abbas@gmail.com', 'M3', '9', 'Hardware', 'mouse is not working', 'Not Assigned', '2016-04-07 10:23:37', '2016-04-07 10:24:56', 'T101', '0000-00-00 00:00:00'),
(110, '2016-03-15 23:22:24', 'low', 'Open', '0862cs121002', 'Riya', 'CSE', 'ria@gmail.com', 'M1', '20', 'Hardware', 'keyboard', 'Not Assigned', '2016-04-01 11:30:50', '2016-04-03 14:48:08', 'T101', '0000-00-00 00:00:00'),
(111, '2016-03-15 23:22:24', 'low', 'Open', '0862cs121004', 'Aditi', 'CSE', 'aditi@gmail.com', 'M1', '12', 'software', 'turbo C++ is missing', 'Not Assigned', '2016-04-10 14:02:49', '2016-04-07 09:40:05', 'T101', '0000-00-00 00:00:00'),
(112, '2016-03-15 23:22:24', 'low', 'Pending', '0862cs121004', 'Aditi', 'CSE', 'aditi@gmail.com', 'M4', '12', 'software', 'turbo C++ is missing', 'T101', '2016-04-10 14:21:47', '2016-04-10 13:17:32', 'T103', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it_ticket_service`
--
ALTER TABLE `it_ticket_service`
  ADD PRIMARY KEY (`T_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `it_ticket_service`
--
ALTER TABLE `it_ticket_service`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
