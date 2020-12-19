-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 19 déc. 2020 à 16:09
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `miva`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `idAdmin` int(10) NOT NULL AUTO_INCREMENT,
  `nameAdmin` varchar(255) NOT NULL,
  `passwordAdmin` varchar(255) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`idAdmin`, `nameAdmin`, `passwordAdmin`) VALUES
(4, 'admin', '$2y$10$hNm55AYdRv2fL9OfpVmbCe5QU.VZblkTNOhS/vnewKmZYZLx3Jzrm');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticles` int(10) NOT NULL AUTO_INCREMENT,
  `titleArticles` varchar(255) NOT NULL,
  `auteurArticles` varchar(255) NOT NULL,
  `dateArticles` datetime NOT NULL,
  `textArticles` text NOT NULL,
  `checkedArticles` varchar(20) NOT NULL,
  PRIMARY KEY (`idArticles`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticles`, `titleArticles`, `auteurArticles`, `dateArticles`, `textArticles`, `checkedArticles`) VALUES
(91, 'Un sursaut gamma détecté aux confins de l\'Univers dans la galaxie la plus lointaine connue ?', 'jadsea', '2020-12-17 12:27:33', 'C\'est en effet ce que montre aujourd\'hui via deux publications dans Nature Astronomy une équipe internationale d\'astronomes menés par Linhua Jiang, de l\'Institut Kavli d\'astronomie et d\'astrophysique de l\'université de Pékin, et Nobunari Kashikawa de l\'université de Tokyo. Les chercheurs ont obtenu dans le proche infrarouge des spectres qui confirment ce dont on se doutait déjà avec les observations de Hubble il y a quatre ans, comme l\'expliquait Futura dans le précédent article ci-dessous.\r\n\r\nMais il y a mieux, comme on peut s\'en convaincre en prenant connaissance d\'une de ces publications dont une version est en accès libre, comme l\'autre, dans l\'une des célèbres mémoires scientifiques collectives de la noosphère : arXiv.\r\n\r\nOn le sait, plus un photon a voyagé longtemps dans l\'espace en expansion, plus sa longueur d\'onde aura été étirée par cette expansion, produisant l\'effet d\'un décalage spectral vers le rouge. Les astronomes expliquent maintenant que des photons infrarouges provenant de GN-z11 semblent être, à l\'origine, ceux d\'un flash de lumière important dans l\'ultraviolet survenu donc il y a environ 13,4 milliards d\'années.\r\n\r\nCe flash a duré quelques minutes et ses caractéristiques laissent penser qu\'il s\'agit de la pointe émergée d\'un sursaut gamma survenu dans GN-z1. Il s\'agirait donc d\'un sursaut gamma long, le type de GRB (gamma-ray bursts) que l\'on pense résulter de l\'occurrence de supernovas de type Ib et Ic. Si tel est bien le cas, les chercheurs en concluent que les « résultats suggèrent également que le taux d\'événements de type GRB pourrait être très élevé dans l\'univers primitif, impliquant une formation rapide de galaxies. Des détecteurs de GRB plus sensibles pourront observer directement ces GRB dans le futur, et sonder l\'époque précoce de la réionisation cosmique ».', 'Publique'),
(97, 'Fortnite : Le dernier mode temporaire veut séduire les joueurs d\'Among Us', 'lekikoudu92', '2020-12-19 16:06:48', 'Fortnite accueille depuis peu le mode temporaire L\'Espion Intérieur. Sous ce nom, une approche nouvelle pour le jeu d\'Epic, très similaire à celle des Loups-Garous de Thiercelieux. Il y a des traîtres dans votre équipe et vous devez les identifier avant qu\'ils n\'aient éliminé tout le monde. Oui, cela rappelle forcément un autre jeu, un certain Among Us qui, deux ans après sa sortie, est devenu un phénomène, désormais dispo sur Switch. L\'esprit reste néanmoins un peu plus Guerre Froide cartoonesque.\r\n\r\nVoici le descriptif d\'une partie selon le site officiel :\r\n\r\nAu début de la partie, chaque joueur sait uniquement dans quelle équipe il se trouve. L\'identité de tous les autres joueurs est dissimulée.\r\nDeux joueurs, les espions, essaient d\'éliminer les autres joueurs sans trahir leur identité. Ils doivent y parvenir avant que le reste du groupe accomplisse ses objectifs.\r\nHuit joueurs, les agents, unissent leurs forces pour identifier les espions et votent pour les éliminer avant qu\'ils ne les éliminent eux-mêmes. Pour gagner, les agents doivent ramasser des pièces d\'or, qui s\'obtiennent en accomplissant des objectifs.\r\nLes joueurs ne peuvent pas se parler en utilisant la discussion vocale, sauf lors des réunions.\r\nLes joueurs peuvent convoquer des réunions quand ils soupçonnent un autre joueur d\'être un espion. À ce moment-là, ils peuvent se parler et discuter de la personne en question. Ils peuvent alors décider de voter pour l\'exclure, ce qui l\'élimine de la partie. Les espions doivent donc faire preuve de prudence s\'ils ne veulent pas éveiller les soupçons !', 'Publique'),
(98, 'Netflix : 3 films plaisants et bien menés voir ou revoir ce week-end', 'lekikoudu92', '2020-12-19 16:07:38', 'Quels bons films voir ou revoir sur Netflix ce week-end ?\r\nUn bonne comédie dramatique  : The Edge of Seventeen\r\nLe film en résumé\r\n\r\nNadine vit une crise existentielle. Comme beaucoup de lycéennes, l\'adolescente cynique trouve sa vie insupportable. Quand sa meilleure amie entame une relation amoureuse avec son grand frère, la seule amitié de la jeune fille est mise en péril.\r\n\r\nL’avis de la rédaction CNET France\r\n\r\nPour ses débuts derrière la caméra, la réalisatrice américaine Kelly Fremon Craig offre une belle addition au genre des films pour adolescents. The Edge of Seventeen, film indépendant qui a sauté la case cinéma en France, est une œuvre rafraîchissante.\r\n\r\nIl raconte l\'histoire de Nadine (Hailee Steinfield), adolescente de 17 ans dramatique et égocentrique à souhait. Pour sa défense, la vie de lycéenne en quête d’elle-même n’est pas simple, surtout que son père vient de décéder. Les émotions et les hormones travaillent, il faut trouver sa place dans le monde, sans trop décevoir son entourage.\r\n\r\nPour Nadine, le coup de grâce arrive quand son unique amie, la pétillante Haley Lu Richardson, commence à sortir avec son insupportable grand frère. Dès lors, le cocon confortable dans lequel elle s’était réfugiée se fissure petit à petit.', 'Vérification');

