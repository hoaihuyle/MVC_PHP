-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 04:03 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codosupp`
--

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE `panel` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `link` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `panel`
--

INSERT INTO `panel` (`id`, `image`, `status`, `creat_at`, `update_at`, `link`) VALUES
(19, '2020032622644.jpg', 0, '2020-03-26 02:57:21', '2020-03-26 02:57:21', 'http://ngocthanh06.herokuapp.com/'),
(20, '2020032634559.jpg', 0, '2020-03-26 02:45:59', '0000-00-00 00:00:00', '123123'),
(21, '2020032635745.jpg', 0, '2020-03-26 02:57:45', '0000-00-00 00:00:00', 'http://ngocthanh06.herokuapp.com/'),
(22, '2020032635756.jpg', 0, '2020-03-26 02:58:02', '2020-03-26 02:58:02', 'http://ngocthanh06.herokuapp.com/'),
(23, '2020032635823.jpg', 0, '2020-03-26 02:58:23', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel`
--
ALTER TABLE `panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
