-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 16 Janvier 2014 à 13:41
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
-- Structure de la table `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `ida` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `nbfichier` int(2) NOT NULL,
  `nomfich1` varchar(255) NOT NULL,
  `dest1` varchar(255) NOT NULL,
  `nomfich2` varchar(255) NOT NULL,
  `dest2` varchar(255) NOT NULL,
  `nomfich3` varchar(255) NOT NULL,
  `dest3` varchar(255) NOT NULL,
  `nomfich4` varchar(255) NOT NULL,
  `dest4` varchar(255) NOT NULL,
  `nomfich5` varchar(255) NOT NULL,
  `dest5` varchar(255) NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `audio`
--

INSERT INTO `audio` (`ida`, `nom`, `nbfichier`, `nomfich1`, `dest1`, `nomfich2`, `dest2`, `nomfich3`, `dest3`, `nomfich4`, `dest4`, `nomfich5`, `dest5`) VALUES
(1, 'Cecila', 2, '', '', '', '', '', '', '', '', '', ''),
(2, 'Cecila', 2, '', '', '', '', '', '', '', '', '', ''),
(3, 'Cecila', 2, '', '', '', '', '', '', '', '', '', ''),
(4, 'cecila', 1, '', '', '', '', '', '', '', '', '', ''),
(5, 'cecila', 1, '', '', '', '', '', '', '', '', '', ''),
(6, 'cecila', 1, '', '', '', '', '', '', '', '', '', ''),
(7, 'cecila', 1, '', '', '', '', '', '', '', '', '', ''),
(8, 'cecila', 1, '', '', '', '', '', '', '', '', '', ''),
(9, 'cecila', 1, 'CECILA-alti.mp3', 'alto', '', '', '', '', '', '', '', ''),
(10, 'cecila', 1, 'CECILA-alti.mp3', 'alto', '', '', '', '', '', '', '', ''),
(11, 'cecila', 1, 'CECILA-alti.mp3', 'alto', '', '', '', '', '', '', '', ''),
(12, 'cecila', 1, 'CECILA-alti.mp3', 'alto', '', '', '', '', '', '', '', ''),
(13, 'cecila', 1, 'CECILA-alti.mp3', 'alto', '', '', '', '', '', '', '', ''),
(14, 'cecila', 1, 'CECILA-alti.mp3', 'alto', '', '', '', '', '', '', '', ''),
(15, 'cecila', 1, 'CECILA-alti.mp3', 'alto', '', '', '', '', '', '', '', ''),
(16, 'cecila', 1, 'CECILA-alti.mp3', 'alto', '', '', '', '', '', '', '', ''),
(17, 'cancon', 1, 'CANCONH1.mp3', 'hommes', '', '', '', '', '', '', '', ''),
(18, 'A Media Nioch', 1, 'a_media_nioch_tenor.mp3', 'Tenor', '', '', '', '', '', '', '', ''),
(19, 'A Media Nioch', 1, 'a_media_nioch_tenor.mp3', 'Tenor', '', '', '', '', '', '', '', ''),
(20, 'A Media Nioch', 1, 'a_media_nioch_tenor.mp3', 'Tenor', '', '', '', '', '', '', '', ''),
(21, 'A Media Nioch', 1, 'a_media_nioch_tenor.mp3', 'Tenor', '', '', '', '', '', '', '', ''),
(22, 'A Media Nioch', 1, 'a_media_nioch_tenor.mp3', 'Tenor', '', '', '', '', '', '', '', '');

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
  `villeC` varchar(255) NOT NULL,
  `dateC` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`id`, `titreC`, `heureC`, `minuteC`, `lieuC`, `adresseC`, `villeC`, `dateC`) VALUES
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `lien`
--

INSERT INTO `lien` (`id`, `lien`, `description`) VALUES
(1, 'http://google.com', 'Google');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idM`, `nomM`, `prenomM`, `emailM`, `sujetM`, `messageM`, `dateM`) VALUES
(1, 'pochon', 'quentin', 'q.tiercelin@gmail.com', 'test', 'test', '19-12-13'),
(2, 'tiercelin', 'quentin', 'q.tiercelin@gmail.com', 'test2', 'test2', '19-12-13'),
(3, 'bexchauvet', 'olivier', 'q.tiercelin@gmail.com', 'test3', 'test', '19-12-13'),
(4, 'tiercelin', 'quentin', 'q.tiercelin@gmail.com', 'test3', 'test', '19-12-13');

