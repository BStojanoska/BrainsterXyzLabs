-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2018 at 11:36 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainsterXyzLabsTest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'blagicastojanoska@gmail.com', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `subtitle` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(2048) CHARACTER SET latin1 DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `photo` varchar(2048) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `subtitle`, `url`, `description`, `photo`) VALUES
(5, 'ÐŸÑ€Ð¾Ð¸Ð·Ð²Ð¾Ð´ 1', 'ÐŸÐ¾Ð´Ð½Ð°ÑÐ»Ð¾Ð² 1', 'http://proizvod1.com/', 'ÐžÐ¿Ð¸Ñ Ð½Ð° Ð¿Ñ€Ð¾Ð¸Ð·Ð²Ð¾Ð´Ð¾Ñ‚.', 'http://diylogodesigns.com/blog/wp-content/uploads/2016/02/Total-png-logo-download.png'),
(7, 'ÐŸÑ€Ð¾Ð¸Ð·Ð²Ð¾Ð´ 3', 'ÐŸÐ¾Ð´Ð½Ð°ÑÐ»Ð¾Ð² 3', 'http://proizvod3.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.', 'https://png.pngtree.com/element_origin_min_pic/17/02/16/61e6434ef03f9e31146c6bcd845476a5.jpg'),
(8, 'ÐŸÑ€Ð¾Ð¸Ð·Ð²Ð¾Ð´ 4', 'ÐŸÐ¾Ð´Ð½Ð°ÑÐ»Ð¾Ð² 4', 'http://proizvod4.com/', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', 'https://vignette.wikia.nocookie.net/gtawiki/images/9/9a/PlayStation_1_Logo.png/revision/latest?cb=20100130082645'),
(14, 'ÐŸÑ€Ð¾Ð¸Ð·Ð²Ð¾Ð´ 10', 'ÐŸÐ¾Ð´Ð½Ð°ÑÐ»Ð¾Ð² 10', 'http://proizvod10.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem. Lorem!', 'http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c535.png'),
(18, 'ÐÐ¾Ð²Ð° ÐºÐ°Ñ€Ñ‚Ð¸Ñ‡ÐºÐ° 2', 'ÐÐ¾Ð²Ð°', 'http://proizvod20.com/', 'ÐžÐ¿Ð¸Ñ Ð½Ð° Ð¿Ð¾ÑÐ»ÐµÐ´ÐµÐ½ Ð¿Ñ€Ð¾Ð¸Ð·Ð²Ð¾Ð´.', 'https://img.freepik.com/free-icon/youtube-logo_318-49909.jpg?size=338c&ext=jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
