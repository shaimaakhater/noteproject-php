-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 ديسمبر 2019 الساعة 10:44
-- إصدار الخادم: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notedatabase`
--

-- --------------------------------------------------------

--
-- بنية الجدول `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `day` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `note`
--

INSERT INTO `note` (`id`, `title`, `content`, `time`, `day`, `user_id`) VALUES
(1, 'note1', 'dfghjkl;,mnbv', '03:00:00', '2019-10-01', 10),
(8, ' note', 'header(\"location:login.php\");\r\nheader(\"location:login.php\");\r\nheader(\"location:login.php\");\r\n', '02:58:00', '2019-10-08', 10),
(11, 'first note', 'header(\"location:login.php\");\r\nheader(\"location:login.php\");\r\n', '01:01:00', '2019-10-08', 10),
(12, 'note1first note', 'header(\"location:login.php\");\r\nheader(\"location:login.php\");\r\n', '02:57:00', '2019-10-09', 11);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`) VALUES
(5, 'ahmed', '9193ce3b31332b03f7d8af056c692b84', 2),
(6, 'erwaa', '2df45244f09369e16ea3f9117ca45157', 0),
(8, 'shaimaa', '756c7fa7716d14aa0bea0786f8aab463', 2),
(10, 'wafaa', '16791a3deb073dccd2ad5874334908a6', 2),
(11, 'khater_shaimaa', '6fd0ce7c40ac9d69842e06e8f4889d1c', 1),
(12, 'erwaa', '6fd0ce7c40ac9d69842e06e8f4889d1c', 0),
(13, 'wafaa', '76d80224611fc919a5d54f0ff9fba446', 0),
(14, 'erwaa', '6fd0ce7c40ac9d69842e06e8f4889d1c', 0),
(15, 'erwaa', '6fd0ce7c40ac9d69842e06e8f4889d1c', 0),
(16, 'ahmed', '9193ce3b31332b03f7d8af056c692b84', 2),
(17, 'erwaa', '6fd0ce7c40ac9d69842e06e8f4889d1c', 0),
(18, 'wafaa', '16791a3deb073dccd2ad5874334908a6', 0),
(19, 'wafaa', '16791a3deb073dccd2ad5874334908a6', 0),
(20, 'ali', '86318e52f5ed4801abe1d13d509443de', 0),
(21, 'aml', '6687ab6bf47280607cd9767615e91831', 0),
(22, 'nnn', 'a1931ec126bbad3fa7a3fc64209fd921', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
