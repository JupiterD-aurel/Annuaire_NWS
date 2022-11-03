-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 nov. 2022 à 21:33
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_annuaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `annuaire`
--

DROP TABLE IF EXISTS `annuaire`;
CREATE TABLE IF NOT EXISTS `annuaire` (
  `an_id` int(11) NOT NULL AUTO_INCREMENT,
  `an_nom` varchar(255) NOT NULL,
  `an_prenom` varchar(255) NOT NULL,
  `an_sexe` varchar(11) NOT NULL,
  `an_age` varchar(11) NOT NULL,
  `an_ville` varchar(50) NOT NULL,
  `an_postal` varchar(11) NOT NULL,
  `an_email` varchar(255) NOT NULL,
  `an_phone` varchar(50) NOT NULL,
  `an_niveau` varchar(11) NOT NULL,
  `an_cycle` varchar(11) NOT NULL,
  `an_spe` varchar(55) NOT NULL,
  PRIMARY KEY (`an_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annuaire`
--

INSERT INTO `annuaire` (`an_id`, `an_nom`, `an_prenom`, `an_sexe`, `an_age`, `an_ville`, `an_postal`, `an_email`, `an_phone`, `an_niveau`, `an_cycle`, `an_spe`) VALUES
(16, 'boudoh', 'dhan', 'homme', '25', 'rouen', '76600', 'jupiterfranck1@gmail.com', '0605636787', 'AnnÃ©e 1', 'terminal', 'Developpement'),
(19, 'boudoh', 'dhan', 'homme', '25', 'rouen', '76600', 'jupiterfranck1@gmail.com', '0605636787', 'Master', 'Bac + 3', 'Developpement');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
