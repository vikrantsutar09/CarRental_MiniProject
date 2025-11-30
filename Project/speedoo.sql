-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 10:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speedoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `pickup_date` date NOT NULL,
  `drop_date` date NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `drop_location` varchar(255) NOT NULL,
  `rent_per_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `car_name`, `customer_name`, `phone_no`, `pickup_date`, `drop_date`, `pickup_location`, `drop_location`, `rent_per_day`) VALUES
(28, 'Rolls-Royce Phantom', 'Vikrant', 2147483647, '2025-04-22', '2025-04-24', 'Dubai', 'India', 1699),
(29, 'Toyota Fortuner', 'Vaibhav', 1122334455, '2025-04-22', '2025-04-23', 'India', 'Delhi', 1555),
(32, 'Land Rover Range Rover Velar', 'Tiger Shroff', 2147483647, '2025-05-14', '2025-05-14', 'Vita', 'Sangli', 1049),
(33, 'Audi A8 L', 'Salman khan', 1234567890, '2025-05-16', '2025-05-17', 'Gomewadi', 'Sangli', 499),
(34, 'BMW iX1 LWB', 'Anil Patil', 2147483647, '2025-05-16', '2025-05-17', 'Katar', 'Chad', 999),
(35, 'Lamborghini Huracan Tecnica', 'Ganesh Sutar', 2147483647, '2025-05-16', '2025-05-17', 'USA', 'Dubai', 1199),
(36, 'Porsche Panamera', 'Pravin Landage', 1122334488, '2025-05-16', '2025-05-17', 'Dubai', 'Pakistan', 1399),
(37, 'Audi A8 L', 'Onkar K', 2147483647, '2025-05-16', '2025-05-18', 'Dubai', 'Sharja', 499),
(38, 'Jeep Wrangler', 'Sudarshan M', 2147483647, '2025-05-07', '2025-05-07', 'Jammu', 'Karachi', 899),
(39, 'Toyota Fortuner', 'Trump Tatya', 2147483647, '2025-05-12', '2025-05-13', 'India', 'USA', 1555),
(40, 'Ferrari 296 GTB', 'Shri Krushana', 1234561234, '2025-05-18', '2025-05-19', 'Delhi', 'Mumbai', 1599),
(41, 'Toyota Fortuner', 'Dada Bhuse', 1011121314, '2025-05-20', '2025-05-21', 'Nashik', 'Nagapur', 1555),
(42, 'Jeep Grand Cherokee', 'Chandrakant Patil', 987654321, '2025-05-10', '2025-05-15', 'Mumbai', 'Sangli', 799),
(43, 'Rolls-Royce Phantom', 'Narendra Modi', 1234567890, '2025-05-16', '2025-05-20', 'Delhi', 'Beijing', 1699),
(44, 'Land Rover Range Rover Velar', 'Eknath Shindi', 2147483647, '2025-04-24', '2025-04-25', 'Mumbai', 'Islamabad', 1049),
(45, 'Lamborghini Huracan Evo', 'Nirav Modi', 2147483647, '2025-01-01', '2025-12-31', 'Jaipur', 'Surat', 999),
(46, 'Mercedes-Benz E-Class', 'Rajnath Sing', 1199228833, '2025-02-28', '2025-03-01', 'Delhi', 'Manipur', 1299),
(47, 'Rolls-Royce Phantom', 'Onkar Khandagale', 2147483647, '2025-05-01', '2025-05-17', 'Awalai', 'Atpadi', 1699);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `c_id` int(20) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `fule_type` varchar(20) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `rent_per_day` varchar(10) NOT NULL,
  `car_image` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `car_status` varchar(20) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`c_id`, `car_name`, `car_model`, `fule_type`, `transmission`, `rent_per_day`, `car_image`, `description`, `car_status`) VALUES
(19, 'Audi A8 L', '2025', 'Electric', 'Automatic', '499', '../images/Admin/car/Audi A8 L.png', '✨Drive luxury, live elite.', '1'),
(20, 'BMW iX1 LWB', '2025', 'Petrol', 'Manual', '999', '../images/Admin/car/BMW iX1 LWB.png', '🏎️ Hit the road with style and comfort.', '1'),
(21, 'Toyota Fortuner', '2021', 'Petrol', 'Manual', '1555', '../images/Admin/car/Toyota Fortuner.png', '🛣️ Wherever you go, we’ve got the perfect ride for you.', '1'),
(22, 'Jeep Grand Cherokee', '2022', 'Petrol', 'Manual', '799', '../images/Admin/car/Jeep Grand Cherokee.png', '💎 Turn heads wherever you go – drive in style.', '1'),
(23, 'Jeep Wrangler', '2023', 'Petrol', 'Manual', '899', '../images/Admin/car/Jeep Wrangler.png', '💰 Affordable rides, unforgettable journeys.', '1'),
(24, 'Lamborghini Huracan Evo', '2024', 'Electric', 'Automatic', '999', '../images/Admin/car/Lamborghini Huracan Evo.png', '🌍 Your adventure starts with the right ride.', '1'),
(25, 'Land Rover Range Rover Velar', '2025', 'Electric', 'Automatic', '1049', '../images/Admin/car/Land Rover Range Rover Velar.png', '🏕️ No plans? No problem! Hit the road today.', '1'),
(26, 'Lamborghini Huracan Tecnica', '2024', 'Diesel', 'Manual', '1199', '../images/Admin/car/Lamborghini Huracan Tecnica.png', '✈️ Land, grab your ride, and go!', '1'),
(27, 'Mercedes-Benz E-Class', '2025', 'Electric', 'Automatic', '1299', '../images/Admin/car/Mercedes-Benz E-Class.png', '🚘 Skip the wait, drive away – airport pickups available.', '1'),
(28, 'Porsche Panamera', '2024', 'Petrol', 'Manual', '1399', '../images/Admin/car/Porsche Panamera.png', '🛬 Arrive in style, leave in comfort.', '1'),
(29, 'Ferrari 296 GTB', '2025', 'Diesel', 'Manual', '1599', '../images/Admin/car/Ferrari 296 GTB.png', '🚗 Rent. Drive. Explore. Repeat!', '1'),
(30, 'Rolls-Royce Phantom', '2024', 'Electric', 'Automatic', '1699', '../images/Admin/car/Rolls-Royce Phantom.png', '🛄 Your car is ready when you land!', '1');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_username` varchar(100) NOT NULL,
  `d_password` varchar(100) NOT NULL,
  `d_phone` varchar(100) NOT NULL,
  `d_license` varchar(255) NOT NULL,
  `d_profile_image` varchar(255) NOT NULL,
  `d_status` tinyint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`d_id`, `d_name`, `d_email`, `d_username`, `d_password`, `d_phone`, `d_license`, `d_profile_image`, `d_status`) VALUES
