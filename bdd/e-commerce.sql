-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 juil. 2023 à 20:58
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
(1, 'Chambre'),
(2, 'Salon'),
(3, 'Cuisine'),
(4, 'Bureau'),
(5, 'Salle a manger');

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
(1, 2, 1),
(2, 3, 1),
(3, 2, 2),
(4, 3, 2),
(5, 1, 3),
(6, 4, 3),
(7, 5, 4),
(8, 3, 4),
(9, 2, 5),
(10, 4, 5),
(11, 2, 6),
(12, 1, 7),
(13, 2, 7),
(14, 2, 8),
(15, 6, 8),
(16, 2, 9),
(17, 3, 10),
(18, 6, 10),
(19, 1, 11),
(20, 2, 11),
(21, 2, 12),
(22, 1, 13),
(23, 2, 13),
(24, 1, 14),
(25, 3, 14),
(26, 2, 15);

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
(28, 'images/682668524.jpg', 1, NULL, 1),
(29, 'images/510975153.jpg', 1, NULL, 2),
(30, 'images/703291221.jpg', 1, NULL, 3),
(31, 'images/853603521.jpg', 1, NULL, 4),
(32, 'images/217680380.jpg', 1, NULL, 5),
(33, 'images/423449972.jpg', 1, 1, NULL),
(34, 'images/460239749.jpg', 0, 1, NULL),
(35, 'images/33641447.jpg', 0, 1, NULL),
(36, 'images/72196528.jpg', 1, 2, NULL),
(37, 'images/666683628.jpg', 0, 2, NULL),
(38, 'images/156237932.jpg', 0, 2, NULL),
(39, 'images/713662140.jpg', 0, 3, NULL),
(40, 'images/775150291.jpg', 1, 3, NULL),
(41, 'images/118722032.jpg', 0, 3, NULL),
(42, 'images/251299082.jpg', 1, 4, NULL),
(43, 'images/484692237.jpg', 0, 4, NULL),
(44, 'images/566371436.jpg', 0, 4, NULL),
(45, 'images/10763217.jpg', 1, 5, NULL),
(46, 'images/302637631.jpg', 0, 5, NULL),
(47, 'images/108854707.jpg', 0, 5, NULL),
(48, 'images/511498072.jpg', 1, 6, NULL),
(49, 'images/781041031.jpg', 0, 6, NULL),
(50, 'images/644771688.jpg', 0, 6, NULL),
(51, 'images/495654498.jpg', 1, 7, NULL),
(52, 'images/387725420.jpg', 0, 7, NULL),
(53, 'images/753117238.jpg', 0, 7, NULL),
(54, 'images/88971872.jpg', 0, 8, NULL),
(55, 'images/479802421.jpg', 1, 8, NULL),
(56, 'images/554110952.jpg', 0, 8, NULL),
(57, 'images/333235691.jpg', 1, 9, NULL),
(58, 'images/803070451.jpg', 0, 9, NULL),
(59, 'images/866218702.jpg', 0, 9, NULL),
(60, 'images/204257035.jpg', 1, 10, NULL),
(61, 'images/364939448.jpg', 0, 10, NULL),
(62, 'images/428953861.jpg', 0, 10, NULL),
(63, 'images/144876262.jpg', 1, 11, NULL),
(64, 'images/932510222.jpg', 0, 11, NULL),
(65, 'images/532563958.jpg', 0, 11, NULL),
(66, 'images/624232525.jpg', 1, 12, NULL),
(67, 'images/660162289.jpg', 0, 12, NULL),
(68, 'images/699919429.jpg', 0, 12, NULL),
(69, 'images/305456609.jpg', 1, 13, NULL),
(70, 'images/366418064.jpg', 0, 13, NULL),
(71, 'images/693281106.jpg', 0, 13, NULL),
(72, 'images/290008634.jpg', 1, 14, NULL),
(73, 'images/261792004.jpg', 0, 14, NULL),
(74, 'images/619833589.jpg', 0, 14, NULL),
(75, 'images/283856204.jpg', 1, 15, NULL),
(76, 'images/681553721.jpg', 0, 15, NULL),
(77, 'images/636085757.jpg', 0, 15, NULL);

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
(1, 'metal'),
(2, 'bois'),
(3, 'tissue'),
(4, 'verre'),
(5, 'plume'),
(6, 'caoutchouc');

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
(1, 'lit simple', 149, 1000, 'Découvrez notre lit de rêve, alliant confort et élégance. Ce lit en bois massif offre une expérience de sommeil incomparable grâce à son matelas à mémoire de forme. Son design épuré s\'intègre parfaitement à tout style de chambre, tandis que sa tête de lit rembourrée assure un soutien supplémentaire. Plongez dans un cocon de douceur et de repos avec notre lit haut de gamme, conçu pour des nuits inoubliables. Redéfinissez votre espace de repos avec ce bijou de literie.', 0, 1, '2023-07-21', 1, 1),
(2, 'lit superposé', 299, 1000, 'Découvrez notre lit superposé innovant, une solution pratique pour optimiser l\'espace dans les chambres d\'enfants ou d\'invités. Fabriqué à partir de matériaux de qualité, ce lit assure une solidité et une sécurité optimales. Son design moderne et fonctionnel s\'intègre harmonieusement dans tout type de décoration. Les lits superposés offrent une expérience de couchage confortable, tandis que les barrières de sécurité garantissent une tranquillité d\'esprit totale. Maximisez l\'utilisation de votre espace avec ce lit superposé pratique et esthétique.', 0, 0, '2023-07-21', 3, 1),
(3, 'lampe de chevet', 35, 1000, 'Découvrez notre lampe de chevet élégante et fonctionnelle, parfaite pour compléter votre espace de repos. Son design moderne apporte une touche d\'esthétisme à votre chambre tout en émettant une lumière douce et apaisante. Dotée de différentes intensités d\'éclairage, vous pouvez facilement ajuster la luminosité pour créer l\'ambiance idéale. ', 0, 1, '2023-07-21', 2, 1),
(4, 'canapé', 499, 1000, 'Découvrez notre canapé de qualité supérieure, alliant style, confort et durabilité. Son design contemporain s\'intègre parfaitement à tous les intérieurs, qu\'ils soient modernes ou classiques. Fabriqué avec des matériaux de premier choix, ce canapé offre un confort exceptionnel grâce à son rembourrage moelleux et ses coussins ergonomiques. Vous pourrez vous détendre en toute élégance et profiter d\'agréables moments en famille ou entre amis. Avec ses finitions impeccables, ce canapé deviendra l\'élément central de votre salon, ajoutant une touche de sophistication à votre espace de vie. Redéfinissez votre confort avec ce canapé incontournable.', 1, 1, '2023-07-21', 1, 2),
(5, 'table basse', 179, 1000, 'Découvrez notre table basse unique en son genre, mêlant fonctionnalité et esthétisme. Son design contemporain et minimaliste apporte une touche d\'élégance à votre espace de vie. Fabriquée à partir de matériaux de haute qualité, cette table basse est non seulement solide et durable, mais également légère et facile à déplacer selon vos besoins. Son plateau spacieux offre amplement d\'espace pour disposer des magazines, des collations ou tout simplement pour se détendre avec une tasse de café. Avec cette table basse polyvalente, transformez votre salon en un lieu convivial et accueillant, où il fait bon se retrouver entre amis et en famille.', 0, 1, '2023-07-21', 1, 2),
(6, 'meuble tv', 239, 1000, 'Découvrez notre meuble TV sophistiqué, la pièce maîtresse idéale pour votre espace de divertissement. Son design contemporain allie élégance et praticité, avec des lignes épurées et des finitions impeccables. Fabriqué à partir de matériaux de haute qualité, ce meuble TV offre une grande robustesse et une durabilité à toute épreuve. Il dispose de compartiments spacieux pour ranger vos appareils électroniques, vos DVD et vos accessoires, tout en dissimulant les câbles de manière ordonnée.', 0, 0, '2023-07-21', 2, 2),
(7, 'ilot de cuisine', 164, 1000, 'Découvrez notre îlot de cuisine élégant et fonctionnel, une pièce maîtresse qui redéfinira votre espace culinaire. Son design moderne et épuré s\'intègre parfaitement à tous les styles de cuisine, apportant une touche de sophistication à votre décor. Fabriqué avec des matériaux de haute qualité, cet îlot est robuste et durable, résistant aux égratignures et aux taches. ', 1, 0, '2023-07-21', 1, 3),
(8, 'Caisson de cuisine', 38, 1000, 'Découvrez notre caisson de cuisine pratique et astucieux, une solution de rangement idéale pour optimiser votre espace culinaire. Fabriqué avec des matériaux de qualité, ce caisson est conçu pour résister à l\'usure quotidienne et aux conditions de la cuisine. Son design fonctionnel permet de maximiser le stockage de vos ustensiles, casseroles et provisions, tout en facilitant l\'accès à vos objets essentiels. ', 0, 1, '2023-07-21', 3, 3),
(9, 'buffet de cuisine', 180, 1000, 'Découvrez notre buffet de cuisine élégant et polyvalent, un ajout essentiel pour sublimer votre espace culinaire. Son design moderne et raffiné s\'harmonise parfaitement avec tout style de cuisine, apportant une touche d\'élégance à votre décor. Fabriqué avec des matériaux de haute qualité, ce buffet est conçu pour durer et résister aux exigences quotidiennes de la cuisine. Avec ses multiples compartiments et tiroirs spacieux, vous bénéficiez d\'un espace de rangement généreux pour vos ustensiles, vaisselle, linge de table et plus encore. ', 0, 1, '2023-07-21', 3, 3),
(10, 'Chaise de travail', 387, 1000, 'Découvrez notre chaise de travail ergonomique, spécialement conçue pour optimiser votre confort et votre productivité au quotidien. Son design moderne et ajustable s\'adapte parfaitement à votre corps, offrant un soutien optimal pour votre dos et vos bras. Fabriquée avec des matériaux de qualité, cette chaise est durable et résistante, idéale pour une utilisation intensive au bureau ou à domicile. Les roulettes intégrées vous permettent de vous déplacer facilement, tandis que le réglage en hauteur vous offre la possibilité de personnaliser la chaise en fonction de votre bureau. ', 0, 0, '2023-07-21', 3, 4),
(11, 'bureau d\'angle', 109, 1000, 'Découvrez notre bureau d\'angle fonctionnel et élégant, la solution idéale pour optimiser votre espace de travail. Son design en angle permet de maximiser l\'utilisation de votre pièce, offrant un grand plan de travail pour accomplir vos tâches quotidiennes avec aisance. Fabriqué à partir de matériaux de qualité, ce bureau est robuste et durable, adapté à une utilisation intensive. Les étagères intégrées offrent un espace de rangement supplémentaire pour garder vos fournitures de bureau organisées et à portée de main. ', 0, 1, '2023-07-21', 2, 4),
(12, 'Caisson de bureau', 80, 1000, 'Découvrez notre caisson de bureau pratique et compact, l\'accessoire essentiel pour une organisation optimale de votre espace de travail. Son design fonctionnel s\'intègre facilement sous votre bureau, libérant ainsi de l\'espace au sol. Fabriqué avec des matériaux de qualité, ce caisson est durable et résistant, idéal pour une utilisation quotidienne intensive. Les tiroirs spacieux vous offrent un rangement polyvalent pour vos fournitures de bureau, dossiers et documents importants. Grâce à ce caisson de bureau astucieux, gardez votre espace de travail ordonné et bien organisé, vous permettant de rester concentré sur vos tâches et d\'améliorer votre productivité tout au long de la journée.', 0, 0, '2023-07-21', 2, 4),
(13, 'Table a manger', 404, 1000, 'Découvrez notre table à manger élégante et conviviale, parfaite pour rassembler vos proches autour de délicieux repas. Son design moderne et intemporel s\'adapte à tous les styles de décoration, ajoutant une touche de raffinement à votre salle à manger. Fabriquée avec des matériaux de haute qualité, cette table est robuste et durable, résistant aux usages quotidiens. Son grand plateau spacieux offre amplement d\'espace pour accueillir votre famille et vos amis confortablement. Que ce soit pour les repas quotidiens ou les occasions spéciales, cette table à manger polyvalente est l\'endroit idéal pour partager des moments chaleureux et inoubliables avec vos proches. ', 1, 1, '2023-07-21', 1, 5),
(14, 'Chaise', 60, 1000, 'Découvrez notre chaise élégante et confortable, conçue pour vous offrir une assise parfaite dans n\'importe quelle pièce de votre maison. Son design moderne et épuré s\'harmonise facilement avec tout style de décoration intérieure. Fabriquée avec des matériaux de haute qualité, cette chaise est solide et durable, vous garantissant des années d\'utilisation. Son dossier ergonomique et son assise rembourrée offrent un soutien optimal pour votre dos, vous permettant de vous détendre et de vous asseoir confortablement pendant de longues périodes. Que ce soit pour votre salon, votre bureau ou votre salle à manger, cette chaise polyvalente ajoutera une touche de style et de confort à n\'importe quel espace de votre maison. ', 0, 1, '2023-07-21', 3, 5),
(15, 'Commode', 110, 1000, 'Découvrez notre commode élégante et fonctionnelle, un meuble de rangement essentiel pour organiser votre espace avec style. Son design intemporel s\'adapte harmonieusement à tout type de décoration intérieure. Fabriquée avec des matériaux de haute qualité, cette commode est solide et durable, offrant une solution de rangement fiable pour vos vêtements, accessoires et autres articles essentiels. Ses tiroirs spacieux et ses étagères pratiques vous permettent de garder vos affaires bien organisées et à portée de main. Avec cette commode polyvalente, transformez votre chambre ou votre espace de rangement en un endroit ordonné et esthétique, où chaque article trouve sa place de manière élégante. ', 0, 1, '2023-07-21', 2, 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
