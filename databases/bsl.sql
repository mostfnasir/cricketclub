-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 06:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsl`
--

-- --------------------------------------------------------

--
-- Table structure for table `playerrecord`
--

CREATE TABLE `playerrecord` (
  `id` int(11) NOT NULL,
  `run` int(200) NOT NULL,
  `wicket` int(200) NOT NULL,
  `player_id` int(200) NOT NULL,
  `din` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerrecord`
--

INSERT INTO `playerrecord` (`id`, `run`, `wicket`, `player_id`, `din`) VALUES
(1, 20, 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` blob NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `image`, `role`) VALUES
(1, 'Nahid', 0x32393537303731325f313733363537393939393733353336305f32303338393336373630393231303533355f6e2e6a7067, 'All Rounder'),
(2, 'Antor', 0x616e746f722e6a7067, 'All Rounder'),
(5, 'Mostafiz', 0x6d6f73746166697a2e6a7067, 'All Rounder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playerrecord`
--
ALTER TABLE `playerrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playerrecord`
--
ALTER TABLE `playerrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
