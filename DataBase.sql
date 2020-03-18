-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 18 mars 2020 à 19:35
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restorank`
--

-- --------------------------------------------------------

--
-- Structure de la table `restauration`
--

DROP TABLE IF EXISTS `restauration`;
CREATE TABLE IF NOT EXISTS `restauration` (
  `ID` varchar(11) NOT NULL,
  `Nom` text NOT NULL,
  `Type` text NOT NULL,
  `Note` int(11) NOT NULL,
  `Web` text NOT NULL,
  `type de cuisine` text NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `restauration`
--

INSERT INTO `restauration` (`ID`, `Nom`, `Type`, `Note`, `Web`, `type de cuisine`) VALUES
('A001', 'Chick N Fish', 'Restauration Rapide', 5, 'https://chick-n-fish.business.site/', 'Européenne'),
('A002', 'Mex&Go', 'Restauration Rapide', 5, 'https://www.mexngo.com/', 'Mexicaine'),
('A003', 'Altérez-Vous', 'Restauration ', 5, 'https://www.alterezvous.be/', 'Européenne'),
('A004', 'Loungeatude', 'Restauration', 5, 'https://www.loungeatude.be/', 'Européenne');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
