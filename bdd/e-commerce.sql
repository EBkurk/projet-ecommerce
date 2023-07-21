-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 juil. 2023 à 11:26
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `intitule` varchar(250) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id`, `intitule`, `ville`, `region`, `code_postal`, `pays`, `utilisateur_id`) VALUES
(8, 'test', 'test', 'test', '99999', 'test', 4);

-- --------------------------------------------------------

--
-- Structure de la table `ajouter`
--

CREATE TABLE `ajouter` (
  `id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ajouter`
--

INSERT INTO `ajouter` (`id`, `produit_id`, `commande_id`, `qte`, `date`) VALUES
(10, 9, 12, 4, '2023-07-21');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(6, 'test'),
(7, 'lit'),
(8, 'canape'),
(9, 'bureau'),
(10, 'armoire');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `statut` varchar(100) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `adresse_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `statut`, `utilisateur_id`, `adresse_id`) VALUES
(12, 'En cour', 4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `compose`
--

CREATE TABLE `compose` (
  `id` int(11) NOT NULL,
  `materiaux_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `compose`
--

INSERT INTO `compose` (`id`, `materiaux_id`, `produit_id`) VALUES
(1, 4, 6),
(2, 5, 6),
(3, 6, 6);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `principal` tinyint(1) NOT NULL DEFAULT 0,
  `produit_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `url`, `principal`, `produit_id`, `categorie_id`) VALUES
(1, 'images/450775746.jpg', 0, 6, NULL),
(9, 'images/365022848.jpg', 0, 6, NULL),
(10, 'images/619675323.jpg', 0, 6, NULL),
(11, 'images/268138296.jpg', 0, 7, NULL),
(12, 'images/780692897.jpg', 0, 8, NULL),
(13, 'images/768583785.jpg', 0, 8, NULL),
(14, 'images/108050744.jpg', 0, 9, NULL),
(15, 'images/651168970.jpg', 0, 10, NULL),
(16, 'images/383111524.jpg', 0, 11, NULL),
(17, 'images/335789176.jpg', 0, 12, NULL),
(18, 'images/202272303.jpg', 0, 13, NULL),
(19, 'images/25101262.jpg', 0, 14, NULL),
(20, 'images/533218444.jpg', 0, 15, NULL),
(21, 'images/56283427.jpg', 0, 16, NULL),
(22, 'images/508838307.jpg', 0, 17, NULL),
(23, 'images/772000728.jpg', 0, 18, NULL),
(24, 'images/150093809.jpg', 0, NULL, 6);

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

CREATE TABLE `mail` (
  `objet` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `materiaux`
--

CREATE TABLE `materiaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `materiaux`
--

INSERT INTO `materiaux` (`id`, `nom`) VALUES
(4, 'future'),
(5, 'test'),
(6, 'p');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prix` float NOT NULL,
  `stock` int(10) NOT NULL,
  `description` text NOT NULL,
  `carousel` tinyint(1) NOT NULL DEFAULT 0,
  `highlander` tinyint(1) NOT NULL DEFAULT 0,
  `arriver` date NOT NULL DEFAULT current_timestamp(),
  `prioriter` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `stock`, `description`, `carousel`, `highlander`, `arriver`, `prioriter`, `categorie_id`) VALUES
(6, 'test', 10, 0, 'test', 1, 1, '2023-07-13', 1, 6),
(7, 'a', 11, 33, 'test2', 1, 0, '2023-07-14', 1, 8),
(8, 'b', 20, 66, 'test3', 1, 0, '2023-07-14', 0, 9),
(9, 'c', 5, 48, 'test4', 1, 1, '2023-07-14', 2, 7),
(10, 'd', 1, 0, 'test5', 0, 0, '2023-07-14', 0, 6),
(11, 'e', 2, 1, 'etts', 0, 0, '2023-07-14', 1, 6),
(12, 'f', 3, 2, 'dq', 0, 0, '2023-07-14', 1, 6),
(13, 'g', 45, 6, 'getrh', 0, 0, '2023-07-14', 3, 6),
(14, 'h', 6, 6, 'ytj', 0, 0, '2023-07-14', 0, 6),
(15, 'i', 7, 4, 'edr', 0, 0, '2023-07-14', 0, 6),
(16, 'j', 8, 3, 'q', 0, 0, '2023-07-14', 4, 6),
(17, 'efs', 5, 5, 'jhgfds', 0, 0, '2023-07-14', 7, 6),
(18, 're', 5, 0, 're', 0, 1, '2023-07-15', 0, 10);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `tel`, `email`, `mdp`) VALUES
(3, 'Bertreux', 'Stanislas', '0000000000', 'bertreux.stanislas@gmail.com', 'i'),
(4, 'stan', 'bertreux', '0000000000', 'test@gmail.com', '$2y$13$YU70ucn5yWvQntzGyt0.JOlK.Vx9Q00V/Ax0zPgXAM.yd96oUTurq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`utilisateur_id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`) USING BTREE;

--
-- Index pour la table `ajouter`
--
ALTER TABLE `ajouter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produit` (`produit_id`) USING BTREE,
  ADD KEY `id_commande` (`commande_id`) USING BTREE;

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`utilisateur_id`) USING BTREE,
  ADD KEY `commande_adresse_id_fk` (`adresse_id`);

--
-- Index pour la table `compose`
--
ALTER TABLE `compose`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_materiaux` (`materiaux_id`) USING BTREE,
  ADD KEY `id_produit` (`produit_id`) USING BTREE;

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `materiaux`
--
ALTER TABLE `materiaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categorie` (`categorie_id`) USING BTREE;

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `ajouter`
--
ALTER TABLE `ajouter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `compose`
--
ALTER TABLE `compose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `materiaux`
--
ALTER TABLE `materiaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `cle_utili` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ajouter`
--
ALTER TABLE `ajouter`
  ADD CONSTRAINT `cle_commande` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cle_produit` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `cle_utilisateur` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_adresse_id_fk` FOREIGN KEY (`adresse_id`) REFERENCES `adresse` (`id`);

--
-- Contraintes pour la table `compose`
--
ALTER TABLE `compose`
  ADD CONSTRAINT `cle_materiaux` FOREIGN KEY (`materiaux_id`) REFERENCES `materiaux` (`id`),
  ADD CONSTRAINT `cle_produi` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `cle_categorie` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
