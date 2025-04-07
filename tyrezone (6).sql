-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2025 at 01:02 PM
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
-- Database: `tyrezone`
--

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
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `image`, `excerpt`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dunlop', NULL, NULL, NULL, '2025-04-07 00:56:38', '2025-04-07 00:56:38');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_20_033904_create_manufacturers_table', 1),
(6, '2024_08_20_064627_create_patterens_table', 1),
(7, '2024_09_02_163823_create_sizes_table', 1),
(8, '2024_09_03_062612_create_products_table', 1),
(9, '2024_09_07_071646_create_order_details_table', 1),
(10, '2024_09_12_045744_create_smtp_settings_table', 1),
(11, '2024_09_12_062159_create_stripe_settings_table', 1),
(12, '2024_10_05_083030_create_temp_images_table', 1),
(13, '2024_10_05_092446_create_product_images_table', 1),
(14, '2024_10_07_055205_create_orders_table', 1),
(15, '2024_10_08_152117_create_order_items_table', 1),
(16, '2024_10_12_051150_create_tyre_widths_table', 1),
(17, '2024_10_12_052240_create_tyre_profiles_table', 1),
(18, '2024_10_12_061646_create_tyre_rimsizes_table', 1),
(19, '2024_10_12_063124_create_tyre_speeds_table', 1),
(20, '2024_10_27_125806_create_logos_table', 1),
(21, '2025_03_01_035126_create_newsletter_subscribers_table', 1),
(22, '2025_03_22_124512_create_vehicle_categories_table', 1),
(23, '2025_04_07_095253_create_privacies_table', 2),
(24, '2025_04_07_103221_create_vehicle_brands_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_detail_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `order_detail_id`, `user_id`, `order_status`, `payment_status`, `total_price`, `created_at`, `updated_at`) VALUES
(1, '11744007520', '1', '1', 'Pending', '', '142.00', '2025-04-07 01:32:00', '2025-04-07 01:32:00'),
(2, '11744007669', '2', '1', 'Pending', '', '142.00', '2025-04-07 01:34:29', '2025-04-07 01:34:29'),
(3, '11744008202', '3', '1', 'Pending', '', '142.00', '2025-04-07 01:43:22', '2025-04-07 01:43:22'),
(4, '11744008532', '4', '1', 'Pending', '', '142.00', '2025-04-07 01:48:52', '2025-04-07 01:48:52'),
(5, '11744008591', '5', '1', 'Pending', '', '142.00', '2025-04-07 01:49:51', '2025-04-07 01:49:51'),
(6, '11744008606', '6', '1', 'Pending', '', '142.00', '2025-04-07 01:50:06', '2025-04-07 01:50:06'),
(7, '11744008632', '7', '1', 'Pending', '', '284.00', '2025-04-07 01:50:32', '2025-04-07 01:50:32'),
(8, '11744008821', '8', '1', 'Pending', '', '284.00', '2025-04-07 01:53:41', '2025-04-07 01:53:41'),
(9, '11744008859', '9', '1', 'Pending', '', '284.00', '2025-04-07 01:54:19', '2025-04-07 01:54:19'),
(10, '11744008886', '10', '1', 'Pending', '', '284.00', '2025-04-07 01:54:46', '2025-04-07 01:54:46'),
(11, '11744009403', '11', '1', 'Pending', '', '284.00', '2025-04-07 02:03:23', '2025-04-07 02:03:23'),
(12, '11744009419', '12', '1', 'Pending', '', '284.00', '2025-04-07 02:03:39', '2025-04-07 02:03:39'),
(13, '11744009824', '13', '1', 'Pending', '', '284.00', '2025-04-07 02:10:24', '2025-04-07 02:10:24'),
(14, '11744010142', '14', '1', 'Pending', 'Paid Online', '284.00', '2025-04-07 02:15:42', '2025-04-07 02:15:44'),
(15, '11744010995', '15', '1', 'Pending', 'Cash on Delivery', '284.00', '2025-04-07 02:29:55', '2025-04-07 02:29:55'),
(16, '11744013659', '16', '1', 'Pending', 'Cash on Delivery', '142.00', '2025-04-07 03:14:19', '2025-04-07 03:14:19'),
(17, '11744014091', '17', '1', 'Pending', '', '284.00', '2025-04-07 03:21:31', '2025-04-07 03:21:31'),
(18, '11744014201', '18', '1', 'Pending', '', '284.00', '2025-04-07 03:23:21', '2025-04-07 03:23:21'),
(19, '11744017580', '19', '1', 'Pending', '', '142.00', '2025-04-07 04:19:40', '2025-04-07 04:19:40'),
(20, '11744017872', '20', '1', 'Pending', '', '142.00', '2025-04-07 04:24:32', '2025-04-07 04:24:32'),
(21, '11744017913', '21', '1', 'Pending', '', '142.00', '2025-04-07 04:25:13', '2025-04-07 04:25:13'),
(22, '11744017944', '22', '1', 'Pending', '', '142.00', '2025-04-07 04:25:44', '2025-04-07 04:25:44'),
(23, '11744018002', '23', '1', 'Pending', '', '142.00', '2025-04-07 04:26:42', '2025-04-07 04:26:42'),
(24, '11744018138', '24', '1', 'Pending', '', '142.00', '2025-04-07 04:28:58', '2025-04-07 04:28:58'),
(25, '11744018192', '25', '1', 'Pending', '', '142.00', '2025-04-07 04:29:52', '2025-04-07 04:29:52'),
(26, '11744018240', '26', '1', 'Pending', '', '142.00', '2025-04-07 04:30:40', '2025-04-07 04:30:40'),
(27, '11744018356', '27', '1', 'Pending', '', '142.00', '2025-04-07 04:32:36', '2025-04-07 04:32:36'),
(28, '11744018389', '28', '1', 'Pending', '', '142.00', '2025-04-07 04:33:09', '2025-04-07 04:33:09'),
(29, '11744018418', '29', '1', 'Pending', '', '142.00', '2025-04-07 04:33:38', '2025-04-07 04:33:38'),
(30, '11744018627', '30', '1', 'Pending', '', '142.00', '2025-04-07 04:37:07', '2025-04-07 04:37:07'),
(31, '11744018710', '31', '1', 'Pending', '', '142.00', '2025-04-07 04:38:30', '2025-04-07 04:38:30'),
(32, '11744018720', '32', '1', 'Pending', '', '142.00', '2025-04-07 04:38:40', '2025-04-07 04:38:40'),
(33, '11744018772', '33', '1', 'Pending', '', '142.00', '2025-04-07 04:39:32', '2025-04-07 04:39:32'),
(34, '11744018806', '34', '1', 'Pending', '', '142.00', '2025-04-07 04:40:06', '2025-04-07 04:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `o_id` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `fname`, `lname`, `email`, `user_id`, `order_id`, `o_id`, `phone`, `reg_no`, `post_code`, `company`, `address`, `city`, `state`, `country`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', 'admin@gmail.com', '1', '11744007520', 'null', '02734734734', '-', '24420', 'Stuart', 'Charsadda, KP, Pakistan', 'Charsadda', 'Gwynedd', 'uk', 'Comments', '2025-04-07 01:32:00', '2025-04-07 01:32:00'),
(2, 'Admin', '1', 'admin@gmail.com', '1', '11744007669', 'null', '02734734734', '-', '24420', 'Stuart', 'Charsadda, KP, Pakistan', 'Charsadda', 'Gwynedd', 'uk', 'Comments', '2025-04-07 01:34:29', '2025-04-07 01:34:29'),
(3, 'Kirk', 'Samantha', 'nuzefop@mailinator.com', '1', '11744008202', 'null', '82', '-', 'Zorita', 'Ria', 'Debra', 'Ian', 'Hampshire', 'uk', 'Assumenda ea ea aut', '2025-04-07 01:43:22', '2025-04-07 01:43:22'),
(4, 'Willow', 'Marny', 'myqyvy@mailinator.com', '1', '11744008532', 'null', '84', '-', 'Baker', 'Idola', 'Price', 'Brianna', 'Greater Manchester', 'uk', 'Blanditiis id disti', '2025-04-07 01:48:52', '2025-04-07 01:48:52'),
(5, 'Willow', 'Marny', 'myqyvy@mailinator.com', '1', '11744008591', 'null', '84', '-', 'Baker', 'Idola', 'Price', 'Brianna', 'Greater Manchester', 'uk', 'Blanditiis id disti', '2025-04-07 01:49:51', '2025-04-07 01:49:51'),
(6, 'Willow', 'Marny', 'myqyvy@mailinator.com', '1', '11744008606', 'null', '84', '-', 'Baker', 'Idola', 'Price', 'Brianna', 'Greater Manchester', 'uk', 'Blanditiis id disti', '2025-04-07 01:50:06', '2025-04-07 01:50:06'),
(7, 'Willow', 'Marny', 'myqyvy@mailinator.com', '1', '11744008632', 'null', '84', '-', 'Baker', 'Idola', 'Price', 'Brianna', 'Greater Manchester', 'uk', 'Blanditiis id disti', '2025-04-07 01:50:32', '2025-04-07 01:50:32'),
(8, 'Willow', 'Marny', 'myqyvy@mailinator.com', '1', '11744008821', 'null', '84', '-', 'Baker', 'Idola', 'Price', 'Brianna', 'Greater Manchester', 'uk', 'Blanditiis id disti', '2025-04-07 01:53:41', '2025-04-07 01:53:41'),
(9, 'Willow', 'Marny', 'myqyvy@mailinator.com', '1', '11744008859', 'null', '84', '-', 'Baker', 'Idola', 'Price', 'Brianna', 'Greater Manchester', 'uk', 'Blanditiis id disti', '2025-04-07 01:54:19', '2025-04-07 01:54:19'),
(10, 'Willow', 'Marny', 'myqyvy@mailinator.com', '1', '11744008886', 'null', '84', '-', 'Baker', 'Idola', 'Price', 'Brianna', 'Greater Manchester', 'uk', 'Blanditiis id disti', '2025-04-07 01:54:46', '2025-04-07 01:54:46'),
(11, 'Willow', 'Marny', 'myqyvy@mailinator.com', '1', '11744009403', 'null', '84', '-', 'Baker', 'Idola', 'Price', 'Brianna', 'Greater Manchester', 'uk', 'Blanditiis id disti', '2025-04-07 02:03:23', '2025-04-07 02:03:23'),
(12, 'Yuli', 'Teagan', 'siwyfyzupa@mailinator.com', '1', '11744009419', 'null', '55', '-', 'Rylee', 'Jillian', 'Naida', 'Cally', 'Bristol', 'uk', 'Repudiandae voluptat', '2025-04-07 02:03:39', '2025-04-07 02:03:39'),
(13, 'Yuli', 'Teagan', 'siwyfyzupa@mailinator.com', '1', '11744009824', 'null', '55', '-', 'Rylee', 'Jillian', 'Naida', 'Cally', 'Bristol', 'uk', 'Repudiandae voluptat', '2025-04-07 02:10:24', '2025-04-07 02:10:24'),
(14, 'Lyle', 'Lana', 'bebigo@mailinator.com', '1', '11744010142', '14', '92', '-', 'Lucas', 'Dominique', 'Alec', 'Wesley', 'Surrey', 'uk', 'Lorem mollitia sed a', '2025-04-07 02:15:42', '2025-04-07 02:15:44'),
(15, 'Jenette', 'Ivy', 'hebycaxani@mailinator.com', '1', '11744010995', '15', '59', '-', 'Carlos', 'Forrest', 'Dorian', 'Hunter', 'South Lanarkshire', 'uk', 'Iure ut facere dolor', '2025-04-07 02:29:55', '2025-04-07 02:29:55'),
(16, 'Yoko', 'Zephr', 'gydym@mailinator.com', '1', '11744013659', '16', '8', '-', 'Bradley', 'Keelie', 'Irene', 'Maxine', 'Bedfordshire', 'uk', 'Impedit non eligend', '2025-04-07 03:14:19', '2025-04-07 03:14:19'),
(17, 'Kalia', 'Willow', 'zema@mailinator.com', '1', '11744014091', 'null', '28', '-', 'Amena', 'Kiona', 'Melinda', 'Martena', 'Norfolk', 'uk', 'Qui labore elit dol', '2025-04-07 03:21:31', '2025-04-07 03:21:31'),
(18, 'Nevada', 'Levi', 'pevon@mailinator.com', '1', '11744014201', 'null', '37', '-', 'Ingrid', 'Emery', 'Liberty', 'Jescie', 'Aberdeen', 'uk', 'Temporibus nihil at', '2025-04-07 03:23:21', '2025-04-07 03:23:21'),
(19, 'Sylvester', 'Cheyenne', 'feto@mailinator.com', '1', '11744017580', 'null', '45', '-', 'Joy', 'Cathleen', 'Stone', 'Brianna', 'Rutland', 'uk', 'Sint adipisicing ven', '2025-04-07 04:19:40', '2025-04-07 04:19:40'),
(20, 'Admin', '1', 'admin@gmail.com', '1', '11744017872', 'null', '02734734734', '-', '24420', 'Stuart', 'Charsadda, KP, Pakistan', 'Charsadda', 'Gwynedd', 'uk', 'dcadsdcdcas', '2025-04-07 04:24:32', '2025-04-07 04:24:32'),
(21, 'Alan', 'Hedwig', 'nuzep@mailinator.com', '1', '11744017913', 'null', '82', '-', 'Forrest', 'Raven', 'Abra', 'Chantale', 'Lincolnshire', 'uk', 'Est fugiat ut aliqui', '2025-04-07 04:25:13', '2025-04-07 04:25:13'),
(22, 'Ifeoma', 'Lavinia', 'pyryji@mailinator.com', '1', '11744017944', 'null', '81', '-', 'Michelle', 'Lee', 'Beatrice', 'Yolanda', 'Pembrokeshire', 'uk', 'Aut eum necessitatib', '2025-04-07 04:25:44', '2025-04-07 04:25:44'),
(23, 'Geraldine', 'Brynne', 'zylinaq@mailinator.com', '1', '11744018002', 'null', '74', '-', 'Emi', 'Robin', 'Lavinia', 'Christian', 'East Lothian', 'uk', 'Veniam et molestiae', '2025-04-07 04:26:42', '2025-04-07 04:26:42'),
(24, 'Astra', 'Yen', 'pefymi@mailinator.com', '1', '11744018138', 'null', '85', '-', 'Christen', 'Drake', 'Kieran', 'Lacey', 'Merthyr Tydfil', 'uk', 'Suscipit duis in pro', '2025-04-07 04:28:58', '2025-04-07 04:28:58'),
(25, 'Yvette', 'Kay', 'zudawe@mailinator.com', '1', '11744018192', 'null', '46', '-', 'Hilda', 'Ori', 'Kristen', 'Winter', 'Powys', 'uk', 'Voluptatem Tempor e', '2025-04-07 04:29:52', '2025-04-07 04:29:52'),
(26, 'Gemma', 'Jordan', 'tanoby@mailinator.com', '1', '11744018240', 'null', '70', '-', 'Randall', 'Bradley', 'Gretchen', 'Yen', 'Dumfries and Galloway', 'uk', 'Et magni reiciendis', '2025-04-07 04:30:40', '2025-04-07 04:30:40'),
(27, 'Hedwig', 'Beverly', 'xatowaca@mailinator.com', '1', '11744018356', 'null', '76', '-', 'Graham', 'Talon', 'Kasper', 'Winter', 'Blaenau Gwent', 'uk', 'Sit eum ut ipsa quo', '2025-04-07 04:32:36', '2025-04-07 04:32:36'),
(28, 'Fiona', '1', 'casos@mailinator.com', '1', '11744018389', 'null', '78', '-', 'Dieter', 'Bruce', 'Brielle', 'Indigo', 'Wiltshire', 'uk', 'Aut sapiente minus e', '2025-04-07 04:33:09', '2025-04-07 04:33:09'),
(29, 'Jayme', 'Ronan', 'kofegi@mailinator.com', '1', '11744018418', 'null', '27', '-', 'Blake', 'Brenda', 'Thane', 'Jordan', 'West Sussex', 'uk', 'Dolor consequatur p', '2025-04-07 04:33:38', '2025-04-07 04:33:38'),
(30, 'Catherine', 'Kerry', 'cujus@mailinator.com', '1', '11744018627', 'null', '70', '-', 'Giacomo', 'Todd', 'Moses', 'Axel', 'Buckinghamshire', 'uk', 'Soluta neque deserun', '2025-04-07 04:37:07', '2025-04-07 04:37:07'),
(31, 'Risa', 'Zorita', 'pykaxixamu@mailinator.com', '1', '11744018710', 'null', '29', '-', 'Bree', 'Glenna', 'Jolene', 'Rinah', 'Western Isles', 'uk', 'Veniam magna id ull', '2025-04-07 04:38:30', '2025-04-07 04:38:30'),
(32, 'Alexis', 'Pandora', 'zitetyf@mailinator.com', '1', '11744018720', 'null', '12', '-', 'Colleen', 'Imelda', 'Zane', 'Shellie', 'Aberdeenshire', 'uk', 'Dolores sit adipisci', '2025-04-07 04:38:40', '2025-04-07 04:38:40'),
(33, 'Hayfa', 'Jordan', 'zukoty@mailinator.com', '1', '11744018772', 'null', '52', '-', 'Blythe', 'Keane', 'Melissa', 'Laith', 'South Ayrshire', 'uk', 'Deleniti incidunt e', '2025-04-07 04:39:32', '2025-04-07 04:39:32'),
(34, 'Maxine', 'Walter', 'fiwy@mailinator.com', '1', '11744018806', 'null', '76', '-', 'Wesley', 'Leandra', 'Gray', 'Serina', 'Northumberland', 'uk', 'Exercitationem error', '2025-04-07 04:40:06', '2025-04-07 04:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `o_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` text NOT NULL,
  `vat_price` text NOT NULL,
  `qty_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `o_id`, `order_id`, `product_id`, `qty`, `price`, `vat_price`, `qty_status`, `created_at`, `updated_at`) VALUES
(1, 1, '11744007520', '1', 1, '139', '3', 1, '2025-04-07 01:32:00', '2025-04-07 01:32:00'),
(2, 2, '11744007669', '1', 1, '139', '3', 1, '2025-04-07 01:34:29', '2025-04-07 01:34:29'),
(3, 4, '11744008532', '1', 1, '139', '3', 1, '2025-04-07 01:48:52', '2025-04-07 01:48:52'),
(4, 5, '11744008591', '1', 1, '139', '3', 1, '2025-04-07 01:49:51', '2025-04-07 01:49:51'),
(5, 6, '11744008606', '1', 1, '139', '3', 1, '2025-04-07 01:50:06', '2025-04-07 01:50:06'),
(6, 7, '11744008632', '1', 2, '139', '3', 1, '2025-04-07 01:50:32', '2025-04-07 01:50:32'),
(7, 8, '11744008821', '1', 2, '139', '3', 1, '2025-04-07 01:53:41', '2025-04-07 01:53:41'),
(8, 9, '11744008859', '1', 2, '139', '3', 1, '2025-04-07 01:54:19', '2025-04-07 01:54:19'),
(9, 10, '11744008886', '1', 2, '139', '3', 1, '2025-04-07 01:54:46', '2025-04-07 01:54:46'),
(10, 11, '11744009403', '1', 2, '139', '3', 1, '2025-04-07 02:03:23', '2025-04-07 02:03:23'),
(11, 12, '11744009419', '1', 2, '139', '3', 1, '2025-04-07 02:03:39', '2025-04-07 02:03:39'),
(12, 13, '11744009824', '1', 2, '139', '3', 1, '2025-04-07 02:10:24', '2025-04-07 02:10:24'),
(13, 14, '11744010142', '1', 2, '139', '3', 1, '2025-04-07 02:15:42', '2025-04-07 02:15:42'),
(14, 15, '11744010995', '1', 2, '139', '3', 1, '2025-04-07 02:29:55', '2025-04-07 02:29:55'),
(15, 16, '11744013659', '1', 1, '139', '3', 1, '2025-04-07 03:14:19', '2025-04-07 03:14:19'),
(16, 17, '11744014091', '1', 2, '139', '3', 1, '2025-04-07 03:21:31', '2025-04-07 03:21:31'),
(17, 18, '11744014201', '1', 2, '139', '3', 1, '2025-04-07 03:23:21', '2025-04-07 03:23:21'),
(18, 19, '11744017580', '1', 1, '139', '3', 1, '2025-04-07 04:19:40', '2025-04-07 04:19:40'),
(19, 20, '11744017872', '1', 1, '139', '3', 1, '2025-04-07 04:24:32', '2025-04-07 04:24:32'),
(20, 21, '11744017913', '1', 1, '139', '3', 1, '2025-04-07 04:25:13', '2025-04-07 04:25:13'),
(21, 22, '11744017944', '1', 1, '139', '3', 1, '2025-04-07 04:25:44', '2025-04-07 04:25:44'),
(22, 23, '11744018002', '1', 1, '139', '3', 1, '2025-04-07 04:26:42', '2025-04-07 04:26:42'),
(23, 24, '11744018138', '1', 1, '139', '3', 1, '2025-04-07 04:28:58', '2025-04-07 04:28:58'),
(24, 25, '11744018192', '1', 1, '139', '3', 1, '2025-04-07 04:29:52', '2025-04-07 04:29:52'),
(25, 26, '11744018240', '1', 1, '139', '3', 1, '2025-04-07 04:30:40', '2025-04-07 04:30:40'),
(26, 27, '11744018356', '1', 1, '139', '3', 1, '2025-04-07 04:32:36', '2025-04-07 04:32:36'),
(27, 28, '11744018389', '1', 1, '139', '3', 1, '2025-04-07 04:33:09', '2025-04-07 04:33:09'),
(28, 29, '11744018418', '1', 1, '139', '3', 1, '2025-04-07 04:33:38', '2025-04-07 04:33:38'),
(29, 30, '11744018627', '1', 1, '139', '3', 1, '2025-04-07 04:37:07', '2025-04-07 04:37:07'),
(30, 31, '11744018710', '1', 1, '139', '3', 1, '2025-04-07 04:38:30', '2025-04-07 04:38:30'),
(31, 32, '11744018720', '1', 1, '139', '3', 1, '2025-04-07 04:38:40', '2025-04-07 04:38:40'),
(32, 33, '11744018772', '1', 1, '139', '3', 1, '2025-04-07 04:39:32', '2025-04-07 04:39:32'),
(33, 34, '11744018806', '1', 1, '139', '3', 1, '2025-04-07 04:40:06', '2025-04-07 04:40:06');

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
-- Table structure for table `patterens`
--

CREATE TABLE `patterens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `manufacturer_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patterens`
--

INSERT INTO `patterens` (`id`, `name`, `manufacturer_id`, `created_at`, `updated_at`) VALUES
(1, 'Patteren Name', '1', '2025-04-07 00:56:38', '2025-04-07 00:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy` text DEFAULT NULL,
  `terms` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `privacy`, `terms`, `created_at`, `updated_at`) VALUES
(1, '<p><b>HEkljas d flkasd fkljasd klf</b></p>', NULL, '2025-04-07 05:09:07', '2025-04-07 05:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `manufacturer_id` varchar(255) NOT NULL,
  `patteren_id` varchar(255) DEFAULT NULL,
  `fuel_efficiency` varchar(255) NOT NULL,
  `wet_grip` varchar(255) NOT NULL,
  `road_noise` varchar(255) NOT NULL,
  `tyre_size` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `rim_size` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `load_index` varchar(255) NOT NULL,
  `season_type` varchar(255) NOT NULL,
  `budget_tyre` varchar(255) DEFAULT NULL,
  `in_stock` varchar(255) NOT NULL,
  `v_category` varchar(255) DEFAULT NULL,
  `run_flat` varchar(255) DEFAULT '0',
  `vat_price` varchar(255) DEFAULT '0',
  `price` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manufacturer_id`, `patteren_id`, `fuel_efficiency`, `wet_grip`, `road_noise`, `tyre_size`, `width`, `profile`, `rim_size`, `speed`, `load_index`, `season_type`, `budget_tyre`, `in_stock`, `v_category`, `run_flat`, `vat_price`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Product Name', '1', '1', '72', '60', '70', '145/45 R15 H', '145', '45', '15', 'H', '70', '0', 'budget', '77', 'passenger car', '0', '3', '139', NULL, '2025-04-07 00:56:38', '2025-04-07 04:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '11729762572.png', 1, '2025-04-07 00:56:38', '2025-04-07 00:56:38');

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
('KMLzW5bpQQJrevPnfy3MvphPa008T8uGaWtzLSUp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaFA0elhPeU5BZjBxSTN2Rm9saEE1d3JkcjZSU0VXUHpHRTF1cWRmSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi92ZWhpY2xlLWJyYW5kcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6ODoib3JkZXJfaWQiO3M6MTE6IjExNzQ0MDEzNjU5IjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1744023680);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `width` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `rim_size` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `width`, `profile`, `rim_size`, `speed`, `created_at`, `updated_at`) VALUES
(1, '145', '45', '15', 'H', '2025-04-07 00:56:38', '2025-04-07 00:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_settings`
--

CREATE TABLE `smtp_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_mailer` varchar(255) NOT NULL DEFAULT 'smtp',
  `mail_host` varchar(255) NOT NULL,
  `mail_port` varchar(255) NOT NULL,
  `mail_username` varchar(255) NOT NULL,
  `mail_password` varchar(255) NOT NULL,
  `mail_encryption` varchar(255) NOT NULL,
  `mail_from_address` varchar(255) NOT NULL,
  `mail_from_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stripe_settings`
--

CREATE TABLE `stripe_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stripe_publishable_key` varchar(255) DEFAULT NULL,
  `stripe_secret_key` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stripe_settings`
--

INSERT INTO `stripe_settings` (`id`, `stripe_publishable_key`, `stripe_secret_key`, `created_at`, `updated_at`) VALUES
(1, 'pk_test_51Ox1KhEYkp7oKbbwCkGhXP0d8hAQyzne6aEGDKeP6VBzlu5IvnQq7cyeguNHECA7KDKRlHCxyouLUveE2yA0r8cU00RrFCyrEi', 'sk_test_51Ox1KhEYkp7oKbbwzs0fb4pAGhsVwc7ptFiVtCW0TpoIUAHBAoXXxRT6LgVZHs9Ii2wZVfWMuBsxQnyaSO0ba99q00nbwXU7LP', '2025-04-07 02:14:48', '2025-04-07 02:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `temp_images`
--

CREATE TABLE `temp_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tyre_profiles`
--

CREATE TABLE `tyre_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile` varchar(255) NOT NULL,
  `width_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tyre_rimsizes`
--

CREATE TABLE `tyre_rimsizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rim_size` varchar(255) NOT NULL,
  `profile_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tyre_speeds`
--

CREATE TABLE `tyre_speeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speed` varchar(255) NOT NULL,
  `rim_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tyre_widths`
--

CREATE TABLE `tyre_widths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `width` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0' COMMENT '0:-> User, 1:-> Admin, 2:-> wholesaler',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `city`, `post_code`, `address`, `state`, `country`, `company`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', 'admin@gmail.com', '02734734734', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$12$6.R0k0KDEO9lpGziMZB1K.OjJIWDbJ/hHjD1HyLG2EL6lGNRd07Am', '1', NULL, '2025-04-07 00:56:38', '2025-04-07 00:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_brands`
--

CREATE TABLE `vehicle_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_brand_name` varchar(255) DEFAULT NULL,
  `v_brand_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_brands`
--

INSERT INTO `vehicle_brands` (`id`, `v_brand_name`, `v_brand_image`, `created_at`, `updated_at`) VALUES
(3, 'asdfasasdfdasf', '1744023119.jpg', '2025-04-07 05:51:59', '2025-04-07 05:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_categories`
--

CREATE TABLE `vehicle_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_cat_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_categories`
--

INSERT INTO `vehicle_categories` (`id`, `v_cat_name`, `created_at`, `updated_at`) VALUES
(2, 'passenger car 4x4', '2025-04-07 00:56:58', '2025-04-07 00:56:58');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_subscribers_email_unique` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_o_id_foreign` (`o_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patterens`
--
ALTER TABLE `patterens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_settings`
--
ALTER TABLE `stripe_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_images`
--
ALTER TABLE `temp_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tyre_profiles`
--
ALTER TABLE `tyre_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tyre_profiles_width_id_foreign` (`width_id`);

--
-- Indexes for table `tyre_rimsizes`
--
ALTER TABLE `tyre_rimsizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tyre_rimsizes_profile_id_foreign` (`profile_id`);

--
-- Indexes for table `tyre_speeds`
--
ALTER TABLE `tyre_speeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tyre_speeds_rim_id_foreign` (`rim_id`);

--
-- Indexes for table `tyre_widths`
--
ALTER TABLE `tyre_widths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle_brands`
--
ALTER TABLE `vehicle_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_categories`
--
ALTER TABLE `vehicle_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `patterens`
--
ALTER TABLE `patterens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stripe_settings`
--
ALTER TABLE `stripe_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_images`
--
ALTER TABLE `temp_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tyre_profiles`
--
ALTER TABLE `tyre_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tyre_rimsizes`
--
ALTER TABLE `tyre_rimsizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tyre_speeds`
--
ALTER TABLE `tyre_speeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tyre_widths`
--
ALTER TABLE `tyre_widths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_brands`
--
ALTER TABLE `vehicle_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_categories`
--
ALTER TABLE `vehicle_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_o_id_foreign` FOREIGN KEY (`o_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tyre_profiles`
--
ALTER TABLE `tyre_profiles`
  ADD CONSTRAINT `tyre_profiles_width_id_foreign` FOREIGN KEY (`width_id`) REFERENCES `tyre_widths` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tyre_rimsizes`
--
ALTER TABLE `tyre_rimsizes`
  ADD CONSTRAINT `tyre_rimsizes_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `tyre_profiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tyre_speeds`
--
ALTER TABLE `tyre_speeds`
  ADD CONSTRAINT `tyre_speeds_rim_id_foreign` FOREIGN KEY (`rim_id`) REFERENCES `tyre_rimsizes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
