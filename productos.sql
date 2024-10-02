-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2024 a las 21:22:26
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
-- Base de datos: `maxielectro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` int(50) NOT NULL,
  `NombreProducto` varchar(50) NOT NULL,
  `TipoProducto` varchar(50) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Descripcion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProducto`, `NombreProducto`, `TipoProducto`, `Cantidad`, `Precio`, `Descripcion`) VALUES
(1, 'Consola Game Stick Multijuegos', 'Gamer', 50, 74999, 'Consola Multijuegos Retro Game Stick con HDMI + 20.000 Juegos y 2 joysticks incluidos.'),
(2, 'Auriculares In-Ear Inalambricos', 'Auriculares', 40, 11999, 'Auriculares Bluetooth AirPod i12 en varios colores'),
(3, 'Auricular AKG S10', 'Auriculares', 60, 5999, 'Auriculares Samsung AKG S10'),
(4, 'Auricular Bluetooth orejas gatito', 'Auriculares', 40, 8999, 'Auriculares BT Orejas de gato en distintos colores.'),
(5, 'Auricular BT F9 con display', 'Auriculares', 35, 11999, 'Auriculares Bluetooth inalámbricos TWS BTH-F9-5 (único color disponible: NEGRO)'),
(6, 'Cable 5.1 tipo c imega', 'Cargador', 20, 3999, 'Cable de carga y datos 5.1 tipo C Marca Imega'),
(7, 'Cargador 3.1a tipo C Kosmo', 'Cargador', 25, 11999, 'Cargador 3.1a tipo C marca Kosmo'),
(8, 'Cargador 4.2a tipo C Kosmo', 'Cargador', 30, 7999, 'Cargador 4.2a tipo C marca Kosmo'),
(9, 'Adaptador 12v auto 6 Amp carga rápida', 'Cargador', 30, 7999, 'Cargador para auto 6a 32W de Potencia, con entrada para 2 USB. Voltaje: 12-32V'),
(10, 'Cargador de IP 14 pro max (adapt y cable)', 'Cargador', 35, 11999, 'Cargador con cable de 20w, con entrada tipo C, compatible con Iphone 11 12 13 14/Pro y Promax.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProducto` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
