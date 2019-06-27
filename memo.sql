-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-06-2019 a las 14:07:18
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoavengers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

DROP TABLE IF EXISTS `cuestionario`;
CREATE TABLE IF NOT EXISTS `cuestionario` (
  `idCuestionario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`idCuestionario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `idPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  PRIMARY KEY (`idPregunta`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idPregunta`, `pregunta`, `tipo`) VALUES
(1, 'Hola', 'Cerrado'),
(2, '¿cómo te llamas chiquita?', 'Cerrado'),
(3, '', 'Cerrado'),
(4, 'dsa', 'Cerrado'),
(5, 'ds', 'Cerrado'),
(6, '', 'Cerrado'),
(7, '', 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_cuestionario`
--

DROP TABLE IF EXISTS `pregunta_cuestionario`;
CREATE TABLE IF NOT EXISTS `pregunta_cuestionario` (
  `idCuestionario` int(255) NOT NULL,
  `idPregunta` int(255) NOT NULL,
  `secuencia` int(255) NOT NULL,
  UNIQUE KEY `idCuestionario` (`idCuestionario`),
  UNIQUE KEY `idPregunta` (`idPregunta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `idRespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(255) NOT NULL,
  `idPegunta` int(11) NOT NULL,
  PRIMARY KEY (`idRespuesta`),
  UNIQUE KEY `idPregunta` (`idPegunta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;