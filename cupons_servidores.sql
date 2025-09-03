-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2025 at 05:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cupons_servidores`
--

-- --------------------------------------------------------

--
-- Table structure for table `cupons`
--

CREATE TABLE `cupons` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `servidor_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cupons`
--

INSERT INTO `cupons` (`id`, `codigo`, `servidor_id`) VALUES
(2, 'CUPOM1', 1),
(3, 'CUPOM2', 15),
(4, 'CUPOM3', 16),
(6, 'CUPOM5', 17),
(7, 'CUPOM6', NULL),
(8, 'CUPOM7', 18),
(9, 'CUPOM8', NULL),
(10, 'CUPOM9', NULL),
(11, 'CUPOM10', NULL),
(12, 'CUPOM4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servidores`
--

CREATE TABLE `servidores` (
  `id` int(11) UNSIGNED NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `secretaria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servidores`
--

INSERT INTO `servidores` (`id`, `cpf`, `nome`, `secretaria`) VALUES
(1, '11111111111', 'João Silva', 'Educação'),
(15, '22222222222', 'Pedro Ferreira', 'Administração'),
(16, '44444444444', 'Maria', 'Tecnologia'),
(17, '33333333333', 'Kaio', 'Saúde'),
(18, '22322322355', 'Leticia', 'Administração');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `servidor_id` (`servidor_id`),
  ADD KEY `servidor_id_2` (`servidor_id`);

--
-- Indexes for table `servidores`
--
ALTER TABLE `servidores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `servidores`
--
ALTER TABLE `servidores`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cupons`
--
ALTER TABLE `cupons`
  ADD CONSTRAINT `cupons_ibfk_1` FOREIGN KEY (`servidor_id`) REFERENCES `servidores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
