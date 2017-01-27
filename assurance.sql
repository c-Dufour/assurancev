-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 27 Janvier 2017 à 15:48
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `assurance`
--

-- --------------------------------------------------------

--
-- Structure de la table `assurance`
--

CREATE TABLE `assurance` (
  `id` int(10) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `assurance`
--

INSERT INTO `assurance` (`id`, `libelle`, `prix`) VALUES
(1, 'Assurance tous risques', '45'),
(2, 'Assurance du pauvre', '19'),
(3, 'uirit', '150'),
(4, 'dsdsdsdsds', '520'),
(5, 'dsdsdsd', '150'),
(6, 'prieezea', '150');

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

CREATE TABLE `car` (
  `id` int(15) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `immat` varchar(15) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_assurance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `car`
--

INSERT INTO `car` (`id`, `marque`, `immat`, `id_user`, `id_assurance`) VALUES
(1, 'bmw', '254bt78', 1, 1),
(2, 'Mercedes', '741pmo9', 1, 1),
(3, 'fiat', '854ds96', 2, 2),
(4, 'fiat panda', '554sdqd21', 17, 1),
(5, 'renaud 21', 'sfd54fff', 17, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `isAdmin`, `password`) VALUES
(1, 'brock', 'brockyt@gmail.com', 1, ''),
(2, 'vhalala', 'dsdsds@gmail.com', 1, ''),
(8, 'Michel', 'mich@leporir.com', 0, 'test'),
(10, 'dsdsd', 'dsds@fdgf', 0, ''),
(11, 'retry', 'rezrze@gfdgf', 0, ''),
(17, 'Valentin', 'valoche@gmail.com', 0, ''),
(19, 'gfgfdgd', 'benlelooser@gmail.com', 0, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `assurance`
--
ALTER TABLE `assurance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_assurance` (`id_assurance`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `assurance`
--
ALTER TABLE `assurance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
