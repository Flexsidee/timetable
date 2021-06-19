-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 07:56 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt_2021_first_redo`
--

-- --------------------------------------------------------

--
-- Table structure for table `breaks`
--

CREATE TABLE `breaks` (
  `break_id` int(11) NOT NULL,
  `break_title` varchar(100) NOT NULL,
  `start_time` int(5) NOT NULL,
  `end_time` int(5) NOT NULL,
  `day` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breaks`
--

INSERT INTO `breaks` (`break_id`, `break_title`, `start_time`, `end_time`, `day`) VALUES
(1, 'Friday Break', 13, 14, 2),
(3, '', 8, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(255) NOT NULL,
  `level_id` int(5) NOT NULL,
  `department_id` int(255) NOT NULL,
  `population` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `level_id`, `department_id`, `population`) VALUES
(1, 6, 1, 25),
(2, 5, 1, 25),
(3, 4, 1, 25),
(4, 6, 2, 25),
(5, 5, 2, 25),
(6, 4, 2, 25),
(7, 6, 3, 25),
(8, 5, 3, 25),
(9, 4, 3, 25),
(10, 3, 1, 30),
(11, 3, 2, 30),
(12, 3, 3, 30),
(13, 3, 4, 30),
(14, 3, 5, 30),
(15, 3, 6, 30),
(16, 3, 7, 30),
(17, 6, 8, 30),
(18, 2, 2, 87),
(19, 2, 3, 52),
(20, 2, 5, 32),
(21, 2, 1, 30),
(22, 2, 4, 30),
(23, 2, 6, 30),
(24, 2, 7, 30),
(25, 2, 8, 30),
(26, 1, 1, 50),
(27, 1, 2, 100),
(28, 1, 3, 50),
(29, 1, 4, 50),
(30, 1, 5, 50),
(31, 1, 6, 50),
(32, 1, 7, 50),
(33, 1, 8, 50);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(255) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `course_unit` int(10) NOT NULL,
  `level_id` int(255) NOT NULL,
  `department_id` int(255) NOT NULL,
  `semester_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_title`, `course_unit`, `level_id`, `department_id`, `semester_id`) VALUES
