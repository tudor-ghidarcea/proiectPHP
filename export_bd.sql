-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2022 at 11:02 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17950174_casa_de_discuri`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` bigint(100) NOT NULL,
  `nume_album` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `durata_album` time(6) NOT NULL,
  `gen_album` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `artist` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nume_album`, `durata_album`, `gen_album`, `artist`) VALUES
(1, 'Just another brick in the wall', '00:00:45.000000', 'Rock', 'Pink Floyd'),
(2, 'wwww', '00:00:03.000000', 'ssss', 'ssss'),
(3, 'album', '00:00:04.000000', 'ff', 'fff');

-- --------------------------------------------------------

--
-- Table structure for table `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id_biblioteca` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `id_album` bigint(20) DEFAULT NULL,
  `id_piesa` bigint(20) NOT NULL,
  `durata_biblioteca` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `piesa`
--

CREATE TABLE `piesa` (
  `id_piesa` bigint(100) NOT NULL,
  `nume_piesa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `durata_piesa` time(6) NOT NULL,
  `gen_piesa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `artisti` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `piesa`
--

INSERT INTO `piesa` (`id_piesa`, `nume_piesa`, `durata_piesa`, `gen_piesa`, `artisti`) VALUES
(1, 'piesa', '00:00:04.000000', 'rocc', 'rocceri'),
(2, 'hey you', '04:34:00.000000', 'rock', 'Pink Floyd'),
(11, 'titlu', '00:00:08.000000', 'jazz', 'autor');

-- --------------------------------------------------------

--
-- Table structure for table `piesa_album`
--

CREATE TABLE `piesa_album` (
  `id_piesa` bigint(100) NOT NULL,
  `id_album` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `piesa_biblioteca`
--

CREATE TABLE `piesa_biblioteca` (
  `id_piesa` bigint(100) NOT NULL,
  `id_biblioteca` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `user_name`, `password`, `date`) VALUES
(1, 0, 'tudor', 'tudor', '2021-12-07 21:21:55'),
(3, 7, 'tudor2', 'tudor2', '2021-12-07 21:59:42'),
(4, 8, 'user', 'user', '2021-12-07 22:26:55'),
(5, 1, 'Miruna', '1234', '2021-12-07 23:48:38'),
(6, 8, 'papa', 'bun', '2021-12-08 19:35:55'),
(7, 5, 'marti', 'miercuri', '2021-12-21 16:55:34'),
(8, 5, 'fffff', 'fff', '2022-01-04 21:34:28'),
(9, 0, 'ttt', 'ttt', '2022-01-04 21:51:53'),
(10, 3, 'aaa', 'aaaa', '2022-01-12 10:57:32'),
(11, 5, 'aaa', 'aaa', '2022-01-12 10:57:46'),
(12, 9, 'yttytyty', 'ytytytytyt', '2022-01-12 12:06:23'),
(13, 4, 'sasa', 'saasa', '2022-01-12 12:06:32'),
(14, 4, 'fffff', 'ffff', '2022-01-12 12:06:45'),
(15, 9, 'aaa', 'aaa', '2022-01-12 12:08:44'),
(16, 7, 'aaa', 'aaaaa', '2022-01-12 12:10:00'),
(17, 3, 'aaa', 'aaaaa', '2022-01-12 12:11:00'),
(18, 6, 'aaa', 'aaaaa', '2022-01-12 12:11:01'),
(19, 5, 'aaa', 'sss', '2022-01-12 12:11:05'),
(20, 4, 'dfdfdfd', 'dddfd', '2022-01-12 12:11:21'),
(21, 8, 'rtrtrr', 'trtrtrt', '2022-01-12 12:37:49'),
(22, 6, 'rtrtrr', 'trrtrt', '2022-01-12 12:37:55'),
(23, 4, 'dfdfd', 'fdfdfd', '2022-01-12 12:39:13'),
(24, 6, 'dfdfd', 'dfdfdf', '2022-01-12 12:39:19'),
(25, 2, 'sas', 'sasa', '2022-01-12 14:44:51'),
(26, 3, 'fd', 'dfdfd', '2022-01-12 14:50:51'),
(35, 7, 'test', 'test', '2022-01-12 16:37:31'),
(36, 8, 'test1', 'test1', '2022-01-12 16:38:36'),
(37, 1, 'test2', 'test2', '2022-01-12 16:40:33'),
(38, 3, 'tudor', 'tudor', '2022-01-12 17:17:55'),
(39, 7, 'aaa', 'aaa', '2022-01-12 17:19:26'),
(40, 6, 'uuu', 'uuu', '2022-01-12 17:19:48'),
(41, 1, 'contnou', 'contnou', '2022-01-12 17:20:15'),
(42, 4, 'contfoartenou', 'contfoartenou', '2022-01-12 17:24:28'),
(43, 5, 'sss', 'sss', '2022-01-12 17:35:35'),
(44, 5, 'testare', 'testare', '2022-01-12 19:07:29'),
(45, 6, 'asta e un demo', 'asta e un demo', '2022-01-12 19:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `utilizator`
--

CREATE TABLE `utilizator` (
  `id_utilizator` bigint(100) NOT NULL,
  `rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_biblioteca` bigint(100) NOT NULL,
  `id_piesa` bigint(100) NOT NULL,
  `id_album` bigint(100) NOT NULL,
  `nume_utilizator` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parola` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data_alaturare` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id_biblioteca`),
  ADD KEY `id_utilizator_biblioteca` (`id`),
  ADD KEY `id_piesa_biblioteca` (`id_album`);

--
-- Indexes for table `piesa`
--
ALTER TABLE `piesa`
  ADD PRIMARY KEY (`id_piesa`);

--
-- Indexes for table `piesa_album`
--
ALTER TABLE `piesa_album`
  ADD KEY `id_album_fk` (`id_album`),
  ADD KEY `id_piesa_fk` (`id_piesa`);

--
-- Indexes for table `piesa_biblioteca`
--
ALTER TABLE `piesa_biblioteca`
  ADD KEY `id_biblioteca_fk` (`id_biblioteca`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `utilizator`
--
ALTER TABLE `utilizator`
  ADD PRIMARY KEY (`id_utilizator`),
  ADD KEY `id_piesa_utilizator` (`id_piesa`),
  ADD KEY `id_album_utilizator` (`id_album`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id_biblioteca` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `piesa`
--
ALTER TABLE `piesa`
  MODIFY `id_piesa` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `utilizator`
--
ALTER TABLE `utilizator`
  MODIFY `id_utilizator` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD CONSTRAINT `id_album_biblioteca` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_piesa_biblioteca` FOREIGN KEY (`id_album`) REFERENCES `piesa` (`id_piesa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_utilizator_biblioteca` FOREIGN KEY (`id`) REFERENCES `utilizator` (`id_utilizator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `piesa_album`
--
ALTER TABLE `piesa_album`
  ADD CONSTRAINT `id_album_fk` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_piesa_fk` FOREIGN KEY (`id_piesa`) REFERENCES `piesa` (`id_piesa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `piesa_biblioteca`
--
ALTER TABLE `piesa_biblioteca`
  ADD CONSTRAINT `id_biblioteca_fk` FOREIGN KEY (`id_biblioteca`) REFERENCES `biblioteca` (`id_biblioteca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utilizator`
--
ALTER TABLE `utilizator`
  ADD CONSTRAINT `id_album_utilizator` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_biblioteca_utilizator` FOREIGN KEY (`id_utilizator`) REFERENCES `biblioteca` (`id_biblioteca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_piesa_utilizator` FOREIGN KEY (`id_piesa`) REFERENCES `piesa` (`id_piesa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
