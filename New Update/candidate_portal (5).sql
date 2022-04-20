-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 02:28 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`, `gender`, `college`) VALUES
(1, 'admin@gmail.com', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('55892169bf6a7', '55892169d2efc'),
('5589216a3646e', '5589216a48722'),
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('607336aa8c987', '607336aa961b5'),
('607336aacedd1', '607336aadc68e'),
('607336ab244aa', '607336ab31664');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `cover_letter` text NOT NULL,
  `position_id` int(30) NOT NULL,
  `resume_path` text NOT NULL,
  `process_id` tinyint(30) NOT NULL DEFAULT 0 COMMENT '0=for review\r\n',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `contact`, `address`, `cover_letter`, `position_id`, `resume_path`, `process_id`, `date_created`) VALUES
(2, 'John', 'C', 'Smith', 'Male', 'jsmith@sample.com', '+18456-5455-55', 'Sample Address', 'Good Day,\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, '1601271300_sample.pdf', 0, '2020-09-28 13:35:38'),
(0, '', '', '', 'Male', '', '', '', '', 2, '', 0, '2022-02-18 17:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `eduid` int(11) NOT NULL,
  `fromyear` varchar(20) NOT NULL,
  `toyear` varchar(20) NOT NULL,
  `college` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`eduid`, `fromyear`, `toyear`, `college`, `course`, `description`) VALUES
(1, '2002', '2005', 'CONSECTETUR ADIPISICING ELIT', 'WEB DESIGN', 'Web Designing course '),
(2, '2007', '2009', 'SED DO EIUSMOD', 'GRAPHIC DESIGN', 'Graphic Design course');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `empid` int(11) NOT NULL,
  `fromyear` varchar(20) NOT NULL,
  `toyear` varchar(20) NOT NULL,
  `company` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`empid`, `fromyear`, `toyear`, `company`, `designation`, `description`) VALUES
(1, '2005', '2007', 'COMMODO CONSEQUAT', 'WEB DESIGNER', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.'),
(2, '2009', '2012', 'SED DO EIUSMOD', 'SENIOR DESIGNER', 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(3, '2012', 'present', 'COMMODO CONSEQUAT', 'ART DIRECTOR', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('60730932a3d1b', 'Demo Test', 'test@feedback.com', 'Testing Feedbacks', 'This is a demo text for testing purpose', '2021-04-11', '04:35:30pm'),
('607309ab640d8', 'Chris', 'chris@gmail.com', 'Regard System', 'this is a demo text!', '2021-04-11', '04:37:31pm'),
('60730a627e21f', 'Oliver', 'oliver@gmail.com', 'Bug', 'demo demo', '2021-04-11', '04:40:34pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('sunnygkp10@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 04:01:26'),
('sunnygkp10@gmail.com', '558920ff906b8', 4, 2, 2, 0, '2015-06-23 08:02:09'),
('avantika420@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 09:03:04'),
('avantika420@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 09:19:39'),
('mi5@hollywood.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 09:42:56'),
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 10:41:50'),
('clancy@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 07:54:37'),
('sunnygkp10@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 10:57:21'),
('doe@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 11:50:17'),
('james@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 11:56:12'),
('james@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 11:56:54'),
('steeve@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 12:14:46'),
('steeve@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 12:15:20'),
('steeve@gmail.com', '6073360884420', 6, 3, 3, 0, '2021-04-11 12:20:15'),
('gada@gmail.com', '6073360884420', -4, 2, 0, 2, '2022-02-02 13:36:00'),
('gada@gmail.com', '6073360884420', -4, 2, 0, 2, '2022-02-02 13:36:00'),
('gada@gmail.com', '558922ec03021', 2, 1, 1, 0, '2022-02-02 13:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'mamun', '1234', 'Abdullah Al Mamun', 'mamunwitchbug@gmail.com'),
(3, 'jinat', 'jinat', 'Jinat Afroj', 'afrojjinat@gmail.com'),
(6, 'admin', '1234', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`) VALUES
(4, 'niki@gmail.com', 'Hello', 'user how areyou.....', '2016-06-29 12:07:19'),
(6, 'niki@gmail.com', 'adfdfdfdfd', 'bbbbbbbb', '2016-07-31 15:38:35'),
(7, 'ravi@gmail.com', 'adfdfdfdfd', 'aaaaaaaaaaaaaa', '2016-07-31 15:38:35'),
(8, 'khandareumesh12@gmail.com', 'Candidate Portal', 'new Candidate', '2022-02-07 19:27:32'),
(9, 'khandareumesh12@gmail.com', 'dghd', 'fgsf', '2022-02-09 22:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('55892169bf6a7', 'usermod', '55892169d2efc'),
('55892169bf6a7', 'useradd', '55892169d2f05'),
('55892169bf6a7', 'useralter', '55892169d2f09'),
('55892169bf6a7', 'groupmod', '55892169d2f0c'),
('5589216a3646e', '751', '5589216a48713'),
('5589216a3646e', '752', '5589216a4871a'),
('5589216a3646e', '754', '5589216a4871f'),
('5589216a3646e', '755', '5589216a48722'),
('558922117fcef', 'echo', '5589221195248'),
('558922117fcef', 'print', '558922119525a'),
('558922117fcef', 'printf', '5589221195265'),
('558922117fcef', 'cout', '5589221195270'),
('55892211e44d5', 'int a', '55892211f1f97'),
('55892211e44d5', '$a', '55892211f1fa7'),
('55892211e44d5', 'long int a', '55892211f1fb4'),
('55892211e44d5', 'int a$', '55892211f1fbd'),
('558922894c453', 'cin>>a;', '558922895ea0a'),
('558922894c453', 'cin<<a;', '558922895ea26'),
('558922894c453', 'cout>>a;', '558922895ea34'),
('558922894c453', 'cout<a;', '558922895ea41'),
('558922899ccaa', 'cout', '55892289aa7cf'),
('558922899ccaa', 'cin', '55892289aa7df'),
('558922899ccaa', 'print', '55892289aa7eb'),
('558922899ccaa', 'printf', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('607336aa8c987', 'module.expose', '607336aa961a7'),
('607336aa8c987', 'module', '607336aa961b1'),
('607336aa8c987', 'module.exports', '607336aa961b5'),
('607336aa8c987', 'all', '607336aa961b9'),
('607336aacedd1', 'nodejs codeastro.js', '607336aadc686'),
('607336aacedd1', 'node codeastro.js', '607336aadc68e'),
('607336aacedd1', 'codeastro.js', '607336aadc691'),
('607336aacedd1', 'none', '607336aadc694'),
('607336ab244aa', 'npm --version', '607336ab31664'),
('607336ab244aa', 'npm --ver', '607336ab31670'),
('607336ab244aa', 'npm help', '607336ab31672'),
('607336ab244aa', 'none', '607336ab31673');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pid` int(11) NOT NULL,
  `page` varchar(20) NOT NULL,
  `data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pid`, `page`, `data`) VALUES
(1, 'home', '<p>Stylish, flat, easy customizable and awesome looking wordpress theme with original icons!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(450) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(55) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `uid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`uid`, `image`, `fname`, `lname`, `designation`, `phone`, `email`, `website`) VALUES
(1, 'images/user_photo.jpg', 'John', 'Johnson', 'Graphic & Web Designer', '+91 9898989898', 'J.johnson@gmail.com', 'http://www.jjohnson.com');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `subtitle` varchar(30) NOT NULL,
  `filter` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `photo`, `title`, `subtitle`, `filter`) VALUES
