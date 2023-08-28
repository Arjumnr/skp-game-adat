-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2023 at 05:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_game_adat`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_09_171453_pertanyaan', 1),
(6, '2023_08_09_171559_opsi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opsi`
--

CREATE TABLE `opsi` (
  `id` bigint UNSIGNED NOT NULL,
  `pertanyaan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opsi`
--

INSERT INTO `opsi` (`id`, `pertanyaan_id`, `opsi1`, `opsi2`, `opsi3`, `opsi4`, `jawaban`, `created_at`, `updated_at`) VALUES
(3, '17', 'KA', 'GA', 'NGA', 'NGKA', 'opsi1', '2023-08-22 18:05:48', '2023-08-22 18:10:42'),
(4, '18', 'KA', 'GA', 'NGA', 'NGKA', 'opsi2', '2023-08-22 18:12:18', '2023-08-22 18:12:18'),
(5, '19', 'NGA', 'NGKA', 'PA', 'BA', 'opsi1', '2023-08-22 21:41:15', '2023-08-22 21:41:15'),
(6, '20', 'KA', 'GA', 'NGA', 'PA', 'opsi4', '2023-08-23 11:34:44', '2023-08-23 11:34:44'),
(7, '21', 'ca', 'ja', 'nya', 'nca', 'opsi1', '2023-08-23 11:35:48', '2023-08-23 11:35:48'),
(8, '22', 'ka', 'GA', 'wa', 'NGKA', 'opsi3', '2023-08-23 11:37:56', '2023-08-23 11:37:56'),
(9, '23', 'Balla Lompoa', 'Bola Soba', 'Saoraja', 'Atakkae', 'opsi2', '2023-08-28 08:44:14', '2023-08-28 08:44:14'),
(10, '24', 'Karampuang', 'Bola Soba', 'Saoraja Lapinceng', 'Sao Mario', 'opsi1', '2023-08-28 08:45:27', '2023-08-28 08:45:27'),
(11, '25', 'Bola Soba', 'Atakkae', 'Saoraja', 'Balla Lompoa', 'opsi4', '2023-08-28 08:46:18', '2023-08-28 08:46:18'),
(12, '26', 'Saoraja Lapinceng', 'Sao Mario', 'Bola Soba', 'Saoraja', 'opsi1', '2023-08-28 08:47:29', '2023-08-28 08:47:29'),
(13, '27', 'Saoraja', 'Saoraja Lapinceng', 'Atakkae', 'Karampuang', 'opsi1', '2023-08-28 08:48:40', '2023-08-28 08:48:40'),
(14, '28', 'Balla Lompoa', 'Karampuang', 'Bola Soba', 'Sao Mario', 'opsi4', '2023-08-28 08:52:47', '2023-08-28 08:52:47'),
(15, '29', 'Atekkae', 'Bola Soba', 'Saoraja Lapinceng', 'Sao Mario', 'opsi1', '2023-08-28 08:54:24', '2023-08-28 08:54:24'),
(16, '30', 'Gowa', 'Bone', 'Soppeng', 'Pinrang', 'opsi1', '2023-08-28 09:03:24', '2023-08-28 09:03:24'),
(17, '31', 'Bone', 'Barru', 'Sinjai', 'Soppeng', 'opsi2', '2023-08-28 09:04:23', '2023-08-28 09:04:23'),
(18, '32', 'Gowa', 'Maros', 'Sinjai', 'Pinrang', 'opsi3', '2023-08-28 09:05:10', '2023-08-28 09:05:10'),
(19, '33', 'Pinrang', 'Sinjai', 'Soppeng', 'Wajo', 'opsi4', '2023-08-28 09:05:57', '2023-08-28 09:05:57'),
(20, '34', 'Pinrang', 'Wajo', 'Sinjai', 'Bone', 'opsi1', '2023-08-28 09:06:41', '2023-08-28 09:06:41'),
(21, '35', 'Wajo', 'Sidrap', 'Soppeng', 'Sinjai', 'opsi3', '2023-08-28 09:08:00', '2023-08-28 09:08:00'),
(22, '36', 'Bone', 'Sinjai', 'Sidrap', 'Maros', 'opsi1', '2023-08-28 09:09:18', '2023-08-28 09:09:18');

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`, `level`, `path_image`, `created_at`, `updated_at`) VALUES
(17, 'Huruf apakah ini', '1', 'ka.png', '2023-08-22 17:32:48', '2023-08-22 17:41:54'),
(18, 'Huruf apakah ini', '1', 'ga.png', '2023-08-22 18:11:56', '2023-08-22 18:11:56'),
(19, 'Huruf apakah ini', '1', 'nga.png', '2023-08-22 21:40:11', '2023-08-22 21:40:11'),
(20, 'Huruf apakah ini', '1', 'pa.png', '2023-08-23 11:34:23', '2023-08-23 11:34:23'),
(21, 'Huruf apakah ini', '1', 'ca.png', '2023-08-23 11:35:24', '2023-08-23 11:35:24'),
(22, 'Huruf apakah ini', '1', 'wa.png', '2023-08-23 11:37:39', '2023-08-23 11:37:39'),
(23, 'Tebak Nama Rumah Adat', '2', 'bone_bola_soba.jpg', '2023-08-28 08:43:28', '2023-08-28 08:43:28'),
(24, 'Tebak Nama Rumah Adat', '2', 'sinjai_karampuang.jpeg', '2023-08-28 08:44:41', '2023-08-28 08:44:41'),
(25, 'Tebak Nama Rumah Adat', '2', 'gowa_balla_lompoa.jpg', '2023-08-28 08:45:48', '2023-08-28 08:45:48'),
(26, 'Tebak Nama Rumah Adat', '2', 'barru_saoraja_lapinceng.jpg', '2023-08-28 08:46:38', '2023-08-28 08:46:38'),
(27, 'Tebak Nama Rumah Adat', '2', 'pinrang_saoraja.jpg', '2023-08-28 08:47:58', '2023-08-28 08:47:58'),
(28, 'Tebak Nama Rumah Adat', '2', 'soppeng_sao_mario.jpg', '2023-08-28 08:49:45', '2023-08-28 08:49:45'),
(29, 'Tebak Nama Rumah Adat', '2', 'wajo_atakkae.JPG', '2023-08-28 08:53:57', '2023-08-28 08:53:57'),
(30, 'Rumah Adat Ini Berasal Dari', '3', 'gowa_balla_lompoa.jpg', '2023-08-28 09:03:02', '2023-08-28 09:03:02'),
(31, 'Rumah Adat Ini Berasal Dari', '3', 'barru_saoraja_lapinceng.jpg', '2023-08-28 09:03:41', '2023-08-28 09:03:41'),
(32, 'Rumah Adat Ini Berasal Dari', '3', 'sinjai_karampuang.jpeg', '2023-08-28 09:04:39', '2023-08-28 09:04:39'),
(33, 'Rumah Adat Ini Berasal Dari', '3', 'wajo_atakkae.JPG', '2023-08-28 09:05:25', '2023-08-28 09:05:25'),
(34, 'Rumah Adat Ini Berasal Dari', '3', 'pinrang_saoraja.jpg', '2023-08-28 09:06:21', '2023-08-28 09:06:21'),
(35, 'Rumah Adat Ini Berasal Dari', '3', 'soppeng_sao_mario.jpg', '2023-08-28 09:06:55', '2023-08-28 09:06:55'),
(36, 'Rumah Adat Ini Berasal Dari', '3', 'bone_bola_soba.jpg', '2023-08-28 09:08:49', '2023-08-28 09:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$mRzQlczV73/p2Isc06752OjFbBu2eFvHa8spMhfMJATN6wcR6GNfu', '2023-08-14 14:03:14', NULL);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opsi`
--
ALTER TABLE `opsi`
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
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opsi`
--
ALTER TABLE `opsi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
