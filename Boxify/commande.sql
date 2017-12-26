-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : gyrotechfbprojet.mysql.db
-- Généré le :  lun. 20 nov. 2017 à 12:11
-- Version du serveur :  5.6.34-log
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gyrotechfbprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `lm` varchar(255) NOT NULL,
  `autre` varchar(255) NOT NULL,
  `LinkedIn` int(11) NOT NULL,
  `Viadeo` int(11) NOT NULL,
  `Facebook` int(11) NOT NULL,
  `Twitter` int(11) NOT NULL,
  `Monster` int(11) NOT NULL,
  `Instagram` int(11) NOT NULL,
  `Banquio` int(12) NOT NULL,
  `CourtageNetwork` int(12) NOT NULL,
  `Dogfinance` int(12) NOT NULL,
  `FinRoad` int(12) NOT NULL,
  `DinBrok` int(12) NOT NULL,
  `Meetpips` int(12) NOT NULL,
  `Paciali` int(12) NOT NULL,
  `SupLinks` int(12) NOT NULL,
  `CarRegister` int(12) NOT NULL,
  `FretConnection` int(12) NOT NULL,
  `Motorlegend` int(12) NOT NULL,
  `Transport_Logistic` int(12) NOT NULL,
  `Mutualisationlogistique` int(12) NOT NULL,
  `Alveen` int(12) NOT NULL,
  `Bati_actu` int(12) NOT NULL,
  `B2B_immobilier` int(12) NOT NULL,
  `Dribble` int(12) NOT NULL,
  `Kasavox` int(12) NOT NULL,
  `Whozimmo` int(12) NOT NULL,
  `Agrilink` int(12) NOT NULL,
  `Iliaa` int(12) NOT NULL,
  `Par_Dessus_Haie` int(12) NOT NULL,
  `Wabel` int(12) NOT NULL,
  `Winemak_in` int(12) NOT NULL,
  `Artilinki` int(12) NOT NULL,
  `Artistically_relationship` int(12) NOT NULL,
  `Babler` int(12) NOT NULL,
  `Behance` int(12) NOT NULL,
  `Bottin_Livre` int(12) NOT NULL,
  `Exponentiel` int(12) NOT NULL,
  `Kinorezo` int(12) NOT NULL,
  `Koolyss` int(12) NOT NULL,
  `LykHubs` int(12) NOT NULL,
  `Mupiz` int(12) NOT NULL,
  `Contemporary` int(12) NOT NULL,
  `RezoTour` int(12) NOT NULL,
  `Stage_32` int(12) NOT NULL,
  `Beesday` int(12) NOT NULL,
  `Catalethique` int(12) NOT NULL,
  `DDnetwork` int(12) NOT NULL,
  `EcoVibio` int(12) NOT NULL,
  `EnviMotion` int(12) NOT NULL,
  `InDeed` int(12) NOT NULL,
  `PlaneteAttitude` int(12) NOT NULL,
  `Social_Planet` int(12) NOT NULL,
  `Sustain_work` int(12) NOT NULL,
  `Wizness_Community` int(12) NOT NULL,
  `Woodsourcing` int(12) NOT NULL,
  `Digikaa` int(12) NOT NULL,
  `Geeklist` int(12) NOT NULL,
  `Github` int(12) NOT NULL,
  `Human_Coders` int(12) NOT NULL,
  `Woketer` int(12) NOT NULL,
  `Agents-stream` int(12) NOT NULL,
  `Culinary_Agents` int(12) NOT NULL,
  `Food_Connexion` int(12) NOT NULL,
  `Horeka` int(12) NOT NULL,
  `Kitchen_Connect` int(12) NOT NULL,
  `Linkhospi` int(12) NOT NULL,
  `LifeSport` int(12) NOT NULL,
  `Sport_Profiler` int(12) NOT NULL,
  `Profil_players` int(12) NOT NULL,
  `Reseau_Vins` int(12) NOT NULL,
  `Restaurateur` int(12) NOT NULL,
  `VinSocialClub` int(12) NOT NULL,
  `Winox` int(12) NOT NULL,
  `Yummeet` int(12) NOT NULL,
  `Hub_Avocat` int(12) NOT NULL,
  `Vox_avocats` int(12) NOT NULL,
  `Law_Link` int(12) NOT NULL,
  `Job_Lux` int(12) NOT NULL,
  `Many_Mucho` int(12) NOT NULL,
  `Luxury_Society` int(12) NOT NULL,
  `Esanum` int(12) NOT NULL,
  `Docatus` int(12) NOT NULL,
  `Dento-Reseau` int(12) NOT NULL,
  `FollowMed` int(12) NOT NULL,
  `Hey_Doctor` int(12) NOT NULL,
  `Medext` int(12) NOT NULL,
  `Medeclic` int(12) NOT NULL,
  `Melting_Doc` int(12) NOT NULL,
  `Medpics` int(12) NOT NULL,
  `Pro_Sante` int(12) NOT NULL,
  `Infirmier` int(12) NOT NULL,
  `Reseau_Veterisphere` int(12) NOT NULL,
  `Sante_Connect` int(12) NOT NULL,
  `Sante_Log` int(12) NOT NULL,
  `Telesoins` int(12) NOT NULL,
  `Talent_Pharmacie` int(12) NOT NULL,
  `Academia` int(12) NOT NULL,
  `Biomed_Experts` int(12) NOT NULL,
  `Science_Work` int(12) NOT NULL,
  `Research_Gate` int(12) NOT NULL,
  `price` varchar(50) NOT NULL,
  `payed` int(11) NOT NULL,
  `Date_payement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nom`, `prenom`, `email`, `password`, `photo`, `cv`, `lm`, `autre`, `LinkedIn`, `Viadeo`, `Facebook`, `Twitter`, `Monster`, `Instagram`, `Banquio`, `CourtageNetwork`, `Dogfinance`, `FinRoad`, `DinBrok`, `Meetpips`, `Paciali`, `SupLinks`, `CarRegister`, `FretConnection`, `Motorlegend`, `Transport_Logistic`, `Mutualisationlogistique`, `Alveen`, `Bati_actu`, `B2B_immobilier`, `Dribble`, `Kasavox`, `Whozimmo`, `Agrilink`, `Iliaa`, `Par_Dessus_Haie`, `Wabel`, `Winemak_in`, `Artilinki`, `Artistically_relationship`, `Babler`, `Behance`, `Bottin_Livre`, `Exponentiel`, `Kinorezo`, `Koolyss`, `LykHubs`, `Mupiz`, `Contemporary`, `RezoTour`, `Stage_32`, `Beesday`, `Catalethique`, `DDnetwork`, `EcoVibio`, `EnviMotion`, `InDeed`, `PlaneteAttitude`, `Social_Planet`, `Sustain_work`, `Wizness_Community`, `Woodsourcing`, `Digikaa`, `Geeklist`, `Github`, `Human_Coders`, `Woketer`, `Agents-stream`, `Culinary_Agents`, `Food_Connexion`, `Horeka`, `Kitchen_Connect`, `Linkhospi`, `LifeSport`, `Sport_Profiler`, `Profil_players`, `Reseau_Vins`, `Restaurateur`, `VinSocialClub`, `Winox`, `Yummeet`, `Hub_Avocat`, `Vox_avocats`, `Law_Link`, `Job_Lux`, `Many_Mucho`, `Luxury_Society`, `Esanum`, `Docatus`, `Dento-Reseau`, `FollowMed`, `Hey_Doctor`, `Medext`, `Medeclic`, `Melting_Doc`, `Medpics`, `Pro_Sante`, `Infirmier`, `Reseau_Veterisphere`, `Sante_Connect`, `Sante_Log`, `Telesoins`, `Talent_Pharmacie`, `Academia`, `Biomed_Experts`, `Science_Work`, `Research_Gate`, `price`, `payed`, `Date_payement`) VALUES
(38, 'ttjjkk', 'hhjjkk', 'faouzia.h@zetacos.comhhh', 'ifmed2017', 'upload/faouzia.h@zetacos.comhhh/', 'upload/faouzia.h@zetacos.comhhh/', 'upload/faouzia.h@zetacos.comhhh/', 'upload/faouzia.h@zetacos.comhhh/', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '110  €', 0, '2017-11-17 01:43:04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
