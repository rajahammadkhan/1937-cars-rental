-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 07:53 AM
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
-- Database: `1937rentals_cms`
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
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `parent_id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 0, 'DashBoard', 'web', '2021-10-20 00:39:05', '2021-10-20 00:39:05'),
(2, 0, 'Users Management', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(3, 2, 'Users', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(4, 3, 'users-add', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(5, 3, 'users-view', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(6, 3, 'users-delete', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(7, 3, 'users-edit', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(8, 3, 'user-status', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(9, 2, 'Roles', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(10, 9, 'roles-add', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(11, 9, 'roles-edit', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(12, 9, 'roles-delete', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(13, 9, 'roles-status', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(14, 0, 'Master Files', 'web', NULL, NULL),
(15, 14, 'MF-Our Services', 'web', NULL, NULL),
(16, 14, 'MF-Visa Services', 'web', NULL, NULL),
(17, 14, 'MF-LLC Company Formation', 'web', NULL, NULL),
(18, 14, 'MF-Business Setup', 'web', NULL, NULL),
(19, 15, 'mf_our_services-add', 'web', NULL, NULL),
(20, 15, 'mf_our_services-edit', 'web', NULL, NULL),
(21, 15, 'mf_our_services-delete', 'web', NULL, NULL),
(22, 15, 'mf_our_services-status', 'web', NULL, NULL),
(23, 15, 'mf_our_services-add header content', 'web', NULL, NULL),
(24, 16, 'mf_visa_services-add', 'web', NULL, NULL),
(25, 16, 'mf_visa_services-edit', 'web', NULL, NULL),
(26, 16, 'mf_visa_services-delete', 'web', NULL, NULL),
(27, 16, 'mf_visa_services-status', 'web', NULL, NULL),
(28, 16, 'mf_visa_services-add header content', 'web', NULL, NULL),
(29, 17, 'mf_llc_company_formation-add', 'web', NULL, NULL),
(30, 17, 'mf_llc_company_formation-edit', 'web', NULL, NULL),
(31, 17, 'mf_llc_company_formation-delete', 'web', NULL, NULL),
(32, 17, 'mf_llc_company_formation-status', 'web', NULL, NULL),
(33, 17, 'mf_llc_company_formation-add header content', 'web', NULL, NULL),
(34, 18, 'mf_business_setup-add', 'web', NULL, NULL),
(35, 18, 'mf_business_setup-edit', 'web', NULL, NULL),
(36, 18, 'mf_business_setup-delete', 'web', NULL, NULL),
(37, 18, 'mf_business_setup-status', 'web', NULL, NULL),
(38, 18, 'mf_business_setup-add header content', 'web', NULL, NULL),
(39, 0, 'Site Management', 'web', NULL, NULL),
(40, 39, 'SM-Our Services', 'web', NULL, NULL),
(41, 39, 'SM-Visa Services', 'web', NULL, NULL),
(42, 39, 'SM-LLC Company Formation', 'web', NULL, NULL),
(43, 39, 'SM-Business Setup', 'web', NULL, NULL),
(44, 40, 'sm_our_services-edit', 'web', NULL, NULL),
(45, 41, 'sm_visa_services-edit', 'web', NULL, NULL),
(46, 42, 'sm_llc_company_formation-edit', 'web', NULL, NULL),
(47, 43, 'sm_business_setup-edit', 'web', NULL, NULL),
(48, 39, 'Other Pages', 'web', NULL, NULL),
(49, 0, 'Blogs', 'web', NULL, NULL),
(50, 49, 'Blogs-Blogs', 'web', NULL, NULL),
(51, 50, 'blogs-add', 'web', NULL, NULL),
(52, 50, 'blogs-edit', 'web', NULL, NULL),
(53, 50, 'blogs-delete', 'web', NULL, NULL),
(54, 50, 'blogs-status', 'web', NULL, NULL),
(55, 0, 'SEO', 'web', NULL, NULL),
(56, 0, 'Settings', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'web', '2021-10-20 00:39:06', '2021-10-20 00:39:06'),
(3, 'Test Role', 'web', '2021-11-27 04:31:58', '2021-11-27 04:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(17, 1),
(17, 3),
(18, 1),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` tinyint(4) DEFAULT NULL COMMENT '0 is supper admin , 1 is normal',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'Mr. Admin', 'admin@admin.com', '2021-10-20 00:39:08', '$2a$12$HiawbpK66hvszyzuHZ60JupLYbd0VZaODjFYu05zMBSpXAUm6jwdK', 1, '83HAE1lcuv8UjSCiDZkCL113LRpjcz4xBWdoa3zsx8BkAq9EWfl9JUoh83s1', '2021-10-20 00:39:08', '2021-10-22 01:37:00'),
(2, 1, 'Test User', 'test@user.com', NULL, '$2y$10$HE7ZMuE2w2Qedvm2VkcW1..uYN.KsMx620GQNG6zMQM37WGHYN/ea', 1, NULL, '2021-11-27 06:05:29', '2021-11-27 06:05:29');

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
