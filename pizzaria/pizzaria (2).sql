-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Set-2023 às 22:02
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `fkLogin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `fkLogin`) VALUES
(2147483647, 'joana', 'ana@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idEndereco` int(11) NOT NULL,
  `rua` varchar(35) NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` int(11) NOT NULL,
  `fkCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idEndereco`, `rua`, `numero`, `cep`, `fkCliente`) VALUES
(6, 'rua', 40, 1232323, 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `fkLogin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itempedido`
--

CREATE TABLE `itempedido` (
  `idItemPedido` int(11) NOT NULL,
  `fkPedido` int(11) NOT NULL,
  `quantidade` int(1) NOT NULL,
  `fkPizza` varchar(50) DEFAULT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itempedido`
--

INSERT INTO `itempedido` (`idItemPedido`, `fkPedido`, `quantidade`, `fkPizza`, `valor`) VALUES
(149, 56, 1, 'Bacon', 45),
(150, 56, 1, 'Calabresa', 40),
(151, 56, 1, 'Pizza de Azeitona com cogumelos', 35),
(152, 56, 1, 'Quatro Queijos', 30),
(153, 57, 1, 'Pizza de Azeitona com cogumelos', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `permissoes` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`email`, `senha`, `permissoes`) VALUES
('ana@hotmail.com', '123123', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `fkCliente` int(11) DEFAULT NULL,
  `valorTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idPedido`, `data`, `fkCliente`, `valorTotal`) VALUES
(56, '2023-09-11 14:26:18', 2147483647, 150),
(57, '2023-09-11 14:46:09', 2147483647, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizza`
--

CREATE TABLE `pizza` (
  `nome` varchar(50) NOT NULL,
  `ingredientes` text DEFAULT NULL,
  `img_url` varchar(200) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pizza`
--

INSERT INTO `pizza` (`nome`, `ingredientes`, `img_url`, `valor`) VALUES
('Bacon', 'Bacon, quijo mussarela, milho, catupiry', './images/pizza-de-vista-frontal-com-tomate-vermelho-e-queijo-na-mesa-redonda-de-madeira-marrom-e-piso-cinza.jpg', 45),
('Calabresa', 'Calabresa, queijo mussarela, oregano, catupiry', './images/feche-a-pizza-italiana-sobre-o-queijo-cole-o-foco-seletivo-generativo-ai.jpg', 40),
('Pizza de Azeitona com cogumelos', 'Azeitona preta, champignon, calabresa e mussarela.', './images/pizza-recem-assada-na-mesa-de-madeira-rustica-gerada-por-ia.jpg', 35),
('Quatro Queijos', 'Queijo mussarela, gorgonzola, parmesão, provolone, oregano, caputupiry.', './images/pizza-quatro-queijos-em-cima-da-mesa.jpg', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `idRelatorio` int(11) NOT NULL,
  `concluido` tinyint(1) DEFAULT NULL,
  `fkPedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `fkLogin` (`fkLogin`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEndereco`),
  ADD KEY `fkCliente` (`fkCliente`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`),
  ADD KEY `fkLogin` (`fkLogin`);

--
-- Índices para tabela `itempedido`
--
ALTER TABLE `itempedido`
  ADD PRIMARY KEY (`idItemPedido`),
  ADD KEY `fkPedido` (`fkPedido`),
  ADD KEY `fkPizza` (`fkPizza`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `fkCliente` (`fkCliente`);

--
-- Índices para tabela `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`nome`);

--
-- Índices para tabela `relatorio`
--
ALTER TABLE `relatorio`
  ADD PRIMARY KEY (`idRelatorio`),
  ADD KEY `fkPedido` (`fkPedido`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itempedido`
--
ALTER TABLE `itempedido`
  MODIFY `idItemPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `relatorio`
--
ALTER TABLE `relatorio`
  MODIFY `idRelatorio` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`fkLogin`) REFERENCES `login` (`email`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`cpf`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`fkLogin`) REFERENCES `login` (`email`);

--
-- Limitadores para a tabela `itempedido`
--
ALTER TABLE `itempedido`
  ADD CONSTRAINT `itemPedido_ibfk_1` FOREIGN KEY (`fkPedido`) REFERENCES `pedido` (`idPedido`),
  ADD CONSTRAINT `itemPedido_ibfk_2` FOREIGN KEY (`fkPizza`) REFERENCES `pizza` (`nome`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`cpf`);

--
-- Limitadores para a tabela `relatorio`
--
ALTER TABLE `relatorio`
  ADD CONSTRAINT `relatorio_ibfk_1` FOREIGN KEY (`fkPedido`) REFERENCES `pedido` (`idPedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
