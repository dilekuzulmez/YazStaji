-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Eyl 2016, 14:15:41
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
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `ID` int(11) NOT NULL,
  `KULLANICIADI` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `SIFRE` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`ID`, `KULLANICIADI`, `SIFRE`) VALUES
(0, 'Dilek', '827ccb0eea8a706c4c34a16891f84e7b'),
(0, 'Ibrahim', '01cfcd4f6b8770febfb40cb906715822'),
(0, 'Ibrahim', '01cfcd4f6b8770febfb40cb906715822'),
(0, 'Nezahat', 'c4ca4238a0b923820dcc509a6f75849b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
