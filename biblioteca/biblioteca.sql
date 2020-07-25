-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2020 a las 20:51:57
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
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `ID` int(11) NOT NULL,
  `AUTOR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`ID`, `AUTOR`) VALUES
(1, 'Marco Espilver'),
(2, 'George Owell'),
(3, 'Octavio Paz'),
(4, 'Pablo Neruda'),
(5, 'Federico Garcia Lorca'),
(6, 'Miguel de Unamuno'),
(7, 'Galatea Smith'),
(8, 'Emy Johnson'),
(9, 'Michael Bubble'),
(10, 'Emy Johnson');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `EID` int(11) NOT NULL,
  `NOMBRE` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`EID`, `NOMBRE`) VALUES
(1, 'TRILLAS'),
(2, 'CLARO OSCURO'),
(3, 'MARTINEZ S.A DE C.V'),
(4, 'MALUMA'),
(5, 'JBALVIN'),
(6, 'PANTERA'),
(7, 'MCDONALD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `LID` int(11) NOT NULL,
  `IDIOMA` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`LID`, `IDIOMA`) VALUES
(1, 'Español'),
(2, 'Ingles'),
(3, 'Frances'),
(4, 'Aleman'),
(5, 'Portugues'),
(6, 'Ruso'),
(7, 'Griego'),
(8, 'Italiano'),
(9, 'Castellano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `TID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `LID` int(11) NOT NULL,
  `EID` int(11) NOT NULL,
  `TITULO` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`TID`, `ID`, `LID`, `EID`, `TITULO`) VALUES
(1, 5, 1, 6, 'Bodas de sangre'),
(2, 4, 2, 4, 'Segundo libro'),
(3, 3, 3, 3, 'Tercer libro'),
(4, 2, 4, 2, 'Cuarto libro'),
(5, 8, 1, 3, 'SOÑANDO CONTIGO'),
(6, 8, 1, 3, 'SOÑANDO CONTIGO'),
(7, 8, 1, 3, 'SOÑANDO CONTIGO'),
(8, 8, 1, 3, 'SOÑANDO CONTIGO'),
(9, 7, 8, 3, 'El libro de Gala');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`EID`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`LID`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`TID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
