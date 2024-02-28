-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 28 fév. 2024 à 14:49
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `actualités`
--

-- --------------------------------------------------------

--
-- Structure de la table `id_actualités`
--

CREATE TABLE `id_actualités` (
  `titre` varchar(250) NOT NULL,
  `corps` varchar(250) NOT NULL,
  `image` int(11) NOT NULL,
  `date_publication` varchar(250) NOT NULL,
  `date_revision` varchar(250) NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `tags` varchar(250) NOT NULL,
  `sources` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `id_actualités`
--

INSERT INTO `id_actualités` (`titre`, `corps`, `image`, `date_publication`, `date_revision`, `auteur`, `tags`, `sources`, `id`) VALUES
('Spot de surf dans le 44', 'sfdfgyhujioklp^mpmolikhujgyhtfgrdfedsfxghjkl', 1, '27/02/2024', '28/02/2024', 'Surfline', 'sport', 'Surfline', 0),
('La derniere maj R6', 'sdfghvjbknlmpù^*ù$ùlpmkoljikhujgygtfd', 1, '27/02/2024', '28/02/2024', 'Ubisoft', 'jeux-video', 'Ubisoft Montréal', 0),
('Le périphérique de Nantes inondé', 'desgrfthyjukilompùm^*$ù^mplomkiljukhyjgtr', 1, '27/02/2024', '28/02/2024', 'La Montagne', 'informations', 'La Montagne', 0),
('Le nouvel Iphone', 'dfghjbnklmùp^*$^mùlpkojikhugygtf', 1, '27/02/2024', '28/02/2024', 'Apple', 'technologie', 'Apple', 0),
('Entraînement PHP', 'sedfrgthvbjynk,lmùp^*m^ùlpmkoljihkujgyhftgdre', 1, '27/02/2024', '28/02/2024', 'IIA Formation', 'éducation', 'IIA Formation', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
