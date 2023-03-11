-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 01:44 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fest_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_tb`
--

CREATE TABLE IF NOT EXISTS `college_tb` (
  `col_id` int(50) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `logid` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_tb`
--

INSERT INTO `college_tb` (`col_id`, `college_name`, `email`, `username`, `password`, `phone`, `address`, `logid`) VALUES
(1, 'Collge', 'college@gmail.com', 'college', 'college', '9496094009', 'Address', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_tb`
--

CREATE TABLE IF NOT EXISTS `course_tb` (
  `course_id` int(40) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tb`
--

INSERT INTO `course_tb` (`course_id`, `course`) VALUES
(1, 'dcvfdg');

-- --------------------------------------------------------

--
-- Table structure for table `event_reg_tb`
--

CREATE TABLE IF NOT EXISTS `event_reg_tb` (
  `event_reg_id` int(50) NOT NULL,
  `lid` int(50) NOT NULL,
  `even_id` int(50) NOT NULL,
  `col_id` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_reg_tb`
--

INSERT INTO `event_reg_tb` (`event_reg_id`, `lid`, `even_id`, `col_id`) VALUES
(3, 3, 4, 0),
(4, 3, 4, 0),
(5, 0, 4, 0),
(6, 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_tb`
--

CREATE TABLE IF NOT EXISTS `event_tb` (
  `even_id` int(50) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone1` varchar(100) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `date1` varchar(50) NOT NULL,
  `time1` varchar(50) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `logid` int(20) NOT NULL,
  `status` varchar(200) NOT NULL,
  `poster` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_tb`
--

INSERT INTO `event_tb` (`even_id`, `event_name`, `email`, `phone1`, `phone2`, `date1`, `time1`, `venue`, `amount`, `description`, `logid`, `status`, `poster`) VALUES
(4, 'Paper Presentation', 'vins@gmail.com', '9685415275', '9674236541', '2019-12-22', '01:00', 'Kaloor', '345', 'desc', 1, 'Approved', 'g2.jpg'),
(5, 'der', 'amal@gmail.com', '9685415275', '9674236541', '2019-12-21', '01:00', 'Kaloor', '45', 'esrf', 1, 'Approved', 'g6.jpg'),
(6, 'aa', 'a@gmail.com', '9685415275', '9674236541', '2019-12-13', '01:00', 'Kaloor', '23', 'desv', 1, 'Pending', 'smile.png'),
(7, 'f', 'amal@gmail.com', '9685415275', '9674236541', '2019-12-29', '01:00', 'Kaloor', '34', 'derr', 1, 'Pending', 'in11.jpg'),
(8, 'ertt', 'merlinminnu9@gmail.com', '9685415275', '', '2019-12-13', '01:00', 'Kaloor', '', 'fryui', 1, 'Pending', 'g6.jpg'),
(9, 'tyuio', 'fleming@gmail.com', '9685415278', '9674236549', '2019-12-12', '01:00', 'Kaloor', '96', 'tyui', 1, 'Pending', 'in5.jpg'),
(10, 'yupouuii', 'wvatti@gmail.com', '9685615275', '9677236549', '2019-12-19', '01:00', 'Kaloor', '41', 'frtt', 1, 'Pending', 'g1.jpg'),
(11, 'ouiiii', 'merlinminnu@gmail.com', '9685415275', '9674236549', '2019-12-27', '01:00', 'Kaloor', '90', 'frere', 1, 'Pending', 'in10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE IF NOT EXISTS `login_tb` (
  `logid` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`logid`, `username`, `password`, `role`) VALUES
(1, 'college', 'college', 'College'),
(2, 'RC01', 'add', 'User'),
(3, 'vishal', 'vishal', 'Student'),
(4, 'jeesh', 'jeesh', 'Student'),
(5, 'ajith', 'ajith', 'Student'),
(6, 'ajith', 'ajith', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE IF NOT EXISTS `user_tb` (
  `user_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `col_id` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `log_id` int(50) NOT NULL,
  `interest` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `name`, `email`, `phone`, `username`, `password`, `address`, `gender`, `col_id`, `course_id`, `log_id`, `interest`) VALUES
(1, 'gana', 'amal@gmail.com', '9496094', 'RC01', 'add', 'dgdfhgfh', 'Female', '1', '1', 2, '4'),
(2, 'vishal s', 'vishalu@gmial.com', '9685741260', 'vishal', 'vishal', 'Kaloors', 'Male', '1', '1', 3, '4'),
(3, 'Ajith', 'u@gmail.com', '7885365363', 'ajith', 'ajith', 'Nadackkamattahill house', 'Male', '1', '1', 6, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_tb`
--
ALTER TABLE `college_tb`
  ADD PRIMARY KEY (`col_id`);

--
-- Indexes for table `course_tb`
--
ALTER TABLE `course_tb`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `event_reg_tb`
--
ALTER TABLE `event_reg_tb`
  ADD PRIMARY KEY (`event_reg_id`);

--
-- Indexes for table `event_tb`
--
ALTER TABLE `event_tb`
  ADD PRIMARY KEY (`even_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_tb`
--
ALTER TABLE `college_tb`
  MODIFY `col_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course_tb`
--
ALTER TABLE `course_tb`
  MODIFY `course_id` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event_reg_tb`
--
ALTER TABLE `event_reg_tb`
  MODIFY `event_reg_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event_tb`
--
ALTER TABLE `event_tb`
  MODIFY `even_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `logid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
