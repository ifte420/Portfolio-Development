-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 05:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php registration data`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) NOT NULL,
  `brand_image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_image_name`) VALUES
(9, '1607983724-878.png'),
(10, '1607983944-159.png'),
(11, '1607984201-428.png'),
(12, '1607984212-116.png'),
(13, '1607984235-763.png'),
(14, '1607984241-352.png'),
(15, '1608021873-397.png'),
(16, '1608021881-461.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `gust_name` varchar(100) NOT NULL,
  `gust_email` varchar(100) NOT NULL,
  `gust_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `gust_name`, `gust_email`, `gust_message`) VALUES
(3, 'Ifte', 'ifte@gmail.com', 'erat vel auctor ultrices. Ut euismod nec orci rhoncus facilisis. Proin lobortis condimentum malesuada. Donec dictum sodales nisl quis luctus. Class aptent taciti sociosqu ad litora torquent per ');

-- --------------------------------------------------------

--
-- Table structure for table `fact`
--

CREATE TABLE `fact` (
  `id` int(11) NOT NULL,
  `fact_icon` varchar(100) NOT NULL,
  `fact_title` varchar(50) NOT NULL,
  `fact_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fact`
--

INSERT INTO `fact` (`id`, `fact_icon`, `fact_title`, `fact_description`) VALUES
(2, 'fab fa-apple', '120', 'Hello World'),
(3, 'fab fa-angellist', '550', 'meaw'),
(4, 'fas fa-brain', '20', 'Brain');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `service_title` varchar(50) NOT NULL,
  `service_description` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon`, `service_title`, `service_description`, `status`) VALUES
(9, 'fab fa-laravel', 'Laravel', 'finibus iaculis libero ut dapibus. Aliquam erat volutpat. Phasellus vitae quam mi. Mauris rutrum fringilla porta. Mauris aliquam', 'active'),
(10, 'fab fa-google', 'Google', 'ibus iaculis libero ut dapibus. Aliquam erat volutpat. Phasellus vitae quam mi. ', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) NOT NULL,
  `skill_name` varchar(50) NOT NULL,
  `skill_full` varchar(100) NOT NULL,
  `percentage` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `skill_full`, `percentage`) VALUES
(4, 'HTML', 'hypertext markup Language', 90),
(5, 'css', 'cascading style sheet', 90);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `testimonial_image` varchar(100) NOT NULL,
  `testimonial_say` text NOT NULL,
  `testimonial_name` varchar(50) NOT NULL,
  `testimonial_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `testimonial_image`, `testimonial_say`, `testimonial_name`, `testimonial_title`) VALUES
(5, '1608153036-317.png', 'Lorem ipsum dolor sit amet, . Aliquam erat volutpat. Etiam commodo vulputate leo vel egestas. Etiam egestas nisi at auctor iaculis.', 'Tanvir ', 'web developer'),
(6, '1608153169-337.jpg', 'Lorem ipsum dolor sit amet, . Aliquam erat volutpat. Etiam commodo vulputate leo vel egestas. Etiam egestas nisi at', 'Shihab', 'Wordpress Devloper');

-- --------------------------------------------------------

--
-- Table structure for table `text_setting`
--

CREATE TABLE `text_setting` (
  `id` int(10) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text_setting`
--

INSERT INTO `text_setting` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'own_name', 'Ifte Hossain'),
(4, 'own_bio', 'I am Ifte a professional web developer'),
(5, 'facebook_link', 'https://www.facebook.com/iftehossain878/'),
(6, 'twitter_link', ''),
(7, 'instagram_link', 'https://www.instagram.com/iftehossain878/'),
(8, 'pinterest_link', ''),
(9, 'about_description', 'eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit. Numquam!'),
(10, 'contact_description', 'dfadsfsfasfd'),
(11, 'country_name', 'Dhaka'),
(12, 'address', '1214'),
(13, 'phone', '123245678'),
(14, 'email', 'ifte430@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `emai_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile_image` varchar(150) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `emai_address`, `password`, `gender`, `profile_image`) VALUES
(51, 'Md. nurul', 'nurul@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'male', 'default.png'),
(53, 'Reaid Hossain', 'reaid@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '53.png'),
(54, 'nusrat', 'nusrat@gmail.com', '202cb962ac59075b964b07152d234b70', 'female', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(10) NOT NULL,
  `post_by` varchar(100) NOT NULL,
  `work_title` varchar(100) NOT NULL,
  `work_category` varchar(50) NOT NULL,
  `work_details` text NOT NULL,
  `work_thumbnail_photo` varchar(100) NOT NULL,
  `work_feature_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `post_by`, `work_title`, `work_category`, `work_details`, `work_thumbnail_photo`, `work_feature_photo`) VALUES
(3, 'nurul@gmail.com', 'Hello ', 'design', ' lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum ', '1609017635-3117.jpg', '1609017635-3117_.jpg'),
(4, 'nusrat@gmail.com', 'Meaw', 'Devlopment', ' lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum ', '1609020012-7469.jpg', '1609020012-7469_.jpg'),
(5, 'reaid@gmail.com', 'yo yo', 'Devlopment', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum', '1609148303-8405.jpg', '1609148303-8405_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fact`
--
ALTER TABLE `fact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_setting`
--
ALTER TABLE `text_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fact`
--
ALTER TABLE `fact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `text_setting`
--
ALTER TABLE `text_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
