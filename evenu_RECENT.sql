-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2025 at 03:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `event_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` char(36) NOT NULL DEFAULT uuid(),
  `name` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `event` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `status` enum('pending','accepted','declined','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `location`, `description`, `email`, `event`, `details`, `status`) VALUES
('0ceb95c6-0bdc-11f0-8599-c85b767439dd', 'charles', 'yaounde', '', 'charles@gmail.com', 'graduation', 'wwefcwhydxnhjfwc', 'accepted'),
('120d15e6-0987-11f0-84a3-c85b767439dd', 'eric', 'douala', '', 'shapekenzo@gmail.com', 'birthday', 'sdfgh', 'accepted'),
('19a3356b-e911-11ef-88fd-b88a60c68ee1', 'Birthday', 'Yaounde, Douala', 'www', '', '', '', 'accepted'),
('2ac3ae41-0a2b-11f0-8c1a-c85b767439dd', 'gabriella', 'yaounde', '', 'gabriella@gmail.com', 'gaduation', 'iouyd', 'accepted'),
('2c3d7572-0a2c-11f0-8c1a-c85b767439dd', 'gabriella', 'yaounde', '', 'gabriella@gmail.com', 'gaduation', 'tyuiolfcdwsa', 'accepted'),
('32986dbd-0831-11f0-a225-c85b767439dd', 'birthday ', 'baffoussam', 'my 60th anniversary', '', '', '', 'accepted'),
('4f332bef-0992-11f0-89a9-c85b767439dd', 'eric', 'douala', '', 'shapekenzo@gmail.com', 'birthday', 'QWERTYUIOP', 'accepted'),
('71805a13-0992-11f0-89a9-c85b767439dd', 'eric', 'douala', '', 'shapekenzo@gmail.com', 'birthday', 'asdfghnmj', 'declined'),
('7af2eac3-0986-11f0-84a3-c85b767439dd', 'eric', 'douala', '', 'shapekenzo@gmail.com', 'birthday', 'bmn iuy f', 'declined'),
('832315e2-0bd3-11f0-8599-c85b767439dd', 'gabriella', 'douala', '', 'lollamarley@gmail.com', 'birthday', 'hbvcd', 'declined'),
('8741eb24-0cba-11f0-b4ab-c85b767439dd', 'gabriella', 'douala', '', 'gabriella@gmail.com', 'graduation', 'QWERTGHYJUKasdfghj', 'accepted'),
('99f1602e-e90a-11ef-88fd-b88a60c68ee1', 'marriage', 'Yaounde, Douala', '', '', '', '', 'declined'),
('d8232a44-0987-11f0-84a3-c85b767439dd', 'birthday ', 'baffoussam', '10th anniv\r\n', '', '', '', 'accepted'),
('e290575e-0992-11f0-89a9-c85b767439dd', 'eric', 'douala', '', 'shapekenzo@gmail.com', 'birthday', 'aZxsn', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` char(36) NOT NULL DEFAULT uuid(),
  `name` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `location`, `description`) VALUES
('2a367b89-e910-11ef-88fd-b88a60c68ee1', ' Hall Renting ', 'Yaounde, Douala', 'Very clean and all sized hall'),
('76c8cb07-e90c-11ef-88fd-b88a60c68ee1', 'decortion', 'Yaounde, Douala', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','client') DEFAULT 'client',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
('', 'atoutou', 'atoutou@gmail.com', '123456789', 'client', '2025-03-27 09:37:11'),
('', 'charles', 'charles@gmail.com', '123456789', 'client', '2025-03-28 13:52:47'),
('125d59ec-e909-11ef-88fd-b88a60c68ee1', 'ntoh baldwin', 'dd@gmail.com', '12345678', 'admin', '2025-02-12 06:17:44'),
('765905ce-e909-11ef-88fd-b88a60c68ee1', 'delcie', 'delcie@gmail.com', '12345678', 'client', '2025-02-12 06:20:32'),
('', 'gabriella', 'gabriella@gmail.com', '0987654321', 'client', '2025-03-26 10:14:17'),
('', 'lolla marley', 'lollamarley@gmail.com', '12345678', 'client', '2025-03-24 15:08:52'),
('', 'eric', 'sapekenzo@gmail.com', '11111111', 'client', '2025-03-22 18:35:57'),
('', 'eric', 'shapekenzo@gmail.com', '12345678', 'client', '2025-03-22 17:26:37');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `before_insert_users` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
    IF NEW.id IS NULL THEN
        SET NEW.id = UUID();
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
