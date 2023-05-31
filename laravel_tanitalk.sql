-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 04:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_tanitalk`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_21_031224_create_tabel_penyakit', 2),
(6, '2023_05_21_031756_create_tabel_budidaya', 2),
(7, '2023_05_24_024437_create_tabel_formulasi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_budidaya`
--

CREATE TABLE `tabel_budidaya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_budidaya` varchar(255) NOT NULL,
  `jenis_budidaya` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_budidaya`
--

INSERT INTO `tabel_budidaya` (`id`, `nama_budidaya`, `jenis_budidaya`, `deskripsi`, `created_at`, `updated_at`, `gambar`) VALUES
(11, 'kopi', 'kopi', 'kopi', NULL, NULL, 'kopi'),
(12, '1', '1', '1', NULL, NULL, '1'),
(13, '2', '2', '2', NULL, NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_formulasi`
--

CREATE TABLE `tabel_formulasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pupuk` varchar(255) NOT NULL,
  `bentuk` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `manfaat` varchar(255) NOT NULL,
  `kemasan` varchar(255) NOT NULL,
  `penggunaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_formulasi`
--

INSERT INTO `tabel_formulasi` (`id`, `nama_pupuk`, `bentuk`, `warna`, `deskripsi`, `manfaat`, `kemasan`, `penggunaan`, `created_at`, `updated_at`) VALUES
(1, 'NPK COMPACTION DGW', 'Granul', 'Biru', 'Pupuk NPK Majemuk yang diproduksi menggunakan teknologi Compaction Compound dengan kandungan 15+15+15+TE untuk pertumbuhan dan hasil tanaman lebih berkualitas', 'Pupuk berteknologi Compaction Compound Unsur hara sesuai dengan waktu kebutuhan tanaman Konsistensi kandungan unsur hara makro & mikro disetiap butiran pupuk Mudah larut (mudah untuk aplikasi kocor pada tanaman) & mudah ditaburkan', 'Karung 25 Kg dan 50 Kg', 'Ditugal Ditaburkan dengan dosis 250-300 Kg/Ha Dikocorkan dengan dosis 2-4 Kg/200 L air Dibenamkan dalam alur mengelilingi batang tanaman', '2023-05-23 20:15:15', '2023-05-23 20:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penyakit`
--

CREATE TABLE `tabel_penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `jenis_penyakit` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_penyakit`
--

INSERT INTO `tabel_penyakit` (`id`, `nama_penyakit`, `jenis_penyakit`, `deskripsi`, `created_at`, `updated_at`, `gambar`) VALUES
(1, 'Layu Semai', 'Penyakit Kopi', 'Penyakit layu semai pada kopi disebabkan oleh jamur Fusarium sp. yang menyerang bibit kopi pada tahap awal pertumbuhannya. Jamur ini bisa menyebar melalui biji kopi yang sudah terinfeksi atau melalui media tanam yang terkontaminasi.', NULL, NULL, 'kopi_oke.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('petani','pengelola','pengguna') NOT NULL DEFAULT 'petani',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pak petani', 'petani@gmail.com', NULL, '$2y$10$nrMUgYicfHlXPA3GpIl8JuuBd/sYlAjAPaRLsMN.MK3M3QUuj4M8O', 'petani', NULL, '2023-05-19 23:04:34', '2023-05-19 23:04:34'),
(2, 'Pak pengelola', 'pengelola@gmail.com', NULL, '$2y$10$fCJC4prk9tqNT7vrp8giK.t18hmLjIPPSTvtgc08kz4p6bPpDNy3e', 'pengelola', NULL, '2023-05-19 23:04:34', '2023-05-19 23:04:34'),
(3, 'Pak pengguna', 'pengguna@gmail.com', NULL, '$2y$10$lDRoc3CKiLf4SJ46GoIuaOOmswt1pVvIa5ilD4wSL2uKW/H7OTyhq', 'pengguna', NULL, '2023-05-19 23:04:34', '2023-05-19 23:04:34'),
(6, 'malik', 'malik@gmail.com', NULL, '$2y$10$T5l3Qx9WhwKYiQOOR8cMTehT3pM.ko4VSTQPrK0hmvJFKezfIFK9i', 'petani', NULL, '2023-05-20 05:02:58', '2023-05-20 05:02:58');

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
-- Indexes for table `tabel_budidaya`
--
ALTER TABLE `tabel_budidaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_formulasi`
--
ALTER TABLE `tabel_formulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_budidaya`
--
ALTER TABLE `tabel_budidaya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tabel_formulasi`
--
ALTER TABLE `tabel_formulasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
