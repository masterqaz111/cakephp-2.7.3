-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mer 11 Novembre 2015 à 18:26
-- Version du serveur :  5.5.45
-- Version de PHP :  5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `prisoners_offences`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(2, 'Dangereux'),
(3, 'Calme'),
(4, 'Rechercher');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL,
  `prisoner_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `prisoner_id`, `name`, `email`, `text`, `created`, `modified`) VALUES
(13, 7, 'Meurtre commis en cellule', 'membre@hotmail.com', 'Bob a tuer son partenaire de cellule.', '2015-10-07', '2015-10-07'),
(14, 5, 'Suicide', 'super@hotmail.com', 'Charles a tenté de ce suicidé.', '2015-10-07', '2015-10-07');

-- --------------------------------------------------------

--
-- Structure de la table `ethnies`
--

CREATE TABLE `ethnies` (
  `id` int(11) NOT NULL,
  `sex_id` int(11) DEFAULT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ethnies`
--

INSERT INTO `ethnies` (`id`, `sex_id`, `name`) VALUES
(1, 2, 'Afro-Américaine'),
(2, 2, 'Coréene'),
(3, 2, 'Galloise'),
(4, 3, 'Afro-Américain'),
(5, 3, 'Coréen'),
(6, 3, 'Gallois'),
(10, 2, 'Arabe'),
(11, 3, 'Arabe');

-- --------------------------------------------------------

--
-- Structure de la table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `names`
--

