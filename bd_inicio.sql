-- Script de creación de bases de datos para MySQL/MariaDB
/* Sript realizado por Pedro Godoy Polaina Tarea de la unidad 2 DWES */



-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2022 a las 11:09:20
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- -------------- UD2: SISTEMA DE TEST ONLINE ----------------------- --
/* Eliminar BD si existe. En caso de no existir no realiza acción */
	DROP DATABASE IF EXISTS ud2_test;

/* Crear una base de datos*/
	CREATE DATABASE IF NOT EXISTS ud2_test;

USE ud2_test;



--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id_unico` smallint(5) UNSIGNED NOT NULL,
  `intento` smallint(5) UNSIGNED DEFAULT NULL,
  `id_usuario` smallint(5) UNSIGNED DEFAULT NULL,
  `id_pregunta` smallint(5) UNSIGNED DEFAULT NULL,
  `respuesta` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`id_unico`, `intento`, `id_usuario`, `id_pregunta`, `respuesta`) VALUES
(1, 1, 5, 4, 3),
(2, 1, 5, 10, 3),
(3, 1, 5, 5, 2),
(4, 1, 5, 9, 1),
(5, 1, 5, 6, 3),
(6, 1, 5, 7, 3),
(7, 1, 5, 8, 2),
(8, 1, 5, 1, 1),
(9, 1, 5, 3, 3),
(10, 1, 5, 2, 3),
(11, 2, 5, 6, 3),
(12, 2, 5, 5, 2),
(13, 2, 5, 4, 3),
(14, 2, 5, 8, 3),
(15, 2, 5, 2, 3),
(16, 2, 5, 1, 2),
(17, 2, 5, 7, 3),
(18, 2, 5, 9, 3),
(19, 2, 5, 3, 3),
(20, 2, 5, 10, 3),
(21, 1, 3, 1, 3),
(22, 1, 3, 7, 3),
(23, 1, 3, 6, 3),
(24, 1, 3, 3, 2),
(25, 1, 3, 8, 1),
(26, 1, 3, 9, 3),
(27, 1, 3, 2, 3),
(28, 1, 3, 10, 3),
(29, 1, 3, 4, 2),
(30, 1, 3, 5, 3),
(31, 1, 4, 3, 2),
(32, 1, 4, 1, 3),
(33, 1, 4, 5, 3),
(34, 1, 4, 2, 1),
(35, 1, 4, 8, 2),
(36, 1, 4, 7, 3),
(37, 1, 4, 6, 1),
(38, 1, 4, 4, 3),
(39, 1, 4, 10, 3),
(40, 1, 4, 9, 1),
(41, 2, 4, 5, 3),
(42, 2, 4, 4, 3),
(43, 2, 4, 9, 3),
(44, 2, 4, 1, 3),
(45, 2, 4, 10, 3),
(46, 2, 4, 2, 3),
(47, 2, 4, 8, 3),
(48, 2, 4, 3, 1),
(49, 2, 4, 6, 3),
(50, 2, 4, 7, 3),
(51, 3, 4, 3, 3),
(52, 3, 4, 9, 3),
(53, 3, 4, 2, 2),
(54, 3, 4, 5, 3),
(55, 3, 4, 7, 3),
(56, 3, 4, 10, 3),
(57, 3, 4, 8, 3),
(58, 3, 4, 6, 3),
(59, 3, 4, 1, 1),
(60, 3, 4, 4, 3),
(61, 1, 6, 3, 2),
(62, 1, 6, 1, 3),
(63, 1, 6, 5, 3),
(64, 1, 6, 2, 1),
(65, 1, 6, 8, 2),
(66, 1, 6, 7, 3),
(67, 1, 6, 6, 1),
(68, 1, 6, 4, 3),
(69, 1, 6, 10, 3),
(70, 1, 6, 9, 1),
(71, 2, 6, 5, 3),
(72, 2, 6, 4, 1),
(73, 2, 6, 9, 3),
(74, 2, 6, 1, 2),
(75, 2, 6, 10, 1),
(76, 2, 6, 2, 3),
(77, 2, 6, 8, 3),
(78, 2, 6, 3, 1),
(79, 2, 6, 6, 3),
(80, 2, 6, 7, 3),
(81, 3, 6, 3, 3),
(82, 3, 6, 9, 3),
(83, 3, 6, 2, 2),
(84, 3, 6, 5, 3),
(85, 3, 6, 7, 3),
(86, 3, 6, 10, 2),
(87, 3, 6, 8, 3),
(88, 3, 6, 6, 3),
(89, 3, 6, 1, 1),
(90, 3, 6, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` smallint(5) UNSIGNED NOT NULL,
  `texto_pregunta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `texto_pregunta`) VALUES
(1, 'Texto de la pregunta nº 1'),
(2, 'Texto de la pregunta nº 2'),
(3, 'Texto de la pregunta nº 3'),
(4, 'Texto de la pregunta nº 4'),
(5, 'Texto de la pregunta nº 5'),
(6, 'Texto de la pregunta nº 6'),
(7, 'Texto de la pregunta nº 7'),
(8, 'Texto de la pregunta nº 8'),
(9, 'Texto de la pregunta nº 9'),
(10, 'Texto de la pregunta nº 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_respuesta` smallint(5) UNSIGNED NOT NULL,
  `id_pregunta` smallint(5) UNSIGNED NOT NULL,
  `texto_respuesta` varchar(255) NOT NULL,
  `respuesta_correcta` binary(1) NOT NULL,
  `respuesta` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id_respuesta`, `id_pregunta`, `texto_respuesta`, `respuesta_correcta`, `respuesta`) VALUES
(1, 1, 'Texto A respuesta para la pregunta nº 1', 0x30, 1),
(2, 1, 'Texto B respuesta para la pregunta nº 1', 0x30, 2),
(3, 1, 'Texto C respuesta para la pregunta nº 1', 0x31, 3),
(4, 2, 'Texto A respuesta para la pregunta nº 2', 0x30, 1),
(5, 2, 'Texto B respuesta para la pregunta nº 2', 0x30, 2),
(6, 2, 'Texto C respuesta para la pregunta nº 2', 0x31, 3),
(7, 3, 'Texto A respuesta para la pregunta nº 3', 0x30, 1),
(8, 3, 'Texto B respuesta para la pregunta nº 3', 0x30, 2),
(9, 3, 'Texto C respuesta para la pregunta nº 3', 0x31, 3),
(10, 4, 'Texto A respuesta para la pregunta nº 4', 0x30, 1),
(11, 4, 'Texto B respuesta para la pregunta nº 4', 0x30, 2),
(12, 4, 'Texto C respuesta para la pregunta nº 4', 0x31, 3),
(13, 5, 'Texto A respuesta para la pregunta nº 5', 0x30, 1),
(14, 5, 'Texto B respuesta para la pregunta nº 5', 0x30, 2),
(15, 5, 'Texto C respuesta para la pregunta nº 5', 0x31, 3),
(16, 6, 'Texto A respuesta para la pregunta nº 6', 0x30, 1),
(17, 6, 'Texto B respuesta para la pregunta nº 6', 0x30, 2),
(18, 6, 'Texto C respuesta para la pregunta nº 6', 0x31, 3),
(19, 7, 'Texto A respuesta para la pregunta nº 7', 0x30, 1),
(20, 7, 'Texto B respuesta para la pregunta nº 7', 0x30, 2),
(21, 7, 'Texto C respuesta para la pregunta nº 7', 0x31, 3),
(22, 8, 'Texto A respuesta para la pregunta nº 8', 0x30, 1),
(23, 8, 'Texto B respuesta para la pregunta nº 8', 0x30, 2),
(24, 8, 'Texto C respuesta para la pregunta nº 8', 0x31, 3),
(25, 9, 'Texto A respuesta para la pregunta nº 9', 0x30, 1),
(26, 9, 'Texto B respuesta para la pregunta nº 9', 0x30, 2),
(27, 9, 'Texto C respuesta para la pregunta nº 9', 0x31, 3),
(28, 10, 'Texto A respuesta para la pregunta nº 10', 0x30, 1),
(29, 10, 'Texto B respuesta para la pregunta nº 10', 0x30, 2),
(30, 10, 'Texto C respuesta para la pregunta nº 10', 0x31, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` smallint(5) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(15) NOT NULL,
  `contrasena_usuario` varchar(15) DEFAULT NULL,
  `rol_usuario` enum('alumno','profesor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `contrasena_usuario`, `rol_usuario`) VALUES
(1, 'alvaro', 'aaaa', 'profesor'),
(2, 'profesor', 'pppp', 'profesor'),
(3, 'carlos', 'cccc', 'alumno'),
(4, 'david', 'dddd', 'alumno'),
(5, 'pedro', 'pppp', 'alumno'),
(6, 'alumno', 'aaaa', 'alumno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id_unico`),
  ADD KEY `exa_usu_FK` (`id_usuario`),
  ADD KEY `exa_pre_FK` (`id_pregunta`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `res_idp_FK` (`id_pregunta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `id_unico` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_respuesta` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `exa_pre_FK` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exa_usu_FK` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `res_idp_FK` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


