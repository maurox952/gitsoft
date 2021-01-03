-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2020 a las 23:04:10
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gisot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcargo`
--

CREATE TABLE `tblcargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblcargo`
--

INSERT INTO `tblcargo` (`id_cargo`, `nombre`, `descripcion`) VALUES
(1, 'jefe', '4155152'),
(2, 'jefe dual', '5dfs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcliente`
--

CREATE TABLE `tblcliente` (
  `id` varchar(30) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblempleado`
--

CREATE TABLE `tblempleado` (
  `id` varchar(30) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblempleado`
--

INSERT INTO `tblempleado` (`id`, `nombres`, `apellidos`, `celular`, `fecha_nacimiento`, `correo`, `id_cargo`, `direccion`, `ciudad`, `departamento`, `id_rol`, `sexo`) VALUES
('5555', '55555', '5555', '3322555655859', '2020-12-09', 'gisot@gmail.com', 1, 'Calle 21 #22-17', 'Rionegro', 'Antioquia', 2, 'Hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbllogin`
--

CREATE TABLE `tbllogin` (
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `id_Rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbllogin`
--

INSERT INTO `tbllogin` (`correo`, `contraseña`, `id_Rol`) VALUES
('gisot@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblnotificaciones`
--

CREATE TABLE `tblnotificaciones` (
  `id_notificacion` int(11) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrol`
--

CREATE TABLE `tblrol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblrol`
--

INSERT INTO `tblrol` (`id_rol`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'empleado'),
(3, 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblcargo`
--
ALTER TABLE `tblcargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblcliente_tblrol1_idx` (`id_rol`),
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `tblempleado`
--
ALTER TABLE `tblempleado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_tblempleado_tblcargo_idx` (`id_cargo`),
  ADD KEY `fk_tblempleado_table11_idx` (`id_rol`);

--
-- Indices de la tabla `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `id_Rol` (`id_Rol`);

--
-- Indices de la tabla `tblnotificaciones`
--
ALTER TABLE `tblnotificaciones`
  ADD PRIMARY KEY (`id_notificacion`),
  ADD KEY `fk_tblnotificaciones_tblempleado1_idx` (`id`);

--
-- Indices de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblcargo`
--
ALTER TABLE `tblcargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblnotificaciones`
--
ALTER TABLE `tblnotificaciones`
  MODIFY `id_notificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD CONSTRAINT `fk_tblcliente_tblrol1` FOREIGN KEY (`id_rol`) REFERENCES `tblrol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblogin_ibfk_2` FOREIGN KEY (`correo`) REFERENCES `tbllogin` (`correo`);

--
-- Filtros para la tabla `tblempleado`
--
ALTER TABLE `tblempleado`
  ADD CONSTRAINT `fk:tblempleado_correo` FOREIGN KEY (`correo`) REFERENCES `tbllogin` (`correo`),
  ADD CONSTRAINT `fk_tblempleado_table11` FOREIGN KEY (`id_rol`) REFERENCES `tblrol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblempleado_tblcargo` FOREIGN KEY (`id_cargo`) REFERENCES `tblcargo` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD CONSTRAINT `tbllogin_ibfk_1` FOREIGN KEY (`id_Rol`) REFERENCES `tblrol` (`id_rol`);

--
-- Filtros para la tabla `tblnotificaciones`
--
ALTER TABLE `tblnotificaciones`
  ADD CONSTRAINT `tblnotificaciones_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tblempleado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
