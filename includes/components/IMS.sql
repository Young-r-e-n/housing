-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2023 at 08:57 PM
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
-- Database: `IMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Admin_Id` varchar(58) NOT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Admin_Id`, `First_name`, `Last_Name`, `Username`, `Password`, `Role`) VALUES
('656b82d67163d', 'woman', 'woman', 'woman', '$2y$10$wVEbbCAh3ANahh.NsyVJFOK/XQ/kh8g8mt08wqE5N9U1bgej.mu7u', 'admin'),
('65742913a952e', 'june', 'july', 'june@gmail.com', '$2y$10$htEGhQ5sZXSH8xxqP6mNCOiCg9FJER0RsgL/yE9fsijPbZ7mZFjY.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `Appointment_Id` int(11) NOT NULL,
  `Customer_Id` int(11) DEFAULT NULL,
  `Appointment_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Appointment_Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Appointments`
--

INSERT INTO `Appointments` (`Appointment_Id`, `Customer_Id`, `Appointment_Date`, `Appointment_Type`) VALUES
(1, 5, '2023-12-11 21:00:00', 'id collection'),
(2, 1, '2023-12-28 21:00:00', 'id collection'),
(3, 1, '2023-12-28 21:00:00', 'passport collection'),
(4, 1, '2023-12-28 21:00:00', 'id application'),
(5, 1, '2023-12-28 21:00:00', 'id application'),
(6, 1, '2023-12-29 21:00:00', 'passport');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Customer_Id` int(11) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(15) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Customer_Id`, `First_Name`, `Last_Name`, `Address`, `Phone_No`, `Email`) VALUES
(1, 'tester', 'tester', '1234', '4444444444', 'tester@gmail.com'),
(2, 'tester', 'tester', '1234', '4444444444', 'tester@gmail.com'),
(3, 'tester', 'tester', '1234', '4444444444', 'tester@gmail.com'),
(4, 'tester', 'tester', '1234', '4444444444', 'tester@gmail.com'),
(5, 'tester', 'tester', '1234', '4444444444', 'tester@gmail.com'),
(6, 'tester', 'tester', '1234', '4444444444', 'tester@gmail.com'),
(7, 'june', 'june', '24151', '12345678', 'june@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Delivery`
--

CREATE TABLE `Delivery` (
  `Delivery_Id` int(11) NOT NULL,
  `Order_Id` int(11) DEFAULT NULL,
  `Delivery_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Delivery_Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Delivery`
--

INSERT INTO `Delivery` (`Delivery_Id`, `Order_Id`, `Delivery_Date`, `Delivery_Status`) VALUES
(1, 1, '2023-12-04 13:00:49', 'Pending'),
(2, 2, '2023-12-09 08:55:47', 'Pending'),
(3, 3, '2023-12-10 17:31:50', 'Pending'),
(4, 4, '2023-12-10 17:32:06', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `Documents`
--

CREATE TABLE `Documents` (
  `Document_Id` int(11) NOT NULL,
  `Customer_Id` int(11) DEFAULT NULL,
  `Document_Type` varchar(50) DEFAULT NULL,
  `Document_Details` varchar(255) DEFAULT NULL,
  `Document_Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `Feedback_Id` int(11) NOT NULL,
  `Customer_Id` int(11) DEFAULT NULL,
  `Feedback_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Feedback_Text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `Order_Id` int(11) NOT NULL,
  `Customer_Id` int(11) DEFAULT NULL,
  `Order_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Total_Amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`Order_Id`, `Customer_Id`, `Order_Date`, `Total_Amount`) VALUES
(1, 2, '2023-12-04 13:00:49', 14000.00),
(2, 7, '2023-12-09 08:55:46', 1000.00),
(3, 7, '2023-12-10 17:31:48', 21400.00),
(4, 7, '2023-12-10 17:32:06', 21400.00);

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `Service_Id` int(11) NOT NULL,
  `Service_Description` varchar(255) DEFAULT NULL,
  `Service_Details` varchar(255) DEFAULT NULL,
  `Service_Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Admin_Id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`Appointment_Id`),
  ADD KEY `Customer_Id` (`Customer_Id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `Delivery`
--
ALTER TABLE `Delivery`
  ADD PRIMARY KEY (`Delivery_Id`),
  ADD KEY `Order_Id` (`Order_Id`);

--
-- Indexes for table `Documents`
--
ALTER TABLE `Documents`
  ADD PRIMARY KEY (`Document_Id`),
  ADD KEY `Customer_Id` (`Customer_Id`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`Feedback_Id`),
  ADD KEY `Customer_Id` (`Customer_Id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Order_Id`),
  ADD KEY `Customer_Id` (`Customer_Id`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`Service_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `Appointment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Delivery`
--
ALTER TABLE `Delivery`
  MODIFY `Delivery_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Documents`
--
ALTER TABLE `Documents`
  MODIFY `Document_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `Feedback_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD CONSTRAINT `Appointments_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `Customer` (`Customer_Id`);

--
-- Constraints for table `Delivery`
--
ALTER TABLE `Delivery`
  ADD CONSTRAINT `Delivery_ibfk_1` FOREIGN KEY (`Order_Id`) REFERENCES `Orders` (`Order_Id`);

--
-- Constraints for table `Documents`
--
ALTER TABLE `Documents`
  ADD CONSTRAINT `Documents_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `Customer` (`Customer_Id`);

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `Feedback_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `Customer` (`Customer_Id`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `Customer` (`Customer_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
