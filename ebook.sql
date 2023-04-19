-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 02:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `password`, `create_at`) VALUES
(1, 'admin', '123', '2021-12-06 03:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `ebook_id` int(11) NOT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `author_name` varchar(100) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `isbn_no` varchar(30) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL,
  `edition` varchar(5) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `Active` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`ebook_id`, `book_name`, `type`, `author_name`, `img`, `url`, `publisher`, `isbn_no`, `year`, `edition`, `create_at`, `Active`) VALUES
(3, 'Principles of Criminal Law', 'Social_Work', 'Mike Molan', '4c795fd1b15622cdbe54536a6f8e92b1.jpeg', 'https://drive.google.com/file/d/1ekFxixnOWdHHgwBn_5wK44XSFvfax2la/view', NULL, NULL, NULL, NULL, '2021-12-06 13:10:09', 1),
(4, 'Fundamentals of Sociology', 'Social_Work', 'G.Subramanya', '3bc3fd5407019a3e4a8093898dd7ad4e.jpg', 'https://drive.google.com/file/d/17pclB-Gf_EOQqL8Z3VhO6Iy3-VdX8P9Z/view', NULL, NULL, NULL, NULL, '2021-12-06 13:22:41', 1),
(5, 'Laboratory Manual of Biochemistry', 'Electronics', 'N.A. Khan; K.N. Singh', '82d4cf81a6ef8fadea8e1040015d324e.jpg', 'https://drive.google.com/file/d/1s43WtYJhR54dxvSjf242U711jFgSqxXz', NULL, NULL, NULL, NULL, '2021-12-06 13:23:31', 1),
(6, 'Economics of  Aquaculture', 'Fisheries', 'R.K.P. Singh', 'bb138e4f906d8bcb8c17e837982ace74.jpg', 'https://drive.google.com/file/d/14YJlrgD6uWBPyoBwt_3Xanaue_u3jd9l/view?usp=sharing\r\n', NULL, NULL, NULL, NULL, '2021-12-06 13:24:20', 1),
(9, 'Fisheries Extension', 'Fisheries', 'Amita Saxena', '92c06cfb063dedde417312a8326fad87.jpg', 'https://drive.google.com/file/d/1Z3JD7cesTysrMUWfD3BxVrfVgXXRXt8G/view', NULL, NULL, NULL, NULL, '2021-12-06 13:49:25', 1),
(10, 'Fishes Around Indian Ocean', 'Fisheries', 'K.P. Biswas', 'c5a00803833ac65b86de60f332c48509.jpg', 'https://drive.google.com/file/d/1naCC2CJ6-QFg82dyylpKFMwUqWhmrVX6/view?usp=sharing\r\n', NULL, NULL, NULL, NULL, '2021-12-06 13:53:00', 1),
(11, 'Fishes Around Indian Ocean', 'Fisheries', 'K.P. Biswas', 'c5a00803833ac65b86de60f332c48509.jpg', 'https://drive.google.com/file/d/1naCC2CJ6-QFg82dyylpKFMwUqWhmrVX6/view?usp=sharing\r\n', NULL, NULL, NULL, NULL, '2021-12-06 13:53:00', 1),
(12, 'Fisheries Extension', 'Fisheries', 'Amita Saxena', '92c06cfb063dedde417312a8326fad87.jpg', 'https://drive.google.com/file/d/1Z3JD7cesTysrMUWfD3BxVrfVgXXRXt8G/view', NULL, NULL, NULL, NULL, '2021-12-06 13:49:25', 1),
(13, 'Fundamentals of Sociology', 'Social_Work', 'G.Subramanya', '3bc3fd5407019a3e4a8093898dd7ad4e.jpg', 'https://drive.google.com/file/d/17pclB-Gf_EOQqL8Z3VhO6Iy3-VdX8P9Z/view', NULL, NULL, NULL, NULL, '2021-12-06 13:22:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `name`, `email`, `phone`, `password`, `type`, `create_at`, `status`) VALUES
(1, 'saranya', 'saranya.arapps@gmail.com', '7639964076', '123', 'Teacher', '2021-12-08 00:00:00', 1),
(2, 'arun', 'arn.karthik@gmail.com', '9894694846', '1234', 'Student', '2021-12-09 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`ebook_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `ebook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
