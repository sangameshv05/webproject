-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 12:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `usn` varchar(10) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `test_num` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  `s_ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`usn`, `subject_code`, `test_num`, `question_num`, `s_ans`) VALUES
('1dt17cs081', '17cs71', 1, 1, ',wta'),
('1dt17cs081', '17cs71', 1, 2, ',no'),
('1dt17cs081', '17cs71', 2, 1, ',extensible'),
('1dt17cs081', '17cs71', 5, 1, ',a'),
('1dt17cs081', '17cs72', 2, 1, ''),
('1dt17cs081', '17cs72', 3, 1, ',b'),
('1dt17cs082', '17cs71', 1, 1, ',wta'),
('1dt17cs082', '17cs71', 1, 2, ',no'),
('1dt17cs082', '17cs71', 2, 1, ',hypertext'),
('1dt17cs082', '17cs71', 4, 1, ',a'),
('1dt17cs082', '17cs71', 5, 1, ',a'),
('1dt17cs082', '17cs72', 2, 1, ',jkiuyuo'),
('1dt17cs082', '17cs72', 3, 1, ',a'),
('1dt17cs082', '17cs73', 1, 1, ',b');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `usn` varchar(10) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `test` int(11) NOT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`usn`, `subject_id`, `test`, `marks`) VALUES
('1dt17cs081', '17cs71', 1, 2),
('1dt17cs081', '17cs71', 2, 0),
('1dt17cs081', '17cs71', 5, 1),
('1dt17cs081', '17cs72', 2, 0),
('1dt17cs081', '17cs72', 3, 1),
('1dt17cs082', '17cs71', 1, 2),
('1dt17cs082', '17cs71', 2, 0),
('1dt17cs082', '17cs71', 4, 1),
('1dt17cs082', '17cs71', 5, 1),
('1dt17cs082', '17cs72', 2, 1),
('1dt17cs082', '17cs72', 3, 0),
('1dt17cs082', '17cs73', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `number` int(2) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `test_num` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `option5` varchar(100) DEFAULT NULL,
  `option6` varchar(100) DEFAULT NULL,
  `option7` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`number`, `subject_id`, `test_num`, `description`, `option1`, `option2`, `option3`, `option4`, `option5`, `option6`, `option7`, `answer`, `type`) VALUES
(1, '17cs71', 1, 'which subject is this?', 'aca', 'wta', 'ml', '', '', '', '', ',wta', 'radio'),
(1, '17cs71', 2, 'what is HTML?', 'hypertext markup language', 'extensible markup language', '', '', '', '', '', ',hypertext markup la', 'radio'),
(1, '17cs71', 3, 'rtdrdytf', 'a', 'b', '', '', '', '', '', ',a', 'radio'),
(1, '17cs71', 4, 'gugiu6gyiftyku', 'a', 'b', '', '', '', '', '', ',a', 'radio'),
(1, '17cs71', 5, 'hi', 'a', 'b', '', '', '', '', '', ',a', 'radio'),
(1, '17cs72', 1, 'hjgytduryk', 'fytr', 'jgufik', '', '', '', '', '', ',jgufik', 'radio'),
(1, '17cs72', 2, 'drtdyrtt', 't8f', 'jkiuyuo', '', '', '', '', '', ',jkiuyuo', 'radio'),
(1, '17cs72', 3, 'slfdiofdso', 'a', 'b', 'c', '', '', '', '', ',b', 'radio'),
(1, '17cs73', 1, 'hchfuid', 'a', 'b', '', '', '', '', '', ',b', 'radio'),
(2, '17cs71', 1, 'Is this subject difficult?', 'no', 'yes', '', '', '', '', '', ',no', 'radio');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` varchar(10) NOT NULL,
  `subject_name` varchar(100) DEFAULT NULL,
  `sem` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `sem`) VALUES
('17cs71', 'web Technology', 7),
('17cs72', 'advanced computer architecture', 7),
('17cs73', 'machine learning', 7);

-- --------------------------------------------------------

--
-- Table structure for table `test_time`
--

CREATE TABLE `test_time` (
  `test_number` int(11) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_time`
--

INSERT INTO `test_time` (`test_number`, `subject_code`, `date`, `time`, `duration`) VALUES
(0, '', '0000-00-00', '00:00:00', 0),
(1, '17cs71', '2020-12-28', '21:10:00', 5),
(1, '17cs72', '2021-01-09', '15:25:00', 6),
(1, '17cs73', '2021-01-09', '14:42:00', 5),
(2, '17cs71', '2021-01-09', '09:51:00', 5),
(2, '17cs72', '2021-01-09', '14:27:00', 1),
(3, '17cs71', '2021-01-09', '15:30:00', 5),
(3, '17cs72', '2021-01-09', '14:36:00', 5),
(4, '17cs71', '2021-01-09', '14:18:00', 5),
(5, '17cs71', '2021-01-09', '14:23:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `sem` int(2) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `sem`, `password`) VALUES
('1\n', 'admin', 'admin', 0, 'admin'),
('1dt17cs081', 'sandeep', 'student', 7, '1234'),
('1dt17cs082', 'Sangamesha v', 'student', 7, '1234'),
('1dt17cs083', 'sanjith', 'student', 7, '1234'),
('1dt17cs088', 'Shreesha', 'student', 7, '1234'),
('cse1', 'abc', 'teacher', 0, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`usn`,`subject_code`,`test_num`,`question_num`) USING BTREE,
  ADD KEY `subject_code` (`subject_code`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`usn`,`subject_id`,`test`),
  ADD KEY `subject_code1` (`subject_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`number`,`subject_id`,`test_num`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `test_time`
--
ALTER TABLE `test_time`
  ADD PRIMARY KEY (`test_number`,`subject_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `subject_code` FOREIGN KEY (`subject_code`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usn` FOREIGN KEY (`usn`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD CONSTRAINT `subject_code1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usn1` FOREIGN KEY (`usn`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
