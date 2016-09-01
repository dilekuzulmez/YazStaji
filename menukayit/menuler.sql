-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Eyl 2016, 15:12:34
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
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE IF NOT EXISTS `menuler` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL,
  `link` varchar(255) DEFAULT '#',
  `sira` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`id`, `menu`, `link`, `sira`) VALUES
(1, 'Dersler', 'www.dersler.com', 10),
(2, 'Yemekler', 'www.yemekler.com', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
