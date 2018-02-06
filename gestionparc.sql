-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 26 Mai 2015 à 21:29
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestionparc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', 'samiaoumaima');

-- --------------------------------------------------------

--
-- Structure de la table `assurance`
--

CREATE TABLE IF NOT EXISTS `assurance` (
  `id_ass` int(11) NOT NULL AUTO_INCREMENT,
  `Matricule` char(30) DEFAULT NULL,
  `cout_ass` float NOT NULL,
  `Date_debut` date NOT NULL,
  `Date_fin` date NOT NULL,
  PRIMARY KEY (`id_ass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `assurance`
--

INSERT INTO `assurance` (`id_ass`, `Matricule`, `cout_ass`, `Date_debut`, `Date_fin`) VALUES
(1, '09-543220', 123.89, '2015-04-29', '2014-04-23'),
(2, '09-410008', 450, '2014-09-08', '2015-05-07'),
(4, '09-342170', 340, '2014-05-08', '2015-05-20'),
(5, '09-121212', 456, '2015-05-13', '2015-05-20'),
(6, '09-111111', 199, '2014-05-21', '2015-05-21'),
(7, '09-111111', 200, '2014-07-10', '2015-07-17'),
(8, '09-120303', 150, '2014-10-08', '2015-10-08'),
(9, '09-456002', 140, '2014-05-26', '2015-05-26'),
(10, '09-006423', 140, '2013-06-04', '2015-05-28'),
(11, '09-456023', 140, '2014-11-13', '2015-05-29'),
(12, '09-456023', 170, '2015-01-02', '2015-10-17');

-- --------------------------------------------------------

--
-- Structure de la table `conducteur`
--

CREATE TABLE IF NOT EXISTS `conducteur` (
  `id_conducteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` char(30) NOT NULL,
  `prenom` char(30) NOT NULL,
  `CIN` varchar(10) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `matricule` char(30) NOT NULL,
  PRIMARY KEY (`id_conducteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `conducteur`
--

INSERT INTO `conducteur` (`id_conducteur`, `nom`, `prenom`, `CIN`, `telephone`, `matricule`) VALUES
(2, 'Bilel', 'ben mohamed', '06549781', '45098734', '09-543220'),
(3, 'Mohamed', 'ben salah', '09933333', '23423098', '09-543220'),
(4, 'aymen', 'zouaidi', '099546726', '40700333', '09-098644'),
(6, 'bkhairia', 'Maher', '06984003', '42159159', '09-121212'),
(7, 'Ben Salah', 'Amin', '09444444', '24244002', '09-410008'),
(8, 'Abbessi', 'Malek', '09980066', '22000444', '09-543220'),
(9, 'Chaabani', 'Hani', '09977066', '42100023', '09-120303'),
(10, 'Mabrouki', 'Majed', '07888936', '22007263', '09-456002'),
(11, 'Ahmdi', 'Amin', '06944403', '27740104', '09-456002'),
(12, 'Hilali', 'Majdi', '07832436', '98789004', '09-456002');

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

CREATE TABLE IF NOT EXISTS `consommation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Mission` int(11) DEFAULT NULL,
  `conducteur` int(11) DEFAULT NULL,
  `vehicule` int(11) DEFAULT NULL,
  `km` float DEFAULT NULL,
  `carburant` float DEFAULT NULL,
  `date_cons` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `consommation`
--

INSERT INTO `consommation` (`id`, `Mission`, `conducteur`, `vehicule`, `km`, `carburant`, `date_cons`) VALUES
(1, 7, 2, 9, 3100, 277, '2015-05-14'),
(2, 19, 3, 9, 345, 45, '2015-05-15'),
(3, 19, 3, 9, 400, 45, '2015-05-15'),
(4, 19, 3, 9, 500, 90, '2015-05-15'),
(5, 19, 3, 9, 800, 90, '2015-05-15'),
(6, 19, 3, 9, 400, 52, '2015-05-15');

-- --------------------------------------------------------

--
-- Structure de la table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_deb` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `cout_maintenance` float DEFAULT NULL,
  `Atelier` varchar(30) DEFAULT NULL,
  `Matricule` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `maintenance`
--

INSERT INTO `maintenance` (`id`, `date_deb`, `date_fin`, `cout_maintenance`, `Atelier`, `Matricule`) VALUES
(1, '2015-05-12', '2015-05-15', 350, 'Atelier Maher', '09-410008'),
(2, '2015-04-22', '2015-04-23', 34.09, 'Atelier mohamed sfax', '09-410008'),
(3, '2015-05-14', '2015-05-15', 45, 'dmm', '-121203'),
(4, '2015-05-13', '2015-05-14', 16, 'dmm', '-121203'),
(5, '2015-05-15', '2015-05-16', 45, 'dmm', '-409999'),
(6, '2015-05-14', '2015-05-15', 50, 'DMM', '-543211'),
(7, '2015-05-19', '2015-05-20', 20, 'DMM', '-543211'),
(8, '2015-05-18', '2015-05-19', 155, 'DMM', '-543211'),
(9, '2015-05-22', '2015-05-23', 60, 'DMM', '-345612'),
(10, '2015-05-20', '2015-05-21', 0, 'DMM', ''),
(11, '2015-05-15', '2015-05-16', 0, 'DMM', ''),
(14, '2015-05-14', '2015-05-22', 242, 'DMM', '09-342170'),
(15, '2015-05-16', '2015-05-17', 200, 'DMM', '09-342170');

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `id_mission` int(11) NOT NULL AUTO_INCREMENT,
  `id_conducteur` int(11) DEFAULT NULL,
  `Matricule` char(30) DEFAULT NULL,
  `objectif_miss` varchar(200) DEFAULT NULL,
  `Km_approximative` int(6) DEFAULT NULL,
  `Qte_carburant` int(6) DEFAULT NULL,
  `Date_debut` date DEFAULT NULL,
  `Date_fin` date DEFAULT NULL,
  `compteur_initial` int(11) NOT NULL,
  PRIMARY KEY (`id_mission`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Contenu de la table `mission`
--

INSERT INTO `mission` (`id_mission`, `id_conducteur`, `Matricule`, `objectif_miss`, `Km_approximative`, `Qte_carburant`, `Date_debut`, `Date_fin`, `compteur_initial`) VALUES
(1, 2, '09-410008', 'Transporter directeur', 100, 13, '2014-04-16', '2014-03-17', 0),
(2, 2, '09-410008', 'Transporter PDG', 300, 34, '2015-04-24', '2014-04-05', 0),
(3, 3, '09-342170', 'Transporter Stagiere', 123, 23, '2015-05-22', '2014-04-23', 0),
(4, 2, '09-342170', 'Transporter visiteur', 122, 22, '2015-04-30', '2015-05-01', 0),
(5, 1, '09-410008', 'TRONSPORT', 1500, 195, '2015-05-07', '2015-06-13', 0),
(6, 1, '09-543220', 'TRONSPORT', 1500, 195, '2015-05-07', '2015-06-13', 0),
(7, 2, '09-543220', 'mission', 2134, 277, '2015-05-15', '2015-05-15', 0),
(8, 2, '09-543220', 'mission', 2134, 277, '2015-05-15', '2015-05-15', 0),
(9, 2, '09-543220', 'mission', 2134, 277, '2014-02-15', '2015-05-15', 0),
(10, 2, '09-543220', 'mission', 2134, 277, '2014-05-15', '2015-05-15', 0),
(11, 2, '09-543220', 'mission', 2134, 277, '2015-05-15', '2015-05-15', 0),
(12, 2, '09-543220', 'mission', 2134, 277, '2015-05-15', '2015-05-15', 0),
(13, 2, '09-543220', 'mission', 2134, 277, '2015-05-15', '2015-05-15', 0),
(14, 1, '09-342170', 'mission233', 190, 25, '2015-05-15', '2015-05-15', 0),
(15, 1, '09-342170', 'misss', 321, 42, '2015-05-06', '2015-05-05', 0),
(16, 1, '09-410008', 'misss', 321, 42, '2015-05-06', '2015-05-05', 0),
(17, 3, '09-342170', 'mission 3210', 350, 46, '2015-05-15', '2015-05-30', 0),
(18, 3, '09-410008', 'aaaaaaaaaa', 231, 30, '2015-05-04', '2015-05-05', 0),
(19, 3, '09-410008', 'sssssssssssssssss', 345, 45, '2015-05-01', '2015-05-14', 0),
(20, 3, '09-410008', 'DDDDDDDDDDD', 2333, 303, '2015-04-28', '2015-04-30', 0),
(22, 3, '09-410008', 'AAAASSSSSS', 345, 45, '2015-05-01', '2015-04-04', 0),
(23, 2, '09-543220', 'MISSSS', 3245, 422, '2015-04-06', '2015-05-15', 0),
(24, 2, '09-410008', 'AZZZZZZ', 345, 45, '2015-04-04', '2015-05-16', 0),
(25, 3, '09-410008', 'AAAAAAAA', 12233, 1590, '2015-05-19', '2014-05-19', 0),
(38, 2, '09-096666', 'tttttttttttttttttttttttttttttttttt', 324, 42, '2015-05-27', '2015-05-28', 0),
(39, 2, '09-096666', 'TRANSPORTER ', 342, 44, '2015-05-14', '2015-05-13', 0),
(40, 3, '09-342170', 'TTTTRRRAANSSS', 59, 8, '2015-05-13', '2015-05-13', 0),
(41, 3, '09-342170', 'TRANSPORT', 453, 59, '2015-05-12', '2015-05-12', 0),
(42, 3, '09-342170', 'TRANSPORT', 453, 59, '2015-05-12', '2015-05-12', 0),
(43, 3, '09-342170', 'TRANSPORT', 453, 59, '2015-05-12', '2015-05-12', 0),
(44, 3, '09-342170', 'TRANSPORT', 453, 59, '2015-05-12', '2015-05-12', 0),
(45, 3, '09-342170', 'TRANSIT', 3456, 449, '2015-05-14', '2015-05-14', 0),
(46, 3, '09-342170', 'TRANSIT', 3456, 449, '2015-05-14', '2015-05-14', 0),
(47, 3, '09-342170', 'TRANSIT', 3456, 449, '2015-05-14', '2015-05-14', 0),
(48, 2, '09-410008', 'réunion', 400, 52, '2015-05-15', '2015-05-17', 0),
(49, 2, '09-096666', 'transporter matériel', 300, 39, '2015-05-11', '2015-05-13', 0),
(50, 6, '09-121212', 'transport materiel', 450, 59, '2015-04-15', '2015-05-14', 0),
(51, 6, '09-121212', 'dfsss', 100, 13, '2015-05-13', '2015-05-15', 0),
(52, 7, '09-410008', 'achat matériels', 400, 52, '0000-00-00', '0000-00-00', 0),
(53, 3, '09-111111', 'bvvvvvvvv', 556, 72, '2015-05-16', '2015-05-17', 0),
(54, 3, '09-111111', 'reunion', 500, 65, '2015-05-11', '2015-05-14', 0),
(55, 3, '09-111111', 'réunion', 52, 7, '0000-00-00', '0000-00-00', 1400),
(56, 3, '09-111111', 'réunion', 52, 7, '2015-05-05', '2015-05-20', 1400),
(57, 3, '09-111111', 'réunion', 52, 7, '2015-05-05', '2015-05-20', 1400),
(58, 3, '09-111111', 'réunion', 52, 7, '2015-05-05', '2015-05-20', 1400),
(59, 7, '09-111111', 'conduit matériel', 200, 26, '2015-05-07', '2015-05-20', 1500),
(60, 0, '', '', 200, 26, '2015-05-07', '2015-05-20', 0),
(61, 7, '09-111111', 'conduit matériel', 200, 26, '2015-05-07', '2015-05-20', 0),
(62, 7, '09-111111', 'conduit matériel', 200, 26, '2015-05-07', '2015-05-20', 1500),
(63, 7, '09-111111', 'conduit matériel', 200, 26, '2015-05-07', '2015-05-20', 1500),
(64, 7, '09-111111', 'conduit matériel', 200, 26, '2015-05-07', '2015-05-20', 1500),
(65, 0, '', 'conduit matériel', 200, 26, '2015-05-07', '2015-05-20', 1500),
(66, 7, '09-111111', 'conduit matériel', 200, 26, '2015-05-07', '2015-05-20', 1500),
(67, 2, '09-543220', 'truhygtrer', 150, 20, '2015-05-07', '2015-05-19', 1000),
(68, 4, '09-096666', 'réunion', 150, 20, '2015-05-13', '2015-05-20', 2000),
(69, 4, '09-096666', 'réunion', 150, 20, '2015-05-13', '2015-05-20', 2000),
(70, 2, '09-096666', 'hjhjb', 55, 7, '2015-05-13', '2015-05-14', 45600),
(71, 3, '09-543220', 'achat des pièces', 100, 13, '2015-05-14', '2015-05-18', 2000),
(72, 8, '09-543220', 'réunion', 130, 17, '2015-05-05', '2015-05-10', 2400),
(73, 6, '09-096666', 'travail', 400, 52, '2015-05-19', '2015-05-21', 2500),
(74, 8, '09-342170', 'maintenance', 60, 8, '2015-05-19', '2015-05-20', 1700),
(75, 11, '09-342170', 'maintenance', 150, 20, '2015-02-11', '2015-02-14', 3000),
(76, 6, '09-120303', 'réunion', 400, 52, '2015-05-13', '2015-05-22', 1756),
(77, 2, '09-120303', 'transporter matériel', 60, 8, '2015-05-22', '2015-05-23', 800),
(78, 10, '09-456023', 'réunion', 90, 12, '2015-05-22', '2015-05-24', 1900),
(79, 9, '09-096666', 'achat des pieces', 30, 4, '2015-05-22', '2015-05-24', 874),
(80, 4, '09-098644', 'réunion', 170, 22, '2015-05-20', '2015-05-27', 4000),
(81, 8, '09-345621', 'réunion ', 130, 17, '2015-05-06', '2015-05-07', 7000),
(82, 8, '09-456023', 'transport materiel', 300, 39, '2015-05-20', '2015-05-23', 3420),
(83, 6, '09-120303', 'achat des pieces', 45, 6, '2015-05-21', '2015-05-27', 1940),
(84, 2, '09-098644', 'vidange', 15, 2, '2015-05-25', '2015-05-25', 1980),
(85, 11, '09-006423', 'lavage', 5, 1, '2015-05-17', '2015-05-17', 2000),
(86, 7, '09-410008', 'reparation', 100, 13, '2015-05-15', '2015-05-22', 7000);

-- --------------------------------------------------------

--
-- Structure de la table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `id_model` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_model`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `model`
--

INSERT INTO `model` (`id_model`, `Libelle`) VALUES
(1, 'Mazda'),
(2, 'Mazda MX-5'),
(3, 'Mazda3'),
(4, 'Mazda Tribute');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conducteur` int(11) DEFAULT NULL,
  `prime` float DEFAULT NULL,
  `net` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `paiement`
--

INSERT INTO `paiement` (`id`, `conducteur`, `prime`, `net`) VALUES
(1, NULL, 120, 12.6091),
(2, NULL, 0, 2364),
(3, NULL, 0, 2328),
(5, 3, 120, 2484),
(6, 2, 0, 0),
(7, 6, 0, 13920),
(8, 6, 0, 0),
(9, 2, 0, 0),
(10, 3, 0, 0),
(11, 2, 0, 13000);

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

CREATE TABLE IF NOT EXISTS `pointage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_conducteur` int(11) NOT NULL,
  `id_mission` int(11) NOT NULL,
  `Date_debut` datetime NOT NULL,
  `Date_fin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `pointage`
--

INSERT INTO `pointage` (`id`, `id_conducteur`, `id_mission`, `Date_debut`, `Date_fin`) VALUES
(1, 1, 2, '2015-05-04 00:00:00', '2015-05-08 00:00:00'),
(10, 3, 2, '2015-05-08 02:05:09', '2015-05-13 03:07:09'),
(11, 3, 20, '2015-05-13 04:05:08', '2015-05-13 04:10:09'),
(12, 3, 23, '2015-05-01 03:10:13', '2015-05-04 05:14:13'),
(13, 2, 24, '2015-05-06 04:10:14', '2015-05-15 00:00:00'),
(14, 2, 25, '2015-05-19 11:00:00', '2015-05-19 18:00:00'),
(15, 2, 40, '2015-05-13 03:01:00', '2015-05-13 02:02:00'),
(16, 3, 41, '2015-05-12 00:02:00', '2015-05-12 02:59:00'),
(17, 3, 47, '2015-05-14 03:04:00', '2015-05-14 03:04:00'),
(18, 2, 48, '2015-05-15 08:08:00', '2015-05-17 08:08:00'),
(19, 2, 49, '2015-05-11 05:05:00', '2015-05-13 05:05:00'),
(20, 6, 50, '2015-04-15 12:00:00', '2015-05-14 12:00:00'),
(21, 6, 51, '2015-05-13 02:02:00', '2015-05-15 02:02:00'),
(22, 7, 52, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 3, 53, '2015-05-16 22:22:00', '2015-05-17 22:22:00'),
(24, 3, 54, '2015-05-11 12:00:00', '2015-05-14 12:00:00'),
(25, 3, 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 3, 56, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 0, 65, '2015-05-07 12:00:00', '2015-05-20 12:00:00'),
(28, 7, 66, '2015-05-07 12:00:00', '2015-05-20 12:00:00'),
(29, 2, 67, '2015-05-07 00:00:00', '2015-05-19 00:00:00'),
(30, 4, 69, '2015-05-13 00:00:00', '2015-05-20 00:00:00'),
(31, 2, 70, '2015-05-13 00:00:00', '2015-05-14 00:00:00'),
(32, 3, 71, '2015-05-14 00:00:00', '2015-05-18 00:00:00'),
(33, 8, 72, '2015-05-05 00:00:00', '2015-05-10 00:00:00'),
(34, 6, 73, '2015-05-19 00:00:00', '2015-05-21 00:00:00'),
(35, 8, 74, '2015-05-19 00:00:00', '2015-05-20 00:00:00'),
(36, 11, 75, '2015-02-11 00:00:00', '2015-02-14 00:00:00'),
(37, 6, 76, '2015-05-13 00:00:00', '2015-05-22 00:00:00'),
(38, 2, 77, '2015-05-22 00:00:00', '2015-05-23 00:00:00'),
(39, 10, 78, '2015-05-22 00:00:00', '2015-05-24 00:00:00'),
(40, 9, 79, '2015-05-22 00:00:00', '2015-05-24 00:00:00'),
(41, 4, 80, '2015-05-20 00:00:00', '2015-05-27 00:00:00'),
(42, 8, 81, '2015-05-06 00:00:00', '2015-05-07 00:00:00'),
(43, 8, 82, '2015-05-20 00:00:00', '2015-05-23 00:00:00'),
(44, 6, 83, '2015-05-21 00:00:00', '2015-05-27 00:00:00'),
(45, 2, 84, '2015-05-25 00:00:00', '2015-05-25 00:00:00'),
(46, 11, 85, '2015-05-17 00:00:00', '2015-05-17 00:00:00'),
(47, 7, 86, '2015-05-15 00:00:00', '2015-05-22 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `punition`
--

CREATE TABLE IF NOT EXISTS `punition` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `conducteur` int(11) NOT NULL,
  `km_depasser` float NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `punition`
--

INSERT INTO `punition` (`idp`, `conducteur`, `km_depasser`) VALUES
(2, 3, 455),
(3, 3, 55),
(5, 6, 14);

-- --------------------------------------------------------

--
-- Structure de la table `reparation`
--

CREATE TABLE IF NOT EXISTS `reparation` (
  `id_rep` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `cout_rep` float NOT NULL,
  `Matricule` char(30) DEFAULT NULL,
  PRIMARY KEY (`id_rep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `reparation`
--

INSERT INTO `reparation` (`id_rep`, `date`, `cout_rep`, `Matricule`) VALUES
(9, '2015-05-15', 12.45, '-98635'),
(10, '2015-05-15', 12.45, '-98635'),
(11, '2015-05-14', 45, '09-543220'),
(13, '2015-05-20', 100, '09-111111'),
(14, '2015-05-19', 200, '09-342170'),
(15, '2015-05-19', 120, '09-345621'),
(16, '2015-05-20', 222, '09-543220'),
(17, '2015-05-21', 40, '09-342170');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_statut` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `libelle_statut`) VALUES
(1, 'Personnel'),
(2, 'Service');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `Matricule` char(30) NOT NULL,
  `Puissance` int(5) DEFAULT NULL,
  `carte_grise` char(20) DEFAULT NULL,
  `Nb_place` int(5) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `id_statut` int(11) DEFAULT NULL,
  `Km_parcourir` float DEFAULT NULL,
  `Date_acquisition` date DEFAULT NULL,
  `type_carburant` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`Matricule`, `Puissance`, `carte_grise`, `Nb_place`, `model`, `id_statut`, `Km_parcourir`, `Date_acquisition`, `type_carburant`) VALUES
('09-006423', 24, '0044', 4, 'Ford', 2, 100, '2014-06-03', 'diesel'),
('09-096666', 342, '875412', 6, 'Ford', 2, 45000, '2015-05-06', 'Diesel'),
('09-098644', 6, '672133', 4, 'Mazda 3', 2, 56000, '2015-05-12', 'sans plomb'),
('09-120303', 15, '0045', 4, 'm', 2, 200, '2015-02-05', 'diesel'),
('09-342170', 900, '809221', 4, 'Mazda', 1, 456111, '2015-04-16', 'diesel'),
('09-345621', 15, '123', 4, 'Ford', 2, 0, '2015-05-15', 'diesel'),
('09-410008', 15, '012', 4, 'Ford', 2, 100, '2015-05-06', 'diesel'),
('09-456002', 12, '004', 4, 'Symbole', 1, 800, '2015-01-30', 'Essence'),
('09-456023', 15, '047', 4, 'Mazda', 2, 60, '2015-05-04', 'sans plomb'),
('09-543220', 6, '633333', 4, 'ford fiesta', 1, 456220, '2000-01-01', 'sans plomb');

-- --------------------------------------------------------

--
-- Structure de la table `vignette`
--

CREATE TABLE IF NOT EXISTS `vignette` (
  `id_vignette` int(11) NOT NULL AUTO_INCREMENT,
  `Matricule` char(30) DEFAULT NULL,
  `Date_paiement` date NOT NULL,
  `Date_fin` date DEFAULT NULL,
  `cout_vignette` float NOT NULL,
  PRIMARY KEY (`id_vignette`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `vignette`
--

INSERT INTO `vignette` (`id_vignette`, `Matricule`, `Date_paiement`, `Date_fin`, `cout_vignette`) VALUES
(1, '09-410008', '2015-04-02', '2015-04-02', 123),
(2, '09-342170', '2014-04-10', '2015-05-20', 90),
(3, '09-342170', '2014-12-11', '2015-05-06', 60),
(4, '09-096666', '2015-05-13', '2016-05-01', 250),
(5, '09-410008', '0000-00-00', '0000-00-00', 200),
(6, '09-543220', '0000-00-00', '0000-00-00', 244),
(7, '09-342170', '2014-11-03', '2015-05-27', 200),
(8, '09-098644', '2014-07-16', '2015-05-12', 210),
(9, '09-345621', '2014-03-06', '2015-05-28', 200);

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE IF NOT EXISTS `visite` (
  `id_visite` int(11) NOT NULL AUTO_INCREMENT,
  `Matricule` char(30) DEFAULT NULL,
  `observation` varchar(100) NOT NULL,
  `Datevisite` date NOT NULL,
  PRIMARY KEY (`id_visite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `visite`
--

INSERT INTO `visite` (`id_visite`, `Matricule`, `observation`, `Datevisite`) VALUES
(1, '09-410008', '', '2015-04-08'),
(3, '09-543220', '', '2015-05-23'),
(4, '09-342170', '', '2015-05-01'),
(5, '09-121212', 'hfdhj', '2015-05-14'),
(6, '09-111111', 'hvhhhbbb', '2015-05-17'),
(7, '09-410008', 'il faut changer la pneue', '2015-05-20'),
(8, '09-120303', 'ajhdcghg', '2015-05-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