(1, 'ACC 111', 'PRINCIPLES OF ACCOUNTS I', 3, 1, 1, 1),
(2, 'ACC 111', 'PRINCIPLES OF ACCOUNTS I', 3, 1, 2, 1),
(3, 'ACC 111', 'PRINCIPLES OF ACCOUNTS I', 3, 2, 7, 1),
(4, 'ACC 122', 'PRINCIPLES OF MANAGEMENT II', 3, 3, 1, 1),
(5, 'ACC 123', 'BUSINESS LAW', 2, 2, 1, 1),
(6, 'ACC 124', 'E-ACCOUNTING', 1, 2, 1, 1),
(7, 'ACC 211', 'FINANCIAL ACCOUNTING I', 3, 2, 1, 1),
(8, 'ACC 214', 'TAXATION I', 3, 3, 1, 1),
(9, 'ACC 222', 'COST ACCOUNTING II', 3, 3, 1, 1),
(10, 'ACC 222', 'COST ACCOUNTING II', 3, 3, 2, 1),
(11, 'ACC 223', 'AUDITING II', 3, 3, 1, 1),
(13, 'ACC 226', 'COMPANY LAW', 2, 3, 1, 1),
(14, 'ACC 311', 'ACCOUNTING THEORY AND PRACTICE', 3, 4, 1, 1),
(15, 'ACC 315', 'QUANTITATIVE TECHNIQUES', 3, 4, 1, 1),
(16, 'ACC 316', 'PUBLIC FINANCE', 3, 4, 1, 1),
(17, 'ACC 316', 'PUBLIC FINANCE', 3, 4, 2, 1),
(18, 'ACC 317', 'MANAGEMENT INFORMATION SYSTEM I', 3, 4, 1, 1),
(19, 'ACC 318', 'MANAGERIAL ECONOMICS', 3, 4, 1, 1),
(20, 'ACC 322', 'ADVANCED COSTING II', 3, 5, 1, 1),
(21, 'ACC 324', 'ADVANCED TAXATION II', 3, 5, 1, 1),
(22, 'ACC 326', 'PUBLIC SECTOR ACCOUNTING I', 3, 5, 1, 1),
(23, 'ACC 411', 'ADVANCED FINANCIAL ACCOUNTING II', 3, 6, 1, 1),
(24, 'ACC 412', 'AUDITING AND INVESTIGATIONS', 3, 6, 1, 1),
(25, 'ACC 413', 'FINANCIAL MANAGEMENT I', 3, 5, 1, 1),
(26, 'ACC 415', 'MANAGEMENT ACCOUNTING I', 3, 6, 1, 1),
(27, 'ACC 415', 'MANAGEMENT ACCOUNTING I', 3, 6, 2, 1),
(28, 'ACC 424', 'MULTI-DISCIPLINARY CASE STUDY', 2, 6, 1, 1),
(29, 'BAM 111', 'INTRODUCTION TO BUSINESS I', 3, 1, 2, 1),
(30, 'BAM 112', 'BUSINESS MATHEMATICS I', 2, 1, 1, 1),
(31, 'BAM 112', 'BUSINESS MATHEMATICS I', 2, 1, 2, 1),
(32, 'BAM 113', 'PRINCIPLES OF LAW', 2, 1, 1, 1),
(33, 'BAM 113', 'PRINCIPLES OF LAW', 2, 1, 2, 1),
(34, 'BAM 114', 'PRINCIPLES OF ECONOMICS I', 3, 1, 2, 1),
(35, 'BAM 116', 'ELEMENTS OF PUBLIC ADMINISTRATION', 3, 2, 2, 1),
(36, 'BAM 117', 'PRINCIPLES OF PURCHASING', 2, 2, 2, 1),
(37, 'BAM 121', 'INTRODUCTION TO BUSINESS II', 3, 2, 2, 1),
(38, 'BAM 123', 'INTRODUCTION TO SOCIAL PSYCHOLOGY', 2, 2, 2, 1),
(39, 'BAM 125', 'DATA PROCESSING I', 3, 2, 2, 1),
(40, 'BAM 214', 'BUSINESS LAW', 2, 2, 2, 1),
(41, 'BAM 217', 'BUSINESS RESEARCH METHODS', 2, 3, 2, 1),
(42, 'BAM 221', 'PRINCIPLES OF MANAGEMENT II', 3, 3, 2, 1),
(43, 'BAM 222', 'BUSINESS STATISTICS II', 2, 3, 1, 1),
(44, 'BAM 222', 'BUSINESS STATISTICS II', 2, 3, 2, 1),
(45, 'BAM 311', 'PRACTICE OF MANAGEMENT', 3, 4, 2, 1),
(46, 'BAM 313', 'QUANTITATIVE TECHNIQUES IN BUSINESS', 3, 4, 2, 1),
(47, 'BAM 314', 'HUMAN CAPITAL MANAGEMENT I', 3, 4, 2, 1),
(48, 'BAM 316', 'FINANCIAL MANAGEMENT I', 3, 4, 2, 1),
(49, 'BAM 321', 'MANAGEMENT INFORMATION SYSTEM', 3, 4, 2, 1),
(50, 'BAM 322', 'ORGANSATIONAL BEHAVIOUR II', 3, 5, 2, 1),
(51, 'BAM 323', 'MANAGEMENT OF DEVELOPMENT', 3, 5, 2, 1),
(52, 'BAM 412', 'MANAGERIAL ECONOMICS I', 3, 5, 2, 1),
(53, 'BAM 415', 'COMPANY LAW', 2, 6, 2, 1),
(54, 'BAM 421', 'BUSINESS POLICY AND STRATEGIES II', 3, 6, 2, 1),
(55, 'BAM 422', 'MANAGERIAL ECONOMICS II', 3, 6, 2, 1),
(56, 'BFN 111', 'ELEMENTS OF BANKING I', 2, 2, 1, 1),
(57, 'BFN 112', 'PRINCIPLES OF ECONOMICS I', 3, 1, 1, 1),
(58, 'BFN 213', 'BUSINESS RESEARCH METHODS', 2, 3, 1, 1),
(59, 'COM 111', 'INTRODUCTION TO COMPUTER', 2, 1, 1, 1),
(60, 'COM 111', 'INTRODUCTION TO COMPUTER', 2, 1, 2, 1),
(61, 'COM 111', 'INTRODUCTION TO COMPUTING', 3, 1, 3, 1),
(62, 'COM 111', 'INTRODUCTION TO COMPUTER ', 2, 1, 5, 1),
(63, 'COM 111', 'INTRODUCTION TO COMPUTER', 2, 1, 7, 1),
(65, 'COM 111', 'INTRODUCTION TO COMPUTER', 2, 1, 8, 1),
(66, 'COM 112', 'INTRODUCTION TO DIGITAL ELECTRONICS', 3, 1, 3, 1),
(67, 'COM 113', 'INTRODUCTION TO PROGRAMMING', 3, 1, 3, 1),
(68, 'COM 123', 'COMPUTER APPLICATION PACKAGE', 3, 2, 3, 1),
(69, 'COM 126', 'PC UPGRADE AND MAINTENANCE', 3, 2, 3, 1),
(70, 'COM 128', 'INTRODUCTION TO OPERATING SYSTEM', 2, 2, 3, 1),
(71, 'COM 211', 'COMPUTER PROGRAMMING USING OOBASIC', 3, 2, 3, 1),
(72, 'COM 212', 'INTRODUCTION TO SYSTEM PROGRAMMING', 3, 2, 3, 1),
(74, 'COM 218', 'DATABASE DESIGN', 2, 3, 3, 1),
(75, 'COM 221', 'COMPUTER PROGRAMMING USING OOFORTRAN', 3, 3, 3, 1),
(76, 'COM 223', 'BASIC HARDWARE MAINTENANCE', 3, 3, 3, 1),
(77, 'COM 224', 'MANAGEMENT INFORMATION SYSTEM', 3, 3, 3, 1),
(78, 'COM 225', 'WEB TECHNOLOGY', 3, 3, 3, 1),
(79, 'COM 311', 'OPERATING SYSTEM I', 3, 4, 3, 1),
(80, 'COM 312', 'DATABASE DESIGN I', 3, 4, 3, 1),
(81, 'COM 313', 'COMPUTER PROGRAMMING USING C++', 3, 4, 3, 1),
(82, 'COM 315', 'ADVANCED WEB PROGRAMMING', 3, 4, 3, 1),
(83, 'COM 324', 'INTRODUCTION TO SOFTWARE ENGINEERING', 3, 5, 3, 1),
(84, 'COM 326', 'INTRODUCTION TO HUMAN COMPUTER INTERACTION', 3, 5, 3, 1),
(85, 'COM 411', 'COMPUTER MODELLING AND SIMULATION', 3, 5, 3, 1),
(86, 'COM 416', 'MULTIMEDIA', 3, 6, 3, 1),
(87, 'COM 422', 'COMPUTER GRAPHICS AND ANIMATIONS', 3, 6, 3, 1),
(88, 'COM 423', 'INTRODUCTION TO ARTIFICIAL INTELLIGENCE AND EXPERT', 3, 6, 3, 1),
(90, 'EEC 112', 'INTRODUCTION TO COMPUTER SOFTWARE', 2, 1, 6, 1),
(92, 'EEC 117', 'COMPUTER HARDWARE I', 2, 1, 6, 1),
(94, 'EED 126', 'INTRODUCTION TO ENTREPRENEURSHIP', 2, 2, 1, 1),
(95, 'EED 126', 'INTRODUCTION TO ENTREPRENEURSHIP', 2, 2, 2, 1),
(96, 'EED 126', 'ENTREPRENEURSHIP DEVELOPMENT I', 2, 2, 3, 1),
(97, 'EED 216', 'INTRODUCTION TO ENTREPRENEURSHIP', 2, 2, 5, 1),
(98, 'EED 216', 'INTRODUCTION TO ENTREPRENEURSHIP', 2, 2, 7, 1),
(99, 'EED 323', 'ENTREPRENEURSHIP DEVELOPMENT', 3, 5, 1, 1),
(100, 'EED 413', 'ENTREPRENEURSHIP DEVELOPMENT', 2, 5, 2, 1),
(101, 'GLT 111', 'GENERAL LAB. TECHNIQUES', 2, 1, 8, 1),
(102, 'GNS 111', 'CITIZENSHIP EDUCATION II', 2, 1, 1, 1),
(103, 'GNS 111', 'CITIZENSHIP EDUCATION', 2, 1, 2, 1),
(104, 'GNS 127', 'CITIZENSHIP EDUCATION', 2, 1, 3, 1),
(105, 'GNS 111', 'CITIZENSHIP EDUCATION', 2, 1, 5, 1),
(106, 'GNS 111', 'CITIZENSHIP EDUCATION', 2, 1, 7, 1),
(108, 'GNS 111', 'CITIZENSHIP EDUCATION', 2, 1, 6, 1),
(109, 'GNS 112', 'TECHNICAL ENGLISH', 2, 1, 1, 1),
(110, 'GNS 112', 'TECHNICAL ENGLISH I', 2, 1, 2, 1),
(111, 'GNS 112', 'TECHNICAL ENGLISH I', 2, 1, 3, 1),
(112, 'GNS 112', 'USE OF ENGLISH I', 2, 1, 5, 1),
(113, 'GNS 112', 'USE OF ENGLISH', 2, 1, 7, 1),
(115, 'GNS 112', 'USE OF ENGLISH ', 2, 1, 6, 1),
(116, 'GNS 112', 'TECHNICAL ENGLISH I', 2, 1, 8, 1),
(117, 'GNS 113', 'GENERAL PRINCIPLES OF LAW', 2, 1, 7, 1),
(118, 'GNS 118', 'USE OF LIBRARY', 1, 1, 1, 1),
(119, 'GNS 118', 'USE OF LIBRARY', 1, 1, 2, 1),
(120, 'GNS 118', 'USE OF LIBRARY', 1, 1, 3, 1),
(121, 'GNS 118', 'USE OF LIBRARY', 1, 1, 5, 1),
(122, 'GNS 118', 'USE OF LIBRARY', 1, 1, 7, 1),
(124, 'GNS 118', 'USE OF LIBRARY', 1, 1, 6, 1),
(125, 'GNS 118', 'USE OF LIBRARY', 1, 1, 8, 1),
(126, 'GNS 211', 'USE OF ENGLISH II', 2, 2, 5, 1),
(127, 'GNS 212', 'INTRODUCTION TO SOCIOLOGY', 2, 3, 5, 1),
(128, 'GNS 223', 'INTRODUCTION TO PSYCHOLOGY', 2, 2, 5, 1),
(129, 'GNS 224', 'ECONOMICS', 2, 1, 5, 1),
(130, 'GNS 225', 'GEOGRAPHY OF NIGERIA', 2, 3, 5, 1),
(131, 'GNS 318', 'BUSINESS COMMUNICATION I', 3, 4, 1, 1),
(132, 'GNS 318', 'BUSINESS COMMUNICATION I', 2, 4, 3, 1),
(133, 'GNS 323', 'BUSINESS COMMUNICATION I', 2, 4, 2, 1),
(134, 'GNS 414', 'COMMUNICATION SKILLS', 2, 6, 2, 1),
(135, 'GNS 424', 'PROFESSIONAL ETHICS AND SOCIAL RESPONSIBILITY', 2, 6, 1, 1),
(136, 'HBF 315', 'ICT OFFICE APPLICATIONS I', 3, 5, 2, 1),
(137, 'ICT 211', 'INFORMATION TECHNOLOGY ESSENTIALS II', 3, 3, 1, 1),
(138, 'ICT 211', 'INFORMATION TECHNOLOGY ESSENTIALS II', 3, 3, 2, 1),
(139, 'ICT 211', 'INFORMATION TECHNOLOGY ESSENTIALS II', 2, 3, 3, 1),
(140, 'ICT 211', 'INFORMATION TECHNOLOGY ESSENTIALS II', 3, 3, 5, 1),
(142, 'INS 111', 'INTRODUCTION TO INSURANCE', 2, 1, 1, 1),
(144, 'MAC 111', 'ENGLISH FOR MASS COMMUNICATION I', 2, 1, 5, 1),
(146, 'MAC 113', 'YORUBA I', 2, 1, 5, 1),
(147, 'MAC 114', 'INTRODUCTION TO COMMUNICATION', 3, 1, 5, 1),
(148, 'MAC 115', 'INTRODUCTION TO NEWS GATHERING AND WRITING', 3, 1, 5, 1),
(149, 'MAC 116', 'GRAPHIC ARTS AND DESIGN', 3, 1, 5, 1),
(150, 'MAC 126', 'PRINCIPLES AND PRACTICE OF PUBLIC RELATIONS', 2, 2, 5, 1),
(151, 'MAC 127', 'INTRODUCTION TO BROADCASTING', 3, 2, 5, 1),
(152, 'MAC 210', 'INTRODUCTION TO BOOK PUBLISHING', 2, 3, 5, 1),
(153, 'MAC 211', 'ENGLISH FOR MASS COMMUNICATION III', 2, 2, 5, 1),
(154, 'MAC 212', 'INTRODUCTION TO RESEARCH METHOD', 2, 3, 5, 1),
(155, 'MAC 214', 'FEATURE WRITING', 3, 2, 5, 1),
(156, 'MAC 225', 'INVESTIGATIVE AND INTERPRETATIVE JOURNALISM', 2, 3, 5, 1),
(157, 'MAC 228', 'PUBLIC RELATION PRACTICE AND PLANNING', 2, 3, 5, 1),
(160, 'MEC 112', 'TECHNICAL DRAWING', 1, 1, 6, 1),
(162, 'MEC 113', 'BASIC WORKSHOP TECHNOLOGY AND PRACTICE', 2, 1, 6, 1),
(169, 'MKT 415', 'MARKETING MANAGEMENT', 3, 6, 2, 1),
(170, 'MTH 111', 'LOGIC AND LINEAR ALGEBRA', 2, 2, 3, 1),
(172, 'MTH 112', 'ALGEBRA AND ELEMENTARY TRIGONOMETRY', 2, 1, 6, 1),
(173, 'MTH 113', 'FUNCTIONS AND GOEMETRY', 2, 1, 3, 1),
(175, 'MTH 316', 'MATHEMATICAL METHODS I', 2, 4, 3, 1),
(176, 'MTH 321', 'MATHEMATICAL METHODS II', 2, 5, 3, 1),
(177, 'OTM 222', 'COMMUNICATION SKILLS', 2, 3, 2, 1),
(179, 'PAD 111', 'ELEMENTS OF PUBLIC ADMINISTRATION', 3, 2, 7, 1),
(180, 'PAD 112', 'THEORIES OF ADMINISTRATION & MANAGEMENT', 2, 1, 7, 1),
(181, 'PAD 114', 'PRINCIPLES OF ECONOMICS I', 3, 1, 7, 1),
(182, 'PAD 115', 'INTRODUCTION TO PSYCHOLOGY', 2, 2, 7, 1),
(183, 'PAD 116', 'BUSINESS MATHEMATICS', 2, 1, 7, 1),
(184, 'PAD 126', 'PUBLIC SERVICE RULES AND REGULATIONS', 2, 2, 7, 1),
(188, 'PAD 226', 'NIGERIAN LABOUR LAW', 2, 2, 7, 1),
(189, 'STA 111', 'DESCRIPTIVE STATISTICS I', 2, 2, 3, 1),
(190, 'STA 112', 'ELEMENTARY PROBABILITY THEORY', 2, 1, 3, 1),
(191, 'STA 311', 'STATISTICAL THEORY I', 3, 4, 3, 1),
(192, 'STA 314', 'OPERATING RESEARCH I', 3, 4, 3, 1),
(193, 'STA 321', 'STATISTICAL THEORY II', 3, 5, 3, 1),
(194, 'STA 411', 'OPERATIONS RESEARCH II', 3, 6, 3, 1),
(195, 'STB 111', 'PLANT AND ANIMAL TAXONOMY', 3, 1, 8, 1),
(196, 'STB 113', 'GENERAL BIOLOGY', 2, 2, 1, 1),
(197, 'STB 113', 'GENERAL BIOLOGY', 2, 2, 2, 1),
(198, 'STB 113', 'GENERAL BIOLOGY', 2, 2, 7, 1),
(199, 'STC 111', 'GENERAL PRINCIPLE OF CHEMISTRY', 3, 1, 8, 1),
(200, 'STP 111', 'MECHANICS', 3, 1, 8, 1),
(201, 'STP 113', 'ALGEBRA FOR SCIENCE', 2, 1, 8, 1),
(204, 'COM 111', 'INTRODUCTION TO COMPUTING', 2, 1, 4, 1),
(205, 'GNS 112', 'USE OF ENGLISH I', 2, 1, 4, 1),
(206, 'GNS 118', 'USE OF LIBRARY', 1, 1, 4, 1),
(207, 'MEC 111', 'MECHANICAL ENGINEERING SCIENCE (STATICS)', 3, 1, 4, 1),
(208, 'MEC 112', 'TECHNICAL DRAWING', 3, 1, 4, 1),
(209, 'MEC 113', 'BASIC WORKSHOP TECHNOLOGY AND PRACTICE', 3, 1, 4, 1),
(210, 'COM 111', 'INTRODUCTION TO COMPUTER', 2, 1, 6, 1),
(211, 'GNS 111', 'CITIZENSHIP EDUCATION', 2, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(255) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `dept_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `dept_code`) VALUES
(1, 'ACCOUNTANCY', 'ACC'),
(2, 'BUSINESS ADMINISTRATION', 'B/A'),
(3, 'COMPUTER SCIENCE', 'C/S'),
(4, 'MECHANICAL ENGINEERING', 'M/E'),
(5, 'MASS COMMUNICATION', 'M/C'),
(6, 'ELECTRICAL / ELECTRONICS ENGINEERING 	', 'E/E'),
(7, 'PUBLIC ADMINSTRATION', 'PAD'),
(8, 'SCIENCE LABORATORY TECHNOLOGY', 'SLT');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lecture_id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `combined_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lecture_id`, `course_id`, `combined_id`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3),
(4, 4, 42),
(5, 5, 40),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 10),
(10, 10, 10),
(11, 11, 11),
(13, 13, 13),
(14, 14, 14),
(15, 15, 46),
(16, 16, 17),
(17, 17, 17),
(18, 18, 49),
(19, 19, 52),
(20, 20, 20),
(21, 21, 21),
(22, 22, 22),
(23, 23, 23),
(24, 24, 24),
(25, 25, 25),
(26, 26, 27),
(27, 27, 27),
(28, 28, 28),
(29, 29, 29),
(30, 30, 183),
(31, 31, 183),
(32, 32, 33),
(33, 33, 33),
(34, 34, 129),
(35, 35, 35),
(36, 36, 36),
(37, 37, 37),
(38, 38, 38),
(39, 39, 39),
(40, 40, 40),
(41, 41, 58),
(42, 42, 42),
(43, 43, 43),
(44, 44, 43),
(45, 45, 45),
(46, 46, 46),
(47, 47, 47),
(48, 48, 25),
(49, 49, 49),
(50, 50, 50),
(51, 51, 51),
(52, 52, 52),
(53, 53, 13),
(54, 54, 54),
(55, 55, 55),
(56, 56, 56),
(57, 57, 129),
(58, 58, 58),
(59, 59, 63),
(60, 60, 63),
(61, 61, 63),
(62, 62, 63),
(63, 63, 63),
(65, 65, 63),
(66, 66, 66),
(67, 67, 67),
(68, 68, 68),
(69, 69, 69),
(70, 70, 70),
(71, 71, 71),
(72, 72, 72),
(74, 74, 74),
(75, 75, 75),
(76, 76, 76),
(77, 77, 49),
(78, 78, 78),
(79, 79, 79),
(80, 80, 80),
(81, 81, 81),
(82, 82, 82),
(83, 83, 83),
(84, 84, 84),
(85, 85, 85),
(86, 86, 86),
(87, 87, 87),
(88, 88, 88),
(90, 90, 90),
(92, 92, 92),
(94, 94, 96),
(95, 95, 96),
(96, 96, 96),
(97, 97, 98),
(98, 98, 98),
(99, 99, 99),
(100, 100, 99),
(101, 101, 101),
(102, 102, 210),
(103, 103, 210),
(104, 104, 210),
(105, 105, 210),
(106, 106, 210),
(108, 108, 210),
(109, 109, 116),
(110, 110, 116),
(111, 111, 116),
(112, 112, 116),
(113, 113, 116),
(115, 115, 116),
(116, 116, 116),
(117, 117, 33),
(118, 118, 125),
(119, 119, 125),
(120, 120, 125),
(121, 121, 125),
(122, 122, 125),
(124, 124, 125),
(125, 125, 125),
(126, 126, 126),
(127, 127, 127),
(128, 128, 38),
(129, 129, 129),
(130, 130, 130),
(131, 131, 132),
(132, 132, 132),
(133, 133, 132),
(134, 134, 134),
(135, 135, 135),
(136, 136, 136),
(137, 137, 139),
(138, 138, 139),
(139, 139, 139),
(140, 140, 139),
(142, 142, 142),
(144, 144, 144),
(146, 146, 146),
(147, 147, 147),
(148, 148, 148),
(149, 149, 149),
(150, 150, 150),
(151, 151, 151),
(152, 152, 152),
(153, 153, 153),
(154, 154, 154),
(155, 155, 155),
(156, 156, 156),
(157, 157, 157),
(160, 160, 207),
(162, 162, 162),
(169, 169, 169),
(170, 170, 170),
(172, 172, 172),
(173, 173, 173),
(175, 175, 175),
(176, 176, 176),
(177, 177, 177),
(179, 179, 35),
(180, 180, 180),
(181, 181, 129),
(182, 182, 38),
(183, 183, 183),
(184, 184, 184),
(188, 188, 188),
(189, 189, 189),
(190, 190, 190),
(191, 191, 191),
(192, 192, 192),
(193, 193, 193),
(194, 194, 194),
(195, 195, 195),
(196, 196, 196),
(197, 197, 196),
(198, 198, 196),
(199, 199, 199),
(200, 200, 200),
(201, 201, 201),
(203, 204, 63),
(204, 205, 116),
(205, 206, 125),
(206, 207, 206),
(207, 208, 207),
(208, 209, 162),
(209, 210, 63),
(210, 211, 210);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(255) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `bank_name` varchar(200) DEFAULT NULL,
  `acct_number` varchar(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `surname`, `bank_name`, `acct_number`, `email`, `tel`) VALUES
(1, 'ABOYADE', NULL, NULL, NULL, NULL),
(2, 'ADEBANJO', '', '', '', '08023852746'),
(3, 'ADEBESAN', NULL, NULL, NULL, NULL),
(4, 'ADEDOYIN', '', '', '', '08036278661'),
(5, 'ADEEKO', NULL, NULL, NULL, NULL),
(6, 'ADEFULU', 'WEMA', '0231187453', '', '08029432249'),
(7, 'ADEGBESAN', NULL, NULL, NULL, NULL),
(8, 'ADEKUNLE', 'GTB', '0126121592', 'Olusegun.adekunle@gaposa.edu.ng', '08034254976'),
(9, 'ADELOLA', NULL, NULL, NULL, NULL),
(10, 'ADENIKE', NULL, NULL, NULL, NULL),
(12, 'ADEOYE', NULL, NULL, NULL, NULL),
(13, 'ADERANTI', NULL, NULL, NULL, NULL),
(14, 'ADEYEMI', NULL, NULL, NULL, NULL),
(15, 'ADEYEMO', NULL, NULL, NULL, NULL),
(16, 'ADUEWEEEZE', NULL, NULL, NULL, NULL),
(17, 'AFOLABI', 'WEMA', '0221193338', 'michael.afolabi@gaposa.edu.ng', '08061336492'),
(18, 'AGIDA', 'FIRST', '3048230590', '', '08058881350'),
(19, 'AINA ', NULL, NULL, NULL, '09093775199'),
(20, 'AKAH', 'GTB', '0005141839', '', '08029195781'),
(21, 'AKINTODE', NULL, NULL, NULL, NULL),
(22, 'AKINTUNDE', NULL, NULL, NULL, NULL),
(23, 'ALABA', NULL, NULL, NULL, NULL),
(24, 'ALADENIKA', NULL, NULL, NULL, NULL),
(25, 'AMNIYA', NULL, NULL, NULL, NULL),
(26, 'AMONIYAN', NULL, NULL, NULL, NULL),
(27, 'AMUSA', NULL, NULL, NULL, NULL),
(28, 'AMUSA/OBA', NULL, NULL, NULL, NULL),
(29, 'ANIH', NULL, NULL, NULL, NULL),
(30, 'ANINKAN', 'Fcmb', '1221644010', '', '08156775874'),
(31, 'ARIBI', NULL, NULL, NULL, NULL),
(32, 'ARIYIBI', NULL, NULL, NULL, NULL),
(33, 'AROWOSEGBE', 'Polaris', '1015971177', '', ''),
(34, 'AWODOYIN', NULL, NULL, NULL, NULL),
(35, 'AWOFODU', NULL, NULL, NULL, NULL),
(36, 'AWONIYI', 'GTB', '0150259917', 'Modupe.awoniyi@gaposa.edu.ng', '08069532260'),
(37, 'AWONUGA', NULL, NULL, NULL, NULL),
(38, 'AYENI', NULL, NULL, NULL, NULL),
(39, 'BALOGUN', NULL, NULL, NULL, NULL),
(40, 'BANJO', NULL, NULL, NULL, NULL),
(41, 'BELLO', 'GTB', '8060212881', '', '08060212881'),
(42, 'BIYA', 'BIYA', '2011769145', '', '08062275183'),
(43, 'BURAIMOH', 'Polaris', '1761871316', '', ''),
(44, 'BUSARIMOH', NULL, NULL, NULL, NULL),
(45, 'CLEMENT', 'GTB', '0122566348', '', '08131344127'),
(46, 'CYRIL', NULL, NULL, NULL, NULL),
(47, 'DADA', 'Polaris', '1761819121', '', '07063785047'),
(48, 'DARAMOLA', NULL, NULL, NULL, NULL),
(49, 'EKO', '', '', '', '08034889389'),
(50, 'ELEYOWO', NULL, NULL, NULL, NULL),
(51, 'ERINFOLAMI', 'Polaris', '1761775672', '', '08066353245'),
(52, 'FAWOLE', NULL, NULL, NULL, NULL),
(53, 'GIWA', NULL, NULL, NULL, NULL),
(54, 'HOD ACC', NULL, NULL, NULL, NULL),
(55, 'HOD ARCH', NULL, NULL, NULL, NULL),
(56, 'HOD B/F', NULL, NULL, NULL, NULL),
(57, 'HOD B/TECH', NULL, NULL, NULL, NULL),
(58, 'HOD BA', NULL, NULL, NULL, NULL),
(59, 'HOD P/T', NULL, NULL, NULL, NULL),
(60, 'HOD P/S', NULL, NULL, NULL, NULL),
(62, 'HOD BIO CHEM', NULL, NULL, NULL, NULL),
(63, 'HOD CHEM', NULL, NULL, NULL, NULL),
(65, 'HOD C/E', NULL, NULL, NULL, NULL),
(67, 'HOD ELECT', NULL, NULL, NULL, NULL),
(71, 'HOD ENVR', NULL, NULL, NULL, NULL),
(73, 'HOD MKT', NULL, NULL, NULL, NULL),
(74, 'HOD OTM', NULL, NULL, NULL, NULL),
(75, 'HOD PAD', NULL, NULL, NULL, NULL),
(76, 'IBIKUNLE ', 'Polaris', '1015821227', '', '08052008129'),
(77, 'IBRAHIM', NULL, NULL, NULL, NULL),
(78, 'IDOWU [Mrs]', 'Fcmb', '3255335014', '', '08062423064'),
(79, 'JAIYESIMI', NULL, NULL, NULL, NULL),
(80, 'JAMES', NULL, NULL, NULL, NULL),
(81, 'KAREEM', '', '', '', '08035268959'),
(82, 'KAYODE', NULL, NULL, NULL, NULL),
(84, 'KOLAWOLE', '', '', '', '08038420467'),
(85, 'KUPONIYI', NULL, NULL, NULL, NULL),
(86, 'LAWAL', 'GTB', '0116866513', '', ''),
(87, 'LOGUNLEKO', 'GTB', '0161435386', '', '08035243849'),
(88, 'MAMORA', '', '', '', '08053687546'),
(89, 'MATTEW ', NULL, NULL, NULL, NULL),
(90, 'MUSARI', NULL, NULL, NULL, NULL),
(91, 'OBA', 'GTB', '0022369423', 'victor.oba@gaposa.edu.ng', '07064453876'),
(92, 'OGINI', '', '', '', '08186586478'),
(93, 'OGUNBANJO [MR]', 'Polaris', '', '', '08035634830'),
(94, 'OGUNIRAN', '', '', '', '08065919695'),
(95, 'OGUNMEFUN', NULL, NULL, NULL, NULL),
(96, 'OGUNSANYA', 'Access', '', '', '07032306435'),
(97, 'OGUNSOLA', 'Polaris', '1741602785', 'modupe.ogunsola@gaposa.edu.ng', '08060580467'),
(98, 'OGUNTUGA', 'Fcmb', '2961307010', '', '08066870896'),
(99, 'OGUNYEMI', NULL, NULL, NULL, NULL),
(100, 'OGUNYINKA', 'Access', '0022364337', '', '08025766864'),
(101, 'OJOYE', 'Polaris', '1017161345', '', '08033533776'),
(102, 'OKOKO', NULL, NULL, NULL, NULL),
(103, 'OKUNBANJO', 'WEMA', '0230081750', 'Idowu.okubanjo@gaposa.edu.ng', '08035034455'),
(104, 'OKUNUGA', NULL, NULL, NULL, NULL),
(105, 'OLA', NULL, NULL, NULL, NULL),
(106, 'OLAIYA', NULL, NULL, NULL, NULL),
(107, 'OLAJIDE', NULL, NULL, NULL, NULL),
(108, 'OLANIYAN', NULL, NULL, NULL, NULL),
(109, 'OLUGBADE', NULL, NULL, NULL, NULL),
(110, 'OLUGBEMI', NULL, NULL, NULL, NULL),
(111, 'OMISANDE', NULL, NULL, NULL, NULL),
(112, 'ONALAJA', 'ZENITH', '1006800416', '', '08060696003'),
(113, 'ONANUBI', 'GTB', '0168177058', '', '08130043004'),
(114, 'ONI', 'GTB', '0032728519', '', '08062618986'),
(115, 'OPALEYE', NULL, NULL, NULL, NULL),
(116, 'OSIFESO', 'GTB', '236065045', '', '07063184895'),
(117, 'OSINAIKE', '', '', '', '08035633273'),
(118, 'OSIYOYE', NULL, NULL, NULL, NULL),
(119, 'OWOLABI', NULL, NULL, NULL, NULL),
(120, 'OYEBOLA', NULL, NULL, NULL, NULL),
(121, 'OYEKUNLE', 'Polaris', '0174160631', '', '08062273462'),
(122, 'RAJI', NULL, NULL, NULL, NULL),
(123, 'SADIKU', 'GTB', '0154029884', 'sibsadiku@gmail.com', '08030849415'),
(124, 'SALAKO', '', '', '', '08032492505'),
(125, 'SALAMI', 'FIRST', '3005690739', '', '08038101589'),
(126, 'SHOFOYEKE', 'GTB', '0126843443', '', ''),
(127, 'SOYOOLA[Mrs]', 'Fcmb', '6738626016', '', '08024606662'),
(128, 'SOLARU', 'GTB', '0034917021', '', '07038126628'),
(129, 'SOTAYO', 'GTB', '0032394037', '', '08151152337'),
(130, 'SOTONWA', 'GTB', '0032825697', '', '08038499893'),
(131, 'TAIWO', NULL, NULL, NULL, NULL),
(132, 'TOBINSPIFF', NULL, NULL, NULL, NULL),
(133, 'USMAN', NULL, NULL, NULL, NULL),
(134, 'WALE', NULL, NULL, NULL, NULL),
(135, 'OROBIYI', '', '', '', '08035685291'),
(136, 'HOD SURVEY', NULL, NULL, NULL, NULL),
(137, 'HOD F/TECH', NULL, NULL, NULL, NULL),
(138, 'HOD INS', NULL, NULL, NULL, NULL),
(139, 'HOD SLT', NULL, NULL, NULL, NULL),
(140, 'HOD C/S', NULL, NULL, NULL, NULL),
(141, 'HOD WELD', NULL, NULL, NULL, NULL),
(142, 'HOD ESTATE', NULL, NULL, NULL, NULL),
(144, 'HOD MICR', NULL, NULL, NULL, NULL),
(145, 'HOD M/E', NULL, NULL, NULL, NULL),
(146, 'OGUNTOYE', 'Polaris', '1761809698', '', '08038541953'),
(147, 'OGUNDEIN', NULL, NULL, NULL, NULL),
(148, 'MAHMOOD', '', '', '', '07081969817'),
(149, 'ODUMESU', '', '', '', '07068846774'),
(150, 'OGUNBANJO [MISS]', 'Fcmb', '3202975014', 'Olufunmilola.ogunbanjo@gaposa.edu.ng', '08034262326'),
(168, 'KEHINDE', '', '', '', '08063853176'),
(169, 'OLAYIWOLA', 'Polaris', '1741602723', '', '08057369386'),
(170, 'OSIFADE', 'GTB', '0049930877', '', '08066867735');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_details`
--

CREATE TABLE `lecture_details` (
  `LDID` int(255) NOT NULL,
  `comibined_id` int(255) NOT NULL,
  `lecturer_id` int(255) NOT NULL,
  `duration` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture_details`
--

INSERT INTO `lecture_details` (`LDID`, `comibined_id`, `lecturer_id`, `duration`) VALUES
(1, 3, 78, 1),
(2, 183, 130, 1),
(3, 33, 51, 1),
(4, 129, 91, 1),
(5, 63, 19, 1),
(6, 116, 117, 1),
(7, 210, 128, 1),
(8, 125, 170, 1),
(9, 29, 36, 1),
(10, 66, 123, 1),
(11, 67, 112, 1),
(12, 173, 130, 1),
(13, 144, 146, 1),
(14, 149, 127, 1),
(15, 147, 129, 1),
(16, 148, 127, 1),
(17, 146, 47, 1),
(18, 180, 6, 1),
(19, 172, 130, 1),
(20, 207, 94, 1),
(21, 162, 92, 1),
(22, 90, 49, 1),
(23, 92, 19, 1),
(24, 206, 15, 1),
(25, 101, 4, 1),
(26, 195, 88, 1),
(27, 199, 81, 1),
(28, 200, 34, 1),
(29, 201, 130, 1),
(30, 39, 123, 1),
(31, 35, 30, 1),
(32, 196, 116, 1),
(33, 37, 36, 1),
(34, 98, 17, 1),
(35, 38, 91, 1),
(36, 36, 103, 1),
(37, 40, 51, 1),
(38, 6, 93, 1),
(39, 56, 98, 1),
(40, 7, 84, 1),
(41, 68, 112, 1),
(42, 182, 91, 1),
(43, 188, 51, 1),
(44, 184, 6, 1),
(45, 153, 147, 1),
(46, 155, 127, 1),
(47, 151, 129, 1),
(48, 150, 169, 1),
(49, 126, 117, 1),
(50, 71, 123, 1),
(51, 189, 76, 1),
(52, 70, 18, 1),
(53, 72, 18, 1),
(54, 170, 76, 1),
(55, 69, 87, 1),
(56, 41, 17, 1),
(57, 58, 17, 1),
(58, 43, 76, 1),
(59, 177, 20, 1),
(60, 10, 93, 1),
(61, 139, 18, 1),
(62, 42, 97, 1),
(63, 11, 135, 1),
(64, 13, 51, 1),
(65, 8, 101, 1),
(66, 76, 148, 1),
(67, 75, 121, 1),
(68, 74, 87, 1),
(69, 78, 148, 1),
(70, 49, 100, 1),
(71, 132, 146, 1),
(72, 48, 1, 1),
(73, 14, 135, 1),
(74, 19, 125, 1),
(75, 17, 149, 1),
(76, 46, 8, 1),
(77, 82, 87, 1),
(78, 81, 42, 1),
(79, 80, 114, 1),
(80, 175, 76, 1),
(81, 79, 100, 1),
(82, 192, 123, 1),
(83, 191, 130, 1),
(84, 45, 30, 1),
(85, 47, 97, 1),
(86, 142, 78, 1),
(87, 190, 130, 1),
(88, 130, 113, 1),
(89, 152, 113, 1),
(90, 154, 17, 1),
(91, 127, 128, 1),
(92, 157, 129, 1),
(93, 156, 113, 1),
(94, 99, 8, 1),
(95, 136, 112, 1),
(96, 51, 103, 1),
(97, 52, 125, 1),
(98, 50, 150, 1),
(99, 20, 149, 1),
(100, 21, 41, 1),
(101, 22, 78, 1),
(102, 83, 123, 1),
(103, 84, 18, 1),
(104, 85, 121, 1),
(105, 193, 130, 1),
(106, 176, 76, 1),
(107, 86, 19, 1),
(108, 87, 42, 1),
(109, 88, 114, 1),
(110, 89, 123, 1),
(111, 194, 123, 1),
(112, 27, 125, 1),
(113, 23, 84, 1),
(114, 24, 168, 1),
(115, 28, 41, 1),
(116, 135, 101, 1),
(117, 54, 8, 1),
(118, 134, 20, 1),
(119, 55, 125, 1),
(120, 169, 2, 1),
(121, 25, 101, 1),
(122, 96, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lecture_schedule`
--

CREATE TABLE `lecture_schedule` (
  `LSID` int(255) NOT NULL,
  `combine_id` int(255) NOT NULL,
  `start_time` int(10) DEFAULT NULL,
  `end_time` int(10) DEFAULT NULL,
  `venue_id` int(255) NOT NULL,
  `day` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture_schedule`
--

INSERT INTO `lecture_schedule` (`LSID`, `combine_id`, `start_time`, `end_time`, `venue_id`, `day`) VALUES
(1, 195, 14, 15, 10, 1),
(2, 63, 8, 9, 32, 1),
(3, 116, 14, 15, 33, 2),
(4, 125, 16, 17, 20, 2),
(5, 210, 11, 12, 7, 1),
(6, 129, 17, 18, 22, 2),
(7, 98, 8, 9, 20, 1),
(8, 183, 12, 13, 9, 1),
(9, 33, 9, 10, 27, 1),
(10, 3, 13, 14, 19, 1),
(11, 38, 10, 11, 1, 1),
(12, 196, 11, 12, 21, 1),
(13, 139, 12, 13, 4, 1),
(14, 35, 17, 18, 26, 2),
(15, 40, 12, 13, 25, 1),
(16, 29, 15, 16, 8, 1),
(17, 207, 9, 10, 28, 1),
(18, 162, 15, 16, 29, 1),
(19, 58, 17, 18, 15, 2),
(20, 39, 16, 17, 2, 1),
(21, 37, 8, 9, 3, 1),
(22, 36, 14, 15, 15, 2),
(23, 68, 14, 15, 2, 1),
(24, 49, 13, 14, 3, 1),
(25, 132, 16, 17, 16, 2),
(26, 43, 15, 16, 16, 1),
(27, 10, 14, 15, 8, 2),
(28, 42, 13, 14, 4, 1),
(29, 13, 11, 12, 1, 1),
(30, 71, 9, 10, 19, 1),
(31, 189, 12, 13, 21, 1),
(32, 70, 8, 9, 9, 1),
(33, 72, 14, 15, 27, 2),
(34, 170, 10, 11, 26, 1),
(35, 69, 13, 14, 25, 1),
(36, 66, 13, 14, 28, 1),
(37, 67, 17, 18, 29, 2),
(38, 173, 9, 10, 22, 1),
(39, 144, 9, 10, 32, 1),
(40, 149, 15, 16, 33, 2),
(41, 147, 12, 13, 7, 1),
(42, 148, 10, 11, 20, 1),
(43, 146, 13, 14, 16, 1),
(44, 180, 13, 14, 15, 1),
(45, 172, 16, 17, 2, 1),
(46, 90, 17, 18, 3, 1),
(47, 92, 12, 13, 8, 1),
(48, 206, 14, 15, 4, 1),
(49, 101, 11, 12, 1, 1),
(50, 199, 10, 11, 19, 1),
(51, 200, 17, 18, 21, 2),
(52, 201, 13, 14, 9, 1),
(53, 17, 15, 16, 27, 2),
(54, 46, 12, 13, 26, 1),
(55, 142, 14, 15, 25, 1),
(56, 190, 14, 15, 28, 1),
(57, 99, 14, 15, 29, 2),
(58, 52, 8, 9, 22, 1),
(59, 27, 10, 11, 32, 1),
(60, 25, 8, 9, 33, 1),
(61, 153, 14, 15, 7, 2),
(62, 155, 9, 10, 20, 1),
(63, 151, 16, 17, 16, 2),
(64, 150, 15, 16, 15, 2),
(65, 126, 11, 12, 2, 1),
(66, 6, 9, 10, 3, 1),
(67, 56, 13, 14, 8, 1),
(68, 7, 8, 9, 4, 1),
(69, 188, 14, 15, 1, 1),
(70, 184, 14, 15, 19, 2),
(71, 177, 8, 9, 21, 1),
(72, 11, 9, 10, 9, 1),
(73, 8, 10, 11, 27, 1),
(74, 76, 8, 9, 26, 1),
(75, 75, 9, 10, 25, 1),
(76, 74, 15, 16, 28, 1),
(77, 78, 10, 11, 29, 1),
(78, 130, 16, 17, 22, 2),
(79, 152, 11, 12, 32, 1),
(80, 127, 9, 10, 33, 1),
(81, 157, 15, 16, 7, 2),
(82, 156, 14, 15, 3, 1),
(83, 14, 10, 11, 9, 1),
(84, 82, 10, 11, 20, 1),
(85, 81, 12, 13, 16, 1),
(86, 80, 11, 12, 15, 1),
(87, 175, 15, 16, 2, 2),
(88, 79, 8, 9, 8, 1),
(89, 192, 15, 16, 4, 1),
(90, 191, 14, 15, 1, 2),
(91, 45, 11, 12, 19, 1),
(92, 47, 9, 10, 21, 1),
(93, 136, 11, 12, 27, 1),
(94, 51, 9, 10, 26, 1),
(95, 50, 15, 16, 25, 1),
(96, 20, 10, 11, 28, 1),
(97, 21, 11, 12, 29, 1),
(98, 22, 9, 10, 22, 1),
(99, 83, 12, 13, 32, 1),
(100, 84, 10, 11, 33, 1),
(101, 85, 8, 9, 7, 1),
(102, 193, 15, 16, 3, 2),
(103, 176, 14, 15, 9, 1),
(104, 86, 11, 12, 20, 1),
(105, 87, 9, 10, 16, 1),
(106, 88, 8, 9, 15, 1),
(107, 89, 16, 18, 2, 1),
(108, 194, 15, 16, 8, 2),
(109, 23, 14, 15, 4, 2),
(110, 24, 12, 13, 1, 1),
(111, 28, 8, 9, 19, 1),
(112, 135, 13, 14, 21, 1),
(113, 54, 8, 9, 27, 1),
(114, 134, 13, 14, 26, 1),
(115, 55, 14, 15, 25, 2),
(116, 169, 15, 16, 28, 2),
(117, 96, 16, 17, 19, 2),
(118, 154, 15, 16, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(255) NOT NULL,
  `level_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`) VALUES
(1, 'ND I'),
(2, 'ND II'),
(3, 'ND III'),
(4, 'HND I'),
(5, 'HND II'),
(6, 'HND III');

-- --------------------------------------------------------

--
-- Table structure for table `schol_open_details`
--

CREATE TABLE `schol_open_details` (
  `open_id` int(2) NOT NULL,
  `time_open` time NOT NULL,
  `time_close` time NOT NULL,
  `days` varchar(20) NOT NULL,
  `total_days` int(5) NOT NULL,
  `total_hours` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schol_open_details`
--

INSERT INTO `schol_open_details` (`open_id`, `time_open`, `time_close`, `days`, `total_days`, `total_hours`) VALUES
(1, '08:00:00', '18:00:00', '5,6', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(20) NOT NULL,
  `semester_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`) VALUES
(1, 'FIRST'),
(2, 'SECOND'),
(3, 'THIRD');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'director', 'director');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(255) NOT NULL,
  `venue_name` varchar(50) NOT NULL,
  `length` int(255) DEFAULT NULL,
  `width` int(244) DEFAULT NULL,
  `area` int(255) DEFAULT NULL,
  `capacity` int(255) NOT NULL,
  `exclusive` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`, `length`, `width`, `area`, `capacity`, `exclusive`) VALUES
(1, 'A001', 0, 0, 0, 156, 0),
(2, 'A002', 0, 0, 0, 95, 0),
(3, 'A003', 0, 0, 0, 96, 0),
(4, 'A004', 0, 0, 0, 136, 0),
(5, 'ArcTech S 1', 0, 0, 0, 40, 1),
(6, 'ArcTech S 2', 0, 0, 0, 40, 1),
(7, 'AUD', 0, 0, 0, 1000, 0),
(8, 'B001', 0, 0, 0, 105, 0),
(9, 'B002', 0, 0, 0, 220, 0),
(10, 'BIO LAB', 0, 0, 0, 100, 1),
(11, 'CHM LAB', 0, 0, 0, 100, 1),
(12, 'B/E/LAB', 0, 0, 0, 145, 1),
(13, 'Comp Sci Lab2', 0, 0, 0, 60, 1),
(14, 'DIG LAB', 0, 0, 0, 40, 1),
(15, 'E001', 0, 0, 0, 90, 0),
(16, 'E002', 0, 0, 0, 75, 0),
(17, 'EEE Lab', 0, 0, 0, 60, 1),
(18, 'F001 ', 0, 0, 0, 60, 1),
(19, 'F002', 0, 0, 0, 180, 0),
(20, 'F003', 0, 0, 0, 580, 0),
(21, 'F005', 0, 0, 0, 180, 0),
(22, 'F006', 0, 0, 0, 350, 0),
(23, 'F/TECH Lab', 0, 0, 0, 60, 1),
(24, 'F/TECH W/S', 0, 0, 0, 40, 1),
(25, 'GC 101', 0, 0, 0, 230, 0),
(26, 'GC 201', 0, 0, 0, 230, 0),
(27, 'GC 202', 0, 0, 0, 230, 0),
(28, 'GC 203', 0, 0, 0, 230, 0),
(29, 'GC 204', 0, 0, 0, 230, 0),
(30, 'GL 102', 0, 0, 0, 80, 1),
(31, 'GL 103', 0, 0, 0, 80, 1),
(32, 'H001', 0, 0, 0, 550, 0),
(33, 'H002', 0, 0, 0, 550, 0),
(34, 'Mech Eng W/S', 0, 0, 0, 60, 1),
(35, 'PHY LAB', 0, 0, 0, 100, 1),
(36, 'TD ROOM', 0, 0, 0, 60, 1),
(38, 'TDR', NULL, NULL, NULL, 50, 1),
(39, 'FT LAB', NULL, NULL, NULL, 50, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_course_class`
-- (See below for the actual view)
--
CREATE TABLE `vw_course_class` (
`course_id` int(255)
,`course_code` varchar(10)
,`course_title` varchar(50)
,`course_unit` int(10)
,`class_id` int(255)
,`semester_id` int(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_department_full`
-- (See below for the actual view)
--
CREATE TABLE `vw_department_full` (
`class_id` int(255)
,`level_id` int(5)
,`level_name` varchar(50)
,`department_id` int(255)
,`dept_code` varchar(10)
,`department_name` varchar(50)
,`population` int(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_full_course`
-- (See below for the actual view)
--
CREATE TABLE `vw_full_course` (
`course_id` int(255)
,`course_code` varchar(10)
,`course_title` varchar(50)
,`course_unit` int(10)
,`department_id` int(255)
,`dept_code` varchar(10)
,`level_id` int(255)
,`level_name` varchar(50)
,`population` int(255)
,`class_id` int(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_lecturer_view`
-- (See below for the actual view)
--
CREATE TABLE `vw_lecturer_view` (
`LDID` int(255)
,`combined_id` int(255)
,`combined_list` mediumtext
,`combined_count` bigint(21)
,`combined_population` decimal(65,0)
,`duration` int(5)
,`lecturer_id` int(255)
,`surname` varchar(50)
,`LSID` int(255)
,`combine_id` int(255)
,`start_time` int(10)
,`end_time` int(10)
,`venue_id` int(255)
,`day` int(5)
,`SUM(duration)` decimal(32,0)
,`COUNT(lecturer_id)` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_lecture_details_full`
-- (See below for the actual view)
--
CREATE TABLE `vw_lecture_details_full` (
`LDID` int(255)
,`combined_id` int(255)
,`combined_list` mediumtext
,`combined_count` bigint(21)
,`combined_population` decimal(65,0)
,`duration` int(5)
,`lecturer_id` int(255)
,`surname` varchar(50)
,`tel` varchar(15)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_lecture_population`
-- (See below for the actual view)
--
CREATE TABLE `vw_lecture_population` (
`lecture_id` int(255)
,`course_id` int(255)
,`combined_id` int(255)
,`combined_count` bigint(21)
,`combined_list` mediumtext
,`combined_population` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_lecture_schedule_full`
-- (See below for the actual view)
--
CREATE TABLE `vw_lecture_schedule_full` (
`LDID` int(255)
,`combined_id` int(255)
,`combined_list` mediumtext
,`combined_count` bigint(21)
,`combined_population` decimal(65,0)
,`duration` int(5)
,`lecturer_id` int(255)
,`surname` varchar(50)
,`tel` varchar(15)
,`level_id` int(255)
,`level_name` varchar(50)
,`LSID` int(255)
,`combine_id` int(255)
,`start_time` int(10)
,`end_time` int(10)
,`venue_id` int(255)
,`venue_name` varchar(50)
,`day` int(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_lecture_schedule_load`
-- (See below for the actual view)
--
CREATE TABLE `vw_lecture_schedule_load` (
`work_load` bigint(21)
,`LDID` int(255)
,`combined_id` int(255)
,`combined_list` mediumtext
,`combined_count` bigint(21)
,`combined_population` decimal(65,0)
,`duration` int(5)
,`lecturer_id` int(255)
,`surname` varchar(50)
,`tel` varchar(15)
,`level_id` int(255)
,`level_name` varchar(50)
,`LSID` int(255)
,`combine_id` int(255)
,`start_time` int(10)
,`end_time` int(10)
,`venue_id` int(255)
,`venue_name` varchar(50)
,`day` int(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_level_combined`
-- (See below for the actual view)
--
CREATE TABLE `vw_level_combined` (
`comibined_id` int(255)
,`duration` int(5)
,`combined_population` decimal(65,0)
,`combined_list` mediumtext
,`course_id` int(255)
,`course_code` varchar(10)
,`course_title` varchar(50)
,`course_unit` int(10)
,`department_id` int(255)
,`dept_code` varchar(10)
,`level_id` int(255)
,`level_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_venue_report`
-- (See below for the actual view)
--
CREATE TABLE `vw_venue_report` (
`LDID` int(255)
,`combined_id` int(255)
,`combined_list` mediumtext
,`combined_count` bigint(21)
,`combined_population` decimal(65,0)
,`duration` int(5)
,`lecturer_id` int(255)
,`surname` varchar(50)
,`LSID` int(255)
,`combine_id` int(255)
,`start_time` int(10)
,`end_time` int(10)
,`venue_id` int(255)
,`day` int(5)
,`SUM(duration)` decimal(32,0)
,`COUNT(venue_id)` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_work_load`
-- (See below for the actual view)
--
CREATE TABLE `vw_work_load` (
`work_load` bigint(21)
,`lecturer_id` int(255)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_course_class`
--
DROP TABLE IF EXISTS `vw_course_class`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_course_class`  AS  select `t1`.`course_id` AS `course_id`,`t1`.`course_code` AS `course_code`,`t1`.`course_title` AS `course_title`,`t1`.`course_unit` AS `course_unit`,`t2`.`class_id` AS `class_id`,`t1`.`semester_id` AS `semester_id` from (`course` `t1` left join `class` `t2` on(`t1`.`level_id` = `t2`.`level_id` and `t1`.`department_id` = `t2`.`department_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_department_full`
--
DROP TABLE IF EXISTS `vw_department_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_department_full`  AS  select `t1`.`class_id` AS `class_id`,`t1`.`level_id` AS `level_id`,`t3`.`level_name` AS `level_name`,`t1`.`department_id` AS `department_id`,`t2`.`dept_code` AS `dept_code`,`t2`.`department_name` AS `department_name`,`t1`.`population` AS `population` from ((`class` `t1` left join `department` `t2` on(`t1`.`department_id` = `t2`.`department_id`)) left join `level` `t3` on(`t1`.`level_id` = `t3`.`level_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_full_course`
--
DROP TABLE IF EXISTS `vw_full_course`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_full_course`  AS  select `t1`.`course_id` AS `course_id`,`t1`.`course_code` AS `course_code`,`t1`.`course_title` AS `course_title`,`t1`.`course_unit` AS `course_unit`,`t1`.`department_id` AS `department_id`,`t2`.`dept_code` AS `dept_code`,`t1`.`level_id` AS `level_id`,`t3`.`level_name` AS `level_name`,`t4`.`population` AS `population`,`t4`.`class_id` AS `class_id` from (((`course` `t1` left join `department` `t2` on(`t1`.`department_id` = `t2`.`department_id`)) left join `level` `t3` on(`t1`.`level_id` = `t3`.`level_id`)) left join `class` `t4` on(`t2`.`department_id` = `t4`.`department_id` and `t3`.`level_id` = `t4`.`level_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_lecturer_view`
--
DROP TABLE IF EXISTS `vw_lecturer_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_lecturer_view`  AS  select `vw_lecture_schedule_full`.`LDID` AS `LDID`,`vw_lecture_schedule_full`.`combined_id` AS `combined_id`,`vw_lecture_schedule_full`.`combined_list` AS `combined_list`,`vw_lecture_schedule_full`.`combined_count` AS `combined_count`,`vw_lecture_schedule_full`.`combined_population` AS `combined_population`,`vw_lecture_schedule_full`.`duration` AS `duration`,`vw_lecture_schedule_full`.`lecturer_id` AS `lecturer_id`,`vw_lecture_schedule_full`.`surname` AS `surname`,`vw_lecture_schedule_full`.`LSID` AS `LSID`,`vw_lecture_schedule_full`.`combine_id` AS `combine_id`,`vw_lecture_schedule_full`.`start_time` AS `start_time`,`vw_lecture_schedule_full`.`end_time` AS `end_time`,`vw_lecture_schedule_full`.`lecturer_id` AS `venue_id`,`vw_lecture_schedule_full`.`day` AS `day`,sum(`vw_lecture_schedule_full`.`duration`) AS `SUM(duration)`,count(`vw_lecture_schedule_full`.`lecturer_id`) AS `COUNT(lecturer_id)` from `vw_lecture_schedule_full` group by `vw_lecture_schedule_full`.`lecturer_id` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_lecture_details_full`
--
DROP TABLE IF EXISTS `vw_lecture_details_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_lecture_details_full`  AS  select `t2`.`LDID` AS `LDID`,`t1`.`combined_id` AS `combined_id`,`t1`.`combined_list` AS `combined_list`,`t1`.`combined_count` AS `combined_count`,`t1`.`combined_population` AS `combined_population`,`t2`.`duration` AS `duration`,`t2`.`lecturer_id` AS `lecturer_id`,`t3`.`surname` AS `surname`,`t3`.`tel` AS `tel` from ((`vw_lecture_population` `t1` left join `lecture_details` `t2` on(`t1`.`combined_id` = `t2`.`comibined_id`)) left join `lecturer` `t3` on(`t3`.`lecturer_id` = `t2`.`lecturer_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_lecture_population`
--
DROP TABLE IF EXISTS `vw_lecture_population`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_lecture_population`  AS  select `t1`.`lecture_id` AS `lecture_id`,`t1`.`course_id` AS `course_id`,`t1`.`combined_id` AS `combined_id`,count(`t1`.`lecture_id`) AS `combined_count`,group_concat(`t1`.`lecture_id` separator ',') AS `combined_list`,sum(`t2`.`population`) AS `combined_population` from (`lecture` `t1` left join `vw_full_course` `t2` on(`t1`.`course_id` = `t2`.`course_id`)) group by `t1`.`combined_id` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_lecture_schedule_full`
--
DROP TABLE IF EXISTS `vw_lecture_schedule_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_lecture_schedule_full`  AS  select `t1`.`LDID` AS `LDID`,`t1`.`combined_id` AS `combined_id`,`t1`.`combined_list` AS `combined_list`,`t1`.`combined_count` AS `combined_count`,`t1`.`combined_population` AS `combined_population`,`t1`.`duration` AS `duration`,`t1`.`lecturer_id` AS `lecturer_id`,`t1`.`surname` AS `surname`,`t1`.`tel` AS `tel`,`t3`.`level_id` AS `level_id`,`t3`.`level_name` AS `level_name`,`t2`.`LSID` AS `LSID`,`t2`.`combine_id` AS `combine_id`,`t2`.`start_time` AS `start_time`,`t2`.`end_time` AS `end_time`,`t2`.`venue_id` AS `venue_id`,`t4`.`venue_name` AS `venue_name`,`t2`.`day` AS `day` from (((`vw_lecture_details_full` `t1` left join `lecture_schedule` `t2` on(`t1`.`combined_id` = `t2`.`combine_id`)) left join `vw_level_combined` `t3` on(`t1`.`combined_id` = `t3`.`comibined_id`)) left join `venue` `t4` on(`t4`.`venue_id` = `t2`.`venue_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_lecture_schedule_load`
--
DROP TABLE IF EXISTS `vw_lecture_schedule_load`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_lecture_schedule_load`  AS  select `t2`.`work_load` AS `work_load`,`t1`.`LDID` AS `LDID`,`t1`.`combined_id` AS `combined_id`,`t1`.`combined_list` AS `combined_list`,`t1`.`combined_count` AS `combined_count`,`t1`.`combined_population` AS `combined_population`,`t1`.`duration` AS `duration`,`t1`.`lecturer_id` AS `lecturer_id`,`t1`.`surname` AS `surname`,`t1`.`tel` AS `tel`,`t1`.`level_id` AS `level_id`,`t1`.`level_name` AS `level_name`,`t1`.`LSID` AS `LSID`,`t1`.`combine_id` AS `combine_id`,`t1`.`start_time` AS `start_time`,`t1`.`end_time` AS `end_time`,`t1`.`venue_id` AS `venue_id`,`t1`.`venue_name` AS `venue_name`,`t1`.`day` AS `day` from (`vw_lecture_schedule_full` `t1` left join `vw_work_load` `t2` on(`t1`.`lecturer_id` = `t2`.`lecturer_id`)) order by `t2`.`work_load` desc ;

-- --------------------------------------------------------

--
-- Structure for view `vw_level_combined`
--
DROP TABLE IF EXISTS `vw_level_combined`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_level_combined`  AS  select `t1`.`comibined_id` AS `comibined_id`,`t1`.`duration` AS `duration`,`t2`.`combined_population` AS `combined_population`,`t2`.`combined_list` AS `combined_list`,`t3`.`course_id` AS `course_id`,`t3`.`course_code` AS `course_code`,`t3`.`course_title` AS `course_title`,`t3`.`course_unit` AS `course_unit`,`t3`.`department_id` AS `department_id`,`t3`.`dept_code` AS `dept_code`,`t3`.`level_id` AS `level_id`,`t3`.`level_name` AS `level_name` from ((`lecture_details` `t1` left join `vw_lecture_population` `t2` on(`t2`.`combined_id` = `t1`.`comibined_id`)) left join `vw_full_course` `t3` on(`t2`.`course_id` = `t3`.`course_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_venue_report`
--
DROP TABLE IF EXISTS `vw_venue_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_venue_report`  AS  select `vw_lecture_schedule_full`.`LDID` AS `LDID`,`vw_lecture_schedule_full`.`combined_id` AS `combined_id`,`vw_lecture_schedule_full`.`combined_list` AS `combined_list`,`vw_lecture_schedule_full`.`combined_count` AS `combined_count`,`vw_lecture_schedule_full`.`combined_population` AS `combined_population`,`vw_lecture_schedule_full`.`duration` AS `duration`,`vw_lecture_schedule_full`.`lecturer_id` AS `lecturer_id`,`vw_lecture_schedule_full`.`surname` AS `surname`,`vw_lecture_schedule_full`.`LSID` AS `LSID`,`vw_lecture_schedule_full`.`combine_id` AS `combine_id`,`vw_lecture_schedule_full`.`start_time` AS `start_time`,`vw_lecture_schedule_full`.`end_time` AS `end_time`,`vw_lecture_schedule_full`.`venue_id` AS `venue_id`,`vw_lecture_schedule_full`.`day` AS `day`,sum(`vw_lecture_schedule_full`.`duration`) AS `SUM(duration)`,count(`vw_lecture_schedule_full`.`venue_id`) AS `COUNT(venue_id)` from `vw_lecture_schedule_full` group by `vw_lecture_schedule_full`.`venue_id` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_work_load`
--
DROP TABLE IF EXISTS `vw_work_load`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_work_load`  AS  select count(`vw_lecture_schedule_full`.`lecturer_id`) AS `work_load`,`vw_lecture_schedule_full`.`lecturer_id` AS `lecturer_id` from `vw_lecture_schedule_full` group by `vw_lecture_schedule_full`.`lecturer_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breaks`
--
ALTER TABLE `breaks`
  ADD PRIMARY KEY (`break_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `lecture_details`
--
ALTER TABLE `lecture_details`
  ADD PRIMARY KEY (`LDID`),
  ADD UNIQUE KEY `comibined_id` (`comibined_id`);

--
-- Indexes for table `lecture_schedule`
--
ALTER TABLE `lecture_schedule`
  ADD PRIMARY KEY (`LSID`),
  ADD UNIQUE KEY `combine_id` (`combine_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `schol_open_details`
--
ALTER TABLE `schol_open_details`
  ADD PRIMARY KEY (`open_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breaks`
--
ALTER TABLE `breaks`
  MODIFY `break_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `lecture_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `lecture_details`
--
ALTER TABLE `lecture_details`
  MODIFY `LDID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `lecture_schedule`
--
ALTER TABLE `lecture_schedule`
  MODIFY `LSID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schol_open_details`
--
ALTER TABLE `schol_open_details`
  MODIFY `open_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
