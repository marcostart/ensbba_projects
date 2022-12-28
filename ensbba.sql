-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 28 déc. 2022 à 22:02
-- Version du serveur : 8.0.31-0ubuntu0.22.04.1
-- Version de PHP : 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensbba`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `publisher_id`, `created_at`, `updated_at`) VALUES
(1, 'ENSBBA a fêté ses 10 ans', '<p>La célébration des 10 ans d’existence de l’ENSBBA s’est déroulée du mercredi 12 au vendredi 14 Octobre 2022 en présence de plusieurs autorités à Dassa-Zoumé</p>', '202212280853WhatsApp Image 2022-12-09 at 16.55.39 (1).jpeg', 1, '2022-12-21 19:38:02', '2022-12-28 13:53:13'),
(3, '2e Journées Scientifiques', '<p>Les 2e JS-ENSBBA ont porté sur le thème « la recherche scientifique face aux défis des innovations biotechnologiques pour le développement économique et social&nbsp;».&nbsp;</p>', '202212280852WhatsApp Image 2022-12-09 at 16.55.38 (1).jpeg', 1, '2022-12-22 03:53:56', '2022-12-28 13:52:51'),
(4, 'L’ENSBBA en chiffre', '<p>1877 techniciens supérieurs diplômés en 10 ans avec 95% de taux d’insertion professionnelle dans les domaines de&nbsp;: Biotechnologie, Génie Biologique et Bioprocédés et autres.</p>', '20221228084920220131_181341.jpg', 1, '2022-12-22 03:54:31', '2022-12-28 13:49:21');

-- --------------------------------------------------------

--
-- Structure de la table `conditions`
--

CREATE TABLE `conditions` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `conditions`
--

INSERT INTO `conditions` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Je veux étudier à l\'ENSBBA', 'Rejoignez une communauté académique très enthousiaste et bien encadrée par des professionnels compétents toujours rompus à la tâche!', '202212212309etudier_a_ensbba.png', '2022-12-21 20:22:41', '2022-12-22 04:09:35'),
(2, 'La R & D est l\'une de nos priorités', 'Nos équipes de chercheurs expérimentées et motivées sont ouvertes au partenariat dans le domaine de la recherche scientifique.', '202212212312recherche_a_ensbba.png', '2022-12-22 04:12:20', '2022-12-22 04:12:20');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_17_194027_create_articles_table', 1),
(6, '2022_12_18_200832_create_conditions_table', 1),
(7, '2022_12_18_201318_create_missions_table', 1),
(8, '2022_12_18_201353_create_partners_table', 1),
(9, '2022_12_18_201531_create_sliders_table', 1),
(10, '2022_12_18_201705_create_trainings_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `missions`
--

CREATE TABLE `missions` (
  `id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `missions`
--

INSERT INTO `missions` (`id`, `content`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'ENSBBA a pour missions, la formation, la recherche pour le développement et le service à la société dans les domaines de l’éducation, de la santé, de l’industrie et du génie biologique. A ce titre, elle :\r\n-	Participe à une dynamique de formation professionnelle initiale et continue dans le domaine des biosciences et biotechnologies ;\r\n-	Promeut au niveau national, régional et international la recherche pour le développement et le transfert de technologies dans les domaines des biotechnologies, la mobilisation des ressources et le renforcement des capacités ;\r\n-	Assure une veille scientifique, technologique et biosécuritaire en rapport avec les biotechnologies et l’environnement ;\r\n-	Développe des stratégies de valorisation de nos ressources génétiques au service de la santé et de l’alimentation à l’aide des outils biotechnologiques.\r\nDans le domaine de l’éducation, ENSBBA forme des cadres ayant un large spectre de connaissances et compétences reposant sur les biosciences et biotechnologies appliquées, leur permettant de trouver un emploi ou de s’auto-employer dans des secteurs variés que sont le biomédical, les industries pharmaceutiques et cosmétiques, la diététique alimentaire et la nutrition, la biotech¬nologie, l’agroalimentaire, l’environnement et autres. Pour y parvenir, les activités académiques concernent : (1) les cours théoriques enseignés par vingt et un enseignants permanents de l’entité mais aussi des enseignants missionnaires et vacataires sollicités pour les spécialités non couvertes localement; (2) les Travaux dirigés; (3) les Travaux Pratiques et Sorties Pédagogiques; (4) les examens normaux et sessions de rattrapage du premier et du second semestre de l’année; (5) les stages d’immersion, de découverte et de fin de formation.', '202212212320labo_ensbba.jpg', '202212212134rec5.mp4', '2022-12-21 20:34:56', '2022-12-22 04:20:55');

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'abeokuta', '202212212218abeokuta_logo.jpg', '2022-12-21 17:11:33', '2022-12-22 03:18:50'),
(2, 'ird', '202212212228ird_logo.jpg', '2022-12-21 17:16:30', '2022-12-22 03:28:55'),
(3, 'odisse', '202212212229odisee_logo.jpg', '2022-12-21 17:16:43', '2022-12-22 03:29:09'),
(5, 'iuez', '202212212229ulb_logo.jpg', '2022-12-21 17:37:07', '2022-12-22 03:29:25');

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
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ENSBBA', 'Nous formons des cadres ayant un large spectre de connaissances et de compétences reposant sur les biosciences et les biotechnologies appliquées.', '202212212247ensbba_img-slider_1.jpg', '2022-12-21 20:26:55', '2022-12-22 03:47:49');

