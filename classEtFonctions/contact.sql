CREATE DATABASE carnet;
USE carnet;
--
-- Base de données : `carnet`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idcontact` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `num` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`idcontact`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `contact` (`idcontact`, `nom`, `prenom`, `num`, `mail`, `adresse`) VALUES
(1, 'Doe', 'Jane', '0679578045', 'jane@li.com', 'quelque part en nouvelle orleans'),
(2, 'March', 'Jonny', '069582378', 'jonny@li.com', 'là bas'),
(5, 'Robert', 'Elise', '069785658', 'elise@li.com', 'dans le fin fond du trou du monde'),
(6, 'Moussa', 'Laila', '069783685', 'laila@li.com', 'Ici même'),
(8, 'Quinn', 'Harley', '026234569', 'harley@li.com', 'Los Angeles');
COMMIT;
