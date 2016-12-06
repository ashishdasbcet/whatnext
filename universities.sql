-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 03:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universities`
--

-- --------------------------------------------------------

--
-- Table structure for table `cg_details`
--

CREATE TABLE `cg_details` (
  `id` int(11) NOT NULL,
  `cg_name` text COLLATE utf8_unicode_ci NOT NULL,
  `cg_add` text COLLATE utf8_unicode_ci NOT NULL,
  `cg_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cg_pin` int(11) NOT NULL,
  `cg_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cg_site` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cg_reg` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cg_details`
--

INSERT INTO `cg_details` (`id`, `cg_name`, `cg_add`, `cg_state`, `cg_pin`, `cg_phone`, `cg_site`, `cg_reg`) VALUES
(3, 'qwqwrqrqwr', 'qwrqwrqwrqr', 'Arunachal Pradesh', 242414124, '2414354545', 'qwqweqe', 'qweqweqwrq'),
(2, 'asass', 'adadadad', 'Chhattisgarh', 2323232, '23232.2355663+36462', 'www.ddd.com', 'sdsdsdss');

-- --------------------------------------------------------

--
-- Table structure for table `cs_details`
--

CREATE TABLE `cs_details` (
  `id` int(11) NOT NULL,
  `un_name` text COLLATE utf8_unicode_ci NOT NULL,
  `cg_name` text COLLATE utf8_unicode_ci NOT NULL,
  `cs_name` text COLLATE utf8_unicode_ci NOT NULL,
  `dur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elig` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `strm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cs_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wh_ent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ent_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cs_details`
--

INSERT INTO `cs_details` (`id`, `un_name`, `cg_name`, `cs_name`, `dur`, `elig`, `strm`, `cs_type`, `intt`, `wh_ent`, `ent_name`) VALUES
(6, 'sdadad', 'asass', 'aaasasa', '2 Years', 'adadad', 'Commerce', 'Certificate', 'sdsdsdsds', 'No', '-');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `pass`) VALUES
('asim', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `navbar_items`
--

CREATE TABLE `navbar_items` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_num` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navbar_items`
--

INSERT INTO `navbar_items` (`id`, `category`, `cat_num`) VALUES
(1, 'STREAM', 0),
(2, 'DEGREE', 0),
(3, 'UNIVERSITY', 0),
(4, 'INTEREST', 0),
(5, 'SPECIALIZATION', 0),
(6, 'Physics', 1),
(7, 'Chemistry', 1),
(8, 'Biology', 1),
(9, 'Maths', 1),
(11, 'Commerce', 1),
(12, 'Arts', 1),
(13, 'Certificate', 2),
(14, 'Diploma', 2),
(15, 'Bachelor', 2),
(16, 'Master / PG', 2),
(17, 'Central', 3),
(18, 'State', 3),
(19, 'Deemed', 3),
(20, 'Private', 3);

-- --------------------------------------------------------

--
-- Table structure for table `un_details`
--

CREATE TABLE `un_details` (
  `id` int(11) NOT NULL,
  `un_name` text COLLATE utf8_unicode_ci NOT NULL,
  `un_add` text COLLATE utf8_unicode_ci NOT NULL,
  `un_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `un_pin` int(11) NOT NULL,
  `un_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `un_site` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `un_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `un_spec` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `un_details`
--

INSERT INTO `un_details` (`id`, `un_name`, `un_add`, `un_state`, `un_pin`, `un_phone`, `un_site`, `un_type`, `un_spec`) VALUES
(21, 'asim', 'asasas', 'Andhra Pradesh', 11212, '121212', 'qqwqwqw', 'Central', 'qeqeqeqe'),
(22, 'ashish', 'asasa', 'Arunachal Pradesh', 121212, '113131313', 'adadadad', 'Deemed', 'aadadad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cg_details`
--
ALTER TABLE `cg_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_details`
--
ALTER TABLE `cs_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `navbar_items`
--
ALTER TABLE `navbar_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `un_details`
--
ALTER TABLE `un_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cg_details`
--
ALTER TABLE `cg_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cs_details`
--
ALTER TABLE `cs_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `navbar_items`
--
ALTER TABLE `navbar_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `un_details`
--
ALTER TABLE `un_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
