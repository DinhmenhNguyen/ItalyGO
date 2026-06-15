-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 15 jun 2026 om 13:50
-- Serverversie: 8.4.8
-- PHP-versie: 8.3.30

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Bestemmingen`
--

DROP TABLE IF EXISTS `Bestemmingen`;
CREATE TABLE `Bestemmingen` (
  `id` int NOT NULL,
  `naam` varchar(20) NOT NULL,
  `prijs` decimal(20,0) NOT NULL,
  `beschrijving` text NOT NULL,
  `afbeelding` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Bestemmingen`
--

INSERT INTO `Bestemmingen` (`id`, `naam`, `prijs`, `beschrijving`, `afbeelding`) VALUES
(1, 'Rome', 549, 'Historische hoofdstad met iconische bezienswaardigheden zoals het Colosseum, het Pantheon en Vaticaanstad.', 'RomeItalyGO.jpg'),
(2, 'Milaan', 449, 'Moderne modehoofdstad van Italië. Bekend om luxe winkels, de Dom van Milaan en levendige stadspleinen.', 'MilaanItalyGO.webp'),
(3, 'Napels', 479, 'Authentieke Zuid-Italiaanse stad, beroemd om pizza, cultuur en de nabijheid van Pompeï en de Amalfikust.', 'NapelsItalyGO.jpg'),
(4, 'Como', 499, 'Charmante bestemming aan het Comomeer met prachtige berglandschappen, luxe villa\'s en boottochten.', 'ComoItalyGO.webp'),
(5, 'Turijn', 459, 'Elegante stad met barokke architectuur, uitstekende musea en een rijke culinaire traditie.', 'TurijnItalyGO.jpg'),
(6, 'Bologna', 509, 'Bekend om zijn gastronomie, sfeervolle arcades en historische universiteit. Perfect voor foodliefhebbers.', 'BolognaItalyGO.jpg'),
(7, 'Florence', 519, 'Bakermat van de Renaissance met wereldberoemde kunst, indrukwekkende kerken en Toscaanse charme.', 'FlorenceItalyGO.jpg'),
(8, 'Palermo', 539, 'Zonnige hoofdstad van Sicilië met kleurrijke markten, Arabisch-Normandische architectuur en mooie stranden.', 'PalermoItalyGO.webp');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Bestemmingen`
--
ALTER TABLE `Bestemmingen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Bestemmingen`
--
ALTER TABLE `Bestemmingen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
