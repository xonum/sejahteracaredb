-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 06:23 PM
-- Server version: 8.0.37
-- PHP Version: 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sejahteradb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `doctor_id` int DEFAULT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `doctor_id`, `booking_date`, `booking_time`, `reason`, `report`, `status`, `created_at`, `updated_at`) VALUES
(17, 61, 60, '2024-05-25', '15:30:00', 'sdad', '[\"http:\\/\\/127.0.0.1:8000\\/storage\\/reports\\/1716827999_s.png\"]', 'approved', '2024-05-23 22:43:48', '2024-05-27 14:39:59'),
(18, 61, 62, '2024-05-29', '11:00:00', 'dasdasd', NULL, 'pending', '2024-05-26 17:14:02', '2024-05-26 17:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `booking_settings`
--

CREATE TABLE `booking_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `disabled_dates` text COLLATE utf8mb4_unicode_ci,
  `time_interval` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_settings`
--

INSERT INTO `booking_settings` (`id`, `disabled_dates`, `time_interval`, `created_at`, `updated_at`) VALUES
(1, '[\"2024-05-30 to 2024-05-31\"]', 60, NULL, '2024-05-26 17:10:02');

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
(5, '2024_05_08_095356_create_bookings_table', 2),
(6, '2024_05_08_114850_create_booking_settings_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'patient',
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `matric_card` text COLLATE utf8mb4_unicode_ci,
  `profile_picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `designation`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `phone`, `address`, `matric_card`, `profile_picture`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', NULL, 'admin', NULL, NULL, 'admin@admin.com', NULL, '$2y$12$Kd7nXWX1DSG05eETZCVVMuo0hkFGcNDH56jXbTzQApmlOGHTbGjj6', NULL, NULL, NULL, NULL, 1, NULL, '2024-03-30 11:11:08', '2024-03-30 11:11:08', NULL),
(44, 'staff', NULL, 'azma', 'Binte', 'Azma', 'azma@staff.com', NULL, '$2y$12$C.NBsXTjIr2KFgCElLhOZuJHCyqgXoPbgpKZncj58jp5Hp7iEKdmG', '232323232323', 'lorem ipsums', NULL, 'http://127.0.0.1:8000/storage/profile_pictures/1716737687.png', 1, NULL, '2024-05-08 17:58:52', '2024-05-27 12:04:51', NULL),
(60, 'doctor', 'Dental Officer', 'jujeqi', 'DR. RISYDA', 'DAHARDIN', 'dosesuguh@mailinator.com', NULL, '$2y$12$MZcY6S.W/wVcE53.qZwI5O7ba6gqpz8AazLvXfGNV.93q0RR.IeMa', '603434343434', 'Natus pariatur Dolo2222', 'http://127.0.0.1:8000/storage/matric_cards/1716818976.jpg', 'http://127.0.0.1:8000/storage/profile_pictures/1716745526.png', 1, NULL, '2024-05-23 22:42:16', '2024-05-27 12:09:36', NULL),
(61, 'patient', NULL, 'PG-1721455', 'ewad', 'adwad', 'jk@gmail.com', NULL, '$2y$12$u.H7H8X2.9Q9Xy9PhFJx.OdYubkMBB1SxiO6qGk.HoAkBwHvbrk5i', '232323232323', '2sdsd2', 'http://127.0.0.1:8000/storage/matric_cards/1716818230.png', NULL, 1, NULL, '2024-05-23 22:43:02', '2024-05-27 11:57:10', NULL),
(62, 'doctor', 'Medical Officer', 'Lonzo_Gusikowski-Hane12', 'Reed', 'Haag', 'your.email+@gmail.com', NULL, '$2y$12$Hs7XC7I2S1YHZ35JzYb/5.pGGsgJdJdaPJ9wemUn9tieAak4dtaP6', '343434343434', '33163 Fern Port', NULL, 'http://127.0.0.1:8000/storage/profile_pictures/1716745519.png', 1, NULL, '2024-05-26 13:46:44', '2024-05-26 16:07:03', NULL),
(64, 'doctor', 'Dental Officer', 'dawdawd', 'awdaw', 'dawd', 'dawd@dawda.com', NULL, '$2y$12$pAFEqFhLKfc0n0cptB46RORohN3w5ur9vok7vvlHnwYvO6IKVAauC', '232323232323', NULL, NULL, 'http://127.0.0.1:8000/storage/profile_pictures/1716745506.png', 1, NULL, '2024-05-26 13:51:39', '2024-05-26 15:57:36', NULL),
(67, 'doctor', 'Admin Doctor', 'Amir_Senger', 'Terence', 'Kunde', 'tanvir.lakhau@live.iium.edu.my', NULL, '$2y$12$a/7Hw.cbt7Fuc3jgwTTSEO8y.QYkOD5MZUmZtOWI7jr8o0v4Frvni', '7473747472', '23754 Stanford Drives', NULL, 'http://127.0.0.1:8000/assets/images/default-pro.jpg', 1, NULL, '2024-05-26 16:04:40', '2024-05-26 16:08:28', NULL),
(68, 'patient', NULL, 'Johnathon35', 'Shyanne', 'Hammes', 'your.email+fakedata38943@gmail.com', NULL, '$2y$12$WZJqQ/HAWWFQf59MnAEyQ.maVYrKAyMOyZ7/vOk20hItgQQzcPJk6', '738-093-6641', NULL, NULL, NULL, 0, NULL, '2024-05-27 14:25:58', '2024-05-27 14:25:58', NULL),
(69, 'patient', NULL, 'Jammie_Durgan', 'Raoul', 'Hermiston', 'your.email+fakedata43995@gmail.com', NULL, '$2y$12$mpvaYlg5G8.Y/sjkSjjyquXlJPnfBSGGJQCxoOu1DWA6T9dcVfKry', '784-060-3451', NULL, NULL, NULL, 0, NULL, '2024-05-27 14:27:16', '2024-05-27 14:27:16', NULL),
(70, 'patient', NULL, 'Durward.Wilderman91', 'Lura', 'Deckow', 'your.email+fakedata40121@gmail.com', NULL, '$2y$12$FHD8zdtSln9RvMgtvPHuL.0WAVfGTdpBSf1aR55h./FRJU2UmbicS', '770-727-0100', NULL, NULL, NULL, 0, NULL, '2024-05-27 14:28:14', '2024-05-27 14:28:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `booking_settings`
--
ALTER TABLE `booking_settings`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `booking_settings`
--
ALTER TABLE `booking_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
