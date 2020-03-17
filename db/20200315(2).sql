-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 15, 2020 lúc 04:51 PM
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
  `gender` int(1) NOT NULL DEFAULT 0 COMMENT '0: male; 1:female; 2:other',
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 2 COMMENT '0: admin; 1: employers; \r\n2: customers',
  `flag` int(11) NOT NULL DEFAULT 0 COMMENT '0: display; 1:deleted',
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(10) NOT NULL DEFAULT 0,
  `user_modified` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id_acco`, `name_acco`, `age`, `gender`, `email`, `phone`, `address`, `password`, `image`, `role`, `flag`, `created`, `modified`, `user_created`, `user_modified`) VALUES
(1, 'Lê Nguyễn Hoài Huy', NULL, 0, NULL, '0788362644', '121212', '$2y$10$w6AwcgwDbCoezXtRGhO17urAbYaWQQyNGaloDRsClGXSMAjv9Z23S', NULL, 0, 0, '2020-03-14 17:03:19', NULL, 0, NULL);

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `companies`
--

CREATE TABLE `companies` (
  `id_comp` int(10) NOT NULL,
  `name_comp` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0 COMMENT '0: display; 1:deleted',
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
  `flag` int(1) NOT NULL DEFAULT 0 COMMENT '0: display; 1:deleted',
  `modified` timestamp NULL DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_created` int(1) DEFAULT NULL,
  `user_modified` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `sorting`, `flag`, `modified`, `created`, `user_created`, `user_modified`) VALUES
(1, 'Trang chủ', 0, 1, NULL, '2020-03-10 17:22:25', NULL, NULL),
(2, 'Protein & Tăng cân', 0, 0, NULL, '2020-03-10 17:22:25', NULL, NULL),
(3, 'Năng lượng-Sức khỏe', 0, 0, NULL, '2020-03-10 17:23:07', NULL, NULL),
(5, 'Giảm mỡ - Giảm cân', 0, 0, NULL, '2020-03-10 17:24:59', NULL, NULL),
(6, 'Giới thiệu', 0, 0, NULL, '2020-03-10 17:24:59', NULL, NULL),
(10, 'Liên hệ', 0, 0, NULL, '2020-03-15 07:54:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `prod_id` int(11) NOT NULL,
  `acco_id` int(11) NOT NULL,
  `realPrice` float DEFAULT NULL,
  `quality` int(1) DEFAULT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `flag` int(1) NOT NULL DEFAULT 0,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_prod` int(11) NOT NULL,
  `name_prod` varchar(100) DEFAULT NULL,
  `cate_id` int(10) DEFAULT NULL,
  `comp_id` int(10) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `price_manu` float DEFAULT NULL,
  `discount` int(1) NOT NULL DEFAULT 0,
  `barcode` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image_relate` varchar(255) DEFAULT NULL,
  `image_certifi` varchar(255) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `uses_prod` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0 COMMENT '0: display; 1:deleted',
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(1) NOT NULL DEFAULT 0,
  `user_modified` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_prod`, `name_prod`, `cate_id`, `comp_id`, `price`, `price_manu`, `discount`, `barcode`, `image`, `thumbnail`, `image_relate`, `image_certifi`, `count`, `uses_prod`, `description`, `flag`, `created`, `modified`, `user_created`, `user_modified`) VALUES
(1, 'D2', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2020-03-12 16:58:09', NULL, 0, 0),
(5, 'Demo product 1', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2020-03-12 17:03:03', NULL, 0, 0),
(6, 'Product Demo 01', 1, 1, 35000, 0, 15, '', NULL, NULL, NULL, NULL, 0, 'Product Demo 01', NULL, 0, '2020-03-15 10:57:15', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id_sett` int(11) NOT NULL,
  `key_sett` varchar(20) DEFAULT NULL,
  `key_id` int(5) DEFAULT NULL,
  `key_display` varchar(255) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `user_created` int(11) NOT NULL DEFAULT 0,
  `user_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_product`
--

CREATE TABLE `setting_product` (
  `sett_key` varchar(20) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`prod_id`,`acco_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_prod`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_sett`);

--
-- Chỉ mục cho bảng `setting_product`
--
ALTER TABLE `setting_product`
  ADD PRIMARY KEY (`sett_key`,`prod_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id_acco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `companies`
--
ALTER TABLE `companies`
  MODIFY `id_comp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id_sett` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
