-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-09-2021 a las 23:49:15
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto_final`
--
CREATE DATABASE `proyecto_final` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `proyecto_final`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `detalle` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ordenLista` int(2) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `detalle`, `ordenLista`) VALUES
(2, 'Sellos para Profesionales', 1),
(3, 'Sellos Escolares', 2),
(4, 'Kit Emprendedores', 3),
(5, 'Kit Maestras', 4),
(6, 'Sellos Madera C/Logo', 5),
(7, 'Sellos Automáticos Varios', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalle`
--

CREATE TABLE IF NOT EXISTS `pedido_detalle` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `idPedido` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `detalle` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioSinIva` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPedido` (`idPedido`),
  KEY `idProducto` (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `pedido_detalle`
--

INSERT INTO `pedido_detalle` (`id`, `idPedido`, `idProducto`, `detalle`, `cantidad`, `precioSinIva`) VALUES
(28, 60, 3, 'Sello Nykon Pocket 302 Linea Profesional', 1, '850.00'),
(29, 60, 2, 'Sello Nykon Power 302 Linea Profesional', 1, '750.00'),
(30, 60, 5, 'Sello Automatico Nykon 303 Linea Profesional', 1, '850.00'),
(31, 61, 3, 'Sello Nykon Pocket 302 Linea Profesional', 1, '850.00'),
(32, 61, 2, 'Sello Nykon Power 302 Linea Profesional', 1, '750.00'),
(33, 61, 5, 'Sello Automatico Nykon 303 Linea Profesional', 1, '850.00'),
(34, 62, 2, 'Sello Nykon Power 302 Linea Profesional', 1, '750.00'),
(35, 62, 6, 'Sello automático Nykon 304 Linea Profesional', 1, '950.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `apellidoNombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipoDoc` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `codPostal` int(4) NOT NULL,
  `domicilio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(15) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `envio` char(1) COLLATE utf8_spanish_ci NOT NULL COMMENT 'S-Si, N-No',
  PRIMARY KEY (`idPedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=63 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `fecha`, `hora`, `apellidoNombre`, `tipoDoc`, `documento`, `codPostal`, `domicilio`, `localidad`, `telefono`, `email`, `envio`) VALUES
(60, '2021-09-12', '10:56:00', 'Seba Ferrero', 'DNI', 39049973, 2252, 'Cordoba 1056', 'Galvez', 3404503301, 'sebafcai@gmail.com', 'N'),
(61, '2021-09-12', '11:11:00', 'Pepe Rodriguez', 'DNI', 13648787, 2252, 'Laprida 254', 'Galvez', 3404545454, 'pepe@gmail.com', 'N'),
(62, '2021-09-15', '11:44:00', 'Seba Ferrero', 'DNI', 39049973, 2252, 'Cordoba 1056', 'Galvez', 3404503301, 'sebafcai@gmail.com', 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `detalle` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `destacado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'N' COMMENT 'S-Si, N-No',
  `precioSinIva` decimal(10,2) NOT NULL,
  `ordenLista` int(2) NOT NULL,
  `porcIva` decimal(4,2) DEFAULT '0.00' COMMENT '21.00 - 10.5',
  `idCategoria` int(11) DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `detalle`, `destacado`, `precioSinIva`, `ordenLista`, `porcIva`, `idCategoria`, `descripcion`, `foto1`, `foto2`, `foto3`) VALUES
(2, 'Sello Nykon Power 302 Linea Profesional', 'S', '750.00', 1, '0.00', 2, 'Sello automático ideal para profesionales. Practico y de alta durabilidad.\r\nMedidas: 14x38mm.', 'assets/img/automaticos/nykon302.png', NULL, NULL),
(3, 'Sello Nykon Pocket 302 Linea Profesional', 'S', '850.00', 2, '0.00', 2, 'Sello automático super practico y de gran estética, ideal para llevar a todos lados!.', 'assets/img/automaticos/pocket.png', 'assets/img/automaticos/pocket1.png', NULL),
(4, 'Kit Sellos Maestras x 6u. + Almohadilla + Tinta', 'S', '1400.00', 1, '0.00', 5, NULL, 'assets/img/madera/kit_maestras.png', NULL, NULL),
(5, 'Sello Automatico Nykon 303 Linea Profesional', 'N', '850.00', 3, '0.00', 2, 'Sello Nykon Power 303 con placa de 47 x 18 mm. De diseño robusto y funcional, destaca por su practicidad de uso y la posibilidad de agregar una linea mas que el standard.', 'assets/img/automaticos/nykon303.png', NULL, NULL),
(6, 'Sello automático Nykon 304 Linea Profesional', 'N', '950.00', 4, '0.00', 2, 'Medidas: 59 x 23 mm. Un sello rectangular ideal para lineas de texto de gran capacidad (Hasta 5 Lineas).', 'assets/img/automaticos/nykon304.png', NULL, NULL),
(7, 'Sello Automático Nykon M50 Linea Profesional', 'N', '1100.00', 5, '0.00', 2, 'Medidas: 59x30mm. Un sello robusto, ideal para almacenar una gran capacidad de texto.', 'assets/img/automaticos/nykonM50.png', NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  ADD CONSTRAINT `pedido_detalle_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_detalle_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
