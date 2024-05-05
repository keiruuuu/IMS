-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 11:22 AM
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
-- Database: `ims-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sku` varchar(13) NOT NULL,
  `product_name` varchar(75) NOT NULL,
  `qty` int(9) NOT NULL,
  `shelf_life` varchar(75) NOT NULL,
  `supplier_cost` float NOT NULL,
  `retail_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sku`, `product_name`, `qty`, `shelf_life`, `supplier_cost`, `retail_cost`) VALUES
('4806502720172', 'GARDENIA Butter Toast 2 slices 50g', 10, '1 month', 18.4, 24),
('4806502726181', 'GARDENIA Choco Chip Brioche Bun 120g', 4, '2 months', 36.35, 49),
('4800016112478', 'QUAKE Overload Mallow Vanilla 28g ', 9, '3 months', 8.5, 11),
('4800016633799', 'PIATTOS Roadhouse Barbecue 85g', 34, '7 months', 39, 45),
('4902430191821', 'ARIEL Super Removal Power Laundry Soap Bar 125g', 10, '12 months', 15, 18),
('748485100401', 'CENTURY TUNA Flakes in Oil 155g', 17, '16 months', 40, 49),
('4800011133447', 'GENUINE Efficascent Oil Methyl Salicylate Camphor Menthol 100ml', 6, '13 months', 109, 120),
('6942836724559', 'Hershey’s Kisses Dark Chocolate 226g', 2, '12 months', 150, 160),
('4800086048523', 'SELECTA Hershey\'s Mini Kisses 1.3L', 3, '14 months', 230, 250),
('4801032435046', 'CALI Apple Flavor Can 330mL', 15, '14 months', 30, 38);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('minuterun', 'mrstaff'),
('supplier', 'mrsupplier');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
