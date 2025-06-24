-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 24 juin 2025 à 15:08
-- Version du serveur : 8.0.42
-- Version de PHP : 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `denwallo`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

USE denwallo;

CREATE TABLE `produits` (
  `id` int NOT NULL,
  `marque` varchar(150) NOT NULL,
  `modele` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `stockage` int NOT NULL,
  `couleur` varchar(150) NOT NULL,
  `os` varchar(150) NOT NULL,
  `ram` varchar(150) NOT NULL,
  `resolution` varchar(150) NOT NULL,
  `taille` varchar(150) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `marque`, `modele`, `image`, `stockage`, `couleur`, `os`, `ram`, `resolution`, `taille`, `prix`) VALUES
(1, 'apple', 'Iphone 11', 'iphone-11.jpg', 64, 'Orange', 'iOS', '6 Go', '1789 x 787', '6 pouces', 222.99);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

USE denwallo;

CREATE TABLE `user` (
  `id` int NOT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  `nom` varchar(150) DEFAULT NULL,
  `telephone` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `nom`, `telephone`, `email`, `adresse`, `password`, `role`) VALUES
(2, '', '', '0764589412', 'admin@denwallo.com', '', '$2y$10$HhiQIVWdhKpWtpXcw2txpejFIpDgLRfNqCnGPbU5OQzouqKNypeUO', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
