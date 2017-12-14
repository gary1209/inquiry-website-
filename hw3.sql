-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017 年 12 月 08 日 02:58
-- 伺服器版本: 5.7.20
-- PHP 版本： 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `hw3`
--

-- --------------------------------------------------------

--
-- 資料表結構 `history`
--

CREATE TABLE `history` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `p1` int(20) NOT NULL DEFAULT '0',
  `p2` int(20) NOT NULL DEFAULT '0',
  `p3` int(20) NOT NULL DEFAULT '0',
  `text` text,
  `answer` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `history`
--

INSERT INTO `history` (`id`, `email`, `p1`, `p2`, `p3`, `text`, `answer`) VALUES
(1, '1111@1111', 4, 0, 0, 'qqq', NULL),
(2, '1111@1111', 3, 5, 0, 'how', 50);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `stock` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `stock`) VALUES
(1, 'marantz pm5005', 16000, 20),
(2, 'CRYSTAL AUDIOVIDEO THX SELECT', 18000, 25),
(5, 'denon avr-x4100w', 79900, 15);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `client` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `client`) VALUES
(1, '1@company', '1234', 0),
(2, '2@company', '1234', 0),
(9, '3@company', '1234', 0),
(10, '123@client', '1234', 1),
(13, '123@123', '1234', 1),
(14, '1111@1111', '1111', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `history`
--
ALTER TABLE `history`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
