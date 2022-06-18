-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220525.c1e393abce
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 12:04 PM
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
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `completed` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `assignment_path` text NOT NULL,
  `download` varchar(30) NOT NULL,
  `notes.assignments` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `description`, `completed`, `date_created`, `assignment_path`, `download`, `notes.assignments`, `email`) VALUES
(1, 'Assignment 1', 'uncomplete', '2022-02-21 22:27:05', 'C:/Users/TIGER/Downloads/-what-is-blockchain-2016.pdf', 'C:/Users/TIGER/Downloads/-what', 'no', ''),
(0, '', '', '2022-03-15 18:44:34', '', '', '', ''),
(2, 'This is assignment 1 for web devloper', '', '0000-00-00 00:00:00', 'fname', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '0000-00-00 00:00:00', 'fname', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-14 00:00:00', 'fname', '', '', ''),
(0, 'assignment_name', '', '0000-00-00 00:00:00', 'fname', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:08:22', '1647412680_lamp.txt', '', '', ''),
(0, '', '', '2022-03-16 12:08:28', '', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:19:50', '1647413340_lamp.txt', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:20:20', '1647413400_lamp.txt', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:21:04', '1647413460_lamp.txt', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:22:08', '1647413520_lamp.txt', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:22:34', '1647413520_lamp.txt', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:22:55', '1647413520_lamp.txt', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:23:42', '1647413580_lamp.txt', '', '', 'khandareumesh12@gmai'),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:25:42', '1647413700_lamp.txt', '', '', 'khandareumesh12@gmai'),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 12:26:52', '1647413760_lamp.txt', '', '', 'khandareumesh12@gmai'),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 13:11:38', '1647416460_lamp.txt', '', '', ''),
(0, 'This is assignment 3 for web devloper', '', '2022-03-16 13:17:58', '', '', '', ''),
(0, 'This is assignment 3 for web devloper', '', '2022-03-16 13:42:04', '', '', '', ''),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 14:17:49', '', '', '', ''),
(0, 'This is assignment 3 for web devloper', '', '2022-03-16 14:20:20', '', '', '', 'sakshi@gmail.com'),
(0, 'This is assignment 3 for web devloper', '', '2022-03-16 14:21:30', '', '', '', 'sakshi@gmail.com'),
(0, 'This is assignment 1 for web devloper', '', '2022-03-16 14:36:44', '', '', '', 'sakshi@gmail.com'),
(0, 'This is assignment 3 for web devloper', '', '2022-03-16 14:43:14', '', '', '', ''),
(0, 'This is assignment 3 for web devloper', '', '2022-03-16 20:07:05', '', '', '', 'sakshi@gmail.com'),
(0, 'This is assignment 3 for web devloper', '', '2022-03-16 20:07:44', '1647441420_readme_en.txt', '', '', 'sakshi@gmail.com'),
(0, '', '', '2022-04-13 10:56:01', '', '', '', 'anirudh@gmail.com'),
(0, '', '', '2022-04-13 10:56:19', '', '', '', 'anirudh@gmail.com'),
(0, '', '', '2022-04-13 13:24:37', '', '', '', 'mamoon@gmail.com'),
(0, '', '', '2022-04-13 13:53:12', '', '', '', 'kirti@gmail.com'),
(0, '', '', '2022-04-13 14:21:06', '', '', '', 'mangesh@gmail.com'),
(0, '', '', '2022-04-13 14:54:48', '', '', '', 'dhanjay@gmail.com'),
(0, '', '', '2022-04-14 12:19:56', '', '', '', 'chanda@gmail.com'),
(0, '', '', '2022-04-14 19:44:07', '', '', '', 'shyla@gmail.com'),
(0, '', '', '2022-04-15 17:33:38', '', '', '', 'neha@gmail.com'),
(0, '', '', '2022-04-15 18:18:41', '', '', '', 'alia@gmail.com'),
(0, '', '', '2022-04-15 18:18:51', '', '', '', 'alia@gmail.com'),
(0, '', '', '2022-04-15 18:19:04', '', '', '', 'alia@gmail.com'),
(0, '', '', '2022-04-15 18:19:24', '', '', '', 'alia@gmail.com'),
(0, '', '', '2022-04-15 18:19:35', '', '', '', 'alia@gmail.com'),
(0, '', '', '2022-04-15 18:20:00', '', '', '', 'alia@gmail.com'),
(0, '', '', '2022-04-15 18:20:08', '', '', '', 'alia@gmail.com'),
(0, '', '', '2022-04-15 18:36:39', '', '', '', 'shreya@gmail.com'),
(0, '', '', '2022-04-15 18:37:05', '', '', '', 'shreya@gmail.com'),
(0, '', '', '2022-04-15 18:37:50', '', '', '', 'shreya@gmail.com'),
(0, '', '', '2022-04-15 18:41:36', '1650028260_lamp1.txt', '', '', 'shreya@gmail.com'),
(0, '', '', '2022-04-15 19:06:38', '', '', '', 'riddhima@gmail.com'),
(0, '', '', '2022-04-15 19:16:20', '1650030360_lamp1.txt', '', '', 'kanchan@gmail.com'),
(0, '', '', '2022-04-15 21:09:33', '', '', '', 'surbhi@gmail.com'),
(0, '', '', '2022-04-16 18:50:39', '', '', '', 'sushil@gmail.com'),
(0, '', '', '2022-04-16 19:24:34', '', '', '', 'sunil@gmail.com'),
(0, '', '', '2022-04-19 01:55:32', '', '', '', 'akshay@gmail.com'),
(0, '', '', '2022-04-19 19:18:27', '1650376080_lamp1.txt', '', '', 'kareena@gmail.com'),
(0, '', '', '2022-04-19 19:18:41', '', '', '', 'kareena@gmail.com'),
(0, '', '', '2022-04-19 19:18:50', '', '', '', 'kareena@gmail.com'),
(0, '', '', '2022-04-19 19:19:00', '', '', '', 'kareena@gmail.com'),
(0, '', '', '2022-04-19 19:19:38', '1650376140_lamp.txt', '', '', 'kareena@gmail.com'),
(0, '', '', '2022-04-19 21:27:53', '', '', '', 'ranbir@gmail.com'),
(0, '', '', '2022-04-19 21:28:31', '', '', '', 'ranbir@gmail.com'),
(0, '', '', '2022-05-02 12:35:35', '', '', '', 'cherry@gmail.com'),
(0, '', '', '2022-05-03 19:06:36', '', '', '', 'palak@gmail.com'),
(0, '', '', '2022-05-03 19:48:51', '1651587480_lamp.txt', '', '', 'ritwik@gmail.com'),
(0, '', '', '2022-05-03 19:58:46', '', '', '', 'varun@gmail.com'),
(0, '', '', '2022-05-03 20:13:28', '', '', '', 'varun@gmail.com'),
(0, '', '', '2022-05-03 20:32:09', '', '', '', 'ROBBY@GMAIL.COM'),
(0, '', '', '2022-05-03 20:58:26', '', '', '', 'katyy@gmail.com'),
(0, '', '', '2022-05-03 20:59:02', '1651591740_lamp1.txt', '', '', 'katyy@gmail.com'),
(0, '', '', '2022-05-15 19:44:35', '1652624040_lamp.txt', '', '', 'kimmy@gmail.com'),
(0, '', '', '2022-05-16 19:22:57', '', '', '', 'putin@gmail.com'),
(0, '', '', '2022-05-17 19:28:56', '', '', '', 'suman@gmail.com'),
(0, '', '', '2022-05-17 19:29:49', '', '', '', 'suman@gmail.com'),
(0, '', '', '2022-05-19 16:11:53', '', '', '', 'arohi@gmail.com'),
(0, '', '', '2022-05-26 17:46:21', '', '', '', 'nachi@gmail.com'),
(0, '', '', '2022-05-26 17:47:08', '', '', '', 'nachi@gmail.com'),
(0, '', '', '2022-05-26 17:48:34', '1653567480_htmldoc (29).doc', '', '', 'nachi@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



