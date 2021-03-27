-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 08:50 AM
-- Server version: 5.7.30-log
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apwis`
--

-- --------------------------------------------------------

--
-- Table structure for table `mainvalues`
--

CREATE TABLE `mainvalues` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Temp` int(11) NOT NULL,
  `Hum` int(11) NOT NULL,
  `Moisture` int(11) NOT NULL,
  `WaterLvl` tinyint(1) NOT NULL,
  `PestLvl` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `motorstatus`
--

CREATE TABLE `motorstatus` (
  `mid` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `WatM` tinyint(1) NOT NULL,
  `PestM` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pestschedule`
--

CREATE TABLE `pestschedule` (
  `PSID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Duration` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Time` time NOT NULL,
  `Completed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waterschedule`
--

CREATE TABLE `waterschedule` (
  `WSID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Duration` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Time` time NOT NULL,
  `Completed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
