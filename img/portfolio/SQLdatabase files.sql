-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 08:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `bname`, `downloads`) VALUES
(0, '67 Neha Yadav_EXP8.docx', 71311, '', 0),
(0, '67 Neha Yadav_EXP8.docx', 71311, '', 0),
(0, '67 Neha Yadav_EXP8.docx', 71311, '', 0),
(0, '67 Neha Yadav_EXP8.docx', 71311, '', 0),
(0, '67 Neha Yadav_EXP8.docx', 71311, '', 0),
(0, '67 Neha Yadav_Mini Project.docx', 225069, '', 0),
(0, '67 Neha Yadav_Mini Project.docx', 225069, '', 0),
(0, '67 Neha Yadav_Mini Project.docx', 225069, '', 0),
(0, '67_Assignment-1.docx', 251165, '', 0),
(0, 'BCE SOP.pdf', 40788, '', 0),
(0, 'BCE SOP.pdf', 40788, '', 0),
(0, 'BCE SOP.pdf', 40788, '', 0),
(0, 'SOP.docx', 12897, '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
