-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2020 às 22:13
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
('435.000.321-00', 'Gabriel Santos', '2000-11-15', 'programador,java,php,html,css,python', 'gsantos', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endereco_empresa` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj_empresa` varchar(19) COLLATE utf8_unicode_ci NOT NULL,
  `sobre_empresa` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `login_empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha_empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `endereco_empresa`, `cnpj_empresa`, `sobre_empresa`, `login_empresa`, `senha_empresa`) VALUES
(1, 'Universidade Guarulhos', 'R. Eng. Prestes Maia, 88 - Centro, Guarulhos - SP', '00.000.000/0000-12', 'A Universidade Guarulhos, também conhecida como UNG, é uma instituição de ensino superior particular brasileira, fundada em 12 de agosto de 1970 Em 2014 possuía 18.300 alunos e 5 campus, sendo três em Guarulhos, um na cidade de São Paulo e outro em Itaquaquecetuba.', 'ung', '202cb962ac59075b964b07152d234b70'),
(2, 'Universidade de São Paulo', 'Butanta, São Paulo - SP', '00.132.000/0000-12', 'A Universidade de São Paulo é uma das quatro universidades públicas mantidas pelo governo do estado brasileiro de São Paulo, juntamente com a Universidade Estadual de Campinas, Universidade Estadual Paulista e a Universidade Virtual do Estado de São Paulo.', 'usp', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscritos_vaga`
--

CREATE TABLE `inscritos_vaga` (
  `id_inscritoVaga` int(11) NOT NULL,
  `id_vaga` int(11) NOT NULL,
  `cpf_candidato` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id_mensagens` int(11) NOT NULL,
  `cpf_candidato` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_vaga` int(11) NOT NULL,
  `texto_mensagens` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quemEnviou_mensagem` varchar(12) COLLATE utf8_unicode_ci NOT NULL
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
(2, 1, 'Desenvolvedor C# .Net', '2500.00', 'clt', 'São Paulo - SP', 'Atuar na análise e desenvolvimento de sistemas em .Net, C#; Implementar melhorias baseada na análise dos resultados obtidos; Evoluir a ferramenta, criando novos dashboards para análise em tempo real pelo cliente. Trabalhar em uma suíte de produtos para análise e gestão de fraudes, utilizando recursos mais recentes de Desenvolvimento; Experiência em desenvolvimento com .NET e C# Conhecimento com orientação a objeto; polimorfismo; Dapper e/ou Entity Framework Core; Conhecimento em WebServices REST', 45, 'programador', 'programador, programador c#, .net', 15),
(3, 1, 'Analista Programador Web', '99999.99', 'clt', 'Recife - PE', 'Desenvolvimento e manutenção de sistemas de informação web que atendem às mais diversas necessidades do varejo; - O desenvolvedor integrará o time que dá manutenção em sistemas em produção e também terá a oportunidade de participar de novos projetos desde o início. - Perfil autodidata, proativo, comprometido com o projeto, gostar de desafios; - Curso superior em Ciência da Computação ou correlatos; - Experiência com desenvolvimento web; - Domínio de Java e/ou Python; - Domínio de desenvolvimento', 1, 'programador', 'programador,analista,web,html,css', 2),
(4, 1, 'Desenvolvedor / Programador Web C# .NET Júnior', '20000.00', 'clt', 'São Paulo - SP', 'Desenvolvimento de aplicações Web / Desktop. Implementação das funcionalidades levantadas pelo departamento de análise. Integração de Sistemas. Automação de Processos. Desenvolvimento de webservices. Manutenção em aplicações existentes. Análise de causa raiz dos problemas reportados. Experiência Obrigatória: · T‐SQL; · Storage Procedures; · Integration Services; · C# (CSharp); Ensino superior completo e/ou cursando em Sistemas de Informação, Análise e desenvolvimento de sistemas, Tecnologia da I', 1, 'programador', 'programador,web,c#,.net,html,css', 5);

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
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `inscritos_vaga`
--
ALTER TABLE `inscritos_vaga`
  MODIFY `id_inscritoVaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_mensagens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id_vaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
