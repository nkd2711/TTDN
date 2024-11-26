-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2024 lúc 06:57 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `camera`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(12) NOT NULL,
  `pttt` tinyint(1) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `name`, `address`, `tel`, `email`, `total`, `pttt`, `tendangnhap`) VALUES
(62, '', '', '', '', 500, 0, 'khanhduy2711');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(12) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `dongia` int(12) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL DEFAULT 0,
  `thanhtien` int(12) NOT NULL DEFAULT 0,
  `idbill` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `tensp`, `img`, `dongia`, `soluong`, `thanhtien`, `idbill`) VALUES
(109, 'Camera IP 360 Độ 3MP EZVIZ TY1', 'ezviz 1.jpg', 500, 1, 500000, 62);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `hoten` varchar(200) NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`hoten`, `sdt`, `email`, `noidung`) VALUES
('Khánh Duy', 964058502, 'khanhduyy2711@gmail.com', 'DUY Nè');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham1`
--

CREATE TABLE `sanpham1` (
  `masp` varchar(100) NOT NULL,
  `nhom_id` int(11) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `mota` text DEFAULT NULL,
  `dongiacu` int(11) NOT NULL,
  `dongiamoi` int(11) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `img3` varchar(200) DEFAULT NULL,
  `img4` varchar(200) DEFAULT NULL,
  `enable` tinyint(4) NOT NULL DEFAULT 1,
  `ghichu` text DEFAULT NULL,
  `diemnoibat` text DEFAULT NULL,
  `xuatxu` varchar(255) DEFAULT NULL,
  `ngaydang` varchar(50) DEFAULT NULL,
  `kichthuoc` varchar(255) DEFAULT NULL,
  `nguoidang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham1`
--

INSERT INTO `sanpham1` (`masp`, `nhom_id`, `tensp`, `mota`, `dongiacu`, `dongiamoi`, `img1`, `img2`, `img3`, `img4`, `enable`, `ghichu`, `diemnoibat`, `xuatxu`, `ngaydang`, `kichthuoc`, `nguoidang`) VALUES
('X1', 4, 'Camera IP Ngoài Trời 3MP Xiaomi AW300  ', 'Camera IP Ngoài Trời 3MP Xiaomi AW300  ', 1000, 750, 'xiaomi 1.jpg', 'xiaomi 2.jpg', 'xiaomi 3.jpg', 'xiaomi 4.jpg', 1, '', 'Chống nước, bụi IP66\r\nPhát hiện chuyển động\r\nPhát hiện con người\r\nĐiều khiển giọng nói qua trợ lý ảo\r\nChế độ quan sát ban đêm có màu\r\nGửi cảnh báo đến điện thoại\r\nĐàm thoại 2 chiều\r\nĐèn báo nhấp nháy và báo động âm thanh khi có người\r\nCài đặt vùng lấy nét\r\nCá nhân hoá âm thanh  ', 'Trung Quốc  ', '1/11/2024  ', 'Dài 7.5 cm - Rộng 7 cm - Cao 17.3 cm - Nặng 249 g  ', 'Duy  '),
('X2', 4, 'Camera IP 360 Độ 2MP Xiaomi Mi Home C200', 'Camera IP 360 Độ 2MP Xiaomi Mi Home C200', 550, 440, 'xiaomi 5.jpg', 'xiaomi 6.jpg', 'xiaomi 7.jpg', 'xiaomi 8.jpg', 1, '', 'Phát hiện chuyển động\r\nBáo động âm thanh bất thường\r\nPhát hiện con người\r\nQuan sát toàn cảnh với góc nhìn 360 độ với công nghệ WDR\r\nQuan sát rõ trong bóng tối\r\nHỗ trợ đảo ngược hiển thị\r\nĐiều khiển giọng nói qua trợ lý Google\r\nTheo dõi chuyển động\r\nGửi cảnh báo đến điện thoại\r\nĐàm thoại 2 chiều', 'Trung Quốc', '1/11/2024', 'Dài 7.5 cm - Rộng 7.5 cm - Cao 10.9 cm - Nặng 310 g', 'Duy'),
('T1', 5, 'Camera IP 360 Độ 2MP TP-Link Tapo C200C', 'Camera IP 360 Độ 2MP TP-Link Tapo C200C', 490, 380, 'tp link 1.jpg', 'tp link 2.jpg', 'tp link 3.jpg', 'tp link 4.jpg', 1, '', 'Phát hiện chuyển động\r\nPhát hiện con người\r\nPhát hiện tiếng khóc\r\nĐàm thoại 2 chiều\r\nTích hợp Google Assistant và Amazon Alexa', 'Trung Quốc', '1/11/2024', 'Dài 8 cm - Rộng 8 cm - Cao 11.77 cm', 'Duy'),
('T2', 5, 'Camera IP 360 Độ 2MP TP-Link Tapo TC70', 'Camera IP 360 Độ 2MP TP-Link Tapo TC70', 450, 375, 'tp link 5.jpg', 'tp link 6.jpg', 'tp link 7.jpg', 'tp link 8.jpg', 1, '', 'Phát hiện chuyển động\r\nPhát hiện hình dáng con người bằng AI\r\nPhát hiện tiếng khóc\r\nChọn khu vực riêng tư\r\nTheo dõi chuyển động\r\nGửi cảnh báo đến điện thoại\r\nĐàm thoại 2 chiều', ' Trung Quốc', '2/11/2024', 'Dài 8.6 cm - Rộng 8.6 cm - Cao 12.2 cm', 'Duy'),
('E1', 6, 'Camera IP 360 Độ 3MP EZVIZ TY1', 'Camera IP 360 Độ 3MP EZVIZ TY1', 650, 500, 'ezviz 1.jpg', 'ezviz 2.jpg', 'ezviz 3.jpg', 'ezviz 4.jpg', 1, '', 'Phát hiện chuyển động\r\nPhát hiện con người\r\nChế độ tuần tra\r\nCảnh báo âm thanh bất thường\r\nChế độ quan sát ban đêm có màu\r\nChế độ riêng tư\r\nĐàm thoại 2 chiều\r\nCuộc gọi 1 chạm\r\nCài đặt tối đa 4 khung hình theo dõi', 'Trung Quốc', '2/11/2024', 'Dài 8.8 cm - Rộng 8.82 cm - Cao 11.9 cm - Nặng 218 g', 'Duy'),
('E2', 6, 'Camera IP 360 Độ 4MP EZVIZ H6C Pro', 'Camera IP 360 Độ 4MP EZVIZ H6C Pro', 890, 630, 'ezviz 5.jpg', 'ezviz 6.jpg', 'ezviz 7.jpg', 'ezviz 8.jpg', 1, '', 'Phát hiện chuyển động\r\nĐèn LED trợ sáng\r\nPhát hiện con người\r\nChế độ tuần tra\r\nCảnh báo âm thanh bất thường\r\nChế độ quan sát ban đêm có màu\r\nGửi cảnh báo đến điện thoại\r\nTheo dõi thu phóng tự động\r\nChế độ riêng tư\r\nHỗ trợ chức năng chống ngược sáng Digital WDR\r\nĐàm thoại 2 chiều\r\nCuộc gọi 1 chạm', 'Trung Quốc', '3/11/2024', 'Dài 8.8 cm - Rộng 8.82 cm - Cao 11.9 cm - Nặng 252 g', 'Duy'),
('I1', 7, 'Camera IP Ngoài trời 360 Độ 3MP IMOU Cruiser 2C S7CP-3M0WE', 'Camera IP Ngoài trời 360 Độ 3MP IMOU Cruiser 2C S7CP-3M0WE', 1190, 990, 'imou 5.jpg', 'imou 6.jpg', 'imou 7.jpg', 'imou 8.jpg', 1, '', 'Chống nước, bụi IP66\r\nPhát hiện chuyển động\r\nBáo động âm thanh bất thường\r\nTích hợp còi thông báo\r\nChọn vùng quan sát\r\nChế độ quan sát ban đêm có màu\r\nGửi cảnh báo đến điện thoại\r\nPhát hiện người và xe\r\nĐàm thoại 2 chiều', ' Trung Quốc', '4/11/2024', 'Dài 12.5 cm - Rộng 12.7 cm - Cao 18 cm - Nặng 409 g', 'Duy'),
('I2', 7, 'Camera IP 360 Độ 3MP IMOU TA32CP-L', 'Camera IP 360 Độ 3MP IMOU TA32CP-L', 650, 470, 'imou 1.jpg', 'imou 2.jpg', 'imou 3.jpg', 'imou 4.jpg', 1, '', 'Phát hiện chuyển động\r\nBáo động âm thanh bất thường\r\nTích hợp còi thông báo\r\nPhát hiện con người\r\nTheo dõi chuyển động\r\nGửi cảnh báo đến điện thoại\r\nĐàm thoại 2 chiều', 'Trung Quốc', '8/11/2024', 'Dài 8.3 cm - Rộng 8.3 cm - Cao 10.61 cm - Nặng 201 g', 'Duy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_nhom`
--

CREATE TABLE `sanpham_nhom` (
  `id` int(11) UNSIGNED NOT NULL,
  `tennhom` varchar(100) NOT NULL,
  `ghichu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_nhom`
--

INSERT INTO `sanpham_nhom` (`id`, `tennhom`, `ghichu`) VALUES
(4, 'Xiaomi', 'Xiaomi'),
(5, 'Tp Link', 'Tp Link'),
(6, 'Ezviz', 'Ezviz'),
(7, 'Imou', 'Imou');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`tendangnhap`, `matkhau`, `hoten`, `email`, `enable`) VALUES
('khanhduy2711', '111', 'Nguyễn Khánh Duy', 'khanhduyy2711@gmail.com', 1),
('nkd2711', '111', 'Nguyen Duy', 'duygmail', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham_nhom`
--
ALTER TABLE `sanpham_nhom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `sanpham_nhom`
--
ALTER TABLE `sanpham_nhom`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
