
CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nom` text COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` text COLLATE utf8_unicode_ci NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `Password` text COLLATE utf8_unicode_ci NOT NULL,
  `Statut` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Service` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fonction` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_user`, `Login`, `Nom`, `Prenom`, `Date_Naissance`, `Email`, `Password`, `Statut`, `Photo`, `Service`, `Fonction`) VALUES
(1, 'macksene', 'sene', 'mack', '2018-09-10', 'macksene@gmail.com', 'passer', 'admin', 'sene.jpg', 'service informatique', 'ingénieur'),
(4, 'pa', 'pa', 'pa', '2018-12-18', 'pa@gmail.com', 'passer', 'utilisateur', 'index.jpg', 'ingenieur', 'service informatique'),
(37, 'salimata', 'fall', 'salimata', '2018-09-30', 'salimata@gmail.com', 'passer', 'utilisateur', 'sylviea01a.jpg', 'informatique', 'ingenieur'),
(51, 'llllllll', 'jjjjjjjj', 'kkkkkkk', '2019-06-05', 'macksekknddde@gmail.com', '2019-06-14', 'ddeff', 'objet_balle_rose.png', 'sss', 'ssss'),
(52, 'rama', 'tall', 'cheikh', '2018-05-27', 'cheikh@gmail.com', 'passer', 'admin', 'cns-3aaaa.jpg', 'service informatique', 'informaticien');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_a` int(10) NOT NULL AUTO_INCREMENT,
  `type_a` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titre_a` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description_a` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `texte_a` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `date_a` date NOT NULL,
  `photo_a` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `auteur_a` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_a`, `type_a`, `titre_a`, `description_a`, `texte_a`, `date_a`, `photo_a`, `auteur_a`) VALUES
(2, 'communique', 'publicat', 'SODIMEL, acteur de la transformation du centre de services de LA ', 'SODIMEL, acteur de la transformation du centre de  de LA POSTE', '2018-09-23', 'indexss.jpg', 'macksene'),
(3, 'these', 'Samuel OUYA', 'Sujet: Etude de la convergence des services de télécommunications et ses applications aux organisations virtuelles', 'mon article mon article mon article mon article mon article mon article mon article mon article mon article mon article mon article mon article mon article\r\nmon article mon article mon article mon article mon article mon article mon article mon article mon article mon article mon article mon article mon article', '2018-09-21', 'ouya.jpg', '1'),
(4, 'actualite', 'Mise en ligne du livret Cheikh Anta DIOP', 'Mise en ligne du livret Cheikh Anta Diop et concours autour de l\'oeuvre ', 'artiarticle articlearticle article articlearticle article articlearticle article articlearticle article articlearticle article articlearticle article articlearticle article articlearticle article articlearticlecle articlearticle article articlearticle article articlearticle article articlearticle article articlearticle article articlearticle article articlearticle article articlearticle article articlearticle', '2018-09-06', 'cheikh.jpg', '1'),
(5, 'actualite', 'Partenariat UCAD-EIFFAGE', 'Partenariat UCAD-EIFFAGE : Les jalons d’une coopération fructueuse lancés.', '« Mon intégration dans le groupe il y a 3 ans comme Consultant Chef de projet Innovation au sein de l’activité dédiée à l’IoT n’est pas le fruit du hasard.\r\n\r\nEn effet, technophile de par ma formation d’Ingénieur Télécoms, mais également diplômé en management de projet, je souhaitais rejoindre une structure capable de nourrir mes différentes appétences, ainsi qu’un goût marqué pour la diversité (technologies, missions, clients...).\r\n\r\nAlors, lorsque j’ai su que NEURONES recrutait de nouveaux « talents » pour sa toute nouvelle Business Unit Innovation autour de l’IoT, j’ai répondu présent !\r\n\r\nL’activité est actuellement en plein essor et mon rôle évolue - à ma grande satisfaction - avec son développement : de la veille à l’avant-vente, en passant par le pilotage de projets stratégiques et le consulting et le management d’équipe.\r\n\r\nAutant de missions pluridisciplinaires qui permettent de mettre ma créativité au service de l’Innovation. La crédibilité de NEURONES sur le marché, la variété des projets au sein du groupe ou la flexibilité du modèle me font entrevoir de nombreuses perspectives, tant en termes d’innovation pour la business unit IoT, que pour mon épanouissement professionnel ! »\r\n', '2018-09-18', 'part.jpg', '1'),
(6, 'actualite', 'Concours innovation ericsson', 'Des étudiants de l’UCAD et de l’UASZ vainqueurs du concours d’innovation 2018 d’Ericsson', '« Mon parcours dans le groupe est la combinaison de mon engagement et d’un environnement propice au développement professionnel.Il y 6 ans, après une expérience en cabinet de chasse, je rejoins la branche User Service Management comme Chargée de Recrutement.\r\n\r\nDès mon arrivée, je bénéficie d’un parcours d’intégration soigneusement pensé qui me permet de comprendre les métiers, les enjeux et la stratégie de l’activité, mais également les problématiques des opérationnels pour lesquels je travaille, ce qui constitue un véritable tremplin pour une prise de poste réussie.\r\n\r\nDeux ans plus tard, dans une volonté de renforcer la gestion des collaborateurs, il m’a été proposé d’occuper une nouvelle fonction, celle de Human Resources Business Partner (HRBP). Et aujourd’hui, je pilote et anime l’ensemble des processus Ressources Humaines (sur un périmètre de plus de 2 500 personnes) : recrutement, mobilité, fidélisation, gestion de carrières… tout en accroissant la collaboration entre les équipes RH et les opérationnels.\r\n\r\nTravailler au sein d’un groupe comme NEURONES c’est pouvoir avancer « main dans la main » avec les opérationnels, c’est partager, puis atteindre, un objectif commun. Autant d’atouts pour construire et réussir avec son employeur ! »\r\n', '2018-09-18', 'ericsson.jpg', '1'),
(7, 'actualite', 'CAMES', 'Un nouveau Guide d’évaluation des enseignants-chercheurs dans le cadre des CCI', '«  Arrivé comme stagiaire consultant sécurité il y a dix ans et aujourd’hui Président-directeur général de l’activité sécurité... Un parcours que je dois à l’excellent travail de mes équipes, à un investissement sans faille et à la liberté de fonctionner en mode start-up au sein d’un grand groupe qui favorise la prise d’initiative et l’innovation. \r\n\r\nPour résumé une trajectoire (qui ne demande qu’à être imitée !), cinq ans après mon stage, je prends la tête du pôle sécurité. Cette fonction est la résultante de mon appétence pour le pilotage de tous les aspects d’une activité (Commerce, Ressources Humaines, R&D...). \r\n\r\nEn parallèle, j’ai été associé au capital. En 2015, la branche sécurité devient une entité à part entière, rassemblant près de 70 spécialistes en cybersécurité. \r\n\r\nEt, compte tenu de mon expérience, engagement et certitude que le marché est porteur, j’en deviens le Président-directeur général. \r\n\r\nLe modèle NEURONES confère à cette entité cybersécurité un positionnement de pure player dans son écosystème, atout indéniable sur un marché ultra concurrentiel, mais prometteur. \r\n\r\nPorté par cet élan, j’espère donc bien poursuivre ma carrière de patron chez NEURONES, en relevant le dé permanent de la gestion de la croissance et soutenu par les hommes qui font la richesse du groupe. »\r\n', '2018-08-27', 'cames.png', '1'),
(8, 'actualite', 'authentification au WI-FI de l\'UCAD', 'La DISI informe l\'ensemble des PER que la procédure d\'authentification au WI-FI a changé.', 'Création et confection de réseau Génie civil\r\nTirage et raccordement,Epissure et Outillage', '2018-09-22', 'p.png', 'sene'),
(9, 'actualite', 'UCAD/Universite Marseille', 'L\'UCAD et l’Université d’Aix-Marseille ont signé une convention ', ' L’Université Cheikh Anta Diop de Dakar (UCAD) et l’Université d’Aix-Marseille ont signé une convention après un échange sur les actions et projets mutuels entre les deux structures. La cérémonie de signature de ce protocole a eu lieu en présence du Professeur Ibrahima Thioub, Recteur de l’UCAD, et de Jean-Luc Fauguet, Maître de conférences en sociologie et chargé de mission Coopération et Relations Internationales de l’Ecole supérieure du professorat et de l’éducation (ESPE), qui représentait l’Université Aix-Marseille.\r\nPlusieurs composantes et équipes de recherche de l’Université Aix-Marseille travaillent avec l’UCAD et les discussions ont porté sur les secteurs de la médecine, des sciences de la vie, de la sociologie, de l’histoire et de la géographie, de l’éducation… Rappelons que l’ESPE est co-responsable d’une Chaire Unesco avec l\'Ecole normale supérieure d\'Enseignement technique et professionnel (ENSETP) de l’UCAD (Éducation scientifique et technologique & formation des enseignants).', '2018-09-22', 'c.jpg', 'sene'),
(10, 'actualite', 'Inauguration UCAD FM', 'inauguration de la radio universitaire par le recteur de l\'universite', 'nnnnn', '2018-09-06', 'fm.jpg', 'macksene'),
(11, 'actualite', 'La start-up Sunubus', 'La start-up Sunubus va disputer la finale du concours international d’Atos IT Challange 2019', 'Sunubus, une start-up fondée par un groupe d’étudiants du département Génie Informatique de l’Ecole Supérieure Polytechnique de Dakar, s’est qualifiée pour la finale de la 8e édition d’Atos IT Challenge.\r\nCette compétition internationale dédiée à l’innovation, réunit des étudiants des universités et grandes écoles, parmi les plus prestigieuses. Pour cette année, le thème est « Machine Learning for Sustainability » (l’Intelligence Artificielle au service du développement durable).\r\nSunubus, qui est une application communautaire de localisation des bus, reste aussi le seul projet africain retenu dans la liste des 15 finalistes publiée par les organisateurs. Il va compétir avec d’autres équipes d’étudiants de la France, de l’Allemagne, du Royaume-Uni, de l’Inde, de la Malaisie, des Pays-Bas, du Singapour et de l’Espagne.\r\n', '2018-09-23', 's.jpg', 'macksene'),
(12, 'actualite', 'Projet COWSHED', 'Projet COWSHED : une équipe de chercheurs de l’ESP et de la FST primée à Paris', 'Le projet Coshwed, lancé il y a de cela quelques mois par une équipe d’enseignants-chercheurs de l’ESP et de la FST de l’UCAD, a reçu la distinction de « Best Demonstration Award », le 21 février dernier à Paris, dans le cadre de la 22ème Conférence sur l’Innovation dans les Clouds, Internet et les Réseaux (ICIN 2019).\r\nCet événement phare de la communauté des chercheurs dans le domaine des télécommunications récompense ainsi les travaux de ces chercheurs sénégalais qui avaient mis au point une solution qui rend possible la communication dans les « zones blanches », des territoires ne disposant pas de couverture téléphonique, qui sont une tache du Ferlo.\r\nEn effet, ce groupe d’enseignants-chercheurs cordonné par le professeur Moussa Diallo, du Département Génie informatique de l’ESP, avait un relais mobile connecté et autonome en énergie qui permet aux éleveurs de communiquer dans ces dites zones où aucun opérateur téléphonique n’est présent.', '2018-09-23', 'a1.png', 'macksene'),
(14, 'publication', 'tester', 'je teste une publication', ' DELIMITER $\r\nCREATE TRIGGER ins_hotel AFTER INSERT ON hotel\r\nFOR EACH ROW\r\n    BEGIN\r\n        INSERT INTO hotel_mysql (ref_hotel, nom, ref_ville, adresse,\r\n        wifi) VALUES (NEW.ref_hotel, NEW.nom, NEW.ref_ville,\r\n        NEW.adresse, NEW.wifi);\r\n    END$\r\n\r\nCREATE TRIGGER upd_hotel AFTER UPDATE ON hotel\r\nFOR EACH ROW\r\n    BEGIN\r\n        UPDATE hotel_mysql SET ref_hotel = NEW.ref_hotel, nom = NEW.nom,\r\n        ref_ville = NEW.ref_ville, adresse = NEW.adresse, wifi = NEW.wifi\r\n        WHERE ref_hotel = OLD.ref_hotel;\r\n    END$\r\n    -- Le trigger ne marche pas avec CONNECT.\r\n    -- J\'ai l\'erreur : 11:50:22    update hotel set nom = \'Ngor Diarama\'    \r\n    -- Error Code: 1296. Got error 122 \'Remote: Unknown column \'OLD.ref_hotel\' in \'where clause\'\' from CONNECT    0.047 sec\r\n\r\n\r\n\r\nCREATE TRIGGER del_hotel AFTER DELETE ON hotel\r\nFOR EACH ROW\r\n    DELETE FROM hotel_mysql\r\n    WHERE ref_hotel = OLD.ref_hotel$\r\n\r\n\r\nDELIMITER ;', '2018-05-27', 'pub.jpg', 'macksene'),
(15, 'entreprise', 'ORANGE', 'La section informatique entretient des relations de partenariat ORANGE SÉNÉGAL', ' La section informatique entretient des relations de partenariat avec la société de télécommunication ORANGE SÉNÉGAL', '2019-07-03', 'orange-logo-1.jpg', 'pa'),
(16, 'institution', 'SENELEC', 'La section informatique entretient des relations de partenariat avec la SENELEC', ' La section informatique entretient des relations de partenariat avec la société de télécommunication ORANGE SÉNÉGAL', '2019-07-03', 'Nouveau-Logo-Senelec-1.jpg', 'pa'),
(18, 'institution', 'UGB', 'La section informatique entretient des relations de partenariat avec l\'UGB', ' La section informatique entretient des relations de partenariat avec l\'UGB', '2019-07-03', 'De-la-promotion-de-la-creation-dentreprise-au-Senegal1.png', 'pa'),
(19, 'institution', 'SGBS', 'La section informatique entretient des relations de partenariat avec la SGBS', ' La section informatique entretient des relations de partenariat avec la SGBS', '2019-07-03', 'th.jpg', 'pa'),
(20, 'entreprise', 'ARC INFORMATIQUE', 'La section informatique entretient des relations de partenariat avec ARC INFORMATIQUE', ' La section informatique entretient des relations de partenariat avec ARC INFORMATIQUE', '2019-07-03', 'blog-banner-arc-informatique-600x327.jpg', 'pa'),
(21, 'entreprise', 'SDE', 'La section informatique entretient des relations de partenariat avec ARC INFORMATIQUE', ' La section informatique entretient des relations de partenariat avec ARC INFORMATIQUE', '2019-07-03', 'sde.jpg', 'pa'),
(22, 'these', 'ffffffff', 'gggggggggfjhkkkkkkkkkkkkkkkkkkk', 'vukjvjkv', '2019-08-05', 'achievments.jpg', 'macksene'),
(23, 'these', 'tester modal', 'je teste une publication', 'ffff', '2019-07-30', 'a1.png', 'macksene');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `nom_classe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_filiere` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_dep` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nom_classe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`nom_classe`, `nom_filiere`, `nom_dep`) VALUES
('doctorat', 'math', 'maths informatique'),
('licence1 jour', 'informatique', 'maths informatique'),
('licence1 soir', 'informatique', 'maths informatique'),
('licence2 jour', 'informatique', 'maths informatique'),
('licence2 soir', 'informatique', 'maths informatique'),
('licence3 jour', 'informatique', 'maths informatique'),
('licence3 soir', 'informatique', 'maths informatique'),
('marketing', 'pppppppppppp', 'pppppppppppp'),
('master 1 soir rettel', 'informatique', 'maths informatique'),
('master 1 soir siir', 'informatique', 'maths informatique'),
('master 2 jour rettel', 'informatique', 'maths informatique'),
('master 2 soir rettel', 'informatique', 'maths informatique'),
('master 2 soir siir', 'informatique', 'maths informatique'),
('master1 jour rettel', 'informatique', 'maths informatique'),
('master1 jour siir', 'informatique', 'maths informatique'),
('master2 jour siir', 'informatique', 'maths informatique');

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

