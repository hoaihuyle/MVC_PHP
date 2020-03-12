-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2020 lúc 02:47 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `codosupp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `name_menu` varchar(100) DEFAULT NULL,
  `sorting` int(1) NOT NULL DEFAULT 0,
  `flag` int(1) NOT NULL DEFAULT 0,
  `modified` timestamp NULL DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_modified` int(1) DEFAULT NULL,
  `user_created` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `sorting`, `flag`, `modified`, `created`, `user_modified`, `user_created`) VALUES
(1, 'Trang chủ', 0, 0, NULL, '2020-03-10 17:22:25', NULL, NULL),
(2, 'Protein & Tăng cân', 0, 0, NULL, '2020-03-10 17:22:25', NULL, NULL),
(3, 'Năng lượng-Sức khỏe', 0, 0, NULL, '2020-03-10 17:23:07', NULL, NULL),
(4, 'Giảm mỡ - Giảm cân', 0, 0, NULL, '2020-03-10 17:23:07', NULL, NULL),
(5, 'Giới thiệu', 0, 0, NULL, '2020-03-10 17:24:59', NULL, NULL),
(6, 'Liên hệ', 0, 0, NULL, '2020-03-10 17:24:59', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
