-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 May 2022, 10:56:55
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uzunlar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

DROP TABLE IF EXISTS `projeler`;
CREATE TABLE IF NOT EXISTS `projeler` (
  `proje_id` int(11) NOT NULL AUTO_INCREMENT,
  `proje_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_aciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `proje_kategori` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim_3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim_4` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`proje_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`proje_id`, `proje_adi`, `proje_aciklama`, `proje_kategori`, `resim_1`, `resim_2`, `resim_3`, `resim_4`) VALUES
(4, 'Maltepe', '...', '0', 'img/06a6f1ae0c.jpeg', 'img/a510cdc3f6.jpeg', '', ''),
(3, 'Pendik / GÃ¼llÃ¼ BaÄŸlan', '...', '0', 'img/8662ae317f.jpeg', 'img/6d30d30d53.jpeg', 'img/b4f8afb4eb.jpeg', 'img/2f6f83d361.jpeg'),
(5, 'Ordu / Ãœnye', '...', '0', 'img/da31cdc307.jpeg', 'img/0d9340.jpeg', 'img/a62e194dce.jpeg', ''),
(6, 'Kartal', '...', '1', 'img/2f793022c1.jpeg', 'img/c00e939bdb.jpeg', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

DROP TABLE IF EXISTS `resimler`;
CREATE TABLE IF NOT EXISTS `resimler` (
  `resim_id` int(11) NOT NULL AUTO_INCREMENT,
  `proje_id` int(11) NOT NULL,
  `resim_yolu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`resim_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
