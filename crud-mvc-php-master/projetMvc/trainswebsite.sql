-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 08:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'a', 'a@gmail.com', 'a'),
(2, 'd', 'd@gmail.com', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(255) NOT NULL,
  `dateTrip` varchar(255) NOT NULL,
  `departureStationTrip` varchar(255) NOT NULL,
  `arrivalStationTrip` varchar(255) NOT NULL,
  `priceTrip` int(255) NOT NULL,
  `myComfort` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '--'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `dateTrip`, `departureStationTrip`, `arrivalStationTrip`, `priceTrip`, `myComfort`, `email`) VALUES
(76, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(77, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(78, '2222-11-27T21:02', 'a', 'b', 812, 'first-class', '--'),
(79, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(80, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(81, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(82, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(83, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(84, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(85, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(86, '2222-11-27T21:02', 'a', 'b', 812, 'singel-bed', '--'),
(87, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--'),
(88, '2222-11-27T21:02', 'a', 'b', 812, 'singel-bed', '--'),
(89, '2222-11-27T21:02', 'a', 'b', 812, 'seconde-class', '--');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `dateTrip` varchar(255) NOT NULL,
  `departureStationTrip` varchar(255) NOT NULL,
  `arrivalStationTrip` varchar(255) NOT NULL,
  `priceTrip` int(5) NOT NULL,
  `AvailableSeatsTrip` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `dateTrip`, `departureStationTrip`, `arrivalStationTrip`, `priceTrip`, `AvailableSeatsTrip`) VALUES
(4, '2222-11-27T21:02', 'a', 'b', 812, 64),
(8, '2222-03-01T01:46', 'a', 'b', 985, 38),
(15, '2222-08-25T23:28', 'a', 'b', 609, 78),
(16, '2223-06-09T19:57', 'a', 'b', 111, 62),
(17, '2222-09-28T06:33', 'a', 'b', 616, 99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(24, 'Althea Washington', 'nityso@mailinator.com', 'Pa$$w0rd!'),
(25, 'b', 'b@gmail.com', 'b'),
(26, 'Cooper Chaney', 'roxamyber@mailinator.com', 'Pa$$w0rd!'),
(27, 'Simone Walters', 'gukel@mailinator.com', 'Pa$$w0rd!'),
(28, 'oussama ennadafy', 'oussama.ennadafy@gmail.com', 'a'),
(29, 'Natalie Matthews', 'qahybopi@mailinator.com', 'Pa$$w0rd!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
