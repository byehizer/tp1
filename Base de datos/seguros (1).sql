-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2023 a las 05:12:21
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seguros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproductos` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `imagen` varchar(32) NOT NULL DEFAULT 'img.jpg',
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproductos`, `nombre`, `imagen`, `descripcion`) VALUES
(1, 'Seguro de Auto', '1700707990.jpg', ''),
(2, 'Seguro de moto', 'moto.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.Quidem beatae cum esse deserunt quasi impedit velit sint quia,consectetur est, necessitatibus odit dolorum harum error quibusdam nostrum. Doloribus, obcaecati dolores.'),
(3, 'Seguro de bicicleta', 'bici.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.Quidem beatae cum esse deserunt quasi impedit velit sint quia,consectetur est, necessitatibus odit dolorum harum error quibusdam \r\nnostrum. Doloribus, obcaecati dolores.'),
(4, 'Seguro de salud', 'ambulancia.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem beatae cum esse deserunt quasi impedit velit sint quia, consectetur est, necessitatibus odit dolorum harum error quibusdam nostrum. Doloribus, obcaecati dolores.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(8) UNSIGNED NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `APELLIDO` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `CLAVE` varchar(100) DEFAULT NULL,
  `NIVEL` varchar(100) DEFAULT NULL,
  `FECHA_ALTA` datetime DEFAULT NULL,
  `ESTADO` enum('activo','banneado') NOT NULL DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDO`, `EMAIL`, `CLAVE`, `NIVEL`, `FECHA_ALTA`, `ESTADO`) VALUES
(1, 'Bautista', 'Carloni', 'gr@dv.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', '2014-11-06 21:35:46', 'activo'),
(2, NULL, NULL, 'facu@dv.net', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario', NULL, 'activo'),
(3, NULL, NULL, 'facu2@dv.net', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario', '2014-11-06 21:41:12', 'activo'),
(4, NULL, NULL, 'asdadasd@asdasd', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario', '2014-11-06 21:50:21', 'banneado'),
(6, NULL, NULL, 'a@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario', '2014-11-06 22:03:47', 'activo'),
(10, 'ehizer', 'valero', 'ehizer@gmail.com', '7d700e3f9592a376c562499c84c92cb0', 'admin', '2023-12-21 00:19:41', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproductos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `sdfsdfsdfdsfdsf` (`EMAIL`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
