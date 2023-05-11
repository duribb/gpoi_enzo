-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 28, 2023 alle 17:53
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenzia`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `agenzia`
--
CREATE DATABASE agenzia;

USE agenzia;


CREATE TABLE `agenzia` (
  `id_agenzia` smallint(5) NOT NULL,
  `Ind` varchar(30) NOT NULL,
  `localita` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `agenzia`
--

INSERT INTO `agenzia` (`id_agenzia`, `Ind`, `localita`) VALUES
(1, 'Via Cibrario', 1),
(2, 'Corso Traiano', 1),
(3, 'Via Alessandria', 3),
(4, 'Via Marche', 2),
(5, 'Corso Unione', 1),
(6, '', 1),
(7, 'via Pietro', 1),
(8, 'jkk', 1),
(9, 'corso traiano', 2),
(10, 'jkk', 1),
(11, 'jkk', 1),
(12, 'jkk', 1),
(13, 'jkk', 1),
(14, 'jkk', 1),
(15, 'jkk', 1),
(16, 'jkk', 1),
(17, 'via cornovaglia', 1),
(18, 'via cornovaglia', 1),
(19, 'via cornovaglia', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `immobile`
--

CREATE TABLE `immobile` (
  `id_imm` smallint(5) NOT NULL,
  `indirizzo` varchar(30) NOT NULL,
  `nvani` smallint(3) NOT NULL,
  `metratura` smallint(5) NOT NULL,
  `piano` smallint(5) NOT NULL,
  `ascensore` varchar(2) NOT NULL,
  `prezzo` int(10) NOT NULL,
  `Venduto` varchar(2) NOT NULL,
  `agenzia` smallint(5) NOT NULL,
  `localita` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `immobile`
--

INSERT INTO `immobile` (`id_imm`, `indirizzo`, `nvani`, `metratura`, `piano`, `ascensore`, `prezzo`, `Venduto`, `agenzia`, `localita`) VALUES
(1, 'Via cibrario 4', 3, 75, 3, 'No', 80000, 'no', 1, 1),
(2, 'Via Sidoli 30', 4, 85, 4, 'Si', 130000, 'no', 2, 1),
(3, 'Corso Traiano 12', 5, 105, 2, 'Si', 170000, 'no', 2, 1),
(4, 'Via Alessandria 7', 4, 90, 5, 'Si', 100000, 'no', 3, 3),
(5, 'Via Giotto 7', 2, 60, 5, 'No', 40000, 'no', 1, 1),
(6, 'Via Marche', 5, 110, 5, 'Si', 189990, 'no', 4, 2),
(7, 'Corso Unione', 3, 70, 3, 'No', 90000, 'no', 5, 1),
(8, 'Corso Traiano ,110', 6, 150, 5, 'Si', 220000, 'no', 5, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `localita`
--

CREATE TABLE `localita` (
  `id_loc` smallint(5) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cap` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `localita`
--

INSERT INTO `localita` (`id_loc`, `nome`, `cap`) VALUES
(1, 'Torino', '10100'),
(2, 'Alessandria', '15100'),
(3, 'Asti', '14100');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `nome`, `username`, `passw`) VALUES
(1, 'admin', 'admin', '123');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `agenzia`
--
ALTER TABLE `agenzia`
  ADD PRIMARY KEY (`id_agenzia`),
  ADD KEY `localita` (`localita`);

--
-- Indici per le tabelle `immobile`
--
ALTER TABLE `immobile`
  ADD PRIMARY KEY (`id_imm`),
  ADD KEY `agenzia` (`agenzia`),
  ADD KEY `localita` (`localita`);

--
-- Indici per le tabelle `localita`
--
ALTER TABLE `localita`
  ADD PRIMARY KEY (`id_loc`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `agenzia`
--
ALTER TABLE `agenzia`
  MODIFY `id_agenzia` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT per la tabella `immobile`
--
ALTER TABLE `immobile`
  MODIFY `id_imm` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `localita`
--
ALTER TABLE `localita`
  MODIFY `id_loc` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `agenzia`
--
ALTER TABLE `agenzia`
  ADD CONSTRAINT `agenzia_ibfk_1` FOREIGN KEY (`localita`) REFERENCES `localita` (`id_loc`);

--
-- Limiti per la tabella `immobile`
--
ALTER TABLE `immobile`
  ADD CONSTRAINT `immobile_ibfk_1` FOREIGN KEY (`agenzia`) REFERENCES `agenzia` (`id_agenzia`),
  ADD CONSTRAINT `immobile_ibfk_2` FOREIGN KEY (`localita`) REFERENCES `localita` (`id_loc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
