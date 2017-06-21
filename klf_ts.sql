-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 09:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klf_ts`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='- Hardware\n- Software\n- Operation\n- Login&Account\n- Development\n- Etc';

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`, `description`) VALUES
(1, 'CATEGORY A', 'CATEGORY A'),
(2, 'CATEGORY B', 'CATEGORY B');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `name`, `description`) VALUES
(1, 'IT', 'IT'),
(2, 'Accounting', 'Accounting'),
(3, 'Purchasing', 'Purchasing');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_ticket` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_ticket`, `id_status`, `date_time`, `description`) VALUES
(22, 9, 2, '2017-06-14 00:00:00', 'Charge'),
(23, 8, 1, '2017-06-21 00:00:00', 'Received'),
(24, 8, 2, '2017-06-19 00:00:00', 'Detailed'),
(25, 8, 2, '2017-06-10 00:00:00', 'Contract'),
(26, 8, 2, '2017-06-14 00:00:00', 'Refusnished');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `id_priority` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='- High\n- Medium\n- Low';

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`id_priority`, `name`, `description`) VALUES
(1, 'PRIORITY A', 'PRIORITY A'),
(2, 'PRIORITY B', 'PRIORITY B');

-- --------------------------------------------------------

--
-- Table structure for table `sla`
--

CREATE TABLE `sla` (
  `id_sla` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `time_to_resolve` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Service level agreement';

--
-- Dumping data for table `sla`
--

INSERT INTO `sla` (`id_sla`, `name`, `description`, `time_to_resolve`) VALUES
(1, 'A', 'A', NULL),
(2, 'B', 'B', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `software_property`
--

CREATE TABLE `software_property` (
  `id_software_property` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Software Property';

--
-- Dumping data for table `software_property`
--

INSERT INTO `software_property` (`id_software_property`, `name`, `description`) VALUES
(1, 'SOFTWARE PROPERTY A', 'SOFTWARE PROPERTY A'),
(2, 'SOFTWARE PROPERTY B', 'SOFTWARE PROPERTY B');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='- Open\n- In Progress\n- In Test\n- Resolved\n- Closed\n- Reopened';

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `name`, `description`) VALUES
(1, 'OPEN', 'OPEN'),
(2, 'IN PROGRESS', 'IN PROGRESS');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
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
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `id_status`, `id_software_property`, `title`, `description`, `id_user(assigned champion)`, `timestamp`, `promise_date`, `completion_date`, `requested_by`, `id_priority`, `id_type_service`, `id_category`, `attachements`, `solution`, `id_sla`) VALUES
(8, NULL, NULL, 'Printer Error', 'The printer is not printing 1111', NULL, '2017-06-15 17:48:22', NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, 'Screen Damaged', 'The screen is black since yesterday', NULL, '2017-06-16 03:53:36', NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, 'Ticket 1 de Leo', 'Ticket 1 de Leo - Description', NULL, '2017-06-20 01:57:07', NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, 'Ticket 2 de Leo', 'Ticket 2 de Leo - Description', NULL, '2017-06-20 01:57:34', NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, 1, 'Ticket 3 de Leo', 'Ticket 3 de Leo - Description', NULL, '2017-06-20 19:31:17', NULL, NULL, 11, 1, 1, 1, '1', NULL, NULL),
(37, NULL, 2, 'Ticket 04 de Leo', 'Ticket 04 de Leo - Description', NULL, '2017-06-20 20:10:21', NULL, NULL, 11, 2, 2, 2, '22BB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_service`
--

CREATE TABLE `type_service` (
  `id_type_service` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='- Incident\n- Problem\n- Change';

--
-- Dumping data for table `type_service`
--

INSERT INTO `type_service` (`id_type_service`, `name`, `description`) VALUES
(1, 'TYPE SERVICE A', 'TYPE SERVICE A'),
(2, 'TYPE SERVICE B', 'TYPE SERVICE B');

-- --------------------------------------------------------

--
-- Table structure for table `type_user`
--

CREATE TABLE `type_user` (
  `id_type_user` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_user`
--

INSERT INTO `type_user` (`id_type_user`, `name`, `description`) VALUES
(1, 'Admin', 'Admin'),
(2, 'Technician', 'Technician'),
(3, 'User', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`),
  ADD UNIQUE KEY `pk_category` (`id_category`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `idx_history` (`id_ticket`),
  ADD KEY `idx_history_0` (`id_status`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`id_priority`);

--
-- Indexes for table `sla`
--
ALTER TABLE `sla`
  ADD PRIMARY KEY (`id_sla`);

--
-- Indexes for table `software_property`
--
ALTER TABLE `software_property`
  ADD PRIMARY KEY (`id_software_property`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tickets`
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
-- Indexes for table `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`id_type_service`);

--
-- Indexes for table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `idx_users` (`id_type_user`),
  ADD KEY `idx_users_0` (`id_department`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `id_priority` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sla`
--
ALTER TABLE `sla`
  MODIFY `id_sla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `software_property`
--
ALTER TABLE `software_property`
  MODIFY `id_software_property` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `type_service`
--
ALTER TABLE `type_service`
  MODIFY `id_type_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `fk_history_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `fk_history_tickets` FOREIGN KEY (`id_ticket`) REFERENCES `tickets` (`id_ticket`);

--
-- Constraints for table `tickets`
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
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_department` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`),
  ADD CONSTRAINT `fk_users_type_user` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id_type_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
