-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Maio-2022 às 23:00
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `system_supernac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `ID` int(11) NOT NULL,
  `IDU` int(11) NOT NULL,
  `IDP` int(11) NOT NULL,
  `QTD_CARRINHO` int(11) NOT NULL,
  `DATA` datetime NOT NULL DEFAULT current_timestamp(),
  `NOME` varchar(120) NOT NULL,
  `DESCRICAO` varchar(500) NOT NULL,
  `CATEGORIA` enum('Mercearia','Hortifruti','Carnes','Padaria','Bebidas','Limpeza','Eletronicos','Informatica') NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  `PRECO` float NOT NULL,
  `FOTO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `DESCRICAO` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `CATEGORIA` enum('Mercearia','Hortifruti','Carnes','Padaria','Bebidas','Limpeza','Eletronicos','Informatica') CHARACTER SET utf8mb4 NOT NULL,
  `OFERTA` enum('S','N') CHARACTER SET utf8mb4 NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  `PRECO` float NOT NULL,
  `FOTO` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID`, `NOME`, `DESCRICAO`, `CATEGORIA`, `OFERTA`, `QUANTIDADE`, `PRECO`, `FOTO`) VALUES
(1, 'Arroz Tio Joao', 'Arroz branco Tio Joao', 'Mercearia', 'N', 101, 11, 'Produtos/1_1647227660.png'),
(2, 'Batata Palha Yoki', 'Batata palha yoki tradicional 105g', 'Mercearia', 'N', 140, 23, 'Produtos/2_1647228029.png'),
(3, 'Acucar Uniao', 'Acucar granulado uniao', 'Mercearia', 'N', 99, 20, 'Produtos/3_1647228075.png'),
(4, 'Whisky Jack Daniel\'s', 'Whisky Jack Daniel\'s 1L', 'Bebidas', 'N', 100, 200, 'Produtos/4_1647228279.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(120) NOT NULL,
  `CPF` varchar(50) NOT NULL,
  `EMAIL` varchar(280) NOT NULL,
  `SENHA` varchar(280) NOT NULL,
  `TIPO` enum('Cliente','Administrador','Funcionario') NOT NULL,
  `FOTO` varchar(280) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOME`, `CPF`, `EMAIL`, `SENHA`, `TIPO`, `FOTO`) VALUES
(1, 'Cristyan Henrich Rodrigues Da Silva', '141.632.816-57', 'cristyanhenrich16@gmail.com', '123456', 'Administrador', 'Usuarios/1_1647199447.png'),
(2, 'Cristyan Henrich', '1233441441', 'cristyanhenrich23@gmail.com', '123456', 'Cliente', 'Usuarios/2_1647203694.png'),
(3, 'Maria Andrade', '123456789', 'mariaandrade@gmail.com', '123456', 'Cliente', 'Usuarios/3_1647203865.png'),
(4, 'Anderson', '12345678910', 'andersonacr@yahoo.com.br ', '123', 'Cliente', 'Usuarios/4_1648163818.png'),
(5, 'Anderson', '12345678910', 'andersonacr@yahoo.com.br ', '123', 'Cliente', 'Usuarios/5_1648164074.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `ID` int(11) NOT NULL,
  `IDU` int(11) NOT NULL,
  `NOME` varchar(120) NOT NULL,
  `CPF` int(11) NOT NULL,
  `DATA` datetime NOT NULL DEFAULT current_timestamp(),
  `PRODUTOS_QTD` varchar(11) NOT NULL,
  `TOTAL_VENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`ID`, `IDU`, `NOME`, `CPF`, `DATA`, `PRODUTOS_QTD`, `TOTAL_VENDA`) VALUES
(1, 5, 'Anderson', 2147483647, '2022-04-08 16:29:30', '5', 11),
(2, 5, 'Anderson', 2147483647, '2022-04-11 20:03:06', '5', 11),
(3, 5, 'Anderson', 2147483647, '2022-04-11 20:03:06', '5', 34),
(4, 5, 'Anderson', 2147483647, '2022-04-11 20:03:06', '5', 54),
(5, 5, 'Anderson', 2147483647, '2022-04-11 20:05:27', '5', 200);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
