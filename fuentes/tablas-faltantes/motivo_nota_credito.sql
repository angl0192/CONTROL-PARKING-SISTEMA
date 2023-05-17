-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-04-2023 a las 17:26:51
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
-- Base de datos: `textiles_bdtexrocio2050`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo_nota_credito`
--

CREATE TABLE `motivo_nota_credito` (
  `cod_motivo` int(11) NOT NULL,
  `codigo` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `motivo_nota_credito`
--

INSERT INTO `motivo_nota_credito` (`cod_motivo`, `codigo`, `descripcion`, `estado`) VALUES
(1, '01', 'Anulación de la operación', 'A'),
(2, '02', 'Anulación por error en el RUC', 'A'),
(3, '03', 'Corrección por error en la descripción', 'A'),
(4, '04', 'Descuento global', 'A'),
(5, '05', 'Descuento por ítem', 'A'),
(6, '06', 'Devolución total', 'A'),
(7, '07', 'Devolución por ítem', 'A'),
(8, '08', 'Bonificación', 'A'),
(9, '09', 'Disminución en el valor', 'A'),
(10, '10', 'Otros Conceptos', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `motivo_nota_credito`
--
ALTER TABLE `motivo_nota_credito`
  ADD PRIMARY KEY (`cod_motivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `motivo_nota_credito`
--
ALTER TABLE `motivo_nota_credito`
  MODIFY `cod_motivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
