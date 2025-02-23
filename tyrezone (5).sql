-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 08:26 AM
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
(3, 'Dunlop', '1725335717.svg', NULL, NULL, '2024-09-02 22:55:17', '2024-09-02 22:55:17'),
(4, 'Falken', '1725338990.svg', NULL, NULL, '2024-09-02 23:49:50', '2024-09-02 23:49:50'),
(5, 'Accelera', '', NULL, NULL, '2024-09-03 23:28:16', '2024-09-03 23:28:16');

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
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_08_19_125542_create_manufacturers_table', 2),
(8, '2024_08_20_033904_create_manufacturers_table', 3),
(9, '2024_08_20_064627_create_patterens_table', 4),
(10, '2024_09_02_163823_create_sizes_table', 5),
(11, '2024_09_03_062612_create_products_table', 6),
(12, '2024_09_07_070311_create_orders_table', 7),
(13, '2024_09_07_071646_create_order_details_table', 7),
(14, '2024_09_12_045744_create_smtp_settings_table', 8),
(15, '2024_09_12_061115_create_stripe_settings_table', 9),
(16, '2024_09_12_062159_create_stripe_settings_table', 10),
(17, '2024_10_05_083030_create_temp_images_table', 11),
(18, '2024_10_05_090912_create_product_images_tables', 12),
(19, '2024_10_05_092446_create_product_images_table', 13),
(20, '2024_10_07_055205_create_orders_table', 14),
(21, '2024_10_08_152117_create_order_items_table', 15);

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
(43, '91728621948', '69', '9', 'Delivered', 'Cash on Delivery', '9000.00', '2024-10-10 23:45:48', '2024-10-11 01:25:28');

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

