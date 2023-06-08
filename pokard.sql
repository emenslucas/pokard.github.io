-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2023 a las 02:07:57
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
-- Base de datos: `pokard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta`
--

CREATE TABLE `carta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `id_energia` int(11) DEFAULT NULL,
  `poder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carta`
--

INSERT INTO `carta` (`id`, `nombre`, `precio`, `imagen`, `descripcion`, `id_energia`, `poder`) VALUES
(1, 'Charmander', 1000, 'charmanderBasico.svg', '', 1, 70),
(2, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(3, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(4, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(5, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(6, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(7, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(8, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(9, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(10, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(11, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(12, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(13, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(14, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(15, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(16, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(17, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(18, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(19, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(20, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(21, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(22, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(23, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(24, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70),
(26, 'charmander', 5000, 'charmanderBasico.svg', '', 1, 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `energia`
--

CREATE TABLE `energia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `imagen` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `energia`
--

INSERT INTO `energia` (`id`, `nombre`, `imagen`) VALUES
(1, 'fuego', 'fuego.svg'),
(2, 'planta', 'planta.svg'),
(3, 'agua', 'agua.svg'),
(4, 'fantasma', 'fantasma.svg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_energia` (`id_energia`);

--
-- Indices de la tabla `energia`
--
ALTER TABLE `energia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carta`
--
ALTER TABLE `carta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `energia`
--
ALTER TABLE `energia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carta`
--
ALTER TABLE `carta`
  ADD CONSTRAINT `fk_energia` FOREIGN KEY (`id_energia`) REFERENCES `energia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
