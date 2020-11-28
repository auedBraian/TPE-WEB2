-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 01:25:40
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
(4, 'Muy buena calidad de la tela, y nose que mas escribir', 5, 3, 6),
(9, 'comentario de prueba', 5, 5, 13),
(10, 'comentario de prueba', 2, 3, 6),
(11, 'comentario de prueba', 1, 5, 16),
(12, 'comentario de prueba', 2, 1, 14),
(13, 'comentario de prueba', 3, 5, 21),
(14, 'comentario de prueba', 3, 3, 17),
(15, 'prueba no se cuanto', 2, 5, 17),
(16, 'asdfasdfasdfa', 1, 1, 17),
(18, 'nuevo coment 26de nov', 4, 3, 16),
(19, 'sdasdfasdfadsfasdfdasfasd', 5, 5, 5),
(20, 'primer comentario del articulo con id 8', 1, 3, 8),
(21, 'segundo comentarios del articulo con id 8', 1, 3, 8),
(24, 'header locato', 4, 3, 8),
(27, 'ASDFADSFAAS', 1, 3, 21),
(29, 'hola dom content', 3, 3, 21),
(30, 'dfasdfasfaf', 4, 3, 21),
(31, 'asdfasdfa', 5, 3, 21),
(32, 'ggdfghdghdf', 1, 3, 21),
(33, 'dsfgsdfgsfdgfgsdfgsdfgsdfgsdfgsdfgsdfgsfdgsdfgsgsdf', 3, 3, 21);

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
(5, 'Cobertor termico editado', 6801, 'CubreTodo editado', 2),
(6, 'Campera rompeviento', 780, 'Alphine Skate', 3),
(7, 'Medias termicas2222222', 2147483647, 'Montaña', 2),
(8, 'Colchon 2 plazas', 6700, 'Bestway', 4),
(13, 'Aislante termico', 500, 'Helatodo', 2),
(14, 'Bolsa de dormir', 2000, 'Okey', 4),
(16, 'Pileta 1,98m x 51xm', 5000, 'Bestway', 9),
(17, 'Inflador universal', 300, 'Bestway', 4),
(18, 'Lampara Led', 400, 'BichitoDeLuz', 3),
(19, 'Mochila', 2147483647, 'Montagne', 9),
(20, 'PruebaDeInsertar', 345435, 'PruebaDeMarca', 3),
(21, 'SAMSUNG', 4, 'SAMGUNGPRO', 9),
(22, 'portalampara', 4569, 'luz', 3);

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
(3, 'braian', '$2y$12$XWcqti3YRIKJ/rX/LZSr1.NVv7.s3dc7WX73laZSYbXlMjYA/mSMO', 0),
(5, 'fernando', '45678', 0);

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
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `user` (`id`),
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
