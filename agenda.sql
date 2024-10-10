-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10/10/2023 às 00:44
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--
CREATE DATABASE IF NOT EXISTS `agenda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `consultas`
--

DROP TABLE IF EXISTS `consultas`;
CREATE TABLE IF NOT EXISTS `consultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `idade` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `motivo` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_consulta` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `usuario_consulta` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
