-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 03:52 PM
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

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `mobile`, `userName`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi', 'Rahman', '01916881718', 'mehedi', 'mehedi.rahman01@northsouth.edu', NULL, '$2y$10$bzPij8Qtmoy19Z.Xzg9xC.ithidCyxyMYGIHAT7qVjTT0x0LpnovW', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `medicineId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `session_id`, `user_id`, `medicineId`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'hohUmBlJlrHCF89J0bD8CBYYdvokhtSfBtbiocJp', NULL, 2, 1, NULL, NULL),
(2, 'hohUmBlJlrHCF89J0bD8CBYYdvokhtSfBtbiocJp', NULL, 2, 4, '2021-01-14 04:20:27', '2021-01-14 04:20:27'),
(3, 'sUxfuMVvGNRxF10NjxFjd9cpBaAjSpFF27XANG47', NULL, 2, 1, '2021-01-15 08:20:01', '2021-01-15 08:20:01'),
(4, 'sUxfuMVvGNRxF10NjxFjd9cpBaAjSpFF27XANG47', NULL, 5, 1, '2021-01-15 08:47:26', '2021-01-15 08:47:26'),
(5, 'sUxfuMVvGNRxF10NjxFjd9cpBaAjSpFF27XANG47', NULL, 5, 1, '2021-01-15 08:48:48', '2021-01-15 08:48:48');

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
(2, 'Incepta Pharma', NULL, NULL),
(3, 'Acme', NULL, NULL),
(4, 'Drug International', NULL, NULL);

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
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicineImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `manufacturerId`, `medicineName`, `generic`, `type`, `quantity`, `dose`, `medicinePrice`, `stock`, `description`, `medicineImage`, `created_at`, `updated_at`) VALUES
(2, 4, 'Alatrol', 'Cetirizine Hydrochloride', 'Tablet', '10', '10 mg', 50.00, 100, 'It is indicated for the relief of symptoms associated with seasonal & perennial allergic rhinitis. It is also indicated for the treatment of the uncomplicated skin manifestations of chronic idiopathic urticaria and allergen induced asthma.', 'ALATROL-10MG-600x600.jpg-330701.jpg-823975.jpg', '2021-01-13 09:28:04', '2021-01-15 08:39:42'),
(3, 4, 'A-Cal', 'Calcium Carbonate', 'Chewable Tablet', '10', '500 mg', 50.00, 50, 'This is used for the treatment or prevention of calcium depletion in patients in whom dietary measures are inadequate. Conditions that may be associated with calcium deficiency include hypoparathyroidism, achlorhydria, chronic diarrhea, vitamin D deficiency, steatorrhea, sprue, pregnancy and lactation, menopause, pancreatitis, renal failure, alkalosis, and hyperphosphataemia. Calcium Carbonate is being used increasingly often to treat hyperphosphataemia in chronic renal failure as well as those on continuous ambulatory peritoneal dialysis (CAPD) and haemodialysis. Many patients are unable to tolerate sufficient doses for complete phosphate control and require additional measures such as stringent dietary phosphate restriction or relatively small doses of aluminium hydroxide.', 'A-Cal 500 mg Tab-400x400.jpg-68186.jpg', '2021-01-15 08:31:42', '2021-01-15 08:39:50'),
(4, 4, 'Acep', 'Paracetamol', 'Tablet', '10', '500 mg', 8.00, 10, 'Paracetamol is indicated for fever, common cold and influenza, headache, toothache, earache, bodyache, myalgia, neuralgia, dysmenorrhoea, sprains, colic pain, back pain, post-operative pain, postpartum pain, inflammatory pain and post vaccination pain in children. It is also indicated for rheumatic & osteoarthritic pain and stiffness of joints.', 'acep-qr-aceclofenac-paracetamol-tablets--500x500.jpg-96695.jpg', '2021-01-15 08:34:41', '2021-01-15 08:39:58'),
(5, 2, 'Zoxan', 'Nitazoxanide', 'Tablet', '18', '500 mg', 180.00, 12, 'Nitazoxanide is indicated for the treatment of diarrhea caused by Cryptosporidium parvum, Giardia lamblia and Entamoeba histolytica.', 'zoxan-500mg-tablet-ciprofloxacin-500x500.jpg-985995.jpg', '2021-01-15 08:38:56', '2021-01-15 08:38:56'),
(6, 2, 'Zivit', 'Vitamin B Complex + Zinc', 'Syrup', '1', '100 ml', 60.00, 12, 'It is indicated for the treatment and prevention of Vitamin B complex and Zinc deficiencies.', 'Zivit I img.png-584195.png', '2021-01-15 08:41:35', '2021-01-15 08:41:35');

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
(4, '2020_12_27_200753_add_more_fields_to_users_table', 1),
(5, '2021_01_04_193250_create_admins_table', 1),
(6, '2021_01_05_182423_create_manufacturers_table', 1),
(7, '2021_01_05_195453_create_medicines_table', 1),
(8, '2021_01_10_165518_add_fields_to_medicines_table', 1),
(9, '2021_01_13_215752_create_carts_table', 2),
(10, '2021_01_14_095948_create_carts_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `userName`, `email`, `gender`, `age`, `address`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi', 'Rahman', 'mehedi12', 'mehedi.rahman01@northsouth.edu', 'male', 25, 'Bashundhara R/A, Dhaka', '0172323822', '$2y$10$pi.7G8giZFSHBPXlYATRwedy5NhDIzfqvpEw1eNz5SuFtT4fgRQF6', NULL, '2021-01-13 09:14:33', '2021-01-15 08:35:34'),
(2, 'Rafi', 'Alam', 'rafi12', 'rafi123436@outlook.com', 'male', 25, 'Dhaka', '01916881718', '$2y$10$ygwLKCOkUmScjDc7ihk9ROOhhnyVk9dMAceuq.mWHAmbNjl.lobbW', NULL, '2021-01-15 08:49:27', '2021-01-15 08:49:27');

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
