-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 15 Janvier 2014 à 13:58
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `nadalenca`
--
CREATE DATABASE IF NOT EXISTS `nadalenca` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nadalenca`;

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titreC` varchar(255) NOT NULL,
  `heureC` int(2) NOT NULL,
  `minuteC` int(2) NOT NULL,
  `lieuC` varchar(255) NOT NULL,
  `adresseC` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `dateC` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`id`, `titreC`, `heureC`, `minuteC`, `lieuC`, `adresseC`, `ville`, `dateC`) VALUES
(1, 'Joyeux Noel', 20, 30, 'Mairie de Montpellier', '55 avenue des choux blancs', 'Montpellier', '2014-02-26'),
(2, 'Pâque', 20, 50, 'ponayville', '3 rue de la picorne', 'MontPicorne', '2014-02-25'),
(3, 'nadalenca', 20, 10, 'montpellier ', 'montpellier perou', 'montpellier le rocher saint', '2014-03-04'),
(4, 'concert passe', 20, 20, 'on s''en fou', 'on s''en fou 2', 'montpellier', '2013-05-02');

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

CREATE TABLE IF NOT EXISTS `lien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `lien`
--

INSERT INTO `lien` (`id`, `lien`, `description`) VALUES
(1, 'http://google.com', 'Google'),
(2, 'http://maisondeschoeurs.free.fr/association.htm', 'Association des Chœur de Montpellier');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idM` int(11) NOT NULL AUTO_INCREMENT,
  `nomM` varchar(255) NOT NULL,
  `prenomM` varchar(255) NOT NULL,
  `emailM` varchar(255) NOT NULL,
  `sujetM` varchar(255) NOT NULL,
  `messageM` varchar(255) NOT NULL,
  `dateM` varchar(30) NOT NULL,
  PRIMARY KEY (`idM`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idM`, `nomM`, `prenomM`, `emailM`, `sujetM`, `messageM`, `dateM`) VALUES
(1, 'pochon', 'quentin', 'q.tiercelin@gmail.com', 'test', 'test', '19-12-13'),
(2, 'tiercelin', 'quentin', 'q.tiercelin@gmail.com', 'test2', 'test2', '19-12-13'),
(3, 'bexchauvet', 'olivier', 'q.tiercelin@gmail.com', 'test3', 'test', '19-12-13'),
(4, 'tiercelin', 'quentin', 'q.tiercelin@gmail.com', 'test3', 'test', '19-12-13'),
(5, 'A', 'D', 'mo@fdfz.fr', 'Test', 'Test', '14-01-14'),
(6, 'A', 'D', 'mo@fdfz.fr', 'Test', 'test', '14-01-14'),
(7, 'A', 'D', 'mo@fdfz.fr', 'Test', 'test', '15-01-14');

-- --------------------------------------------------------

--
-- Structure de la table `repertoire`
--

CREATE TABLE IF NOT EXISTS `repertoire` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `nomR` varchar(255) NOT NULL,
  `audioR` varchar(255) NOT NULL,
  `texteR` varchar(255) NOT NULL,
  `voix1R` varchar(255) NOT NULL,
  `voix2R` varchar(255) NOT NULL,
  `voix3R` varchar(255) NOT NULL,
  `voix4R` varchar(255) NOT NULL,
  PRIMARY KEY (`idR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `repertoire`
--

INSERT INTO `repertoire` (`idR`, `nomR`, `audioR`, `texteR`, `voix1R`, `voix2R`, `voix3R`, `voix4R`) VALUES
(1, 'Nada let', 'nadaleta', 'nadalett', 'nadaletv1', 'nadaletv2', 'nadaletv3', 'nadaletv4'),
(2, 'Nadalenca', '', '', '', '', '', ''),
(3, 'Vert', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `adresseP` varchar(255) NOT NULL,
  `codeP` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `numtelF` varchar(14) NOT NULL,
  `numtelM` varchar(14) NOT NULL,
  `voix` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `mdp`, `statut`, `admin`, `adresseP`, `codeP`, `ville`, `numtelF`, `numtelM`, `voix`) VALUES
(1, 'Tiercelin', 'Quentin', 'q.tiercelin@gmail.com', 'licorne', 'Membre du conseil d''administration', 0, '20, avenue du Docteur Pezet', '35620', 'Montpellier', '04.99.23.93.98', '06.50.80.66.77', 'voix3'),
(2, 'Beule', 'JÃ©rÃ©my', 'androalphas@hotmail.fr', 'licorne', '', 1, '', '', '', '', '', 'voix'),
(3, 'Bex-Chauvet', 'Olivier', 'fullofwrath@hotmail.fr', 'lilo', 'PrÃ©sident', 1, '114 rue lol', '34090', 'Montpellier', '04.22.33.44.55', '06.22.33.44.55', 'voix2'),
(4, 'Pochon', 'Amaury', 'momoamo@hotmail.fr', 'test', '', 1, '', '', '', '', '', 'voix'),
(5, 'Pochona', '1', 'celestine.pochon@hotmail.fr', 'test', '', 0, '', '', '', '', '', 'voix'),
(6, 'Pochon', 'Amaury', 'momoam@hotmail.fr', 'test', '', 0, '', '', '', '', '', 'voix'),
(7, 'Amauy', 'Pochon', 'momoa@hotmail.fr', 'test', '', 0, '', '', '', '', '', 'voix'),
(8, '1', '2', 'test@gmail.com', 'test', '', 0, '', '', '', '', '', 'voix'),
(9, 'test', 'ettd', 'lolilol@yopmail.com', 'test', '', 0, '', '', '', '', '', 'voix'),
(10, 'test', 'test', 'de@de.fr', 'lol', '', 0, '', '', '', '', '', 'voix');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
