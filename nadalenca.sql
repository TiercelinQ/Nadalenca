-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 23 Janvier 2014 à 09:25
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `audio`
--

INSERT INTO `audio` (`ida`, `nom`, `nbfichier`, `nomfich1`, `dest1`, `nomfich2`, `dest2`, `nomfich3`, `dest3`, `nomfich4`, `dest4`, `nomfich5`, `dest5`) VALUES
(23, 'A media nioch', 1, '22e1e855ff0b2df453f432f6591ed72f.mp3', 'Tenor', '', '', '', '', '', '', '', ''),
(24, 'Cecila', 4, '74e1d087111c172c750d086103783ee2.mp3', 'Alto', '47c2a9a36ef12c0df9f91a9743c286b1.mp3', 'Basse', 'e338603e2ea747627127149f363ca90d.mp3', 'Soprano', '000565ca3d7d7fc223c808275c34ac0d.mp3', 'Tenor', '', '');

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
  `prixC` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`id`, `titreC`, `heureC`, `minuteC`, `lieuC`, `adresseC`, `villeC`, `dateC`, `prixC`) VALUES
(10, 'Concert de NoÃ«l', 20, 30, 'Salle municipale', '9 rue du concert', 'Montpellier', '2013-12-20', '8â‚¬'),
(11, 'Concert de rentrÃ©e', 19, 0, 'Salle municipale', '10 avenue Jean JaurÃ¨s', 'Vendargues', '2014-02-05', '10â‚¬');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `idI` int(11) NOT NULL AUTO_INCREMENT,
  `titreI` varchar(50) NOT NULL,
  `nomI` varchar(255) NOT NULL,
  `descriptionI` varchar(255) NOT NULL,
  PRIMARY KEY (`idI`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`idI`, `titreI`, `nomI`, `descriptionI`) VALUES
(16, 'Notre chorale', 'e154164f683eff22cb92de59265512e9.jpg', 'Photo de notre chorale lors de la derniÃ¨re rencontre');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `lien`
--

INSERT INTO `lien` (`id`, `lien`, `description`) VALUES
(10, 'http://maisondeschoeurs.free.fr/association.htm', 'La Maison des ChÅ“urs de Montpellier');

-- --------------------------------------------------------

--
-- Structure de la table `mdp`
--

CREATE TABLE IF NOT EXISTS `mdp` (
  `mdpInscri` varchar(255) NOT NULL,
  `id` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mdp`
--

INSERT INTO `mdp` (`mdpInscri`, `id`) VALUES
('nadalenca', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idM`, `nomM`, `prenomM`, `emailM`, `sujetM`, `messageM`, `dateM`) VALUES
(11, 'Pochon', 'Amaury', 'pochon.amaury@gmail.com', 'Contact', 'Bonjour, je fais parti de la chorale et je souhaite m''inscrire. Pouvez vous me communiquez le mot de passe pour l''inscription ?', '21-01-14');

-- --------------------------------------------------------

--
-- Structure de la table `production`
--

CREATE TABLE IF NOT EXISTS `production` (
  `idP` int(10) NOT NULL AUTO_INCREMENT,
  `nomP` varchar(255) NOT NULL,
  `imageP` varchar(255) NOT NULL,
  `descriptionP` varchar(255) NOT NULL,
  `prixP` varchar(255) NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `production`
--

INSERT INTO `production` (`idP`, `nomP`, `imageP`, `descriptionP`, `prixP`) VALUES
(33, 'Notre CD', '2df053ccc9c5926d55637d6ca74fbe4e.jpg', 'Notre dernier CD', '15â‚¬');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `repertoire`
--

INSERT INTO `repertoire` (`idr`, `nom`, `idA`, `idT`) VALUES
(3, 'A media nioch', 23, 12),
(4, 'Cecila', 24, 13);

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE IF NOT EXISTS `texte` (
  `idt` int(10) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`idt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `texte`
--

INSERT INTO `texte` (`idt`, `nom`, `nbfichier`, `nomfich1`, `dest1`, `nomfich2`, `dest2`, `nomfich3`, `dest3`, `nomfich4`, `dest4`, `nomfich5`, `dest5`) VALUES
(12, 'A media nioch', 1, 'a4013db5084219fad501dc54d4fae5e9.pdf', 'Partitions', '', '', '', '', '', '', '', ''),
(13, 'Cecila', 1, '18216bfbf04d0d82500238566edcdde9.pdf', 'Partition', '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `mdp`, `statut`, `admin`, `adresseP`, `codeP`, `ville`, `numtelF`, `numtelM`, `voix`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', 'admin', 'Membre du Conseil d''Administration', 1, '', '', '', '', '', ''),
(2, 'membre', 'lambda', 'membre@mail.com', 'membre', 'Tresorier', 0, '', '', '', '', '', ''),


-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `idV` int(10) NOT NULL AUTO_INCREMENT,
  `titreV` varchar(255) NOT NULL,
  `lienV` varchar(255) NOT NULL,
  `descriptionV` varchar(255) NOT NULL,
  PRIMARY KEY (`idV`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`idV`, `titreV`, `lienV`, `descriptionV`) VALUES
(4, 'VidÃ©o de l''extrait Masiti', 'WvHl5OpBiQM', 'Le chant Masiti lors de notre derniÃ¨re reprÃ©sentation');

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
