-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 01:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real`
--

-- --------------------------------------------------------

--
-- Table structure for table `userbook`
--

CREATE TABLE `userbook` (
  `userbook_id` int(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `landlord` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userbook`
--

INSERT INTO `userbook` (`userbook_id`, `name`, `email`, `gender`, `phone`, `property_type`, `location`, `capacity`, `price`, `landlord`, `contact`, `date`, `status`) VALUES
(70, 'Victor Kiome', '31', 'Makutano', '6', '', '', '', '', '', '', '', 'booked'),
(71, 'Olala', '44', 'testing site', '14', '', '', '', '', '', '', '', 'booked'),
(72, 'Olala', 'olala0101@gmail.com', 'Male', '0765432451', '', '', '', '', '', '', '', 'booked'),
(73, 'Olala', 'test010101@gmail.com', 'Male', '0765432451', '', '', '', '', '', '', '', 'booked'),
(74, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked'),
(75, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked'),
(76, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked'),
(77, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked'),
(78, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked'),
(79, 'Olala', 'test01@gmail.com', 'Female', '0765432451', '', '', '', '', '', '', '', 'booked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userbook`
--
ALTER TABLE `userbook`
  ADD PRIMARY KEY (`userbook_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userbook`
--
ALTER TABLE `userbook`
  MODIFY `userbook_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
