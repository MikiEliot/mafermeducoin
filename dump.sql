-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 avr. 2023 à 00:01
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
-- Base de données : `mafermeducoin`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `societe` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `nom`, `prenom`, `societe`, `email`, `message`, `created_at`) VALUES
(1, 'miki', 'miki', 'miki', 'test@test.com', 'Bonjour bonjour', '2023-04-20 12:43:13'),
(2, 'David', 'Nico', 'kercode', 'blabla@blabla.com', 'Deuxieme message test', '2023-04-20 12:44:48'),
(3, 'David', 'Nico', 'kercode', 'blabla@blabla.com', 'Deuxieme message test', '2023-04-20 12:45:15'),
(4, 'Mrs', 'MM', 'JKKSQ', 'jkksq@gmail.com', 'Troixième message.', '2023-04-20 12:47:11');

-- --------------------------------------------------------

--
-- Structure de la table `producteurs`
--

CREATE TABLE `producteurs` (
  `siret` varchar(50) NOT NULL,
  `nomProducteur` varchar(50) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `rue` varchar(50) DEFAULT NULL,
  `codePostal` int(11) NOT NULL,
  `website` varchar(30) DEFAULT NULL,
  `horaires` varchar(10) DEFAULT NULL,
  `formJuridique` varchar(50) NOT NULL,
  `description` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `producteurs`
--

INSERT INTO `producteurs` (`siret`, `nomProducteur`, `ville`, `rue`, `codePostal`, `website`, `horaires`, `formJuridique`, `description`) VALUES
('338 592 090 00017', 'LES MARAICHERS DE SAINT GOUSTAN', 'AURAY', '26 RUE SAINT SAUVEUR', 56400, NULL, NULL, 'Exploitation agricole à responsabilité limitée', 'Culture de légumes, de melons, de racines et de tubercules'),
('402 735 872 00010', 'EARL DU MOULIN', 'AUGAN', 'LA VILLE MARQUE', 56800, NULL, NULL, 'Exploitation agricole à responsabilité limitée', 'Culture de légumes, de melons, de racines et de tubercules'),
('409 636 032 00016', 'BRUNO TORLAY', 'ALLAIRE', 'LA VENEURAIE', 56350, NULL, NULL, '	Exploitant agricole', 'La compagnie M BRUNO TORLAY, est localisée à Allaire (LA VENEURAIE) dans le département du Morbihan.'),
('431 582 626 00013', 'M DANIEL GERMAIN', 'BELZ', '14 RUE DU PONT NEUF', 56550, NULL, NULL, 'Exploitant agricole', 'Culture de légumes, de melons, de racines et de tubercules'),
('434 871 315 00017', 'MME MARIE LE MEUT', 'BELZ', 'KERIO', 56550, NULL, NULL, 'Exploitant agricole', 'Culture de légumes, de melons, de racines et de tubercules'),
('444 737 449 00017', 'M DAVID HOARAU', 'SURZUR', 'BRARUN', 56450, NULL, NULL, 'Exploitant agricole', 'Culture de légumes, de melons, de racines et de tubercules'),
('481 776 896 00013', 'DE BOREC', 'AMBON', 'BOREC', 56190, NULL, NULL, 'Groupement agricole d\'exploitation en commun (GAEC', 'La société civile DE BOREC, est localisée à Ambon (BOREC) dans le département du Morbihan.\r\n\r\nCette société civile fondée en 2005 sous le numéro 48177'),
('502 283 807 00019', 'DES BIOS DE BADEN', 'BADEN', '2 ROUTE DU ROI STEVAN\r\nKERVERNIR', 56870, NULL, NULL, 'Exploitation agricole à responsabilité limitée', 'Culture de légumes, de melons, de racines et de tubercules'),
('511 601 445 00014', 'MME JULIE TESSIER', 'SURZUR', 'GROLARD', 56450, 'www.julietessier.com', '9h-15h', 'Exploitant agricole', 'Des tomates'),
('512 651 662 00011', 'EVENNO TP', 'BELZ', 'KERVOINE', 56550, NULL, NULL, 'Société à responsabilité limitée (sans autre indic', 'Activités de soutien aux cultures.'),
('791 775 117 00017', 'EARL LES COTEAUX DE KERLOC\'H', 'BERNE', 'KERLOC\'H', 56240, 'www.fermeearlcotuw.com', '9h-14h', 'Exploitation agricole à responsabilité limitée', 'Patates'),
('802 253 690 00019', 'M GAETAN NORMANDIN', 'BEIGNON', 'CHE DE LA FONTAINE\r\nLES GAUDINES', 56380, NULL, NULL, 'Exploitant agricole', 'Culture de légumes, de melons, de racines et de tubercules'),
('837 724 699 00017', 'LA FERME DU VERGER', 'BERRIC', '39 T RUE DU VERGER', 56230, NULL, NULL, 'Exploitation agricole à responsabilité limitée', 'Culture de légumes, de melons, de racines et de tubercules'),
('849 195 383 00013', 'L\'OASIS DE BADEN', 'BADEN', '1 RUE DE BREAFORT', 56870, NULL, NULL, 'SAS, société par actions simplifiée', 'Culture de légumes, de melons, de racines et de tubercules'),
('851 567 024 00027', 'LES JARDIN D\'ANDY', 'BIGNAN\r\n', 'LE GRAND KLEZIO', 56500, NULL, NULL, 'Exploitant agricole', 'Culture de légumes, de melons, de racines et de tubercules'),
('877 730 754 00018', 'M JULIEN TOUBLANT', 'BERRIC', 'LE GUERN', 56230, NULL, NULL, 'Exploitant agricole', 'Culture de légumes, de melons, de racines et de tubercules'),
('892 170 028 00013', 'LES JARDINS DE NOGUELLO', 'BERNE', '3 NOGUELLO', 56240, NULL, NULL, 'Groupement agricole d\'exploitation en commun (GAEC', 'Culture de légumes, de melons, de racines et de tubercules'),
('892 191 941 00020', 'LES JARDINS DE THOMAZE', 'BEGANNE', 'DEPARTEMENTALE 20\r\nROUTE DE REDON', 56350, NULL, NULL, 'Exploitation agricole à responsabilité limitée', 'Culture de légumes, de melons, de racines et de tubercules'),
('895 259 927 00013', 'LA BOCALERIE D\'ICI', 'BIGNAN', 'SAINT JUST', 56500, NULL, NULL, 'Exploitation agricole à responsabilité limitée', 'Culture de légumes, de melons, de racines et de tubercules'),
('897 712 659 00019', 'GAEC DE LIGNOL', 'ARRADON', 'RTE DE LIGNOL', 56610, NULL, NULL, 'Groupement agricole d\'exploitation en commun (GAEC', ' Culture de légumes, de melons, de racines et de tubercules'),
('949 457 188 00017', 'LA MARAICHERE DU HOUET', 'ARZON', '7 RLE DE PEN ER HOUET', 56640, NULL, NULL, '	Exploitation agricole à responsabilité limitée', 'Culture de légumes, de melons, de racines et de tubercules');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `nomProduit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `nomProduit`) VALUES
(1, 'Ail'),
(2, 'Artichaut'),
(3, 'Asperge'),
(4, 'Aubergine'),
(5, 'Avocat'),
(6, 'Bette'),
(7, 'Betterave'),
(8, 'Blette'),
(9, 'Brocoli'),
(10, 'Carotte'),
(11, 'Catalonia'),
(12, 'Céleri'),
(13, 'Champignon'),
(14, 'Chou-fleur'),
(15, 'Choux'),
(16, 'Citrouille'),
(17, 'Concombre'),
(18, 'Courge'),
(19, 'Courgette'),
(20, 'Cresson'),
(21, 'Crosne'),
(22, 'Dachine'),
(23, 'Daikon'),
(24, 'Échalote'),
(25, 'Endive'),
(26, 'Épinard'),
(27, 'Fenouil'),
(28, 'Fève'),
(29, 'Flageolet'),
(30, 'Giromon');

-- --------------------------------------------------------

--
-- Structure de la table `profilproducteur`
--

CREATE TABLE `profilproducteur` (
  `idUser` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `motDePass` varchar(250) NOT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `siret` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profilproducteur`
--

INSERT INTO `profilproducteur` (`idUser`, `email`, `prenom`, `nom`, `motDePass`, `telephone`, `siret`) VALUES
(44, 'miki10@test.com', 'miki10', 'miki10', '$2y$10$Texcy1Hup7FhOU2UZHMDo.eqWDDQYNr9pxRJS3WIOn7PIW6jOchXy', '89 91 01 81 12', '791 775 117 00017');

-- --------------------------------------------------------

--
-- Structure de la table `proposer`
--

CREATE TABLE `proposer` (
  `siret` varchar(50) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `producteurs`
--
ALTER TABLE `producteurs`
  ADD PRIMARY KEY (`siret`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- Index pour la table `profilproducteur`
--
ALTER TABLE `profilproducteur`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `siret` (`siret`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `proposer`
--
ALTER TABLE `proposer`
  ADD PRIMARY KEY (`siret`,`idProduit`),
  ADD KEY `idProduit` (`idProduit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `profilproducteur`
--
ALTER TABLE `profilproducteur`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `profilproducteur`
--
ALTER TABLE `profilproducteur`
  ADD CONSTRAINT `profilproducteur_ibfk_1` FOREIGN KEY (`siret`) REFERENCES `producteurs` (`siret`);

--
-- Contraintes pour la table `proposer`
--
ALTER TABLE `proposer`
  ADD CONSTRAINT `proposer_ibfk_1` FOREIGN KEY (`siret`) REFERENCES `producteurs` (`siret`),
  ADD CONSTRAINT `proposer_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
