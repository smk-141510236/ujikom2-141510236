-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2017 at 10:15 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `kode_golongan`, `nama_golongan`, `besaran_uang`, `created_at`, `updated_at`) VALUES
(3, 'KG-1', 'golongan I', 1500, '2017-02-24 14:58:45', '2017-02-24 14:58:45'),
(4, 'KG-2', 'golongan II', 2000, '2017-02-24 14:59:02', '2017-02-24 14:59:02'),
(5, 'KG-3', 'golongan III', 2500, '2017-02-24 14:59:33', '2017-02-24 14:59:33'),
(6, 'KG-4', 'golongan IV', 3000, '2017-02-24 15:00:07', '2017-02-24 15:00:07'),
(7, 'KG-5', 'golongan V', 3500, '2017-02-24 15:00:30', '2017-02-24 15:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `kode_jabatan`, `nama_jabatan`, `besaran_uang`, `created_at`, `updated_at`) VALUES
(3, 'KJ-1', 'AdminGudang', 1500, '2017-02-24 15:01:00', '2017-02-24 15:01:00'),
(4, 'KJ-2', 'Manager', 2000, '2017-02-24 15:01:17', '2017-02-24 15:01:17'),
(5, 'KJ-3', 'Staf', 2500, '2017-02-24 15:01:46', '2017-02-24 15:01:46'),
(6, 'KJ-4', 'OB', 3000, '2017-02-24 15:02:02', '2017-02-24 15:02:02'),
(7, 'KJ-5', 'Satpam', 3500, '2017-02-24 15:02:19', '2017-02-24 15:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_lembur`
--

CREATE TABLE `kategori_lembur` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_lembur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori_lembur`
--

INSERT INTO `kategori_lembur` (`id`, `kode_lembur`, `jabatan_id`, `golongan_id`, `besaran_uang`, `created_at`, `updated_at`) VALUES
(4, 'KL-1', 3, 3, 1500, '2017-02-24 15:07:09', '2017-02-24 15:07:09'),
(5, 'KL-2', 4, 4, 2000, '2017-02-24 15:07:23', '2017-02-24 15:07:23'),
(6, 'KL-3', 5, 5, 2500, '2017-02-24 15:07:37', '2017-02-24 15:07:37'),
(7, 'KL-4', 3, 3, 3000, '2017-02-24 15:07:50', '2017-02-24 15:08:34'),
(8, 'KL-5', 7, 7, 3500, '2017-02-24 15:08:24', '2017-02-24 15:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `lembur_pegawai`
--

CREATE TABLE `lembur_pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_lembur_id` int(11) NOT NULL,
  `pegawai_id` int(10) UNSIGNED NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lembur_pegawai`
--

INSERT INTO `lembur_pegawai` (`id`, `kode_lembur_id`, `pegawai_id`, `jumlah_jam`, `created_at`, `updated_at`) VALUES
(3, 1, 3, 5, '2017-02-24 15:09:28', '2017-02-24 15:09:28'),
(4, 2, 4, 10, '2017-02-24 15:09:37', '2017-02-24 15:09:37'),
(5, 3, 5, 15, '2017-02-24 15:09:53', '2017-02-24 15:09:53'),
(6, 4, 6, 20, '2017-02-24 15:10:02', '2017-02-24 15:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_30_085521_create_table_jabatan', 1),
(4, '2017_01_30_090229_create_table_golongan', 1),
(5, '2017_01_30_092350_create_table_tunjangan', 1),
(6, '2017_01_30_094622_create_table_pegawai', 1),
(7, '2017_01_30_095303_create_table_lembur_pegawai', 1),
(8, '2017_01_30_101126_create_table_lembur_kategori_lembur', 1),
(9, '2017_01_30_102247_create_table_tunjangan_pegawai', 1),
(10, '2017_01_30_102914_create_table_penggajian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `user_id`, `jabatan_id`, `golongan_id`, `foto`, `created_at`, `updated_at`) VALUES
(3, '11111', 10, 3, 3, 'logo.png', '2017-02-24 15:03:20', '2017-02-24 15:03:20'),
(4, '22222', 11, 4, 4, 'logo.png', '2017-02-24 15:04:07', '2017-02-24 15:04:07'),
(5, '33333', 12, 5, 5, 'logo.png', '2017-02-24 15:04:42', '2017-02-24 15:04:42'),
(6, '44444', 13, 7, 6, 'logo.png', '2017-02-24 15:06:31', '2017-02-24 15:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `id` int(10) UNSIGNED NOT NULL,
  `tunjangan_pegawai_id` int(10) UNSIGNED NOT NULL,
  `jumlah_jam_lembur` int(11) NOT NULL,
  `jumlah_uang_lembur` int(11) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `status_pengambilan` tinyint(1) NOT NULL,
  `petugas_penerimaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan`
--

CREATE TABLE `tunjangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_tunjangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tunjangan`
--

INSERT INTO `tunjangan` (`id`, `kode_tunjangan`, `jabatan_id`, `golongan_id`, `status`, `jumlah_anak`, `besaran_uang`, `created_at`, `updated_at`) VALUES
(10, 'KT-1', 3, 3, 'menikah', 5, 1500, '2017-02-24 15:10:28', '2017-02-24 15:14:19'),
(11, 'KT-2', 4, 4, 'belum_menikah', 10, 2000, '2017-02-24 15:11:01', '2017-02-24 15:11:01'),
(12, 'KT-3', 5, 5, 'janda', 15, 2500, '2017-02-24 15:11:28', '2017-02-24 15:11:28'),
(13, 'KT-4', 6, 6, 'duda', 20, 3000, '2017-02-24 15:11:51', '2017-02-24 15:11:51'),
(14, 'KT-5', 7, 7, 'menikah', 25, 3500, '2017-02-24 15:12:15', '2017-02-24 15:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_pegawai`
--

CREATE TABLE `tunjangan_pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_tunjangan_id` int(10) UNSIGNED NOT NULL,
  `pegawai_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tunjangan_pegawai`
--

INSERT INTO `tunjangan_pegawai` (`id`, `kode_tunjangan_id`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(6, 10, 3, '2017-02-24 15:12:27', '2017-02-24 15:12:27'),
(7, 11, 4, '2017-02-24 15:12:33', '2017-02-24 15:12:33'),
(8, 12, 5, '2017-02-24 15:12:39', '2017-02-24 15:12:39'),
(9, 13, 6, '2017-02-24 15:12:46', '2017-02-24 15:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permision` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `permision`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rikodwiyanda', 'rikodwiyanda@yahoo.com', 'Admin', '$2y$10$amTXNYFvlKKrv.HcYf2P4.t6kcBbeAkQtZ0EMJkbTYbcjp8MSW0bS', 'azboafxjdpKetmif0xNdcR561TGf1GNqlgNEhNTbtplUVkVoXqIIefBKpOBE', '2017-02-21 18:26:25', '2017-02-23 20:38:59'),
(9, 'jaelani', 'jaelani@yahoo.com', 'HRD', '$2y$10$iGxPo9tKp/eUJphGXb/bT.F93MZB.izY/NZ2v3j8luWasPPZInBkO', NULL, '2017-02-24 04:47:54', '2017-02-24 04:47:54'),
(10, 'dwiyanda', 'dwiyanda@yahoo.com', 'Admin', '$2y$10$rwYzkxexYZU3srgfS7n1U.xIlvOQ.aE4YrOzGux8UqKHjjRR1nRlS', NULL, '2017-02-24 15:03:20', '2017-02-24 15:03:20'),
(11, 'riko', 'riko@yahoo.com', 'HRD', '$2y$10$IauluGMYNM3c6aucSS.AwOH5Z21Z/zmUJIliK3o6h/c9Z8ma9SHCi', NULL, '2017-02-24 15:04:07', '2017-02-24 15:04:07'),
(12, 'iko', 'iko@yahoo.com', 'Administrasi', '$2y$10$L1ShJwTgv1wss8QGLbh28.7noW1VP2fx5iCpwDIE9ZdaRuZPvqane', NULL, '2017-02-24 15:04:42', '2017-02-24 15:04:42'),
(13, 'dwi', 'dwi@yahoo.com', 'Pegawai', '$2y$10$buiArkZje27CmAOnX4ktteEmdnuyDko6cuqYk/mMp/K1OTFnvnic.', NULL, '2017-02-24 15:06:31', '2017-02-24 15:06:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `golongan_kode_golongan_unique` (`kode_golongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jabatan_kode_jabatan_unique` (`kode_jabatan`);

--
-- Indexes for table `kategori_lembur`
--
ALTER TABLE `kategori_lembur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_lembur_kode_lembur_unique` (`kode_lembur`),
  ADD KEY `kategori_lembur_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `kategori_lembur_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `lembur_pegawai`
--
ALTER TABLE `lembur_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lembur_pegawai_kode_lembur_id_unique` (`kode_lembur_id`),
  ADD KEY `lembur_pegawai_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_nip_unique` (`nip`),
  ADD UNIQUE KEY `pegawai_user_id_unique` (`user_id`),
  ADD KEY `pegawai_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `pegawai_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penggajian_tunjangan_pegawai_id_foreign` (`tunjangan_pegawai_id`);

--
-- Indexes for table `tunjangan`
--
ALTER TABLE `tunjangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tunjangan_kode_tunjangan_unique` (`kode_tunjangan`),
  ADD KEY `tunjangan_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `tunjangan_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `tunjangan_pegawai`
--
ALTER TABLE `tunjangan_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tunjangan_pegawai_kode_tunjangan_id_unique` (`kode_tunjangan_id`),
  ADD KEY `tunjangan_pegawai_pegawai_id_foreign` (`pegawai_id`);

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
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori_lembur`
--
ALTER TABLE `kategori_lembur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lembur_pegawai`
--
ALTER TABLE `lembur_pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tunjangan`
--
ALTER TABLE `tunjangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tunjangan_pegawai`
--
ALTER TABLE `tunjangan_pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori_lembur`
--
ALTER TABLE `kategori_lembur`
  ADD CONSTRAINT `kategori_lembur_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongan` (`id`),
  ADD CONSTRAINT `kategori_lembur_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`);

--
-- Constraints for table `lembur_pegawai`
--
ALTER TABLE `lembur_pegawai`
  ADD CONSTRAINT `lembur_pegawai_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongan` (`id`),
  ADD CONSTRAINT `pegawai_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`),
  ADD CONSTRAINT `pegawai_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `penggajian_tunjangan_pegawai_id_foreign` FOREIGN KEY (`tunjangan_pegawai_id`) REFERENCES `tunjangan_pegawai` (`id`);

--
-- Constraints for table `tunjangan`
--
ALTER TABLE `tunjangan`
  ADD CONSTRAINT `tunjangan_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongan` (`id`),
  ADD CONSTRAINT `tunjangan_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`);

--
-- Constraints for table `tunjangan_pegawai`
--
ALTER TABLE `tunjangan_pegawai`
  ADD CONSTRAINT `tunjangan_pegawai_kode_tunjangan_id_foreign` FOREIGN KEY (`kode_tunjangan_id`) REFERENCES `tunjangan` (`id`),
  ADD CONSTRAINT `tunjangan_pegawai_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
