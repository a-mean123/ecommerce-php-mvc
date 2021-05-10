-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 26 mai 2020 à 23:17
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `description`, `image`, `date`) VALUES
(2, 'titre de produit 2', 'google play cards 5$-100$', 'cf8d667c5e2a6a29ba90d5c346594d3a.jpg', '1970-01-01 10:00:00am'),
(5, 'titre de produit 1', 'google play cards 5$-100$', '82eeab0c1b162bfc20a3c3f190652a37.jpg', '1970-01-01 10:00:00am'),
(6, 'text1', 'description 111', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lastname`, `email`, `phone`, `message`) VALUES
(4, 'asma', 'asma', 'asma@gmail.com', '+21692601629', 'hello this is my message'),
(5, 'basma', 'basma', 'basma@gmail.com', '2175538714', 'heyyyyy');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `titre`, `description`, `image`, `prix`) VALUES
(1, 'titre de produit 1', 'google play cards 5$-100$', 'c46fb56ce54450ab53f916f2698006e2.jpg', '52'),
(2, 'titre de produit 2', 'description de produit 1', '636a8160de4a47da26f750993aa1d02e.png', '52'),
(3, 'titre de produit 2', 'description de produit 1', 'd78f1a576241d3ce7b6db73db30b9204.jpg', '175'),
(4, 'projet de fin d\'etude', 'fds', '9a8caca79c2905fe7c26450252b26d12.jpg', '52'),
(5, 'product 1', 'desc p1', '', '52'),
(6, 'kjhfdg', 'kjhgh', '', '52');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'asma', 'asma', '2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
