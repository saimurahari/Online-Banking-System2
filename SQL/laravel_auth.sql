-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2022 at 03:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `fullname`, `email`, `accountnum`, `mobile`, `profile`, `balance`, `mpin`, `created_at`, `updated_at`) VALUES
(1, 'Sai Murahari', 'laxmisaimurari2001@gmail.com', '472231', '+917036670576', 'IMG_7763-1623131216.jpeg', '1391', '112233', '2022-04-08 12:30:58', '2022-04-08 12:30:58'),
(3, 'Rajesh', 'rajesh@gmail.com', '558213', '9876543210', 'IMG_7763-1623131216.jpeg', '2109', '112233', '2022-04-08 12:33:18', '2022-04-08 12:33:18'),
(4, 'sunil', 'sunil@gmail.com', '580276', '9988776655', 'IMG_7763-1623131216.jpeg', '-500', '112233', '2022-04-08 12:36:05', '2022-04-08 12:36:05'),
(5, 'Raghu', 'raghu@gmail.com', '949646', '9874321543', 'IMG_7763-1623131216.jpeg', '500', '112233', '2022-04-08 12:37:50', '2022-04-08 12:37:50'),
(6, 'Avinash', 'avinash@gmail.com', '158618', '9871234567', 'rajesh.jpeg', '1200', '112233', '2022-04-08 12:49:35', '2022-04-08 12:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `benificiaries`
--

CREATE TABLE `benificiaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `holdername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountholder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benificiaries`
--

INSERT INTO `benificiaries` (`id`, `holdername`, `accountholder`, `name`, `email`, `mobile`, `accountnum`, `bankname`, `ifsc`, `created_at`, `updated_at`) VALUES
(1, 'Rajesh', '558213', 'Sai Murahari', 'laxmisaimurari2001@gmail.com', '+917036670576', '472231', 'TSM Banking', 'TSM0123456', '2022-04-09 05:16:03', '2022-04-09 05:16:03'),
(3, 'Rajesh', '558213', 'sunil', 'sunil@gmail.com', '9988776655', '580276', 'TSM Banking', 'TSM0123456', '2022-04-09 05:32:43', '2022-04-09 05:32:43'),
(4, 'sunil', '580276', 'Sai Murahari', 'laxmisaimurari2001@gmail.com', '+917036670576', '472231', 'TSM Banking', 'TSM0123456', '2022-04-09 07:12:00', '2022-04-09 07:12:00'),
(5, 'Rajesh', '558213', 'Sai Murahari', 'laxmisaimurari2001@gmail.com', '+917036670576', '472231', 'TSM Banking', 'TSM0123456', '2022-04-09 22:10:52', '2022-04-09 22:10:52'),
(6, 'Sai Murahari', '472231', 'rajesh', 'rajesh@gmail.com', '9876543210', '558213', 'TSM Banking', 'TSM0123456', '2022-04-09 23:10:51', '2022-04-09 23:10:51');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_04_08_173417_create_users_table', 1),
(5, '2022_04_08_174009_create_accounts_table', 2),
(6, '2022_04_09_095512_create_benificiaries_table', 3),
(7, '2022_04_10_045844_create_transactions_table', 4),
(8, '2022_04_10_045856_create_transaction2s_table', 4);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction2s`
--

CREATE TABLE `transaction2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accountholder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction2s`
--

INSERT INTO `transaction2s` (`id`, `accountholder`, `date`, `credit`, `debit`, `accountnum`, `created_at`, `updated_at`) VALUES
(1, '472231', '2022-04-10 05:18:24', '200', 'null', '558213', NULL, NULL),
(2, '558213', '2022-04-10 05:20:16', '100', 'null', '472231', NULL, NULL),
(3, '472231', '2022-04-10 05:30:28', '500', 'null', '580276', NULL, NULL),
(4, '472231', '2022-04-10 05:32:14', '500', 'null', '580276', NULL, NULL),
(5, '558213', '2022-04-10 05:33:21', '532', 'null', '472231', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accountholder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `accountholder`, `date`, `credit`, `debit`, `accountnum`, `created_at`, `updated_at`) VALUES
(1, '472231', '2022-04-10 05:18:24', 'null', '200', '558213', NULL, NULL),
(2, '472231', '2022-04-10 05:20:16', 'null', '100', '558213', NULL, NULL),
(3, '580276', '2022-04-10 05:30:28', 'null', '500', '472231', NULL, NULL),
(4, '580276', '2022-04-10 05:32:14', 'null', '500', '472231', NULL, NULL),
(5, '472231', '2022-04-10 05:33:21', 'null', '532', '558213', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sai Murahari', 'laxmisaimurari2001@gmail.com', '112233', '2022-04-08 12:06:39', '2022-04-08 12:06:39'),
(2, 'Mounika', 'mounika@gmail.com', '112233', '2022-04-08 13:31:32', '2022-04-08 13:31:32'),
(3, 'Rajesh', 'rajesh@gmail.com', '112233', '2022-04-09 00:57:19', '2022-04-09 00:57:19'),
(4, 'sunil', 'sunil@gmail.com', '112233', '2022-04-09 07:08:07', '2022-04-09 07:08:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benificiaries`
--
ALTER TABLE `benificiaries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaction2s`
--
ALTER TABLE `transaction2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `benificiaries`
--
ALTER TABLE `benificiaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction2s`
--
ALTER TABLE `transaction2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
