-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 17 déc. 2022 à 19:54
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `youtrain`
--
CREATE DATABASE IF NOT EXISTS `youtrain` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `youtrain`;

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `travel_id` int NOT NULL,
  `nbr_adults` int NOT NULL,
  `nbr_kids` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `travel_id`, `nbr_adults`, `nbr_kids`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, '2022-12-09 08:48:43', '2022-12-09 08:48:43');

-- --------------------------------------------------------

--
-- Structure de la table `card_payments`
--

DROP TABLE IF EXISTS `card_payments`;
CREATE TABLE IF NOT EXISTS `card_payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `card_number` varchar(17) NOT NULL,
  `full_name` varchar(80) NOT NULL,
  `card_type` varchar(20) NOT NULL,
  `cvc` int NOT NULL,
  `date_exp` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=406 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Aïn Harrouda'),
(2, 'Ben Yakhlef'),
(3, 'Bouskoura'),
(4, 'Casablanca'),
(5, 'Médiouna'),
(6, 'Mohammadia'),
(7, 'Tit Mellil'),
(8, 'Ben Yakhlef'),
(9, 'Bejaâd'),
(10, 'Ben Ahmed'),
(11, 'Benslimane'),
(12, 'Berrechid'),
(13, 'Boujniba'),
(14, 'Boulanouare'),
(15, 'Bouznika'),
(16, 'Deroua'),
(17, 'El Borouj'),
(18, 'El Gara'),
(19, 'Guisser'),
(20, 'Hattane'),
(21, 'Khouribga'),
(22, 'Loulad'),
(23, 'Oued Zem'),
(24, 'Oulad Abbou'),
(25, 'Oulad H\'Riz Sahel'),
(26, 'Oulad M\'rah'),
(27, 'Oulad Saïd'),
(28, 'Oulad Sidi Ben Daoud'),
(29, 'Ras El Aïn'),
(30, 'Settat'),
(31, 'Sidi Rahhal Chataï'),
(32, 'Soualem'),
(33, 'Azemmour'),
(34, 'Bir Jdid'),
(35, 'Bouguedra'),
(36, 'Echemmaia'),
(37, 'El Jadida'),
(38, 'Hrara'),
(39, 'Ighoud'),
(40, 'Jamâat Shaim'),
(41, 'Jorf Lasfar'),
(42, 'Khemis Zemamra'),
(43, 'Laaounate'),
(44, 'Moulay Abdallah'),
(45, 'Oualidia'),
(46, 'Oulad Amrane'),
(47, 'Oulad Frej'),
(48, 'Oulad Ghadbane'),
(49, 'Safi'),
(50, 'Sebt El Maârif'),
(51, 'Sebt Gzoula'),
(52, 'Sidi Ahmed'),
(53, 'Sidi Ali Ban Hamdouche'),
(54, 'Sidi Bennour'),
(55, 'Sidi Bouzid'),
(56, 'Sidi Smaïl'),
(57, 'Youssoufia'),
(58, 'Fès'),
(59, 'Aïn Cheggag'),
(60, 'Bhalil'),
(61, 'Boulemane'),
(62, 'El Menzel'),
(63, 'Guigou'),
(64, 'Imouzzer Kandar'),
(65, 'Imouzzer Marmoucha'),
(66, 'Missour'),
(67, 'Moulay Yaâcoub'),
(68, 'Ouled Tayeb'),
(69, 'Outat El Haj'),
(70, 'Ribate El Kheir'),
(71, 'Séfrou'),
(72, 'Skhinate'),
(73, 'Tafajight'),
(74, 'Arbaoua'),
(75, 'Aïn Dorij'),
(76, 'Dar Gueddari'),
(77, 'Had Kourt'),
(78, 'Jorf El Melha'),
(79, 'Kénitra'),
(80, 'Khenichet'),
(81, 'Lalla Mimouna'),
(82, 'Mechra Bel Ksiri'),
(83, 'Mehdia'),
(84, 'Moulay Bousselham'),
(85, 'Sidi Allal Tazi'),
(86, 'Sidi Kacem'),
(87, 'Sidi Slimane'),
(88, 'Sidi Taibi'),
(89, 'Sidi Yahya El Gharb'),
(90, 'Souk El Arbaa'),
(91, 'Akka'),
(92, 'Assa'),
(93, 'Bouizakarne'),
(94, 'El Ouatia'),
(95, 'Es-Semara'),
(96, 'Fam El Hisn'),
(97, 'Foum Zguid'),
(98, 'Guelmim'),
(99, 'Taghjijt'),
(100, 'Tan-Tan'),
(101, 'Tata'),
(102, 'Zag'),
(103, 'Marrakech'),
(104, 'Ait Daoud'),
(115, 'Amizmiz'),
(116, 'Assahrij'),
(117, 'Aït Ourir'),
(118, 'Ben Guerir'),
(119, 'Chichaoua'),
(120, 'El Hanchane'),
(121, 'El Kelaâ des Sraghna'),
(122, 'Essaouira'),
(123, 'Fraïta'),
(124, 'Ghmate'),
(125, 'Ighounane'),
(126, 'Imintanoute'),
(127, 'Kattara'),
(128, 'Lalla Takerkoust'),
(129, 'Loudaya'),
(130, 'Lâattaouia'),
(131, 'Moulay Brahim'),
(132, 'Mzouda'),
(133, 'Ounagha'),
(134, 'Sid L\'Mokhtar'),
(135, 'Sid Zouin'),
(136, 'Sidi Abdallah Ghiat'),
(137, 'Sidi Bou Othmane'),
(138, 'Sidi Rahhal'),
(139, 'Skhour Rehamna'),
(140, 'Smimou'),
(141, 'Tafetachte'),
(142, 'Tahannaout'),
(143, 'Talmest'),
(144, 'Tamallalt'),
(145, 'Tamanar'),
(146, 'Tamansourt'),
(147, 'Tameslouht'),
(148, 'Tanalt'),
(150, 'Meknès‎'),
(151, 'Khénifra'),
(152, 'Agourai'),
(153, 'Ain Taoujdate'),
(154, 'MyAliCherif'),
(155, 'Rissani'),
(156, 'Amalou Ighriben'),
(157, 'Aoufous'),
(158, 'Arfoud'),
(159, 'Azrou'),
(160, 'Aïn Jemaa'),
(161, 'Aïn Karma'),
(162, 'Aïn Leuh'),
(163, 'Aït Boubidmane'),
(164, 'Aït Ishaq'),
(165, 'Boudnib'),
(166, 'Boufakrane'),
(167, 'Boumia'),
(168, 'El Hajeb'),
(169, 'Elkbab'),
(170, 'Er-Rich'),
(171, 'Errachidia'),
(172, 'Gardmit'),
(173, 'Goulmima'),
(174, 'Gourrama'),
(175, 'Had Bouhssoussen'),
(176, 'Haj Kaddour'),
(177, 'Ifrane'),
(178, 'Itzer'),
(179, 'Jorf'),
(180, 'Kehf Nsour'),
(181, 'Kerrouchen'),
(182, 'M\'haya'),
(183, 'M\'rirt'),
(184, 'Midelt'),
(185, 'Moulay Ali Cherif'),
(186, 'Moulay Bouazza'),
(187, 'Moulay Idriss Zerhoun'),
(188, 'Moussaoua'),
(189, 'N\'Zalat Bni Amar'),
(190, 'Ouaoumana'),
(191, 'Oued Ifrane'),
(192, 'Sabaa Aiyoun'),
(193, 'Sebt Jahjouh'),
(194, 'Sidi Addi'),
(195, 'Tichoute'),
(196, 'Tighassaline'),
(197, 'Tighza'),
(198, 'Timahdite'),
(199, 'Tinejdad'),
(200, 'Tizguite'),
(201, 'Toulal'),
(202, 'Tounfite'),
(203, 'Zaouia d\'Ifrane'),
(204, 'Zaïda'),
(205, 'Ahfir'),
(206, 'Aklim'),
(207, 'Al Aroui'),
(208, 'Aïn Bni Mathar'),
(209, 'Aïn Erreggada'),
(210, 'Ben Taïeb'),
(211, 'Berkane'),
(212, 'Bni Ansar'),
(213, 'Bni Chiker'),
(214, 'Bni Drar'),
(215, 'Bni Tadjite'),
(216, 'Bouanane'),
(217, 'Bouarfa'),
(218, 'Bouhdila'),
(219, 'Dar El Kebdani'),
(220, 'Debdou'),
(221, 'Douar Kannine'),
(222, 'Driouch'),
(223, 'El Aïoun Sidi Mellouk'),
(224, 'Farkhana'),
(225, 'Figuig'),
(226, 'Ihddaden'),
(227, 'Jaâdar'),
(228, 'Jerada'),
(229, 'Kariat Arekmane'),
(230, 'Kassita'),
(231, 'Kerouna'),
(232, 'Laâtamna'),
(233, 'Madagh'),
(234, 'Midar'),
(235, 'Nador'),
(236, 'Naima'),
(237, 'Oued Heimer'),
(238, 'Oujda'),
(239, 'Ras El Ma'),
(240, 'Saïdia'),
(241, 'Selouane'),
(242, 'Sidi Boubker'),
(243, 'Sidi Slimane Echcharaa'),
(244, 'Talsint'),
(245, 'Taourirt'),
(246, 'Tendrara'),
(247, 'Tiztoutine'),
(248, 'Touima'),
(249, 'Touissit'),
(250, 'Zaïo'),
(251, 'Zeghanghane'),
(252, 'Rabat'),
(253, 'Salé'),
(254, 'Ain El Aouda'),
(255, 'Harhoura'),
(256, 'Khémisset'),
(257, 'Oulmès'),
(258, 'Rommani'),
(259, 'Sidi Allal El Bahraoui'),
(260, 'Sidi Bouknadel'),
(261, 'Skhirate'),
(262, 'Tamesna'),
(263, 'Témara'),
(264, 'Tiddas'),
(265, 'Tiflet'),
(266, 'Touarga'),
(267, 'Agadir'),
(268, 'Agdz'),
(269, 'Agni Izimmer'),
(270, 'Aït Melloul'),
(271, 'Alnif'),
(272, 'Anzi'),
(273, 'Aoulouz'),
(274, 'Aourir'),
(275, 'Arazane'),
(276, 'Aït Baha'),
(277, 'Aït Iaâza'),
(278, 'Aït Yalla'),
(279, 'Ben Sergao'),
(280, 'Biougra'),
(281, 'Boumalne-Dadès'),
(282, 'Dcheira El Jihadia'),
(283, 'Drargua'),
(284, 'El Guerdane'),
(285, 'Harte Lyamine'),
(286, 'Ida Ougnidif'),
(287, 'Ifri'),
(288, 'Igdamen'),
(289, 'Ighil n\'Oumgoun'),
(290, 'Imassine'),
(291, 'Inezgane'),
(292, 'Irherm'),
(293, 'Kelaat-M\'Gouna'),
(294, 'Lakhsas'),
(295, 'Lakhsass'),
(296, 'Lqliâa'),
(297, 'M\'semrir'),
(298, 'Massa (Maroc)'),
(299, 'Megousse'),
(300, 'Ouarzazate'),
(301, 'Oulad Berhil'),
(302, 'Oulad Teïma'),
(303, 'Sarghine'),
(304, 'Sidi Ifni'),
(305, 'Skoura'),
(306, 'Tabounte'),
(307, 'Tafraout'),
(308, 'Taghzout'),
(309, 'Tagzen'),
(310, 'Taliouine'),
(311, 'Tamegroute'),
(312, 'Tamraght'),
(313, 'Tanoumrite Nkob Zagora'),
(314, 'Taourirt ait zaghar'),
(315, 'Taroudannt'),
(316, 'Temsia'),
(317, 'Tifnit'),
(318, 'Tisgdal'),
(319, 'Tiznit'),
(320, 'Toundoute'),
(321, 'Zagora'),
(322, 'Afourar'),
(323, 'Aghbala'),
(324, 'Azilal'),
(325, 'Aït Majden'),
(326, 'Beni Ayat'),
(327, 'Béni Mellal'),
(328, 'Bin elouidane'),
(329, 'Bradia'),
(330, 'Bzou'),
(331, 'Dar Oulad Zidouh'),
(332, 'Demnate'),
(333, 'Dra\'a'),
(334, 'El Ksiba'),
(335, 'Foum Jamaa'),
(336, 'Fquih Ben Salah'),
(337, 'Kasba Tadla'),
(338, 'Ouaouizeght'),
(339, 'Oulad Ayad'),
(340, 'Oulad M\'Barek'),
(341, 'Oulad Yaich'),
(342, 'Sidi Jaber'),
(343, 'Souk Sebt Oulad Nemma'),
(344, 'Zaouïat Cheikh'),
(345, 'Tanger‎'),
(346, 'Tétouan‎'),
(347, 'Akchour'),
(348, 'Assilah'),
(349, 'Bab Berred'),
(350, 'Bab Taza'),
(351, 'Brikcha'),
(352, 'Chefchaouen'),
(353, 'Dar Bni Karrich'),
(354, 'Dar Chaoui'),
(355, 'Fnideq'),
(356, 'Gueznaia'),
(357, 'Jebha'),
(358, 'Karia'),
(359, 'Khémis Sahel'),
(360, 'Ksar El Kébir'),
(361, 'Larache'),
(362, 'M\'diq'),
(363, 'Martil'),
(364, 'Moqrisset'),
(365, 'Oued Laou'),
(366, 'Oued Rmel'),
(367, 'Ouazzane'),
(368, 'Point Cires'),
(369, 'Sidi Lyamani'),
(370, 'Sidi Mohamed ben Abdallah el-Raisuni'),
(371, 'Zinat'),
(372, 'Ajdir‎'),
(373, 'Aknoul‎'),
(374, 'Al Hoceïma‎'),
(375, 'Aït Hichem‎'),
(376, 'Bni Bouayach‎'),
(377, 'Bni Hadifa‎'),
(378, 'Ghafsai‎'),
(379, 'Guercif‎'),
(380, 'Imzouren‎'),
(381, 'Inahnahen‎'),
(382, 'Issaguen (Ketama)‎'),
(383, 'Karia (El Jadida)‎'),
(384, 'Karia Ba Mohamed‎'),
(385, 'Oued Amlil‎'),
(386, 'Oulad Zbair‎'),
(387, 'Tahla‎'),
(388, 'Tala Tazegwaght‎'),
(389, 'Tamassint‎'),
(390, 'Taounate‎'),
(391, 'Targuist‎'),
(392, 'Taza‎'),
(393, 'Taïnaste‎'),
(394, 'Thar Es-Souk‎'),
(395, 'Tissa‎'),
(396, 'Tizi Ouasli‎'),
(397, 'Laayoune‎'),
(398, 'El Marsa‎'),
(399, 'Tarfaya‎'),
(400, 'Boujdour‎'),
(401, 'Awsard'),
(402, 'Oued-Eddahab'),
(403, 'Stehat'),
(404, 'Aït Attab');

-- --------------------------------------------------------

--
-- Structure de la table `stations`
--

DROP TABLE IF EXISTS `stations`;
CREATE TABLE IF NOT EXISTS `stations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `capacity` int NOT NULL,
  `city_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `stations`
--

INSERT INTO `stations` (`id`, `name`, `address`, `capacity`, `city_id`) VALUES
(1, 'Gare Youssoufia', 'R201, Youssoufia', 900, 57),
(2, 'Gare De Marrakech', 'Centre Guéliz Gare ONCF Marrakech، 40100', 3200, 103),
(3, 'Gare Rabat Agdal', 'Av. El Hadj Ahmed Charkaoui, Rabat', 3000, 252),
(4, 'Gare de Kénitra', 'Ave des FAR, Kenitra', 1900, 79),
(5, 'Gare de Mohammédia', 'Mohammedia', 1500, 6),
(6, 'Casa Port', 'Bd de Fes, Casablanca 20250', 3000, 4),
(7, 'Casa Voyageurs', 'Casablanca 20250', 4000, 4),
(8, 'Aïn Sebâa', 'Casablanca 20250', 2300, 4),
(9, 'Gare de Fès', 'Fes 30050', 2500, 58),
(10, 'Gare Settat', 'Settat', 2000, 30),
(11, 'Bouznika', 'Bouznika', 2000, 15),
(12, 'Temara', 'Temara', 700, 263);

-- --------------------------------------------------------

--
-- Structure de la table `trains`
--

DROP TABLE IF EXISTS `trains`;
CREATE TABLE IF NOT EXISTS `trains` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `capacity` int NOT NULL,
  `type_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `trains`
