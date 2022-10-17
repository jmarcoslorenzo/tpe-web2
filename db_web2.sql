-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 01:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `campeones`
--

CREATE TABLE `campeones` (
  `id` int(11) NOT NULL,
  `campeon` varchar(50) NOT NULL,
  `rareza` varchar(50) NOT NULL,
  `afinidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campeones`
--

INSERT INTO `campeones` (`id`, `campeon`, `rareza`, `afinidad`) VALUES
(1, 'Mediadora', 'Legendario', 'Vacio'),
(2, 'Trunda Giltmallet', 'Legendario', 'Magia'),
(3, 'Sethallia', 'Legendario', 'Magia'),
(4, 'Kael', 'Raro', 'Magia'),
(5, 'Andryssia', 'Epico', 'Vacio'),
(6, 'Lissandra', 'Legendario', 'Spiritu'),
(7, 'Errol', 'Legendario', 'Fuerza'),
(16, 'Skullcrown', 'Epico', 'Vacio');

-- --------------------------------------------------------

--
-- Table structure for table `facciones`
--

CREATE TABLE `facciones` (
  `id_faccion` int(11) NOT NULL,
  `faccion` varchar(50) NOT NULL,
  `dominio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facciones`
--

INSERT INTO `facciones` (`id_faccion`, `faccion`, `dominio`) VALUES
(1, 'Altos Elfos', 'Alianza Teleriana'),
(2, 'Enanos', 'Union Niresana'),
(16, 'Aparecidos', 'Corrompidos');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'jmlorenzo1993@gmail.com', '$2y$10$Q2nppXaNBkRJVY84vHEf1OPkBEKuk1vZ/VFheZor2sO.pdcQHVy66');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campeones`
--
ALTER TABLE `campeones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facciones`
--
ALTER TABLE `facciones`
  ADD PRIMARY KEY (`id_faccion`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campeones`
--
ALTER TABLE `campeones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `facciones`
--
ALTER TABLE `facciones`
  MODIFY `id_faccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facciones`
--
ALTER TABLE `facciones`
  ADD CONSTRAINT `facciones_ibfk_1` FOREIGN KEY (`id_faccion`) REFERENCES `campeones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