(1, 'images/portfolio1.jpg', 'Vestibulum varius ligula', 'Vivamus suscipit sem', 'web'),
(2, 'images/portfolio4.jpg', 'Vestibulum varius ligula', 'Vivamus suscipit sem', 'graphic'),
(3, 'images/portfolio6.jpg', 'Vestibulum varius ligula', 'Vivamus suscipit sem', 'photo'),
(4, 'images/portfolio10.jpg', 'Vestibulum varius ligula', 'Vivamus suscipit sem', 'photo');

-- --------------------------------------------------------

--
-- Table structure for table `project_list`
--

CREATE TABLE `project_list` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `manager_id` int(30) NOT NULL,
  `user_ids` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_list`
--

INSERT INTO `project_list` (`id`, `name`, `description`, `status`, `start_date`, `end_date`, `manager_id`, `user_ids`, `date_created`) VALUES
(1, 'Sample Project', '								&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elementum, metus vitae malesuada mollis, urna nisi luctus ligula, vitae volutpat massa eros eu ligula. Nunc dui metus, iaculis id dolor non, luctus tristique libero. Aenean et sagittis sem. Nulla facilisi. Mauris at placerat augue. Nullam porttitor felis turpis, ac varius eros placerat et. Nunc ut enim scelerisque, porta lacus vitae, viverra justo. Nam mollis turpis nec dolor feugiat, sed bibendum velit placerat. Etiam in hendrerit leo. Nullam mollis lorem massa, sit amet tincidunt dolor lacinia at.&lt;/span&gt;							', 0, '2020-11-03', '2021-01-20', 2, '3,4,5', '2020-12-03 09:56:56'),
(2, 'Sample Project 102', 'Sample Only', 0, '2020-12-02', '2020-12-31', 2, '3', '2020-12-03 13:51:54'),
(3, 'KAHNU CHARAN  SAHOO', 'sdfghjkl', 3, '2022-02-24', '2022-03-03', 2, '4', '2022-02-02 15:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558920ff906b8', '55892169bf6a7', 'what is command for changing user information??', 4, 1),
('558920ff906b8', '5589216a3646e', 'what is permission for view only for other??', 4, 2),
('558921841f1ec', '558922117fcef', 'what is command for print in php??', 4, 1),
('558921841f1ec', '55892211e44d5', 'which is a variable of php??', 4, 2),
('5589222f16b93', '558922894c453', 'what is correct statement in c++??', 4, 1),
('5589222f16b93', '558922899ccaa', 'which command is use for print the output in c++?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('6073360884420', '607336aa8c987', 'The node.js modules can be exposed using', 4, 1),
('6073360884420', '607336aacedd1', 'Which statement executes the code of codeastro.js file?', 4, 2),
('6073360884420', '607336ab244aa', 'How can we check the current version of NPM?', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558920ff906b8', 'Linux : File Managment', 2, 1, 2, 5, '', 'linux', '2015-06-23 03:33:59'),
('558921841f1ec', 'Php Coding', 2, 1, 2, 5, '', 'PHP', '2015-06-23 03:36:12'),
('5589222f16b93', 'C++ Coding', 2, 1, 2, 5, '', 'c++', '2015-06-23 03:39:03'),
('558922ec03021', 'Networking', 2, 1, 2, 5, '', 'networking', '2015-06-23 03:42:12'),
('6073360884420', 'Nodejs Term', 2, 2, 3, 2, 'Basic test for nodejs terms', 'nodejs', '2021-04-11 12:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('sunnygkp10@gmail.com', 5, '2021-04-11 10:57:17'),
('avantika420@gmail.com', 8, '2015-06-23 09:19:39'),
('mi5@hollywood.com', 4, '2015-06-23 09:42:56'),
('nik1@gmail.com', 1, '2015-06-23 10:41:50'),
('doe@gmail.com', 4, '2021-04-11 11:50:17'),
('clancy@gmail.com', 4, '2021-04-11 07:54:37'),
('james@gmail.com', 14, '2021-04-11 12:02:53'),
('steeve@gmail.com', 14, '2021-04-11 12:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_status`
--

