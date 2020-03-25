-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mart. 25, 2020 la 03:46 PM
-- Versiune server: 10.1.38-MariaDB
-- Versiune PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `logowanie`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `uzyszkodnicy`
--

CREATE TABLE `uzyszkodnicy` (
  `id` int(11) NOT NULL,
  `login` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `haslo` tinytext COLLATE utf8_polish_ci NOT NULL,
  `pelna_nazwa` tinytext COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Eliminarea datelor din tabel `uzyszkodnicy`
--

INSERT INTO `uzyszkodnicy` (`id`, `login`, `haslo`, `pelna_nazwa`, `email`) VALUES
(1, 'admin', '$2y$10$qgRs4GR9DhuXOT1tKisfJ.xKI95Dsyv3dGx4M4.U1ACwK4SvrF6di', 'Główny Administrator', 'git@damj.es'),
(2, 'beau', '$2y$10$90kaGdwtna20DdObFtwbeOCHFQyfSgx07PdCAUYn8m6WMutvDxrx.', 'Beau Lebens', 'beau@automattic.com');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `uzyszkodnicy`
--
ALTER TABLE `uzyszkodnicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `uzyszkodnicy`
--
ALTER TABLE `uzyszkodnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
