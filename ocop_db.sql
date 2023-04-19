-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 19, 2023 lúc 08:38 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ocop_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `can_bo_quan_lies`
--

DROP TABLE IF EXISTS `can_bo_quan_lies`;
CREATE TABLE IF NOT EXISTS `can_bo_quan_lies` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `can_bo_quan_lies_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cap_duyets`
--

DROP TABLE IF EXISTS `cap_duyets`;
CREATE TABLE IF NOT EXISTS `cap_duyets` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tencapduyet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cap_duyets`
--

INSERT INTO `cap_duyets` (`id`, `tencapduyet`, `created_at`, `updated_at`) VALUES
(1, 'Cấp xã', NULL, NULL),
(2, 'Cấp huyện', NULL, NULL),
(3, 'Cấp tỉnh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_vi_duyets`
--

DROP TABLE IF EXISTS `don_vi_duyets`;
CREATE TABLE IF NOT EXISTS `don_vi_duyets` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tendonvi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_duyet_id` int(20) UNSIGNED DEFAULT NULL,
  `can_bo_quan_li_id` int(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `don_vi_duyets_cap_duyet_id_foreign` (`cap_duyet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ho_sos`
--

DROP TABLE IF EXISTS `ho_sos`;
CREATE TABLE IF NOT EXISTS `ho_sos` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TrangThai` tinyint(1) NOT NULL,
  `SanPham` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TenDonVi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BieuTuong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GiayDKKD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NgayDKKD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoDKKD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaSoThue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChiXuong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChiCty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VonDieuLe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MoTaQuyCachSanPham` text COLLATE utf8mb4_unicode_ci,
  `TinhTrangCongBo` text COLLATE utf8mb4_unicode_ci,
  `LoaiHinhDangKySoHuuTriTue` text COLLATE utf8mb4_unicode_ci,
  `LichSuHinhThanh` text COLLATE utf8mb4_unicode_ci,
  `LyDoThanhLap` text COLLATE utf8mb4_unicode_ci,
  `GiaTriSanPham` text COLLATE utf8mb4_unicode_ci,
  `DatvaVanPhong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DatSanXuat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NguonDien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NguonNuoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhuongTienVanTai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhuongTienTruyenThong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KetQuaBanHang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ChiPhi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DoanhThu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NhanLuc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NguonCungCapNguyenLieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MucDoHoatDongSanXuat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThiTruong` text COLLATE utf8mb4_unicode_ci,
  `MucDoBanSanPham` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DoiTuongKhachHang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LoaiHinhGopVon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChiSanXuat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhuongAnKinhDoanh` text COLLATE utf8mb4_unicode_ci,
  `QuyTrinhSanXuat` text COLLATE utf8mb4_unicode_ci,
  `HoTroDaoTao` text COLLATE utf8mb4_unicode_ci,
  `HoTroKhac` text COLLATE utf8mb4_unicode_ci,
  `TanSuatHopMat` text COLLATE utf8mb4_unicode_ci,
  `CachChiaTien` text COLLATE utf8mb4_unicode_ci,
  `ThachThuc` text COLLATE utf8mb4_unicode_ci,
  `NhuCauHoTro` text COLLATE utf8mb4_unicode_ci,
  `SoLuongThanhVien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NganhNghe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NhanSu` text COLLATE utf8mb4_unicode_ci,
  `TongDienTichDat` text COLLATE utf8mb4_unicode_ci,
  `SoDoToChuc` text COLLATE utf8mb4_unicode_ci,
  `ChucNangNhiemVuNhanSu` text COLLATE utf8mb4_unicode_ci,
  `DanhGiaThiTruong` text COLLATE utf8mb4_unicode_ci,
  `DanhGiaKhaNangThamGiaThiTruong` text COLLATE utf8mb4_unicode_ci,
  `CanCuPhapLy` text COLLATE utf8mb4_unicode_ci,
  `PhanTichChung` text COLLATE utf8mb4_unicode_ci,
  `PhanTichCanhTranh` text COLLATE utf8mb4_unicode_ci,
  `MucTieuChienLuoc` text COLLATE utf8mb4_unicode_ci,
  `HoatDongSanXuat` text COLLATE utf8mb4_unicode_ci,
  `KenhPhanPhoi` text COLLATE utf8mb4_unicode_ci,
  `KeHoachXucTienThuongMai` text COLLATE utf8mb4_unicode_ci,
  `KeHoachMarketing` text COLLATE utf8mb4_unicode_ci,
  `CoSoHaTang` text COLLATE utf8mb4_unicode_ci,
  `TrangThietBi` text COLLATE utf8mb4_unicode_ci,
  `NhanLucDieuChinh` text COLLATE utf8mb4_unicode_ci,
  `DieuKienKhac` text COLLATE utf8mb4_unicode_ci,
  `NhuCauVon` text COLLATE utf8mb4_unicode_ci,
  `PhuongAnHuyDong` text COLLATE utf8mb4_unicode_ci,
  `TongDoanhThu` text COLLATE utf8mb4_unicode_ci,
  `TongChiPhi` text COLLATE utf8mb4_unicode_ci,
  `LoiNhuan` text COLLATE utf8mb4_unicode_ci,
  `PhuongAnTaiChinhKhac` text COLLATE utf8mb4_unicode_ci,
  `CoCauToChuc` text COLLATE utf8mb4_unicode_ci,
  `CongDong` text COLLATE utf8mb4_unicode_ci,
  `HoatDongKeToan` text COLLATE utf8mb4_unicode_ci,
  `TinhHinhTiepThi` text COLLATE utf8mb4_unicode_ci,
  `PhuongAnBaoVeMoiTruong` text COLLATE utf8mb4_unicode_ci,
  `loai_hinh_to_chuc_id` int(20) UNSIGNED DEFAULT NULL,
  `phieu_dang_ki_id` int(20) UNSIGNED DEFAULT NULL,
  `don_vi_duyet_id` int(20) UNSIGNED DEFAULT NULL,
  `user_id` int(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ho_sos_loai_hinh_to_chuc_id_foreign` (`loai_hinh_to_chuc_id`),
  KEY `ho_sos_phieu_dang_ki_id_foreign` (`phieu_dang_ki_id`),
  KEY `ho_sos_don_vi_duyet_id_foreign` (`don_vi_duyet_id`),
  KEY `ho_sos_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hinh_to_chucs`
--

DROP TABLE IF EXISTS `loai_hinh_to_chucs`;
CREATE TABLE IF NOT EXISTS `loai_hinh_to_chucs` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_hinh_to_chucs`
--

INSERT INTO `loai_hinh_to_chucs` (`id`, `ten`, `created_at`, `updated_at`) VALUES
(1, 'Doanh nghiệp tư nhân', NULL, NULL),
(2, 'Công ty trách nhiệm hữu hạn', NULL, NULL),
(3, 'Công ty cổ phần', NULL, NULL),
(4, 'Công ty hợp danh', NULL, NULL),
(5, 'Doanh nghiệp nhà nước', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_02_20_032555_create_sessions_table', 1),
(24, '2023_03_13_031339_create_don_vi_hanh_chinh_tinhs_table', 1),
(25, '2023_03_13_031356_create_don_vi_hanh_chinh_huyens_table', 1),
(26, '2023_03_13_031404_create_don_vi_hanh_chinh_xas_table', 1),
(27, '2023_03_13_033403_create_doanh_nghieps_table', 1),
(28, '2023_03_13_033501_create_ho_sos_table', 1),
(29, '2023_03_13_033804_create_nguoi_dai_diens_table', 1),
(30, '2023_03_13_033926_create_loai_hinh_to_chucs_table', 1),
(31, '2023_03_13_041534_create_phieu_dang_kies_table', 1),
(32, '2023_03_13_041601_create_don_vi_duyets_table', 1),
(33, '2023_03_13_044420_create_can_bo_quan_lies_table', 1),
(34, '2023_03_13_044542_create_cap_duyets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dai_diens`
--

DROP TABLE IF EXISTS `nguoi_dai_diens`;
CREATE TABLE IF NOT EXISTS `nguoi_dai_diens` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenNguoiDaiDien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChiNguoiDaiDien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_so_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieu_dang_kies`
--

DROP TABLE IF EXISTS `phieu_dang_kies`;
CREATE TABLE IF NOT EXISTS `phieu_dang_kies` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sophieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydangky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_so_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ho_so_id` (`ho_so_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'kiemduyet');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) UNSIGNED NOT NULL,
  `role_id` int(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 3),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 3),
(8, 8, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('a0379LoI13OJPpvMcHgvF1LLODqH5vwZxhJVVnt5', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.48', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMFRpUFZVY0ZnZ21iVERYWHRPTlcydXlwV2tJeHdLYzBlUVZhMkhBTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi94ZW1jaGl0aWV0LzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEhkZTE3ZXFYdndTYWNJV1lBVzJsTE9sd3RGZkhWZUVEaVVsWXh1ODdjTFNURmwyaEtIaDg2Ijt9', 1681841823);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dinh Ngan', 'dinhngan@gmail.com', NULL, '$2y$10$6jw77.vK5nYiXfinWGberOISS3iztoxG7lwNcuVv04aoKiAiDtvKy', NULL, NULL, NULL, NULL, '2023-03-13 00:44:50', '2023-03-13 00:44:50'),
(2, 'Admin 1', 'admin1@gmail.com', NULL, '$2y$10$Hde17eqXvwSacIWYAW2lLOlwtFfHVeEDiUlYxu87cLSTFl2hKHh86', NULL, NULL, NULL, NULL, '2023-03-13 00:45:19', '2023-03-13 00:45:19'),
(3, 'User 1', 'user@gmail.com', NULL, '$2y$10$sHsXlbOGPAYpJAlxGmKJCuLO0/yw42KRV/qZZhLOSedrbCOgkIpNa', NULL, NULL, NULL, NULL, '2023-03-13 00:46:03', '2023-03-13 00:46:03'),
(4, 'Công Ty TNHH MTV Thương Mai và Dịch Vụ Thái Minh Nguyên', 'ctythaiminhnguyen.angiang@gmail.com', NULL, '$2y$10$aeulbc5ma4RaNafRt0pvD.CVgt/pyVUnM1y6yG8GlZJ3Z9jLqgL3C', NULL, NULL, NULL, NULL, '2023-03-13 00:47:06', '2023-03-13 00:47:06'),
(5, 'Cty 2', 'cty2@gmail.com', NULL, '$2y$10$xDqQNgQV7ByEy.R0uC8xWeS3GpIDnrEnM6/RmhnwxBGrLoDZb8AA.', NULL, NULL, NULL, NULL, '2023-03-18 02:28:37', '2023-03-18 02:28:37'),
(6, 'cty 3', 'cty3@gmail.com', NULL, '$2y$10$JeltZMqPvJAISxlFqj7/me2wDw7dUQ8lZH3CvXiDx0XJpKcdYv/Qq', NULL, NULL, NULL, NULL, '2023-03-27 01:57:56', '2023-03-27 01:57:56'),
(7, 'user 2', 'user2@gmail.com', NULL, '$2y$10$JseVk7AjzRMNQCy.F63hYuGLvVgyh5sQiCMFUFk5D4BgXt2pF.PLu', NULL, NULL, NULL, NULL, '2023-04-04 02:57:29', '2023-04-04 02:57:29'),
(8, 'Công Ty TNHH Test', 'test@gmail.com', NULL, '$2y$10$5A0Lde5X8qoK2OywFUYRKOs.WlqAm/jkihHu97e8d5fuRU7aOuOMe', NULL, NULL, NULL, NULL, '2023-04-18 09:50:20', '2023-04-18 09:50:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
