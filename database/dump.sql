-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Out-2016 às 22:03
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id`         INT(11)      NOT NULL AUTO_INCREMENT,
  `email`      VARCHAR(100) NOT NULL,
  `pwd`        VARCHAR(100) NOT NULL,
  `hash`       VARCHAR(100) NOT NULL,
  `name`       VARCHAR(50)  NOT NULL,
  `created_at` DATE         NOT NULL,
  `updated_at` DATE         NOT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1
  COMMENT = 'Table of users accounts'
  AUTO_INCREMENT = 4;

--
-- Extraindo dados da tabela `account`
--

INSERT INTO `account` (`id`, `email`, `pwd`, `hash`, `name`, `created_at`, `updated_at`) VALUES
  (1, 'deividnetwork@gmail.com', '5e8edd851d2fdfbd7415232c67367cc3', '', 'Deivid Network', '2016-10-01', '2016-10-01'),
  (2, 'tatsui@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '', 'Erick Tatsui', '2016-10-01', '2016-10-01'),
  (3, 'rodolfo@gmail.com', '927c07157b504e6ee60657a0422c2c45', '', 'Rodolfo de Oliveira', '2016-10-01', '2016-10-01');

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
