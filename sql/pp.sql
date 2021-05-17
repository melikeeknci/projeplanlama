-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 May 2021, 21:57:05
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_me`
--

CREATE TABLE `about_me` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `cv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `about_me`
--

INSERT INTO `about_me` (`about_id`, `about_title`, `content`, `cv`) VALUES
(1, 'HAKKIMDA', 'Ben Melike Ekinci. 20 yaşındayım aslen Karslı doğma büyüme Gebzeliyim. İleride başarılı bir bilgisayar mühendisi olmayı hedefliyorum.\r\n\r\nArkadaşlarımla vakit geçirmekten, kitap okumaktan hoşlanırım.', 'pp_diagrams2.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `locationn` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `gsm` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `content`, `locationn`, `email`, `facebook`, `instagram`, `twitter`, `linkedin`, `gsm`) VALUES
(1, 'İLETİŞİM', 'KOCAELİ', 'melikeeknci123@gmail.com', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', '05453864552');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_settings`
--

CREATE TABLE `site_settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `namee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `site_settings`
--

INSERT INTO `site_settings` (`settings_id`, `site_title`, `namee`) VALUES
(1, 'Melike Ekinci', 'MELİKE EKİNCİ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `fourth_skill` varchar(50) NOT NULL,
  `first_counter` varchar(10) NOT NULL,
  `second_counter` varchar(10) NOT NULL,
  `third_counter` varchar(10) NOT NULL,
  `fourth_counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `skills`
--

INSERT INTO `skills` (`skill_id`, `site_title`, `first_skill`, `second_skill`, `third_skill`, `fourth_skill`, `first_counter`, `second_counter`, `third_counter`, `fourth_counter`) VALUES
(1, 'YETENEKLERİM', 'C', 'HTML', 'JAVASCRİPT', 'PHP', '90', '30', '40', '60');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'melike', 'melike@e.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_me`
--
ALTER TABLE `about_me`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
