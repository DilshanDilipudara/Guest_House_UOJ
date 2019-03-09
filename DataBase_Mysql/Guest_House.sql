-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2019 at 05:53 PM
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
('001', 'Acadamic', '1', '2019-02-28', '2019-03-03', 7500, 4, 1),
('004', 'Non-Acadam', '2', '2019-02-14', '2019-02-15', 4300, 1, 1),
('005', 'Acadamic', '2', '2019-02-23', '2019-02-26', 10500, 1, 0),
('002', 'Acadamic', '2', '2019-03-08', '2019-03-12', 3500, 1, 1),
('003', 'Non-Acadam', '3', '2019-03-01', '2019-03-06', 4500, 1, 0),
('003', 'Acadamic', '3', '2019-03-15', '2019-03-17', 4800, 1, 1),
('006', 'Acadamic', '4', '2019-03-06', '2019-03-07', 5000, 0, 0),
('005', 'Non-Acadam', '4', '2019-03-22', '2019-03-26', 5000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Roomid` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(191) NOT NULL DEFAULT '0.0',
  `size` varchar(255) NOT NULL,
  `Bed_Type` varchar(255) NOT NULL,
  `Facilities` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Roomid`, `description`, `price`, `size`, `Bed_Type`, `Facilities`, `status`) VALUES
('1', 'A/C', '1500', '20', 'One Bed', 'Closet with hangers, HD flat-screen TV, Telephone', ''),
('2', 'A/C', '1400', '25', 'One Bed', 'Closet with hangers, HD flat-screen TV, Telephone', ''),
('3', 'A/C', '2400', '30', 'Two Bed', 'Closet with hangers, HD flat-screen TV, Telephone', ''),
('4', 'Non A/C', '2100', '20', 'One Bed', 'Closet with hangers, HD flat-screen TV, Telephone', ''),
('5', 'Non A/C', '4800', '30', 'Two Bed', 'Closet with hangers, HD flat-screen TV, Telephone', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `Uname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Empno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Crts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nicno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Abill` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isVerified` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Uname`, `Email`, `Empno`, `gender`, `faculty`, `Department`, `Position`, `Pno`, `Crts`, `Nicno`, `Abill`, `password`, `remember_token`, `created_at`, `updated_at`, `isVerified`) VALUES
(1, 'Dilshan', 'dilshandilip6@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$o3GpPY5nfRd1oaofG9xvB.odkpXUvHoNTw6RICqOWSKIcr4XsECHK', '3KH9t9QUssUpsH2exm8yp4D3HmjyhhCw4R4SgaERGgXEifZHXnu341o9qanA', '2019-02-10 10:04:02', '2019-02-10 10:04:02', 0),
(2, 'Indura', 'djindura@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$zT6AdaT9rEhZVK41ke3GD.lqAy10Qy77B1ATpAgc3ib1mkG0xWITu', 'RvKFVEs3rs3PLuBSYwsDt9HjnP17nGQnudbGUr2BYwwnTq6WpnUeAgN6s9Hi', '2019-02-10 14:44:28', '2019-02-10 14:44:28', 0),
(7, 'Sahan', 'Sahan@gmail.com', '1234', 'male', 'male', 'science', 'Admin', '077924567', NULL, '951320307V', NULL, '$2y$10$5JZ57HH8GYrzE71gwyVg.etbdXbSiWGaF5fvL7eD75bpCxI1dDMN6', 'vyVMgxG8vUD141R2tPtuW4iSIie98E4UeHviHawUTpuRFrYV6mE7aNYNuS8i', '2019-02-15 03:39:21', '2019-02-15 03:39:21', 0),
(8, 'sahan', 'Sahan1@gmail.com', '1234', 'Male', 'Science', 'CS', 'Admin', '0779292896', NULL, '951320307V', NULL, '$2y$10$kIu.XoK2Zkn0m3fohxdT9OFEeWPTaV/P6oJ3qPTsvoi.WpUGGiONG', NULL, '2019-02-15 03:42:47', '2019-02-15 03:42:47', 0),
(9, 'dilshan', 'dilshan@gmail.com', '001', 'male', 'science', 'computer science', 'Admin', '0177378668', NULL, '941974088v', NULL, '$2y$10$vf9FuRztlyJJ/fv9IPwILe9S.yrGjLeul6.te7wQ/ZDSN45tHey.i', 'JSJGS7zY0RFup6UBbDTiBjXWmDC0ZuPm6aaTqAanvbioIcdbNaSALgN4tAZz', '2019-02-23 12:10:30', '2019-03-06 01:25:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Empno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfos`
--
ALTER TABLE `bookinginfos`
  ADD PRIMARY KEY (`Roomid`,`Strd`,`Endd`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD UNIQUE KEY `unique` (`Roomid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
