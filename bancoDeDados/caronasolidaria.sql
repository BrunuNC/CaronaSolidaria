-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Maio-2020 às 03:50
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `caronasolidaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(25) DEFAULT NULL,
  `dataNascimento` varchar(11) DEFAULT NULL,
  `RG` varchar(25) DEFAULT NULL,
  `CPF` varchar(25) DEFAULT NULL,
  `fone` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `login` varchar(25) DEFAULT NULL,
  `senha` varchar(25) DEFAULT NULL,
  `dataCadastro` date DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idUsuario`, `nomeUsuario`, `dataNascimento`, `RG`, `CPF`, `fone`, `email`, `login`, `senha`, `dataCadastro`, `cidade`) VALUES
(1, 'Joao', '20/05/1997', '4856994-4', '062.657.134-19', '(66)99965-6352', 'joao@email.com', NULL, NULL, '1975-12-21', 'Guaranta'),
(2, 'Maria', '25/04/1995', '2574852-2', '365.458.752-20', '(67)99965-6352', 'maria@email.com', NULL, NULL, NULL, 'Guaranta'),
(3, 'Carlos', '30/03/1993', '2156997-5', '685.657.148-50', '(68)99965-6352', 'carlos@email.com', NULL, NULL, NULL, 'Guaranta'),
(4, 'Breno', '05/03/1991', '4856994-5', '062.657.134-20', '(69)99965-6352', 'breno@email.com', NULL, NULL, NULL, 'Peixoto'),
(5, 'Mateus', '07/02/1989', '2574852-3', '365.458.752-21', '(70)99965-6352', 'mateus@email.com', NULL, NULL, '1975-12-21', 'Guaranta'),
(6, 'Thiago', '13/01/1987', '2156997-6', '685.657.148-51', '(71)99965-6352', 'thiago@email.com', NULL, NULL, NULL, 'Guaranta'),
(7, 'Marcelo', '18/12/1984', '4856994-6', '062.657.134-21', '(72)99965-6352', 'marcelo@email.com', NULL, NULL, NULL, 'Guaranta'),
(8, 'Patricia', '23/11/1982', '2574852-4', '365.458.752-22', '(73)99965-6352', 'patri@email.com', NULL, NULL, '1975-12-21', 'Guaranta'),
(9, 'Marla', '28/10/1980', '2156997-7', '685.657.148-52', '(74)99965-6352', 'marla@email.com', NULL, NULL, NULL, 'Guaranta'),
(10, 'Dariel', '03/10/1978', '4856994-7', '062.657.134-22', '(75)99965-6352', 'dariel@email.com', NULL, NULL, NULL, 'Guaranta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_passageiros`
--

CREATE TABLE `lista_passageiros` (
  `fk_viagem_idViagem` int(11) DEFAULT NULL,
  `fk_cliente_idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `idMotorista` int(11) NOT NULL,
  `numCNH` int(25) DEFAULT NULL,
  `fk_cliente_idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`idMotorista`, `numCNH`, `fk_cliente_idUsuario`) VALUES
(9, 4856994, NULL),
(10, 5256774, NULL),
(11, 2574852, NULL),
(12, 4825984, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `idVeiculo` int(11) NOT NULL,
  `marcaveiculo` varchar(25) DEFAULT NULL,
  `modelo` varchar(11) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `lotacao` int(2) DEFAULT NULL,
  `consumoCombustivel` double DEFAULT NULL,
  `fk_motorista_idMotorista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`idVeiculo`, `marcaveiculo`, `modelo`, `ano`, `lotacao`, `consumoCombustivel`, `fk_motorista_idMotorista`) VALUES
(1, 'Hyundai', 'HB20', 2017, 4, 12, NULL),
(2, 'Citroen', 'C3', 2015, 3, 9, NULL),
(3, 'Fiat', 'Uno', 2013, 4, 15, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `idViagem` int(11) NOT NULL,
  `pontoPartida` varchar(25) DEFAULT NULL,
  `PontoDestino` varchar(25) DEFAULT NULL,
  `horaPartida` varchar(25) DEFAULT NULL,
  `statusViagem` varchar(25) DEFAULT NULL,
  `valorTotalViagem` double DEFAULT NULL,
  `fk_motorista_idMotorista` int(11) DEFAULT NULL,
  `dataViagem` date DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `viagem`
--

INSERT INTO `viagem` (`idViagem`, `pontoPartida`, `PontoDestino`, `horaPartida`, `statusViagem`, `valorTotalViagem`, `fk_motorista_idMotorista`, `dataViagem`, `idUsuario`) VALUES
(41, 'Casa', 'Academia', '07:30', '6', 30, 9, '2020-03-10', 4),
(42, 'Escola', 'Casa', '11:00', '9', 50, 11, '2020-05-29', 2),
(43, 'Academia', 'Mercado', '09:00', '5', 25, 12, '2020-03-10', 3),
(44, 'Casa', 'Academia', '07:30', '5,6', 30, 9, '2020-05-29', 1),
(45, 'Escola', 'Casa', '11:00', '5,1', 27.5, 11, '2020-03-10', 7),
(46, 'Academia', 'Mercado', '09:00', '4,6', 2.5, 12, '2020-05-29', 10),
(47, 'Casa', 'Academia', '07:30', '4,1', 22.5, 11, '2020-03-10', 5),
(48, 'Escola', 'Casa', '11:00', '3,6', 2, 9, '2020-05-29', 4),
(49, 'Academia', 'Mercado', '09:00', '3,1', 17.5, 10, '2020-03-10', 8),
(50, 'Casa', 'Academia', '07:30', '2,6', 15, 12, '2020-04-30', 1),
(51, 'Escola', 'Casa', '11:00', '2,1', 12.5, 9, '2020-03-10', 8),
(52, 'Academia', 'Mercado', '09:00', '1,6', 10, 12, '2020-04-30', 10),
(53, 'Casa', 'Academia', '07:30', '1,1', 7.5, 9, '2020-03-10', 3),
(54, 'Escola', 'Casa', '11:00', '0,6', 5, 10, '2020-04-30', 6),
(55, 'Academia', 'Mercado', '09:00', '0,1', 2.5, 12, '2020-03-10', 7),
(56, 'Casa', 'Academia', '07:30', '0,3', 0, 11, '2020-04-30', 9),
(57, 'Escola', 'Casa', '11:00', '0,8', 2.5, 10, '2020-03-10', 5),
(58, 'Academia', 'Mercado', '09:00', '1,3', 5, 11, '2020-04-30', 7),
(59, 'Casa', 'Academia', '07:30', '1,8', 7.5, 9, '2020-03-10', 5),
(60, 'Escola', 'Casa', '11:00', '2,3', 10, 12, '2020-04-30', 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `nomeUsuario` (`nomeUsuario`,`login`);

--
-- Índices para tabela `lista_passageiros`
--
ALTER TABLE `lista_passageiros`
  ADD KEY `FK_lista_passageiros_1` (`fk_viagem_idViagem`),
  ADD KEY `FK_lista_passageiros_2` (`fk_cliente_idUsuario`);

--
-- Índices para tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`idMotorista`),
  ADD UNIQUE KEY `numCNH` (`numCNH`),
  ADD KEY `FK_motorista_2` (`fk_cliente_idUsuario`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`idVeiculo`),
  ADD KEY `FK_veiculo_1` (`fk_motorista_idMotorista`);

--
-- Índices para tabela `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`idViagem`),
  ADD KEY `FK_viagem_2` (`fk_motorista_idMotorista`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `idVeiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `viagem`
--
ALTER TABLE `viagem`
  MODIFY `idViagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `lista_passageiros`
--
ALTER TABLE `lista_passageiros`
  ADD CONSTRAINT `FK_lista_passageiros_1` FOREIGN KEY (`fk_viagem_idViagem`) REFERENCES `viagem` (`idViagem`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_lista_passageiros_2` FOREIGN KEY (`fk_cliente_idUsuario`) REFERENCES `cliente` (`idUsuario`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `motorista`
--
ALTER TABLE `motorista`
  ADD CONSTRAINT `FK_motorista_2` FOREIGN KEY (`fk_cliente_idUsuario`) REFERENCES `cliente` (`idUsuario`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `FK_veiculo_1` FOREIGN KEY (`fk_motorista_idMotorista`) REFERENCES `motorista` (`idMotorista`);

--
-- Limitadores para a tabela `viagem`
--
ALTER TABLE `viagem`
  ADD CONSTRAINT `FK_viagem_2` FOREIGN KEY (`fk_motorista_idMotorista`) REFERENCES `motorista` (`idMotorista`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
