-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2020 lúc 06:06 PM
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
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(255) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `token` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `account`, `email`, `phone`, `address`, `level`, `password`, `avatar`, `status`, `token`, `create_at`, `update_at`) VALUES
(11, 'kunh0zdn', 'Đào Ngọc Thạnh', 'kunh0zdn@gmail.com', '0783449848', '43 Nguyễn Khánh Toàn', 1, '202cb962ac59075b964b07152d234b70', '', 1, 'mVC8Yx16Mb', '2018-12-02 14:58:15', '2018-12-27 02:41:20'),
(13, 'quynhnhi', 'Lữ Thị Quỳnh nhi', 'quynhnhi@gmail.com', '123', '123', 0, '202cb962ac59075b964b07152d234b70', '', 1, '', '2018-12-03 08:06:28', '2018-12-09 13:25:56'),
(14, 'phat', 'Đỗ Thành Phát', 'phat@gmail.com', '123', '1231', 0, '202cb962ac59075b964b07152d234b70', '', 1, '', '2018-12-07 14:54:35', '2018-12-09 04:01:11'),
(15, 'ngocthanh06', 'Đào Ngọc Thạnh', 'ngocthanh6398@gmail.com', '123', '123', 0, '202cb962ac59075b964b07152d234b70', '', 1, 'Cxw5eVGzAZ', '2018-12-08 08:23:15', '2018-12-26 15:40:37'),
(16, 'long', 'Trần Duy Long', 'long@gmail.com', '123', '123', 0, '202cb962ac59075b964b07152d234b70', '', 1, '', '2018-12-11 16:18:22', '2018-12-11 16:18:22'),
(23, '12345678', '123', '123123@gmail.com', '123', '123', 0, '202cb962ac59075b964b07152d234b70', '', 1, '', '2018-12-16 11:18:53', '2018-12-16 11:18:53'),
(24, '321', '321', '321@gmail.com', '321', '321', 1, '202cb962ac59075b964b07152d234b70', '', 1, '', '2018-12-16 11:27:56', '2018-12-26 06:26:25'),
(25, '333', '333', '123123333@gmail.com', '123123', '123', 1, '202cb962ac59075b964b07152d234b70', '', 1, '', '2018-12-16 11:29:24', '2018-12-26 06:24:53'),
(27, 'nhiquynh123', 'nhi', 'luthiquynhnhi111098@gmail.com', '123', '123', 0, '202cb962ac59075b964b07152d234b70', '', 1, '', '2018-12-26 14:08:26', '2018-12-26 14:08:26'),
(28, 'ngoc', 'Nguyễn Bá Ngọc', 'nguyenngoc.131297@gmail.com', '123', '123', 0, '202cb962ac59075b964b07152d234b70', '', 1, '', '2018-12-26 14:09:47', '2018-12-26 14:26:29');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
