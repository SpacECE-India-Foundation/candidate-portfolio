-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 01:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `file_description` text NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `file_uploader` varchar(225) NOT NULL,
  `file_uploaded_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_uploaded_to` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT 'not approved yet'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`file_id`, `file_name`, `file_description`, `file_type`, `file_uploader`, `file_uploaded_on`, `file_uploaded_to`, `file`, `status`) VALUES
(0, 'oop_in_php_tutorial', 'Basic OOPS In detail', 'pdf', 'khandareumesh12@gmail.com', '2022-02-12 12:02:43', 'Computer Science', '40962.pdf', 'not approved yet'),
(0, 'advanced oops', 'Advance OOPS in detail', 'pdf', 'khandareumesh12@gmail.com', '2022-02-12 12:04:09', 'Computer Science', '796518.pdf', 'not approved yet'),
(0, 'ajax_xml', 'Ajax XML in Detail', 'pdf', 'khandareumesh12@gmail.com', '2022-02-12 12:05:05', 'Computer Science', '397186.pdf', 'not approved yet'),
(0, 'Basic CSS', 'Basic CSS in detail', 'pdf', 'khandareumesh12@gmail.com', '2022-02-12 12:06:01', 'Computer Science', '286396.pdf', 'not approved yet'),
(0, 'JavaScript for beginer', 'JavaScript for beginer', 'pdf', 'khandareumesh12@gmail.com', '2022-02-12 12:06:50', 'Computer Science', '842174.pdf', 'not approved yet'),
(0, 'SMS Gateway', 'Study about SMS Gateway in Detail', 'pdf', 'khandareumesh12@gmail.com', '2022-02-12 12:07:52', 'Computer Science', '268917.pdf', 'not approved yet'),
(0, 'SQL_Joins', 'SQL_Joins', 'pdf', 'khandareumesh12@gmail.com', '2022-02-12 12:08:17', 'Computer Science', '16667.pdf', 'not approved yet'),
(0, 'sql-constraints', 'sql-constraints', 'pdf', 'khandareumesh12@gmail.com', '2022-02-12 12:08:56', 'Computer Science', '461799.pdf', 'not approved yet');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
