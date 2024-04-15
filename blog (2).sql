-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 07:10 PM
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
-- Database: `blog`
--

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
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sent_by` int(11) NOT NULL,
  `sent_to` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `sent_by`, `sent_to`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 0, '2024-04-15 15:09:40', '2024-04-15 15:09:40'),
(2, 2, 3, 0, '2024-04-15 15:10:20', '2024-04-15 15:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_26_164408_add_role_as_to_users_table', 2),
(7, '2024_03_04_164131_create_products_table', 3),
(8, '2024_04_06_135800_create_likes_table', 4),
(9, '2024_04_06_141200_add_username_as_to_users_table', 5),
(10, '2024_04_11_220149_create_follows_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` varchar(20) NOT NULL DEFAULT '0.00',
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `price`, `image`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'De Rada1', 'Very good', 'First product1', '4$', '1709747108.png', 1, 1, '2024-03-06 16:45:08', '2024-04-12 18:31:19'),
(4, 'Pizza proshut', 'Quality', 'Freshly bakedl', '5$', '1711206102.jpg', 1, 1, '2024-03-23 14:01:42', '2024-03-30 14:32:35'),
(5, 'Pizza margarita', 'nice', 'Fresh', '5$', '1711811403.jpg', 1, 1, '2024-03-30 14:10:03', '2024-03-30 14:10:03'),
(6, 'Suxhuk', 'E shijshme', 'PIzza me suxhuk', '5$', '1711812027.jpg', 0, 1, '2024-03-30 14:20:27', '2024-03-30 14:20:27'),
(7, 'Tuna', 'Very good', 'wdwd', '4$', '1711812593.jpg', 0, 1, '2024-03-30 14:29:53', '2024-03-30 14:29:53'),
(8, 'Product added from user', 'New movie', 'Aquaman', '6$', '1712954309.webp', 1, 2, '2024-04-11 21:55:56', '2024-04-12 18:38:29'),
(10, 'Sidebar', 'Html', 'CSS', '10$', '1712879974.PNG', 0, 2, '2024-04-11 21:59:34', '2024-04-11 21:59:34'),
(11, 'new', 'Very good', 'Tasty!', '5$', '1712880174.jpg', 1, 2, '2024-04-11 22:02:54', '2024-04-11 22:02:54'),
(12, 'hello there', 'Very good', 'freshly baked', '10$', '1712929403.jpg', 1, 2, '2024-04-12 11:43:23', '2024-04-12 11:43:23'),
(13, 'Home Alone', 'old movie', 'Kevin is home Alone', '100$', '1713097927.jpg', 1, 2, '2024-04-14 10:32:07', '2024-04-14 10:32:07'),
(14, 'New blog from profi', 'Project', 'New post here', '5$', '1713195917.webp', 1, 3, '2024-04-15 13:45:17', '2024-04-15 13:45:17'),
(15, 'another one', 'efenfi', 'efefefefefewfewfewf', '10$', '1713195942.webp', 1, 3, '2024-04-15 13:45:42', '2024-04-15 13:45:42');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `username`) VALUES
(1, 'Malsor', 'malsorarifi20@gmail.com', NULL, '$2y$12$gLs5ESEnOY6xf.aej30.v.HaZ2Y7G/huYmpElw/mHbTZoELRJrX7S', '4Hi9Ebd3oCtZH9LYW7VCfsDgPNCeDoAEfevdMvs8y1XMRJsQaJzr9LBPXXOE', '2024-02-22 12:04:03', '2024-03-23 14:26:29', 1, 'Malsor'),
(2, 'user', 'user@gmail.com', NULL, '$2y$12$hFqlX2sOe64YzFQJeXqtGOm.xEi2Zk3/J8leirz42YC86Gj4bzFmu', NULL, '2024-02-26 16:10:55', '2024-02-26 16:10:55', 0, 'User'),
(3, 'Arianit', 'arianittershnjaku@gmail.com', NULL, '$2y$12$lOs7BtNc2FhRLlihiIPoguMMKphjqUjWLxaB5KM7Ta4JZGFzzPo36', NULL, '2024-04-06 12:29:39', '2024-04-06 12:29:39', 0, 'Arianit'),
(4, 'Fatlind', 'fatlind@gmail.com', NULL, '$2y$12$LJgpB9OHOL1taEn8uSh4tOIUGOcz5RpK5/jcB7aUD0bnIsgyeQjlq', NULL, '2024-04-06 12:34:40', '2024-04-06 12:34:40', 0, 'Fatlind'),
(8, 'varis', 'varis@gmail.com', NULL, '$2y$12$s9yEmUEpKdmTgAjzyc.fAOBXfQDujHr4zP7dKAcwjAy/qvnDPh/Mi', NULL, '2024-04-06 12:49:12', '2024-04-06 12:49:12', 0, 'varis'),
(9, 'Lis', 'lisarifi04@gmail.com', NULL, '$2y$12$7o4uTLEz5oICxovpa1dvGeyp4t7y4OpsjTEjEGcRnPfIy5ftek4TC', NULL, '2024-04-11 20:13:52', '2024-04-11 20:13:52', 0, 'Lisi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
