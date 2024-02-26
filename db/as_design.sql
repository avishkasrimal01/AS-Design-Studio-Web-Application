-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 03:58 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `as_design`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Message`, `Subject`) VALUES
(1, 'Saluka Changala', 'salukachangala@gmail.com', 'Is you design the banners and brouchers?', ''),
(2, 'Sahani Sathsaranai', 'sahanisathsarani02@gmail.com', 'Hey!\r\nI want to get a service from you.', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('avishka', 'admin'),
('asrimal76@gmail.com', 'admin'),
('admin', 'admin'),
('asrimal76@gmail.com', 'Avishka@123'),
('avishka@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ID` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ID`, `Name`, `Email`, `Category`, `Message`) VALUES
(1, 'Nipun De Silva', 'nipundesilva@gmail.com', 'Advertising and Marketing Design', 'Hiii,\r\n\r\nWe are in need of eye-catching social media graphics for our upcoming events. The page name is DWAVE Studio , and we would like graphics for platforms like Instagram, Facebook, and Twitter.\r\n\r\nPlease consider our brand colors gold and inco'),
(2, 'Lakshan Sandanayaka', 'lakshansandanayaka@gmail.com', 'Logo & Brand Identity Design', 'Hello,\r\n\r\nI am reaching out to request a logo design for my CANEDIA clothing bussiness. We are looking for a modern and minimalist logo that reflects our brand values of \"Style Elegance, Tailored for You\". Our primary colors are blue and white, and we wou'),
(3, 'sahani Sathsaranai', 'sahanisathsarani02@gmail.com', 'Photography & Retouching', 'I want to do a photo shoot in my birthday, can you do it?');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Review` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `Name`, `Email`, `Review`) VALUES
(1, 'Kasun Perera', 'kasunp21@gmail.com', 'This design is perfect. I like it. Thank you very much for your service.'),
(2, 'Oshini Apoorwa', 'oshiniapoorwa99@gmail.com', 'This is very beautiful. Very colorful oil painting design. I love this design. Thank you so much.'),
(3, 'Nipun De Silva', 'nipundesilva@gmail.com', 'Excellent Service!!! Thank You.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `SID` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`SID`, `Name`, `Category`, `Description`, `Price`, `path`) VALUES
(1, 'logo1', 'Logo & Brand Identity Design', 'wertyuiop[]ssdfghjkl;zxcvbnm,./', '', 'C:\\Users\\Avishka\\Desktop\\AS_website\\assets\\img_web/company logo 1'),
(2, 'logo1', 'Logo & Brand Identity Design', 'wertyuiop[]ssdfghjkl;zxcvbnm,./', '', 'C:\\Users\\Avishka\\Desktop\\AS_website\\assets\\img_web/company logo 1'),
(3, 'fewfw', 'Logo & Brand Identity Design', 'efwef', 'weffwe', 'uploads/'),
(4, '7i8', 'Logo & Brand Identity Design', '8iii8', 'i8ii8i', 'uploads/'),
(5, '7i8', 'Logo & Brand Identity Design', '8iii8', 'i8ii8i', '/ASwebsite/uploads/'),
(6, '7i8', 'Logo & Brand Identity Design', '8iii8', 'i8ii8i', '/ASwebsite/uploads/'),
(7, 'sdvvd', 'Logo & Brand Identity Design', 'vdsv', 'sdvsdv', '/ASwebsite/uploads/'),
(8, 'sdvvd', 'Logo & Brand Identity Design', 'vdsv', 'sdvsdv', 'uploads/'),
(9, 'vv', 'Logo & Brand Identity Design', 'vdd', 'dvdvd', 'uploads/'),
(10, 'vv', 'Logo & Brand Identity Design', 'vdd', 'dvdvd', 'uploads/'),
(11, 'rrry', 'Logo & Brand Identity Design', 'egree', 'eggr', 'uploads/'),
(12, 'rrry', 'Logo & Brand Identity Design', 'egree', 'eggr', 'uploads/'),
(13, 'test', 'Logo & Brand Identity Design', 'test', '2000', 'uploads/'),
(14, 'logo1', 'Logo & Brand Identity Design', '23456789', '2345678', 'uploads/'),
(15, 'Avishka', 'Logo & Brand Identity Design', '456', '5678', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile_Number` int NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `Name`, `Mobile_Number`, `Email`, `Password`) VALUES
(1, 'Avishka Srimal', 765570996, 'asrimal76@gmail.com', 'Avishka@123'),
(4, 'Lakshan Sandanayaka', 765865168, 'lakshansandanayaka@gmail.com', 'lakshan123'),
(5, 'Nipun De Silva', 714498465, 'nipundesilva@gmail.com', 'nipun123'),
(6, 'Kasun Perera', 758976486, 'kasunp009@gmail.com', 'kasun123'),
(7, 'aaa', 2147483647, 'avishka@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `SID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
