-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2020 a las 02:01:22
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jvhsite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_corte`
--

CREATE TABLE `categoria_corte` (
  `id` int(11) NOT NULL,
  `corte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE `corte` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria_corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificaciones_corte`
--

CREATE TABLE `especificaciones_corte` (
  `id` int(11) NOT NULL,
  `tamano_caja` varchar(255) NOT NULL,
  `medidas` varchar(255) NOT NULL,
  `envasado` varchar(255) NOT NULL,
  `piezas_por_caja` varchar(255) NOT NULL,
  `condiciones_termicas` varchar(255) NOT NULL,
  `especificaciones` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetado_corte`
--

CREATE TABLE `etiquetado_corte` (
  `id` int(11) NOT NULL,
  `etiquetado` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_corte`
--

CREATE TABLE `imagen_corte` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `packaging_corte`
--

CREATE TABLE `packaging_corte` (
  `id` int(11) NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `seccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int(11) NOT NULL,
  `sede` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `direccion` text NOT NULL,
  `coordenadas_maps` varchar(100) NOT NULL,
  `telefono1` varchar(16) NOT NULL,
  `telefono2` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_corte`
--
ALTER TABLE `categoria_corte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `corte`
--
ALTER TABLE `corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_corte_id` (`categoria_corte_id`) USING BTREE;

--
-- Indices de la tabla `especificaciones_corte`
--
ALTER TABLE `especificaciones_corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corte_id` (`corte_id`);

--
-- Indices de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corte_id` (`corte_id`);

--
-- Indices de la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corte_id` (`corte_id`);

--
-- Indices de la tabla `packaging_corte`
--
ALTER TABLE `packaging_corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corte_id` (`corte_id`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_corte`
--
ALTER TABLE `categoria_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `corte`
--
ALTER TABLE `corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especificaciones_corte`
--
ALTER TABLE `especificaciones_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `packaging_corte`
--
ALTER TABLE `packaging_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `corte`
--
ALTER TABLE `corte`
  ADD CONSTRAINT `corte_ibfk_1` FOREIGN KEY (`categoria_corte_id`) REFERENCES `categoria_corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `especificaciones_corte`
--
ALTER TABLE `especificaciones_corte`
  ADD CONSTRAINT `especificaciones_corte_ibfk_1` FOREIGN KEY (`corte_id`) REFERENCES `corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  ADD CONSTRAINT `etiquetado_corte_ibfk_1` FOREIGN KEY (`corte_id`) REFERENCES `corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  ADD CONSTRAINT `imagen_corte_ibfk_1` FOREIGN KEY (`corte_id`) REFERENCES `corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `packaging_corte`
--
ALTER TABLE `packaging_corte`
  ADD CONSTRAINT `packaging_corte_ibfk_1` FOREIGN KEY (`corte_id`) REFERENCES `corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
