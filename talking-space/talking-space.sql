-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 04:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talking-space`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE `bio` (
  `user` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `class_of` varchar(250) NOT NULL,
  `current_workplace` varchar(250) NOT NULL,
  `about` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`user`, `course`, `faculty`, `class_of`, `current_workplace`, `about`) VALUES
('BryanA', 'BSIT', 'Engineering & Technology', '2016', 'Andela', '         Hello?                                       '),
('ChrisMuga', 'BBIT', 'Engineering & Technology', '2017', 'Jumo', '                                                Hey?                                                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `from_` varchar(250) NOT NULL,
  `postid` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `from_`, `postid`, `date`, `time`) VALUES
('2836', 'but love sucks? lol!', 'DonnaSonia', '7739 ', '2018-10-16', '09:49:07am'),
('301', 'yes, it is.', 'ChrisMuga', '130 ', '2018-10-16', '09:11:53am'),
('4702', 'Im fine, you?', 'LatashaN', '7533 ', '2018-10-16', '11:09:48am'),
('528', 'everything?', 'ChrisMuga', '33 ', '2018-10-16', '09:18:06am'),
('6169', 'God is good and that is his nature.', 'HillaryK', '3398 ', '2018-10-16', '11:02:02am'),
('6630', 'All the time.', 'TomHanks', '6519 ', '2018-10-16', '10:55:25am'),
('6733', 'is it not?', 'ChrisMuga', '130 ', '2018-10-16', '09:36:17am'),
('7764', 'Hello?', 'ChrisMuga', '5690 ', '2018-10-16', '09:17:34am');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `postid` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`postid`, `username`, `date`, `time`) VALUES
(130, 0, 2018, 8),
(130, 0, 2018, 8),
(130, 0, 2018, 8),
(33, 0, 2018, 8),
(5690, 0, 2018, 8),
(33, 0, 2018, 9),
(5690, 0, 2018, 9),
(7739, 0, 2018, 9),
(6669, 0, 2018, 10),
(6519, 0, 2018, 10),
(3398, 0, 2018, 11),
(7533, 0, 2018, 11);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` varchar(250) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `from_` varchar(250) NOT NULL,
  `to_` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `msg`, `from_`, `to_`, `date`, `time`) VALUES
('1117', '                    Hello, Chris.?', 'BryanA', 'ChrisMuga', '2018-10-16', '12:00:24pm'),
('8533', '                    Hello There?', 'PersonX', 'ChrisMuga', '2018-10-16', '12:58:46pm');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `username` varchar(250) NOT NULL,
  `post` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`username`, `post`, `title`, `date`, `time`, `id`) VALUES
('BryanA', 'All the time I thank the Lord.  ', 'GodIsGood', '2018-10-16', '10:43:59am', 6669),
('ChrisMuga', 'Its a beautiful day!', 'PeaceLovePositivity', '2018-10-16', '07:20:41am', 130),
('ChrisMuga', 'Yours is the world, and everything thats in it. ', 'PeaceLovePositivity', '2018-10-16', '07:21:53am', 33),
('ChrisMuga', 'Hello World? :)', 'PeaceLovePositivity', '2018-10-16', '07:36:22am', 5690),
('DonnaSonia', '    Im a sucker for love!            ', 'LoveLoveLove', '2018-10-16', '09:48:28am', 7739),
('DonnaSonia', 'Thank you Lord!', 'GodIsGood', '2018-10-16', '10:41:43am', 6668),
('HillaryK', 'All time.         ', 'GodIsGood', '2018-10-16', '11:01:31am', 3398),
('LatashaN', 'Hawayu?     ', 'Hello World?', '2018-10-16', '11:09:34am', 7533),
('PersonX', '                hi there', 'PeaceLovePositivity', '2018-10-16', '12:56:24pm', 3491),
('TomHanks', 'Praise God all the time.                ', 'Praise God', '2018-10-16', '10:53:54am', 6519);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `email_address`, `password`) VALUES
('BryanA', 'Bryan Achoki', 'bryan@gmail.com', 'bryan'),
('Charity Kishanto Nekishon', 'CharityK', 'CharityK@mail.com', 'charity'),
('ChrisMuga', 'Chris Muga', 'chrismuga94@gmail.com', 'king'),
('DonnaSonia', 'Donna Sonia', 'donna@gmail.com', 'donna'),
('HillaryK', 'Hillary Kimani', 'Hillary@mail.com', 'hillary'),
('LatashaN', 'Latasha Ndirangu', 'latasha@mail.com', 'tasha'),
('PersonX', 'Person X', 'person@mail.com', 'p'),
('TomHanks', 'Tom Hanks', 'Tom@Mail.com', 'tom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`username`,`date`,`time`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email_address`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
