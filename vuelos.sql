-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2017 a las 00:11:58
-- Versión del servidor: 5.7.19-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.31-6+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vuelocot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id` int(11) NOT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id`, `marca`, `ruta`) VALUES
(1, 'CITROEN', 'carros/citroen.jpeg'),
(2, 'RENAULT', 'carros/renault.png'),
(3, 'DACIA RENAULT', 'carros/dacia.jpeg'),
(4, 'PEUGEOT', 'carros/PEUGEOT.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `nombreciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paisid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombreciudad`, `paisid`) VALUES
(1, 'Madrid', 1),
(2, 'Barcelona', 1),
(3, 'Toledo', 1),
(4, 'Zaragoza', 1),
(5, 'Valencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `ciudad` int(11) DEFAULT NULL,
  `estrella` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tbaja` decimal(10,2) NOT NULL,
  `talta` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`id`, `ciudad`, `estrella`, `ubicacion`, `tbaja`, `talta`) VALUES
(1, 1, '4', 'Hotel Praga, Petit Palace Arturo Soria Alcala, Hotel Nuevo Madrid', '115.00', '150.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id` int(11) NOT NULL,
  `modelonombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `consumo` double NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia17` double NOT NULL,
  `dia20` double NOT NULL,
  `dia21` double NOT NULL,
  `diaextra` double NOT NULL,
  `carro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id`, `modelonombre`, `tipo`, `categoria`, `consumo`, `descripcion`, `ruta`, `dia17`, `dia20`, `dia21`, `diaextra`, `carro_id`) VALUES
(1, 'DS3', 'LUJOSO', 'ECONOMICO', 4.6, 'GPS INTEGRADO\r\nAsientos: 5 \r\nTamaño de la maletera: 285L', 'modelos/ds3.jpeg', 1199, 1349, 1349, 32, 1),
(2, 'DS4', '', '', 4.7, 'GPS INTEGRADO\r\nAsintos: 5\r\nTamaño de la maletera: 359L', 'modelos/ds4.jpeg', 1439, 1469, 1649, 34, 1),
(3, 'DS5', 'LUJOSO', 'FAMILIAR', 7.6, 'GPS INTEGRADO\r\nAsintos: 5\r\nTamaño de la maletera: 468L', 'modelos/ds5.jpeg', 2549, 2549, 2549, 41, 1),
(4, 'C3', 'ECONOMICO', '', 4.3, 'GPS INTEGRADO\r\nAsintos: 5\r\nTamaño de la maletera: 300L', 'modelos/c3.jpeg', 1079, 1199, 1199, 30, 1),
(5, 'C3 PLUS', 'ECONOMICO', '', 4.3, 'GPS INTEGRADO\r\nAsintos: 5\r\nTamaño de la maletera: 300L', 'modelos/c3plus.jpeg', 1079, 1199, 199, 30, 1),
(6, 'C4 CACTUS', 'ECONOMICO', '', 4.6, 'GPS INTEGRADO\r\nAsintos: 5\r\nTamaño de la maletera: 348L', 'modelos/c4cactuc.jpeg', 1319, 1499, 1499, 34, 1),
(7, 'C4 PICASSO', 'ECONOMICO', 'FAMILIAR', 5, 'GPS INTEGRADO\r\nAsintos: 5\r\nTamaño de la maletera: 537L', 'modelos/c4picasso.jpg', 1599, 1599, 1599, 34, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombrepais` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombrepais`) VALUES
(1, 'España'),
(2, 'Portugal'),
(3, 'Francias'),
(4, 'Belgica'),
(5, 'Holanda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8E86059EF0CBE9B0` (`paisid`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3535ED98E86059E` (`ciudad`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F0D76C46293ADB72` (`carro_id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `FK_8E86059EF0CBE9B0` FOREIGN KEY (`paisid`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `FK_3535ED98E86059E` FOREIGN KEY (`ciudad`) REFERENCES `ciudad` (`id`);

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `FK_F0D76C46293ADB72` FOREIGN KEY (`carro_id`) REFERENCES `carro` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
