-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2023 at 04:55 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack_education_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `create_at`) VALUES
(6, 'Lâm Nhật Huy', 'huylnpc05258@fpt.edu.vn', '704f51d8f2ff0877319d7b669f20b7a4', '2023-07-11 22:53:02'),
(7, 'admin', 'admin@gmail.com', 'eb8b4d7c3dcbbc4e67257986b8fa6b94', '2023-07-11 23:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `price`, `description`) VALUES
(8, 'Kiến Thức Nhập Môn IT', '1.png', '100,000VNĐ', 'Để có cái nhìn tổng quan về ngành IT chuyên ngành Web\r\n'),
(10, 'Lập trình C++ cơ bản, nâng cao', '2.png', '100,000VNĐ', 'Khóa học lập trình C++ từ cơ bản tới nâng cao '),
(11, 'HTML CSS từ Zero đến Hero', '3.png', '100,000VNĐ', 'Trong khóa này chúng ta sẽ xây dựng giao diện Website'),
(12, 'Responsive Với Grid System', '4.png', '50,000VNĐ', 'Trong khóa này chúng ta sẽ học về Responsive'),
(13, 'Lập Trình JavaScript Cơ Bản', '5.png', '100,000VNĐ', 'Học Javascript cơ bản cho người chưa từng học lập trình.'),
(14, 'Lập Trình JavaScript Nâng Cao', '6.png', '100,000VNĐ', 'Hiểu sâu hơn về cách Javascript hoạt động'),
(15, 'Làm việc với Terminal & Ubuntu', '7.png', '100,000VNĐ', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến'),
(16, 'Xây Dựng Website với ReactJS', '8.png', '120,000VNĐ', 'Khóa học lập trình ReactJS từ cơ bản tới nâng cao');

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `id` int NOT NULL,
  `course_id` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `create_at`) VALUES
(8, 'Lâm Nhật Huy', 'lamnhathuy0393418721@gmail.com', '0393379824', '53a9b54c9b63e0634b97685d0ca0315e', '2023-07-14 19:40:21'),
(9, 'Lâm Nhật Huy', 'huylnpc05258@fpt.edu.vn', '0393418721', '704f51d8f2ff0877319d7b669f20b7a4', '2023-07-14 19:48:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_list`
--
ALTER TABLE `course_list`
  ADD CONSTRAINT `course_list_ibfk_1` FOREIGN KEY (`id`) REFERENCES `courses` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
