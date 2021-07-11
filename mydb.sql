-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 05:02 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(6) UNSIGNED NOT NULL,
  `Sname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `Mob` varchar(10) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `year` int(11) NOT NULL,
  `Domain` varchar(70) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Sname`, `email`, `Mob`, `Branch`, `year`, `Domain`, `pass`) VALUES
(32, 'Jitendra Bisoi', 'bisoijit@gmail.com', '9876543210', 'MCA', 1, 'Web dev, ML', '123456'),
(33, 'Niki Bisoi', 'bisoiniki@gmail.com', '7890123456', 'BCA', 2, 'Web dev, App dev', '098765'),
(34, 'Arpita Maharatha', 'mahaarpita@gmail.com', '7652339161', 'ME', 2, 'Web dev', '321098'),
(35, 'Suraj Roy', 'roysuraj@gmail.com', '6785432119', 'MITM', 3, 'UI, ML', '678901'),
(36, 'Anupam Mohanty', 'mohanupam@gmail.com', '6542218297', 'BSc', 3, 'App Dev', '876543'),
(37, 'Sweta Dash', 'dashsweta@gmail.com', '8765432109', 'BTECH', 3, 'Web Dev, Ai, Python', 'zaqwsx'),
(38, 'Ankita Kiro', 'kiroankita@gmail.com', '8760923414', 'BE', 3, 'AI, Python', 'lkjpoi'),
(39, 'Subhashree Sathpathy', 'sathsubha@gmail.com', '8765313571', 'MTECH', 2, 'AI, ML, Python', 'Ssath12'),
(40, 'Padamalaya Jena', 'jenapadam@gmail.com', '7653390235', 'MSc', 2, 'Robotics, Python', 'Pjena99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
