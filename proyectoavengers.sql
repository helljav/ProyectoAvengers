-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-07-2019 a las 18:24:21
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
-- Estructura de tabla para la tabla `cuestionarios`
--

DROP TABLE IF EXISTS `cuestionarios`;
CREATE TABLE IF NOT EXISTS `cuestionarios` (
  `idCuestionario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCuestionario` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idCuestionario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuestionarios`
--

INSERT INTO `cuestionarios` (`idCuestionario`, `nombreCuestionario`, `descripcion`) VALUES
(1, 'julio', 'iglesias'),
(2, 'Basico', 'Cuestionario con preguntas basicas'),
(13, 'Acoso sexual', 'Saber la informacion sobre el acoso sexual dentro de la unidad');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idPregunta`, `nombrePregunta`, `pregunta`) VALUES
(1, 'NULL', 'Sexo'),
(2, 'NULL', 'Edad'),
(3, NULL, 'Nivel educativo maximo'),
(4, NULL, 'Nivel de ingreso'),
(5, NULL, 'Estado civil'),
(6, NULL, 'Lugar de nacimiento'),
(7, NULL, '¿Haz sufrido acoso dentro de la UAM-iztapalapa?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_cuestionario`
--

DROP TABLE IF EXISTS `preguntas_cuestionario`;
CREATE TABLE IF NOT EXISTS `preguntas_cuestionario` (
  `idCuestionario` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `secuencia` int(255) NOT NULL,
  KEY `preguntas_cuestionario_ibfk_1` (`idPregunta`),
  KEY `preguntas_cuestionario_ibfk_2` (`idCuestionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas_cuestionario`
--

INSERT INTO `preguntas_cuestionario` (`idCuestionario`, `idPregunta`, `secuencia`) VALUES
(1, 4, 1),
(13, 1, 1),
(13, 2, 1),
(13, 7, 1);

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
  KEY `respuestas_ibfk_1` (`idPregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

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
(28, 4, '11600-3499'),
(29, 5, 'Casado'),
(30, 5, 'Soltero'),
(31, 5, 'Es complicado'),
(32, 5, 'Viudo'),
(33, 1, 'Mucho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nombreRol` varchar(255) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador\r\n'),
(2, 'Analista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `idRol` int(11) NOT NULL,
  `nombreUsuario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idRol` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `idRol`, `nombreUsuario`, `correo`, `password`) VALUES
(1, 2, 'rych', 'charly@gmail.com', '1234');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas_cuestionario`
--
ALTER TABLE `preguntas_cuestionario`
  ADD CONSTRAINT `preguntas_cuestionario_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`idPregunta`) ON UPDATE CASCADE,
  ADD CONSTRAINT `preguntas_cuestionario_ibfk_2` FOREIGN KEY (`idCuestionario`) REFERENCES `cuestionarios` (`idCuestionario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`idPregunta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
