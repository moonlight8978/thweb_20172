-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2018 lúc 08:25 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlcanbo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `MaCB` varchar(6) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `HoCB` varchar(30) NOT NULL,
  `TenCB` varchar(15) NOT NULL,
  `GioiTinh` char(1) NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `NoiSinh` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `Mavien` varchar(6) NOT NULL,
  `Chucdanh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`MaCB`, `Username`, `Password`, `HoCB`, `TenCB`, `GioiTinh`, `NgaySinh`, `NoiSinh`, `DiaChi`, `Mavien`, `Chucdanh`) VALUES
('A01', 'Haint', '12345', 'Nguyễn thị', 'Hải', 'F', '1977-02-23 00:00:00', 'Hà Nội', '12 B Võ văn Tần', 'IT', 'GS'),
('A02', 'Chinhtv', '12345', 'Trần văn', 'Chính', 'M', '1977-12-24 00:00:00', 'Huế', '34 Nguyễn Bỉnh Khiêm', 'IT', 'PGS'),
('A03', 'Yentb', '12345', 'Lê Bạch', 'Yến', 'F', '1996-02-21 00:00:00', 'Nghệ An', '765 PasTeur', 'IT', 'TS'),
('B01', 'Maitt', '12345', 'Trần Thanh', 'Mai', 'F', '1977-08-12 00:00:00', 'Thanh Hóa', '32 Lê lai', 'TT', 'TS'),
('B02', 'Thuytt', '12345', 'Trần thu ', 'Thủy', 'F', '1977-01-01 00:00:00', 'Hòa Bình', '45 Nguyễn Thái sơn', 'TT', 'ThS'),
('B03', 'Thanhlt', '12345', 'Lê thị', 'Thanh', 'F', '1977-01-01 00:00:00', 'Hà Nội', '345 Nguyễn Kiệm', 'CK', 'TS'),
('B04', 'Kimtt', '12345', 'Trần trọng ', 'Kim', 'M', '1977-01-01 00:00:00', 'Nam Định', '123 Lê văn sỹ', 'CK', 'ThS'),
('C01', 'Thienth', '12345', '12345 Tào hồng', 'Thiên', 'M', '1977-01-01 00:00:00', 'Nam Định', '56 Hòang Diệu', 'EM', 'TS'),
('C02', 'Chauhm', '12345', 'Hòang minh ', 'Châu', 'M', '1977-01-01 00:00:00', 'Thái bình', '102 Kỳ Đồng', 'EM', 'ThS'),
('C03', 'huongpq', '12345', 'Phan quỳnh', 'Hương', 'F', '1977-01-01 00:00:00', 'Hà Nội', '234 Phạm văn hai', 'IT', 'TS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangday`
--

CREATE TABLE `giangday` (
  `MaCB` varchar(6) NOT NULL,
  `MaMH` varchar(6) NOT NULL,
  `Maky` varchar(6) NOT NULL,
  `Malop` varchar(6) NOT NULL,
  `Sosv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giangday`
--

INSERT INTO `giangday` (`MaCB`, `MaMH`, `Maky`, `Malop`, `Sosv`) VALUES
('A01', '01', '20152', '561234', 100),
('A01', '03', '20152', '561235', 120),
('A02', '01', '20152', '561236', 80),
('A02', '05', '20152', '561237', 56),
('A03', '01', '20152', '561238', 78),
('A03', '03', '20152', '561239', 67),
('B01', '02', '20152', '561241', 98),
('B01', '03', '20152', '561240', 78),
('B02', '01', '20152', '561243', 56),
('B02', '04', '20152', '561242', 69),
('B03', '03', '20152', '561244', 76),
('B04', '05', '20152', '561245', 42),
('B04', '06', '20152', '561246', 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `MaHP` varchar(6) NOT NULL,
  `TenHP` varchar(50) NOT NULL,
  `Khoiluong` varchar(255) NOT NULL,
  `Loaigio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`MaHP`, `TenHP`, `Khoiluong`, `Loaigio`) VALUES
('IT1110', 'Tin học đại cương', '4(3-1-1-4)', 'LT-BT-TN'),
('IT3040', 'Kỹ thuật lập trình', '2(2-1-0-4)', 'BT-TN'),
('IT3600', 'Lập trình hướng đối tượng', '2(2-1-0-4)', 'LT-BT'),
('IT3910', 'Project 1', '3(0-0-6-12)', 'DA'),
('IT4080', 'Nhập môn công nghệ phần mêm', '2(2-1-0-4)', 'LT-BT'),
('IT4408', 'Thiết kế và lập trình web', '3(2-0-1-6)', 'LT-TN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vien`
--

CREATE TABLE `vien` (
  `Mavien` varchar(6) NOT NULL,
  `Tenvien` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vien`
--

INSERT INTO `vien` (`Mavien`, `Tenvien`) VALUES
('CK', 'Cơ khí'),
('EM', 'Môi trường'),
('IT', 'CNTT & TT'),
('TT', 'Toán tin ứng dụng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`MaCB`);

--
-- Chỉ mục cho bảng `giangday`
--
ALTER TABLE `giangday`
  ADD PRIMARY KEY (`MaCB`,`MaMH`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`MaHP`);

--
-- Chỉ mục cho bảng `vien`
--
ALTER TABLE `vien`
  ADD PRIMARY KEY (`Mavien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
