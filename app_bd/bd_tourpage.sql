-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-11-2018 a las 04:19:24
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tourpage`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_destinos`
--

CREATE TABLE `tbl_destinos` (
  `idtbl_destinos` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_destinos`
--

INSERT INTO `tbl_destinos` (`idtbl_destinos`, `nombre`, `descripcion`, `img`, `logo`) VALUES
(1, 'Costa Rica', 'This is a wider card with supportent is a little bit longer', 'costarica.jpg', 'cr.png'),
(2, 'Nicaragua', 'This is a wider card with supportent is a little bit longer', 'nicaragua.jpg', 'nicaragua.png'),
(3, 'ECUADOR', 'This is a wider card with supportent is a little bit longer', 'ecuador.jpg', 'ecuador.png'),
(4, 'Galapagos Island', 'This is a wider card with supportent is a little bit longer', 'galapagos.jpg', 'islagalapagos.png'),
(5, 'Perú', 'This is a wider card with supportent is a little bit longer', 'peru.jpg', 'Peru.png'),
(6, 'Panamá', 'This is a wider card with supportent is a little bit longer', 'bocas-del-toro.jpg', 'panama.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_itinerario`
--

CREATE TABLE `tbl_itinerario` (
  `idtbl_itinerario` int(11) NOT NULL,
  `tbl_tours_idtbl_tours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicios`
--

CREATE TABLE `tbl_servicios` (
  `idtbl_servicios` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `img` varchar(50) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_servicios`
--

INSERT INTO `tbl_servicios` (`idtbl_servicios`, `titulo`, `descripcion`, `img`, `estado`) VALUES
(1, 'Hospedaje', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inve', 'fa-home', '1'),
(2, 'Tours', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inve', 'fa-leaf', '1'),
(3, 'Alimentación', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inve', 'fa-utensils', '1'),
(4, 'Transporte', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inve', 'fa-car', '1'),
(5, 'Todo incluido', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inve', 'fa-gem', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tours`
--

CREATE TABLE `tbl_tours` (
  `idtbl_tours` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tours`
--

INSERT INTO `tbl_tours` (`idtbl_tours`, `titulo`, `descripcion`, `img`) VALUES
(1, '12 Days Ecological Expedition', 'This is a wider card with supporting text below as a natural lead-in to additional content.', 'creative-market.jpg'),
(2, '12 Day Costa Rica - Panama Adventure', 'This is a wider card with supporting text below as a natural lead-in to additional content.', '12dias.jpg'),
(3, '10 Day Costa Rica Birds of Costa Rica', 'This is a wider card with supporting text below as a natural lead-in to additional content.', 'bocas-del-toro.jpg'),
(4, '9 Day Costa Rica Classic Adventure', 'This is a wider card with supporting text below as a natural lead-in to additional content.', '12dias.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tours_has_destinos`
--

CREATE TABLE `tbl_tours_has_destinos` (
  `id_tbl_tours_has_destinos` int(11) NOT NULL,
  `tbl_tours_idtbl_tours` int(11) NOT NULL,
  `tbl_destinos_idtbl_destinos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tours_has_destinos`
--

INSERT INTO `tbl_tours_has_destinos` (`id_tbl_tours_has_destinos`, `tbl_tours_idtbl_tours`, `tbl_destinos_idtbl_destinos`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(60) CHARACTER SET utf8 NOT NULL,
  `clave` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `usuario`, `clave`) VALUES
(1, 'jordan', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_destinos`
--
ALTER TABLE `tbl_destinos`
  ADD PRIMARY KEY (`idtbl_destinos`);

--
-- Indices de la tabla `tbl_itinerario`
--
ALTER TABLE `tbl_itinerario`
  ADD PRIMARY KEY (`idtbl_itinerario`),
  ADD KEY `fk_tbl_itinerario_tbl_tours_idx` (`tbl_tours_idtbl_tours`);

--
-- Indices de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  ADD PRIMARY KEY (`idtbl_servicios`);

--
-- Indices de la tabla `tbl_tours`
--
ALTER TABLE `tbl_tours`
  ADD PRIMARY KEY (`idtbl_tours`);

--
-- Indices de la tabla `tbl_tours_has_destinos`
--
ALTER TABLE `tbl_tours_has_destinos`
  ADD PRIMARY KEY (`id_tbl_tours_has_destinos`),
  ADD KEY `fk_tbl_tours_has_destinos_tbl_tours1_idx` (`tbl_tours_idtbl_tours`),
  ADD KEY `fk_tbl_tours_has_destinos_tbl_destinos1_idx` (`tbl_destinos_idtbl_destinos`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_destinos`
--
ALTER TABLE `tbl_destinos`
  MODIFY `idtbl_destinos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_itinerario`
--
ALTER TABLE `tbl_itinerario`
  MODIFY `idtbl_itinerario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  MODIFY `idtbl_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_tours`
--
ALTER TABLE `tbl_tours`
  MODIFY `idtbl_tours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_tours_has_destinos`
--
ALTER TABLE `tbl_tours_has_destinos`
  MODIFY `id_tbl_tours_has_destinos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_itinerario`
--
ALTER TABLE `tbl_itinerario`
  ADD CONSTRAINT `fk_tbl_itinerario_tbl_tours` FOREIGN KEY (`tbl_tours_idtbl_tours`) REFERENCES `tbl_tours` (`idtbl_tours`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_tours_has_destinos`
--
ALTER TABLE `tbl_tours_has_destinos`
  ADD CONSTRAINT `fk_tbl_tours_has_destinos_tbl_destinos1` FOREIGN KEY (`tbl_destinos_idtbl_destinos`) REFERENCES `tbl_destinos` (`idtbl_destinos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_tours_has_destinos_tbl_tours1` FOREIGN KEY (`tbl_tours_idtbl_tours`) REFERENCES `tbl_tours` (`idtbl_tours`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
