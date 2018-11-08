-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2018 a las 23:54:46
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Lista'),
(2, 'hoga'),
(3, 'distraccion'),
(8, 'DOs'),
(9, 'Dosasd'),
(10, 'ksjd'),
(11, 'ikkl'),
(15, 'Hola Mish'),
(16, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `descripcion` text CHARACTER SET utf8 NOT NULL,
  `fecha` date NOT NULL,
  `prioridad` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `categoria_id`, `nombre`, `descripcion`, `fecha`, `prioridad`, `status`) VALUES
(4, 1, 'hacer', 'fcila', '2018-10-27', 3, 0),
(5, 3, 'Codigo', 'Hacer las cosas', '2018-10-18', 1, 0),
(6, 2, 'JHKAS', 'JAHSJ', '2018-10-30', 5, 0),
(7, 3, 'hLA', 'LER', '2018-10-30', 8, 0),
(8, 2, 'lonas', 'sd', '2018-10-30', 8, 0),
(10, 0, 'Pa', 'D', '0000-00-00', 4, 1),
(11, 0, 'Unosd', 'dskdsd', '0000-00-00', 5, 1),
(12, 0, 'Bernal', 'Desarrollar framework', '2018-11-28', 10, 1),
(13, 0, 'Unosodkdsdsss', 'sd', '2018-11-16', 5, 1),
(14, 0, 'kj', 'ljkn', '2018-11-11', 5, 1),
(15, 0, 'Berma', 'sd', '2018-11-09', 6, 1),
(16, 0, 'Bernal', 'ijll', '2018-11-10', 8, 1),
(17, 0, 'Bermal', 'kjsd', '2018-11-16', 5, 1),
(18, 12, 'Bermañ', 'lksd', '2018-11-09', 5, 0),
(20, 1, 'Mandar mensaje', 'Enviar un pequeño mensaje de buenas noches a Mishel :3 Al fin pude terminar', '2018-11-07', 10, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
