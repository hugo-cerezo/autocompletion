-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 mai 2020 à 13:51
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autocompletion`
--
CREATE DATABASE IF NOT EXISTS `autocompletion` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `autocompletion`;

-- --------------------------------------------------------

--
-- Structure de la table `wine`
--

DROP TABLE IF EXISTS `wine`;
CREATE TABLE IF NOT EXISTS `wine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `wine_type` varchar(100) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `grape_name` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wine`
--

INSERT INTO `wine` (`id`, `name`, `wine_type`, `temp`, `grape_name`, `country_name`) VALUES
(35, 'Champagne', 'Pétillant', '40-50', 'Sauvignon Blanc', 'France'),
(36, 'Prosecco', 'Pétillant', '40-50', 'Glera', 'Italie'),
(37, 'Crémant', 'Pétillant', '40-50', 'Gewurztraminer', 'France'),
(38, 'Lomardia wine', 'Pétillant', '40-50', 'Nebbiolo', 'Italie'),
(39, 'Riesling', 'Blanc sucré', '40-50', 'Riesling', 'Allemagne'),
(40, 'Chenin Blanc', 'Blanc sucré', '40-50', 'Chenin Blanc', 'France'),
(41, 'Gewürztraminer', 'Blanc sucré', '40-50', 'Gewurztraminer', 'Allemagne'),
(42, 'Ice Wine', 'Blanc sucré', '40-50', 'Riesling', 'Allemagne'),
(43, 'Chardonnay', 'Blanc riche', '40-50', 'Chardonnay', 'France'),
(44, 'Moscato', 'Blanc sucré', '40-50', 'Muscat', 'Italie'),
(13, 'Grenache', 'Rouge léger', '50-60', 'Grenache', 'Autre'),
(14, 'Gamay', 'Rouge léger', '50-60', 'Gamay', 'France'),
(15, 'St. Laurent', 'Rouge léger', '50-60', 'St. Laurent', 'Autre'),
(16, 'Carignan', 'Rouge léger', '50-60', 'Carignan', 'France'),
(17, 'Counoise', 'Rouge léger', '50-60', 'Counoise', 'France'),
(21, 'Merlot', 'Rouge moyen', '50-60', 'Merlot', 'France'),
(22, 'Pinot Noir', 'Rouge léger', '50-60', 'Pinot Noir', 'France'),
(23, 'White Zinfandel', 'Rose', '50-60', 'Zinfandel', 'US'),
(24, 'Sémillon', 'Blanc riche', '50-60', 'Sémillon', 'France'),
(25, 'Viognier', 'Blanc riche', '50-60', 'Viognier', 'US'),
(26, 'Marsanne', 'Blanc riche', '50-60', 'Marsanne', 'France'),
(27, 'Roussanne', 'Blanc riche', '50-60', 'Roussanne', 'France'),
(28, 'Sauvignon Blanc', 'Blanc léger', '50-60', 'Sauvignon Blanc', 'France'),
(29, 'Albariño', 'Blanc léger', '50-60', 'Albariño', 'Espagne'),
(30, 'Pinot Blanc', 'Blanc léger', '50-60', 'Pinot Blanc', 'Allemagne'),
(31, 'Vermentino', 'Blanc léger', '50-60', 'Vermentino', 'Italie'),
(32, 'Melon De Bourgogne', 'Blanc léger', '50-60', 'Melon De Bourgogne', 'France'),
(33, 'Gargenega', 'Blanc léger', '50-60', 'Gargenega', 'Italie'),
(34, 'Trebbiano', 'Blanc léger', '50-60', 'Trebbiano', 'Italie'),
(45, 'Port', 'Dessert', '50-60', 'Tinta Roriz', 'Autre'),
(46, 'Sherry', 'Dessert', '50-60', 'Palomino', 'Autre'),
(1, 'Pinotage', 'Rouge puissant', '60-70', 'Pinotage', 'Autre'),
(2, 'Petite Sirah', 'Rouge puissant', '60-70', 'Durif', 'US'),
(3, 'Touriga Nacional', 'Rouge puissant', '60-70', 'Touriga Nacional', 'Autre'),
(4, 'Cabernet Sauvignon', 'Rouge puissant', '60-70', 'Cabernet Sauvignon', 'Autre'),
(5, 'Meritage', 'Rouge puissant', '60-70', 'Meritage', 'US'),
(6, 'Sangiovese', 'Rouge moyen', '60-70', 'Sangiovese', 'Italie'),
(7, 'Zinfandel', 'Rouge moyen', '60-70', 'Zinfandel', 'US'),
(8, 'Cabernet Franc', 'Rouge moyen', '60-70', 'Cabernet Franc', 'France'),
(9, 'Mourvédre', 'Rouge puissant', '60-70', 'Mourvedre', 'Espagne'),
(10, 'Tempranillo', 'Rouge moyen', '60-70', 'Tempranillo', 'Espagne'),
(11, 'Nebbiolo', 'Rouge moyen', '60-70', 'Nebblolo', 'Italie'),
(12, 'Barbera', 'Rouge moyen', '60-70', 'Barbera', 'Italie'),
(18, 'Provencal Rose', 'Rouge léger', '60-70', 'Grenache', 'Autre'),
(19, 'Shiraz', 'Rouge puissant', '60-70', 'Malbec', 'France'),
(20, 'Malbec', 'Rouge puissant', '60-70', 'Malbec', 'France');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
