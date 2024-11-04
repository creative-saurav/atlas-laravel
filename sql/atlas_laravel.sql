-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 09:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlas_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `identifier` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `icon`, `type`, `identifier`, `rating`, `image`, `designation`, `time`, `price`, `created_at`, `updated_at`) VALUES
(22, 'BMW', 'fas fa-adjust', 'car', 'model', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:25:17', '2024-06-13 00:25:17'),
(23, 'Honda', 'fas fa-award', 'car', 'model', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:26:24', '2024-06-13 00:26:24'),
(24, 'Lotus', 'fab fa-accusoft', 'car', 'model', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:27:06', '2024-06-13 00:27:06'),
(25, 'Lexus', 'fas fa-align-left', 'car', 'model', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:28:04', '2024-06-13 00:28:04'),
(26, 'SUV', 'fab fa-accessible-icon', 'car', 'car_type', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:28:32', '2024-06-13 00:28:32'),
(27, 'Pickup', 'fab fa-affiliatetheme', 'car', 'car_type', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:28:54', '2024-06-13 00:28:54'),
(28, 'Sedan', 'fab fa-alipay', 'car', 'car_type', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:29:04', '2024-06-13 00:29:04'),
(29, 'Diesel', 'fab fa-algolia', 'car', 'fuel_type', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:29:50', '2024-06-13 00:29:50'),
(30, 'Octen', 'fas fa-align-center', 'car', 'fuel_type', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:30:07', '2024-06-13 00:30:07'),
(31, 'Auto', 'fab fa-algolia', 'car', 'transmission', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:30:19', '2024-06-13 00:30:19'),
(32, 'Manual', 'fab fa-accessible-icon', 'car', 'transmission', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:30:28', '2024-06-13 00:30:28'),
(33, 'Toyota', 'fab fa-accusoft', 'car', 'brand', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:31:06', '2024-06-13 00:31:06'),
(34, 'Ford', 'fas fa-address-book', 'car', 'brand', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:31:21', '2024-06-13 00:31:21'),
(35, '2-Cylinder', 'fab fa-accessible-icon', 'car', 'cylinder', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:32:03', '2024-06-13 00:32:03'),
(36, '4-Cylinder', 'fas fa-air-freshener', 'car', 'cylinder', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:32:30', '2024-06-13 00:32:30'),
(37, 'white', 'fas fa-address-book', 'car', 'interior_color', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:32:41', '2024-06-13 00:32:41'),
(38, 'Black', 'fab fa-algolia', 'car', 'interior_color', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:32:53', '2024-06-13 00:32:53'),
(39, 'Gray', 'fab fa-accusoft', 'car', 'interior_color', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:33:04', '2024-06-13 00:33:04'),
(40, 'Whtie', 'fab fa-accusoft', 'car', 'exterior_color', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:33:15', '2024-06-13 00:33:15'),
(41, 'Black', 'fab fa-accusoft', 'car', 'exterior_color', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:33:26', '2024-06-13 00:33:26'),
(42, 'Red', 'fab fa-adversal', 'car', 'exterior_color', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:33:35', '2024-06-13 00:33:35'),
(43, 'FWD', 'fab fa-algolia', 'car', 'drive_train', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:34:35', '2024-06-13 00:34:35'),
(44, 'RWD', 'fab fa-adversal', 'car', 'drive_train', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:34:49', '2024-06-13 00:34:49'),
(45, 'AWD', 'fab fa-accessible-icon', 'car', 'drive_train', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:35:01', '2024-06-13 00:35:01'),
(46, 'DX', 'fab fa-accessible-icon', 'car', 'trim', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:35:28', '2024-06-13 00:35:28'),
(47, 'LX', 'fas fa-address-book', 'car', 'trim', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:35:38', '2024-06-13 00:35:38'),
(48, 'LS', 'fab fa-adversal', 'car', 'trim', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:36:01', '2024-06-13 00:36:01'),
(49, '1010cc', 'fas fa-address-book', 'car', 'engine_size', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:36:42', '2024-06-13 00:36:42'),
(50, '1200cc', 'fab fa-adversal', 'car', 'engine_size', NULL, NULL, NULL, NULL, NULL, '2024-06-13 00:36:53', '2024-06-13 00:36:53'),
(62, 'test', NULL, 'beauty', 'team', '4.0', '1719475649.jpg', 'Guitarist', NULL, NULL, '2024-06-27 02:07:29', '2024-06-27 02:07:29'),
(63, 'Ignacia Kirk', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Perferendis fuga Ma', '840', '2024-06-27 02:54:57', '2024-06-27 04:42:00'),
(64, 'Stuart Hudson', NULL, 'beauty', 'service', NULL, NULL, NULL, 'In optio aperiam si', '363', '2024-06-27 02:55:36', '2024-06-27 04:42:07'),
(65, 'Preston Hobbs', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Incidunt sunt atque', '491', '2024-06-27 03:16:04', '2024-06-27 04:42:13'),
(66, 'test', NULL, 'beauty', 'team', '4.0', '1719484880.jpg', 'sdfsdfsdf', NULL, NULL, '2024-06-27 04:41:20', '2024-06-27 04:41:20'),
(67, 'Finn Newton', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Nihil nisi explicabo', '804', '2024-06-27 04:41:35', '2024-06-27 04:41:35'),
(68, 'Jameson Giles', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Perspiciatis sed vo', '502', '2024-06-27 04:41:40', '2024-06-27 04:41:40'),
(69, 'Clementine Solis', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Velit vitae labore d', '592', '2024-06-27 04:41:47', '2024-06-27 04:41:47'),
(70, 'William Farrell', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Voluptatum quas quib', '550', '2024-06-27 04:41:53', '2024-06-27 04:41:53'),
(71, 'Leslie Schroeder', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Impedit consequuntu', '594', '2024-06-27 04:42:20', '2024-06-27 04:42:20'),
(72, 'Nerea Rice', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Quidem aut anim in q', '485', '2024-06-27 04:42:25', '2024-06-27 04:42:25'),
(73, 'Leandra Dale', NULL, 'beauty', 'team', '3.0', '1719484956.jpg', 'Cupidatat veniam ex', NULL, NULL, '2024-06-27 04:42:36', '2024-06-27 04:42:36'),
(74, 'Keely Mcguire', NULL, 'beauty', 'team', '1.0', '1719484966.jpg', 'Facere sed repellend', NULL, NULL, '2024-06-27 04:42:46', '2024-06-27 04:42:46'),
(75, 'Raymond Walters', NULL, 'beauty', 'team', '5.0', '1719484978.jpg', 'Elit voluptate irur', NULL, NULL, '2024-06-27 04:42:58', '2024-06-27 04:42:58'),
(76, 'Wendy Workman', NULL, 'beauty', 'team', '3.0', '1719484991.jpg', 'Culpa sed et non dol', NULL, NULL, '2024-06-27 04:43:11', '2024-06-27 04:43:11'),
(77, 'Winifred Flynn', NULL, 'beauty', 'team', '3.0', '1719485003.png', 'Molestias esse sint', NULL, NULL, '2024-06-27 04:43:23', '2024-06-27 04:43:23'),
(78, 'Xena Odom', NULL, 'beauty', 'team', '5.0', '1719485016.png', 'Eligendi ex inventor', NULL, NULL, '2024-06-27 04:43:36', '2024-06-27 04:43:36'),
(79, 'wifi 124', 'fab fa-500px', 'real-estate', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-06-29 06:02:15', '2024-06-29 06:16:07'),
(80, 'wifi', 'fas fa-wifi', 'real-estate', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-06-29 06:09:08', '2024-06-29 06:09:08'),
(81, 'skdfj', 'fab fa-algolia', 'real-estate', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-06-29 06:09:24', '2024-06-29 06:09:24'),
(83, 'test fe', 'far fa-address-card', 'hotel', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-01 03:40:13', '2024-07-01 03:44:13'),
(84, 'Hillary Taylor', 'fab fa-adn', 'hotel', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-01 03:44:27', '2024-07-01 03:44:27'),
(85, 'Frances Scott', 'fas fa-align-justify', 'hotel', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-01 03:44:40', '2024-07-01 03:44:40'),
(86, 'Lacota Howell', 'fas fa-angle-double-up', 'hotel', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-01 03:44:53', '2024-07-01 03:44:53'),
(87, 'Lisandra Boyer', 'fas fa-arrows-alt', 'hotel', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-01 03:45:05', '2024-07-01 03:45:05'),
(89, 'tesdf', 'fab fa-accessible-icon', 'restaurant', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-04 03:21:13', '2024-07-04 03:22:54'),
(90, 'test', 'fas fa-align-right', 'restaurant', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-04 03:21:21', '2024-07-04 03:21:21'),
(91, 'testeset', 'fab fa-alipay', 'restaurant', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-04 03:24:00', '2024-07-04 03:24:00'),
(92, 'Gibson', NULL, 'beauty', 'service', NULL, NULL, NULL, 'dfsdfsdf', '66', '2024-07-08 03:23:13', '2024-07-08 03:23:13'),
(93, 'dsfgdfgd', NULL, 'beauty', 'team', '1.0', '1720430617.jpg', 'fgdfgdfgdfg', NULL, NULL, '2024-07-08 03:23:37', '2024-07-08 03:23:37'),
(94, 'Elmo Frost', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Ut voluptatibus debi', '408', '2024-07-08 03:56:36', '2024-07-08 03:56:36'),
(95, 'Jaquelyn Tate', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Voluptatem Vitae au', '293', '2024-07-08 04:00:03', '2024-07-08 04:00:03'),
(96, 'Catherine Gibbs', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Rerum odit voluptate', '416', '2024-07-08 04:01:53', '2024-07-08 04:01:53'),
(97, 'Lacy Hunter', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Soluta labore ut aut', '807', '2024-07-08 04:02:45', '2024-07-08 04:02:45'),
(98, 'April Meyers', NULL, 'beauty', 'team', '1.0', '1720432991.jpg', 'Mollit ut est illum', NULL, NULL, '2024-07-08 04:03:11', '2024-07-08 04:03:11'),
(99, 'Amena Thompson', NULL, 'beauty', 'team', '4.0', '1720433131.jpg', 'Totam ut ducimus su', NULL, NULL, '2024-07-08 04:05:31', '2024-07-08 04:05:31'),
(100, 'sdfsdf', NULL, 'beauty', 'team', '4.0', '1720433160.jpg', 'dsfsf', NULL, NULL, '2024-07-08 04:06:00', '2024-07-08 04:06:00'),
(101, 'Lucy Barrera', NULL, 'beauty', 'team', '5.0', '1720433246.jpg', 'Mollitia esse et du', NULL, NULL, '2024-07-08 04:07:26', '2024-07-08 04:07:26'),
(102, 'Sandra Ross', NULL, 'beauty', 'service', NULL, NULL, NULL, 'Error ducimus anim', '183', '2024-07-08 04:20:18', '2024-07-08 04:20:18'),
(103, 'Tatyana Hill', NULL, 'beauty', 'team', '5.0', '1720434031.jpg', 'Alias ipsum qui occa', NULL, NULL, '2024-07-08 04:20:31', '2024-07-08 04:20:31'),
(104, 'Gibson', 'fas fa-address-book', 'real-estate', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-08 05:54:58', '2024-07-08 05:54:58'),
(105, 'sdfdsf', 'fas fa-adjust', 'real-estate', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-08 05:56:18', '2024-07-08 05:56:18'),
(106, 'test', 'fab fa-algolia', 'real-estate', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-08 05:57:55', '2024-07-08 05:57:55'),
(107, 'test', 'fas fa-align-left', 'hotel', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-08 06:00:10', '2024-07-08 06:00:10'),
(108, 'test', 'fas fa-align-center', 'hotel', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-08 06:01:51', '2024-07-08 06:01:51'),
(109, 'kkkjd', 'fas fa-align-right', 'restaurant', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-29 04:26:25', '2024-07-29 04:26:25'),
(110, 'test', 'fas fa-air-freshener', 'restaurant', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-29 04:36:29', '2024-07-29 04:36:29'),
(111, 'Mira Wood', 'fas fa-align-center', 'restaurant', 'feature', NULL, NULL, NULL, NULL, NULL, '2024-07-29 04:36:50', '2024-07-29 04:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `beauty_listings`
--

CREATE TABLE `beauty_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `visibility` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `json_id` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` text NOT NULL,
  `team` text DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `opening_time` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beauty_listings`
--

INSERT INTO `beauty_listings` (`id`, `title`, `description`, `visibility`, `meta_title`, `meta_keyword`, `meta_description`, `og_title`, `og_description`, `og_image`, `canonical_url`, `json_id`, `country`, `city`, `area`, `address`, `postal_code`, `Latitude`, `Longitude`, `image`, `category`, `team`, `service`, `video`, `opening_time`, `created_at`, `updated_at`) VALUES
(2, 'sdfsdf', 'sdfsdf', 'visible', 'dfsdfsdf', 'dfsdf', 'sdfsdfsdf', 'og_time', 'sdfsdf', NULL, 'sdfsdf', 'sdfsdf', '1', '5', '1:@:5:@:sdfsdf', 'sdfsdf', '3434', '34.31395', '-66.76079', '[\"0-1719471056.png\",\"1-1719471057.png\",\"2-1719471057.png\",\"3-1719471057.png\"]', '8', '[\"62\"]', '[\"63\",\"64\"]', NULL, '{\"saturday\":{\"open\":\"7:30\",\"close\":\"18:30\"},\"sunday\":{\"open\":\"4:30\",\"close\":\"19:30\"},\"monday\":{\"open\":\"6:30\",\"close\":\"8\"},\"tuesday\":{\"open\":\"6:30\",\"close\":\"21:30\"},\"wednesday\":{\"open\":\"4\",\"close\":\"1\"},\"thursday\":{\"open\":\"10\",\"close\":\"12\"},\"friday\":{\"open\":\"5\",\"close\":\"20\"}}', '2024-06-27 03:38:22', '2024-08-06 05:07:57'),
(3, 'dsdf', 'sdfsdfdsf', 'visible', 'dfdsfdf', 'sdf', 'sdfsdf', 'og_time', 'sdfsdf', NULL, 'sdfsdf', 'sdfsd', '1', '5', '1:@:5:@:sdfsf', 'sdfsf', '34', '33.76773', '-64.25483', '[\"0-1719482733.jpg\",\"1-1719482734.jpg\",\"0-1722931490.jpg\",\"1-1722931491.jpg\",\"3-1722931491.png\",\"4-1722931491.png\",\"5-1722931491.png\",\"6-1722931491.png\"]', '8', '[\"62\",\"66\",\"74\",\"77\"]', '[\"64\",\"65\",\"68\",\"69\",\"72\"]', NULL, '{\"saturday\":{\"open\":\"17\",\"close\":\"11\"},\"sunday\":{\"open\":\"22\",\"close\":\"19\"},\"monday\":{\"open\":\"4\",\"close\":\"15\"},\"tuesday\":{\"open\":\"7\",\"close\":\"12\"},\"wednesday\":{\"open\":\"6:30\",\"close\":\"4\"},\"thursday\":{\"open\":\"5\",\"close\":\"22:30\"},\"friday\":{\"open\":\"17\",\"close\":\"19\"}}', '2024-06-27 04:45:38', '2024-08-06 02:10:02'),
(4, 'sdfsdf', 'sdfsdfdsf', 'visible', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'og_time', 'sdfsdf', NULL, 'sdfsdf', 'sdfdsf', '1', '5', '1:@:5:@:sdfsdf', 'sdfsdf', '34', '34.74838', '-58.84723', '[\"0-1719484480.jpg\"]', '8', 'null', '[\"63\",\"64\"]', 'sdfsdfsdf', '{\"saturday\":{\"open\":\"closed\",\"close\":\"closed\"},\"sunday\":{\"open\":\"closed\",\"close\":\"closed\"},\"monday\":{\"open\":\"closed\",\"close\":\"closed\"},\"tuesday\":{\"open\":\"closed\",\"close\":\"closed\"},\"wednesday\":{\"open\":\"closed\",\"close\":\"closed\"},\"thursday\":{\"open\":\"closed\",\"close\":\"closed\"},\"friday\":{\"open\":\"closed\",\"close\":\"closed\"}}', '2024-06-27 04:37:24', '2024-06-27 04:37:24'),
(5, 'sdfsdf', 'sdfsdfdsf', 'visible', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'og_time', 'sdfsdf', NULL, 'sdfsdf', 'sdfdsf', '1', '5', '1:@:5:@:sdfsdf', 'sdfsdf', '34', '34.74838', '-58.84723', '[\"0-1719484480.jpg\"]', '8', 'null', '[\"63\",\"64\"]', 'sdfsdfsdf', '{\"saturday\":{\"open\":\"closed\",\"close\":\"closed\"},\"sunday\":{\"open\":\"closed\",\"close\":\"closed\"},\"monday\":{\"open\":\"closed\",\"close\":\"closed\"},\"tuesday\":{\"open\":\"closed\",\"close\":\"closed\"},\"wednesday\":{\"open\":\"closed\",\"close\":\"closed\"},\"thursday\":{\"open\":\"closed\",\"close\":\"closed\"},\"friday\":{\"open\":\"closed\",\"close\":\"closed\"}}', '2024-06-27 04:37:24', '2024-06-27 04:37:24'),
(6, 'sdfsdf', 'sdfsdfdsf', 'visible', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'og_time', 'sdfsdf', NULL, 'sdfsdf', 'sdfdsf', '1', '5', '1:@:5:@:sdfsdf', 'sdfsdf', '34', '34.74838', '-58.84723', '[\"0-1719484480.jpg\"]', '8', 'null', '[\"63\",\"64\"]', 'sdfsdfsdf', '{\"saturday\":{\"open\":\"closed\",\"close\":\"closed\"},\"sunday\":{\"open\":\"closed\",\"close\":\"closed\"},\"monday\":{\"open\":\"closed\",\"close\":\"closed\"},\"tuesday\":{\"open\":\"closed\",\"close\":\"closed\"},\"wednesday\":{\"open\":\"closed\",\"close\":\"closed\"},\"thursday\":{\"open\":\"closed\",\"close\":\"closed\"},\"friday\":{\"open\":\"closed\",\"close\":\"closed\"}}', '2024-06-27 04:37:24', '2024-06-27 04:37:24'),
(7, 'dsdf', 'sdfsdfdsf', 'visible', 'dfdsfdf', 'sdf', 'sdfsdf', 'og_time', 'sdfsdf', NULL, 'sdfsdf', 'sdfsd', '1', '5', '1:@:5:@:sdfsf', 'sdfsf', '34', '33.76773', '-64.25483', '[\"0-1719482733.jpg\",\"1-1719482734.jpg\"]', '8', '[\"62\",\"66\",\"74\",\"77\"]', '[\"64\",\"65\",\"68\",\"69\",\"72\"]', NULL, '{\"saturday\":{\"open\":\"17\",\"close\":\"11\"},\"sunday\":{\"open\":\"22\",\"close\":\"19\"},\"monday\":{\"open\":\"4\",\"close\":\"15\"},\"tuesday\":{\"open\":\"7\",\"close\":\"12\"},\"wednesday\":{\"open\":\"6:30\",\"close\":\"4\"},\"thursday\":{\"open\":\"5\",\"close\":\"22:30\"},\"friday\":{\"open\":\"17\",\"close\":\"19\"}}', '2024-06-27 04:45:38', '2024-06-27 04:45:38'),
(8, 'sdfsdf', 'sdfsdf', 'visible', 'dfsdfsdf', 'dfsdf', 'sdfsdfsdf', 'og_time', 'sdfsdf', NULL, 'sdfsdf', 'sdfsdf', '1', '6', '1:@:5:@:sdfsdf', 'sdfsdf', '3434', '34.31395', '-66.76079', '[\"0-1719471056.png\",\"1-1719471057.png\",\"2-1719471057.png\",\"3-1719471057.png\"]', '8', '[\"62\"]', '[\"63\",\"64\"]', '', '{\"saturday\":{\"open\":\"19\",\"close\":\"9\"},\"sunday\":{\"open\":\"4\",\"close\":\"7\"},\"monday\":{\"open\":\"6:30\",\"close\":\"8\"},\"tuesday\":{\"open\":\"1\",\"close\":\"1\"},\"wednesday\":{\"open\":\"4\",\"close\":\"1\"},\"thursday\":{\"open\":\"10\",\"close\":\"12\"},\"friday\":{\"open\":\"5\",\"close\":\"20\"}}', '2024-06-27 03:38:22', '2024-06-27 03:38:22'),
(9, 'dsdf', 'sdfsdfdsf', 'visible', 'dfdsfdf', 'sdf', 'sdfsdf', 'og_time', 'sdfsdf', NULL, 'sdfsdf', 'sdfsd', '1', '5', '1:@:5:@:sdfsf', 'sdfsf', '34', '33.76773', '-64.25483', '[\"0-1719482733.jpg\",\"1-1719482734.jpg\"]', '8', '[\"62\",\"66\",\"74\",\"77\"]', '[\"64\",\"65\",\"68\",\"69\",\"72\"]', NULL, '{\"saturday\":{\"open\":\"17\",\"close\":\"11\"},\"sunday\":{\"open\":\"22\",\"close\":\"19\"},\"monday\":{\"open\":\"4\",\"close\":\"15\"},\"tuesday\":{\"open\":\"7\",\"close\":\"12\"},\"wednesday\":{\"open\":\"6:30\",\"close\":\"4\"},\"thursday\":{\"open\":\"5\",\"close\":\"22:30\"},\"friday\":{\"open\":\"17\",\"close\":\"19\"}}', '2024-06-27 04:45:38', '2024-06-27 04:45:38'),
(10, 'gdgfdf', 'dfgdfgdfg', 'visible', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '7', '1:@:7:@:dfgdfgdg', 'dfgdfgdg', '3434', '35.64614', '-59.37480', '[\"0-1722942817.jpg\"]', '8', NULL, NULL, NULL, NULL, '2024-08-06 05:13:37', '2024-08-06 05:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `category`, `user_id`, `description`, `status`, `keyword`, `time`, `created_at`, `updated_at`) VALUES
(3, 'Ipsam is', '1717503378.png', 4, '1', 'Dolor quis id, quos .fcvfv', 1, 'In quisquam mollit u', 1722746507, '2024-06-04 05:28:55', '2024-08-03 22:41:47'),
(7, 'Consectetur voluptat', '1717502748.jpg', 4, '1', 'Libero rem consequat.fd', 1, 'Impedit aliquid seq', 1722746492, '2024-06-04 06:05:48', '2024-08-03 22:41:32'),
(8, 'Explicabo Et quis u', '1722746412.png', 2, '1', 'Illo labore totam fa.&nbsp;', 1, 'Praesentium consequu', 1722746413, '2024-08-03 22:40:13', '2024-08-03 22:40:13'),
(9, 'Ipsum error sed mini', '1722746430.png', 2, '1', 'Quae sed laborum aut.&nbsp;', 1, 'Officia in iure quis', 1722746430, '2024-08-03 22:40:30', '2024-08-03 22:40:30'),
(10, 'Tempore pariatur E', '1722746460.png', 2, '1', 'Quod incididunt dolo.&nbsp; Quod incididunt dolo.&nbsp; Quod incididunt dolo.&nbsp; Quod incididunt dolo.&nbsp; Quod incididunt dolo.&nbsp; Quod incididunt dolo.&nbsp; Quod incididunt dolo.&nbsp;', 1, 'Voluptas; cum; pariatu;', 1722746460, '2024-08-03 22:41:00', '2024-08-03 22:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Gibson 124', '2024-06-04 04:39:28', '2024-06-04 04:56:30'),
(4, 'test', '2024-06-04 05:00:08', '2024-06-04 05:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_listings`
--

CREATE TABLE `car_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `engine_size` varchar(255) NOT NULL,
  `cylinder` varchar(255) NOT NULL,
  `interior_color` varchar(255) NOT NULL,
  `exterior_color` varchar(255) NOT NULL,
  `drive_train` varchar(255) NOT NULL,
  `trim` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `visibility` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `specification` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `json_id` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_listings`
--

INSERT INTO `car_listings` (`id`, `title`, `sub_title`, `description`, `brand`, `model`, `year`, `car_type`, `transmission`, `fuel_type`, `engine_size`, `cylinder`, `interior_color`, `exterior_color`, `drive_train`, `trim`, `mileage`, `vin`, `price`, `discount_price`, `visibility`, `category`, `feature`, `specification`, `meta_title`, `meta_keyword`, `meta_description`, `og_title`, `og_description`, `og_image`, `canonical_url`, `json_id`, `country`, `city`, `area`, `address`, `postal_code`, `Latitude`, `Longitude`, `image`, `created_at`, `updated_at`) VALUES
(2, 'dsfsdfsf', 'C300e AMG Line Night Ed Premium Plus', 'sdfsdfsdf', '33', '22', '2024', '28', '31', '29', '49', '35', '37', '40', '43', '46', '225', 'dfgdfg', '51', '345345', 'visible', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '1:@:5:@:asdasdasd', 'asdasdasd', '4334', '35.96689', '-64.03501', '[\"1-1719220319.jpg\"]', '2024-06-24 01:17:37', '2024-07-17 02:34:21'),
(3, 'this update working', 'sub title of listing', 'sddsdfsdfsdf', '33', '23', '2021', '27', '32', '30', '50', '35', '37', '41', '45', '46', '333', 'dfgdfg', '100', '80', 'visible', 7, NULL, NULL, 'testesfsdf', 'dfd; ksjdfkjsd;', 'sdfsdfsdfsdf', 'sdfsdf', 'sdfsdf', NULL, 'sdfsdf', 'sdfsdf', '1', '7', '1:@:7:@:sdfsdf', 'sdfsdf', '34', '33.21801', '-59.72651', '[\"0-1719317207.png\",\"1-1719317207.png\",\"3-1719317207.png\",\"0-1719317401.jpg\",\"0-1719317412.jpg\",\"0-1719317437.jpg\",\"1-1719317438.jpg\"]', '2024-06-25 06:13:30', '2024-07-17 02:34:57'),
(6, 'sdfsdfsdf', 'C300e AMG Line Night Ed Premium Plus', 'sdfsdf', '33', '22', '2022', '26', '31', '30', '50', '36', '37', '41', '43', '47', '333', 'dfgdfg', '53', '3', 'visible', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '1:@:5:@:sdfsdf', 'sdfsdf', '4334', '36.10903', '-59.59462', '[\"0-1719317727.png\",\"1-1719317727.png\",\"2-1719317727.png\"]', '2024-06-25 06:18:42', '2024-06-25 06:18:42'),
(8, 'test', 'C300e AMG Line Night Ed Premium Plus', 'test', '33', '23', '2023', '26', '31', '29', '50', '35', '37', '41', '44', '47', '333', 'dded', '66', '80', 'visible', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '7', '1:@:7:@:test', 'test', '34', '35.39577', '-61.61698', '[\"0-1719382288.png\",\"1-1719382289.png\",\"2-1719382289.png\"]', '2024-06-26 00:11:28', '2024-06-26 00:11:37'),
(9, 'sdfsdf', 'C300e AMG Line Night Ed Premium Plus', 'sdfsdfsdf', '33', '23', '2012', '27', '32', '29', '49', '36', '39', '42', '43', '46', '333', 'dfgdfg', '66', '345345', 'visible', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '1:@:5:@:dfsdfdsxf', 'dfsdfdsxf', '34', '33.51850', '-52.30720', '[\"0-1719485091.jpg\",\"1-1719485091.jpg\"]', '2024-06-27 04:44:51', '2024-06-27 04:44:51'),
(10, 'sdfsdfsdf', 'C300e AMG Line Night Ed Premium Plus', 'sdfsdf', '33', '22', '2022', '26', '31', '30', '50', '36', '37', '41', '43', '47', '333', 'dfgdfg', '53', '3', 'visible', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '1:@:5:@:sdfsdf', 'sdfsdf', '4334', '36.10903', '-59.59462', '[\"0-1719317727.png\",\"1-1719317727.png\",\"2-1719317727.png\"]', '2024-06-25 06:18:42', '2024-06-25 06:18:42'),
(11, 'dsfsdfsf', 'C300e AMG Line Night Ed Premium Plus', 'sdfsdfsdf', '32', '22', '2024', '28', '31', '29', '49', '35', '37', '40', '43', '46', '225', 'dfgdfg', '51', '345345', 'visible', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '1:@:5:@:asdasdasd', 'asdasdasd', '4334', '35.96689', '-64.03501', '[\"1-1719220319.jpg\"]', '2024-06-24 01:17:37', '2024-06-24 06:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `type`, `created_at`, `updated_at`) VALUES
(5, 'asdasd', '0', 'car', '2024-05-30 04:58:08', '2024-05-30 04:58:08'),
(7, 'sdfsdfsf', '0', 'car', '2024-05-30 05:00:13', '2024-05-30 05:00:13'),
(8, 'sdfsdfsdf', '0', 'beauty', '2024-05-30 05:00:58', '2024-05-30 05:00:58'),
(9, 'dsdfsdf', '8', 'beauty', '2024-05-30 05:01:06', '2024-05-30 05:01:06'),
(10, 'sdfsdfsdf', '5', 'car', '2024-05-30 05:06:50', '2024-05-30 05:06:50'),
(17, 'Gibson', '0', 'doctor', '2024-06-03 03:43:21', '2024-06-03 03:43:21'),
(18, 'dfgdd444', '0', 'doctor', '2024-06-03 04:25:28', '2024-06-03 05:02:12'),
(19, 'Gi', '18', 'doctor', NULL, '2024-06-03 04:31:32'),
(20, 'dfsdfdd', '17', 'doctor', '2024-06-03 05:02:02', '2024-06-03 05:02:56'),
(21, 'test', '0', 'real-estate', '2024-06-30 05:06:08', '2024-06-30 05:06:08'),
(22, 'test', '21', 'real-estate', '2024-06-30 05:06:15', '2024-06-30 05:06:15'),
(23, 'Alice David', '0', 'hotel', '2024-07-01 04:04:25', '2024-07-01 04:04:25'),
(24, 'Desirae Mills', '0', 'hotel', '2024-07-01 04:04:31', '2024-07-01 04:04:31'),
(25, 'Leslie Donovan', '23', 'hotel', '2024-07-01 04:04:37', '2024-07-01 04:04:37'),
(26, 'Cynthia Summers', '24', 'hotel', '2024-07-01 04:04:42', '2024-07-01 04:04:42'),
(27, 'test', '0', 'restaurant', '2024-07-04 03:29:52', '2024-07-04 03:29:52'),
(28, 'tesdet', '27', 'restaurant', '2024-07-04 03:30:02', '2024-07-04 03:30:02'),
(29, 'Gibson', '0', 'restaurant', '2024-07-04 03:30:08', '2024-07-04 03:30:08'),
(30, 'Beauty Salon', '0', 'beauty', '2024-09-22 04:56:15', '2024-09-22 04:56:15'),
(31, 'Hair Salon', '0', 'beauty', '2024-09-22 04:56:32', '2024-09-22 04:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country`, `created_at`, `updated_at`) VALUES
(3, 'Dhaka', 18, '2024-10-02 01:14:51', '2024-10-02 01:14:51'),
(4, 'Gibson', 2, '2024-06-12 01:11:37', '2024-06-12 01:11:37'),
(5, 'test', 1, '2024-06-12 01:11:12', '2024-06-12 01:11:12'),
(6, 'sdfsdfsdf', 2, '2024-06-12 01:11:22', '2024-06-12 01:11:22'),
(7, 'sdfsdfsdf', 1, '2024-10-02 01:15:24', '2024-10-02 01:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `dial_code` varchar(255) DEFAULT NULL,
  `currency_name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `currency_symbol` int(11) DEFAULT NULL,
  `currency_code` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `dial_code`, `currency_name`, `thumbnail`, `currency_symbol`, `currency_code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AF', '+93', 'Afghan afghani', '1727859333.webp', 0, 0, NULL, '2024-10-02 02:55:33'),
(2, 'Aland Islands', 'AX', '+358', '', '1727859627.webp', 0, 0, NULL, '2024-10-02 03:00:27'),
(3, 'Albania', 'AL', '+355', 'Albanian lek', NULL, 0, 0, NULL, NULL),
(4, 'Algeria', 'DZ', '+213', 'Algerian dinar', NULL, 0, 0, NULL, NULL),
(5, 'AmericanSamoa', 'AS', '+1684', '', NULL, 0, 0, NULL, NULL),
(6, 'Andorra', 'AD', '+376', 'Euro', NULL, 0, 0, NULL, NULL),
(7, 'Angola', 'AO', '+244', 'Angolan kwanza', NULL, 0, 0, NULL, NULL),
(8, 'Anguilla', 'AI', '+1264', 'East Caribbean dolla', NULL, 0, 0, NULL, NULL),
(9, 'Antarctica', 'AQ', '+672', '', NULL, 0, 0, NULL, NULL),
(10, 'Antigua and Barbuda', 'AG', '+1268', 'East Caribbean dolla', NULL, 0, 0, NULL, NULL),
(11, 'Argentina', 'AR', '+54', 'Argentine peso', NULL, 0, 0, NULL, NULL),
(12, 'Armenia', 'AM', '+374', 'Armenian dram', NULL, 0, 0, NULL, NULL),
(13, 'Aruba', 'AW', '+297', 'Aruban florin', NULL, 0, 0, NULL, NULL),
(14, 'Australia', 'AU', '+61', 'Australian dollar', NULL, 0, 0, NULL, NULL),
(15, 'Austria', 'AT', '+43', 'Euro', NULL, 0, 0, NULL, NULL),
(16, 'Azerbaijan', 'AZ', '+994', 'Azerbaijani manat', NULL, 0, 0, NULL, NULL),
(17, 'Bahamas', 'BS', '+1242', '', NULL, 0, 0, NULL, NULL),
(18, 'Bahrain', 'BH', '+973', 'Bahraini dinar', '1727859648.webp', 0, 0, NULL, '2024-10-02 03:00:48'),
(19, 'Bangladesh', 'BD', '+880', 'Bangladeshi taka', NULL, 0, 0, NULL, NULL),
(20, 'Barbados', 'BB', '+1246', 'Barbadian dollar', NULL, 0, 0, NULL, NULL),
(21, 'Belarus', 'BY', '+375', 'Belarusian ruble', NULL, 0, 0, NULL, NULL),
(22, 'Belgium', 'BE', '+32', 'Euro', NULL, 0, 0, NULL, NULL),
(23, 'Belize', 'BZ', '+501', 'Belize dollar', NULL, 0, 0, NULL, NULL),
(24, 'Benin', 'BJ', '+229', 'West African CFA fra', NULL, 0, 0, NULL, NULL),
(25, 'Bermuda', 'BM', '+1441', 'Bermudian dollar', NULL, 0, 0, NULL, NULL),
(26, 'Bhutan', 'BT', '+975', 'Bhutanese ngultrum', NULL, 0, 0, NULL, NULL),
(27, 'Bolivia, Plurination', 'BO', '+591', '', NULL, 0, 0, NULL, NULL),
(28, 'Bosnia and Herzegovi', 'BA', '+387', '', NULL, 0, 0, NULL, NULL),
(29, 'Botswana', 'BW', '+267', 'Botswana pula', NULL, 0, 0, NULL, NULL),
(30, 'Brazil', 'BR', '+55', 'Brazilian real', NULL, 0, 0, NULL, NULL),
(31, 'British Indian Ocean', 'IO', '+246', '', NULL, 0, 0, NULL, NULL),
(32, 'Brunei Darussalam', 'BN', '+673', '', NULL, 0, 0, NULL, NULL),
(33, 'Bulgaria', 'BG', '+359', 'Bulgarian lev', NULL, 0, 0, NULL, NULL),
(34, 'Burkina Faso', 'BF', '+226', 'West African CFA fra', NULL, 0, 0, NULL, NULL),
(35, 'Burundi', 'BI', '+257', 'Burundian franc', NULL, 0, 0, NULL, NULL),
(36, 'Cambodia', 'KH', '+855', 'Cambodian riel', NULL, 0, 0, NULL, NULL),
(37, 'Cameroon', 'CM', '+237', 'Central African CFA ', NULL, 0, 0, NULL, NULL),
(38, 'Canada', 'CA', '+1', 'Canadian dollar', NULL, 0, 0, NULL, NULL),
(39, 'Cape Verde', 'CV', '+238', 'Cape Verdean escudo', NULL, 0, 0, NULL, NULL),
(40, 'Cayman Islands', 'KY', '+ 345', 'Cayman Islands dolla', NULL, 0, 0, NULL, NULL),
(41, 'Central African Repu', 'CF', '+236', '', NULL, 0, 0, NULL, NULL),
(42, 'Chad', 'TD', '+235', 'Central African CFA ', NULL, 0, 0, NULL, NULL),
(43, 'Chile', 'CL', '+56', 'Chilean peso', NULL, 0, 0, NULL, NULL),
(44, 'China', 'CN', '+86', 'Chinese yuan', NULL, 0, 0, NULL, NULL),
(45, 'Christmas Island', 'CX', '+61', '', NULL, 0, 0, NULL, NULL),
(46, 'Cocos (Keeling) Isla', 'CC', '+61', '', NULL, 0, 0, NULL, NULL),
(47, 'Colombia', 'CO', '+57', 'Colombian peso', NULL, 0, 0, NULL, NULL),
(48, 'Comoros', 'KM', '+269', 'Comorian franc', NULL, 0, 0, NULL, NULL),
(49, 'Congo', 'CG', '+242', '', NULL, 0, 0, NULL, NULL),
(50, 'Congo, The Democrati', 'CD', '+243', '', NULL, 0, 0, NULL, NULL),
(51, 'Cook Islands', 'CK', '+682', 'New Zealand dollar', NULL, 0, 0, NULL, NULL),
(52, 'Costa Rica', 'CR', '+506', 'Costa Rican colón', NULL, 0, 0, NULL, NULL),
(53, 'Cote d\'Ivoire', 'CI', '+225', 'West African CFA fra', NULL, 0, 0, NULL, NULL),
(54, 'Croatia', 'HR', '+385', 'Croatian kuna', NULL, 0, 0, NULL, NULL),
(55, 'Cuba', 'CU', '+53', 'Cuban convertible pe', NULL, 0, 0, NULL, NULL),
(56, 'Cyprus', 'CY', '+357', 'Euro', NULL, 0, 0, NULL, NULL),
(57, 'Czech Republic', 'CZ', '+420', 'Czech koruna', NULL, 0, 0, NULL, NULL),
(58, 'Denmark', 'DK', '+45', 'Danish krone', NULL, 0, 0, NULL, NULL),
(59, 'Djibouti', 'DJ', '+253', 'Djiboutian franc', NULL, 0, 0, NULL, NULL),
(60, 'Dominica', 'DM', '+1767', 'East Caribbean dolla', NULL, 0, 0, NULL, NULL),
(61, 'Dominican Republic', 'DO', '+1849', 'Dominican peso', NULL, 0, 0, NULL, NULL),
(62, 'Ecuador', 'EC', '+593', 'United States dollar', NULL, 0, 0, NULL, NULL),
(63, 'Egypt', 'EG', '+20', 'Egyptian pound', NULL, 0, 0, NULL, NULL),
(64, 'El Salvador', 'SV', '+503', 'United States dollar', NULL, 0, 0, NULL, NULL),
(65, 'Equatorial Guinea', 'GQ', '+240', 'Central African CFA ', NULL, 0, 0, NULL, NULL),
(66, 'Eritrea', 'ER', '+291', 'Eritrean nakfa', NULL, 0, 0, NULL, NULL),
(67, 'Estonia', 'EE', '+372', 'Euro', NULL, 0, 0, NULL, NULL),
(68, 'Ethiopia', 'ET', '+251', 'Ethiopian birr', NULL, 0, 0, NULL, NULL),
(69, 'Falkland Islands (Ma', 'FK', '+500', '', NULL, 0, 0, NULL, NULL),
(70, 'Faroe Islands', 'FO', '+298', 'Danish krone', NULL, 0, 0, NULL, NULL),
(71, 'Fiji', 'FJ', '+679', 'Fijian dollar', NULL, 0, 0, NULL, NULL),
(72, 'Finland', 'FI', '+358', 'Euro', NULL, 0, 0, NULL, NULL),
(73, 'France', 'FR', '+33', 'Euro', NULL, 0, 0, NULL, NULL),
(74, 'French Guiana', 'GF', '+594', '', NULL, 0, 0, NULL, NULL),
(75, 'French Polynesia', 'PF', '+689', 'CFP franc', NULL, 0, 0, NULL, NULL),
(76, 'Gabon', 'GA', '+241', 'Central African CFA ', NULL, 0, 0, NULL, NULL),
(77, 'Gambia', 'GM', '+220', '', NULL, 0, 0, NULL, NULL),
(78, 'Georgia', 'GE', '+995', 'Georgian lari', NULL, 0, 0, NULL, NULL),
(79, 'Germany', 'DE', '+49', 'Euro', NULL, 0, 0, NULL, NULL),
(80, 'Ghana', 'GH', '+233', 'Ghana cedi', NULL, 0, 0, NULL, NULL),
(81, 'Gibraltar', 'GI', '+350', 'Gibraltar pound', NULL, 0, 0, NULL, NULL),
(82, 'Greece', 'GR', '+30', 'Euro', NULL, 0, 0, NULL, NULL),
(83, 'Greenland', 'GL', '+299', '', NULL, 0, 0, NULL, NULL),
(84, 'Grenada', 'GD', '+1473', 'East Caribbean dolla', NULL, 0, 0, NULL, NULL),
(85, 'Guadeloupe', 'GP', '+590', '', NULL, 0, 0, NULL, NULL),
(86, 'Guam', 'GU', '+1671', '', NULL, 0, 0, NULL, NULL),
(87, 'Guatemala', 'GT', '+502', 'Guatemalan quetzal', NULL, 0, 0, NULL, NULL),
(88, 'Guernsey', 'GG', '+44', 'British pound', NULL, 0, 0, NULL, NULL),
(89, 'Guinea', 'GN', '+224', 'Guinean franc', NULL, 0, 0, NULL, NULL),
(90, 'Guinea-Bissau', 'GW', '+245', 'West African CFA fra', NULL, 0, 0, NULL, NULL),
(91, 'Guyana', 'GY', '+595', 'Guyanese dollar', NULL, 0, 0, NULL, NULL),
(92, 'Haiti', 'HT', '+509', 'Haitian gourde', NULL, 0, 0, NULL, NULL),
(93, 'Holy See (Vatican Ci', 'VA', '+379', '', NULL, 0, 0, NULL, NULL),
(94, 'Honduras', 'HN', '+504', 'Honduran lempira', NULL, 0, 0, NULL, NULL),
(95, 'Hong Kong', 'HK', '+852', 'Hong Kong dollar', NULL, 0, 0, NULL, NULL),
(96, 'Hungary', 'HU', '+36', 'Hungarian forint', NULL, 0, 0, NULL, NULL),
(97, 'Iceland', 'IS', '+354', 'Icelandic króna', NULL, 0, 0, NULL, NULL),
(98, 'India', 'IN', '+91', 'Indian rupee', NULL, 0, 0, NULL, NULL),
(99, 'Indonesia', 'ID', '+62', 'Indonesian rupiah', NULL, 0, 0, NULL, NULL),
(100, 'Iran, Islamic Republ', 'IR', '+98', '', NULL, 0, 0, NULL, NULL),
(101, 'Iraq', 'IQ', '+964', 'Iraqi dinar', NULL, 0, 0, NULL, NULL),
(102, 'Ireland', 'IE', '+353', 'Euro', NULL, 0, 0, NULL, NULL),
(103, 'Isle of Man', 'IM', '+44', 'British pound', NULL, 0, 0, NULL, NULL),
(104, 'Israel', 'IL', '+972', 'Israeli new shekel', NULL, 0, 0, NULL, NULL),
(105, 'Italy', 'IT', '+39', 'Euro', NULL, 0, 0, NULL, NULL),
(106, 'Jamaica', 'JM', '+1876', 'Jamaican dollar', NULL, 0, 0, NULL, NULL),
(107, 'Japan', 'JP', '+81', 'Japanese yen', NULL, 0, 0, NULL, NULL),
(108, 'Jersey', 'JE', '+44', 'British pound', NULL, 0, 0, NULL, NULL),
(109, 'Jordan', 'JO', '+962', 'Jordanian dinar', NULL, 0, 0, NULL, NULL),
(110, 'Kazakhstan', 'KZ', '+7 7', 'Kazakhstani tenge', NULL, 0, 0, NULL, NULL),
(111, 'Kenya', 'KE', '+254', 'Kenyan shilling', NULL, 0, 0, NULL, NULL),
(112, 'Kiribati', 'KI', '+686', 'Australian dollar', NULL, 0, 0, NULL, NULL),
(113, 'Korea, Democratic Pe', 'KP', '+850', '', NULL, 0, 0, NULL, NULL),
(114, 'Korea, Republic of S', 'KR', '+82', '', NULL, 0, 0, NULL, NULL),
(115, 'Kuwait', 'KW', '+965', 'Kuwaiti dinar', NULL, 0, 0, NULL, NULL),
(116, 'Kyrgyzstan', 'KG', '+996', 'Kyrgyzstani som', NULL, 0, 0, NULL, NULL),
(117, 'Laos', 'LA', '+856', 'Lao kip', NULL, 0, 0, NULL, NULL),
(118, 'Latvia', 'LV', '+371', 'Euro', NULL, 0, 0, NULL, NULL),
(119, 'Lebanon', 'LB', '+961', 'Lebanese pound', NULL, 0, 0, NULL, NULL),
(120, 'Lesotho', 'LS', '+266', 'Lesotho loti', NULL, 0, 0, NULL, NULL),
(121, 'Liberia', 'LR', '+231', 'Liberian dollar', NULL, 0, 0, NULL, NULL),
(122, 'Libyan Arab Jamahiri', 'LY', '+218', '', NULL, 0, 0, NULL, NULL),
(123, 'Liechtenstein', 'LI', '+423', 'Swiss franc', NULL, 0, 0, NULL, NULL),
(124, 'Lithuania', 'LT', '+370', 'Euro', NULL, 0, 0, NULL, NULL),
(125, 'Luxembourg', 'LU', '+352', 'Euro', NULL, 0, 0, NULL, NULL),
(126, 'Macao', 'MO', '+853', '', NULL, 0, 0, NULL, NULL),
(127, 'Macedonia', 'MK', '+389', '', NULL, 0, 0, NULL, NULL),
(128, 'Madagascar', 'MG', '+261', 'Malagasy ariary', NULL, 0, 0, NULL, NULL),
(129, 'Malawi', 'MW', '+265', 'Malawian kwacha', NULL, 0, 0, NULL, NULL),
(130, 'Malaysia', 'MY', '+60', 'Malaysian ringgit', NULL, 0, 0, NULL, NULL),
(131, 'Maldives', 'MV', '+960', 'Maldivian rufiyaa', NULL, 0, 0, NULL, NULL),
(132, 'Mali', 'ML', '+223', 'West African CFA fra', NULL, 0, 0, NULL, NULL),
(133, 'Malta', 'MT', '+356', 'Euro', NULL, 0, 0, NULL, NULL),
(134, 'Marshall Islands', 'MH', '+692', 'United States dollar', NULL, 0, 0, NULL, NULL),
(135, 'Martinique', 'MQ', '+596', '', NULL, 0, 0, NULL, NULL),
(136, 'Mauritania', 'MR', '+222', 'Mauritanian ouguiya', NULL, 0, 0, NULL, NULL),
(137, 'Mauritius', 'MU', '+230', 'Mauritian rupee', NULL, 0, 0, NULL, NULL),
(138, 'Mayotte', 'YT', '+262', '', NULL, 0, 0, NULL, NULL),
(139, 'Mexico', 'MX', '+52', 'Mexican peso', NULL, 0, 0, NULL, NULL),
(140, 'Micronesia, Federate', 'FM', '+691', '', NULL, 0, 0, NULL, NULL),
(141, 'Moldova', 'MD', '+373', 'Moldovan leu', NULL, 0, 0, NULL, NULL),
(142, 'Monaco', 'MC', '+377', 'Euro', NULL, 0, 0, NULL, NULL),
(143, 'Mongolia', 'MN', '+976', 'Mongolian tögrög', NULL, 0, 0, NULL, NULL),
(144, 'Montenegro', 'ME', '+382', 'Euro', NULL, 0, 0, NULL, NULL),
(145, 'Montserrat', 'MS', '+1664', 'East Caribbean dolla', NULL, 0, 0, NULL, NULL),
(146, 'Morocco', 'MA', '+212', 'Moroccan dirham', NULL, 0, 0, NULL, NULL),
(147, 'Mozambique', 'MZ', '+258', 'Mozambican metical', NULL, 0, 0, NULL, NULL),
(148, 'Myanmar', 'MM', '+95', 'Burmese kyat', NULL, 0, 0, NULL, NULL),
(149, 'Namibia', 'NA', '+264', 'Namibian dollar', NULL, 0, 0, NULL, NULL),
(150, 'Nauru', 'NR', '+674', 'Australian dollar', NULL, 0, 0, NULL, NULL),
(151, 'Nepal', 'NP', '+977', 'Nepalese rupee', NULL, 0, 0, NULL, NULL),
(152, 'Netherlands', 'NL', '+31', 'Euro', NULL, 0, 0, NULL, NULL),
(153, 'Netherlands Antilles', 'AN', '+599', '', NULL, 0, 0, NULL, NULL),
(154, 'New Caledonia', 'NC', '+687', 'CFP franc', NULL, 0, 0, NULL, NULL),
(155, 'New Zealand', 'NZ', '+64', 'New Zealand dollar', NULL, 0, 0, NULL, NULL),
(156, 'Nicaragua', 'NI', '+505', 'Nicaraguan córdoba', NULL, 0, 0, NULL, NULL),
(157, 'Niger', 'NE', '+227', 'West African CFA fra', NULL, 0, 0, NULL, NULL),
(158, 'Nigeria', 'NG', '+234', 'Nigerian naira', NULL, 0, 0, NULL, NULL),
(159, 'Niue', 'NU', '+683', 'New Zealand dollar', NULL, 0, 0, NULL, NULL),
(160, 'Norfolk Island', 'NF', '+672', '', NULL, 0, 0, NULL, NULL),
(161, 'Northern Mariana Isl', 'MP', '+1670', '', NULL, 0, 0, NULL, NULL),
(162, 'Norway', 'NO', '+47', 'Norwegian krone', NULL, 0, 0, NULL, NULL),
(163, 'Oman', 'OM', '+968', 'Omani rial', NULL, 0, 0, NULL, NULL),
(164, 'Pakistan', 'PK', '+92', 'Pakistani rupee', NULL, 0, 0, NULL, NULL),
(165, 'Palau', 'PW', '+680', 'Palauan dollar', NULL, 0, 0, NULL, NULL),
(166, 'Palestinian Territor', 'PS', '+970', '', NULL, 0, 0, NULL, NULL),
(167, 'Panama', 'PA', '+507', 'Panamanian balboa', NULL, 0, 0, NULL, NULL),
(168, 'Papua New Guinea', 'PG', '+675', 'Papua New Guinean ki', NULL, 0, 0, NULL, NULL),
(169, 'Paraguay', 'PY', '+595', 'Paraguayan guaraní', NULL, 0, 0, NULL, NULL),
(170, 'Peru', 'PE', '+51', 'Peruvian nuevo sol', NULL, 0, 0, NULL, NULL),
(171, 'Philippines', 'PH', '+63', 'Philippine peso', NULL, 0, 0, NULL, NULL),
(172, 'Pitcairn', 'PN', '+872', '', NULL, 0, 0, NULL, NULL),
(173, 'Poland', 'PL', '+48', 'Polish z?oty', NULL, 0, 0, NULL, NULL),
(174, 'Portugal', 'PT', '+351', 'Euro', NULL, 0, 0, NULL, NULL),
(175, 'Puerto Rico', 'PR', '+1939', '', NULL, 0, 0, NULL, NULL),
(176, 'Qatar', 'QA', '+974', 'Qatari riyal', NULL, 0, 0, NULL, NULL),
(177, 'Romania', 'RO', '+40', 'Romanian leu', NULL, 0, 0, NULL, NULL),
(178, 'Russia', 'RU', '+7', 'Russian ruble', NULL, 0, 0, NULL, NULL),
(179, 'Rwanda', 'RW', '+250', 'Rwandan franc', NULL, 0, 0, NULL, NULL),
(180, 'Reunion', 'RE', '+262', '', NULL, 0, 0, NULL, NULL),
(181, 'Saint Barthelemy', 'BL', '+590', '', NULL, 0, 0, NULL, NULL),
(182, 'Saint Helena, Ascens', 'SH', '+290', '', NULL, 0, 0, NULL, NULL),
(183, 'Saint Kitts and Nevi', 'KN', '+1869', '', NULL, 0, 0, NULL, NULL),
(184, 'Saint Lucia', 'LC', '+1758', 'East Caribbean dolla', NULL, 0, 0, NULL, NULL),
(185, 'Saint Martin', 'MF', '+590', '', NULL, 0, 0, NULL, NULL),
(186, 'Saint Pierre and Miq', 'PM', '+508', '', NULL, 0, 0, NULL, NULL),
(187, 'Saint Vincent and th', 'VC', '+1784', '', NULL, 0, 0, NULL, NULL),
(188, 'Samoa', 'WS', '+685', 'Samoan t?l?', NULL, 0, 0, NULL, NULL),
(189, 'San Marino', 'SM', '+378', 'Euro', NULL, 0, 0, NULL, NULL),
(190, 'Sao Tome and Princip', 'ST', '+239', '', NULL, 0, 0, NULL, NULL),
(191, 'Saudi Arabia', 'SA', '+966', 'Saudi riyal', NULL, 0, 0, NULL, NULL),
(192, 'Senegal', 'SN', '+221', 'West African CFA fra', NULL, 0, 0, NULL, NULL),
(193, 'Serbia', 'RS', '+381', 'Serbian dinar', NULL, 0, 0, NULL, NULL),
(194, 'Seychelles', 'SC', '+248', 'Seychellois rupee', NULL, 0, 0, NULL, NULL),
(195, 'Sierra Leone', 'SL', '+232', 'Sierra Leonean leone', NULL, 0, 0, NULL, NULL),
(196, 'Singapore', 'SG', '+65', 'Brunei dollar', NULL, 0, 0, NULL, NULL),
(197, 'Slovakia', 'SK', '+421', 'Euro', NULL, 0, 0, NULL, NULL),
(198, 'Slovenia', 'SI', '+386', 'Euro', NULL, 0, 0, NULL, NULL),
(199, 'Solomon Islands', 'SB', '+677', 'Solomon Islands doll', NULL, 0, 0, NULL, NULL),
(200, 'Somalia', 'SO', '+252', 'Somali shilling', NULL, 0, 0, NULL, NULL),
(201, 'South Africa', 'ZA', '+27', 'South African rand', NULL, 0, 0, NULL, NULL),
(202, 'South Georgia and th', 'GS', '+500', '', NULL, 0, 0, NULL, NULL),
(203, 'Spain', 'ES', '+34', 'Euro', NULL, 0, 0, NULL, NULL),
(204, 'Sri Lanka', 'LK', '+94', 'Sri Lankan rupee', NULL, 0, 0, NULL, NULL),
(205, 'Sudan', 'SD', '+249', 'Sudanese pound', NULL, 0, 0, NULL, NULL),
(206, 'Suriname', 'SR', '+597', 'Surinamese dollar', NULL, 0, 0, NULL, NULL),
(207, 'Svalbard and Jan May', 'SJ', '+47', '', NULL, 0, 0, NULL, NULL),
(208, 'Swaziland', 'SZ', '+268', 'Swazi lilangeni', NULL, 0, 0, NULL, NULL),
(209, 'Sweden', 'SE', '+46', 'Swedish krona', NULL, 0, 0, NULL, NULL),
(210, 'Switzerland', 'CH', '+41', 'Swiss franc', NULL, 0, 0, NULL, NULL),
(211, 'Syrian Arab Republic', 'SY', '+963', '', NULL, 0, 0, NULL, NULL),
(212, 'Taiwan', 'TW', '+886', 'New Taiwan dollar', NULL, 0, 0, NULL, NULL),
(213, 'Tajikistan', 'TJ', '+992', 'Tajikistani somoni', NULL, 0, 0, NULL, NULL),
(214, 'Tanzania, United Rep', 'TZ', '+255', '', NULL, 0, 0, NULL, NULL),
(215, 'Thailand', 'TH', '+66', 'Thai baht', NULL, 0, 0, NULL, NULL),
(216, 'Timor-Leste', 'TL', '+670', '', NULL, 0, 0, NULL, NULL),
(217, 'Togo', 'TG', '+228', 'West African CFA fra', NULL, 0, 0, NULL, NULL),
(218, 'Tokelau', 'TK', '+690', '', NULL, 0, 0, NULL, NULL),
(219, 'Tonga', 'TO', '+676', 'Tongan pa?anga', NULL, 0, 0, NULL, NULL),
(220, 'Trinidad and Tobago', 'TT', '+1868', 'Trinidad and Tobago ', NULL, 0, 0, NULL, NULL),
(221, 'Tunisia', 'TN', '+216', 'Tunisian dinar', NULL, 0, 0, NULL, NULL),
(222, 'Turkey', 'TR', '+90', 'Turkish lira', NULL, 0, 0, NULL, NULL),
(223, 'Turkmenistan', 'TM', '+993', 'Turkmenistan manat', NULL, 0, 0, NULL, NULL),
(224, 'Turks and Caicos Isl', 'TC', '+1649', '', NULL, 0, 0, NULL, NULL),
(225, 'Tuvalu', 'TV', '+688', 'Australian dollar', NULL, 0, 0, NULL, NULL),
(226, 'Uganda', 'UG', '+256', 'Ugandan shilling', NULL, 0, 0, NULL, NULL),
(227, 'Ukraine', 'UA', '+380', 'Ukrainian hryvnia', NULL, 0, 0, NULL, NULL),
(228, 'United Arab Emirates', 'AE', '+971', 'United Arab Emirates', NULL, 0, 0, NULL, NULL),
(229, 'United Kingdom', 'GB', '+44', 'British pound', NULL, 0, 0, NULL, NULL),
(230, 'United States', 'US', '+1', 'United States dollar', NULL, 0, 0, NULL, NULL),
(231, 'Uruguay', 'UY', '+598', 'Uruguayan peso', NULL, 0, 0, NULL, NULL),
(232, 'Uzbekistan', 'UZ', '+998', 'Uzbekistani som', NULL, 0, 0, NULL, NULL),
(233, 'Vanuatu', 'VU', '+678', 'Vanuatu vatu', NULL, 0, 0, NULL, NULL),
(234, 'Venezuela, Bolivaria', 'VE', '+58', '', NULL, 0, 0, NULL, NULL),
(235, 'Vietnam', 'VN', '+84', 'Vietnamese ??ng', NULL, 0, 0, NULL, NULL),
(236, 'Virgin Islands, Brit', 'VG', '+1284', '', NULL, 0, 0, NULL, NULL),
(237, 'Virgin Islands, U.S.', 'VI', '+1340', '', NULL, 0, 0, NULL, NULL),
(238, 'Wallis and Futuna', 'WF', '+681', 'CFP franc', NULL, 0, 0, NULL, NULL),
(239, 'Yemen', 'YE', '+967', 'Yemeni rial', NULL, 0, 0, NULL, NULL),
(240, 'Zambia', 'ZM', '+260', 'Zambian kwacha', NULL, 0, 0, NULL, NULL),
(241, 'Zimbabwe', 'ZW', '+263', 'Botswana pula', NULL, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `symbol` varchar(100) DEFAULT NULL,
  `paypal_supported` int(11) NOT NULL DEFAULT 0,
  `stripe_supported` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `code`, `symbol`, `paypal_supported`, `stripe_supported`) VALUES
(1, 'Leke', 'ALL', 'Lek', 0, 1),
(2, 'Dollars', 'USD', '$', 1, 1),
(3, 'Afghanis', 'AFN', '؋', 0, 1),
(4, 'Pesos', 'ARS', '$', 0, 1),
(5, 'Guilders', 'AWG', 'ƒ', 0, 1),
(6, 'Dollars', 'AUD', '$', 1, 1),
(7, 'New Manats', 'AZN', 'ман', 0, 1),
(8, 'Dollars', 'BSD', '$', 0, 1),
(9, 'Dollars', 'BBD', '$', 0, 1),
(10, 'Rubles', 'BYR', 'p.', 0, 0),
(11, 'Euro', 'EUR', '€', 1, 1),
(12, 'Dollars', 'BZD', 'BZ$', 0, 1),
(13, 'Dollars', 'BMD', '$', 0, 1),
(14, 'Bolivianos', 'BOB', '$b', 0, 1),
(15, 'Convertible Marka', 'BAM', 'KM', 0, 1),
(16, 'Pula', 'BWP', 'P', 0, 1),
(17, 'Leva', 'BGN', 'лв', 0, 1),
(18, 'Reais', 'BRL', 'R$', 1, 1),
(19, 'Pounds', 'GBP', '£', 1, 1),
(20, 'Dollars', 'BND', '$', 0, 1),
(21, 'Riels', 'KHR', '៛', 0, 1),
(22, 'Dollars', 'CAD', '$', 1, 1),
(23, 'Dollars', 'KYD', '$', 0, 1),
(24, 'Pesos', 'CLP', '$', 0, 1),
(25, 'Yuan Renminbi', 'CNY', '¥', 0, 1),
(26, 'Pesos', 'COP', '$', 0, 1),
(27, 'Colón', 'CRC', '₡', 0, 1),
(28, 'Kuna', 'HRK', 'kn', 0, 1),
(29, 'Pesos', 'CUP', '₱', 0, 0),
(30, 'Koruny', 'CZK', 'Kč', 1, 1),
(31, 'Kroner', 'DKK', 'kr', 1, 1),
(32, 'Pesos', 'DOP ', 'RD$', 0, 1),
(33, 'Dollars', 'XCD', '$', 0, 1),
(34, 'Pounds', 'EGP', '£', 0, 1),
(35, 'Colones', 'SVC', '$', 0, 0),
(36, 'Pounds', 'FKP', '£', 0, 1),
(37, 'Dollars', 'FJD', '$', 0, 1),
(38, 'Cedis', 'GHC', '¢', 0, 0),
(39, 'Pounds', 'GIP', '£', 0, 1),
(40, 'Quetzales', 'GTQ', 'Q', 0, 1),
(41, 'Pounds', 'GGP', '£', 0, 0),
(42, 'Dollars', 'GYD', '$', 0, 1),
(43, 'Lempiras', 'HNL', 'L', 0, 1),
(44, 'Dollars', 'HKD', '$', 1, 1),
(45, 'Forint', 'HUF', 'Ft', 1, 1),
(46, 'Kronur', 'ISK', 'kr', 0, 1),
(47, 'Rupees', 'INR', 'Rp', 1, 1),
(48, 'Rupiahs', 'IDR', 'Rp', 0, 1),
(49, 'Rials', 'IRR', '﷼', 0, 0),
(50, 'Pounds', 'IMP', '£', 0, 0),
(51, 'New Shekels', 'ILS', '₪', 1, 1),
(52, 'Dollars', 'JMD', 'J$', 0, 1),
(53, 'Yen', 'JPY', '¥', 1, 1),
(54, 'Pounds', 'JEP', '£', 0, 0),
(55, 'Tenge', 'KZT', 'лв', 0, 1),
(56, 'Won', 'KPW', '₩', 0, 0),
(57, 'Won', 'KRW', '₩', 0, 1),
(58, 'Soms', 'KGS', 'лв', 0, 1),
(59, 'Kips', 'LAK', '₭', 0, 1),
(60, 'Lati', 'LVL', 'Ls', 0, 0),
(61, 'Pounds', 'LBP', '£', 0, 1),
(62, 'Dollars', 'LRD', '$', 0, 1),
(63, 'Switzerland Francs', 'CHF', 'CHF', 1, 1),
(64, 'Litai', 'LTL', 'Lt', 0, 0),
(65, 'Denars', 'MKD', 'ден', 0, 1),
(66, 'Ringgits', 'MYR', 'RM', 1, 1),
(67, 'Rupees', 'MUR', '₨', 0, 1),
(68, 'Pesos', 'MXN', '$', 1, 1),
(69, 'Tugriks', 'MNT', '₮', 0, 1),
(70, 'Meticais', 'MZN', 'MT', 0, 1),
(71, 'Dollars', 'NAD', '$', 0, 1),
(72, 'Rupees', 'NPR', '₨', 0, 1),
(73, 'Guilders', 'ANG', 'ƒ', 0, 1),
(74, 'Dollars', 'NZD', '$', 1, 1),
(75, 'Cordobas', 'NIO', 'C$', 0, 1),
(76, 'Nairas', 'NGN', '₦', 0, 1),
(77, 'Krone', 'NOK', 'kr', 1, 1),
(78, 'Rials', 'OMR', '﷼', 0, 0),
(79, 'Rupees', 'PKR', '₨', 0, 1),
(80, 'Balboa', 'PAB', 'B/.', 0, 1),
(81, 'Guarani', 'PYG', 'Gs', 0, 1),
(82, 'Nuevos Soles', 'PEN', 'S/.', 0, 1),
(83, 'Pesos', 'PHP', 'Php', 1, 1),
(84, 'Zlotych', 'PLN', 'zł', 1, 1),
(85, 'Rials', 'QAR', '﷼', 0, 1),
(86, 'New Lei', 'RON', 'lei', 0, 1),
(87, 'Rubles', 'RUB', 'руб', 0, 1),
(88, 'Pounds', 'SHP', '£', 0, 1),
(89, 'Riyals', 'SAR', '﷼', 0, 1),
(90, 'Dinars', 'RSD', 'Дин.', 0, 1),
(91, 'Rupees', 'SCR', '₨', 0, 1),
(92, 'Dollars', 'SGD', '$', 1, 1),
(93, 'Dollars', 'SBD', '$', 0, 1),
(94, 'Shillings', 'SOS', 'S', 0, 1),
(95, 'Rand', 'ZAR', 'R', 0, 1),
(96, 'Rupees', 'LKR', '₨', 0, 1),
(97, 'Kronor', 'SEK', 'kr', 1, 1),
(98, 'Dollars', 'SRD', '$', 0, 1),
(99, 'Pounds', 'SYP', '£', 0, 0),
(100, 'New Dollars', 'TWD', 'NT$', 1, 1),
(101, 'Baht', 'THB', '฿', 1, 1),
(102, 'Dollars', 'TTD', 'TT$', 0, 1),
(103, 'Lira', 'TRY', 'TL', 0, 1),
(104, 'Liras', 'TRL', '£', 0, 0),
(105, 'Dollars', 'TVD', '$', 0, 0),
(106, 'Hryvnia', 'UAH', '₴', 0, 1),
(107, 'Pesos', 'UYU', '$U', 0, 1),
(108, 'Sums', 'UZS', 'лв', 0, 1),
(109, 'Bolivares Fuertes', 'VEF', 'Bs', 0, 0),
(110, 'Dong', 'VND', '₫', 0, 1),
(111, 'Rials', 'YER', '﷼', 0, 1),
(112, 'Zimbabwe Dollars', 'ZWD', 'Z$', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontend_settings`
--

CREATE TABLE `frontend_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_settings`
--

INSERT INTO `frontend_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'map_position', 'right', '2024-07-16 04:41:17', '2024-07-31 01:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `json_id` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_listings`
--

CREATE TABLE `hotel_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `room` varchar(255) DEFAULT NULL,
  `bed` varchar(255) NOT NULL,
  `bath` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `visibility` varchar(255) NOT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` varchar(500) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `json_id` varchar(255) DEFAULT NULL,
  `country` bigint(20) NOT NULL,
  `city` bigint(20) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_listings`
--

INSERT INTO `hotel_listings` (`id`, `title`, `room`, `bed`, `bath`, `size`, `price`, `discount_price`, `visibility`, `feature`, `image`, `category`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `og_title`, `og_description`, `canonical_url`, `json_id`, `country`, `city`, `area`, `address`, `postal_code`, `Latitude`, `Longitude`, `dimension`, `created_at`, `updated_at`) VALUES
(2, 'asda sdas d', '[\"6\"]', '44', '4', '4', '66', NULL, 'visible', '[\"83\",\"84\",\"85\",\"86\",\"87\"]', '[\"0-1719829151.jpg\"]', '24', 'sdfsdfsf', NULL, NULL, NULL, 'og_time', NULL, NULL, NULL, 1, 7, '1:@:7:@:sdfsdf', 'sdfsdf', '34', '34.35024', '-62.40833', 'ssdfsdf', '2024-07-01 04:19:11', '2024-09-18 04:04:34'),
(3, 'dfgd gf d fg', '[\"2\",\"10\",\"11\",\"12\",\"13\"]', '3', '34', '34', '44', NULL, 'visible', '[\"84\",\"85\",\"86\"]', '[\"0-1719829221.png\",\"1-1719829221.png\"]', '26', '343434', NULL, NULL, NULL, 'og_time', NULL, NULL, NULL, 1, 7, '1:@:7:@:34434', '34434', '34', '36.07352', '-65.00222', '44werrsdf', '2024-07-01 04:20:21', '2024-07-04 03:10:23'),
(4, 'dfsdfsdfsf', NULL, '44', '44', '44', '66', NULL, 'visible', '[\"83\",\"84\",\"85\",\"86\",\"87\"]', '[\"0-1721280927.png\",\"1-1721280928.png\",\"2-1721280928.png\",\"3-1721280928.png\"]', '24', '444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, '1:@:7:@:4434', '4434', '44', '35.61042', '-67.33233', 'ssdfsdf', '2024-07-17 23:35:27', '2024-07-17 23:35:27'),
(5, 'dfsdfsdfsf', NULL, '44', '44', '44', '66', NULL, 'visible', '[\"83\",\"84\",\"85\",\"86\",\"87\"]', '[\"0-1721280927.png\",\"1-1721280928.png\",\"2-1721280928.png\",\"3-1721280928.png\"]', '24', '444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, '1:@:7:@:4434', '4434', '44', '35.61042', '-67.33233', 'ssdfsdf', '2024-07-17 23:35:27', '2024-07-17 23:35:27'),
(6, 'dfsdfsdfsf', NULL, '44', '44', '44', '66', NULL, 'visible', '[\"83\",\"84\",\"85\",\"86\",\"87\"]', '[\"0-1721280927.png\",\"1-1721280928.png\",\"2-1721280928.png\",\"3-1721280928.png\"]', '24', '444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, '1:@:7:@:4434', '4434', '44', '35.61042', '-67.33233', 'ssdfsdf', '2024-07-17 23:35:27', '2024-07-17 23:35:27'),
(7, 'sdfsdfsdf', 'null', '44', '3434', '44', '343', NULL, 'visible', '[\"83\",\"84\",\"85\",\"86\",\"87\"]', '[\"0-1721281253.jpg\"]', '24', 'fsdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, '1:@:5:@:sdfsdfsdf', 'sdfsdfsdf', '34', '33.03400', '-68.25558', 'ssdfsdf', '2024-07-17 23:40:53', '2024-09-18 04:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phrase` varchar(300) DEFAULT NULL,
  `translated` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `phrase`, `translated`, `created_at`, `updated_at`) VALUES
(61, 'english', 'Gibson', 'Gibson 1254', '2024-07-10 04:59:40', '2024-07-11 05:30:32'),
(63, 'english', 'Language Created Successfully', 'Language Created Successfully', '2024-07-10 10:59:40', '2024-07-11 05:30:31'),
(65, 'english', 'Success', 'Success', '2024-07-10 10:59:40', '2024-07-11 01:28:17'),
(67, 'english', 'System name', 'System name', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(69, 'english', 'System Email', 'System Email', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(71, 'english', 'System Currency', 'System Currency', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(73, 'english', 'Currency Position', 'Currency Position', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(75, 'english', 'Left', 'Left', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(77, 'english', 'Right', 'Right', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(79, 'english', 'Office \r\n                    Address', 'Office \r\n                    Address', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(81, 'english', 'Phone Number', 'Phone Number', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(83, 'english', 'System Language', 'System Language', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(85, 'english', 'Select a system language', 'Select a system language', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(87, 'english', 'English', 'English', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(90, 'english', 'Country', 'Country', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(92, 'english', 'Select a Country', 'Select a Country', '2024-07-10 11:02:34', '2024-07-11 01:28:17'),
(94, 'english', 'Afghanistan', 'Afghanistan', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(96, 'english', 'Aland Islands', 'Aland Islands', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(98, 'english', 'Albania', 'Albania', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(100, 'english', 'Algeria', 'Algeria', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(102, 'english', 'AmericanSamoa', 'AmericanSamoa', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(104, 'english', 'Andorra', 'Andorra', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(106, 'english', 'Angola', 'Angola', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(108, 'english', 'Anguilla', 'Anguilla', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(110, 'english', 'Antarctica', 'Antarctica', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(112, 'english', 'Antigua and Barbuda', 'Antigua and Barbuda', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(114, 'english', 'Argentina', 'Argentina', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(116, 'english', 'Armenia', 'Armenia', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(118, 'english', 'Aruba', 'Aruba', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(120, 'english', 'Australia', 'Australia', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(122, 'english', 'Austria', 'Austria', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(124, 'english', 'Azerbaijan', 'Azerbaijan', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(126, 'english', 'Bahamas', 'Bahamas', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(128, 'english', 'Bahrain', 'Bahrain', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(130, 'english', 'Bangladesh', 'Bangladesh', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(132, 'english', 'Barbados', 'Barbados', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(134, 'english', 'Belarus', 'Belarus', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(136, 'english', 'Belgium', 'Belgium', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(138, 'english', 'Belize', 'Belize', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(140, 'english', 'Benin', 'Benin', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(142, 'english', 'Bermuda', 'Bermuda', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(144, 'english', 'Bhutan', 'Bhutan', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(146, 'english', 'Bolivia, Plurination', 'Bolivia, Plurination', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(148, 'english', 'Bosnia and Herzegovi', 'Bosnia and Herzegovi', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(150, 'english', 'Botswana', 'Botswana', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(152, 'english', 'Brazil', 'Brazil', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(154, 'english', 'British Indian Ocean', 'British Indian Ocean', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(156, 'english', 'Brunei Darussalam', 'Brunei Darussalam', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(158, 'english', 'Bulgaria', 'Bulgaria', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(160, 'english', 'Burkina Faso', 'Burkina Faso', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(162, 'english', 'Burundi', 'Burundi', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(164, 'english', 'Cambodia', 'Cambodia', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(166, 'english', 'Cameroon', 'Cameroon', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(168, 'english', 'Canada', 'Canada', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(170, 'english', 'Cape Verde', 'Cape Verde', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(172, 'english', 'Cayman Islands', 'Cayman Islands', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(174, 'english', 'Central African Repu', 'Central African Repu', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(176, 'english', 'Chad', 'Chad', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(178, 'english', 'Chile', 'Chile', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(180, 'english', 'China', 'China', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(182, 'english', 'Christmas Island', 'Christmas Island', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(184, 'english', 'Cocos (Keeling) Isla', 'Cocos (Keeling) Isla', '2024-07-10 11:02:35', '2024-07-11 01:28:17'),
(186, 'english', 'Colombia', 'Colombia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(188, 'english', 'Comoros', 'Comoros', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(190, 'english', 'Congo', 'Congo', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(192, 'english', 'Congo, The Democrati', 'Congo, The Democrati', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(194, 'english', 'Cook Islands', 'Cook Islands', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(196, 'english', 'Costa Rica', 'Costa Rica', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(198, 'english', 'Cote d\'Ivoire', 'Cote d\'Ivoire', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(200, 'english', 'Croatia', 'Croatia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(202, 'english', 'Cuba', 'Cuba', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(204, 'english', 'Cyprus', 'Cyprus', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(206, 'english', 'Czech Republic', 'Czech Republic', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(208, 'english', 'Denmark', 'Denmark', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(210, 'english', 'Djibouti', 'Djibouti', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(212, 'english', 'Dominica', 'Dominica', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(214, 'english', 'Dominican Republic', 'Dominican Republic', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(216, 'english', 'Ecuador', 'Ecuador', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(218, 'english', 'Egypt', 'Egypt', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(220, 'english', 'El Salvador', 'El Salvador', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(222, 'english', 'Equatorial Guinea', 'Equatorial Guinea', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(224, 'english', 'Eritrea', 'Eritrea', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(226, 'english', 'Estonia', 'Estonia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(228, 'english', 'Ethiopia', 'Ethiopia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(230, 'english', 'Falkland Islands (Ma', 'Falkland Islands (Ma', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(232, 'english', 'Faroe Islands', 'Faroe Islands', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(234, 'english', 'Fiji', 'Fiji', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(236, 'english', 'Finland', 'Finland', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(238, 'english', 'France', 'France', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(240, 'english', 'French Guiana', 'French Guiana', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(242, 'english', 'French Polynesia', 'French Polynesia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(244, 'english', 'Gabon', 'Gabon', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(246, 'english', 'Gambia', 'Gambia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(248, 'english', 'Georgia', 'Georgia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(250, 'english', 'Germany', 'Germany', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(252, 'english', 'Ghana', 'Ghana', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(254, 'english', 'Gibraltar', 'Gibraltar', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(256, 'english', 'Greece', 'Greece', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(258, 'english', 'Greenland', 'Greenland', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(260, 'english', 'Grenada', 'Grenada', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(262, 'english', 'Guadeloupe', 'Guadeloupe', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(264, 'english', 'Guam', 'Guam', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(266, 'english', 'Guatemala', 'Guatemala', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(268, 'english', 'Guernsey', 'Guernsey', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(270, 'english', 'Guinea', 'Guinea', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(272, 'english', 'Guinea-Bissau', 'Guinea-Bissau', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(274, 'english', 'Guyana', 'Guyana', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(276, 'english', 'Haiti', 'Haiti', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(278, 'english', 'Holy See (Vatican Ci', 'Holy See (Vatican Ci', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(280, 'english', 'Honduras', 'Honduras', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(282, 'english', 'Hong Kong', 'Hong Kong', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(284, 'english', 'Hungary', 'Hungary', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(286, 'english', 'Iceland', 'Iceland', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(288, 'english', 'India', 'India', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(290, 'english', 'Indonesia', 'Indonesia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(292, 'english', 'Iran, Islamic Republ', 'Iran, Islamic Republ', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(294, 'english', 'Iraq', 'Iraq', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(296, 'english', 'Ireland', 'Ireland', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(298, 'english', 'Isle of Man', 'Isle of Man', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(300, 'english', 'Israel', 'Israel', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(302, 'english', 'Italy', 'Italy', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(304, 'english', 'Jamaica', 'Jamaica', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(306, 'english', 'Japan', 'Japan', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(308, 'english', 'Jersey', 'Jersey', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(310, 'english', 'Jordan', 'Jordan', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(312, 'english', 'Kazakhstan', 'Kazakhstan', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(314, 'english', 'Kenya', 'Kenya', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(316, 'english', 'Kiribati', 'Kiribati', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(318, 'english', 'Korea, Democratic Pe', 'Korea, Democratic Pe', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(320, 'english', 'Korea, Republic of S', 'Korea, Republic of S', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(322, 'english', 'Kuwait', 'Kuwait', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(324, 'english', 'Kyrgyzstan', 'Kyrgyzstan', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(326, 'english', 'Laos', 'Laos', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(328, 'english', 'Latvia', 'Latvia', '2024-07-10 11:02:36', '2024-07-11 01:28:17'),
(330, 'english', 'Lebanon', 'Lebanon', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(332, 'english', 'Lesotho', 'Lesotho', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(334, 'english', 'Liberia', 'Liberia', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(336, 'english', 'Libyan Arab Jamahiri', 'Libyan Arab Jamahiri', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(338, 'english', 'Liechtenstein', 'Liechtenstein', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(340, 'english', 'Lithuania', 'Lithuania', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(342, 'english', 'Luxembourg', 'Luxembourg', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(344, 'english', 'Macao', 'Macao', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(346, 'english', 'Macedonia', 'Macedonia', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(348, 'english', 'Madagascar', 'Madagascar', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(350, 'english', 'Malawi', 'Malawi', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(352, 'english', 'Malaysia', 'Malaysia', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(354, 'english', 'Maldives', 'Maldives', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(356, 'english', 'Mali', 'Mali', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(358, 'english', 'Malta', 'Malta', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(360, 'english', 'Marshall Islands', 'Marshall Islands', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(362, 'english', 'Martinique', 'Martinique', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(364, 'english', 'Mauritania', 'Mauritania', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(366, 'english', 'Mauritius', 'Mauritius', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(368, 'english', 'Mayotte', 'Mayotte', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(370, 'english', 'Mexico', 'Mexico', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(372, 'english', 'Micronesia, Federate', 'Micronesia, Federate', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(374, 'english', 'Moldova', 'Moldova', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(376, 'english', 'Monaco', 'Monaco', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(378, 'english', 'Mongolia', 'Mongolia', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(380, 'english', 'Montenegro', 'Montenegro', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(382, 'english', 'Montserrat', 'Montserrat', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(384, 'english', 'Morocco', 'Morocco', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(386, 'english', 'Mozambique', 'Mozambique', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(388, 'english', 'Myanmar', 'Myanmar', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(390, 'english', 'Namibia', 'Namibia', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(392, 'english', 'Nauru', 'Nauru', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(394, 'english', 'Nepal', 'Nepal', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(396, 'english', 'Netherlands', 'Netherlands', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(398, 'english', 'Netherlands Antilles', 'Netherlands Antilles', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(400, 'english', 'New Caledonia', 'New Caledonia', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(402, 'english', 'New Zealand', 'New Zealand', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(404, 'english', 'Nicaragua', 'Nicaragua', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(406, 'english', 'Niger', 'Niger', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(408, 'english', 'Nigeria', 'Nigeria', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(410, 'english', 'Niue', 'Niue', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(412, 'english', 'Norfolk Island', 'Norfolk Island', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(414, 'english', 'Northern Mariana Isl', 'Northern Mariana Isl', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(416, 'english', 'Norway', 'Norway', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(418, 'english', 'Oman', 'Oman', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(420, 'english', 'Pakistan', 'Pakistan', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(422, 'english', 'Palau', 'Palau', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(424, 'english', 'Palestinian Territor', 'Palestinian Territor', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(426, 'english', 'Panama', 'Panama', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(428, 'english', 'Papua New Guinea', 'Papua New Guinea', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(430, 'english', 'Paraguay', 'Paraguay', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(432, 'english', 'Peru', 'Peru', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(434, 'english', 'Philippines', 'Philippines', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(436, 'english', 'Pitcairn', 'Pitcairn', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(438, 'english', 'Poland', 'Poland', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(440, 'english', 'Portugal', 'Portugal', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(442, 'english', 'Puerto Rico', 'Puerto Rico', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(444, 'english', 'Qatar', 'Qatar', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(446, 'english', 'Romania', 'Romania', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(448, 'english', 'Russia', 'Russia', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(450, 'english', 'Rwanda', 'Rwanda', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(452, 'english', 'Reunion', 'Reunion', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(454, 'english', 'Saint Barthelemy', 'Saint Barthelemy', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(456, 'english', 'Saint Helena, Ascens', 'Saint Helena, Ascens', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(458, 'english', 'Saint Kitts and Nevi', 'Saint Kitts and Nevi', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(460, 'english', 'Saint Lucia', 'Saint Lucia', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(462, 'english', 'Saint Martin', 'Saint Martin', '2024-07-10 11:02:37', '2024-07-11 01:28:17'),
(464, 'english', 'Saint Pierre and Miq', 'Saint Pierre and Miq', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(466, 'english', 'Saint Vincent and th', 'Saint Vincent and th', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(468, 'english', 'Samoa', 'Samoa', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(470, 'english', 'San Marino', 'San Marino', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(472, 'english', 'Sao Tome and Princip', 'Sao Tome and Princip', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(474, 'english', 'Saudi Arabia', 'Saudi Arabia', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(476, 'english', 'Senegal', 'Senegal', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(478, 'english', 'Serbia', 'Serbia', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(480, 'english', 'Seychelles', 'Seychelles', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(482, 'english', 'Sierra Leone', 'Sierra Leone', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(484, 'english', 'Singapore', 'Singapore', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(486, 'english', 'Slovakia', 'Slovakia', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(488, 'english', 'Slovenia', 'Slovenia', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(490, 'english', 'Solomon Islands', 'Solomon Islands', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(492, 'english', 'Somalia', 'Somalia', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(494, 'english', 'South Africa', 'South Africa', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(496, 'english', 'South Georgia and th', 'South Georgia and th', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(498, 'english', 'Spain', 'Spain', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(500, 'english', 'Sri Lanka', 'Sri Lanka', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(502, 'english', 'Sudan', 'Sudan', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(504, 'english', 'Suriname', 'Suriname', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(506, 'english', 'Svalbard and Jan May', 'Svalbard and Jan May', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(508, 'english', 'Swaziland', 'Swaziland', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(510, 'english', 'Sweden', 'Sweden', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(512, 'english', 'Switzerland', 'Switzerland', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(514, 'english', 'Syrian Arab Republic', 'Syrian Arab Republic', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(516, 'english', 'Taiwan', 'Taiwan', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(518, 'english', 'Tajikistan', 'Tajikistan', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(520, 'english', 'Tanzania, United Rep', 'Tanzania, United Rep', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(522, 'english', 'Thailand', 'Thailand', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(524, 'english', 'Timor-Leste', 'Timor-Leste', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(526, 'english', 'Togo', 'Togo', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(528, 'english', 'Tokelau', 'Tokelau', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(530, 'english', 'Tonga', 'Tonga', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(532, 'english', 'Trinidad and Tobago', 'Trinidad and Tobago', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(534, 'english', 'Tunisia', 'Tunisia', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(536, 'english', 'Turkey', 'Turkey', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(538, 'english', 'Turkmenistan', 'Turkmenistan', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(540, 'english', 'Turks and Caicos Isl', 'Turks and Caicos Isl', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(542, 'english', 'Tuvalu', 'Tuvalu', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(544, 'english', 'Uganda', 'Uganda', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(546, 'english', 'Ukraine', 'Ukraine', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(548, 'english', 'United Arab Emirates', 'United Arab Emirates', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(550, 'english', 'United Kingdom', 'United Kingdom', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(552, 'english', 'United States', 'United States', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(554, 'english', 'Uruguay', 'Uruguay', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(556, 'english', 'Uzbekistan', 'Uzbekistan', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(558, 'english', 'Vanuatu', 'Vanuatu', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(560, 'english', 'Venezuela, Bolivaria', 'Venezuela, Bolivaria', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(562, 'english', 'Vietnam', 'Vietnam', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(564, 'english', 'Virgin Islands, Brit', 'Virgin Islands, Brit', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(566, 'english', 'Virgin Islands, U.S.', 'Virgin Islands, U.S.', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(568, 'english', 'Wallis and Futuna', 'Wallis and Futuna', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(570, 'english', 'Yemen', 'Yemen', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(572, 'english', 'Zambia', 'Zambia', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(574, 'english', 'Zimbabwe', 'Zimbabwe', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(576, 'english', 'Purchase Code', 'Purchase Code', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(578, 'english', 'Email Verification', 'Email Verification', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(580, 'english', 'Select email verfication', 'Select email verfication', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(582, 'english', 'Enable', 'Enable', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(584, 'english', 'Disable', 'Disable', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(586, 'english', 'Map access token', 'Map access token', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(588, 'english', 'Max zoom level', 'Max zoom level', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(590, 'english', 'Default location', 'Default location', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(592, 'english', 'Update', 'Update', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(594, 'english', 'Facebook Link', 'Facebook Link', '2024-07-10 11:02:38', '2024-07-11 01:28:17'),
(596, 'english', 'Twitter Link', 'Twitter Link', '2024-07-10 11:02:39', '2024-07-11 01:28:17'),
(598, 'english', 'Linkedin Link', 'Linkedin Link', '2024-07-10 11:02:39', '2024-07-11 01:28:17'),
(600, 'english', 'Update File', 'Update File', '2024-07-10 11:02:39', '2024-07-11 01:28:17'),
(602, 'english', 'Setting update successfully!', 'Setting update successfully!', '2024-07-10 11:02:48', '2024-07-11 01:28:17'),
(603, 'english', 'System Settings', 'System Settings', '2024-07-10 11:02:48', '2024-07-11 01:28:17'),
(604, 'english', 'Dashboard', 'Dashboard', '2024-07-10 11:02:49', '2024-07-11 03:28:40'),
(605, 'english', 'Listing Categories', 'Listing Categories', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(606, 'english', 'Doctor', 'Doctor', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(607, 'english', 'Beauty', 'Beauty', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(608, 'english', 'Car', 'Car', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(609, 'english', 'Real Estate', 'Real Estate', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(610, 'english', 'Hotel', 'Hotel', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(611, 'english', 'Restaurant', 'Restaurant', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(612, 'english', 'Cities', 'Cities', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(613, 'english', 'Listing Amenities', 'Listing Amenities', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(614, 'english', 'Directory Listings', 'Directory Listings', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(615, 'english', 'All Listings', 'All Listings', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(616, 'english', 'Add Listing', 'Add Listing', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(617, 'english', 'Claimed Listings', 'Claimed Listings', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(618, 'english', 'Reported Listing', 'Reported Listing', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(619, 'english', 'Subscription History', 'Subscription History', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(620, 'english', 'Pricing', 'Pricing', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(621, 'english', 'Users', 'Users', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(622, 'english', 'Add New', 'Add New', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(623, 'english', 'All Doctors', 'All Doctors', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(624, 'english', 'Agent', 'Agent', '2024-07-10 11:02:49', '2024-07-11 01:28:17'),
(625, 'english', 'All Agents', 'All Agents', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(626, 'english', 'Customer', 'Customer', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(627, 'english', 'All Customers', 'All Customers', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(628, 'english', 'Newsletter', 'Newsletter', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(629, 'english', 'Manage Newsletter', 'Manage Newsletter', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(630, 'english', 'Subscribed User', 'Subscribed User', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(631, 'english', 'Contacts', 'Contacts', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(632, 'english', 'Blogs', 'Blogs', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(633, 'english', 'All Blogs', 'All Blogs', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(634, 'english', 'Pending Blogs', 'Pending Blogs', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(635, 'english', 'Add Blogs', 'Add Blogs', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(636, 'english', 'Blog Category', 'Blog Category', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(637, 'english', 'Settings', 'Settings', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(638, 'english', 'Website Settings', 'Website Settings', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(639, 'english', 'Payment Settings', 'Payment Settings', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(640, 'english', 'Language Settings', 'Language Settings', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(641, 'english', 'Email Settings', 'Email Settings', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(642, 'english', 'Manage Profile', 'Manage Profile', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(643, 'english', 'Atlas Admin Panel', 'Atlas Admin Panel', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(644, 'english', 'View site', 'View site', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(645, 'english', 'Language', 'Language', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(646, 'english', 'Admin', 'Admin', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(647, 'english', 'My Profile', 'My Profile', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(648, 'english', 'Sign Out', 'Sign Out', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(649, 'english', 'Modal title', 'Modal title', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(650, 'english', 'Are you sure!', 'Are you sure!', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(651, 'english', 'If you this data then can\'t be undo', 'If you this data then can\'t be undo', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(652, 'english', 'Close', 'Close', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(653, 'english', 'Delete', 'Delete', '2024-07-10 11:02:50', '2024-07-11 01:28:17'),
(654, 'english', 'Add New Language', 'Add New Language', '2024-07-10 11:02:58', '2024-07-11 01:28:17'),
(655, 'english', 'ID', 'ID', '2024-07-10 11:02:58', '2024-07-11 01:28:17'),
(656, 'english', 'Language Name', 'Language Name', '2024-07-10 11:02:58', '2024-07-11 01:28:17'),
(657, 'english', 'Action', 'Action', '2024-07-10 11:02:58', '2024-07-11 01:28:17'),
(658, 'english', 'Update language', 'Update language', '2024-07-10 11:02:59', '2024-07-11 01:28:17'),
(659, 'english', 'Edit', 'Edit', '2024-07-10 11:02:59', '2024-07-11 01:28:17'),
(660, 'english', 'Language Deleted Successfully', 'Language Deleted Successfully', '2024-07-10 11:03:37', '2024-07-11 01:28:17'),
(661, 'english', 'Edit Phrase', 'Edit Phrase', '2024-07-10 11:33:03', '2024-07-11 01:28:17'),
(662, 'english', 'Enter language name', 'Enter language name', '2024-07-10 11:34:19', '2024-07-11 01:28:17'),
(663, 'english', 'Create', 'Create', '2024-07-10 11:34:19', '2024-07-11 01:28:17'),
(664, 'english', 'System settings updated successfully.', 'System settings updated successfully.', '2024-07-10 11:42:24', '2024-07-11 01:28:17'),
(665, 'english', 'Language updated successfully.', 'Language updated successfully.', '2024-07-10 11:43:25', '2024-07-11 01:28:17'),
(666, 'english', 'Gib124', 'Gib124', '2024-07-10 11:43:31', '2024-07-11 01:28:17'),
(667, 'english', 'Home Page', 'Home Page', '2024-07-11 06:40:02', '2024-07-11 01:28:17'),
(668, 'english', 'Admin Dashboard', 'Admin Dashboard', '2024-07-11 07:26:03', '2024-07-11 01:28:17'),
(669, 'english', 'Change Phrase', 'Change Phrase', '2024-07-11 07:31:20', '2024-07-11 07:31:20'),
(670, 'english', 'Language Phrase', 'Language Phrase', '2024-07-11 07:31:20', '2024-07-11 07:31:20'),
(671, 'english', 'Save', 'Save', '2024-07-11 07:37:18', '2024-07-11 07:37:18'),
(672, 'bangla', 'Bangla', 'বাংলা', '2024-07-11 03:29:04', '2024-07-11 03:30:37'),
(673, 'english', 'Bangla', 'Bangla', '2024-07-11 09:29:45', '2024-07-11 09:29:45'),
(674, 'bangla', 'Setting update successfully!', 'Setting update successfully!', '2024-07-11 09:29:57', '2024-07-11 09:29:57'),
(675, 'bangla', 'Success', 'Success', '2024-07-11 09:29:57', '2024-07-11 09:29:57'),
(676, 'bangla', 'System Settings', 'System Settings', '2024-07-11 09:29:57', '2024-07-11 09:29:57'),
(677, 'bangla', 'System name', 'System name', '2024-07-11 09:29:57', '2024-07-11 09:29:57'),
(678, 'bangla', 'System Email', 'System Email', '2024-07-11 09:29:57', '2024-07-11 09:29:57'),
(679, 'bangla', 'System Currency', 'System Currency', '2024-07-11 09:29:57', '2024-07-11 09:29:57'),
(680, 'bangla', 'Currency Position', 'Currency Position', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(681, 'bangla', 'Left', 'Left', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(682, 'bangla', 'Right', 'Right', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(683, 'bangla', 'Office \r\n                    Address', 'Office \r\n                    Address', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(684, 'bangla', 'Phone Number', 'Phone Number', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(685, 'bangla', 'System Language', 'System Language', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(686, 'bangla', 'Select a system language', 'Select a system language', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(687, 'bangla', 'English', 'English', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(688, 'bangla', 'Country', 'Country', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(689, 'bangla', 'Select a Country', 'Select a Country', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(690, 'bangla', 'Afghanistan', 'Afghanistan', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(691, 'bangla', 'Aland Islands', 'Aland Islands', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(692, 'bangla', 'Albania', 'Albania', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(693, 'bangla', 'Algeria', 'Algeria', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(694, 'bangla', 'AmericanSamoa', 'AmericanSamoa', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(695, 'bangla', 'Andorra', 'Andorra', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(696, 'bangla', 'Angola', 'Angola', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(697, 'bangla', 'Anguilla', 'Anguilla', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(698, 'bangla', 'Antarctica', 'Antarctica', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(699, 'bangla', 'Antigua and Barbuda', 'Antigua and Barbuda', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(700, 'bangla', 'Argentina', 'Argentina', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(701, 'bangla', 'Armenia', 'Armenia', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(702, 'bangla', 'Aruba', 'Aruba', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(703, 'bangla', 'Australia', 'Australia', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(704, 'bangla', 'Austria', 'Austria', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(705, 'bangla', 'Azerbaijan', 'Azerbaijan', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(706, 'bangla', 'Bahamas', 'Bahamas', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(707, 'bangla', 'Bahrain', 'Bahrain', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(708, 'bangla', 'Bangladesh', 'Bangladesh', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(709, 'bangla', 'Barbados', 'Barbados', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(710, 'bangla', 'Belarus', 'Belarus', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(711, 'bangla', 'Belgium', 'Belgium', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(712, 'bangla', 'Belize', 'Belize', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(713, 'bangla', 'Benin', 'Benin', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(714, 'bangla', 'Bermuda', 'Bermuda', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(715, 'bangla', 'Bhutan', 'Bhutan', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(716, 'bangla', 'Bolivia, Plurination', 'Bolivia, Plurination', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(717, 'bangla', 'Bosnia and Herzegovi', 'Bosnia and Herzegovi', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(718, 'bangla', 'Botswana', 'Botswana', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(719, 'bangla', 'Brazil', 'Brazil', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(720, 'bangla', 'British Indian Ocean', 'British Indian Ocean', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(721, 'bangla', 'Brunei Darussalam', 'Brunei Darussalam', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(722, 'bangla', 'Bulgaria', 'Bulgaria', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(723, 'bangla', 'Burkina Faso', 'Burkina Faso', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(724, 'bangla', 'Burundi', 'Burundi', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(725, 'bangla', 'Cambodia', 'Cambodia', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(726, 'bangla', 'Cameroon', 'Cameroon', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(727, 'bangla', 'Canada', 'Canada', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(728, 'bangla', 'Cape Verde', 'Cape Verde', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(729, 'bangla', 'Cayman Islands', 'Cayman Islands', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(730, 'bangla', 'Central African Repu', 'Central African Repu', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(731, 'bangla', 'Chad', 'Chad', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(732, 'bangla', 'Chile', 'Chile', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(733, 'bangla', 'China', 'China', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(734, 'bangla', 'Christmas Island', 'Christmas Island', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(735, 'bangla', 'Cocos (Keeling) Isla', 'Cocos (Keeling) Isla', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(736, 'bangla', 'Colombia', 'Colombia', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(737, 'bangla', 'Comoros', 'Comoros', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(738, 'bangla', 'Congo', 'Congo', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(739, 'bangla', 'Congo, The Democrati', 'Congo, The Democrati', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(740, 'bangla', 'Cook Islands', 'Cook Islands', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(741, 'bangla', 'Costa Rica', 'Costa Rica', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(742, 'bangla', 'Cote d\'Ivoire', 'Cote d\'Ivoire', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(743, 'bangla', 'Croatia', 'Croatia', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(744, 'bangla', 'Cuba', 'Cuba', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(745, 'bangla', 'Cyprus', 'Cyprus', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(746, 'bangla', 'Czech Republic', 'Czech Republic', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(747, 'bangla', 'Denmark', 'Denmark', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(748, 'bangla', 'Djibouti', 'Djibouti', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(749, 'bangla', 'Dominica', 'Dominica', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(750, 'bangla', 'Dominican Republic', 'Dominican Republic', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(751, 'bangla', 'Ecuador', 'Ecuador', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(752, 'bangla', 'Egypt', 'Egypt', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(753, 'bangla', 'El Salvador', 'El Salvador', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(754, 'bangla', 'Equatorial Guinea', 'Equatorial Guinea', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(755, 'bangla', 'Eritrea', 'Eritrea', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(756, 'bangla', 'Estonia', 'Estonia', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(757, 'bangla', 'Ethiopia', 'Ethiopia', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(758, 'bangla', 'Falkland Islands (Ma', 'Falkland Islands (Ma', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(759, 'bangla', 'Faroe Islands', 'Faroe Islands', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(760, 'bangla', 'Fiji', 'Fiji', '2024-07-11 09:29:58', '2024-07-11 09:29:58'),
(761, 'bangla', 'Finland', 'Finland', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(762, 'bangla', 'France', 'France', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(763, 'bangla', 'French Guiana', 'French Guiana', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(764, 'bangla', 'French Polynesia', 'French Polynesia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(765, 'bangla', 'Gabon', 'Gabon', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(766, 'bangla', 'Gambia', 'Gambia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(767, 'bangla', 'Georgia', 'Georgia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(768, 'bangla', 'Germany', 'Germany', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(769, 'bangla', 'Ghana', 'Ghana', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(770, 'bangla', 'Gibraltar', 'Gibraltar', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(771, 'bangla', 'Greece', 'Greece', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(772, 'bangla', 'Greenland', 'Greenland', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(773, 'bangla', 'Grenada', 'Grenada', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(774, 'bangla', 'Guadeloupe', 'Guadeloupe', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(775, 'bangla', 'Guam', 'Guam', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(776, 'bangla', 'Guatemala', 'Guatemala', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(777, 'bangla', 'Guernsey', 'Guernsey', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(778, 'bangla', 'Guinea', 'Guinea', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(779, 'bangla', 'Guinea-Bissau', 'Guinea-Bissau', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(780, 'bangla', 'Guyana', 'Guyana', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(781, 'bangla', 'Haiti', 'Haiti', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(782, 'bangla', 'Holy See (Vatican Ci', 'Holy See (Vatican Ci', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(783, 'bangla', 'Honduras', 'Honduras', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(784, 'bangla', 'Hong Kong', 'Hong Kong', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(785, 'bangla', 'Hungary', 'Hungary', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(786, 'bangla', 'Iceland', 'Iceland', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(787, 'bangla', 'India', 'India', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(788, 'bangla', 'Indonesia', 'Indonesia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(789, 'bangla', 'Iran, Islamic Republ', 'Iran, Islamic Republ', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(790, 'bangla', 'Iraq', 'Iraq', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(791, 'bangla', 'Ireland', 'Ireland', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(792, 'bangla', 'Isle of Man', 'Isle of Man', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(793, 'bangla', 'Israel', 'Israel', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(794, 'bangla', 'Italy', 'Italy', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(795, 'bangla', 'Jamaica', 'Jamaica', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(796, 'bangla', 'Japan', 'Japan', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(797, 'bangla', 'Jersey', 'Jersey', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(798, 'bangla', 'Jordan', 'Jordan', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(799, 'bangla', 'Kazakhstan', 'Kazakhstan', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(800, 'bangla', 'Kenya', 'Kenya', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(801, 'bangla', 'Kiribati', 'Kiribati', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(802, 'bangla', 'Korea, Democratic Pe', 'Korea, Democratic Pe', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(803, 'bangla', 'Korea, Republic of S', 'Korea, Republic of S', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(804, 'bangla', 'Kuwait', 'Kuwait', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(805, 'bangla', 'Kyrgyzstan', 'Kyrgyzstan', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(806, 'bangla', 'Laos', 'Laos', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(807, 'bangla', 'Latvia', 'Latvia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(808, 'bangla', 'Lebanon', 'Lebanon', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(809, 'bangla', 'Lesotho', 'Lesotho', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(810, 'bangla', 'Liberia', 'Liberia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(811, 'bangla', 'Libyan Arab Jamahiri', 'Libyan Arab Jamahiri', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(812, 'bangla', 'Liechtenstein', 'Liechtenstein', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(813, 'bangla', 'Lithuania', 'Lithuania', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(814, 'bangla', 'Luxembourg', 'Luxembourg', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(815, 'bangla', 'Macao', 'Macao', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(816, 'bangla', 'Macedonia', 'Macedonia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(817, 'bangla', 'Madagascar', 'Madagascar', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(818, 'bangla', 'Malawi', 'Malawi', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(819, 'bangla', 'Malaysia', 'Malaysia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(820, 'bangla', 'Maldives', 'Maldives', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(821, 'bangla', 'Mali', 'Mali', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(822, 'bangla', 'Malta', 'Malta', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(823, 'bangla', 'Marshall Islands', 'Marshall Islands', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(824, 'bangla', 'Martinique', 'Martinique', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(825, 'bangla', 'Mauritania', 'Mauritania', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(826, 'bangla', 'Mauritius', 'Mauritius', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(827, 'bangla', 'Mayotte', 'Mayotte', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(828, 'bangla', 'Mexico', 'Mexico', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(829, 'bangla', 'Micronesia, Federate', 'Micronesia, Federate', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(830, 'bangla', 'Moldova', 'Moldova', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(831, 'bangla', 'Monaco', 'Monaco', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(832, 'bangla', 'Mongolia', 'Mongolia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(833, 'bangla', 'Montenegro', 'Montenegro', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(834, 'bangla', 'Montserrat', 'Montserrat', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(835, 'bangla', 'Morocco', 'Morocco', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(836, 'bangla', 'Mozambique', 'Mozambique', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(837, 'bangla', 'Myanmar', 'Myanmar', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(838, 'bangla', 'Namibia', 'Namibia', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(839, 'bangla', 'Nauru', 'Nauru', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(840, 'bangla', 'Nepal', 'Nepal', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(841, 'bangla', 'Netherlands', 'Netherlands', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(842, 'bangla', 'Netherlands Antilles', 'Netherlands Antilles', '2024-07-11 09:29:59', '2024-07-11 09:29:59'),
(843, 'bangla', 'New Caledonia', 'New Caledonia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(844, 'bangla', 'New Zealand', 'New Zealand', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(845, 'bangla', 'Nicaragua', 'Nicaragua', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(846, 'bangla', 'Niger', 'Niger', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(847, 'bangla', 'Nigeria', 'Nigeria', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(848, 'bangla', 'Niue', 'Niue', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(849, 'bangla', 'Norfolk Island', 'Norfolk Island', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(850, 'bangla', 'Northern Mariana Isl', 'Northern Mariana Isl', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(851, 'bangla', 'Norway', 'Norway', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(852, 'bangla', 'Oman', 'Oman', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(853, 'bangla', 'Pakistan', 'Pakistan', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(854, 'bangla', 'Palau', 'Palau', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(855, 'bangla', 'Palestinian Territor', 'Palestinian Territor', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(856, 'bangla', 'Panama', 'Panama', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(857, 'bangla', 'Papua New Guinea', 'Papua New Guinea', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(858, 'bangla', 'Paraguay', 'Paraguay', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(859, 'bangla', 'Peru', 'Peru', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(860, 'bangla', 'Philippines', 'Philippines', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(861, 'bangla', 'Pitcairn', 'Pitcairn', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(862, 'bangla', 'Poland', 'Poland', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(863, 'bangla', 'Portugal', 'Portugal', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(864, 'bangla', 'Puerto Rico', 'Puerto Rico', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(865, 'bangla', 'Qatar', 'Qatar', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(866, 'bangla', 'Romania', 'Romania', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(867, 'bangla', 'Russia', 'Russia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(868, 'bangla', 'Rwanda', 'Rwanda', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(869, 'bangla', 'Reunion', 'Reunion', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(870, 'bangla', 'Saint Barthelemy', 'Saint Barthelemy', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(871, 'bangla', 'Saint Helena, Ascens', 'Saint Helena, Ascens', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(872, 'bangla', 'Saint Kitts and Nevi', 'Saint Kitts and Nevi', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(873, 'bangla', 'Saint Lucia', 'Saint Lucia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(874, 'bangla', 'Saint Martin', 'Saint Martin', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(875, 'bangla', 'Saint Pierre and Miq', 'Saint Pierre and Miq', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(876, 'bangla', 'Saint Vincent and th', 'Saint Vincent and th', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(877, 'bangla', 'Samoa', 'Samoa', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(878, 'bangla', 'San Marino', 'San Marino', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(879, 'bangla', 'Sao Tome and Princip', 'Sao Tome and Princip', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(880, 'bangla', 'Saudi Arabia', 'Saudi Arabia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(881, 'bangla', 'Senegal', 'Senegal', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(882, 'bangla', 'Serbia', 'Serbia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(883, 'bangla', 'Seychelles', 'Seychelles', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(884, 'bangla', 'Sierra Leone', 'Sierra Leone', '2024-07-11 09:30:00', '2024-07-11 09:30:00');
INSERT INTO `languages` (`id`, `name`, `phrase`, `translated`, `created_at`, `updated_at`) VALUES
(885, 'bangla', 'Singapore', 'Singapore', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(886, 'bangla', 'Slovakia', 'Slovakia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(887, 'bangla', 'Slovenia', 'Slovenia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(888, 'bangla', 'Solomon Islands', 'Solomon Islands', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(889, 'bangla', 'Somalia', 'Somalia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(890, 'bangla', 'South Africa', 'South Africa', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(891, 'bangla', 'South Georgia and th', 'South Georgia and th', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(892, 'bangla', 'Spain', 'Spain', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(893, 'bangla', 'Sri Lanka', 'Sri Lanka', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(894, 'bangla', 'Sudan', 'Sudan', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(895, 'bangla', 'Suriname', 'Suriname', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(896, 'bangla', 'Svalbard and Jan May', 'Svalbard and Jan May', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(897, 'bangla', 'Swaziland', 'Swaziland', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(898, 'bangla', 'Sweden', 'Sweden', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(899, 'bangla', 'Switzerland', 'Switzerland', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(900, 'bangla', 'Syrian Arab Republic', 'Syrian Arab Republic', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(901, 'bangla', 'Taiwan', 'Taiwan', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(902, 'bangla', 'Tajikistan', 'Tajikistan', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(903, 'bangla', 'Tanzania, United Rep', 'Tanzania, United Rep', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(904, 'bangla', 'Thailand', 'Thailand', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(905, 'bangla', 'Timor-Leste', 'Timor-Leste', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(906, 'bangla', 'Togo', 'Togo', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(907, 'bangla', 'Tokelau', 'Tokelau', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(908, 'bangla', 'Tonga', 'Tonga', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(909, 'bangla', 'Trinidad and Tobago', 'Trinidad and Tobago', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(910, 'bangla', 'Tunisia', 'Tunisia', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(911, 'bangla', 'Turkey', 'Turkey', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(912, 'bangla', 'Turkmenistan', 'Turkmenistan', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(913, 'bangla', 'Turks and Caicos Isl', 'Turks and Caicos Isl', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(914, 'bangla', 'Tuvalu', 'Tuvalu', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(915, 'bangla', 'Uganda', 'Uganda', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(916, 'bangla', 'Ukraine', 'Ukraine', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(917, 'bangla', 'United Arab Emirates', 'United Arab Emirates', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(918, 'bangla', 'United Kingdom', 'United Kingdom', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(919, 'bangla', 'United States', 'United States', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(920, 'bangla', 'Uruguay', 'Uruguay', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(921, 'bangla', 'Uzbekistan', 'Uzbekistan', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(922, 'bangla', 'Vanuatu', 'Vanuatu', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(923, 'bangla', 'Venezuela, Bolivaria', 'Venezuela, Bolivaria', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(924, 'bangla', 'Vietnam', 'Vietnam', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(925, 'bangla', 'Virgin Islands, Brit', 'Virgin Islands, Brit', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(926, 'bangla', 'Virgin Islands, U.S.', 'Virgin Islands, U.S.', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(927, 'bangla', 'Wallis and Futuna', 'Wallis and Futuna', '2024-07-11 09:30:00', '2024-07-11 09:30:00'),
(928, 'bangla', 'Yemen', 'Yemen', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(929, 'bangla', 'Zambia', 'Zambia', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(930, 'bangla', 'Zimbabwe', 'Zimbabwe', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(931, 'bangla', 'Purchase Code', 'Purchase Code', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(932, 'bangla', 'Email Verification', 'Email Verification', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(933, 'bangla', 'Select email verfication', 'Select email verfication', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(934, 'bangla', 'Enable', 'Enable', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(935, 'bangla', 'Disable', 'Disable', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(936, 'bangla', 'Map access token', 'Map access token', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(937, 'bangla', 'Max zoom level', 'Max zoom level', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(938, 'bangla', 'Default location', 'Default location', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(939, 'bangla', 'Update', 'Update', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(940, 'bangla', 'Facebook Link', 'Facebook Link', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(941, 'bangla', 'Twitter Link', 'Twitter Link', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(942, 'bangla', 'Linkedin Link', 'Linkedin Link', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(943, 'bangla', 'Update File', 'Update File', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(944, 'bangla', 'Dashboard', 'ড্যাশবোর্ড', '2024-07-11 09:30:01', '2024-07-11 03:30:53'),
(945, 'bangla', 'Listing Categories', 'Listing Categories', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(946, 'bangla', 'Doctor', 'Doctor', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(947, 'bangla', 'Beauty', 'Beauty', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(948, 'bangla', 'Car', 'Car', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(949, 'bangla', 'Real Estate', 'Real Estate', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(950, 'bangla', 'Hotel', 'Hotel', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(951, 'bangla', 'Restaurant', 'Restaurant', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(952, 'bangla', 'Cities', 'Cities', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(953, 'bangla', 'Listing Amenities', 'Listing Amenities', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(954, 'bangla', 'Directory Listings', 'Directory Listings', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(955, 'bangla', 'All Listings', 'All Listings', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(956, 'bangla', 'Add Listing', 'Add Listing', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(957, 'bangla', 'Claimed Listings', 'Claimed Listings', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(958, 'bangla', 'Reported Listing', 'Reported Listing', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(959, 'bangla', 'Subscription History', 'Subscription History', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(960, 'bangla', 'Pricing', 'Pricing', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(961, 'bangla', 'Users', 'Users', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(962, 'bangla', 'Add New', 'Add New', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(963, 'bangla', 'All Doctors', 'All Doctors', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(964, 'bangla', 'Agent', 'Agent', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(965, 'bangla', 'All Agents', 'All Agents', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(966, 'bangla', 'Customer', 'Customer', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(967, 'bangla', 'All Customers', 'All Customers', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(968, 'bangla', 'Newsletter', 'Newsletter', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(969, 'bangla', 'Manage Newsletter', 'Manage Newsletter', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(970, 'bangla', 'Subscribed User', 'Subscribed User', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(971, 'bangla', 'Contacts', 'Contacts', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(972, 'bangla', 'Blogs', 'Blogs', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(973, 'bangla', 'All Blogs', 'All Blogs', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(974, 'bangla', 'Pending Blogs', 'Pending Blogs', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(975, 'bangla', 'Add Blogs', 'Add Blogs', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(976, 'bangla', 'Blog Category', 'Blog Category', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(977, 'bangla', 'Settings', 'Settings', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(978, 'bangla', 'Website Settings', 'Website Settings', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(979, 'bangla', 'Payment Settings', 'Payment Settings', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(980, 'bangla', 'Language Settings', 'Language Settings', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(981, 'bangla', 'Email Settings', 'Email Settings', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(982, 'bangla', 'Manage Profile', 'Manage Profile', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(983, 'bangla', 'Atlas Admin Panel', 'Atlas Admin Panel', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(984, 'bangla', 'View site', 'View site', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(985, 'bangla', 'Language', 'Language', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(986, 'bangla', 'Admin', 'Admin', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(987, 'bangla', 'My Profile', 'My Profile', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(988, 'bangla', 'Sign Out', 'Sign Out', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(989, 'bangla', 'Modal title', 'Modal title', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(990, 'bangla', 'Are you sure!', 'Are you sure!', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(991, 'bangla', 'If you this data then can\'t be undo', 'If you this data then can\'t be undo', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(992, 'bangla', 'Close', 'Close', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(993, 'bangla', 'Delete', 'Delete', '2024-07-11 09:30:01', '2024-07-11 09:30:01'),
(994, 'bangla', 'Add New Language', 'Add New Language', '2024-07-11 09:30:05', '2024-07-11 09:30:05'),
(995, 'bangla', 'ID', 'ID', '2024-07-11 09:30:05', '2024-07-11 09:30:05'),
(996, 'bangla', 'Language Name', 'Language Name', '2024-07-11 09:30:05', '2024-07-11 09:30:05'),
(997, 'bangla', 'Action', 'Action', '2024-07-11 09:30:05', '2024-07-11 09:30:05'),
(998, 'bangla', 'Edit Phrase', 'Edit Phrase', '2024-07-11 09:30:05', '2024-07-11 09:30:05'),
(999, 'bangla', 'Update language', 'Update language', '2024-07-11 09:30:05', '2024-07-11 09:30:05'),
(1000, 'bangla', 'Edit', 'Edit', '2024-07-11 09:30:05', '2024-07-11 09:30:05'),
(1001, 'bangla', 'Change Phrase', 'Change Phrase', '2024-07-11 09:30:08', '2024-07-11 09:30:08'),
(1002, 'bangla', 'Language Phrase', 'Language Phrase', '2024-07-11 09:30:08', '2024-07-11 09:30:08'),
(1003, 'bangla', 'Save', 'Save', '2024-07-11 09:30:08', '2024-07-11 09:30:08'),
(1004, 'bangla', 'Enter language name', 'Enter language name', '2024-07-11 09:31:33', '2024-07-11 09:31:33'),
(1005, 'bangla', 'Admin Dashboard', 'Admin Dashboard', '2024-07-11 09:31:40', '2024-07-11 09:31:40'),
(1006, 'english', 'Protocol (smtp or ssmtp or mail)', 'Protocol (smtp or ssmtp or mail)', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1007, 'bangla', 'Protocol (smtp or ssmtp or mail)', 'Protocol (smtp or ssmtp or mail)', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1008, 'english', 'Protocol (smtp)', 'Protocol (smtp)', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1009, 'bangla', 'Protocol (smtp)', 'Protocol (smtp)', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1010, 'english', 'Smtp crypto (ssl or tls)', 'Smtp crypto (ssl or tls)', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1011, 'bangla', 'Smtp crypto (ssl or tls)', 'Smtp crypto (ssl or tls)', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1012, 'english', 'Crypto (ssl or tls)', 'Crypto (ssl or tls)', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1013, 'bangla', 'Crypto (ssl or tls)', 'Crypto (ssl or tls)', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1014, 'english', 'Smtp host', 'Smtp host', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1015, 'bangla', 'Smtp host', 'Smtp host', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1016, 'english', 'Smtp port', 'Smtp port', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1017, 'bangla', 'Smtp port', 'Smtp port', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1018, 'english', 'Smtp username', 'Smtp username', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1019, 'bangla', 'Smtp username', 'Smtp username', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1020, 'english', 'Smtp password', 'Smtp password', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1021, 'bangla', 'Smtp password', 'Smtp password', '2024-07-11 09:43:03', '2024-07-11 09:43:03'),
(1022, 'english', 'Add New Blog', 'Add New Blog', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1023, 'bangla', 'Add New Blog', 'Add New Blog', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1024, 'english', 'Image', 'Image', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1025, 'bangla', 'Image', 'Image', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1026, 'english', 'Title', 'Title', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1027, 'bangla', 'Title', 'Title', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1028, 'english', 'Category', 'Category', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1029, 'bangla', 'Category', 'Category', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1030, 'english', 'Status', 'Status', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1031, 'bangla', 'Status', 'Status', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1032, 'english', 'Active', 'Active', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1033, 'bangla', 'Active', 'Active', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1034, 'english', 'Chagne Status', 'Chagne Status', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1035, 'bangla', 'Chagne Status', 'Chagne Status', '2024-07-11 09:52:43', '2024-07-11 09:52:43'),
(1036, 'english', 'Profile', 'Profile', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1037, 'bangla', 'Profile', 'Profile', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1038, 'english', 'Profile Settings', 'Profile Settings', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1039, 'bangla', 'Profile Settings', 'Profile Settings', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1040, 'english', 'Profile Information', 'Profile Information', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1041, 'bangla', 'Profile Information', 'Profile Information', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1042, 'english', 'User Name', 'User Name', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1043, 'bangla', 'User Name', 'User Name', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1044, 'english', 'Enter user name', 'Enter user name', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1045, 'bangla', 'Enter user name', 'Enter user name', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1046, 'english', 'User Email', 'User Email', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1047, 'bangla', 'User Email', 'User Email', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1048, 'english', 'Enter user email', 'Enter user email', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1049, 'bangla', 'Enter user email', 'Enter user email', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1050, 'english', 'User Image', 'User Image', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1051, 'bangla', 'User Image', 'User Image', '2024-07-11 09:52:54', '2024-07-11 09:52:54'),
(1052, 'english', 'Password Update', 'Password Update', '2024-07-11 09:52:55', '2024-07-11 09:52:55'),
(1053, 'bangla', 'Password Update', 'Password Update', '2024-07-11 09:52:55', '2024-07-11 09:52:55'),
(1054, 'english', 'Current Password', 'Current Password', '2024-07-11 09:52:55', '2024-07-11 09:52:55'),
(1055, 'bangla', 'Current Password', 'Current Password', '2024-07-11 09:52:55', '2024-07-11 09:52:55'),
(1056, 'english', 'New Password', 'New Password', '2024-07-11 09:52:55', '2024-07-11 09:52:55'),
(1057, 'bangla', 'New Password', 'New Password', '2024-07-11 09:52:55', '2024-07-11 09:52:55'),
(1058, 'english', 'Confirm Password', 'Confirm Password', '2024-07-11 09:52:55', '2024-07-11 09:52:55'),
(1059, 'bangla', 'Confirm Password', 'Confirm Password', '2024-07-11 09:52:55', '2024-07-11 09:52:55'),
(1060, 'english', 'Info', 'Info', '2024-07-11 09:54:24', '2024-07-11 09:54:24'),
(1061, 'bangla', 'Info', 'Info', '2024-07-11 09:54:24', '2024-07-11 09:54:24'),
(1062, 'bangla', 'Create', 'Create', '2024-07-11 09:54:24', '2024-07-11 09:54:24'),
(1063, 'english', 'User Full Nmae *', 'User Full Nmae *', '2024-07-11 09:54:24', '2024-07-11 09:54:24'),
(1064, 'bangla', 'User Full Nmae *', 'User Full Nmae *', '2024-07-11 09:54:24', '2024-07-11 09:54:24'),
(1065, 'english', 'Enter name', 'Enter name', '2024-07-11 09:54:24', '2024-07-11 09:54:24'),
(1066, 'bangla', 'Enter name', 'Enter name', '2024-07-11 09:54:24', '2024-07-11 09:54:24'),
(1067, 'english', 'Email Address *', 'Email Address *', '2024-07-11 09:54:24', '2024-07-11 09:54:24'),
(1068, 'bangla', 'Email Address *', 'Email Address *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1069, 'english', 'Enter email', 'Enter email', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1070, 'bangla', 'Enter email', 'Enter email', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1071, 'english', 'Phone Number *', 'Phone Number *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1072, 'bangla', 'Phone Number *', 'Phone Number *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1073, 'english', 'Enter phone', 'Enter phone', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1074, 'bangla', 'Enter phone', 'Enter phone', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1075, 'english', 'Gender *', 'Gender *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1076, 'bangla', 'Gender *', 'Gender *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1077, 'english', 'Select Gender', 'Select Gender', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1078, 'bangla', 'Select Gender', 'Select Gender', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1079, 'english', 'Male', 'Male', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1080, 'bangla', 'Male', 'Male', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1081, 'english', 'Female', 'Female', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1082, 'bangla', 'Female', 'Female', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1083, 'english', 'Country *', 'Country *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1084, 'bangla', 'Country *', 'Country *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1085, 'english', 'Select Country', 'Select Country', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1086, 'bangla', 'Select Country', 'Select Country', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1087, 'english', 'Enter facebook link', 'Enter facebook link', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1088, 'bangla', 'Enter facebook link', 'Enter facebook link', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1089, 'english', 'City *', 'City *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1090, 'bangla', 'City *', 'City *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1091, 'english', 'Select City', 'Select City', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1092, 'bangla', 'Select City', 'Select City', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1093, 'english', 'Enter linkedin link', 'Enter linkedin link', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1094, 'bangla', 'Enter linkedin link', 'Enter linkedin link', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1095, 'english', 'Enter twitter link', 'Enter twitter link', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1096, 'bangla', 'Enter twitter link', 'Enter twitter link', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1097, 'english', 'Password *', 'Password *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1098, 'bangla', 'Password *', 'Password *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1099, 'english', 'Enter password', 'Enter password', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1100, 'bangla', 'Enter password', 'Enter password', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1101, 'english', 'Confirm Password *', 'Confirm Password *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1102, 'bangla', 'Confirm Password *', 'Confirm Password *', '2024-07-11 09:54:25', '2024-07-11 09:54:25'),
(1103, 'english', 'Appointments', 'Appointments', '2024-07-11 10:28:57', '2024-07-11 10:28:57'),
(1104, 'bangla', 'Appointments', 'Appointments', '2024-07-11 10:28:57', '2024-07-11 10:28:57'),
(1105, 'english', 'Manage Appointment', 'Manage Appointment', '2024-07-11 10:29:03', '2024-07-11 10:29:03'),
(1106, 'bangla', 'Manage Appointment', 'Manage Appointment', '2024-07-11 10:29:03', '2024-07-11 10:29:03'),
(1107, 'bangla', 'Home Page', 'Home Page', '2024-07-12 13:07:37', '2024-07-12 13:07:37'),
(1108, 'english', 'Create Listing', 'Create Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1109, 'bangla', 'Create Listing', 'Create Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1110, 'english', 'Listing Type', 'Listing Type', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1111, 'bangla', 'Listing Type', 'Listing Type', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1112, 'english', 'Select listing type', 'Select listing type', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1113, 'bangla', 'Select listing type', 'Select listing type', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1114, 'english', 'Beauty Listing', 'Beauty Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1115, 'bangla', 'Beauty Listing', 'Beauty Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1116, 'english', 'Car Listing', 'Car Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1117, 'bangla', 'Car Listing', 'Car Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1118, 'english', 'Real Estate Listing', 'Real Estate Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1119, 'bangla', 'Real Estate Listing', 'Real Estate Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1120, 'english', 'Hotel Listing', 'Hotel Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1121, 'bangla', 'Hotel Listing', 'Hotel Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1122, 'english', 'Restaurant Listing', 'Restaurant Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1123, 'bangla', 'Restaurant Listing', 'Restaurant Listing', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1124, 'english', 'Listing Category', 'Listing Category', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1125, 'bangla', 'Listing Category', 'Listing Category', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1126, 'english', 'Select listing type first', 'Select listing type first', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1127, 'bangla', 'Select listing type first', 'Select listing type first', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1128, 'english', 'Select Listing type from dropdown.', 'Select Listing type from dropdown.', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1129, 'bangla', 'Select Listing type from dropdown.', 'Select Listing type from dropdown.', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1130, 'english', 'Select listing category', 'Select listing category', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1131, 'bangla', 'Select listing category', 'Select listing category', '2024-07-12 13:08:04', '2024-07-12 13:08:04'),
(1132, 'english', 'Basic Info', 'Basic Info', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1133, 'bangla', 'Basic Info', 'Basic Info', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1134, 'english', 'Addresh', 'Addresh', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1135, 'bangla', 'Addresh', 'Addresh', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1136, 'english', 'Seo', 'Seo', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1137, 'bangla', 'Seo', 'Seo', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1138, 'english', 'Media', 'Media', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1139, 'bangla', 'Media', 'Media', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1140, 'english', 'Listing title', 'Listing title', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1141, 'bangla', 'Listing title', 'Listing title', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1142, 'english', 'Enter listing title', 'Enter listing title', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1143, 'bangla', 'Enter listing title', 'Enter listing title', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1144, 'english', 'Brand', 'Brand', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1145, 'bangla', 'Brand', 'Brand', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1146, 'english', 'Select listing brand', 'Select listing brand', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1147, 'bangla', 'Select listing brand', 'Select listing brand', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1148, 'english', 'Model', 'Model', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1149, 'bangla', 'Model', 'Model', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1150, 'english', 'Select listing model', 'Select listing model', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1151, 'bangla', 'Select listing model', 'Select listing model', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1152, 'english', 'Year', 'Year', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1153, 'bangla', 'Year', 'Year', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1154, 'english', 'Select listing year', 'Select listing year', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1155, 'bangla', 'Select listing year', 'Select listing year', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1156, 'english', 'Car Type', 'Car Type', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1157, 'bangla', 'Car Type', 'Car Type', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1158, 'english', 'Select listing car type', 'Select listing car type', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1159, 'bangla', 'Select listing car type', 'Select listing car type', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1160, 'english', 'Transmission', 'Transmission', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1161, 'bangla', 'Transmission', 'Transmission', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1162, 'english', 'Select listing transmission', 'Select listing transmission', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1163, 'bangla', 'Select listing transmission', 'Select listing transmission', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1164, 'english', 'Fuel Type', 'Fuel Type', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1165, 'bangla', 'Fuel Type', 'Fuel Type', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1166, 'english', 'Select listing fuel_type', 'Select listing fuel_type', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1167, 'bangla', 'Select listing fuel_type', 'Select listing fuel_type', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1168, 'english', 'Cyelinder', 'Cyelinder', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1169, 'bangla', 'Cyelinder', 'Cyelinder', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1170, 'english', 'Select listing cyelinder', 'Select listing cyelinder', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1171, 'bangla', 'Select listing cyelinder', 'Select listing cyelinder', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1172, 'english', 'Interior Color', 'Interior Color', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1173, 'bangla', 'Interior Color', 'Interior Color', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1174, 'english', 'Select listing interior color', 'Select listing interior color', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1175, 'bangla', 'Select listing interior color', 'Select listing interior color', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1176, 'english', 'Exterior Color', 'Exterior Color', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1177, 'bangla', 'Exterior Color', 'Exterior Color', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1178, 'english', 'Select listing exterior color', 'Select listing exterior color', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1179, 'bangla', 'Select listing exterior color', 'Select listing exterior color', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1180, 'english', 'Drive Train', 'Drive Train', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1181, 'bangla', 'Drive Train', 'Drive Train', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1182, 'english', 'Select listing drive train', 'Select listing drive train', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1183, 'bangla', 'Select listing drive train', 'Select listing drive train', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1184, 'english', 'Trim', 'Trim', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1185, 'bangla', 'Trim', 'Trim', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1186, 'english', 'Select listing trim', 'Select listing trim', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1187, 'bangla', 'Select listing trim', 'Select listing trim', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1188, 'english', 'Engin_size', 'Engin_size', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1189, 'bangla', 'Engin_size', 'Engin_size', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1190, 'english', 'Mileage', 'Mileage', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1191, 'bangla', 'Mileage', 'Mileage', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1192, 'english', '00', '00', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1193, 'bangla', '00', '00', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1194, 'english', 'vin', 'vin', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1195, 'bangla', 'vin', 'vin', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1196, 'english', '4jh45ed4', '4jh45ed4', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1197, 'bangla', '4jh45ed4', '4jh45ed4', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1198, 'english', 'price', 'price', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1199, 'bangla', 'price', 'price', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1200, 'english', '00.00', '00.00', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1201, 'bangla', '00.00', '00.00', '2024-07-12 13:08:12', '2024-07-12 13:08:12'),
(1202, 'english', 'discount_price', 'discount_price', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1203, 'bangla', 'discount_price', 'discount_price', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1204, 'english', 'Visibility', 'Visibility', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1205, 'bangla', 'Visibility', 'Visibility', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1206, 'english', 'Select listing visibility', 'Select listing visibility', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1207, 'bangla', 'Select listing visibility', 'Select listing visibility', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1208, 'english', 'Visible', 'Visible', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1209, 'bangla', 'Visible', 'Visible', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1210, 'english', 'Hidden', 'Hidden', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1211, 'bangla', 'Hidden', 'Hidden', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1212, 'english', 'Description', 'Description', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1213, 'bangla', 'Description', 'Description', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1214, 'english', 'Enter listing description', 'Enter listing description', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1215, 'bangla', 'Enter listing description', 'Enter listing description', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1216, 'english', 'Select listing country', 'Select listing country', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1217, 'bangla', 'Select listing country', 'Select listing country', '2024-07-12 13:08:13', '2024-07-12 13:08:13'),
(1218, 'english', 'City', 'City', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1219, 'bangla', 'City', 'City', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1220, 'english', 'Select listing city', 'Select listing city', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1221, 'bangla', 'Select listing city', 'Select listing city', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1222, 'english', 'Address', 'Address', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1223, 'bangla', 'Address', 'Address', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1224, 'english', 'Enter listing address', 'Enter listing address', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1225, 'bangla', 'Enter listing address', 'Enter listing address', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1226, 'english', 'Post Code', 'Post Code', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1227, 'bangla', 'Post Code', 'Post Code', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1228, 'english', 'Enter post code', 'Enter post code', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1229, 'bangla', 'Enter post code', 'Enter post code', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1230, 'english', 'Latitude', 'Latitude', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1231, 'bangla', 'Latitude', 'Latitude', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1232, 'english', 'Enter Latitude code', 'Enter Latitude code', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1233, 'bangla', 'Enter Latitude code', 'Enter Latitude code', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1234, 'english', 'Longitude', 'Longitude', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1235, 'bangla', 'Longitude', 'Longitude', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1236, 'english', 'Enter longitude code', 'Enter longitude code', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1237, 'bangla', 'Enter longitude code', 'Enter longitude code', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1238, 'english', 'Meta Title', 'Meta Title', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1239, 'bangla', 'Meta Title', 'Meta Title', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1240, 'english', 'Enter meta title', 'Enter meta title', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1241, 'bangla', 'Enter meta title', 'Enter meta title', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1242, 'english', 'Meta keywords', 'Meta keywords', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1243, 'bangla', 'Meta keywords', 'Meta keywords', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1244, 'english', 'Keyword1; keyword2; keyword3;', 'Keyword1; keyword2; keyword3;', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1245, 'bangla', 'Keyword1; keyword2; keyword3;', 'Keyword1; keyword2; keyword3;', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1246, 'english', 'Meta Description', 'Meta Description', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1247, 'bangla', 'Meta Description', 'Meta Description', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1248, 'english', 'Enter meta description', 'Enter meta description', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1249, 'bangla', 'Enter meta description', 'Enter meta description', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1250, 'english', 'OG title', 'OG title', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1251, 'bangla', 'OG title', 'OG title', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1252, 'english', 'Enter og title', 'Enter og title', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1253, 'bangla', 'Enter og title', 'Enter og title', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1254, 'english', 'Canonical URL', 'Canonical URL', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1255, 'bangla', 'Canonical URL', 'Canonical URL', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1256, 'english', 'Enter canonical URL', 'Enter canonical URL', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1257, 'bangla', 'Enter canonical URL', 'Enter canonical URL', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1258, 'english', 'OG Description', 'OG Description', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1259, 'bangla', 'OG Description', 'OG Description', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1260, 'english', 'Json ID', 'Json ID', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1261, 'bangla', 'Json ID', 'Json ID', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1262, 'english', 'Enter json ID', 'Enter json ID', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1263, 'bangla', 'Enter json ID', 'Enter json ID', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1264, 'english', 'OG Image', 'OG Image', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1265, 'bangla', 'OG Image', 'OG Image', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1266, 'english', 'Listing Images', 'Listing Images', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1267, 'bangla', 'Listing Images', 'Listing Images', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1268, 'english', 'Click to upload SVG, PNG, JPG, or GIF', 'Click to upload SVG, PNG, JPG, or GIF', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1269, 'bangla', 'Click to upload SVG, PNG, JPG, or GIF', 'Click to upload SVG, PNG, JPG, or GIF', '2024-07-12 13:08:14', '2024-07-12 13:08:14'),
(1270, 'english', 'Visiable', 'Visiable', '2024-07-14 07:03:19', '2024-07-14 07:03:19'),
(1271, 'bangla', 'Visiable', 'Visiable', '2024-07-14 07:03:19', '2024-07-14 07:03:19'),
(1272, 'english', 'Preview Video', 'Preview Video', '2024-07-14 07:03:21', '2024-07-14 07:03:21'),
(1273, 'bangla', 'Preview Video', 'Preview Video', '2024-07-14 07:03:21', '2024-07-14 07:03:21'),
(1274, 'english', 'Enter youtube link', 'Enter youtube link', '2024-07-14 07:03:21', '2024-07-14 07:03:21'),
(1275, 'bangla', 'Enter youtube link', 'Enter youtube link', '2024-07-14 07:03:21', '2024-07-14 07:03:21'),
(1276, 'english', 'Beauty Listings', 'Beauty Listings', '2024-07-14 10:38:12', '2024-07-14 10:38:12'),
(1277, 'bangla', 'Beauty Listings', 'Beauty Listings', '2024-07-14 10:38:12', '2024-07-14 10:38:12'),
(1278, 'english', 'Listing', 'Listing', '2024-07-14 10:40:23', '2024-07-14 10:40:23'),
(1279, 'bangla', 'Listing', 'Listing', '2024-07-14 10:40:23', '2024-07-14 10:40:23'),
(1280, 'english', 'Car Listings', 'Car Listings', '2024-07-14 10:43:35', '2024-07-14 10:43:35'),
(1281, 'bangla', 'Car Listings', 'Car Listings', '2024-07-14 10:43:35', '2024-07-14 10:43:35'),
(1282, 'english', 'Hotel Listings', 'Hotel Listings', '2024-07-14 10:43:38', '2024-07-14 10:43:38'),
(1283, 'bangla', 'Hotel Listings', 'Hotel Listings', '2024-07-14 10:43:38', '2024-07-14 10:43:38'),
(1284, 'english', 'Real Estate Listings', 'Real Estate Listings', '2024-07-14 10:43:44', '2024-07-14 10:43:44'),
(1285, 'bangla', 'Real Estate Listings', 'Real Estate Listings', '2024-07-14 10:43:44', '2024-07-14 10:43:44'),
(1286, 'english', 'Restaurent Listings', 'Restaurent Listings', '2024-07-14 10:43:48', '2024-07-14 10:43:48'),
(1287, 'bangla', 'Restaurent Listings', 'Restaurent Listings', '2024-07-14 10:43:48', '2024-07-14 10:43:48'),
(1288, 'english', 'Listing List', 'Listing List', '2024-07-14 10:57:32', '2024-07-14 10:57:32'),
(1289, 'bangla', 'Listing List', 'Listing List', '2024-07-14 10:57:32', '2024-07-14 10:57:32'),
(1290, 'english', 'Lists', 'Lists', '2024-07-14 10:57:32', '2024-07-14 10:57:32'),
(1291, 'bangla', 'Lists', 'Lists', '2024-07-14 10:57:32', '2024-07-14 10:57:32'),
(1292, 'english', 'Add New Listing', 'Add New Listing', '2024-07-14 10:57:32', '2024-07-14 10:57:32'),
(1293, 'bangla', 'Add New Listing', 'Add New Listing', '2024-07-14 10:57:32', '2024-07-14 10:57:32'),
(1294, 'english', 'Change visibility', 'Change visibility', '2024-07-14 10:57:32', '2024-07-14 10:57:32'),
(1295, 'bangla', 'Change visibility', 'Change visibility', '2024-07-14 10:57:32', '2024-07-14 10:57:32'),
(1296, 'english', 'Update Listing', 'Update Listing', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1297, 'bangla', 'Update Listing', 'Update Listing', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1298, 'english', 'Listing Update', 'Listing Update', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1299, 'bangla', 'Listing Update', 'Listing Update', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1300, 'english', 'Services', 'Services', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1301, 'bangla', 'Services', 'Services', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1302, 'english', 'Opening Time', 'Opening Time', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1303, 'bangla', 'Opening Time', 'Opening Time', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1304, 'english', 'Team Members', 'Team Members', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1305, 'bangla', 'Team Members', 'Team Members', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1306, 'english', 'Add some listing service', 'Add some listing service', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1307, 'bangla', 'Add some listing service', 'Add some listing service', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1308, 'english', 'Add New Service', 'Add New Service', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1309, 'bangla', 'Add New Service', 'Add New Service', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1310, 'english', 'Add Service', 'Add Service', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1311, 'bangla', 'Add Service', 'Add Service', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1312, 'english', 'From', 'From', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1313, 'bangla', 'From', 'From', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1314, 'english', 'Opening', 'Opening', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1315, 'bangla', 'Opening', 'Opening', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1316, 'english', 'Closed', 'Closed', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1317, 'bangla', 'Closed', 'Closed', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1318, 'english', 'Select some team members', 'Select some team members', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1319, 'bangla', 'Select some team members', 'Select some team members', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1320, 'english', 'Add Team Member', 'Add Team Member', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1321, 'bangla', 'Add Team Member', 'Add Team Member', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1322, 'english', 'Add Team', 'Add Team', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1323, 'bangla', 'Add Team', 'Add Team', '2024-07-14 11:00:10', '2024-07-14 11:00:10'),
(1324, 'english', 'Amenities', 'Amenities', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1325, 'bangla', 'Amenities', 'Amenities', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1326, 'english', 'Add', 'Add', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1327, 'bangla', 'Add', 'Add', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1328, 'english', 'Cylinder', 'Cylinder', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1329, 'bangla', 'Cylinder', 'Cylinder', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1330, 'english', 'Engine Size', 'Engine Size', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1331, 'bangla', 'Engine Size', 'Engine Size', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1332, 'english', 'Amenities List', 'Amenities List', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1333, 'bangla', 'Amenities List', 'Amenities List', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1334, 'english', 'Name', 'Name', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1335, 'bangla', 'Name', 'Name', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1336, 'english', 'Icon', 'Icon', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1337, 'bangla', 'Icon', 'Icon', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1338, 'english', 'Update Amenities', 'Update Amenities', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1339, 'bangla', 'Update Amenities', 'Update Amenities', '2024-07-14 11:32:56', '2024-07-14 11:32:56'),
(1340, 'english', 'Location', 'Location', '2024-07-15 09:48:10', '2024-07-15 09:48:10'),
(1341, 'bangla', 'Location', 'Location', '2024-07-15 09:48:10', '2024-07-15 09:48:10'),
(1342, 'english', 'Map Position', 'Map Position', '2024-07-16 10:38:48', '2024-07-16 10:38:48'),
(1343, 'bangla', 'Map Position', 'Map Position', '2024-07-16 10:38:48', '2024-07-16 10:38:48'),
(1344, 'english', 'Right Sidebar', 'Right Sidebar', '2024-07-16 10:38:48', '2024-07-16 10:38:48'),
(1345, 'bangla', 'Right Sidebar', 'Right Sidebar', '2024-07-16 10:38:48', '2024-07-16 10:38:48'),
(1346, 'english', 'Top Header', 'Top Header', '2024-07-16 10:38:48', '2024-07-16 10:38:48'),
(1347, 'bangla', 'Top Header', 'Top Header', '2024-07-16 10:38:48', '2024-07-16 10:38:48'),
(1348, 'english', 'Showing', 'Showing', '2024-07-16 10:53:11', '2024-07-16 10:53:11'),
(1349, 'bangla', 'Showing', 'Showing', '2024-07-16 10:53:11', '2024-07-16 10:53:11'),
(1350, 'english', 'of', 'of', '2024-07-16 10:53:11', '2024-07-16 10:53:11'),
(1351, 'bangla', 'of', 'of', '2024-07-16 10:53:11', '2024-07-16 10:53:11'),
(1352, 'english', 'results', 'results', '2024-07-16 10:53:25', '2024-07-16 10:53:25'),
(1353, 'bangla', 'results', 'results', '2024-07-16 10:53:25', '2024-07-16 10:53:25'),
(1354, 'english', 'Map', 'Map', '2024-07-16 12:31:57', '2024-07-16 12:31:57'),
(1355, 'bangla', 'Map', 'Map', '2024-07-16 12:31:57', '2024-07-16 12:31:57'),
(1356, 'english', 'Features', 'Features', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1357, 'bangla', 'Features', 'Features', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1358, 'english', 'Specification', 'Specification', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1359, 'bangla', 'Specification', 'Specification', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1360, 'english', 'Add some listng features', 'Add some listng features', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1361, 'bangla', 'Add some listng features', 'Add some listng features', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1362, 'english', 'Add New Feature', 'Add New Feature', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1363, 'bangla', 'Add New Feature', 'Add New Feature', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1364, 'english', 'Add Feature', 'Add Feature', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1365, 'bangla', 'Add Feature', 'Add Feature', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1366, 'english', 'Update Feature', 'Update Feature', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1367, 'bangla', 'Update Feature', 'Update Feature', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1368, 'english', 'Add New Sub Feature', 'Add New Sub Feature', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1369, 'bangla', 'Add New Sub Feature', 'Add New Sub Feature', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1370, 'english', 'Add some listng specification', 'Add some listng specification', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1371, 'bangla', 'Add some listng specification', 'Add some listng specification', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1372, 'english', 'Add New Specification', 'Add New Specification', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1373, 'bangla', 'Add New Specification', 'Add New Specification', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1374, 'english', 'Add Specification', 'Add Specification', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1375, 'bangla', 'Add Specification', 'Add Specification', '2024-07-17 08:30:30', '2024-07-17 08:30:30'),
(1376, 'english', 'Enter listing sub title', 'Enter listing sub title', '2024-07-17 08:33:52', '2024-07-17 08:33:52'),
(1377, 'bangla', 'Enter listing sub title', 'Enter listing sub title', '2024-07-17 08:33:52', '2024-07-17 08:33:52'),
(1378, 'english', 'Listing Update successfully!', 'Listing Update successfully!', '2024-07-17 08:34:21', '2024-07-17 08:34:21'),
(1379, 'bangla', 'Listing Update successfully!', 'Listing Update successfully!', '2024-07-17 08:34:21', '2024-07-17 08:34:21'),
(1380, 'english', 'Update Specification', 'Update Specification', '2024-07-17 08:34:42', '2024-07-17 08:34:42'),
(1381, 'bangla', 'Update Specification', 'Update Specification', '2024-07-17 08:34:42', '2024-07-17 08:34:42'),
(1382, 'english', 'Add New Sub Specification', 'Add New Sub Specification', '2024-07-17 08:34:42', '2024-07-17 08:34:42'),
(1383, 'bangla', 'Add New Sub Specification', 'Add New Sub Specification', '2024-07-17 08:34:42', '2024-07-17 08:34:42'),
(1384, 'english', 'City Lists', 'City Lists', '2024-07-17 08:36:01', '2024-07-17 08:36:01'),
(1385, 'bangla', 'City Lists', 'City Lists', '2024-07-17 08:36:01', '2024-07-17 08:36:01'),
(1386, 'english', 'Add New City', 'Add New City', '2024-07-17 08:36:01', '2024-07-17 08:36:01'),
(1387, 'bangla', 'Add New City', 'Add New City', '2024-07-17 08:36:01', '2024-07-17 08:36:01'),
(1388, 'english', 'City Name', 'City Name', '2024-07-17 08:36:01', '2024-07-17 08:36:01'),
(1389, 'bangla', 'City Name', 'City Name', '2024-07-17 08:36:01', '2024-07-17 08:36:01'),
(1390, 'english', 'Edit City', 'Edit City', '2024-07-17 08:36:01', '2024-07-17 08:36:01'),
(1391, 'bangla', 'Edit City', 'Edit City', '2024-07-17 08:36:01', '2024-07-17 08:36:01'),
(1392, 'english', 'Listing price', 'Listing price', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1393, 'bangla', 'Listing price', 'Listing price', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1394, 'english', 'Enter listing price', 'Enter listing price', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1395, 'bangla', 'Enter listing price', 'Enter listing price', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1396, 'english', 'Bed number', 'Bed number', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1397, 'bangla', 'Bed number', 'Bed number', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1398, 'english', 'Enter bed number', 'Enter bed number', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1399, 'bangla', 'Enter bed number', 'Enter bed number', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1400, 'english', 'bath number', 'bath number', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1401, 'bangla', 'bath number', 'bath number', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1402, 'english', 'Enter bath number', 'Enter bath number', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1403, 'bangla', 'Enter bath number', 'Enter bath number', '2024-07-18 05:34:24', '2024-07-18 05:34:24');
INSERT INTO `languages` (`id`, `name`, `phrase`, `translated`, `created_at`, `updated_at`) VALUES
(1404, 'english', 'Floar Size', 'Floar Size', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1405, 'bangla', 'Floar Size', 'Floar Size', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1406, 'english', 'Enter floar size', 'Enter floar size', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1407, 'bangla', 'Enter floar size', 'Enter floar size', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1408, 'english', 'Dimension', 'Dimension', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1409, 'bangla', 'Dimension', 'Dimension', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1410, 'english', 'Enter property dimension', 'Enter property dimension', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1411, 'bangla', 'Enter property dimension', 'Enter property dimension', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1412, 'english', 'Write your description', 'Write your description', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1413, 'bangla', 'Write your description', 'Write your description', '2024-07-18 05:34:24', '2024-07-18 05:34:24'),
(1414, 'english', 'Listing Created successfully!', 'Listing Created successfully!', '2024-07-18 05:35:28', '2024-07-18 05:35:28'),
(1415, 'bangla', 'Listing Created successfully!', 'Listing Created successfully!', '2024-07-18 05:35:28', '2024-07-18 05:35:28'),
(1416, 'english', 'Rooms', 'Rooms', '2024-07-18 05:53:09', '2024-07-18 05:53:09'),
(1417, 'bangla', 'Rooms', 'Rooms', '2024-07-18 05:53:09', '2024-07-18 05:53:09'),
(1418, 'english', 'Garage', 'Garage', '2024-07-18 05:53:09', '2024-07-18 05:53:09'),
(1419, 'bangla', 'Garage', 'Garage', '2024-07-18 05:53:09', '2024-07-18 05:53:09'),
(1420, 'english', 'Add some listing feature', 'Add some listing feature', '2024-07-18 05:53:09', '2024-07-18 05:53:09'),
(1421, 'bangla', 'Add some listing feature', 'Add some listing feature', '2024-07-18 05:53:09', '2024-07-18 05:53:09'),
(1422, 'english', 'Add some room', 'Add some room', '2024-07-18 05:53:10', '2024-07-18 05:53:10'),
(1423, 'bangla', 'Add some room', 'Add some room', '2024-07-18 05:53:10', '2024-07-18 05:53:10'),
(1424, 'english', 'Add New Room', 'Add New Room', '2024-07-18 05:53:10', '2024-07-18 05:53:10'),
(1425, 'bangla', 'Add New Room', 'Add New Room', '2024-07-18 05:53:10', '2024-07-18 05:53:10'),
(1426, 'english', 'Add Room', 'Add Room', '2024-07-18 05:53:10', '2024-07-18 05:53:10'),
(1427, 'bangla', 'Add Room', 'Add Room', '2024-07-18 05:53:10', '2024-07-18 05:53:10'),
(1428, 'english', 'More', 'More', '2024-07-18 06:23:17', '2024-07-18 06:23:17'),
(1429, 'bangla', 'More', 'More', '2024-07-18 06:23:17', '2024-07-18 06:23:17'),
(1430, 'english', 'See Details', 'See Details', '2024-07-18 06:34:13', '2024-07-18 06:34:13'),
(1431, 'bangla', 'See Details', 'See Details', '2024-07-18 06:34:13', '2024-07-18 06:34:13'),
(1432, 'english', 'night', 'night', '2024-07-18 06:34:13', '2024-07-18 06:34:13'),
(1433, 'bangla', 'night', 'night', '2024-07-18 06:34:13', '2024-07-18 06:34:13'),
(1434, 'english', 'Listings on Map', 'Listings on Map', '2024-07-18 06:35:16', '2024-07-18 06:35:16'),
(1435, 'bangla', 'Listings on Map', 'Listings on Map', '2024-07-18 06:35:16', '2024-07-18 06:35:16'),
(1436, 'english', 'Bed', 'Bed', '2024-07-18 07:50:23', '2024-07-18 07:50:23'),
(1437, 'bangla', 'Bed', 'Bed', '2024-07-18 07:50:23', '2024-07-18 07:50:23'),
(1438, 'english', 'Bath', 'Bath', '2024-07-18 07:50:23', '2024-07-18 07:50:23'),
(1439, 'bangla', 'Bath', 'Bath', '2024-07-18 07:50:23', '2024-07-18 07:50:23'),
(1440, 'english', 'sqft', 'sqft', '2024-07-18 07:50:23', '2024-07-18 07:50:23'),
(1441, 'bangla', 'sqft', 'sqft', '2024-07-18 07:50:23', '2024-07-18 07:50:23'),
(1442, 'english', 'Restaurant Listings', 'Restaurant Listings', '2024-07-25 11:18:26', '2024-07-25 11:18:26'),
(1443, 'bangla', 'Restaurant Listings', 'Restaurant Listings', '2024-07-25 11:18:26', '2024-07-25 11:18:26'),
(1444, 'english', 'Add New Package', 'Add New Package', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1445, 'bangla', 'Add New Package', 'Add New Package', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1446, 'english', 'Period', 'Period', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1447, 'bangla', 'Period', 'Period', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1448, 'english', 'listing Amount', 'listing Amount', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1449, 'bangla', 'listing Amount', 'listing Amount', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1450, 'english', 'Category Amount', 'Category Amount', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1451, 'bangla', 'Category Amount', 'Category Amount', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1452, 'english', 'Feature', 'Feature', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1453, 'bangla', 'Feature', 'Feature', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1454, 'english', 'Contact', 'Contact', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1455, 'bangla', 'Contact', 'Contact', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1456, 'english', 'Video', 'Video', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1457, 'bangla', 'Video', 'Video', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1458, 'english', 'Choice', 'Choice', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1459, 'bangla', 'Choice', 'Choice', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1460, 'english', 'Update Package', 'Update Package', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1461, 'bangla', 'Update Package', 'Update Package', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1462, 'english', 'Best Choice', 'Best Choice', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1463, 'bangla', 'Best Choice', 'Best Choice', '2024-07-29 07:02:10', '2024-07-29 07:02:10'),
(1464, 'english', 'Menu', 'Menu', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1465, 'bangla', 'Menu', 'Menu', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1466, 'english', 'Add some menu for restaurant', 'Add some menu for restaurant', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1467, 'bangla', 'Add some menu for restaurant', 'Add some menu for restaurant', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1468, 'english', 'Add New Menu', 'Add New Menu', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1469, 'bangla', 'Add New Menu', 'Add New Menu', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1470, 'english', 'Add menu', 'Add menu', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1471, 'bangla', 'Add menu', 'Add menu', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1472, 'english', 'Update Menu', 'Update Menu', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1473, 'bangla', 'Update Menu', 'Update Menu', '2024-07-29 10:20:08', '2024-07-29 10:20:08'),
(1474, 'english', 'Menu title', 'Menu title', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1475, 'bangla', 'Menu title', 'Menu title', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1476, 'english', 'Enter menu title', 'Enter menu title', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1477, 'bangla', 'Enter menu title', 'Enter menu title', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1478, 'english', 'Menu Sub title', 'Menu Sub title', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1479, 'bangla', 'Menu Sub title', 'Menu Sub title', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1480, 'english', 'Enter sub title', 'Enter sub title', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1481, 'bangla', 'Enter sub title', 'Enter sub title', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1482, 'english', 'Menu price', 'Menu price', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1483, 'bangla', 'Menu price', 'Menu price', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1484, 'english', 'Enter menu price', 'Enter menu price', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1485, 'bangla', 'Enter menu price', 'Enter menu price', '2024-07-29 10:20:16', '2024-07-29 10:20:16'),
(1486, 'english', 'Menu discount price', 'Menu discount price', '2024-07-29 10:20:17', '2024-07-29 10:20:17'),
(1487, 'bangla', 'Menu discount price', 'Menu discount price', '2024-07-29 10:20:17', '2024-07-29 10:20:17'),
(1488, 'english', 'Enter menu discount price', 'Enter menu discount price', '2024-07-29 10:20:17', '2024-07-29 10:20:17'),
(1489, 'bangla', 'Enter menu discount price', 'Enter menu discount price', '2024-07-29 10:20:17', '2024-07-29 10:20:17'),
(1490, 'english', 'Specification value', 'Specification value', '2024-07-29 10:20:17', '2024-07-29 10:20:17'),
(1491, 'bangla', 'Specification value', 'Specification value', '2024-07-29 10:20:17', '2024-07-29 10:20:17'),
(1492, 'english', 'Listing menu create successful!', 'Listing menu create successful!', '2024-07-29 10:20:40', '2024-07-29 10:20:40'),
(1493, 'bangla', 'Listing menu create successful!', 'Listing menu create successful!', '2024-07-29 10:20:40', '2024-07-29 10:20:40'),
(1494, 'english', 'Amenities Create', 'Amenities Create', '2024-07-29 10:25:59', '2024-07-29 10:25:59'),
(1495, 'bangla', 'Amenities Create', 'Amenities Create', '2024-07-29 10:25:59', '2024-07-29 10:25:59'),
(1496, 'english', 'Amenities Name', 'Amenities Name', '2024-07-29 10:26:15', '2024-07-29 10:26:15'),
(1497, 'bangla', 'Amenities Name', 'Amenities Name', '2024-07-29 10:26:15', '2024-07-29 10:26:15'),
(1498, 'english', 'Amenities icon', 'Amenities icon', '2024-07-29 10:26:15', '2024-07-29 10:26:15'),
(1499, 'bangla', 'Amenities icon', 'Amenities icon', '2024-07-29 10:26:15', '2024-07-29 10:26:15'),
(1500, 'english', 'Pick an Icon', 'Pick an Icon', '2024-07-29 10:26:15', '2024-07-29 10:26:15'),
(1501, 'bangla', 'Pick an Icon', 'Pick an Icon', '2024-07-29 10:26:15', '2024-07-29 10:26:15'),
(1502, 'english', 'Amenities Created Successful!', 'Amenities Created Successful!', '2024-07-29 10:26:25', '2024-07-29 10:26:25'),
(1503, 'bangla', 'Amenities Created Successful!', 'Amenities Created Successful!', '2024-07-29 10:26:25', '2024-07-29 10:26:25'),
(1504, 'english', 'Add some feature for restaurant', 'Add some feature for restaurant', '2024-07-29 10:32:38', '2024-07-29 10:32:38'),
(1505, 'bangla', 'Add some feature for restaurant', 'Add some feature for restaurant', '2024-07-29 10:32:38', '2024-07-29 10:32:38'),
(1506, 'english', 'Sub Dimension', 'Sub Dimension', '2024-07-29 10:33:54', '2024-07-29 10:33:54'),
(1507, 'bangla', 'Sub Dimension', 'Sub Dimension', '2024-07-29 10:33:54', '2024-07-29 10:33:54'),
(1508, 'english', 'Enter property sub dimension', 'Enter property sub dimension', '2024-07-29 10:33:54', '2024-07-29 10:33:54'),
(1509, 'bangla', 'Enter property sub dimension', 'Enter property sub dimension', '2024-07-29 10:33:54', '2024-07-29 10:33:54'),
(1510, 'english', 'Add some feature', 'Add some feature', '2024-07-29 10:33:56', '2024-07-29 10:33:56'),
(1511, 'bangla', 'Add some feature', 'Add some feature', '2024-07-29 10:33:56', '2024-07-29 10:33:56'),
(1512, 'english', 'Floor Plan', 'Floor Plan', '2024-07-29 10:33:56', '2024-07-29 10:33:56'),
(1513, 'bangla', 'Floor Plan', 'Floor Plan', '2024-07-29 10:33:56', '2024-07-29 10:33:56'),
(1514, 'english', 'Listing feature create successful!', 'Listing feature create successful!', '2024-07-29 10:36:29', '2024-07-29 10:36:29'),
(1515, 'bangla', 'Listing feature create successful!', 'Listing feature create successful!', '2024-07-29 10:36:29', '2024-07-29 10:36:29'),
(1516, 'english', 'Categories', 'Categories', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1517, 'bangla', 'Categories', 'Categories', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1518, 'english', 'Category Create', 'Category Create', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1519, 'bangla', 'Category Create', 'Category Create', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1520, 'english', 'Add New Category', 'Add New Category', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1521, 'bangla', 'Add New Category', 'Add New Category', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1522, 'english', 'Parent', 'Parent', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1523, 'bangla', 'Parent', 'Parent', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1524, 'english', 'Type', 'Type', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1525, 'bangla', 'Type', 'Type', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1526, 'english', 'Edit Category', 'Edit Category', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1527, 'bangla', 'Edit Category', 'Edit Category', '2024-07-30 08:06:19', '2024-07-30 08:06:19'),
(1528, 'english', 'Add New agent', 'Add New agent', '2024-07-30 08:16:42', '2024-07-30 08:16:42'),
(1529, 'bangla', 'Add New agent', 'Add New agent', '2024-07-30 08:16:42', '2024-07-30 08:16:42'),
(1530, 'english', 'No data found', 'No data found', '2024-07-30 08:16:42', '2024-07-30 08:16:42'),
(1531, 'bangla', 'No data found', 'No data found', '2024-07-30 08:16:42', '2024-07-30 08:16:42'),
(1532, 'english', 'Pendding', 'Pendding', '2024-07-30 08:17:50', '2024-07-30 08:17:50'),
(1533, 'bangla', 'Pendding', 'Pendding', '2024-07-30 08:17:50', '2024-07-30 08:17:50'),
(1534, 'english', 'Add Blog', 'Add Blog', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1535, 'bangla', 'Add Blog', 'Add Blog', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1536, 'english', 'back', 'back', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1537, 'bangla', 'back', 'back', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1538, 'english', 'Blog Title', 'Blog Title', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1539, 'bangla', 'Blog Title', 'Blog Title', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1540, 'english', 'Enter blog title', 'Enter blog title', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1541, 'bangla', 'Enter blog title', 'Enter blog title', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1542, 'english', 'Select blog category', 'Select blog category', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1543, 'bangla', 'Select blog category', 'Select blog category', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1544, 'english', 'Blog Description', 'Blog Description', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1545, 'bangla', 'Blog Description', 'Blog Description', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1546, 'english', 'Blog Keyword', 'Blog Keyword', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1547, 'bangla', 'Blog Keyword', 'Blog Keyword', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1548, 'english', 'Keyword will be:- keyword1; keyword2; keyword3', 'Keyword will be:- keyword1; keyword2; keyword3', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1549, 'bangla', 'Keyword will be:- keyword1; keyword2; keyword3', 'Keyword will be:- keyword1; keyword2; keyword3', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1550, 'english', 'Blog Banner', 'Blog Banner', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1551, 'bangla', 'Blog Banner', 'Blog Banner', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1552, 'english', 'Write Blog description', 'Write Blog description', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1553, 'bangla', 'Write Blog description', 'Write Blog description', '2024-07-30 08:17:53', '2024-07-30 08:17:53'),
(1554, 'english', 'Doctor Listings', 'Doctor Listings', '2024-07-30 10:51:51', '2024-07-30 10:51:51'),
(1555, 'bangla', 'Doctor Listings', 'Doctor Listings', '2024-07-30 10:51:51', '2024-07-30 10:51:51'),
(1556, 'english', 'Categorys par listing', 'Categorys par listing', '2024-07-31 13:00:25', '2024-07-31 13:00:25'),
(1557, 'bangla', 'Categorys par listing', 'Categorys par listing', '2024-07-31 13:00:25', '2024-07-31 13:00:25'),
(1558, 'english', 'Contact Form', 'Contact Form', '2024-07-31 13:02:52', '2024-07-31 13:02:52'),
(1559, 'bangla', 'Contact Form', 'Contact Form', '2024-07-31 13:02:52', '2024-07-31 13:02:52'),
(1560, 'english', 'Listing Video', 'Listing Video', '2024-07-31 13:03:55', '2024-07-31 13:03:55'),
(1561, 'bangla', 'Listing Video', 'Listing Video', '2024-07-31 13:03:55', '2024-07-31 13:03:55'),
(1562, 'english', 'Blog Details', 'Blog Details', '2024-08-01 07:55:55', '2024-08-01 07:55:55'),
(1563, 'bangla', 'Blog Details', 'Blog Details', '2024-08-01 07:55:55', '2024-08-01 07:55:55'),
(1564, 'english', 'Update Blog', 'Update Blog', '2024-08-04 04:39:28', '2024-08-04 04:39:28'),
(1565, 'bangla', 'Update Blog', 'Update Blog', '2024-08-04 04:39:28', '2024-08-04 04:39:28'),
(1566, 'english', 'Blog Create successfully!', 'Blog Create successfully!', '2024-08-04 04:39:31', '2024-08-04 04:39:31'),
(1567, 'bangla', 'Blog Create successfully!', 'Blog Create successfully!', '2024-08-04 04:39:31', '2024-08-04 04:39:31'),
(1568, 'english', 'Status successful!', 'Status successful!', '2024-08-04 04:39:44', '2024-08-04 04:39:44'),
(1569, 'bangla', 'Status successful!', 'Status successful!', '2024-08-04 04:39:44', '2024-08-04 04:39:44'),
(1570, 'english', 'Read More', 'Read More', '2024-08-04 04:51:14', '2024-08-04 04:51:14'),
(1571, 'bangla', 'Read More', 'Read More', '2024-08-04 04:51:14', '2024-08-04 04:51:14'),
(1572, 'english', 'Search', 'Search', '2024-08-04 05:06:01', '2024-08-04 05:06:01'),
(1573, 'bangla', 'Search', 'Search', '2024-08-04 05:06:01', '2024-08-04 05:06:01'),
(1574, 'english', 'Resent Post', 'Resent Post', '2024-08-04 14:20:47', '2024-08-04 14:20:47'),
(1575, 'bangla', 'Resent Post', 'Resent Post', '2024-08-04 14:20:47', '2024-08-04 14:20:47'),
(1576, 'english', 'Listing Details', 'Listing Details', '2024-08-06 07:35:49', '2024-08-06 07:35:49'),
(1577, 'bangla', 'Listing Details', 'Listing Details', '2024-08-06 07:35:49', '2024-08-06 07:35:49'),
(1578, 'english', 'Related Property', 'Related Property', '2024-08-06 09:50:35', '2024-08-06 09:50:35'),
(1579, 'bangla', 'Related Property', 'Related Property', '2024-08-06 09:50:35', '2024-08-06 09:50:35'),
(1580, 'english', 'Hotel Home Page', 'Hotel Home Page', '2024-09-15 10:35:16', '2024-09-15 10:35:16'),
(1581, 'bangla', 'Hotel Home Page', 'Hotel Home Page', '2024-09-15 10:35:16', '2024-09-15 10:35:16'),
(1582, 'english', 'Home', 'Home', '2024-09-17 06:42:10', '2024-09-17 06:42:10'),
(1583, 'bangla', 'Home', 'Home', '2024-09-17 06:42:10', '2024-09-17 06:42:10'),
(1584, 'english', 'Office \n                    Address', 'Office \n                    Address', '2024-09-17 07:24:39', '2024-09-17 07:24:39'),
(1585, 'bangla', 'Office \n                    Address', 'Office \n                    Address', '2024-09-17 07:24:39', '2024-09-17 07:24:39'),
(1586, 'english', 'Category name', 'Category name', '2024-09-17 09:23:30', '2024-09-17 09:23:30'),
(1587, 'bangla', 'Category name', 'Category name', '2024-09-17 09:23:30', '2024-09-17 09:23:30'),
(1588, 'english', 'Category parent', 'Category parent', '2024-09-17 09:23:30', '2024-09-17 09:23:30'),
(1589, 'bangla', 'Category parent', 'Category parent', '2024-09-17 09:23:30', '2024-09-17 09:23:30'),
(1590, 'english', 'Select Category parent', 'Select Category parent', '2024-09-17 09:23:30', '2024-09-17 09:23:30'),
(1591, 'bangla', 'Select Category parent', 'Select Category parent', '2024-09-17 09:23:30', '2024-09-17 09:23:30'),
(1592, 'english', 'Enter City Name', 'Enter City Name', '2024-09-17 12:16:28', '2024-09-17 12:16:28'),
(1593, 'bangla', 'Enter City Name', 'Enter City Name', '2024-09-17 12:16:28', '2024-09-17 12:16:28'),
(1594, 'english', 'Country Name', 'Country Name', '2024-09-17 12:16:28', '2024-09-17 12:16:28'),
(1595, 'bangla', 'Country Name', 'Country Name', '2024-09-17 12:16:28', '2024-09-17 12:16:28'),
(1596, 'english', 'Select Country Name', 'Select Country Name', '2024-09-17 12:16:28', '2024-09-17 12:16:28'),
(1597, 'bangla', 'Select Country Name', 'Select Country Name', '2024-09-17 12:16:28', '2024-09-17 12:16:28'),
(1598, 'english', 'Customer Wishlist', 'Customer Wishlist', '2024-09-18 11:48:25', '2024-09-18 11:48:25'),
(1599, 'bangla', 'Customer Wishlist', 'Customer Wishlist', '2024-09-18 11:48:25', '2024-09-18 11:48:25'),
(1600, 'english', 'Add New customer', 'Add New customer', '2024-09-21 11:12:57', '2024-09-21 11:12:57'),
(1601, 'bangla', 'Add New customer', 'Add New customer', '2024-09-21 11:12:57', '2024-09-21 11:12:57'),
(1602, 'english', 'User Created successfully!', 'User Created successfully!', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1603, 'bangla', 'User Created successfully!', 'User Created successfully!', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1604, 'english', 'Email', 'Email', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1605, 'bangla', 'Email', 'Email', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1606, 'english', 'Edit User', 'Edit User', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1607, 'bangla', 'Edit User', 'Edit User', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1608, 'english', 'Deactive', 'Deactive', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1609, 'bangla', 'Deactive', 'Deactive', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1610, 'english', 'Blocked', 'Blocked', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1611, 'bangla', 'Blocked', 'Blocked', '2024-09-21 11:14:03', '2024-09-21 11:14:03'),
(1612, 'english', 'Enter Category Name', 'Enter Category Name', '2024-09-22 10:56:03', '2024-09-22 10:56:03'),
(1613, 'bangla', 'Enter Category Name', 'Enter Category Name', '2024-09-22 10:56:03', '2024-09-22 10:56:03'),
(1614, 'english', 'Category added successfully!', 'Category added successfully!', '2024-09-22 10:56:15', '2024-09-22 10:56:15'),
(1615, 'bangla', 'Category added successfully!', 'Category added successfully!', '2024-09-22 10:56:15', '2024-09-22 10:56:15'),
(1616, 'english', 'All Category', 'All Category', '2024-09-23 09:55:56', '2024-09-23 09:55:56'),
(1617, 'bangla', 'All Category', 'All Category', '2024-09-23 09:55:56', '2024-09-23 09:55:56'),
(1618, 'english', 'Atlas Login', 'Atlas Login', '2024-09-23 10:38:10', '2024-09-23 10:38:10'),
(1619, 'bangla', 'Atlas Login', 'Atlas Login', '2024-09-23 10:38:10', '2024-09-23 10:38:10'),
(1620, 'english', 'Password', 'Password', '2024-09-23 10:48:53', '2024-09-23 10:48:53'),
(1621, 'bangla', 'Password', 'Password', '2024-09-23 10:48:53', '2024-09-23 10:48:53'),
(1622, 'english', 'Forget your password', 'Forget your password', '2024-09-23 10:48:53', '2024-09-23 10:48:53'),
(1623, 'bangla', 'Forget your password', 'Forget your password', '2024-09-23 10:48:53', '2024-09-23 10:48:53'),
(1624, 'english', 'I agree to the', 'I agree to the', '2024-09-23 10:52:50', '2024-09-23 10:52:50'),
(1625, 'bangla', 'I agree to the', 'I agree to the', '2024-09-23 10:52:50', '2024-09-23 10:52:50'),
(1626, 'english', 'Terms & Policy', 'Terms & Policy', '2024-09-23 10:52:50', '2024-09-23 10:52:50'),
(1627, 'bangla', 'Terms & Policy', 'Terms & Policy', '2024-09-23 10:52:50', '2024-09-23 10:52:50'),
(1628, 'english', 'Login', 'Login', '2024-09-23 10:55:50', '2024-09-23 10:55:50'),
(1629, 'bangla', 'Login', 'Login', '2024-09-23 10:55:50', '2024-09-23 10:55:50'),
(1630, 'english', 'Don\'t an account', 'Don\'t an account', '2024-09-23 10:55:50', '2024-09-23 10:55:50'),
(1631, 'bangla', 'Don\'t an account', 'Don\'t an account', '2024-09-23 10:55:50', '2024-09-23 10:55:50'),
(1632, 'english', 'Sign up', 'Sign up', '2024-09-23 10:55:50', '2024-09-23 10:55:50'),
(1633, 'bangla', 'Sign up', 'Sign up', '2024-09-23 10:55:50', '2024-09-23 10:55:50'),
(1634, 'english', 'Get Started Now', 'Get Started Now', '2024-09-23 11:19:16', '2024-09-23 11:19:16'),
(1635, 'bangla', 'Get Started Now', 'Get Started Now', '2024-09-23 11:19:16', '2024-09-23 11:19:16'),
(1636, 'english', 'Enter your credentials to access your account', 'Enter your credentials to access your account', '2024-09-23 11:19:16', '2024-09-23 11:19:16'),
(1637, 'bangla', 'Enter your credentials to access your account', 'Enter your credentials to access your account', '2024-09-23 11:19:16', '2024-09-23 11:19:16'),
(1638, 'english', 'Register', 'Register', '2024-09-23 11:22:39', '2024-09-23 11:22:39'),
(1639, 'bangla', 'Register', 'Register', '2024-09-23 11:22:39', '2024-09-23 11:22:39'),
(1640, 'english', 'Logout', 'Logout', '2024-09-23 11:51:20', '2024-09-23 11:51:20'),
(1641, 'bangla', 'Logout', 'Logout', '2024-09-23 11:51:20', '2024-09-23 11:51:20'),
(1642, 'english', 'Forget Password', 'Forget Password', '2024-09-23 12:13:10', '2024-09-23 12:13:10'),
(1643, 'bangla', 'Forget Password', 'Forget Password', '2024-09-23 12:13:10', '2024-09-23 12:13:10'),
(1644, 'english', 'Enter your email address to receive a verification  code', 'Enter your email address to receive a verification  code', '2024-09-23 12:13:10', '2024-09-23 12:13:10'),
(1645, 'bangla', 'Enter your email address to receive a verification  code', 'Enter your email address to receive a verification  code', '2024-09-23 12:13:10', '2024-09-23 12:13:10'),
(1646, 'english', 'Send', 'Send', '2024-09-23 12:13:10', '2024-09-23 12:13:10'),
(1647, 'bangla', 'Send', 'Send', '2024-09-23 12:13:10', '2024-09-23 12:13:10'),
(1648, 'english', 'Member', 'Member', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1649, 'bangla', 'Member', 'Member', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1650, 'english', 'Team Member', 'Team Member', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1651, 'bangla', 'Team Member', 'Team Member', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1652, 'english', 'Service', 'Service', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1653, 'bangla', 'Service', 'Service', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1654, 'english', 'Designation', 'Designation', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1655, 'bangla', 'Designation', 'Designation', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1656, 'english', 'Rating', 'Rating', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1657, 'bangla', 'Rating', 'Rating', '2024-09-24 06:35:25', '2024-09-24 06:35:25'),
(1658, 'english', 'Enter team member name', 'Enter team member name', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1659, 'bangla', 'Enter team member name', 'Enter team member name', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1660, 'english', 'Enter team member designation', 'Enter team member designation', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1661, 'bangla', 'Enter team member designation', 'Enter team member designation', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1662, 'english', 'Select reating', 'Select reating', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1663, 'bangla', 'Select reating', 'Select reating', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1664, 'english', '1.0', '1.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1665, 'bangla', '1.0', '1.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1666, 'english', '2.0', '2.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1667, 'bangla', '2.0', '2.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1668, 'english', '3.0', '3.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1669, 'bangla', '3.0', '3.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1670, 'english', '4.0', '4.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1671, 'bangla', '4.0', '4.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1672, 'english', '5.0', '5.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1673, 'bangla', '5.0', '5.0', '2024-09-24 06:35:28', '2024-09-24 06:35:28'),
(1674, 'english', 'Price List', 'Price List', '2024-09-24 07:12:36', '2024-09-24 07:12:36'),
(1675, 'bangla', 'Price List', 'Price List', '2024-09-24 07:12:36', '2024-09-24 07:12:36'),
(1676, 'english', 'Package name', 'Package name', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1677, 'bangla', 'Package name', 'Package name', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1678, 'english', 'Enter package name', 'Enter package name', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1679, 'bangla', 'Enter package name', 'Enter package name', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1680, 'english', 'Package sub title', 'Package sub title', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1681, 'bangla', 'Package sub title', 'Package sub title', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1682, 'english', 'Package Price', 'Package Price', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1683, 'bangla', 'Package Price', 'Package Price', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1684, 'english', 'Enter price', 'Enter price', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1685, 'bangla', 'Enter price', 'Enter price', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1686, 'english', 'Package Period', 'Package Period', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1687, 'bangla', 'Package Period', 'Package Period', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1688, 'english', 'Monthly', 'Monthly', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1689, 'bangla', 'Monthly', 'Monthly', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1690, 'english', 'Semi Annually', 'Semi Annually', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1691, 'bangla', 'Semi Annually', 'Semi Annually', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1692, 'english', 'Annually', 'Annually', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1693, 'bangla', 'Annually', 'Annually', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1694, 'english', 'Listing Number', 'Listing Number', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1695, 'bangla', 'Listing Number', 'Listing Number', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1696, 'english', 'Enter listing number', 'Enter listing number', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1697, 'bangla', 'Enter listing number', 'Enter listing number', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1698, 'english', 'Category Number', 'Category Number', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1699, 'bangla', 'Category Number', 'Category Number', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1700, 'english', 'Enter category number', 'Enter category number', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1701, 'bangla', 'Enter category number', 'Enter category number', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1702, 'english', 'Featured Listings', 'Featured Listings', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1703, 'bangla', 'Featured Listings', 'Featured Listings', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1704, 'english', 'Unavailable', 'Unavailable', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1705, 'bangla', 'Unavailable', 'Unavailable', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1706, 'english', 'Available', 'Available', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1707, 'bangla', 'Available', 'Available', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1708, 'english', 'Listings Video', 'Listings Video', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1709, 'bangla', 'Listings Video', 'Listings Video', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1710, 'english', 'No', 'No', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1711, 'bangla', 'No', 'No', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1712, 'english', 'Yes', 'Yes', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1713, 'bangla', 'Yes', 'Yes', '2024-09-24 07:12:40', '2024-09-24 07:12:40'),
(1714, 'english', 'Package List', 'Package List', '2024-09-24 07:13:07', '2024-09-24 07:13:07'),
(1715, 'bangla', 'Package List', 'Package List', '2024-09-24 07:13:07', '2024-09-24 07:13:07'),
(1716, 'english', 'Add New doctor', 'Add New doctor', '2024-09-24 07:14:00', '2024-09-24 07:14:00'),
(1717, 'bangla', 'Add New doctor', 'Add New doctor', '2024-09-24 07:14:00', '2024-09-24 07:14:00'),
(1718, 'english', 'Blog Categories', 'Blog Categories', '2024-09-24 07:28:44', '2024-09-24 07:28:44'),
(1719, 'bangla', 'Blog Categories', 'Blog Categories', '2024-09-24 07:28:44', '2024-09-24 07:28:44'),
(1720, 'english', 'Blog Category Create', 'Blog Category Create', '2024-09-24 07:28:44', '2024-09-24 07:28:44'),
(1721, 'bangla', 'Blog Category Create', 'Blog Category Create', '2024-09-24 07:28:44', '2024-09-24 07:28:44'),
(1722, 'english', 'Number Blogs', 'Number Blogs', '2024-09-24 07:28:44', '2024-09-24 07:28:44'),
(1723, 'bangla', 'Number Blogs', 'Number Blogs', '2024-09-24 07:28:44', '2024-09-24 07:28:44'),
(1724, 'english', 'Total number of blogs : 0', 'Total number of blogs : 0', '2024-09-24 07:28:44', '2024-09-24 07:28:44'),
(1725, 'bangla', 'Total number of blogs : 0', 'Total number of blogs : 0', '2024-09-24 07:28:44', '2024-09-24 07:28:44'),
(1726, 'english', 'Profile Update successfully!', 'Profile Update successfully!', '2024-09-24 07:52:16', '2024-09-24 07:52:16'),
(1727, 'bangla', 'Profile Update successfully!', 'Profile Update successfully!', '2024-09-24 07:52:16', '2024-09-24 07:52:16'),
(1728, 'english', 'Customer Booking', 'Customer Booking', '2024-09-24 09:46:38', '2024-09-24 09:46:38'),
(1729, 'bangla', 'Customer Booking', 'Customer Booking', '2024-09-24 09:46:38', '2024-09-24 09:46:38'),
(1730, 'english', 'Agent Bookings', 'Agent Bookings', '2024-09-24 10:26:34', '2024-09-24 10:26:34'),
(1731, 'bangla', 'Agent Bookings', 'Agent Bookings', '2024-09-24 10:26:34', '2024-09-24 10:26:34'),
(1732, 'english', 'Agent Listings', 'Agent Listings', '2024-09-24 10:39:20', '2024-09-24 10:39:20'),
(1733, 'bangla', 'Agent Listings', 'Agent Listings', '2024-09-24 10:39:20', '2024-09-24 10:39:20'),
(1734, 'english', 'Subscriptions', 'Subscriptions', '2024-09-26 12:34:52', '2024-09-26 12:34:52'),
(1735, 'bangla', 'Subscriptions', 'Subscriptions', '2024-09-26 12:34:52', '2024-09-26 12:34:52'),
(1736, 'english', 'List of subscriptions', 'List of subscriptions', '2024-09-26 12:35:00', '2024-09-26 12:35:00'),
(1737, 'bangla', 'List of subscriptions', 'List of subscriptions', '2024-09-26 12:35:00', '2024-09-26 12:35:00'),
(1738, 'english', 'Buyer', 'Buyer', '2024-09-28 11:19:38', '2024-09-28 11:19:38'),
(1739, 'bangla', 'Buyer', 'Buyer', '2024-09-28 11:19:38', '2024-09-28 11:19:38'),
(1740, 'english', 'Package', 'Package', '2024-09-28 11:19:38', '2024-09-28 11:19:38'),
(1741, 'bangla', 'Package', 'Package', '2024-09-28 11:19:38', '2024-09-28 11:19:38'),
(1742, 'english', 'Amount Paid', 'Amount Paid', '2024-09-28 11:19:38', '2024-09-28 11:19:38'),
(1743, 'bangla', 'Amount Paid', 'Amount Paid', '2024-09-28 11:19:38', '2024-09-28 11:19:38'),
(1744, 'english', 'Reported Listings', 'Reported Listings', '2024-09-29 12:40:49', '2024-09-29 12:40:49'),
(1745, 'bangla', 'Reported Listings', 'Reported Listings', '2024-09-29 12:40:49', '2024-09-29 12:40:49'),
(1746, 'english', 'City Update successfully!', 'City Update successfully!', '2024-10-02 07:14:40', '2024-10-02 07:14:40'),
(1747, 'bangla', 'City Update successfully!', 'City Update successfully!', '2024-10-02 07:14:40', '2024-10-02 07:14:40'),
(1748, 'english', 'Edit Country', 'Edit Country', '2024-10-02 07:52:28', '2024-10-02 07:52:28'),
(1749, 'bangla', 'Edit Country', 'Edit Country', '2024-10-02 07:52:28', '2024-10-02 07:52:28'),
(1750, 'english', 'Choose country thumbnail', 'Choose country thumbnail', '2024-10-02 07:53:55', '2024-10-02 07:53:55'),
(1751, 'bangla', 'Choose country thumbnail', 'Choose country thumbnail', '2024-10-02 07:53:55', '2024-10-02 07:53:55'),
(1752, 'english', 'optional', 'optional', '2024-10-02 07:53:55', '2024-10-02 07:53:55'),
(1753, 'bangla', 'optional', 'optional', '2024-10-02 07:53:55', '2024-10-02 07:53:55'),
(1754, 'english', 'Country thumbnail update successfully!', 'Country thumbnail update successfully!', '2024-10-02 08:03:48', '2024-10-02 08:03:48'),
(1755, 'bangla', 'Country thumbnail update successfully!', 'Country thumbnail update successfully!', '2024-10-02 08:03:48', '2024-10-02 08:03:48'),
(1756, 'english', 'About', 'About', '2024-10-02 11:17:34', '2024-10-02 11:17:34'),
(1757, 'bangla', 'About', 'About', '2024-10-02 11:17:34', '2024-10-02 11:17:34'),
(1758, 'english', 'Not found', 'Not found', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1759, 'bangla', 'Not found', 'Not found', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1760, 'english', 'About This Application', 'About This Application', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1761, 'bangla', 'About This Application', 'About This Application', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1762, 'english', 'Software version', 'Software version', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1763, 'bangla', 'Software version', 'Software version', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1764, 'english', 'Laravel version', 'Laravel version', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1765, 'bangla', 'Laravel version', 'Laravel version', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1766, 'english', 'Check update', 'Check update', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1767, 'bangla', 'Check update', 'Check update', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1768, 'english', 'Php version', 'Php version', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1769, 'bangla', 'Php version', 'Php version', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1770, 'english', 'Curl enable', 'Curl enable', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1771, 'bangla', 'Curl enable', 'Curl enable', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1772, 'english', 'enabled', 'enabled', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1773, 'bangla', 'enabled', 'enabled', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1774, 'english', 'Product license', 'Product license', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1775, 'bangla', 'Product license', 'Product license', '2024-10-02 11:17:38', '2024-10-02 11:17:38'),
(1776, 'english', 'Enter valid purchase code', 'Enter valid purchase code', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1777, 'bangla', 'Enter valid purchase code', 'Enter valid purchase code', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1778, 'english', 'Customer support status', 'Customer support status', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1779, 'bangla', 'Customer support status', 'Customer support status', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1780, 'english', 'Support expiry date', 'Support expiry date', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1781, 'bangla', 'Support expiry date', 'Support expiry date', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1782, 'english', 'Customer name', 'Customer name', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1783, 'bangla', 'Customer name', 'Customer name', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1784, 'english', 'Get customer support', 'Get customer support', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1785, 'bangla', 'Get customer support', 'Get customer support', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1786, 'english', 'Customer support', 'Customer support', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1787, 'bangla', 'Customer support', 'Customer support', '2024-10-02 11:18:53', '2024-10-02 11:18:53'),
(1788, 'english', 'SEO Settings', 'SEO Settings', '2024-10-02 11:51:51', '2024-10-02 11:51:51'),
(1789, 'bangla', 'SEO Settings', 'SEO Settings', '2024-10-02 11:51:51', '2024-10-02 11:51:51'),
(1790, 'english', 'Manage SEO Settings', 'Manage SEO Settings', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1791, 'bangla', 'Manage SEO Settings', 'Manage SEO Settings', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1792, 'english', 'Writing your keyword and hit the enter', 'Writing your keyword and hit the enter', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1793, 'bangla', 'Writing your keyword and hit the enter', 'Writing your keyword and hit the enter', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1794, 'english', 'Meta Robot', 'Meta Robot', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1795, 'bangla', 'Meta Robot', 'Meta Robot', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1796, 'english', ' Canonical Url', ' Canonical Url', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1797, 'bangla', ' Canonical Url', ' Canonical Url', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1798, 'english', ' Custom Url', ' Custom Url', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1799, 'bangla', ' Custom Url', ' Custom Url', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1800, 'english', 'Submit', 'Submit', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1801, 'bangla', 'Submit', 'Submit', '2024-10-02 11:51:56', '2024-10-02 11:51:56'),
(1802, 'english', 'Enter your keywords', 'Enter your keywords', '2024-10-02 12:15:47', '2024-10-02 12:15:47'),
(1803, 'bangla', 'Enter your keywords', 'Enter your keywords', '2024-10-02 12:15:47', '2024-10-02 12:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `listing__features`
--

CREATE TABLE `listing__features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `feature_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing__features`
--

INSERT INTO `listing__features` (`id`, `title`, `listing_id`, `feature_id`, `created_at`, `updated_at`) VALUES
(15, 'test', 3, 0, '2024-06-25 03:07:42', '2024-06-25 03:07:42'),
(16, 'dfsdfsdf', 3, 0, '2024-06-25 03:08:00', '2024-06-25 03:08:00'),
(17, 'sdfsdfsdf', 3, 0, '2024-06-25 03:08:06', '2024-06-25 03:08:06'),
(19, 'test', 3, 15, '2024-06-25 03:08:18', '2024-06-25 03:08:18'),
(21, 'test124', 3, 15, '2024-06-25 03:31:10', '2024-06-25 03:31:10'),
(22, 'test', 6, 0, '2024-06-25 06:19:05', '2024-06-25 06:19:05'),
(23, 'test', 6, 22, '2024-06-25 06:19:13', '2024-06-25 06:19:13'),
(24, 'test', 8, 0, '2024-06-26 00:11:52', '2024-06-26 00:11:52'),
(25, 'test', 8, 24, '2024-06-26 00:11:59', '2024-06-26 00:11:59'),
(26, 'sdfsdf', 2, 0, '2024-07-07 05:18:43', '2024-07-07 05:18:43'),
(27, 'sdfsdf', 2, 0, '2024-07-07 05:18:50', '2024-07-07 05:18:50'),
(28, 'dfsdfsdf', 2, 27, '2024-07-08 00:41:48', '2024-07-08 00:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `listing__specifications`
--

CREATE TABLE `listing__specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `listing_id` int(11) NOT NULL,
  `specification_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing__specifications`
--

INSERT INTO `listing__specifications` (`id`, `title`, `value`, `listing_id`, `specification_id`, `created_at`, `updated_at`) VALUES
(5, 'test vt', NULL, 3, 0, '2024-06-25 04:18:08', '2024-06-25 04:18:08'),
(6, 'test', '124mm', 3, 0, '2024-06-25 04:31:48', '2024-06-25 04:31:48'),
(7, 'test', '124mm', 3, 4, '2024-06-25 04:32:37', '2024-06-25 04:32:37'),
(8, 'tesdfsdfsd', 'f444', 3, 4, '2024-06-25 04:32:47', '2024-06-25 04:32:47'),
(9, 'ddd', '4', 3, 5, '2024-06-25 04:32:57', '2024-06-25 04:32:57'),
(11, 'dsfsdfsdf', NULL, 3, 0, '2024-06-25 05:17:43', '2024-06-25 05:17:43'),
(12, 'tessdf', 'sdf', 3, 6, '2024-06-25 05:17:54', '2024-06-25 05:17:54'),
(13, 'test', NULL, 6, 0, '2024-06-25 06:19:26', '2024-06-25 06:19:26'),
(14, 'test', 'test', 6, 13, '2024-06-25 06:19:37', '2024-06-25 06:19:37'),
(15, 'test', NULL, 8, 0, '2024-06-26 00:12:11', '2024-06-26 00:12:11'),
(16, 'test', '45vv', 8, 15, '2024-06-26 00:12:21', '2024-06-26 00:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `listing_id` varchar(255) NOT NULL,
  `dis_price` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `sub_title`, `price`, `listing_id`, `dis_price`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Doloribus in dolores', 'Quas aliquid eos in', '368', '5', NULL, '1720423684.jpg', NULL, '2024-07-08 01:43:46'),
(7, 'Repre', 'Ex asperiores verita', '565', '7', '343', '1720423712.jpg', NULL, '2024-07-08 01:45:05'),
(8, 'Dignis', 'Fugiat eius quaerat', '766', '8', NULL, '1720423961.jpg', NULL, '2024-07-08 01:45:55'),
(9, 'Eveniet fugiat rec', 'Fugiat', '617', '1', NULL, '1720425074.jpg', NULL, '2024-07-08 01:51:14'),
(10, 'Quia tempor elit es', 'Dolorum aut est reic', '802', '1', '169', '1720425089.jpg', NULL, NULL),
(11, 'Ducimus id in amet', 'Facere fugit ad lab', '794', '1', '924', '1720425104.jpg', NULL, NULL),
(12, 'Incididunt incididun', 'Dolore totam non qui', '960', '2', '679', '1720440240.jpg', NULL, NULL),
(13, 'Ducimus nobis accus', 'In in dolores qui ni', '926', '2', '740', '1720440260.jpg', NULL, NULL),
(14, 'Veniam animi enim Soluta ut tempora su', 'Soluta ut tempora su Solu Veniam animi enim', '841', '2', '663', '1720440380.jpg', NULL, NULL),
(15, 'Impedit aliquid sit', 'Culpa inventore quae', '600', '2', '592', '1722248440.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_29_062523_create_categories_table', 1),
(5, '2024_06_03_103706_create_cities_table', 2),
(6, '2024_06_04_060707_create_blogs_table', 3),
(7, '2024_06_04_102457_create_blog_categories_table', 4),
(8, '2024_06_10_055010_create_car_listings_table', 5),
(9, '2024_06_10_061242_create_beauty_listings_table', 5),
(10, '2024_06_10_061308_create_real_estate_listings_table', 5),
(11, '2024_06_10_061343_create_hotel_listings_table', 5),
(12, '2024_06_10_061405_create_restaurant_listings_table', 5),
(13, '2024_06_10_074114_create_hotels_table', 5),
(14, '2024_06_10_074555_create_restaurants_table', 5),
(15, '2024_06_10_080627_create_amenities_table', 6),
(16, '2024_06_25_063412_create_listing__features_table', 7),
(17, '2024_06_25_095021_create_listing__specifications_table', 8),
(18, '2024_07_02_094655_create_rooms_table', 9),
(20, '2024_07_07_112000_create_menus_table', 10),
(21, '2024_07_09_053040_create_pricings_table', 11),
(22, '2024_07_16_103206_create_frontend_settings_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `feature` text NOT NULL,
  `listing` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `name`, `sub_title`, `price`, `icon`, `period`, `feature`, `listing`, `category`, `contact`, `video`, `choice`, `created_at`, `updated_at`) VALUES
(2, 'Melanie Vasquez 124', 'Aliquid sit maxime a', 875, 'fas fa-air-freshener', 'annually', 'unavailable', '550', '685', 'available', 'unavailable', '0', '2024-07-10 00:52:59', '2024-07-10 01:17:11'),
(3, 'Tamara Mcfarland', 'Perspiciatis ea vol', 822, 'fab fa-affiliatetheme', 'monthly', 'unavailable', '990', '551', 'available', 'unavailable', '1', '2024-07-10 00:53:11', '2024-07-10 00:53:11'),
(4, 'Naomi Black', 'Dolor nostrud ipsum', 998, 'fas fa-adjust', 'semiannually', 'unavailable', '219', '26', 'unavailable', 'available', '0', '2024-07-10 01:17:27', '2024-07-10 01:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_listings`
--

CREATE TABLE `real_estate_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `bath` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `sub_dimension` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `floor_plan` varchar(255) DEFAULT NULL,
  `garage` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `model_3d` varchar(255) DEFAULT NULL,
  `visibility` varchar(255) NOT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `specification` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `json_id` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_estate_listings`
--

INSERT INTO `real_estate_listings` (`id`, `title`, `description`, `price`, `bed`, `bath`, `size`, `dimension`, `sub_dimension`, `year`, `floor_plan`, `garage`, `video`, `model_3d`, `visibility`, `feature`, `specification`, `meta_title`, `meta_keyword`, `meta_description`, `og_title`, `og_description`, `og_image`, `canonical_url`, `json_id`, `country`, `city`, `area`, `address`, `postal_code`, `Latitude`, `Longitude`, `image`, `category`, `created_at`, `updated_at`) VALUES
(2, 'sdfsdfsdf', 'sdfsdfsdfsdf', '444', '44', '44', '44', 'ssdfsdf', 'sdfsdf', '44', '[]', '44', NULL, NULL, 'visible', '[\"80\",\"81\",\"104\",\"105\",\"106\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '1:@:5:@:sdfsdf', 'sdfsdf', '34', '34.24132', '-62.89194', '[\"0-1719747237.jpg\"]', '21', '2024-06-30 05:33:57', '2024-07-08 05:58:07'),
(3, 'test', 'sdfsdfsdf', '66', '44', '4', '44', '44werrsdf', 'sdfsdfsdf', '1928', '[\"0-1719818033.png\",\"0-1719818926.jpg\",\"1-1719818926.jpg\"]', '44', 'sdfsdfsdf', NULL, 'visible', '[\"80\",\"81\"]', NULL, NULL, NULL, NULL, 'og_time', NULL, NULL, NULL, NULL, '1', '7', '1:@:7:@:sdfsdf', 'sdfsdf', 'sdf', '35.43158', '-67.64008', '[\"0-1719818945.png\"]', '21', '2024-07-01 00:04:30', '2024-07-01 01:29:15'),
(6, 'sdfsdfsdf', 'sdfsdfsdfsdf', '444', '44', '44', '44', 'ssdfsdf', 'sdfsdf', '44', '[]', '44', NULL, NULL, 'visible', '[\"80\",\"81\",\"104\",\"105\",\"106\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '1:@:5:@:sdfsdf', 'sdfsdf', '34', '34.24132', '-62.89194', '[\"0-1719747237.jpg\"]', '21', '2024-06-30 05:33:57', '2024-07-08 05:58:07'),
(7, 'test', 'sdfsdfsdf', '66', '44', '4', '44', '44werrsdf', 'sdfsdfsdf', '1928', '[\"0-1719818033.png\",\"0-1719818926.jpg\",\"1-1719818926.jpg\"]', '44', 'sdfsdfsdf', NULL, 'visible', '[\"80\",\"81\"]', NULL, NULL, NULL, NULL, 'og_time', NULL, NULL, NULL, NULL, '1', '7', '1:@:7:@:sdfsdf', 'sdfsdf', 'sdf', '35.43158', '-67.64008', '[\"0-1719818945.png\"]', '21', '2024-07-01 00:04:30', '2024-07-01 01:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `reported_listings`
--

CREATE TABLE `reported_listings` (
  `id` bigint(20) NOT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `reporter_id` int(11) DEFAULT NULL,
  `report` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `json_id` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_listings`
--

CREATE TABLE `restaurant_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `visibility` varchar(255) NOT NULL,
  `amenities` varchar(255) DEFAULT NULL,
  `opening_time` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `json_id` varchar(255) DEFAULT NULL,
  `country` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `Latitude` int(11) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_listings`
--

INSERT INTO `restaurant_listings` (`id`, `title`, `category`, `image`, `description`, `visibility`, `amenities`, `opening_time`, `meta_title`, `meta_keyword`, `meta_description`, `og_title`, `og_description`, `canonical_url`, `json_id`, `country`, `city`, `area`, `address`, `postal_code`, `Latitude`, `Longitude`, `menu`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf', 28, '[\"0-1720349562.png\",\"1-1720349562.png\",\"2-1720349562.png\",\"3-1720349562.png\"]', 'sdfsdfsdf', 'visible', NULL, '{\"saturday\":{\"open\":\"17\",\"close\":\"15\"},\"sunday\":{\"open\":\"2\",\"close\":\"10\"},\"monday\":{\"open\":\"1\",\"close\":\"21\"},\"tuesday\":{\"open\":\"5\",\"close\":\"1\"},\"wednesday\":{\"open\":\"14\",\"close\":\"5\"},\"thursday\":{\"open\":\"2\",\"close\":\"14:30\"},\"friday\":{\"open\":\"21\",\"close\":\"7\"}}', 'sdfsdf', 'sdfsf', 'sdfsdfsdfsdf', 'og_tiddmedfsdfsdf', 'dsfsdff', 'sdfsdf', 'dsdfsdf', 1, 7, '1:@:7:@:sdfsdfdsf', 'sdfsdfdsf', '3434', 35, '-64.03501', '[\"10\",\"11\"]', '2024-07-04 03:51:10', '2024-07-08 01:59:54'),
(2, 'test', 28, '[\"0-1720086767.png\",\"1-1720086767.png\",\"2-1720086767.png\",\"3-1720086767.png\"]', 'sdfsdfsdf', 'visible', NULL, '{\"saturday\":{\"open\":\"22\",\"close\":\"7\"},\"sunday\":{\"open\":\"17\",\"close\":\"12\"},\"monday\":{\"open\":\"12\",\"close\":\"4\"},\"tuesday\":{\"open\":\"16\",\"close\":\"23\"},\"wednesday\":{\"open\":\"17\",\"close\":\"2\"},\"thursday\":{\"open\":\"1\",\"close\":\"10\"},\"friday\":{\"open\":\"5\",\"close\":\"9\"}}', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, '1:@:7:@:sdfsdfdsf', 'sdfsdfdsf', '3434', 38, '-58.27569', '[\"12\",\"13\",\"14\",\"15\"]', '2024-07-04 03:52:47', '2024-07-29 04:20:57'),
(5, 'test', 28, '[\"0-1720086767.png\",\"1-1720086767.png\",\"2-1720086767.png\",\"3-1720086767.png\"]', 'sdfsdfsdf', 'visible', NULL, '{\"saturday\":{\"open\":\"22\",\"close\":\"7\"},\"sunday\":{\"open\":\"17\",\"close\":\"12\"},\"monday\":{\"open\":\"12\",\"close\":\"4\"},\"tuesday\":{\"open\":\"16\",\"close\":\"23\"},\"wednesday\":{\"open\":\"17\",\"close\":\"2\"},\"thursday\":{\"open\":\"1\",\"close\":\"10\"},\"friday\":{\"open\":\"5\",\"close\":\"9\"}}', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, '1:@:7:@:sdfsdfdsf', 'sdfsdfdsf', '3434', 38, '-58.27569', '[\"12\"]', '2024-07-04 03:52:47', '2024-07-08 23:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `listing_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `feature` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `person`, `listing_id`, `price`, `feature`, `image`, `created_at`, `updated_at`) VALUES
(2, 'fgdfgdfg', 'dfgdfg', '3', '66', '[\"83\",\"85\",\"86\"]', '[]', NULL, NULL),
(6, 'sdfsdfsdf', 'sdfsdf', '2', '5888', '[\"83\",\"84\",\"85\",\"86\",\"87\"]', '[\"0-1720355309.png\",\"1-1720355309.png\"]', NULL, '2024-07-07 06:28:29'),
(9, 'Amet minima non atq', '670', '3', '495', '[\"84\",\"86\",\"87\"]', '[\"0-1720077183.jpg\",\"1-1720077184.jpg\"]', NULL, NULL),
(10, 'Placeat et velit il', '15', '3', '441', '[\"83\",\"84\",\"86\",\"87\"]', '[\"0-1720077715.jpg\",\"1-1720077715.png\",\"2-1720077715.png\",\"3-1720077715.png\"]', NULL, NULL),
(11, 'Aut nisi ullamco atq', '45', '3', '514', '[\"83\",\"85\",\"87\"]', '[\"0-1720077737.png\",\"1-1720077737.png\",\"2-1720077737.png\",\"3-1720077737.png\"]', NULL, NULL),
(12, 'sdfsdf', 'sdfsdf', '3', '555', '[\"83\",\"84\",\"85\",\"86\",\"87\"]', '[\"0-1720080333.jpg\"]', NULL, '2024-07-04 02:05:33'),
(13, 'A magni esse conseq', '690', '3', '380', '[\"83\",\"86\"]', '[\"0-1720078941.jpg\",\"1-1720078941.jpg\",\"2-1720078941.jpg\"]', NULL, NULL),
(14, 'Officia distinctio', '446', '2', '569', '[\"83\",\"84\",\"86\",\"87\"]', '[\"0-1720355278.png\",\"1-1720355279.png\",\"2-1720355279.png\",\"3-1720355279.png\"]', NULL, NULL),
(15, 'Qui a cumq', '568', '2', '721', '[\"84\",\"87\"]', '[\"0-1720422303.jpg\"]', NULL, '2024-07-08 01:19:58'),
(16, 'Odio ut autem sit l', '37', '3', '426', '[\"83\",\"84\",\"86\",\"87\"]', '[\"0-1720440129.jpg\"]', NULL, NULL),
(17, 'Veniam sequi vel su', '835', '3', '905', '[\"83\",\"86\",\"87\",\"108\"]', '[\"0-1720440208.jpg\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_fields`
--

CREATE TABLE `seo_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(20) DEFAULT NULL,
  `blog_id` int(20) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `name_route` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_robot` text DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `custom_url` varchar(255) DEFAULT NULL,
  `json_ld` longtext DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_fields`
--

INSERT INTO `seo_fields` (`id`, `course_id`, `blog_id`, `route`, `name_route`, `meta_title`, `meta_keywords`, `meta_description`, `meta_robot`, `canonical_url`, `custom_url`, `json_ld`, `og_title`, `og_description`, `og_image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Home', 'home', 'Home page', NULL, 'Home page for academy Seo', 'xxxxxx', 'https://academy.com', 'https://academy.com', '<script type=\"application/ld+json\"> {   \"@context\": \"http://schema.org\",   \"@type\": \"WebSite\",   \"name\": \"CodeCanyon\",   \"url\": \"https://codecanyon.net\" } </script>', 'ooooooooo', 'zzzzzzzzzz', 'OG-home.jpg', NULL, NULL),
(2, NULL, NULL, 'Compare', 'compare', 'Course compare', 'course, compare, difference', 'Course compare', 'xxxxxx', 'https:://academy.com/course-compare', 'https:://academy.com/course-compare', NULL, 'Course compare', 'Course compare', '2-customer-php-version.PNG', NULL, NULL),
(3, NULL, NULL, 'Privacy', 'privacy.policy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OG-documantation.jpg', NULL, NULL),
(4, NULL, NULL, 'Refund', 'refund.policy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OG-Blog.jpg', NULL, NULL),
(5, NULL, NULL, 'Terms- condition', 'terms.condition', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OG-service.jpg', NULL, NULL),
(6, NULL, NULL, 'Faq', 'faq', 'Creative elements - ui subscription system', 'ui kits, website template, video template', 'Best and affordable ui kit subscription system', NULL, NULL, NULL, NULL, NULL, NULL, 'OG-elements home.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3zD5mHM4VCRgjrZVeiHy21TQ2S9aPDP2tnkwZoAz', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic3ZXcjRnSXNMWmFrN25yU3ZKYWtvZlBFb2l4UGRsRG9wVzc0RnVRayI7czoxNToiYWN0aXZlX2xhbmd1YWdlIjtzOjc6ImVuZ2xpc2giO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vbG9jYWxob3N0L2F0bGFzX2xhcmF2ZWwvYXRsYXMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1728542043),
('EIUDMQFd6WjEr0VAnHYsnVblTfBMQtmltTBSlqIJ', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOFhtTDB3Y0RRQUZFdlhHdnN4VjgxNkwzZUhSZlh0eVZ4WHJXN0ExYyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1ODoiaHR0cDovL2xvY2FsaG9zdC9hdGxhc19sYXJhdmVsL2F0bGFzL2FkbWluL2xpc3RpbmdzL2JlYXV0eSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vbG9jYWxob3N0L2F0bGFzX2xhcmF2ZWwvYXRsYXMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE1OiJhY3RpdmVfbGFuZ3VhZ2UiO3M6NzoiZW5nbGlzaCI7fQ==', 1728303390),
('FSPjhgsVHARKlRpRANOxiZ4c8HEEDvses6c5bGti', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZEhXNnNuMGFtVEpsUjFUbExNRnRzZlBJS0x4WVh3ekwwaEp6MmlGcSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY2OiJodHRwOi8vbG9jYWxob3N0L2F0bGFzX2xhcmF2ZWwvYXRsYXMvYWRtaW4vbGlzdGluZy1lZGl0L2JlYXV0eS8yLzAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE1OiJhY3RpdmVfbGFuZ3VhZ2UiO3M6NzoiZW5nbGlzaCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1727951398),
('RqkLoXEQFW0cnTUPhvbbg7eA438sH8xA8YjLYdZa', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWXo1V1plRFQwNWVsTUFhMGUwTWtLSEZUYkJTMW9xdElSVXZZSmtVYyI7czoxNToiYWN0aXZlX2xhbmd1YWdlIjtzOjc6ImVuZ2xpc2giO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vbG9jYWxob3N0L2F0bGFzX2xhcmF2ZWwvYXRsYXMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1728388837),
('Ywhhnkl231cKy3TtOkARgVEMbIeohx0Xw7pgUEED', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiekxRMlY2NFh0MXZIRWV6M1VoUjJZY3c1SXJrQlE1UkpyclM4MnZ0TyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1MDoiaHR0cDovL2xvY2FsaG9zdC9hdGxhc19sYXJhdmVsL2F0bGFzL2FkbWluL3Byb2ZpbGUiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MjoiaHR0cDovL2xvY2FsaG9zdC9hdGxhc19sYXJhdmVsL2F0bGFzL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxNToiYWN0aXZlX2xhbmd1YWdlIjtzOjc6ImVuZ2xpc2giO30=', 1728193816);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `package_id` bigint(20) NOT NULL,
  `paid_amount` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `transaction_keys` longtext DEFAULT NULL,
  `auto_subscription` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `expire_date` int(11) DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `package_id`, `paid_amount`, `payment_method`, `transaction_keys`, `auto_subscription`, `status`, `expire_date`, `date_added`, `created_at`, `updated_at`) VALUES
(1, 13, 3, '822', 'stripe', '[]', 0, '1', 1729946589, 1727354589, '2024-09-26 12:42:23', '2024-09-26 12:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `key` varchar(200) DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(2, 'system_title', 'Atlas Business Directory Listing', '', '2024-09-24 06:14:07'),
(4, 'system_email', 'admin@example.com', '', '2024-09-24 06:14:07'),
(5, 'address', '3 Mavis St, Footscray, VIC3011', '', '2024-09-24 06:14:07'),
(6, 'phone', '00000', '', '2024-09-24 06:14:07'),
(8, 'country_id', '73', '', '2024-09-24 06:14:07'),
(10, 'currency_position', 'left', '', '2024-09-24 06:14:07'),
(11, 'language', 'english', '', '2024-09-24 06:14:07'),
(12, 'purchase_code', 'Enter-your-purchase-code', '', '2024-09-24 06:14:07'),
(13, 'timezone', 'Asia/Dhaka', '', ''),
(14, 'paypal', '{\"status\":\"0\",\"mode\":\"test\",\"test_client_id\":\"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\",\"test_secret_key\":\"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\",\"live_client_id\":\"pk_live_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\",\"live_secret_key\":\"sk_live_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\"}', '', ''),
(15, 'stripe', '{\"status\":\"1\",\"mode\":\"test\",\"test_key\":\"pk_test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\",\"test_secret_key\":\"sk_test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\",\"public_live_key\":\"pk_live_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\",\"secret_live_key\":\"sk_live_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\"}', '', ''),
(18, 'system_currency', '2', '', '2024-09-24 06:14:07'),
(23, 'smtp_protocol', 'smtp', '', '2024-07-11 09:52:29'),
(24, 'smtp_host', 'smtp_host', '', '2024-07-11 09:52:29'),
(25, 'smtp_port', 'smtp_port', '', '2024-07-11 09:52:29'),
(26, 'smtp_user', 'smtp_user', '', ''),
(27, 'smtp_pass', 'smtp_pass', '', ''),
(28, 'facebook', 'https://www.facebook.com/', '', '2024-07-10 09:58:57'),
(30, 'term_and_condition', '', '', ''),
(31, 'privacy_policy', '', '', ''),
(35, 'footer_text', 'Creativeitem', '', ''),
(36, 'footer_link', 'http://creativeitem.com/', '', ''),
(37, 'version', '1.1', '', ''),
(40, 'map_access_token', 'map_access_token', '', '2024-09-24 06:14:07'),
(41, 'max_zoom_level', '10', '', '2024-09-24 06:14:07'),
(44, 'default_location', '40.702210, -74.015880', '', '2024-09-24 06:14:07'),
(50, 'smtp_crypto', 'tls', '', '2024-07-11 09:52:29'),
(52, 'signup_email_verification', '0', '', '2024-09-24 06:14:07'),
(57, 'smtp_from_email', 'smtp from email', '', ''),
(59, 'twitter', 'https://twitter.com', '', '2024-07-10 09:58:57'),
(60, 'linkedin', 'https://linkedin.com', '', '2024-07-10 09:58:57'),
(61, 'smtp_username', '125', '2024-07-11 09:52:11', '2024-07-11 09:52:29'),
(62, 'smtp_password', '1254', '2024-07-11 09:52:11', '2024-07-11 09:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `is_agent` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(125) NOT NULL,
  `phone` varchar(125) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `specialty` text DEFAULT NULL,
  `treatment_areas` text DEFAULT NULL,
  `education` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `membership` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `is_agent`, `image`, `type`, `phone`, `address`, `bio`, `linkedin`, `twitter`, `facebook`, `gender`, `status`, `specialty`, `treatment_areas`, `education`, `experience`, `membership`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'admin@example.com', '2024-05-30 04:21:27', '$2y$12$LdlWWIyI8cipHjGSVds33eIxdEaGM3P6q/UfQTnEMYYLtlqGYZ.hW', '1', NULL, '1727164335.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'JmLaGz7N0zI05DY2shl9BcKZ3Dz8oAmQ3Jha6f6MfewKTuGGjea6d2mglYTq', '2024-05-30 04:21:28', '2024-09-24 01:52:16'),
(13, 'user 124', 'user@example.com', NULL, '$2y$12$tQtP7afcpMSIgVIPNgWRlOY6K48gCJyuvTS/2cVsTbUnDUt1dx2IS', '2', NULL, '1718183926.jpg', 'doctor', '+88016427210', '{\"country\":\"1\",\"city\":\"5\"}', NULL, 'https://www.linkedin.com/', 'https://www.twitter.com/', 'https://www.facebook.com/', 'male', 1, 'dentist', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-12 03:18:46'),
(14, 'user', 'admdin@example.com', NULL, '$2y$12$s5s0nGIiol9FE/oXlUsq7uJs4QUramI.FYCK/U3YwtrU8TYF7hNDS', '2', NULL, '1718183912.jpg', 'doctor', '+88016427210', '{\"country\":\"2\",\"city\":\"4\"}', NULL, 'https://www.linkedin.com/', 'https://www.twitter.com/', 'https://www.facebook.com/', 'male', 1, 'dentist', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-12 03:18:32'),
(15, 'user', 'adin@example.com', NULL, '$2y$12$s5s0nGIiol9FE/oXlUsq7uJs4QUramI.FYCK/U3YwtrU8TYF7hNDS', '2', NULL, '1718183912.jpg', 'doctor', '+88016427210', '{\"country\":\"2\",\"city\":\"4\"}', NULL, 'https://www.linkedin.com/', 'https://www.twitter.com/', 'https://www.facebook.com/', 'male', 1, 'dentist', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-12 03:18:32'),
(16, 'user 124', 'uer@example.com', NULL, '$2y$12$tQtP7afcpMSIgVIPNgWRlOY6K48gCJyuvTS/2cVsTbUnDUt1dx2IS', '2', NULL, '1718183926.jpg', 'doctor', '+88016427210', '{\"country\":\"1\",\"city\":\"5\"}', NULL, 'https://www.linkedin.com/', 'https://www.twitter.com/', 'https://www.facebook.com/', 'male', 1, 'dentist', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-12 03:18:46'),
(17, 'Creative Customer', 'customer@example.com', NULL, '$2y$12$y2BcXpzjjmoU/PoHMTjs0uudmupO7kbq3GYpd7y6ogh0v6UZuJ1AS', '2', 1, NULL, 'customer', '+90534636', '{\"country\":\"1\",\"city\":\"5\"}', NULL, NULL, NULL, NULL, 'male', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beauty_listings`
--
ALTER TABLE `beauty_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `car_listings`
--
ALTER TABLE `car_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_code_unique` (`code`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_listings`
--
ALTER TABLE `hotel_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing__features`
--
ALTER TABLE `listing__features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing__specifications`
--
ALTER TABLE `listing__specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estate_listings`
--
ALTER TABLE `real_estate_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reported_listings`
--
ALTER TABLE `reported_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_listings`
--
ALTER TABLE `restaurant_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_fields`
--
ALTER TABLE `seo_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `beauty_listings`
--
ALTER TABLE `beauty_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_listings`
--
ALTER TABLE `car_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_listings`
--
ALTER TABLE `hotel_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1804;

--
-- AUTO_INCREMENT for table `listing__features`
--
ALTER TABLE `listing__features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `listing__specifications`
--
ALTER TABLE `listing__specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `real_estate_listings`
--
ALTER TABLE `real_estate_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reported_listings`
--
ALTER TABLE `reported_listings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant_listings`
--
ALTER TABLE `restaurant_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seo_fields`
--
ALTER TABLE `seo_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
