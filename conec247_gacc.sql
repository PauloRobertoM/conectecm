-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26/02/2025 às 15:36
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conec247_gacc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `paciente_nome` varchar(150) NOT NULL,
  `paciente_cpf` varchar(15) NOT NULL,
  `paciente_rg` varchar(25) NOT NULL,
  `paciente_data_nascimento` varchar(10) NOT NULL,
  `paciente_sexo` char(1) NOT NULL,
  `paciente_rua` varchar(255) DEFAULT NULL,
  `paciente_bairro` varchar(255) DEFAULT NULL,
  `paciente_cidade` varchar(255) NOT NULL,
  `paciente_estado` varchar(2) NOT NULL,
  `paciente_complemento` varchar(255) DEFAULT NULL,
  `pai_nome` varchar(150) NOT NULL,
  `pai_cpf` varchar(25) NOT NULL,
  `pai_rg` varchar(25) NOT NULL,
  `pai_profissao` varchar(255) NOT NULL,
  `mae_nome` varchar(150) NOT NULL,
  `mae_cpf` varchar(25) NOT NULL,
  `mae_rg` varchar(25) NOT NULL,
  `mae_profissao` varchar(255) NOT NULL,
  `qtd_residentes` int(11) NOT NULL,
  `telefone_fixo` varchar(25) DEFAULT NULL,
  `telefone_celular` varchar(25) DEFAULT NULL,
  `paciente_email` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `paciente_status` char(1) DEFAULT 't',
  `paciente_numero_casa` varchar(10) DEFAULT NULL,
  `paciente_renda_familiar` double DEFAULT NULL,
  `paciente_beneficio_social` varchar(255) DEFAULT NULL,
  `paciente_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `paciente_nome`, `paciente_cpf`, `paciente_rg`, `paciente_data_nascimento`, `paciente_sexo`, `paciente_rua`, `paciente_bairro`, `paciente_cidade`, `paciente_estado`, `paciente_complemento`, `pai_nome`, `pai_cpf`, `pai_rg`, `pai_profissao`, `mae_nome`, `mae_cpf`, `mae_rg`, `mae_profissao`, `qtd_residentes`, `telefone_fixo`, `telefone_celular`, `paciente_email`, `updated_at`, `created_at`, `paciente_status`, `paciente_numero_casa`, `paciente_renda_familiar`, `paciente_beneficio_social`, `paciente_foto`) VALUES
(70, 'Marici', '067.000.000-00', '1111111111111111111', '16/05/1990', 'f', 'Rua do centro', 'Centro', 'Natal', 'RN', 'perto da igreja', 'João', '000.000.000-00', '00000000000000000', 'Professor', 'Maria', '000.000.000-00', '000000000000000', 'Professor', 3, '(00) 00000-0000', '(00) 00000-0000', 'maurici@gmail.com', '2014-11-11 12:14:26', '2014-11-10 21:08:47', 't', '11', 0, 'Bolsa familia', '70.jpg'),
(71, 'MARIA JULIA DO NASCIMENTO', '000.999.900-09', '2234567', '12/12/1990', 'f', 'RUA DAS FLORES', 'LAGOA NOVA', 'RIO DE JANEIRO', 'RJ', 'APARTAMENTO , 654', 'JOSE MARIO NASCIMENTO ', '099.988.888-88', '876876', 'PEDREIRO', 'MARIA ADELAIDE NASCIMENTO', '099.888.889-88', '9879870', 'DOMESTICA', 4, '(09) 88887-8775', '(45) 34454-3345', 'mariajulia@hotmail.com', '2014-11-12 03:49:29', '2014-11-12 03:45:19', 't', '345', 1.22, 'BOLSA FAMILIA ', '71.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `patologias`
--

CREATE TABLE `patologias` (
  `id` int(11) NOT NULL,
  `patologia_tipo` varchar(255) DEFAULT NULL,
  `patologia_descoberta` text,
  `patologia_situacao` text,
  `patologia_encaminhamento` varchar(255) DEFAULT NULL,
  `patologia_medico` varchar(150) DEFAULT NULL,
  `medico_hospital_telefone_fixo` varchar(15) DEFAULT NULL,
  `medico_hospital_telefone_celular` varchar(15) DEFAULT NULL,
  `pacientes_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `patologias`
