-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2023 a las 00:49:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xokas_cia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230207100228', '2023-02-07 11:02:37', 50),
('DoctrineMigrations\\Version20230207124208', '2023-02-07 13:42:16', 46),
('DoctrineMigrations\\Version20230208121950', '2023-02-08 13:20:13', 568),
('DoctrineMigrations\\Version20230208123607', '2023-02-08 13:37:00', 40),
('DoctrineMigrations\\Version20230208123649', '2023-02-08 13:51:01', 39),
('DoctrineMigrations\\Version20230208124538', '2023-02-08 13:51:01', 6),
('DoctrineMigrations\\Version20230208124541', '2023-02-08 13:51:01', 9),
('DoctrineMigrations\\Version20230208124748', '2023-02-08 13:53:35', 39),
('DoctrineMigrations\\Version20230208124750', '2023-02-08 14:28:19', 39),
('DoctrineMigrations\\Version20230208124807', '2023-03-01 18:52:14', 45),
('DoctrineMigrations\\Version20230208124938', '2023-03-01 18:52:14', 12),
('DoctrineMigrations\\Version20230208124948', '2023-03-01 19:02:36', 51),
('DoctrineMigrations\\Version20230208124956', '2023-03-01 19:04:55', 51),
('DoctrineMigrations\\Version20230208125053', '2023-03-01 19:07:59', 50),
('DoctrineMigrations\\Version20230301180817', '2023-03-01 19:08:57', 107),
('DoctrineMigrations\\Version20230301200154', '2023-03-01 21:02:02', 47),
('DoctrineMigrations\\Version20230304173335', '2023-03-04 18:33:46', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ancho` int(11) NOT NULL,
  `alto` int(11) NOT NULL,
  `min_players` int(11) NOT NULL,
  `max_players` int(11) NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `ancho`, `alto`, `min_players`, `max_players`, `descripcion`, `imagen`) VALUES
(1, 'BANG', 170, 170, 3, 8, 'JUEGO DEL OESTE', 'bang.jpg'),
(2, 'SEVEN WONDER', 120, 120, 3, 9, 'Juego de Conquista, utiliza tus recursos para ganar la partida', 'defecto.jpg'),
(3, 'DOOBLE', 50, 50, 2, 5, NULL, 'defecto.jpg'),
(4, 'POLILLA TRAMPOSA', 149, 30, 3, 7, NULL, 'defecto.jpg'),
(5, 'SOLITARIO', 50, 70, 1, 1, NULL, 'defecto.jpg'),
(6, 'PARCHIS', 100, 100, 2, 4, NULL, 'defecto.jpg'),
(7, 'UNO', 10, 10, 2, 8, NULL, 'defecto.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `posx` float DEFAULT NULL,
  `posy` float DEFAULT NULL,
  `alto` int(11) NOT NULL,
  `ancho` int(11) NOT NULL,
  `fecha_reservas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `posx`, `posy`, `alto`, `ancho`, `fecha_reservas`) VALUES
(1, 273.5, 51, 50, 50, '2023-03-02'),
(21, 170.5, 411, 90, 90, '2023-03-02'),
(22, NULL, NULL, 50, 50, '2023-03-02'),
(23, 444.5, 346, 40, 40, '05-03-2023'),
(24, 431.5, 158, 70, 70, '2023-03-05'),
(29, NULL, NULL, 90, 60, '2023-03-04'),
(36, 0, 0, 90, 90, NULL),
(37, 473.5, 94, 80, 60, '05-03-2023'),
(38, 0, 0, 80, 60, '07-03-2023'),
(39, 138.5, 158, 180, 50, '21-03-2023'),
(40, 593.5, 263, 70, 70, '21-03-2023'),
(41, 0, 0, 40, 40, NULL),
(42, 63.5, 41, 80, 60, '12-03-2023'),
(43, 175.5, 24, 90, 90, '05-03-2023'),
(44, 797.5, 6, 85, 85, '05-03-2023'),
(45, 0, 0, 70, 70, '05-03-2023'),
(46, 693.5, 205, 100, 100, '05-03-2023'),
(47, 566.5, 160, 120, 120, '05-03-2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `num_mesa` int(11) DEFAULT NULL,
  `num_juego` int(11) DEFAULT NULL,
  `fecha` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `num_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `num_mesa`, `num_juego`, `fecha`, `hora`, `num_user`) VALUES
(1, 37, 1, '05-03-2023', '11h', 1),
(2, 39, 1, '05-03-2023', '11h', 1),
(3, 23, 1, '05-03-2023', '11h', 1),
(4, 37, 2, '05-03-2023', '10h', NULL),
(5, 43, 2, '05-03-2023', '12h', 1),
(7, 37, 2, '05-03-2023', '12h', 1),
(8, 43, 6, '05-03-2023', '11h', 1),
(9, 47, 2, '05-03-2023', '11h', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`, `roles`) VALUES
(1, 'admin@admin.es', '$2y$13$lcKrv1224qwPKQgvX/L.zODDtq.9Tt9d.0gF8nCybunUMp5hQmSYi', 'admin', '[\"ROLE_USER\",\"ROLE_ADMIN\"]'),
(2, 'user@user.com', '$2y$13$BFNJ1OmRTPF4GvnSsLrD5O1uvkJRxpnk4PizjZ1SCqqj20XJma7au', 'user', '[\"ROLE_USER\"]');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
