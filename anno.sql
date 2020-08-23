-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 05:33 PM
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
-- Database: `anno`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `uid` varchar(100) DEFAULT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`uid`, `message`, `date`, `mid`) VALUES
('sou123', ' Nice project buddy!!\r\nWell done!!', '12:20:32pm', 25),
('Jay2000', ' Hey Bro 😁', '12:32:46pm', 26),
('kaku123', ' &lt;h1&gt; hello &lt;/h1&gt;', '12:40:40pm', 28),
('sou123', 'Bokachoda ', '01:04:43pm', 29),
('admin_12', ' hello bro', '01:13:51pm', 30),
('admin_12', ' ', '01:19:58pm', 31);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upassword`) VALUES
('admin_12', 'SANTANU SAHA', '14d5c10e6882acc65b33df04e64590e2'),
('Deep2', 'Deep Das', 'fca72a0798e6428d174b11da6c40043b'),
('devjeet4', 'Devjeet Roy', 'a152e841783914146e4bcd4f39100686'),
('Jay2000', 'Jay Das', 'edd9d528fd70f580225aef79ac7d6281'),
('kaku123', 'Kaku Das', '6fb42da0e32e07b61c9f0251fe627a9c'),
('mita101', 'Mita Bhattacharya', '1d0b4ee4e174f6fda0bd8b580e2fee6a'),
('sou123', 'Soujatya Bhattacharya', '0a0a7224459a67f2e8946a94bb791d0f'),
('sou2000', 'Soujatya', '36eb3121afd3af77e4baeb93a3a2c06f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
