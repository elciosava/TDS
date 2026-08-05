-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Ago-2026 às 02:11
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `saep_clientes`
--

CREATE TABLE `saep_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(30) DEFAULT NULL,
  `email_cliente` varchar(50) DEFAULT NULL,
  `telefone_cliente` varchar(15) DEFAULT NULL,
  `cidade_cliente` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `saep_clientes`
--

INSERT INTO `saep_clientes` (`id_cliente`, `nome_cliente`, `email_cliente`, `telefone_cliente`, `cidade_cliente`) VALUES
(1, 'Aline Beatriz', 'biaah.valle@gmail.com', '2147483647', 'União da Vitória'),
(6, 'Maria Alice', 'malice@gmail.com', '42999626231', 'União da Vitória'),
(7, 'HLR', 'hlr@gmail', '4299946017', 'Porto União');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `saep_clientes`
--
ALTER TABLE `saep_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `saep_clientes`
--
ALTER TABLE `saep_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
