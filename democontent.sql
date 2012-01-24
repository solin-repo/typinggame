-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 20 jan 2012 om 16:07
-- Serverversie: 5.1.49
-- PHP-Versie: 5.3.3-7+squeeze3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `moodle22`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `mdl_typinggame`
--

CREATE TABLE `mdl_typinggame` (
  `id` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `course` bigint(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `intro` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `mdl_typi_cou_ix` (`course`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='each record is one typing game instance' AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `mdl_typinggame`
--

INSERT INTO `mdl_typinggame` (`id`, `course`, `name`, `intro`) VALUES
(1, 3, 'My Frist Typing Game', '<p>No description necessary</p>'),
(2, 3, 'Another typing game', '<p>Type!</p>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `mdl_typinggame_word`
--

CREATE TABLE `mdl_typinggame_word` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typinggame_id` int(11) NOT NULL,
  `word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `typinggame_id` (`typinggame_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Gegevens worden uitgevoerd voor tabel `mdl_typinggame_word`
--

INSERT INTO `mdl_typinggame_word` (`id`, `typinggame_id`, `word`) VALUES
(3, 1, 'Eerste'),
(2, 1, 'Woord'),
(4, 1, 'Best'),
(5, 1, 'Leuk'),
(6, 1, 'Een'),
(7, 1, 'Typing'),
(8, 1, 'Game'),
(9, 1, 'Met'),
(10, 1, 'Hele'),
(11, 1, 'Korte'),
(12, 1, 'Woorden'),
(13, 2, 'journalist'),
(14, 2, 'dagbladen'),
(15, 2, 'tijdschriften'),
(16, 2, 'nieuwssites'),
(17, 2, 'persbureaus'),
(18, 2, 'weblogs'),
(19, 2, 'cursussen'),
(20, 2, 'presentaties');
