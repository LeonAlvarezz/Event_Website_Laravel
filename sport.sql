-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 10:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sea_game_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `picture` text NOT NULL,
  `duration` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `name`, `description`, `datetime`, `picture`, `duration`, `created_at`, `updated_at`) VALUES
(3, 'E-sport', 'Video game tournament', '2023-05-03 17:00:00', 'e-sport.jpg', '3', '2023-04-25 07:53:50', '2023-04-25 07:53:50'),
(5, 'Soccer', 'International Soccer', '2023-05-01 15:00:00', 'soccer.jpg', '2', '2023-04-25 08:19:06', '2023-04-25 08:19:06'),
(6, 'Basket Ball', 'International Basket Ball', '2023-05-02 16:00:00', 'basketball.jpg', '3', '2023-04-25 08:19:37', '2023-04-25 08:19:37'),
(7, 'E-sport', 'Video game tournament', '2023-05-03 17:00:00', 'e-sport.jpg', '3', '2023-04-25 07:53:50', '2023-04-25 07:53:50'),
(8, 'Soccer', 'International Soccer', '2023-05-01 15:00:00', 'soccer.jpg', '2', '2023-04-25 08:19:06', '2023-04-25 08:19:06'),
(10, 'test 1', 'jdas', '2023-04-26 15:36:00', 'mimex-water-festival2021.jpg', '3', '2023-04-25 08:36:37', '2023-04-25 08:36:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
