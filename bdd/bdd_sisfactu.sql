-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2026 a las 19:01:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdd_sisfactu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `ce_persona` varchar(10) NOT NULL,
  `no_persona` varchar(80) NOT NULL,
  `ap_persona` varchar(80) NOT NULL,
  `mo_persona` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`ce_persona`, `no_persona`, `ap_persona`, `mo_persona`) VALUES
('1718144320', 'sandra', 'bueno', '0978765563'),
('23535172', 'Jonathan', 'Romero', '0969777324');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_user` varchar(15) NOT NULL,
  `ce_user` varchar(10) NOT NULL,
  `ni_user` varchar(20) NOT NULL,
  `cl_user` varchar(12) NOT NULL,
  `es_user` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_user`, `ce_user`, `ni_user`, `cl_user`, `es_user`) VALUES
('USER-00001', '23535172', 'Jonas', '', 1),
('USER-00002', '1718144320', 'Sandy', '123456', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`ce_persona`),
  ADD KEY `no_persona` (`no_persona`),
  ADD KEY `ap_persona` (`ap_persona`),
  ADD KEY `mo_persona` (`mo_persona`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
