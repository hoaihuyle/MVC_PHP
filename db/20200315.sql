-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 15, 2020 lúc 10:23 AM
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
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(10) NOT NULL,
  `name_cate` varchar(100) DEFAULT NULL,
  `menu_id` int(10) DEFAULT NULL,
  `title_cate` varchar(255) NOT NULL,
  `cms` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0 COMMENT '0: display; 1:deleted',
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(1) NOT NULL DEFAULT 0,
  `user_modified` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_cate`, `name_cate`, `menu_id`, `title_cate`, `cms`, `image`, `flag`, `created`, `modified`, `user_created`, `user_modified`) VALUES
(1, 'Protein hoàn chỉnh', 2, '', NULL, NULL, 0, '2020-03-12 16:28:34', NULL, 0, 0),
(2, 'Whey - Casein protein', 2, '', NULL, NULL, 0, '2020-03-12 16:29:34', NULL, 0, 0),
(6, 'Pre-workout', 3, '', NULL, NULL, 0, '2020-03-13 18:36:55', NULL, 0, NULL),
(7, 'Intra-workout', 3, '', NULL, NULL, 0, '2020-03-14 05:42:23', NULL, 0, NULL),
(8, 'Thời điểm khác tập', 3, '', NULL, NULL, 0, '2020-03-15 07:58:39', NULL, 0, NULL),
(9, 'BCAA', 3, '', NULL, NULL, 0, '2020-03-15 08:01:32', NULL, 0, NULL),
(10, 'Amino Acids', 3, '', NULL, NULL, 0, '2020-03-15 08:01:51', NULL, 0, NULL),
(11, 'Hỗ trợ sức khỏe khác', 3, '', NULL, NULL, 0, '2020-03-15 08:02:06', NULL, 0, NULL),
(12, 'Whey thấp năng lượng', 5, '', NULL, NULL, 0, '2020-03-15 08:02:18', NULL, 0, NULL),
(13, 'Bữa ăn thông minh', 5, '', NULL, NULL, 0, '2020-03-15 08:02:32', NULL, 0, NULL),
(14, 'Mạnh - Hiệu quả nhanh', 5, '', NULL, NULL, 0, '2020-03-15 08:02:44', NULL, 0, NULL),
(15, 'Vừa - Duy trì vóc dáng', 5, '', NULL, NULL, 0, '2020-03-15 08:02:54', NULL, 0, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
