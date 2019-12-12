-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2019 a las 11:53:25
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tachbot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(15) NOT NULL,
  `ciudad` varchar(12) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `contrasena` varchar(100) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `administrador` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `ciudad`, `telefono`, `correo`, `contrasena`, `id_cliente`, `administrador`) VALUES
('paloma', '', 0, 'paloma@gmail.com', '$2y$10$9nF1PXH9T/7ECebeaAKpruUhbXxt6C3WwVWoqvZKvM4aItiLSx/5e', 1, 1),
('', '', 0, 'pepe@gmail.com', '$2y$10$2LVmQLvNmFN6R2fhX.b4UeQAgJeYghYQqRoRXGUkL1qA9a95HrqfK', 9, 0),
('', '', 0, 'antonio@gmail.com', '$2y$10$kDlHSlgCPm7bN7.xvbDiUOhfRDJDJlVbGZWL1oScpt1IOBgCOPvja', 10, 0),
('', '', 0, 'prueba@gmail.com', '$2y$10$oUyvfFf.LNwdLlIo5WBlF.ngqnbTR6UVFOVwI9UbhNO/baItwEaBq', 11, 0),
('PALOMIX', 'Albacete', 123456789, 'palomasanx@gmail.com', '$2y$10$DBlxUkbeEAvjEs3gOeHxsOm9XVmK4rehMDsmWX1Bw84.5ow646mFa', 12, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_cli` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `fecha_expiracion` date NOT NULL,
  `precio_total` int(11) DEFAULT NULL,
  `id_pedido` int(9) NOT NULL,
  `reclamacion` tinyint(1) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `nombre` varchar(15) NOT NULL,
  `id_servicio` int(9) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`nombre`, `id_servicio`, `precio`, `descripcion`, `imagen`) VALUES
('CBmayor', 1, 25, 'Chatbot destinado a personas mayores', 'mayor.png'),
('CBjoven', 2, 30, 'Chatbot destinado a un público joven', 'joven.png'),
('CBgeneral', 3, 35, 'Chatbot destinado a un público general', 'general.png'),
('CBeCommerce', 4, 50, 'Chatbot destinado a empresas', 'ecommerce.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `correo_2` (`correo`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
