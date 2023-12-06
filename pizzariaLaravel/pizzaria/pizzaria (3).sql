-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 06:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `fkLogin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `fkLogin`) VALUES
('12312312312', 'fulano', 'fulano@email.com'),
('1233123212', 'fulano2', 'fulano2@email.com'),
('2147483647', 'joana', 'ana@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

CREATE TABLE `endereco` (
  `idEndereco` int(11) NOT NULL,
  `rua` varchar(35) NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `fkCliente` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `endereco`
--

INSERT INTO `endereco` (`idEndereco`, `rua`, `numero`, `cep`, `fkCliente`) VALUES
(6, 'rua', 40, '1232323', '2147483647'),
(24, 'rua', 56, '12312123', '12312312312'),
(25, 'rua', 67, '7386434', '1233123212');

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `fkLogin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `fkLogin`) VALUES
(1, 'Admin', 'admin@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `itempedido`
--

CREATE TABLE `itempedido` (
  `fkPedido` int(11) NOT NULL,
  `quantidade` int(1) NOT NULL,
  `fkPizza` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `itempedido`
--

INSERT INTO `itempedido` (`fkPedido`, `quantidade`, `fkPizza`) VALUES
(56, 1, 'Bacon'),
(56, 1, 'Calabresa'),
(56, 1, 'Pizza de Azeitona com cogumelos'),
(56, 1, 'Quatro Queijos'),
(57, 1, 'Pizza de Azeitona com cogumelos'),
(58, 3, 'Bacon'),
(58, 1, 'Calabresa'),
(58, 2, 'Pizza de Azeitona com cogumelos'),
(58, 3, 'Quatro Queijos'),
(59, 3, 'Bacon'),
(59, 1, 'Calabresa'),
(59, 2, 'Pizza de Azeitona com cogumelos'),
(59, 3, 'Quatro Queijos'),
(60, 1, 'Bacon'),
(60, 2, 'Calabresa'),
(60, 4, 'Pizza de Azeitona com cogumelos'),
(60, 2, 'Quatro Queijos'),
(61, 2, 'Bacon'),
(61, 1, 'Calabresa'),
(61, 2, 'Quatro Queijos'),
(62, 4, 'Bacon'),
(62, 1, 'Calabresa'),
(62, 2, 'Pizza de Azeitona com cogumelos'),
(62, 1, 'Quatro Queijos'),
(64, 4, 'Bacon'),
(64, 1, 'Calabresa'),
(64, 2, 'Pizza de Azeitona com cogumelos'),
(64, 1, 'Quatro Queijos'),
(66, 4, 'Bacon'),
(66, 2, 'Calabresa'),
(66, 2, 'Quatro Queijos'),
(67, 4, 'Bacon'),
(67, 2, 'Calabresa'),
(67, 1, 'Pizza de Azeitona com cogumelos'),
(67, 2, 'Quatro Queijos');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `permissoes` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `senha`, `permissoes`) VALUES
('admin@email.com', '123123', 3),
('ana@hotmail.com', '123123', 0),
('fulano2@email.com', '123123', 0),
('fulano@email.com', '123123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `fkCliente` varchar(11) DEFAULT NULL,
  `concluido` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`idPedido`, `data`, `fkCliente`, `concluido`) VALUES
(56, '2023-09-11 14:26:18', '2147483647', 1),
(57, '2023-09-11 14:46:09', '2147483647', 1),
(58, '2023-10-28 18:50:50', '2147483647', 1),
(59, '2023-10-28 18:51:19', '2147483647', 1),
(60, '2023-10-28 21:21:38', '2147483647', 1),
(61, '2023-10-29 19:49:58', '2147483647', 1),
(62, '2023-10-29 20:15:02', '2147483647', 1),
(64, '2023-10-31 17:54:24', '2147483647', 1),
(66, '2023-10-31 18:51:08', '2147483647', 0),
(67, '2023-11-01 02:30:25', '2147483647', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `nome` varchar(50) NOT NULL,
  `ingredientes` text DEFAULT NULL,
  `img_url` varchar(200) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`nome`, `ingredientes`, `img_url`, `valor`) VALUES
('Bacon', 'Bacon, queijo mussarela, milho, catupiry', './images/pizza-de-vista-frontal-com-tomate-vermelho-e-queijo-na-mesa-redonda-de-madeira-marrom-e-piso-cinza.jpg', 45),
('Calabresa', 'Calabresa, queijo mussarela, orégano, catupiry', './images/feche-a-pizza-italiana-sobre-o-queijo-cole-o-foco-seletivo-generativo-ai.jpg', 40),
('Pizza de Azeitona com cogumelos', 'Azeitona preta, champignon, calabresa e mussarela.', './images/pizza-recem-assada-na-mesa-de-madeira-rustica-gerada-por-ia.jpg', 35),
('Quatro Queijos', 'Queijo mussarela, gorgonzola, parmesão, provolone, orégano, catupiry.', './images/pizza-quatro-queijos-em-cima-da-mesa.jpg', 30);

-- --------------------------------------------------------

--
-- Table structure for table `relatorio`
--

CREATE TABLE `relatorio` (
  `idRelatorio` int(11) NOT NULL,
  `concluido` tinyint(1) DEFAULT NULL,
  `fkPedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `fkLogin` (`fkLogin`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEndereco`),
  ADD KEY `fkCliente` (`fkCliente`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`),
  ADD KEY `fkLogin` (`fkLogin`);

--
-- Indexes for table `itempedido`
--
ALTER TABLE `itempedido`
  ADD PRIMARY KEY (`fkPedido`,`fkPizza`),
  ADD KEY `fkPedido` (`fkPedido`),
  ADD KEY `fkPizza` (`fkPizza`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `fkCliente` (`fkCliente`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`nome`);

--
-- Indexes for table `relatorio`
--
ALTER TABLE `relatorio`
  ADD PRIMARY KEY (`idRelatorio`),
  ADD KEY `fkPedido` (`fkPedido`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `relatorio`
--
ALTER TABLE `relatorio`
  MODIFY `idRelatorio` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`fkLogin`) REFERENCES `login` (`email`);

--
-- Constraints for table `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`cpf`);

--
-- Constraints for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`fkLogin`) REFERENCES `login` (`email`);

--
-- Constraints for table `itempedido`
--
ALTER TABLE `itempedido`
  ADD CONSTRAINT `itemPedido_ibfk_1` FOREIGN KEY (`fkPedido`) REFERENCES `pedido` (`idPedido`) ON DELETE CASCADE,
  ADD CONSTRAINT `itemPedido_ibfk_2` FOREIGN KEY (`fkPizza`) REFERENCES `pizza` (`nome`);

--
-- Constraints for table `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`cpf`);

--
-- Constraints for table `relatorio`
--
ALTER TABLE `relatorio`
  ADD CONSTRAINT `relatorio_ibfk_1` FOREIGN KEY (`fkPedido`) REFERENCES `pedido` (`idPedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
