-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2020 às 16:03
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vagasonline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `cpf_candidato` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `nome_candidato` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dataNascimento_candidato` date NOT NULL,
  `interesses_candidato` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `login_candidato` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha_candidato` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`cpf_candidato`, `nome_candidato`, `dataNascimento_candidato`, `interesses_candidato`, `login_candidato`, `senha_candidato`) VALUES
('000.111.333-40', 'Thais', '2000-06-20', 'programador,java,php,html,css,c#', 'thais', '202cb962ac59075b964b07152d234b70'),
('101.250.020-00', 'Matheus', '2000-05-13', 'programador,java,php,html,css,c#', 'matheus', '202cb962ac59075b964b07152d234b70'),
('111.000.000-00', 'Leandro Silva', '2000-02-28', 'programador,java,php,html,css,c#', 'leandro', '202cb962ac59075b964b07152d234b70'),
('435.000.321-00', 'Gabriel Santos', '2000-11-15', 'programador,java,php,html,css,c#', 'gsantos', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endereco_empresa` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(19) COLLATE utf8_unicode_ci NOT NULL,
  `sobre_empresa` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `login_empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha_empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `endereco_empresa`, `cnpj`, `sobre_empresa`, `login_empresa`, `senha_empresa`) VALUES
(1, 'Universidade Guarulhos', 'R. Eng. Prestes Maia, 88 - Centro, Guarulhos - SP', '00.000.000/0000-12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', 'ung', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscritos_vaga`
--

CREATE TABLE `inscritos_vaga` (
  `id_inscritoVaga` int(11) NOT NULL,
  `id_vaga` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id_mensagens` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `texto_mensagens` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id_vaga` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nome_vaga` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `salario_vaga` decimal(7,2) NOT NULL,
  `regimeContratacao_vaga` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `regiao_vaga` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `exigencias_vaga` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `maxInscritos_vaga` int(4) NOT NULL,
  `categoria_vaga` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `palavrasChave_vaga` varchar(80) CHARACTER SET utf8 NOT NULL,
  `qntVagasDisponivel_vaga` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id_vaga`, `id_empresa`, `nome_vaga`, `salario_vaga`, `regimeContratacao_vaga`, `regiao_vaga`, `exigencias_vaga`, `maxInscritos_vaga`, `categoria_vaga`, `palavrasChave_vaga`, `qntVagasDisponivel_vaga`) VALUES
(1, 1, 'Programador PHP', '1500.00', 'clt', 'Guarulhos - SP', 'Programa, desenvolve e implanta sistemas em linguagem PHP. Realiza correções em sistemas para atender às necessidades dos usuários. Desenvolve trabalhos de montagem, depuração e testes de programas já desenvolvidos. Programação em PHP utilizando banco de dados MySql.', 30, 'programador', 'programador,programador php,php,html,css', 10),
(2, 1, 'Desenvolvedor C# .Net', '2500.00', 'clt', 'São Paulo - SP', 'Atuar na análise e desenvolvimento de sistemas em .Net, C#; Implementar melhorias baseada na análise dos resultados obtidos; Evoluir a ferramenta, criando novos dashboards para análise em tempo real pelo cliente. Trabalhar em uma suíte de produtos para análise e gestão de fraudes, utilizando recursos mais recentes de Desenvolvimento; Experiência em desenvolvimento com .NET e C# Conhecimento com orientação a objeto; polimorfismo; Dapper e/ou Entity Framework Core; Conhecimento em WebServices REST', 45, 'programador', 'programador, programador c#, .net', 15);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`cpf_candidato`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices para tabela `inscritos_vaga`
--
ALTER TABLE `inscritos_vaga`
  ADD PRIMARY KEY (`id_inscritoVaga`);

--
-- Índices para tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id_mensagens`);

--
-- Índices para tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id_vaga`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `inscritos_vaga`
--
ALTER TABLE `inscritos_vaga`
  MODIFY `id_inscritoVaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_mensagens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id_vaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
