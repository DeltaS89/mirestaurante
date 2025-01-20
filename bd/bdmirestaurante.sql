-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2023 at 07:58 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdmirestaurante`
--

-- --------------------------------------------------------

--
-- Table structure for table `tplatillos`
--

CREATE TABLE `tplatillos` (
  `id` int NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `costo` int NOT NULL,
  `tipo` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `duracion` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tplatillos`
--

INSERT INTO `tplatillos` (`id`, `nombre`, `costo`, `tipo`, `duracion`) VALUES
(8, 'Ensalada de aguacate y anacardos', 5000, 'Entrada', 25),
(13, 'Rolllitos de Alga Nori con Salmon', 7500, 'Entrada', 30),
(14, 'Sopa de Calabaza Asada', 6000, 'Entrada', 45),
(15, 'Pasta de Calabacín con Pesto de Albahaca', 9500, 'Plato Principal ', 25),
(16, 'Pollo a la Barbacoa con Batata Asada', 12000, 'Plato Principal', 40),
(17, 'Salmón a la Parrilla con Salsa de Limón', 14500, 'Plato Principal', 30),
(18, 'Tofu Salteado con Vegetales', 10800, 'Plato Principal ', 20),
(19, ' Berejenas al Horno', 8000, 'Guarniciones', 35),
(20, 'Pure de Coliflor y Brocol', 9500, 'Guarniciones', 30),
(21, 'Ensalada de Lentejas y Kale', 10200, 'Guarniciones', 15),
(22, 'Chia Pudding con Frutos Rojos', 7800, 'Postre', 5),
(23, 'Tarta de Manzana sin Azucar', 11000, 'Postre', 50),
(24, 'Yogur Griego Natural con Frutas', 6500, 'Postre', 10),
(25, 'Agua Infundida', 2500, 'Bebidas', 5),
(26, 'Agua', 1000, 'Bebidas', 2),
(27, 'Té Verde Frío con Menta y Limón', 4500, 'Bebidas', 10),
(29, 'Batido de Proteínas con Espinacas y Plátano', 8800, 'Bebidas', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tusuarios`
--

CREATE TABLE `tusuarios` (
  `id` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contrasena` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gmail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rol` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tusuarios`
--

INSERT INTO `tusuarios` (`id`, `nombre`, `usuario`, `contrasena`, `gmail`, `rol`) VALUES
(23, 'Alejandro Jimenez', 'Admin', '1234567', 'alejimeart@gmail.com', 'admin'),
(27, 'cliente', 'cliente', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'cliente@gmail.com', 'cliente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tplatillos`
--
ALTER TABLE `tplatillos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tusuarios`
--
ALTER TABLE `tusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tplatillos`
--
ALTER TABLE `tplatillos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tusuarios`
--
ALTER TABLE `tusuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
