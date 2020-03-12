-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 12, 2020 lúc 06:59 PM
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
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id_acco` int(11) NOT NULL,
  `name_acco` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` int(1) NOT NULL DEFAULT 0,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(10) NOT NULL DEFAULT 0,
  `user_modified` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(10) NOT NULL,
  `name_cate` varchar(100) DEFAULT NULL,
  `menu_id` int(10) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(1) NOT NULL DEFAULT 0,
  `user_modified` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_cate`, `name_cate`, `menu_id`, `flag`, `created`, `modified`, `user_created`, `user_modified`) VALUES
(1, 'demo category', NULL, 0, '2020-03-12 16:28:34', NULL, 0, 0),
(2, 'demo category', NULL, 0, '2020-03-12 16:29:34', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `companies`
--

CREATE TABLE `companies` (
  `id_comp` int(10) NOT NULL,
  `name_comp` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(11) NOT NULL DEFAULT 0,
  `user_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `companies`
--

INSERT INTO `companies` (`id_comp`, `name_comp`, `thumbnail`, `flag`, `created`, `modified`, `user_created`, `user_modified`) VALUES
(1, 'congty demoedi', NULL, 0, '2020-03-12 17:26:18', NULL, 0, 0);

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
  `user_created` int(1) DEFAULT NULL,
  `user_modified` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `sorting`, `flag`, `modified`, `created`, `user_created`, `user_modified`) VALUES
(1, 'Trang chủ', 0, 0, NULL, '2020-03-10 17:22:25', NULL, NULL),
(2, 'Protein & Tăng cân', 0, 0, NULL, '2020-03-10 17:22:25', NULL, NULL),
(3, 'Năng lượng-Sức khỏe', 0, 0, NULL, '2020-03-10 17:23:07', NULL, NULL),
(5, 'Giới thiệu', 0, 0, NULL, '2020-03-10 17:24:59', NULL, NULL),
(6, 'Liên hệ', 0, 0, NULL, '2020-03-10 17:24:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_prod` int(11) NOT NULL,
  `name_prod` varchar(100) DEFAULT NULL,
  `cate_id` int(10) DEFAULT NULL,
  `comp_id` int(10) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(1) NOT NULL DEFAULT 0,
  `user_modified` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_prod`, `name_prod`, `cate_id`, `comp_id`, `description`, `flag`, `created`, `modified`, `user_created`, `user_modified`) VALUES
(1, 'D2', NULL, NULL, NULL, 0, '2020-03-12 16:58:09', NULL, 0, 0),
(5, 'Demo product 1', NULL, NULL, NULL, 0, '2020-03-12 17:03:03', NULL, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id_acco`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id_comp`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id_acco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `companies`
--
ALTER TABLE `companies`
  MODIFY `id_comp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
