-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 04:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('samihasultana100@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Phone` int(30) NOT NULL,
  `Car_License_number` int(30) NOT NULL,
  `Car_Engine_Number` int(30) NOT NULL,
  `Appointment_Date` date NOT NULL,
  `Mechanic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Address`, `Phone`, `Car_License_number`, `Car_Engine_Number`, `Appointment_Date`, `Mechanic`) VALUES
('Samiha', 'Elephant Road', 1, 1, 1, '2020-03-10', 'Mogbul'),
('Anna', 'Barisal', 2, 2, 2, '2020-03-10', 'Mogbul'),
('Enna', 'Dhanmondi', 3, 3, 3, '2020-03-10', 'Mogbul'),
('Anna', 'Barisal', 2, 2, 2, '2020-03-11', 'Abul'),
('Samiha', 'Elephant Road', 1, 1, 1, '2020-03-12', 'Zareef'),
('Anna', 'Barisal', 2, 2, 2, '2020-03-12', 'Zareef'),
('Enna', 'Dhanmondi', 3, 3, 3, '2020-03-12', 'Zareef'),
('Samiha', 'Elephant Road', 1, 1, 1, '2020-03-13', 'Sadman'),
('Anna', 'Barisal', 2, 2, 2, '2020-03-13', 'Sadman'),
('Enna', 'Dhanmondi', 3, 3, 3, '2020-03-13', 'Zareef'),
('Maisha', 'Science Lab', 4, 4, 4, '2020-03-20', 'Hablu'),
('Maisha', 'Mohammadpur', 6, 6, 6, '2020-03-03', 'Abul'),
('Kamla', 'a', 4, 4, 4, '2020-03-04', 'Mogbul'),
('K', 's', 4, 4, 4, '2020-03-12', 'Zareef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
