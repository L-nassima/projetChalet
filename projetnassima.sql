-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 07 mars 2020 à 16:01
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetnassima`
--

-- --------------------------------------------------------

--
-- Structure de la table `chalet`
--

DROP TABLE IF EXISTS `chalet`;
CREATE TABLE IF NOT EXISTS `chalet` (
  `id_chalet` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `chalet` varchar(250) NOT NULL,
  `massif` varchar(250) NOT NULL,
  `station` varchar(250) NOT NULL,
  `Nb_Pers` int(11) NOT NULL,
  `description` text NOT NULL,
  `services` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `duree_sejour` varchar(100) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `image4` varchar(250) NOT NULL,
  `image5` varchar(250) NOT NULL,
  `image6` varchar(520) NOT NULL,
  `condition_une` text NOT NULL,
  `condition_deux` text NOT NULL,
  `condition_trois` text NOT NULL,
  `condition_quatre` text NOT NULL,
  `condition_cinq` text NOT NULL,
  `prestation_une` text NOT NULL,
  `prestation_deux` text NOT NULL,
  `prestation_trois` text NOT NULL,
  `prestation_quatre` text NOT NULL,
  `prestation_cinq` text NOT NULL,
  `prestation_six` text NOT NULL,
  `info_une` text NOT NULL,
  `info_deux` text NOT NULL,
  `info_trois` text NOT NULL,
  `info_quatre` text NOT NULL,
  `info_cinq` text NOT NULL,
  `info_six` text NOT NULL,
  `promotions` varchar(255) DEFAULT NULL,
  `best_chalet` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_chalet`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chalet`
--

INSERT INTO `chalet` (`id_chalet`, `name`, `chalet`, `massif`, `station`, `Nb_Pers`, `description`, `services`, `price`, `duree_sejour`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `condition_une`, `condition_deux`, `condition_trois`, `condition_quatre`, `condition_cinq`, `prestation_une`, `prestation_deux`, `prestation_trois`, `prestation_quatre`, `prestation_cinq`, `prestation_six`, `info_une`, `info_deux`, `info_trois`, `info_quatre`, `info_cinq`, `info_six`, `promotions`, `best_chalet`) VALUES
(1, 'Chalet La Joue du Loup', 'chalet1.jpg', 'Alpes du Nord', 'Les Arcs', 2, '\"Chalet La Joue du Loup\" est un chalet Situés à proximité immédiate du coeur de la station avec tous les commerces (300 m), face à la vallée d\'Agnières avec une vue imprenable sur le massif du Grand Ferrand. A noter : accès inclus à la piscine couverte chauffée et au sauna, Le Domaine des Gentianes est idéal pour des vacances en famille ou entre amis au grand air.', 'sauna-jacuzzi', 700, '4 jours', 'chalet1-1.jpg', 'chalet1-2.jpg', 'chalet1-3.jpg', 'chalet1-4.jpg', 'chalet1-5.jpg', 'chalet1-6.jpg', '- Plus de 60 jours : 20%', '- De 60 à 31 jours : 30%', '- De 30 à 15 jours : 75%', '- De 14 à 8 jours : 90%', '- Moins de 8 jours : 100%', 'La location et les charges d\'électricité et d\'eau.', 'Espace détente (en accès libre de 10h à 20h) avec piscine chauffée couverte (6x12m), sauna.', 'Télévision.', 'Parking extérieur, 1 par logement, 72 places, 100 m.', 'Equipement bébé lit, chaise (sur demande et selon disponibilité).', 'WIFI.', 'Saut à l\'élastique', 'Equitation', 'Escalade', 'Golf', 'Tennis', 'Cinéma', '30', NULL),
(2, 'Chalet Combloux', 'chalet2.jpg', 'Alpes du Sud', 'Les Orres', 5, 'Chalet Combloux,, se trouve dans le centre du village de Combloux. Il a été construit dans le pure respect des traditions montagnardes, avec ses matériaux de bois et de pierres. Vous séjournerez dans de luxueux appartements, ou dans des demi-chalets, très bien agencés, avec une vue imprenable sur les montagnes verdoyantes. Lors de vos vacances à Combloux , détendez vous à la piscine de la résidence, ou encore au SPA « SNÖ Eternelle » ... Vous pourrez vous garer au parking couvert de la résidence (en supplément).', 'jacuzzi', 900, '7 jours', 'chalet2-1.jpg', 'chalet2-2.jpg', 'chalet2-3.jpg', 'chalet2-4.jpg', 'chalet2-5.jpg', 'chalet2-6.jpg', '- Plus de 60 jours : 20%.', '- De 60 à 30 jours : 30%.', '- De 29 à 15 jours : 60%.', '- De 14 à 8 jours : 75%.', '- Moins de 8 jours : 100%.', 'La location et les charges d\'électricité et d\'eau.', 'Télévision écran plat.', 'Equipement bébé lit, chaise, baignoire (sur demande et selon disponibilité) : semaine/logement.', 'Linge de lit.', 'Jacuzzi et SPA. ', 'Parking extérieur.', 'VTT', 'Saut à l\'élastique', 'Golf', '\r\nTir à l\'arc', 'Randonnées', 'Cinéma', '40', NULL),
(3, 'Chalet Pra Loup', 'chalet3.jpg', 'Vosges', 'La bresse', 6, 'Suffisamment à l\'écart du centre station de Pra Loup 1500 les Molanès pour bénéficier du calme, vous ne serez qu\'à 800 mètres des commodités et commerces.  le Chalets est confortable et lumineux de par son exposition Sud-Est. Il  dispose d\'un balcon et d\'une terrasse. Vous apprécierez les nombreuses randonnées et loisirs proposés par la station. L\'été, le parc du Mercantour est à découvrir absolument.', 'piscine', 850, '4 jours', 'chalet3-1.jpg', 'chalet3-2.jpg', 'chalet3-3.jpg', 'chalet3-4.jpg', 'chalet3-5.jpg', 'chalet3-6.jpg', '- Plus de 30 jours : 20%.\r\n\r\n\r\n', '- De 30 à 15 jours : 50%.', '- De 14 à 8 jours : 80%.', '- Moins de 8 jours : 100%.', '', 'La location et les charges d\'électricité et d\'eau.\r\n\r\n\r\n', 'Télévision.', 'Équipement bébé lit (sur demande et selon disponibilité).', 'Parking privé extérieur (selon disponibilité).', 'Bois de cheminée.', 'WIFI.', 'Patinoire', 'Parachutisme', 'Randonnées\r\n\r\n', 'Tennis couvert', 'Bibliothèque', 'VTT', '20', NULL),
(4, 'Chalet Peisey-Vallandry', 'chalet4.jpg', 'Valais', 'Verbier', 3, 'Le chalet Peisey-Vallandry est un superbe chalet haut de gamme entièrement neuf composé de 3 étages. Il bénéficie d\'une vue et d\'une situation exceptionnelle. Ce chalet de style contemporain dispose d\'un poêle suédois, de deux salons et d\'un espace de détente avec sauna et hammam, ainsi que d\'un jacuzzi à l\'extérieur. Vous retrouverez les commerces, le centre de la station et les activités à 2.5 km du logement.', 'hammam', 430, '2 jours', 'chalet4-1.jpg', 'chalet4-2.jpg', 'chalet4-3.jpg', 'chalet4-4.jpg', 'chalet4-5.jpg', 'chalet4-6.jpg', '- Plus de 30 jours : 20%\r\n\r\n\r\n\r\n', '- De 30 à 21 jours : 30%.', '- De 20 à 14 jours : 60%.', '- De 13 à 7 jours : 90%.', '- Moins de 7 jours : 100%.', 'La location et les charges d\'électricité et d\'eau.\r\n', 'Parking extérieur (selon disponibilité).', 'Lits faits à l\'arrivée (sur demande).', 'Equipement bébé lit (sur demande et selon disponibilité).', 'Ménage de fin de séjour sauf la cuisine et la vaisselle.', 'Télévision.', 'Randonnées\r\n\r\n\r\n\r\n', 'VTT', 'Equitation', 'Canyoning', 'Escalade', 'Astronomie', '35', NULL),
(6, 'Chalet Superdévoluy', 'chalet6.jpg', 'Alpes du Sud', 'Isola 2000', 2, 'Chalet Superdévoluy est situés à proximité des sentiers de randonnées et à 200 mètres des premiers commerces de la station Superdévoluy. Chalet Superdévoluy bénéfici d\'un emplacement parfait pour passer d\'agréables vacances à la montagne. En accès gratuit : piscine chauffée, bain à remous, sauna, hammam et espace fitness (accessible aux 18 ans et +).', 'sauna', 860, '7 jours', 'chalet6-1.jpg', 'chalet6-2.jpg', 'chalet6-3.jpg', 'chalet6-4.jpg', 'chalet6-5.jpg', 'chalet6-6.jpg', '- Plus de 30 jours : 20%.', '- De 30 à 21 jours : 30%.', '- De 20 à 14 jours : 60%.', '- De 13 à 7 jours : 90%.', '- Moins de 7 jours : 100%.', 'La location et les charges d\'électricité et d\'eau.', 'Linge de lit et de toilette.', 'Lits faits à l\'arrivée.', 'Télévision.', 'Equipement bébé lit, chaise (sur demande et selon disponibilité).', 'Parking extérieur (selon disponibilité).', 'RaftingTir à l\'arc', 'Football', 'VTT', 'Tir à l\'arc', 'Équitation', 'Escalade', '45', 'best'),
(7, 'Chalet Valmeinier', 'chalet7.jpg', 'Alpes du Nord', 'Chamonix', 2, 'Située dans le quartier de la Saussette en contre bas de Valmeinier 1800. Ce Chalet  est disposés sur une pente douce et rythmée par des sapins, situés à quelques minutes du centre de Valmeinier 1800. Dans ce hameau d\'architecture traditionnelle savoyarde, les rues exclusivement piétonnes et les commerces de proximité (boulangerie, libre-service, cafés, restaurants.) s\'organisent autour d\'une petite place centrale dans une ambiance typiquement villageoise. Bois, pierre, confort... Le meilleur de la tradition montagnarde...', 'piscine', 950, '10 jours', 'chalet7-1.jpg', 'chalet7-2.jpg', 'chalet7-3.jpg', 'chalet7-4.jpg', 'chalet7-5.jpg', 'chalet7-6.jpg', '- Plus de 60 jours : 20%.\r\n\r\n\r\n', '- De 60 à 31 jours : 30%.', '- De 30 à 15 jours : 75%.', '- De 14 à 8 jours : 90%.', '\r\n- Moins de 8 jours : 100%.', 'La location et les charges d\'électricité et d\'eau.\r\n\r\n\r\n\r\n', 'Espace détente (en accès libre de 10h à 20h) avec piscine chauffée couverte (6x12m), sauna.', 'Télévision.', 'Parking extérieur, 1 par logement, 72 places, 100 m.', 'Équipement bébé lit, chaise (sur demande et selon disponibilité).', 'WIFI gratuit à la réception.', '\r\nEscalade\r\n\r\n\r\n\r\n', 'Équitation', 'Golf', 'Tennis', 'VTT', 'Cinéma', '10', 'best'),
(8, 'Chalet Vaujany', 'chalet8.jpg', 'Vosges', 'La bresse', 6, 'Le chalet Ysengrin est situé à Vaujany, station village reliée au superbe domaine de l\'Alpe d\'Huez. Des prestations de qualité vous attendent : espace détente avec bain à remous et hammam, wifi, télévision satellite à écran plat, garage et parking privé, séjour avec cheminée... Ce magnifique chalet est inondé de lumière grâce à de grandes fenêtres offrant une vue sur les sommets environnants du \"Dauphiné\". Les remontées mécaniques se trouvent à seulement 250 mètres et le centre du village à 100 mètres où vous trouverez de nombreux magasins, restaurants, épicerie, bars...', 'hammam', 790, '7jours', 'chalet8-1.jpg', 'chalet8-2.jpg', 'chalet8-3.jpg', 'chalet8-4.jpg', 'chalet8-5.jpg', 'chalet8-6.jpg', '- Plus de 30 jours : 20%.\r\n\r\n\r\n\r\n', '- De 30 à 21 jours : 30%.', '- De 20 à 14 jours : 60%.', '- De 13 à 7 jours : 90%.', '- Moins de 7 jours : 100%.', 'La location et les charges d\'électricité et d\'eau.\r\n\r\n\r\n\r\n\r\n\r\n', 'Espace détente avec sauna, hammam, espace fitness.', 'Linge de lit et de toilette.', 'Lits faits à l\'arrivée.', 'Télévision.', 'Parking extérieur (selon disponibilité).', 'Escalade\r\n\r\n\r\n\r\n\r\n\r\n', 'Tennis', 'Équitation', 'VTT', 'Basket-ball', 'Tir à l\'arc', '25', NULL),
(10, 'Chalet Superdévoluy', 'dcab640a62e3857cd698d36ae5d63b57.jpg', 'Alpes du Sud', 'Les Orres', 2, 'La résidence L\'Orée des Pistes est située à 300 m des commerces et à 600 m du centre de la station de Superdévoluy. Vous serez accueillis dans des appartements confortables, chaleureux et bien équipés répartis dans des chalets en bois ou dans des chalets mitoyens individuels. Vous profiterez de la piscine couverte chauffée pour vous relaxez après un longue journée de randonnée.', 'piscine', 1350, '10 jours', 'c81ea7e8cb20e476dd97fe40d1db69c6.jpg', '2b859d75fffafbf21083f225fd7b3df9.jpg', '8d4f2936e8e37275cebabe61997d3afb.jpg', '88b0d278dd3bf87e0225df723643f4d8.jpg', '37bbd7d51fc45325ad4a35b4cebf02a5.jpg', '509f981a16eb1216eeb6f1b47b51295d.jpg', 'Plus de 60 jours : 20%.', 'De 60 à 30 jours : 30%.', 'De 29 à 15 jours : 60%.', 'De 14 à 8 jours : 75%.', 'Moins de 8 jours : 100%.', 'La location et les charges d\'électricité et d\'eau.', 'Linge de lit.', 'Espace détente avec piscine couverte chauffée.', 'Télévision.', 'Parking extérieur, 1 par logement.', 'Bois de cheminée.', 'Equitation', 'Escalade', 'Tennis', 'Basket-ball', 'Cinéma', 'Activité culturelle', '38', NULL),
(11, 'Chalet Brock', 'ca0a11ad34fc267735d3cd7ce661523d.jpg', 'Alpes du Nord', 'La Plagne', 4, 'Très belle location pour 6 personnes à flanc de montagne, dans les alentours des Collons. Ce luxueux chalet, très ensoleillé et lumineux, vous offre une vue panoramique sur la vallée du Rhône, les Alpes Bernoise, et le Cervin. Vous disposerez de 5 chambres avec salle de bain, un séjour avec cheminée, un garage et 3 places de parkings privés, sans oublié le jacuzzi extérieur. Les 200 derniers mètres pour accéder au chalet se font sur un chemin. Le centre des Collons se trouve à 2km, vous y trouverez tous types de commerces, restaurants,...A Thyon 2000, à environ 6km, vous pourrez accéder à un jacuzzi.', 'jacuzzi', 1587, '15 jours', '94fb729da806e81f0dd0167ceaf624e7.jpg', '1e51e16c00dd592242c5ddf4100a5166.jpg', '2fa6610d595177f982c751735ab9c1c9.jpg', 'f0deebf83573a55950e0057dab12a5f3.jpg', 'f6281b58730abfbd192a983308554ff8.jpg', '4467166c8652553eef696b291c08eb29.jpg', 'Plus de 60 jours : 30%.', 'De 60 à 36 jours : 60%.', 'De 35 à 8 jours : 90%.', 'Moins de 8 jours : 100%.', '', 'La location et les charges d\'électricité, d\'eau et de chauffage : semaine/personne.', 'Télévision écran plat.', 'Espace détente avec bain à remous.', 'Parking privé extérieur, 3 places.', 'WIFI.', 'Equipement bébé lit, chaise (sur demande et selon disponibilité).', '', 'Tir à l\'arc', 'Randonnées', 'Tennis', 'Escalade', 'Cinéma', '43', 'best'),
(12, 'Chalet Chamonix', '5c675c2ef6cf32d4f6dc84d56e784e5c.jpg', 'Alpes du Nord', 'Chamonix', 2, 'Le chalet chamonix, d\'une superficie de 160 m², est situé dans le quartier de la Frasse, à 1 km du centre de Chamonix et de l\'ensemble des commerces. Il offre une belle vue sur le massif du Mt Blanc. Un arrêt navette se trouvant à environ 300 mètres facilitera vos déplacements durant votre séjour. Salon avec cheminée, télévision écran plat, satellite, accès internet. Buanderie avec lave linge et sèche linge. Terrasse avec salon de jardin, jardin, parking. A noter : sauna et salle de gym à côté du chalet chamonix en accès payant.', 'sauna', 1250, '7jours', 'b90ae1035c36c20edc5ad483ed5aca0b.jpg', 'dbe5f50351dec182dd4406c0edabf893.jpg', '383fba6e2ef7222844acebc4ed85d806.jpg', '9f885b353dd99df2d8ee7d69a9233fd9.jpg', 'fd75205fa7fc9bea1fae1bcd7eb42c13.jpg', 'c33f560e41e7574ef6c68ab43a89ec95.jpg', 'Plus de 30 jours : acompte non restitué', 'De 30 à 22 jours : 80%.', 'De 21 à 15 jours : 90%.', 'Moins de 15 jours : 100%.', '', 'La location et les charges d\'électricité et d\'eau.', 'Kit d\'entretien.', 'Parking extérieur.', 'Télévision.', 'Equipement bébé lit (sur demande et selon disponibilité).', 'WIFI.', 'Alpinisme', 'Patinoire', 'Tennis', 'Escalade', 'Observatoire', 'Bibliothèque', '52', 'best'),
(13, 'Chalet Les Saisies', '4fd1c33e41fc006617143206fbcbfc60.jpg', 'Alpes du Nord', 'Les Gets', 2, 'Splendide chalet situé à Bisanne 1500, à 100 mètres des pistes du domaine skiable des Saisies (6 km de la station), Le Chalet Artiste, au nom significatif est magnifique, surprenant et très confortable ! Il possède une terrasse exposée sud exceptionnelle, aérienne, offrant une vue panoramique sur le Mont Blanc et montagnes du Beaufortain. ', 'sauna-jacuzzi-hammam', 1245, '7 jours', 'fb446ade5029447b1165d3d5181a00f2.jpg', 'd065abc7ae7bd55dd09d7580fdde2faf.jpg', '941f493233d538ecfe6e28848b56ce38.jpg', '62cea6953356cc2e987c2696afdfb811.jpg', 'b3421a106c6366dafd7d5e9baf221428.jpg', '6121a90a6cfa6040b1556d803c92c67c.jpg', 'Plus de 30 jours : 30%.', 'De 30 à 4 jours : 80%.', 'Moins de 4 jours : 100%.', '', '', 'La location et les charges d\'électricité et d\'eau.', 'Espace détente.', 'Télévision.', 'Animal admis.', 'WIFI.', 'Bois de cheminée.', 'Saut à l\'élastique', 'Escalade', 'VTT', 'Aviation', 'Cinéma', '', '32', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id_comments` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `publication_date` datetime NOT NULL,
  `id_posts` int(11) NOT NULL,
  PRIMARY KEY (`id_comments`),
  KEY `indexPost` (`id_posts`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comments`, `content`, `pseudo`, `publication_date`, `id_posts`) VALUES
(4, 'Semaine parfaite au calme dans un endroit à l\'écart du bruit mais proche du lac.\r\nSemaine parfaite au calme dans un endroit à l\'écart du bruit mais proche du lac.\r\n\r\nExcellent contact avec la propriétaire.\r\nExcellent contact avec la propriétaire.Semaine parfaite au calme dans un endroit à l\'écart du bruit mais proche du lac.\r\n\r\nExcellent contact avec la propriétaire.', 'nassima', '2019-07-28 21:17:41', 6),
(5, 'Beauté du chalet, confort et très pratique car bien situé pour pratiquer ski alpin et ski de fond! Un ravissement avec ses paysages montagneux enneigés! Logement bien équipé! Nous sommes partant pour louer à nouveau l\'année prochaine à la même périod', 'Marie', '2019-07-28 21:54:09', 6),
(8, 'Découverte des Alpes. Nous avons particulièrement apprécié la gentillesse des propriétaires et les prestations du Chalet La Joue du Loup (idéalement situé, climatisation et tranquillité). Nous remercions les propriétaires pour leur accueil et pensons y retourner bientôt. Ne changez rien !!!', 'Nassima', '2019-07-30 00:37:10', 2),
(21, 'Magnifique région une semaine de découverte incroyable, des paysages sublimes. Un grand merci aux propriétaires d\'une grande gentillesse encore merci pour leur accueil. Très beau chalet et très bien agencé.', 'Marie', '2020-01-10 19:28:21', 11),
(29, 'Chaleureuse maison de montagne, bien équipée,tout est compris, joliment décorée avec sa belle cheminée( feu de bois et grillades) dans un petit hameau complètement isolé,nous a permis de nous ressourcer, de faire randos, raquettes, balades en conjuguant avec la météo :neige,soleil et pluie dans nos belles Alpes.', 'Shara', '2020-01-11 22:05:13', 9),
(39, 'Séjour en famille très agréable. Chalet spacieux, fonctionnel, chaleureux, situé en bordure d\'une forêt de pin où on peut y voir des chevreuils au réveil! Au top! Sans oublier des propriétaires accueillants, soucieux de notre bien être. Nous avons profité des équipements de la résidence, il ne manque rien : sport, détente, piscine... Expérience à renouveler!!! ', 'Marie', '2020-01-25 23:58:57', 2),
(40, 'L\'endroit et la vue sont exceptionnels je recommande vivement. Un séjour agréable et reposant. Loin de la civilisation au calme.', 'Nassima', '2020-01-31 23:37:18', 8),
(42, 'Chalet très chaleureux mais nécessitants quelques rafraîchissements. Super semaine en famille.', 'Marie', '2020-02-03 14:29:47', 3);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `content` text NOT NULL,
  `date_publication` timestamp NOT NULL,
  `id_chalet` int(11) NOT NULL,
  PRIMARY KEY (`id_users`),
  KEY `indexChalet` (`id_chalet`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_users`, `firstName`, `lastName`, `email`, `phone`, `content`, `date_publication`, `id_chalet`) VALUES
