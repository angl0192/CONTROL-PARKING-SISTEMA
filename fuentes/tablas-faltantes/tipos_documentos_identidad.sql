-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-04-2023 a las 17:25:52
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `textiles_bdcarloncho2050`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_documentos_identidad`
--

CREATE TABLE `tipos_documentos_identidad` (
  `cod_tipodoc` int(11) NOT NULL,
  `codigo_doc` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_documentos_identidad`
--

INSERT INTO `tipos_documentos_identidad` (`cod_tipodoc`, `codigo_doc`, `descripcion`) VALUES
(1, '01', 'DNI'),
(2, '04', 'CARNET DE EXTRANJERIA'),
(3, '06', 'RUC'),
(4, '07', 'PASAPORTE'),
(5, '11', 'PART. DE NACIMIENTO'),
(6, '00', 'OTROS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipos_documentos_identidad`
--
ALTER TABLE `tipos_documentos_identidad`
  ADD PRIMARY KEY (`cod_tipodoc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipos_documentos_identidad`
--
ALTER TABLE `tipos_documentos_identidad`
  MODIFY `cod_tipodoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
