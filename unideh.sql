-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2023 a las 00:05:52
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
-- Base de datos: `unideh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `mensaje` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `email`, `telefono`, `mensaje`) VALUES
('sdfsdfdsdfds', 'a20300099@unideh.edu.mx', '5535335053', 'sdfsafdsagfasgddas'),
('Luis', 'luis@gmail.com', '1231231254', 'Buenas tardes excelente producto'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `q` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`id`, `product_id`, `q`, `cart_id`) VALUES
(1, 1, 1, 7),
(2, 1, 1, 8),
(3, 4, 3, 8),
(4, 2, 2, 8),
(5, 1, 1, 9),
(6, 1, 1, 10),
(7, 2, 1, 10),
(8, 3, 1, 10),
(9, 4, 1, 10),
(10, 5, 1, 10),
(11, 6, 1, 10),
(12, 7, 1, 10),
(13, 8, 1, 10),
(14, 1, 1, 11),
(15, 2, 1, 11),
(16, 1, 1, 12),
(17, 1, 1, 13),
(18, 8, 1, 13),
(19, 1, 1, 14),
(20, 1, 1, 15),
(21, 2, 3, 15),
(22, 8, 1, 16),
(23, 7, 5, 17),
(24, 1, 3, 18),
(25, 2, 2, 18),
(26, 1, 1, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `nombre`, `direccion`, `correo`, `telefono`, `created_at`) VALUES
(9, 'Agustín Armando', 'Pachuca de Soto', 'agm22413070160@cecyteh.edu.mx', '7712646353', '2023-07-05 10:17:23'),
(10, 'Karina', 'Venustiano CArranza no. 4  Pachuca de Soto', 'karina@gmail.com', '5535335052', '2023-07-05 10:21:08'),
(11, 'Juan Alberto', 'Vicente Guerreo Tizayuca Hidalgo', 'juan@hotmail.com', '7731345094', '2023-07-05 10:24:16'),
(12, 'Agustín Armando', 'conocido', '2413070160467@cecyteh.edu.mx', '7731345094', '2023-07-05 10:32:50'),
(13, 'luis', 'conocido', 'agm22413070160@cecyteh.edu.mx', '7731345094', '2023-07-05 10:38:23'),
(14, 'Karina', 'Mexico', 'agm22413070160467@cecyteh.edu.', '7731345094', '2023-07-05 12:08:30'),
(15, 'José Reyes', 'Valle de Pachuca no. 3 Pachuca de Soto ', '2413070160467@cecyteh.edu.mx', '5535335053', '2023-07-05 14:52:56'),
(16, 'Jorge', 'Benito Juarez 3 Tizayuca', 'agm22413070160@cecyteh.edu.mx', '7712440600', '2023-07-05 14:56:56'),
(17, 'Agustín Armando', 'Juárez 3 Tulancingo', 'agm22413070160@cecyteh.edu.mx', '7712646353', '2023-07-05 14:58:33'),
(18, 'José Luis García Serrano', 'Valle de Pachuca 3 Pachuca de Soto', 'huicho168@gmail.com', '7721502408', '2023-07-05 16:01:18'),
(19, 'JLGS', 'conocido', '2413070160467@cecyteh.edu.mx', '7731345094', '2023-07-05 16:02:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `quantity`) VALUES
(1, 'Planta de Aloe Vera Grande', 'Planta de Aloe Vera Grande', '150.00', 100),
(2, 'Planta de Aloe Vera chica', 'Planta de Aloe chica', '50.00', 100),
(3, 'Pulpa de Aloe Vera en trozo de un litro', 'Pulpa de Aloe Vera en trozo de un litro', '100.00', 100),
(4, 'Pulpa de Aloe Vera en trozo medio litro', 'Pulpa de Aloe Vera en trozo medio litro', '60.00', 100),
(5, 'Pulpa de Aloe Vera molida litro', 'Pulpa de Aloe Vera molida ', '120.00', 100),
(6, 'Pulpa de Aloe Vera molida y colada litro', 'Pulpa de Aloe Vera molida y colada', '150.00', 0),
(7, 'Penca de Aloe Vera individual', 'Penca de Aloe Vera', '20.00', 0),
(8, 'Penca Aloe Vera por mayoreo ', 'Penca Aloe Vera por mayoreo ', '15.00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `id_socio` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id_socio`, `nombre`, `paterno`, `materno`, `edad`, `email`, `telefono`) VALUES
(1, 'José', 'García', 'Serrano', '40', 'huicho@gmail.com', '1231254785'),
(2, 'Pedro ', 'Juárez', 'Hernández', '42', 'pedro@gmail.com', '5214251478'),
(3, 'yadi', 'FFF', 'FFFF', '', 'yadi@hotmail.com', '5522336644'),
(4, 'Karina', 'Pérez', 'Pérez', '', 'a20300099@unideh.edu.mx', '5535335053');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `confirmar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `correo`, `telefono`, `Usuario`, `Contrasena`, `confirmar`) VALUES
(1, 'José Luis', 'Garcia Serrano', 'a20300099@unideh.edu.mx', '7721502408', 'Jose Luis', '1234', '1234'),
(3, 'José', 'García', 'jose@hotmail.com', '7721502405', 'JLGS', '1234', '1234'),
(4, 'Karina', 'Perez Trujillo', 'agm22sss413070160@cecyteh.edu.mx', '7731345094', 'kary', '1234', '1234'),
(5, 'Agustín Armando', 'Juárez', 'agus@hotmail.com', '1234568745', 'Agustin', '1234', '1234'),
(6, 'JLGS', 'García Serrano', '2413070160467@cecyteh.edu.mx', '7731345895', 'JLGS', '1234', '1234'),
(7, 'JLGS', 'García Serrano', '2413070160467@cecyteh.edu.mx', '7712646353', 'José', '1234', '1234'),
(8, 'JLGS', 'García Serrano', '2413070160467@cecyteh.edu.mx', '7712646353', 'José', '1234', '1234'),
(9, 'JLGS', 'García Serrano', '2413070160467@cecyteh.edu.mx', '7712646353', 'José', '1234', '1234'),
(10, 'JLGS', 'García Serrano', '2413070160467@cecyteh.edu.mx', '7712646353', 'José', '1234', '1234'),
(11, 'José Luis', 'García', 'huicho@gmail.com', '7721502408', 'José Luis', '1234', '1234'),
(12, 'José Luis', 'García', 'huicho@gmail.com', '7721502407', 'José Luis', '1234', '1234'),
(13, 'José Luis', 'García', 'huicho@gmail.com', '4512587452', 'José Luis', '1234', '1234'),
(14, 'José Luis', 'García', 'huicho22@gmail.com', '4512587452', 'José Luis', '1234', '1234'),
(15, 'Jose Luis', 'García ', 'huicho45@hotmail.com', '4521025478', 'Jose Luis', '1234', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id_socio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `id_socio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