CREATE TABLE `recruitment_status` (
  `id` int(30) NOT NULL,
  `status_label` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruitment_status`
--

INSERT INTO `recruitment_status` (`id`, `status_label`, `status`) VALUES
(1, 'For Initial Interview', 1),
(2, 'PASSED II', 1),
(3, 'FAILED II', 1),
(4, 'For Final Interview', 1),
(5, 'PASSED FI', 1),
(6, 'FAILED FI', 1),
(7, 'FOR POOLING', 1),
(8, 'Job Offer', 1),
(9, 'Hired', 1),
(10, 'Withdraw Application', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(200) NOT NULL,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `book`) VALUES
(23, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(24, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(25, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(26, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(27, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(28, 'Super Comfort', '2017-05-19', '2017-05-22', 'Jinat Afroj', 1524587558, 'true'),
(29, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(30, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(31, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(32, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(33, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(34, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(35, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(36, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(37, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('Duplex', 5, 5, 0, 2, 'single', 'AC, TV, Wifi', 1500),
('Family', 5, 5, 0, 2, 'double', 'Sofa, TV, WIFI, Balcony, AC.', 3500),
('Super Comfort', 5, 5, 0, 1, 'double', 'AC, TV, WIFI', 2200);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skillid` int(11) NOT NULL,
  `skilltype` varchar(20) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `skillvalue` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skillid`, `skilltype`, `skill`, `skillvalue`) VALUES
(1, 'progskill', 'Wordpress', 90),
(2, 'progskill', 'PHP', 80),
(3, 'progskill', 'HTML', 99),
(4, 'progskill', 'CSS', 90),
(5, 'progskill', 'MySQL', 70),
(6, 'progskill', 'JavaScript', 99),
(7, 'graphskill', 'AdobePhotoshop', 99),
(8, 'graphskill', 'AdobeIllustrator', 80),
(9, 'graphskill', 'AdobeIndesign', 70),
(10, 'graphskill', 'CorelDraw', 60),
(11, 'graphskill', '3DMax', 50);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `uid` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`uid`, `facebook`, `twitter`, `googleplus`, `instagram`) VALUES
(1, '#fb', '#tw', '#gp', '#inst');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(220) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `report` varchar(2000) NOT NULL,
  `yoa` varchar(45) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `name`, `last_name`, `report`, `yoa`, `parent`, `dob`, `gender`, `file`) VALUES
(1, 'MS17-e32c', 'Taola', 'Remilekun', 'She is a bad girl... run away from her!', '2012', '08138652645', '1993-05-05', 'Female', 'your_site_name_4b7720e1d717573bf412a49b43537063.png'),
(2, 'MS17-cc64', 'Umesh', 'Khandare', 'done', '2022', '08390139031', '1999-04-12', 'Male', 'your_site_name_5272179ad28efe90e4e29fbfc9e4de8d.webp');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Task Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `id` int(30) NOT NULL,
  `project_id` int(30) NOT NULL,
  `task` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_list`
--

INSERT INTO `task_list` (`id`, `project_id`, `task`, `description`, `status`, `date_created`) VALUES
(1, 1, 'Sample Task 1', '								&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Fusce ullamcorper mattis semper. Nunc vel risus ipsum. Sed maximus dapibus nisl non laoreet. Pellentesque quis mauris odio. Donec fermentum facilisis odio, sit amet aliquet purus scelerisque eget.&amp;nbsp;&lt;/span&gt;													', 3, '2020-12-03 11:08:58'),
(2, 1, 'Sample Task 2', 'Sample Task 2							', 1, '2020-12-03 13:50:15'),
(3, 2, 'Task Test', 'Sample', 1, '2020-12-03 13:52:25'),
(4, 2, 'test 23', 'Sample test 23', 1, '2020-12-03 13:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(1, 'First', 1, 'C', '2022-01-01 05:00:57', '2022-01-01 05:00:57'),
(2, 'Second', 2, 'A', '2022-01-01 05:00:57', '2022-01-01 05:00:57'),
(4, 'Fourth', 4, 'C', '2022-01-01 05:00:57', '2022-01-01 05:00:57'),
(5, 'Sixth', 6, 'A', '2022-01-01 05:00:57', '2022-01-01 05:00:57'),
(6, 'Sixth', 6, 'B', '2022-01-01 05:00:57', '2022-01-01 05:00:57'),
(7, 'Seventh', 7, 'B', '2022-01-01 05:00:57', '2022-01-01 05:00:57'),
(8, 'Eight', 8, 'A', '2022-01-01 05:00:57', '2022-01-01 05:00:57'),
(9, 'Tenth', 10, 'A', '2022-01-01 09:47:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `id` int(11) NOT NULL,
  `noticeTitle` varchar(255) DEFAULT NULL,
  `noticeDetails` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`id`, `noticeTitle`, `noticeDetails`, `postingDate`) VALUES
(2, 'Notice regarding result Delearation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit ut aliquam purus. Vel risus commodo viverra maecenas. Et netus et malesuada fames ac turpis egestas sed. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Ornare arcu odio ut sem nulla pharetra diam. Vel pharetra vel turpis nunc eget lorem dolor sed. Velit ut tortor pretium viverra suspendisse. In ornare quam viverra orci sagittis eu. Viverra tellus in hac habitasse. Donec massa sapien faucibus et molestie. Libero justo laoreet sit amet cursus sit amet dictum. Dignissim diam quis enim lobortis scelerisque fermentum dui.\r\n\r\nEget nulla facilisi etiam dignissim. Quisque non tellus orci ac. Amet cursus sit amet dictum sit amet justo donec. Interdum velit euismod in pellentesque massa. Condimentum lacinia quis vel eros donec ac odio. Magna eget est lorem ipsum dolor. Bibendum at varius vel pharetra vel turpis nunc eget lorem. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Massa tincidunt dui ut ornare lectus sit amet est placerat. Nisi quis eleifend quam adipiscing vitae.', '2022-01-01 09:04:58'),
(3, 'Test Notice', 'This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  ', '2022-01-01 09:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(2, 1, 1, 2, 100, '2022-01-01 05:00:57', NULL),
(3, 1, 1, 1, 80, '2022-01-01 05:00:57', NULL),
(4, 1, 1, 5, 78, '2022-01-01 05:00:57', NULL),
(5, 1, 1, 4, 60, '2022-01-01 05:00:57', NULL),
(6, 2, 4, 2, 90, '2022-01-01 05:00:57', NULL),
(7, 2, 4, 1, 75, '2022-01-01 05:00:57', NULL),
(8, 2, 4, 5, 56, '2022-01-01 05:00:57', NULL),
(9, 2, 4, 4, 80, '2022-01-01 05:00:57', NULL),
(10, 4, 7, 2, 54, '2022-01-01 05:00:57', NULL),
(11, 4, 7, 1, 85, '2022-01-01 05:00:57', NULL),
(12, 4, 7, 5, 55, '2022-01-01 05:00:57', NULL),
(13, 4, 7, 7, 65, '2022-01-01 05:00:57', NULL),
(14, 5, 8, 2, 75, '2022-01-01 05:00:57', NULL),
(15, 5, 8, 1, 56, '2022-01-01 05:00:57', NULL),
(16, 5, 8, 5, 52, '2022-01-01 05:00:57', NULL),
(17, 5, 8, 4, 80, '2022-01-01 05:00:57', NULL),
(18, 6, 9, 8, 80, '2022-01-01 09:50:18', NULL),
(19, 6, 9, 8, 70, '2022-01-01 09:50:18', NULL),
(20, 6, 9, 2, 90, '2022-01-01 09:50:18', NULL),
(21, 6, 9, 1, 60, '2022-01-01 09:50:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Sarita', '46456', 'info@phpgurukul.com', 'Female', '1995-03-03', 1, '2022-01-01 05:00:57', NULL, 1),
(2, 'Anuj kumar', '10861', 'anuj@gmail.co', 'Male', '1995-02-02', 4, '2022-01-01 05:00:57', NULL, 0),
(3, 'amit kumar', '2626', 'amit@gmail.com', 'Male', '2014-08-06', 6, '2022-01-01 05:00:57', NULL, 1),
(4, 'rahul kumar', '990', 'rahul01@gmail.com', 'Male', '2001-02-03', 7, '2022-01-01 05:00:57', NULL, 1),
(5, 'sanjeev singh', '122', 'sanjeev01@gmail.com', 'Male', '2002-02-03', 8, '2022-01-01 05:00:57', NULL, 1),
(6, 'Shiv Gupta', '12345', 'shiv34534@gmail.com', 'Male', '2007-01-12', 9, '2022-01-01 09:49:40', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(3, 2, 5, 1, '2022-01-01 05:00:57', NULL),
(4, 1, 2, 1, '2022-01-01 05:00:57', NULL),
(5, 1, 4, 1, '2022-01-01 05:00:57', NULL),
(6, 1, 5, 1, '2022-01-01 05:00:57', NULL),
(8, 4, 4, 1, '2022-01-01 05:00:57', NULL),
(10, 4, 1, 1, '2022-01-01 05:00:57', NULL),
(12, 4, 2, 1, '2022-01-01 05:00:57', NULL),
(13, 4, 5, 1, '2022-01-01 05:00:57', NULL),
(14, 6, 1, 1, '2022-01-01 05:00:57', NULL),
(15, 6, 2, 1, '2022-01-01 05:00:57', NULL),
(16, 6, 4, 1, '2022-01-01 05:00:57', NULL),
(17, 6, 6, 1, '2022-01-01 05:00:57', NULL),
(18, 7, 1, 1, '2022-01-01 05:00:57', NULL),
(19, 7, 7, 1, '2022-01-01 05:00:57', NULL),
(20, 7, 2, 1, '2022-01-01 05:00:57', NULL),
(21, 7, 6, 1, '2022-01-01 05:00:57', NULL),
(22, 7, 5, 0, '2022-01-01 05:00:57', NULL),
(23, 8, 1, 1, '2022-01-01 05:00:57', NULL),
(24, 8, 2, 1, '2022-01-01 05:00:57', NULL),
(25, 8, 4, 1, '2022-01-01 05:00:57', NULL),
(26, 8, 6, 1, '2022-01-01 05:00:57', NULL),
(27, 8, 5, 0, '2022-01-01 05:00:57', NULL),
(28, 9, 1, 1, '2022-01-01 09:48:40', NULL),
(29, 9, 2, 1, '2022-01-01 09:48:43', NULL),
(30, 9, 8, 1, '2022-01-01 09:48:48', NULL),
(31, 9, 8, 1, '2022-01-01 09:48:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Maths', 'MTH01', '2022-01-01 05:00:57', NULL),
(2, 'English', 'ENG11', '2022-01-01 05:00:57', NULL),
(4, 'Science', 'SC1', '2022-01-01 05:00:57', NULL),
(5, 'Music', 'MS', '2022-01-01 05:00:57', NULL),
(6, 'Social Studies', 'SS08', '2022-01-01 05:00:57', NULL),
(7, 'Physics', 'PH03', '2022-01-01 05:00:57', NULL),
(8, 'Chemistry', 'CH65', '2022-01-01 05:00:57', NULL);

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
(0, 'advanced oops', 'advanced oops', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:02:20', 'Computer Science', '356037.pdf', 'not approved yet'),
(0, 'ajax_xml', 'ajax_xml', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:09:09', 'Computer Science', '427195.pdf', 'not approved yet'),
(0, 'ARTIFICIAL INTELLIGENCEr', 'ARTIFICIAL INTELLIGENCEr', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:10:45', 'Computer Science', '428248.pdf', 'not approved yet'),
(0, 'artificial_intelligence_tutorial', 'artificial_intelligence_tutorial', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:11:06', 'Computer Science', '575201.pdf', 'not approved yet'),
(0, 'Basic CSS', 'Basic CSS', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:11:25', 'Computer Science', '166181.pdf', 'not approved yet'),
(0, 'BIG DATA ANALYTICS', 'BIG DATA ANALYTICS', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:11:41', 'Computer Science', '582948.pdf', 'not approved yet'),
(0, 'Big data', 'Big data', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:12:03', 'Computer Science', '602917.pdf', 'not approved yet'),
(0, 'Blockchain Technology', 'Blockchain Technology', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:12:30', 'Computer Science', '446177.pdf', 'not approved yet'),
(0, 'CYBER SECURITY', 'CYBER SECURITY', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:12:48', 'Computer Science', '350129.pdf', 'not approved yet'),
(0, 'cybersecuirty_Basic', 'cybersecuirty_Basic', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:13:09', 'Computer Science', '621876.pdf', 'not approved yet'),
(0, 'information-12-00087-v2', 'information-12-00087-v2', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:13:39', 'Computer Science', '545376.pdf', 'not approved yet'),
(0, 'Introduction to Web Programming', 'Introduction to Web Programming', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:13:59', 'Computer Science', '21003.pdf', 'not approved yet'),
(0, 'Introduction-cyber-security', 'Introduction-cyber-security', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:14:16', 'Computer Science', '937014.pdf', 'not approved yet'),
(0, 'IOT', 'IOT', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:14:35', 'Computer Science', '598845.pdf', 'not approved yet'),
(0, 'JavaScript for beginer', 'JavaScript for beginer', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:15:02', 'Computer Science', '379627.pdf', 'not approved yet'),
(0, 'oop_in_php_tutorial', 'oop_in_php_tutorial', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:15:24', 'Computer Science', '773232.pdf', 'not approved yet'),
(0, 'SMS Gateway', 'SMS Gateway', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:15:42', 'Computer Science', '37214.pdf', 'not approved yet'),
(0, 'SQL_Joins', 'SQL_Joins', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:16:01', 'Computer Science', '902489.pdf', 'not approved yet'),
(0, 'sql-constraints', 'sql-constraints', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:16:19', 'Computer Science', '795822.pdf', 'not approved yet'),
(0, 'ui-software-tools', 'ui-software-tools', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:16:36', 'Computer Science', '548804.pdf', 'not approved yet'),
(0, 'website_development_tutorial', 'website_development_tutorial', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:17:11', 'Computer Science', '884002.pdf', 'not approved yet'),
(0, '-what-is-blockchain-2016 (1)', '-what-is-blockchain-2016 (1)', 'pdf', 'khandareumesh12@gmail.com', '2022-02-16 17:17:28', 'Computer Science', '187966.pdf', 'not approved yet'),
(0, 'CYBER SECURITY', 'CYBER SECURITY', 'pdf', 'khandareumesh12@gmail.com', '2022-02-17 09:19:07', 'Computer Science', '124603.pdf', 'not approved yet');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `regid` int(11) DEFAULT NULL,
  `college` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `token` varchar(100) NOT NULL,
  `joindate` varchar(20) NOT NULL,
  `about` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `name`, `mobile`, `gender`, `hobbies`, `image`, `dob`, `regid`, `college`, `role`, `course`, `token`, `joindate`, `about`) VALUES
(1, 'admin@gmail.com', ' 3e9fd42e162f89f36b1f424168be8cc9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '993b98dea8ef3c681748fa5763b5afd3', '', ''),
(2, 'bikash1@gmail.com', 'bikash@123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', ''),
(3, 'KAHNU CHARAN SAHOO', 'kanhu1@gmai.com', '5d6cf44d8e83dafabaf2', 6370319676, 'm', 'singin', '27.01.2022_07.52.14_REC.png', '0000-00-00 00:00:00', 234556, '', '', '', '', '', ''),
(4, 'Binapani pradhan', 'Binapani', '5d96b8e45c1c20d3fb40', 89765432, 'm', 'reading', '27.01.2022_07.52.14_REC.png', '1967-10-18 00:00:00', 1234567, '', '', '', '', '', ''),
(5, 'Lipa@gmail.com', 'ea20c67b31b324d79829', 'ea20c67b31b324d79829', 890765463, 'f', 'singin', '27.01.2022_07.52.14_REC.png', '1966-09-18 00:00:00', 4427, '', '', '', '', '', ''),
(6, 'soumya sahoo', 'soumya', 'c46e7e19f91fa88ee049', 90879078, 'f', 'reading', '27.01.2022_07.52.14_REC.png', '1964-10-18 00:00:00', 3718, '', '', '', '', '', ''),
(7, 'Babuna', 'babuna1@gmail.com', '706e9244bbaa23d18495', 657897643, 'f', 'reading', '27.01.2022_07.52.14_REC.png', '1966-10-18 00:00:00', 2379, '', '', '', '', '', ''),
(8, 'gyana@gmail.com', '351cc357216a32314c6600ef825d8e60', 'gyana', 90786534, 'm', 'reading', '27.01.2022_07.52.14_REC.png', '1985-11-19 00:00:00', 1764, '', '', '', '', '', ''),
(9, 'gada@gmail.com', ' 202cb962ac59075b964b07152d234b70', 'gadadhar pradhan', 67896754, 'm', 'singin', '27.01.2022_07.52.14_REC.png', '1966-11-20 00:00:00', 2472, '', '', '', '', '', ''),
(10, 'khandareumesh12@gmail.com', '3e9fd42e162f89f36b1f424168be8cc9', 'Umesh', NULL, 'Male', NULL, '27.01.2022_07.52.14_REC.png', NULL, NULL, '', ' Student', 'Computer Science', '897bdaef5f7de04deae8e65ff6b01393', '07-01-2022', 'I am Good Student');

-- --------------------------------------------------------

--
-- Table structure for table `users_todelete`
--

CREATE TABLE `users_todelete` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_todelete`
--

INSERT INTO `users_todelete` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `avatar`, `date_created`, `role`) VALUES
(1, 'Administrator', '', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 1, 'no-image-available.png', '2020-11-26 10:57:04', ''),
(2, 'John', 'Smith', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 2, '1606978560_avatar.jpg', '2020-12-03 09:26:03', ''),
(3, 'Claire', 'Blake', 'cblake@sample.com', '4744ddea876b11dcb1d169fadf494418', 3, '1606958760_47446233-clean-noir-et-gradient-sombre-image-de-fond-abstrait-.jpg', '2020-12-03 09:26:42', ''),
(4, 'George', 'Wilson', 'gwilson@sample.com', 'd40242fb23c45206fadee4e2418f274f', 3, '1606963560_avatar.jpg', '2020-12-03 10:46:41', ''),
(5, 'Mike', 'Williams', 'mwilliams@sample.com', '3cc93e9a6741d8b40460457139cf8ced', 3, '1606963620_47446233-clean-noir-et-gradient-sombre-image-de-fond-abstrait-.jpg', '2020-12-03 10:47:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_productivity`
--

CREATE TABLE `user_productivity` (
  `id` int(30) NOT NULL,
  `project_id` int(30) NOT NULL,
  `task_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `subject` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `user_id` int(30) NOT NULL,
  `time_rendered` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_productivity`
--

INSERT INTO `user_productivity` (`id`, `project_id`, `task_id`, `comment`, `subject`, `date`, `start_time`, `end_time`, `user_id`, `time_rendered`, `date_created`) VALUES
(1, 1, 1, '							&lt;p&gt;Sample Progress&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Test 1&lt;/li&gt;&lt;li&gt;Test 2&lt;/li&gt;&lt;li&gt;Test 3&lt;/li&gt;&lt;/ul&gt;																			', 'Sample Progress', '2020-12-03', '08:00:00', '10:00:00', 1, 2, '2020-12-03 12:13:28'),
(2, 1, 1, '							Sample Progress						', 'Sample Progress 2', '2020-12-03', '13:00:00', '14:00:00', 1, 1, '2020-12-03 13:48:28'),
(3, 1, 2, '							Sample						', 'Test', '2020-12-03', '08:00:00', '09:00:00', 5, 1, '2020-12-03 13:57:22'),
(4, 1, 2, 'asdasdasd', 'Sample Progress', '2020-12-02', '08:00:00', '10:00:00', 2, 2, '2020-12-03 14:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(30) NOT NULL,
  `position` varchar(200) NOT NULL,
  `availability` int(30) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `position`, `availability`, `description`, `status`, `date_created`) VALUES
(2, 'WEB DEVELOPER', 10, '&lt;h2 style=&quot;background: transparent; position: relative;&quot;&gt;URGENT HIRING!!&lt;/h2&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Our company is looking for 10 new Web developer.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3 style=&quot;background: transparent; position: relative;&quot;&gt;Requirements:&lt;/h3&gt;&lt;p&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;PHP Knowledgeable&lt;/li&gt;&lt;li&gt;Wordpress Knowledgeable&lt;/li&gt;&lt;li&gt;node.js Knowledgeable&lt;/li&gt;&lt;li&gt;reactjs Knowledgeable&lt;/li&gt;&lt;li&gt;MySQL Knowledgeable&lt;/li&gt;&lt;/ul&gt;', 1, '2020-09-28 11:24:52'),
(3, 'Sample', 20, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;b style=&quot;margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/b&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 0, '2020-09-28 11:28:38'),
(4, 'Vacancy', 5, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; margin: 0px; padding: 0px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;/p&gt;', 1, '2020-09-28 11:28:50'),
(5, 'Receptionist', 2, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; margin: 0px; padding: 0px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;/p&gt;', 1, '2020-09-28 11:29:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`eduid`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `project_list`
--
ALTER TABLE `project_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`roomname`(100));

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skillid`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD KEY `file_id` (`file_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users_todelete`
--
ALTER TABLE `users_todelete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_productivity`
--
ALTER TABLE `user_productivity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `eduid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skillid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_todelete`
--
ALTER TABLE `users_todelete`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_productivity`
--
ALTER TABLE `user_productivity`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
