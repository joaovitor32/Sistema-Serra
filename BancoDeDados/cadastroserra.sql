-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18/07/2019 às 01:40
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
-- Estrutura para tabela `Acao`
--

CREATE TABLE `Acao` (
  `CodAcao` bigint(20) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descricao` varchar(200) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Acao`
--

INSERT INTO `Acao` (`CodAcao`, `Nome`, `Descricao`, `Data`) VALUES
(1, 'Prospecao', 'Ajudou na prospecacao\r\n', '2019-04-18'),
(2, 'Prospecao', 'Ajudou na prospecacao\r\n', '2019-04-18'),
(3, 'Limpeza', 'afdsgfhdfjgmhnhgsrme lkeregsdhgjf gshmrwljNAMGSNF BDJGARRglkfgarKLWKNJBG AFHSGNKLAGÇKrçlLRKGAKNFHSKLHMFÇLGÇLFÇ]LGamklfnhsgklhmfçg]GMKAHNSKLMFLGÇÇL~LGçkmanhksg', '2019-04-11'),
(4, 'Limpeza', 'afdsgfhdfjgmhnhgsrme lkeregsdhgjf gshmrwljNAMGSNF BDJGARRglkfgarKLWKNJBG AFHSGNKLAGÇKrçlLRKGAKNFHSKLHMFÇLGÇLFÇ]LGamklfnhsgklhmfçg]GMKAHNSKLMFLGÇÇL~LGçkmanhksg', '2019-04-11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `AcaoMembro`
--

CREATE TABLE `AcaoMembro` (
  `CodAcao` bigint(20) NOT NULL,
  `CodMembro` bigint(20) NOT NULL,
  `DataIni` date NOT NULL,
  `DataFim` date NOT NULL,
  `Atividades` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `AcaoMembro`
--

INSERT INTO `AcaoMembro` (`CodAcao`, `CodMembro`, `DataIni`, `DataFim`, `Atividades`) VALUES
(1, 1, '2019-04-03', '2019-04-27', 'Ajudou em algo'),
(1, 1, '2019-04-03', '2019-04-27', 'Ajudou em algo'),
(2, 1, '2019-04-03', '2019-04-10', '12324213423rddfsbd'),
(2, 1, '2019-04-03', '2019-04-10', '12324213423rddfsbd'),
(3, 1, '2019-04-19', '2019-04-13', 'dafsgdhfgfngffsafsgdhfmghdnfgsgffagsfdngfmhgffdgshdghfdmgfjh'),
(3, 1, '2019-04-19', '2019-04-13', 'dafsgdhfgfngffsafsgdhfmghdnfgsgffagsfdngfmhgffdgshdghfdmgfjh'),
(1, 1, '2019-04-03', '2019-04-27', 'Ajudou em algo'),
(1, 1, '2019-04-03', '2019-04-27', 'Ajudou em algo'),
(2, 1, '2019-04-03', '2019-04-10', '12324213423rddfsbd'),
(2, 1, '2019-04-03', '2019-04-10', '12324213423rddfsbd'),
(3, 1, '2019-04-19', '2019-04-13', 'dafsgdhfgfngffsafsgdhfmghdnfgsgffagsfdngfmhgffdgshdghfdmgfjh'),
(3, 1, '2019-04-19', '2019-04-13', 'dafsgdhfgfngffsafsgdhfmghdnfgsgffagsfdngfmhgffdgshdghfdmgfjh');

-- --------------------------------------------------------

--
-- Estrutura para tabela `EventosExternos`
--

CREATE TABLE `EventosExternos` (
  `CodEvento` bigint(20) NOT NULL,
  `NomeEventos` varchar(240) NOT NULL,
  `Data` date NOT NULL,
  `Descricao` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `EventosExternos`
--

INSERT INTO `EventosExternos` (`CodEvento`, `NomeEventos`, `Data`, `Descricao`) VALUES
(1, 'OpenLabs', '2019-07-18', 'dalsndflkanfaklnfa'),
(2, 'Senip', '2019-07-18', 'dsafsfbnb');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Login1`
--

CREATE TABLE `Login1` (
  `CodLogin` bigint(20) NOT NULL,
  `Login1` varchar(60) NOT NULL,
  `Senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Login1`
--

INSERT INTO `Login1` (`CodLogin`, `Login1`, `Senha`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `MembroEvento`
--

CREATE TABLE `MembroEvento` (
  `CodMembro` bigint(20) NOT NULL,
  `CodEvento` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `MembroEvento`
--

INSERT INTO `MembroEvento` (`CodMembro`, `CodEvento`) VALUES
(1, 1),
(1, 1),
(1, 2),
(1, 2);

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
(8, 'Rogerio Skylab', 'Egc', '2016', 'Gerente', '1313131', '3131313', 'Araruama', 24, 'joao_dakomb@hotmail.com', '1331-03-31', 'Araruama', 1),
(9, 'Ronaldinho Gaucho', 'Egc', '2016', 'Presidente', '1313131', '1313131313', 'Araruama', 12, 'joao_dakomb@hotmail.com', '0000-00-00', 'Araruama', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `MembroTreinamento`
--

CREATE TABLE `MembroTreinamento` (
  `CodMembro` bigint(20) NOT NULL,
  `CodTreinamento` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `MembroTreinamento`
--

INSERT INTO `MembroTreinamento` (`CodMembro`, `CodTreinamento`) VALUES
(1, 3),
(1, 3),
(1, 3),
(1, 3),
(1, 4),
(1, 4),
(1, 4),
(1, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Projeto`
--

CREATE TABLE `Projeto` (
  `CodProjeto` bigint(20) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `DataIni` date NOT NULL,
  `DataFim` date NOT NULL,
  `Preco` int(11) NOT NULL,
  `Descricao` varchar(200) NOT NULL,
  `Contratante` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Projeto`
--

INSERT INTO `Projeto` (`CodProjeto`, `Nome`, `DataIni`, `DataFim`, `Preco`, `Descricao`, `Contratante`) VALUES
(30, 'Biridin1', '1313-12-13', '1333-12-13', 1231, 'Projeto desenvolvido blabla', 'Injetec'),
(34, 'Ariel+Duda', '1222-12-12', '2222-12-12', 12121, 'Projeto desenvolvido blabla', 'Injetec'),
(53, 'Prospeccao', '0000-00-00', '1333-12-13', 12312, 'Projeto desenvolvido blabla', 'Injetec'),
(54, 'Prospec1', '1333-12-13', '1333-12-13', 1211, 'Projeto desenvolvido blabla', 'Injetec'),
(55, 'FotoQueNaoCadastra', '1333-12-13', '3333-12-13', 1313, 'Projeto desenvolvido blabla', 'Injetec');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ProjetoMembro`
--

CREATE TABLE `ProjetoMembro` (
  `CodMembro` int(11) NOT NULL,
  `CodProjeto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `ProjetoMembro`
--

INSERT INTO `ProjetoMembro` (`CodMembro`, `CodProjeto`) VALUES
(1, 30),
(1, 34);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Treinamento`
--

CREATE TABLE `Treinamento` (
  `CodTreinamento` bigint(20) NOT NULL,
  `DuracaoDias` int(11) NOT NULL,
  `HorasTotais` int(11) NOT NULL,
  `TipoTreinamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Treinamento`
--

INSERT INTO `Treinamento` (`CodTreinamento`, `DuracaoDias`, `HorasTotais`, `TipoTreinamento`) VALUES
(1, 12, 1324, 'Javascript'),
(2, 123243, 1232435, 'Php'),
(3, 12, 1324, 'Javascript'),
(4, 123243, 1232435, 'Php');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Acao`
--
ALTER TABLE `Acao`
  ADD PRIMARY KEY (`CodAcao`);

--
-- Índices de tabela `AcaoMembro`
--
ALTER TABLE `AcaoMembro`
  ADD KEY `CodAcao` (`CodAcao`,`CodMembro`),
  ADD KEY `CodMembro` (`CodMembro`);

--
-- Índices de tabela `EventosExternos`
--
ALTER TABLE `EventosExternos`
  ADD PRIMARY KEY (`CodEvento`);

--
-- Índices de tabela `Login1`
--
ALTER TABLE `Login1`
  ADD PRIMARY KEY (`CodLogin`);

--
-- Índices de tabela `MembroEvento`
--
ALTER TABLE `MembroEvento`
  ADD KEY `CodMembro` (`CodMembro`,`CodEvento`),
  ADD KEY `CodEvento` (`CodEvento`);

--
-- Índices de tabela `Membros`
--
ALTER TABLE `Membros`
  ADD PRIMARY KEY (`CodMembro`);

--
-- Índices de tabela `MembroTreinamento`
--
ALTER TABLE `MembroTreinamento`
  ADD KEY `CodMemro` (`CodMembro`,`CodTreinamento`),
  ADD KEY `CodTreinamento` (`CodTreinamento`);

--
-- Índices de tabela `Projeto`
--
ALTER TABLE `Projeto`
  ADD PRIMARY KEY (`CodProjeto`);

--
-- Índices de tabela `ProjetoMembro`
--
ALTER TABLE `ProjetoMembro`
  ADD PRIMARY KEY (`CodMembro`,`CodProjeto`);

--
-- Índices de tabela `Treinamento`
--
ALTER TABLE `Treinamento`
  ADD PRIMARY KEY (`CodTreinamento`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Acao`
--
ALTER TABLE `Acao`
  MODIFY `CodAcao` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `EventosExternos`
--
ALTER TABLE `EventosExternos`
  MODIFY `CodEvento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `Login1`
--
ALTER TABLE `Login1`
  MODIFY `CodLogin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `Membros`
--
ALTER TABLE `Membros`
  MODIFY `CodMembro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `Projeto`
--
ALTER TABLE `Projeto`
  MODIFY `CodProjeto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `Treinamento`
--
ALTER TABLE `Treinamento`
  MODIFY `CodTreinamento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `AcaoMembro`
--
ALTER TABLE `AcaoMembro`
  ADD CONSTRAINT `AcaoMembro_ibfk_1` FOREIGN KEY (`CodAcao`) REFERENCES `Acao` (`CodAcao`),
  ADD CONSTRAINT `AcaoMembro_ibfk_2` FOREIGN KEY (`CodMembro`) REFERENCES `Membros` (`CodMembro`);

--
-- Restrições para tabelas `MembroEvento`
--
ALTER TABLE `MembroEvento`
  ADD CONSTRAINT `MembroEvento_ibfk_2` FOREIGN KEY (`CodEvento`) REFERENCES `EventosExternos` (`CodEvento`),
  ADD CONSTRAINT `MembroEvento_ibfk_3` FOREIGN KEY (`CodMembro`) REFERENCES `Membros` (`CodMembro`);

--
-- Restrições para tabelas `MembroTreinamento`
--
ALTER TABLE `MembroTreinamento`
  ADD CONSTRAINT `MembroTreinamento_ibfk_1` FOREIGN KEY (`CodMembro`) REFERENCES `Membros` (`CodMembro`),
  ADD CONSTRAINT `MembroTreinamento_ibfk_2` FOREIGN KEY (`CodTreinamento`) REFERENCES `Treinamento` (`CodTreinamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
