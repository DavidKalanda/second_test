-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 08:29 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `price` double NOT NULL,
  `address` varchar(50) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `category` varchar(20) NOT NULL,
  `event_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `start_date`, `start_time`, `end_date`, `end_time`, `price`, `address`, `content`, `category`, `event_image`) VALUES
(1, 'First Test', '2017-05-20', '00:00:00', '2017-06-29', '00:00:00', 50, '0', 'plain on its surface. The Moon is filled wit craters. It has no light of its own. It gets its light from the Sun. The Moo keeps changing its shape as it moves round the Earth. It spins on its axis in 27.3 days stars were named after the Edwin Aldrin were the first ones to set their foot on the Moon on 21 July 1969 They reached the Moon in their space craft named Apollo II.', '', ''),
(2, 'Second test', '2017-05-12', '00:00:00', '0000-00-00', '21:45:00', 15, '0', 'This should work The Moon is a barren, rocky world without air and water. It has dark lava plain on its surface. The Moon is filled wit craters. It has no light of its own. It gets its light from the Sun. The Moo keeps changing its shape as it moves round the Earth. It spins on its axis in 27.3 days stars were named after the Edwin Aldrin were the first ones to set their foot on the Moon on 21 July 1969 They reached the Moon in their space craft named Apollo II.', '', ''),
(3, 'Party', '2017-06-06', '00:00:00', '0000-00-00', '23:45:00', 30, '0', 'Third Test The Moon is a barren, rocky world without air and water. It has dark lava plain on its surface. The Moon is filled wit craters. It has no light of its own. It gets its light from the Sun. The Moo keeps changing its shape as it moves round the Earth. It spins on its axis in 27.3 days stars were named after the Edwin Aldrin were the first ones to set their foot on the Moon on 21 July 1969 They reached the Moon in their space craft named Apollo II.', '', ''),
(10, 'BITS Meeting', '2017-05-24', '00:00:00', '0000-00-00', '13:45:00', 300, '0', 'Test. The Moon is a barren, rocky world without air and water. It has dark lava plain on its surface. The Moon is filled wit craters. It has no light of its own. It gets its light from the Sun. The Moo keeps changing its shape as it moves round the Earth. It spins on its axis in 27.3 days stars were named after the Edwin Aldrin were the first ones to set their foot on the Moon on 21 July 1969 They reached the Moon in their space craft named Apollo II.', '', ''),
(11, 'Short Event test', '2017-05-25', '00:00:00', '0000-00-00', '13:45:00', 0, '0', 'This is very short', '', ''),
(12, 'Last test', '2017-05-13', '00:00:00', '0000-00-00', '13:45:00', 0, '0', ',kllllllllllllllllkasfdasdfasdfasdlfs,a;dfas,opfdmpsadfsad fiasodfspifasik dfosaijdf sadfjisaodf jsadfijsdfo sadjifoai l\r\nasdfsadfasdfsadfsadf', '', ''),
(14, 'Price Test', '2017-05-26', '00:00:00', '0000-00-00', '13:45:00', 0, '0', 'This is a price test', '', ''),
(15, 'Test at ghome', '2017-06-08', '00:00:00', '0000-00-00', '13:45:00', 0, '0', 'just a test', '', ''),
(16, 'Test at home', '2017-05-25', '00:00:00', '0000-00-00', '13:45:00', 0, '', 'Last test at home', '', ''),
(17, 'Pizza Party', '2017-06-08', '00:00:00', '0000-00-00', '13:45:00', 0, 'Winnipeg', 'Come all', '', ''),
(20, 'New form', '2017-06-09', '13:45:00', '0000-00-00', '00:00:00', 0, '', 'Test form and location', '', ''),
(21, 'Location Test', '2017-06-09', '17:45:00', '0000-00-00', '00:00:00', 0, '', 'Testing the location', '', ''),
(22, 'Testing location again! :(', '2017-06-10', '13:45:00', '0000-00-00', '00:00:00', 50, 'Winnipeg', 'Another test', '', ''),
(23, 'Date Test', '2017-06-08', '13:45:00', '0000-00-00', '00:00:00', 0, 'Winnipeg', 'Date test', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_address`, `password`) VALUES
(1, 'admin', '0', '', 'admin'),
(2, 'test', '0', '', 'test'),
(4, 'user', '', 'user@user.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
