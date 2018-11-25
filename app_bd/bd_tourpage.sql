-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2018 a las 22:05:05
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
  `id_tbl_servicios` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `img` varchar(20) NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `fechaIngreso` date NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_servicios`
--

INSERT INTO `tbl_servicios` (`id_tbl_servicios`, `titulo`, `descripcion`, `img`, `fechaVencimiento`, `fechaIngreso`, `estado`) VALUES
(1, 'Hospedaje', 'Hospedaje-Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.', 'fa-home', '0000-00-00', '2018-10-20', 'A'),
(2, 'Tours', 'Tours-Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit', 'fa-leaf', '0000-00-00', '2018-10-20', 'A'),
(3, 'Alimentación', 'Alimentación-Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit', 'fa-utensils', '0000-00-00', '2018-10-20', 'A'),
(4, 'Transporte', 'Transporte-Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit', 'fa-car', '0000-00-00', '2018-10-20', 'A'),
(5, 'Todo incluido', 'Todo incluido-Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit', 'fa-gem', '0000-00-00', '2018-10-20', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tours`
--

CREATE TABLE `tbl_tours` (
  `id_tbl_tours` int(11) NOT NULL,
  `P_nombre` text CHARACTER SET latin1 NOT NULL,
  `P_categoria` text CHARACTER SET latin1 NOT NULL,
  `img` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `fechaIngreso` date NOT NULL,
  `g_subtitulo` text CHARACTER SET latin1 NOT NULL,
  `g_descripcion` text CHARACTER SET latin1 NOT NULL,
  `precio` varchar(25) NOT NULL,
  `estado` varchar(1) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tours`
--

INSERT INTO `tbl_tours` (`id_tbl_tours`, `P_nombre`, `P_categoria`, `img`, `fechaVencimiento`, `fechaIngreso`, `g_subtitulo`, `g_descripcion`, `precio`, `estado`) VALUES
(1, 'Kayak', 'Tours sobre rios', '01', '2018-10-21', '2018-10-21', 'sub-titulo Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', '₡108 500', 'A'),
(2, 'Kayak2', 'Tours sobre rios', '02', '2018-10-21', '2018-10-21', 'sub-titulo Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', '₡95 000', 'A'),
(3, 'Kayak3', 'Tours sobre rios', '03', '2018-10-21', '2018-10-21', 'sub-titulo Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', '₡18 950', 'A'),
(4, 'Kayak4', 'Tours sobre rios', '04', '2018-10-21', '2018-10-21', 'sub-titulo Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', '₡25 000', 'A'),
(5, 'Kayak5', 'Tours sobre rios', '05', '2018-10-21', '2018-10-21', 'sub-titulo Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', '₡21 250', 'A'),
(6, 'Kayak6', 'Tours sobre rios', '06', '2018-10-21', '2018-10-21', 'sub-titulo Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', '₡100 000', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `usuario` varchar(64) NOT NULL,
  `clave` varchar(128) NOT NULL,
  `foto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `usuario`, `clave`, `foto`) VALUES
(1, '123', '123', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  ADD PRIMARY KEY (`id_tbl_servicios`);

--
-- Indices de la tabla `tbl_tours`
--
ALTER TABLE `tbl_tours`
  ADD PRIMARY KEY (`id_tbl_tours`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  MODIFY `id_tbl_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_tours`
--
ALTER TABLE `tbl_tours`
  MODIFY `id_tbl_tours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