(2, '', 'vaibhav@gmail.com', 'Vaibhav', '123', '1111111111', 'DSS123323233', 'uploads/driver_1744700615.png', 1),
(4, '', 'vikrantsutar04@gmail.com', 'vikrant', 'v123', '09766847741', 'HDDH1212321323', '../images/Admin/driver/1745551886_man-hair.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_id` int(11) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `l_email` varchar(255) NOT NULL,
  `l_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `phone_no`, `l_email`, `l_password`) VALUES
(4, 0, 'mahii@gmail.com', '1234'),
(5, 0, 'vikrantsutar04@gmail.com', '123'),
(6, 0, 'vikrantsutar04@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(1000) NOT NULL,
  `username` varchar(100) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_phone` varchar(100) NOT NULL,
  `u_role` varchar(100) NOT NULL,
  `u_image` varchar(255) NOT NULL,
  `status` tinyint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `username`, `u_password`, `u_phone`, `u_role`, `u_image`, `status`) VALUES
(2, 'Vikrant Sutar', 'vikrantsutar04@gmail.com', 'vikrantsutar', '123', '09766847741', 'admin', '../images/Admin/user/1744535821_man.png', 0),
(4, 'Mahesh', 'mahii04480@gmail.com', 'maheshjavir', '123', '1234564321', 'user', '../images/Admin/user/1744692664_hacker.png', 0),
(6, 'Vaibhav', 'vaibhav@gmail.com', 'vaibhavwaghmare', '123', '1122334455', 'Manager', '../images/Admin/user/1745551530_man (1).png', 1),
(7, 'Onkar', 'onkar@gmail.com', 'onkarkhandagale', '123', '5544332211', 'Manager', '../images/Admin/user/1745551579_man (2).png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
