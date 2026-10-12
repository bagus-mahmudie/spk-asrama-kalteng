-- Public import schema derived from db_saw.sql supplied by the project owner.
-- Import into a NEW, empty database. No existing tables are dropped.
-- Original accounts, password hashes, personal records and operational data are omitted.
-- SAW criteria and weights are retained as reference data.

SET NAMES utf8mb4;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `saw_alternatives` (
  `id_alternative` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `saw_criterias` (
  `id_criteria` tinyint(3) UNSIGNED NOT NULL,
  `criteria` varchar(100) NOT NULL,
  `weight` float NOT NULL,
  `attribute` set('benefit','cost') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `saw_evaluations` (
  `id_alternative` smallint(5) UNSIGNED NOT NULL,
  `id_criteria` tinyint(3) UNSIGNED NOT NULL,
  `value` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `saw_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

ALTER TABLE `saw_alternatives`
  ADD PRIMARY KEY (`id_alternative`);

ALTER TABLE `saw_criterias`
  ADD PRIMARY KEY (`id_criteria`);

ALTER TABLE `saw_evaluations`
  ADD PRIMARY KEY (`id_alternative`,`id_criteria`);

ALTER TABLE `saw_users`
  ADD PRIMARY KEY (`id_user`);

ALTER TABLE `saw_alternatives`
  MODIFY `id_alternative` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `saw_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO `saw_criterias` (`id_criteria`, `criteria`, `weight`, `attribute`) VALUES
(1, 'Asal Kabupaten', 20, 'cost'),
(2, 'Penghasilan Orang Tua', 10, 'cost'),
(3, 'Jarak Asrama-Kampus', 10, 'cost'),
(4, 'Semester', 10, 'cost'),
(5, 'Keanggotaan IKPM', 20, 'benefit'),
(6, 'IPK', 20, 'benefit'),
(7, 'Patuh Tata Tertib', 10, 'benefit');
