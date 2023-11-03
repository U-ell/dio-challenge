-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração:
-- Versão do Servidor: 5.5.30
-- Versão do PHP: 5.4.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `272172`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `senhas`
--

CREATE TABLE IF NOT EXISTS `senhas` (
  `senha` varchar(200) NOT NULL,
  `ativo` enum('1','0','2') NOT NULL DEFAULT '1',
  UNIQUE KEY `senha` (`senha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `senhas`
--

INSERT INTO `senhas` (`senha`, `ativo`) VALUES
('', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) NOT NULL DEFAULT '',
  `senha` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `activo` enum('N','S') NOT NULL DEFAULT 'N',
  `sessao` varchar(200) NOT NULL DEFAULT '',
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `login`, `senha`, `email`, `activo`, `sessao`, `nome`) VALUES
(1, 'user1', 'pass1', 'user@mail.com', 'S', 'abmpocoaejv31hk3vmmlk9l1v7', 'User'),
(2, 'user2', 'pass2', 'user2@mail.com', 'S', 'abmpocoaejv31hk3vmmlk9l1v8', 'User2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
