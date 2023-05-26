-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2023 a las 05:23:17
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gamerarcade`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl`
--

CREATE TABLE `tbl` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl`
--

INSERT INTO `tbl` (`id`, `email`, `password`) VALUES
(1, 'pepe@gmail.com', '$2y$10$kekn7B/xrb44z2voWVMf2.DyNQoApnkyWrIISZP87X5h7BJs8buDS'),
(3, 'meme', '$2y$10$ft3sgxiY7CmmEdcq1Mg2zO5IcN4TQD/5j4BRKSoHrRivqUi3kZzzS'),
(4, 'larry', '$2y$10$71xt8624VKfYxOHSNO5H2uvIpv2KmtiXUHs8V4vk8gAvvkuktx4YG'),
(6, 'larry', '$2y$10$M2v3npt0EM7i9ooLiOxBNuA5Dpb/3xGtDGVQutif..9e10fMPdzZy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `usuario`, `password`) VALUES
(1, 'administrador', 'admin@gmail.com', 'admin', '123456'),
(2, 'Juan Monsalve', 'juan@gmail.com', 'jmonsalve', '123456'),
(3, 'Karla Cartagena', 'karla@gmail.com', 'kcartagena', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl`
--
ALTER TABLE `tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl`
--
ALTER TABLE `tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
