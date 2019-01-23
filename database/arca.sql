-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2017 às 03:44
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Auto'),
(2, 'Beauty and Fitness'),
(3, 'Entertainment'),
(4, 'Food and Dining'),
(5, 'Health'),
(6, 'Sports'),
(7, 'Travel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `descricao` varchar(160) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `titulo`, `telefone`, `endereco`, `cep`, `cidade`, `estado`, `descricao`, `categoria`) VALUES
(1, 'Auto Mecanica', '14 3264-5173', 'Avenida Brasil, n29', '18.680.000', 'Lençóis Paulista', 'SP', 'Auto mecanica em Lençóis', 1),
(2, 'Viagem e Cia', '14 3264-0559', 'Rua XV de Novembro, n45', '18.908-000', 'Lençóis Paulista', 'SP', 'Viagens para todo o Brasil', 7),
(3, 'Centauro', '14 1234-9876', 'Rua 28 de abril, n654', '18.876-098', 'Bauru', 'SP', ' Loja de roupas esportivas', 6),
(4, 'Academia Morubi', '14 2345-5678', 'Avenida Cruzeiro do Sul', '18.789-098', 'Agudos', 'SP', 'Academia Morumbi aberto 24h ', 2),
(5, 'McDonalds', '14 3232-3155', 'R. Batista de Carvalho,78', '17010-001', 'Bauru', 'SP', 'Rede de fast-food ', 4),
(6, 'Radio Difusora', '14 3269-3300', 'R. Pedro NatÃ¡lio Lorenzeti, 172', '18680-110', 'LenÃ§Ã³is Paulista', 'SP', 'EstaÃ§Ã£o de rÃ¡dio em LenÃ§Ã³is Paulista', 3),
(7, 'Jornal Cidade de Bauru', '14 3104-3104', 'Rua Xingu, 44 Quadra 4', '17013-903', 'Bauru', 'SP', ' Editora de jornais em Bauru', 3),
(8, 'Hospital Estadual de Bauru', '14 3103-7777', 'Avenida Engenheiro Luiz Edmundo Carrijo Coube 1-10', '17033-360', 'Bauru', 'SP', ' Hospital em Bauru', 5),
(9, 'Hospital Unimed Bauru', '14 3103-2121', ' Av. Dr. Arnaldo Prado Curvello, 10-110', '17035-252', 'Bauru', 'SP', ' Hospital Unimed', 5),
(10, 'Academia Just Fit', '14 3223-1234', ' Av. GetÃºlio Vargas, 8-15', '17017-332', 'Bauru', 'SP', ' Spa e academia de ginÃ¡stica em Bauru', 2),
(11, 'Motoclinica', '14 3203-4000', 'R. Prof. Francisco Antunes, 178', '17028-060', 'Bauru', 'SP', ' Oficina de automÃ³veis em Bauru', 1),
(12, 'Restaurante Camponesa', '14 3223-7400', 'Av. InÃ¡cio ConceiÃ§Ã£o ViÃªira, 1445', '17048-011', 'Bauru', 'SP', ' Restaurante de pratos fartos com destaque a parmegiana', 4),
(13, 'Techtur', '14 3223-5003', 'R. Alberto Segalla, 1-95', '17012-634', 'Bauru', 'SP', ' Agencia de turismo em Bauru', 7),
(14, 'Lider Sport', '14 3222-6712', 'R. Batista de Carvalho, 2-80', '17010-001', 'Bauru', 'SP', ' Loja de artigos esportivos em Bauru', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
