-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 mai 2020 à 12:30
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET FOREIGN_KEY_CHECKS = 0;
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`ID_avis`, `pseudo_user`, `name_rest`, `note`, `avis`) VALUES
(1, 'ValentinD', 'B Comme', 4, 'Très bon'),
(2, 'Albert2', 'B Comme', 2, 'très mauvais acceuil'),
(3, 'Ch4rle', 'B Comme', 5, 'jamais aussi bien manger!'),
(4, 'ValentinD', 'Blomi', 3, 'pas terrible'),
(5, 'Albert2', 'Blomi', 4, 'simpa et cosy'),
(6, 'Ch4rle', 'Blomi', 3, 'raffraichissant'),
(7, 'ValentinD', ' Cellule Sush', 4, 'Délicieux !'),
(8, 'Ch4rle', 'Loungeatude', 5, 'jamais aussi bien manger!'),
(9, 'ValentinD', 'Chick N Fish', 3, 'jamais aussi bien manger!'),
(10, 'Ch4rle', 'Nulle Part Ailleurs', 4, 'Super restaurent'),
(11, 'Albert2', 'Patapouf LLN', 5, 'Très bon'),
(12, 'ValentinD', 'Onlywood Cafe', 4, 'Toujours aussi bon !'),
(13, 'Ch4rle', 'Quick', 3, 'rapide et efficace'),
(14, 'Albert2', 'EXKi', 2, 'pas terrible'),
(15, 'ValentinD', 'Crêperie Bretonne', 3, 'jamais aussi bien manger!'),
(16, 'ValentinD', 'Burgerking', 5, 'jamais aussi bien manger!'),
(17, 'Ch4rle', 'La Sandwicherie', 4, 'Les meilleur sandwich de LLN'),
(18, 'ValentinD', 'La Récré', 5, 'Meilleur acceuil que \"La Sandwicherie\"'),
(19, 'Albert2', 'Blomi', 4, 'jamais aussi bien manger!'),
(20, 'Ch4rle', 'Brasserie du Parc', 3, 'Super brasserie'),
(21, 'Albert2', 'Brasserie du Parc', 2, 'jamais aussi bien manger!'),
(22, 'ValentinD', 'Brasserie du Parc', 1, 'Je n\'irais plus jamais '),
(23, 'ValentinD', 'Patapouf LLN', 4, 'Je n\'irais plus jamais '),
(24, 'ValentinD', 'Mex&Go', 5, 'service trop lent'),
(25, 'Ch4rle', 'Mex&Go', 4, 'jamais aussi bien manger!'),
(26, 'Albert2', 'Otacos', 3, 'je m\'attendais a mieux');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`id`, `name`, `url`, `description`, `note`, `cat_id`) VALUES
(1, 'Chick N Fish', 'https://www.facebook.com/ChickNFishLLN/', 'Lieu de restauration rapide principalement basé sur le poulet.', 4, 1),
(2, 'Mex&Go', 'https://www.mexngo.com/', 'Lieu de restauration basé sur des tacos.', 5, 1),
(3, 'Otacos', 'https://o-tacos.com/', 'Lieu de restauration basé sur des tacos avec une sauce fromagère.', 2, 1),
(4, 'Cellule Sush', 'http://www.cellulesush.be/', 'Lieu de restauration proposant toute sorte de sushi.', 4, 1),
(5, 'Loungeatude', 'https://www.loungeatude.be/', 'Lieu de restauration de type gastronomie, tout type de plat.', 5, 2),
(6, 'B Comme', 'https://www.b-comme.be/', '   Restauration hôtelière rapide ou gastronomique ', 5, 8),
(7, 'Nulle Part Ailleurs', 'http://www.resto-npa.com/', 'Lieu de restauration classique, tout type de plat.', 4, 8),
(8, 'Patapouf LLN', 'https://www.facebook.com/Patapouf.LLN', 'Lieu de restauration italienne.', 4, 8),
(9, 'Quick', 'https://www.quick.be/fr', 'Fast-food , frite et burger de tout type. ', 2, 1),
(10, 'Crêperie Bretonne', 'http://www.lacreperiebretonne.be/', 'Lieu de restauration de dessert diverse, Crêpes comprisent.', 4, 6),
(11, 'Blomi', 'https://novotelwavre.be/eat-blomi/', 'Lieu de restauration basé sur la gastronomie.', 4, 2),
(12, 'EXKi', 'https://www.exki.com/en/restaurants/exki-louvain-la-neuve', 'Lieu de restauration basé sur le commerce équitable.', 4, 7),
(13, 'Burgerking', 'https://www.burgerking.be/fr', 'Fast-food ,burger en tout type.', 2, 1),
(14, 'La Récré', 'https://www.facebook.com/larecre.be/', 'Sandwicherie de tout type.', 4, 4),
(15, 'La Sandwicherie', 'https://midi.be/', 'Sandwicherie de tout type.', 5, 4),
(16, 'Brasserie du Parc', 'http://www.iclub.be/page3.asp?ClubID=89&LG=FR&PageGroupeID=5125', 'Restauration et petit déjeuner', 3, 3),
(17, 'Onlywood Cafe', 'https://www.facebook.com/onlywoodlln', 'Brasserie,restauration', 4, 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `typeOfUser`, `pseudo`, `first_name`, `last_name`, `login`, `password`) VALUES
(1, 'admin', 'ValentinD', 'Valentin', 'Derreumaux', 'V.derreumaux', 'moimoimoi02'),
(2, 'user', 'Albert2', 'Albert', 'Hackerman', 'Albert2.Hack', 'password'),
(3, 'user', 'Ch4rle', 'Charle', 'Henrion', 'CharleHenrion', 'motdepasse'),
(4, 'user', 'Poums', 'Florian', 'Degives', '0', '6'),
(5, 'user', 'Poumsii', 'Javier', 'Paolo', '0', '84'),
(6, 'user', 'Couqdqd', 'Mouloud', 'Abibi', 'AlbertLIj', '6e84d8');

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
SET FOREIGN_KEY_CHECKS = 1;
