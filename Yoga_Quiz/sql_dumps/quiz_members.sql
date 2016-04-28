-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2016 at 01:24 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoga_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_members`
--

CREATE TABLE `quiz_members` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_members`
--

INSERT INTO `quiz_members` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(4, 'Eric ', 'Cassells', 'castro', 'getouttheway'),
(5, 'Jon', 'Snow', 'FireMan', 'move'),
(6, 'Ryan ', 'CH', 'theUnforgivenx3', 'bailey'),
(7, 'Bum Bum', 'Willy', 'willyBumBum', 'yes'),
(8, 'Mike', 'Ehrmantraut', 'stoneColdCoolest', 'bitch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_members`
--
ALTER TABLE `quiz_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_members`
--
ALTER TABLE `quiz_members`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
