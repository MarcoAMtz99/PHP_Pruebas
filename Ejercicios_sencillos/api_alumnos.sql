-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2020 a las 20:56:18
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `materia` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `materia`) VALUES
(1, 'Marco', 'Martinez', 'Español'),
(2, 'Miguel', 'Martinez', 'Matematicas'),
(3, 'Rosa', 'Martinez', 'Quimica'),
(4, 'Yulia', 'Hernandez', 'Literatura'),
(5, 'Ming', 'Pineda', 'Geografia'),
(6, 'Katial', 'Gonzalezx', 'Historia'),
(8, 'Regina', 'Palacios', 'Quimica'),
(9, 'Diana', 'Gonza', 'Español'),
(10, 'Sabina', 'Sabinatica', 'Matematicas'),
(11, 'Danae', 'Plasenzia', 'Quimica'),
(13, 'Mari', 'Castro', 'Historia'),
(14, 'Marvin', 'Gonzalez', 'Matematicas'),
(15, 'Magali', 'Martinez', 'Historia'),
(16, 'Yulia', 'Hernandez', 'Español'),
(17, 'Denis', 'Castro', 'Geografia'),
(18, 'Rosario', 'Tijeras', 'Español'),
(19, 'Magali', 'Martinez', 'Historia'),
(20, 'Yulia', 'Hernandez', 'Español'),
(21, 'Denis', 'Castro', 'Geografia'),
(22, 'Juan', 'Garcia', 'Filosofia'),
(23, 'Jorge', 'Cid     t', 'Quimica'),
(24, 'Eduardo', 'Palacios', 'Español'),
(25, 'YaIr', 'BECRERRIL', 'QUIMICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `populares`
--

CREATE TABLE `populares` (
  `ID` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `apellido` text DEFAULT NULL,
  `materia` text DEFAULT NULL,
  `votos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `populares`
--

INSERT INTO `populares` (`ID`, `nombre`, `apellido`, `materia`, `votos`) VALUES
(1, 'Yulia', 'Hernandez', 'Español', 11),
(2, 'Denis', 'Castro', 'Geografia', 3),
(3, 'Marvin', 'Gonzalez', 'Matematicas', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `populares`
--
ALTER TABLE `populares`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `populares`
--
ALTER TABLE `populares`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
