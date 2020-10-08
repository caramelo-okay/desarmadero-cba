-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2020 a las 02:16:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ci4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `updated_at`, `deleted`) VALUES
(3, 'yo el candy', 'yocandy@elcandydelapipol.com', '2020-09-10 12:38:57', '2020-09-10 12:38:57', NULL),
(4, 'programador11', 'lein@romano.com', '2020-09-10 14:47:31', '2020-09-10 14:47:31', NULL),
(5, 'mario', 'mario@mail.com', '2020-09-22 17:36:47', '2020-09-22 17:36:47', NULL),
(6, 'eugenia', 'eugenia@mail.com', '2020-09-22 17:36:47', '2020-09-22 17:36:47', '2020-09-30 17:13:28'),
(11, 'ususariovalido', 'novalido@mail.com', '2020-09-29 12:22:56', '2020-09-29 12:22:56', '2020-09-30 16:32:46'),
(12, 'ususarionuevo', '', '2020-09-29 13:10:16', '2020-09-29 13:10:16', '2020-09-30 16:32:28'),
(13, 'programadornuevo2 beforecode', 'prognuevo2@mail.com', '2020-09-29 14:44:59', '2020-09-29 14:44:59', '2020-09-30 16:32:35'),
(14, 'eugenio chaparro beforecode', 'eugeniochaparro@mail.com', '2020-09-30 15:38:01', '2020-09-30 15:38:01', '2020-09-30 17:13:27'),
(15, 'pruebareal', 'pruebareal@mail.com', '2020-09-30 15:43:10', '2020-09-30 15:43:10', '2020-09-30 17:13:27'),
(16, 'la titi', 'piculeta@mail.com', '2020-09-30 16:29:45', '2020-09-30 16:29:45', NULL),
(17, 'la piculera', 'laverdadera@piculera.com', '2020-09-30 16:31:02', '2020-09-30 16:31:02', NULL),
(18, 'PROGRAMADORNOVATO', 'pn@mail.com', '2020-09-30 18:09:51', '2020-09-30 18:09:51', '2020-09-30 17:13:25'),
(19, 'castrol', 'castri@mail.com', '2020-09-30 18:41:14', '2020-09-30 18:41:14', NULL),
(20, 'castrol', '22eugeniochaparro22@mail.com', '2020-09-30 19:11:33', '2020-09-30 19:11:33', NULL),
(21, 'la titi', 'titipicooleraa@hotmail.com', '2020-09-30 19:13:12', '2020-09-30 19:13:12', NULL),
(22, 'hernan', 'hernan@mail.com', '2020-09-30 20:12:32', '2020-09-30 20:12:32', NULL),
(23, 'nada', 'nada33@hotmail.com', '2020-09-30 20:15:16', '2020-09-30 20:15:16', NULL),
(24, 'wert', 'ewrt@wetr.com', '2020-09-30 20:15:54', '2020-09-30 20:15:54', NULL),
(25, 'qqqqqqqqqqq', 'qqqewrt@wetr.com', '2020-09-30 20:16:06', '2020-09-30 20:16:06', NULL),
(26, 'eeeeeeeeeeeeeee', 'eeeeeeeeeeeeeee@wetr.com', '2020-09-30 20:16:15', '2020-09-30 20:16:15', NULL),
(27, 'gggggggggg', 'gggggewrt@wetr.com', '2020-09-30 20:16:22', '2020-09-30 20:16:22', NULL),
(28, 'zzzzzzzzzz', 'zzzzzzzzzewrt@wetr.com', '2020-09-30 20:16:32', '2020-09-30 20:16:32', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
