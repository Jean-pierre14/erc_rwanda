-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 01:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erc_tb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL COMMENT 'Auto increment id',
  `unique_id` int(200) NOT NULL COMMENT 'Unique id of Admin',
  `email` varchar(255) NOT NULL COMMENT 'His email',
  `password` varchar(255) NOT NULL COMMENT 'Password crypt by php. ',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Date and time the admin was created'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `unique_id`, `email`, `password`, `created_at`) VALUES
(1, 0, 'chiruzabisimwa@gmail.com', '', '2022-08-10 05:30:50'),
(2, 0, 'diane@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-08-10 05:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL COMMENT 'news id',
  `unique_id` int(200) NOT NULL COMMENT 'unique id',
  `title` varchar(255) NOT NULL COMMENT 'Title',
  `subtitle` varchar(255) NOT NULL COMMENT 'Sub title',
  `content` text NOT NULL COMMENT 'Message',
  `img` varchar(400) NOT NULL COMMENT 'Image',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Date and time of the event created.',
  `poster_id` int(200) NOT NULL COMMENT 'Admin id who post the event'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `unique_id`, `title`, `subtitle`, `content`, `img`, `created_at`, `poster_id`) VALUES
(1, 1038167118, 'Test', 'Sub test', 'message', '166011131320201201_092116.jpg', '2022-08-10 08:01:53', 2),
(2, 1484743309, 'Les etudiants', 'Finaliste', 'On va prier', '1660112947IMG_1289.jpeg', '2022-08-10 08:29:07', 2),
(3, 1647382664, 'L\'evangelisation', 'La parole', 'Nous vous invitons tous a nous joindre dans cette action de grace.', '1660116299IMG_5401.jpeg', '2022-08-10 09:24:59', 0),
(4, 172727585, 'Test', 'Newtestphone', 'Message', '166013827144233C89-87CD-4337-A5AD-CD6EE0EF5E3F.jpeg', '2022-08-10 15:31:11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto increment id', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'news id', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
