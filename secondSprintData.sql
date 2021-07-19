-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2021 at 04:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secondSprintData`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`id`, `firstname`, `project`) VALUES
(1, 'Petras', 1),
(2, 'Antanas', 1),
(3, 'Onute', 2),
(4, 'Jurgis', 3),
(5, 'Gretute', 4),
(6, 'Kunigunda', 2),
(7, 'Aloyzas', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE `Projects` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Projects`
--

INSERT INTO `Projects` (`id`, `name`) VALUES
(1, 'PHP'),
(2, 'JavaScript'),
(3, 'Python'),
(4, 'Java'),
(5, 'FullStack');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project` (`project`);

--
-- Indexes for table `Projects`
--
ALTER TABLE `Projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employees`
--
ALTER TABLE `Employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Projects`
--
ALTER TABLE `Projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Employees`
--
ALTER TABLE `Employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`project`) REFERENCES `Projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
