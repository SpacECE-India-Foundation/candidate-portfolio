-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 05:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_chmbac`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(30) NOT NULL,
  `COURSE_DESC` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `SETSEMESTER` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_DESC`, `DEPT_ID`, `SETSEMESTER`) VALUES
(21, 'BSBA Financial Management', 'Bachelor of Science in Busines Administration ', 34, ''),
(24, 'AB Philosophy', 'Bachelor of ARTS (AB)', 34, ''),
(29, 'AB English', 'Bachelor of ARTS (AB)', 34, ''),
(52, 'BSIT', 'Bachelor of Science in Information Technology', 33, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--
 
--

INSERT INTO `department` (`DEPT_ID`, `DEPARTMENT_NAME`, `DEPARTMENT_DESC`) VALUES
(33, 'IT', 'Information Technology Department'),
(34, 'BITE', 'Business and IT Education'),
(35, 'TEA', 'Teacher Education Department'),
(36, 'arts', 'Arts Department');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--
 
-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

CREATE TABLE IF NOT EXISTS `studentsubjects` (
`STUDSUBJ_ID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `LEVEL` varchar(90) NOT NULL,
  `SECTIONID` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SY` text NOT NULL,
  `ATTEMP` int(11) NOT NULL,
  `AVERAGE` double NOT NULL,
  `OUTCOME` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsubjects`
--

INSERT INTO `studentsubjects` (`STUDSUBJ_ID`, `IDNO`, `SUBJ_ID`, `LEVEL`, `SECTIONID`, `SEMESTER`, `SY`, `ATTEMP`, `AVERAGE`, `OUTCOME`) VALUES
(1, '2018-SC-0001', 1, 'First Year', 1, 'First', '2000-2001', 1, 0, ''),
(2, '2018-SC-0001', 2, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(3, '2018-SC-0001', 3, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(4, '2018-SC-0001', 4, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(5, '2018-SC-0001', 5, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(6, '2018-SC-0001', 6, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(7, '2018-SC-0001', 7, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(8, '2018-SC-0001', 8, 'Fourth Year', 0, 'Second', '2000-2001', 1, 0, ''),
(9, '2018-SC-0001', 9, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(10, '2018-SC-0001', 10, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(11, '2018-SC-0001', 11, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(12, '2018-SC-0001', 12, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(13, '2018-SC-0001', 13, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(14, '2018-SC-0001', 14, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(15, '2018-SC-0001', 15, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(16, '2018-SC-0001', 16, 'Second Year', 0, 'First', '2000-2001', 1, 0, ''),
(17, '15-SC-0836', 1, 'First Year', 1, 'First', 'Select', 1, 0, ''),
(18, '15-SC-0836', 2, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(19, '15-SC-0836', 3, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(20, '15-SC-0836', 4, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(21, '15-SC-0836', 5, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(22, '15-SC-0836', 6, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(23, '15-SC-0836', 7, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(24, '15-SC-0836', 8, 'Third Year', 0, 'Second', 'Select', 1, 0, ''),
(25, '15-SC-0836', 9, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(26, '15-SC-0836', 10, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(27, '15-SC-0836', 11, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(28, '15-SC-0836', 12, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(29, '15-SC-0836', 13, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(30, '15-SC-0836', 14, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(31, '15-SC-0836', 15, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(32, '15-SC-0836', 16, 'Second Year', 0, 'First', 'Select', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--
 

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--
 
-- --------------------------------------------------------

--
-- Table structure for table `tblauto`
--
 

-- --------------------------------------------------------

--
-- Table structure for table `tblexpenses`
--
  
-- --------------------------------------------------------

--
-- Table structure for table `tblfees`
--

 

-- --------------------------------------------------------

--
-- Table structure for table `tblinstructorsubject`
--

CREATE TABLE IF NOT EXISTS `tblinstructorsubject` (
`INST_ID` int(11) NOT NULL,
  `ACCOUNT_ID` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `SECTIONID` int(11) NOT NULL,
  `AY` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinstructorsubject`
--

INSERT INTO `tblinstructorsubject` (`INST_ID`, `ACCOUNT_ID`, `SUBJ_ID`, `SECTIONID`, `AY`) VALUES
(4, 13, 1, 1, '2000-2001'),
(5, 13, 2, 1, '2000-2001'),
(6, 13, 3, 1, '2000-2001');

-- --------------------------------------------------------

--
-- Table structure for table `tbllevel`
--

CREATE TABLE IF NOT EXISTS `tbllevel` (
`LEVELID` int(11) NOT NULL,
  `YEARLEVEL` varchar(30) NOT NULL,
  `SECTION` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllevel`
--

INSERT INTO `tbllevel` (`LEVELID`, `YEARLEVEL`, `SECTION`) VALUES
(3, 'First Year', ''),
(4, 'Second Year', ''),
(5, 'Third Year', ''),
(6, 'Fourth Year', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE IF NOT EXISTS `tbllogs` (
`LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`LOGID`, `USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) VALUES
(1, 1, '2016-09-22 21:46:01', 'Administrator', 'Logged in'),
(2, 100000022, '2016-09-22 21:46:29', 'Student', 'Logged out'),
(3, 100000015, '2016-09-23 05:00:38', 'Student', 'Logged in'),
(4, 100000015, '2016-09-23 05:00:45', 'Student', 'Logged out'),
(5, 100000025, '2016-09-23 05:02:31', 'Student', 'Logged in'),
(6, 100000025, '2016-09-23 05:02:55', 'Student', 'Logged out'),
(7, 100000025, '2016-09-23 05:03:53', 'Student', 'Logged in'),
(8, 100000025, '2016-09-23 05:11:40', 'Student', 'Logged out'),
(9, 100000025, '2016-09-24 09:32:59', 'Student', 'Logged out'),
(10, 1, '2016-09-24 09:46:06', 'Administrator', 'Logged in'),
(11, 1, '2016-09-24 09:53:17', 'Administrator', 'Logged out'),
(12, 1, '2016-09-24 09:54:45', 'Administrator', 'Logged in'),
(13, 100000027, '2016-09-24 15:30:32', 'Student', 'Logged out'),
(14, 100000015, '2016-09-27 09:34:11', 'Student', 'Logged in'),
(15, 1, '2016-09-27 10:59:58', 'Administrator', 'Logged in'),
(16, 100000015, '2016-09-27 11:00:42', 'Student', 'Logged out'),
(17, 100000029, '2016-09-27 17:34:11', 'Student', 'Logged out'),
(18, 100000015, '0000-00-00 00:00:00', 'Student', 'Logged in'),
(19, 100000015, '2016-09-27 17:37:13', 'Student', 'Logged out'),
(20, 100000029, '2016-09-27 18:27:40', 'Student', 'Logged out'),
(21, 100000015, '2016-09-27 18:27:56', 'Student', 'Logged in'),
(22, 100000015, '2016-09-27 18:29:20', 'Student', 'Logged out'),
(23, 100000030, '2016-09-27 22:49:02', 'Student', 'Logged out'),
(24, 100000015, '2016-09-27 22:50:10', 'Student', 'Logged in'),
(25, 100000015, '2016-09-28 01:47:07', 'Student', 'Logged out'),
(26, 100000033, '2016-09-28 04:43:26', 'Student', 'Logged out'),
(27, 1, '2016-10-01 04:07:48', 'Administrator', 'Logged in'),
(28, 100000056, '2016-10-01 09:22:17', 'Student', 'Logged out'),
(29, 100000056, '2016-10-01 09:22:51', 'Student', 'Logged in'),
(30, 100000056, '2016-10-01 09:23:30', 'Student', 'Logged out'),
(31, 100000056, '2016-10-01 12:52:40', 'Student', 'Logged out'),
(32, 100000057, '2016-10-01 15:28:47', 'Student', 'Logged out'),
(33, 100000058, '2016-10-01 15:44:01', 'Student', 'Logged out'),
(34, 100000057, '2016-10-01 15:44:11', 'Student', 'Logged in'),
(35, 100000057, '2016-10-01 16:38:34', 'Student', 'Logged out'),
(36, 100000061, '2016-10-01 16:50:27', 'Student', 'Logged out'),
(37, 100000061, '2016-10-01 18:08:05', 'Student', 'Logged out'),
(38, 1, '2016-10-02 01:12:39', 'Administrator', 'Logged in'),
(39, 100000067, '2016-10-02 01:58:35', 'Student', 'Logged out'),
(40, 100000068, '2016-10-02 02:16:08', 'Student', 'Logged out'),
(41, 100000069, '2016-10-02 02:20:24', 'Student', 'Logged out'),
(42, 100000071, '2016-10-02 09:16:51', 'Student', 'Logged out'),
(43, 1, '2018-11-27 07:03:09', 'Administrator', 'Logged in'),
(44, 1, '2018-11-27 10:39:57', 'Administrator', 'Logged out'),
(45, 1, '2018-11-27 10:42:19', 'Administrator', 'Logged in'),
(46, 1, '2018-11-27 10:44:25', 'Administrator', 'Logged in'),
(47, 1, '2018-11-27 10:49:41', 'Administrator', 'Logged out'),
(48, 1, '2018-11-27 11:03:31', 'Administrator', 'Logged in'),
(49, 1, '2018-11-27 12:50:29', 'Administrator', 'Logged in'),
(50, 1, '2018-11-28 04:51:58', 'Administrator', 'Logged in'),
(51, 1, '2018-11-28 20:16:18', 'Administrator', 'Logged in'),
(52, 100000074, '2018-11-28 20:16:53', 'Student', 'Logged in'),
(53, 1, '2018-11-28 21:06:53', 'Administrator', 'Logged out'),
(54, 1, '2018-11-28 21:07:26', 'Administrator', 'Logged in'),
(55, 100000074, '2018-11-28 23:08:35', 'Student', 'Logged out'),
(56, 100000074, '2018-11-28 23:10:44', 'Student', 'Logged in'),
(57, 100000074, '2018-11-28 23:24:34', 'Student', 'Logged out'),
(58, 1, '2018-11-29 09:57:42', 'Administrator', 'Logged in'),
(59, 100000074, '2018-11-29 09:58:12', 'Student', 'Logged in'),
(60, 1, '2018-11-30 12:11:25', 'Administrator', 'Logged in'),
(61, 1, '2018-11-30 13:32:17', 'Administrator', 'Logged in'),
(62, 1, '2018-11-30 14:25:42', 'Administrator', 'Logged in'),
(63, 1, '2018-11-30 20:43:10', 'Administrator', 'Logged in'),
(64, 1, '2018-12-01 03:20:44', 'Administrator', 'Logged out'),
(65, 1, '2018-12-01 03:21:10', 'Administrator', 'Logged in'),
(66, 1, '2018-12-01 03:21:21', 'Administrator', 'Logged out'),
(67, 1, '2018-12-01 03:29:17', 'Administrator', 'Logged in'),
(68, 1, '2018-12-01 03:34:33', 'Administrator', 'Logged out'),
(69, 11, '2018-12-01 04:47:26', 'Officer', 'Logged out'),
(70, 1, '2018-12-01 04:47:33', 'Administrator', 'Logged in'),
(71, 1, '2018-12-01 04:47:47', 'Administrator', 'Logged out'),
(72, 12, '2018-12-01 07:13:58', 'Officer', 'Logged out'),
(73, 1, '2018-12-01 07:14:10', 'Administrator', 'Logged in'),
(74, 1, '2018-12-01 07:14:35', 'Administrator', 'Logged out'),
(75, 1, '2018-12-01 07:14:45', 'Administrator', 'Logged in'),
(76, 1, '2018-12-02 21:28:41', 'Administrator', 'Logged out'),
(77, 12, '2018-12-02 21:41:34', 'Officer', 'Logged out'),
(78, 1, '2018-12-02 21:41:44', 'Administrator', 'Logged in'),
(79, 1, '2018-12-02 21:42:33', 'Administrator', 'Logged out'),
(80, 13, '2018-12-02 21:42:41', 'Instructor', 'Logged in'),
(81, 13, '2018-12-02 21:50:23', 'Instructor', 'Logged out'),
(82, 13, '2018-12-02 21:52:23', 'Instructor', 'Logged in'),
(83, 13, '2018-12-02 21:55:43', 'Instructor', 'Logged out'),
(84, 14, '2018-12-02 22:17:01', 'Officer', 'Logged out'),
(85, 1, '2018-12-02 22:17:09', 'Administrator', 'Logged in'),
(86, 1, '2018-12-02 23:50:40', 'Administrator', 'Logged out'),
(87, 1, '2018-12-03 00:02:22', 'Administrator', 'Logged in'),
(88, 1, '2018-12-03 00:03:28', 'Administrator', 'Logged out'),
(89, 15, '2018-12-03 00:03:36', 'Instructor', 'Logged in'),
(90, 15, '2018-12-03 00:05:17', 'Instructor', 'Logged out'),
(91, 15, '2018-12-03 00:05:31', 'Instructor', 'Logged in'),
(92, 15, '2018-12-03 00:07:13', 'Instructor', 'Logged out'),
(93, 15, '2018-12-03 00:07:36', 'Instructor', 'Logged in'),
(94, 15, '2018-12-03 00:09:45', 'Instructor', 'Logged out'),
(95, 15, '2018-12-03 00:10:10', 'Instructor', 'Logged in'),
(96, 15, '2018-12-03 00:12:13', 'Instructor', 'Logged out'),
(97, 15, '2018-12-03 00:12:24', 'Instructor', 'Logged in'),
(98, 15, '2018-12-03 00:16:41', 'Instructor', 'Logged out'),
(99, 1, '2018-12-03 00:16:56', 'Administrator', 'Logged in'),
(100, 1, '2018-12-03 00:20:39', 'Administrator', 'Logged out'),
(101, 15, '2018-12-03 00:20:51', 'Instructor', 'Logged in'),
(102, 15, '2018-12-03 00:21:41', 'Instructor', 'Logged out'),
(103, 15, '2018-12-03 00:21:48', 'Instructor', 'Logged in'),
(104, 15, '2018-12-03 00:22:05', 'Instructor', 'Logged out'),
(105, 1, '2018-12-03 00:22:12', 'Administrator', 'Logged in'),
(106, 1, '2018-12-03 00:37:47', 'Administrator', 'Logged out'),
(107, 1, '2018-12-03 01:42:38', 'Administrator', 'Logged in'),
(108, 1, '2018-12-03 02:22:22', 'Administrator', 'Logged in'),
(109, 1, '2018-12-03 02:45:42', 'Administrator', 'Logged out'),
(110, 15, '2018-12-03 02:47:25', 'Instructor', 'Logged in'),
(111, 15, '2018-12-03 02:47:45', 'Instructor', 'Logged out'),
(112, 1, '2018-12-03 02:48:19', 'Administrator', 'Logged in'),
(113, 1, '2018-12-03 02:48:55', 'Administrator', 'Logged out'),
(114, 16, '2018-12-03 02:50:26', 'Officer', 'Logged out'),
(115, 1, '2018-12-03 02:50:45', 'Administrator', 'Logged in'),
(116, 1, '2018-12-03 02:51:00', 'Administrator', 'Logged out'),
(117, 1, '2018-12-03 02:52:19', 'Administrator', 'Logged in'),
(118, 1, '2018-12-03 02:52:58', 'Administrator', 'Logged out'),
(119, 17, '2018-12-03 03:19:20', 'Officer', 'Logged out'),
(120, 17, '2018-12-03 03:25:40', 'Officer', 'Logged out'),
(121, 1, '2018-12-03 03:28:32', 'Administrator', 'Logged in'),
(122, 1, '2018-12-04 00:55:32', 'Administrator', 'Logged in'),
(123, 1, '2018-12-04 06:53:56', 'Administrator', 'Logged in'),
(124, 1, '2018-12-04 09:56:41', 'Administrator', 'Logged in'),
(125, 1, '2018-12-04 10:12:24', 'Administrator', 'Logged out'),
(126, 13, '2018-12-04 10:12:29', 'Instructor', 'Logged in'),
(127, 1, '2019-04-02 16:53:11', 'Administrator', 'Logged in'),
(128, 1, '2019-04-02 16:53:41', 'Administrator', 'Logged out'),
(129, 1, '2019-04-02 16:55:04', 'Administrator', 'Logged in'),
(130, 1, '2019-04-02 16:55:25', 'Administrator', 'Logged out'),
(131, 18, '2019-04-02 16:55:30', 'Instructor', 'Logged in'),
(132, 18, '2019-04-02 16:58:42', 'Instructor', 'Logged out'),
(133, 1, '2019-04-02 17:01:21', 'Administrator', 'Logged in'),
(134, 1, '2019-04-02 17:04:13', 'Administrator', 'Logged out'),
(135, 18, '2019-04-02 17:04:34', 'Instructor', 'Logged in'),
(136, 18, '2019-04-02 17:06:34', 'Instructor', 'Logged out'),
(137, 1, '2019-04-02 17:06:39', 'Administrator', 'Logged in'),
(138, 1, '2019-04-02 17:07:23', 'Administrator', 'Logged out'),
(139, 1, '2019-04-02 17:07:29', 'Administrator', 'Logged in'),
(140, 1, '2019-04-02 17:08:45', 'Administrator', 'Logged out');

-- --------------------------------------------------------

--
-- Table structure for table `tblsection`
--

CREATE TABLE IF NOT EXISTS `tblsection` (
`SECTIONID` int(11) NOT NULL,
  `SECTION` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsection`
--

INSERT INTO `tblsection` (`SECTIONID`, `SECTION`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tblsemester`
--

CREATE TABLE IF NOT EXISTS `tblsemester` (
`SEMID` int(11) NOT NULL,
  `SEMESTER` varchar(90) NOT NULL,
  `SETSEM` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsemester`
--

INSERT INTO `tblsemester` (`SEMID`, `SEMESTER`, `SETSEM`) VALUES
(1, 'First', 0),
(2, 'Second', 0),
(3, 'Summer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

CREATE TABLE IF NOT EXISTS `tblstuddetails` (
`DETAIL_ID` int(11) NOT NULL,
  `GUARDIAN` varchar(255) NOT NULL,
  `GUARDIAN_ADDRESS` varchar(255) NOT NULL,
  `GCONTACT` varchar(40) NOT NULL,
  `IDNO` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstuddetails`
--

INSERT INTO `tblstuddetails` (`DETAIL_ID`, `GUARDIAN`, `GUARDIAN_ADDRESS`, `GCONTACT`, `IDNO`) VALUES
(1, 'Bless Paredes', '', '09306587988', '2018-SC-0001'),
(2, '', '', '', '15-SC-0836');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE IF NOT EXISTS `tblstudent` (
`S_ID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `MNAME` varchar(40) NOT NULL,
  `SEX` varchar(10) NOT NULL DEFAULT 'Male',
  `BDAY` date NOT NULL,
  `BPLACE` text NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `AGE` int(30) NOT NULL,
  `NATIONALITY` varchar(40) NOT NULL,
  `RELIGION` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(40) NOT NULL,
  `HOME_ADD` text NOT NULL,
  `ACC_USERNAME` varchar(255) NOT NULL,
  `ACC_PASSWORD` text NOT NULL,
  `YEARLEVEL` int(11) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `STUDPHOTO` varchar(255) NOT NULL,
  `ACCOUNTTYPE` varchar(90) NOT NULL DEFAULT 'Student'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `ACC_USERNAME`, `ACC_PASSWORD`, `YEARLEVEL`, `COURSE_ID`, `STUDPHOTO`, `ACCOUNTTYPE`) VALUES
(1, '2018-SC-0001', 'Annie', 'Paredes', 'L', 'Female', '1990-11-11', 'Binalbagan City', 'Single', 0, '09206589888', 'Catholic', '09206589888', 'Binalbagan City', '2018-SC-0001', '0bd6f980e6605d114f65981d40c8259d66ec7c49', 0, 52, 'student_image/customerCLIP.jpg', 'Officer'),
(2, '15-SC-0836', 'JASON', 'ALCANTARA', 'L', 'Male', '1999-02-05', '', 'Select', 0, '', '', '', 'SAN CARLOS CITY, PANGASINAN', '15-SC-0836', '30a8fe2aa9307a1cbd8ec717e3f64e780d4398b7', 0, 52, 'student_image/invoiceCLIP.jpg', 'Officer');

-- --------------------------------------------------------

--
-- Table structure for table `tblsy`
--

CREATE TABLE IF NOT EXISTS `tblsy` (
`AYID` int(11) NOT NULL,
  `SY` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsy`
--

INSERT INTO `tblsy` (`AYID`, `SY`) VALUES
(1, '2000-2001');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE IF NOT EXISTS `useraccounts` (
`ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `EMPID` varchar(90) NOT NULL,
  `POSITION` varchar(90) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `EMPID`, `POSITION`, `USERIMAGE`) VALUES
(1, 'Harry Den', 'harry', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', '1234', '', 'photos/LoginRed.jpg'),
(13, 'janobe', 'i', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'Instructor', '', '', ''),
(14, 'Annie Paredes', '2018-SC-0001', '0bd6f980e6605d114f65981d40c8259d66ec7c49', 'Officer', '2018-SC-0001', 'President', ''),
(15, 'Evelyn B. Lomboy', 'SNCA-0001', '5bce3b6bb2c3dabfc8d74b2ef25cd32876a4f214', 'Instructor', '', '', ''),
(17, 'JASON ALCANTARA', '15-SC-0836', '30a8fe2aa9307a1cbd8ec717e3f64e780d4398b7', 'Officer', '15-SC-0836', 'Vice-President', ''),
(18, 'bruno', 'bruno', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Instructor', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`COURSE_ID`), ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
 ADD PRIMARY KEY (`GRADE_ID`), ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
 ADD PRIMARY KEY (`STUDSUBJ_ID`), ADD KEY `IDNO` (`IDNO`), ADD KEY `SUBJ_ID` (`SUBJ_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`SUBJ_ID`), ADD KEY `COURSE_ID` (`COURSE_ID`);

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
 ADD PRIMARY KEY (`ANNOUNCEMENTID`);

--
-- Indexes for table `tblauto`
--
ALTER TABLE `tblauto`
 ADD PRIMARY KEY (`ID`), ADD KEY `autocode` (`autocode`);

--
-- Indexes for table `tblexpenses`
--
ALTER TABLE `tblexpenses`
 ADD PRIMARY KEY (`EXPENSEID`);

--
-- Indexes for table `tblfees`
--
ALTER TABLE `tblfees`
 ADD PRIMARY KEY (`FEEID`);

--
-- Indexes for table `tblinstructorsubject`
--
ALTER TABLE `tblinstructorsubject`
 ADD PRIMARY KEY (`INST_ID`);

--
-- Indexes for table `tbllevel`
--
ALTER TABLE `tbllevel`
 ADD PRIMARY KEY (`LEVELID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
 ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblsection`
--
ALTER TABLE `tblsection`
 ADD PRIMARY KEY (`SECTIONID`);

--
-- Indexes for table `tblsemester`
--
ALTER TABLE `tblsemester`
 ADD PRIMARY KEY (`SEMID`);

--
-- Indexes for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
 ADD PRIMARY KEY (`DETAIL_ID`), ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
 ADD PRIMARY KEY (`S_ID`), ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblsy`
--
ALTER TABLE `tblsy`
 ADD PRIMARY KEY (`AYID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
 ADD PRIMARY KEY (`ACCOUNT_ID`), ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
MODIFY `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
MODIFY `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
MODIFY `ANNOUNCEMENTID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2018007;
--
-- AUTO_INCREMENT for table `tblauto`
--
ALTER TABLE `tblauto`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblexpenses`
--
ALTER TABLE `tblexpenses`
MODIFY `EXPENSEID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblfees`
--
ALTER TABLE `tblfees`
MODIFY `FEEID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblinstructorsubject`
--
ALTER TABLE `tblinstructorsubject`
MODIFY `INST_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbllevel`
--
ALTER TABLE `tbllevel`
MODIFY `LEVELID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `tblsection`
--
ALTER TABLE `tblsection`
MODIFY `SECTIONID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblsemester`
--
ALTER TABLE `tblsemester`
MODIFY `SEMID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblsy`
--
ALTER TABLE `tblsy`
MODIFY `AYID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
