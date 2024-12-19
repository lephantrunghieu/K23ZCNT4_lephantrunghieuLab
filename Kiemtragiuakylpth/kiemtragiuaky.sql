-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 02:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiemtragiuaky`
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
-- Table structure for table `lpth_ct_hoa_don`
--

CREATE TABLE `lpth_ct_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lpthMaHoaDon` bigint(20) UNSIGNED NOT NULL,
  `lpthMaSanPham` bigint(20) UNSIGNED NOT NULL,
  `lpthSoLuong` int(11) NOT NULL,
  `lpthDonGia` decimal(10,2) NOT NULL,
  `lpthThanhTien` decimal(15,2) NOT NULL,
  `lpthTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lpth_ct_hoa_don`
--

INSERT INTO `lpth_ct_hoa_don` (`id`, `lpthMaHoaDon`, `lpthMaSanPham`, `lpthSoLuong`, `lpthDonGia`, `lpthThanhTien`, `lpthTrangThai`, `created_at`, `updated_at`) VALUES
(5, 3, 1, 2, 699000.00, 1398000.00, 1, NULL, NULL),
(6, 3, 2, 1, 550000.00, 550000.00, 1, NULL, NULL),
(7, 4, 3, 3, 250000.00, 750000.00, 0, NULL, NULL),
(8, 4, 4, 1, 799000.00, 799000.00, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lpth_hoa_don`
--

CREATE TABLE `lpth_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lpthMaHoaDon` varchar(255) NOT NULL,
  `lpthMaKhachHang` bigint(20) UNSIGNED NOT NULL,
  `lpthNgayHoaDon` date NOT NULL,
  `lpthHoTenKhachHang` varchar(255) NOT NULL,
  `lpthEmail` varchar(255) NOT NULL,
  `lpthDienThoai` varchar(255) NOT NULL,
  `lpthDiaChi` varchar(255) NOT NULL,
  `lpthTongTriGia` double(8,2) NOT NULL,
  `lpthTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lpth_hoa_don`
--

