-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2016 a las 19:20:50
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `videoclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE IF NOT EXISTS `alquileres` (
`idalquiler` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idpelicula` int(11) NOT NULL,
  `precio` double NOT NULL DEFAULT '30',
  `fechaalquiler` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE IF NOT EXISTS `caja` (
`idcaja` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idpelicula` int(11) NOT NULL,
  `monto` double NOT NULL,
  `fechaalquiler` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`idcaja`, `idcliente`, `idpelicula`, `monto`, `fechaalquiler`) VALUES
(4, 2, 17, 30, '2016-11-30 01:12:32'),
(5, 2, 1, 30, '2016-11-30 01:12:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`idcliente` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(50) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(50) CHARACTER SET latin1 NOT NULL,
  `direccion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dni` varchar(50) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'ACTIVO'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nombre`, `apellido`, `telefono`, `direccion`, `dni`, `estado`) VALUES
(1, 'DIEGO', 'PENNISI', '4584463', 'PROVINCIAS UNIDAS 921 BIS', '29415803', 'ACTIVO'),
(2, 'BIANCA', 'ANIDUZZI', '152203458', 'PROVINCIAS UNIDAD 921 BIS', '37525717', 'ACTIVO'),
(3, 'TOMAS  ', 'PENNISI', '3414592446', 'POLONIA 1440', '51587903', 'ACTIVO'),
(4, 'SILVIA HERMINIA  ', 'CORDA', '13478900', 'CORRIENTES 567', '12525885', 'ACTIVO'),
(5, 'EMANUEL', 'DO', '14325678', 'POLONIA 1440', '28765340', 'ACTIVO'),
(6, 'GERARDO', 'MUÑOZ', '13478900', 'puig roig 8 ', '24322674', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
`idgenero` int(11) NOT NULL,
  `nomgenero` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`idgenero`, `nomgenero`) VALUES
(1, 'acción'),
(2, 'animación'),
(3, 'artes marciales'),
(4, 'aventura'),
(5, 'bélico'),
(6, 'biográficas'),
(7, 'ciencia ficción'),
(8, 'comedia'),
(9, 'dibujos animados'),
(10, 'documentales'),
(11, 'drama'),
(12, 'erótico'),
(13, 'fantasía'),
(14, 'histórico'),
(15, 'infantil'),
(16, 'intriga'),
(17, 'musical'),
(18, 'oeste'),
(19, 'policíaca'),
(20, 'porno'),
(21, 'religioso'),
(22, 'romántico'),
(23, 'terror'),
(24, 'clásicas'),
(25, 'guerra'),
(26, 'drama general'),
(27, 'drama suspenso'),
(28, 'animación computarizada'),
(29, 'drama romance'),
(30, 'horror'),
(31, 'drama comedia'),
(32, 'drama político'),
(33, 'suspenso'),
(34, 'Gangster’s'),
(35, 'Western'),
(36, 'deportes'),
(37, 'misterio'),
(38, 'drama judicial'),
(39, 'épica'),
(40, 'Thriller');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
`idpelicula` int(11) NOT NULL,
  `idgenero` int(11) NOT NULL,
  `nombrepeli` varchar(50) CHARACTER SET latin1 NOT NULL,
  `detalle` varchar(200) CHARACTER SET latin1 NOT NULL,
  `protagonista` varchar(200) CHARACTER SET latin1 NOT NULL,
  `precio` double NOT NULL DEFAULT '30',
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'DISPONIBLE'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`idpelicula`, `idgenero`, `nombrepeli`, `detalle`, `protagonista`, `precio`, `estado`) VALUES
(1, 2, 'El Capitan América', '  Muy Buena Película 8 pts', 'Jony Deep', 30, 'ALQUILADA'),
(2, 8, 'Tonto y Retonto', 'Exelente 10 pts', 'Jim Carrey', 30, 'DISPONIBLE'),
(3, 0, 'La Redada', ' La Redada', 'Perry Henrry', 30, 'DISPONIBLE'),
(4, 15, 'Gato con Botas', 'Buena no solo para infantiles 8 pts', 'El gato', 30, 'DISPONIBLE'),
(6, 5, 'Soldado universal', 'Es Un Soldado que se convirtio en Universal', 'Jan Con Van Dam', 30, 'DISPONIBLE'),
(8, 11, 'Rescatando al Soldado Ryan', 'exelente 10 pts.', 'Tom Hanks', 30, 'DISPONIBLE'),
(12, 0, 'Terminator 2', '   7 pts exelente Actuacion', 'Arnol Shoewseneger ', 30, 'DISPONIBLE'),
(17, 6, 'LA PASÍON DE CRISTO', '10  PTS MUCHO DRAMA', 'ALVARO DAVIS', 30, 'ALQUILADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idusuario` int(11) NOT NULL,
  `nomusuario` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nomusuario`, `password`) VALUES
(1, 'ADMINISTRADOR', '1234admin'),
(2, 'DIEGO', '1501@Alt'),
(3, 'TOMASAdfmin', 'toto '),
(6, 'Pedro@hotmail.com', '1234@diego ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquileres`
--
ALTER TABLE `alquileres`
 ADD PRIMARY KEY (`idalquiler`), ADD KEY `idcliente` (`idcliente`), ADD KEY `idpelicula` (`idpelicula`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
 ADD PRIMARY KEY (`idcaja`), ADD KEY `idcliente` (`idcliente`), ADD KEY `idpelicula` (`idpelicula`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
 ADD PRIMARY KEY (`idgenero`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
 ADD PRIMARY KEY (`idpelicula`), ADD KEY `idgenero` (`idgenero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquileres`
--
ALTER TABLE `alquileres`
MODIFY `idalquiler` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
MODIFY `idcaja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
MODIFY `idgenero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
MODIFY `idpelicula` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquileres`
--
ALTER TABLE `alquileres`
ADD CONSTRAINT `FK_alquileres_clientes` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_alquileres_peliculas` FOREIGN KEY (`idpelicula`) REFERENCES `peliculas` (`idpelicula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `caja`
--
ALTER TABLE `caja`
ADD CONSTRAINT `FK_caja_clientes` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_caja_peliculas` FOREIGN KEY (`idpelicula`) REFERENCES `peliculas` (`idpelicula`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
