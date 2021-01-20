-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 26 août 2019 à 14:37
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `unbee`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id` int(11) NOT NULL,
  `Titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `effect` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taille` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `police` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `temps` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tbl_article`
--

INSERT INTO `tbl_article` (`id`, `Titre`, `contenu`, `date`, `effect`, `taille`, `police`, `temps`) VALUES
(1, 'Titre 1 ', 'Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.', '2019-06-13', 'fadeInLeft', '28px', ' customBoldActive ', 5),
(2, 'Titre 2 ', 'Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.', '2019-06-13', 'fadeInRight', '28px', ' customItalicActive ', 0),
(3, 'Titre 3 ', 'Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.', '2019-06-13', 'fadeInLeft', '28px', ' customBoldActive ', 0),
(4, 'Titre 4 ', 'Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.', '2019-06-13', 'fadeInRight', '28px', ' customItalicActive ', 0),
(5, 'ghdffghhfhdgf', 'hfghdf', '2019-06-14', '', '', '', 0),
(6, '  bnnfnb', 'nbcvnbbnvc', '2019-06-15', '', '', '', 0),
(7, 'nvbnvbcnbv', 'vbncnvbccvbn', '2019-06-15', '', '', '', 0),
(8, 'nbvcnbvcbnvc', 'bncvnbvnvbc', '2019-06-15', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_banderole`
--

CREATE TABLE `tbl_banderole` (
  `id` int(11) NOT NULL,
  `texte_banderole` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `temps` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tbl_banderole`
--

INSERT INTO `tbl_banderole` (`id`, `texte_banderole`, `date`, `temps`) VALUES
(1, 'Banderole', '0000-00-00', 5),
(2, 'aaaaa', '0000-00-00', 0),
(3, 'bbbb', '0000-00-00', 0),
(4, 'vcxvccvw', '0000-00-00', 0),
(5, 'xcvvwxcxc', '0000-00-00', 0),
(6, 'cccc', '0000-00-00', 0),
(7, 'dssd', '0000-00-00', 0),
(8, 'aaaaa', '0000-00-00', 0),
(9, 'bbb', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_diaporama`
--

CREATE TABLE `tbl_diaporama` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `temps` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tbl_diaporama`
--

INSERT INTO `tbl_diaporama` (`id`, `img`, `temps`) VALUES
(1, 'img/1560446616.jpg', 5),
(2, 'img/1565784707.jpg', 0),
(3, 'img/1566066551.jpg', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_banderole`
--
ALTER TABLE `tbl_banderole`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_diaporama`
--
ALTER TABLE `tbl_diaporama`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tbl_banderole`
--
ALTER TABLE `tbl_banderole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `tbl_diaporama`
--
ALTER TABLE `tbl_diaporama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
