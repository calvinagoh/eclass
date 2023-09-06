-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 07:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hwzh`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_assignments`
--

CREATE TABLE `class_assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_assignments`
--

INSERT INTO `class_assignments` (`id`, `class_code`, `title`, `description`, `attachment`, `type`, `created_at`, `updated_at`) VALUES
(1, 'CLS0001', 'TUGAS 1', 'Silahkan kerjakan 读一读 记一记 nomor 1 - 5', NULL, 'ASSIGNMENT', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
(2, 'CLS0001', 'LATIHAN 1', 'Silahkan kerjakan 读一读 记一记 nomor 6 - 10', NULL, 'EXERCISE', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
(3, 'CLS0002', 'TUGAS 1', 'Silahkan kerjakan 读一读 记一记 nomor 1 - 10', NULL, 'ASSIGNMENT', '2023-08-29 09:44:47', '2023-08-29 09:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `class_assignments_answers`
--

CREATE TABLE `class_assignments_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignment_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `forum_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`forum_id`, `title`, `forum_description`, `forum_image`, `class_code`, `created_at`, `updated_at`) VALUES
(1, 'HSK 1', 'Bagi murid CLS0001, Laoshi ada kasih referensi lain yaitu HSK 1. Tolong nanti dipahamin dan kerjakan latihan 1 ya', 'hsk1.png', 'CLS0001', '2023-08-29 09:44:47', '2023-08-29 09:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `forum_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`id`, `forum_id`, `comment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Okay laoshii', 'serlina', '2023-08-29 09:44:47', '2023-08-29 09:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `learning_classes`
--

CREATE TABLE `learning_classes` (
  `class_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_classes`
--

INSERT INTO `learning_classes` (`class_code`, `module_code`, `description`, `created_at`, `updated_at`) VALUES
('LEC', NULL, NULL, '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
('CLS0001', '1A', 'Kelas 1A [senin rabu jumat] [Jam 8 malam]', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
('CLS0002', '1A', 'Kelas 1A [selasa kamis sabtu] [Jam 8 malam]', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
('CLS0003', '1B', 'Kelas 1B [senin rabu jumat] [Jam 8 malam]', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
('CLS0004', '1B', 'Kelas 1B [selasa kamis sabtu] [Jam 8 malam]', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
('CLS0005', '1A', 'Kelas 1A [senin rabu jumat] [Jam 4 sore]', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
('CLS0006', '1B', 'Kelas 1B [senin rabu jumat] [Jam 4 sore]', '2023-08-29 09:44:47', '2023-08-29 09:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `learning_materials`
--

CREATE TABLE `learning_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_materials`
--

INSERT INTO `learning_materials` (`id`, `module_code`, `title`, `description`, `material_link`, `video_link`, `created_at`, `updated_at`) VALUES
(1, '1A', 'ALAT OLAHRAGA', 'Mempelajari Kosa kata mandarin yang berkaitan dengan alat olahraga', 'hanyu-1.pdf', 'https://youtu.be/MKcOg3lPXvg?list=RDMKcOg3lPXvg', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
(2, '1A', 'MATERI PINYIN', 'Mempelajari Kosa kata mandarin yang berkaitan dengan materi pinyin', 'hanyu-1.pdf', 'https://youtu.be/MKcOg3lPXvg?list=RDMKcOg3lPXvg', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
(3, '1A', 'PERKENALAN DIRI', 'Mempelajari Kosa kata mandarin yang berkaitan dengan perkenalan diri dan cara penggunaannya', 'hanyu-1.pdf', 'https://youtu.be/MKcOg3lPXvg?list=RDMKcOg3lPXvg', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
(4, '1A', 'PANGGILAN ORANGTUA', 'Mempelajari Kosa kata mandarin yang berkaitan dengan panggilan orangtua yang sopan', 'hanyu-1.pdf', 'https://youtu.be/MKcOg3lPXvg?list=RDMKcOg3lPXvg', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
(5, '1A', 'PENGENALAN WAKTU', 'Mempelajari Kosa kata mandarin yang berkaitan dengan pengenalan waktu', 'hanyu-1.pdf', 'https://youtu.be/MKcOg3lPXvg?list=RDMKcOg3lPXvg', '2023-08-29 09:44:47', '2023-08-29 09:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '01_create_roles_table', 1),
(2, '03_create_learning_classes_table', 1),
(3, '05_create_learning_materials_table', 1),
(4, '07_create_users_table', 1),
(5, '10_create_class_assignments_table', 1),
(6, '11_create_class_assignments_answers_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '20_create_forums_table', 1),
(11, '21_create_forum_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_code`, `description`, `created_at`, `updated_at`) VALUES
('LEC', 'LECTURER', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
('STD', 'STUDENT', '2023-08-29 09:44:47', '2023-08-29 09:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1A',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `email`, `password`, `full_name`, `role_code`, `status_code`, `class_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$8dJgt2FzJeTR5KwvSAmf1uXBVflHubeKE/GT6L82qOKUVt8Ybj2ee', 'Admin', 'LEC', '1', 'LEC', 'sK1ObsKDlsknaspeWV6fGFNLZpUzMCRl1SCuBZMi8VACwXKk9pNTa85RifRA', '2023-08-29 09:44:47', '2023-08-29 09:44:47'),
(2, 'serlina', 'serlina@gmail.com', '$2y$10$olId5ZA.eGcqlkRzShjYfuyaXqlibVQJ4mAe8i9W9Qpo/IUHQqeX.', 'Selina Xuan', 'STD', '1', 'CLS0001', NULL, '2023-08-29 09:44:47', '2023-08-29 09:44:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_assignments`
--
ALTER TABLE `class_assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_assignments_answers`
--
ALTER TABLE `class_assignments_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`forum_id`),
  ADD KEY `forums_class_code_index` (`class_code`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning_classes`
--
ALTER TABLE `learning_classes`
  ADD KEY `learning_classes_class_code_index` (`class_code`);

--
-- Indexes for table `learning_materials`
--
ALTER TABLE `learning_materials`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD KEY `roles_role_code_index` (`role_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`),
  ADD KEY `users_role_code_index` (`role_code`),
  ADD KEY `users_class_code_index` (`class_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_assignments`
--
ALTER TABLE `class_assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_assignments_answers`
--
ALTER TABLE `class_assignments_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `forum_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `learning_materials`
--
ALTER TABLE `learning_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_class_code_foreign` FOREIGN KEY (`class_code`) REFERENCES `learning_classes` (`class_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_class_code_foreign` FOREIGN KEY (`class_code`) REFERENCES `learning_classes` (`class_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_role_code_foreign` FOREIGN KEY (`role_code`) REFERENCES `roles` (`role_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
