-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-07-2019 a las 13:24:24
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.3.1

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
-- Estructura de tabla para la tabla `cuestionarios`
--

DROP TABLE IF EXISTS `cuestionarios`;
CREATE TABLE IF NOT EXISTS `cuestionarios` (
  `idCuestionario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCuestionario` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idCuestionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `idPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `nombrePregunta` varchar(255) DEFAULT NULL,
  `pregunta` varchar(255) NOT NULL,
  PRIMARY KEY (`idPregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idPregunta`, `nombrePregunta`, `pregunta`) VALUES
(1, 'NULL', 'Sexo'),
(2, 'NULL', 'Edad'),
(3, NULL, 'Nivel educativo maximo'),
(4, NULL, 'Nivel de ingreso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_cuestionario`
--

DROP TABLE IF EXISTS `preguntas_cuestionario`;
CREATE TABLE IF NOT EXISTS `preguntas_cuestionario` (
  `idCuestionario` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `secuencia` int(255) NOT NULL,
  KEY `idPregunta` (`idPregunta`),
  KEY `idCuestionario` (`idCuestionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `idRespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `idPregunta` int(11) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  PRIMARY KEY (`idRespuesta`),
  KEY `idPregunta` (`idPregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`idRespuesta`, `idPregunta`, `respuesta`) VALUES
(9, 1, 'Masculino'),
(10, 1, 'Trans'),
(11, 1, 'Femenino'),
(12, 1, 'Hetero'),
(17, 2, '13-33'),
(18, 2, '34-48'),
(19, 2, '49-57'),
(20, 3, 'Primaria'),
(21, 3, 'Secundaria'),
(22, 3, 'Preparatoria'),
(23, 3, 'Nivel tecnico'),
(24, 3, 'Licenciatura'),
(25, 4, '<2699'),
(26, 4, '2700-6799'),
(27, 4, '6800'),
(28, 4, '11600-3499');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas_cuestionario`
--
ALTER TABLE `preguntas_cuestionario`
  ADD CONSTRAINT `preguntas_cuestionario_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`idPregunta`),
  ADD CONSTRAINT `preguntas_cuestionario_ibfk_2` FOREIGN KEY (`idCuestionario`) REFERENCES `cuestionarios` (`idCuestionario`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`idPregunta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
