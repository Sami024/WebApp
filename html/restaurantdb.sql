-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 jan 2025 om 21:33
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `adminlog`
--

INSERT INTO `adminlog` (`id`, `username`, `password`) VALUES
(1, 'Hammo', '112'),
(2, 'admin', '3333'),
(3, 'user', '4444');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `food`
--

CREATE TABLE `food` (
  `id` int(50) NOT NULL,
  `soort` varchar(50) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `ingredienten` varchar(500) NOT NULL,
  `dieet` varchar(50) NOT NULL,
  `prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `food`
--

INSERT INTO `food` (`id`, `soort`, `naam`, `ingredienten`, `dieet`, `prijs`) VALUES
(19, 'Pizza', 'Pizza Margherita', 'Pizza met tomatensaus, kaas en organo', 'Vegatarisch', 8.45),
(20, 'Pizza', 'Pizza Funghi', '\r\nPizza met tomatensaus, kaas, champignons en organo', 'Vegan', 9.85),
(21, 'Pizza', 'Pizza Tonno', '\r\n\r\nPizza met tomatensaus, kaas, tonijn, ui en organo', ' Vis', 11.55),
(22, 'Pizza', 'Pizza Döner', '\r\n\r\nPizza met tomatensaus, kaas, donervlees en organo', 'Vlees', 11.85),
(23, 'Schotels', 'Döner Schotel', 'Döner, salade, friet, broodje en saus naar keuze.', 'Vlees', 12.75),
(24, 'Schotels', 'Shoarma Schotel', '\r\n\r\nShoarma, salade, friet, broodje en saus naar keuze.', 'Vlees', 12.75),
(25, 'Schotels', 'Kip Schnitzel Schotel', 'Schnitzel, salade, friet, broodje en saus naar keuze.', 'Vlees', 10.55),
(26, 'Schotels', 'Mix Grill Schotel', '\r\nMix grill met kipfilet, döner en shoarma, salade, friet, broodje en saus naar keuze.\r\n\r\n', 'Vlees', 16.95),
(27, 'Broodjes', 'Broodje Döner', 'Turks broodje met donervlees, ijsberg sla, rode ui en 1 bakje saus naar keuze', 'Vlees', 7.99),
(28, 'Broodjes', 'Broodje Kipfilet', 'Bakje met gebakken champions, paprika, ui, kipfilet, pita broodje en 1 sausje naar keuze', 'Vlees', 7.85),
(29, 'Broodjes', 'Broodje Falafel', 'Turks broodje met 5 stuks falafel, ijsberg sla, rode ui en 1 sausje naar keuze', 'Vegan', 6.99),
(30, 'Broodjes', 'Broodje Shoarma', 'Bakje met shoarma vlees, pita broodje en 1 sausje naar keuze', 'Vlees', 7.99);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `food`
--
ALTER TABLE `food`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
