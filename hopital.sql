-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 avr. 2023 à 16:39
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `daterv` date NOT NULL,
  `heure` time NOT NULL,
  `message` text NOT NULL,
  `datecreation` timestamp NOT NULL DEFAULT current_timestamp(),
  `statut` int(11) NOT NULL DEFAULT 0,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `appointment`
--

INSERT INTO `appointment` (`id`, `nom`, `tel`, `email`, `daterv`, `heure`, `message`, `datecreation`, `statut`, `doctor_id`) VALUES
(5, 'Ass malick fall', '774747223', 'ass@gmail.com', '2023-04-29', '11:30:00', 'Un peu malade', '2023-04-08 20:24:28', 1, 3),
(6, 'FATOU GAYE SARR', '784656363', 'lampfall2@yopmail.com', '2023-06-03', '16:25:00', ' ', '2023-04-08 20:25:22', 0, 3),
(7, 'NDEYE THIOUNA SECK', '764656363', 'lampfall1@yopmail.com', '2023-04-20', '11:25:00', '', '2023-04-08 22:20:03', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `docteur`
--

CREATE TABLE `docteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `specialisation` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `docteur`
--

INSERT INTO `docteur` (`id`, `nom`, `email`, `specialisation`, `mdp`, `tel`) VALUES
(3, 'Sokhna Badiane ', 'sokhna@gmail.com', 'Orthopedics', '123456', '778383030'),
(4, 'Bassirou Niang', 'niangpro@gmail.com', 'General Surgery', '123456', '783458484');

-- --------------------------------------------------------

--
-- Structure de la table `specialisation`
--

CREATE TABLE `specialisation` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `specialisation`
--

INSERT INTO `specialisation` (`id`, `nom`) VALUES
(1, 'Orthopedics'),
(2, 'Internal Medicine'),
(3, 'Obstetrics and Gynecology'),
(4, 'Dermatology'),
(5, 'Pediatrics'),
(6, 'Radiology'),
(7, 'General Surgery'),
(8, 'Ophthalmology'),
(9, 'Family Medicine'),
(10, 'Chest Medicine'),
(11, 'Anesthesia'),
(12, 'Pathology'),
(13, 'ENT');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Index pour la table `docteur`
--
ALTER TABLE `docteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specialisation`
--
ALTER TABLE `specialisation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `docteur`
--
ALTER TABLE `docteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `specialisation`
--
ALTER TABLE `specialisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `docteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