--

INSERT INTO `trains` (`id`, `name`, `capacity`, `type_id`) VALUES
(1, 'N304', 270, 1),
(2, 'L102', 150, 2),
(3, 'Z303', 120, 1),
(4, 'L224', 270, 1);

-- --------------------------------------------------------

--
-- Structure de la table `travels`
--

DROP TABLE IF EXISTS `travels`;
CREATE TABLE IF NOT EXISTS `travels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `time` float NOT NULL,
  `price` float NOT NULL,
  `seat` int NOT NULL DEFAULT '0',
  `start_station_id` int NOT NULL,
  `end_station_id` int NOT NULL,
  `date_start` timestamp NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int DEFAULT NULL,
  `train_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `travels`
--

INSERT INTO `travels` (`id`, `time`, `price`, `seat`, `start_station_id`, `end_station_id`, `date_start`, `created_at`, `updated_at`, `created_by`, `updated_by`, `train_id`) VALUES
(1, 3, 90, 278, 1, 2, '2022-12-21 22:12:05', '2022-12-08 10:12:05', '2022-12-08 10:12:05', 1, 1, 1),
(2, 1, 40, 0, 2, 1, '2022-12-19 10:12:05', '2022-12-11 10:12:05', '2022-12-11 10:12:05', 1, 1, 2),
(3, 3, 72, 0, 1, 2, '2022-12-22 20:21:00', '2022-12-13 20:18:53', '0000-00-00 00:00:00', 0, 1, 1),
(4, 7, 852, 0, 2, 9, '2022-12-19 04:53:00', '2022-12-13 21:54:41', '0000-00-00 00:00:00', 0, 4, 3),
(5, 2, 50, 0, 2, 1, '2022-12-24 19:14:00', '2022-12-16 19:14:51', '0000-00-00 00:00:00', 0, 1, 3),
(6, 3, 100, 0, 1, 12, '2022-12-23 17:38:00', '2022-12-17 17:39:23', '0000-00-00 00:00:00', 0, 4, 3),
(7, 4, 110, 0, 1, 3, '2022-12-20 18:14:00', '2022-12-17 18:14:56', '0000-00-00 00:00:00', 0, 1, 3),
(8, 4, 339, 0, 10, 4, '1980-11-23 10:30:00', '2022-12-17 18:30:24', '0000-00-00 00:00:00', 4, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_trains`
--

DROP TABLE IF EXISTS `type_trains`;
CREATE TABLE IF NOT EXISTS `type_trains` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `speed` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `type_trains`
--

INSERT INTO `type_trains` (`id`, `name`, `speed`) VALUES
(1, 'Atlas', 130),
(2, 'El Bouraq', 320);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(18) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  `updated_by` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `email`, `phone`, `password`, `admin`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, 'Abdelghafour', 'Aouad', 22, 'miso.abdo@gmail.com', '0620785937', '$2y$10$eAoliPV3tkxhYsNDZ9jpCO/m/FpjqMrVM5G/NjbJrzCHHW9nNGk3C', 1, '2022-12-16 19:12:40', '2022-12-17 17:37:03', 1),
(3, 'Mohammed', 'Chekir', 18, 'mohammed.chekir@gmail.com', '066666666', '$2y$10$E.k2TRUDX/hBLfQPDENUm.6/GkVAajZshors56EVGFCN.2K5qlbYS', 0, '2022-12-13 20:10:04', '2022-12-17 17:35:51', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