INSERT INTO `names` (`id`, `name`, `created`, `modified`) VALUES
(36, 'Adam', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(37, 'Alex', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(38, 'Alexandre', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(39, 'Alexis', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(40, 'Anthony', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(41, 'Antoine', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(42, 'benjamin', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(43, 'Cédric', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(44, 'Charles', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(45, 'Christopher', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(46, 'David', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(47, 'Dylan', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(48, 'Édouard', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(49, 'Elliot', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(50, 'Émile', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(51, 'Étienne', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(52, 'Félix', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(53, 'Gabriel', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(54, 'Guillaume', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(55, 'Hugo', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(56, 'Isaac', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(57, 'Jacob', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(58, 'Jérémy', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(59, 'Jonathan', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(60, 'Julien', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(61, 'Justin', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(62, 'Léo', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(63, 'Logan', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(64, 'Mathieu', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(65, 'Mathis', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(66, 'Nathan', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(67, 'Nicolas', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(68, 'Raphaël', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(69, 'Samuel', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(70, 'Tristan', '2015-11-09 17:50:05', '2015-11-09 17:50:05'),
(71, 'Alice', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(72, 'Catherine', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(73, 'Coralie', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(74, 'Élodie', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(75, 'Émilie', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(76, 'Ève', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(77, 'Florence', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(78, 'Justine', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(79, 'Léanne', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(80, 'Maika', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(81, 'Marianne', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(82, 'Mégan', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(83, 'Noémie', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(84, 'Océane', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(85, 'Olivia', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(86, 'Rosalie', '2015-11-09 18:01:43', '2015-11-09 18:01:43'),
(87, 'Rose', '2015-11-09 18:01:43', '2015-11-09 18:01:43');

-- --------------------------------------------------------

--
-- Structure de la table `offences`
--

CREATE TABLE `offences` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `offences`
--

INSERT INTO `offences` (`id`, `name`, `description`) VALUES
(3, 'Vol', 'S''approprier furtivement ou par la force le bien d''autrui.'),
(4, 'Meurtre', 'Fait de tuer volontairement quelqu''un.'),
(5, 'Viol', 'Rapport sexuel imposé à quelqu''un par la violence, obtenu par la contrainte, qui constitue pénalement un crime.');

-- --------------------------------------------------------

--
-- Structure de la table `prisoners`
--

CREATE TABLE `prisoners` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ethny_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `prisoners`
--

INSERT INTO `prisoners` (`id`, `name`, `number`, `details`, `user_id`, `category_id`, `created`, `modified`, `filename`, `ethny_id`) VALUES
(6, 'Mathieu', 3545342, 'Solitaire', 12, 3, '2015-10-07', '2015-10-07', NULL, 1),
(7, 'Bob', 48457345, 'Être 2 gardiens lors de déplacement.', 12, 2, '2015-10-07', '2015-10-07', NULL, 1),
(8, 'sdfsdf', 5, 'dfsdfsdf', 10, 3, '2015-11-06', '2015-11-07', 'uploads/Penguins.jpg', 1),
(9, 'Anthony', 2147483647, 'dfsdfsdfsdfsdfds', 10, 2, '2015-11-09', '2015-11-10', 'uploads/Tulips.jpg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `prisoners_offences`
--

CREATE TABLE `prisoners_offences` (
  `id` int(11) NOT NULL,
  `prisoner_id` int(11) DEFAULT NULL,
  `offence_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `prisoners_offences`
--

INSERT INTO `prisoners_offences` (`id`, `prisoner_id`, `offence_id`) VALUES
(11, 6, 3),
(12, 7, 3),
(13, 7, 4),
(14, 8, 4),
(15, 9, 3),
(16, 9, 4),
(17, 9, 5);

-- --------------------------------------------------------

--
-- Structure de la table `sexes`
--

CREATE TABLE `sexes` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `sexes`
--

INSERT INTO `sexes` (`id`, `name`) VALUES
(1, ' '),
(2, 'Femme'),
(3, 'Homme');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`, `active`) VALUES
(10, 'admin', '$2a$10$EmDwJDM69tFzXCHZx1SYg.LAAaSPIA7nRZ3ZpYX9hu8srxE9AqusC', 'admin', 'admin@hotmail.com', '2015-10-07', '2015-10-07', 1),
(12, 'super', '$2a$10$Snsw5oKuOq7.5Mt0agdYb.fACoXnMKUvb.ySPjiYntBFaI5e8G0iq', 'super-users', 'super@hotmail.com', '2015-10-07', '2015-10-07', 0),
(13, 'membre', '$2a$10$EbVMfuu476PVOINJEYm/IOc.L5kblXnZir.lC8u9ZgeBpmywYvSIC', 'membre', 'membre@hotmail.com', '2015-10-07', '2015-10-07', 0),
(14, 'simon', '$2a$10$G151iOOSttv0lAxxdqUy7.5QuSAIQCwGYeUxzix74r0fDjEPZHlnq', 'admin', 'mathieu.dubreuil33@gmail.com', '2015-11-11', '2015-11-11', 0),
(15, 'malik', '$2a$10$oMJ5.6.l/o2C8hTdPSxNO.WvoT35JLQAGOdEyoyhiNRVR2UmJ9tq2', 'admin', 'mathieu.dubreuil33@gmail.com', '2015-11-11', '2015-11-11', 0),
(16, 'bobtest', '$2a$10$wwPD/.DtkOOu7g1P44YtpejZ5RTxpE5cdn1rJ8maulEC6bgnWvV7G', 'admin', 'mathieu.dubreuil33@gmail.com', '2015-11-11', '2015-11-11', 1),
(17, 'boby', '$2a$10$KhqkYZVlzpVZg6IyJJGj4.4mlmYYedPvRJCGY9LPQJ2FEFfz3g9xm', 'super-users', 'mathieu.dubreuil33@gmail.com', '2015-11-11', '2015-11-11', 1),
(23, 'ant', '$2a$10$bYxxSaAzl875P8t62bOvv.HToaNUSmkojQcsxwufP2LIRfjmtj.Ci', 'super-users', 'mathieu.dubreuil33@gmail.com', '2015-11-11', '2015-11-11', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ethnies`
--
ALTER TABLE `ethnies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offences`
--
ALTER TABLE `offences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prisoners`
--
ALTER TABLE `prisoners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prisoners_offences`
--
ALTER TABLE `prisoners_offences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sexes`
--
ALTER TABLE `sexes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `ethnies`
--
ALTER TABLE `ethnies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT pour la table `offences`
--
ALTER TABLE `offences`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `prisoners`
--
ALTER TABLE `prisoners`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `prisoners_offences`
--
ALTER TABLE `prisoners_offences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `sexes`
--
ALTER TABLE `sexes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