DROP TABLE IF EXISTS `enseigner`;
CREATE TABLE IF NOT EXISTS `enseigner` (
  `matricule` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_mod` int(11) NOT NULL,
  KEY `matricule` (`matricule`,`id_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `nume` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lnaiss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dnaiss` date NOT NULL,
  `adr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_classe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nume`),
  KEY `nom_classe` (`nom_classe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`nume`, `nom`, `prenom`, `lnaiss`, `dnaiss`, `adr`, `sexe`, `tel`, `email`, `photo`, `nation`, `pass`, `nom_classe`) VALUES
('fall', 'FALL', 'Saliou', 'dakar', '2018-03-01', 'dakar', 'M', 777159535, 'bame@gmail.com', 'stock-photo-fiber-optical-picture-with-details-and-light-effects-158436647.jpg', 'senegalaise', 'fall', 'doctorat'),
('ndione', 'NDIONE', 'Seynabou', 'rufisque', '2018-03-16', 'rufisque', 'M', 777159535, 'mack@gmail.com', 'indexfdfdfd.jpg', 'senegalaise', 'ndione', 'doctorat'),
('sall', 'SALL', 'Aminata', 'sall', '2018-03-01', 'sall', '', 778992354, 'g@g.com', '10995359_10152677351022742_3954961379098467335_n.jpg', 'senegalaise', 'pass', 'doctorat'),
('senesene', 'sene', 'sene', 'sene', '2018-03-09', 'sene', 'F', 99, 'la@h.do', '000000034176.jpg', 'senegalaise', 'se;e', 'doctorat');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_m` int(10) NOT NULL AUTO_INCREMENT,
  `email_m` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_m` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `objet_m` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text_m` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_m`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_m`, `email_m`, `nom_m`, `objet_m`, `text_m`) VALUES
(1, 'ma@h.d', 'z', 'z', 'z'),
(2, 'sss@dd.dd', 'hh', 'hh', 'hhh'),
(3, 'sss@dd.dd', 'hh', 'hh', 'hhh'),
(4, 'sss@dd.dd', 'hh', 'hh', 'hhh'),
(5, 'macksene@gmail.com', 'gorgoumack sene', 'candidature', 'jeune qui recherche un emploi'),
(6, 'macksene@gmail.com', 'mack', 'commercial', 'xampp/xampp/xampp/xampp/xampp/xampp/xampp/xampp/xampp/xampp/xampp/'),
(7, 'm@h.com', 'hhhh', 'tttt', 'tttttt'),
(8, 'ddd', 'ddd', 'ddd', 'ddddddd'),
(9, 'fallou@hotmail.fr', 'fallou ndiaye', 'recrutement', 'ingenieur en informatique interessé par votre offre'),
(10, 'fffffff@d.vg', 'fffffff', 'fffffff', 'fffffff');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `nom_module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `credit_module` int(11) NOT NULL,
  `coef_module` int(11) NOT NULL,
  `nom_ue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nom_module`),
  KEY `nom_ue` (`nom_ue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`nom_module`, `credit_module`, `coef_module`, `nom_ue`) VALUES
('ALGO', 30, 3, 'UE1 BD et ALGO'),
('BD', 30, 3, 'UE1 BD et ALGO'),
('CALNUM', 30, 3, 'UE3'),
('JAVA', 30, 3, 'UE2 developpement logiciel'),
('RESEAU', 30, 3, 'UE4'),
('SE', 30, 3, 'UE4'),
('STAT', 30, 3, 'UE3'),
('TELECOM', 30, 3, 'UE4'),
('UML', 30, 3, 'UE2 developpement logiciel'),
('WEB', 30, 3, 'UE2 developpement logiciel');

-- --------------------------------------------------------

--
-- Structure de la table `noter`
--

DROP TABLE IF EXISTS `noter`;
CREATE TABLE IF NOT EXISTS `noter` (
  `nom_module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nume` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type_eva` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `session_eva` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` double NOT NULL,
  `semestre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  KEY `id_ue` (`nom_module`,`nume`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `noter`
--

INSERT INTO `noter` (`nom_module`, `nume`, `type_eva`, `session_eva`, `note`, `semestre`) VALUES
('developpement', 'sall', 'examen', 'normal', 20, '1'),
('java', 'ba', 'devoir', 'normal', 17, '1'),
('java', 'diop', 'devoir', 'normal', 13, '1'),
('java', 'fall', 'devoir', 'normal', 12, '1'),
('java', 'ndione', 'devoir', 'normal', 16, '1'),
('java', 'sall', 'devoir', 'normal', 17, '1'),
('developpement', 'ba', 'devoir', 'normal', 11, '1'),
('developpement', 'diop', 'devoir', 'normal', 20, '1'),
('developpement', 'fall', 'devoir', 'normal', 19, '1'),
('developpement', 'ndione', 'devoir', 'normal', 20, '1'),
('developpement', 'sall', 'devoir', 'normal', 20, '1'),
('LANGAGE', 'ba', 'devoir', 'normal', 14, '1'),
('LANGAGE', 'diop', 'devoir', 'normal', 14, '1'),
('LANGAGE', 'fall', 'devoir', 'normal', 15, '1'),
('LANGAGE', 'ndione', 'devoir', 'normal', 13, '1'),
('LANGAGE', 'sall', 'devoir', 'normal', 16, '1'),
('uml', 'ba', 'devoir', 'normal', 17, '1'),
('uml', 'diop', 'devoir', 'normal', 15, '1'),
('uml', 'fall', 'devoir', 'normal', 19, '1'),
('uml', 'ndione', 'devoir', 'normal', 17, '1'),
('uml', 'sall', 'devoir', 'normal', 18, '1'),
('base', 'ba', 'devoir', 'normal', 20, '1'),
('base', 'diop', 'devoir', 'normal', 19, '1'),
('base', 'fall', 'devoir', 'normal', 18, '1'),
('base', 'ndione', 'devoir', 'normal', 19, '1'),
('base', 'sall', 'devoir', 'normal', 20, '1'),
('JAVA', 'ba', 'examen', 'normal', 12, '1'),
('JAVA', 'diop', 'examen', 'normal', 18, '1'),
('JAVA', 'fall', 'examen', 'normal', 16, '1'),
('JAVA', 'ndione', 'examen', 'normal', 16, '1'),
('JAVA', 'sall', 'examen', 'normal', 18, '1'),
('JAVA', 'sene', 'examen', 'normal', 0, '1'),
('ALGO', 'ba', 'devoir', 'normal', 18, '1'),
('ALGO', 'diop', 'devoir', 'normal', 18, '1'),
('ALGO', 'fall', 'devoir', 'normal', 18, '1'),
('ALGO', 'ndione', 'devoir', 'normal', 18, '1'),
('ALGO', 'sall', 'devoir', 'normal', 18, '1'),
('ALGO', 'ba', 'examen', 'normal', 19, '1'),
('ALGO', 'diop', 'examen', 'normal', 19, '1'),
('ALGO', 'fall', 'examen', 'normal', 19, '1'),
('ALGO', 'ndione', 'examen', 'normal', 19, '1'),
('ALGO', 'sall', 'examen', 'normal', 19, '1'),
('BD', 'ba', 'devoir', 'normal', 15, '1'),
('BD', 'diop', 'devoir', 'normal', 15, '1'),
('BD', 'fall', 'devoir', 'normal', 15, '1'),
('BD', 'ndione', 'devoir', 'normal', 15, '1'),
('BD', 'sall', 'devoir', 'normal', 15, '1'),
('BD', 'ba', 'examen', 'normal', 13, '1'),
('BD', 'diop', 'examen', 'normal', 13, '1'),
('BD', 'fall', 'examen', 'normal', 13, '1'),
('BD', 'ndione', 'examen', 'normal', 13, '1'),
('BD', 'sall', 'examen', 'normal', 13, '1'),
('UML', 'ba', 'examen', 'normal', 17, '1'),
('UML', 'diop', 'examen', 'normal', 18, '1'),
('UML', 'fall', 'examen', 'normal', 16, '1'),
('UML', 'ndione', 'examen', 'normal', 15, '1'),
('UML', 'sall', 'examen', 'normal', 16, '1'),
('WEB', 'ba', 'devoir', 'normal', 18, '1'),
('WEB', 'diop', 'devoir', 'normal', 19, '1'),
('WEB', 'fall', 'devoir', 'normal', 17, '1'),
('WEB', 'ndione', 'devoir', 'normal', 18, '1'),
('WEB', 'sall', 'devoir', 'normal', 19, '1'),
('WEB', 'senesene', 'devoir', 'normal', 18, '1'),
('ALGO', 'fall', 'devoir', 'normal', 22, '1'),
('ALGO', 'ndione', 'devoir', 'normal', 2, '1'),
('ALGO', 'sall', 'devoir', 'normal', 2, '1'),
('ALGO', 'senesene', 'devoir', 'normal', 33, '1'),
('', 'sall', '', '', 2, ''),
('', 'fall', '', '', 2, ''),
('', 'senesene', '', '', 12, ''),
('', 'ndione', '', '', 23, ''),
('', 'sall', '', '', 2, ''),
('', 'fall', '', '', 3, ''),
('', 'senesene', '', '', 12, ''),
('', 'ndione', '', '', 3, ''),
('', 'sall', '', '', 2, ''),
('', 'fall', '', '', 2, ''),
('', 'senesene', '', '', 2, ''),
('', 'ndione', '', '', 2, ''),
('', 'sall', '', '', 9, ''),
('', 'fall', '', '', 0, ''),
('', 'senesene', '', '', 8, ''),
('', 'ndione', '', '', 8, ''),
('', 'sall', '', '', 8, ''),
('', 'fall', '', '', 9, ''),
('', 'senesene', '', '', 8, ''),
('', 'ndione', '', '', 7, ''),
('', 'sall', '', '', 7, ''),
('', 'fall', '', '', 8, ''),
('', 'senesene', '', '', 88, ''),
('', 'ndione', '', '', 7, ''),
('', 'sall', '', '', 8, ''),
('', 'fall', '', '', 9, ''),
('', 'senesene', '', '', 0, ''),
('', 'ndione', '', '', 9, '');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `matricule` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lnaiss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dnaiss` date NOT NULL,
  `adr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `specialite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ue`
--

DROP TABLE IF EXISTS `ue`;
CREATE TABLE IF NOT EXISTS `ue` (
  `nom_ue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `credit_ue` int(11) NOT NULL,
  `coef_ue` int(11) NOT NULL,
  PRIMARY KEY (`nom_ue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ue`
--

INSERT INTO `ue` (`nom_ue`, `credit_ue`, `coef_ue`) VALUES
('UE1 BD et ALGO', 60, 5),
('UE2 developpement logiciel', 60, 5),
('UE3 MATHEMATIQUES', 60, 5),
('UE4 RESEAU ET SYSTEME', 60, 6),
('UE7', 67, 77);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lnaiss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dnaiss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` bigint(50) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `nom`, `prenom`, `lnaiss`, `dnaiss`, `adr`, `sexe`, `tel`, `email`, `photo`, `nation`, `pass`) VALUES
('macksene', 'mack', 'sene', 'bargny', '12/12/2009', 'bargny', 'M', 773074736, 'macksene@gmail.com', 'mack.jpg', 'senegalaise', 'passer'),
('matar', 'matar', 'seck', 'keur massar', '11/13/1976', 'keur massar', 'M', 773982389, 'matar@gmail.com', 'matar.jpg', 'senegalaise', 'seck');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
