-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 03:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabela_servico`
--

CREATE TABLE `tabela_servico` (
  `id_servico` int(11) NOT NULL,
  `tipo_servico` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabela_servico`
--

INSERT INTO `tabela_servico` (`id_servico`, `tipo_servico`) VALUES
(1, 'Banho'),
(2, 'Tosa'),
(3, 'Banho e Tosa'),
(4, 'Banho do Gremio');

-- --------------------------------------------------------

--
-- Table structure for table `tab_usuario`
--

CREATE TABLE `tab_usuario` (
  `id_usuario` int(11) NOT NULL,
  `email_usuario` varchar(70) NOT NULL,
  `nome_usuario` varchar(70) NOT NULL,
  `pet_usuario` varchar(50) NOT NULL,
  `data_usuario` date NOT NULL,
  `horario_usuario` time NOT NULL,
  `tel_usuario` varchar(20) NOT NULL,
  `servico_usuario` int(11) NOT NULL,
  `comentarios_usuario` text NOT NULL,
  `zapzap_usuario` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tab_usuario`
--

INSERT INTO `tab_usuario` (`id_usuario`, `email_usuario`, `nome_usuario`, `pet_usuario`, `data_usuario`, `horario_usuario`, `tel_usuario`, `servico_usuario`, `comentarios_usuario`, `zapzap_usuario`) VALUES
(2, 'daniel@gmail.com', 'Daniel Luis', 'Athena', '2023-03-03', '12:24:00', '51997252962', 4, 'Dale Gremio.', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabela_servico`
--
ALTER TABLE `tabela_servico`
  ADD PRIMARY KEY (`id_servico`);

--
-- Indexes for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `relacao` (`servico_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabela_servico`
--
ALTER TABLE `tabela_servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
  ADD CONSTRAINT `relacao` FOREIGN KEY (`servico_usuario`) REFERENCES `tabela_servico` (`id_servico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
