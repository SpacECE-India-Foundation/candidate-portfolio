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
  `about` varchar(100) NOT NULL,
  `department` varchar(30) NOT NULL,
  `assignment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `name`, `mobile`, `gender`, `hobbies`, `image`, `dob`, `regid`, `college`, `role`, `course`, `token`, `joindate`, `about`, `department`, `assignment`) VALUES
(1, 'admin@gmail.com', ' 3e9fd42e162f89f36b1f424168be8cc9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '993b98dea8ef3c681748fa5763b5afd3', '', '', 'Intern Webdevelopmen', 'assignment1'),
(2, 'bikash1@gmail.com', 'bikash@123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', 'Intern VideoEditing', ''),
(3, 'KAHNU CHARAN SAHOO', 'kanhu1@gmai.com', '5d6cf44d8e83dafabaf2', 6370319676, 'm', 'singin', '27.01.2022_07.52.14_REC.png', '0000-00-00 00:00:00', 234556, '', '', '', '', '', '', 'Intern EducationPolicy', ''),
(4, 'Binapani pradhan', 'Binapani', '5d96b8e45c1c20d3fb40', 89765432, 'm', 'reading', '27.01.2022_07.52.14_REC.png', '1967-10-18 00:00:00', 1234567, '', '', '', '', '', '', 'Intern Reserch', ''),
(5, 'Lipa@gmail.com', 'ea20c67b31b324d79829', 'ea20c67b31b324d79829', 890765463, 'f', 'singin', '27.01.2022_07.52.14_REC.png', '1966-09-18 00:00:00', 4427, '', '', '', '', '', '', 'Intern Project Management', ''),
(6, 'soumya sahoo', 'soumya', 'c46e7e19f91fa88ee049', 90879078, 'f', 'reading', '27.01.2022_07.52.14_REC.png', '1964-10-18 00:00:00', 3718, '', '', '', '', '', '', 'Intern Product Management', ''),
(7, 'Babuna', 'babuna1@gmail.com', '706e9244bbaa23d18495', 657897643, 'f', 'reading', '27.01.2022_07.52.14_REC.png', '1966-10-18 00:00:00', 2379, '', '', '', '', '', '', 'Intern Graphics', ''),
(8, 'gyana@gmail.com', '351cc357216a32314c6600ef825d8e60', 'gyana', 90786534, 'm', 'reading', '27.01.2022_07.52.14_REC.png', '1985-11-19 00:00:00', 1764, '', '', '', '', '', '', 'Intern Financial Accountant', ''),
(9, 'gada@gmail.com', ' 202cb962ac59075b964b07152d234b70', 'gadadhar pradhan', 67896754, 'm', 'singin', '27.01.2022_07.52.14_REC.png', '1966-11-20 00:00:00', 2472, '', '', '', '', '', '', 'Intern Digital Marketing', ''),
(10, 'khandareumesh12@gmail.com', '3e9fd42e162f89f36b1f424168be8cc9', 'Umesh', NULL, 'Male', NULL, '27.01.2022_07.52.14_REC.png', NULL, NULL, '', ' Student', 'Computer Science', '897bdaef5f7de04deae8e65ff6b01393', '07-01-2022', 'I am Good Student', 'Intern HR', 'This is assignment 1 for web devloper'),
(11, 'khandareumesh13@gmail.com', 'fd417faca7cd456dee7c56b73a864120', 'khandare', NULL, 'Male', NULL, 'teacher-5.jpg', NULL, NULL, '', 'student', '', '', '', '', ' Intern Android Development', ''),
(12, 'rm@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ramesh', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'Lamp Stack Developme', '', '', '', '', 'Lamp Stack Development', 'This is assignment 3 for web devloper'),
(13, 'sandesh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sandesh', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'Cloud Computing', '', '', '', '', 'Cloud Computing', ''),
(14, 'asdfads@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'adfaadf', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'MERN Stack Developme', '', '', '', '', 'MERN Stack Development', ''),
(15, 'sfdgsdf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sfgrsdafgs', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'Marketing', '', '', '', '', 'Marketing', ''),
(16, 'zfdgzd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'zdfgzfg', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'Sales', '', '', '', '', 'Sales', ''),
(17, 'fgsdfg@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'zdfgdf', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'Software Testing', '', '', '', '', 'Software Testing', ''),
(18, 'dfas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sdfazdf', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'You Tuber', '', '', '', '', 'You Tuber', ''),
(19, 'sfdgsfdg@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sfgsfg', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'SEO', '', '', '', '', 'SEO', ''),
(20, 'ardtfad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sertferft', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'UI UX Developer', '', '', '', '', 'UI UX Developer', ''),
(21, 'dafasdf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dsafasd', NULL, 'Male', NULL, 'WIN_20211012_09_56_13_Pro.jpg', NULL, NULL, '', 'Proposal Writing', '', '', '', '', 'Proposal Writing', ''),
(22, '', '', NULL, NULL, NULL, NULL, NULL, '2022-03-14 07:57:11', NULL, '', '', '', '', '', '', '', ''),
(23, '', '', NULL, NULL, NULL, NULL, NULL, '2022-03-14 08:06:22', NULL, '', '', '', '', '', '', '', ''),
(24, '', '', NULL, NULL, NULL, NULL, NULL, '2022-03-14 08:06:22', NULL, '', '', '', '', '', '', '', ''),
(25, 'sakshi@gmail.com', 'b73a3203047396075ccac51f92358f6e', 'Sakshi Kapote', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'This is assignment 3 for web devloper'),
(0, 'kapotesakshi29@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sakshi Kapote', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'sakhsi12@gmail.com', 'eb8db0a69a7e675a2f7b3674549cfc6c', 'Sakshi Kapote', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'sakshi29@gmail.com', 'f367e351ffcce4e0e01fc20365e85157', 'sakshi', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'sakshi23@gmail.com', 'cdb0d7272ad8f269dab5d56217fd71d9', 'sakshi', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'sakshi124@gmail.com', '01c71047de52404792350ac01f68a8bc', 'sakshi24', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'vir@gmail.com', '0f8cc1e8113f79744e6a6e1b9af841c7', 'viraaj', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'sahil@gmail.com', 'a3842f1ab3ab14992cb4143d57efd65d', 'sahil', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'anirudh@gmail.com', 'd7f01443fe819e97e0d051cc4710f87e', 'anirudh', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'viraj@gmail.com', '4d243a77ed1cfed2170fdff2f883d32c', 'viraj', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'riddhima@gmail.com', 'ace49e9fe942a50e2cab5444f89f7111', 'riddhima', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'rohit@gmail.com', '2266f197942a5fd27aa817dab9cdfb4f', 'rohit', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'mamoon@gmail.com', '77feaa6e50ee5499aae141e06c29b4fb', 'mamoon', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'kirti@gmail.com', 'd74169f9ee74075dafeb070e6c05d4ec', 'kirti', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'mangesh@gmail.com', 'a179c9bb85c3f96cb8c615d4e5a054c8', 'mangesh', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'saad@gmail.com', '9d1aafee1a79ee7f90ce1bdd3d2423c4', 'saadu', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'dhanjay@gmail.com', '360826576e035fb245d949586f996376', 'dhanjay', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'SPACE@YAHOO.COM', '422ae6c1a764139c7801954234a675d9', 'SpaceEce', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'chanda@gmail.com', 'd5fcee9c93222d8036a8de56f874bc9e', 'chanda', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'gita@gmail.com', '744f2337dcc4383ef8ffca565afbe982', 'gitaa', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'alia@gmail.com', '322c92e0649ca13f0baefed02a0040d2', 'aliab', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'sarika@gmail.com', '317dd8539945b4c61ace0d54bc4b10ce', 'sarika', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'kanchan@gmail.com', '15b711a2d1f5de0c410155ecd0e8c742', 'kanchan', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'tinaa@gmail.com', '4417bb1016472ac0c23f306ff11d413a', 'tinaa', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'shyla@gmail.com', 'e1dd7723ddc3da6ac0cca2b6a3d63531', 'shyla', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'kamlaa@gmail.com', '68ad75cfd53566c3411c4a99aee7a980', 'kamlaa', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'shreya@gmail.com', 'f71723993667440293d76beb1a78e41b', 'Shreya', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'ritwik@gmail.com', 'e0ea942f0b8c6dca1586d6bdd8f97a77', 'ritwik', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'neha@gmail.com', 'f500ee65966893a310708363e8103d7e', 'nehaj', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'varun@gmail.com', 'ce38de50c3223fb5ea4d74716abb15d2', 'varun', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'surbhi@gmail.com', 'a698940486d6ddcc580eb6615a5e0404', 'surbhi', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'palak@gmail.com', '462b8007ee5205bd85056a632b7fede8', 'palak', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'cherry@gmail.com', '2fe5dbe9984d710f52b1bdbc44f4c630', 'cherry', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'rahul@gmail.com', 'bf58d3ae3a4f63fdc9719204846e3ffd', 'rahul', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'riddhi@gmail.com', 'e1828a75f734524fe58c27099c7974ad', 'riddhi', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'annaya@gmail.com', '9ee144af02291aff205fa44f571c2f99', 'annaya', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'sushil@gmail.com', '3615df87d1e31292f135d4de5fa5aa02', 'sushil', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'kareena@gmail.com', '98b84c217a4851516b0c1f96524ade58', 'kareena', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'ranbir@gmail.com', '571e0ff6d3d7640ee5599d7119e4fa1f', 'ranbir', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'sunil@gmail.com', '6e5e45ea9b0fbe6deedcf33cb3f084a6', 'sunil', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'akshay@gmail.com', '83862d1e9449aee54ad8bb3a11632bbe', 'akshay', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'putin@gmail.com', '16149dbb4c291db75636f52095192243', 'putin', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'arohi@gmail.com', 'ad175052d37f73fc03b37483a2e3cd25', 'arohi', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'katyy@gmail.com', 'eeb3bbe4d25c194c84234c1ce608f318', 'katyy', NULL, 'Femal', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'kimmy@gmail.com', 'a59644941f9b9aeb56b298fcd5ced51d', 'kimmy', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'ROBBY@GMAIL.COM', '86979c3aa1566be521d3a94fc80135ba', 'ROBBY', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'student', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'suman@gmail.com', 'bae151ce301ffc35dac6f299b5c1e25b', 'suman', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS'),
(0, 'nachi@gmail.com', '0f7f5c711f49bb1541b6e8c566e0e2f8', 'nachi', NULL, 'Male', NULL, 'Screenshot (1).png', NULL, NULL, '', 'teacher', '', '', '', '', 'Web Development', 'CREATE A WEBSITE FOR A FOUNDATION USING HTML AND CSS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



