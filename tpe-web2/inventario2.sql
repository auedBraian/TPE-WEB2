-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 19:28:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `valoracion` int(1) NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `id_producto` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `comentario`, `valoracion`, `id_usuario`, `id_producto`) VALUES
(129, 'economica y de buena calidad', 4, 35, 25),
(131, 'buen diseño y mejor precio', 3, 35, 26),
(132, 'me hubiera gustado en otro color', 4, 35, 26),
(133, 'es muy alto el precio para la calidad del producto', 4, 35, 27),
(134, 'me gusto mucho este producto', 5, 35, 27),
(135, 'Alumbra mucho y la bateria aguanta muchas horas', 5, 35, 18),
(139, 'Comodo y confortable', 4, 35, 8),
(140, 'Mala calidad', 1, 35, 8),
(141, 'Liviana y abrigada', 4, 35, 14),
(142, 'Liviana y abrigada', 4, 35, 14),
(143, 'Liviana y abrigada', 2, 35, 14),
(146, 'primer comentario para el producto inflador universal', 3, 35, 17),
(147, 'primer comentario para el producto inflador universal', 4, 35, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `precio` int(50) NOT NULL,
  `marca` varchar(120) NOT NULL,
  `temporada_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `producto`, `precio`, `marca`, `temporada_id`) VALUES
(8, 'Colchon 2 plazas', 6700, 'Bestway', 4),
(14, 'Bolsa de dormir', 2000, 'Okey', 4),
(17, 'Inflador universal', 300, 'Bestway', 4),
(18, 'Lampara Led', 400, 'BichitoDeLuz', 3),
(19, 'Mochila', 2147483647, 'Montagne', 3),
(22, 'portalampara', 1, 'luzw', 9),
(24, 'agrego edicion', 100, 'agregamosedicion', 2),
(25, 'frazada', 300, 'Escape Outdorr', 2),
(26, 'bolsa de dormir', 5000, 'Montagne', 2),
(27, 'Carpa de alta montaña', 15000, 'Alphine Skate', 2),
(28, 'PruebaDeInsercion', 200, 'nose', 3),
(29, 'microfono site', 400, 'eurocase', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada`
--

CREATE TABLE `temporada` (
  `id` int(11) NOT NULL,
  `temporada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temporada`
--

INSERT INTO `temporada` (`id`, `temporada`) VALUES
(2, 'Invierno1'),
(3, 'Otoño'),
(4, 'Primavera'),
(9, 'Verano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `rol`) VALUES
(1, 'kevin', '$2y$12$NkBw0BnaDgqqY/i4N7H1r..g1CeE15A/fZ1HAzUjaZRgRP1z7bm6e', 1),
(24, 'braian', '$2y$12$5zwsCx9EcdwSXJ9bpRcP0eyDjqhT8Tlhi9kPoWqzKfkMSnKgjvxfq', 1),
(35, 'alicia', '$2y$10$wGJdV7Unjko14LevcNUJK.IZS0IxYIbihPhSUa2DQZaz9V0E.TjN.', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `idx_usuario` (`id_usuario`),
  ADD KEY `idx_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_temporada` (`temporada_id`);

--
-- Indices de la tabla `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`temporada_id`) REFERENCES `temporada` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
