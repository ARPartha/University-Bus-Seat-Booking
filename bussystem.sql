-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2019 at 10:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bussystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE `bus_info` (
  `BusNo` varchar(20) NOT NULL,
  `Route` text,
  `Strt_time` time DEFAULT NULL,
  `BusID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`BusNo`, `Route`, `Strt_time`, `BusID`) VALUES
('4036', 'Shaymoli', '14:00:00', 16),
('4036', 'Kollanpur', '14:00:00', 17),
('4036', 'Technical', '14:00:00', 18),
('4036', 'Mirpur 1', '14:00:00', 19),
('4036', 'Mirpur 10', '14:00:00', 20),
('4036', 'Kalshi', '14:00:00', 21),
('3126', 'Sciencelab', '16:00:00', 28),
('3126', 'Shahbag', '16:00:00', 29),
('3126', 'Kakrail', '16:00:00', 30),
('3126', 'Shantinagar', '16:00:00', 31),
('3126', 'Motijhil', '16:00:00', 32),
('3126', 'Gulistan', '16:00:00', 33),
('4036', 'Shaymoli', '16:00:00', 34),
('2129', 'Kollanpur', '16:00:00', 35),
('2129', 'Technical', '16:00:00', 36),
('2129', 'Mirpur 1', '16:00:00', 37),
('2129', 'Mirpur 10', '16:00:00', 38),
('2129', 'Kalshi', '16:00:00', 39),
('5092', 'Sciencelab', '14:00:00', 40),
('5092', 'Shahbag', '14:00:00', 41),
('5092', 'Kakrail', '14:00:00', 42),
('5092', 'Shantinagar', '14:00:00', 43),
('5092', 'Motijhil', '14:00:00', 44),
('5092', 'Gulistan', '14:00:00', 45),
('9950', 'Sciencelab', '15:15:00', 46),
('9950', 'Shahbag', '15:15:00', 47),
('9950', 'Kakrail', '15:15:00', 48),
('9950', 'Shantinagar', '15:15:00', 49),
('9950', 'Motijhil', '15:15:00', 50),
('9950', 'Gulistan', '15:15:00', 51),
('3590', 'Bonani', '14:00:00', 52),
('3590', 'Bissho road', '14:00:00', 53),
('3590', 'Airport', '14:00:00', 54),
('3590', 'Uttara', '14:00:00', 55),
('3590', 'Abdullahpur', '14:00:00', 56),
('3590', 'Mohakhali', '14:00:00', 57),
('3590', 'Bijoy Soroni', '14:00:00', 58),
('4215', 'Bonani', '15:30:00', 59),
('4215', 'Bissho road', '15:30:00', 60),
('4215', 'Airport', '15:30:00', 61),
('4215', 'Uttara', '15:30:00', 62),
('4215', 'Abdullahpur', '15:30:00', 63),
('4215', 'Mohakhali', '15:30:00', 64),
('4215', 'Bijoy Soroni', '15:30:00', 65),
('6025', 'Bonani', '14:00:00', 66),
('6025', 'Gulshan 2', '14:00:00', 67),
('6025', 'Gulshan 1', '14:00:00', 68),
('6025', 'Notunbazar', '14:00:00', 69),
('6025', 'Rampura', '14:00:00', 70),
('6025', 'Mohakhali', '14:00:00', 71),
('6025', 'Bijoy Soroni', '14:00:00', 72),
('3021', 'Bonani', '14:00:00', 73),
('3021', 'Gulshan 2', '14:00:00', 74),
('3021', 'Gulshan 1', '14:00:00', 75),
('3021', 'Notunbazar', '14:00:00', 76),
('3021', 'Rampura', '14:00:00', 77),
('3021', 'Mohakhali', '14:00:00', 78),
('3021', 'Bijoy Soroni', '14:00:00', 79),
('7025', 'Bonani', '16:15:00', 80),
('7025', 'Gulshan 2', '16:15:00', 81),
('7025', 'Gulshan 1', '16:15:00', 82),
('7025', 'Notunbazar', '16:15:00', 83),
('7025', 'Rampura', '16:15:00', 84),
('7025', 'Mohakhali', '16:15:00', 85),
('7025', 'Bijoy Soroni', '16:15:00', 86);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `serial` int(11) NOT NULL,
  `seatno` varchar(50) DEFAULT NULL,
  `busno` varchar(50) DEFAULT NULL,
  `studentid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`serial`, `seatno`, `busno`, `studentid`) VALUES
(10, 'A1', '3590', '162158222'),
(11, 'A2', '3590', '162158222'),
(12, 'B1', '3590', '162158222'),
(13, 'B2', '4215', '162158222'),
(14, 'C3', '4215', '162158222'),
(15, 'B3', '4215', '162158217');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`ID`, `Name`, `contact`, `Email`, `password`) VALUES
('162158217', 'Tonulika', '123456789', 'fsff@gmail.com', '0147852'),
('162158222', 'Pavel', '123456789', 'fsff@gmail.com', '654123'),
('162158228', 'Afnan Farjana', '01951669661', 'abcd@gmail.com', '12345'),
('162158231', 'Rabbi', '123456789', 'fsff@gmail.com', '95123'),
('162158242', 'Shanjida', '123456789', 'qwert@gmail.com', '987456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_info`
--
ALTER TABLE `bus_info`
  ADD PRIMARY KEY (`BusID`),
  ADD KEY `BusNo` (`BusNo`) USING BTREE;

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`serial`),
  ADD KEY `busno` (`busno`),
  ADD KEY `studentid` (`studentid`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_info`
--
ALTER TABLE `bus_info`
  MODIFY `BusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`busno`) REFERENCES `bus_info` (`BusNo`),
  ADD CONSTRAINT `seat_ibfk_2` FOREIGN KEY (`studentid`) REFERENCES `student_info` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
