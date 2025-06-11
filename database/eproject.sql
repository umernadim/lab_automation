-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 08:22 PM
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
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_id` char(10) DEFAULT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `revision_code` char(2) NOT NULL,
  `manufacturing_number` char(5) NOT NULL,
  `manufactured_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Uploaded_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `product_type_id`, `revision_code`, `manufacturing_number`, `manufactured_date`, `created_at`, `Uploaded_by`) VALUES
(7, 'ANO2200041', 'another test ', 8, '22', '41', '2025-05-16', '2025-06-01 06:18:14', 'umer'),
(8, 'RES0900045', 'Resistor', 4, '09', '45', '2025-05-27', '2025-06-01 06:20:09', 'ali'),
(9, 'SWG0900023', 'Switch Gear', 1, '09', '23', '2025-07-01', '2025-06-04 02:18:09', 'kamran'),
(10, 'FUS5300009', 'Fuse', 2, '53', '09', '2025-06-06', '2025-06-06 19:05:08', 'kamran');

--
-- Triggers `products`
--
DELIMITER $$
CREATE TRIGGER `before_insert_product_id` BEFORE INSERT ON `products` FOR EACH ROW BEGIN
  DECLARE type_code VARCHAR(10);
  
  SELECT code INTO type_code
  FROM product_types
  WHERE id = NEW.product_type_id;

  SET NEW.product_id = CONCAT(
    type_code,
    NEW.revision_code,
    LPAD(NEW.manufacturing_number, 5, '0')
  );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `generate_product_id` BEFORE INSERT ON `products` FOR EACH ROW BEGIN
  DECLARE code CHAR(3);

  -- Try fetching product code
  SELECT code INTO code
  FROM product_types
  WHERE id = NEW.product_type_id;

  -- Temporary debug: Force it to show result
  SET NEW.product_id = code; -- Just assign the code only to check
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `code` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `type_name`, `code`) VALUES
(1, 'Switch Gear', 'SWG'),
(2, 'Fuse', 'FUS'),
(3, 'Capacitor', 'CAP'),
(4, 'Resistor', 'RES'),
(8, 'another test ', 'ANO');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(7, 'umer', 'nadeem', 'umer@gmail.com', '6a8d11f37a9ece9ebc851ea11331160e', 'Admin'),
(8, 'amir', 'salman', 'amir@gmail.com', '63eefbd45d89e8c91f24b609f7539942', 'Normal User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `products_ibfk_1` (`product_type_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
