-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-1490d387-achref-urbanlink.j.aivencloud.com:23048
-- Generation Time: Apr 24, 2025 at 02:43 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `defaultdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnement`
--

CREATE TABLE `abonnement` (
  `id` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abonnement`
--

INSERT INTO `abonnement` (`id`, `type`, `prix`, `date_debut`, `date_fin`, `etat`, `image`) VALUES
(9, 'mensuel', 150, '2025-04-19', '2025-05-20', 'actif', '68023491e22a2_45490bd3-ce41-4848-8c25-79f595376fdf.jpg'),
(10, 'mensuel', 121, '2025-04-24', '2025-05-23', 'actif', '68091481aa142_Capture d\'écran 2023-08-28 231332.png'),
(11, 'trimestriel', 200, '2025-04-25', '2025-05-30', 'actif', '680914c91af59_Capture d\'écran 2023-12-02 210732.png');

-- --------------------------------------------------------

--
-- Table structure for table `abonnement_reservation`
--

CREATE TABLE `abonnement_reservation` (
  `id` int NOT NULL,
  `abonnement_id` int NOT NULL,
  `user_id` int NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `reference` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abonnement_reservation`
--

INSERT INTO `abonnement_reservation` (`id`, `abonnement_id`, `user_id`, `fullname`, `statut`, `date_debut`, `date_fin`, `reference`) VALUES
(4, 9, 4, 'client', 'en attente', '2025-04-23', '2025-05-23', '62712825'),
(5, 9, 4, 'client', 'en attente', '2025-04-23', '2025-05-23', '45945306'),
(6, 9, 4, 'client', 'confirmé', '2025-04-24', '2025-05-24', '84162285'),
(7, 9, 4, 'client', 'en attente', '2025-04-24', '2025-05-24', '26587523'),
(8, 11, 4, 'client', 'en attente', '2025-04-25', '2025-05-30', '18967147'),
(9, 11, 4, 'client', 'en attente', '2025-04-25', '2025-05-30', '06285811'),
(10, 11, 4, 'client', 'payé', '2025-04-25', '2025-05-30', '78973738'),
(11, 11, 4, 'client', 'payé', '2025-04-25', '2025-05-30', '22266935'),
(12, 11, 4, 'client', 'payé', '2025-04-25', '2025-05-30', '59494315'),
(13, 10, 4, 'client', 'payé', '2025-04-24', '2025-05-23', '62395715'),
(14, 11, 4, 'client', 'en attente', '2025-04-25', '2025-05-30', '00430882'),
(15, 11, 4, 'client', 'en attente', '2025-04-25', '2025-05-30', '70114896');

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `taxi_id` int DEFAULT NULL,
  `vehicle_id` int DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_avis` date NOT NULL,
  `statut` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `user_id`, `taxi_id`, `vehicle_id`, `type`, `commentaire`, `date_avis`, `statut`) VALUES
(1, 4, 1, NULL, 'taxi complaint', 'taxi en mauvais etat', '2025-04-18', 'not processed'),
(2, 4, NULL, 5, 'vehicle complaint', 'vehicle took me from a lo,ng way', '2025-04-18', 'not processed'),
(3, 4, 2, NULL, 'taxi complaint', 'subscribe not work', '2025-04-18', 'processed'),
(4, 4, 1, NULL, 'taxi complaint', 'old taxi', '2025-04-18', 'not processed'),
(5, 23, NULL, 5, 'vehicle complaint', 'voiture', '2025-04-18', 'not processed'),
(6, 23, 1, NULL, 'taxi complaint', 'taxi taxi!', '2025-04-18', 'not processed'),
(7, 4, NULL, 9, 'vehicle complaint', 'complaint vehicle', '2025-04-22', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `taxi_id` int NOT NULL,
  `date_reservation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_course` datetime NOT NULL,
  `ville_depart` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_arrivee` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance_km` decimal(6,2) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `statut` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'En attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `user_id`, `taxi_id`, `date_reservation`, `date_course`, `ville_depart`, `ville_arrivee`, `distance_km`, `montant`, `statut`) VALUES
(1, 4, 1, '2025-04-18 13:44:13', '2025-04-20 15:42:00', '36.8087, 10.1729', '36.8590, 10.1957', 7.45, 4.47, 'Acceptée');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250329152824', '2025-03-29 16:32:44', 38),
('DoctrineMigrations\\Version20250329152842', '2025-03-29 16:32:45', 377),
('DoctrineMigrations\\Version20250329153559', '2025-03-29 16:36:22', 523),
('DoctrineMigrations\\Version20250329155010', '2025-03-29 17:17:25', 363),
('DoctrineMigrations\\Version20250330152420', '2025-03-30 17:25:21', 164),
('DoctrineMigrations\\Version20250403210136', '2025-04-03 23:02:27', 575),
('DoctrineMigrations\\Version20250409110800', '2025-04-09 13:08:53', 557),
('DoctrineMigrations\\Version20250409113823', '2025-04-09 13:39:15', 315),
('DoctrineMigrations\\Version20250409121755', '2025-04-09 14:18:51', 309),
('DoctrineMigrations\\Version20250409170447', '2025-04-09 19:20:15', 373),
('DoctrineMigrations\\Version20250409174721', '2025-04-09 19:48:44', 172),
('DoctrineMigrations\\Version20250409232315', '2025-04-10 01:36:23', 841),
('DoctrineMigrations\\Version20250410002451', '2025-04-10 02:26:10', 2),
('DoctrineMigrations\\Version20250410004846', '2025-04-10 02:49:45', 1263),
('DoctrineMigrations\\Version20250410005853', '2025-04-10 02:59:57', 322),
('DoctrineMigrations\\Version20250410010218', '2025-04-10 03:03:02', 2),
('DoctrineMigrations\\Version20250410072812', '2025-04-10 09:29:28', 409),
('DoctrineMigrations\\Version20250410090802', '2025-04-10 11:08:41', 1006),
('DoctrineMigrations\\Version20250410092531', '2025-04-10 11:26:06', 6),
('DoctrineMigrations\\Version20250410181802', '2025-04-10 20:26:19', 660),
('DoctrineMigrations\\Version20250410185553', '2025-04-10 20:57:04', 1143),
('DoctrineMigrations\\Version20250410193231', '2025-04-10 21:33:30', 614),
('DoctrineMigrations\\Version20250410195606', '2025-04-10 21:56:18', 1422),
('DoctrineMigrations\\Version20250410200029', '2025-04-10 22:01:15', 1598),
('DoctrineMigrations\\Version20250410203206', '2025-04-10 22:32:41', 595),
('DoctrineMigrations\\Version20250410204214', '2025-04-10 22:49:11', 2982),
('DoctrineMigrations\\Version20250410211029', '2025-04-10 23:10:51', 204),
('DoctrineMigrations\\Version20250410212126', '2025-04-10 23:22:01', 178),
('DoctrineMigrations\\Version20250410212408', '2025-04-10 23:25:35', 1032),
('DoctrineMigrations\\Version20250410212948', '2025-04-10 23:30:14', 203),
('DoctrineMigrations\\Version20250410215049', '2025-04-10 23:53:00', 125),
('DoctrineMigrations\\Version20250410215301', '2025-04-10 23:53:39', 512),
('DoctrineMigrations\\Version20250410215537', '2025-04-10 23:56:37', 3016),
('DoctrineMigrations\\Version20250410220854', '2025-04-11 00:10:11', 864),
('DoctrineMigrations\\Version20250410220856', '2025-04-11 00:09:56', 85),
('DoctrineMigrations\\Version20250410221410', '2025-04-11 00:15:30', 522),
('DoctrineMigrations\\Version20250410222952', '2025-04-11 00:31:21', 1603),
('DoctrineMigrations\\Version20250410232339', '2025-04-11 01:24:35', 380),
('DoctrineMigrations\\Version20250411000141', '2025-04-11 02:02:40', 758),
('DoctrineMigrations\\Version20250412133454', '2025-04-12 15:35:14', 351),
('DoctrineMigrations\\Version20250412141241', '2025-04-12 16:21:59', 479),
('DoctrineMigrations\\Version20250412230313', '2025-04-13 01:09:06', 902),
('DoctrineMigrations\\Version20250413182154', '2025-04-13 20:32:57', 239),
('DoctrineMigrations\\Version20250413202505', '2025-04-13 22:26:37', 248),
('DoctrineMigrations\\Version20250414210108', '2025-04-14 23:02:49', 1906),
('DoctrineMigrations\\Version20250415175734', '2025-04-15 19:59:23', 681),
('DoctrineMigrations\\Version20250415185454', '2025-04-15 20:55:36', 124),
('DoctrineMigrations\\Version20250415194617', '2025-04-15 21:47:04', 342),
('DoctrineMigrations\\Version20250415215951', '2025-04-16 00:00:40', 1996),
('DoctrineMigrations\\Version20250415220903', '2025-04-16 00:09:45', 123),
('DoctrineMigrations\\Version20250416002833', '2025-04-16 02:29:13', 589),
('DoctrineMigrations\\Version20250416100842', '2025-04-16 12:11:11', 259),
('DoctrineMigrations\\Version20250416101312', '2025-04-16 12:15:44', 1020),
('DoctrineMigrations\\Version20250416101514', '2025-04-16 12:18:44', 93),
('DoctrineMigrations\\Version20250416102800', '2025-04-16 12:28:45', 600),
('DoctrineMigrations\\Version20250416105606', '2025-04-16 12:56:39', 115),
('DoctrineMigrations\\Version20250417175343', '2025-04-17 19:54:25', 622),
('DoctrineMigrations\\Version20250418010437', '2025-04-18 03:05:19', 326),
('DoctrineMigrations\\Version20250418011915', '2025-04-18 03:35:04', 271),
('DoctrineMigrations\\Version20250418011958', '2025-04-18 03:20:22', 159),
('DoctrineMigrations\\Version20250418014349', '2025-04-18 03:45:55', 128),
('DoctrineMigrations\\Version20250418014739', '2025-04-18 03:48:03', 400);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int NOT NULL,
  `maintenance_date` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double NOT NULL,
  `vehicle_id` int NOT NULL,
  `status` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `maintenance_date`, `service_type`, `description`, `service_provider`, `cost`, `vehicle_id`, `status`) VALUES
(3, '2025-04-18 10:56:00', 'Tire Rotation', 'azeaz', 'aze12', 30, 2, 0),
(8, '2025-04-23 18:22:00', 'Tire Rotation', 'azertyuio', 'qsdfghjklm', 30, 9, 1),
(10, '2025-04-23 18:31:00', 'Tire Rotation', 'n,kobji', 'azerty', 30, 10, 1),
(11, '2025-04-23 18:36:00', 'Air Conditioning', 'nininininini', 'aqwzsxedc', 120, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int NOT NULL,
  `taxi_id` int NOT NULL,
  `user_id` int NOT NULL,
  `note` int NOT NULL,
  `commentaire` longtext COLLATE utf8mb4_unicode_ci,
  `date_rating` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reponse`
--

CREATE TABLE `reponse` (
  `id` int NOT NULL,
  `avis_id` int NOT NULL,
  `user_id` int NOT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_reponse` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reponse`
--

INSERT INTO `reponse` (`id`, `avis_id`, `user_id`, `commentaire`, `date_reponse`) VALUES
(1, 3, 3, 'ok', '2025-04-18'),
(2, 7, 3, 'kekw answer', '2025-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int NOT NULL,
  `trajet_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `reservation_date` datetime NOT NULL,
  `number_of_seats` int NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_cancelled` tinyint(1) NOT NULL,
  `cancellation_reason` longtext COLLATE utf8mb4_unicode_ci,
  `cancellation_date` datetime DEFAULT NULL,
  `trajet_deleted` tinyint(1) NOT NULL,
  `trajet_deleted_at` datetime DEFAULT NULL,
  `trajet_deleted_info` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `trajet_id`, `user_id`, `reservation_date`, `number_of_seats`, `total_price`, `status`, `is_cancelled`, `cancellation_reason`, `cancellation_date`, `trajet_deleted`, `trajet_deleted_at`, `trajet_deleted_info`) VALUES
(1, NULL, 4, '2025-04-18 04:44:38', 1, 15.00, 'Confirmed', 0, NULL, NULL, 0, NULL, NULL),
(2, 2, 4, '2025-04-18 04:45:46', 1, 45.99, 'Pending', 0, NULL, NULL, 0, NULL, NULL),
(3, NULL, 4, '2025-04-18 04:45:59', 1, 15.00, 'Canceled', 0, NULL, NULL, 1, '2025-04-18 11:37:47', '{\"departure\":\"jandouba\",\"destination\":\"zaghouen\",\"date\":\"22\\/04\\/2025 04:25\",\"price\":15,\"seats\":5}'),
(4, 3, 4, '2025-04-18 04:46:09', 1, 45.99, 'Confirmed', 0, NULL, NULL, 0, NULL, NULL),
(5, NULL, 4, '2025-04-18 13:09:32', 1, 15.00, 'Pending', 0, NULL, NULL, 0, NULL, NULL),
(6, 5, 4, '2025-04-23 19:02:20', 1, 45.99, 'Pending', 0, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taxi`
--

CREATE TABLE `taxi` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `immatriculation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee_fabrication` int DEFAULT NULL,
  `capacite` int NOT NULL,
  `zone_desserte` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disponible',
  `licence_numero` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licence_date_obtention` datetime DEFAULT NULL,
  `tarif_base` decimal(10,2) NOT NULL,
  `longitude` decimal(10,6) DEFAULT NULL,
  `latitude` decimal(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxi`
--

INSERT INTO `taxi` (`id`, `user_id`, `immatriculation`, `marque`, `modele`, `annee_fabrication`, `capacite`, `zone_desserte`, `statut`, `licence_numero`, `licence_date_obtention`, `tarif_base`, `longitude`, `latitude`) VALUES
(1, 1, '545 TUN 125', 'Peugeot', '508', 2019, 5, 'Tunis', 'Disponible', '44444', '2025-04-22 00:00:00', 0.60, 10.169281, 36.800617),
(2, 27, '545 TUN 128', 'Renault', 'Kadjar', 2019, 3, 'Tunis', 'Disponible', '25841', '2025-04-22 00:00:00', 0.50, 10.169889, 36.790872);

-- --------------------------------------------------------

--
-- Table structure for table `trajet`
--

CREATE TABLE `trajet` (
  `id` int NOT NULL,
  `departure` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance` double NOT NULL,
  `duration` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_time` datetime NOT NULL,
  `arrival_time` datetime DEFAULT NULL,
  `price` double NOT NULL,
  `available_seats` int NOT NULL,
  `vehicle_id` int DEFAULT NULL,
  `type_transport` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trajet`
--

INSERT INTO `trajet` (`id`, `departure`, `destination`, `distance`, `duration`, `departure_time`, `arrival_time`, `price`, `available_seats`, `vehicle_id`, `type_transport`) VALUES
(2, 'tatouin', 'tunis', 600, '01:30', '2025-04-22 04:24:00', '2025-04-19 05:54:00', 45.99, 4, 4, 'Carpooling'),
(3, 'bizerte', 'sousse', 60, '01:30', '2025-04-25 04:24:00', '2025-04-25 05:54:00', 45.99, 9, 5, 'PublicTransport'),
(5, 'jandouba', 'sousse', 600, '01:30', '2025-04-19 11:42:00', '2025-04-19 13:12:00', 45.99, 10, 2, 'Carpooling'),
(6, 'djerba', 'zaghouen', 60, '01:30', '2025-04-19 11:46:00', '2025-04-19 13:16:00', 15, 10, 2, 'PublicTransport'),
(7, 'nabel', 'hamemet', 60, '01:30', '2025-04-19 11:46:00', '2025-04-19 13:16:00', 15, 10, 2, 'Carpooling'),
(9, 'bizerte', 'sousse', 60, '01:30', '2025-04-21 16:43:00', NULL, 45.99, 2, 5, 'Carpooling'),
(10, 'nabel', 'sousse', 60, '01:30', '2025-04-22 22:20:00', NULL, 45.99, 5, 4, 'Carpooling'),
(11, 'safex', 'touzer', 150, '01:30', '2025-04-23 22:57:00', NULL, 20, 2, 4, 'Carpooling');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int DEFAULT NULL,
  `is_blocked` tinyint(1) NOT NULL,
  `joining_date` datetime NOT NULL,
  `license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `password`, `role`, `code`, `is_blocked`, `joining_date`, `license`) VALUES
(1, 'heni', 'heni@esprit.tn', '+21655448828', '$2y$13$vPa42qLcfMHG4naG3UyG8u3JEB6xuWo2Pw5oIOUYpreRe.Kw0N7xq', 'taxi', NULL, 0, '2025-04-18 01:35:03', NULL),
(2, 'skander', 'skanderbardaoui19@gmail.com', '50324099', '$2y$13$/HbSZzdQgIBSB2.czWrjeuHYtHHLQHXVoHy0ztH7EyxDQIjB78WTO', 'client', NULL, 0, '2025-04-18 01:35:03', NULL),
(3, 'admin', 'admin@esprit.tn', '+21655448828', '$2y$12$PkRgV/kVQbLBkJas9Two0uEIxfeM3IEek2x3GvIulypo8DaIf4V42', 'admin', NULL, 0, '2025-04-18 01:35:03', NULL),
(4, 'client', 'client@esprit.tn', '+21655448828', '$2y$12$TZ7jyvwloT4YhEosYu/HUuoACVqUFYgrTJLHkEOCy95tDeLZknQe6', 'client', NULL, 0, '2025-04-18 01:35:03', NULL),
(5, 'driver', 'driver@esprit.tn', '1234567899', '$2y$12$RXJJhxk5.f/suti3BHdAL.ijl6rVnfvezHqtjT9RzfqSwfPFWaCEm', 'driver', NULL, 1, '2025-04-18 01:35:03', NULL),
(21, 'sb', 'sbissi.mohamed@esprit.tn', '12345678', '$2y$12$4MSodahu8ofjANZ2exV6YeX2Qf.YEZRZcQCFb/GsY2cBzVx4i6A6W', 'client', NULL, 0, '2025-04-18 01:35:03', NULL),
(22, 'malek', 'hammami.mohamedmalek@esprit.tn', '12345678', '$2y$13$GqQspnE/A8r6ICQYGVCsIOD.efLOW6RH4oup3wUqTXOwriGQeOyXC', 'taxi', NULL, 0, '2025-04-18 01:35:03', NULL),
(23, 'hello', 'hello@esprit.tn', '12345678', '$2y$12$Ewn9sZppvrJClypK2aeE0.H5j5r3W5GrVIccbpN74A55P1Db0zcDy', 'client', NULL, 0, '2025-04-18 01:35:03', NULL),
(26, 'kl', 'kl@esprit.tn', '+119191919', '$2y$12$0LNJmFsqwEVpQKzsCXRhWuA8wPBSEa7qElfRJOKiZTe/ApA1gzIOC', 'client', NULL, 0, '2025-04-18 01:35:03', NULL),
(27, 'check1', 'ch@gamail.com', '+21677777777', '$2y$12$9sAMYJT72q1E0Yht.e09HuT7Umw1Shrkz9H5TIJkxUGWre7xd5e6C', 'client', NULL, 0, '2025-04-18 01:35:03', NULL),
(28, 'mmm', 'mmm@esprit.tn', '+21612345678', '$2y$12$mv1v3UyZCZ9ITO2yqtyeMes9tSPK3QA9VuaLmdvo8rOaBnQKp2qOq', 'taxi', NULL, 0, '2025-04-18 01:35:03', NULL),
(29, 'Mohamed=', 'sbissi9@gmail.com', '+21629292929', '$2y$13$qr3NSAuFp8oRPlOy3dKaU.IxP8Qf0aNDmE5uvKWoW2W2F3vJmB9kC', 'client', NULL, 0, '2025-04-18 01:35:03', NULL),
(30, 'test88', 'test88@esprit.tn', '+21623232323', '$2y$13$huJ2wurljEBqIWPc6/d2u.OiGy3X.OqmVIUH4AMJbcGYXRjXfy8bO', 'client', NULL, 0, '2025-04-18 12:27:10', 'UL-59HQ6CW0');

-- --------------------------------------------------------

--
-- Table structure for table `Vehicle`
--

CREATE TABLE `Vehicle` (
  `id` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licensePlate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int NOT NULL,
  `airConditioning` tinyint(1) NOT NULL,
  `isAvailable` tinyint(1) NOT NULL,
  `driverID` int DEFAULT NULL,
  `isVerified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Vehicle`
--

INSERT INTO `Vehicle` (`id`, `type`, `model`, `brand`, `licensePlate`, `seats`, `image`, `color`, `year`, `airConditioning`, `isAvailable`, `driverID`, `isVerified`) VALUES
(2, 'Van', 'Maruti', 'Suzuki', '315 TUN 7896', 8, 'https://i.ibb.co/bRWvwsR6/c7ffa0868680.jpg', '#bebfc1', 2020, 1, 0, NULL, 0),
(3, 'car', 'Civic', 'Honda', '123 TUN 4567', 4, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Honda_Civic_Hybrid_%282022%2C_Europe%29_IAA_2023_1X7A0545_%282%29.jpg/1200px-Honda_Civic_Hybrid_%282022%2C_Europe%29_IAA_2023_1X7A0545_%282%29.jpg', '#ffffff', 2018, 1, 1, 1, 1),
(4, 'car', 'Audi', 'A3', '128 TUN 4567', 4, 'https://i.ibb.co/HfVkwwnP/744c0cede52c.png', '#000000', 2020, 1, 0, 2, 0),
(5, 'Car', 'Cherokee', 'Jeep ', '315 TUN 7896', 4, 'https://i.ibb.co/XxDdy1mW/ded107a70e55.png', '#000000', 2016, 1, 0, 4, 0),
(9, 'Car', 'honda', 'honda', '112TUN3545', 5, 'https://i.ibb.co/4wXzj7yF/292e4a6e34e5.jpg', '#5e60ce', 2023, 1, 0, 2, 0),
(10, 'Car', 'honda', 'honda', '115TUN3545', 5, 'https://i.ibb.co/S45YN7Dp/e8d6bc8679c9.png', '#5e60ce', 2023, 0, 0, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abonnement_reservation`
--
ALTER TABLE `abonnement_reservation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B4E3A574AEA34913` (`reference`),
  ADD KEY `IDX_B4E3A574F1D74413` (`abonnement_id`),
  ADD KEY `IDX_B4E3A574A76ED395` (`user_id`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F91ABF0A76ED395` (`user_id`),
  ADD KEY `IDX_8F91ABF0506FF81C` (`taxi_id`),
  ADD KEY `IDX_8F91ABF0545317D1` (`vehicle_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_169E6FB9A76ED395` (`user_id`),
  ADD KEY `IDX_169E6FB9506FF81C` (`taxi_id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2F84F8E9545317D1` (`vehicle_id`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D8892622506FF81C` (`taxi_id`),
  ADD KEY `IDX_D8892622A76ED395` (`user_id`);

--
-- Indexes for table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5FB6DEC7197E709F` (`avis_id`),
  ADD KEY `IDX_5FB6DEC7A76ED395` (`user_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `IDX_4DA239D12A823` (`trajet_id`),
  ADD KEY `IDX_4DA239A76ED395` (`user_id`);

--
-- Indexes for table `taxi`
--
ALTER TABLE `taxi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5F8463C2BE73422E` (`immatriculation`),
  ADD UNIQUE KEY `UNIQ_5F8463C22374CDE9` (`licence_numero`),
  ADD KEY `IDX_5F8463C2A76ED395` (`user_id`);

--
-- Indexes for table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2B5BA98C545317D1` (`vehicle_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- Indexes for table `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D43DDD1A189A311D` (`driverID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `abonnement_reservation`
--
ALTER TABLE `abonnement_reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `taxi`
--
ALTER TABLE `taxi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `Vehicle`
--
ALTER TABLE `Vehicle`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abonnement_reservation`
--
ALTER TABLE `abonnement_reservation`
  ADD CONSTRAINT `FK_B4E3A574A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `FK_B4E3A574F1D74413` FOREIGN KEY (`abonnement_id`) REFERENCES `abonnement` (`id`);

--
-- Constraints for table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_8F91ABF0506FF81C` FOREIGN KEY (`taxi_id`) REFERENCES `taxi` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_8F91ABF0545317D1` FOREIGN KEY (`vehicle_id`) REFERENCES `Vehicle` (`id`),
  ADD CONSTRAINT `FK_8F91ABF0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `FK_169E6FB9506FF81C` FOREIGN KEY (`taxi_id`) REFERENCES `taxi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_169E6FB9A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `FK_2F84F8E9545317D1` FOREIGN KEY (`vehicle_id`) REFERENCES `Vehicle` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `FK_D8892622506FF81C` FOREIGN KEY (`taxi_id`) REFERENCES `taxi` (`id`),
  ADD CONSTRAINT `FK_D8892622A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `FK_5FB6DEC7197E709F` FOREIGN KEY (`avis_id`) REFERENCES `avis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5FB6DEC7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_4DA239A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4DA239D12A823` FOREIGN KEY (`trajet_id`) REFERENCES `trajet` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `taxi`
--
ALTER TABLE `taxi`
  ADD CONSTRAINT `FK_5F8463C2A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `FK_2B5BA98C545317D1` FOREIGN KEY (`vehicle_id`) REFERENCES `Vehicle` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD CONSTRAINT `FK_D43DDD1A189A311D` FOREIGN KEY (`driverID`) REFERENCES `users` (`user_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
