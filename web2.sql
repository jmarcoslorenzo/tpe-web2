-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 04:16 PM
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
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `campeones`
--

CREATE TABLE `campeones` (
  `id` int(11) NOT NULL,
  `id_faccion_fk` int(11) NOT NULL,
  `campeon` varchar(200) NOT NULL,
  `rareza` varchar(200) NOT NULL,
  `afinidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campeones`
--

INSERT INTO `campeones` (`id`, `id_faccion_fk`, `campeon`, `rareza`, `afinidad`) VALUES
(1, 1, 'Mediadora', 'Legendario', 'Vacio'),
(2, 3, 'Martyr', 'Legendario', 'Espiritu'),
(6, 3, 'Errol', 'Legendario', 'Fuerza');

-- --------------------------------------------------------

--
-- Table structure for table `facciones`
--

CREATE TABLE `facciones` (
  `id_faccion` int(11) NOT NULL,
  `faccion` varchar(200) NOT NULL,
  `dominio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facciones`
--

INSERT INTO `facciones` (`id_faccion`, `faccion`, `dominio`) VALUES
(1, 'Altos Elfos', 'Alianza Teleriana'),
(2, 'Hidalgos', 'Alianza Teleriana'),
(3, 'Orden Sagrada', 'Alianza Teleriana'),
(4, 'Barbaros', 'Alianza Teleriana');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'jmlorenzo1993@gmail.com', '$2y$10$UP7B9ykBPb/QM0ufWkG6deGWNmJjKf/YhP7lELVfoS2pwJAGmTfBq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campeones`
--
ALTER TABLE `campeones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_faccion_fk` (`id_faccion_fk`);

--
-- Indexes for table `facciones`
--
ALTER TABLE `facciones`
  ADD PRIMARY KEY (`id_faccion`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campeones`
--
ALTER TABLE `campeones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campeones`
--
ALTER TABLE `campeones`
  ADD CONSTRAINT `campeones_ibfk_1` FOREIGN KEY (`id_faccion_fk`) REFERENCES `facciones` (`id_faccion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