--

INSERT INTO `patologias` (`id`, `patologia_tipo`, `patologia_descoberta`, `patologia_situacao`, `patologia_encaminhamento`, `patologia_medico`, `medico_hospital_telefone_fixo`, `medico_hospital_telefone_celular`, `pacientes_id`, `created_at`, `updated_at`) VALUES
(46, 'Anemia', '- dores no corpo', 'em tratamento', 'HIVS', 'Dr. wilson', '(00) 00000-0000', '(00) 00000-0000', 70, '2014-11-10 21:08:47', '2014-11-10 21:08:47'),
(47, 'leucemia ', 'Mãe da criança descobriu patologia, logo após criança apresentar caso de frebre alta e dor no corpo.Após ser atendida no hospital de sua cidade foi transferida para o HIVS, onde foi descoberta a doença.\r\n', 'em tratamento no HIVS', 'hospital infantil -  HIVS', 'luiza', '(99) 99999-9999', '(87) 88888-7777', 71, '2014-11-12 03:49:29', '2014-11-12 03:49:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `funcao` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `funcao`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(2, 'Luan Oliveira', 'luan14_2011@yahoo.com.br', 'Flamengo sempre!', '$2y$10$TEHUnfIr/2b11t/LvK53E.OrnzE5rxexORNANsBTDgUs3wzgim71.', 'qG1xRFIovlqqsse7xDWt2tUyY3NPdZiSG8yDp0Da2avox3FakeEbIJ7vNoYH', '2014-11-17 21:56:43', '2014-10-12 23:18:27'),
(7, 'Herbert McDonald', 'herbertmcdonald@gmail.com', 'Gestor', '$2y$10$bLu6Jq3TLNF.VIRJNgMp3OQjZH.4EPzEGTOOUlN3cwTlGH/mAHj/C', 'x7MTaFFl1OytxmR4qz9ag46uVlt5Ll2uT9TwprXXcpP0lOF8wQS5azS9V7vb', '2014-12-03 10:30:05', '2014-11-10 01:28:39'),
(8, 'MARICI SOUZA PESSOA DE MEDEIROS', 'maricipessoa@yahoo.com.br', 'assistente social', '$2y$10$MMnDh87f3LWh.oN4Vz/mM.ykKVJxg6EvPspCwTVN6ZGO8skmqD2W2', 'bvxhBd09XR8RskZ0yARv4PeuLJBEuu7Nf8UMDeSRxsrkdFyE6L8hyDS7mPgi', '2014-11-10 21:21:43', '2014-11-10 21:19:19'),
(9, 'juliana costa', 'juliana.costarodrigues@yahoo.com.br', 'estudante', '$2y$10$GSm4HxN1MVxIoG.jl4kCUuNEHUJvAOwWFywtot/oDQ0W.2O0Ya./q', 'yw44VCubO1ZrYGuVw0p5NGUKk0dkyaxPBBGDzfYtDmQCQmy6s5jycixEpm2V', '2014-11-17 19:17:27', '2014-11-10 21:21:31'),
(10, 'LEISE LECIA DE SOUZA LIMA E SILVA', 'leiseany@yahoo.com.br', 'assistente social', '$2y$10$FSSdvua7Vl0ktayJYqEoVu7EBCJNcFQByLYCeeu7VP9dz5QdJ2Zrm', NULL, '2014-11-11 16:36:27', '2014-11-11 16:36:27');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `patologias`
--
ALTER TABLE `patologias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Patologias_Pacientes_idx` (`pacientes_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `patologias`
--
ALTER TABLE `patologias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `patologias`
--
ALTER TABLE `patologias`
  ADD CONSTRAINT `fk_Patologias_Pacientes` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
