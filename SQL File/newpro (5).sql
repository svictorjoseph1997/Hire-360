-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 09:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_03_20_092517_create_table_projects', 1),
(8, '2019_03_27_092251_applied_projects', 2),
(10, '2019_04_06_140955_create_profile_hireling', 3),
(11, '2019_04_08_135628_create_feedback_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Victor Joseph', 'svictorjoseph@gmail.com', 'admin', '$2y$10$asywe8O6FN92NQ1TjfYgROrc8EYFLmlNtWf7ILi6qVo0hOwqs5Cga', NULL, '2019-03-25 02:40:52', '2019-03-25 02:40:52'),
(2, 'Victor Joseph q q', 'victor@email.com', 'hireling', '$2y$10$IpISQwSx7Tjn4uAffuVP4e1W2gvGar/DbXAuBqLgwEIJasuiJ9hEG', NULL, '2019-03-25 04:24:05', '2019-03-25 04:24:05'),
(3, 'Gagandeep', 'gaga@gmail.com', 'hireling', '$2y$10$NtK1UAXZKjJv7Y/1d2pfguNgW2VjYWBvZbbf2ria2jJ4mmb73dyge', NULL, '2019-03-25 13:43:10', '2019-03-25 13:43:10'),
(4, 'hirer', 'hirer@g.c', 'hirer', '$2y$10$n9FN1QpBOzZYRDBTXTNol.xIcCVheiIlB3iZp2qukFqRDunPE051i', NULL, '2019-03-26 16:05:58', '2019-03-26 16:05:58'),
(5, 'hireling', 'hireling@g.c', 'hireling', '$2y$10$X56Vw.ulVbkc/0XsW06YAO4Npa2Ep.ZjyRWihCTvG/kXZibYtNQ.W', NULL, '2019-03-26 16:18:01', '2019-03-26 16:18:01'),
(6, 'Victor Josepha', 'svictorjoseph@gmail.comaa', 'hirer', '$2y$10$JeI6cfvMyrmKlE1UUGCWoOBPlX5KJfOJDfpx5NZEPxn2DEwgAuNau', NULL, '2019-03-27 03:22:18', '2019-03-27 03:22:18'),
(7, 'Gagandeep', 'gagan@gmail.com', 'hireling', '$2y$10$smZHezrdAxl1q4UKEfzEVese3qzlBKupYetLYbefNYag4WY76EtbG', NULL, '2019-04-06 02:52:37', '2019-04-06 02:52:37'),
(9, 'Victor Joseph', 'victorjoseph@gmail.com', 'hirer', '$2y$10$lDg51ycc2Tq8zoQud0qaVeKapp.8YJrXFkBvJ8szRKbEICU8vRvHi', NULL, '2019-04-06 03:14:49', '2019-04-06 03:14:49'),
(10, 'abc', 'abc@gmail.com', 'hirer', '$2y$10$47HEF.XcSncWrPMI21Ju5esMlVd3mTeGliSttFnd5ddR2vGzOV07O', NULL, '2019-04-08 01:34:45', '2019-04-08 01:34:45'),
(11, 'xyz', 'xyz@gmail.com', 'hireling', '$2y$10$qSIu66AsJ4utQiylyceKB.5bxfg9Pdb4uTTC6so2xUfruIdmlexOO', NULL, '2019-04-08 01:36:04', '2019-04-08 01:36:04'),
(13, 'Gagan Paila', 'gagan@g.c', 'hirer', '$2y$10$ahpwVy.9oiXcefzBkCypAugv9r2clZvYeo5eQqlcb8YnHM0VxPcxG', NULL, '2019-04-08 21:05:34', '2019-04-08 21:05:34'),
(14, 'Anand Masih', 'anand@gmail.com', 'hirer', '$2y$10$TiYTllt9RAD5jDBdXmZXOOSnjogADL861tm2LnmklQQAbr6/IAn1K', NULL, '2019-04-08 21:07:34', '2019-04-08 21:07:34'),
(15, 'Samuel A', 'samuel@gmail.com', 'hirer', '$2y$10$7PgGIDfVYRGK3YGIDS6tGuV7lgdfIxSVEgokFsZtvLkJ7DxtbJDqy', NULL, '2019-04-08 21:08:53', '2019-04-08 21:08:53'),
(16, 'Usnik', 'usnik@gmail.com', 'hirer', '$2y$10$j/9dGz8H4muAxmIRf6DMkeNeVc.V8BxZWD7YrEoCrFHeUJpe.c4oS', NULL, '2019-04-08 21:10:47', '2019-04-08 21:10:47'),
(17, 'Job Daniel', 'job@gmail.com', 'hirer', '$2y$10$GXs1wlhzyCLnSv/RbxwCOO1w3hzuPD/CMLKbPvm1PXAd5y80IMgiy', NULL, '2019-04-08 21:13:22', '2019-04-08 21:13:22'),
(18, 'Ralfred', 'ralfred@gmail.com', 'hirer', '$2y$10$MxSDCkCgYmWIErdajQmPJucmMA4zqbix86tU0ixju0jd8f6MdjvZi', NULL, '2019-04-08 21:15:03', '2019-04-08 21:15:03'),
(19, 'Joefred', 'joefred@gmail.com', 'hirer', '$2y$10$WzNX3rB81DOsnGxgg3ncVOvnyOfz8OYcQhy1fbcoKIfVLAj3CwiLK', NULL, '2019-04-08 21:16:13', '2019-04-08 21:16:13'),
(20, 'Jestin', 'jestin@gmail.com', 'hirer', '$2y$10$gAWUC91w8djGvGFd/LMo0OooFF/rCbpNpWAVJpWYXRquoffNdvrUW', NULL, '2019-04-08 21:18:22', '2019-04-08 21:18:22'),
(21, 'Sehab', 'sehab@gmail.com', 'hirer', '$2y$10$8lbhvX8cbuyh3AciY0.zcOQYw.bLYMaP/x4ljis2.WvAy53jGI2b.', NULL, '2019-04-08 21:19:06', '2019-04-08 21:19:06'),
(22, 'Elvin', 'elvin@gmail.com', 'hirer', '$2y$10$CAtbTJHXOtXSHShfJ/EWe.oo5ibbr1pJgLyxneu1u.umTGx5wmgLe', NULL, '2019-04-08 21:21:17', '2019-04-08 21:21:17'),
(23, 'Ashish', 'ashish@gmail.com', 'hirer', '$2y$10$0B3mWtMaA3oefVjhbsCWzekosaw75ym3T2SKl8hU1YXWfPKIaIbYu', NULL, '2019-04-08 21:22:35', '2019-04-08 21:22:35'),
(24, 'Anoj', 'anoj@gmail.com', 'hireling', '$2y$10$VtFO3yIlwkhr5PiGzfSj.OTd4isJdzzapX/7hVTKfdwES16MQXCd6', NULL, '2019-04-08 21:24:50', '2019-04-08 21:24:50'),
(25, 'Ashish K', 'ashishk@gmail.com', 'hireling', '$2y$10$W4bTo7Nbu3Y9RtWaKKRAM.PbX/1K1jj9w4cjdpco3dn9UsLXcHGQC', NULL, '2019-04-08 21:26:24', '2019-04-08 21:26:24'),
(26, 'Ajith', 'ajith@gmail.com', 'hireling', '$2y$10$a5Odo2EaLZ/B9kBnCNm/XOEqxJBxMKuaRV9tNu1yNWJ/dAEBRDB2K', NULL, '2019-04-08 21:27:02', '2019-04-08 21:27:02'),
(27, 'Joel', 'joel@gmail.com', 'hireling', '$2y$10$mUH5ormZlZxMxDV1EbvYKOVxXqm5E.9p8DbUCtvSXU5I.Q6wCCGaS', NULL, '2019-04-08 21:27:40', '2019-04-08 21:27:40'),
(28, 'Benson', 'benson@gmail.com', 'hireling', '$2y$10$6hmXAM.qP./1oyBOYzB10uTfZ0eB84I5BcCyE32ZIlaIqJ9N.PKnq', NULL, '2019-04-08 21:28:28', '2019-04-08 21:28:28'),
(29, 'Reemil', 'reemil@gmail.com', 'hireling', '$2y$10$DJgJBXUjpRpcJiUsQW5rfu9dhFIyEpQTTHE9jwPs8mroVELo6ImW.', NULL, '2019-04-08 21:29:13', '2019-04-08 21:29:13'),
(30, 'Kalyan', 'kalyan@gmail.com', 'hireling', '$2y$10$DdTysL3PYo9F6uRxPJ0kJetRWM9q3okbg.OvARdBt4hm7gnDQUQ/u', NULL, '2019-04-08 21:29:42', '2019-04-08 21:29:42'),
(31, 'Eric', 'eric@gmail.com', 'hireling', '$2y$10$P15dPjn7iOTJ/gE79Gwpl./ytZnh4qDRXfZUns2/JWQDZ3AmvWAPy', NULL, '2019-04-08 21:30:17', '2019-04-08 21:30:17'),
(32, 'Vinod', 'vinod@gmail.com', 'hirer', '$2y$10$.mwaiJhYw21i9CFQz9WB.O7MUy3EyR3o0lLqIQXzgfUREwfkt8eo6', NULL, '2019-04-08 23:45:55', '2019-04-08 23:45:55'),
(33, 'Jeromie', 'jeromie@gmail.com', 'hireling', '$2y$10$bvacgoYHHHmuOpyiCmlwg.zP93ZSbPkmMEG4LYghejHt8XKnSUMhC', NULL, '2019-04-08 23:47:25', '2019-04-08 23:47:25'),
(34, 'jen', 'jen@gmail.com', 'hirer', '$2y$10$0h3iA5Mz30j1bGXXNVbb6e1tGnxIlfqeNjaX3KslMV8Cq0iGjYThy', NULL, '2019-04-09 01:42:11', '2019-04-09 01:42:11'),
(35, 'Victor Joseph A B', 'svictorjoseph@gmail.comqw', 'hirer', '$2y$10$OAYAX.W6ZWi.ekyIvRge6.gHTWXN6zCSCrQ6lB07oBnvSO3Fzg12.', NULL, '2019-04-11 13:33:56', '2019-04-11 13:33:56'),
(36, 'qwerty', 'qwerty@gmail.coma', 'hirer', '$2y$10$HDFUZlc6Ey2BVWK7AdeU4OeQ5yf1R6k8Z8ADYMytzTvFMmJ2/uGAO', NULL, '2019-04-13 07:26:58', '2019-04-13 07:26:58'),
(37, 'Annie', 'annie@gmail.com', 'hirer', '$2y$10$XXp21J3q7bCKxzh8t6nO5uAV1WoJltJLTJdWpdTzyJJJH3NjvjYZS', NULL, '2019-04-13 08:19:10', '2019-04-13 08:19:10'),
(38, 'Anand', 'anand1@gmail.com', 'hireling', '$2y$10$R4UCsgm4z8MxTpqYQrzQaeBC2ZfWML4aTU159P75na8RaOMeYqTTG', NULL, '2019-04-13 08:20:54', '2019-04-13 08:20:54');

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
