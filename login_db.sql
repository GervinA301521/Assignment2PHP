-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2023 at 08:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `gender`, `image_path`, `profile_picture`, `password_hash`) VALUES
(18, 'Test6', 'test6@gmail.com', '77777777777', 'Male', '', NULL, '$2y$10$FNeO2II9y3gIBI1YRWAFeuxhUYUrXFPad4zHJfLJUzwKC6fkXQeGq'),
(19, 'Test7', 'Test7@gmail.com', '99999999999', 'Female', '', NULL, '$2y$10$lJmjnS9rLwVDFJjdR0fOuevIrNMWgegLCVBnBeASNyzU7bYJ1rHkq'),
(22, 'test', 'test@gmail.com', '999999999', 'Male', '', NULL, '$2y$10$iopZepZFBUHhZE29/A8cnOGTKQm2/1BURd0p5l1n82g5OJgwT4Csu'),
(23, 'test2', 'test2@gmail.com', '999999999', 'Male', '/Applications/XAMPP/xamppfiles/htdocs/SEM2/Assignment2/uploads/Testdog.jpg', NULL, '$2y$10$3JZRpQN6UTX0I0IpsCWfzei/w0EF83nCQhDBP0v1l0Q/38pX6F/Xi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
