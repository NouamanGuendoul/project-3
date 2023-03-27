-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 mrt 2023 om 13:39
-- Serverversie: 10.4.25-MariaDB
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dol.com`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klachten`
--

CREATE TABLE `klachten` (
  `klachtid` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `bericht` text NOT NULL,
  `datum` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klachten`
--

INSERT INTO `klachten` (`klachtid`, `naam`, `bericht`, `datum`) VALUES
(1, 'Sofie Brink', 'JE FUCKING KU TGFORMULIER MOVED WHEN YOU CLICK SEND IDIOT LMOOOOOOOOF\n', '24-03-2023'),
(2, 'soph', 'hello; SELECT * FROM klachten;', '24-03-2023'),
(3, 'Joop Jansen', 'SELECT naam FROM klachten;', '24-03-2023'),
(4, 'Joop Jansen', 'test 10', '27-03-2023'),
(5, 'Joop Jansen', 'test 10', '27-03-2023'),
(6, 'Joop Jansen', 'test 11', '27-03-2023');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leveranciers`
--

CREATE TABLE `leveranciers` (
  `volgnummer` int(9) NOT NULL,
  `naamleveranciers` varchar(255) NOT NULL,
  `afk` varchar(255) NOT NULL,
  `adresgegevensleveranciers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `leveranciers`
--

INSERT INTO `leveranciers` (`volgnummer`, `naamleveranciers`, `afk`, `adresgegevensleveranciers`) VALUES
(1, 'Pablo minor', 'Mexico', ' MINA 197 NO. 7, ENSENADA CENTRO, 22800'),
(2, 'Zieh Fliet', 'Duitsland', '  Schaarsteinweg 3'),
(3, 'Yassin Midah', 'Marokko', 'rue Sidi El Khadir, Derb El Ouarda'),
(4, 'Jan van de Beek', 'Nederland', ' Theodora Havertuin 179'),
(5, ' Parbil Kilian', 'Frankrijk', '59 rue de Penthièvre');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(9) NOT NULL,
  `productnaam` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `productnaam`, `prijs`) VALUES
(1, 'ventiel', ' €15'),
(2, 'rijst 5 kg', '€10'),
(3, ' rijst 15kg ', '€20'),
(4, 'wiel', '€20'),
(5, 'spatel', '€3,15\r\n'),
(6, 'stang', '€15'),
(7, 'ketting', '€15'),
(8, 'lepels 7 stuks', '€12');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klachten`
--
ALTER TABLE `klachten`
  ADD PRIMARY KEY (`klachtid`);

--
-- Indexen voor tabel `leveranciers`
--
ALTER TABLE `leveranciers`
  ADD PRIMARY KEY (`volgnummer`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klachten`
--
ALTER TABLE `klachten`
  MODIFY `klachtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `leveranciers`
--
ALTER TABLE `leveranciers`
  MODIFY `volgnummer` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
