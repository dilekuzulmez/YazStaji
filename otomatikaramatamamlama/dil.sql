-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Eyl 2016, 14:27:47
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
-- Tablo için tablo yapısı `dil`
--

CREATE TABLE IF NOT EXISTS `dil` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `dil` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `dil`
--

INSERT INTO `dil` (`id`, `dil`) VALUES
(1, 'php'),
(2, 'c++'),
(3, 'java'),
(4, 'python'),
(5, 'delphi'),
(6, 'visual basic'),
(7, '.net'),
(8, 'asp'),
(9, 'html'),
(10, 'sql'),
(11, 'javascript'),
(12, 'css'),
(13, 'c'),
(14, 'basic'),
(15, 'fuzuli'),
(16, 'cobol'),
(17, 'perl'),
(18, 'ruby'),
(19, 'pascal'),
(20, 'fortran'),
(21, 'c#'),
(22, 'ada'),
(23, 'xml'),
(24, 'ajax'),
(25, 'jquery');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
