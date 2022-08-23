-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 jan 2022 om 23:27
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage_ertan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `klantid` int(11) NOT NULL,
  `klantnaam` varchar(100) NOT NULL,
  `klantemail` text NOT NULL,
  `klantadres` varchar(100) NOT NULL,
  `klantpostcode` char(6) NOT NULL,
  `klantplaats` varchar(50) NOT NULL,
  `merk` char(40) NOT NULL,
  `model` varchar(100) NOT NULL,
  `kenteken` char(8) NOT NULL,
  `kmstand` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`klantid`, `klantnaam`, `klantemail`, `klantadres`, `klantpostcode`, `klantplaats`, `merk`, `model`, `kenteken`, `kmstand`) VALUES
(4, 'Osas', 'osas@afrikamail.com', 'Waterwell nr.4', '8008SS', 'Zimbabwe', 'landrover', '1949 HUE166', '69-69-XD', '193248'),
(5, 'bonqueque', 'bonqueque@hoodmail.com', 'Grovestreet', '9863IU', 'The Hood', 'BMW', 'X2', 'J-77-MT9', '83236'),
(8, 'Patrick Jansen', 'patrickjansen@yahoo.com', 'Afrikanen Straat', '4242AF', 'Friesland', 'Infiniti', '365ZA', '18-81-ZZ', '1234567');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerker`
--

CREATE TABLE `medewerker` (
  `medewerkerID` int(11) NOT NULL,
  `medewerkernaam` varchar(150) NOT NULL,
  `functie` varchar(50) NOT NULL COMMENT '1=admin 2=medewerker',
  `email` varchar(50) NOT NULL,
  `wachtwoord` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `medewerker`
--

INSERT INTO `medewerker` (`medewerkerID`, `medewerkernaam`, `functie`, `email`, `wachtwoord`) VALUES
(5, 'klaas van dwaas', '2', 'klaas@gmail.com', '16bb49a57e208b7fa3179cb45cb1dd8c82db72d4'),
(6, 'Tycho Wateren', '1', 'tycho@hotmail.com', '6b523322678240882acbb4da5312a12d8cd0082d'),
(10, 'Ertan Abi', '1', 'ertan@gmail.com', '400147a4a69b7e2526b7841275bbb2056d44af5e');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantid`);

--
-- Indexen voor tabel `medewerker`
--
ALTER TABLE `medewerker`
  ADD PRIMARY KEY (`medewerkerID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `klantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `medewerker`
--
ALTER TABLE `medewerker`
  MODIFY `medewerkerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
