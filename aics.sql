-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 11:20 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aics`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrants`
--

CREATE TABLE `registrants` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Birthdate` date NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrants`
--

-- table next is teachers add teachers
INSERT INTO `registrants` (`id`, `FirstName`, `LastName`, `MiddleName`, `Age`, `Gender`, `Birthdate`, `Contact`,`Place`) VALUES
(1, 'Quennie', 'Alcasin', 'Taborada', '18', 'Female', '2001-07-01', '0987654321', 'Kalunasan'),
(2, 'Dean', 'Wynchester', 'William', '20', 'Male', '1979-01-24', '0987654321', 'Kansas');




CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `teachers` (`id`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Status`) VALUES
(1, 'Clavel', 'Redondo', 'Laride' , 'Female', 'Single'),
(2, 'Gabriel', 'Lala', 'Lopez' , 'Male', 'Married'),
(3, 'Marvin', 'Apetite', 'Cabasag', 'Male', 'Single');




CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `password`, `nickname`) VALUES
(1, 'Sheena', '12345', 'Shi-Shi'),
(2, 'Marian', '12345', 'Baby'),
(3, 'Juvi', '12345', 'Juvss');
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nickname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nickname`) VALUES
(1, 'beltradiaz', '12345', 'ms.belts'),
(2, 'gabbylopez', '12345', 'gabbylo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrants`
--
ALTER TABLE `registrants`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);


  ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
--
--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrants`
--
ALTER TABLE `registrants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;


ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;


  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;