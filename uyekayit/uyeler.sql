-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Eyl 2016, 15:26:10
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
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adisoyadi` varchar(30) NOT NULL,
  `kullaniciadi` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `emailigizle` char(1) DEFAULT '0',
  `sifre` varchar(50) NOT NULL,
  `cinsiyeti` char(1) DEFAULT NULL,
  `dogumtarihi` date DEFAULT NULL,
  `uyeliktarihi` date DEFAULT NULL,
  `songiristarihi` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `adisoyadi`, `kullaniciadi`, `email`, `emailigizle`, `sifre`, `cinsiyeti`, `dogumtarihi`, `uyeliktarihi`, `songiristarihi`) VALUES
(1, 'Dilek Uzulmez', 'dilekuzulmez', 'dilekuzulmez@gmail.com', 'h', '8cb2237d0679ca88db6464eac60da96345513964', 'k', '1995-01-01', '2016-08-31', '2016-08-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
