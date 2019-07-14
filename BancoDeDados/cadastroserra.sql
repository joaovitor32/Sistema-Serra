-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/07/2019 às 21:12
-- Versão do servidor: 10.1.39-MariaDB
-- Versão do PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastroserra`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Membros`
--

CREATE TABLE `Membros` (
  `CodMembro` bigint(20) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Curso` text NOT NULL,
  `AnoDeEntrada` text NOT NULL,
  `Cargo` varchar(60) NOT NULL,
  `Telefone` text NOT NULL,
  `CPF` text NOT NULL,
  `NomeRua` text NOT NULL,
  `Numero` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Membros`
--

INSERT INTO `Membros` (`CodMembro`, `Nome`, `Curso`, `AnoDeEntrada`, `Cargo`, `Telefone`, `CPF`, `NomeRua`, `Numero`, `Email`, `DataNascimento`, `Bairro`, `Estado`) VALUES
(1, 'Joao', '', '2016.1', 'Gerente', '1231313131', '17979807774', 'Rua Jose Aristides Pereira', 13, 'joaovitormunizlopes@gmail.com', '1997-03-13', 'Solares', 1),
(7, 'Marcolindo', 'Egc', '2016', 'Gerente', '1313131', '313131', 'Araruama', 123, 'joao_dakomb@hotmail.com', '1223-03-12', 'Araruama', 1),
(8, 'Rogerio Skylab', 'Egc', '2016', 'Gerente', '1313131', '3131313', 'Araruama', 24, 'joao_dakomb@hotmail.com', '1331-03-31', 'Araruama', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Membros`
--
ALTER TABLE `Membros`
  ADD PRIMARY KEY (`CodMembro`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Membros`
--
ALTER TABLE `Membros`
  MODIFY `CodMembro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
