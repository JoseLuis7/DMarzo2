-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2022 a las 06:23:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dmarzo1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `distrito` varchar(100) NOT NULL,
  `celular` int(10) NOT NULL,
  `dni` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `apellido`, `distrito`, `celular`, `dni`) VALUES
('Jose Luis Torres Cardenas', 'Torres', 'Villa el Salvador', 79978787, 2147483647),
('José Antonio', 'Hurtado', 'Comas', 979865451, 72921675),
('Andrea Sandra', 'Contreras Rivera', 'San Isidro', 934517841, 10059803),
('Quispe Santiago', 'Wilson', 'Santa Rosa', 923578986, 13598694);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `nombre` varchar(50) NOT NULL,
  `precio` double(11,2) NOT NULL,
  `stock` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`nombre`, `precio`, `stock`) VALUES
('GLOBOS REDONDOS', 15.00, '20'),
('GLOBOS PENCIL', 20.00, '20'),
('GLOBOS ESTRELLA', 1.00, '503'),
('KIT BANDERIN Y BORLAS', 10.00, '5'),
('GLOBOS HAPPY BIRTHDAY', 15.00, '50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `celular` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`nombre`, `direccion`, `celular`, `correo`) VALUES
('Regaliz Distribuciones', 'Jr. Huallaga 731 al 745, Cercado de Lima', 5555555, 'info@regaliz.net'),
('Distrifiesta', 'Calle Santiago de Compostela 150, int 106 La molina. C.P. 15026, Lima, Lima.', 998248022, 'ventas@gdistri.com'),
('Disok', 'Santa Anita Santa Anita. C.P. 15009, Lima, Lima.', 999141881, 'pedidos@disok.com.pe'),
('Globos a la Carta', 'Urb. Santa Rosa 3ra Etapa - Mz. B Lote 18A Callao. C.P. 07001, Callao, Callao.', 986415509, 'galeriagrupak@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `nombres` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `numero` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `edad` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `genero` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `fecha` varchar(40) COLLATE utf16_spanish_ci NOT NULL,
  `hora` varchar(40) COLLATE utf16_spanish_ci NOT NULL,
  `comentario` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombres`, `correo`, `direccion`, `numero`, `edad`, `genero`, `fecha`, `hora`, `comentario`, `imagen`) VALUES
('jose', 'josetorrescardenas7@gmail.com', 'villa el salvador', '', '', '', '', '', '', ''),
('jose luis', 'josadsa@gmail.com', 'villa el salvador', '99292932131', '35', 'masculino', '18/06/22', '19:20', 'deseo informacion del kit frozen', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('test', '', '', '', '', '', '', '', '', ''),
('test2', 'asdsa', 'asdas', 'asdas', 'sad', 'asdas', 'asd', 'asd', 'asd', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('jose luis', 'dsf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', ''),
('jimmy', 'sdsadasdas@gmail.com', 'dasdsadsadas', '234324', '23', '', '2022-06-13', '10:42', ' \r\n            dsadasd', ''),
('jimmy', 'sdsadasdas@gmail.com', 'dasdsadsadas', '234324', '23', '', '2022-06-13', '10:42', ' \r\n            dsadasd', ''),
('jimmy', 'sdsadasdas@gmail.com', 'dasdsadsadas', '234324', '23', '', '2022-06-13', '10:42', ' \r\n            dsadasd', ''),
('jimmy', 'sdsadasdas@gmail.com', 'dasdsadsadas', '234324', '23', '', '2022-06-13', '10:42', ' \r\n            dsadasd', ''),
('Jose Luis Torres Cardenas', 'josetorrescardenas7@gmail.com', 'Villa el salvador', '922780933', '25', '', '2022-06-24', '15:50', ' \r\n            Deseo el kit de frozen.', ''),
('Jose Luis Torres Cardenas', 'josetorrescardenas7@gmail.com', 'asd', '32423', '25', '', '2022-05-31', '10:57', ' \r\n            imagen', ''),
('Jose Luis Torres Cardenas', 'josetorrescardenas7@gmail.com', 'asd', '32423', '25', '', '2022-05-31', '10:57', ' \r\n            imagen', ''),
('Jose Luis Torres Cardenas', 'josetorrescardenas7@gmail.com', 'asd', '32423', '25', '', '2022-05-31', '10:57', ' \r\n            imagen', ''),
('Jose Luis Torres Cardenas', 'josetorrescardenas7@gmail.com', 'asd', '32423', '25', '', '2022-05-31', '10:57', ' \r\n            imagen', ''),
('Jose Luis Torres Cardenas 7_7_22', 'josetorrescardenas7@gmail.com', 'Sector 3 Grupo 22 Manzana C Lote 23', '3432432', '14', '', '2022-06-29', '17:21', ' \r\n            weqweqw', ''),
('Jose Luis Torres Cardenas 7_7_22', 'josetorrescardenas7@gmail.com', 'Sector 3 Grupo 22 Manzana C Lote 23', '3432432', '14', '', '2022-06-29', '17:21', ' \r\n            weqweqw', ''),
('', '', '', '', '', '', '', '', '', ''),
('Jose Luisv2 2022', '32432432@gmail.com', 'Sector 3 Grupo 22 Manzana C Lote 23', '4234324', '25', '', '2022-07-07', '15:24', ' \r\n            wqeqeweqw', ''),
('CALERO VARGAS 7_7_22', 'josetorrescardenas7@gmail.com', 'Sector 3 Grupo 22 Manzana C Lote 23', '2555252', '25', '', '2022-07-13', '12:29', ' \r\n            KELOQ', ''),
('Francisco Morales', 'francisco@gmail.com', 'San Martin de Porres', '945221364', '25', '', '2022-08-27', '20:00', ' \r\n            ', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
