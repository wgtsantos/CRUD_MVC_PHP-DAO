-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Set-2022 às 19:18
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
-- Banco de dados: `crud_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `preco` float NOT NULL,
  `marca` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `marca`, `quantidade`, `imagem`) VALUES
(1, 'Teclado', 145.9, 'Corsair', 30, 'Teclado_2055494714.png'),
(2, 'Mouse', 300, 'redragon', 33, 'Mouse_2020138154.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `sexo` char(1) NOT NULL,
  `senha` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `cpf`, `telefone`, `sexo`, `senha`) VALUES
(1, 'Admin', 'ton@gmail.com', '031.951.686-50', '98956-8569', 'M', '$2y$10$4HQ4t/.CwLYNorC1OjPlZOQGWHMp4tfFeWHfreeUABFu0q0VfTY7S'),
(2, 'Alessandra Alves', 'marta@gmail.com', '153.806.076-08', '315555556677', 'F', '$2y$10$UJDJb/z88cPMaIy/2DljbuT2acJm3OJMItgTo1.EKZQC49UjQdpPu'),
(3, 'Fulano de tal', 'fulano@outlook.com', '04108955633', '31678678678', 'M', '$2y$10$oVJArz6dlGEoKN5bk1yhx.NzLFNg7TsYvXMF4CEyenck75VQgAmyG'),
(9, 'Ciclano', 'ciclano@hotmail.com', '23455345353', '31455679', 'F', '$2y$10$Mz6e8Bp9ZbxtVnCsyuhDne299dh7Od71Hsj17Jv/TkRRRTpcyATKq'),
(12, 'Wellington Pereira', 'well@gmail.com', '1111,1101111', '234234234234', 'M', '$2y$10$ZbFy5gvRbcoohhhglFpskOHo63BYnpL1uQP0L69t/0IwjMLebFHTy');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD UNIQUE KEY `id_produto_UNIQUE` (`id_produto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