INSERT INTO `lpth_hoa_don` (`id`, `lpthMaHoaDon`, `lpthMaKhachHang`, `lpthNgayHoaDon`, `lpthHoTenKhachHang`, `lpthEmail`, `lpthDienThoai`, `lpthDiaChi`, `lpthTongTriGia`, `lpthTrangThai`, `created_at`, `updated_at`) VALUES
(3, 'HD001', 1, '2024-12-20', 'Nguyễn Văn A', 'nguyenvana@gmail.com', '0123456789', '123 Đường ABC, TP. HCM', 15000.00, 1, NULL, NULL),
(4, 'HD002', 2, '2024-12-21', 'Trần Thị B', 'tranthib@gmail.com', '0987654321', '456 Đường XYZ, Hà Nội', 25000.00, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lpth_khach_hang`
--

CREATE TABLE `lpth_khach_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lpthMaKhachHang` varchar(255) NOT NULL,
  `lpthHoTenKhachHang` varchar(255) NOT NULL,
  `lpthEmail` varchar(255) NOT NULL,
  `lpthMatKhau` varchar(255) NOT NULL,
  `lpthDienThoai` varchar(255) NOT NULL,
  `lpthDiaChi` varchar(255) NOT NULL,
  `lpthNgayDangKy` date NOT NULL,
  `lpthTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lpth_khach_hang`
--

INSERT INTO `lpth_khach_hang` (`id`, `lpthMaKhachHang`, `lpthHoTenKhachHang`, `lpthEmail`, `lpthMatKhau`, `lpthDienThoai`, `lpthDiaChi`, `lpthNgayDangKy`, `lpthTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'KH001', 'Nguyễn Văn A', 'nguyenvana@gmail.com', '$2y$10$lP6dsxgOiZ5pjqNyFgsWyuw.Ac6VdxAx6oGYkNAaIcLQwuEH1Fccy', '0123456789', '123 Đường ABC, TP. HCM', '2024-12-20', 1, NULL, NULL),
(2, 'KH002', 'Trần Thị B', 'tranthib@gmail.com', '$2y$10$if9.rlT0vz6JEGh8p1PHruexJiIHvM5M1Aqw6gQXLN2pAgiOhbCKq', '0987654321', '456 Đường XYZ, Hà Nội', '2024-12-21', 1, NULL, NULL),
(3, 'KH003', 'Lê Phan C', 'lephanc@gmail.com', '$2y$10$T/WRgJle2Ffn99TqEpLTou4BXNDiYyextXI5XuuyVpDMBBohZiitG', '0912345678', '789 Đường DEF, Đà Nẵng', '2024-12-22', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lpth_loai_san_pham`
--

CREATE TABLE `lpth_loai_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lpthMaLoai` varchar(255) NOT NULL,
  `lpthTenLoai` varchar(255) NOT NULL,
  `lpthTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lpth_loai_san_pham`
--

INSERT INTO `lpth_loai_san_pham` (`id`, `lpthMaLoai`, `lpthTenLoai`, `lpthTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'L001', 'Cây Cảnh văn phòng', 0, NULL, NULL),
(2, 'L002', 'Cây Để Bàn', 0, NULL, NULL),
(3, 'L003', 'Cây Cảnh Phong Thủy', 0, NULL, NULL),
(4, 'L004', 'MC CÂY', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lpth_quan_tri`
--

CREATE TABLE `lpth_quan_tri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lpthTaiKhoan` varchar(255) NOT NULL,
  `lpthMatKhau` varchar(255) NOT NULL,
  `lpthTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lpth_quan_tri`
--

INSERT INTO `lpth_quan_tri` (`id`, `lpthTaiKhoan`, `lpthMatKhau`, `lpthTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'lephantrunghieu@gmail.com', '4418b35f872c1e074f07891b6ea40f70', 0, NULL, NULL),
(2, '0925222830', '4418b35f872c1e074f07891b6ea40f70', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lpth_san_pham`
--

CREATE TABLE `lpth_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lpthTenSanPham` varchar(255) NOT NULL,
  `lpthMaSanPham` varchar(255) NOT NULL,
  `lpthHinhAnh` varchar(255) NOT NULL,
  `lpthSoLuong` int(11) NOT NULL,
  `lpthDonGia` double(8,2) NOT NULL,
  `lpthMaLoai` bigint(20) UNSIGNED NOT NULL,
  `lpthTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lpth_san_pham`
--

INSERT INTO `lpth_san_pham` (`id`, `lpthTenSanPham`, `lpthMaSanPham`, `lpthHinhAnh`, `lpthSoLuong`, `lpthDonGia`, `lpthMaLoai`, `lpthTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Phú Quý Bò Viên', 'VP001', 'images/san-pham/Vp001.jpg', 100, 699000.00, 1, 0, NULL, NULL),
(2, 'Cây đại phú gia', 'VP002', 'images/san-pham/Vp002.jpg', 200, 550000.00, 1, 0, NULL, NULL),
(3, 'Cây hạnh phúc', 'VP003', 'images/san-pham/Vp003.jpg', 150, 250000.00, 1, 0, NULL, NULL),
(4, 'Cây hạnh phúc', 'VP004', 'images/san-pham/Vp004.jpg', 300, 799000.00, 1, 0, NULL, NULL),
(5, 'Cây thiết mộc lan', 'PT001', 'images/san-pham/PT001.jpg', 150, 590000.00, 3, 0, NULL, NULL),
(6, 'Cây Trường Sinh', 'PT002', 'images/san-pham/PT002.jpg', 100, 150000.00, 3, 0, NULL, NULL),
(7, 'Cây Hạnh Phúc', 'PT003', 'images/san-pham/PT003.jpg', 200, 299000.00, 3, 0, NULL, NULL),
(8, 'Cây Trường Sinh', 'PT004', 'images/san-pham/PT004.jpg', 300, 199000.00, 3, 0, NULL, NULL);

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2024_12_19_075314_create_lpht_quan_tri_table', 1),
(24, '2024_12_19_083848_create_lpth_loai_san_pham_table', 1),
(25, '2024_12_19_093936_create__l_p_t_h__s_a_n__p_h_a_m_table', 1),
(26, '2024_12_19_103049_create__l_p_t_h__k_h_a_c_h__h_a_n_g_table', 2),
(30, '2024_12_19_103651_create__l_p_t_h__h_o_a__d_o_n_table', 3),
(32, '2024_12_19_104446_create__l_p_t_h__c_t__h_o_a__d_o_n_table', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `lpth_ct_hoa_don`
--
ALTER TABLE `lpth_ct_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lpth_ct_hoa_don_lpthmahoadon_foreign` (`lpthMaHoaDon`),
  ADD KEY `lpth_ct_hoa_don_lpthmasanpham_foreign` (`lpthMaSanPham`);

--
-- Indexes for table `lpth_hoa_don`
--
ALTER TABLE `lpth_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lpth_hoa_don_lpthmahoadon_unique` (`lpthMaHoaDon`),
  ADD KEY `lpth_hoa_don_lpthmakhachhang_foreign` (`lpthMaKhachHang`);

--
-- Indexes for table `lpth_khach_hang`
--
ALTER TABLE `lpth_khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lpth_khach_hang_lpthmakhachhang_unique` (`lpthMaKhachHang`);

--
-- Indexes for table `lpth_loai_san_pham`
--
ALTER TABLE `lpth_loai_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lpth_quan_tri`
--
ALTER TABLE `lpth_quan_tri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lpth_quan_tri_lpthtaikhoan_unique` (`lpthTaiKhoan`);

--
-- Indexes for table `lpth_san_pham`
--
ALTER TABLE `lpth_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lpth_san_pham_lpthmasanpham_unique` (`lpthMaSanPham`),
  ADD KEY `lpth_san_pham_lpthmaloai_foreign` (`lpthMaLoai`);

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
-- AUTO_INCREMENT for table `lpth_ct_hoa_don`
--
ALTER TABLE `lpth_ct_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lpth_hoa_don`
--
ALTER TABLE `lpth_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lpth_khach_hang`
--
ALTER TABLE `lpth_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lpth_loai_san_pham`
--
ALTER TABLE `lpth_loai_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lpth_quan_tri`
--
ALTER TABLE `lpth_quan_tri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lpth_san_pham`
--
ALTER TABLE `lpth_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lpth_ct_hoa_don`
--
ALTER TABLE `lpth_ct_hoa_don`
  ADD CONSTRAINT `lpth_ct_hoa_don_lpthmahoadon_foreign` FOREIGN KEY (`lpthMaHoaDon`) REFERENCES `lpth_hoa_don` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lpth_ct_hoa_don_lpthmasanpham_foreign` FOREIGN KEY (`lpthMaSanPham`) REFERENCES `lpth_san_pham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lpth_hoa_don`
--
ALTER TABLE `lpth_hoa_don`
  ADD CONSTRAINT `lpth_hoa_don_lpthmakhachhang_foreign` FOREIGN KEY (`lpthMaKhachHang`) REFERENCES `lpth_khach_hang` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lpth_san_pham`
--
ALTER TABLE `lpth_san_pham`
  ADD CONSTRAINT `lpth_san_pham_lpthmaloai_foreign` FOREIGN KEY (`lpthMaLoai`) REFERENCES `lpth_loai_san_pham` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
