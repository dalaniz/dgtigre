-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2019 a las 20:21:31
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

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
-- Estructura de tabla para la tabla `question_tr`
--

CREATE TABLE `question_tr` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pregunta` varchar(100) NOT NULL,
  `respuesta1` varchar(100) NOT NULL,
  `respuesta2` varchar(100) NOT NULL,
  `respuestacorrecta` varchar(100) NOT NULL,
  `nota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `question_tr`
--

INSERT INTO `question_tr` (`id`, `usuario`, `pregunta`, `respuesta1`, `respuesta2`, `respuestacorrecta`, `nota`) VALUES
(1, 'Enrique', '¿Qué etiqueta utilizamos para insertar una línea horizontal?', 'br', 'line', 'hr', 2),
(2, 'Enrique', 'Elija la etiqueta que nos dá el título más grande', 'h6', 'big', 'h1', 3),
(3, 'Enrique', 'La etiqueta center', 'Permite insertar un texto como título.', 'Permite seleccionar el texto.', 'Permite centrar el texto.', 2),
(4, 'Enrique', 'El title se encuentra dentro del body en una página web', 'No existe la etiqueta title', 'Verdadero', 'Falso', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `question_tr`
--
ALTER TABLE `question_tr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `question_tr`
--
ALTER TABLE `question_tr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
