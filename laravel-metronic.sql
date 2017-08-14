-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2017 at 08:17 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-metronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aditiya K', 'aditiyak', 'wonxshelond@gmail.com', '$2y$10$nSf1yzAVUnYbH2QWWcJDnOGg26l/5w4GqutJAjWraoueoFfBobMGK', '70UafHfcqaLUYJv5VnlMbWmHKyhVR3zF5kKO4GfpOcpUnahFCH7ktUGXwKo2', '2017-08-14 09:30:07', '2017-08-14 13:16:07'),
(2, 'Aditiya K', '123123', 'wonx_shelond@yahoo.com', '$2y$10$L5pR6.FomzJ0gJhjTTC92eCr7n4mlW31j7NrFAf/iytI486AMUNQ2', 'AwYZNYFaDvJuYdPUlit5kPLGXnpPSZCaVCn0WRif5nhcde5PZl5eWIMzYkfS', '2017-08-14 10:09:55', '2017-08-14 10:09:55'),
(4, 'Aditiya K', 'aditiya', 'wonxshelond123@gmail.com', '$2y$10$soUESu68nvOxkj35B3HyNuSgxJFq8bppMo9W1N7Z5ypjFZrx9r.bi', 'jHDkJQjl5fUUyNcMY66B33rik7uW38pY2ezsCAPnxDkrhRg5F9hARiFuW9VR', '2017-08-14 11:25:26', '2017-08-14 11:25:26'),
(6, 'Aditiya K', 'wonxshelond', 'wonxshelond1234@gmail.com', '$2y$10$EwSxWKUMMD6za9ja77YPQeddsSS08jG0ZKSvLedSq3Mpo.MKtaWfm', 'jFNTLviXlSPKWXOiFd4xe2hmUW4m7n93NaZcIsUQRNAC1xXEgWUkqM9jztc9', '2017-08-14 11:32:35', '2017-08-14 11:32:35'),
(7, 'Chety Michelle', 'chety_michelle', 'chety.michelle@gmail.com', '$2y$10$eA.KeqWp34hMjxmu2rVAu.0sOPhLL2jD6J98o6EgcwCIAF05ZKVeS', 'KEQ1gwUbxJnvh6umqOn8cRHiLQezVKEiAjcIhjT1WIN0YtBd8Uj2blYt5weQ', '2017-08-14 12:06:14', '2017-08-14 12:06:14');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
