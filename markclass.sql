-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Mar-2017 às 06:53
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markclass`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alterados`
--

CREATE TABLE `alterados` (
  `materia` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `semana` varchar(11) COLLATE latin1_general_cs NOT NULL,
  `horario` varchar(11) COLLATE latin1_general_cs NOT NULL,
  `tipo` varchar(1) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `nome` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prof` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `hpm` int(4) NOT NULL,
  `senha` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`nome`, `prof`, `hpm`, `senha`) VALUES
('PC', 'FRANCIERIC ALVES DE ARAUJO', 245, '12345'),
('SOCIOLOGIA', 'EMILIA MARIA DE MENESES SOUSA', 145, '12345'),
('FILOSOFIA', 'EDNALDO FRANCISCO SANTOS OLIVEIRA', 222, '12345'),
('GEOGRAFIA', 'LAERCIO DE ALMEIDA CARVALHO', 154, '12345'),
('HISTORIA', 'ELTON LARRY VALERIO', 1736, '12345'),
('BIOLOGIA', 'IVANALDO RIBEIRO DE MOURA', 157, '12345'),
('EDS', 'DUANY DREYTON BEZERRA SOUSA', 187, '12345'),
('INGLES', 'SELMA MARIA DE BRITO CARDOSO OLIVEIRA', 128, '12345'),
('MATEMATICA', 'DOMINGOS DOS SANTOS PONCIANO', 180, '12345'),
('PORTUGUES', 'MARIA DE LOURDES SARAIVA DE MOURA MOREIRA', 173, '12345'),
('PBD', 'MARCIO AURELIO CARVALHO DE MORAIS', 230, '12345'),
('QUIMICA', 'RAIMUNDO MIGUEL DA SILVA JUNIOR', 248, '12345'),
('SO', 'RICARDO MARTINS RAMOS', 124, '12345'),
('FISICA', 'LEUDIMAR UCHOA ALVES', 130, '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
