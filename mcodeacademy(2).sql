-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2022 at 11:04 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcodeacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `quiz_id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL,
  `option_id` int(30) NOT NULL,
  `is_right` tinyint(1) NOT NULL COMMENT ' 1 = right, 0 = wrong',
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `quiz_id`, `question_id`, `option_id`, `is_right`, `date_updated`) VALUES
(5, 33, 23, 32, 129, 1, '2022-12-20 22:09:14'),
(6, 33, 23, 32, 130, 0, '2022-12-20 22:09:17'),
(7, 33, 23, 32, 131, 0, '2022-12-20 22:09:20'),
(8, 33, 23, 32, 132, 0, '2022-12-20 22:09:22'),
(9, 33, 23, 33, 133, 0, '2022-12-20 22:09:24'),
(10, 33, 23, 33, 134, 0, '2022-12-20 22:09:24'),
(11, 33, 23, 33, 135, 0, '2022-12-20 22:09:24'),
(12, 33, 23, 33, 136, 1, '2022-12-20 22:10:10'),
(13, 33, 23, 34, 137, 1, '2022-12-20 22:10:10'),
(14, 33, 23, 34, 138, 0, '2022-12-20 22:10:57'),
(15, 33, 23, 34, 139, 0, '2022-12-20 22:10:58'),
(16, 33, 23, 34, 140, 0, '2022-12-20 22:11:00'),
(17, 33, 23, 35, 141, 0, '2022-12-20 22:11:00'),
(18, 33, 23, 35, 142, 1, '2022-12-20 22:11:00'),
(19, 33, 23, 35, 143, 0, '2022-12-20 22:11:00'),
(20, 33, 23, 35, 144, 0, '2022-12-20 22:11:00'),
(21, 33, 23, 36, 145, 0, '2022-12-20 22:11:00'),
(22, 33, 23, 36, 146, 0, '2022-12-20 22:18:17'),
(23, 33, 23, 36, 147, 0, '2022-12-20 22:11:00'),
(24, 33, 23, 36, 148, 1, '2022-12-20 22:18:14'),
(25, 33, 23, 37, 149, 0, '2022-12-20 22:11:00'),
(26, 33, 23, 37, 150, 0, '2022-12-20 22:11:00'),
(27, 33, 23, 37, 151, 0, '2022-12-20 22:11:00'),
(28, 33, 23, 37, 152, 1, '2022-12-20 22:11:00'),
(29, 33, 23, 38, 153, 1, '2022-12-20 22:18:43'),
(30, 33, 23, 38, 154, 0, '2022-12-20 22:18:39'),
(31, 33, 23, 38, 155, 0, '2022-12-20 22:11:00'),
(32, 33, 23, 38, 156, 0, '2022-12-20 22:11:00'),
(33, 33, 23, 39, 157, 0, '2022-12-20 22:11:00'),
(34, 33, 23, 39, 158, 0, '2022-12-20 22:11:00'),
(35, 33, 23, 39, 159, 1, '2022-12-20 22:11:00'),
(36, 33, 23, 39, 160, 0, '2022-12-20 22:11:00'),
(37, 33, 23, 40, 161, 0, '2022-12-20 22:11:00'),
(38, 33, 23, 40, 162, 1, '2022-12-20 22:11:00'),
(39, 33, 23, 40, 163, 0, '2022-12-20 22:11:00'),
(40, 33, 23, 40, 164, 0, '2022-12-20 22:11:00'),
(41, 33, 23, 41, 165, 0, '2022-12-20 22:11:00'),
(42, 33, 23, 41, 166, 1, '2022-12-20 22:19:14'),
(43, 33, 23, 41, 167, 0, '2022-12-20 22:11:00'),
(44, 33, 23, 41, 168, 0, '2022-12-20 22:19:17'),
(45, 33, 23, 42, 169, 0, '2022-12-20 22:11:00'),
(46, 33, 23, 42, 170, 1, '2022-12-20 22:11:00'),
(47, 33, 23, 42, 171, 0, '2022-12-20 22:11:00'),
(48, 33, 23, 42, 172, 0, '2022-12-20 22:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `class` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `date_updated`, `class`, `subject`, `teacher_id`) VALUES
(12, '2022-12-20 17:01:29', '4.AI', 'CIT', 31);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `score` int(5) NOT NULL,
  `total_score` int(5) NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `quiz_id`, `user_id`, `score`, `total_score`, `date_updated`) VALUES
(13, 23, 33, 5, 5, '2022-12-20 22:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `qid` int(30) NOT NULL,
  `order_by` int(11) NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `qid`, `order_by`, `date_updated`) VALUES
(31, 'Prečo je php-čko mrdka?', 21, 0, '2022-12-20 18:51:21'),
(32, 'Čo znamená HTML?', 23, 0, '2022-12-20 18:54:22'),
(33, 'Kto je základom pre Web štandardy?', 23, 0, '2022-12-20 18:55:46'),
(34, 'Urč správny HTML element pre najväčší nádpis:', 23, 0, '2022-12-20 18:56:38'),
(35, 'Ktorý je správny HTML element pre vkladanie nového riadku?', 23, 0, '2022-12-20 18:57:31'),
(36, 'Čo je správne v HTML pre nastavovanie farby pozadia?', 23, 0, '2022-12-20 18:58:59'),
(37, 'Urč správny HTML element pre definovanie dôležitého textu:', 23, 0, '2022-12-20 18:59:40'),
(38, 'Urč správny HTML element pre  definovanie zdôrazneného textu:', 23, 0, '2022-12-20 19:01:03'),
(39, 'Čo je správny HTML tag pre vytvorenie url?', 23, 0, '2022-12-20 19:02:25'),
(40, 'Ktorý charakter sa používa na ukončenie tagu?', 23, 0, '2022-12-20 19:02:52'),
(41, 'Ako môžeš otvoriť link v novom okne?', 23, 0, '2022-12-20 19:03:57'),
(42, 'Test', 22, 0, '2022-12-20 21:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `question_opt`
--

DROP TABLE IF EXISTS `question_opt`;
CREATE TABLE IF NOT EXISTS `question_opt` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `option_txt` text NOT NULL,
  `question_id` int(30) NOT NULL,
  `is_right` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1= right answer',
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_opt`
--

