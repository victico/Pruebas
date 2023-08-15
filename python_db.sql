-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2023 a las 22:26:08
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `python_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` longtext NOT NULL,
  `zip` varchar(100) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activity_area` varchar(100) NOT NULL,
  `terminal_type` int(3) NOT NULL,
  `comision` decimal(3,2) NOT NULL,
  `return_type` int(2) NOT NULL,
  `return_porc` decimal(65,2) NOT NULL,
  `init_found` int(100) NOT NULL,
  `return_method` int(3) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `business_cif` varchar(100) NOT NULL,
  `business_address` longtext NOT NULL,
  `business_zip` varchar(100) NOT NULL,
  `business_locality` varchar(100) NOT NULL,
  `business_province` varchar(100) NOT NULL,
  `adminstrator_name` varchar(100) NOT NULL,
  `adminstrator_dni` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `name`, `address`, `zip`, `locality`, `province`, `contact_person`, `contact_phone`, `email`, `activity_area`, `terminal_type`, `comision`, `return_type`, `return_porc`, `init_found`, `return_method`, `business_name`, `business_cif`, `business_address`, `business_zip`, `business_locality`, `business_province`, `adminstrator_name`, `adminstrator_dni`) VALUES
(1, 'Inversiones Doña Tora', 'Calle 34 entre av.29 y 28', '3301', 'Acarigua', 'Portuguesa', 'Victor Rivero', '04245391538', 'frovic.ve@gmail.com', 'Feria de Verduras y Hotalizas', 1, 2.50, 1, 100.00, 5000, 2, 'Inversiones Doña Tora', '500199759', 'Calle 34 entre av.29 y 28', '3301', 'Acarigua', 'Portuguesa', 'Victor Rivero', '27132357');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