INSERT INTO `order_details` (`id`, `fname`, `lname`, `email`, `user_id`, `order_id`, `phone`, `reg_no`, `post_code`, `company`, `address`, `city`, `state`, `country`, `comments`, `created_at`, `updated_at`) VALUES
(69, 'Jamal', 'Shah', 'kefadummela-8764@yopmail.com', '9', '91728621948', '03176186273', '3453', '24420', 'Individual', 'Charsadda, KP, Pakistan', 'Charsadda', 'Aberdeen', 'uk', NULL, '2024-10-10 23:45:48', '2024-10-10 23:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `o_id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `o_id`, `order_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(37, 43, '91728621948', '32', 1, '2024-10-10 23:45:48', '2024-10-10 23:45:48'),
(38, 43, '91728621948', '33', 4, '2024-10-10 23:45:48', '2024-10-10 23:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('akifullah0317@gmail.com', '$2y$12$FdHNxFxDQW7.783RVOhlz.lLBMUx4ISiRnr/y8wFzJBWnUF4dojXK', '2024-10-09 00:58:57');

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
(2, 'EconoDrive', '3', '2024-09-02 22:56:16', '2024-09-02 22:56:16'),
(3, 'SP StreetResponse 2', '3', '2024-09-02 22:56:36', '2024-09-02 22:56:36'),
(4, 'SP Sportmaxx GT', '3', '2024-09-02 22:56:51', '2024-09-02 22:56:51'),
(5, 'SportMaxx Race 2', '3', '2024-09-02 22:57:08', '2024-09-02 22:57:08'),
(6, 'Grandtrek Touring A/S', '3', '2024-09-02 22:57:24', '2024-09-02 22:57:24'),
(7, 'FK452', '4', '2024-09-03 00:00:23', '2024-09-03 00:00:23'),
(8, 'Ziex ZE-912', '4', '2024-09-03 00:00:40', '2024-09-03 00:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `manufacturer_id` varchar(255) NOT NULL,
  `patteren_id` varchar(255) NOT NULL,
  `fuel_efficiency` varchar(255) NOT NULL,
  `wet_grip` varchar(255) NOT NULL,
  `road_noise` varchar(255) NOT NULL,
  `tyre_size` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `rim_size` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `tyre_type` varchar(255) NOT NULL,
  `season_type` varchar(255) NOT NULL,
  `budget_tyre` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manufacturer_id`, `patteren_id`, `fuel_efficiency`, `wet_grip`, `road_noise`, `tyre_size`, `width`, `profile`, `rim_size`, `speed`, `tyre_type`, `season_type`, `budget_tyre`, `price`, `description`, `created_at`, `updated_at`) VALUES
(32, 'Dunlop', '3', '2', 'D', 'C', '69', '130/25 R13 H', '23', '10.5', 'R15', 'S', 'Car', '0', '1', '5000', NULL, '2024-10-05 05:40:04', '2024-10-05 05:40:04'),
(33, 'Accelera', '4', '7', 'D', 'B', '69', '150/45 R17 S', '130', '11.5', '234333', 'Q', 'Car', '1', '1', '1000', '<p>This is description</p>', '2024-10-06 23:52:56', '2024-10-06 23:52:56'),
(34, 'GRANDTREK AT20', '3', '5', 'D', 'B', '72', '130/25 R13 H', '130', '25', '234', '234', 'Car', '0', '1', '137.39', '<h2>Helos decriopiton</h2>', '2024-10-09 01:13:10', '2024-10-09 01:13:10');

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
(27, '271728124804.jpg', 32, '2024-10-05 05:40:04', '2024-10-05 05:40:04'),
(29, '291728124804.jpg', 32, '2024-10-05 05:40:04', '2024-10-05 05:40:04'),
(30, '301728276776.jpg', 33, '2024-10-06 23:52:56', '2024-10-06 23:52:56'),
(31, '311728276776.jpg', 33, '2024-10-06 23:52:56', '2024-10-06 23:52:56'),
(32, '32-1728276805.jpg', 33, '2024-10-06 23:53:25', '2024-10-06 23:53:25'),
(33, '33-1728276835.jpg', 32, '2024-10-06 23:53:54', '2024-10-06 23:53:55'),
(34, '34-1728452358.jpg', 33, '2024-10-09 00:39:18', '2024-10-09 00:39:18'),
(35, '35-1728452358.jpg', 33, '2024-10-09 00:39:18', '2024-10-09 00:39:18'),
(36, '36-1728452359.jpg', 33, '2024-10-09 00:39:19', '2024-10-09 00:39:19'),
(37, '37-1728452359.jpg', 33, '2024-10-09 00:39:19', '2024-10-09 00:39:19'),
(38, '381728454390.jpg', 34, '2024-10-09 01:13:10', '2024-10-09 01:13:10'),
(39, '391728454390.jpeg', 34, '2024-10-09 01:13:10', '2024-10-09 01:13:10'),
(40, '401728454390.jpeg', 34, '2024-10-09 01:13:10', '2024-10-09 01:13:10'),
(41, '411728454390.jpeg', 34, '2024-10-09 01:13:10', '2024-10-09 01:13:10'),
(42, '42-1728454403.gif', 34, '2024-10-09 01:13:23', '2024-10-09 01:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_images_tables`
--

CREATE TABLE `product_images_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('qiR4UtRjjB9NMw0jzZgcAHz9hx8niptpFF4GInjC', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUUo4VUFWdkdZaUM3V1Z4WlRDRk1vS2R5UGc0blRSQWxlTEVJUEE2QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9vcmRlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjg6Im9yZGVyX2lkIjtzOjExOiI5MTcyODYyMTk0OCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Nzt9', 1728627933);

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
(2, '130', '25', '13', 'H', '2024-09-02 22:36:16', '2024-09-02 22:36:16'),
(3, '135', '30', '14', 'N', '2024-09-02 22:36:58', '2024-09-02 22:36:58'),
(4, '140', '35', '15', 'P', '2024-09-02 22:37:40', '2024-09-02 22:37:40'),
(5, '145', '40', '16', 'Q', '2024-09-02 22:38:05', '2024-09-02 22:38:05'),
(6, '150', '45', '17', 'S', '2024-09-02 22:39:31', '2024-09-02 22:39:31');

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

--
-- Dumping data for table `smtp_settings`
--

INSERT INTO `smtp_settings` (`id`, `mail_mailer`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_from_address`, `mail_from_name`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'smtp.gmail.com', '587', 'akifullah0317@gmail.com', 'tugcnmpclhthnqaq', 'tls', 'akifullah0317@gmail.com', 'Tyrezone', '2024-09-12 01:03:47', '2024-09-12 02:10:30');

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
(1, 'pk_test_51PwFCN2KpUMv5VNQu5Rhtj7Ih87t8Q0bFumzHdKUrObU3z0Ocrvoy0OsA68zS110erpzlonsWrIaqs0M4IVavDlU00UWX5m80H', 'sk_test_51PwFCN2KpUMv5VNQ1VIduQJpU0bdFcsgb3FCFTYz5tTQKx010TNUUQo153Cad9be85REKJmwIApGMjrwRcZdxzcx00qf8pMPXq', '2024-09-12 01:25:06', '2024-09-12 01:32:59');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Akif', 'Ullah', 'akifullah0317@gmail.com', '03176186273', NULL, '$2y$12$wfGiyGJnSXZrymt/gXve8e8r1/rVJVIEanQy8Vu97T2GEo8Wmcbly', '0', NULL, '2024-08-17 01:07:28', '2024-09-11 03:23:20'),
(7, 'Admin', 'Only', 'admin@gmail.com', '03176186273', NULL, '$2y$12$hFBXFR.YctjSTS.ubN1hau2VFZVXSmVumZxiaPiEvKVFUAweqL/N2', '1', NULL, '2024-08-29 02:46:43', '2024-09-15 23:29:45'),
(9, 'Jamal', 'Shah', 'kefadummela-8764@yopmail.com', '03176186273', NULL, '$2y$12$mPKDfJe6mjNmOs0L8ohaou0Jw6HosE.tEHdvzRDLY4k8K5nSYDSD2', '0', NULL, '2024-10-10 23:09:36', '2024-10-10 23:09:36');

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `product_images_tables`
--
ALTER TABLE `product_images_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_tables_product_id_foreign` (`product_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `patterens`
--
ALTER TABLE `patterens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product_images_tables`
--
ALTER TABLE `product_images_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stripe_settings`
--
ALTER TABLE `stripe_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_images`
--
ALTER TABLE `temp_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images_tables`
--
ALTER TABLE `product_images_tables`
  ADD CONSTRAINT `product_images_tables_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
