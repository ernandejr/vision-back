-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Out-2019 às 22:05
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_development`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `cel` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `person_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `tel`, `cel`, `address`, `website`, `mail`, `person_id`) VALUES
(1, '123-456-7890', '012-345-6789', '1490 General Woods. Colorado Springs', 'brianwalker.co', 'mail@brianwalker.co', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `person_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `educations`
--

INSERT INTO `educations` (`id`, `name`, `date_start`, `date_end`, `description`, `person_id`) VALUES
(1, 'Web Developer @ Harvard University', '2006-08-01', '2010-05-01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.', 1),
(2, 'Colorado Springs College', '2003-08-01', '2006-05-01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.', 1),
(3, 'UX Designer @ Graphics MasterMinds', '2012-01-01', '2012-02-01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `person_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `date_start`, `date_end`, `description`, `person_id`) VALUES
(1, 'Front End Developer @ HillSong', '2014-01-01', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.', 1),
(2, 'PHP Developer @ Creative Wizards', '2012-03-01', '2013-12-01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.', 1),
(3, 'UX Designer @ Graphics MasterMinds', '2012-01-01', '2012-02-01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `people`
--

CREATE TABLE `people` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `people`
--

INSERT INTO `people` (`id`, `name`, `image`, `profession`, `description`) VALUES
(1, 'Brian Walker', 'https://github.com/b2w-marketplace/code-challenge/raw/master/files/avatar-dev.png', 'Web Developer', '27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields'),
(5, 'Nome alterado', 'dsadsadasdas', 'dasdasasd', 'dasdasdasdasdas'),
(6, 'Nome alterado', 'dsadsadasdas', 'dasdasasd', 'dasdasdasdasdas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `person_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `skills`
--

INSERT INTO `skills` (`id`, `name`, `value`, `person_id`) VALUES
(1, 'Front End', '80%', 1),
(2, 'Back End', '90%', 1),
(3, 'Writing', '75%', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_contacts_on_person_id` (`person_id`);

--
-- Índices para tabela `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_educations_on_person_id` (`person_id`);

--
-- Índices para tabela `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_experiences_on_person_id` (`person_id`);

--
-- Índices para tabela `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_skills_on_person_id` (`person_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `lumen_29a08acb61` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Limitadores para a tabela `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `lumen_dca813b333` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Limitadores para a tabela `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `lumen_d9076b9587` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Limitadores para a tabela `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `lumen_d218abb934` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
