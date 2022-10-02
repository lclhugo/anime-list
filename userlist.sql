-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 02 oct. 2022 à 14:04
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `anime-list`
--

-- --------------------------------------------------------

--
-- Structure de la table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `anime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `userlist`
--

INSERT INTO `userlist` (`id`, `user_id`, `anime_id`) VALUES
(25, 6, 45),
(26, 6, 44),
(27, 6, 42),
(28, 6, 41),
(29, 6, 30),
(30, 6, 29),
(31, 6, 32),
(32, 6, 33),
(33, 6, 34),
(34, 6, 35),
(35, 6, 36),
(36, 6, 38),
(37, 6, 39),
(38, 6, 26),
(39, 6, 27),
(40, 6, 7),
(41, 6, 8),
(42, 6, 11),
(43, 6, 12),
(44, 6, 13),
(45, 6, 14),
(46, 6, 49);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anime_id` (`anime_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `userlist`
--
ALTER TABLE `userlist`
  ADD CONSTRAINT `userlist_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
