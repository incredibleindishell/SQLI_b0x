-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 07:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indishell_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `hosting`
--

CREATE TABLE `hosting` (
  `id` int(30) NOT NULL,
  `name` varchar(9000) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosting`
--

INSERT INTO `hosting` (`id`, `name`, `price`) VALUES
(1, 'ubuntu', '5$/month'),
(2, 'Windows', '12$/month'),
(3, 'centos', '5$/month');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(10) NOT NULL,
  `handle` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `expertise` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `handle`, `level`, `expertise`) VALUES
(1, 'c0de_br3ak3r_ICA', '7 (admin)', 'Ace.... he is an Ace 8-)'),
(2, 'ro0t_devil', '7 (admin)', 'pwn servers with guarantee :P '),
(3, 'Z3r0_c0ol', '5 (moderator)', 'Web application destroyer ^_^'),
(4, 'Cyber_gladiator', '5 (moderator)', 'Bhai.... Bhai.... Bhai...');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
