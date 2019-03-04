-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2019 at 05:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Guest_House`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfos`
--

CREATE TABLE `bookinginfos` (
  `Empno` varchar(10) NOT NULL,
  `Jtype` varchar(10) NOT NULL,
  `Roomid` varchar(10) NOT NULL,
  `Strd` date NOT NULL,
  `Endd` date NOT NULL,
  `Amount` int(5) DEFAULT NULL,
  `Cleval` tinyint(1) DEFAULT '0',
  `isbooked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinginfos`
--

INSERT INTO `bookinginfos` (`Empno`, `Jtype`, `Roomid`, `Strd`, `Endd`, `Amount`, `Cleval`, `isbooked`) VALUES
('001', 'Acadamic', '1', '2019-02-28', '2019-03-03', 7500, 1, 1),
('004', 'Non-Acadam', '2', '2019-02-14', '2019-02-15', 4300, 1, 1),
('005', 'Acadamic', '2', '2019-02-23', '2019-02-26', 10500, 1, 0),
('002', 'Acadamic', '2', '2019-03-08', '2019-03-12', 3500, 1, 1),
('003', 'Non-Acadam', '3', '2019-03-01', '2019-03-06', 4500, 1, 0),
('003', 'Acadamic', '3', '2019-03-15', '2019-03-17', 4800, 1, 1),
('006', 'Acadamic', '4', '2019-03-06', '2019-03-07', 5000, 0, 0),
('005', 'Non-Acadam', '4', '2019-03-22', '2019-03-26', 5000, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfos`
--
ALTER TABLE `bookinginfos`
  ADD PRIMARY KEY (`Roomid`,`Strd`,`Endd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
