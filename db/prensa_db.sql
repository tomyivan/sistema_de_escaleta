-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2023 a las 02:59:22
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prensa_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloque`
--

CREATE TABLE `bloque` (
  `idBloque` int(11) NOT NULL,
  `nomBloque` varchar(5) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bloque`
--

INSERT INTO `bloque` (`idBloque`, `nomBloque`, `fechaCreacion`, `activo`) VALUES
(1, '', '2023-02-24 17:01:37', 1),
(2, 'B1', '2023-02-24 17:01:37', 1),
(3, 'B2', '2023-02-24 17:01:37', 1),
(4, 'B3', '2023-02-24 17:01:37', 1),
(5, 'B4', '2023-02-24 17:01:37', 1),
(6, 'B5', '2023-02-24 17:01:37', 1),
(7, 'B6', '2023-02-24 17:01:37', 1),
(8, 'B7', '2023-02-24 17:01:37', 1),
(9, 'B8', '2023-02-24 17:01:37', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idCiudad` int(11) NOT NULL,
  `nomCiudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idCiudad`, `nomCiudad`) VALUES
(1, ''),
(2, 'Beni'),
(3, 'Chuquisaca'),
(4, 'Cochabamba'),
(5, 'Internacional'),
(6, 'La Paz'),
(7, 'Oruro'),
(8, 'Pando'),
(9, 'Potosi'),
(10, 'RNA'),
(11, 'Santa Cruz'),
(12, 'Tarija');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `idContenido` int(11) NOT NULL,
  `nomContenido` varchar(50) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`idContenido`, `nomContenido`, `fechaCreacion`, `activo`) VALUES
(1, '', '2023-02-24 00:00:00', 1),
(2, 'ACTUACIONES', '2023-02-24 00:00:00', 1),
(3, 'BRIGADA', '2023-02-24 00:00:00', 1),
(4, 'CIUDAD', '2023-02-24 00:00:00', 1),
(5, 'CLIMA', '2023-02-24 00:00:00', 1),
(6, 'COCINA', '2023-02-24 00:00:00', 1),
(7, 'COMERCIAL', '2023-02-24 00:00:00', 1),
(8, 'DEPORTES', '2023-02-24 00:00:00', 1),
(9, 'DESPEDIDA', '2023-02-24 00:00:00', 1),
(10, 'ECOLOGIA', '2023-02-24 00:00:00', 1),
(11, 'ECONOMIA', '2023-02-24 00:00:00', 1),
(12, 'EDUCACION', '2023-02-24 00:00:00', 1),
(13, 'ENTRETENIMIENTO', '2023-02-24 00:00:00', 1),
(14, 'INTERNACIONAL', '2023-02-24 00:00:00', 1),
(15, 'JUSTICIA', '2023-02-24 00:00:00', 1),
(16, 'POLICIAL', '2023-02-24 00:00:00', 1),
(17, 'POLITICA', '2023-02-24 00:00:00', 1),
(18, 'PROMOCION', '2023-02-24 00:00:00', 1),
(19, 'REDES SOCIALES', '2023-02-24 00:00:00', 1),
(20, 'SALUD', '2023-02-24 00:00:00', 1),
(21, 'SALUDO', '2023-02-24 00:00:00', 1),
(22, 'SOCIAL', '2023-02-24 00:00:00', 1),
(23, 'VARIOS', '2023-02-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edicion`
--

CREATE TABLE `edicion` (
  `idEdicion` int(11) NOT NULL,
  `nomEdicion` varchar(50) NOT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `edicion`
--

INSERT INTO `edicion` (`idEdicion`, `nomEdicion`, `fechaCreacion`, `activo`) VALUES
(1, 'Al Dia Revista', '2023-02-24 00:00:00', 1),
(2, 'Segunda Edicion', '2023-02-24 00:00:00', 1),
(3, 'Tercera Edicion', '2023-02-24 00:00:00', 1),
(4, 'Primera Edicion de Sabado', '2023-02-24 00:00:00', 1),
(5, 'Segunda Edicion de Sabado', '2023-02-24 00:00:00', 1),
(6, 'Primera Edicion de Domingo', '2023-02-24 00:00:00', 1),
(7, 'Segunda Edicion de Domingo', '2023-02-24 00:00:00', 1),
(8, 'Aqui en Vivo', '2023-02-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editor`
--

CREATE TABLE `editor` (
  `IdEditor` int(8) NOT NULL,
  `NombreEditor` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `editor`
--

INSERT INTO `editor` (`IdEditor`, `NombreEditor`) VALUES
(1, ''),
(2, 'Alejandra Negro'),
(3, 'Alejandro Rojas'),
(4, 'Alejandro Torrico'),
(5, 'Alfredo Cabrera'),
(6, 'Alvaro Guzman'),
(7, 'Carlos Herbas'),
(8, 'Carlos Jimenez'),
(9, 'Carlos Lara'),
(10, 'Carlos Lijeron'),
(11, 'Carlos Saavedra'),
(12, 'Carlos Salcedo'),
(13, 'Charlye Suarez'),
(14, 'Claudio Zambrana'),
(15, 'Conny Calderon'),
(16, 'Cristian Guzman'),
(17, 'Cristian Tejerina'),
(18, 'Daniel Apaza'),
(19, 'Daniel Ardiles'),
(20, 'Daniel Conde'),
(21, 'Daniela Serrano'),
(22, 'Dante Berrios'),
(23, 'Denisse Quiroga'),
(24, 'Deysi Cuestas'),
(25, 'Diego Poma'),
(26, 'Edmundo Gutierrez'),
(27, 'Edwin Natush'),
(28, 'Edwin Soria'),
(29, 'Elton Masay'),
(30, 'Elvis Sanchez'),
(31, 'Ezequiel Serres'),
(32, 'Fabiana Castillo'),
(33, 'Federico Camacho'),
(34, 'Fernando Duran'),
(35, 'Fernando Eid'),
(36, 'Fernando Mollo'),
(37, 'Freddy Yauri'),
(38, 'Graciela Reque'),
(39, 'Griselda Sandoval'),
(40, 'Guido Castro'),
(41, 'Guillermo Delgadillo'),
(42, 'Gustavo Meneses'),
(43, 'Hector Uriarte'),
(44, 'Henry Gutierrez'),
(45, 'Hialmar Sanchez'),
(46, 'Hugo Jimenez'),
(47, 'Israel Gutierrez'),
(48, 'Ivan Quisbert'),
(49, 'Javier Vaca'),
(50, 'Jeanneth Martinez'),
(51, 'Jenny Quispe'),
(52, 'Jesica Limpias'),
(53, 'Jeysi Alanes'),
(54, 'Jhonn Guzman'),
(55, 'Jhoselin Cabrera'),
(56, 'Joaquin Luna'),
(57, 'Jorge Ale'),
(58, 'Jose Choquechambi'),
(59, 'Jose Irusta'),
(60, 'Juan Carlos Tarqui'),
(61, 'Juan Jose Flores'),
(62, 'Juan Pablo Mamani'),
(63, 'Junior Barba'),
(64, 'Jussara Rueda Galean'),
(65, 'Karla Rodriguez'),
(66, 'Leila Castro'),
(67, 'Lorena Morales'),
(68, 'Lucia Quispe'),
(69, 'Luis Tapia'),
(70, 'Luis Torrez'),
(71, 'Maicol Orellana'),
(72, 'Manolo Aillon'),
(73, 'Manuel Choque'),
(74, 'Martin Alcorta'),
(75, 'Maximo Chura'),
(76, 'Michelle Meneses'),
(77, 'Miguel Choque'),
(78, 'Miguel Soliz'),
(79, 'Milton Sandoval'),
(80, 'Moises Colque'),
(81, 'Myriam Claros'),
(82, 'Nayra Deheza'),
(83, 'Nelson Medina'),
(84, 'Nery Prado'),
(85, 'Nicolas Enao'),
(86, 'Oscar Portugal'),
(87, 'Osmar Machicado'),
(88, 'Ovidio Paz'),
(89, 'Pamela Garcia'),
(90, 'Paola Coimbra'),
(91, 'Paola Zubieta'),
(92, 'Patricia Conde'),
(93, 'Paula Banegas'),
(94, 'Paula Ibañez'),
(95, 'Practicante'),
(96, 'Rene Quispe'),
(97, 'Reynaldo Peralta'),
(98, 'Ricardo Arias'),
(99, 'Ricardo Rivas'),
(100, 'Richard Pereira'),
(101, 'Roberth Valdivia'),
(102, 'Roberto Rios'),
(103, 'Roberto Soliz'),
(104, 'Rocio Hanssen'),
(105, 'Rodrigo Barrera'),
(106, 'Roly Mendez'),
(107, 'Rosmery Flores'),
(108, 'Royer Choque'),
(109, 'Samuel Hernandez'),
(110, 'Sergio Loza'),
(111, 'Tatiana Miranda'),
(112, 'Thiago Torrico'),
(113, 'Tony Gutierrez'),
(114, 'Valeria Otondo'),
(115, 'Vania Borja'),
(116, 'Victor Hugo Rojas'),
(117, 'Vivian Donoso'),
(119, 'Josè Miguel Velasco'),
(120, 'Juan Carlos Macias'),
(121, 'Ilsen Hernani');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `idFormato` int(11) NOT NULL,
  `nomFormato` varchar(50) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`idFormato`, `nomFormato`, `fechaCreacion`, `activo`) VALUES
(1, '', '0000-00-00 00:00:00', 0),
(2, 'CAPSULA', '2023-02-25 00:00:00', 1),
(3, 'CLIMA', '2023-02-26 00:00:00', 1),
(4, 'COMERCIAL', '2023-02-27 00:00:00', 1),
(5, 'COMPACTOS', '2023-02-28 00:00:00', 1),
(6, 'CUADROS', '2023-03-01 00:00:00', 1),
(7, 'ENTREVISTA', '2023-03-02 00:00:00', 1),
(8, 'FALSO', '2023-03-03 00:00:00', 1),
(9, 'INFORME', '2023-03-04 00:00:00', 1),
(10, 'NOTA', '2023-03-05 00:00:00', 1),
(11, 'NOTA ACTUALIZADA', '2023-03-06 00:00:00', 1),
(12, 'NOTA REPETIDA', '2023-03-07 00:00:00', 1),
(13, 'POST', '2023-03-08 00:00:00', 1),
(14, 'PROMOCION', '2023-03-09 00:00:00', 1),
(15, 'REPORTAJE', '2023-03-10 00:00:00', 1),
(16, 'SECTOR', '2023-03-11 00:00:00', 1),
(17, 'UNIDAD MOVIL', '2023-03-12 00:00:00', 1),
(18, 'VIVO', '2023-03-13 00:00:00', 1),
(19, 'VO', '2023-03-14 00:00:00', 1),
(20, 'VO-VTR', '2023-03-15 00:00:00', 1),
(21, 'VTR', '2023-03-16 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodismo`
--

CREATE TABLE `periodismo` (
  `Id` int(11) NOT NULL,
  `ordenPosicion` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `IdPresentador` int(8) DEFAULT NULL,
  `idEdicion` int(11) DEFAULT NULL,
  `Emitido` varchar(32) DEFAULT NULL,
  `IdProductor` int(8) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `idFormato` int(11) DEFAULT NULL,
  `idCiudad` int(11) DEFAULT NULL,
  `IdPeriodista` int(8) DEFAULT NULL,
  `IdEditor` int(8) DEFAULT NULL,
  `idContenido` int(11) DEFAULT NULL,
  `Duracion` time DEFAULT NULL,
  `idBloque` int(11) DEFAULT NULL,
  `mm_ss` time DEFAULT NULL,
  `Hora_Prog` time DEFAULT NULL,
  `idRealiza_en` int(11) DEFAULT NULL,
  `activo` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `periodismo`
--

INSERT INTO `periodismo` (`Id`, `ordenPosicion`, `numero`, `Fecha`, `IdPresentador`, `idEdicion`, `Emitido`, `IdProductor`, `Descripcion`, `idFormato`, `idCiudad`, `IdPeriodista`, `IdEditor`, `idContenido`, `Duracion`, `idBloque`, `mm_ss`, `Hora_Prog`, `idRealiza_en`, `activo`, `flag`, `fechaCreacion`, `fechaModificacion`) VALUES
(1, 1, 1, '2023-02-26', 2, 1, 'SI', 26, 'hola', 1, 1, 6, 5, 1, '00:00:00', 1, NULL, '06:00:00', 2, 1, 0, NULL, NULL),
(2, 2, 2, '2023-02-26', 2, 1, 'SI', 26, 'mundo', 1, 1, 6, 5, 4, '00:10:20', 1, NULL, '06:10:20', 2, 1, 0, NULL, NULL),
(3, 3, 3, '2023-02-26', 2, 1, 'SI', 26, 'coo', 1, 1, 1, 1, 1, '00:10:10', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL),
(4, 4, 4, '2023-02-26', 1, 1, 'SI', 26, 'estas', 1, 1, 1, 1, 1, '00:00:00', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL),
(5, 6, 5, '2023-02-26', 1, 1, 'SI', 26, 'que', 1, 1, 1, 1, 1, '00:00:00', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL),
(6, 5, 6, '2023-02-26', 2, 1, 'SI', 26, 'hace', 1, 1, 1, 1, 1, '00:00:00', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL),
(7, 7, 7, '2023-02-26', 1, 1, 'SI', 26, 'que haces', 1, 1, 1, 1, 1, '00:00:00', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL),
(8, 8, 8, '2023-02-26', 1, 1, 'SI', 26, 'hola', 1, 1, 1, 1, 1, '00:00:00', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL),
(9, 9, 9, '2023-02-26', 1, 1, 'SI', 26, '', 1, 1, 1, 1, 1, '00:00:00', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL),
(10, 10, 10, '2023-02-26', 1, 1, 'SI', 26, '', 1, 1, 1, 1, 1, '00:00:00', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL),
(12, 11, 11, '2023-02-26', 1, 1, 'SI', 26, 'hpña', 1, 12, 6, 1, 1, '00:00:00', 1, NULL, '06:20:30', 2, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodista`
--

CREATE TABLE `periodista` (
  `IdPeriodista` int(8) NOT NULL,
  `NombrePeriodista` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `periodista`
--

INSERT INTO `periodista` (`IdPeriodista`, `NombrePeriodista`) VALUES
(1, ''),
(2, 'Alejandro Rojas'),
(3, 'Alejandro Torrico'),
(4, 'Alexandra Almendras'),
(5, 'Brenda Aleman'),
(6, 'Carlos Herbas'),
(7, 'Carlos Jimenez'),
(8, 'Carlos Lara'),
(9, 'Carlos Lijeron'),
(10, 'Carlos Saavedra'),
(11, 'Cesar Pardo'),
(12, 'Charlye Suarez'),
(13, 'Claudia Limpias'),
(14, 'Claudio Zambrana'),
(15, 'Conny Calderon'),
(16, 'Cristian Guzman'),
(17, 'Cristian Tejerina'),
(18, 'Daniel Apaza'),
(19, 'Daniel Ardiles'),
(20, 'Daniel Conde'),
(21, 'Daniela Serrano'),
(22, 'Dante Berrios'),
(23, 'Denisse Quiroga'),
(24, 'Deysi Cuestas'),
(25, 'Diego Poma'),
(26, 'Donato Hannover'),
(27, 'Edmundo Gutierrez'),
(28, 'Edwin Soria'),
(29, 'Elton Masay'),
(30, 'Elvis Sanchez'),
(31, 'Ezequiel Serres'),
(32, 'Fabiana Castillo'),
(33, 'Federico Camacho'),
(34, 'Fernando Cortez'),
(35, 'Fernando Duran'),
(36, 'Fernando Eid'),
(37, 'Fernando Mollo'),
(38, 'Freddy Yauri'),
(39, 'Giovanna Cardenas'),
(40, 'Graciela Reque'),
(41, 'Griselda Sandoval'),
(42, 'Guido Castro'),
(43, 'Guillermo Delgadillo'),
(44, 'Hector Uriarte'),
(45, 'Henry Gutierrez'),
(46, 'Hialmar Sanchez'),
(47, 'Hugo Jimenez'),
(48, 'Ivan Quisbert'),
(49, 'Ivone Centellas'),
(50, 'Javier Vaca'),
(51, 'Jeanneth Martinez'),
(52, 'Jenny Quispe'),
(53, 'Jesica Limpias'),
(54, 'Jeysi Alanes'),
(55, 'Jhonn Guzman'),
(56, 'Jhoselin Cabrera'),
(57, 'Joaquin Luna'),
(58, 'Jose Choquechambi'),
(59, 'Jose Irusta'),
(60, 'Juan Jose Flores'),
(61, 'Juan Pablo Mamani'),
(62, 'Junior Barba'),
(63, 'Jussara Rueda Galean'),
(64, 'Karla Rodriguez'),
(65, 'Leila Castro'),
(66, 'Leonel Fransezze'),
(67, 'Lorena Morales'),
(68, 'Lucia Quispa'),
(69, 'Luis Tapia'),
(70, 'Luis Torrez'),
(71, 'Maicol Orellana'),
(72, 'Manolo Aillon'),
(73, 'Mariel Soukup'),
(74, 'Martin Alcorta'),
(75, 'Maximo Chura'),
(76, 'Michelle Meneses'),
(77, 'Miguel Soliz'),
(78, 'Milton Sandoval'),
(79, 'Moises Colque'),
(80, 'Myriam Claros'),
(81, 'Nayra Deheza'),
(82, 'Nery Prado'),
(83, 'Nicolas Enao'),
(84, 'Ovidio Paz'),
(85, 'Pamela Garcia'),
(86, 'Pamela Sotelo'),
(87, 'Paola Coimbra'),
(88, 'Paola Zubieta'),
(89, 'Patricia Conde'),
(90, 'Paula Banegas'),
(91, 'Paula Ibañez'),
(92, 'Practicante'),
(93, 'Ricardo Arias'),
(94, 'Ricardo Rivas'),
(95, 'Richard Pereira'),
(96, 'Roberth Valdivia'),
(97, 'Roberto Rios'),
(98, 'Roberto Soliz'),
(99, 'Rocio Hanssen'),
(100, 'Rodrigo Barrera'),
(101, 'Roly Mendez'),
(102, 'Royer Choque'),
(103, 'Sergio Loza'),
(104, 'Tatiana Miranda'),
(105, 'Thiago Torrico'),
(106, 'Valeria Otondo'),
(107, 'Vania Borja'),
(108, 'Victor Hugo Rojas'),
(109, 'Victor Laura Paucara'),
(110, 'Vivian Donoso'),
(112, 'Mònica Bustos'),
(113, 'Roberto Acosta'),
(114, 'Luis Coronado'),
(115, 'Diego Bonilla'),
(116, 'Gley Salazar'),
(117, 'Mario del Alcazar'),
(118, 'Oscar Portugal'),
(119, 'Josè  Miguel Velasco'),
(120, 'Juan Carlos Macias'),
(121, 'Ilsen Hernani'),
(122, 'Yorgely Ordoñez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentador`
--

CREATE TABLE `presentador` (
  `IdPresentador` int(11) NOT NULL,
  `NombrePresentador` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `presentador`
--

INSERT INTO `presentador` (`IdPresentador`, `NombrePresentador`) VALUES
(1, ''),
(2, 'Carlos Lara'),
(3, 'Charlye Suarez'),
(4, 'Conny Calderon'),
(5, 'Corte Comercial'),
(6, 'Cristhian Rivero'),
(7, 'Daniel Ardiles'),
(8, 'Daniela Serrano'),
(9, 'Denisse Quiroga'),
(10, 'Edmundo Gutierrez'),
(11, 'Fabiana Castillo'),
(12, 'Federico Camacho'),
(13, 'Fernando Eid'),
(14, 'Giovanna Cardenas'),
(15, 'Hector Uriarte'),
(16, 'Hialmar Sanchez'),
(17, 'Jhonn Guzman'),
(18, 'Juan Pablo Mamani'),
(19, 'Junior Barba'),
(20, 'Leila Castro'),
(21, 'Leonel Fransezze'),
(22, 'Manolo Aillon'),
(23, 'Mariel Soukup'),
(24, 'Mixto'),
(25, 'Myriam Claros'),
(26, 'Nayra Deheza'),
(27, 'Pamela Sotelo'),
(28, 'Paola Coimbra'),
(29, 'Paola Zubieta'),
(30, 'Paola Zubieta'),
(31, 'Paula Banegas'),
(32, 'Paula Ibañez'),
(33, 'PNT'),
(34, 'Richard Pereira'),
(35, 'Rodrigo Barrera'),
(36, 'Sergio Rosado'),
(37, 'Tatiana Miranda'),
(38, 'Vania Borja'),
(39, 'Victor Hugo Rojas'),
(40, 'Vivian Donoso'),
(42, 'Mónica Bustos'),
(43, 'Roberto Acosta'),
(44, 'Luis Coronado'),
(45, 'Diego Bonilla'),
(46, 'Gley Salazar'),
(47, 'Mario del Alcazar'),
(48, 'Claudio Zambrana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productor`
--

CREATE TABLE `productor` (
  `IdProductor` int(8) NOT NULL,
  `nombreUsuario` varchar(30) DEFAULT NULL,
  `Nombre` varchar(32) DEFAULT NULL,
  `Pass` varchar(32) DEFAULT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productor`
--

INSERT INTO `productor` (`IdProductor`, `nombreUsuario`, `Nombre`, `Pass`, `activo`) VALUES
(1, '', '', '12345678', 0),
(2, 'CarMar', 'Carla Martinez', 'MarCar1', 1),
(3, 'CarLar', 'Carlos Lara', 'LarCar2', 1),
(4, 'EzeSer', 'Ezequiel Serres', 'EzeSer3', 1),
(7, 'JenQui', 'Jenny Quispe', 'QuiJen4', 1),
(11, 'LorMor', 'Lorena Morales', 'MorLor5', 1),
(12, 'LucQui', 'Lucía Quispe', 'QuiLuc6', 1),
(13, 'LuiTor', 'Luis Torrez', 'TorLui7', 1),
(14, 'MarSou', 'Mariel Soukup', 'SouMar8', 1),
(15, 'MarAlc', 'Martín Alcorta', 'AlcMar9', 1),
(16, 'NerPra', 'Nery Prado', 'PraNer10', 1),
(19, 'RobSol', 'Roberto Soliz', 'SolRob11', 1),
(26, 'JuaPer', 'Juan Perez', '123456', 2),
(27, 'YorOrd', 'Yorgely Ordoñez', 'OrdYor12', 1),
(28, 'DieBon', 'Diego Bonilla', 'BonDie13', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realizada_en`
--

CREATE TABLE `realizada_en` (
  `idRealizada` int(11) NOT NULL,
  `nomRealizada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `realizada_en`
--

INSERT INTO `realizada_en` (`idRealizada`, `nomRealizada`) VALUES
(1, 'La Paz'),
(2, 'Cochabamba'),
(3, 'Santa Cruz');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bloque`
--
ALTER TABLE `bloque`
  ADD PRIMARY KEY (`idBloque`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idCiudad`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`idContenido`);

--
-- Indices de la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD PRIMARY KEY (`idEdicion`);

--
-- Indices de la tabla `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`IdEditor`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`idFormato`);

--
-- Indices de la tabla `periodismo`
--
ALTER TABLE `periodismo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdPresentador` (`IdPresentador`),
  ADD KEY `IdPeriodista` (`IdPeriodista`,`IdEditor`),
  ADD KEY `IdEditor` (`IdEditor`),
  ADD KEY `IdProductor` (`IdProductor`),
  ADD KEY `idCiudad` (`idCiudad`),
  ADD KEY `idBloque` (`idBloque`),
  ADD KEY `idEdicion` (`idEdicion`),
  ADD KEY `idFormato` (`idFormato`),
  ADD KEY `idContenido` (`idContenido`),
  ADD KEY `idRealiza_en` (`idRealiza_en`);

--
-- Indices de la tabla `periodista`
--
ALTER TABLE `periodista`
  ADD PRIMARY KEY (`IdPeriodista`);

--
-- Indices de la tabla `presentador`
--
ALTER TABLE `presentador`
  ADD PRIMARY KEY (`IdPresentador`);

--
-- Indices de la tabla `productor`
--
ALTER TABLE `productor`
  ADD PRIMARY KEY (`IdProductor`);

--
-- Indices de la tabla `realizada_en`
--
ALTER TABLE `realizada_en`
  ADD PRIMARY KEY (`idRealizada`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bloque`
--
ALTER TABLE `bloque`
  MODIFY `idBloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idCiudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `edicion`
--
ALTER TABLE `edicion`
  MODIFY `idEdicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `editor`
--
ALTER TABLE `editor`
  MODIFY `IdEditor` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de la tabla `periodismo`
--
ALTER TABLE `periodismo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `periodista`
--
ALTER TABLE `periodista`
  MODIFY `IdPeriodista` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `presentador`
--
ALTER TABLE `presentador`
  MODIFY `IdPresentador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `productor`
--
ALTER TABLE `productor`
  MODIFY `IdProductor` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `realizada_en`
--
ALTER TABLE `realizada_en`
  MODIFY `idRealizada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `periodismo`
--
ALTER TABLE `periodismo`
  ADD CONSTRAINT `periodismo_ibfk_1` FOREIGN KEY (`IdEditor`) REFERENCES `editor` (`IdEditor`),
  ADD CONSTRAINT `periodismo_ibfk_10` FOREIGN KEY (`idContenido`) REFERENCES `contenido` (`idContenido`),
  ADD CONSTRAINT `periodismo_ibfk_11` FOREIGN KEY (`idRealiza_en`) REFERENCES `realizada_en` (`idRealizada`),
  ADD CONSTRAINT `periodismo_ibfk_2` FOREIGN KEY (`IdPeriodista`) REFERENCES `periodista` (`IdPeriodista`),
  ADD CONSTRAINT `periodismo_ibfk_3` FOREIGN KEY (`IdPresentador`) REFERENCES `presentador` (`IdPresentador`),
  ADD CONSTRAINT `periodismo_ibfk_4` FOREIGN KEY (`IdProductor`) REFERENCES `productor` (`IdProductor`),
  ADD CONSTRAINT `periodismo_ibfk_5` FOREIGN KEY (`idCiudad`) REFERENCES `ciudad` (`idCiudad`),
  ADD CONSTRAINT `periodismo_ibfk_6` FOREIGN KEY (`IdEditor`) REFERENCES `editor` (`IdEditor`),
  ADD CONSTRAINT `periodismo_ibfk_7` FOREIGN KEY (`idBloque`) REFERENCES `bloque` (`idBloque`),
  ADD CONSTRAINT `periodismo_ibfk_8` FOREIGN KEY (`idEdicion`) REFERENCES `edicion` (`idEdicion`),
  ADD CONSTRAINT `periodismo_ibfk_9` FOREIGN KEY (`idFormato`) REFERENCES `formato` (`idFormato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
