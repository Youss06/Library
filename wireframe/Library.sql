-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 06 Décembre 2017 à 15:55
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Library`
--

-- --------------------------------------------------------

--
-- Structure de la table `Book`
--

CREATE TABLE `Book` (
  `id` int(11) NOT NULL,
  `title` varchar(55) CHARACTER SET utf8 NOT NULL,
  `category` varchar(55) CHARACTER SET utf8 NOT NULL,
  `author` varchar(55) CHARACTER SET utf8 NOT NULL,
  `available` varchar(5) CHARACTER SET utf8 NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Book`
--

INSERT INTO `Book` (`id`, `title`, `category`, `author`, `available`, `summary`) VALUES
(1, 'Harry Potter', 'Fantastique', 'JK Rowling', 'OUI', 'AprÃ¨s la mort de ses parents (Lily et James Potter), Harry Potter est recueilli par sa tante maternelle PÃ©tunia et son oncle Vernon Ã  l\'Ã¢ge d\'un an. Ces derniers, animÃ©s depuis toujours d\'une haine fÃ©roce envers les parents du garÃ§on qu\'ils qualifient de gens Â« bizarres Â»'),
(2, 'Seigneur des Anneaux', 'Roman', 'J.R.R Tolkien', 'NON', 'Cet anneau malÃ©fique est une arme redoutable qui permettrait au seigneur du Mordor de rÃ©gner sur la Terre du Milieu et de rÃ©duire tous ses peuples en esclavage. Gandalf relate alors Ã  Frodon la malÃ©diction de l\'Anneau et l\'informe que les serviteurs de Sauron sont dÃ©jÃ  en route pour retrouver le prÃ©cieux objet'),
(3, 'Eloge de la folie', 'Humour satirique', 'Erasme', 'OUI', 'L\'Ã©loge de la Folie, une oeuvre humaniste. L\'Ã©loge de la Folie est un livre satirique publiÃ©e par Erasme en 1511. Le personnage allÃ©gorique de la Folie, femme aux oreilles alourdies par des grelots, prend la parole : la Raison, son adversaire, ne doit pas se montrer si sÃ»re d\'elle-mÃªme selon la Folie');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `idnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`id`, `name`, `firstName`, `city`, `idnumber`) VALUES
(1, 'Brown', 'Alex', 'Lille', 2187),
(2, 'Kenou', 'Ken', 'Roubaix', 3279),
(3, 'Tayn', 'Conan', 'Marseille', 1256);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Book`
--
ALTER TABLE `Book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
