-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 11:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------



CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `s_id` varchar(200) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `subjects` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `classscore` varchar(200) NOT NULL,
  `examsscore` varchar(200) NOT NULL,
  `overallscore` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL,
  `term` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `overallposition` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `s_id`, `s_name`, `subjects`, `class`, `classscore`, `examsscore`, `overallscore`, `position`, `grade`, `term`, `year`, `overallposition`) VALUES
(1, '1', 'Mark Clever', 'English', '7', '30', '50', '80', '1st', 'A', 'term1', '2019', ''),
(2, '1', 'Mark Clever', 'GHANAIAN LANGUAGE', '7', '30', '45', '75', '3rd', 'B+', 'term1', '2019', ''),
(3, '1', 'Mark Clever', 'Maths', '7', '35', '45', '80', '4th', 'A', 'term1', '2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `term` varchar(200) NOT NULL,
  `feetype` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL,
  `payer` varchar(200) NOT NULL,
  `payer_contact` varchar(200) NOT NULL,
  `datepaid` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `sid`, `pic`, `name`, `gender`, `class`, `term`, `feetype`, `status`, `amount`, `receiver`, `payer`, `payer_contact`, `datepaid`, `year`) VALUES
(1, 1, 'student5d6e9186bf7b4.jpg ', 'Mark Clever', 'Male ', '7 ', 'term1', 'school-fees', 'full', '400', 'Cashier', 'Desmond Ansah', '0556676471', '06/09/2019', '2019'),
(2, 2, 'student5d6e91b816c78.jpg ', 'Mary Clever', 'Female ', '3 ', 'term1', 'school-fees', 'part', '200', 'Cashier', 'Kimbling', '02334455', '06/09/2019', '2019'),
(3, 2, 'student5d6e91b816c78.jpg ', 'Mary Clever', 'Female ', '3 ', 'term2', 'school-fees', 'full', '200', 'Cahsier', 'Blessed ', '023673764', '06/09/2019', '2018');





INSERT INTO `subjects` (`sub_id`, `sub_name`) VALUES
(1, 'English'),
(2, 'Maths'),
(4, 'GHANAIAN LANGUAGE');

-- --------------------------------------------------------

--


ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `period`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--

-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


