-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 14 mars 2024 à 10:36
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetsoutenance`
--

-- --------------------------------------------------------

--
-- Structure de la table `memoires`
--

CREATE TABLE `memoires` (
  `id` int(11) NOT NULL,
  `titredumemoire` varchar(255) NOT NULL,
  `resumer` varchar(255) NOT NULL,
  `motcles` varchar(255) NOT NULL,
  `datedesoutenance` date NOT NULL,
  `nomauteur` varchar(255) NOT NULL,
  `numeroetudiant` int(255) NOT NULL,
  `faculter` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `anneesoutenance` varchar(255) NOT NULL,
  `languememoire` varchar(255) NOT NULL,
  `fichier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `passworde` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `pseudo`, `email`, `contact`, `passworde`) VALUES
(1, 'ABOUDOU', 'fAO', 'Faozi', 'aboudou@gmail.com', '66778899', '$2y$10$fimy5yFUProwFsLqLU.WzOKOyVX10FAiOZE/CS4n9ijlx.UKLbHWy'),
(2, 'ADJATI', 'Fofana', 'Zéid', 'adjatifofana@gmail.com', '+22995193818', '$2y$10$Q/sSYycM/w/n2uUtXlbHoeVNtrWXT0Jc.dzzFxtZl0iN8mfR9i4cm'),
(3, 'GOUNOU', 'Gael', 'Renaul', 'gaelgounou@gmail.com', '66778899', '$2y$10$nPv1mJ6fomeKvN74k4Q8mO7BTXC9YXS9q8SDuJENiwzoVrW31.7.e'),
(4, 'MAMA', 'Dramane', 'DG', 'mama@gmail.com', '97590367', '$2y$10$lsBjHEF6P2c54fXWWI.pKO98S4RdE1qhuEDstRef8Y6/D1NhYczqa'),
(5, 'MAMA', 'Zéid', 'zib', 'mamamzeidou@gmail.com', '66778899', '$2y$10$TDlt6Dw8Wi9keYJZtavf6OB8SuQ5m7YdwRDPjqSqbFeEpKAS.BKta');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `memoires`
--
ALTER TABLE `memoires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `memoires`
--
ALTER TABLE `memoires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
