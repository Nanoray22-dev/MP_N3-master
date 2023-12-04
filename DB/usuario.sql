-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2023 a las 04:58:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `auth`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `bio`, `telefono`, `email`, `password`, `foto`) VALUES
(1, 'Maria Virginia', 'learn about programing is the best thing hola mundo de la progrmacion', '79890923434', 'maria@gmail.com', '$2y$10$Fai7UseO/zxWmz4ytAMCJeQx8Z7FEwzy48D366.7RkuIBoAdf5uUS', '../upload/profile_1.'),
(2, 'Endrys Rosario ❤️', 'se casa el sabado 16 de diciembre ', '8099155042', 'endry16@gmai.com', '$2y$10$bF4m3krohMwEvA1gwRGUI.emxkO5AJxILPy5dNuGzhG.sbbH8wSwG', '../upload/profile_2.'),
(3, NULL, NULL, NULL, 'EloiseDB@gmail.com', '$2y$10$NMlHY8ObnfX9qXZ49sfHB.U1atqcFNNVMrF0C3B31sH91thjSmcVi', NULL),
(4, 'raysell', 'learn about programing is the best thing', '67676767', 'EloiseDB@gmail.com', '$2y$10$94uq9kW33rXmTNXmslNzLeXfbeL4KlOnriNP/Hg3lghWb4NQR9RYW', NULL),
(5, 'raysell', 'qdasdasdfafdsadfadsf', '6767676767', 'dere@gmail.com', '$2y$10$kna2kJ9T/aR0KKegdjetLenyKQ8U/7tV01h8QPhp6kJ.aCt75Ui6y', NULL),
(6, 'raysell', 'learn about programing is the best thing', '9898989', 'EloiseDB@gmail.com', '$2y$10$fHKAVdRtMuKsZ9Tk7UCZ..IudAx8L3FkkutfqTvXw8RzvMZKdl30K', NULL),
(7, 'Raysell Concepcion ', 'learn about programing is the best thing', '345345', 'raysell22@gmail.com', '$2y$10$16wmXMC6t6EAlqQZUihEaezSuVBxoV/Q3SMV/LBXn/oBvBb193GfS', '../upload/profile_7.'),
(8, 'Raysell Concepcion ', 'learn about programing is the best thing hola mundo de la progrmacion', '76766554548', 'salmerika@gmail.com', '$2y$10$R9p/OvGChBHG2on1U1W6ve4mx6z.uo60QsHJtzmvAASgga6Zs5oJC', '../upload/profile_8.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
