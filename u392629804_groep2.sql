-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 dec 2019 om 18:41
-- Serverversie: 10.2.27-MariaDB
-- PHP-versie: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u392629804_groep2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Begeleiders`
--

CREATE TABLE `Begeleiders` (
  `ID-begeleider` int(11) NOT NULL,
  `Naam-begeleider` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Geslacht-begeleider` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telnr-begeleider` int(11) NOT NULL,
  `Email-begeleider` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Begeleiders`
--

INSERT INTO `Begeleiders` (`ID-begeleider`, `Naam-begeleider`, `Geslacht-begeleider`, `Telnr-begeleider`, `Email-begeleider`) VALUES
(1, 'Joepskens Doeler', 'Man', 625849302, 'joepskens@begeleider.nl'),
(2, 'Pieter Gans', 'Man', 612345899, 'Pietergans@begeleider.nl'),
(3, 'Dagobert Duck', 'Man', 625943028, 'dagobert@begeleider.nl'),
(4, 'Pietje Man', 'Vrouw', 609789898, 'pietjeman@begeleider.nl'),
(5, 'Iknie Weetnie', 'Onzijdig', 678978978, 'Iknieweetnie@begeleider.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `beoefende sporten`
--

CREATE TABLE `beoefende sporten` (
  `Lidnr` int(11) NOT NULL,
  `Sportcode` int(11) NOT NULL,
  `Contributiejaar` int(11) NOT NULL,
  `Betaald` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `beoefende sporten`
--

INSERT INTO `beoefende sporten` (`Lidnr`, `Sportcode`, `Contributiejaar`, `Betaald`) VALUES
(1, 1, 2017, '0');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Leden`
--

CREATE TABLE `Leden` (
  `Lidnr` int(11) NOT NULL,
  `Naam` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adres` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postcode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Woonplaats` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefoonnummer` int(10) NOT NULL,
  `Emailadres` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Leden`
--

INSERT INTO `Leden` (`Lidnr`, `Naam`, `Adres`, `Postcode`, `Woonplaats`, `Telefoonnummer`, `Emailadres`) VALUES
(1, 'Willem vaders', 'Maneegeul 3', '4464JN', 'Goes', 612345678, 'willemvaders@gmail.com'),
(2, 'Henk Sloot', 'Klein Frankrijk 19', '4461 ZN', 'Goes', 674535475, 'henkslootbekendvantv@gmail.com'),
(3, 'Christian Eriksen', 'Leliestraat 105', '4461PN', 'Goes', 687654321, 'christianajaxfan@gmail.com'),
(4, 'Fred de Koe', 'Hoogewei 36', '4464AN', 'Goes', 684536456, 'koedefred@gmail.com'),
(5, 'Jeanarie van der Heijden', 'Maalstede 7', '4421 ED', 'Kapelle', 624353424, 'jeanariebekendvanfeyenooit@gmail.co'),
(6, 'Willem Tegen', 'Vroonland 19', '4401JW', 'Yerseke', 629383626, 'williewonka@gmail.com'),
(7, 'Martien Meijland', 'Joop van Den Endeplein 7', '1217 WJ', 'Hilversum', 642069420, 'martienmeijlanddievandatchateau@gma'),
(8, 'Gerdien Sardien', 'Matige makkerstraat 420', '6942GS', 'Kikkerdorp', 688888888, 'gerdieniseensardien@hotmail.com'),
(9, 'Henk de Bakkersteen', 'zaapstraat 18', '4489 HK', 'Mankermannetjes', 612211290, 'Henkdebakkersteen@gmail.com'),
(10, 'Dennis Uncavia', 'Hamsterstaat 3', '4444 HM', 'Hamsterland', 684832131, 'Ikbeneenhamster!@gmail.com'),
(11, 'Henk is een Steen', 'Henk Steenstraat 88', '0001AA', 'Kneiterdam', 678574367, 'henkiseensteen@gmail.com'),
(12, 'Huib Grubt', 'Ikwilnietsporten 23', '1232 KK', 'Sportenwantoverheid', 654543212, 'huibsportnietgurbt@gmail.com'),
(13, 'Gi Ga Gerard', 'Noobmasterlaan 69', '5432BA', 'Stuttgard', 687473222, 'ikbeneentoffeheld@helden.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Sportbegeleider`
--

CREATE TABLE `Sportbegeleider` (
  `SP-ID` int(11) NOT NULL,
  `ID-begeleider` int(11) NOT NULL,
  `Sportcode` int(11) NOT NULL,
  `Sportjaar` date NOT NULL,
  `Bijzonderheden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Sporten`
--

CREATE TABLE `Sporten` (
  `Sportcode` int(11) NOT NULL,
  `Sportnaam` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sportbedrag` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Sporten`
--

INSERT INTO `Sporten` (`Sportcode`, `Sportnaam`, `Sportbedrag`) VALUES
(1, 'Voetbal', '15'),
(2, 'Hockey', '15'),
(3, 'Basketbal', '12'),
(4, 'Squashen', '20'),
(5, 'Volleybal', '16');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Begeleiders`
--
ALTER TABLE `Begeleiders`
  ADD PRIMARY KEY (`ID-begeleider`),
  ADD UNIQUE KEY `ID-begeleider` (`ID-begeleider`);

--
-- Indexen voor tabel `beoefende sporten`
--
ALTER TABLE `beoefende sporten`
  ADD PRIMARY KEY (`Sportcode`),
  ADD UNIQUE KEY `Lidnr` (`Lidnr`),
  ADD UNIQUE KEY `Sportcode` (`Sportcode`);

--
-- Indexen voor tabel `Leden`
--
ALTER TABLE `Leden`
  ADD PRIMARY KEY (`Lidnr`),
  ADD UNIQUE KEY `Lidnr` (`Lidnr`),
  ADD UNIQUE KEY `Lidnr_2` (`Lidnr`),
  ADD UNIQUE KEY `Lidnr_3` (`Lidnr`);

--
-- Indexen voor tabel `Sportbegeleider`
--
ALTER TABLE `Sportbegeleider`
  ADD PRIMARY KEY (`SP-ID`),
  ADD UNIQUE KEY `ID-begeleider` (`ID-begeleider`,`Sportcode`),
  ADD UNIQUE KEY `ID-begeleider_2` (`ID-begeleider`,`Sportcode`),
  ADD UNIQUE KEY `ID-begeleider_3` (`ID-begeleider`,`Sportcode`),
  ADD UNIQUE KEY `ID-begeleider_4` (`ID-begeleider`,`Sportcode`),
  ADD UNIQUE KEY `SP-ID` (`SP-ID`),
  ADD UNIQUE KEY `ID-begeleider_5` (`ID-begeleider`,`Sportcode`),
  ADD UNIQUE KEY `ID-begeleider_6` (`ID-begeleider`,`Sportcode`),
  ADD UNIQUE KEY `ID-begeleider_7` (`ID-begeleider`),
  ADD KEY `Sportcode` (`Sportcode`);

--
-- Indexen voor tabel `Sporten`
--
ALTER TABLE `Sporten`
  ADD PRIMARY KEY (`Sportcode`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Leden`
--
ALTER TABLE `Leden`
  MODIFY `Lidnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `Sporten`
--
ALTER TABLE `Sporten`
  MODIFY `Sportcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `Begeleiders`
--
ALTER TABLE `Begeleiders`
  ADD CONSTRAINT `Begeleiders_ibfk_1` FOREIGN KEY (`ID-begeleider`) REFERENCES `Begeleiders` (`ID-begeleider`);

--
-- Beperkingen voor tabel `beoefende sporten`
--
ALTER TABLE `beoefende sporten`
  ADD CONSTRAINT `beoefende sporten_ibfk_2` FOREIGN KEY (`Sportcode`) REFERENCES `Sporten` (`Sportcode`),
  ADD CONSTRAINT `beoefende sporten_ibfk_3` FOREIGN KEY (`Lidnr`) REFERENCES `Leden` (`Lidnr`);

--
-- Beperkingen voor tabel `Sportbegeleider`
--
ALTER TABLE `Sportbegeleider`
  ADD CONSTRAINT `Sportbegeleider_ibfk_1` FOREIGN KEY (`Sportcode`) REFERENCES `Sporten` (`Sportcode`),
  ADD CONSTRAINT `Sportbegeleider_ibfk_2` FOREIGN KEY (`SP-ID`) REFERENCES `Begeleiders` (`ID-begeleider`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