(1, 'lounis', 'nassima', 'nassima@gmail.com', 648795620, '    je souhaite avoir des informations                 ', '2019-07-20 21:32:35', 1),
(9, 'Lounis', 'lisa', 'lisa@gmail.com', 685456948, '     je souhaite avoir plus d\'information sur le chalet               ', '2019-07-20 21:42:41', 1),
(18, 'suly', 'suly', 'suly@gmail.com', 478956232, '        des informations sur le chalet            ', '2019-07-20 21:47:07', 4),
(19, 'Nino', 'Lucas', 'lucas@gmail.com', 647879658, 'Je me permets de vous contacter afin d\'obtenir plus d\'informations sur ce chalet', '2020-01-28 14:42:26', 12),
(21, 'ragon', 'Marie', 'marie@gmail.com', 658745878, 'Je me permets de vous contacter afin d\'avoir des informations supplémentaires sur ce chalet.', '2020-02-03 14:04:45', 8);

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `postal_code` text NOT NULL,
  `profile_picture` varchar(255) DEFAULT 'profil_defaut.png',
  `inscription_date` timestamp NOT NULL,
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id_customer`, `firstName`, `lastName`, `pseudo`, `password`, `email`, `phone`, `adress`, `postal_code`, `profile_picture`, `inscription_date`, `admin`) VALUES
(3, 'Sauna', 'Shara', 'shara', 'dea04453c249149b5fc772d9528fe61afaf7441c', 'sara@gmail.com', '0645789654', '12 avenue de paris', '92140 Clamart', '2.jpg', '2019-07-25 20:10:36', NULL),
(4, 'Rodez', 'Lina', 'Lina', '3e69070ab4612dcf15be59314778d05b7e5746b7', 'lina@gmail.com', '0630789660', '30 rue de la gare', '75012 Paris', 'profil_defaut.png ', '2019-07-25 20:26:39', NULL),
(5, 'Lounis', 'Nassima', 'nassima', 'ee0939ff82f499051b1271940536fcc07c64985a', 'nassima@gmail.com', '0645789654', '50 Avenue de paris', '75006 Paris', '5.jpg', '2019-07-27 21:29:44', 1),
(7, 'nicols', 'Marie', 'marie', 'f0fd596f396d8fc32d5e4fe4c73c61fa2ac55c70', 'marie@gmail.com', '0625874889', '20 rue de la gare', '75009 Paris', '6.jpg ', '2019-07-28 17:19:42', NULL),
(8, 'ragon', 'Caroline', 'caro', '732849d5bc9473ec25bcbd5fd48dc071f6c3ff12', 'caro@gmail.com', '0654789678', '15 rue de paris', '92140 Clamart', 'profil_defaut.png', '2019-07-28 17:23:49', NULL),
(9, 'lliam', 'Paul', 'paul', 'a027184a55211cd23e3f3094f1fdc728df5e0500', 'paul@gmail.com', '0687478524', '15 rue de Clamart', '75015 Paris', 'profil_defaut.png', '2019-07-29 19:34:29', NULL),
(11, 'Saunal', 'Lisa', 'Lisa', 'c4ed14e2020dd45edb57b5fba2f40dd93952505e', 'lisa@gmail.com', '0647874713', '24 rue de la gare', '75015 Paris', '11.jpg', '2019-07-29 20:50:14', NULL),
(12, 'Lounis', 'Kamel', 'kamel', '4a7bd399086aa2d8e2f452e022ff373e0a08aa50', 'kamel@gmail.com', '0657894528', '24 rue de la rose', '75014 Paris', '12.jpg', '2020-01-16 23:33:44', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id_posts` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `publication_date` datetime NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_chalet` int(11) NOT NULL,
  PRIMARY KEY (`id_posts`),
  KEY `indexCustomer` (`id_customer`),
  KEY `indexChalet` (`id_chalet`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id_posts`, `title`, `content`, `publication_date`, `id_customer`, `id_chalet`) VALUES
