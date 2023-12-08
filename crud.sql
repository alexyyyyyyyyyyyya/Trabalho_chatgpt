-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Dez-2023 às 02:32
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caminhao`
--

DROP TABLE IF EXISTS `caminhao`;
CREATE TABLE IF NOT EXISTS `caminhao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(500) NOT NULL,
  `cor` varchar(500) NOT NULL,
  `valor` varchar(500) NOT NULL,
  `ano` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caminhao`
--

INSERT INTO `caminhao` (`id`, `marca`, `cor`, `valor`, `ano`) VALUES
(1, 'ford', 'verde', '3000', '2023-12-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

DROP TABLE IF EXISTS `carro`;
CREATE TABLE IF NOT EXISTS `carro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(500) NOT NULL,
  `cor` varchar(500) NOT NULL,
  `valor` varchar(500) NOT NULL,
  `ano` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`id`, `marca`, `cor`, `valor`, `ano`) VALUES
(1, 'uno', 'preto', '1500', '2023-12-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `moto`
--

DROP TABLE IF EXISTS `moto`;
CREATE TABLE IF NOT EXISTS `moto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(500) NOT NULL,
  `cor` varchar(500) NOT NULL,
  `valor` varchar(500) NOT NULL,
  `ano` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `moto`
--

INSERT INTO `moto` (`id`, `marca`, `cor`, `valor`, `ano`) VALUES
(1, 'ford', 'laranja', '1500', '2023-12-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'jota', 'jota@gmail.com', '$2y$10$Yh1fZZsXf8P4eNZAlj6AUuX0fqtzfA40ss6JiS5IGIhCfj7vF/imy'),
(2, 'alexya', 'alexya@gmail.com', '$2y$10$YdHEXwI9LbWuwZGHEFvkS.o.VmtkS/coQ713tWpkdgtASQWoh.42S'),
(3, 'ale', 'ale@gmail.com', '$2y$10$p8Wp0eIwo7q6ebxTBlOHcuUOBxlTrpPBG0triMsqDHgHq7b/2VOHS'),
(4, 'teste', 'teste@gmail.com', '$2y$10$gh1.wiH.hz1yVMNTUWHSTOQBnGB0hYvsvJ2EiOmMWEV/NU7LOCq5S'),
(5, 'maluco', 'maluco@gmail.com', '$2y$10$y92cCT7oPkYCHcV0yuwBueAuIm7UxTmg2u0TLz6TsIoippVU01YdK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
