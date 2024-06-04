-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/05/2024 às 14:21
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdacademia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbexercicio`
--

CREATE TABLE `tbexercicio` (
  `id_exercicio` int(11) UNSIGNED NOT NULL,
  `id_treino` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `foto_exercicio` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `serie` int(11) DEFAULT NULL,
  `repeticoes` int(11) DEFAULT NULL,
  `descanco_entre_series` time DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbexercicio`
--

INSERT INTO `tbexercicio` (`id_exercicio`, `id_treino`, `foto_exercicio`, `nome`, `serie`, `repeticoes`, `descanco_entre_series`, `descricao`) VALUES
(12, 5, '../img/treinos/exercicios665358ad62ccb.jpg', 'Cardio-Esteira - 10 min', 1, 1, '00:01:00', '....'),
(13, 5, '../img/treinos/exercicios665356d7108ab.jpg', 'Cadeira - adutora', 3, 15, '00:00:45', 'Abra bastante as pernas'),
(14, 5, '../img/treinos/exercicios/665357027fd7c.jpg', 'Abdominal-supra-solo', 3, 15, '00:00:50', 'levante ate a cabeca chegar perto do joelho'),
(15, 6, '../img/treinos/exercicios/6653579305181.jpg', 'Cardio-Esteira-10 min', 1, 1, '00:01:00', '...'),
(16, 6, '../img/treinos/exercicios/665357e49e220.jpg', 'Leg-Press', 3, 15, '00:00:49', 'levante sua perna ate ficar reta'),
(17, 7, '../img/treinos/exercicios/665358961ee5d.jpg', 'Cardio-Esteira - 10 min', 1, 1, '00:00:01', '..'),
(18, 7, '../img/treinos/exercicios/665358dfc9f8e.jpg', 'mesa-flexadora', 3, 15, '00:00:50', 'Levante bem sua perna');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpersonal`
--

CREATE TABLE `tbpersonal` (
  `id_adm` int(11) UNSIGNED NOT NULL,
  `foto_personal` varchar(50) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbpersonal`
--

INSERT INTO `tbpersonal` (`id_adm`, `foto_personal`, `nome`, `email`, `senha`, `telefone`) VALUES
(4, '../img/personal/66534faa3f834.jpg', 'Joao Victor Lino Ripardo', 'jv@gmail.com', '123', '(88) 99490-2661'),
(6, '../img/personal/66535bbc757a1.jpg', 'Thais Gabriella ', 'thais@gmail.com', '123', '(88) 12345-6789'),
(7, '../img/personal/66535bdcf3704.jpg', 'kaiozin lira', 'kaio@gmail.com', '123', '(88) 99390-2661');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtreino`
--

CREATE TABLE `tbtreino` (
  `id_treino` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtreino`
--

INSERT INTO `tbtreino` (`id_treino`, `nome`, `descricao`) VALUES
(5, 'Treino A', 'Abdômen, Pernas'),
(6, 'Treino B', 'Membro inferiores'),
(7, 'Treino C', 'Membros superiores');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtreinorealizado`
--

CREATE TABLE `tbtreinorealizado` (
  `id_finalizado` int(10) UNSIGNED NOT NULL,
  `id_usu` int(10) UNSIGNED NOT NULL,
  `id_treino` int(11) UNSIGNED NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtreinorealizado`
--

INSERT INTO `tbtreinorealizado` (`id_finalizado`, `id_usu`, `id_treino`, `data`) VALUES
(13, 16, 5, '2024-05-26'),
(14, 15, 5, '2024-05-26'),
(15, 15, 6, '2024-05-26'),
(16, 15, 7, '2024-05-26');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusu`
--

CREATE TABLE `tbusu` (
  `id_usu` int(11) UNSIGNED NOT NULL,
  `foto_usu` varchar(50) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `atividade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusu`
--

INSERT INTO `tbusu` (`id_usu`, `foto_usu`, `nome`, `email`, `senha`, `telefone`, `atividade`) VALUES
(15, '../img/usuarios/6653b54a4bc83.jpg', 'Thais Gabriella ', 'thais@gmail.com', '123', '(88) 99282-7023', 'ativo'),
(16, '../img/usuarios/66537ae8857d9.jpg', 'Thais Gabriella ', 'th@gmail.com', '123', '(88) 99322-4555', 'ativo'),
(17, '../img/usuarios/6653598cae7e8.jpg', 'kaiozin lira', '', '123', '(88) 99282-7023', 'ativo'),
(18, '../img/usuarios/6653598cd5251.jpg', 'kaiozin lira', '', '123', '(88) 99282-7023', 'ativo'),
(19, '../img/usuarios/665359bb85659.jpg', 'Mateus veras', 'mateus@gmail.com', '123', '(88) 99290-2331', 'ativo'),
(20, '../img/usuarios/665359f8317f9.jpg', 'Madson ', 'madson@gmail.com', '123', '(88) 12345-6789', 'ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbexercicio`
--
ALTER TABLE `tbexercicio`
  ADD PRIMARY KEY (`id_exercicio`) USING BTREE,
  ADD KEY `FKtreino_exercicio` (`id_treino`);

--
-- Índices de tabela `tbpersonal`
--
ALTER TABLE `tbpersonal`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices de tabela `tbtreino`
--
ALTER TABLE `tbtreino`
  ADD PRIMARY KEY (`id_treino`);

--
-- Índices de tabela `tbtreinorealizado`
--
ALTER TABLE `tbtreinorealizado`
  ADD PRIMARY KEY (`id_finalizado`) USING BTREE,
  ADD KEY `FK_tbtreinorealizado_tbtreino` (`id_treino`),
  ADD KEY `FK_tbtreinorealizado_tbusu` (`id_usu`);

--
-- Índices de tabela `tbusu`
--
ALTER TABLE `tbusu`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbexercicio`
--
ALTER TABLE `tbexercicio`
  MODIFY `id_exercicio` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbpersonal`
--
ALTER TABLE `tbpersonal`
  MODIFY `id_adm` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbtreino`
--
ALTER TABLE `tbtreino`
  MODIFY `id_treino` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbtreinorealizado`
--
ALTER TABLE `tbtreinorealizado`
  MODIFY `id_finalizado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbusu`
--
ALTER TABLE `tbusu`
  MODIFY `id_usu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbexercicio`
--
ALTER TABLE `tbexercicio`
  ADD CONSTRAINT `FKtreino_exercicio` FOREIGN KEY (`id_treino`) REFERENCES `tbtreino` (`id_treino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tbtreinorealizado`
--
ALTER TABLE `tbtreinorealizado`
  ADD CONSTRAINT `FK_tbtreinorealizado_tbtreino` FOREIGN KEY (`id_treino`) REFERENCES `tbtreino` (`id_treino`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbtreinorealizado_tbusu` FOREIGN KEY (`id_usu`) REFERENCES `tbusu` (`id_usu`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
