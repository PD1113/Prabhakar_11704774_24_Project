-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 08:30 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `versatile`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_title` text NOT NULL,
  `course_lec1` varchar(100) NOT NULL,
  `course_lec2` varchar(100) NOT NULL,
  `course_lec3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `course_title`, `course_lec1`, `course_lec2`, `course_lec3`) VALUES
(1, 'CSE111', 'Programming with C', 'Build a strong programming foundation by learning C', '', '', ''),
(2, 'CSE112', 'Programming with C++', 'Build a strong programming foundation by learning C++', '', '', ''),
(3, 'CSE113', 'Programming With Java', 'Build a strong programming foundation by learning JAVA', '', '', ''),
(4, 'CSE114', 'Programming with PHP', 'Build a Dynamic Webdite with PHP', '', '', ''),
(5, 'CSE115', 'Web Development Training', 'Learn how to create a website from scratch', '', '', ''),
(6, 'CSE116', 'Programming with Python', 'Build a fantasy cricket game using Python language', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stdcart`
--

CREATE TABLE `stdcart` (
  `cart_id` int(11) NOT NULL,
  `cart_course_code` varchar(250) NOT NULL,
  `cart_course_name` varchar(250) NOT NULL,
  `cart_course_title` varchar(250) NOT NULL,
  `std_id` int(11) NOT NULL,
  `std_email` varchar(250) NOT NULL,
  `std_phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdcart`
--

INSERT INTO `stdcart` (`cart_id`, `cart_course_code`, `cart_course_name`, `cart_course_title`, `std_id`, `std_email`, `std_phone`) VALUES
(1, 'CSE111', 'Programming with C', 'Build a strong programming foundation by learning C', 2, 'viraj123@gmail.com', '8360886874'),
(2, 'CSE112', 'Programming with C++', 'Build a strong programming foundation by learning C++', 2, 'viraj123@gmail.com', '8360886874'),
(3, 'CSE111', 'Programming with C', 'Build a strong programming foundation by learning C', 1, 'prabhakar392000@gmail.com', '9115486817'),
(4, 'CSE116', 'Programming with Python', 'Build a fantasy cricket game using Python language', 3, 'viraj12@gmail.com', '8568874520');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `std_name` varchar(250) NOT NULL,
  `std_email` varchar(250) NOT NULL,
  `std_phone` varchar(250) NOT NULL,
  `std_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `std_name`, `std_email`, `std_phone`, `std_password`) VALUES
(1, 'Prabhakar', 'prabhakar392000@gmail.com', '9115486817', 'pd@123'),
(2, 'pd', 'viraj123@gmail.com', '8360886874', 'viraj@123'),
(3, 'pd', 'viraj12@gmail.com', '8568874520', 'pd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdcart`
--
ALTER TABLE `stdcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stdcart`
--
ALTER TABLE `stdcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
