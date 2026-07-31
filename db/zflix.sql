-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 07:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `book_id` int(2) NOT NULL,
  `user_id` int(3) NOT NULL,
  `plan_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(3) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagory`
--

CREATE TABLE `tbl_catagory` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_catagory`
--

INSERT INTO `tbl_catagory` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'unnati', b'1'),
(2, '5464gvgvyvygvgvgvg', b'1'),
(3, '5464', b'1'),
(4, '5464', b'1'),
(5, '5464', b'1'),
(6, '5464', b'1'),
(7, '5464', b'1'),
(8, '5464', b'1'),
(9, 'unnati', b'1'),
(10, 'happy', b'1'),
(11, 'happy', b'1'),
(12, 'happy', b'1'),
(13, 'comedies shows', b'1'),
(14, 'Movies', b'0'),
(15, 'kdrama', b'0'),
(16, 'TV-Shows', b'1'),
(17, 'Anime', b'1'),
(18, 'K-Drama', b'1'),
(19, 'Web-Series', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `subject`, `message`, `status`) VALUES
(1, 'Gujrati', 'cgcgfv@gmail.com', 'refgefgffg', ' dcjcvuhlihi', b'1'),
(2, 'ujnihj', 'hdfiei', 'befiue', ' hhuhihiji', b'1'),
(3, 'gjg', 'fyfiygfiu@gmail.com', 'befiue', ' ytfutfyfy', b'1'),
(4, 'gjg', 'hbchu@jhjfhv', 'befiue', ' ytfutfyfy', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(4) NOT NULL,
  `user_id` int(3) NOT NULL,
  `date` date NOT NULL,
  `feedback_msg` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `lan_id` int(2) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`lan_id`, `name`, `status`) VALUES
(1, 'Gujrati', b'0'),
(2, 'English', b'1'),
(3, 'Hindi', b'1'),
(4, 'English', b'0'),
(5, 'Telugu', b'0'),
(6, 'Punjabi', b'0'),
(7, 'Hindi', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(4) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(8) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email_id`, `password`, `type`, `status`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', b'0'),
(2, 'unnati@6.com', '123', 'user', b'0'),
(3, '122@gmail.com', '123', 'user', b'0'),
(4, 'unnati04@gmail.com', '123456', 'user', b'0'),
(5, 'happyrajput@gmail.cim', 'happy', 'user', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lan_id` int(5) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`id`, `name`, `lan_id`, `image`, `status`) VALUES
(13, '3 Idiots', 3, '', b'1'),
(14, 'ytfyf', 4, 'zlogo.jpg', b'1'),
(15, 'srygf', 2, '', b'1'),
(16, 'Chhello Divas', 1, '6ello divas.jpeg', b'0'),
(17, 'GujjuBhai The Great', 1, 'gujjubhai.jpeg', b'0'),
(18, 'Jhamkudi', 1, 'jhamkudi.jpeg', b'0'),
(19, 'Shu Thayu?', 1, 'shu thayu.jpeg', b'0'),
(20, 'Karsandas', 1, 'karsandas.jpeg', b'0'),
(21, 'Bhool Bhulaiyaa 3', 7, 'bhul bholaiya 3.jpeg', b'0'),
(22, 'Do Patti', 7, 'do patti.jpeg', b'0'),
(23, 'Madgaon Express', 7, 'madgaon express.jpeg', b'0'),
(24, 'The Sabarmati Report', 7, 'sabrmati express.jpeg', b'0'),
(25, 'Singham Again', 7, 'singham again.jpeg', b'0'),
(26, 'Avatar The Way OF Water', 4, 'avtar.jpeg', b'0'),
(27, 'Fall', 4, 'fall.jpeg', b'0'),
(28, 'Marvel Studio', 4, 'marvel.jpeg', b'0'),
(29, 'Stranger', 4, 'stranger.jpeg', b'0'),
(30, 'Venom', 4, 'venom.jpeg', b'0'),
(31, 'Shayar', 6, 'shayar.jpeg', b'0'),
(32, 'Yaarana', 6, 'yaarana.jpeg', b'0'),
(33, 'Jatt & Juliet', 6, 'jatt juliyet.jpeg', b'0'),
(34, 'Gudiya Patola', 6, 'gudiya patola.jpeg', b'0'),
(35, 'Sufna', 6, 'sufna.jpeg', b'0'),
(36, 'Ashvathama', 5, 'asvthama.jpeg', b'0'),
(37, 'Bro', 5, 'bro.jpeg', b'0'),
(38, 'Simba', 5, 'simba.jpeg', b'0'),
(39, 'The Family Star', 5, 'the family star.jpeg', b'0'),
(40, 'Egal', 5, 'egal.jpeg', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `amount` int(5) NOT NULL,
  `card_id` int(12) NOT NULL,
  `date` date NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plan`
--

CREATE TABLE `tbl_plan` (
  `plan_id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `duration` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_plan`
--

INSERT INTO `tbl_plan` (`plan_id`, `name`, `price`, `start_date`, `end_date`, `duration`, `image`, `status`) VALUES
(1, 'English', 0, '0000-00-00', '0000-00-00', '', '', b'1'),
(2, 'English', 0, '2024-11-22', '0000-00-00', '', '', b'1'),
(3, 'Marathi', 0, '2024-11-21', '0000-00-00', '', '', b'1'),
(4, 'Gujrati', 0, '2024-11-23', '2024-11-24', '', '', b'1'),
(5, 'Hindi1', 0, '2024-11-08', '2024-11-28', '3month', '1.png', b'1'),
(6, 'Marathi', 0, '2024-11-23', '2024-12-17', '34', 'g5.jpg', b'1'),
(7, 'mobile', 0, '2024-12-10', '2025-01-09', '30', 'mobile plan.webp', b'1'),
(8, 'Basic', 0, '2024-12-10', '2025-01-09', '30', 'basic.png', b'1'),
(9, 'Standard', 0, '2024-12-10', '2025-01-09', '30', 'standard.webp', b'1'),
(10, 'premium', 0, '2024-12-10', '2025-01-09', '30', 'primiam.jpg', b'1'),
(11, 'mobile', 149, '2024-12-11', '2025-01-10', '30', 'mobile plan.webp', b'0'),
(12, 'basic', 199, '2024-12-11', '2025-01-10', '30', 'basic.png', b'0'),
(13, 'standard', 499, '2024-12-11', '2025-01-10', '30', 'standard.webp', b'0'),
(14, 'premium', 649, '2024-12-11', '2025-01-10', '30', 'primiam.jpg', b'0'),
(15, 'moblie -plan-yearly', 1788, '2024-12-11', '2025-12-10', '364', 'year plan.jpg', b'0'),
(16, 'basic-plan-yearly', 2388, '2024-12-11', '2025-12-10', '364', 'year plan.jpg', b'0'),
(17, 'standard-plan-year', 5988, '2024-12-10', '2025-12-09', '364', 'year plan.jpg', b'0'),
(18, 'premimum-plan-year', 7788, '2024-12-11', '2025-12-10', '364', 'year plan.jpg', b'0'),
(19, 'mobile-plan-3 month', 399, '2024-12-11', '2025-03-11', '90', '3 month plan.jpg', b'0'),
(20, 'basic-plan-3 month', 699, '2024-12-11', '2025-03-11', '90', '3 month plan.jpg', b'0'),
(21, 'stanadard-plan-3 month', 999, '2024-12-11', '2025-03-11', '90', '3 month plan.jpg', b'0'),
(22, 'premimum-plan-3 month', 1499, '2024-12-11', '2025-03-11', '90', '3 month plan.jpg', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rate_id` int(4) NOT NULL,
  `user_id` int(3) NOT NULL,
  `rate_score` int(2) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tvshows`
--

CREATE TABLE `tbl_tvshows` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lan_id` int(5) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tvshows`
--

INSERT INTO `tbl_tvshows` (`id`, `name`, `lan_id`, `image`, `status`) VALUES
(1, 'kanan', 1, '', b'1'),
(2, 'kask', 4, '', b'1'),
(3, 'Marathi', 3, 'download.png', b'1'),
(4, 'Hindi', 4, 'download.png', b'1'),
(5, 'gujarti', 1, 'g3.jpg', b'1'),
(6, 'telugu', 4, 'g7.jpg', b'1'),
(7, 'Anupama', 7, 'IMG-20241121-WA0009.jpg', b'0'),
(8, 'MahaBharat', 7, 'IMG-20241121-WA0007.jpg', b'0'),
(9, 'Shubharambh', 1, 'IMG-20241121-WA0002.jpg', b'0'),
(10, 'Tarak Mehta Ka Ulta Chashma', 7, 'IMG-20241121-WA0010.jpg', b'0'),
(11, 'Manyata', 1, 'IMG-20241121-WA0001.jpg', b'0'),
(12, '1760 SashuMa', 1, 'download (1).jpg', b'0'),
(13, 'Sundri', 6, 'images (2).jpg', b'0'),
(14, 'Kudali Bhagya', 7, 'images.jpg', b'0'),
(15, 'Badal Pe pau Hey', 7, 'images (1).jpg', b'0'),
(16, 'Our Big Punjabi Family', 6, 'images (5).jpg', b'0'),
(17, 'Delhi Crime', 7, 'IMG-20241121-WA0006.jpg', b'0'),
(18, 'Kohra', 6, 'IMG-20241121-WA0017.jpg', b'0'),
(19, 'Crown', 4, 'IMG-20241121-WA0013.jpg', b'0'),
(20, 'Rashi Rikshavari', 1, 'IMG-20241121-WA0005.jpg', b'0'),
(21, 'Moti BAA Ni Vau', 1, 'IMG-20241121-WA0004.jpg', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_proof` varchar(50) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `create_date` date NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `gender`, `email_id`, `password`, `id_proof`, `contact_no`, `address`, `create_date`, `status`) VALUES
(21, 'unnati', 'female', 'unnati04@gmail.com', '123456', 'Money-Heist-Theme-Template.jpg', 9999888888, 'vadnagar', '0000-00-00', b'0'),
(22, 'happy', 'female', 'happyrajput@gmail.cim', 'happy', 'Designer.png', 99999999999, 'visnagar', '0000-00-00', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`lan_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`id`,`lan_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `tbl_tvshows`
--
ALTER TABLE `tbl_tvshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `book_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `lan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  MODIFY `plan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rate_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tvshows`
--
ALTER TABLE `tbl_tvshows`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
