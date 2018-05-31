-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Eyl 2015, 18:57:50
-- Sunucu sürümü: 5.6.23
-- PHP Sürümü: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `gizlibil_arama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arama`
--

CREATE TABLE IF NOT EXISTS `arama` (
  `baslik` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `link` varchar(255) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `arama`
--

INSERT INTO `arama` (`baslik`, `aciklama`, `link`) VALUES
('Ümit Bilgin Blog', 'Ümit Bilgin Kişisel Web Sitesi  - Blog', 'http://umitbilgin.com/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
