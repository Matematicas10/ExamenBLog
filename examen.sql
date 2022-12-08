-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2022 a las 03:51:40
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `titulo` varchar(70) COLLATE utf16_spanish_ci NOT NULL,
  `imagen` varchar(70) COLLATE utf16_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf16_spanish_ci NOT NULL,
  `autor` varchar(70) COLLATE utf16_spanish_ci NOT NULL,
  `fecha` varchar(30) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`titulo`, `imagen`, `descripcion`, `autor`, `fecha`) VALUES
('Los Locos', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Ftierragamer.com%2Fw', 'Se le denomina la familia Adamms, por su caracteristica principal, que son irregulares dentro de la sociedad, el libro va marcando diferentes acontecimento destacados dentro de la ausencia', 'Reyes, José', '7/12/22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
