-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 30, 2023 lúc 07:20 AM
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `can_bo_quan_lies_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `can_bo_quan_lies`
--

INSERT INTO `can_bo_quan_lies` (`id`, `hoten`, `diachi`, `sodienthoai`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Đinh Thị Mỹ Ngân', 'Huyện Châu Phú, An Giang', '0999728817', NULL, NULL, 0),
(10, 'Nguyễn Văn A', 'Huyện Châu Phú, An Giang', '0982998312', NULL, NULL, 2),
(11, 'Đinh Thị Mỹ Ngân Admin', 'Phường Mỹ Xuyên, TP. Long Xuyên, An Giang', '0987261518', NULL, NULL, 1),
(8, 'Đinh Thị Mỹ Ngân', 'Bình Thủy, Huyện Châu Phú, An Giang', '0999728817', NULL, NULL, 0),
(9, 'Đinh Thị Mỹ Ngân', 'Huyện Châu Phú, An Giang', '0999728817', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cap_duyets`
--

DROP TABLE IF EXISTS `cap_duyets`;
CREATE TABLE IF NOT EXISTS `cap_duyets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tencapduyet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tendonvi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phieu_dang_ki_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cap_duyet_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `don_vi_duyets_phieu_dang_ki_id_foreign` (`phieu_dang_ki_id`),
  KEY `don_vi_duyets_cap_duyet_id_foreign` (`cap_duyet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_vi_duyets`
--

INSERT INTO `don_vi_duyets` (`id`, `tendonvi`, `diachi`, `sodienthoai`, `created_at`, `updated_at`, `phieu_dang_ki_id`, `cap_duyet_id`) VALUES
(13, 'Huyện Chợ Mới', 'Huyện Chợ Mới', '0999233219', NULL, NULL, NULL, 2),
(15, 'Huyện Châu Thành', 'Châu Thành, AG', '0982998312', NULL, NULL, NULL, 1),
(14, 'Tỉnh An Giang', 'An Giang', '2222222222', NULL, NULL, NULL, 3),
(4, 'Huyện Chợ Mới', 'Huyện Chợ Mới', '0999233219', '2023-03-21 01:46:39', '2023-03-21 01:46:39', NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_vi_hanh_chinh_huyens`
--

