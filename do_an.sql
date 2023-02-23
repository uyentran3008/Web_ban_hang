-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2022 lúc 04:06 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` int(11) DEFAULT NULL,
  `MSHH` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaDatHang` int(11) DEFAULT NULL,
  `GiamGia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSKH` int(11) DEFAULT NULL,
  `MSNV` int(11) DEFAULT NULL,
  `NgayDH` datetime DEFAULT NULL,
  `NgayGH` datetime DEFAULT NULL,
  `TrangThaiDH` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(11) NOT NULL,
  `TenHH` varchar(70) NOT NULL,
  `MoTaHH` varchar(500) NOT NULL,
  `Gia` decimal(15,3) NOT NULL,
  `SoLuongHang` int(11) NOT NULL,
  `GhiChu` varchar(300) NOT NULL,
  `Hinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `MoTaHH`, `Gia`, `SoLuongHang`, `GhiChu`, `Hinh`) VALUES
(0, 'Phấn mắt CLio', 'no', '456.000', 2, 'dm1', 'phan_mat_clio.jpg'),
(1, 'Phấn Nền Sivanna Colors Super Cover Two Way Cake 1', 'Phấn nền che khuyết điểm với hạt phấn siêu mịn, che phủ các khuyết điểm hoàn hảo. Khóa chặt lớp nền, kiềm dầu cả ngày dài những vẫn mỏng nhẹ, không bết dính.', '248.000', 20, 'dm1', 'phan_nen_sivana.jpg'),
(2, 'Phấn Nước Essance Vdivov Veil Fit Cushion Mịn Lì 1', 'Phấn Nước Essance Vdivov Veil Fit Cushion Mịn Lì 15g .#23 Deep Ivory Tông Da Nâu\r\nPhấn nước mịn lì với hạt phấn linh hoạt cho lớp nền mịn màng và rạng rỡ suốt ngày dài cùng cảm giác tươi mát chờ công nghệ đột phá.', '320.000', 30, 'dm1', 'phan_nuoc.jpg'),
(3, 'Kem Hadalabo Perfect White Supreme 50g', 'Sản phẩm là một bước không thể thiếu trong chu trình dưỡng da nhằm mang lại làn da trắng mướt, cải thiện thâm sạm, đốm nâu, tàn nhang... của phụ nữ trên 25 tuổi. ', '274.000', 20, 'dm2', 'kem_hadalabo.jpg'),
(4, 'Nước Tẩy Trang Dành Cho Da Nhạy Cảm Bioderma Sensi', 'Nước Tẩy Trang Dành Cho Da Nhạy Cảm Bioderma Sensibio H20 500ml là sản phẩm dạng nước có chứa các hạt micelle, tương thích hoàn hảo với làn da.', '495.000', 20, 'dm2', 'nuoc_tay_trang.jpg'),
(5, 'Tẩy Tế Bào Chết Eucerin Pro Acne Ngăn Ngừa Mụn 100', 'Tẩy Tế Bào Chết Eucerin Pro Acne Ngăn Ngừa Mụn là sản phẩm tẩy tế bào chết không chứa dầu, kết hợp Lactic Acid giúp giảm mụn mà không làm khô da', '349.000', 10, 'dm2', 'tay_te_bao_chet.jpg'),
(6, 'Combo Cocoon Chăm Sóc Tóc (Nước Dưỡng Tóc Tinh Dầu', 'Combo Cocoon Chăm Sóc Tóc (Nước Dưỡng Tóc Tinh Dầu Bưởi 140ml + Serum Sa-Chi Phục Hồi Tóc 70ml) giúp tóc mềm mượt, giảm gãy rụng và hư tổn sau 2 bước từ tinh dầu bưởi thiên nhiên và dầu sa-chi nhiều dưỡng chất.', '270.000', 10, 'dm3', 'daugoicocoon.jpg'),
(7, 'Xịt Dưỡng Tóc Hairburst Volume And Growth Elixir A', 'Xịt Dưỡng Tóc Hairburst Volume And Growth Elixir Avocado & Coconut Chiết Xuất Bơ và Dừa 125ml đa chức năng chứa các thành phần có nguồn gốc từ tự nhiên như AnaGain giúp kéo dài vòng đời của tóc và giúp mái tóc dày hơn chỉ trong vòng 3 tháng. Ngoài ra còn chứa Aquaflex XL-30 giúp mái tóc phồng hơn.', '850.000', 10, 'dm3', 'xitduongtoc.jpg'),
(8, 'Dầu Gội Organique Phục Hồi Hương Cam Chanh Citrus ', 'Dầu Gội Organique Phục Hồi Hương Cam Chanh Citrus Revitalizing Shampoo giàu tinh chất thảo mộc và hương cam quất tự nhiên giúp làm sạch da dầu đồng thời phục hồi và nuôi dưỡng tóc bị hư tổn. Tinh chất cam quất giúp tóc sạch lâu hơn, mùi hương ngọt ngào sảng khoái.', '330.000', 15, 'dm3', 'daugoithiennhien.jpg'),
(9, 'Bộ Trang Điểm Cathy Doll', '', '673.000', 20, 'dm1', 'botrangdiem.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhh`
--

CREATE TABLE `hinhh` (
  `MaHinh` int(11) NOT NULL,
  `TenHinh` varchar(50) NOT NULL,
  `MSHH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `username`, `password`, `address`, `email`) VALUES
(1, 'admin', '123', 'store', 'admin123@gmail.com'),
(4, 'Trần Uyên', 'tranuyen', 'cần thơ', 'uyenb1910329@student.ctu.edu.vn'),
(5, 'Ngan', '12345', 'đại học cần thơ', 'me@example.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` int(11) NOT NULL,
  `HoTenNV` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ChucVu` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDienThoai` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `Password`, `ChucVu`, `DiaChi`, `SoDienThoai`) VALUES
(1, 'Trần Uyên', 'uyenb1910', 'nhân viên', 'ctu', '0907968993'),
(2, 'Uyen', '123', 'nhân viên', 'ctu', '0907968992');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD UNIQUE KEY `SoDonDH` (`SoDonDH`,`MSHH`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD UNIQUE KEY `MSKH` (`MSKH`,`MSNV`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`);

--
-- Chỉ mục cho bảng `hinhh`
--
ALTER TABLE `hinhh`
  ADD PRIMARY KEY (`MaHinh`),
  ADD UNIQUE KEY `MSHH` (`MSHH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MSKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MSNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