-- --------------------------------------------------------

--
-- Structure de la table `repertoire`
--

CREATE TABLE IF NOT EXISTS `repertoire` (
  `idr` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `idA` int(10) NOT NULL,
  `idT` int(10) NOT NULL,
  PRIMARY KEY (`idr`),
  KEY `idA` (`idA`),
  KEY `idT` (`idT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `repertoire`
--

INSERT INTO `repertoire` (`idr`, `nom`, `idA`, `idT`) VALUES
(2, 'A Media Nioch', 18, 7);

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE IF NOT EXISTS `texte` (
  `idt` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `nbfich` int(2) NOT NULL,
  `nomfich1` varchar(255) NOT NULL,
  `dest1` varchar(255) NOT NULL,
  `nomfich2` varchar(255) NOT NULL,
  `dest2` varchar(255) NOT NULL,
  `nomfich3` varchar(255) NOT NULL,
  `dest3` varchar(255) NOT NULL,
  `nomfich4` varchar(255) NOT NULL,
  `dest4` varchar(255) NOT NULL,
  `nomfich5` varchar(255) NOT NULL,
  `dest5` varchar(255) NOT NULL,
  PRIMARY KEY (`idt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `texte`
--

INSERT INTO `texte` (`idt`, `nom`, `nbfich`, `nomfich1`, `dest1`, `nomfich2`, `dest2`, `nomfich3`, `dest3`, `nomfich4`, `dest4`, `nomfich5`, `dest5`) VALUES
(1, 'cecila', 1, 'Cecila.pdf', 'partition', '', '', '', '', '', '', '', ''),
(2, 'cecila', 1, 'Cecila.pdf', 'partition', '', '', '', '', '', '', '', ''),
(3, 'cecila', 1, 'Cecila.pdf', 'partition', '', '', '', '', '', '', '', ''),
(4, 'cecila', 1, 'Cecila.pdf', 'partition', '', '', '', '', '', '', '', ''),
(5, 'cecila', 1, 'Cecila.pdf', 'partition', '', '', '', '', '', '', '', ''),
(6, 'cancon', 1, 'CanÃ§on.pdf', 'paroles', '', '', '', '', '', '', '', ''),
(7, 'A Media Nioch', 1, 'A_mieja_nioch.pdf', 'Partition', '', '', '', '', '', '', '', ''),
(8, 'A Media Nioch', 1, 'A_mieja_nioch.pdf', 'Partition', '', '', '', '', '', '', '', ''),
(9, 'A Media Nioch', 1, 'A_mieja_nioch.pdf', 'Partition', '', '', '', '', '', '', '', ''),
(10, 'A Media Nioch', 1, 'A_mieja_nioch.pdf', 'Partition', '', '', '', '', '', '', '', ''),
(11, 'A Media Nioch', 1, 'A_mieja_nioch.pdf', 'Partition', '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `mdp`, `statut`, `admin`, `adresseP`, `codeP`, `ville`, `numtelF`, `numtelM`, `voix`) VALUES
(1, 'Tiercelin', 'Quentin', 'q.tiercelin@gmail.com', 'licorne', '', 1, '20, avenue du Docteur Pezet', '34090', 'Montpellier', '04.99.23.93.98', '06.50.80.66.77', 'voix'),
(2, 'Beule', 'JÃ©rÃ©my', 'androalphas@hotmail.fr', 'licorne', '', 0, '', '', '', '', '', 'voix'),
(3, 'Bex-Chauvet', 'Olivier', 'fullofwrath@hotmail.fr', 'lilo', 'PrÃ©sident', 1, '114 rue du ponay', '34090', 'Montpellier', '04.22.33.44.55', '06.22.33.44.55', 'voix2');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `repertoire`
--
ALTER TABLE `repertoire`
  ADD CONSTRAINT `repertoire_ibfk_1` FOREIGN KEY (`idA`) REFERENCES `audio` (`ida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `repertoire_ibfk_2` FOREIGN KEY (`idT`) REFERENCES `texte` (`idt`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
