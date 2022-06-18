-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220525.c1e393abce
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 02:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candidate_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `exitform`
--

CREATE TABLE `exitform` (
  `Name` int(11) NOT NULL,
  `Email` int(11) NOT NULL,
  `Mobile no` int(11) NOT NULL,
  `Video` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `suggestion` int(11) NOT NULL,
  `project title` int(11) NOT NULL,
  `end date` int(11) NOT NULL,
  `start date` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `Guidance` varchar(20) NOT NULL,
  `Culture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exitform`
--

INSERT INTO `exitform` (`Name`, `Email`, `Mobile no`, `Video`, `department`, `suggestion`, `project title`, `end date`, `start date`, `experience`, `Guidance`, `Culture`) VALUES
(0, 0, 2147483647, 0, 0, 0, 0, 0, 0, 2, 'Yes', 'Yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