INSERT INTO `question_opt` (`id`, `option_txt`, `question_id`, `is_right`, `date_updated`) VALUES
(125, 'lebo to nevieš', 31, 0, '2022-12-20 18:51:21'),
(126, 'lebo to je mrdka', 31, 0, '2022-12-20 18:51:21'),
(127, 'lebo to je zložite', 31, 0, '2022-12-20 18:51:21'),
(128, 'lebo to je najmenej používaný jazyk už', 31, 0, '2022-12-20 18:51:21'),
(129, 'Hyper TEXT Markup Language', 32, 1, '2022-12-20 19:04:26'),
(130, 'Home Tool Markup Language', 32, 0, '2022-12-20 18:54:22'),
(131, 'Hyperlinks and Text Markup Language', 32, 0, '2022-12-20 18:54:22'),
(132, 'Hyper Text Markup Language', 32, 0, '2022-12-20 18:54:22'),
(133, 'Microsoft', 33, 0, '2022-12-20 18:55:46'),
(134, 'Mozila', 33, 0, '2022-12-20 18:55:46'),
(135, 'Google', 33, 0, '2022-12-20 18:55:46'),
(136, 'The World Wide Web Consortium', 33, 1, '2022-12-20 19:04:31'),
(137, '<h1>\r\n', 34, 1, '2022-12-20 18:56:38'),
(138, '<head>', 34, 0, '2022-12-20 18:56:38'),
(139, '<h6>', 34, 0, '2022-12-20 18:56:38'),
(140, '<heading>', 34, 0, '2022-12-20 18:56:38'),
(141, '<lb>', 35, 0, '2022-12-20 18:57:31'),
(142, '<br>', 35, 1, '2022-12-20 19:04:42'),
(143, '<break>', 35, 0, '2022-12-20 18:57:31'),
(144, '<hr>', 35, 0, '2022-12-20 18:57:31'),
(145, '<brackground>yellow</background>', 36, 0, '2022-12-20 18:58:59'),
(146, '<body br=\"yellow\">', 36, 0, '2022-12-20 18:58:59'),
(147, '<body style\"background-color:yellow\">', 36, 0, '2022-12-20 18:58:59'),
(148, '<body style=\"background-color:yellow;\">', 36, 1, '2022-12-20 19:04:54'),
(149, '<i>', 37, 0, '2022-12-20 18:59:40'),
(150, '<important>', 37, 0, '2022-12-20 18:59:40'),
(151, '<b>', 37, 0, '2022-12-20 18:59:40'),
(152, '<strong>', 37, 1, '2022-12-20 19:05:05'),
(153, '<em>', 38, 1, '2022-12-20 19:01:03'),
(154, '<i>', 38, 0, '2022-12-20 19:01:03'),
(155, '<italic>', 38, 0, '2022-12-20 19:01:03'),
(156, '<b>', 38, 0, '2022-12-20 19:01:03'),
(157, '<a name=\"https://www.sladecek.sk\">sladecek.sk</a>', 39, 0, '2022-12-20 19:02:25'),
(158, '<a url=\"https://www.sladecek.sk\">sladecek.sk</a>', 39, 0, '2022-12-20 19:02:25'),
(159, '<a href=\"https://www.sladecek.sk\">sladecek.sk</a>', 39, 1, '2022-12-20 19:05:51'),
(160, '<a>https://sladecek.sk</a>', 39, 0, '2022-12-20 19:02:25'),
(161, '*', 40, 0, '2022-12-20 19:02:52'),
(162, '/', 40, 1, '2022-12-20 19:05:54'),
(163, '<', 40, 0, '2022-12-20 19:02:52'),
(164, '^', 40, 0, '2022-12-20 19:02:52'),
(165, '<a href=\"url\" new>', 41, 0, '2022-12-20 19:03:57'),
(166, '<a href=\"url\" tager=\"_blank\">', 41, 1, '2022-12-20 19:05:58'),
(167, '<a href=\"url\" tager=\"new\">', 41, 0, '2022-12-20 19:03:57'),
(168, '<a href=\"url\" _blank>', 41, 0, '2022-12-20 19:03:57'),
(169, 'asdfghjk', 42, 0, '2022-12-20 21:21:31'),
(170, 'asddsa', 42, 0, '2022-12-20 21:21:31'),
(171, 'dasdas', 42, 1, '2022-12-20 22:19:24'),
(172, 'dasdas', 42, 0, '2022-12-20 21:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_list`
--

DROP TABLE IF EXISTS `quiz_list`;
CREATE TABLE IF NOT EXISTS `quiz_list` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quiz_name` varchar(100) NOT NULL,
  `qpoints` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_list`
--

INSERT INTO `quiz_list` (`id`, `date_updated`, `quiz_name`, `qpoints`, `class_id`) VALUES
(21, '2022-12-20 17:03:37', 'a', '15', '12'),
(22, '2022-12-20 17:04:19', 'Test', '5', '12'),
(23, '2022-12-20 18:52:34', 'HTML', '5', '12');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_student_list`
--

DROP TABLE IF EXISTS `quiz_student_list`;
CREATE TABLE IF NOT EXISTS `quiz_student_list` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_student_list`
--

INSERT INTO `quiz_student_list` (`id`, `quiz_id`, `user_id`, `date_updated`) VALUES
(5, 2, 12, '2020-09-07 15:05:58'),
(6, 2, 13, '2020-09-07 15:05:58'),
(7, 21, 32, '2022-12-20 16:28:49'),
(9, 22, 32, '2022-12-20 17:04:24'),
(10, 23, 32, '2022-12-20 18:52:39'),
(11, 23, 33, '2022-12-20 19:30:53'),
(12, 23, 33, '2022-12-20 21:21:44'),
(13, 23, 33, '2022-12-20 21:22:58'),
(14, 23, 33, '2022-12-20 21:24:05'),
(15, 22, 33, '2022-12-20 21:42:36'),
(16, 22, 33, '2022-12-20 21:42:54'),
(17, 21, 33, '2022-12-20 21:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `class_id`, `date_updated`) VALUES
(3, 32, '12', '2022-12-20 19:30:40'),
(5, 33, '12', '2022-12-20 19:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subject_name` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `date_updated`, `subject_name`, `class_id`, `teacher_id`) VALUES
(10, '2022-12-20 12:53:07', 'CIT', '10', '31'),
(11, '2022-12-20 12:58:04', 'SJL', '10', '15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `full_name`, `password`, `user_type`, `date_updated`) VALUES
(15, 'm1kes', 'michal@mail.com', 'Michal Sládeček', 'cc03e747a6afbbcbf8be7668acfebee5', 'teacher', '2022-12-19 23:48:54'),
(18, 'ahojky', 'test@mail.com', '', 'cc03e747a6afbbcbf8be7668acfebee5', 'user', '2022-12-19 19:45:30'),
(30, 'm1kes', 'michal.sladecek89@gmail.com', '', '4322c86fa715f20c082607ab9acf0615', 'admin', '2022-12-19 00:47:11'),
(31, 'padyman', 'padyman@gmail.com', 'Miroslav Padyšák', 'cc03e747a6afbbcbf8be7668acfebee5', 'teacher', '2022-12-19 20:50:51'),
(32, 'Jozko', 'jozko@mail.com', 'Jožko Mrkvička', 'cc03e747a6afbbcbf8be7668acfebee5', 'student', '2022-12-19 23:49:26'),
(33, 'm1kes', 'michal@sladecek.sk', 'Michal Sládeček', '4322c86fa715f20c082607ab9acf0615', 'student', '2022-12-20 19:31:50'),
(34, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'student', '2022-12-20 14:29:13'),
(35, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'student', '2022-12-20 14:29:19'),
(36, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'student', '2022-12-20 14:48:00'),
(37, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'student', '2022-12-20 16:21:47'),
(38, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'student', '2022-12-20 16:22:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