DROP TABLE IF EXISTS `don_vi_hanh_chinh_huyens`;
CREATE TABLE IF NOT EXISTS `don_vi_hanh_chinh_huyens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `don_vi_hanh_chinh_tinh_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `don_vi_hanh_chinh_huyens_ma_unique` (`ma`),
  KEY `don_vi_hanh_chinh_huyens_don_vi_hanh_chinh_tinh_id_foreign` (`don_vi_hanh_chinh_tinh_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_vi_hanh_chinh_tinhs`
--

DROP TABLE IF EXISTS `don_vi_hanh_chinh_tinhs`;
CREATE TABLE IF NOT EXISTS `don_vi_hanh_chinh_tinhs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `don_vi_hanh_chinh_tinhs_ma_unique` (`ma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_vi_hanh_chinh_xas`
--

DROP TABLE IF EXISTS `don_vi_hanh_chinh_xas`;
CREATE TABLE IF NOT EXISTS `don_vi_hanh_chinh_xas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `don_vi_hanh_chinh_huyen_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `don_vi_hanh_chinh_xas_ma_unique` (`ma`),
  KEY `don_vi_hanh_chinh_xas_don_vi_hanh_chinh_huyen_id_foreign` (`don_vi_hanh_chinh_huyen_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `SanPham` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TenDonVi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NguoiDaiDien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi_NguoiDaiDien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoPhieuDK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BieuTuong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GiayDKKD` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NgayDKKD` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoDKKD` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaSoThue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChiXuong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChiCty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VonDieuLe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MoTaQuyCachSanPham` text COLLATE utf8mb4_unicode_ci,
  `TinhTrangCongBo` text COLLATE utf8mb4_unicode_ci,
  `LoaiHinhDangKySoHuuTriTue` text COLLATE utf8mb4_unicode_ci,
  `LichSuHinhThanh` text COLLATE utf8mb4_unicode_ci,
  `LyDoThanhLap` text COLLATE utf8mb4_unicode_ci,
  `GiaTriSanPham` text COLLATE utf8mb4_unicode_ci,
  `DatvaVanPhong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DatSanXuat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NguonDien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NguonNuoc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhuongTienVanTai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhuongTienTruyenThong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KetQuaBanHang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ChiPhi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DoanhThu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NhanLuc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NguonCungCapNguyenLieu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MucDoHoatDongSanXuat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThiTruong` text COLLATE utf8mb4_unicode_ci,
  `MucDoBanSanPham` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DoiTuongKhachHang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LoaiHinhGopVon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChiSanXuat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhuongAnKinhDoanh` text COLLATE utf8mb4_unicode_ci,
  `QuyTrinhSanXuat` text COLLATE utf8mb4_unicode_ci,
  `HoTroDaoTao` text COLLATE utf8mb4_unicode_ci,
  `HoTroKhac` text COLLATE utf8mb4_unicode_ci,
  `TanSuatHopMat` text COLLATE utf8mb4_unicode_ci,
  `CachChiaTien` text COLLATE utf8mb4_unicode_ci,
  `ThachThuc` text COLLATE utf8mb4_unicode_ci,
  `NhuCauHoTro` text COLLATE utf8mb4_unicode_ci,
  `SoLuongThanhVien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NganhNghe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `don_vi_hanh_chinh_xa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `don_vi_hanh_chinh_huyen_id` bigint(20) UNSIGNED DEFAULT NULL,
  `don_vi_hanh_chinh_tinh_id` bigint(20) UNSIGNED DEFAULT NULL,
  `loai_hinh_to_chuc_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nguoi_dai_dien_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phieu_dang_ki_id` bigint(20) UNSIGNED DEFAULT NULL,
  `don_vi_duyet_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ho_sos_don_vi_hanh_chinh_xa_id_foreign` (`don_vi_hanh_chinh_xa_id`),
  KEY `ho_sos_don_vi_hanh_chinh_huyen_id_foreign` (`don_vi_hanh_chinh_huyen_id`),
  KEY `ho_sos_don_vi_hanh_chinh_tinh_id_foreign` (`don_vi_hanh_chinh_tinh_id`),
  KEY `ho_sos_loai_hinh_to_chuc_id_foreign` (`loai_hinh_to_chuc_id`),
  KEY `ho_sos_nguoi_dai_dien_id_foreign` (`nguoi_dai_dien_id`),
  KEY `ho_sos_phieu_dang_ki_id_foreign` (`phieu_dang_ki_id`),
  KEY `ho_sos_don_vi_duyet_id_foreign` (`don_vi_duyet_id`),
  KEY `ho_sos_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ho_sos`
--

INSERT INTO `ho_sos` (`id`, `SanPham`, `TenDonVi`, `NguoiDaiDien`, `DiaChi_NguoiDaiDien`, `SoPhieuDK`, `BieuTuong`, `GiayDKKD`, `NgayDKKD`, `SoDKKD`, `MaSoThue`, `DienThoai`, `Email`, `Website`, `DiaChiXuong`, `DiaChiCty`, `VonDieuLe`, `MoTaQuyCachSanPham`, `TinhTrangCongBo`, `LoaiHinhDangKySoHuuTriTue`, `LichSuHinhThanh`, `LyDoThanhLap`, `GiaTriSanPham`, `DatvaVanPhong`, `DatSanXuat`, `NguonDien`, `NguonNuoc`, `PhuongTienVanTai`, `PhuongTienTruyenThong`, `KetQuaBanHang`, `ChiPhi`, `DoanhThu`, `NhanLuc`, `NguonCungCapNguyenLieu`, `MucDoHoatDongSanXuat`, `ThiTruong`, `MucDoBanSanPham`, `DoiTuongKhachHang`, `LoaiHinhGopVon`, `DiaChiSanXuat`, `PhuongAnKinhDoanh`, `QuyTrinhSanXuat`, `HoTroDaoTao`, `HoTroKhac`, `TanSuatHopMat`, `CachChiaTien`, `ThachThuc`, `NhuCauHoTro`, `SoLuongThanhVien`, `NganhNghe`, `NhanSu`, `TongDienTichDat`, `SoDoToChuc`, `ChucNangNhiemVuNhanSu`, `DanhGiaThiTruong`, `DanhGiaKhaNangThamGiaThiTruong`, `CanCuPhapLy`, `PhanTichChung`, `PhanTichCanhTranh`, `MucTieuChienLuoc`, `HoatDongSanXuat`, `KenhPhanPhoi`, `KeHoachXucTienThuongMai`, `KeHoachMarketing`, `CoSoHaTang`, `TrangThietBi`, `NhanLucDieuChinh`, `DieuKienKhac`, `NhuCauVon`, `PhuongAnHuyDong`, `TongDoanhThu`, `TongChiPhi`, `LoiNhuan`, `PhuongAnTaiChinhKhac`, `CoCauToChuc`, `CongDong`, `HoatDongKeToan`, `TinhHinhTiepThi`, `PhuongAnBaoVeMoiTruong`, `created_at`, `updated_at`, `don_vi_hanh_chinh_xa_id`, `don_vi_hanh_chinh_huyen_id`, `don_vi_hanh_chinh_tinh_id`, `loai_hinh_to_chuc_id`, `nguoi_dai_dien_id`, `phieu_dang_ki_id`, `don_vi_duyet_id`, `user_id`) VALUES
(11, 'Sản phẩm công ty 2 demo', 'Công ty TNHH số 2 demo', 'Người đại diện cty 2', '32/2 xã Bình Mỹ, huyện Châu Phú, An Giang', NULL, 'Công ty TNHH số 2 demođăng nhập.png', 'Giấy 2', '22/11/2012', 'số đăng ký test', 'mã thuế test', '0972287392', 'cty2@gmail.com', 'https://cty2.vn/', 'Huyện Châu Phú, An Giang', 'Xã Bình Mỹ, Huyện Châu Phú, An Giang', '2.300.000', NULL, 'Đã có giấy đủ điều kiện sản xuất, chứng nhận vệ sinh an toàn thực phẩm cho sản xuất sản phẩm tương ứng', 'Bảo hộ nhãn hiệu', NULL, NULL, NULL, 'Sở hữu', 'Sở hữu', 'Không có', '', 'Có xe ô tô - Không có - Thuê', 'Website - Mạng xã hội - ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 5),
(3, 'TRÀ KIM NGÂN HOA', 'Công Ty TNHH MTV Thương Mại và Dịch Vụ Thái Minh Nguyên -Xưởng Sản Xuất Dược Liệu Thái Minh Nguyên', 'Vũ Minh Tú', 'Huyện Chợ Mới, Tỉnh An Giang', 'số phiếu 1', 'Công Ty TNHH MTV Thương Mại và Dịch Vụ Thái Minh Nguyên -Xưởng Sản Xuất Dược Liệu Thái Minh NguyênDINHTHIMYNGAN.jpg', 'Số 1602122695 do Phòng ĐK Kinh Doanh Sở Kế Hoạch và Đầu Tư Tỉnh An Giang cấp ngày 20/03/2021', '20/03/2021', 'Số 1602122695', '1602122695', '0913.338.266', 'ctythaiminhnguyen.angiang@gmail.com', 'https://thaiminhnguyen.vn/', 'Huyện Chợ Mới', 'Ấp Phú Thượng, Huyện Chợ Mới', '1.000.000.000', '<p>test m&ocirc; tả sản pham</p>', 'Đã có công bố chất lượng - Đã có sở hữu trí tuệ', 'Bảo hộ nhãn hiệu - Logo', '<p>Bản th&acirc;n theo học ng&agrave;nh YHCT c&oacute; thời gian c&ocirc;ng t&aacute;c hơn 15 năm t i B nh vi n huy n Chợ mới(nay l&agrave; trung y tế huy n) c&oacute; nghi&ecirc;n c u v&agrave;i lo i dược li&ecirc;u với mục đ&iacute;ch t m ra lo i dược li u c&oacute; lợi cho s c khỏe đặc bi t phải l&agrave;nh t&iacute;nh(sau khi sử dụng kh&ocirc;ng c&oacute; t&aacute;c dụng phụ) đ&atilde; nhận thấy C&acirc;y Kim Ng&acirc;n l&agrave; lo i c&acirc;y kh&aacute;ng sinh thực vật đ t c&aacute;c y&ecirc;u cầu n&ecirc;n bắt tay v&agrave;o t&igrave;m nguồn c&acirc;y giống&hellip;</p>\r\n\r\n<p>Cập nhật</p>', '<p>Mừng v đ&atilde; kiếm được lo i c&acirc;y trồng theo nghi&ecirc;n c u, c&acirc;y ph&aacute;t triển tốt, kh&ocirc;ng s&acirc;u b nh nhưng khi b&aacute;n ra thị trường th&igrave; cần c&oacute; c&aacute;c minh ch ng về nguồn gốc, chất lượng sản phẩm, tư c&aacute;ch ph&aacute;p nh&acirc;n.v.v&hellip;từ đ&oacute; mới quyết định th&agrave;nh lập CTY TNHH MTV TM&amp;DV TH&Aacute;I MINH NGUY&Ecirc;N l&agrave;m c&aacute;c thủ tục cần thiết để ch ng minh sản phẩm c&oacute; nguồn gốc r&otilde; r&agrave;ng, điều ki n sản xuất, kiểm nghi m sản phẩm&hellip;</p>\r\n\r\n<p>V&igrave; nhận thấy đ&acirc;y l&agrave; lo i c&acirc;y dược li u với c&aacute;i t&ecirc;n Kim Ng&acirc;n, Kim Ng&acirc;n thể hi n sự gi&agrave;u sang, sung t&uacute;c v&agrave; thể hi n hi n sự qu&yacute; gi&aacute; của gia đ nh, tr&agrave; lấy từ nụ hoa kim ng&acirc;n&hellip;v vậy lấy t&ecirc;n l&agrave; &ldquo;Tr&agrave; Kim Ng&acirc;n Hoa&rdquo; Th&aacute;i Minh Nguy&ecirc;n mang l i nhiều may mắn, nhiều s c khỏe cho người d&ugrave;ng.</p>', '<p>Nguy&ecirc;n liệu ở địa phương như C&acirc;y Kim Ng&acirc;n.</p>', 'Sở hữu', 'Thuê', 'Đang có kế hoạch', 'Nước giếng khoan - ', 'Thuê', 'Điện thoại để bàn - Fax', 'Công Ty TNHH MTV Thương Mại và Dịch Vụ Thái Minh Nguyên -Xưởng Sản Xuất Dược Liệu Thái Minh Nguyên.5_KiemDiemBanChapHanh.docx', '', '', '', '', 'Theo tuần', NULL, 'Theo tháng', 'Khá giả - Bình dân - Nông thôn', 'Tiền mặt', 'Tổ 23 - ấp Phú Thượng 3 – xã Kiến An - huyện Chợ Mới - tỉnh An Giang', NULL, '', 'Có - ', '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 'Công Ty TNHH MTV Thương Mại và Dịch Vụ Thái Minh Nguyên -Xưởng Sản Xuất Dược Liệu Thái Minh Nguyên_Sơ đồ tổ chức_BIEN BAN TTTCDB.docx', '', '<p>Test đ&aacute;nh gi&aacute; chung về t&igrave;nh h&igrave;nh thị trường</p>', NULL, NULL, '<p>test&nbsp;<strong>PH&Acirc;N T&Iacute;CH ĐIỂM MẠNH, YẾU, CƠ HỘI V&Agrave; TH&Aacute;CH THỨC</strong></p>', NULL, NULL, '', '', '', '', '', '', '', 'Công Ty TNHH MTV Thương Mại và Dịch Vụ Thái Minh Nguyên -Xưởng Sản Xuất Dược Liệu Thái Minh Nguyên_Điều kiện khác_202303261615400_bìa.docx', 'Công Ty TNHH MTV Thương Mại và Dịch Vụ Thái Minh Nguyên -Xưởng Sản Xuất Dược Liệu Thái Minh Nguyên_Nhu cầu vốn_202303261807070_bìa.docx', '', '', '', '', '', 'Công Ty TNHH MTV Thương Mại và Dịch Vụ Thái Minh Nguyên -Xưởng Sản Xuất Dược Liệu Thái Minh Nguyên_Cơ cấu tổ chức_202303270808025_KiemDiemBanChapHanh.docx', NULL, NULL, NULL, '<p><em>Test</em>&nbsp;Phương &aacute;n bảo vệ m&ocirc;i trường&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 14, 4),
(14, 'Sản phẩm công ty 3 demo', 'Công ty 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hinh_to_chucs`
--

DROP TABLE IF EXISTS `loai_hinh_to_chucs`;
CREATE TABLE IF NOT EXISTS `loai_hinh_to_chucs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenNguoiDaiDien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dai_diens`
--

INSERT INTO `nguoi_dai_diens` (`id`, `TenNguoiDaiDien`, `DiaChi`, `SoDienThoai`, `created_at`, `updated_at`) VALUES
(1, 'Vũ Minh Tú', 'xã Kiến An, huyện Chợ Mới, tỉnh An Giang', '0913338266', NULL, NULL),
(2, 'Người đại công ty 2', 'Châu Thành, AG', '0977772223', NULL, NULL);

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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ho_so_id` bigint(20) NOT NULL,
  `sophieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydangky` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ho_so_id` (`ho_so_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieu_dang_kies`
--

INSERT INTO `phieu_dang_kies` (`id`, `ho_so_id`, `sophieu`, `ngaydangky`, `created_at`, `updated_at`) VALUES
(14, 3, 'số phiếu cho cty Thái Minh Nguyên', '20/12/2022', '2023-03-28 09:58:54', '2023-03-28 09:58:54'),
(13, 14, 'Số phiếu cho cty 3', '12/2/2022', '2023-03-27 02:47:53', '2023-03-27 02:47:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2);

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
('3aY3JSRq8Gef880AifXGC6Cdu0T9Kf9Xe6ekefxA', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.54', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUWVBTm9WbUQ2Njh4Y1JPNUJDMjFoV1c1cXpNb21mU1g1OENWMEFReiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi94ZW1jaGl0aWV0LzExIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRIZGUxN2VxWHZ3U2FjSVdZQVcybExPbHd0RmZIVmVFRGlVbFl4dTg3Y0xTVEZsMmhLSGg4NiI7fQ==', 1680084801),
('J4IGBKRrE5s7heEPGSb0O0cOlTfVsqktk3xEkkLc', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.54', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidkFqaVhPOTNwd24zcThaT2dvSk9qcjM5aXNmdGZzRE53YW5CVWdxdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRIZGUxN2VxWHZ3U2FjSVdZQVcybExPbHd0RmZIVmVFRGlVbFl4dTg3Y0xTVEZsMmhLSGg4NiI7fQ==', 1680120646),
('n3VE0sxoM3VmtMJK2u7v81gEMWlzMM5pHgp5K0kV', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.54', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNkhDMFJuWDRCRjRESENBSFdWaFhoVTZaOUNkU3o3S0o0ME5DSG1LayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi94ZW1jaGl0aWV0LzExIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRIZGUxN2VxWHZ3U2FjSVdZQVcybExPbHd0RmZIVmVFRGlVbFl4dTg3Y0xTVEZsMmhLSGg4NiI7fQ==', 1680097850);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dinh Ngan', 'dinhngan@gmail.com', NULL, '$2y$10$6jw77.vK5nYiXfinWGberOISS3iztoxG7lwNcuVv04aoKiAiDtvKy', NULL, NULL, NULL, NULL, '2023-03-13 00:44:50', '2023-03-13 00:44:50'),
(2, 'Admin 1', 'admin1@gmail.com', NULL, '$2y$10$Hde17eqXvwSacIWYAW2lLOlwtFfHVeEDiUlYxu87cLSTFl2hKHh86', NULL, NULL, NULL, NULL, '2023-03-13 00:45:19', '2023-03-13 00:45:19'),
(3, 'User 1', 'user@gmail.com', NULL, '$2y$10$sHsXlbOGPAYpJAlxGmKJCuLO0/yw42KRV/qZZhLOSedrbCOgkIpNa', NULL, NULL, NULL, NULL, '2023-03-13 00:46:03', '2023-03-13 00:46:03'),
(4, 'Công Ty TNHH MTV Thương Mai và Dịch Vụ Thái Minh Nguyên', 'ctythaiminhnguyen.angiang@gmail.com', NULL, '$2y$10$aeulbc5ma4RaNafRt0pvD.CVgt/pyVUnM1y6yG8GlZJ3Z9jLqgL3C', NULL, NULL, NULL, NULL, '2023-03-13 00:47:06', '2023-03-13 00:47:06'),
(5, 'Cty 2', 'cty2@gmail.com', NULL, '$2y$10$xDqQNgQV7ByEy.R0uC8xWeS3GpIDnrEnM6/RmhnwxBGrLoDZb8AA.', NULL, NULL, NULL, NULL, '2023-03-18 02:28:37', '2023-03-18 02:28:37'),
(6, 'cty 3', 'cty3@gmail.com', NULL, '$2y$10$JeltZMqPvJAISxlFqj7/me2wDw7dUQ8lZH3CvXiDx0XJpKcdYv/Qq', NULL, NULL, NULL, NULL, '2023-03-27 01:57:56', '2023-03-27 01:57:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
