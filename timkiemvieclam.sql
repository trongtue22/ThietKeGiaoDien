-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 03:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timkiemvieclam`
--

-- --------------------------------------------------------

--
-- Table structure for table `taikhoanuser`
--

CREATE TABLE `taikhoanuser` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phonenumber` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongtinweb`
--

CREATE TABLE `thongtinweb` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thongtinweb`
--

INSERT INTO `thongtinweb` (`id`, `name`, `link`, `description`, `picture`) VALUES
(1, 'IT việc ', 'https://itviec.com/', 'Trang web nổi tiếng lâu đời về giới thiệu việc làm', 'Screenshot 2023-06-17 172349.png'),
(4, 'dsad', 'https://itviec.com/', 'sda2sd2', 'Logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taikhoanuser`
--
ALTER TABLE `taikhoanuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtinweb`
--
ALTER TABLE `thongtinweb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taikhoanuser`
--
ALTER TABLE `taikhoanuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thongtinweb`
--
ALTER TABLE `thongtinweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
