-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Avril 2015 à 17:21
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tchat`
--
CREATE DATABASE IF NOT EXISTS `tchat` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tchat`;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(10) unsigned NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1158 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `user`, `date`, `message`, `id_user`) VALUES
(1111, 'Alex', '2015-04-09 15:19:19', 'salut tt le monde', 0),
(1112, 'amadou', '2015-04-09 15:19:28', 'salut pd', 0),
(1113, 'amadou', '2015-04-09 15:19:36', 'ca va pute', 0),
(1114, 'amadou', '2015-04-09 15:19:36', 'ca va pute', 0),
(1115, 'amadou', '2015-04-09 15:19:40', 'pÃ©dÃ©', 0),
(1116, 'amadou', '2015-04-09 15:19:40', 'pÃ©dÃ©', 0),
(1117, 'amadou', '2015-04-09 15:19:40', 'pÃ©dÃ©', 0),
(1118, 'amadou', '2015-04-09 15:19:40', 'pÃ©dÃ©', 0),
(1119, 'Alex', '2015-04-09 15:19:40', 'moi m''appeler alex ;)', 0),
(1120, 'Alex', '2015-04-09 15:19:40', 'moi m''appeler alex ;)', 0),
(1121, 'amadou', '2015-04-09 15:19:48', ';)', 0),
(1122, 'amadou', '2015-04-09 15:19:48', ';)', 0),
(1123, 'amadou', '2015-04-09 15:19:48', ';)', 0),
(1124, 'amadou', '2015-04-09 15:19:48', ';)', 0),
(1125, 'amadou', '2015-04-09 15:19:48', ';)', 0),
(1126, 'amadou', '2015-04-09 15:19:48', ';)', 0),
(1127, 'amadou', '2015-04-09 15:19:48', ';)', 0),
(1128, 'amadou', '2015-04-09 15:19:48', ';)', 0),
(1129, 'Alex', '2015-04-09 15:20:03', ':D', 0),
(1130, 'Alex', '2015-04-09 15:20:03', ':D', 0),
(1131, 'Alex', '2015-04-09 15:20:03', ':D', 0),
(1132, 'Alex', '2015-04-09 15:20:03', ':D', 0),
(1133, 'Ro', '2015-04-09 15:20:08', ':D >< >> o.o O.O :( <3) u< :* oo'' <$ T-T ;) :x', 0),
(1134, 'Alex', '2015-04-09 15:20:19', ':D', 0),
(1135, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1136, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1137, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1138, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1139, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1140, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1141, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1142, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1143, 'Alex', '2015-04-09 15:20:26', ':)', 0),
(1144, 'Ro', '2015-04-09 15:20:29', ':D >< >> o.o O.O :( <3) u< :* oo'' <$ T-T ;) :x', 0),
(1145, 'Ro', '2015-04-09 15:20:29', ':D >< >> o.o O.O :( <3) u< :* oo'' <$ T-T ;) :x', 0),
(1146, 'Ro', '2015-04-09 15:20:42', ':D >< >> o.o O.O :( <3) >u< :* oo'' <$ T-T ;) :x', 0),
(1147, 'Ro', '2015-04-09 15:20:42', ':D >< >> o.o O.O :( <3) >u< :* oo'' <$ T-T ;) :x', 0),
(1148, 'Ro', '2015-04-09 15:20:42', ':D >< >> o.o O.O :( <3) >u< :* oo'' <$ T-T ;) :x', 0),
(1149, 'Ro', '2015-04-09 15:20:42', ':D >< >> o.o O.O :( <3) >u< :* oo'' <$ T-T ;) :x', 0),
(1150, 'Ro', '2015-04-09 15:21:01', ':D ', 0),
(1151, 'Ro', '2015-04-09 15:21:01', ':D ', 0),
(1152, 'Ro', '2015-04-09 15:21:01', ':D ', 0),
(1153, 'Ro', '2015-04-09 15:21:01', ':D ', 0),
(1154, 'Ro', '2015-04-09 15:21:01', ':D ', 0),
(1155, 'Ro', '2015-04-09 15:21:01', ':D ', 0),
(1156, 'Ro', '2015-04-09 15:21:01', ':D ', 0),
(1157, 'Ro', '2015-04-09 15:21:01', ':D ', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mot_de_passe` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1158;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
