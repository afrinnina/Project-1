-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2019 at 10:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nino`
--

-- --------------------------------------------------------

--
-- Table structure for table `NinoProject`
--

CREATE TABLE `NinoProject` (
  `Full_name` varchar(200) NOT NULL,
  `Username` int(50) NOT NULL,
  `Series` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Blood` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NinoProject`
--

INSERT INTO `NinoProject` (`Full_name`, `Username`, `Series`, `Email`, `Password`, `Blood`) VALUES
('Monir', 171009, 17, 'monir82', 'monir', 'A+'),
('Nino', 1710049, 17, 'nino@gmail.com', '12345', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `NinoProject`
--
ALTER TABLE `NinoProject`
  ADD UNIQUE KEY `Username` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
