-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 07:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(15) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `house_id` int(11) NOT NULL,
  `house_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `rent_cost` varchar(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `location_description` text NOT NULL,
  `max_capacity` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`house_id`, `house_type`, `image`, `rent_cost`, `location`, `location_description`, `max_capacity`, `name`, `contact`, `status`) VALUES
(32, 'House', 'real7.jpg', 'ksh 120,000', 'Kianjai', 'Good', '4 Rooms', 'Landlady', 0, 'Available'),
(34, 'House', 'real6.jpg', 'Ksh 400,000', 'Nyeri', 'Best', '10 Rooms', 'Landlord', 0, 'Settled'),
(45, 'Office', 'receptionists-5975962_1920.jpg', '96000', 'Thika', 'Alocated along thika Highway', '4', 'Olala', 1234567, 'Settled'),
(46, 'Apartments', '9188.jpg', '10000', 'Nairobi, Kenya', 'some place cool and lovely', 'Nairobi', 'Billy Okeyo', 712345678, 'Added'),
(47, 'Apartments House', '530368.jpg', '10000', 'Nairobi, Kenya', 'some place cool and lovely', 'Nairobi', 'Billy Okeyo', 712345678, 'Settled'),
(48, 'Apartments', '9188.jpg', '10000', 'Nairobi, Kenya', 'some place cool and lovely', 'Nairobi', 'Billy Okeyo', 712345678, 'Added'),
(49, 'Apartments', 'wp4364764.jpg', '6000', 'Nairobi, Kenya', 'some place cool and lovely', 'Nairobi', 'Billy Okeyo', 712345678, 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `landlord_id` int(11) NOT NULL,
  `l_username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`landlord_id`, `l_username`, `email`, `fName`, `phonenumber`, `gender`, `location`, `password`) VALUES
