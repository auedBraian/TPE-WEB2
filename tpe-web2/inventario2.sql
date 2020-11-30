-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 14:48:30
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
(2, 'No abriga mucho, no estoy conforme con el producto', 1, 5, 7),
(9, 'comentario de prueba', 5, 5, 13),
(11, 'comentario de prueba', 1, 5, 16),
(12, 'comentario de prueba', 2, 1, 14),
(14, 'comentario de prueba', 3, 3, 17),
(15, 'prueba no se cuanto', 2, 5, 17),
(16, 'asdfasdfasdfa', 1, 1, 17),
(20, 'primer comentario del articulo con id 8', 1, 3, 8),
(21, 'segundo comentarios del articulo con id 8', 1, 3, 8),
(34, 'hola como te va', 4, 3, 17),
(35, 'header locato', 3, 3, 8),
(36, 'hola como estas', 4, 3, 19),
(37, 'adfadfasdf', 4, 3, 19),
(38, 'dsfsfds', 3, 3, 19),
(39, 'asdfasdfas', 1, 3, 19),
(40, 'sdfsfdsfsdfdssd', 1, 3, 19),
(41, 'prueba mil', 1, 3, 19),
(42, 'asdfasdfas', 1, 3, 19),
(43, 'dfasdfas', 3, 3, 19),
(44, 'asdfasdfasdfasdfasdfasdfas', 1, 3, 19),
(53, 'mochila', 1, 3, 19),
(56, 'yo tiro un comentario', 4, 3, 14),
(67, 'probando event', 1, 3, 8),
(68, 'probando evento 2', 5, 3, 8),
(69, 'probando evento 2', 5, 3, 8),
(76, 'primer comentario portalampara', 1, 3, 22),
(77, 'sdfasfsdd', 1, 3, 22),
(89, 'sdfasdfasdfa', 3, 3, 22),
(90, 'sdfasdfasdfa', 3, 3, 22),
(91, 'sdfasdfasdfa', 3, 3, 22),
(92, 'asdfasdfas', 1, 3, 13),
(93, 'asdfasdfas', 1, 3, 13),
(94, 'asdfasdfas', 1, 3, 13),
(96, 'asdfasda', 1, 3, 22),
(99, 'hola q tal', 1, 25, 23),
(100, 'hola primer comentario de alicia', 1, 27, 23),
(101, 'hola segundo comentario de alicia', 1, 27, 23),
(102, 'asdfadfafasdadf', 1, 25, 23),
(103, 'comenta alicia', 1, 28, 23),
(104, 'insertar un comentario como usuario logueado', 4, 28, 23);

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
(7, 'Medias termicas2222222', 2147483647, 'Montaña', 2),
(8, 'Colchon 2 plazas', 6700, 'Bestway', 4),
(13, 'Aislante termico', 500, 'Helatodoo', 9),
(14, 'Bolsa de dormir', 2000, 'Okey', 4),
(16, 'Pileta 1,98m x 51xm', 5000, 'Bestway', 9),
(17, 'Inflador universal', 300, 'Bestway', 4),
(18, 'Lampara Led', 400, 'BichitoDeLuz', 3),
(19, 'Mochila', 2147483647, 'Montagne', 9),
(20, 'PruebaDeInsertar', 345435, 'PruebaDeMarca', 3),
(22, 'portalampara', 45694444, 'luz', 9),
(23, 'hola', 1111111, 'deeeeeeeeeeeeeeee', 9);

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
(2, 'Invierno2'),
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
(25, 'fernando', '$2y$12$wpOKIzfLM.jBieQz8Kr4C.yZSOQfUctwlt6tJWgZNzuBqe2SSw/n.', 0),
(28, 'alicia', '$2y$10$lAt3qhZv0q/m6xOyS4t7feJEYeun.0eXauHysUjZ7PzRqcG.nnsIO', 0),
(29, 'div', '$2y$10$Ru/n7A4KgAsdH/YZxnIQzOyAFNcAvG/HppSvWuKxnNl.0jqWXAuSa', 0),
(30, 'marcelo', '$2y$10$eaQvNSKbTFRK/xKhdXaubOfmh2/hsh/5zwEhBYe/DhX4iUUQsh5HG', 0);

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
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`temporada_id`) REFERENCES `temporada` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
