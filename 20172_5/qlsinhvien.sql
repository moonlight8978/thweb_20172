-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2018 lúc 06:57 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsinhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua`
--

CREATE TABLE `ketqua` (
  `MaSV` varchar(6) NOT NULL,
  `MaMH` varchar(6) NOT NULL,
  `Diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ketqua`
--

INSERT INTO `ketqua` (`MaSV`, `MaMH`, `Diem`) VALUES
('A01', '01', 2),
('A01', '03', 7),
('A02', '01', 5),
('A02', '05', 9),
('A03', '01', 5),
('A03', '03', 3),
('B01', '03', 3),
('B01', '02', 6),
('B02', '04', 10),
('B02', '01', 7),
('B03', '03', 6),
('B04', '05', 3),
('B04', '06', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKH` varchar(6) NOT NULL,
  `TenKhoa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKH`, `TenKhoa`) VALUES
('AV', 'Anh văn'),
('TH', 'Tin Học'),
('TR', 'Triết Học'),
('VL', 'Vật Lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(6) NOT NULL,
  `TenMH` varchar(50) NOT NULL,
  `SoTiet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`, `SoTiet`) VALUES
('01', 'Cơ sở Dữ liệu', 45),
('02', 'Trí tuệ Nhân tạo', 45),
('03', 'Truyền Tin', 45),
('04', 'Đồ Họa', 60),
('05', 'Văn Phạm', 60),
('06', 'Đàm thọai', 60);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(6) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `HoSV` varchar(30) NOT NULL,
  `TenSV` varchar(15) NOT NULL,
  `GioiTinh` char(1) NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `NoiSinh` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `MaKH` varchar(6) NOT NULL,
  `HocBong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `Username`, `Password`, `HoSV`, `TenSV`, `GioiTinh`, `NgaySinh`, `NoiSinh`, `DiaChi`, `MaKH`, `HocBong`) VALUES
('A01', 'haint', '123', 'Nguyễn thị', 'Hải', 'F', '1977-02-23 00:00:00', 'Sài gòn', '12 B Võ văn Tần', 'TH', 10000),
('A02', 'chinhtv', '123', 'Trần văn', 'Chính', 'M', '1977-12-24 00:00:00', 'Sài gòn', '34 Nguyễn Bỉnh Khiêm', 'TH', 120000),
('A03', 'yentb', '123', 'Lê Bạch', 'Yến', 'F', '1996-02-21 00:00:00', 'Hà Nội', '765 PasTeur', 'TH', 140000),
('B01', 'maitt', '123', 'Trần Thanh', 'Mai', 'F', '1977-08-12 00:00:00', 'Bến tre', '32 Lê lai', 'TH', 0),
('B02', 'thuytt', '123', 'Trần thu ', 'Thủy', 'F', '1977-01-01 00:00:00', 'Sài gòn', '45 Nguyễn Thái sơn', 'TH', 0),
('B03', 'thanhlt', '123', 'Lê thị', 'Thanh', 'F', '1975-01-01 00:00:00', 'Sài gòn', '345 Nguyễn Kiệm', 'AV', 0),
('B04', 'kimtt', '123', 'Trần trọng ', 'Kim', 'M', '1977-12-20 00:00:00', 'Sài gòn', '123 Lê văn sỹ', 'AV', 120000),
('C01', 'thienth', '123', 'Tào hồng', 'Thiên', 'M', '1978-07-01 00:00:00', 'Sài gòn', '56 Hòang Diệu', 'TH', 0),
('C02', 'chauhm', '123', 'Hòang minh ', 'Châu', 'M', '1976-05-03 00:00:00', 'Sài gòn', '102 Kỳ Đồng', 'AV', 0),
('C03', 'huongpq', '123', 'Phan quỳnh', 'Hương', 'F', '1979-05-05 00:00:00', 'Sài gòn', '234 Phạm văn hai', 'AV', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