(8, 'kiome', 'vic@gmail.com', 'kIOME VIC', '0733223321', 'Male', 'Makutano', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'blairman', 'blairman001@gmail.com', 'Tony Blair', '0715096908', '', 'Kisumu City', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'blair', 'ddghg@gmail.com', 'tony', '45655', 'Male', 'nchiru', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'Vic', 'vic@gmail.com', 'Victor Kiome', '075354256', 'Male', 'Meru', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'test', 'test01@gmail.com', 'Victor Olala', '0716311660', 'Male', 'Nairobi', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `message`, `name`, `email`, `phone`) VALUES
(2, 'Hey Admin, Iam in need of some houses please.', 'Tony Blair', 'blairman001@gmail.com', 715096908),
(3, 'Hey Admin, Register me to the system', 'Victor Kiome', 'kiome@gmail.com', 722334455),
(4, 'I need a property, I am from USA.', 'Tony', 'blairman001@gmail.com', 715096908),
(5, 'i need a property', 'vitalis', 'vitalis@gmail.com', 715096908);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `house_id` int(11) NOT NULL,
  `house_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `rent_cost` varchar(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `location_description` text NOT NULL,
  `max_capacity` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`house_id`, `house_type`, `image`, `rent_cost`, `location`, `location_description`, `max_capacity`, `status`) VALUES
(2, 'House', 'real11.jpg', '$200', 'Chuka', 'A very good place', '4 Rooms', 'Added'),
(3, 'House', 'real11.jpg', '$400', 'Kisumu', 'Kisumu is very cool with persistent cool breeze', '6 Rooms', 'Added'),
(4, 'House', 'smarty.jpg', '$200', 'Meru', 'This house is very good', '2 Rooms', 'Added'),
(5, 'House', 'real11.jpg', '678', 'Nairobi', 'Around Kitengela', '4 Bedrooms', 'Added'),
(6, 'Appartment', 'smarty.jpg', '123', 'Nairobi', 'Along Karen Nairobi', '5 Rooms', 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `email`, `id_no`, `phone`, `username`, `password`, `location`, `gender`) VALUES
(6, 'Victor Kiome', 'vic@gmail.com', 66554433, 744332233, 'victor', 'e10adc3949ba59abbe56e057f20f883e', 'Chuka', 'Male'),
(10, 'Tony Blair', 'blairtony2014@gmail.com', 32417133, 715096908, 'blairman', '81dc9bdb52d04dc20036dbd8313ed055', 'Kisumu City', 'Male'),
(11, 'Gabu Ouma', 'gabu@gmail.com', 0, 712345673, 'gabu', '81dc9bdb52d04dc20036dbd8313ed055', 'Nchiru', 'Male'),
(12, 'Vitalis Mugambi', 'vitalis@gmail.com', 0, 715470564, 'mugambi', '81dc9bdb52d04dc20036dbd8313ed055', 'Meru, Kenya', 'Male'),
(13, 'Vitalis', 'vitalis@gmail.com', 0, 711111111, 'vitalis', '81dc9bdb52d04dc20036dbd8313ed055', 'meru', 'Male'),
(15, 'Test', 'test@gmail.com', 35229076, 716311660, 'test01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Thika', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `userbook`
--

CREATE TABLE `userbook` (
  `userbook_id` int(15) NOT NULL,
  `house_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
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
  `status` varchar(100) DEFAULT NULL,
  `approved_by` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userbook`
--

INSERT INTO `userbook` (`userbook_id`, `house_id`, `user_id`, `name`, `email`, `gender`, `phone`, `property_type`, `location`, `capacity`, `price`, `landlord`, `contact`, `date`, `status`, `approved_by`) VALUES
(70, 0, 0, 'Victor Kiome', '31', 'Makutano', '6', '', '', '', '', '', '', '', 'booked', NULL),
(71, 0, 0, 'Olala', '44', 'testing site', '14', '', '', '', '', '', '', '', 'booked', NULL),
(72, 0, 0, 'Olala', 'olala0101@gmail.com', 'Male', '0765432451', '', '', '', '', '', '', '', 'booked', NULL),
(73, 0, 0, 'Olala', 'test010101@gmail.com', 'Male', '0765432451', '', '', '', '', '', '', '', 'booked', NULL),
(74, 0, 0, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked', NULL),
(75, 0, 0, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked', NULL),
(76, 0, 0, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked', NULL),
(77, 0, 0, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked', NULL),
(78, 0, 0, 'Olala', 'test01@gmail.com', '', '0765432451', '', '', '', '', '', '', '', 'booked', NULL),
(79, 0, 0, 'Olala', 'test01@gmail.com', 'Female', '0765432451', '', '', '', '', '', '', '', 'booked', NULL),
(80, 47, 0, 'Olala', 'test01@gmail.com', 'Male', '0765432451', '', '', '', '', '', '', '2021/06/22', 'Settled', 'admin'),
(81, 45, 0, 'Olala', 'test01@gmail.com', 'Female', '0765432451', '', 'Nyeri', '10 Rooms', 'Ksh 400,000', 'Landlord', '0', '2021/06/22', 'Settled', NULL),
(82, 34, 0, 'Olala', 'test01@gmail.com', '', '0765432451', 'House', 'Nyeri', '10 Rooms', 'Ksh 400,000', 'Landlord', '0', '2021/06/22', 'Settled', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idnumber` int(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `logout` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `idnumber`, `phone`, `pass`, `logout`) VALUES
(1, '', 'olalavictor01@gmail.com', 33229076, '0716311660', '', NULL),
(2, 'olalavictor01@gmail.com', 'olalavictor01@gmail.com', 33229076, '+254716311660', '', NULL),
(3, 'Olala', 'test01@gmail.com', 33229076, '0765432451', '', NULL),
(4, 'Olala', 'test01@gmail.com', 33229076, '0765432451', '123456', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`landlord_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userbook`
--
ALTER TABLE `userbook`
  ADD PRIMARY KEY (`userbook_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `landlord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userbook`
--
ALTER TABLE `userbook`
  MODIFY `userbook_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
