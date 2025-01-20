-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 02:26 PM
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
  `duracion` int NOT NULL,
  `imagen` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tplatillos`
--

INSERT INTO `tplatillos` (`id`, `nombre`, `costo`, `tipo`, `duracion`, `imagen`) VALUES
(1, 'Ensalada de aguacate y anacardos', 5000, 'Entrada', 25, ''),
(2, 'Rolllitos de Alga Nori con Salmon', 7500, 'Entrada', 30, ''),
(3, 'Sopa de Calabaza Asada', 6000, 'Entrada', 45, ''),
(4, 'Pasta de Calabacín con Pesto de Albahaca', 9500, 'Plato Principal ', 25, ''),
(5, 'Pollo a la Barbacoa con Batata Asada', 12000, 'Plato Principal', 40, ''),
(6, 'Salmón a la Parrilla con Salsa de Limón', 14500, 'Plato Principal', 30, ''),
(7, 'Tofu Salteado con Vegetales', 10800, 'Plato Principal ', 20, ''),
(8, ' Berejenas al Horno', 8000, 'Guarniciones', 35, ''),
(9, 'Pure de Coliflor y Brocol', 9500, 'Guarniciones', 30, ''),
(10, 'Ensalada de Lentejas y Kale', 10200, 'Guarniciones', 15, ''),
(11, 'Chia Pudding con Frutos Rojos', 7800, 'Postre', 5, ''),
(12, 'Tarta de Manzana sin Azucar', 11000, 'Postre', 50, ''),
(13, 'Yogur Griego Natural con Frutas', 6500, 'Postre', 10, ''),
(14, 'Agua Infundida', 2500, 'Bebidas', 5, ''),
(15, 'Agua', 1000, 'Bebidas', 2, ''),
(16, 'Té Verde Frío con Menta y Limón', 4500, 'Bebidas', 10, ''),
(17, 'Batido de Proteínas con Espinacas y Plátano', 8800, 'Bebidas', 8, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tplatillos`
--
ALTER TABLE `tplatillos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tplatillos`
--
ALTER TABLE `tplatillos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
