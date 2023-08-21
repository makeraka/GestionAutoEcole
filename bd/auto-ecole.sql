-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 juil. 2023 à 03:40
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `auto-ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

CREATE TABLE `apprenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`id`, `nom`, `prenom`, `sexe`, `date`, `tel`, `adresse`, `permis`, `etat`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kaba', 'Makera', NULL, '2000-05-08', '660272013', 'Sangoyah', 'A', 'archive', 1, '2023-07-10 06:19:00', '2023-07-10 06:19:00'),
(2, 'Diallo', 'Thierno', 'Homme', '2023-06-28', '621852545', 'Taoua', 'B', 'actif', 1, '2023-07-10 06:20:33', '2023-07-10 06:20:33'),
(3, 'soumah', 'mamadama', 'Femme', '2004-10-11', '62113448', 'T6', 'A+E', 'actif', 1, '2023-07-10 06:21:53', '2023-07-10 06:21:53'),
(4, 'Fofana', 'Mamoudou', 'Homme', '1998-06-02', '660272054', 'Sangoyah', 'B', 'archive', 2, '2023-07-10 06:23:35', '2023-07-10 06:25:01');

-- --------------------------------------------------------

--
-- Structure de la table `courspratiques`
--

CREATE TABLE `courspratiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seance_id` bigint(20) UNSIGNED DEFAULT NULL,
  `moniteur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dateCour` date DEFAULT NULL,
  `heureDebut` int(11) DEFAULT NULL,
  `heureFin` int(11) DEFAULT NULL,
  `vehicule_id` bigint(20) UNSIGNED DEFAULT NULL,
  `apprenant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courspratiques`
--

