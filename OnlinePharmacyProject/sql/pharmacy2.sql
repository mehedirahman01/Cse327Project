-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 08:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `type`, `mobile`, `userName`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi', 'Rahman', 'admin', '01916881718', 'mehedi', 'mehedi.rahman01@northsouth.edu', NULL, '$2y$10$bzPij8Qtmoy19Z.Xzg9xC.ithidCyxyMYGIHAT7qVjTT0x0LpnovW', '1', NULL, NULL, NULL);

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
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufacturerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `manufacturerName`, `created_at`, `updated_at`) VALUES
(1, 'Beximco Pharma', NULL, NULL),
(2, 'Incepta Pharma\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufacturerId` int(11) NOT NULL,
  `medicineName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicinePrice` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `manufacturerId`, `medicineName`, `generic`, `type`, `quantity`, `dose`, `medicinePrice`, `stock`, `created_at`, `updated_at`) VALUES
(1, 1, 'Amdocal plus 50', 'Atenolol Bp 25mg & Amlodipine BP', 'Tablet', '10', '50mg/tablet', 60.00, 10, NULL, NULL),
(2, 2, 'Boni', 'Calcium carbonate', 'Tablet', '16', '1250mg', 48.00, 15, '2021-01-05 16:10:31', '2021-01-05 16:10:31');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_27_195417_add_more_fields_to_users_table', 2),
(5, '2020_12_27_200753_add_more_fields_to_users_table', 3),
(6, '2021_01_04_193250_create_admins_table', 4),
(7, '2021_01_05_182032_create_medicines_table', 5),
(8, '2021_01_05_182423_create_manufacturers_table', 5),
(9, '2021_01_05_191945_create_medicines_table', 6),
(10, '2021_01_05_193107_create_medicines_table', 7),
(11, '2021_01_05_195453_create_medicines_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mehedi.rahman01@northsouth.edu', '$2y$10$5BCIrE56eh.m2aW4FQX.U.pEgaaYl03gocRfLRZysJLBh60LS2rTq', '2020-12-28 10:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lastName`, `userName`, `gender`, `age`, `address`, `phone`) VALUES
(3, 'Rafi', 'rafi123436@outlook.com', NULL, '$2y$10$d4AU6ub9qWlSleztx1vGnO6PfmdKBADbGyiXaihyZPDRPysIsjo1W', NULL, '2020-12-28 10:25:30', '2020-12-28 10:25:30', 'Alam', 'rafi', 'male', '20', 'Dhaka', '01916881718'),
(4, 'T', 'ghazali@hotmail.com', NULL, '$2y$10$mMli4HcYvXG09uh.SVpRFeO6sVuHSFBhb.qBoJk0IPdhKXIL3vXJu', NULL, '2021-01-04 12:08:54', '2021-01-04 12:08:54', 'Ghazali', 'mehedi', 'male', '20', 'Pidie', '01521333861'),
(5, 'Mehedi', 'mehedi.rahman01@northsouth.edu', NULL, '$2y$10$7sxwVPSkX38arhUFnwuvXOk4ny2oGynrcHazM33frjQoiU/q52P8a', NULL, '2021-01-08 12:28:35', '2021-01-08 12:28:35', 'Rahman', 'mehedi12', 'male', '25', 'Bashundhara R/A, Dhaka', '0172323823'),
(6, 'Mehedi', 'mehedi.radsdhman01@northsouth.edu', NULL, '$2y$10$LLuyeM6UXMHOJ6v5YS7Vne2JfbFIKyj0ZVV9H71QmhPA7a6rytjym', NULL, '2021-01-08 12:34:44', '2021-01-08 12:34:44', 'Rahman', 'mehedi45', 'male', '20', 'Bashundhara R/A, Dhaka', '0172323823'),
(7, 'Mehedi', 'mehedi.sdsd@northsouth.edu', NULL, '$2y$10$o3w921.1X.stuV6mzZwx/u5zQczRmxKRcSFzJZ3gZWmRWHuOQCtSe', NULL, '2021-01-08 12:36:18', '2021-01-08 12:36:18', 'Rahman', 'mehedi343', 'male', '20', 'Bashundhara R/A, Dhaka', '0172323823'),
(8, 'Mehedi', 'mehedi.rahdfdfman01@northsouth.edu', NULL, '$2y$10$Nn7trcmluYk/h.SK9anlY.CS.qY1/RmTglIg1QvBTzQYI0NN4tFuS', NULL, '2021-01-08 12:37:00', '2021-01-08 12:37:00', 'Rahman', 'rfdf', 'male', '20', 'Bashundhara R/A, Dhaka', '0172323823');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
