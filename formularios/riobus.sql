-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2024 a las 17:34:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `riobus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_ruta`
--

CREATE TABLE `asignacion_ruta` (
  `id` int(11) NOT NULL,
  `ruta_id` int(11) DEFAULT NULL,
  `empleado_id` int(11) DEFAULT NULL,
  `fecha_asignacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combustible`
--

CREATE TABLE `combustible` (
  `id` int(11) NOT NULL,
  `precio_combustible` decimal(10,2) DEFAULT NULL,
  `tipo_vehiculo` varchar(50) DEFAULT NULL,
  `distancia_km` decimal(10,2) DEFAULT NULL,
  `rendimiento_vehiculo` decimal(10,2) DEFAULT NULL,
  `generar_costo` tinyint(1) DEFAULT NULL,
  `tipo_vehiculo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id_contrato` int(11) NOT NULL,
  `Nombre_empresa` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `duracion_contrato` time DEFAULT NULL,
  `numero_dehoras` int(11) DEFAULT NULL,
  `numero_empleados` int(11) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `tipo_contrato` varchar(40) DEFAULT NULL,
  `presupuesto_inicial` decimal(10,2) DEFAULT NULL,
  `firma_riobus` varchar(40) DEFAULT NULL,
  `firma_empresa` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_personal`
--

CREATE TABLE `gestion_personal` (
  `id` int(11) NOT NULL,
  `nombre_empleado` varchar(100) DEFAULT NULL,
  `id_conductor` int(11) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `sueldo` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planificar_ruta`
--

CREATE TABLE `planificar_ruta` (
  `id` int(11) NOT NULL,
  `nombre_ruta` varchar(100) DEFAULT NULL,
  `puntos_llegada` int(11) DEFAULT NULL,
  `nombre_conductor` varchar(100) DEFAULT NULL,
  `elegir_ruta` tinyint(1) DEFAULT NULL,
  `monitorear_ruta` tinyint(1) DEFAULT NULL,
  `tipo_vehiculo` varchar(50) DEFAULT NULL,
  `generar_ruta` tinyint(1) DEFAULT NULL,
  `tipo_vehiculo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo`
--

CREATE TABLE `tipo_vehiculo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `combustible_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion_ruta`
--
ALTER TABLE `asignacion_ruta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruta_id` (`ruta_id`),
  ADD KEY `empleado_id` (`empleado_id`);

--
-- Indices de la tabla `combustible`
--
ALTER TABLE `combustible`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_vehiculo_id` (`tipo_vehiculo_id`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contrato`);

--
-- Indices de la tabla `gestion_personal`
--
ALTER TABLE `gestion_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planificar_ruta`
--
ALTER TABLE `planificar_ruta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_vehiculo_id` (`tipo_vehiculo_id`);

--
-- Indices de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `combustible_id` (`combustible_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion_ruta`
--
ALTER TABLE `asignacion_ruta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `combustible`
--
ALTER TABLE `combustible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gestion_personal`
--
ALTER TABLE `gestion_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planificar_ruta`
--
ALTER TABLE `planificar_ruta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion_ruta`
--
ALTER TABLE `asignacion_ruta`
  ADD CONSTRAINT `asignacion_ruta_ibfk_1` FOREIGN KEY (`ruta_id`) REFERENCES `planificar_ruta` (`id`),
  ADD CONSTRAINT `asignacion_ruta_ibfk_2` FOREIGN KEY (`empleado_id`) REFERENCES `gestion_personal` (`id`);

--
-- Filtros para la tabla `combustible`
--
ALTER TABLE `combustible`
  ADD CONSTRAINT `combustible_ibfk_1` FOREIGN KEY (`tipo_vehiculo_id`) REFERENCES `tipo_vehiculo` (`id`);

--
-- Filtros para la tabla `planificar_ruta`
--
ALTER TABLE `planificar_ruta`
  ADD CONSTRAINT `planificar_ruta_ibfk_1` FOREIGN KEY (`tipo_vehiculo_id`) REFERENCES `combustible` (`id`);

--
-- Filtros para la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD CONSTRAINT `tipo_vehiculo_ibfk_1` FOREIGN KEY (`combustible_id`) REFERENCES `combustible` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
