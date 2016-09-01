-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Eyl 2016, 14:58:51
-- Sunucu sürümü: 5.5.50-0ubuntu0.14.04.1
-- PHP Sürümü: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veriler`
--

CREATE TABLE IF NOT EXISTS `veriler` (
  `id` int(11) NOT NULL,
  `isim` varchar(25) NOT NULL,
  `ulke` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `veriler`
--

INSERT INTO `veriler` (`id`, `isim`, `ulke`) VALUES
(1, 'DILEK', 'TURKIYE'),
(2, 'MIKE ', 'NIJERYA'),
(3, 'BARBARA', 'AMERIKA'),
(4, 'ALEX', 'INGILTERE'),
(5, 'OSMAN', 'TURKIYE'),
(6, 'ONUR', 'TURKIYE'),
(7, 'EMRE', 'TURKIYE'),
(8, 'GEORGE', 'AMERIKA'),
(9, 'IBRAHIM', 'TURKIYE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
