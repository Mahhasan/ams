-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 12:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `capacity` decimal(8,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `title`, `description`, `start_datetime`, `end_datetime`, `location`, `price`, `capacity`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 'Job Utsob', 'Job Fair', '2023-05-30 08:00:00', '2023-05-31 18:00:00', 'DSC, Birulia, Ashulia, Shavar', '100.00', '5000.00', '464688519.png', '2023-05-18 01:24:32', '2023-05-18 01:24:32');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department` varchar(255) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `registration_number` varchar(255) NOT NULL,
  `org_email` varchar(255) NOT NULL,
  `org_address` varchar(255) NOT NULL,
  `affiliation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `membership_category` varchar(255) NOT NULL,
  `membership_price` varchar(255) NOT NULL,
  `current_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `first_name`, `last_name`, `email`, `number`, `status`, `date`, `designation`, `department`, `organization_name`, `business_type`, `registration_number`, `org_email`, `org_address`, `affiliation`, `country`, `membership_category`, `membership_price`, `current_date`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Joelle', 'Welch', 'fetunejywo@mailinator.com', '865', 'Approved', '2008-03-31', 'Est iste minim dolor', 'Esse optio exercit', 'Gay and Rodriquez LLC', 'Et esse pariatur E', '86', 'pyfuh@mailinator.com', 'Eos neque maxime si', 'Reprehenderit in do', 'Deserunt repellendus', 'Executive Member', '205', NULL, NULL, '2023-03-05 03:25:39', '2023-03-05 05:15:32'),
(5, 2, 'Ariel', 'Petty', 'mahmud1@mailinator.com', '103', 'Approved', '2021-11-19', 'Non laboriosam et n', 'Consequatur cupidat', 'Lyons and Zimmerman Plc', 'Quo ex porro illo es', '405', 'nite@mailinator.com', 'Voluptas pariatur A', 'Adipisicing reprehen', 'Asperiores reprehend', 'Executive Member', '910', NULL, NULL, '2023-03-05 04:34:45', '2023-03-05 04:36:19'),
(37, 7, 'Mahmud', 'Hasan', 'rakibswe.522@gmail.com', '51', 'Approved', '15-Jul-2008', 'Nulla veniam ipsa', 'Similique magnam odi', 'Duncan and Strickland Co', 'Natus architecto exe', '762', 'dulon@mailinator.com', 'Test', 'Totam deleniti quaer', 'Nostrud non repudian', 'Associate Member', '169', '2023-03-28', '2023-04-27', '2023-03-28 02:06:58', '2023-03-28 02:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `membership_categories`
--

CREATE TABLE `membership_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `pricing` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership_categories`
--

INSERT INTO `membership_categories` (`id`, `category_name`, `pricing`, `created_at`, `updated_at`) VALUES
(1, 'General Member', '100', NULL, NULL),
(2, 'Associate Member', '200', NULL, NULL),
(3, 'Executive Member', '300', NULL, NULL),
(4, 'Full Member', '400', NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_01_090359_create_members_table', 1),
(6, '2023_03_02_064647_membership_category', 1),
(7, '2023_03_02_064921_membership_categories', 1),
(8, '2023_03_21_065353_create_subscriptions_table', 2),
(9, '2023_05_18_063243_create_events_table', 3),
(10, '2023_05_18_063124_create_registrations_table', 4);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ticket_quantity` int(10) UNSIGNED NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `payment_intent_id` varchar(255) NOT NULL,
  `is_paid` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `event_id`, `user_id`, `name`, `email`, `phone`, `ticket_quantity`, `total_amount`, `payment_intent_id`, `is_paid`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Mahmud', 'mhr.swe.522@gmail.com', '01738574987', 2, '200.00', 'Bkash', '0', '2023-05-18 01:25:48', '2023-05-18 01:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `expiry_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 7, '2023-03-21 14:02:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profile_pic` varchar(5000) DEFAULT NULL,
  `address` varchar(512) DEFAULT NULL,
  `bio` varchar(512) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `number`, `email_verified_at`, `password`, `role`, `profile_pic`, `address`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahmud', 'Hasan', 'hasan@gmail.com', '123455', NULL, '$2y$10$ustoyz4vz5EGtsRQBErgw.1XEbD6aabkd/SJL70Qu6DPETJwKqgHK', 'admin', NULL, NULL, NULL, NULL, '2023-03-05 03:22:25', '2023-03-05 03:22:25'),
(2, 'Ariel', 'Petty', 'mahmud1@mailinator.com', '315', NULL, '$2y$10$Ir8yNYUYXw7sLaFmOT5cJ.MtGylP.LCciLagh/L9gbSAFHs27sbWu', 'user', '20230518033531.jpg', NULL, 'dfb cdsgjf fhjgfjf hjsdgfjk fsdhgfbfjskdf kjsdhfksjdfhjksdf jksdfghsjkdf kjsdfkjsdfb', NULL, '2023-03-05 03:33:02', '2023-05-17 21:35:31'),
(3, 'Jannatul', 'fdggf', 'dev2@skill.jobs', '4545654', NULL, '$2y$10$sXCNUkKctN/ziUfrMTbUXepQfDKNS0D6FSfqjGYI2NKIbeJFpi2hq', 'user', NULL, NULL, NULL, NULL, '2023-03-05 04:56:44', '2023-03-05 04:56:44'),
(4, 'Rakib', 'Hasan', 'fgs.se2@daffodilvarsity.edu.bd', '01738574987', NULL, '$2y$10$Ut1BtdjlmFlxRCgSdoXrHezfK8xb.YZCCBazg87KHvgZd6R1/Kqb2', 'admin', '20230321093147.jpg', 'Addresstryhrtyrt', 'AMS is a global leader in providing innovative technology solutions to businesses worldwide. With a focus on customer satisfaction, we offer a wide range of services including software development, ', NULL, '2023-03-05 05:12:47', '2023-03-21 03:31:47'),
(5, 'tgdfg', 'dfgdf', 'gdfgdf@fdd', '56456456', NULL, '$2y$10$CZ.sC47EbliFWWm0Y9IAL.h8z5WKb8WgEwcncWOG8l6la9PtpLsPe', 'user', NULL, NULL, NULL, NULL, '2023-03-05 05:18:53', '2023-03-05 05:18:53'),
(7, 'Mahmud', 'Hasan', 'rakibswe.522@gmail.com', '01874121212', NULL, '$2y$10$Ks8u4CRL3n/Fxp3tR2ZnvekBXlZXaDV1I8M.82QdPfUL2n2I115g.', 'user', '20230328080943.png', NULL, 'AMS is a global leader in providing innovative technology solutions to businesses worldwide. With a focus on customer satisfaction, we offer a wide range of services including software development, ', NULL, '2023-03-05 06:40:27', '2023-03-28 02:09:43'),
(8, 'Jannat', 'Naim', 'research.trainee@daffodilvarsity.edu.bd', '12345678', NULL, '$2y$10$6uWuj6YHcUdRMWsRcHS0.e6q/JUEKKxXQnBGEQ/QRZtF49chDTAnK', 'user', NULL, NULL, NULL, NULL, '2023-03-22 02:41:22', '2023-03-22 02:41:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_categories`
--
ALTER TABLE `membership_categories`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registrations_event_id_foreign` (`event_id`),
  ADD KEY `registrations_user_id_foreign` (`user_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `membership_categories`
--
ALTER TABLE `membership_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `registrations_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registrations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
