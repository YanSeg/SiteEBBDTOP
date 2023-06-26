-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 juin 2023 à 17:07
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bddecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `idcategories` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idcategories`, `category`, `name`) VALUES
(1, 1, 'mammal'),
(2, 2, 'insect');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `idcustomers` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`idcustomers`, `first_name`, `last_name`, `email`) VALUES
(1, 'Martin', 'Vasseur', 'martinvasseur@laposte.net'),
(7, 'FX', 'sansMS', 'fx@gmail.com'),
(8, 'FX', 'sansMS', 'fx@gmail.com'),
(9, 'FX', 'sansMS', 'fx@gmail.com'),
(10, 'FX', 'sansMS', 'fx@gmail.com'),
(11, 'FX', 'sansMS', 'fx@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `idorders` int(11) NOT NULL,
  `number` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `total_price` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `customers_idcustomers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `idproducts` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `delivery` int(11) DEFAULT NULL,
  `image_url` varchar(150) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `available` tinyint(4) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `categories_idcategories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`idproducts`, `name`, `price`, `weight`, `delivery`, `image_url`, `stock`, `available`, `description`, `categories_idcategories`) VALUES
(1, 'Chien', 300000, 7000, 3000, 'http://localhost/Module1/image/dog.png', 22, 1, 'Lorem ipsum dolor sit amet. Est nostrum omnis ut nesciunt fugiat a delectus magni ut perferendis debitis aut tenetur dolores. Non sequi quas ut minus quae qui consequatur adipisci qui sint molestiae ex dolorum voluptatem. Est quis quibusdam et perferendis accusantium ad beatae asperiores aut tenetur modi et saepe rerum eum sunt pariatur.\r\n\r\nAd repudiandae tempore qui explicabo velit ut quia officiis sed repellat molestiae. Ut debitis odio aut sunt vitae ut consequatur illo eos consectetur quasi aut enim ipsum et dolorem consequuntur ad earum omnis.\r\n\r\nEum recusandae galisum hic delectus placeat nam quaerat pariatur. Eum error ipsam aut nesciunt voluptatem sit voluptates neque a nulla internos aut expedita rerum qui animi accusantium!', 1),
(2, 'Cocinelle', 3000, 3, 300, 'http://localhost/Module1/image/coci.png', 3674, 1, 'On l’appelle la bête à bon dieu ou encore la demoiselle : c’est la coccinelle européenne.', 2),
(3, 'Chat', 170000, 3000, 30000, 'http://localhost/Module1/image/cat.png', 17, 1, 'Dans ce cas je connais un gentil petit chaton qui va dormir avec maman ce soir.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `products_has_orders`
--

CREATE TABLE `products_has_orders` (
  `products_idproducts` int(11) NOT NULL,
  `orders_idorders` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `transporters`
--

CREATE TABLE `transporters` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `case1` int(11) NOT NULL,
  `case2` int(11) NOT NULL,
  `case3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `transporters`
--

INSERT INTO `transporters` (`id`, `name`, `case1`, `case2`, `case3`) VALUES
(1, 'chonopost', 1545, 3000, 0),
(2, 'poste', 300, 510, 10000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idcategories`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`idcustomers`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idorders`),
  ADD KEY `fk_orders_customers1_idx` (`customers_idcustomers`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproducts`),
  ADD KEY `fk_products_categories1_idx` (`categories_idcategories`);

--
-- Index pour la table `products_has_orders`
--
ALTER TABLE `products_has_orders`
  ADD PRIMARY KEY (`products_idproducts`,`orders_idorders`),
  ADD KEY `fk_products_has_orders_orders1_idx` (`orders_idorders`),
  ADD KEY `fk_products_has_orders_products_idx` (`products_idproducts`);

--
-- Index pour la table `transporters`
--
ALTER TABLE `transporters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `idcategories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `idcustomers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `idorders` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `idproducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customers1` FOREIGN KEY (`customers_idcustomers`) REFERENCES `customers` (`idcustomers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories1` FOREIGN KEY (`categories_idcategories`) REFERENCES `categories` (`idcategories`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `products_has_orders`
--
ALTER TABLE `products_has_orders`
  ADD CONSTRAINT `fk_products_has_orders_orders1` FOREIGN KEY (`orders_idorders`) REFERENCES `orders` (`idorders`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_orders_products` FOREIGN KEY (`products_idproducts`) REFERENCES `products` (`idproducts`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
