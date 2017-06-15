-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2017 a las 06:12:48
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `klf_ts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='- Hardware\n- Software\n- Operation\n- Login&Account\n- Development\n- Etc';

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_category`, `name`, `description`) VALUES
(1, 'A', 'A'),
(2, 'B', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`id_department`, `name`, `description`) VALUES
(1, 'IT', 'IT'),
(2, 'Accounting', 'Accounting'),
(3, 'Purchasing', 'Purchasing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_ticket` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `history`
--

INSERT INTO `history` (`id_history`, `id_ticket`, `id_status`, `date_time`, `description`) VALUES
(1, 2, 1, '2017-06-14 00:00:00', 'Revision'),
(2, 2, 2, '2017-06-14 00:00:00', 'Reparacion'),
(3, 6, 1, '2017-06-14 00:00:00', 'Chequeo'),
(4, 6, 1, '2017-06-14 00:00:00', 'Alteracion'),
(5, 2, 1, '2017-06-14 00:00:00', 'Prueba2'),
(6, 1, NULL, '2017-06-23 00:00:00', 'Prueba1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `priority`
--

CREATE TABLE `priority` (
  `id_priority` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='- High\n- Medium\n- Low';

--
-- Volcado de datos para la tabla `priority`
--

INSERT INTO `priority` (`id_priority`, `name`, `description`) VALUES
(1, 'A', 'A'),
(2, 'B', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sla`
--

CREATE TABLE `sla` (
  `id_sla` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `time_to_resolve` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Service level agreement';

--
-- Volcado de datos para la tabla `sla`
--

INSERT INTO `sla` (`id_sla`, `name`, `description`, `time_to_resolve`) VALUES
(1, 'A', 'A', NULL),
(2, 'B', 'B', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software_property`
--

CREATE TABLE `software_property` (
  `id_software_property` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Software Property';

--
-- Volcado de datos para la tabla `software_property`
--

INSERT INTO `software_property` (`id_software_property`, `name`, `description`) VALUES
(1, 'A', 'A'),
(2, 'B', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='- Open\n- In Progress\n- In Test\n- Resolved\n- Closed\n- Reopened';

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `name`, `description`) VALUES
(1, 'A', 'A'),
(2, 'B', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id_ticket` int(11) NOT NULL,
  `id_status` int(11) DEFAULT NULL,
  `id_software_property` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `id_user(assigned champion)` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `promise_date` datetime DEFAULT NULL,
  `completion_date` datetime DEFAULT NULL,
  `requested_by` int(11) DEFAULT NULL,
  `id_priority` int(11) DEFAULT NULL,
  `id_type_service` int(11) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `attachements` varchar(100) DEFAULT NULL,
  `solution` varchar(100) DEFAULT NULL,
  `id_sla` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `id_status`, `id_software_property`, `title`, `description`, `id_user(assigned champion)`, `timestamp`, `promise_date`, `completion_date`, `requested_by`, `id_priority`, `id_type_service`, `id_category`, `attachements`, `solution`, `id_sla`) VALUES
(1, 2, 2, 'Printer Problems', 'Printer is not printing ', 2, '2017-06-12 04:00:00', NULL, NULL, 8, 2, 2, 2, NULL, NULL, 2),
(2, 2, 2, 'Screen Problems', 'The screen is not showing anything', 2, '2017-06-13 04:00:00', NULL, NULL, 9, 2, 2, 2, NULL, NULL, 2),
(6, 2, 2, 'Stuck paper', 'Stuck paper in the General Printer', NULL, '2017-06-14 17:23:20', NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_service`
--

CREATE TABLE `type_service` (
  `id_type_service` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='- Incident\n- Problem\n- Change';

--
-- Volcado de datos para la tabla `type_service`
--

INSERT INTO `type_service` (`id_type_service`, `name`, `description`) VALUES
(1, 'A', 'A'),
(2, 'B', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_user`
--

CREATE TABLE `type_user` (
  `id_type_user` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `type_user`
--

INSERT INTO `type_user` (`id_type_user`, `name`, `description`) VALUES
(1, 'Admin', 'Admin'),
(2, 'Technician', 'Technician'),
(3, 'User', 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `id_type_user` int(11) NOT NULL,
  `id_department` int(11) NOT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `last_name`, `id_type_user`, `id_department`, `telephone`, `email`, `password`, `register_date`) VALUES
(1, 'Jesus', 'Martinez', 1, 2, '514-601-2372', 'jesusm.klf@gmail.com', '123', '2017-06-12 17:12:40'),
(2, 'Hilda', 'Granados', 3, 2, '514-601-2372', 'jjmartinez.reynoso@gmail.com', '123', '2017-06-12 17:12:40'),
(7, 'peter20', 'williams', 3, 2, NULL, 'peter012@gmail.com', '123', '2017-06-12 20:20:32'),
(8, 'leo', 'Martinez', 3, 2, NULL, 'leonardo.martinez@gmail.com', '123', '2017-06-12 20:55:40'),
(9, 'Nathy', 'Martinez', 3, 2, NULL, 'nathalia.martinez@gmail.com', '$2y$12$M0g8VjsxyKdcSn.v/vs.qebu/S6NZZOWI1ZKWuZXyKnm0eBUJ0/F.', '2017-06-12 21:16:33'),
(10, 'chucho', 'Reynoso', 3, 2, NULL, 'chucho', '$2y$12$ZCpztRIHF1KUB1j5YqapUupRIM.AWKIPFQh5JXX6C5GbD9NK.BDKK', '2017-06-13 03:29:21'),
(11, 'leon', 'Martinez', 3, 2, NULL, 'leon.martinez@gmail.com', '$2y$12$l2H8XlpI25FWnWtoV4OWCOt/YH25YAVLIiHb.QCUv6eJ7FqkJpjnq', '2017-06-13 04:08:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`),
  ADD UNIQUE KEY `pk_category` (`id_category`);

--
-- Indices de la tabla `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Indices de la tabla `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `idx_history` (`id_ticket`),
  ADD KEY `idx_history_0` (`id_status`);

--
-- Indices de la tabla `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`id_priority`);

--
-- Indices de la tabla `sla`
--
ALTER TABLE `sla`
  ADD PRIMARY KEY (`id_sla`);

--
-- Indices de la tabla `software_property`
--
ALTER TABLE `software_property`
  ADD PRIMARY KEY (`id_software_property`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `idx_tickets` (`id_status`),
  ADD KEY `idx_tickets_0` (`id_software_property`),
  ADD KEY `idx_tickets_1` (`id_user(assigned champion)`),
  ADD KEY `idx_tickets_2` (`requested_by`),
  ADD KEY `idx_tickets_3` (`id_priority`),
  ADD KEY `idx_tickets_4` (`id_type_service`),
  ADD KEY `idx_tickets_5` (`id_category`),
  ADD KEY `idx_tickets_6` (`id_sla`);

--
-- Indices de la tabla `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`id_type_service`);

--
-- Indices de la tabla `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `idx_users` (`id_type_user`),
  ADD KEY `idx_users_0` (`id_department`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `priority`
--
ALTER TABLE `priority`
  MODIFY `id_priority` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sla`
--
ALTER TABLE `sla`
  MODIFY `id_sla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `software_property`
--
ALTER TABLE `software_property`
  MODIFY `id_software_property` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `type_service`
--
ALTER TABLE `type_service`
  MODIFY `id_type_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `fk_history_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `fk_history_tickets` FOREIGN KEY (`id_ticket`) REFERENCES `tickets` (`id_ticket`);

--
-- Filtros para la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk_tickets_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `fk_tickets_priority` FOREIGN KEY (`id_priority`) REFERENCES `priority` (`id_priority`),
  ADD CONSTRAINT `fk_tickets_sla` FOREIGN KEY (`id_sla`) REFERENCES `sla` (`id_sla`),
  ADD CONSTRAINT `fk_tickets_software_property` FOREIGN KEY (`id_software_property`) REFERENCES `software_property` (`id_software_property`),
  ADD CONSTRAINT `fk_tickets_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `fk_tickets_type_service` FOREIGN KEY (`id_type_service`) REFERENCES `type_service` (`id_type_service`),
  ADD CONSTRAINT `fk_tickets_users` FOREIGN KEY (`id_user(assigned champion)`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_tickets_users_requsted_by` FOREIGN KEY (`requested_by`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_department` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`),
  ADD CONSTRAINT `fk_users_type_user` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id_type_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
