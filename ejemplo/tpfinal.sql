-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 22:31:07
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_ex`
--

CREATE TABLE `encuesta_ex` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_ex`
--

INSERT INTO `encuesta_ex` (`id`, `nombre`, `descripcion`) VALUES
(1, 'gustos de helados', 'Esta encuesta analiza los gustos de helados por edad y sexo'),
(2, 'Coca vs Manaos', 'Preferencias del publico acerca de estas conocidas gaseosas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `it_companies`
--

CREATE TABLE `it_companies` (
  `company_id` int(11) UNSIGNED NOT NULL,
  `rank` int(11) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `industries` varchar(255) NOT NULL,
  `revenue` float(9,2) NOT NULL,
  `fiscal_year` year(4) NOT NULL,
  `employees` int(11) UNSIGNED NOT NULL,
  `market_cap` float(9,2) NOT NULL,
  `headquarters` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `it_companies`
--

INSERT INTO `it_companies` (`company_id`, `rank`, `company_name`, `industries`, `revenue`, `fiscal_year`, `employees`, `market_cap`, `headquarters`) VALUES
(1, 1, 'Samsung Electronics', 'Mobile Devices, Semiconductor, Personal Computing', 212.68, 2013, 326000, 137.91, 'Seoul, South Korea'),
(2, 2, 'Apple Inc.', 'Mobile Devices, Personal Computing, Consumer software', 182.79, 2014, 98000, 616.59, 'Cupertino, CA, USA (Silicon Valley)'),
(3, 3, 'Foxconn', 'OEM Component Manufacturing', 132.07, 2013, 1290000, 32.15, 'New Taipei, Taiwan'),
(4, 4, 'HP', 'Personal Computing and Servers, Consulting', 111.45, 2014, 317500, 65.30, 'Palo Alto, CA, USA (Silicon Valley)'),
(5, 5, 'IBM', 'Computing services, Mainframes', 99.75, 2013, 433362, 188.21, 'Armonk, NY, USA'),
(6, 6, 'Amazon.com', 'Internet Retailer, App Hosting', 88.99, 2014, 154100, 175.22, 'Seattle, WA, USA'),
(7, 7, 'Microsoft', 'Business computing', 86.83, 2014, 128076, 370.31, 'Redmond, WA, USA'),
(8, 8, 'Sony', 'Electronic Devices, Personal Computing', 72.34, 2014, 146300, 17.60, 'Tokyo, Japan'),
(9, 9, 'Panasonic', 'Electronics Devices & Components', 70.83, 2013, 293742, 22.70, 'Osaka, Japan'),
(10, 10, 'Google', 'Internet Advertising, Search Engine, Miscellaneous', 59.82, 2013, 53546, 396.24, 'Mountain View, CA, USA (Silicon Valley)'),
(11, 11, 'Dell', 'Personal Computers and Servers', 56.94, 2013, 108800, 22.97, 'Austin, TX, USA'),
(12, 12, 'Toshiba', 'Semiconductor, Consumer devices', 56.20, 2013, 206087, 17.67, 'Tokyo, Japan'),
(13, 13, 'LG Electronics', 'Personal Computer, Electronics', 54.75, 2013, 38718, 17.67, 'Seoul, South Korea'),
(14, 14, 'Intel', 'Semiconductor', 52.70, 2013, 104700, 168.48, 'Santa Clara, CA, USA (Silicon Valley)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_ex`
--

CREATE TABLE `usuario_ex` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_ex`
--

INSERT INTO `usuario_ex` (`id`, `usuario`, `pwd`) VALUES
(1, 'dalaniz', 'pepe'),
(2, 'JUAN', 'PINGUCHO'),
(3, 'alan', 'pepe'),
(4, 'u2', 'u2'),
(5, 'u3', 'u3'),
(6, 'l.labo', 'pepe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta_ex`
--
ALTER TABLE `encuesta_ex`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `it_companies`
--
ALTER TABLE `it_companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indices de la tabla `usuario_ex`
--
ALTER TABLE `usuario_ex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta_ex`
--
ALTER TABLE `encuesta_ex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `it_companies`
--
ALTER TABLE `it_companies`
  MODIFY `company_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario_ex`
--
ALTER TABLE `usuario_ex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
