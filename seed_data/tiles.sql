-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2021 at 03:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monopoly`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiles`
--

DROP TABLE IF EXISTS `tiles`;
CREATE TABLE `tiles` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `cost` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `housecost` int(11) NOT NULL,
  `hotelcost` int(11) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiles`
--

INSERT INTO `tiles` (`id`, `name`, `cost`, `rent`, `housecost`, `hotelcost`, `type`) VALUES
(1, 'Go', 0, 0, 0, 0, 'free'),
(2, 'gdynia', 600, 20, 500, 500, 'brown'),
(3, 'community chest', 0, 0, 0, 0, 'chest'),
(4, 'taipei', 600, 40, 500, 500, 'brown'),
(5, 'income tax', 2000, 0, 0, 0, 'tax'),
(6, 'monopoly rail', 2000, 250, 0, 0, 'transport'),
(7, 'tokyo', 1000, 60, 500, 500, 'light-blue'),
(8, 'chance', 0, 0, 0, 0, 'chance'),
(9, 'barcelona', 1000, 60, 500, 500, 'light-blue'),
(10, 'athens', 1200, 80, 500, 500, 'light-blue'),
(11, 'in jail / just visiting', 0, 0, 0, 0, 'free'),
(12, 'instanbul', 1400, 100, 1000, 1000, 'pink'),
(13, 'solar energy', 1500, 0, 0, 0, 'utility'),
(14, 'kyiv', 1400, 100, 1000, 1000, 'pink'),
(15, 'toronto', 1600, 120, 1000, 1000, 'pink'),
(16, 'monopoly air', 2000, 250, 0, 0, 'transport'),
(17, 'rome', 1800, 140, 1000, 1000, 'orange'),
(18, 'community chest', 0, 0, 0, 0, 'chest'),
(19, 'shanghai', 1800, 140, 1000, 1000, 'orange'),
(20, 'vancouver', 2000, 160, 1000, 1000, 'orange'),
(21, 'free parking', 0, 0, 0, 0, 'free'),
(22, 'sydney', 2200, 180, 1500, 1500, 'red'),
(23, 'chance', 0, 0, 0, 0, 'chance'),
(24, 'new york', 2200, 180, 1500, 1500, 'red'),
(25, 'london', 2400, 200, 1500, 1500, 'red'),
(26, 'monopoly cruise', 2000, 250, 0, 0, 'transport'),
(27, 'beijing', 2600, 220, 1500, 1500, 'yellow'),
(28, 'hong kong', 2600, 220, 1500, 1500, 'yellow'),
(29, 'wind energy', 1500, 0, 0, 0, 'utility'),
(30, 'jerusalem', 2800, 240, 1500, 1500, 'yellow'),
(31, 'go to jail', 0, 0, 0, 0, 'jail'),
(32, 'paris', 3000, 260, 2000, 2000, 'green'),
(33, 'belgrade', 3000, 260, 2000, 2000, 'green'),
(34, 'community chest', 0, 0, 0, 0, 'chest'),
(35, 'cape town', 3200, 280, 2000, 2000, 'green'),
(36, 'monopoly space', 2000, 250, 0, 0, 'transport'),
(37, 'chance', 0, 0, 0, 0, 'chance'),
(38, 'riga', 3500, 350, 2000, 2000, 'blue'),
(39, 'super tax', 1000, 0, 0, 0, 'tax'),
(40, 'montreal', 4000, 500, 2000, 2000, 'blue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiles`
--
ALTER TABLE `tiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiles`
--
ALTER TABLE `tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
