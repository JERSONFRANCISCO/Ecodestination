-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2018 a las 02:19:08
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

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

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  MODIFY `idtbl_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_tours`
--
ALTER TABLE `tbl_tours`
  MODIFY `idtbl_tours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
