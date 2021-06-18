-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 13 juin 2021 à 16:24
-- Version du serveur :  10.1.40-MariaDB
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
-- Base de données :  `guercif`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `idcontact` int(11) NOT NULL,
  `nomcontact` varchar(11) NOT NULL,
  `mailcontact` varchar(50) NOT NULL,
  `messagecontact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`idcontact`, `nomcontact`, `mailcontact`, `messagecontact`) VALUES
(12, 'aaa', 'test.test@gmail.com', 'rugthjtiyt_riyt_Ã¨ery_t');

-- --------------------------------------------------------

--
-- Structure de la table `lotissement`
--

CREATE TABLE `lotissement` (
  `idlotisement` int(11) NOT NULL,
  `Nomlotissement` varchar(50) NOT NULL,
  `Propietaire` varchar(50) NOT NULL,
  `Situation` varchar(100) NOT NULL,
  `TF` varchar(50) NOT NULL,
  `Plan` varchar(500) NOT NULL,
  `Cahierdescharge` varchar(500) NOT NULL,
  `autres` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lotissement`
--

INSERT INTO `lotissement` (`idlotisement`, `Nomlotissement`, `Propietaire`, `Situation`, `TF`, `Plan`, `Cahierdescharge`, `autres`) VALUES
(6, 'lotissement alfath a', 'hmadia', 'aaaaab', '525252da', '', 'PDF/02-suites-arithmetiques-geometriques.pdf', 'PDF/certificate_example.pdf'),
(7, 'lotissement alfath a', 'hmadia', 'aaaaab', '525252da', 'PDF/2020 Etude de cas informatique.pdf', 'PDF/02-suites-arithmetiques-geometriques.pdf', 'PDF/certificate_example.pdf'),
(8, 'lotissement alfath a', 'hmadia', 'aaaaab', '525252da', 'PDF/2020 Etude de cas informatique.pdf', 'PDF/02-suites-arithmetiques-geometriques.pdf', 'PDF/certificate_example.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `publi`
--

CREATE TABLE `publi` (
  `idpub` int(11) NOT NULL,
  `titrepub` varchar(100) NOT NULL,
  `discriptionpub` varchar(400) NOT NULL,
  `imagepub` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publi`
--

INSERT INTO `publi` (`idpub`, `titrepub`, `discriptionpub`, `imagepub`) VALUES
(1, 'test', 'gkjnbvlitjhvprtuoyeuobijvktij', 'publication/test1.jpg'),
(2, 'test2', 'dlgjkv,eroijov;lijeopgoritj', 'publication/test1.jpg'),
(5, 'moha', 'sdjhgfusryhgyi', 'publication/logo-guercif-new.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `usermail` varchar(50) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`iduser`, `usermail`, `login`, `password`, `usertype`) VALUES
(3, 'admin.admin1234@gmail.com', 'admin', 'admin', 'admin'),
(4, 'user1.user@gmail.com', 'user', '1234', 'user'),
(5, 'mohammed.kawkaw1@gmail.com', 'user1', '0000', 'user'),
(51, 'user2.user@gmail.com', 'alphab', '5555', 'user'),
(52, 'user3.user@gmail.com', 'jjj', '6666', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`idcontact`);

--
-- Index pour la table `lotissement`
--
ALTER TABLE `lotissement`
  ADD PRIMARY KEY (`idlotisement`);

--
-- Index pour la table `publi`
--
ALTER TABLE `publi`
  ADD PRIMARY KEY (`idpub`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `idcontact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `lotissement`
--
ALTER TABLE `lotissement`
  MODIFY `idlotisement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `publi`
--
ALTER TABLE `publi`
  MODIFY `idpub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
