-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Paź 2020, 14:31
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bibl`
--

-- --------------------------------------------------------

--
-- Zastąpiona struktura widoku `książki`
-- (Zobacz poniżej rzeczywisty widok)
--
CREATE TABLE `książki` (
`id` int(11)
,`tytul` varchar(50)
,`name` varchar(30)
);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_autor`
--

CREATE TABLE `lib_autor` (
  `id_autor` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lib_autor`
--

INSERT INTO `lib_autor` (`id_autor`, `name`) VALUES
(1, 'Mickiewicz'),
(2, 'Tolkien'),
(333, 'asdfdf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_autor_tytul`
--

CREATE TABLE `lib_autor_tytul` (
  `id_autor_tytul` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_tytul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lib_autor_tytul`
--

INSERT INTO `lib_autor_tytul` (`id_autor_tytul`, `id_autor`, `id_tytul`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_tytul`
--

CREATE TABLE `lib_tytul` (
  `id_tytul` int(11) NOT NULL,
  `tytul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lib_tytul`
--

INSERT INTO `lib_tytul` (`id_tytul`, `tytul`) VALUES
(1, 'Pan Tadeusz'),
(2, 'Hobbit'),
(333, 'sdf');

-- --------------------------------------------------------

--
-- Struktura widoku `książki`
--
DROP TABLE IF EXISTS `książki`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `książki`  AS  select `lib_autor_tytul`.`id_autor_tytul` AS `id`,`lib_tytul`.`tytul` AS `tytul`,`lib_autor`.`name` AS `name` from ((`lib_tytul` join `lib_autor_tytul`) join `lib_autor`) where `lib_tytul`.`id_tytul` = `lib_autor_tytul`.`id_tytul` and `lib_autor`.`id_autor` = `lib_autor_tytul`.`id_autor` ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lib_autor`
--
ALTER TABLE `lib_autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indeksy dla tabeli `lib_autor_tytul`
--
ALTER TABLE `lib_autor_tytul`
  ADD PRIMARY KEY (`id_autor_tytul`),
  ADD KEY `id_autor` (`id_autor`,`id_tytul`),
  ADD KEY `id_tytul` (`id_tytul`);

--
-- Indeksy dla tabeli `lib_tytul`
--
ALTER TABLE `lib_tytul`
  ADD PRIMARY KEY (`id_tytul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `lib_autor`
--
ALTER TABLE `lib_autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT dla tabeli `lib_autor_tytul`
--
ALTER TABLE `lib_autor_tytul`
  MODIFY `id_autor_tytul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `lib_tytul`
--
ALTER TABLE `lib_tytul`
  MODIFY `id_tytul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
