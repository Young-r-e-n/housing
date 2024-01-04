-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2024 at 02:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HOUSE`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` varchar(60) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `user_id`, `first_name`, `last_name`) VALUES
('658ec937f04dc', NULL, 'Eugene', 'Eugene'),
('658ed03542c24', NULL, 'wewe', 'wewe'),
('6594141a68215', NULL, 'ii', 'ii'),
('6596777132e6d', NULL, 'you', 'you');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `hostel_id` int(11) NOT NULL,
  `landlord_id` int(11) DEFAULT NULL,
  `hostel_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE `landlords` (
  `landlord_id` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `national_id` varchar(20) DEFAULT NULL,
  `telephone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landlords`
--

INSERT INTO `landlords` (`landlord_id`, `user_id`, `first_name`, `last_name`, `national_id`, `telephone_number`) VALUES
(18, 'bb14', 'ooo', 'ooo', '987', '965');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `hostel_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admission_number` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `telephone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('student','landlord','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_type`) VALUES
('11111', '11111', '$2y$10$F0cJUu563K26cT.ZyxsoGOgkZiQLeHPFBPG4J8cQcC6fmN3IFSF6S', 'landlord'),
('12458', '12458', '$2y$10$VNc5.c6E4QPN71qljhk6ou1qD/Cl71SG9a/67S/sifllZ5vRrDo2e', 'landlord'),
('22', '22', '$2y$10$jooo2O/Ae9.vMhyT7TosAeSnKbi20/q7DfFJn6orA8HK1j0Myv.vK', 'landlord'),
('3333', '3333', '$2y$10$7a/6Jy5l.peMU8hsN8hexe7ojWUl2O8QaLul5XRMOeiLtAoTP6mam', 'landlord'),
('447', '447', '$2y$10$qx0VFYcCfHHME7U8Uf9iwu1FgjmMO5Gi4YdXhpc4tQfLtF/HcP0Cu', 'landlord'),
('658ec937f04e5', 'Eugene', '$2y$10$rxw2DvYfxf8vq01whcruFegMHQQFMGTqw8fFzP0qL2wmELE0K9Lwm', 'admin'),
('658ed03542c25', 'wewe', '$2y$10$b86S5lsE8CnyVskIhm7y0OP/YK4GilaFSFjnnehhf7wI9sb2FjEYq', 'admin'),
('6594141a68219', 'ii', '$2y$10$ELRLBYmY8qAvYu.0x/0Fu.IPUuT7NAyAuBRCPczTuqbgvAACqsTaq', 'admin'),
('6596777132e70', 'you', '$2y$10$GAcgWXG3v9ddz5AFqXVqqevhWCiAM71FM1V6W2DugdDK.lSWOmHfK', 'admin'),
('6596855b2ecb0', '254', '$2y$10$FwmVDgjcZk5qVVRUQVBLhuYuwSeWYFYcn2VTuaObeG3COx83mCQ6y', 'landlord'),
('8888', '8888', '$2y$10$6RIXmOZHBi7Fsglv56UIxuwJ1z6uhLMjMRGAgn1AzLpn4mdvGY23.', 'landlord'),
('bb14', 'bb14', '$2y$10$RlF./QmfDE4VH/fPP3Ccq.Y/zd3EXG4uE0HKJP.rwIalCoacbLutO', 'landlord'),
('r', 'r', '$2y$10$TS1KD4RZAeqej5macrcMi.cHqsS0vMZNgHBDshpTowCGWDYvBnzzW', 'landlord');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`hostel_id`),
  ADD KEY `landlord_id` (`landlord_id`);

--
-- Indexes for table `landlords`
--
ALTER TABLE `landlords`
  ADD PRIMARY KEY (`landlord_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `admission_number` (`admission_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landlords`
--
ALTER TABLE `landlords`
  MODIFY `landlord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `hostels`
--
ALTER TABLE `hostels`
  ADD CONSTRAINT `hostels_ibfk_1` FOREIGN KEY (`landlord_id`) REFERENCES `landlords` (`landlord_id`);

--
-- Constraints for table `landlords`
--
ALTER TABLE `landlords`
  ADD CONSTRAINT `landlords_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`hostel_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
