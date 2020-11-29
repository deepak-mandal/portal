-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2020 at 04:36 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speakers1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_registration1`
--

CREATE TABLE `user_registration1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(400) NOT NULL,
  `password` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration1`
--

INSERT INTO `user_registration1` (`id`, `firstname`, `lastname`, `username`, `password`, `image`) VALUES
(37, 'C. N. R. Rao', 'JNCASR, Bangalore ', 'Chemically linking 2D nanosheets to generate new materials with novel properties', 'http://www.jncasr.ac.in/cnrrao/', 'uplaod/speakers-img.bin'),
(38, 'Antoni Llobet', 'ICIQ, Spain', 'Catalysts for Artificial Photosynthesis', 'http://www.iciq.org/research/research_group/prof-antoni-llobet/section/about_prof/', 'uplaod/speakers-img(1).bin'),
(40, 'M. V. Sangaranarayanan', 'IIT Madras', 'Analysis of charge transport processes in Electrochemical Systems- A hierarchy in modelling', 'http://chem.iitm.ac.in/Faculty/sangara/', 'uplaod/speakers-img(2).bin'),
(41, 'George C. Schatz', 'Northwestern University, USA', 'Nanoparticles, SERS and Theory', 'https://sites.northwestern.edu/schatz/', 'uplaod/speakers-img(3).bin'),
(42, 'Sandeep Verma', 'IIT Kanpur', 'Tunable Platforms for Cellular Delivery of Therapeutics', 'http://home.iitk.ac.in/~sverma/', 'uplaod/speakers-img(4).bin'),
(43, 'S. Sampath', 'IISc, Bangalore', ' Interfacial Electrochemistry Using Multifunctional Catalysts', 'http://ipc.iisc.ac.in/~ss/', 'uplaod/speakers-img(5).bin'),
(44, 'Dr. Reddys Laboratories ', 'Sustainable Approaches to API Synthesis', '', '#', 'uplaod/speakers-img(6).bin'),
(46, 'sfrwrw', 'wrrwwr', 'wrwr', 'wrwr', 'uplaod/speakers-img(3).bin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_registration1`
--
ALTER TABLE `user_registration1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_registration1`
--
ALTER TABLE `user_registration1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
