-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 09 Février 2020 à 15:48
-- Version du serveur :  5.7.29-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `codejam`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiments`
--

CREATE TABLE `batiments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `geolocalisation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `batiments`
--

INSERT INTO `batiments` (`id`, `user_id`, `nom`, `description`, `geolocalisation`, `ville`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pavillon principal', 'UQAC', '48.419828, -71.052428', 1, '2020-02-10 00:36:01', '2020-02-10 00:36:01'),
(2, 1, 'Pavillon sportif', 'UQAC', '48.419380, -71.050180', 1, '2020-02-10 00:36:22', '2020-02-10 00:36:22');

-- --------------------------------------------------------

--
-- Structure de la table `batteries`
--

CREATE TABLE `batteries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tension_stockage` double(8,2) NOT NULL,
  `capacite_stockage` double(8,2) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `batteries`
--

INSERT INTO `batteries` (`id`, `tension_stockage`, `capacite_stockage`, `type`, `created_at`, `updated_at`) VALUES
(1, 15.00, 15.00, 'plomb', '2020-02-10 00:56:20', '2020-02-10 00:56:20');

-- --------------------------------------------------------

--
-- Structure de la table `equipements`
--

CREATE TABLE `equipements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produit_id` bigint(20) UNSIGNED NOT NULL,
  `installation_id` bigint(20) UNSIGNED NOT NULL,
  `date_installation` date DEFAULT NULL,
  `orientation` double(8,2) DEFAULT NULL,
  `geolocalisation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elevation` double(8,2) DEFAULT NULL,
  `inclinaison` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `equipements`
--

INSERT INTO `equipements` (`id`, `produit_id`, `installation_id`, `date_installation`, `orientation`, `geolocalisation`, `elevation`, `inclinaison`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:49:18', '2020-02-10 00:49:18'),
(2, 1, 2, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:52:04', '2020-02-10 00:52:04'),
(3, 1, 2, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:52:13', '2020-02-10 00:52:13'),
(4, 1, 2, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:52:19', '2020-02-10 00:52:19'),
(5, 1, 2, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:52:25', '2020-02-10 00:52:25'),
(6, 2, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:53:35', '2020-02-10 00:53:35'),
(7, 2, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:53:41', '2020-02-10 00:53:41'),
(8, 2, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:53:50', '2020-02-10 00:53:50'),
(9, 2, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:53:57', '2020-02-10 00:53:57'),
(10, 3, 2, '2020-02-06', NULL, NULL, NULL, NULL, '2020-02-10 00:56:20', '2020-02-10 00:56:20'),
(11, 3, 2, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:56:29', '2020-02-10 00:56:29'),
(12, 1, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:56:45', '2020-02-10 00:56:45'),
(13, 1, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:56:52', '2020-02-10 00:56:52'),
(14, 1, 4, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:57:00', '2020-02-10 00:57:00'),
(15, 1, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:57:10', '2020-02-10 00:57:10'),
(16, 3, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10 00:57:15', '2020-02-10 00:57:15');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `installations`
--

CREATE TABLE `installations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batiment_id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `installations`
--

