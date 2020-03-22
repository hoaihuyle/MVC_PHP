-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 22, 2020 lúc 07:49 AM
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
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id_sett` int(11) NOT NULL,
  `key_sett` varchar(20) DEFAULT NULL,
  `key_id` int(5) DEFAULT NULL,
  `key_display` varchar(255) DEFAULT NULL,
  `name_display` varchar(10) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(11) NOT NULL DEFAULT 0,
  `user_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id_sett`, `key_sett`, `key_id`, `key_display`, `name_display`, `flag`, `created`, `modified`, `user_created`, `user_modified`) VALUES
(1, 'color', 1, 'màu đen', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL),
(2, 'color', 2, 'Trắng', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL),
(3, 'color', 3, 'màu trắng', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL),
(4, 'color', 4, 'màu đỏ', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL),
(5, 'taste_iso', 1, 'Chocolate Shake', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL),
(6, 'taste_iso', 2, 'Banana Foster', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL),
(7, 'taste_iso', 3, 'Vanilla Bean', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL),
(8, 'origin', 1, 'USD', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL),
(9, 'origin', 2, 'China', NULL, 0, '2020-03-22 06:46:27', NULL, 0, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_sett`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id_sett` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
