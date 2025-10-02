-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2025 a las 04:45:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chismes`
--

CREATE TABLE `chismes` (
  `id` int(11) NOT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `titular` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `chismes`
--

INSERT INTO `chismes` (`id`, `fecha`, `titular`, `descripcion`) VALUES
(1, '2025-01-15', 'Nuevo Windows', 'Se rumorea que Microsoft lanzará un Windows 12 más liviano y optimizado para gamers.'),
(2, '2025-02-01', 'Linux secreto', 'Un ex empleado filtró que Canonical trabaja en una versión ultraligera de Ubuntu solo para móviles.'),
(3, '2025-02-20', 'Apple ARM Pro', 'Dicen que Apple prepara un chip ARM para competir con procesadores de escritorio de gama alta.'),
(4, '2025-03-05', 'SteamOS 4', 'Se comenta que Valve lanzará SteamOS 4 con compatibilidad total para juegos AAA sin Proton.'),
(5, '2025-03-12', 'GPU Fantasma', 'NVIDIA habría cancelado en secreto una RTX 5090 por problemas de consumo eléctrico.'),
(6, '2025-03-25', 'Google OS', 'Chisme: Google estaría desarrollando un sistema operativo híbrido entre Android y ChromeOS.'),
(7, '2025-04-01', 'AI Hacker', 'Circula el rumor de una IA capaz de hackear contraseñas WiFi en segundos.');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chismes`
--
ALTER TABLE `chismes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chismes`
--
ALTER TABLE `chismes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
