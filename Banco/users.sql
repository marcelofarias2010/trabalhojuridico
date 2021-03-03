-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Mar-2021 às 00:54
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `Cidade` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `Nome`, `Sobrenome`, `email`, `senha`, `sexo`, `Cidade`) VALUES
(1, 'Marcelo', 'Farias', 'mljinformatica@gmail.com', '1234567', 'Masculino', 'Ceilandia'),
(2, 'Isaac', 'Farias', 'isaac@hotmail.com', '1234567', 'Masculino', 'Ceilandia'),
(3, 'Giovanna', 'Farias', 'gigifarias@bol.com.br', '1234567', 'Feminino', 'Ceilandia'),
(4, 'Elizangela', 'Pereira', 'eliza2021@gmail.com', '1234567', 'Feminino', 'Passagem Franca'),
(7, 'Francklin', 'Farias', 'napib@gmail.com', '1234567', 'Masculino', 'Aguas Claras'),
(8, 'Jaqueline', 'Farias', 'jack2021@yahoo.com', '1234567', 'Feminino', 'Ocidental'),
(9, 'JoÃ¡o', 'Pereira', 'jojodedeus@globo.com', '1234567', 'Masculino', 'Abadiania'),
(10, 'Luciano', 'da Silva', 'lucianinho@terra.com.br', '1234567', 'Masculino', 'Taguatinga');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
