
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-03-2015 a las 01:39:15
-- Versión del servidor: 5.1.66
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u815095155_cyber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ingreso y Gastos`
--

CREATE TABLE IF NOT EXISTS `Ingreso y Gastos` (
  `Ingresos Mensuales` int(30) NOT NULL,
  `Gasto Alquiler` int(30) NOT NULL,
  `Gasto Alimentación` int(30) NOT NULL,
  `Gasto Transporte` int(30) NOT NULL,
  `Gasto Estudio` int(30) NOT NULL,
  `Gastos Eventuales` int(30) NOT NULL,
  `Monto Disponible` int(30) NOT NULL,
  UNIQUE KEY `Ingresos Mensuales` (`Ingresos Mensuales`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Ingreso de Datos de ingreso mensual y gastos.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` text COLLATE utf8_unicode_ci NOT NULL,
  `Apellidos` text COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Ciudad` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `Usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Usuario` (`Usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`ID`, `Nombres`, `Apellidos`, `Fecha_Nacimiento`, `Ciudad`, `email`, `Usuario`, `Pass`, `Fecha`) VALUES
(1, '', '', '0000-00-00', '', '', 'edavila', 'edavila', '2015-03-01'),
(2, '', '', '0000-00-00', '', '', 'edavila2', 'edavila', '2015-03-01'),
(3, '', '', '0000-00-00', '', '', 'admin', 'admin', '2015-03-14'),
(4, '', '', '0000-00-00', '', '', 'Colombia', 'admin', '2015-03-14'),
(5, '', '', '0000-00-00', '', '', 'admin6', 'dfaf', '2015-03-14'),
(6, '', '', '0000-00-00', '', '', 'yo', 'yo', '2015-03-14'),
(7, '', '', '0000-00-00', '', '', 'admin7', 'admin4', '2015-03-14'),
(8, '', '', '0000-00-00', '', '', 'admin10', 'admin55', '2015-03-15'),
(9, '', '', '0000-00-00', '', '', 'admin50', 'dfa', '2015-03-15'),
(12, 'elkin', 'a', '1982-04-05', 'd', 's', 'admin2', 'admin', '2015-03-15'),
(11, 'elkin', 'davila', '1998-03-26', 'Medellin', 'ax.davila@gmail.com', 'davilex5', 'davilex5', '2015-03-15'),
(13, 'elik', 'daila', '1990-03-26', 'Medellin', 'dd@gmail.com', 'admin5', 'admin', '2015-03-15'),
(14, 'fdafd', 'sdaffd', '1970-08-25', 'fda', 'daf', 'dafd', '11', '2015-03-15'),
(15, 'fdafd', 'sdaffd', '1970-08-25', 'fda', 'daf', '55555', '11', '2015-03-15'),
(16, 'fdafd', 'sdaffd', '1970-08-25', 'fda', 'daf', '555555', '11', '2015-03-15'),
(17, 'mario', 'moreno', '1954-03-12', 'ma', 'dfa', 'mario', '111', '2015-03-15'),
(18, 'lili', 'adda', '2015-03-10', 'daf', 'xds', 'wsd', 'as', '2015-03-15'),
(19, 'Lina Maria', 'Estrada Cano', '1983-06-27', 'Medellin', 'lina.estrada@compuredes.com.co', 'lmestrada', '1234', '2015-03-15'),
(20, 'juan carlos', 'carvajal gomez', '1991-02-15', 'medellin', 'juancarvajalx@gmail.com', 'juancarvajal', 'soporte', '2015-03-15'),
(21, 'Juan Carlos', 'Carvajal Gomez', '0000-00-00', 'medellin', 'juancarvajalx1@gmail.com', 'juancarvajalc', 'soport3', '2015-03-17'),
(22, 'Juan Carlos', 'Carvajal Gomez', '0000-00-00', 'Medellin', 'juancarvajal2@gmail.com', 'calan', 'soporte', '2015-03-17'),
(23, 'a', 'b', '0000-00-00', 'medellin', 'juanx@gmail.com', 'juan', '12', '2015-03-17'),
(24, 'pedro', 'pablo', '0000-00-00', 'Medellin', 'juancarvajalx@gmail.com', 'pepeperez', '1234', '2015-03-17'),
(25, 'Juan Carlos', 'Carvajal Gomez', '0000-00-00', 'Medellin', 'juancarvajalx@gmail.com', 'pepe', '1234', '2015-03-17'),
(26, 'papa', 'pipi', '0000-00-00', 'Medellin', 'juancarvajalx@gmail.com', 'papa', '1234', '2015-03-17'),
(27, 'Juan Diego', 'Grisales', '1983-12-12', 'Santa Rosa', 'juanchop42@hotmail.com', 'juangrisales', 'juandiego09', '2015-03-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