INSERT INTO `installations` (`id`, `batiment_id`, `nom`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Panneaux Solaires 80MW', 'Panneaux solaire toit nord-est', '2020-02-10 00:37:14', '2020-02-10 00:37:14'),
(2, 1, 'Panneaux Solaires 150MW', 'Panneaux solaire R&D', '2020-02-10 00:37:39', '2020-02-10 00:37:39'),
(3, 2, 'Chauffage 20 000W', 'Système geothermique', '2020-02-10 00:37:55', '2020-02-10 00:37:55'),
(4, 2, 'Panneaux Solaire 150MW', 'Panneaux solaire terrain de football', '2020-02-10 00:38:07', '2020-02-10 00:38:07');

-- --------------------------------------------------------

--
-- Structure de la table `installation_solution`
--

CREATE TABLE `installation_solution` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installation_id` bigint(20) UNSIGNED NOT NULL,
  `solution_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_id` bigint(20) UNSIGNED NOT NULL,
  `type_reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valeur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consommation` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_08_0014208_create_produits_table', 1),
(5, '2020_02_08_013954_create_batiments_table', 1),
(6, '2020_02_08_014009_create_problemes_table', 1),
(7, '2020_02_08_014023_create_solutions_table', 1),
(8, '2020_02_08_014042_create_installations_table', 1),
(9, '2020_02_08_014209_create_equipements_table', 1),
(10, '2020_02_08_014226_create_logs_table', 1),
(11, '2020_02_08_014312_create_panneauxs_table', 1),
(12, '2020_02_08_014338_create_batteries_table', 1),
(13, '2020_02_08_184138_creates_installation_solution_pivot_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `panneaus`
--

CREATE TABLE `panneaus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `puissance_nominale` double(8,2) NOT NULL,
  `tension_nominale` double(8,2) NOT NULL,
  `tension_maximale` double(8,2) NOT NULL,
  `courant_maximal` double(8,2) NOT NULL,
  `tension_circuit_ouvert` double(8,2) NOT NULL,
  `courant_court_circuit` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `panneaus`
--

INSERT INTO `panneaus` (`id`, `puissance_nominale`, `tension_nominale`, `tension_maximale`, `courant_maximal`, `tension_circuit_ouvert`, `courant_court_circuit`, `created_at`, `updated_at`) VALUES
(1, 25.00, 25.00, 25.00, 25.00, 25.00, 25.00, '2020-02-10 00:49:18', '2020-02-10 00:49:18'),
(2, 25.00, 25.00, 25.00, 25.00, 25.00, 25.00, '2020-02-10 00:53:35', '2020-02-10 00:53:35');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `problemes`
--

CREATE TABLE `problemes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `equipement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `problemes`
--

INSERT INTO `problemes` (`id`, `nom`, `description`, `equipement`, `media`, `created_at`, `updated_at`) VALUES
(2, 'Polution des sols', 'Utilisation d\'herbices et anti-poussières sur les sols autour du site.', 'panneau', NULL, '2020-02-10 01:43:30', '2020-02-10 01:43:30'),
(3, 'Modification des micro-climats', 'Causé par les ombrages et les perturbations de flux d\'air.', 'panneau', NULL, '2020-02-10 01:44:23', '2020-02-10 01:44:23'),
(4, 'Perte ou modification des habitats', 'Destruction des couches supérieures des sols et déforestation.', 'panneau', NULL, '2020-02-10 01:46:38', '2020-02-10 01:46:38');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longueur` double(8,2) DEFAULT NULL,
  `largeur` double(8,2) DEFAULT NULL,
  `hauteur` double(8,2) DEFAULT NULL,
  `profondeur` double(8,2) DEFAULT NULL,
  `poids` double(8,2) DEFAULT NULL,
  `rendement` double(8,2) DEFAULT NULL,
  `equipement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certifie` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `type`, `type_id`, `marque`, `reference`, `longueur`, `largeur`, `hauteur`, `profondeur`, `poids`, `rendement`, `equipement`, `certifie`, `created_at`, `updated_at`) VALUES
(1, 'panneau', '1', 'EWS', 'EWS-4P', 2.00, 6.00, 1.00, NULL, 200.00, 15.00, 'panneau', 0, '2020-02-10 00:49:18', '2020-02-10 00:49:18'),
(2, 'panneau', '2', 'EWS', 'EWS-6P', 2.00, 6.00, 1.00, NULL, 200.00, 15.00, 'panneau', 0, '2020-02-10 00:53:35', '2020-02-10 00:53:35'),
(3, 'batterie', '1', 'Cell', 'Cell-1W', 20.00, 20.00, 20.00, NULL, 20.00, 15.00, 'batterie', 0, '2020-02-10 00:56:20', '2020-02-10 00:56:20');

-- --------------------------------------------------------

--
-- Structure de la table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `probleme_id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `media` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `solutions`
--

INSERT INTO `solutions` (`id`, `probleme_id`, `nom`, `description`, `media`, `created_at`, `updated_at`) VALUES
(2, 2, 'Herbicides naturels', 'Utiliser de l\'eau chaude ou tout autre herbicide naturel.', NULL, '2020-02-10 01:47:35', '2020-02-10 01:47:35');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Roy Cote', 'roycote@gmail.com', NULL, '$2y$10$oNNOuJSzFoZYP3pwYgIfLuijz2Mj4gVEB15FEKdjKDTg5gdpN8jze', NULL, '2020-02-10 00:31:38', '2020-02-10 00:31:38');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `batiments`
--
ALTER TABLE `batiments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signature` (`user_id`,`nom`);

--
-- Index pour la table `batteries`
--
ALTER TABLE `batteries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipements_produit_id_foreign` (`produit_id`),
  ADD KEY `equipements_installation_id_foreign` (`installation_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `installations`
--
ALTER TABLE `installations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signature` (`batiment_id`,`nom`);

--
-- Index pour la table `installation_solution`
--
ALTER TABLE `installation_solution`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panneaus`
--
ALTER TABLE `panneaus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `problemes`
--
ALTER TABLE `problemes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signature` (`marque`,`reference`);

--
-- Index pour la table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solutions_probleme_id_foreign` (`probleme_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `batiments`
--
ALTER TABLE `batiments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `batteries`
--
ALTER TABLE `batteries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `installations`
--
ALTER TABLE `installations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `installation_solution`
--
ALTER TABLE `installation_solution`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `panneaus`
--
ALTER TABLE `panneaus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `problemes`
--
ALTER TABLE `problemes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `batiments`
--
ALTER TABLE `batiments`
  ADD CONSTRAINT `batiments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD CONSTRAINT `equipements_installation_id_foreign` FOREIGN KEY (`installation_id`) REFERENCES `installations` (`id`),
  ADD CONSTRAINT `equipements_produit_id_foreign` FOREIGN KEY (`produit_id`) REFERENCES `produits` (`id`);

--
-- Contraintes pour la table `installations`
--
ALTER TABLE `installations`
  ADD CONSTRAINT `installations_batiment_id_foreign` FOREIGN KEY (`batiment_id`) REFERENCES `batiments` (`id`);

--
-- Contraintes pour la table `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `solutions_probleme_id_foreign` FOREIGN KEY (`probleme_id`) REFERENCES `problemes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
