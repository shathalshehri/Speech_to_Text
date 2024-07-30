-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2024 at 11:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Robot`
--

-- --------------------------------------------------------

--
-- Table structure for table `speech_to_text_data`
--

CREATE TABLE `speech_to_text_data` (
  `id` int(11) NOT NULL,
  `transcript` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `command` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `speech_to_text_data`
--

INSERT INTO `speech_to_text_data` (`id`, `transcript`, `timestamp`, `command`) VALUES
(104, 'open', '2024-07-29 11:30:28', '1'),
(105, 'open', '2024-07-29 11:30:29', '1'),
(106, 'close', '2024-07-29 11:31:24', '0'),
(107, 'close', '2024-07-29 11:31:25', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `speech_to_text_data`
--
ALTER TABLE `speech_to_text_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `speech_to_text_data`
--
ALTER TABLE `speech_to_text_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
