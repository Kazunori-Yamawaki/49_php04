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
-- テーブルの構造 `sasae_order_table`
--

CREATE TABLE `sasae_order_table` (
  `id` int(12) NOT NULL,
  `o_time` datetime NOT NULL,
  `o_id` int(12) NOT NULL,
  `o_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `o_type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `o_content` text COLLATE utf8_unicode_ci NOT NULL,
  `r_flg` int(1) NOT NULL DEFAULT '0',
  `r_time` datetime DEFAULT NULL,
  `r_id` int(12) DEFAULT NULL,
  `r_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `sasae_order_table`
--

INSERT INTO `sasae_order_table` (`id`, `o_time`, `o_id`, `o_name`, `o_type`, `o_content`, `r_flg`, `r_time`, `r_id`, `r_name`) VALUES
(2, '2020-11-03 16:49:59', 5, '竈門　炭治郎', '移動', '那田蜘蛛山まで連れて行ってください。', 0, NULL, NULL, NULL),
(3, '2020-11-03 16:50:32', 6, '竈門　禰豆子', '買物', '口にくわえる竹を買ってきてください。', 0, NULL, NULL, NULL),
(4, '2020-11-03 16:53:45', 7, '我妻　善逸', '配送', '禰豆子ちゃんに花を届けてください。', 0, NULL, NULL, NULL),
(5, '2020-11-03 17:25:05', 9, '冨岡　義勇', '配送', '鱗滝さんに手紙を届けてください。', 0, NULL, NULL, NULL),
(6, '2020-11-03 17:26:08', 8, '嘴平　伊之助', '買物', '刀が折れたので買ってきてください。', 0, NULL, NULL, NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `sasae_order_table`
--
ALTER TABLE `sasae_order_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `sasae_order_table`
--
ALTER TABLE `sasae_order_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
