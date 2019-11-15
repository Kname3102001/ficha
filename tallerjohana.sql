-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 20:51:57
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tallerjohana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `nom_cita` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `nom_cita`, `valor`) VALUES
(1, 'general', 3000),
(2, 'odontologica', 5000),
(3, 'prioritaria', 15000),
(4, 'triageI', 0),
(5, 'triageII', 0),
(6, 'triageIII', 0),
(7, 'triageIIIB', 0),
(8, 'triageIV', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id_doc` int(11) NOT NULL,
  `nombre_m` varchar(100) NOT NULL,
  `apellido_m` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id_doc`, `nombre_m`, `apellido_m`, `telefono`, `id_cita`) VALUES
(1, 'jose', 'ramirez', 2147483647, 1),
(2, 'laura', 'moreno', 2147483647, 2),
(3, 'marcos', 'ruiz', 2147483647, 3),
(4, 'lilian', 'moscoso', 312874934, 4),
(5, 'pedro', 'gonzales', 2147483647, 5),
(6, 'miriam', 'murcia', 2147483647, 6),
(7, 'luis', 'romero', 310900091, 7),
(8, 'josefa', 'morales', 2147483647, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `documento`, `id_cita`, `id_doc`) VALUES
(1, 'jose', 'portela', 'perdomo', 2147483647, 1000982716, 1, 1),
(2, 'laura', 'roa', 'madelena', 3123123, 129292182, 1, 1),
(3, 'juanjo', 'garcia', 'bosa', 32443555, 20239384, 2, 2),
(4, 'lucy', 'melo', 'bosa', 2132332, 12332334, 2, 2),
(5, 'robert', 'lopez', 'suba', 312435, 10009816, 3, 3),
(6, 'rubiela', 'romero', 'usme', 432442, 2023432, 3, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `FK_medicos_cita` (`id_cita`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono` (`telefono`),
  ADD UNIQUE KEY `documento` (`documento`),
  ADD KEY `FK_usuario_cita` (`id_cita`),
  ADD KEY `FK_usuario_medicos` (`id_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `FK_medicos_cita` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id_cita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_cita` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id_cita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_usuario_medicos` FOREIGN KEY (`id_doc`) REFERENCES `medicos` (`id_doc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
