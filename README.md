# API-login

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

CREATE TABLE `chevaux` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `propriétaire` varchar(255) NOT NULL,
  `cheval` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

CREATE TABLE `ferrure` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `propriétaire` varchar(255) NOT NULL,
  `cheval` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT CURRENT_DATE ON UPDATE CURRENT_DATE,
  `Commentaire` varchar(1000) NULL
)

CREATE TABLE `ListVermifuge` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `Matière` varchar(255) NOT NULL,
  `parasites` varchar(1000) NOT NULL,
  `tolérance` varchar(1000) NULL
)