-- --------------------------------------------------------

--
-- Structure de la table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `trainings`
--

INSERT INTO `trainings` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Biotechnologie Médicale', 'Devenez technicien supérieur dans les laboratoires étatiques, de recherche universitaire ou privés de diagnostics biomédicaux et de contrôle de qualité des analyses etc.', '202212212231biotechnologie_bg.jpg', '2022-12-21 17:35:54', '2022-12-22 03:31:33'),
(2, 'Biotechnologie Pharmaceutique', 'Devenez technicien supérieur de valorisation des ressources biologiques et de l’Environnement dans les industries pharmaceutique et cosmétiques etc.', '202212212232biotechnologie-pharmaceutique_bg.jpg', '2022-12-21 17:36:28', '2022-12-22 03:32:06'),
(3, 'Génétique, Biotechnologie et Applications', 'Devenez technicien supérieur dans les laboratoires de génétique humaine et de diagnostic dans les centres hospitaliers, de sélection des centres de recherche agricole etc.', '202212212233genetique_bg.jpg', '2022-12-22 03:33:39', '2022-12-22 03:33:39'),
(4, 'Diététique des Aliments et Nutrition', 'Devenez technicien supérieur en diététique et nutrition ; en contrôle de qualité des aliments ; en éducation nutritionnelle et alimentaire ; dans des sociétés de restauration collective etc.', '202212212234dietetique_bg.jpg', '2022-12-22 03:34:34', '2022-12-22 03:34:34'),
(5, 'Génie Biologique et Bioprocédés', 'Devenez technicien supérieur dans les laboratoires pédagogiques ou de recherche en biologie appliquée ; dans les agences de protection ou de gestion de biodiversité etc.', '202212212235genie-biologique_bg.jpg', '2022-12-22 03:35:00', '2022-12-22 03:35:00'),
(6, 'Les laboratoires', 'Pour assurer une formation de qualité l’ENSBBA s’est dotée de plusieurs laboratoires pédagogiques avec un équipement de pointe et de labos de recherche scientifique.', '202212212235laboratoire_bg.jpg', '2022-12-22 03:35:29', '2022-12-22 03:35:29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrateur', 'admin@admin.com', NULL, '$2y$10$0jsFxXxSA6e.70a6eCddnuTdvbQTzHL9tiqvmM25SD.4NH3oEoM4m', 1, 'ZWnaC9lyJiCLdGSslaCLRULUBTqD6xuiI7DzLN8FbuIfjQ3GowtVQHWJrkJE', '2022-12-21 15:11:55', '2022-12-21 15:11:55'),
(2, 'Utilisateur', 'user@admin.com', NULL, '$2y$10$2U59wOy9uKTxS.mlm.jZO.bR4sRxtFWrYv9EBasbdgVQ/kf9tWt9q', 0, NULL, '2022-12-21 15:11:56', '2022-12-21 15:11:56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_publisher_id_foreign` (`publisher_id`);

--
-- Index pour la table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
