-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 14 May 2024, 20:39:50
-- Sunucu sürümü: 10.5.24-MariaDB
-- PHP Sürümü: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `enesbabekoglu_lab`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `USERS`
--

CREATE TABLE `USERS` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `E_Mail` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `GSM_No` decimal(10,0) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `USERS`
--

INSERT INTO `USERS` (`User_ID`, `User_Name`, `E_Mail`, `First_Name`, `Last_Name`, `GSM_No`, `Birth_Date`, `Password`) VALUES
(1, 'enesbabekoglu', 'enesbabekoglu@gmail.com', 'Enes', 'BabekoÄŸlu', 5375375475, '2002-05-01', '$2y$10$9HgELsmIb59lcvLDySvMSOU5HOSkhUpaxz1zW/dhQtXdxl7yg9gIa');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`User_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `USERS`
--
ALTER TABLE `USERS`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
