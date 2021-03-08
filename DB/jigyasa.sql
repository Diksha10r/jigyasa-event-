-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 06:00 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jigyasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'imcc@gmail.com', 's');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `an_id` int(20) NOT NULL,
  `e_id` int(20) NOT NULL,
  `f_id` int(20) NOT NULL,
  `college_nm` varchar(100) NOT NULL,
  `reference_nm` varchar(20) NOT NULL,
  `reference_phone` int(12) NOT NULL,
  `date` date NOT NULL,
  `msg` varchar(600) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `fee` int(10) NOT NULL,
  `members` int(20) NOT NULL,
  `rules` text NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `name`, `date`, `time`, `location`, `fee`, `members`, `rules`, `img`) VALUES
(1, 'quizz', '2018-05-06', '01:01', 'imcc', 200, 10, '1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event \r\n												', '1521402229266357-2-316x236.png'),
(23, 'crazy c', '2018-03-31', '10:00', 'pune', 150, 2, 'asjbakjsbkjbKJBSKBS jskjAH KJHask kjhskjah skjashkjS JKRules Of Event				', '1521401411284471-3.jpg'),
(24, 'i click', '2018-01-05', '01:01', 'imcc', 200, 2, '1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event 1Rules Of Event \r\n								', '1521401551181721-2-2-316x236.png');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_id` int(20) NOT NULL,
  `e_id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `img` text,
  `head` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(20) NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `img`) VALUES
(22, '1521433974119153-2.jpg'),
(17, '1521433744286123-2.jpg'),
(24, '152143400750153-2.jpg'),
(25, '1521434028308023-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sub` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `email`, `name`, `sub`, `msg`) VALUES
(1, 's@s.s', 'saloni', 'amsnasbnasbaj', 'sjkasndkjasakdhYour Message');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `p_id` int(20) NOT NULL,
  `e_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `college` varchar(200) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `s_id` int(20) NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`s_id`, `img`) VALUES
(4, '1521434914229637-2-316x236.png'),
(3, '152143490620193-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `v_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `rollno` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(30) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`an_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `an_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
