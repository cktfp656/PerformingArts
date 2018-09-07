-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018 年 9 月 07 日 13:10
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
  `content_id` int(11) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `content_id`, `category_code`, `comment`, `created`, `updated`) VALUES
(1, 2, 0, 'rakugo', 'hogehoge', '2018-09-06 13:55:49', '2018-09-06 04:55:49');

-- --------------------------------------------------------

--
-- テーブルの構造 `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `contents_img_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `contents`
--

INSERT INTO `contents` (`id`, `user_id`, `category_code`, `contents_img_name`, `description`, `created`, `updated`) VALUES
(1, 4, 'kabuki', '20180903144113IMG_0282.JPG', '', '2018-09-03 14:47:30', '2018-09-03 05:47:30'),
(2, 4, 'kabuki', '20180903144113IMG_0282.JPG', '', '2018-09-03 14:53:38', '2018-09-03 05:53:38'),
(3, 4, 'kabuki', '20180903145549kabuki_bg 19.17.09.png', '', '2018-09-03 14:55:50', '2018-09-03 05:55:50'),
(5, 4, 'kabuki', '20180903145629kabuki4.jpg', '', '2018-09-03 14:56:31', '2018-09-03 05:56:31'),
(6, 4, 'kabuki', '20180903145721kabuki3.png', '', '2018-09-03 14:57:23', '2018-09-03 05:57:23'),
(7, 4, 'kimono', '20180903145732kimono3.jpg', '', '2018-09-03 14:57:33', '2018-09-03 05:57:33'),
(8, 4, 'kimono', '20180903145743kimono1.jpg', '', '2018-09-03 14:57:45', '2018-09-03 05:57:45'),
(9, 4, 'kimono', '20180903145754kimono2.jpg', '', '2018-09-03 14:57:57', '2018-09-03 05:57:57'),
(10, 4, 'rakugo', '20180903145816rakugo2.jpg', '', '2018-09-03 14:58:17', '2018-09-03 05:58:17'),
(11, 4, 'rakugo', '20180903145827rakugo4.jpg', '', '2018-09-03 14:58:29', '2018-09-03 05:58:29'),
(12, 4, 'rakugo', '20180903145837rakugo3.jpg', '', '2018-09-03 14:58:39', '2018-09-03 05:58:39'),
(13, 4, 'rakugo', '20180903145852rakugo1.jpg', '', '2018-09-03 14:58:53', '2018-09-03 05:58:53');

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
(1, 'akira', 'cktfp656@gmail.com', '99dd1be3cfd6076c36183e449b994cc6201293e0', '', '2018-09-06 13:38:23', '2018-09-06 04:38:23'),
(2, 'cmkdj', 'cktfp656@gmail.com', '3b2c6c10d0e78072d14e02cc4c587814d0f10f3a', '20180906135453rakugo1.jpg', '2018-09-06 13:55:07', '2018-09-06 04:55:07');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
