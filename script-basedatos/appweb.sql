-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2023 a las 22:21:44
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appweb`
--
CREATE DATABASE IF NOT EXISTS `appweb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `appweb`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `PRO_PROVEEDOR` (IN `num` INT, IN `id_user` INT, IN `var` VARCHAR(100), IN `id_pvd` INT)   CASE
	WHEN num = 0 THEN
    	SELECT * FROM proveedor WHERE id_usuario = id_user;
    WHEN num = 1 THEN
    	SELECT * FROM proveedor WHERE id_usuario = id_user and
        nombre LIKE concat('%',var,'%');
    WHEN num = 2 THEN
    	SELECT * FROM proveedor where id_usuario = id_user AND
        id = id_pvd;
END CASE$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PRO_SUSCRIPCIONES` (IN `num` INT, IN `id` INT, IN `var` VARCHAR(50), IN `id_sus` INT)   CASE
    WHEN num = 0 THEN
        SELECT * from suscripciones WHERE id_usuario = id;
    WHEN num = 1 THEN
		SELECT * FROM suscripciones WHERE id_usuario = id 			AND 
        nombre LIKE CONCAT('%',var,'%');
    WHEN num = 2 THEN
    	SELECT * FROM suscripciones WHERE id_usuario = id 			AND
        id_suscrip = id_sus;
    WHEN num = 3 THEN
    	SELECT id_suscrip, nombre FROM suscripciones WHERE 			id_usuario = id AND id_proveedor = 0;
    WHEN num = 4 THEN
    	SELECT id_suscrip, nombre FROM suscripciones WHERE
        id_usuario = id AND id_proveedor = id_sus;
        
END CASE$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exproveedor`
--

CREATE TABLE `exproveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `servicios` varchar(100) NOT NULL,
  `sitioweb` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `exproveedor`
--

INSERT INTO `exproveedor` (`id`, `nombre`, `telefono`, `correo`, `servicios`, `sitioweb`, `id_usuario`) VALUES
(14, 'Spotify', '123456789', '', 'Musica', 'https://www.spotify.com/pe/', 19),
(15, 'nombre1', '242423', '', '', 'https://www.php.net/manual/php5.php', 20),
(16, 'Netflix', '213435434', '', 'Peliculas', 'https://www.netflix.com/pe/', 19);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `list_costos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `list_costos` (
`id` int(11)
,`nombre` varchar(50)
,`pago` float
,`ciclo` int(50)
,`anual` double
,`idusuario` int(10)
,`moneda` varchar(50)
,`duracion` int(11)
,`in_dura` varchar(150)
,`categoria` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papelera`
--

CREATE TABLE `papelera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `pago` float NOT NULL,
  `ciclo` int(11) NOT NULL,
  `categoria` varchar(150) NOT NULL,
  `inicio` date NOT NULL,
  `moneda` varchar(150) NOT NULL,
  `duracion` int(11) NOT NULL,
  `in_dura` varchar(150) NOT NULL,
  `recordatorio` int(11) NOT NULL,
  `in_record` varchar(150) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `papelera`
--

INSERT INTO `papelera` (`id`, `nombre`, `pago`, `ciclo`, `categoria`, `inicio`, `moneda`, `duracion`, `in_dura`, `recordatorio`, `in_record`, `id_usuario`) VALUES
(100, 'cuenta1-netflix', 70.99, 12, 'Musica', '2022-05-26', 'USD', 2, 'años', 1, 'semanas', 19),
(101, 'cuenta2-netflix', 10.99, 52, 'Gaming', '2022-05-27', 'USD', 6, 'meses', 2, 'dias', 19),
(102, 'Spotify', 22.29, 4, 'Contenido', '2022-05-27', 'USD', 2, 'años', 1, 'semanas', 19),
(103, 'ejemplo1', 222, 2, 'Contenido', '2022-05-27', 'PEN', 2, 'años', 1, 'meses', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `servicios` varchar(1000) DEFAULT NULL,
  `sitioweb` varchar(2000) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `img`, `nombre`, `telefono`, `correo`, `servicios`, `sitioweb`, `id_usuario`) VALUES
(0, NULL, 'sin proveedor', NULL, NULL, NULL, NULL, 0);

--
-- Disparadores `proveedor`
--
DELIMITER $$
CREATE TRIGGER `DI_EXPROVEEDOR` AFTER DELETE ON `proveedor` FOR EACH ROW INSERT INTO exproveedor (nombre,telefono,correo,servicios,sitioweb,id_usuario)
VALUES (old.nombre,old.telefono,old.correo,old.servicios,old.sitioweb,old.id_usuario)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id_suscrip` int(11) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `pago` float NOT NULL,
  `ciclo` int(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `inicio_sus` date NOT NULL,
  `tipo_moneda` varchar(50) NOT NULL,
  `duracion` int(11) NOT NULL,
  `in_dura` varchar(150) NOT NULL,
  `recordatorio` int(11) NOT NULL,
  `in_record` varchar(150) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Disparadores `suscripciones`
--
DELIMITER $$
CREATE TRIGGER `DI_PAPELERA` AFTER DELETE ON `suscripciones` FOR EACH ROW INSERT INTO papelera(nombre,pago,ciclo,categoria,inicio,moneda,duracion,in_dura,recordatorio,in_record,id_usuario)
VALUES(old.nombre,old.pago,old.ciclo,old.categoria,old.inicio_sus,old.tipo_moneda,old.duracion,old.in_dura,old.recordatorio,old.in_record,old.id_usuario)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contra` varchar(50) NOT NULL,
  `edit` int(11) DEFAULT NULL,
  `fondo` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `correo`, `contra`, `edit`, `fondo`) VALUES
(1, 'admin', '', 'admin', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura para la vista `list_costos`
--
DROP TABLE IF EXISTS `list_costos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_costos`  AS SELECT `suscripciones`.`id_suscrip` AS `id`, `suscripciones`.`nombre` AS `nombre`, `suscripciones`.`pago` AS `pago`, `suscripciones`.`ciclo` AS `ciclo`, `suscripciones`.`pago`* `suscripciones`.`ciclo` AS `anual`, `suscripciones`.`id_usuario` AS `idusuario`, `suscripciones`.`tipo_moneda` AS `moneda`, `suscripciones`.`duracion` AS `duracion`, `suscripciones`.`in_dura` AS `in_dura`, `suscripciones`.`categoria` AS `categoria` FROM `suscripciones``suscripciones`  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `exproveedor`
--
ALTER TABLE `exproveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `papelera`
--
ALTER TABLE `papelera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id_suscrip`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `exproveedor`
--
ALTER TABLE `exproveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `papelera`
--
ALTER TABLE `papelera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id_suscrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