INSERT INTO `courspratiques` (`id`, `seance_id`, `moniteur_id`, `dateCour`, `heureDebut`, `heureFin`, `vehicule_id`, `apprenant_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-05-31', 12, 14, 1, 3, '2023-07-10 07:38:15', '2023-07-10 07:38:15'),
(2, 2, 1, '2023-05-04', 15, 16, 1, 4, '2023-07-10 07:39:08', '2023-07-10 07:39:08');

-- --------------------------------------------------------

--
-- Structure de la table `courstheories`
--

CREATE TABLE `courstheories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theorie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `moniteur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dateCour` date DEFAULT NULL,
  `heureDebut` int(11) DEFAULT NULL,
  `heureFin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courstheories`
--

INSERT INTO `courstheories` (`id`, `theorie_id`, `moniteur_id`, `dateCour`, `heureDebut`, `heureFin`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-06-28', 8, 10, '2023-07-10 06:52:14', '2023-07-10 06:53:30'),
(2, 2, 2, '2023-06-27', 12, 14, '2023-07-10 07:17:05', '2023-07-10 07:17:05'),
(3, 3, 3, '2022-09-15', 15, 17, '2023-07-10 07:21:44', '2023-07-10 07:21:44'),
(4, 4, 5, '2023-06-29', 10, 12, '2023-07-10 07:23:01', '2023-07-10 07:23:01');

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

CREATE TABLE `depenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `typedepense` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aqui` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `depenses`
--

INSERT INTO `depenses` (`id`, `typedepense`, `libelle`, `aqui`, `montant`, `date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Vehicule', 'Assurance', 'voiture radas', '600.000', '2023-06-28', 'deployement de 600000fg pour renouveller les papiers\r\nde la voiture', '2023-07-10 06:09:44', '2023-07-10 06:09:44'),
(2, 'Personnel', 'Achat', 'au candidat', '800.000', '2023-06-26', 'Pour la théorie', '2023-07-10 06:13:12', '2023-07-10 06:13:12'),
(3, 'Ecole', 'Peinte', 'Au mur de l\'ecole', '1.000000', '2023-05-03', 'pour la peinte des murs', '2023-07-10 06:15:09', '2023-07-10 06:15:09'),
(4, 'Vehicule', 'Vidance', 'Au voiture', '300.000', '2023-03-01', 'pour le moteur de la voitre N°8', '2023-07-10 06:16:35', '2023-07-10 06:16:35');

-- --------------------------------------------------------

--
-- Structure de la table `examens`
--

CREATE TABLE `examens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apprenant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `moniteur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `heureDebut` int(11) DEFAULT NULL,
  `heureFin` int(11) DEFAULT NULL,
  `typeExamen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicule_id` bigint(20) UNSIGNED DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2023_04_15_170654_create_apprenants_table', 1),
(25, '2023_04_17_142933_create_depenses_table', 1),
(26, '2023_04_18_132623_create_moniteurs_table', 1),
(27, '2023_04_20_012627_create_vehicules_table', 1),
(28, '2023_04_29_221139_create_payements_table', 1),
(29, '2023_05_02_154938_create_theories_table', 1),
(30, '2023_05_02_155132_create_courstheories_table', 1),
(31, '2023_05_16_233703_create_examens_table', 1),
(32, '2023_05_18_173531_create_seances_table', 1),
(33, '2023_05_18_185716_create_courspratique_table', 1),
(34, '2023_05_20_145611_create_tarifs_table', 1),
(35, '2023_05_20_155536_create_parametres_table', 1),
(36, '2023_07_06_082015_create_planings_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `moniteurs`
--

CREATE TABLE `moniteurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `moniteurs`
--

INSERT INTO `moniteurs` (`id`, `nom`, `prenom`, `sexe`, `adresse`, `tel`, `poste`, `created_at`, `updated_at`) VALUES
(1, 'Kaba', 'Makera', 'Feminin', 'Sangoyah', '660272013', 'Code', '2023-07-10 06:32:20', '2023-07-10 06:32:20'),
(2, 'bah', 'Mamoudou', 'Masculin', 'Anta', '62113448', 'Conduite', '2023-07-10 06:33:06', '2023-07-10 06:33:06'),
(3, 'Bangoura', 'Emaky', 'Masculin', 'Bambeto', '652147896', 'Conduite', '2023-07-10 06:34:12', '2023-07-10 06:34:12'),
(4, 'fofanaa', 'Arfan', 'Masculin', 'Taoua', '628965478', 'Code', '2023-07-10 06:34:58', '2023-07-10 06:34:58'),
(5, 'Soh', 'Sitan', 'Feminin', 'cosa', '6234569878', 'Code', '2023-07-10 06:35:58', '2023-07-10 06:35:58');

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

CREATE TABLE `parametres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `parametres`
--

INSERT INTO `parametres` (`id`, `nom`, `proprietaire`, `adresse`, `ville`, `email`, `contact`, `code`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Auto-Ecole Debo ', 'Mr Thiam', 'Taoua ', 'Conakry', 'debo@gmail.com', '621368359', 'Travail-Securité', 'créer en 1994', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `payements`
--

CREATE TABLE `payements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montantpaye` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montantrestant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apprenant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `payements`
--

INSERT INTO `payements` (`id`, `categorie`, `date`, `prix`, `montantpaye`, `montantrestant`, `apprenant_id`, `created_at`, `updated_at`) VALUES
(1, 'Formule de base', '2023-06-29', '900.000', '700.000', '200.000', 2, '2023-07-10 06:37:48', '2023-07-10 06:37:48'),
(2, 'VP', '2022-11-01', '1200000', '900000', '300000', 1, '2023-07-10 06:39:04', '2023-07-10 06:39:04'),
(3, 'Normal', '2023-06-28', '9000000', '500000', '40000000', 4, '2023-07-10 06:40:47', '2023-07-10 06:40:47'),
(4, 'VP', '2022-09-02', '5000000', '3000000', '2000000', 3, '2023-07-10 06:43:07', '2023-07-10 06:43:07');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `planings`
--

CREATE TABLE `planings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heureDebut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heureFin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moniteur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `planings`
--

INSERT INTO `planings` (`id`, `jour`, `cours`, `heureDebut`, `heureFin`, `moniteur_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'Lundi', 'Theorie', '08', '10', 1, 'Actif', '2023-07-10 07:46:09', '2023-07-10 07:46:09'),
(2, 'Lundi', 'Pratique', '12', '14', 4, 'Actif', '2023-07-10 07:46:45', '2023-07-10 07:46:45'),
(3, 'Mardi', 'Theorie', '08', '10', 3, 'Actif', '2023-07-10 07:49:17', '2023-07-10 07:49:17'),
(4, 'Mardi', 'Pratique', '13', '15', 5, 'Actif', '2023-07-10 07:50:42', '2023-07-10 07:50:42');

-- --------------------------------------------------------

--
-- Structure de la table `seances`
--

CREATE TABLE `seances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `seances`
--

INSERT INTO `seances` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Séance1', NULL, NULL),
(2, 'Séance2', NULL, NULL),
(3, 'Séance3', NULL, NULL),
(4, 'Séance4', NULL, NULL),
(5, 'Séance5', NULL, NULL),
(6, 'Séance6', NULL, NULL),
(7, 'Séance7', NULL, NULL),
(8, 'Séance8', NULL, NULL),
(9, 'Séance9', NULL, NULL),
(10, 'Séance10', NULL, NULL),
(11, 'Séance11', NULL, NULL),
(12, 'Séance12', NULL, NULL),
(13, 'Séance13', NULL, NULL),
(14, 'Séance14', NULL, NULL),
(15, 'Séance15', NULL, NULL),
(16, 'Séance16', NULL, NULL),
(17, 'Séance17', NULL, NULL),
(18, 'Séance18', NULL, NULL),
(19, 'Séance19', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

CREATE TABLE `tarifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarifier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarifs`
--

INSERT INTO `tarifs` (`id`, `permis`, `type`, `montant`, `description`, `avatar`, `tarifier`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Theorie', '600.000', 'pour un pemis', NULL, 'Alhassane Diallo', '2023-07-10 07:41:16', '2023-07-10 07:41:16'),
(2, 'A+E', 'Pratique', '800.000', 'Permis rapide', NULL, 'Moussa Fadiga', '2023-07-10 07:42:07', '2023-07-10 07:42:07'),
(3, 'D+E', 'Pratique', '1000000', 'permis pour pratique directe', NULL, 'Aminata Kaba', '2023-07-10 07:43:27', '2023-07-10 07:43:27'),
(4, 'C', 'Theorie', '900000', 'vite fait', NULL, 'Sia Leno', '2023-07-10 07:44:36', '2023-07-10 07:44:36');

-- --------------------------------------------------------

--
-- Structure de la table `theories`
--

CREATE TABLE `theories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `theories`
--

INSERT INTO `theories` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'cours1', NULL, NULL),
(2, 'Cours2', NULL, NULL),
(3, 'Cours3', NULL, NULL),
(4, 'Cours4', NULL, NULL),
(5, 'Cours5', NULL, NULL),
(6, 'Cours6', NULL, NULL),
(7, 'Cours7', NULL, NULL),
(8, 'Cours8', NULL, NULL),
(9, 'Cours9', NULL, NULL),
(10, 'Cours10', NULL, NULL),
(11, 'Cours11', NULL, NULL),
(12, 'Cours12', NULL, NULL),
(13, 'Cours13', NULL, NULL),
(14, 'Cours14', NULL, NULL),
(15, 'Cours15', NULL, NULL),
(16, 'Cours16', NULL, NULL),
(17, 'Cours17', NULL, NULL),
(18, 'Cours18', NULL, NULL),
(19, 'Cours19', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Makera Kaba', 'keita@gmail.com', 'Admin', NULL, '$2y$10$gn.KzljXwwZu2jA1hrdAHevEnD1yI08x5w7Jv6uAvZu78MV0SZLyK', NULL, '2023-07-10 06:02:01', '2023-07-10 06:02:01'),
(2, 'Dama', 'dama@gmail.com', 'Employe', NULL, '$2y$10$uTchxeOWBnxAbRFC1Ftko.3cJWmQj7NYiAagrHD25H6VtHsVn0BjO', NULL, '2023-07-10 06:03:15', '2023-07-10 06:03:15'),
(3, 'FANTA', 'fanta@gmail.com', 'Employe', NULL, '$2y$10$E4Mq1uqHHnjSc.0AgnNQv.w8A/2Ogrgd.3IPj0OEqfBZjFGy2sxXq', NULL, '2023-07-10 06:03:40', '2023-07-10 06:03:40'),
(4, 'Moustapha', 'bob@gmail.com', 'Utilisateur', NULL, '$2y$10$LzvhdfUSZ0lQTAlba1mqIuLe/j1i8IerxiFmZNMQJ1pL6ycMNDPAS', NULL, '2023-07-10 06:04:24', '2023-07-10 06:04:24'),
(5, 'Hamidou Bah', 'hamidou@gmail.com', 'Utilisateur', NULL, '$2y$10$HlSkngnDOm9p/kDnLSn6u.udroe.Toys38Db2lt2MhkahEDo0QjKO', NULL, '2023-07-10 06:05:15', '2023-07-10 06:05:15');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modele` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imatricule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `type`, `modele`, `marque`, `imatricule`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'car', 'top', 'mmss', 'PO9832U', 'En service', '2023-07-10 07:33:36', '2023-07-10 07:33:36'),
(2, 'camion', 'long', 'cmeodlll', '1365P', 'Hors Service', '2023-07-10 07:34:19', '2023-07-10 07:34:19'),
(3, 'Toyota', 'top', 'cmeodl54', '21OIPU', 'En service', '2023-07-10 07:36:29', '2023-07-10 07:36:29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apprenants_user_id_foreign` (`user_id`);

--
-- Index pour la table `courspratiques`
--
ALTER TABLE `courspratiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courspratique_seance_id_foreign` (`seance_id`),
  ADD KEY `courspratique_moniteur_id_foreign` (`moniteur_id`),
  ADD KEY `courspratique_vehicule_id_foreign` (`vehicule_id`),
  ADD KEY `courspratique_apprenant_id_foreign` (`apprenant_id`);

--
-- Index pour la table `courstheories`
--
ALTER TABLE `courstheories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courstheories_theorie_id_foreign` (`theorie_id`),
  ADD KEY `courstheories_moniteur_id_foreign` (`moniteur_id`);

--
-- Index pour la table `depenses`
--
ALTER TABLE `depenses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `examens`
--
ALTER TABLE `examens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examens_apprenant_id_foreign` (`apprenant_id`),
  ADD KEY `examens_moniteur_id_foreign` (`moniteur_id`),
  ADD KEY `examens_vehicule_id_foreign` (`vehicule_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moniteurs`
--
ALTER TABLE `moniteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parametres`
--
ALTER TABLE `parametres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `payements`
--
ALTER TABLE `payements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payements_apprenant_id_foreign` (`apprenant_id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `planings`
--
ALTER TABLE `planings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `planings_moniteur_id_foreign` (`moniteur_id`);

--
-- Index pour la table `seances`
--
ALTER TABLE `seances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `theories`
--
ALTER TABLE `theories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenants`
--
ALTER TABLE `apprenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `courspratiques`
--
ALTER TABLE `courspratiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `courstheories`
--
ALTER TABLE `courstheories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `depenses`
--
ALTER TABLE `depenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `examens`
--
ALTER TABLE `examens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `moniteurs`
--
ALTER TABLE `moniteurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `parametres`
--
ALTER TABLE `parametres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `payements`
--
ALTER TABLE `payements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `planings`
--
ALTER TABLE `planings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `seances`
--
ALTER TABLE `seances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `tarifs`
--
ALTER TABLE `tarifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `theories`
--
ALTER TABLE `theories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD CONSTRAINT `apprenants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `courspratiques`
--
ALTER TABLE `courspratiques`
  ADD CONSTRAINT `courspratique_apprenant_id_foreign` FOREIGN KEY (`apprenant_id`) REFERENCES `apprenants` (`id`),
  ADD CONSTRAINT `courspratique_moniteur_id_foreign` FOREIGN KEY (`moniteur_id`) REFERENCES `moniteurs` (`id`),
  ADD CONSTRAINT `courspratique_seance_id_foreign` FOREIGN KEY (`seance_id`) REFERENCES `seances` (`id`),
  ADD CONSTRAINT `courspratique_vehicule_id_foreign` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicules` (`id`);

--
-- Contraintes pour la table `courstheories`
--
ALTER TABLE `courstheories`
  ADD CONSTRAINT `courstheories_moniteur_id_foreign` FOREIGN KEY (`moniteur_id`) REFERENCES `moniteurs` (`id`),
  ADD CONSTRAINT `courstheories_theorie_id_foreign` FOREIGN KEY (`theorie_id`) REFERENCES `theories` (`id`);

--
-- Contraintes pour la table `examens`
--
ALTER TABLE `examens`
  ADD CONSTRAINT `examens_apprenant_id_foreign` FOREIGN KEY (`apprenant_id`) REFERENCES `apprenants` (`id`),
  ADD CONSTRAINT `examens_moniteur_id_foreign` FOREIGN KEY (`moniteur_id`) REFERENCES `moniteurs` (`id`),
  ADD CONSTRAINT `examens_vehicule_id_foreign` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicules` (`id`);

--
-- Contraintes pour la table `payements`
--
ALTER TABLE `payements`
  ADD CONSTRAINT `payements_apprenant_id_foreign` FOREIGN KEY (`apprenant_id`) REFERENCES `apprenants` (`id`);

--
-- Contraintes pour la table `planings`
--
ALTER TABLE `planings`
  ADD CONSTRAINT `planings_moniteur_id_foreign` FOREIGN KEY (`moniteur_id`) REFERENCES `moniteurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
