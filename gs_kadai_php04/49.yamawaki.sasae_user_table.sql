-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sasae`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `sasae_user_table`
--

CREATE TABLE `sasae_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `adress_num` int(7) NOT NULL,
  `adress` varchar(256) CHARACTER SET utf8 NOT NULL,
  `tel` int(12) NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `lid` varchar(64) CHARACTER SET utf8 NOT NULL,
  `lpw` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `sasae_user_table`
--

INSERT INTO `sasae_user_table` (`id`, `name`, `adress_num`, `adress`, `tel`, `email`, `kanri_flg`, `lid`, `lpw`) VALUES
(5, '竈門　炭治郎', 1111111, 'テスト１', 111111111, 'tanjiro@kimetu.com', 0, '111', '111'),
(6, '竈門　禰豆子', 2222222, 'テスト２', 222222222, 'neduko@kimetu.com', 0, '222', '222'),
(7, '我妻　善逸', 3333333, 'テスト３', 333333333, 'zenitsu@kimetu.com', 0, '333', '333'),
(8, '嘴平　伊之助', 4444444, 'テスト４', 444444444, 'inosuke@kimetu.com', 0, '444', '444'),
(9, '冨岡　義勇', 5555555, 'テスト５', 555555555, 'giyu@kimetu.com', 1, '555', '555'),
(10, '栗花落　カナヲ', 6666666, 'テスト６', 666666666, 'kanao@kimetu.com', 0, '666', '666'),
(11, '不死川　玄弥', 7777777, 'テスト７', 777777777, 'genya@kimetu.com', 0, '777', '777'),
(12, '煉獄　杏寿郎', 8888888, 'テスト８', 888888888, 'kyojuro@kimetu.com', 1, '888', '888'),
(14, 'test', 111, 'test', 111, 'test0@test.jp', 0, 'test', 'test');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `sasae_user_table`
--
ALTER TABLE `sasae_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `sasae_user_table`
--
ALTER TABLE `sasae_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
