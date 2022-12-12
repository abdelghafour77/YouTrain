-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 déc. 2022 à 09:57
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

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

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL,
  `nbr_adults` int(11) NOT NULL,
  `nbr_kids` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `travel_id`, `nbr_adults`, `nbr_kids`, `created_at`, `updated_at`) VALUES
(1, 1, 16, 20, 3, '2022-12-11 16:17:18', '0000-00-00 00:00:00'),
(3, 1, 17, 11, 1, '2022-12-11 16:24:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `card_payments`
--

CREATE TABLE `card_payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_number` varchar(17) NOT NULL,
  `full_name` varchar(80) NOT NULL,
  `card_type` varchar(20) NOT NULL,
  `cvc` int(11) NOT NULL,
  `date_exp` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(149, 'Zeubelemok'),
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
(404, 'Aït Attab'),
(406, 'g'),
(407, 'ggg'),
(408, 'ggg'),
(409, 'ggg'),
(410, 'kkk');

-- --------------------------------------------------------

--
-- Structure de la table `stations`
--

CREATE TABLE `stations` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stations`
--

INSERT INTO `stations` (`id`, `name`, `address`, `capacity`, `city_id`) VALUES
(1, 'casa', 'Casa', 2000, 17),
(20, 'Clio Ortiz', 'Enim magna reiciendi', 555, 342),
(24, 'Dahlia Noble', 'Nesciunt voluptatem', 79, 3),
(25, 'Gretche', 'Facilis dolor nihil ', 89, 230);

-- --------------------------------------------------------

--
-- Structure de la table `trains`
--

CREATE TABLE `trains` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `capacity` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trains`
--

INSERT INTO `trains` (`id`, `name`, `capacity`, `type_id`) VALUES
(9, 'Bo Foley', 13, 3),
(10, 'Brett Cortez', 66, 2),
(11, 'Isabella Delgado', 61, 2);

-- --------------------------------------------------------

--
-- Structure de la table `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `time` float NOT NULL,
  `price` float NOT NULL,
  `seats` int(11) NOT NULL DEFAULT 0,
  `start_station_id` int(11) NOT NULL,
  `end_station_id` int(11) NOT NULL,
  `date_start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `train_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `travels`
--

INSERT INTO `travels` (`id`, `time`, `price`, `seats`, `start_station_id`, `end_station_id`, `date_start`, `created_at`, `updated_at`, `created_by`, `updated_by`, `train_id`) VALUES
(14, 36, 233, 0, 1, 25, '2022-12-11 21:17:00', '2022-12-10 16:52:38', '0000-00-00 00:00:00', 0, 0, 11),
(16, 36, 974, 0, 1, 20, '2012-09-10 20:29:00', '2022-12-11 13:33:44', '0000-00-00 00:00:00', 0, 0, 10),
(17, 740, 500, 0, 25, 1, '2022-12-10 05:50:00', '2022-12-11 13:33:51', '0000-00-00 00:00:00', 0, 0, 10),
(19, 84, 578, 0, 24, 24, '2022-12-12 06:56:00', '2022-12-12 08:38:43', '0000-00-00 00:00:00', 0, 0, 10);

-- --------------------------------------------------------

--
-- Structure de la table `type_trains`
--

CREATE TABLE `type_trains` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `speed` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_trains`
--

INSERT INTO `type_trains` (`id`, `name`, `speed`) VALUES
(1, 'Al Atlas', 360),
(2, 'Al Boraq', 800),
(3, 'ONCF', 330);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(18) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `email`, `phone`, `password`, `admin`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, 'boutaina', 'el atbaoui', 24, 'boutaina@gmail.com', '0687655434', '0', 1, '2022-12-08 15:17:59', '2022-12-08 15:17:59', '2022-12-08 15:17:59'),
(2, 'abd', 'ghafur', 22, 'abd@gmail.com', '0687655435', 'fkkker', 0, '2022-12-11 16:15:33', '2022-12-11 16:15:33', '2022-12-11 16:15:33');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `card_payments`
--
ALTER TABLE `card_payments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_trains`
--
ALTER TABLE `type_trains`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `card_payments`
--
ALTER TABLE `card_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=417;

--
-- AUTO_INCREMENT pour la table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `type_trains`
--
ALTER TABLE `type_trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
