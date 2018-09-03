-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018 年 9 月 03 日 14:59
-- サーバのバージョン： 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `performing_arts`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `category_code`, `comment`, `created`, `updated`) VALUES
(1, 0, '9', '-1', '2018-08-30 15:36:35', '2018-08-30 06:36:35'),
(2, 9, 'kimono', 'cjdhcn', '2018-08-30 15:45:52', '2018-08-30 06:45:52'),
(3, 9, 'kimono', 'kijuhyg', '2018-08-30 15:49:15', '2018-08-30 06:49:15'),
(4, 9, 'kimono', 'hoge', '2018-08-30 16:19:15', '2018-08-30 07:19:15'),
(5, 9, 'kimono', 'hoge', '2018-08-30 16:19:40', '2018-08-30 07:19:40'),
(6, 9, 'kabuki', 'kiujyh', '2018-08-30 16:22:52', '2018-08-30 07:22:52'),
(7, 9, 'kabuki', 'kijuh', '2018-08-30 16:25:20', '2018-08-30 07:25:20'),
(9, 9, 'rakugo', 'kdieuf', '2018-08-30 16:27:51', '2018-08-30 07:27:51'),
(10, 9, 'rakugo', 'lokijuhyg', '2018-08-31 13:09:38', '2018-08-31 04:09:38');

-- --------------------------------------------------------

--
-- テーブルの構造 `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `contents_img_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `contents`
--

INSERT INTO `contents` (`id`, `user_id`, `category_code`, `contents_img_name`, `created`, `updated`) VALUES
(1, 4, 'kabuki', '20180903144113IMG_0282.JPG', '2018-09-03 14:47:30', '2018-09-03 05:47:30'),
(2, 4, 'kabuki', '20180903144113IMG_0282.JPG', '2018-09-03 14:53:38', '2018-09-03 05:53:38'),
(3, 4, 'kabuki', '20180903145549kabuki_bg 19.17.09.png', '2018-09-03 14:55:50', '2018-09-03 05:55:50'),
(5, 4, 'kabuki', '20180903145629kabuki4.jpg', '2018-09-03 14:56:31', '2018-09-03 05:56:31'),
(6, 4, 'kabuki', '20180903145721kabuki3.png', '2018-09-03 14:57:23', '2018-09-03 05:57:23'),
(7, 4, 'kimono', '20180903145732kimono3.jpg', '2018-09-03 14:57:33', '2018-09-03 05:57:33'),
(8, 4, 'kimono', '20180903145743kimono1.jpg', '2018-09-03 14:57:45', '2018-09-03 05:57:45'),
(9, 4, 'kimono', '20180903145754kimono2.jpg', '2018-09-03 14:57:57', '2018-09-03 05:57:57'),
(10, 4, 'rakugo', '20180903145816rakugo2.jpg', '2018-09-03 14:58:17', '2018-09-03 05:58:17'),
(11, 4, 'rakugo', '20180903145827rakugo4.jpg', '2018-09-03 14:58:29', '2018-09-03 05:58:29'),
(12, 4, 'rakugo', '20180903145837rakugo3.jpg', '2018-09-03 14:58:39', '2018-09-03 05:58:39'),
(13, 4, 'rakugo', '20180903145852rakugo1.jpg', '2018-09-03 14:58:53', '2018-09-03 05:58:53');

-- --------------------------------------------------------

--
-- テーブルの構造 `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `oreated` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `img_name`, `created`, `updated`) VALUES
(1, '?', '?', '?', '?', '2018-08-28 13:54:14', '2018-08-28 04:54:14'),
(4, 'ccc', 'cktfp656@gmail.com', 'e9c0ef9cb8135466b17ee26140460c95a75e37d4', '2018082914082317edaeba-a9b9-4dac-ba9f-c67149346fb0.jpg', '2018-08-29 14:08:24', '2018-08-29 05:08:24'),
(5, 'user1', 'hoge@hoge.com', '3b2c6c10d0e78072d14e02cc4c587814d0f10f3a', '20180831132325IMG_0282.JPG', '2018-08-31 13:23:26', '2018-08-31 04:23:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
