-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 11:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `droame`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcust`
--

CREATE TABLE `addcust` (
  `cust_id` int(11) NOT NULL,
  `Firstname` varchar(30) DEFAULT NULL,
  `Lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcust`
--

INSERT INTO `addcust` (`cust_id`, `Firstname`, `Lastname`, `email`, `gender`, `phone`, `address`) VALUES
(2694, 'Sumith', 'Rawal', 'sumith@gmail.com', 'male', '1234567899', 'Banglore'),
(2818, 'sandeep', 'S', 'sandeep@gmail.com', 'male', '1357924685', 'Shivmogga'),
(3107, 'Adarsha ', 'MV', 'adarshamv10@gmail.com', 'male', '7676712096', 'Davanagere'),
(7076, 'Akilesh', 'Jadhav', 'akilesh@gmail.com', 'male', '9876543211', 'Harihar');

-- --------------------------------------------------------

--
-- Table structure for table `addloc`
--

CREATE TABLE `addloc` (
  `loc_id` int(11) NOT NULL,
  `loc_name` varchar(30) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) DEFAULT NULL,
  `droneShoot_id` int(11) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addloc`
--

INSERT INTO `addloc` (`loc_id`, `loc_name`, `city`, `state`, `droneShoot_id`, `image`) VALUES
(101, 'Taj Mahal', 'Agra', 'Uttar Pradesh', 501, '../uploadImg/timg1.jpg'),
(102, 'Murudeshwar', 'Mangalore', 'Kerala', 502, '../uploadImg/timg2.jpg'),
(105, 'Temple', 'Pune', 'Maharastra', 115, '../uploadImg/timg6.jpg'),
(110, 'Gokarna', 'Pune', 'Maharastra', 512, '../uploadImg/timg6.jpg'),
(112, 'Harihar', 'Davanagere', 'Karnataka', 518, '../uploadImg/timg5.jpg'),
(114, 'Thirumala', 'Thirupathi', 'Andra', 514, '../uploadImg/timg5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `loc_id` int(11) DEFAULT NULL,
  `orderd_at` date DEFAULT NULL,
  `book_at` date DEFAULT NULL,
  `noOfdays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ord`
--

INSERT INTO `ord` (`order_id`, `cust_id`, `loc_id`, `orderd_at`, `book_at`, `noOfdays`) VALUES
(20484, 3107, 110, '2023-03-28', '2023-04-30', 10),
(44790, 2818, 101, '2023-03-28', '2023-04-08', 8),
(89503, 3107, 102, '2023-03-28', '2023-04-21', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcust`
--
ALTER TABLE `addcust`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `addloc`
--
ALTER TABLE `addloc`
  ADD PRIMARY KEY (`loc_id`,`droneShoot_id`);

--
-- Indexes for table `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `loc_id` (`loc_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ord`
--
ALTER TABLE `ord`
  ADD CONSTRAINT `ord_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `addcust` (`cust_id`),
  ADD CONSTRAINT `ord_ibfk_2` FOREIGN KEY (`loc_id`) REFERENCES `addloc` (`loc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
