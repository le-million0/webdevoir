-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 31 Mars 2021 à 10:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tourisme`
--

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

CREATE TABLE IF NOT EXISTS `presence` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateArrivee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `presence`
--

INSERT INTO `presence` (`nom`, `prenom`, `dateArrivee`) VALUES
('Kone', 'Jean-Parfait ibra', '2021-03-13'),
('couli', 'soro', '2021-03-29'),
('oikjhfgd', '^poiuytg', '2021-03-17'),
('Kone', 'Jean-Parfait ibra', '2021-03-22'),
('parfait', 'Jean-Parfait ibra', '2021-03-29');

-- --------------------------------------------------------

--
-- Structure de la table `tourisme`
--

CREATE TABLE IF NOT EXISTS `tourisme` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE IF NOT EXISTS `visiteur` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `nom`, `prenom`, `dateNaissance`, `sexe`, `contact`, `lieu`, `email`) VALUES
(1, 'kone', 'parfait', '2021-03-03', 'H', 125478589, 'Abidjan', 'diebryan8@gmail.com'),
(2, 'kone', 'jean-parfait', '2021-03-03', 'H', 125478589, 'man', 'diebryan8@gmail.com'),
(3, 'Jean-Parfait', 'jean-parfait', '2021-03-05', 'F', 125478589, 'man', 'diebryan8@gmail.com'),
(4, '', '', '0000-00-00', 'H', 0, '', ''),
(5, 'Jean-Parfait', 'jean-parfait', '2021-04-01', 'F', 125478589, 'zaaa', 'parfaitcampers@gmail.com'),
(6, 'Jean-Parfait', 'jean-parfait', '2021-03-04', 'H', 12547858, 'Abidjan', 'parfaitcampers@gmail.com'),
(7, 'Jean-Parfait', 'parfait', '2021-04-02', 'H', 15, 'Abidjan', 'diebryan8@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

CREATE TABLE IF NOT EXISTS `visiteurs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `visiteurs`
--

INSERT INTO `visiteurs` (`id`, `nom`, `prenom`, `dateNaissance`, `sexe`, `contact`, `lieu`, `email`) VALUES
(8, 'kone', 'jean-parfait', '2021-03-26', 'H', 125478589, 'Abidjan', 'parfaitcampers@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
