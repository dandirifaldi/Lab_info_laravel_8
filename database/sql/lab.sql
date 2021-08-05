-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 02:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `type` varchar(60) NOT NULL,
  `manufacturer` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `id_status` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `harga` int(20) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `serial_number`, `type`, `manufacturer`, `category`, `kondisi`, `id_status`, `tgl_masuk`, `harga`, `lokasi`, `keterangan`) VALUES
(1, '1917HS01ZM99', 'G300S', 'Logitech', 'Mouse', 'Maintenance', 1, '2021-06-08', 220000, 'Lab C', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `kondisi` varchar(15) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_status` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `penulis`, `tahun`, `tipe`, `kondisi`, `jumlah_buku`, `tgl_masuk`, `id_status`, `lokasi`, `keterangan`) VALUES
(1, 'Modul Praktikum Konsep Pemrograman', 'Yurizal Susanto, S.Kom', 2019, 'Modul', 'Baik', 26, '2021-06-27', 1, 'Lab LIK C', '-'),
(3, 'Modul Praktikum Konsep Pemrograman', 'Yurizal Susanto, S.Kom', 2019, 'Modul', 'Baik', 25, '2021-06-27', 1, 'Lab LIK B', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_beli`
--

CREATE TABLE `tb_detail_beli` (
  `id_detail_beli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_toko` varchar(40) NOT NULL,
  `no_telp_toko` varchar(15) NOT NULL,
  `alamat_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_beli`
--

INSERT INTO `tb_detail_beli` (`id_detail_beli`, `id_barang`, `nama_toko`, `no_telp_toko`, `alamat_toko`) VALUES
(1, 1, 'Enter Komputer', '02130430333', 'Jl. Mangga Dua Raya lt. 3 No.31 - 32, RT.1/RW.12, South Mangga Dua, Sawah Besar, Central Jakarta City, Jakarta 10730');

-- --------------------------------------------------------

--
-- Table structure for table `tb_furniture`
--

CREATE TABLE `tb_furniture` (
  `id_furniture` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` varchar(15) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_status` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_furniture`
--

INSERT INTO `tb_furniture` (`id_furniture`, `merk`, `category`, `jumlah`, `kondisi`, `tgl_masuk`, `id_status`, `lokasi`, `keterangan`) VALUES
(1, 'Olympic', 'Meja', 20, 'Baik', '2021-06-27', 1, 'Lab LIK C', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_license`
--

CREATE TABLE `tb_license` (
  `id_license` int(11) NOT NULL,
  `soft_name` varchar(50) NOT NULL,
  `manufacturer` varchar(30) NOT NULL,
  `license_key` varchar(60) NOT NULL,
  `category` varchar(50) NOT NULL,
  `lcs_name` varchar(60) NOT NULL,
  `lcs_email` varchar(50) NOT NULL,
  `exp_date` date NOT NULL,
  `purchs_date` date NOT NULL,
  `purchs_cost` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_license`
--

INSERT INTO `tb_license` (`id_license`, `soft_name`, `manufacturer`, `license_key`, `category`, `lcs_name`, `lcs_email`, `exp_date`, `purchs_date`, `purchs_cost`, `note`) VALUES
(2, 'Photoshop 2021', 'Adobe', 'LKJHT-HT4XC-R2WYW-9Y3CM-AS9WS', 'Graphic Software', 'Mahizar Tamami', 'mahizar@yahoo.com', '2021-08-29', '2020-11-03', 80000, '-'),
(3, 'Office 2019', 'Microsoft', 'jkjbh-kj7fg-jb7dr-lh7sd-hj8ft', 'Office Software', 'Fariz Andi', 'fariz@web.com', '2023-12-30', '2021-06-07', 100000, '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `institusi_pemijam` varchar(50) NOT NULL,
  `no_telp_peminjam` varchar(15) NOT NULL,
  `alamat_peminjam` text NOT NULL,
  `tgl_meminjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(1, 'Tersedia'),
(2, 'Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'admin@local.com', NULL, '$2y$10$aIhCwP66K9G7SHhWOdYSCupRrk7pGY7LczUSF58k.JPDZg5qHDVcy', NULL, '2021-06-25 15:54:44', '2021-06-25 15:57:24');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_detail_beli`
--
ALTER TABLE `tb_detail_beli`
  ADD PRIMARY KEY (`id_detail_beli`);

--
-- Indexes for table `tb_furniture`
--
ALTER TABLE `tb_furniture`
  ADD PRIMARY KEY (`id_furniture`);

--
-- Indexes for table `tb_license`
--
ALTER TABLE `tb_license`
  ADD PRIMARY KEY (`id_license`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_detail_beli`
--
ALTER TABLE `tb_detail_beli`
  MODIFY `id_detail_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_furniture`
--
ALTER TABLE `tb_furniture`
  MODIFY `id_furniture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_license`
--
ALTER TABLE `tb_license`
  MODIFY `id_license` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
