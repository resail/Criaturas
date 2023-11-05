-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2023 a las 20:50:08
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rolegame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creature`
--

CREATE TABLE `creature` (
  `idCreature` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `attackPower` int(11) NOT NULL,
  `lifeLevel` int(11) NOT NULL,
  `weapon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `creature`
--

INSERT INTO `creature` (`idCreature`, `name`, `description`, `avatar`, `attackPower`, `lifeLevel`, `weapon`) VALUES
(1, 'Orco', 'Un orco muy grande', 'https://static.wikia.nocookie.net/es_wowpedia/images/1/1e/3D-Orc.png/revision/latest/scale-to-width-down/200?cb=20110304222540', 20, 50, 'espada'),
(2, 'Elfa', 'La elfa de sangre de la ciudad', 'https://wowpediawowyarenas.files.wordpress.com/2016/11/ca634d46561f5cb0da67f88aaf7054235df3c89a.jpg', 50, 30, 'Baston');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `creature`
--
ALTER TABLE `creature`
  ADD PRIMARY KEY (`idCreature`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `creature`
--
ALTER TABLE `creature`
  MODIFY `idCreature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
