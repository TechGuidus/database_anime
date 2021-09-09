-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 01:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tasks2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `prioridad` int(11) NOT NULL,
  `finalizada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `titulo`, `descripcion`, `prioridad`, `finalizada`) VALUES
(1, 'Poder completar la clase', 'Venimos bien pero es larga', 5, 0),
(12, 'Hardcoding insert', 'Descrpcion', 1, 1),
(13, 'sdfgdgf', 'sdgfdsg', 1, 1),
(14, 'Hardcoding insert', 'Descrpcion', 1, 0),
(16, 'test2', 'test2', 2, 0),
(17, 'test3', 'test3', 2, 1),
(18, 'test4', 'test4', 3, 1),
(19, 'test4', 'test4', 3, 1),
(20, 'sdfsdf', 'sdfsdfs', 3, 1),
(21, 'asdasd', 'adsasdas', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