(2, 'Chalet La Joue du Loup', 'La résidence Les Gentianes** à Gresse-en-Vercors, a été construite dans le respect de l\'architecture locale. Ce complexe de vacances se trouve à 600 mètres du centre station et 400 mètres des commerces. Située sur les Balcons Est du Vercors, Gresse-en-Vercors est une station-village au panorama unique. De nombreuses activités s\'offrent à vous et les commerces et services sont sur place. A quelques kilomètres de Grenoble, Le Domaine des Gentianes est idéal pour des vacances en famille ou entre amis au grand air.', '2019-07-26 23:25:22', 5, 1),
(3, 'Chalet Combloux', 'Chalet Combloux, se trouve dans le centre du village de Combloux. Il a été construit dans le pure respect des traditions montagnardes, avec ses matériaux de bois et de pierres. Vous séjournerez dans de luxueux appartements, ou dans des demi-chalets, très bien agencés, avec une vue imprenable sur les montagnes verdoyantes. Lors de vos vacances à Combloux , détendez vous à la piscine de la résidence, ou encore au SPA « SNÖ Eternelle » ... Vous pourrez vous garer au parking couvert de la résidence (en supplément).', '2019-07-26 00:06:12', 5, 2),
(4, 'Chalet Pra Loup', 'Suffisamment à l\'écart du centre station de Pra Loup 1500 les Molanès pour bénéficier du calme, vous ne serez qu\'à 800 mètres des commodités et commerces.  le Chalets est confortable et lumineux de par son exposition Sud-Est. Il  dispose d\'un balcon et d\'une terrasse. Vous apprécierez les nombreuses randonnées et loisirs proposés par la station. L\'été, le parc du Mercantour est à découvrir absolument.', '2019-07-26 00:12:33', 6, 3),
(5, 'Chalet Pra Loup', 'Les Get a la particularité d\'être une grande station mais qui a su conserver son authenticité et sa convivialité en grande partie grâce à la qualité d\'accueil de ses habitants. Sa modernité contentera les fondus de ski désireux de profiter du domaine skiable. Ses espaces enfants, galeries commerciales, sentiers pédestres et résidences/chalets en bois raviront tous ceux qui veulent faire de leurs vacances un moment de détente et d\'être ensemble. ', '2019-07-27 18:45:10', 3, 3),
(6, 'Chalet Pra Loup', 'Situé dans le charmant village de St Marcel ( à 2km de St Martin), le chalet Combloux est parfaitement equipé et propose des espaces pour tous (nous etions 2 familles composées de 2 adultes et 3 enfants chacune)', '2019-07-27 20:18:19', 3, 3),
(7, 'Chalet Vaujany', 'Chalet d\'alpage typique du 18è écologiquement rénové à 2km de la station. Charmant hameau d\'alpage chargé d\'histoire dominant le lac du Chevril. Coteau sud. Superbe cadre naturel préservé (proximité cascade). Très cosy. Chaleureux cachet montagnard. Enormément de charme et de caractère. Large terrasse orientée plein sud. Cabane en bois pour les enfants. Espace aménagé pour un coin feu en pleine nature. Splendide panorama.', '2019-07-30 22:15:27', 7, 8),
(8, 'Chalet Vaujany', 'Chalet tout confort sur les pistes de Méribel proche du coeur de la station. Agréable cadre naturel de prairies et forêts. Spacieux et bien équipé. Balcon panoramique. Espace extérieur aménagé avec terrasses naturelles. Splendide vue sur le massif. Accès et départ skis aux pieds. ', '2019-11-07 22:26:05', 3, 8),
(9, ' chalet chamonix', 'Chalet individuel tout confort (accès de plain pied avec 3 marches descendantes) : séjour-cuisine-salon (1 convertible 2 p. / cuisine intégrée toute équipée), 1 chambre (1 lit 2 p.), 1 chambre cabine (1 lit 1 p.), salle d\'eau (douche). Electricité + eau sur réseau + poêle à bois + chauffage électrique. Terrasse. Terrain plat aménagé (800m²). Accès direct jusqu\'au chalet par route forestière carrossable sur 3 kms ouverte du 15/06 au 19/09 (goudronnée &amp; gravillonnée). Piscine 23 km. Plan d\'eau aménagé &amp; surveillé 11 km. Commerces 13 km. ', '2019-11-07 23:22:08', 7, 12),
(11, 'Chalet Combloux', 'CALME, TRANQUILLITE, VUE DEGAGEE, notre chalet, d\'une capacité de 3 personnes, est situés dans les Alpes du sud, dans une région très riche en patrimoine naturel, à un kilomètre  de la station Isolat 2000 . Vous tomberez sous le charme d\'une région exceptionnelle, riche en spécialités locales et traditions. Durant votre séjour, vous profiterez d\'un paysage magnifique. Vos randonnées pédestres vous amèneront à découvrir la flore typique et ses senteurs ainsi qu\'un sentier des dolmens. Vous apprécierez les villages anciens dont certains sont classés &quot;plus beaux villages de France&quot;. Vous serez séduits par les couleurs locales des marchés. La gastronomie n\'est pas en reste. Charcuterie (saucisson, caillettes, jambon de pays),  fromage de chèvre, produits à base de châtaignes ont la faveur des gourmets.', '2020-01-10 19:10:37', 7, 7),
(12, 'Chalet Vaujany', 'Dans l\'extension du chalet des propriétaires, ce petit nid douillet, complètement indépendant construit en 2013 vous permettra de vous ressourcer au calme à 500 m d\'altitude face aux montagnes du Taillefer. Dans un décor soigné, vous apprécierez ce chaleureux deux pièces avec 5 couchages réparti sur une chambre, une salle de bain, une pièce à vivre avec canapé-lit BZ 2 places et cuisine ouverte donnant sur la terrasse de 16 m² avec salon de jardin en bois, transats et barbecue électrique. ', '2020-01-31 23:35:12', 5, 8);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `url_video`) VALUES
(1, '3woeVpET3sk'),
(2, 'sGiBUMsPj7E'),
(3, '5tg_ShxA0SY'),
(5, '8HC_SkKCxAk');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_posts`) REFERENCES `posts` (`id_posts`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fkuser_id_chalet` FOREIGN KEY (`id_chalet`) REFERENCES `chalet` (`id_chalet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_chalet`) REFERENCES `chalet` (`id_chalet`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
