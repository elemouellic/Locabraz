-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 avr. 2023 à 22:08
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `locabraz`
--

-- --------------------------------------------------------

--
-- Structure de la table `articlegallerie`
--

CREATE TABLE `articlegallerie` (
  `idPhotoarticle` int(11) NOT NULL,
  `photolink` varchar(100) DEFAULT NULL,
  `alt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articlegallerie`
--

INSERT INTO `articlegallerie` (`idPhotoarticle`, `photolink`, `alt`) VALUES
(20, 'public/img/articles/643fed6fa2775.jpg', 'vieux bâteau bleu à quai'),
(21, 'public/img/articles/643feea92f2b7.jpg', 'Chemin en bois en bord de côte'),
(22, 'public/img/articles/643ff02c9acec.jpg', 'maison dans la campagne finisterienne'),
(23, 'public/img/articles/643ff6f2a9f60.jpg', 'côte sauvage du Finistère'),
(24, 'public/img/articles/643ff74e78293.jpg', 'ville close de Concarneau'),
(25, 'public/img/articles/6442825039522.jpg', 'dffd!ù*');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `idArticles` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `publishdate` date NOT NULL,
  `idPhotoarticle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticles`, `title`, `content`, `publishdate`, `idPhotoarticle`) VALUES
(13, 'Sortir dans le Finistère Sud', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat  ', '2023-02-01', 20),
(14, 'Les sept plus beaux endroits de Bretagne Sud', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat ', '2023-03-04', 21),
(15, 'Visiter l\'arrière pays', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat', '2023-03-22', 22),
(17, 'Les cinq plus belles plages de Bretagne Sud', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat ', '2023-04-02', 23),
(18, 'Visiter les cités de charmes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat ', '2023-04-22', 24);

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE `bookings` (
  `idBookings` int(11) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `persons` tinyint(4) NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `payment` tinyint(1) NOT NULL,
  `idRentals` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bookings`
--

INSERT INTO `bookings` (`idBookings`, `arrival`, `departure`, `persons`, `amount`, `payment`, `idRentals`, `email`) VALUES
(7, '2023-04-24', '2023-04-29', 2, '400.00', 0, 34, 'utilisateur@locabraz.com');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `idMessages` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `postdate` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`idMessages`, `name`, `firstname`, `email`, `subject`, `message`, `postdate`, `status`) VALUES
(26, 'Utilisateur', 'Test', 'utilisateur@locabraz.com', 'Demande d&#039;informations', 'Je souhaiterai louer un appartement pour profiter du beau soleil breton', '2023-04-22 15:53:22', 0);

-- --------------------------------------------------------

--
-- Structure de la table `rentalgallerie`
--

CREATE TABLE `rentalgallerie` (
  `idPhotorental` int(11) NOT NULL,
  `photolink` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rentalgallerie`
--

INSERT INTO `rentalgallerie` (`idPhotorental`, `photolink`, `alt`) VALUES
(101, 'public/img/rentals/643fd3a093f3c.jpg', 'salon avec kitchenette'),
(102, 'public/img/rentals/643fd3a095756.jpg', 'salon avec canapé devant un téléviseur'),
(103, 'public/img/rentals/643fd3a09883c.jpg', 'salon avec tapisserie facçon mur de brique'),
(104, 'public/img/rentals/643fd3a09af8b.jpg', 'kitchenette équipée'),
(105, 'public/img/rentals/643fd3a09c5d9.jpg', 'chambre à coucher avec lumières d\'ambiance'),
(106, 'public/img/rentals/643fd57aa28a3.jpg', 'salon avec canapé devant téléviseur, mur rouge avec macramé décoratif'),
(107, 'public/img/rentals/643fd57aa4661.jpg', 'salon et salle à manger'),
(108, 'public/img/rentals/643fd57aa688e.jpg', 'kitchenette moderne équipée'),
(109, 'public/img/rentals/643fd57aa8e36.jpg', 'salon avec lampe sur trépied'),
(110, 'public/img/rentals/643fd57aaa85b.jpg', 'chambre avec palette en tête de lit'),
(111, 'public/img/rentals/643fd689415b6.jpg', 'salon avec kitchenette tapisserie style mur de briques'),
(112, 'public/img/rentals/643fd68948d4c.jpg', 'kitchenette équipée avec mange debout'),
(113, 'public/img/rentals/643fd6894ae2b.jpg', 'kitchenette ambiance rétro'),
(114, 'public/img/rentals/643fd6894d62a.jpg', 'machine à expresso rétro'),
(115, 'public/img/rentals/643fd6894f73a.jpg', 'chambre à coucher style scandinave avec lumière d\'ambiance'),
(116, 'public/img/rentals/643fd7b260f7a.jpg', 'salon avec mur rouge et macramé au mur'),
(117, 'public/img/rentals/643fd7b264267.jpg', 'ambiance chaleureuse avec lampe trépied'),
(118, 'public/img/rentals/643fd7b26624d.jpg', 'canapé gris dans salon'),
(119, 'public/img/rentals/643fd7b268498.jpg', 'kitchenette équipée avec mange debout'),
(120, 'public/img/rentals/643fd7b269d5e.jpg', 'chambre avec tête de lit en palette, ambiance cocon'),
(121, 'public/img/rentals/643fd88963836.jpg', 'télévision sous mansarde'),
(122, 'public/img/rentals/643fd88965ebb.jpg', 'kitchenette équipée'),
(123, 'public/img/rentals/643fd889677ca.jpg', 'espace salon avec lit banquette'),
(124, 'public/img/rentals/643fd8896a4ce.jpg', 'entrée studio sous les toits'),
(125, 'public/img/rentals/643fd8896d1b7.jpg', 'lit banquette déplié'),
(126, 'public/img/rentals/643fd9466ad95.jpg', 'lit sous mansarde avec kitchenette équipée'),
(127, 'public/img/rentals/643fd9466de38.jpg', 'lit avec deux chaises en rotin'),
(128, 'public/img/rentals/643fd9466feb1.jpg', 'télévision sous fenêtre de toit'),
(129, 'public/img/rentals/643fd946725d2.jpg', 'kitchenette moderne équipée'),
(130, 'public/img/rentals/643fd9467540c.jpg', 'chaises en rotin avec ambiance cocon');

-- --------------------------------------------------------

--
-- Structure de la table `rentals`
--

CREATE TABLE `rentals` (
  `idRentals` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rooms` tinyint(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rentals`
--

INSERT INTO `rentals` (`idRentals`, `type`, `rooms`, `description`) VALUES
(33, 'Pied à terre dans le centre de Quimperlé', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat'),
(34, 'Studio de charme à Tréméven', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat  '),
(35, 'Studio équipé dans le centre de Quimperlé', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat '),
(36, 'Appartement de charme à Tréméven', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat '),
(37, 'Petit studio à 10 minutes de la plage', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat '),
(38, 'Studio de charme pour les vacances', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat  ');

-- --------------------------------------------------------

--
-- Structure de la table `representer`
--

CREATE TABLE `representer` (
  `idRentals` int(11) NOT NULL,
  `idPhotorental` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `representer`
--

INSERT INTO `representer` (`idRentals`, `idPhotorental`) VALUES
(33, 101),
(33, 102),
(33, 103),
(33, 104),
(33, 105),
(34, 106),
(34, 107),
(34, 108),
(34, 109),
(34, 110),
(35, 111),
(35, 112),
(35, 113),
(35, 114),
(35, 115),
(36, 116),
(36, 117),
(36, 118),
(36, 119),
(36, 120),
(37, 121),
(37, 122),
(37, 123),
(37, 124),
(37, 125),
(38, 126),
(38, 127),
(38, 128),
(38, 129),
(38, 130);

-- --------------------------------------------------------

--
-- Structure de la table `_user`
--

CREATE TABLE `_user` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zipcode` mediumint(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `_user`
--

INSERT INTO `_user` (`email`, `name`, `firstname`, `phone`, `address`, `zipcode`, `password`, `admin`) VALUES
('admin@locabraz.com', 'Admin', 'Admin', '0600000000', 'Adresse Admin', 56000, '$2y$10$jtO/GVbuE2hxgzgKr.vaIeFgzmA5nkPwr4eZdofVk1vghy1j5mb8a', 1),
('utilisateur@locabraz.com', 'Utilisateur', 'Test', '0600000000', 'Rue du Test', 56000, '$2y$10$sJ7XcnX43GiLkr9ZuqMtVOkxppXnmSltS/Pgoa967w3li2mSNet3O', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articlegallerie`
--
ALTER TABLE `articlegallerie`
  ADD PRIMARY KEY (`idPhotoarticle`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idArticles`),
  ADD KEY `idPhotoarticle` (`idPhotoarticle`);

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`idBookings`),
  ADD KEY `idRentals` (`idRentals`),
  ADD KEY `email` (`email`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idMessages`);

--
-- Index pour la table `rentalgallerie`
--
ALTER TABLE `rentalgallerie`
  ADD PRIMARY KEY (`idPhotorental`);

--
-- Index pour la table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`idRentals`);

--
-- Index pour la table `representer`
--
ALTER TABLE `representer`
  ADD PRIMARY KEY (`idRentals`,`idPhotorental`),
  ADD KEY `idPhotorental` (`idPhotorental`);

--
-- Index pour la table `_user`
--
ALTER TABLE `_user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articlegallerie`
--
ALTER TABLE `articlegallerie`
  MODIFY `idPhotoarticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `idArticles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `idBookings` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `idMessages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `rentalgallerie`
--
ALTER TABLE `rentalgallerie`
  MODIFY `idPhotorental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT pour la table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `idRentals` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`idPhotoarticle`) REFERENCES `articlegallerie` (`idPhotoarticle`);

--
-- Contraintes pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`idRentals`) REFERENCES `rentals` (`idRentals`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`email`) REFERENCES `_user` (`email`);

--
-- Contraintes pour la table `representer`
--
ALTER TABLE `representer`
  ADD CONSTRAINT `representer_ibfk_1` FOREIGN KEY (`idRentals`) REFERENCES `rentals` (`idRentals`),
  ADD CONSTRAINT `representer_ibfk_2` FOREIGN KEY (`idPhotorental`) REFERENCES `rentalgallerie` (`idPhotorental`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
