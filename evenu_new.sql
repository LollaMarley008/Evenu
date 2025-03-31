-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Mar 31, 2025 at 03:58 PM
-- Server version: 8.0.41
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evenus`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `location` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `service` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `event` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `details` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('pending','accepted','declined') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `payment` tinyint(1) DEFAULT '0',
  `amount` decimal(15,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `location`, `email`, `phone_number`, `service`, `event`, `details`, `status`, `payment`, `amount`) VALUES
('110a2428-0e48-11f0-b086-c03eba4f92ed', 'Karen withman', 'Event Loication', 'max@email.com', '652181545', 'MTN', 'birthday', 'aadsdasdas', 'accepted', 0, 0.00),
('1c5872d6-0e47-11f0-b086-c03eba4f92ed', 'Jerry Huffman', 'Somewhere', 'withman@email.com', '42423423423', 'MTN', 'marriage', 'asdasdas', 'declined', 0, 0.00),
('2f046a33-0e47-11f0-b086-c03eba4f92ed', 'Jude Maxwell', 'Somewhere', 'max@email.com', '652181545', 'MTN', 'birthday', 'asasdasdasdasdas', 'declined', 0, 0.00),
('6db59499-0e48-11f0-b086-c03eba4f92ed', 'Jude Wildeman', 'Event Loication', 'max@email.com', '652181545', 'MTN', 'birthday', 'asdadas', 'accepted', 1, 10.00),
('82d64ed9-0e45-11f0-b086-c03eba4f92ed', 'Jude Wildeman', 'Event Loication', 'king@protonS.me', '652181545', 'MTN', 'birthday', 'dsfdsfdfsdfsd', 'declined', 0, 0.00),
('a32a7430-0e47-11f0-b086-c03eba4f92ed', 'Karen withman', 'Event Loication', 'max@email.com', '42423423423', 'MTN', 'birthday', 'asdasdasdasdas', 'accepted', 0, 0.00),
('b5d2df8b-0e47-11f0-b086-c03eba4f92ed', 'MrRabbit', 'Event Loication', 'withman@email.com', '652181545', 'MTN', 'birthday', 'asdasadsdadas', 'accepted', 0, 0.00);

--
-- Triggers `events`
--
DELIMITER $$
CREATE TRIGGER `before_insert_events` BEFORE INSERT ON `events` FOR EACH ROW BEGIN
    IF NEW.id IS NULL OR NEW.id = '' THEN
        SET NEW.id = UUID();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `event_prices`
--

CREATE TABLE `event_prices` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event_prices`
--

INSERT INTO `event_prices` (`id`, `name`, `price`) VALUES
('81ce9f41-0e35-11f0-b086-c03eba4f92ed', 'marriage', 10.00),
('9dd14b21-0e35-11f0-b086-c03eba4f92ed', 'birthday', 10.00),
('d8fe9225-2db3-49be-975c-1d3075f5d61d', 'graduation', 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `location` text COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `location`, `description`) VALUES
('2a367b89-e910-11ef-88fd-b88a60c68ee1', ' Hall Renting ', 'Yaounde, Douala', 'Very clean and all sized hall'),
('76c8cb07-e90c-11ef-88fd-b88a60c68ee1', 'decortion', 'Yaounde, Douala', '');

--
-- Triggers `services`
--
DELIMITER $$
CREATE TRIGGER `before_insert_services` BEFORE INSERT ON `services` FOR EACH ROW BEGIN
    IF NEW.id IS NULL OR NEW.id = '' THEN
        SET NEW.id = UUID();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','client') COLLATE utf8mb4_general_ci DEFAULT 'client',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
('0a9db184-0e35-11f0-b086-c03eba4f92ed', 'atoutou', 'atoutou@gmail.com', '123456789', 'client', '2025-03-27 08:37:11'),
('0a9db7dc-0e35-11f0-b086-c03eba4f92ed', 'charles', 'charles@gmail.com', '123456789', 'client', '2025-03-28 12:52:47'),
('0a9dbac6-0e35-11f0-b086-c03eba4f92ed', 'gabriella', 'gabriella@gmail.com', '0987654321', 'client', '2025-03-26 09:14:17'),
('0a9dbbee-0e35-11f0-b086-c03eba4f92ed', 'lolla marley', 'lollamarley@gmail.com', '12345678', 'client', '2025-03-24 14:08:52'),
('0a9dbcd5-0e35-11f0-b086-c03eba4f92ed', 'eric', 'sapekenzo@gmail.com', '11111111', 'client', '2025-03-22 17:35:57'),
('0a9dbdf8-0e35-11f0-b086-c03eba4f92ed', 'eric', 'shapekenzo@gmail.com', '12345678', 'client', '2025-03-22 16:26:37'),
('125d59ec-e909-11ef-88fd-b88a60c68ee1', 'ntoh baldwin', 'dd@gmail.com', '12345678', 'admin', '2025-02-12 05:17:44'),
('765905ce-e909-11ef-88fd-b88a60c68ee1', 'delcie', 'delcie@gmail.com', '12345678', 'client', '2025-02-12 05:20:32');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `before_insert_users` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
    IF NEW.id IS NULL OR NEW.id = '' THEN
        SET NEW.id = UUID();
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_prices`
--
ALTER TABLE `event_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
