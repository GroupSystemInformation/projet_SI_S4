-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 10 Juillet 2023 à 10:24
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `regime_sportive`
--
CREATE DATABASE IF NOT EXISTS `regime_sportive` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `regime_sportive`;

-- --------------------------------------------------------

--
-- Structure de la table `objectif`
--

CREATE TABLE IF NOT EXISTS `objectif` (
  `id_objectif` int(11) NOT NULL AUTO_INCREMENT,
  `nom_objectif` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_objectif`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


-------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `genre` enum('masculin','féminin') DEFAULT NULL,
  `argent` decimal(10,2) DEFAULT '0.00',
  `taille` float NOT NULL,
  `idObjectif` int(11) DEFAULT NULL,
  `estAdmin` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id_user`),
  KEY `idObjectif` (`idObjectif`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `user` ADD `mdp` VARCHAR( 200 ) NOT NULL AFTER `estAdmin` ;
ALTER TABLE `user` ADD `poids` FLOAT NOT NULL AFTER `taille`;

--
-- Structure de la table `code_credit`
--

CREATE TABLE IF NOT EXISTS `code_credit` (
  `id_code` int(11) NOT NULL AUTO_INCREMENT,
  `numero` bigint(12) DEFAULT NULL,
  `estValide` tinyint(4) DEFAULT '0',
  `id_user` int(11) DEFAULT NULL,
  `date_usage` datetime DEFAULT NULL,
  `valeur_credit` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_code`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


--
-- Structure de la table `regime`
--

CREATE TABLE IF NOT EXISTS `regime` (
  `id_regime` int(11) NOT NULL AUTO_INCREMENT,
  `id_objectif` int(11) DEFAULT NULL,
  `age_min` int(11) DEFAULT NULL,
  `age_max` int(11) DEFAULT NULL,
  `taille_min` float DEFAULT NULL,
  `taille_max` float DEFAULT NULL,
  `genre` enum('masculin','féminin') DEFAULT NULL,
  PRIMARY KEY (`id_regime`),
  KEY `id_objectif` (`id_objectif`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `regime` ADD `poids_min` FLOAT NOT NULL AFTER `taille_max` ,
ADD `poids_max` FLOAT NOT NULL AFTER `poids_min` ;
ALTER TABLE `regime` ADD `duree_jour` INT NOT NULL AFTER `id_objectif` ;

-- --------------------------------------------------------

--
-- Structure de la table `combinaison_repas`
--

CREATE TABLE IF NOT EXISTS `combinaison_repas` (
  `id_combinaison` int(11) NOT NULL AUTO_INCREMENT,
  `id_regime` int(11) DEFAULT NULL,
  `jour` int(11) DEFAULT NULL,
  `matin` varchar(100) DEFAULT NULL,
  `apres_midi` varchar(100) DEFAULT NULL,
  `soir` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_combinaison`),
  KEY `id_regime` (`id_regime`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sport_associe`
--

CREATE TABLE IF NOT EXISTS `sport_associe` (
  `id_sport` int(11) NOT NULL AUTO_INCREMENT,
  `id_regime` int(11) DEFAULT NULL,
  `nom_sport` varchar(100) DEFAULT NULL,
  `duree_heure_jour` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sport`),
  KEY `id_regime` (`id_regime`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
