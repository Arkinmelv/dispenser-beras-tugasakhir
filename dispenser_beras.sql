-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 09:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dispenser_beras`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pembelian`
--

CREATE TABLE `laporan_pembelian` (
  `id` int(10) NOT NULL,
  `id_pembelian` int(10) NOT NULL,
  `total` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_pembelian`
--

INSERT INTO `laporan_pembelian` (`id`, `id_pembelian`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 50000, '2021-03-04 20:32:54', '2021-03-04 20:32:54'),
(2, 2, 56000, '2021-03-04 20:33:05', '2021-03-04 20:33:05'),
(3, 3, 63000, '2021-03-14 21:40:49', '2021-03-14 21:40:49'),
(4, 4, 36000, '2021-03-14 21:41:55', '2021-03-14 21:41:55'),
(5, 5, 45000, '2021-03-14 21:42:01', '2021-03-14 21:42:01'),
(6, 6, 54000, '2021-03-14 21:42:32', '2021-03-14 21:42:32'),
(7, 7, 27000, '2021-03-14 22:55:29', '2021-03-14 22:55:29'),
(8, 8, 45000, '2021-03-14 22:55:38', '2021-03-14 22:55:38'),
(9, 9, 20000, '2021-03-15 20:57:41', '2021-03-15 20:57:41'),
(10, 10, 36000, '2021-03-15 21:07:23', '2021-03-15 21:07:23'),
(11, 11, 4000, '2021-03-15 21:29:15', '2021-03-15 21:29:15'),
(12, 12, 13500, '2021-03-15 21:37:24', '2021-03-15 21:37:24'),
(13, 13, 63000, '2021-03-18 01:43:25', '2021-03-18 01:43:25'),
(14, 14, 75000, '2021-03-18 01:45:57', '2021-03-18 01:45:57'),
(15, 15, 36000, '2021-03-18 01:53:10', '2021-03-18 01:53:10'),
(16, 16, 10000, '2021-03-26 08:43:57', '2021-03-26 08:43:57'),
(17, 17, 12000, '2021-03-26 08:51:03', '2021-03-26 08:51:03'),
(18, 18, 16000, '2021-03-26 09:00:44', '2021-03-26 09:00:44'),
(19, 19, 20000, '2021-04-03 08:38:46', '2021-04-03 08:38:46'),
(20, 20, 30000, '2021-04-17 05:46:48', '2021-04-17 05:46:48'),
(21, 21, 20000, '2021-04-17 05:48:28', '2021-04-17 05:48:28'),
(22, 22, 30000, '2021-04-17 05:48:36', '2021-04-17 05:48:36'),
(23, 33, 40000, '2021-04-17 05:49:26', '2021-04-17 05:49:26'),
(24, 24, 20000, '2021-04-19 09:10:02', '2021-04-19 09:10:02'),
(25, 25, 0, '2021-05-31 23:28:48', '2021-05-31 23:28:48'),
(26, 26, 0, '2021-05-31 23:28:51', '2021-05-31 23:28:51'),
(27, 27, 0, '2021-05-31 23:28:55', '2021-05-31 23:28:55'),
(28, 28, 0, '2021-05-31 23:28:59', '2021-05-31 23:28:59'),
(29, 29, 0, '2021-05-31 23:29:03', '2021-05-31 23:29:03'),
(30, 30, 0, '2021-05-31 23:29:07', '2021-05-31 23:29:07'),
(31, 31, 0, '2021-05-31 23:29:11', '2021-05-31 23:29:11'),
(32, 32, 0, '2021-05-31 23:29:14', '2021-05-31 23:29:14'),
(33, 35, 0, '2021-05-31 23:29:18', '2021-05-31 23:29:18'),
(34, 36, 0, '2021-05-31 23:29:22', '2021-05-31 23:29:22'),
(35, 39, 5000, '2021-05-31 23:29:48', '2021-05-31 23:29:48'),
(36, 41, 5000, '2021-05-31 23:32:41', '2021-05-31 23:32:41'),
(37, 40, 5000, '2021-05-31 23:34:34', '2021-05-31 23:34:34'),
(38, 38, 20000, '2021-06-01 10:54:12', '2021-06-01 10:54:12'),
(39, 42, 2000, '2021-06-01 10:54:16', '2021-06-01 10:54:16'),
(40, 43, 4000, '2021-06-01 10:54:20', '2021-06-01 10:54:20'),
(41, 44, 5000, '2021-06-01 10:54:25', '2021-06-01 10:54:25'),
(42, 45, 20000, '2021-06-01 10:54:29', '2021-06-01 10:54:29'),
(43, 49, 4000, '2021-06-01 10:55:17', '2021-06-01 10:55:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(10) NOT NULL,
  `nominal` int(11) NOT NULL,
  `berat` float DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `createdby` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `nominal`, `berat`, `harga`, `status`, `createdby`, `created_at`, `updated_at`) VALUES
(1, 0, 5, 10000, 'SUCCESS', 6, '2021-03-05 03:25:00', '2021-03-04 20:32:54'),
(2, 0, 7, 8000, 'SUCCESS', 6, '2021-03-05 03:30:32', '2021-03-04 20:33:05'),
(3, 0, 7, 9000, 'SUCCESS', 6, '2021-03-15 04:40:27', '2021-03-14 21:40:49'),
(4, 0, 4, 9000, 'SUCCESS', 6, '2021-03-15 04:41:30', '2021-03-14 21:41:55'),
(5, 0, 5, 9000, 'SUCCESS', 6, '2021-03-15 04:41:40', '2021-03-14 21:42:01'),
(6, 0, 6, 9000, 'SUCCESS', 6, '2021-03-15 04:42:20', '2021-03-14 21:42:32'),
(7, 0, 3, 9000, 'SUCCESS', 7, '2021-03-15 05:02:54', '2021-03-14 22:55:29'),
(8, 0, 5, 9000, 'SUCCESS', 7, '2021-03-15 05:02:54', '2021-03-14 22:55:38'),
(9, 0, 2, 10000, 'SUCCESS', 7, '2021-03-16 03:57:09', '2021-03-15 20:57:41'),
(10, 0, 4, 9000, 'SUCCESS', 8, '2021-03-16 04:06:38', '2021-03-15 21:07:23'),
(11, 0, 2, 2000, 'SUCCESS', 8, '2021-03-16 04:06:47', '2021-03-15 21:29:15'),
(12, 0, 3, 4500, 'SUCCESS', 9, '2021-03-16 04:06:55', '2021-03-15 21:37:24'),
(13, 0, 7, 9000, 'SUCCESS', 6, '2021-03-16 04:07:05', '2021-03-18 01:43:25'),
(14, 0, 15, 5000, 'SUCCESS', 6, '2021-03-18 08:44:59', '2021-03-18 01:45:57'),
(15, 0, 4, 9000, 'SUCCESS', 6, '2021-03-18 08:52:45', '2021-03-18 01:53:10'),
(16, 0, 5, 2000, 'SUCCESS', 6, '2021-03-19 05:59:22', '2021-03-26 08:43:57'),
(17, 0, 6, 2000, 'SUCCESS', 6, '2021-03-19 05:59:41', '2021-03-26 08:51:03'),
(18, 0, 8, 2000, 'SUCCESS', 6, '2021-03-19 05:59:41', '2021-03-26 09:00:44'),
(19, 0, 4, 5000, 'SUCCESS', 6, '2021-03-19 05:59:58', '2021-04-03 08:38:46'),
(20, 0, 3, 10000, 'SUCCESS', 6, '2021-03-19 05:59:58', '2021-04-17 05:46:48'),
(21, 0, 2, 10000, 'SUCCESS', 6, '2021-03-19 06:00:07', '2021-04-17 05:48:28'),
(22, 0, 3, 10000, 'SUCCESS', 6, '2021-03-19 06:00:32', '2021-04-17 05:48:36'),
(24, 0, 2, 10000, 'SUCCESS', 6, '2021-03-19 06:00:46', '2021-04-19 09:10:02'),
(25, 0, 3, NULL, 'SUCCESS', 6, '2021-03-19 06:00:46', '2021-05-31 23:28:48'),
(26, 0, 9, NULL, 'SUCCESS', 6, '2021-03-19 06:01:04', '2021-05-31 23:28:51'),
(27, 0, 1, NULL, 'SUCCESS', 6, '2021-03-19 06:01:04', '2021-05-31 23:28:54'),
(28, 0, 2, NULL, 'SUCCESS', 6, '2021-04-03 14:41:15', '2021-05-31 23:28:59'),
(29, 0, 4, NULL, 'SUCCESS', 6, '2021-04-03 14:41:15', '2021-05-31 23:29:03'),
(30, 0, 5, NULL, 'SUCCESS', 6, '2021-04-03 14:41:51', '2021-05-31 23:29:07'),
(31, 0, 3, NULL, 'SUCCESS', 6, '2021-04-03 14:42:19', '2021-05-31 23:29:11'),
(32, 0, 8, NULL, 'SUCCESS', 6, '2021-04-17 12:47:32', '2021-05-31 23:29:14'),
(33, 0, 4, 10000, 'SUCCESS', 6, '2021-04-17 12:47:56', '2021-04-17 05:49:26'),
(35, 0, 4, 0, 'SUCCESS', 6, '2021-05-30 12:18:50', '2021-05-31 23:29:18'),
(36, 0, 1, 0, 'SUCCESS', 6, '2021-05-30 12:18:50', '2021-05-31 23:29:22'),
(37, 10000, 1, 10000, NULL, NULL, '2021-06-01 06:11:25', '2021-06-01 06:11:25'),
(38, 20000, 2, 20000, 'SUCCESS', 6, '2021-06-01 06:12:07', '2021-06-01 10:54:12'),
(39, 5000, 1, 5000, 'SUCCESS', 6, '2021-06-01 06:14:16', '2021-05-31 23:29:47'),
(40, 5000, 1, 5000, 'SUCCESS', 6, '2021-06-01 06:16:05', '2021-05-31 23:34:34'),
(41, 5000, 0.5, 5000, 'SUCCESS', 6, '2021-06-01 06:24:45', '2021-05-31 23:32:41'),
(42, 2000, 0.2, 2000, 'SUCCESS', 6, '2021-06-01 06:33:36', '2021-06-01 10:54:16'),
(43, 4000, 0.4, 4000, 'SUCCESS', 6, '2021-06-01 06:33:36', '2021-06-01 10:54:20'),
(44, 5000, 0.5, 5000, 'SUCCESS', 6, '2021-06-01 06:34:19', '2021-06-01 10:54:25'),
(45, 20000, 2, 20000, 'SUCCESS', 6, '2021-06-01 06:34:19', '2021-06-01 10:54:29'),
(46, 20000, 2, 10000, 'pending', NULL, '2021-06-01 17:52:41', '2021-06-01 17:52:41'),
(47, 50000, 0.5, 10000, 'pending', NULL, '2021-06-01 17:52:41', '2021-06-01 17:52:41'),
(48, 25000, 2.5, 10000, 'pending', NULL, '2021-06-01 17:53:25', '2021-06-01 17:53:25'),
(49, 4000, 0.5, 10000, 'SUCCESS', 6, '2021-06-01 17:53:25', '2021-06-01 10:55:17'),
(50, 5000, 0.5, 10000, 'pending', NULL, '2021-06-01 17:57:45', '2021-06-01 17:57:45'),
(51, 27000, 2.7, 10000, 'pending', NULL, '2021-06-01 17:57:45', '2021-06-01 17:57:45'),
(52, 18000, 1.8, 10000, 'pending', NULL, '2021-06-01 17:58:25', '2021-06-01 17:58:25'),
(53, 9000, 0.9, 10000, 'pending', NULL, '2021-06-01 17:58:25', '2021-06-01 17:58:25'),
(54, 7000, 0.7, 10000, 'pending', NULL, '2021-06-02 04:48:50', '2021-06-02 04:48:50'),
(55, 4000, 400, 10000, 'pending', NULL, '2021-06-09 16:13:16', '2021-06-09 16:13:16'),
(56, 4000, 0.4, 10000, 'pending', NULL, '2021-06-09 16:31:15', '2021-06-09 16:31:15'),
(57, 20000, 4, 10000, 'pending', NULL, '2021-06-10 14:08:41', '2021-06-10 14:08:41'),
(58, 123, 1, 123, 'pending', NULL, '2021-06-10 14:11:57', '2021-06-10 14:11:57'),
(59, 1, 1, 1, 'pending', NULL, '2021-06-10 15:24:51', '2021-06-10 15:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riko Firmansyah', 'riko@gmail.com', '$2y$10$3l2UJN2Pi8SnbAbDo4sY5ezyUU4FcSSnv.O6IT1mOlTVYU9ytV.Cu', 'gpBrYPGt9oa9YN7TUMU7Mi8mMmmTDgNMZMleVnhACDvRkQIht9njHMfXvFzN', '2021-02-26 00:20:57', '2021-02-27 02:18:23'),
(6, 'Arkin Melvian Dwiansyah', 'arkin667@gmail.com', '$2y$10$ZLmICID5vlIU30dLOCMdmOifIl7lt978nDLE48SfIW9wV.ME4bz.S', '6EU3iJ6Izd9e3LxeOFMmpOb4BmPAPngxb0rozz6G4teQFPkidBhZXCEinwRZ', '2021-03-04 20:32:28', '2021-03-30 08:55:15'),
(7, 'Bagas', 'bagasajg@gmail.com', '$2y$10$jWkPoxLIYCF.aPXbjoJ3N.typosH61g5D6cGdwhpdjHBeTHmdF9Ky', 'f6zXGksP7DPyfUQsbcnVD8fmjp6WtV3nDgPkCaz6RdFGvyHGwkFhgF96pc15', '2021-03-14 22:34:44', '2021-03-14 22:34:44'),
(8, 'Arkinmelv', 'sikinsikin23@gmail.com', '$2y$10$Uir4I7tbnxRwZLiccIfIK.idclqpP0ew83u/QVivKDMxC.eaXogfm', '59pv5iCHc4maOhvTQMKqP0DPaah6BvYyLxOTaapIrao9lXnkHpMe5DKLgE5n', '2021-03-15 21:06:15', '2021-03-15 21:06:15'),
(9, 'alfian', 'alfian@gmail.com', '$2y$10$sxr8bEJzCdyeO2p1RBccVu46B9q4H6F75Yi/q9CEngCMGhjGejaxa', 'xYWMvj0Y8hUkBbzJGzkFWp3DPMh1B7N0nC3nk1KBrM7F5dJrHEzWahFUUVXC', '2021-03-15 21:36:52', '2021-03-15 21:36:52'),
(10, 'arkinnn', 'ajg@gmail.com', '$2y$10$qOrTphIBZOKBkbsCLjk66O.UqBvVfPhyt90YopvlcFTXbmJmMUhKG', NULL, '2021-03-24 21:00:00', '2021-03-24 21:00:00'),
(11, 'Anisa', 'anisa78@gmail.com', '$2y$10$LqV4.5hKDbru1LJcIiEuEuKuB4RV8u6HmlJPfrlMjXy3tY1SNz8ua', 'K8j4wK370NLPYuTxGRRDVqzRCPB8AhA7cutnuv9rgguvRjMFGEgvzUE4vycN', '2021-04-03 07:38:17', '2021-04-03 07:38:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_pembelian`
--
ALTER TABLE `laporan_pembelian`
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
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
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
-- AUTO_INCREMENT for table `laporan_pembelian`
--
ALTER TABLE `laporan_pembelian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
