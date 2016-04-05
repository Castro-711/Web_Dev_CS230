-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2016 at 01:50 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `diary_logs`
--

CREATE TABLE `diary_logs` (
  `id` int(6) NOT NULL,
  `when_where` varchar(400) NOT NULL,
  `event` varchar(400) NOT NULL,
  `emotion` varchar(400) NOT NULL,
  `automatic_thoughts` varchar(400) NOT NULL,
  `rational_response` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diary_logs`
--

INSERT INTO `diary_logs` (`id`, `when_where`, `event`, `emotion`, `automatic_thoughts`, `rational_response`) VALUES
(1, 'Now', 'optimistic', 'happy', 'autoT', 'rResponse'),
(2, 'Now', 'php party', 'jubilant', 'it may work ', 'it may not work'),
(3, 'Now', 'first time trying to insert into diary_logs when I know it will work', 'quitely confident', 'on to the select function', 'enjoy getting this to work'),
(4, 'clondalkin at 6 on the first monday of april', 'getting all components workig as left out when and where section during dev', 'confident', 'listening to gramatik', 'push on now and do a great job'),
(5, 'in ryans room', 'Php party', 'happy with the creatures', 'life is good', 'whats for dinner'),
(6, 'In the room @ 8:30 on monday', 'first attempt after dinner', 'stuffed', 'start styling boi', 'if you build it they will come'),
(7, 'home still 9:33', 'check if auto update to data when added', 'scared', 'lets get it on', 'do it'),
(8, 'In college', 'trying to hide table', 'inquisitive', 'get it together soon', 'your not far off'),
(9, 'In college', 'trying to hide table', 'inquisitive', 'get it together soon', 'your not far off'),
(10, 'hey', 'kd', 'ls', 'ls', 'g'),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, 'In the arts block', 'seeing if my code will redirect', 'nervous', 'It could work', 'it rarely does'),
(15, 'Still in the arts block ', 'it worked trying now with a shorter delay', 'happy', 'positive', 'today is a good day'),
(16, 'In the lab now ', 'about to add the js validator', 'looking forward to putting it together', 'sleep', 'lunch is close'),
(17, '', '', '', '', ''),
(18, 'still in the lab', 'testing the validator js function', 'wheezy', 'it wont work', 'astro later'),
(19, 'round 2', 'validator', 'sick', 'it could work', 'progress is slow'),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, '', '', '', '', ''),
(28, '', '', '', '', ''),
(29, '', '', '', '', ''),
(30, '', '', '', '', ''),
(31, '', '', '', '', ''),
(32, '', '', '', '', ''),
(33, '', '', '', '', ''),
(34, '', '', '', '', ''),
(35, '', '', '', '', ''),
(36, '', '', '', '', ''),
(37, '', '', '', '', ''),
(38, '', '', '', '', ''),
(39, '', '', '', '', ''),
(40, '', '', '', '', ''),
(41, '', '', '', '', ''),
(42, '', '', '', '', ''),
(43, '', '', '', '', ''),
(44, '', '', '', '', ''),
(45, '', '', '', '', ''),
(46, '', '', '', '', ''),
(47, '', '', '', '', ''),
(48, '', '', '', '', ''),
(49, '', '', '', '', ''),
(50, 'jdlfajd', '', '', '', ''),
(51, '', '', '', '', ''),
(52, 'jhskdlfa', '', '', '', ''),
(53, '', '', '', '', ''),
(54, 'Still in the lab', 'got validate working for one element', 'happy', 'this will work with all ', 'oh yeah'),
(55, 'd', 'k', 'l', 'l', ''),
(56, '', '', '', '', ''),
(57, 'lab', 'second go at getting all working together', 'happily nervous', 'nearly lunch', 'yum'),
(58, 'In the lab still', 'gonna submit soon just doing a little tidying', 'happy', 'hopeful of a good grade :)', 'today is a good day ;)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diary_logs`
--
ALTER TABLE `diary_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diary_logs`
--
ALTER TABLE `diary_logs`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
