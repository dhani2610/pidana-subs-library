-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 11:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pidana_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_wa` varchar(255) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `expired_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `no_wa`, `id_paket`, `expired_date`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', 'superadmin', NULL, '$2y$10$RC07kinPd3eT5NoczoHq3eIjKvaMg1bmvioqQfxpNVBnsOKvjtiIW', NULL, '2024-09-13 15:06:22', '2025-04-20 08:32:42', '', 4, '2025-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `cover`, `title`, `deskripsi`, `file`, `created_at`, `updated_at`) VALUES
(1, '1745138251.jpg', 'PDF testing ya', 'testing pdf desc', 'bagan landscape.pdf', '2025-04-20 08:37:31', '2025-04-20 08:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` longtext NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `nama`, `link`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Group Konsul', 'https://www.youtube.com/embed/dBClCl9nRSk', 'testing', '2025-04-03 07:36:07', '2025-04-03 07:36:07'),
(3, 'Group Premium', 'https://www.youtube.com/embed/dBClCl9nRSk', 'testing', '2025-04-03 09:57:58', '2025-04-03 09:57:58'),
(4, 'Group testing123', 'https:\\\\facebook', 'test', '2025-04-03 13:20:45', '2025-04-03 13:20:59');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_24_184706_create_permission_tables', 1),
(5, '2020_09_12_043205_create_admins_table', 1),
(14, '2024_11_15_212822_create_spips_table', 2),
(15, '2024_11_20_132557_create_foto_deviasis_table', 3),
(16, '2025_04_03_134507_create_groups_table', 4),
(18, '2025_04_03_143804_create_pakets_table', 5),
(20, '2025_04_03_193800_add_column_masa_aktif_to_admins', 7),
(21, '2025_04_03_191645_create_transaksis_table', 8),
(22, '2025_04_05_135518_add_column_harga_coret_to_pakets', 9),
(24, '2025_04_20_145520_create_bukus_table', 10);

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
(1, 'App\\Models\\Admin', 1),
(3, 'App\\Models\\Admin', 7),
(3, 'App\\Models\\Admin', 8),
(3, 'App\\Models\\Admin', 9),
(3, 'App\\Models\\Admin', 10),
(3, 'App\\Models\\Admin', 11),
(3, 'App\\Models\\Admin', 12),
(3, 'App\\Models\\Admin', 13),
(3, 'App\\Models\\Admin', 14),
(3, 'App\\Models\\Admin', 15),
(3, 'App\\Models\\Admin', 16),
(3, 'App\\Models\\Admin', 17),
(3, 'App\\Models\\Admin', 18),
(3, 'App\\Models\\Admin', 19),
(3, 'App\\Models\\Admin', 20),
(3, 'App\\Models\\Admin', 21),
(3, 'App\\Models\\Admin', 22),
(3, 'App\\Models\\Admin', 23),
(3, 'App\\Models\\Admin', 24),
(3, 'App\\Models\\Admin', 25),
(3, 'App\\Models\\Admin', 26),
(3, 'App\\Models\\Admin', 27),
(3, 'App\\Models\\Admin', 28),
(3, 'App\\Models\\Admin', 29),
(3, 'App\\Models\\Admin', 30),
(3, 'App\\Models\\Admin', 31),
(3, 'App\\Models\\Admin', 32),
(3, 'App\\Models\\Admin', 33),
(3, 'App\\Models\\Admin', 34),
(3, 'App\\Models\\Admin', 35);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `benefit` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`benefit`)),
  `status` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `harga_coret` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `nama`, `type`, `harga`, `benefit`, `status`, `deleted_at`, `created_at`, `updated_at`, `harga_coret`) VALUES
(1, 'Basic Konsultasi', 'week', '20000', '[\"Benefit 1\",\"Benefit 2\",\"Benefit 3\"]', 1, NULL, '2025-04-03 08:27:34', '2025-04-03 09:50:07', '0'),
(2, 'Paket 2', 'month', '50000', '[\"Benefit 1\",\"Benefit 2\",\"Benefit 3\"]', 1, NULL, '2025-04-03 09:50:58', '2025-04-05 07:16:11', '200000'),
(3, 'Paket Premium', 'month', '50000', '[\"Benefit 1\",\"Benefit 2\",\"Benefit 3\",\"Vidio\",\"Document\",\"Audio\"]', 1, '2025-04-03 16:56:25', '2025-04-03 09:51:28', '2025-04-03 09:56:25', '0'),
(4, 'Paket Premium', 'month', '80000', '[\"Benefit 1\",\"Benefit 2\",\"Benefit 3\",\"Vidio\",\"Document\",\"Audio\"]', 1, NULL, '2025-04-03 09:56:07', '2025-04-05 07:00:42', '500000'),
(5, 'Fatigue', 'month', '20000', '[\"Benefit 1\"]', 1, '2025-04-20 14:55:57', '2025-04-20 07:55:45', '2025-04-20 07:55:57', '0');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(2, 'admin.create', 'admin', 'admin', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(3, 'admin.view', 'admin', 'admin', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(4, 'admin.edit', 'admin', 'admin', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(5, 'admin.delete', 'admin', 'admin', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(6, 'role.create', 'admin', 'role', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(7, 'role.view', 'admin', 'role', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(8, 'role.edit', 'admin', 'role', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(9, 'role.delete', 'admin', 'role', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(10, 'master.data.view', 'admin', 'master data', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(39, 'group.create', 'admin', 'group', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(40, 'group.view', 'admin', 'group', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(41, 'group.edit', 'admin', 'group', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(42, 'group.delete', 'admin', 'group', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(43, 'paket.create', 'admin', 'paket', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(44, 'paket.view', 'admin', 'paket', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(45, 'paket.edit', 'admin', 'paket', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(46, 'paket.delete', 'admin', 'paket', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(47, 'history.view.all', 'admin', 'history', '2025-04-03 07:06:18', '2025-04-03 07:06:18'),
(48, 'history.view.by.account', 'admin', 'history', '2025-04-03 07:06:19', '2025-04-03 07:06:19'),
(49, 'buku.create', 'admin', 'buku', '2025-04-20 08:12:38', '2025-04-20 08:12:38'),
(50, 'buku.view', 'admin', 'buku', '2025-04-20 08:12:38', '2025-04-20 08:12:38'),
(51, 'buku.edit', 'admin', 'buku', '2025-04-20 08:12:38', '2025-04-20 08:12:38'),
(52, 'buku.delete', 'admin', 'buku', '2025-04-20 08:12:38', '2025-04-20 08:12:38');

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
(1, 'superadmin', 'admin', '2024-09-13 15:06:22', '2024-09-13 15:06:22'),
(3, 'user', 'admin', '2024-09-14 06:17:19', '2024-09-14 06:17:19');

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
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 3),
(49, 1),
(50, 1),
(51, 1),
(52, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `order_id_midtrans` varchar(255) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `dari_tanggal` date NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `benefit` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`benefit`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
