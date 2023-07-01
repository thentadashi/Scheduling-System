-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 12:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psuscd`
--

-- --------------------------------------------------------

--
-- Table structure for table `classsched`
--

CREATE TABLE `classsched` (
  `classid` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `m` varchar(50) NOT NULL DEFAULT '0',
  `t` varchar(50) NOT NULL DEFAULT '0',
  `w` varchar(50) NOT NULL DEFAULT '0',
  `th` varchar(50) NOT NULL DEFAULT '0',
  `f` varchar(50) NOT NULL DEFAULT '0',
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_title` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `course_year_section` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sy` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classsched`
--

INSERT INTO `classsched` (`classid`, `day`, `m`, `t`, `w`, `th`, `f`, `time_start`, `time_end`, `fname`, `lname`, `subject_code`, `subject_title`, `room_name`, `course_year_section`, `semester`, `sy`, `department`, `status`) VALUES
(173, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '08:00:00', '09:00:00', 'JB Doria', '', '(ELECTIVE 1) Advance Computer literacy', '', 'Room3', 'BSIT-1a', '1ST', '2022-2023', ' COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(174, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '09:00:00', '10:00:00', 'JB Doria', '', '(SS 103) Advanced Economics', '', 'Room1', 'BSIT-1a', '1ST', '2022-2023', ' COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(180, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '08:00:00', '09:00:00', 'Wennalyn Honrado', '', '(Com 108) Advertising and public Information', '', 'Room4', 'BSIT-2a', '1ST', '2022-2023', ' COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(181, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '10:00:00', '11:00:00', 'JB Doria', '', '(IS 221) Application Development (adv. DBMS)', '', 'Room2', 'BSIT-1a', '1ST', '2022-2023', 'COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(182, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '11:00:00', '12:00:00', 'Wennalyn Honrado', '', '(IS 121) Human Computer Interaction', '', 'Room3', 'BSIT-1a', '1ST', '2022-2023', 'COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(183, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '13:00:00', '14:00:00', 'Wennalyn Honrado', '', '(Com 108) Advertising and public Information', '', 'Room1', 'BSIT-1a', '1ST', '2022-2023', 'COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(184, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '14:00:00', '15:00:00', 'JB Doria', '', '(Com 117) Intro to Communication Research', '', 'Room2', 'BSIT-1a', '1ST', '2022-2023', 'COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(185, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '15:00:00', '16:00:00', 'JB Doria', '', '(Com 108) Advertising and public Information', '', 'Room3', 'BSIT-1a', '1ST', '2022-2023', ' COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(186, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '16:00:00', '17:00:00', 'Wennalyn Honrado', '', '(COMP LIT1) Computer Literacy', '', 'Room3', 'BSIT-1a', '1ST', '2022-2023', 'COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked'),
(189, 'Monday Tuesday Wednesday Thursday Friday ', '1', '1', '1', '1', '1', '20:00:00', '21:00:00', 'JB Doria', '', '(Emajor 6) Afro-Asian Literaure', '', 'Room3', 'BSIT-2a', '1ST', '2022-2023', 'COLLEGE OF TECHNOLOGY AND BUSINESS', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_section` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `course`, `year_section`, `department`, `major`) VALUES
(152, 'BSIT', '1a', 'BSIT', 'Major in Web and Mobile Technologies'),
(153, 'BSIT', '2a', 'BSIT', 'Major in Web and Mobile Technologies'),
(154, 'BSIT', '3a', 'BSIT', 'Major in Web and Mobile Technologies'),
(155, 'BSIT', '4a', 'BSIT', 'Major in Web and Mobile Technologies'),
(156, 'BSBA', '1a', 'BSBA', 'Financial Management'),
(157, 'BSBA', '2a', 'BSBA', 'Financial Management'),
(158, 'BSBA', '3a', 'BSBA', 'Financial Management'),
(159, 'BSBA', '4a', 'BSBA', 'Financial Management'),
(160, 'BSBA', '1a', 'BSBA', 'Marketing Management'),
(161, 'BSBA', '2a', 'BSBA', 'Marketing Management'),
(162, 'BSBA', '3a', 'BSBA', 'Marketing Management'),
(163, 'BSBA', '4a', 'BSBA', 'Marketing Management'),
(164, 'BIT', '1a', 'BIT', 'Automotive Technology'),
(165, 'BIT', '2a', 'BIT', 'Automotive Technology'),
(166, 'BIT', '3a', 'BIT', 'Automotive Technology'),
(167, 'BIT', '4a', 'BIT', 'Automotive Technology'),
(168, 'BIT', '1a', 'BIT', 'Electrical Technology'),
(169, 'BIT', '2a', 'BIT', 'Electrical Technology'),
(170, 'BIT', '3a', 'BIT', 'Electrical Technology'),
(171, 'BIT', '4a', 'BIT', 'Electrical Technology'),
(172, 'BIT', '1a', 'BIT', 'Electronics and Communication Technology'),
(173, 'BIT', '2a', 'BIT', 'Electronics and Communication Technology'),
(174, 'BIT', '3a', 'BIT', 'Electronics and Communication Technology'),
(175, 'BIT', '4a', 'BIT', 'Electronics and Communication Technology'),
(176, 'BIT', '1a', 'BIT', 'Food Services Management'),
(177, 'BIT', '2a', 'BIT', 'Food Services Management'),
(178, 'BIT', '3a', 'BIT', 'Food Services Management'),
(179, 'BIT', '4a', 'BIT', 'Food Services Management'),
(180, 'BIT', '1a', 'BIT', 'Mechanical Technology'),
(181, 'BIT', '2a', 'BIT', 'Mechanical Technology'),
(182, 'BIT', '4a', 'BIT', 'Mechanical Technology'),
(183, 'BIT', '3a', 'BIT', 'Mechanical Technology'),
(184, 'BSED', '1a', 'BSED', 'English'),
(185, 'BSED', '2a', 'BSED', 'English'),
(186, 'BSED', '3a', 'BSED', 'English'),
(187, 'BSED', '4a', 'BSED', 'English'),
(188, 'BSED', '1a', 'BSED', 'Mathematics'),
(189, 'BSED', '2a', 'BSED', 'Mathematics'),
(190, 'BSED', '3a', 'BSED', 'Mathematics'),
(191, 'BSED', '4a', 'BSED', 'Mathematics'),
(192, 'BSED', '1a', 'BSED', 'Science'),
(193, 'BSED', '2a', 'BSED', 'Science'),
(194, 'BSED', '4a', 'BSED', 'Science'),
(195, 'BSED', '3a', 'BSED', 'Science'),
(197, 'BEED', '2a', 'BEED', 'This subject has no major class'),
(198, 'BEED', '3a', 'BEED', 'This subject has no major class'),
(199, 'BEED', '4a', 'BEED', 'This subject has no major class'),
(200, 'BTLED', '1a', 'BTLED', 'This subject has no major class'),
(201, 'BTLED', '2a', 'BTLED', 'This subject has no major class'),
(202, 'BTLED', '3a', 'BTLED', 'This subject has no major class'),
(203, 'BTLED', '4a', 'BTLED', 'This subject has no major class'),
(208, 'BSIT', '1', 'BSIT', 'Major in Web and Mobile Technologies'),
(209, 'BEED', '1a', 'BEED', 'This subject has no major class');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptid` int(255) NOT NULL,
  `incharge` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptid`, `incharge`, `position`, `department`) VALUES
(1, 'HONELLY MAE S. CASCOLAN, PhD', 'DEAN', 'COLLEGE OF EDUCATION'),
(2, 'JB O. DORIA, MIT', 'DEAN', 'COLLEGE OF TECHNOLOGY AND BUSINESS');

-- --------------------------------------------------------

--
-- Table structure for table `examsched`
--

CREATE TABLE `examsched` (
  `examid` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time_start` varchar(255) NOT NULL,
  `time_end` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `course_year_section` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sy` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examsched`
--

INSERT INTO `examsched` (`examid`, `day`, `time_start`, `time_end`, `fname`, `subject_code`, `room_name`, `course_year_section`, `semester`, `sy`, `department`, `status`) VALUES
(11, 'firstday', '7:00am', '8:00am', 'Judy', 'NS BIO SCI', '316', 'BSISÂ 4A', '1ST', '2016-2017', 'CIT', 'checked'),
(12, 'secondday', '8:00am', '9:00am', 'Melanie', 'GELCHEM 114', '410', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(14, 'firstday', '10:am', '11:00am', 'Lucillos', 'PE 1', '410', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(15, 'firstday', '1:00pm', '2:00pm', 'Lucillos', 'Fil 1', '410', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(16, 'firstday', '3:00pm', '4:00pm', 'Melanie', 'CALGEB 105', '413', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(17, 'secondday', '1:00pm', '2:00pm', 'Melanie', 'Eng 1', '413', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(19, 'thirdday', '1:00pm', '2:00pm', 'Robert', 'PSTRIG 104', '413', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(20, 'thirdday', '2:00pm', '3:00pm', 'Robert', 'PSTRIG 104', '413', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(21, 'thirdday', '4:00pm', '5:00pm', 'Robert', 'Draw 1', '411', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(22, 'thirdday', '10:am', '11:00am', 'Lucillos', 'SS ECOTAR', '409', 'BSCEÂ 1A', '1ST', '2016-2017', 'CIT', 'checked'),
(23, 'firstday', '8:00am', '9:00am', 'Ruby Mae', 'IS 121', '407', 'BSISÂ 1C', '1ST', '2016-2017', 'CIT', 'unsaved'),
(25, 'firstday', '1:00pm', '2:00pm', 'Ruby Mae', 'PE 1', '407', 'BSISÂ 1C', '1ST', '2016-2017', 'CIT', 'unsaved'),
(27, 'firstday', '10:am', '11:00am', 'Ruby Mae', 'PE 1', '407', 'BSISÂ 1C', '1ST', '2016-2017', 'CIT', 'unsaved'),
(28, 'secondday', '10:am', '11:00am', 'Ruby Mae', 'Eng 1', '407', 'BSISÂ 1C', '1ST', '2016-2017', 'CIT', 'unsaved'),
(29, 'secondday', '8:00am', '10:am', 'Ruby Mae', 'IS 121', '407', 'BSISÂ 1C', '1ST', '2016-2017', 'CIT', 'unsaved'),
(30, 'secondday', '1:00pm', '2:00pm', 'Yrika Marie', 'IS 111', '407', 'BSISÂ 1C', '1ST', '2016-2017', 'CIT', 'unsaved'),
(31, 'thirdday', '3:00pm', '4:00pm', 'Ariel', 'IS 121', '408', 'BSISÂ 1C', '1ST', '2016-2017', 'CIT', 'unsaved');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` int(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `room_name`, `description`, `location`, `department`) VALUES
(96, 'Room1', 'Computer Laboratory', 'BSIT Building', 'BSIT'),
(108, 'Room2', 'asd', 'asd', 'asd'),
(109, 'Room3', 'asd', 'asd', 'asd'),
(110, 'Room4', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semesterid` int(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semesterid`, `semester`) VALUES
(1, '1ST'),
(2, '2ND'),
(3, 'Summer');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `set_id` int(255) NOT NULL,
  `dean1` varchar(255) NOT NULL,
  `dean2` varchar(255) NOT NULL,
  `ced` varchar(255) NOT NULL,
  `prep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`set_id`, `dean1`, `dean2`, `ced`, `prep`) VALUES
(1, 'JB O. DORIA, MIT', 'HONELLY MAE S. CASCOLAN, PhD', 'Armando D. Junio, PhD.', 'PSU STUDENTS');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_title` varchar(255) NOT NULL,
  `subject_category` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `subject_code`, `subject_title`, `subject_category`, `semester`, `department`) VALUES
(9, 'ENG PLUS', 'Communicative Grammar', 'Minor', '1ST', 'BSIT'),
(10, 'M COL ALG', 'College Algebra', 'Minor', '1ST', 'BSIT'),
(11, 'NS PHYSCI', 'Foundation of Physical Sciences', 'Minor', '2ND', 'BSIT'),
(12, 'HUM 1', 'Arts, Man and Society', 'Minor', '2ND', 'BSIT'),
(13, 'Fil 1', 'Komunikasyon sa Akademikong Filipino', 'Minor', '1ST', 'BSIT'),
(14, 'SS GEN PSYCH', 'general Psychology with Drug Addiction Education', 'Minor', '1ST', 'BSIT'),
(15, 'SS PHIL HIST', 'Philippine History', 'Minor', '1ST', 'BSIT'),
(16, 'IS 111', 'Fundamentals of Info. system/Info. Management', 'Major', '1ST', 'BSIT'),
(17, 'IS 112', 'Personal Productive using Information System', 'Major', '1ST', 'BSIT'),
(18, 'PE 1', 'Physical Fitness', 'Minor', '1ST', 'BSIT'),
(19, 'NSTP 1', 'CWTS/ROTC/LTS', 'Minor', '1ST', 'BSIT'),
(20, 'M TRIGO', 'Trigonometry', 'Minor', '2ND', 'BSIT'),
(21, 'NS BIO SCI', 'Foundations of biological Sciences', 'Minor', '1ST', 'BSIT'),
(22, 'FIL 2', 'Pagbasa at Pagsulat tungo sa Pananaliksik', 'Minor', '2ND', 'BSIT'),
(23, 'SS ECOTAR', 'Economics with Taxation and agrarian Reform', 'Minor', '2ND', 'BSIT'),
(24, 'RIZAL', 'Life, Works and Writings of Rizal', 'Minor', '2ND', 'BSIT'),
(25, 'Eng 1', 'Study and Thinking Skills', 'Minor', '2ND', 'BSIT'),
(27, 'IS 121', 'Human Computer Interaction', 'Major', '2ND', 'BSIT'),
(28, 'IS 122', 'Data, File and Objects Structures ', 'Major', '2ND', 'BSIT'),
(29, 'IS 123', 'Fundamental of Business and Management', 'Major', '2ND', 'BSIT'),
(30, 'PE 2', 'Rhythmic and Activities', 'Minor', '2ND', 'BSIT'),
(31, 'NSTP 2', 'ROTC/CWTS/LTS', 'Minor', '2ND', 'BSIT'),
(32, 'Eng 2', 'Speech Communication', 'Minor', '1ST', 'BSIT'),
(33, 'IS 316', 'Statistic', 'Major', '1ST', 'BSIT'),
(34, 'HUM 2', 'Logic and Ethics', 'Minor', '1ST', 'BSIT'),
(35, 'ACCTG FUND', 'Fundamental of Accounting', 'Minor', '1ST', 'BSIT'),
(36, 'IS 212', 'Database management System', 'Major', '1ST', 'BSIT'),
(37, 'IS 213', 'Multrimedia Authoring', 'Major', '1ST', 'BSIT'),
(38, 'IS 214', 'IS Programming 1', 'Major', '1ST', 'BSIT'),
(39, 'IS 313', 'Evaluation of Business Performance', 'Major', '2ND', 'BSIT'),
(40, 'PE 3', 'Individual/Dual Sports', 'Minor', '1ST', 'BSIT'),
(41, 'LIT 1', 'Philippine Literature', 'Minor', '2ND', 'BSIT'),
(42, 'IS 224', 'Discrete Structure', 'Minor', '2ND', 'BSIT'),
(43, 'IS 314', 'Operating System', 'Major', '2ND', 'BSIT'),
(44, 'IS PROG 2', 'IS Programming 2', 'Major', '2ND', 'BSIT'),
(45, 'IS 222', 'Networks and Internet Technology', 'Major', '2ND', 'BSIT'),
(46, 'IS 324', 'System Analysis and Design', 'Major', '2ND', 'BSIT'),
(47, 'IS 301', 'Information system w/ Non-experimental Reseach', 'Major', '1ST', 'BSIT'),
(48, 'Eng 3', 'Writing in the Discipline', 'Minor', '1ST', 'BSIT'),
(49, 'IS 311', 'Project Development and Quality Systems', 'Major', '1ST', 'BSIT'),
(50, 'IS 312', 'Deployment, Maintenance and services', 'Major', '1ST', 'BSIT'),
(51, 'IS 221', 'Application Development (adv. DBMS)', 'Major', '2ND', 'BSIT'),
(52, 'IS 315', 'Web Development', 'Major', '1ST', 'BSIT'),
(53, 'IS 302', 'Survey Programming Languages', 'Major', '2ND', 'BSIT'),
(54, 'IS 211', 'System Infrastructure and Integration', 'Major', '1ST', 'BSIT'),
(55, 'M QTB', 'Quantitative Techniques in Business', 'Minor', '2ND', 'BSIT'),
(56, 'IS 323', 'E-Commerce Strategy, Architecture', 'Major', '2ND', 'BSIT'),
(57, 'SS SOC CUL', 'Society and Culture with Family Planning', 'Minor', '2ND', 'BSIT'),
(58, 'IS 303', 'Structured query language', 'Major', '2ND', 'BSIT'),
(59, 'FREE ELEC 1', 'Free Elective 1', 'Major', '2ND', 'BSIT'),
(60, 'IS321', 'Information System Planning', 'Major', '2ND', 'BSIT'),
(61, 'IS 411A', 'Senior System Project 1', 'Major', '1ST', 'BSIT'),
(62, 'IS 413', 'Introduction to the IM Profession and Ethics', 'Minor', '1ST', 'BSIT'),
(63, 'IS 322', 'Management of technology', 'Major', '2ND', 'BSIT'),
(64, 'SMSVCCU', 'Service Culture', 'Major', '2ND', 'BSIT'),
(65, 'IS ELEC 4', 'FREE ELEC 2', 'Major', '1ST', 'BSIT'),
(66, 'FREE ELEC 3', 'Free Elective 3', 'Major', '1ST', 'BSIT'),
(67, 'IS 411 B', 'Senior Systems Project 2', 'Major', '2ND', 'BSIT'),
(68, 'IS412', 'Effective Communication for IT Professional', 'Minor', '1ST', 'BSIT'),
(69, 'IS MNGTIT', 'Management in Information Technology', 'Major', '1ST', 'BSIT'),
(70, 'IS TRENDS', 'IT Trends/Seminar/Fieldtrips', 'Major', '1ST', 'BSIT'),
(71, 'SMSYSTH', 'Principles of System Thinking', 'Major', '1ST', 'BSIT'),
(72, 'ITE OJT', 'IT/IS Internship/On-the-Job Training', 'Major', '2ND', 'BSIT'),
(73, 'M BUS', 'Business Mathematics', 'Minor', '1ST', 'BSIT'),
(75, 'HRM 1', 'Introduction to Hospitality Industry', 'Major', '1ST', 'BSIT'),
(76, 'HRM 2', 'Sanitation and Safety', 'Major', '1ST', 'BSIT'),
(77, 'NS G CHEM', 'General Chemistry', 'Minor', '2ND', 'BSIT'),
(78, 'HRM FOOD 1', 'Hot Kitchen', 'Major', '2ND', 'BSIT'),
(79, 'HRM FOOD 2', 'Cold Kitchen', 'Major', '2ND', 'BSIT'),
(80, 'HRM 5', 'Housekeeping Operations & Procedures with Lab', 'Major', '2ND', 'BSIT'),
(81, 'Tour 1', 'Prinsciple of Tourism/Intro to Tourism', 'Major', '1ST', 'BSIT'),
(82, 'PDPR', 'Personality Development  and Public Relation', 'Major', '1ST', 'BSIT'),
(83, 'M STAT', 'Statistics', 'Minor', '1ST', 'BSIT'),
(84, 'COMP LIT', 'Computer Literacy', 'Minor', '1ST', 'BSIT'),
(85, 'FOR LANG', 'Chinese', 'Minor', '1ST', 'BSIT'),
(86, 'HRM FOOD 3', 'Menu Design & Law Management with Lab', 'Major', '1ST', 'BSIT'),
(87, 'HRM FOOD 4', 'Baking With Lab', 'Major', '1ST', 'BSIT'),
(88, 'Research 1', 'Feasibility/Project Study Part-1', 'Major', '2ND', 'BSIT'),
(89, 'HRM 8', 'Bar Service Management (w/ Lab)', 'Major', '2ND', 'BSIT'),
(90, 'HRM 9', 'Front Office Operation and Management', 'Major', '2ND', 'BSIT'),
(91, 'PRACTICUM 1', 'Restaurant Phase/Cruise Ship', 'Major', 'Summer', 'BSIT'),
(92, 'M INV', 'Mathematics of Investment', 'Minor', '1ST', 'BSIT'),
(93, 'Philo 1', 'Work Ethics and Moral Philosophy', 'Minor', '1ST', 'BSIT'),
(94, 'Finance', 'Basic Finance', 'Minor', '1ST', 'BSIT'),
(95, 'Tour 2', 'Travel and Tour Operation', 'Major', '1ST', 'BSIT'),
(96, 'HRM 10', 'F & B Cost Control/ Operation & Mgt', 'Major', '1ST', 'BSIT'),
(97, 'HRM 11', 'Sales and Marketing Mgt', 'Major', '1ST', 'BSIT'),
(98, 'HRM 21', 'Rooms Division Management & Central System', 'Major', '1ST', 'BSIT'),
(99, 'Draw 1H', 'Facilities, Design and Layout', 'Major', '2ND', 'BSIT'),
(100, 'Mgt 1', 'Principles of Management', 'Minor', '2ND', 'BSIT'),
(101, 'Entrep', 'Entrepreneurship', 'Major', '2ND', 'BSIT'),
(102, 'HRM 13', 'Interior Design', 'Major', '2ND', 'BSIT'),
(103, 'HRM 14', 'Asian Cuisine', 'Major', '2ND', 'BSIT'),
(104, 'HRM 15', 'Catering & Banquet Mgt.', 'Major', '2ND', 'BSIT'),
(105, 'HRM 18', 'Business Policy', 'Major', '2ND', 'BSIT'),
(106, 'Practicum 2', 'Hotel Phase', 'Major', 'Summer', 'BSIT'),
(107, 'Mktg 1', 'Hospitality marketing', 'Major', '1ST', 'BSIT'),
(108, 'Tour 3', 'Tourism Planning and Development', 'Major', '1ST', 'BSIT'),
(109, 'HRM 16', 'F & B Merchandising & sales', 'Major', '1ST', 'BSIT'),
(110, 'HRM 17', 'International cuisine', 'Major', '1ST', 'BSIT'),
(111, 'HRM 19', 'Hospitality Operation Mgt', 'Major', '1ST', 'BSIT'),
(112, 'HRM 20', 'Convention Mgt', 'Major', '1ST', 'BSIT'),
(113, 'PRACTICUM 3', 'Tourism Phase', 'Major', '2ND', 'BSIT'),
(114, 'PRACTICUM 4', 'National/International Training', 'Major', '2ND', 'BSIT'),
(116, 'Draw 1', 'Drawing and Blueprint Reading', 'Major', '1ST', 'BSIT'),
(117, 'Comp Lit 1', 'Computer literacy and Operations', 'Major', '1ST', 'BSIT'),
(118, 'TECHNO 2', 'Advance Technical Sketching, Instrument', 'Major', '2ND', 'BSIT'),
(119, 'Draw 2', 'Blueprint Reading', 'Major', '2ND', 'BSIT'),
(120, 'NS STUMAT', 'Study of Materials', 'Major', '2ND', 'BSIT'),
(123, 'VALUES ED', 'Values Education and works ethics', 'Minor', '1ST', 'BSIT'),
(124, 'M AP IND', 'Applied Industrial Mathematics', 'Minor', '1ST', 'BSIT'),
(126, 'NS PHY 1', 'Physics 1', 'Minor', '1ST', 'BSIT'),
(127, 'SS Pol Gov', 'Politics and Governance with Phil Constitution', 'Minor', '1ST', 'BSIT'),
(129, 'NS PHY 2', 'Physics 2', 'Minor', '2ND', 'BSIT'),
(131, 'ENG TWR', 'Technical writing and reporting', 'Minor', '1ST', 'BSIT'),
(132, 'IND PSYCH', 'Industrial Psychology', 'Minor', '1ST', 'BSIT'),
(133, 'MNGT LAB CO', 'Managment with Labor Code', 'Major', '1ST', 'BSIT'),
(134, 'Ind Techno 2', 'Principles of IndustrialOrganization', 'Major', '1ST', 'BSIT'),
(136, 'Ind Techno 4', 'Personnel Administration', 'Major', '2ND', 'BSIT'),
(137, 'Ind Techno 5', 'Entrepreneurship with Fundamentals of Coopertive', 'Major', '2ND', 'BSIT'),
(138, 'Ind Techno 6', 'Operations and Production Management', 'Major', '2ND', 'BSIT'),
(139, 'Ind Techno 7', 'Quality Control Management', 'Major', '2ND', 'BSIT'),
(140, 'Ind Techno 8', 'Environmental Education', 'Major', '2ND', 'BSIT'),
(141, 'Research 2', 'Feasibility/Project Study Part-2', 'Minor', '2ND', 'BSIT'),
(142, 'OJT 1', 'On-the-Job Training', 'Major', '1ST', 'BSIT'),
(143, 'OJT 2', 'On-the-Job Training', 'Major', '2ND', 'BSIT'),
(144, 'ENG PLUS', 'Communicative Grammar', 'Minor', '1ST', 'SAS'),
(145, 'Eng 1', 'Study and Thinking Skills', 'Minor', '1ST', 'SAS'),
(146, 'MATH 1', 'Integrated Mathematics', 'Minor', '1ST', 'SAS'),
(148, 'Fil 1', 'Komunikasyon sa Akademikong Filipino', 'Minor', '1ST', 'SAS'),
(151, 'NS EARTH SCI', 'EARTH SCIENCES', 'Minor', '1ST', 'SAS'),
(152, 'SS GEN PSYCH', 'general Psychology with Drug Addiction Education', 'Minor', '1ST', 'SAS'),
(153, 'Com 101', 'Communications, Values and Ethics', 'Major', '1ST', 'SAS'),
(154, 'Com 102', 'Introduction to Communication Theory', 'Major', '1ST', 'SAS'),
(155, 'Lang 101 ', 'Introduction to language Study', 'Major', '1ST', 'SAS'),
(156, 'P.E 1', 'Physical Fitness', 'Minor', '1ST', 'SAS'),
(157, 'NSTP 1', 'ROTC/CWTS/LTS', 'Minor', '1ST', 'SAS'),
(158, 'Eng 2', 'Speech Communication', 'Minor', '2ND', 'SAS'),
(159, 'FIL 2', 'Pagbasa at Pagsulat tungo sa Pananaliksik', 'Minor', '2ND', 'SAS'),
(160, 'NS BIO SCI', 'Foundations of biological Sciences', 'Minor', '2ND', 'SAS'),
(161, 'Philo 1', 'Social Philosophy and Logic', 'Minor', '2ND', 'SAS'),
(162, 'Lit 101', 'Introduction to Drama & Theater Arts', 'Major', '2ND', 'SAS'),
(163, 'COMP LIT1', 'Computer Literacy', 'Major', '2ND', 'SAS'),
(164, 'Lang 102', 'Language and society', 'Major', '2ND', 'SAS'),
(165, 'Com 103', 'Audio-Visual Communication', 'Major', '2ND', 'SAS'),
(166, 'P.E 2', 'Rhythmic and Activities', 'Minor', '2ND', 'SAS'),
(167, 'NSTP 2', 'ROTC/CWTS/LTS', 'Minor', '2ND', 'SAS'),
(168, 'Eng 3', 'Writing in the Discipline', 'Minor', '1ST', 'SAS'),
(169, 'Fil 3', 'Masining na Pagpapahayag', 'Minor', '1ST', 'SAS'),
(170, 'MATH 2', 'Contemporary Mathematics', 'Minor', '1ST', 'SAS'),
(171, 'HUM 1', 'Arts, Man and Society', 'Minor', '1ST', 'SAS'),
(172, 'ELECTIVE 1', 'Advance Computer literacy', 'Minor', '1ST', 'SAS'),
(173, 'Lang 103', 'Introduction to Linguistic', 'Major', '1ST', 'SAS'),
(174, 'Com 105', 'Development Communication', 'Major', '1ST', 'SAS'),
(175, 'LIT 1', 'Philippine Literature', 'Minor', '1ST', 'SAS'),
(176, 'P.E 3', 'Individual/Dual Sports', 'Minor', '1ST', 'SAS'),
(177, 'HUM 6', 'Ethics', 'Minor', '2ND', 'SAS'),
(178, 'Gen Ed 8', 'Panitikan ng Pilipinas', 'Minor', '2ND', 'SAS'),
(179, 'SS Pol Gov', 'Politics and Governance with Phil Constitution', 'Major', '2ND', 'SAS'),
(180, 'SS ECOTAR', 'Basic Economics with Taxation and agrarian Reform', 'Minor', '2ND', 'SAS'),
(181, 'NS ENV SCI', 'Environmental Science', 'Minor', '2ND', 'SAS'),
(182, 'Com 104', 'Community Communication', 'Major', '2ND', 'SAS'),
(183, 'Com 106', 'Print Media Principles and Practices', 'Major', '2ND', 'SAS'),
(184, 'Com 107', 'Radio & TV Principles and Practices', 'Major', '2ND', 'SAS'),
(185, 'P.E 4', 'Team Sports', 'Minor', '2ND', 'SAS'),
(186, 'SS PHIL HIST', 'Philippine History', 'Minor', '1ST', 'SAS'),
(187, 'Educ 1A', 'Educational and Industrial Psychology', 'Major', '1ST', 'SAS'),
(188, 'Com 108', 'Advertising and public Information', 'Major', '1ST', 'SAS'),
(189, 'Com 109', 'Writing for Print Media', 'Major', '1ST', 'SAS'),
(190, 'Com 110', 'Interpesonal Communication', 'Major', '1ST', 'SAS'),
(191, 'Com 111', 'Desktop Publishing', 'Major', '1ST', 'SAS'),
(192, 'Com 112', 'Media Management & Entrepreneurship', 'Major', '2ND', 'SAS'),
(193, 'Lang 112', 'FOREIGN LANGUAGE', 'Major', '2ND', 'SAS'),
(194, 'Com 113', 'Writing for Radio  & TV', 'Major', '2ND', 'SAS'),
(195, 'Com 114', 'Intro to Book Publishing', 'Major', '2ND', 'SAS'),
(196, 'Com 115', 'Radio and TV Production', 'Major', '2ND', 'SAS'),
(197, 'Com 116', 'Organizational Communication', 'Major', '2ND', 'SAS'),
(198, 'Anthro 1', 'Antrhopology', 'Minor', '1ST', 'SAS'),
(199, 'RIZAL', 'Life, Works and Writings', 'Minor', '1ST', 'SAS'),
(200, 'Lang 113', 'FOREIGN LANGUAGE 2', 'Major', '1ST', 'SAS'),
(201, 'Com 117', 'Intro to Communication Research', 'Major', '1ST', 'SAS'),
(202, 'Com 118', 'Educational Broadcasting', 'Major', '1ST', 'SAS'),
(203, 'Thesis 101', 'Thesis Writing', 'Major', '2ND', 'SAS'),
(204, 'Intern 101', 'Internship', 'Major', '2ND', 'SAS'),
(205, 'Hist 2', 'Asian History', 'Major', '2ND', 'SAS'),
(206, 'Hist 3', 'World history and civilaztion (Prehistory-1500)', 'Major', '1ST', 'SAS'),
(207, 'SS BASGEO', 'Basic Geography', 'Major', '2ND', 'SAS'),
(208, 'SS 101', 'Introduction to Political Science & Political Theories', 'Major', '2ND', 'SAS'),
(209, 'SS 102', 'World Geography', 'Major', '2ND', 'SAS'),
(210, 'SS 103', 'Advanced Economics', 'Major', '2ND', 'SAS'),
(211, 'SS 104', 'Advanced Philippine History', 'Major', '2ND', 'SAS'),
(212, 'SS 105', 'Cultural Anthropolgy', 'Major', '2ND', 'SAS'),
(213, 'SS 106', 'Parliamentary Rules and Procedures', 'Major', '2ND', 'SAS'),
(214, 'SS 107', 'Current Trends and Issues in Social Studies', 'Major', '2ND', 'SAS'),
(215, 'HUM 2', 'Philosopy (Logic & Ethics)', 'Minor', '1ST', 'SAS'),
(216, 'Lit 2', 'World Literature', 'Minor', '1ST', 'SAS'),
(217, 'SS SOC CUL', 'Society and Culture with Family Planning', 'Minor', '1ST', 'SAS'),
(218, 'SS 108', 'Comparative Government and Politics', 'Major', '1ST', 'SAS'),
(219, 'SS 109', 'Local Government Units', 'Major', '1ST', 'SAS'),
(220, 'SS 110', 'Public Administration and Systems of Government', 'Major', '1ST', 'SAS'),
(221, 'SS 111', 'World history and civilaztion (1500-Present)', 'Major', '1ST', 'SAS'),
(222, 'SS 112', 'Asian Studies (Middleand Far East)', 'Major', '1ST', 'SAS'),
(223, 'Philo 2', 'Philosophy of Man', 'Minor', '2ND', 'SAS'),
(224, 'M STAT', 'Statistics', 'Minor', '2ND', 'SAS'),
(225, 'SS 114', 'African Studies', 'Major', '2ND', 'SAS'),
(226, 'SS 115', 'Latin American Studies', 'Major', '2ND', 'SAS'),
(227, 'SS 116', 'American Politics, Government & Foreign Relations', 'Major', '2ND', 'SAS'),
(228, 'SS 117', 'European Studies', 'Major', '2ND', 'SAS'),
(229, 'SS 118', 'Australian Studies', 'Major', '2ND', 'SAS'),
(230, 'Philo 3', 'Inductive Reasoning', 'Minor', '1ST', 'SAS'),
(231, 'SS 120', 'labor Code of the Philippines', 'Major', '1ST', 'SAS'),
(232, 'SS 121', 'Human Rights and Peace Education', 'Major', '1ST', 'SAS'),
(233, 'SS 122', 'International Relation and Politics', 'Major', '1ST', 'SAS'),
(234, 'SS 123', 'Economic Planning and Development', 'Major', '1ST', 'SAS'),
(235, 'SS 125', 'The Family Code of The Philippines', 'Major', '1ST', 'SAS'),
(236, 'SS 126', 'Researches in Social Science', 'Major', '1ST', 'SAS'),
(237, 'SS 127', 'Internship', 'Major', '2ND', 'SAS'),
(238, 'ENG PLUS', 'Communicative Grammar', 'Minor', '1ST', 'COED'),
(239, 'MATH 1', 'Integrated Mathematics', 'Minor', '1ST', 'COED'),
(240, 'Fil 1', 'Komunikasyon sa Akademikong Filipino', 'Major', '1ST', 'COED'),
(241, 'NS BIO SCI', 'Foundations of biological Sciences', 'Minor', '1ST', 'COED'),
(242, 'HUM 1', 'Arts, Man and Society', 'Minor', '1ST', 'COED'),
(243, 'SS GEN PSYCH', 'general Psychology with Drug Addiction Education', 'Minor', '1ST', 'COED'),
(244, 'FW INTROWIK', 'Introduction sa pag-aaral ng Wika', 'Major', '1ST', 'COED'),
(245, 'FP PANFIL', 'Panitikang Filipino', 'Major', '1ST', 'COED'),
(246, 'P.E 1', 'Physical Fitness', 'Minor', '1ST', 'COED'),
(247, 'NSTP 1', 'ROTC/CWTS/LTS', 'Minor', '1ST', 'COED'),
(248, 'Eng 1', 'Study and Thinking Skills', 'Minor', '2ND', 'COED'),
(249, 'MATH 2', 'Contemporary Mathematics', 'Minor', '2ND', 'COED'),
(250, 'FIL 2', 'Pagbasa at Pagsulat tungo sa Pananaliksik', 'Minor', '2ND', 'COED'),
(251, 'LIT 1', 'Philippine Literature', 'Minor', '2ND', 'COED'),
(253, 'Emajor 2', 'Introduction to Linguistic', 'Major', '2ND', 'COED'),
(254, 'Emajor 3', 'Structure of English', 'Major', '2ND', 'COED'),
(255, 'Emajor 6', 'Afro-Asian Literaure', 'Major', '2ND', 'COED'),
(256, 'Emajor 20', 'Campus Journalism', 'Major', '2ND', 'COED'),
(257, 'PE 2', 'Rhythmic Activities', 'Minor', '2ND', 'COED'),
(258, 'NSTP 2', 'ROTC/CWTS/LTS', 'Minor', '2ND', 'COED'),
(259, 'Eng 2', 'Speech Communication', 'Minor', '1ST', 'COED'),
(260, 'Fil 3', 'Masining na Pagpapahayag', 'Minor', '1ST', 'COED'),
(261, 'LIT 2', 'World Literature', 'Minor', '1ST', 'COED'),
(262, 'Educ 1', 'Child and Adolescent Development', 'Minor', '1ST', 'COED'),
(264, 'Educ 2', 'Social Dimensions of Education', 'Minor', '1ST', 'COED'),
(265, 'FS 1', 'The Learners development and environment', 'Minor', '1ST', 'COED'),
(266, 'Emajor 5', 'Translation and Editing of text', 'Major', '1ST', 'COED'),
(267, 'Emajor 9', 'The teaching of listening and Reading', 'Major', '1ST', 'COED'),
(268, 'Emajor 10', 'Teaching of Literature', 'Major', '1ST', 'COED'),
(269, 'P.E 3', 'Individual/Dual Sports', 'Minor', '1ST', 'COED'),
(270, 'Eng 3', 'Writing in discipline', 'Minor', '2ND', 'COED'),
(271, 'FS 2', 'Experiencing the Teaching-Learning Process', 'Minor', '2ND', 'COED'),
(272, 'Educ 3', 'Facilitating Learning', 'Major', '2ND', 'COED'),
(273, 'Educ 4', 'Principles of Teaching 1', 'Major', '2ND', 'COED'),
(274, 'Educ 6', 'Development Reading 1', 'Major', '2ND', 'COED'),
(275, 'Educ 11', 'Assessment of Student Learning 1', 'Major', '2ND', 'COED'),
(276, 'Emajor 4', 'LiteraryCriticism', 'Major', '2ND', 'COED'),
(277, 'Emajor 7', 'English and American Literature', 'Minor', '2ND', 'COED'),
(278, 'Emajor 8', 'teaching of speaking', 'Major', '2ND', 'COED'),
(279, 'P.E 4', 'Team Sports', 'Minor', '2ND', 'COED'),
(280, 'Educ 5', 'Principles of Teaching 2', 'Major', '1ST', 'COED'),
(281, 'Educ 8', 'Curriculum Development', 'Major', '1ST', 'COED'),
(282, 'FS 4', 'Exploring the Curriculum', 'Minor', '1ST', 'COED'),
(283, 'Educ 9', 'Educational technology 1', 'Major', '1ST', 'COED'),
(284, 'Educ 12', 'Assessment of Student Learning 2', 'Major', '1ST', 'COED'),
(285, 'FS 5', 'learning and Assessment Strategy', 'Minor', '1ST', 'COED'),
(286, 'Emajor 11', 'language and literature assessment', 'Major', '1ST', 'COED'),
(287, 'Emajor 12', 'Language and society', 'Major', '1ST', 'COED'),
(288, 'SS Pol Gov', 'Politics and Governance w/ New Constitution', 'Minor', '1ST', 'COED'),
(289, 'Educ 10', 'Educational technology 2', 'Major', '2ND', 'COED'),
(290, 'FS 3', 'Technology in the learning environment', 'Minor', '2ND', 'COED'),
(292, 'Educ 15', 'the Teaching Professions', 'Major', '2ND', 'COED'),
(293, 'FS 6', 'On Becoming a Teacher', 'Minor', '2ND', 'COED'),
(294, 'Emajor 13', 'Methodology and Folklore', 'Major', '2ND', 'COED'),
(295, 'Emajor 14', 'Preparation and Evaluation of Teaching Materials', 'Major', '2ND', 'COED'),
(296, 'Emajor 15', 'Remedial Instruction in english', 'Major', '2ND', 'COED'),
(297, 'Emajor 16', 'Creative writing', 'Major', '2ND', 'COED'),
(298, 'Emajor 17', 'Speech and Stage Arts', 'Major', '2ND', 'COED'),
(299, 'SS PHIL HIST', 'Philippine History', 'Minor', '2ND', 'COED'),
(301, 'RIZAL', 'Life, Works and Writings', 'Major', '1ST', 'COED'),
(302, 'SP 1,2,3', 'Special Topics 1,2, & 3', 'Major', '1ST', 'COED'),
(303, 'SS ECOTAR', 'Basic Economics with Taxation and agrarian Reform', 'Minor', '1ST', 'COED'),
(304, 'SS SOC CUL', 'Society and Culture with Family Planning', 'Minor', '1ST', 'COED'),
(305, 'HUM 2', 'Logic and Ethics', 'Minor', '1ST', 'COED'),
(306, 'Emajor 18 ', 'Introduction to Stylistics', 'Major', '1ST', 'COED'),
(307, 'Emajor 19', 'English for specific Purpose', 'Major', '1ST', 'COED'),
(308, 'Educ 16', 'Student Teaching', 'Major', '2ND', 'COED'),
(309, 'NS ENV SCI', 'Environmental Science', 'Minor', '2ND', 'COED'),
(310, 'Gen Ed 13', 'Ecology', 'Major', '2ND', 'COED'),
(311, 'Gen Ed 11', 'Atronomy', 'Major', '2ND', 'COED'),
(312, 'CALGEB 105', 'College and Advance Algebra', 'Major', '1ST', 'BSIT'),
(313, 'PSTRIG 104', 'Plane and Spherical Trigonometry', 'Major', '1ST', 'BSIT'),
(314, 'GELCHEM 114', 'General Chemistry', 'Major', '1ST', 'BSIT'),
(315, 'ANAGEO 104', 'Analytic Geometry', 'Major', '2ND', 'BSIT'),
(316, 'SOLIDM103', 'Solid mensuration', 'Major', '2ND', 'BSIT'),
(317, 'PHYSIC 114', 'Physics 1 (Mechanics)', 'Major', '2ND', 'BSIT'),
(318, 'DIFCAL 204', 'Differential Calculus', 'Major', '1ST', 'BSIT'),
(319, 'PHYSIC 214', 'Physics 2(Heat, Electricity & Magnetism, Sound & Light)', 'Major', '1ST', 'BSIT'),
(320, 'COMFUN 222', 'Computer Fundamentals and Programming', 'Major', '1ST', 'BSIT'),
(321, 'INTCAL 204', 'Intregal  Calculus', 'Major', '2ND', 'BSIT'),
(322, 'STATCS 203', 'Probability and Statistic', 'Major', '2ND', 'BSIT'),
(323, 'ELCENG 203', 'Basic electrical Engineering', 'Major', '2ND', 'BSIT'),
(324, 'MECRIG 305', 'Mechanics of Rigid Bodies', 'Major', '1ST', 'BSIT'),
(325, 'ELSUV 314', 'Elementary Surveying', 'Major', '1ST', 'BSIT'),
(326, 'DIFFEQ 303', 'Differential Equation', 'Major', '1ST', 'BSIT'),
(328, 'MECENG 303', 'Basic Mechanical Engineering', 'Major', '1ST', 'BSIT'),
(329, 'EMANGT 303', 'Engineering Management', 'Major', '1ST', 'BSIT'),
(331, 'MECDEF 305', 'Mechanics of Deformable Bodies', 'Major', '2ND', 'BSIT');

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE `sy` (
  `syid` int(11) NOT NULL,
  `sy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`syid`, `sy`) VALUES
(3, '2015-2016'),
(4, '2017-2018'),
(5, '2018-2019'),
(7, '2019-2020'),
(8, '2020-2021'),
(9, '2021-2022'),
(10, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teachid` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `arank` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teachid`, `fname`, `lname`, `email`, `password`, `address`, `phone`, `arank`, `designation`, `department`) VALUES
(26, 'Wennalyn', 'Honrado', 'Wennalyn@gmail.com', '', 'Asingan, Pangasinan', '09273536801', 'Instructor 1', 'Full Time', 'BSIT'),
(114, 'JB', 'Doria', '', '', '', '', 'Dean', 'Full Time', 'BSIT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `address`, `phone`, `department`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin@gmail.com', 'Somewhere', '09272526801', '', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classsched`
--
ALTER TABLE `classsched`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `examsched`
--
ALTER TABLE `examsched`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semesterid`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `sy`
--
ALTER TABLE `sy`
  ADD PRIMARY KEY (`syid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teachid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classsched`
--
ALTER TABLE `classsched`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `examsched`
--
ALTER TABLE `examsched`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semesterid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `set_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `sy`
--
ALTER TABLE `sy`
  MODIFY `syid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teachid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
