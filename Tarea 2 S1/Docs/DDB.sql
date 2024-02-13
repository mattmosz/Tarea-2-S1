-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-02-2024 a las 01:17:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `habitaciones`
--
CREATE DATABASE IF NOT EXISTS `habitaciones` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `habitaciones`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id_habitacion` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `capacidad` text NOT NULL,
  `precio_noche` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id_habitacion`, `tipo`, `capacidad`, `precio_noche`) VALUES
(1, 'Individual', '1', '35.00'),
(2, 'Doble', '2', '45.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;