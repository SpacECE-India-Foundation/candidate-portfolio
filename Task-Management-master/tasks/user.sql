-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 04:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `user`
--


--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `username`, `upass`, `name`, `mobile`, `gender`, `hobbies`, `image`, `dob`, `regid`, `college`, `role`, `course`, `token`, `joindate`, `about`, `department`, `assignment`) VALUES

(36, 'subhadra@gmail.com', '', 'b3c63590419d0997bae18998553cf43b', 'Subhadra', NULL, 'Femal', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(37, 'sarvagya@gmail.com', '', 'f89c35e89a1b3d06d9093842ee19d8eb', 'Sarvagya', NULL, 'Male', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(38, 'chetan@gmail.com', '', 'ff3c6a2e94269940d5594eae3d1f3107', 'Chetan', NULL, 'Male', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(39, 'vidushi@gmail.com', '', '300dd434a75060d4db1c292264848fa9', 'Vidushi', NULL, 'Femal', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(40, 'rashi@gmail.com', '', '4f42e77c3049c1ff76b87db09d0a8c67', 'Rashi', NULL, 'Femal', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(41, 'aditi@gmail.com', '', 'de3dd08a841625756a71376837a491ed', 'Aditi', NULL, 'Femal', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(42, 'harsh@gmail.com', '', 'fbccfd28246bf29c9438fe7f95605543', 'Harsh', NULL, 'Male', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(43, 'himanshu@gmail.com', '', 'cf12b5244051e02a36320761ed0c0cf5', 'Himanshu', NULL, 'Male', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(44, 'parth@gmail.com', '', 'db97b9a97d3fea955d5406f0a182a65e', 'Parth', NULL, 'Male', NULL, 'download.jfif', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(45, 'divyanshu@gmail.com', '', '4391ad747c65994103c3b94ac085afdc', 'Divyanshu', NULL, 'Male', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(46, 'priyanshu@gmail.com', '', '0855b8eef7b114ba3b8c923bc319bcc5', 'Priyanshu', NULL, 'Male', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(47, 'radhika@gmail.com', '', 'a3d991e49b0fb37b4e352efdaa79b02f', 'Radhika', NULL, 'Femal', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(48, 'satyam@gmail.com', '', 'dae36dccfedaab8c60fb5e8d8832e13d', 'Satyam', NULL, 'Male', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),
(49, 'sumeet@gmail.com', '', 'd8e2bb19252eb7782454aa461bc0d276', 'Sumeet', NULL, 'Male', NULL, 'photo for all.webp', NULL, NULL, '', 'Student', '', '', '', '', '1', ''),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--

-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
