-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 23 mai 2020 à 15:50
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
-- Base de données :  `website`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `ID_avis` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_user` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name_rest` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `note` smallint(6) NOT NULL,
  `avis` text NOT NULL,
  PRIMARY KEY (`ID_avis`),
  KEY `ID_rest` (`name_rest`),
  KEY `lien id-user` (`pseudo_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Fast-Food'),
(2, 'Gastronomie '),
(3, 'Petit-déjeuner'),
(4, 'Sandwicherie'),
(5, 'Brasserie'),
(6, 'Dessert'),
(7, 'Cafétaria'),
(8, 'Restauration Classique');

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `note` tinyint(4) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`id`, `name`, `url`, `description`, `note`, `cat_id`) VALUES
(2, 'Mex&Go', 'https://www.mexngo.com/', 'Lieu de restauration basé sur des tacos.', 5, 1),
(3, 'Otacos', 'https://o-tacos.com/', 'Lieu de restauration basé sur des tacos avec une sauce fromagère.', 2, 1),
(5, 'Loungeatude', 'https://www.loungeatude.be/', 'Lieu de restauration de type gastronomie, tout type de plat.', 5, 2),
(12, 'EXKi', 'https://www.exki.com/en/restaurants/exki-louvain-la-neuve', 'Lieu de restauration basé sur le commerce équitable.', 4, 7),
(14, 'La Récré', 'https://www.facebook.com/larecre.be/', 'Sandwicherie de tout type.', 4, 4),
(15, 'La Sandwicherie', 'https://midi.be/', 'Sandwicherie de tout type.', 5, 4),
(32, 'Zanzibar', 'https://zanzibarlln.be/', 'Énorme choix de burger', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeOfUser` varchar(5) NOT NULL DEFAULT 'user',
  `pseudo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `typeOfUser`, `pseudo`, `first_name`, `last_name`, `login`, `password`) VALUES
(1, 'admin', 'ValentinD', 'Valentin', 'Derreumaux', 'V.derreumaux', 'moimoimoi02'),
(3, 'user', 'Albert2', 'Albert', 'Hackerman', 'Albert2.Hack', 'password'),
(4, 'user', 'Ch4rle', 'Charle', 'Henrion', 'CharleHenrion', 'motdepasse'),
(6, 'user', 'Poums', 'Florian', 'Degives', '0', '6'),
(7, 'user', 'Poumsii', 'Javier', 'Paolo', '0', '84'),
(8, 'user', 'Couqdqd', 'Mouloud', 'Abibi', 'AlbertLIj', '6e84d8');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `lien id-rest` FOREIGN KEY (`name_rest`) REFERENCES `sites` (`name`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lien id-user` FOREIGN KEY (`pseudo_user`) REFERENCES `user` (`pseudo`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `sites_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
