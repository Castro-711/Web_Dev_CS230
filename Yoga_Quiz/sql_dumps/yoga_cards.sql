-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2016 at 01:25 PM
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
-- Table structure for table `yoga_cards`
--

CREATE TABLE `yoga_cards` (
  `id` int(6) UNSIGNED NOT NULL,
  `full_image_path` varchar(250) NOT NULL,
  `half_image_path` varchar(250) NOT NULL,
  `english_name` varchar(50) NOT NULL,
  `sanskirt_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yoga_cards`
--

INSERT INTO `yoga_cards` (`id`, `full_image_path`, `half_image_path`, `english_name`, `sanskirt_name`) VALUES
(1, 'http://localhost/Yoga_Quiz/res/Corpse-Pose/Corpse-Pose.jpg', 'http://localhost/Yoga_Quiz/res/Corpse-Pose/kQBMILFz3jvX.jpg', 'Corpse Pose', 'Savasana'),
(2, 'http://localhost/Yoga_Quiz/res/crane/crane.jpg', 'http://localhost/Yoga_Quiz/res/crane/53WBX69zx1yn.jpg', 'Crane', 'Bakasana'),
(3, 'http://localhost/Yoga_Quiz/res/crane-side/crane-side.jpg', 'http://localhost/Yoga_Quiz/res/crane-side/xQZ4w5s0Wrjy.jpg', 'Crane-side', 'Parsva Bakasana'),
(4, 'http://localhost/Yoga_Quiz/res/dog/dog.jpg', 'http://localhost/Yoga_Quiz/res/dog/DNG1vYTp6JxX.jpg', 'Downward Forward-Facing Dog', 'Adho Mukha Savasana'),
(5, 'http://localhost/Yoga_Quiz/res/Eka-Pada-Jathara-Paarivartta/EPJP.jpg', 'http://localhost/Yoga_Quiz/res/Eka-Pada-Jathara-Paarivartta/EPJP_half.jpg', 'One Leg Revolved Belly Pose', 'Eka Pada Jathara Paarivartta'),
(6, 'http://localhost/Yoga_Quiz/res/Eka-Pada-Parivrtta-Upavisth/EPPU.jpg', 'http://localhost/Yoga_Quiz/res/Eka-Pada-Parivrtta-Upavisth/EPPU_half.jpg', 'One Leg Relvoving Seated Pose', 'Eka Pada Parivrtta Upavisth'),
(7, 'http://localhost/Yoga_Quiz/res/Eka-Pada-Parsva-Bakasana/Eka-Pada-Parsva-Bakasana.jpg', 'http://localhost/Yoga_Quiz/res/Eka-Pada-Parsva-Bakasana/TO9k6xRsXUD2.jpg', 'One Leg Side Crane Pose', 'Eka Pada Parsva Bakasana'),
(8, 'http://localhost/Yoga_Quiz/res/Eka-Pada-Sarvangasana/Eka-Pada-Sarvangasana.jpg', 'http://localhost/Yoga_Quiz/res/Eka-Pada-Sarvangasana/wx1Y7Oj4qZ4z.jpg', 'One Leg Supported Shoulderstand Pose', 'Eka Pada Salamba Sarvangasana'),
(9, 'http://localhost/Yoga_Quiz/res/extended-side/extended-side.jpg', 'http://localhost/Yoga_Quiz/res/extended-side/1Q5mYamOkPdR.jpg', 'Extended Side Angle', 'Parsvakonasana'),
(10, 'http://localhost/Yoga_Quiz/res/fish/fish.jpg', 'http://localhost/Yoga_Quiz/res/fish/w78CX5Jf7BEr.jpg', 'Half Fish Pose', 'Ardha Matsyasana'),
(11, 'http://localhost/Yoga_Quiz/res/fish2/fish2.jpg', 'http://localhost/Yoga_Quiz/res/fish2/FWxcG1czuMqs.jpg', 'Fish Pose (Variation)', 'Matsyanasan'),
(12, 'http://localhost/Yoga_Quiz/res/Galavasana/Galavasana.jpg', 'http://localhost/Yoga_Quiz/res/Galavasana/XGxXj5mzzuub.jpg', 'Name of a Sage', 'Galavasana'),
(13, 'http://localhost/Yoga_Quiz/res/Heron-Pose/Heron-Pose.jpg', 'http://localhost/Yoga_Quiz/res/Heron-Pose/UfReRWPbxEr1.jpg', 'Heron Pose', 'Krounchasana'),
(14, 'http://localhost/Yoga_Quiz/res/janu/janu.jpg', 'http://localhost/Yoga_Quiz/res/janu/nGjsij4K7Ogj.jpg', 'Revolved Knee to the Head', 'Parivrtta Janu Sirsasana'),
(15, 'http://localhost/Yoga_Quiz/res/Janu-Sirsasana2/Janu-Sirsasana2.jpg', 'http://localhost/Yoga_Quiz/res/Janu-Sirsasana2/9kemZm63IZnT.jpg', 'Revolved Knee to the Head (Variation)', 'Janu Sirsasana'),
(16, 'http://localhost/Yoga_Quiz/res/Janu-Sirsasana-revolved2/Janu-Sirsasana-revolved2.jpg', 'http://localhost/Yoga_Quiz/res/Janu-Sirsasana-revolved2/CPDFM8duslkl.jpg', 'Revolved Knee to the Head (Variation)', 'Parivrttta Janu Sirsasana'),
(17, 'http://localhost/Yoga_Quiz/res/Kapotasana/Kapotasana.jpg', 'http://localhost/Yoga_Quiz/res/Kapotasana/vcbyoQg9gfnh.jpg', 'Pigeon Pose', 'Kapotasana'),
(18, 'http://localhost/Yoga_Quiz/res/Karnapidasana/Karnapidasana.jpg', 'http://localhost/Yoga_Quiz/res/Karnapidasana/4zIaiusY2nnS.jpg', 'Ear Pressure Pose', 'Karnapidasana'),
(19, 'http://localhost/Yoga_Quiz/res/koundinyasana/koundinyasana.jpg', 'http://localhost/Yoga_Quiz/res/koundinyasana/lGyPJ6XycTup.jpg', 'Named After a Sage', 'Koundinyasana II'),
(20, 'http://localhost/Yoga_Quiz/res/Locust-Pose/Locust-Pose.jpg', 'http://localhost/Yoga_Quiz/res/Locust-Pose/iqWDkBDUFjTX.jpg', 'Locust Pose', 'Shalabhasana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yoga_cards`
--
ALTER TABLE `yoga_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yoga_cards`
--
ALTER TABLE `yoga_cards`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
