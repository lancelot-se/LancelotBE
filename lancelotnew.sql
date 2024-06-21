-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2024 pada 13.58
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lancelotnew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Graphic Design', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(2, 'Social Media', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(3, 'Finance', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(4, 'IT & Engineering', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(5, 'Voice Over', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(6, 'Art', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(7, 'Copywriting', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(8, 'Media', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(9, 'Economy', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(10, 'Photography', '2024-06-20 01:15:31', '2024-06-20 01:15:31'),
(11, 'Makeup', '2024-06-20 01:15:31', '2024-06-20 01:15:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_salary` int(11) NOT NULL,
  `category_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`category_name`)),
  `job_deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jobs`
--

INSERT INTO `jobs` (`id`, `job_image`, `job_name`, `client_name`, `description`, `job_salary`, `category_name`, `job_deadline`, `created_at`, `updated_at`) VALUES
(1, 'pics/logodesigner.webp', 'Logo Designing', 'Holland Creatindo', 'Design compelling and memorable logos that represent a brands identity and values.', 300000, '\"[\\\"Graphic Design\\\",\\\"Art\\\"]\"', '2024-07-31', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(2, 'pics/website-branding.jpg', 'Website Branding', 'Phylo Co.', 'Create and implement cohesive branding strategies for websites to enhance brand identity and user engagement.', 700000, '\"[\\\"Social Media\\\"]\"', '2024-07-31', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(3, 'pics/copywriting.jpg', 'Copywriting', 'Yuzuki entertainment', 'Write persuasive and engaging content to promote products, services, or ideas effectively.', 650000, '\"[\\\"Copywriting\\\",\\\"Media\\\"]\"', '2024-07-31', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(4, 'pics/financial-audit.jpg', 'Auditing', 'Realty Tbk', 'Conduct thorough reviews of financial records and processes to ensure accuracy and compliance with regulations.', 900000, '\"[\\\"Finance\\\",\\\"Economy\\\"]\"', '2024-07-31', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(5, 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg', 'Photographer', 'DSC Club', 'Capture high-quality images for various purposes, including events, portraits, and promotional materials.', 400000, '\"[\\\"Photography\\\"]\"', '2024-07-31', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(6, 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg', 'Script Writing', 'Lovelia Management', 'Write engaging and creative scripts for films, television shows, advertisements, and other media productions.', 690000, '\"[\\\"Copywriting\\\"]\"', '2024-06-28', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(7, 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg', 'Makeup Artist', 'LV Boutique', 'Apply makeup to enhance clients appearance for events, photoshoots, and special occasions.', 1200000, '\"[\\\"Art\\\",\\\"Makeup\\\"]\"', '2024-07-20', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(8, 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg', 'Designing Logo', 'DYOR Beauty', 'Design compelling and memorable logos that represent a brands identity and values.', 400000, '\"[\\\"Graphic Design\\\",\\\"Art\\\"]\"', '2024-06-25', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(9, 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg', 'Video Voiceover', 'Black Owl', 'Provide professional voiceover services for videos, ensuring clear communication and engaging delivery.', 250000, '\"[\\\"Photography\\\"]\"', '2024-09-10', '2024-06-20 01:15:30', '2024-06-20 01:15:30'),
(10, 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg', 'Website Dev', 'Kin Truly Co.', 'Develop and maintain websites to ensure functionality, usability, and performance according to client specifications.', 3400000, '\"[\\\"IT\\\",\\\"Engineering\\\"]\"', '2024-07-31', '2024-06-20 01:15:30', '2024-06-20 01:15:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_01_051626_categories', 1),
(6, '2024_06_01_051657_jobs', 1),
(7, '2024_06_14_151559_create_table_active_jobs', 1),
(8, '2024_06_15_135938_create_table_history_jobs', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `table_active_jobs`
--

CREATE TABLE `table_active_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active_job_user_id` bigint(20) UNSIGNED NOT NULL,
  `active_job_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_job_client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_job_salary` int(11) NOT NULL,
  `active_job_category_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`active_job_category_name`)),
  `active_job_deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_active_jobs`
--

INSERT INTO `table_active_jobs` (`id`, `active_job_user_id`, `active_job_image`, `active_job_name`, `active_job_client_name`, `active_job_description`, `active_job_salary`, `active_job_category_name`, `active_job_deadline`, `created_at`, `updated_at`) VALUES
(1, 2, 'pics/copywriting.jpg', 'Copywriting', 'Yuzuki entertainment', 'Write persuasive and engaging content to promote products, services, or ideas effectively.', 650000, '[\"Copywriting\",\"Media\"]', '2024-07-31', '2024-06-20 01:21:43', '2024-06-20 01:21:43'),
(4, 1, 'pics/360_F_238524282_UFHlp9Ct3RjudSVHSQoI6yLACAgSQI2k.jpg', 'Photographer', 'DSC Club', 'Capture high-quality images for various purposes, including events, portraits, and promotional materials.', 400000, '[\"Photography\"]', '2024-07-31', '2024-06-20 01:23:40', '2024-06-20 01:23:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_history_jobs`
--

CREATE TABLE `table_history_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `history_job_user_id` bigint(20) UNSIGNED NOT NULL,
  `history_job_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history_job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history_job_client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history_job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `history_job_salary` int(11) NOT NULL,
  `history_job_category_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`history_job_category_name`)),
  `history_job_deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_history_jobs`
--

INSERT INTO `table_history_jobs` (`id`, `history_job_user_id`, `history_job_image`, `history_job_name`, `history_job_client_name`, `history_job_description`, `history_job_salary`, `history_job_category_name`, `history_job_deadline`, `created_at`, `updated_at`) VALUES
(1, 2, 'pics/website-branding.jpg', 'Website Branding', 'Phylo Co.', 'Create and implement cohesive branding strategies for websites to enhance brand identity and user engagement.', 700000, '[\"Social Media\"]', '2024-07-31', '2024-06-20 01:22:37', '2024-06-20 01:22:37'),
(2, 1, 'pics/logodesigner.webp', 'Logo Designing', 'Holland Creatindo', 'Design compelling and memorable logos that represent a brands identity and values.', 300000, '[\"Graphic Design\",\"Art\"]', '2024-07-31', '2024-06-20 01:23:55', '2024-06-20 01:23:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `address`, `email`, `email_verified_at`, `phone_number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sammuel Axel Zefanya', '2004-04-19', 'Jl Bogor', 'sammy@gmail.com', NULL, '082684627165', '$2y$12$1MxoHxVXqZYMl5hnnIesx.sP1P.sHnpbVEamq1L/wS11/mOTAK9ju', NULL, '2024-06-20 01:16:46', '2024-06-20 01:16:46'),
(2, 'Andrew Lee', '2004-09-10', 'Jl Binus', 'andrew@gmail.com', NULL, '082684627165', '$2y$12$QSCjmfXNX81WxnPXIZgnYOX6BhH8rBZP8I4iNCjlnxWFuNNAEtlIW', NULL, '2024-06-20 01:21:06', '2024-06-20 01:21:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `table_active_jobs`
--
ALTER TABLE `table_active_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_history_jobs`
--
ALTER TABLE `table_history_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_active_jobs`
--
ALTER TABLE `table_active_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `table_history_jobs`
--
ALTER TABLE `table_history_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
