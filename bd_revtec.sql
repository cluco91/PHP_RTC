-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2015 a las 21:58:08
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_revtec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_agendar_hora`
--

CREATE TABLE IF NOT EXISTS `tbl_agendar_hora` (
  `id_hora` int(11) NOT NULL,
  `patente` varchar(10) NOT NULL,
  PRIMARY KEY (`id_hora`,`patente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_agendar_hora`
--

INSERT INTO `tbl_agendar_hora` (`id_hora`, `patente`) VALUES
(0, '164754');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado`
--

CREATE TABLE IF NOT EXISTS `tbl_estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(50) NOT NULL,
  `descripcion_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_estado`
--

INSERT INTO `tbl_estado` (`id_estado`, `nombre_estado`, `descripcion_estado`) VALUES
(0, 'Pendiente', 'Debe Realizar Revision Tecnica'),
(1, 'Aprobado', 'No Necesita Realizar Revision Tecnica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genero`
--

CREATE TABLE IF NOT EXISTS `tbl_genero` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_genero`
--

INSERT INTO `tbl_genero` (`id_genero`, `nombre_genero`) VALUES
(0, 'Masculino'),
(1, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hora`
--

CREATE TABLE IF NOT EXISTS `tbl_hora` (
  `id_hora` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `disponible` int(11) NOT NULL,
  `cod_sucursal` int(11) NOT NULL,
  PRIMARY KEY (`id_hora`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_hora`
--

INSERT INTO `tbl_hora` (`id_hora`, `fecha`, `hora`, `disponible`, `cod_sucursal`) VALUES
(0, '2015-07-20', '09:00:00', 0, 0),
(1, '2015-07-20', '10:00:00', 1, 0),
(2, '2015-07-20', '12:00:00', 1, 0),
(3, '2015-07-23', '11:00:00', 1, 1),
(4, '2015-07-23', '14:00:00', 1, 2),
(5, '2015-07-25', '15:00:00', 1, 0),
(6, '2015-07-25', '16:00:00', 1, 0),
(7, '2015-08-05', '10:00:00', 1, 0),
(8, '2015-08-10', '11:00:00', 1, 0),
(9, '2015-08-12', '13:00:00', 1, 0),
(10, '2015-08-14', '09:00:00', 1, 1),
(11, '2015-08-14', '10:00:00', 1, 1),
(12, '2015-08-17', '08:00:00', 1, 2),
(13, '2015-08-17', '09:00:00', 1, 2),
(14, '2015-08-17', '10:00:00', 1, 2),
(15, '2015-08-17', '11:00:00', 1, 2),
(16, '2015-09-19', '09:00:00', 1, 0),
(17, '2015-09-19', '10:00:00', 1, 0),
(18, '2015-09-19', '11:00:00', 1, 0),
(19, '2015-09-20', '14:00:00', 1, 1),
(20, '2015-09-20', '13:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_marca`
--

CREATE TABLE IF NOT EXISTS `tbl_marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(50) NOT NULL,
  `descripcion_marca` varchar(50) NOT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_marca`
--

INSERT INTO `tbl_marca` (`id_marca`, `nombre_marca`, `descripcion_marca`) VALUES
(1, 'Audi', 'Buen Auto'),
(2, 'BMW', 'Decente'),
(3, 'BYD', 'Muy bueno'),
(4, 'Chery', 'Genial'),
(5, 'Chevrolet', 'De Categoria'),
(6, 'Ford', 'Para gente con muchos recursos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modelo`
--

CREATE TABLE IF NOT EXISTS `tbl_modelo` (
  `id_modelo` int(11) NOT NULL,
  `nombre_modelo` varchar(50) NOT NULL,
  `descripcion_modelo` varchar(50) NOT NULL,
  `id_marca` int(11) NOT NULL,
  PRIMARY KEY (`id_modelo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_modelo`
--

INSERT INTO `tbl_modelo` (`id_modelo`, `nombre_modelo`, `descripcion_modelo`, `id_marca`) VALUES
(0, 'aud_1', 'Color Rojo', 1),
(1, 'aud_2', 'Color Verde', 1),
(2, 'aud_3', 'Color Azul', 1),
(3, 'aud_4', 'Color Blanco', 1),
(4, 'aud_5', 'Color Naranjo', 1),
(10, 'BMW_1', 'Modelo Grande', 2),
(11, 'BMW_2', 'Modelo Mediano', 2),
(12, 'BMW_3', 'Modelo Familiar', 2),
(13, 'BMW_14', 'Modelo Particular', 2),
(21, 'BYD_1', 'Deportivo', 3),
(22, 'BYD_2', 'Empresarial', 3),
(23, 'BYD_3', 'Normal', 3),
(31, 'Chery_1', 'Bueno', 4),
(32, 'Chery_2', 'Decente', 4),
(41, 'Chevrolet_1', 'Camioneta', 5),
(51, 'Ford_1', 'Profesional', 6),
(52, 'Ford_2', 'Emprendedor', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE IF NOT EXISTS `tbl_persona` (
  `rut` varchar(12) NOT NULL,
  `nombre_1` varchar(50) NOT NULL,
  `nombre_2` varchar(50) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fono` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `contrasena` varchar(6) NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`rut`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, `direccion`, `fono`, `email`, `id_genero`, `contrasena`) VALUES
('17961860-5', 'CristiÃ¡n', 'Enrique', 'Luco', 'Roman', 'Juan Moya 701b', 4940499, 'c.luco91@gmail.com', 0, 'blable'),
('15774789-4', 'carlos', 'eduardo', 'duque', 'jauregui', 'san martin 4433', 23334455, 'duque@live.cl', 0, '1234'),
('18514106-3', 'alan', 'mauricio', 'lizardi', 'albizu', 'av. las torres #6373', 72736957, 'alanlizardi.a@gmail.com', 0, '123456'),
('182736451-3', 'sdf', 'sdf', 'sdf', 'sdfg', 'dfg', 34567, 'asda@ajas.com', 1, 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona_vehiculo`
--

CREATE TABLE IF NOT EXISTS `tbl_persona_vehiculo` (
  `rut` varchar(12) NOT NULL,
  `patente` varchar(6) NOT NULL,
  PRIMARY KEY (`rut`,`patente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_persona_vehiculo`
--

INSERT INTO `tbl_persona_vehiculo` (`rut`, `patente`) VALUES
('123-k', 'AEFSA5'),
('17961860-5', '123'),
('17961860-5', '1425D8'),
('17961860-5', '234132'),
('17961860-5', '283754'),
('17961860-5', 'ABCDE8'),
('17961860-5', 'ACCSS2'),
('17961860-5', 'dsa'),
('17961860-5', 'OPSAJ4'),
('17961860-5', 'ssaad7'),
('18514106-3', '164754'),
('18514106-3', '653244');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sucursal`
--

CREATE TABLE IF NOT EXISTS `tbl_sucursal` (
  `cod_sucursal` int(11) NOT NULL,
  `nombre_sucursal` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_sucursal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_sucursal`
--

INSERT INTO `tbl_sucursal` (`cod_sucursal`, `nombre_sucursal`) VALUES
(0, 'Maipu'),
(1, 'Providencia'),
(2, 'Santiago Centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vehiculo`
--

CREATE TABLE IF NOT EXISTS `tbl_vehiculo` (
  `patente` varchar(10) NOT NULL,
  `anno` int(11) NOT NULL,
  `kilometraje` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`patente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_vehiculo`
--

INSERT INTO `tbl_vehiculo` (`patente`, `anno`, `kilometraje`, `id_modelo`, `id_estado`) VALUES
('AEFSA5', 2005, 500, 2, 0),
('1425D8', 1999, 100, 12, 0),
('ABCDE8', 1998, 100, 41, 0),
('ACCSS2', 1999, 20, 10, 0),
('ssaad7', 2000, 10, 51, 0),
('OPSAJ4', 2005, 30, 31, 0),
('164754', 2000, 0, 0, 0),
('283754', 2000, 0, 1, 0),
('dsa', 123, 213, 0, 0),
('123', 123, 213, 0, 0),
('234132', 51234, 12431, 0, 0),
('653244', 2000, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
