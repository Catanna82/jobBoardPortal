-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране:  4 апр 2021 в 14:48
-- Версия на сървъра: 10.4.18-MariaDB
-- Версия на PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `jobsdb`
--
CREATE DATABASE IF NOT EXISTS `jobsdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jobsdb`;

-- --------------------------------------------------------

--
-- Структура на таблица `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(8192) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `company` varchar(255) NOT NULL,
  `salary` float NOT NULL,
  `createDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `offers`
--

INSERT INTO `offers` (`id`, `title`, `description`, `company`, `salary`, `createDate`) VALUES
(1, 'Front End Developer', 'The Hague (The Netherlands) Contract staff\r\nOur band of superheroes are looking for a self-driven, highly organised individual who will join the team in creating our most important products.\r\n\r\nLocation is unimportant, as long as you are available, enthusiastic, committed, passionate, and know your stuff.\r\n\r\nFor this role, we need a superhero who will take on the challenges of working in one of the leading WordPress companies, enhancing our website, products, and services, backed by a quality team of pros.\r\n\r\nResponsibilities\r\nYou’ll be part of a development team working on our flagship products. It’s going to be epic!', 'Company Awesome Ltd.', 3500, '2021-04-03'),
(2, 'Front End Developer New!', 'The Hague (The Netherlands) Contract staff\r\nOur band of superheroes are looking for a self-driven, highly organised individual who will join the team in creating our most important products.\r\n\r\nLocation is unimportant, as long as you are available, enthusiastic, committed, passionate, and know your stuff.\r\n\r\nFor this role, we need a superhero who will take on the challenges of working in one of the leading WordPress companies, enhancing our website, products, and services, backed by a quality team of pros.\r\n\r\nResponsibilities\r\nYou’ll be part of a development team working on our flagship products. It’s going to be epic!', 'Company Awesome Ltd. ', 2500, '2021-04-03'),
(8, 'Top Gun 233', 'hfhfghfhfghfh', 'New', 2500, '2021-04-04'),
(9, 'Top Gun 25', 'neeeeeeeee', 'some', 4500, '2021-04-04'),
(10, 'dgd - new', '123453535w', 'New', 5000, '2021-04-04'),
(11, 'dgd - new1', 'hfhfg', 'some', 5000, '2021-04-04');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