-- --------------------------------------------------------

--
-- Structure de la table `save`
--

DROP TABLE IF EXISTS `save`;
CREATE TABLE IF NOT EXISTS `save` (
  `idSave` int(10) NOT NULL AUTO_INCREMENT,
  `idUser` int(10) NOT NULL,
  `idArticles` int(10) NOT NULL,
  PRIMARY KEY (`idSave`),
  KEY `idUser` (`idUser`),
  KEY `idArticles` (`idArticles`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `save`
--

INSERT INTO `save` (`idSave`, `idUser`, `idArticles`) VALUES
(36, 41, 91);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(10) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `firstNameUser` varchar(100) NOT NULL,
  `lastNameUser` varchar(100) NOT NULL,
  `emailUser` varchar(100) NOT NULL,
  `passwordUser` varchar(256) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `pseudo`, `firstNameUser`, `lastNameUser`, `emailUser`, `passwordUser`) VALUES
(41, 'lekikoudu92', 'Rillot', 'Kevin', 'kikou@gmail.com', '$2y$10$/7tRXG3VJ6Br0JIW727Rzu5wTfBYnV.gqj56xBpN0l9k9LyPYHUC6'),
(42, 'jadsea', 'Jade', 'Laroche', 'jade@gmail.com', '$2y$10$qg4SOUwMhJUcd9M0AfIN/.KFAUcPHbm.FNVS4y9lXp5KnZPgZGAhm');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `save`
--
ALTER TABLE `save`
  ADD CONSTRAINT `save_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON UPDATE CASCADE,
  ADD CONSTRAINT `save_ibfk_2` FOREIGN KEY (`idArticles`) REFERENCES `articles` (`idArticles`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
