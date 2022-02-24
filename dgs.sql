-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 12:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Comm_No` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Comment` text NOT NULL,
  `Likes` int(11) NOT NULL,
  `Dislikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Comm_No`, `U_ID`, `Date`, `Comment`, `Likes`, `Dislikes`) VALUES
(13, 2, '2022-02-24 16:13:09', 'I want div tags to be horizontally aligned. How can i make that happen', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `join_team`
--

CREATE TABLE `join_team` (
  `U_ID` int(11) NOT NULL,
  `Team_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `Reply_No` int(11) NOT NULL,
  `Comm_No` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `Date` int(11) DEFAULT NULL,
  `Reply` text NOT NULL,
  `Likes` int(11) NOT NULL DEFAULT 0,
  `Dislikes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`Reply_No`, `Comm_No`, `U_ID`, `Date`, `Reply`, `Likes`, `Dislikes`) VALUES
(13, 13, 1, 2022, 'Use css => position: fixed ; and hive petameters like top: 5px ; right: 5px; ', 0, 0),
(14, 13, 1, 2022, 'How about including your div tags in a table and not adding a border\r\neg:- \r\n<table>\r\n<tr>\r\n<tr>\r\n<td><div>lorem ipsum</div></td><td><div>lorem ipsum ipsum ipsum</div></td>\r\n</table>', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `Team_ID` int(11) NOT NULL,
  `Team_Name` varchar(30) NOT NULL,
  `Leader` int(11) NOT NULL,
  `Faculty` enum('computing','business','science','engineering') NOT NULL,
  `Batch` varchar(5) DEFAULT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Purpuse` text NOT NULL,
  `Members` int(11) NOT NULL,
  `Max_Members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`Team_ID`, `Team_Name`, `Leader`, `Faculty`, `Batch`, `Subject`, `Purpuse`, `Members`, `Max_Members`) VALUES
(1, 'teast2', 2, 'computing', '21.1', 'web div', 'test setTeams function', 4, 5),
(28, 'Web Project Team 51', 2, 'computing', '21.1', 'web divelopment', 'To make a project to the final web development assignment ', 4, 5),
(29, 'Business wadak ', 2, 'business', '21.1', 'business something', 'something something to do something', 2, 10),
(30, 'Science wadak', 2, 'science', '21.1', 'science something', 'Something Science related? I think?', 3, 6),
(31, 'Make a building', 2, 'engineering', '21.1', 'Building a building', 'We are building a building as we were taught by our lecturers. . ', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `trequest`
--

CREATE TABLE `trequest` (
  `Request_ID` int(11) NOT NULL,
  `Team_ID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trequest`
--

INSERT INTO `trequest` (`Request_ID`, `Team_ID`, `Date`, `Description`) VALUES
(1, 1, '2022-02-23 15:07:25', 'A girl is needed. No qualifications necessary. being a girl is enough  '),
(2, 28, '2022-02-24 16:48:31', 'We need a girl. Being a girl is enough. No qualifications required');

-- --------------------------------------------------------

--
-- Table structure for table `tsearch`
--

CREATE TABLE `tsearch` (
  `TSearchNo` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Task` varchar(100) NOT NULL,
  `Conditions` text DEFAULT NULL,
  `Contact1` varchar(30) NOT NULL,
  `Contact2` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tsearch`
--

INSERT INTO `tsearch` (`TSearchNo`, `U_ID`, `Date`, `Subject`, `Task`, `Conditions`, `Contact1`, `Contact2`) VALUES
(1, 2, '2022-02-24 12:27:53', 'Web development', 'To develop a web site for the project', 'I wan a group that has at least one other girl as a member. I\'m not comfortable being the only girl in a group ', '4737274272', 'siriyalathaa@gmial.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` int(11) NOT NULL,
  `F_Name` varchar(30) NOT NULL,
  `L_Name` varchar(30) NOT NULL,
  `U_Name` varchar(20) NOT NULL,
  `E_Mail` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `Batch` float NOT NULL,
  `Faculty` enum('computing','business','science','engineering') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `F_Name`, `L_Name`, `U_Name`, `E_Mail`, `Password`, `Gender`, `Batch`, `Faculty`) VALUES
(1, 'chamith', 'DanneNaa', 'ChamithChamith', 'chamith@gmail.com', 'boo321', 'male', 21, 'computing'),
(2, 'Prasitha', 'Samaraarachchi', 'Developer7', 'prasithajeevadya@gmail.com', 'boo123', 'male', 21, 'computing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comm_No`),
  ADD KEY `U_ID` (`U_ID`);

--
-- Indexes for table `join_team`
--
ALTER TABLE `join_team`
  ADD KEY `Team_ID` (`Team_ID`),
  ADD KEY `U_ID` (`U_ID`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`Reply_No`),
  ADD KEY `Comm_No` (`Comm_No`),
  ADD KEY `U_ID` (`U_ID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`Team_ID`),
  ADD KEY `Leader` (`Leader`);

--
-- Indexes for table `trequest`
--
ALTER TABLE `trequest`
  ADD PRIMARY KEY (`Request_ID`),
  ADD KEY `Team_ID` (`Team_ID`);

--
-- Indexes for table `tsearch`
--
ALTER TABLE `tsearch`
  ADD PRIMARY KEY (`TSearchNo`),
  ADD KEY `U_ID` (`U_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Comm_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `Reply_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `Team_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `trequest`
--
ALTER TABLE `trequest`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tsearch`
--
ALTER TABLE `tsearch`
  MODIFY `TSearchNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `users` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `join_team`
--
ALTER TABLE `join_team`
  ADD CONSTRAINT `join_team_ibfk_1` FOREIGN KEY (`Team_ID`) REFERENCES `teams` (`Team_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_team_ibfk_2` FOREIGN KEY (`U_ID`) REFERENCES `users` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`Comm_No`) REFERENCES `comments` (`Comm_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`U_ID`) REFERENCES `users` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`Leader`) REFERENCES `users` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trequest`
--
ALTER TABLE `trequest`
  ADD CONSTRAINT `trequest_ibfk_1` FOREIGN KEY (`Team_ID`) REFERENCES `teams` (`Team_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tsearch`
--
ALTER TABLE `tsearch`
  ADD CONSTRAINT `tsearch_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `users` (`U_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
