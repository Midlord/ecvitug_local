-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2019 at 02:13 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9554328_ecvitugconstructions`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(9,3) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `description`, `slug`, `quantity`, `price`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Playstation 4', 'description goes here', 'playstation-4', 10, '399.990', 'rental', 'ps4.jpg', NULL, NULL),
(2, 'Xbox One', 'description goes here', 'xbox-one', 10, '449.990', 'rental', 'xbox-one.jpg', NULL, NULL),
(3, 'Apple Macbook Pro', 'description goes here', 'macbook-pro', 10, '2299.990', 'rental', 'macbook-pro.jpg', NULL, NULL),
(4, 'Apple iPad Retina', 'description goes here', 'ipad-retina', 10, '799.990', 'rental', 'ipad-retina.jpg', NULL, NULL),
(5, 'Acoustic Guitar', 'description goes here', 'acoustic-guitar', 10, '699.990', 'rental', 'acoustic.jpg', NULL, NULL),
(6, 'Electric Guitar', 'description goes here', 'electric-guitar', 10, '899.990', 'rental', 'electric.jpg', NULL, NULL),
(7, 'Headphones', 'description goes here', 'headphones', 10, '99.990', 'rental', 'headphones.jpg', NULL, NULL),
(8, 'Speakers', 'description goes here', 'speakers', 10, '499.990', 'rental', 'speakers.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `estimates`
--

CREATE TABLE `estimates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobilePhone` int(11) NOT NULL,
  `locationProperty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lotArea` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floorArea` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classfication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberOfFloors` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberOfRooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferDesign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferedFinished` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberOfToiletAndBath` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherSpecification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carGarage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentDate` date NOT NULL,
  `approximateBudget` int(11) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('minor','major') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estimates`
--

INSERT INTO `estimates` (`id`, `user_id`, `mobilePhone`, `locationProperty`, `lotArea`, `length`, `width`, `floorArea`, `classfication`, `numberOfFloors`, `numberOfRooms`, `preferDesign`, `preferedFinished`, `numberOfToiletAndBath`, `otherSpecification`, `carGarage`, `paymentDate`, `approximateBudget`, `message`, `documents`, `type`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 0, 'Angeles City', '600 square meters', '400 Meters', '300 meters', '400 sqm', 'Residential', '2', '3', 'Contemporary', '1', '4', 'Terrace/Balcony/Veranda', '1', '2020-03-01', 4000000, 'Pakigawa na lang, bilisan din', '1557371018.jpg', 'major', '2019-05-09 03:03:39', '2019-05-09 03:03:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `content`, `created_at`, `updated_at`, `status`) VALUES
(1, 2, 'Administrator update rental Playstation 6', '2019-05-07 06:36:52', '2019-05-07 06:36:52', 1),
(2, 2, 'Administrator login ', '2019-05-07 06:57:12', '2019-05-07 06:57:12', 1),
(3, 1, 'Kelvin Dale Vitug is logout ', '2019-05-07 07:15:09', '2019-05-07 07:15:09', 1),
(4, 1, 'Kelvin Dale Vitug is logout ', '2019-05-07 07:16:44', '2019-05-07 07:16:44', 1),
(5, 1, 'Kelvin Dale Vitug is logout ', '2019-05-07 07:18:08', '2019-05-07 07:18:08', 1),
(6, 1, 'Kelvin Dale Vitug is logout ', '2019-05-07 07:22:56', '2019-05-07 07:22:56', 1),
(7, 1, 'Kelvin Dale Vitug is logout ', '2019-05-07 07:29:14', '2019-05-07 07:29:14', 1),
(8, 2, 'Administrator login ', '2019-05-07 07:33:24', '2019-05-07 07:33:24', 1),
(9, 2, 'Administrator login ', '2019-05-07 07:33:28', '2019-05-07 07:33:28', 1),
(10, 2, 'Administrator is logout ', '2019-05-07 07:42:06', '2019-05-07 07:42:06', 1),
(11, 2, 'Administrator login ', '2019-05-07 07:42:11', '2019-05-07 07:42:11', 1),
(12, 2, 'Administrator login ', '2019-05-07 07:42:13', '2019-05-07 07:42:13', 1),
(13, 2, 'Administrator is logout ', '2019-05-07 07:42:15', '2019-05-07 07:42:15', 1),
(14, 1, 'Kelvin Dale Vitug is logout ', '2019-05-07 07:43:24', '2019-05-07 07:43:24', 1),
(15, 1, 'Kelvin Dale Vitug is logout ', '2019-05-07 07:48:33', '2019-05-07 07:48:33', 1),
(16, 1, 'Kelvin Dale Vitug is logout ', '2019-05-07 07:50:58', '2019-05-07 07:50:58', 1),
(17, 2, 'Administrator login ', '2019-05-07 07:51:07', '2019-05-07 07:51:07', 1),
(18, 2, 'Administrator login ', '2019-05-07 07:51:10', '2019-05-07 07:51:10', 1),
(19, 2, 'Administrator is logout ', '2019-05-07 07:51:12', '2019-05-07 07:51:12', 1),
(20, 2, 'Administrator login ', '2019-05-08 04:31:35', '2019-05-08 04:31:35', 1),
(21, 2, 'Administrator login ', '2019-05-08 04:31:38', '2019-05-08 04:31:38', 1),
(22, 2, 'Administrator login ', '2019-05-08 04:32:01', '2019-05-08 04:32:01', 1),
(23, 2, 'Administrator login ', '2019-05-08 04:32:04', '2019-05-08 04:32:04', 1),
(24, 2, 'Administrator login ', '2019-05-08 04:32:07', '2019-05-08 04:32:07', 1),
(25, 2, 'Administrator login ', '2019-05-08 04:32:09', '2019-05-08 04:32:09', 1),
(26, 2, 'Administrator login ', '2019-05-08 04:32:11', '2019-05-08 04:32:11', 1),
(27, 2, 'Administrator login ', '2019-05-08 04:32:45', '2019-05-08 04:32:45', 1),
(28, 2, 'Administrator login ', '2019-05-08 04:32:48', '2019-05-08 04:32:48', 1),
(29, 2, 'Administrator login ', '2019-05-08 04:32:50', '2019-05-08 04:32:50', 1),
(30, 2, 'Administrator login ', '2019-05-08 04:32:52', '2019-05-08 04:32:52', 1),
(31, 2, 'Administrator login ', '2019-05-08 04:32:54', '2019-05-08 04:32:54', 1),
(32, 2, 'Administrator login ', '2019-05-08 04:32:55', '2019-05-08 04:32:55', 1),
(33, 2, 'Administrator login ', '2019-05-08 04:32:57', '2019-05-08 04:32:57', 1),
(34, 2, 'Administrator login ', '2019-05-08 04:35:37', '2019-05-08 04:35:37', 1),
(35, 2, 'Administrator login ', '2019-05-08 04:35:39', '2019-05-08 04:35:39', 1),
(36, 2, 'Administrator login ', '2019-05-08 04:35:51', '2019-05-08 04:35:51', 1),
(37, 2, 'Administrator login ', '2019-05-08 04:35:53', '2019-05-08 04:35:53', 1),
(38, 2, 'Administrator login ', '2019-05-08 04:39:22', '2019-05-08 04:39:22', 1),
(39, 2, 'Administrator login ', '2019-05-08 04:46:44', '2019-05-08 04:46:44', 1),
(40, 2, 'Administrator login ', '2019-05-08 04:46:45', '2019-05-08 04:46:45', 1),
(41, 2, 'Administrator login ', '2019-05-08 04:46:47', '2019-05-08 04:46:47', 1),
(42, 2, 'Administrator login ', '2019-05-08 04:46:49', '2019-05-08 04:46:49', 1),
(43, 2, 'Administrator login ', '2019-05-08 04:47:12', '2019-05-08 04:47:12', 1),
(44, 2, 'Administrator login ', '2019-05-08 04:47:15', '2019-05-08 04:47:15', 1),
(45, 2, 'Administrator login ', '2019-05-08 04:48:37', '2019-05-08 04:48:37', 1),
(46, 2, 'Administrator login ', '2019-05-08 04:48:39', '2019-05-08 04:48:39', 1),
(47, 2, 'Administrator login ', '2019-05-08 04:52:29', '2019-05-08 04:52:29', 1),
(48, 2, 'Administrator login ', '2019-05-08 04:52:31', '2019-05-08 04:52:31', 1),
(49, 2, 'Administrator login ', '2019-05-08 04:52:39', '2019-05-08 04:52:39', 1),
(50, 2, 'Administrator login ', '2019-05-08 04:52:42', '2019-05-08 04:52:42', 1),
(51, 2, 'Administrator login ', '2019-05-08 04:52:43', '2019-05-08 04:52:43', 1),
(52, 2, 'Administrator login ', '2019-05-08 04:52:43', '2019-05-08 04:52:43', 1),
(53, 2, 'Administrator login ', '2019-05-08 04:52:45', '2019-05-08 04:52:45', 1),
(54, 2, 'Administrator login ', '2019-05-08 04:55:23', '2019-05-08 04:55:23', 1),
(55, 2, 'Administrator login ', '2019-05-08 04:55:25', '2019-05-08 04:55:25', 1),
(56, 2, 'Administrator login ', '2019-05-08 04:58:05', '2019-05-08 04:58:05', 1),
(57, 2, 'Administrator login ', '2019-05-08 04:58:08', '2019-05-08 04:58:08', 1),
(58, 2, 'Administrator login ', '2019-05-08 05:01:44', '2019-05-08 05:01:44', 1),
(59, 2, 'Administrator login ', '2019-05-08 05:01:47', '2019-05-08 05:01:47', 1),
(60, 2, 'Administrator login ', '2019-05-08 05:01:48', '2019-05-08 05:01:48', 1),
(61, 2, 'Administrator login ', '2019-05-08 05:01:50', '2019-05-08 05:01:50', 1),
(62, 2, 'Administrator login ', '2019-05-08 05:01:52', '2019-05-08 05:01:52', 1),
(63, 2, 'Administrator login ', '2019-05-08 05:02:16', '2019-05-08 05:02:16', 1),
(64, 2, 'Administrator login ', '2019-05-08 05:02:19', '2019-05-08 05:02:19', 1),
(65, 2, 'Administrator login ', '2019-05-08 05:02:55', '2019-05-08 05:02:55', 1),
(66, 2, 'Administrator login ', '2019-05-08 05:02:57', '2019-05-08 05:02:57', 1),
(67, 2, 'Administrator login ', '2019-05-08 05:03:05', '2019-05-08 05:03:05', 1),
(68, 2, 'Administrator login ', '2019-05-08 05:03:08', '2019-05-08 05:03:08', 1),
(69, 2, 'Administrator login ', '2019-05-08 05:04:37', '2019-05-08 05:04:37', 1),
(70, 2, 'Administrator login ', '2019-05-08 05:04:40', '2019-05-08 05:04:40', 1),
(71, 2, 'Administrator login ', '2019-05-08 05:12:46', '2019-05-08 05:12:46', 1),
(72, 2, 'Administrator login ', '2019-05-08 05:12:49', '2019-05-08 05:12:49', 1),
(73, 2, 'Administrator login ', '2019-05-08 05:13:03', '2019-05-08 05:13:03', 1),
(74, 2, 'Administrator login ', '2019-05-08 05:13:06', '2019-05-08 05:13:06', 1),
(75, 2, 'Administrator login ', '2019-05-08 05:13:19', '2019-05-08 05:13:19', 1),
(76, 2, 'Administrator login ', '2019-05-08 05:13:22', '2019-05-08 05:13:22', 1),
(77, 2, 'Administrator login ', '2019-05-08 05:13:29', '2019-05-08 05:13:29', 1),
(78, 2, 'Administrator login ', '2019-05-08 05:13:32', '2019-05-08 05:13:32', 1),
(79, 2, 'Administrator login ', '2019-05-08 05:14:52', '2019-05-08 05:14:52', 1),
(80, 2, 'Administrator login ', '2019-05-08 05:14:55', '2019-05-08 05:14:55', 1),
(81, 2, 'Administrator login ', '2019-05-08 05:15:10', '2019-05-08 05:15:10', 1),
(82, 2, 'Administrator login ', '2019-05-08 05:15:12', '2019-05-08 05:15:12', 1),
(83, 2, 'Administrator login ', '2019-05-08 05:15:14', '2019-05-08 05:15:14', 1),
(84, 2, 'Administrator login ', '2019-05-08 05:15:20', '2019-05-08 05:15:20', 1),
(85, 2, 'Administrator login ', '2019-05-08 05:15:22', '2019-05-08 05:15:22', 1),
(86, 2, 'Administrator login ', '2019-05-08 05:19:49', '2019-05-08 05:19:49', 1),
(87, 2, 'Administrator login ', '2019-05-08 05:19:55', '2019-05-08 05:19:55', 1),
(88, 2, 'Administrator login ', '2019-05-08 05:20:07', '2019-05-08 05:20:07', 1),
(89, 2, 'Administrator login ', '2019-05-08 05:20:09', '2019-05-08 05:20:09', 1),
(90, 2, 'Administrator login ', '2019-05-08 05:20:18', '2019-05-08 05:20:18', 1),
(91, 2, 'Administrator login ', '2019-05-08 05:20:53', '2019-05-08 05:20:53', 1),
(92, 2, 'Administrator login ', '2019-05-08 05:20:56', '2019-05-08 05:20:56', 1),
(93, 2, 'Administrator login ', '2019-05-08 05:20:58', '2019-05-08 05:20:58', 1),
(94, 2, 'Administrator login ', '2019-05-08 05:20:58', '2019-05-08 05:20:58', 1),
(95, 2, 'Administrator login ', '2019-05-08 05:21:00', '2019-05-08 05:21:00', 1),
(96, 2, 'Administrator login ', '2019-05-08 05:21:10', '2019-05-08 05:21:10', 1),
(97, 2, 'Administrator login ', '2019-05-08 05:21:13', '2019-05-08 05:21:13', 1),
(98, 2, 'Administrator login ', '2019-05-08 05:21:15', '2019-05-08 05:21:15', 1),
(99, 2, 'Administrator login ', '2019-05-08 05:21:18', '2019-05-08 05:21:18', 1),
(100, 2, 'Administrator login ', '2019-05-08 05:21:19', '2019-05-08 05:21:19', 1),
(101, 2, 'Administrator login ', '2019-05-08 05:22:18', '2019-05-08 05:22:18', 1),
(102, 2, 'Administrator login ', '2019-05-08 05:22:25', '2019-05-08 05:22:25', 1),
(103, 2, 'Administrator login ', '2019-05-08 05:25:02', '2019-05-08 05:25:02', 1),
(104, 2, 'Administrator login ', '2019-05-08 05:25:05', '2019-05-08 05:25:05', 1),
(105, 2, 'Administrator login ', '2019-05-08 05:25:13', '2019-05-08 05:25:13', 1),
(106, 2, 'Administrator login ', '2019-05-08 05:25:14', '2019-05-08 05:25:14', 1),
(107, 2, 'Administrator login ', '2019-05-08 05:25:16', '2019-05-08 05:25:16', 1),
(108, 2, 'Administrator login ', '2019-05-08 05:29:32', '2019-05-08 05:29:32', 1),
(109, 2, 'Administrator login ', '2019-05-08 05:31:46', '2019-05-08 05:31:46', 1),
(110, 2, 'Administrator login ', '2019-05-08 05:31:50', '2019-05-08 05:31:50', 1),
(111, 2, 'Administrator login ', '2019-05-08 05:32:42', '2019-05-08 05:32:42', 1),
(112, 2, 'Administrator login ', '2019-05-08 05:32:44', '2019-05-08 05:32:44', 1),
(113, 2, 'Administrator login ', '2019-05-08 05:32:49', '2019-05-08 05:32:49', 1),
(114, 2, 'Administrator login ', '2019-05-08 05:32:51', '2019-05-08 05:32:51', 1),
(115, 2, 'Administrator login ', '2019-05-08 05:34:30', '2019-05-08 05:34:30', 1),
(116, 2, 'Administrator login ', '2019-05-08 05:34:36', '2019-05-08 05:34:36', 1),
(117, 2, 'Administrator login ', '2019-05-08 05:34:55', '2019-05-08 05:34:55', 1),
(118, 2, 'Administrator login ', '2019-05-08 05:34:57', '2019-05-08 05:34:57', 1),
(119, 2, 'Administrator login ', '2019-05-08 05:35:02', '2019-05-08 05:35:02', 1),
(120, 2, 'Administrator login ', '2019-05-08 05:35:04', '2019-05-08 05:35:04', 1),
(121, 2, 'Administrator login ', '2019-05-08 05:35:07', '2019-05-08 05:35:07', 1),
(122, 2, 'Administrator login ', '2019-05-08 05:35:17', '2019-05-08 05:35:17', 1),
(123, 2, 'Administrator login ', '2019-05-08 05:40:54', '2019-05-08 05:40:54', 1),
(124, 2, 'Administrator login ', '2019-05-08 05:40:56', '2019-05-08 05:40:56', 1),
(125, 2, 'Administrator login ', '2019-05-08 05:41:06', '2019-05-08 05:41:06', 1),
(126, 2, 'Administrator login ', '2019-05-08 05:41:08', '2019-05-08 05:41:08', 1),
(127, 2, 'Administrator login ', '2019-05-08 05:41:12', '2019-05-08 05:41:12', 1),
(128, 2, 'Administrator login ', '2019-05-08 05:41:15', '2019-05-08 05:41:15', 1),
(129, 2, 'Administrator login ', '2019-05-08 05:42:40', '2019-05-08 05:42:40', 1),
(130, 2, 'Administrator login ', '2019-05-08 05:42:43', '2019-05-08 05:42:43', 1),
(131, 2, 'Administrator login ', '2019-05-08 05:42:45', '2019-05-08 05:42:45', 1),
(132, 2, 'Administrator login ', '2019-05-08 05:43:25', '2019-05-08 05:43:25', 1),
(133, 2, 'Administrator login ', '2019-05-08 05:46:52', '2019-05-08 05:46:52', 1),
(134, 2, 'Administrator login ', '2019-05-08 05:46:54', '2019-05-08 05:46:54', 1),
(135, 2, 'Administrator login ', '2019-05-08 06:06:16', '2019-05-08 06:06:16', 1),
(136, 2, 'Administrator login ', '2019-05-08 06:06:19', '2019-05-08 06:06:19', 1),
(137, 2, 'Administrator is logout ', '2019-05-08 06:06:25', '2019-05-08 06:06:25', 1),
(138, 2, 'Administrator login ', '2019-05-08 06:08:00', '2019-05-08 06:08:00', 1),
(139, 2, 'Administrator login ', '2019-05-08 06:08:09', '2019-05-08 06:08:09', 1),
(140, 2, 'Administrator login ', '2019-05-08 06:08:20', '2019-05-08 06:08:20', 1),
(141, 2, 'Administrator login ', '2019-05-08 06:08:28', '2019-05-08 06:08:28', 1),
(142, 2, 'Administrator login ', '2019-05-08 06:09:33', '2019-05-08 06:09:33', 1),
(143, 2, 'Administrator login ', '2019-05-08 06:09:34', '2019-05-08 06:09:34', 1),
(144, 2, 'Administrator login ', '2019-05-08 06:09:39', '2019-05-08 06:09:39', 1),
(145, 2, 'Administrator login ', '2019-05-08 06:09:40', '2019-05-08 06:09:40', 1),
(146, 2, 'Administrator login ', '2019-05-08 06:10:29', '2019-05-08 06:10:29', 1),
(147, 2, 'Administrator login ', '2019-05-08 06:10:36', '2019-05-08 06:10:36', 1),
(148, 2, 'Administrator login ', '2019-05-08 06:10:41', '2019-05-08 06:10:41', 1),
(149, 2, 'Administrator login ', '2019-05-08 06:10:53', '2019-05-08 06:10:53', 1),
(150, 1, 'Mark Vitug is logout ', '2019-05-08 15:40:17', '2019-05-08 15:40:17', 1),
(151, 2, 'Administrator login ', '2019-05-08 15:41:05', '2019-05-08 15:41:05', 1),
(152, 2, 'Administrator login ', '2019-05-08 15:41:21', '2019-05-08 15:41:21', 1),
(153, 2, 'Administrator login ', '2019-05-08 15:42:49', '2019-05-08 15:42:49', 1),
(154, 2, 'Administrator login ', '2019-05-08 15:43:05', '2019-05-08 15:43:05', 1),
(155, 1, 'Mark Vitug is logout ', '2019-05-08 16:17:40', '2019-05-08 16:17:40', 1),
(156, 2, 'Administrator is logout ', '2019-05-08 16:18:44', '2019-05-08 16:18:44', 1),
(157, 2, 'Administrator login ', '2019-05-08 16:18:59', '2019-05-08 16:18:59', 1),
(158, 2, 'Administrator is logout ', '2019-05-08 16:20:38', '2019-05-08 16:20:38', 1),
(159, 2, 'Administrator login ', '2019-05-08 16:40:04', '2019-05-08 16:40:04', 1),
(160, 2, 'Administrator is logout ', '2019-05-08 16:40:20', '2019-05-08 16:40:20', 1),
(161, 2, 'Administrator login ', '2019-05-08 16:40:52', '2019-05-08 16:40:52', 1),
(162, 2, 'Administrator login ', '2019-05-08 16:41:10', '2019-05-08 16:41:10', 1),
(163, 2, 'Administrator login ', '2019-05-08 16:41:13', '2019-05-08 16:41:13', 1),
(164, 2, 'Administrator login ', '2019-05-08 16:41:17', '2019-05-08 16:41:17', 1),
(165, 2, 'Administrator login ', '2019-05-08 16:41:20', '2019-05-08 16:41:20', 1),
(166, 2, 'Administrator login ', '2019-05-08 16:41:26', '2019-05-08 16:41:26', 1),
(167, 2, 'Administrator login ', '2019-05-08 16:41:58', '2019-05-08 16:41:58', 1),
(168, 2, 'Administrator login ', '2019-05-08 16:42:14', '2019-05-08 16:42:14', 1),
(169, 2, 'Administrator login ', '2019-05-08 16:42:22', '2019-05-08 16:42:22', 1),
(170, 2, 'Administrator login ', '2019-05-08 16:42:26', '2019-05-08 16:42:26', 1),
(171, 2, 'Administrator login ', '2019-05-08 16:42:42', '2019-05-08 16:42:42', 1),
(172, 2, 'Administrator login ', '2019-05-08 16:44:46', '2019-05-08 16:44:46', 1),
(173, 2, 'Administrator update rental Scaffholding', '2019-05-08 16:44:46', '2019-05-08 16:44:46', 1),
(174, 2, 'Administrator login ', '2019-05-08 16:44:46', '2019-05-08 16:44:46', 1),
(175, 2, 'Administrator login ', '2019-05-08 16:45:02', '2019-05-08 16:45:02', 1),
(176, 2, 'Administrator login ', '2019-05-08 16:45:16', '2019-05-08 16:45:16', 1),
(177, 2, 'Administrator login ', '2019-05-08 16:46:07', '2019-05-08 16:46:07', 1),
(178, 2, 'Administrator login ', '2019-05-08 16:47:11', '2019-05-08 16:47:11', 1),
(179, 2, 'Administrator create rental Tirpitz', '2019-05-08 16:47:11', '2019-05-08 16:47:11', 1),
(180, 2, 'Administrator login ', '2019-05-08 16:47:13', '2019-05-08 16:47:13', 1),
(181, 2, 'Administrator login ', '2019-05-08 16:48:56', '2019-05-08 16:48:56', 1),
(182, 2, 'Administrator login ', '2019-05-08 16:49:08', '2019-05-08 16:49:08', 1),
(183, 2, 'Administrator login ', '2019-05-08 16:49:45', '2019-05-08 16:49:45', 1),
(184, 2, 'Administrator login ', '2019-05-08 16:49:52', '2019-05-08 16:49:52', 1),
(185, 2, 'Administrator login ', '2019-05-08 16:51:52', '2019-05-08 16:51:52', 1),
(186, 2, 'Administrator login ', '2019-05-08 16:52:00', '2019-05-08 16:52:00', 1),
(187, 2, 'Administrator login ', '2019-05-08 16:52:24', '2019-05-08 16:52:24', 1),
(188, 2, 'Administrator login ', '2019-05-08 16:52:26', '2019-05-08 16:52:26', 1),
(189, 2, 'Administrator login ', '2019-05-08 16:52:29', '2019-05-08 16:52:29', 1),
(190, 2, 'Administrator login ', '2019-05-08 16:52:36', '2019-05-08 16:52:36', 1),
(191, 2, 'Administrator login ', '2019-05-08 16:52:47', '2019-05-08 16:52:47', 1),
(192, 2, 'Administrator login ', '2019-05-08 16:52:50', '2019-05-08 16:52:50', 1),
(193, 2, 'Administrator login ', '2019-05-08 16:52:52', '2019-05-08 16:52:52', 1),
(194, 2, 'Administrator login ', '2019-05-08 16:52:57', '2019-05-08 16:52:57', 1),
(195, 1, 'Mark Vitug is logout ', '2019-05-08 16:53:15', '2019-05-08 16:53:15', 1),
(196, 1, 'Mark Vitug is logout ', '2019-05-08 16:54:44', '2019-05-08 16:54:44', 1),
(197, 2, 'Administrator is logout ', '2019-05-08 16:55:16', '2019-05-08 16:55:16', 1),
(198, 2, 'Administrator is logout ', '2019-05-08 16:56:05', '2019-05-08 16:56:05', 1),
(199, 1, 'Mark Vitug is logout ', '2019-05-08 16:59:31', '2019-05-08 16:59:31', 1),
(200, 2, 'Administrator login ', '2019-05-08 17:55:41', '2019-05-08 17:55:41', 1),
(201, 2, 'Administrator is logout ', '2019-05-08 17:55:50', '2019-05-08 17:55:50', 1),
(202, 2, 'Administrator login ', '2019-05-09 00:26:01', '2019-05-09 00:26:01', 1),
(203, 2, 'Administrator login ', '2019-05-09 00:27:18', '2019-05-09 00:27:18', 1),
(204, 2, 'Administrator login ', '2019-05-09 00:28:05', '2019-05-09 00:28:05', 1),
(205, 2, 'Administrator login ', '2019-05-09 00:28:17', '2019-05-09 00:28:17', 1),
(206, 2, 'Administrator login ', '2019-05-09 00:29:18', '2019-05-09 00:29:18', 1),
(207, 2, 'Administrator login ', '2019-05-09 00:29:28', '2019-05-09 00:29:28', 1),
(208, 2, 'Administrator login ', '2019-05-09 00:29:57', '2019-05-09 00:29:57', 1),
(209, 2, 'Administrator login ', '2019-05-09 00:30:29', '2019-05-09 00:30:29', 1),
(210, 2, 'Administrator login ', '2019-05-09 00:30:31', '2019-05-09 00:30:31', 1),
(211, 2, 'Administrator login ', '2019-05-09 00:30:39', '2019-05-09 00:30:39', 1),
(212, 2, 'Administrator login ', '2019-05-09 00:30:39', '2019-05-09 00:30:39', 1),
(213, 2, 'Administrator login ', '2019-05-09 00:30:41', '2019-05-09 00:30:41', 1),
(214, 2, 'Administrator login ', '2019-05-09 00:30:43', '2019-05-09 00:30:43', 1),
(215, 2, 'Administrator login ', '2019-05-09 00:30:45', '2019-05-09 00:30:45', 1),
(216, 2, 'Administrator login ', '2019-05-09 00:30:46', '2019-05-09 00:30:46', 1),
(217, 2, 'Administrator login ', '2019-05-09 00:30:53', '2019-05-09 00:30:53', 1),
(218, 2, 'Administrator login ', '2019-05-09 00:33:32', '2019-05-09 00:33:32', 1),
(219, 2, 'Administrator login ', '2019-05-09 00:33:36', '2019-05-09 00:33:36', 1),
(220, 2, 'Administrator login ', '2019-05-09 00:35:09', '2019-05-09 00:35:09', 1),
(221, 2, 'Administrator login ', '2019-05-09 00:35:13', '2019-05-09 00:35:13', 1),
(222, 2, 'Administrator login ', '2019-05-09 00:35:43', '2019-05-09 00:35:43', 1),
(223, 2, 'Administrator login ', '2019-05-09 00:36:04', '2019-05-09 00:36:04', 1),
(224, 2, 'Administrator login ', '2019-05-09 00:36:08', '2019-05-09 00:36:08', 1),
(225, 2, 'Administrator login ', '2019-05-09 00:36:13', '2019-05-09 00:36:13', 1),
(226, 2, 'Administrator login ', '2019-05-09 00:36:19', '2019-05-09 00:36:19', 1),
(227, 2, 'Administrator login ', '2019-05-09 00:36:24', '2019-05-09 00:36:24', 1),
(228, 2, 'Administrator login ', '2019-05-09 00:36:37', '2019-05-09 00:36:37', 1),
(229, 2, 'Administrator login ', '2019-05-09 00:36:40', '2019-05-09 00:36:40', 1),
(230, 2, 'Administrator login ', '2019-05-09 00:36:52', '2019-05-09 00:36:52', 1),
(231, 2, 'Administrator login ', '2019-05-09 00:37:02', '2019-05-09 00:37:02', 1),
(232, 2, 'Administrator is logout ', '2019-05-09 00:37:09', '2019-05-09 00:37:09', 1),
(233, 2, 'Administrator login ', '2019-05-09 00:42:35', '2019-05-09 00:42:35', 1),
(234, 2, 'Administrator login ', '2019-05-09 00:42:40', '2019-05-09 00:42:40', 1),
(235, 2, 'Administrator login ', '2019-05-09 00:43:15', '2019-05-09 00:43:15', 1),
(236, 2, 'Administrator login ', '2019-05-09 00:43:17', '2019-05-09 00:43:17', 1),
(237, 2, 'Administrator login ', '2019-05-09 00:43:23', '2019-05-09 00:43:23', 1),
(238, 2, 'Administrator login ', '2019-05-09 00:43:40', '2019-05-09 00:43:40', 1),
(239, 2, 'Administrator login ', '2019-05-09 00:43:43', '2019-05-09 00:43:43', 1),
(240, 2, 'Administrator login ', '2019-05-09 00:43:57', '2019-05-09 00:43:57', 1),
(241, 2, 'Administrator login ', '2019-05-09 00:43:58', '2019-05-09 00:43:58', 1),
(242, 2, 'Administrator login ', '2019-05-09 00:44:00', '2019-05-09 00:44:00', 1),
(243, 2, 'Administrator login ', '2019-05-09 00:44:05', '2019-05-09 00:44:05', 1),
(244, 2, 'Administrator login ', '2019-05-09 00:44:17', '2019-05-09 00:44:17', 1),
(245, 2, 'Administrator login ', '2019-05-09 00:44:18', '2019-05-09 00:44:18', 1),
(246, 2, 'Administrator login ', '2019-05-09 00:44:24', '2019-05-09 00:44:24', 1),
(247, 2, 'Administrator login ', '2019-05-09 00:44:45', '2019-05-09 00:44:45', 1),
(248, 2, 'Administrator login ', '2019-05-09 00:44:48', '2019-05-09 00:44:48', 1),
(249, 2, 'Administrator login ', '2019-05-09 00:44:52', '2019-05-09 00:44:52', 1),
(250, 2, 'Administrator login ', '2019-05-09 00:44:54', '2019-05-09 00:44:54', 1),
(251, 2, 'Administrator is logout ', '2019-05-09 00:50:13', '2019-05-09 00:50:13', 1),
(252, 2, 'Administrator login ', '2019-05-09 02:22:49', '2019-05-09 02:22:49', 1),
(253, 2, 'Administrator login ', '2019-05-09 02:53:23', '2019-05-09 02:53:23', 1),
(254, 2, 'Administrator login ', '2019-05-09 02:55:01', '2019-05-09 02:55:01', 1),
(255, 2, 'Administrator update rental Shoring Jack', '2019-05-09 02:55:01', '2019-05-09 02:55:01', 1),
(256, 2, 'Administrator login ', '2019-05-09 02:55:01', '2019-05-09 02:55:01', 1),
(257, 2, 'Administrator login ', '2019-05-09 02:55:30', '2019-05-09 02:55:30', 1),
(258, 2, 'Administrator login ', '2019-05-09 02:55:40', '2019-05-09 02:55:40', 1),
(259, 2, 'Administrator login ', '2019-05-09 02:55:44', '2019-05-09 02:55:44', 1),
(260, 2, 'Administrator login ', '2019-05-09 02:55:49', '2019-05-09 02:55:49', 1),
(261, 2, 'Administrator login ', '2019-05-09 02:55:55', '2019-05-09 02:55:55', 1),
(262, 2, 'Administrator is logout ', '2019-05-09 02:57:51', '2019-05-09 02:57:51', 1),
(263, 2, 'Administrator login ', '2019-05-09 03:05:42', '2019-05-09 03:05:42', 1),
(264, 2, 'Administrator login ', '2019-05-09 03:05:52', '2019-05-09 03:05:52', 1),
(265, 2, 'Administrator login ', '2019-05-09 03:06:44', '2019-05-09 03:06:44', 1),
(266, 2, 'Administrator login ', '2019-05-09 03:06:54', '2019-05-09 03:06:54', 1),
(267, 1, 'Mark Vitug is logout ', '2019-05-09 03:31:54', '2019-05-09 03:31:54', 1),
(268, 2, 'Administrator is logout ', '2019-05-09 03:32:13', '2019-05-09 03:32:13', 1),
(269, 2, 'Administrator login ', '2019-05-09 03:32:21', '2019-05-09 03:32:21', 1),
(270, 2, 'Administrator login ', '2019-05-09 03:32:25', '2019-05-09 03:32:25', 1),
(271, 2, 'Administrator login ', '2019-05-09 03:32:47', '2019-05-09 03:32:47', 1),
(272, 2, 'Administrator login ', '2019-05-09 03:32:52', '2019-05-09 03:32:52', 1),
(273, 7, 'Mark Jonathan Vitug is logout ', '2019-05-09 03:45:48', '2019-05-09 03:45:48', 1),
(274, 8, 'ECVitug Constructions is logout ', '2019-05-09 03:46:08', '2019-05-09 03:46:08', 1),
(275, 2, 'Administrator login ', '2019-05-09 03:50:47', '2019-05-09 03:50:47', 1),
(276, 2, 'Administrator login ', '2019-05-09 03:54:57', '2019-05-09 03:54:57', 1),
(277, 2, 'Administrator login ', '2019-05-09 03:55:58', '2019-05-09 03:55:58', 1),
(278, 2, 'Administrator update rental Bobcat', '2019-05-09 03:55:58', '2019-05-09 03:55:58', 1),
(279, 2, 'Administrator login ', '2019-05-09 03:55:59', '2019-05-09 03:55:59', 1),
(280, 2, 'Administrator login ', '2019-05-09 03:56:17', '2019-05-09 03:56:17', 1),
(281, 2, 'Administrator login ', '2019-05-09 03:56:21', '2019-05-09 03:56:21', 1),
(282, 2, 'Administrator login ', '2019-05-09 03:56:45', '2019-05-09 03:56:45', 1),
(283, 2, 'Administrator login ', '2019-05-09 03:56:48', '2019-05-09 03:56:48', 1),
(284, 2, 'Administrator login ', '2019-05-09 03:58:02', '2019-05-09 03:58:02', 1),
(285, 2, 'Administrator update rental Cutter', '2019-05-09 03:58:02', '2019-05-09 03:58:02', 1),
(286, 2, 'Administrator login ', '2019-05-09 03:58:03', '2019-05-09 03:58:03', 1),
(287, 2, 'Administrator login ', '2019-05-09 03:59:08', '2019-05-09 03:59:08', 1),
(288, 2, 'Administrator login ', '2019-05-09 04:00:02', '2019-05-09 04:00:02', 1),
(289, 2, 'Administrator update rental Fork', '2019-05-09 04:00:03', '2019-05-09 04:00:03', 1),
(290, 2, 'Administrator login ', '2019-05-09 04:00:03', '2019-05-09 04:00:03', 1),
(291, 2, 'Administrator login ', '2019-05-09 04:01:05', '2019-05-09 04:01:05', 1),
(292, 2, 'Administrator login ', '2019-05-09 04:02:15', '2019-05-09 04:02:15', 1),
(293, 2, 'Administrator update rental Hammer', '2019-05-09 04:02:15', '2019-05-09 04:02:15', 1),
(294, 2, 'Administrator login ', '2019-05-09 04:02:16', '2019-05-09 04:02:16', 1),
(295, 2, 'Administrator login ', '2019-05-09 04:03:15', '2019-05-09 04:03:15', 1),
(296, 2, 'Administrator login ', '2019-05-09 04:04:15', '2019-05-09 04:04:15', 1),
(297, 2, 'Administrator update rental Mixer', '2019-05-09 04:04:15', '2019-05-09 04:04:15', 1),
(298, 2, 'Administrator login ', '2019-05-09 04:04:16', '2019-05-09 04:04:16', 1),
(299, 2, 'Administrator login ', '2019-05-09 04:04:20', '2019-05-09 04:04:20', 1),
(300, 2, 'Administrator login ', '2019-05-09 04:06:04', '2019-05-09 04:06:04', 1),
(301, 2, 'Administrator update rental Rollers', '2019-05-09 04:06:04', '2019-05-09 04:06:04', 1),
(302, 2, 'Administrator login ', '2019-05-09 04:06:05', '2019-05-09 04:06:05', 1),
(303, 2, 'Administrator login ', '2019-05-09 04:06:25', '2019-05-09 04:06:25', 1),
(304, 2, 'Administrator login ', '2019-05-09 04:07:10', '2019-05-09 04:07:10', 1),
(305, 2, 'Administrator update rental Wheel Barrow', '2019-05-09 04:07:11', '2019-05-09 04:07:11', 1),
(306, 2, 'Administrator login ', '2019-05-09 04:07:12', '2019-05-09 04:07:12', 1),
(307, 2, 'Administrator login ', '2019-05-09 04:07:42', '2019-05-09 04:07:42', 1),
(308, 2, 'Administrator login ', '2019-05-09 04:07:59', '2019-05-09 04:07:59', 1),
(309, 2, 'Administrator update rental Compactor', '2019-05-09 04:07:59', '2019-05-09 04:07:59', 1),
(310, 2, 'Administrator login ', '2019-05-09 04:08:00', '2019-05-09 04:08:00', 1),
(311, 2, 'Administrator login ', '2019-05-09 04:13:24', '2019-05-09 04:13:24', 1),
(312, 2, 'Administrator login ', '2019-05-09 04:13:47', '2019-05-09 04:13:47', 1),
(313, 9, 'Edgar Q. Palima is logout ', '2019-05-09 04:20:06', '2019-05-09 04:20:06', 1),
(314, 2, 'Administrator login ', '2019-05-09 04:20:40', '2019-05-09 04:20:40', 1),
(315, 2, 'Administrator is logout ', '2019-05-09 04:25:02', '2019-05-09 04:25:02', 1),
(316, 2, 'Administrator login ', '2019-05-09 04:25:11', '2019-05-09 04:25:11', 1),
(317, 2, 'Administrator is logout ', '2019-05-09 04:25:47', '2019-05-09 04:25:47', 1),
(318, 2, 'Administrator login ', '2019-05-09 04:26:16', '2019-05-09 04:26:16', 1),
(319, 2, 'Administrator login ', '2019-05-09 04:26:47', '2019-05-09 04:26:47', 1),
(320, 2, 'Administrator login ', '2019-05-09 04:27:00', '2019-05-09 04:27:00', 1),
(321, 2, 'Administrator login ', '2019-05-09 04:27:30', '2019-05-09 04:27:30', 1),
(322, 2, 'Administrator login ', '2019-05-09 04:27:36', '2019-05-09 04:27:36', 1),
(323, 2, 'Administrator login ', '2019-05-09 04:27:37', '2019-05-09 04:27:37', 1),
(324, 2, 'Administrator login ', '2019-05-09 04:27:40', '2019-05-09 04:27:40', 1),
(325, 2, 'Administrator login ', '2019-05-09 04:27:42', '2019-05-09 04:27:42', 1),
(326, 2, 'Administrator login ', '2019-05-09 04:27:45', '2019-05-09 04:27:45', 1),
(327, 2, 'Administrator login ', '2019-05-09 04:27:46', '2019-05-09 04:27:46', 1),
(328, 2, 'Administrator login ', '2019-05-09 04:28:07', '2019-05-09 04:28:07', 1),
(329, 2, 'Administrator update customer info.', '2019-05-09 04:28:08', '2019-05-09 04:28:08', 1),
(330, 2, 'Administrator login ', '2019-05-09 04:28:09', '2019-05-09 04:28:09', 1),
(331, 2, 'Administrator login ', '2019-05-09 04:28:21', '2019-05-09 04:28:21', 1),
(332, 2, 'Administrator login ', '2019-05-09 04:28:36', '2019-05-09 04:28:36', 1),
(333, 2, 'Administrator login ', '2019-05-09 04:28:41', '2019-05-09 04:28:41', 1),
(334, 2, 'Administrator login ', '2019-05-09 04:28:43', '2019-05-09 04:28:43', 1),
(335, 2, 'Administrator login ', '2019-05-09 04:28:47', '2019-05-09 04:28:47', 1),
(336, 2, 'Administrator login ', '2019-05-09 04:29:02', '2019-05-09 04:29:02', 1),
(337, 2, 'Administrator update rental Bobcat2.0', '2019-05-09 04:29:02', '2019-05-09 04:29:02', 1),
(338, 2, 'Administrator login ', '2019-05-09 04:29:03', '2019-05-09 04:29:03', 1),
(339, 2, 'Administrator login ', '2019-05-09 04:29:06', '2019-05-09 04:29:06', 1),
(340, 2, 'Administrator login ', '2019-05-09 04:29:13', '2019-05-09 04:29:13', 1),
(341, 2, 'Administrator login ', '2019-05-09 04:29:13', '2019-05-09 04:29:13', 1),
(342, 2, 'Administrator login ', '2019-05-09 04:29:13', '2019-05-09 04:29:13', 1),
(343, 2, 'Administrator login ', '2019-05-09 04:29:25', '2019-05-09 04:29:25', 1),
(344, 2, 'Administrator update rental Shoring Jack', '2019-05-09 04:29:25', '2019-05-09 04:29:25', 1),
(345, 2, 'Administrator login ', '2019-05-09 04:29:27', '2019-05-09 04:29:27', 1),
(346, 2, 'Administrator login ', '2019-05-09 04:29:51', '2019-05-09 04:29:51', 1),
(347, 2, 'Administrator login ', '2019-05-09 04:31:17', '2019-05-09 04:31:17', 1),
(348, 2, 'Administrator login ', '2019-05-09 04:31:31', '2019-05-09 04:31:31', 1),
(349, 2, 'Administrator login ', '2019-05-12 07:03:40', '2019-05-12 07:03:40', 1),
(350, 2, 'Administrator login ', '2019-05-12 07:03:52', '2019-05-12 07:03:52', 1),
(351, 2, 'Administrator login ', '2019-05-12 07:04:14', '2019-05-12 07:04:14', 1),
(352, 2, 'Administrator login ', '2019-05-12 07:04:22', '2019-05-12 07:04:22', 1),
(353, 2, 'Administrator login ', '2019-05-12 07:04:28', '2019-05-12 07:04:28', 1),
(354, 2, 'Administrator login ', '2019-05-12 07:04:37', '2019-05-12 07:04:37', 1),
(355, 2, 'Administrator login ', '2019-05-12 07:04:42', '2019-05-12 07:04:42', 1),
(356, 2, 'Administrator login ', '2019-05-12 07:05:00', '2019-05-12 07:05:00', 1),
(357, 2, 'Administrator login ', '2019-05-12 07:05:09', '2019-05-12 07:05:09', 1),
(358, 2, 'Administrator login ', '2019-05-12 07:05:30', '2019-05-12 07:05:30', 1),
(359, 2, 'Administrator login ', '2019-05-12 07:05:39', '2019-05-12 07:05:39', 1),
(360, 2, 'Administrator login ', '2019-05-13 06:16:19', '2019-05-13 06:16:19', 1),
(361, 2, 'Administrator login ', '2019-05-13 06:16:25', '2019-05-13 06:16:25', 1),
(362, 2, 'Administrator login ', '2019-05-13 06:16:31', '2019-05-13 06:16:31', 1),
(363, 2, 'Administrator login ', '2019-05-13 06:16:35', '2019-05-13 06:16:35', 1),
(364, 2, 'Administrator login ', '2019-05-13 06:16:36', '2019-05-13 06:16:36', 1),
(365, 2, 'Administrator login ', '2019-05-13 06:16:41', '2019-05-13 06:16:41', 1),
(366, 2, 'Administrator login ', '2019-05-13 06:16:45', '2019-05-13 06:16:45', 1),
(367, 2, 'Administrator login ', '2019-05-13 06:19:53', '2019-05-13 06:19:53', 1),
(368, 2, 'Administrator login ', '2019-05-13 06:19:55', '2019-05-13 06:19:55', 1),
(369, 2, 'Administrator login ', '2019-05-13 06:54:44', '2019-05-13 06:54:44', 1),
(370, 2, 'Administrator login ', '2019-05-13 06:54:46', '2019-05-13 06:54:46', 1),
(371, 10, 'Kelvin Dale Vitug is logout ', '2019-05-14 02:12:51', '2019-05-14 02:12:51', 1),
(372, 2, 'Administrator login ', '2019-05-14 12:39:51', '2019-05-14 12:39:51', 1),
(373, 2, 'Administrator login ', '2019-05-15 07:09:07', '2019-05-15 07:09:07', 1),
(374, 2, 'Administrator login ', '2019-05-15 07:09:13', '2019-05-15 07:09:13', 1),
(375, 2, 'Administrator login ', '2019-05-15 07:09:18', '2019-05-15 07:09:18', 1),
(376, 2, 'Administrator login ', '2019-05-15 07:09:20', '2019-05-15 07:09:20', 1),
(377, 2, 'Administrator login ', '2019-05-15 07:09:35', '2019-05-15 07:09:35', 1),
(378, 2, 'Administrator deleted rental Compactor', '2019-05-15 07:09:35', '2019-05-15 07:09:35', 1),
(379, 2, 'Administrator login ', '2019-05-15 07:09:37', '2019-05-15 07:09:37', 1),
(380, 2, 'Administrator login ', '2019-05-15 07:09:50', '2019-05-15 07:09:50', 1),
(381, 2, 'Administrator login ', '2019-05-15 07:09:57', '2019-05-15 07:09:57', 1),
(382, 2, 'Administrator login ', '2019-05-16 06:12:04', '2019-05-16 06:12:04', 1),
(383, 2, 'Administrator login ', '2019-05-16 06:12:10', '2019-05-16 06:12:10', 1),
(384, 2, 'Administrator login ', '2019-05-16 06:12:21', '2019-05-16 06:12:21', 1),
(385, 2, 'Administrator deleted customer ', '2019-05-16 06:12:21', '2019-05-16 06:12:21', 1),
(386, 2, 'Administrator login ', '2019-05-16 06:12:22', '2019-05-16 06:12:22', 1),
(387, 2, 'Administrator login ', '2019-05-16 06:12:33', '2019-05-16 06:12:33', 1),
(388, 2, 'Administrator login ', '2019-05-16 06:51:36', '2019-05-16 06:51:36', 1),
(389, 2, 'Administrator login ', '2019-05-16 06:51:48', '2019-05-16 06:51:48', 1),
(390, 2, 'Administrator login ', '2019-05-16 06:52:08', '2019-05-16 06:52:08', 1),
(391, 2, 'Administrator login ', '2019-05-16 06:52:26', '2019-05-16 06:52:26', 1),
(392, 2, 'Administrator deleted customer ', '2019-05-16 06:52:26', '2019-05-16 06:52:26', 1),
(393, 2, 'Administrator login ', '2019-05-16 06:52:27', '2019-05-16 06:52:27', 1),
(394, 2, 'Administrator login ', '2019-05-16 06:52:32', '2019-05-16 06:52:32', 1),
(395, 2, 'Administrator login ', '2019-05-16 06:52:38', '2019-05-16 06:52:38', 1),
(396, 2, 'Administrator login ', '2019-05-16 06:53:32', '2019-05-16 06:53:32', 1),
(397, 2, 'Administrator login ', '2019-05-16 06:53:32', '2019-05-16 06:53:32', 1),
(398, 2, 'Administrator login ', '2019-05-16 06:53:52', '2019-05-16 06:53:52', 1),
(399, 2, 'Administrator deleted customer ', '2019-05-16 06:53:52', '2019-05-16 06:53:52', 1),
(400, 2, 'Administrator login ', '2019-05-16 06:53:52', '2019-05-16 06:53:52', 1),
(401, 2, 'Administrator login ', '2019-05-16 06:54:10', '2019-05-16 06:54:10', 1),
(402, 2, 'Administrator login ', '2019-05-16 06:54:42', '2019-05-16 06:54:42', 1),
(403, 2, 'Administrator login ', '2019-05-16 06:55:07', '2019-05-16 06:55:07', 1),
(404, 2, 'Administrator login ', '2019-05-16 06:55:08', '2019-05-16 06:55:08', 1),
(405, 2, 'Administrator login ', '2019-05-16 06:55:38', '2019-05-16 06:55:38', 1),
(406, 2, 'Administrator login ', '2019-05-16 06:56:16', '2019-05-16 06:56:16', 1),
(407, 2, 'Administrator login ', '2019-05-16 06:56:32', '2019-05-16 06:56:32', 1),
(408, 2, 'Administrator login ', '2019-05-16 06:56:52', '2019-05-16 06:56:52', 1),
(409, 2, 'Administrator login ', '2019-05-16 06:57:27', '2019-05-16 06:57:27', 1),
(410, 2, 'Administrator login ', '2019-05-16 06:57:45', '2019-05-16 06:57:45', 1),
(411, 2, 'Administrator login ', '2019-05-16 09:06:08', '2019-05-16 09:06:08', 1),
(412, 2, 'Administrator login ', '2019-05-16 09:26:31', '2019-05-16 09:26:31', 1),
(413, 2, 'Administrator login ', '2019-05-16 09:27:17', '2019-05-16 09:27:17', 1),
(414, 2, 'Administrator login ', '2019-05-16 09:28:27', '2019-05-16 09:28:27', 1),
(415, 2, 'Administrator login ', '2019-05-16 09:28:50', '2019-05-16 09:28:50', 1),
(416, 2, 'Administrator login ', '2019-05-16 09:29:01', '2019-05-16 09:29:01', 1),
(417, 2, 'Administrator login ', '2019-05-16 09:29:30', '2019-05-16 09:29:30', 1),
(418, 2, 'Administrator login ', '2019-05-16 09:29:35', '2019-05-16 09:29:35', 1),
(419, 2, 'Administrator login ', '2019-05-16 09:30:43', '2019-05-16 09:30:43', 1),
(420, 2, 'Administrator login ', '2019-05-16 09:30:48', '2019-05-16 09:30:48', 1),
(421, 2, 'Administrator login ', '2019-05-16 09:32:02', '2019-05-16 09:32:02', 1),
(422, 2, 'Administrator login ', '2019-05-16 09:32:08', '2019-05-16 09:32:08', 1),
(423, 2, 'Administrator login ', '2019-05-16 09:32:32', '2019-05-16 09:32:32', 1),
(424, 2, 'Administrator login ', '2019-05-16 09:33:44', '2019-05-16 09:33:44', 1),
(425, 2, 'Administrator login ', '2019-05-16 09:33:52', '2019-05-16 09:33:52', 1),
(426, 2, 'Administrator login ', '2019-05-16 09:34:30', '2019-05-16 09:34:30', 1),
(427, 2, 'Administrator login ', '2019-05-16 09:35:16', '2019-05-16 09:35:16', 1),
(428, 2, 'Administrator login ', '2019-05-16 09:37:05', '2019-05-16 09:37:05', 1),
(429, 2, 'Administrator login ', '2019-05-16 09:37:05', '2019-05-16 09:37:05', 1),
(430, 2, 'Administrator deleted customer ', '2019-05-16 09:37:05', '2019-05-16 09:37:05', 1),
(431, 2, 'Administrator deleted customer ', '2019-05-16 09:37:05', '2019-05-16 09:37:05', 1),
(432, 2, 'Administrator login ', '2019-05-16 09:37:05', '2019-05-16 09:37:05', 1),
(433, 2, 'Administrator login ', '2019-05-16 09:37:32', '2019-05-16 09:37:32', 1),
(434, 2, 'Administrator login ', '2019-05-16 09:38:44', '2019-05-16 09:38:44', 1),
(435, 2, 'Administrator login ', '2019-05-16 09:38:53', '2019-05-16 09:38:53', 1),
(436, 2, 'Administrator login ', '2019-05-16 09:39:01', '2019-05-16 09:39:01', 1),
(437, 2, 'Administrator login ', '2019-05-16 09:39:11', '2019-05-16 09:39:11', 1),
(438, 2, 'Administrator login ', '2019-05-16 09:39:19', '2019-05-16 09:39:19', 1),
(439, 2, 'Administrator login ', '2019-05-16 09:39:38', '2019-05-16 09:39:38', 1),
(440, 2, 'Administrator login ', '2019-05-16 09:40:00', '2019-05-16 09:40:00', 1),
(441, 2, 'Administrator deleted customer ', '2019-05-16 09:40:00', '2019-05-16 09:40:00', 1),
(442, 2, 'Administrator login ', '2019-05-16 09:40:01', '2019-05-16 09:40:01', 1),
(443, 2, 'Administrator login ', '2019-05-16 09:40:12', '2019-05-16 09:40:12', 1),
(444, 2, 'Administrator login ', '2019-05-16 09:42:17', '2019-05-16 09:42:17', 1),
(445, 2, 'Administrator login ', '2019-05-16 09:44:24', '2019-05-16 09:44:24', 1),
(446, 2, 'Administrator login ', '2019-05-16 09:46:22', '2019-05-16 09:46:22', 1),
(447, 2, 'Administrator login ', '2019-05-16 09:46:38', '2019-05-16 09:46:38', 1),
(448, 2, 'Administrator is logout ', '2019-05-16 09:52:59', '2019-05-16 09:52:59', 1),
(449, 5, 'Kelvin Vitug is logout ', '2019-05-18 03:02:09', '2019-05-18 03:02:09', 1),
(450, 2, 'Administrator login ', '2019-05-18 03:02:30', '2019-05-18 03:02:30', 1),
(451, 2, 'Administrator login ', '2019-05-18 03:02:34', '2019-05-18 03:02:34', 1),
(452, 2, 'Administrator login ', '2019-05-18 03:02:42', '2019-05-18 03:02:42', 1),
(453, 2, 'Administrator login ', '2019-05-18 03:04:30', '2019-05-18 03:04:30', 1),
(454, 2, 'Administrator login ', '2019-05-18 03:06:39', '2019-05-18 03:06:39', 1),
(455, 2, 'Administrator login ', '2019-05-18 03:07:52', '2019-05-18 03:07:52', 1),
(456, 2, 'Administrator login ', '2019-05-18 03:10:40', '2019-05-18 03:10:40', 1),
(457, 1, 'Mark Vitug login ', '2019-05-18 03:26:42', '2019-05-18 03:26:42', 1),
(458, 1, 'Mark Vitug is logout ', '2019-05-18 03:26:56', '2019-05-18 03:26:56', 1),
(459, 1, 'Mark Vitug is logout ', '2019-05-18 03:27:48', '2019-05-18 03:27:48', 1),
(460, 1, 'Mark Vitug is logout ', '2019-05-18 03:28:09', '2019-05-18 03:28:09', 1),
(461, 2, 'Administrator login ', '2019-05-18 03:39:35', '2019-05-18 03:39:35', 1),
(462, 2, 'Administrator login ', '2019-05-18 03:39:46', '2019-05-18 03:39:46', 1),
(463, 2, 'Administrator login ', '2019-05-18 03:39:48', '2019-05-18 03:39:48', 1),
(464, 2, 'Administrator login ', '2019-05-18 03:39:50', '2019-05-18 03:39:50', 1),
(465, 2, 'Administrator login ', '2019-05-18 03:39:51', '2019-05-18 03:39:51', 1),
(466, 2, 'Administrator login ', '2019-05-18 03:40:06', '2019-05-18 03:40:06', 1),
(467, 2, 'Administrator login ', '2019-05-18 03:40:07', '2019-05-18 03:40:07', 1),
(468, 2, 'Administrator login ', '2019-05-18 03:40:22', '2019-05-18 03:40:22', 1),
(469, 2, 'Administrator login ', '2019-05-18 03:40:23', '2019-05-18 03:40:23', 1),
(470, 2, 'Administrator login ', '2019-05-18 03:41:36', '2019-05-18 03:41:36', 1),
(471, 2, 'Administrator login ', '2019-05-18 03:41:38', '2019-05-18 03:41:38', 1),
(472, 2, 'Administrator login ', '2019-05-18 03:42:03', '2019-05-18 03:42:03', 1),
(473, 2, 'Administrator login ', '2019-05-18 03:42:13', '2019-05-18 03:42:13', 1),
(474, 2, 'Administrator login ', '2019-05-18 03:42:17', '2019-05-18 03:42:17', 1),
(475, 2, 'Administrator login ', '2019-05-18 03:43:56', '2019-05-18 03:43:56', 1),
(476, 2, 'Administrator login ', '2019-05-18 03:44:34', '2019-05-18 03:44:34', 1),
(477, 2, 'Administrator login ', '2019-05-18 03:44:34', '2019-05-18 03:44:34', 1),
(478, 2, 'Administrator login ', '2019-05-18 03:44:34', '2019-05-18 03:44:34', 1),
(479, 2, 'Administrator login ', '2019-05-18 03:44:34', '2019-05-18 03:44:34', 1),
(480, 2, 'Administrator login ', '2019-05-18 03:44:38', '2019-05-18 03:44:38', 1),
(481, 2, 'Administrator login ', '2019-05-18 03:44:40', '2019-05-18 03:44:40', 1),
(482, 2, 'Administrator login ', '2019-05-18 03:44:40', '2019-05-18 03:44:40', 1),
(483, 2, 'Administrator is logout ', '2019-05-18 03:58:56', '2019-05-18 03:58:56', 1),
(484, 2, 'Administrator login ', '2019-05-18 03:59:11', '2019-05-18 03:59:11', 1),
(485, 2, 'Administrator login ', '2019-05-18 03:59:12', '2019-05-18 03:59:12', 1),
(486, 2, 'Administrator login ', '2019-05-18 03:59:15', '2019-05-18 03:59:15', 1),
(487, 2, 'Administrator login ', '2019-05-18 03:59:17', '2019-05-18 03:59:17', 1),
(488, 2, 'Administrator login ', '2019-05-18 03:59:24', '2019-05-18 03:59:24', 1),
(489, 2, 'Administrator login ', '2019-05-18 03:59:28', '2019-05-18 03:59:28', 1),
(490, 2, 'Administrator login ', '2019-05-18 03:59:34', '2019-05-18 03:59:34', 1),
(491, 2, 'Administrator login ', '2019-05-18 03:59:35', '2019-05-18 03:59:35', 1),
(492, 2, 'Administrator login ', '2019-05-18 04:01:42', '2019-05-18 04:01:42', 1),
(493, 2, 'Administrator login ', '2019-05-18 04:01:46', '2019-05-18 04:01:46', 1),
(494, 2, 'Administrator login ', '2019-05-18 04:04:16', '2019-05-18 04:04:16', 1),
(495, 2, 'Administrator login ', '2019-05-18 04:04:20', '2019-05-18 04:04:20', 1),
(496, 2, 'Administrator login ', '2019-05-18 12:04:58', '2019-05-18 12:04:58', 1),
(497, 2, 'Administrator login ', '2019-05-18 12:05:01', '2019-05-18 12:05:01', 1),
(498, 2, 'Administrator login ', '2019-05-18 12:07:12', '2019-05-18 12:07:12', 1),
(499, 2, 'Administrator login ', '2019-05-18 12:07:17', '2019-05-18 12:07:17', 1),
(500, 2, 'Administrator login ', '2019-05-18 12:07:37', '2019-05-18 12:07:37', 1),
(501, 2, 'Administrator login ', '2019-05-18 12:07:38', '2019-05-18 12:07:38', 1),
(502, 2, 'Administrator login ', '2019-05-18 12:07:41', '2019-05-18 12:07:41', 1),
(503, 2, 'Administrator login ', '2019-05-18 12:07:41', '2019-05-18 12:07:41', 1),
(504, 2, 'Administrator login ', '2019-05-19 10:54:04', '2019-05-19 10:54:04', 1),
(505, 2, 'Administrator login ', '2019-05-19 10:54:18', '2019-05-19 10:54:18', 1),
(506, 2, 'Administrator login ', '2019-05-19 10:54:19', '2019-05-19 10:54:19', 1),
(507, 2, 'Administrator login ', '2019-05-19 21:17:08', '2019-05-19 21:17:08', 1),
(508, 2, 'Administrator login ', '2019-05-19 21:17:10', '2019-05-19 21:17:10', 1),
(509, 2, 'Administrator login ', '2019-05-19 21:17:27', '2019-05-19 21:17:27', 1),
(510, 2, 'Administrator login ', '2019-05-19 21:17:35', '2019-05-19 21:17:35', 1),
(511, 2, 'Administrator login ', '2019-05-19 21:17:51', '2019-05-19 21:17:51', 1),
(512, 2, 'Administrator login ', '2019-05-19 21:17:53', '2019-05-19 21:17:53', 1),
(513, 2, 'Administrator login ', '2019-05-19 21:17:54', '2019-05-19 21:17:54', 1),
(514, 2, 'Administrator login ', '2019-05-19 21:17:55', '2019-05-19 21:17:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_12_19_192708_create_shoppingcart_table', 1),
(5, '2019_05_01_022042_create_galleries_table', 2),
(6, '2019_05_01_022118_create_testimonials_table', 2),
(16, '2019_05_01_022899_create_orders_table', 3),
(17, '2019_05_01_025231_create_products_table', 3),
(18, '2019_05_05_064700_create__order_product_table', 4),
(19, '2019_05_01_023731_create_history_table', 5),
(20, '2019_05_01_055711_add_mobile_on_users_table', 5),
(21, '2019_05_01_020001_create_estimates_table', 6),
(22, '2019_05_01_061717_add_status', 7),
(23, '2019_05_01_064922_add_users_photo', 7),
(24, '2019_05_01_071621_add_user_social_provider', 7),
(25, '2019_05_04_043621_remove_estimates_table', 7),
(26, '2019_05_07_110705_remove_unique_products', 8),
(27, '2019_05_07_160525_add_quantity_on_orders_product_table', 9),
(30, '2019_05_07_162231_remove_total_price_on_orders_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalPrice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `quantity`, `totalPrice`, `created_at`, `updated_at`, `status`) VALUES
(9, 4, 13, '10,199.87', '2019-05-07 09:07:44', '2019-05-08 05:20:58', 1),
(10, 1, 15, '16,499.85', '2019-05-08 06:07:27', '2019-05-08 06:09:39', 1),
(11, 2, 1, '449.99', '2019-05-08 16:30:39', '2019-05-08 16:30:39', 0),
(12, 1, 3, '1,349.97', '2019-05-09 03:04:48', '2019-05-09 03:04:48', 0),
(13, 1, 10, '4,499.90', '2019-05-09 03:06:34', '2019-05-09 03:06:34', 0),
(14, 11, 55, '21,999.45', '2019-05-16 09:08:43', '2019-05-16 09:08:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 9, 6, '10', '2019-05-07 09:07:44', '2019-05-07 09:07:44'),
(2, 9, 1, '3', '2019-05-07 09:07:44', '2019-05-07 09:07:44'),
(3, 10, 8, '10', '2019-05-08 06:07:28', '2019-05-08 06:07:28'),
(4, 10, 3, '5', '2019-05-08 06:07:28', '2019-05-08 06:07:28'),
(5, 11, 2, '1', '2019-05-08 16:30:39', '2019-05-08 16:30:39'),
(6, 12, 2, '3', '2019-05-09 03:04:48', '2019-05-09 03:04:48'),
(7, 13, 2, '10', '2019-05-09 03:06:34', '2019-05-09 03:06:34'),
(8, 14, 1, '55', '2019-05-16 09:08:43', '2019-05-16 09:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mjvitug24@gmail.com', '$2y$10$zs0JOG5hJ56xFVl7nk8OXebTwTdKs6A2tdgIo.ReXs013QJyIfl1i', '2019-05-16 08:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `quantity`, `price`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Scaffholding', 'scaffholding', 'description goes here', 100, '399.99', '1557333886.jpg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-08 16:44:46'),
(2, 'Shoring Jack', 'shoring-jack', 'description goes here', 100, '449.99', '1557370501.jpg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-09 04:29:25'),
(3, 'Cutter', 'cutter', 'Cutter mo', 20, '2299.99', '1557374282.jpg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-09 03:58:02'),
(4, 'Fork', 'fork', 'description', 5, '799.99', '1557374403.jpg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-09 04:00:03'),
(5, 'Hammer', 'hammer', 'description', 20, '699.99', '1557374535.jpg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-09 04:02:15'),
(6, 'Mixer', 'mixer', 'description', 5, '899.99', '1557374655.jpg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-09 04:04:15'),
(7, 'Rollers', 'rollers', 'description', 4, '100.99', '1557374764.jpg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-09 04:06:04'),
(8, 'Wheel Barrow', 'wheel-barrow', 'description', 20, '499.99', '1557374831.jpeg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-09 04:07:11'),
(9, 'Compactor', 'compactor', 'hello world', 20, '600.00', '1557374879.jpg', 'rental', 1, '2019-05-06 17:32:30', '2019-05-09 04:07:59'),
(10, 'Bobcat2.0', 'bobcat20', 'White Hair Waifu', 2, '10000.00', '1557374158.jpg', 'rental', 1, '2019-05-08 16:47:11', '2019-05-09 04:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider` enum('facebook','google') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobilePhone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `provider`, `provider_user_id`, `role`, `name`, `email`, `mobilePhone`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, NULL, NULL, 'customer', 'Mark Vitug', 'mjvitug24@gmail.com', '09979814401', NULL, '$2y$10$MvHz35AkCgp.l7yPVeT4xOYNTOtVvT0LTsbahhIVyDTGZI4HPzgg2', '1557048258.jpg', 'I3Gd653T2vkk23exj5aUElo8oMLwL8I5m08cfoC8T1hTE0w3d02dBe5zoHBW', '2019-05-05 01:24:18', '2019-05-09 04:28:08', 1),
(2, NULL, NULL, 'admin', 'Administrator', 'admin@email.com', '09979814403', NULL, '$2y$10$VauaalfXeN4TIccfzkgEjuENfRUPrXTHJ6gYKhGk6DzkdiiRwN5Vu', '1557055713.jpg', 'aabl5Zr8FfTLYSMdRps1dxZPJRV1VP5WyEPAVq2sSUjYlYr53naCMTv95g4Y', '2019-05-05 03:28:34', '2019-05-05 03:28:34', 1),
(3, NULL, NULL, 'admin', 'Mj Vitug', 'admin123@email.com', '9979814400', NULL, '$2y$10$5wcoU1umfnzltEUDF2b0t.JQC73X6c2iuYxxhoV3lNCJTuUPDPx5q', '1557069131.jpg', NULL, '2019-05-05 07:12:11', '2019-05-06 16:56:33', 1),
(4, NULL, NULL, 'customer', 'Jose Abad Santos', 'customer@gmail.com', '09979814403', NULL, '$2y$10$zUr24GSYXmeTUWWtqxHqyeHjwO6fTmv78yR96m9SpPafwUPSLvphS', '1557240766.jpg', NULL, '2019-05-07 06:52:46', '2019-05-07 06:52:46', 1),
(5, 'facebook', '2244396925583532', 'customer', 'Kelvin Vitug', 'kelvinvitug4@gmail.com', NULL, NULL, NULL, 'https://graph.facebook.com/v3.0/2244396925583532/picture?type=normal', 'bU0guBIGVHfORLYLYbYWY3WutBlH3pIGAPdHORRHEyqnyh2uzYJYReqyQleg', '2019-05-08 16:18:15', '2019-05-16 06:52:26', 0),
(6, NULL, NULL, 'customer', 'edgar palima', 'edgarpalima@gmail.com', '09392619167', NULL, '$2y$10$s7o3SUKqlA0xZYkY2Uhsr.uXCXu37F8Qid1Hg06NfXvmVauzC.zwq', '1557362332.png', NULL, '2019-05-09 00:38:53', '2019-05-16 09:40:00', 1),
(7, 'facebook', '2358133211142784', 'customer', 'Mark Jonathan Vitug', 'markjonvitug@gmail.com', NULL, NULL, NULL, 'https://graph.facebook.com/v3.0/2358133211142784/picture?type=normal', '5XX5TpoDaF87x4hAJhinVj4yeZWdo2Em37u1DNEyFbs98ij2ct4bPNuRhebj', '2019-05-09 03:45:31', '2019-05-09 03:45:31', 1),
(8, 'google', '117394221140787739014', 'customer', 'ECVitug Constructions', 'ecvconstructions@gmail.com', NULL, NULL, NULL, 'https://lh5.googleusercontent.com/-49FK6dSDs3Q/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcYytMp_WKH_GnrQ9PH0pQqp3uKvw/mo/photo.jpg', 'KzB44MqLWXdB957ag7sl8xMAaq5HX6ctGV09nmY1O1jmleijlh9X93Ru6oga', '2019-05-09 03:45:58', '2019-05-09 03:45:58', 1),
(9, 'facebook', '10212987337468245', 'customer', 'Edgar Q. Palima', 'billupsshot@yahoo.com.ph', NULL, NULL, NULL, 'https://graph.facebook.com/v3.0/10212987337468245/picture?type=normal', '7YECEhrasZUAeM0mbhi1R7PsSEpkSmrqGEpjltvk4RN5SltbAEWoFEArPqJP', '2019-05-09 04:12:05', '2019-05-09 04:12:05', 1),
(10, 'google', '106901116454449753691', 'customer', 'Kelvin Dale Vitug', 'kelvinvitug1@gmail.com', NULL, NULL, NULL, 'https://lh4.googleusercontent.com/-C2BCZ0J_uuw/AAAAAAAAAAI/AAAAAAAABns/sM2-7qodNro/photo.jpg', 'Xg0kMvindC5aSwVQ8AKXRJi7emkzM0HHVKrFGWD7BuwEL1i6cTg6a97jZRlq', '2019-05-14 02:11:51', '2019-05-16 06:53:52', 1),
(11, 'facebook', '2580859685275799', 'customer', 'ดัชชุนด์ ทิมปั๊ก', 'timpugrachelle@yahoo.com', NULL, NULL, NULL, 'https://graph.facebook.com/v3.0/2580859685275799/picture?type=normal', NULL, '2019-05-16 08:44:52', '2019-05-16 08:44:52', 1),
(12, NULL, NULL, 'customer', 'Hello', 'helfn@gmail.com', '09392626485', NULL, '$2y$10$anw2hLLkOzSbeRc6fSYQCer/pmENCOZIQGi/bNNeKoegWA9VmK98C', NULL, NULL, '2019-05-18 02:57:35', '2019-05-18 02:57:35', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimates`
--
ALTER TABLE `estimates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estimates_user_id_foreign` (`user_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_image_unique` (`image`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `estimates`
--
ALTER TABLE `estimates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `estimates`
--
ALTER TABLE `estimates`
  ADD CONSTRAINT `estimates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
