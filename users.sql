-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 09:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dunno`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`) VALUES
(30, 'WINTERMUTE', '9ce4a065c671b95bde016b295e58d25ceb42a7ae'),
(31, 'henchman24', '627251699e056cd4705526c796f81d5b6272b094'),
(32, 'beckypls', 'b1432db0088f669789237117d35b0b8e14768d10'),
(35, 'gary', '472b07b9fcf2c2451e8781e944bf5f77cd8457c8'),
(36, 'GrepMaster42', '6f99ebe40786111b7cceba8dccba662029d1e094'),
(37, 'henchman21', '4d134bc072212ace2df385dae143139da74ec0ef'),
(38, 'TheMightyMonarch', '5cdbb083fcec1ccd53bc8d8626cbeb92f58e36fb'),
(39, 'matt', '1fa2ef4755a9226cb9a0a4840bd89b158ac71391'),
(40, 'EhSteve', 'b70482a9c35b236639019cd8b2ecb03a9ee7db09'),
(41, 'wintermute', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(42, 'oh-hai', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'),
(43, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
