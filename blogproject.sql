-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2023 at 04:16 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin_name` text NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_pass` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Emon Ahmed', 'mollaemon431@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

DROP TABLE IF EXISTS `blog_post`;
CREATE TABLE IF NOT EXISTS `blog_post` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `post_title` varchar(155) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `post_category` int NOT NULL,
  `post_author` varchar(60) NOT NULL,
  `post_date` date NOT NULL,
  `post_comment_count` int NOT NULL,
  `post_summery` varchar(200) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_status` tinyint NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `post_title`, `post_content`, `post_thumbnail`, `post_category`, `post_author`, `post_date`, `post_comment_count`, `post_summery`, `post_tag`, `post_status`) VALUES
(1, 'Elementor pro', 'Elementor is the best website builder in the WordPress', 'oil-about2.jpg', 1, 'Admin', '2023-09-07', 3, 'add_post', 'add_post', 1),
(3, 'Elementor PRO WordPress Page Builder + Pro Templates (New Version) ', 'You’ll get untouched, unaltered files. -Unlimited Domain Use with Virus-Free, Clean Files -Free lifetime updates for the new version!', 'Gray Orange Dark Green Bags & Backpack Landing Page Website (1).jpg', 5, 'Admin', '2023-09-08', 3, 'You’ll get untouched, unaltered files. -Unlimited Domain Use with Virus-Free, Clean Files -Free lifetime updates for the new version!You’ll get untouched, unaltered files. -Unlimited Domain Use with V', 'Elementor, Elementor pro, cms', 1),
(4, 'এই লিঙ্কের মাধ্যমে আপনাদের ক্লাস হবে।', 'স সময়ঃ সোমবার ও বুধবার  রাত  10.15  মিনিট।\r\nএই লিঙ্কের মাধ্যমে আপনাদের প্রতি সোমবার ও বুধবার  রাত 10.15  মিনিটে ক্লাস হবে। \r\nসবাই এই লিংক, আইডি এবং পাসওয়ার্ডটা সেইভ করে রাখেন তাহলে পরবর্তীতে আপনাদের জন্য ভালো হবে।\r\nনোটঃ কেউ  10.15   মিনিটের আগে লিংকে ক্লিক করলে ক্লাসে জয়েন হতে পারবেন না,পাসওয়ার্ড রং দেখাবে\r\nঅবশ্যই ঠিক  10.15  মিনিটে লিংকে ক্লিক করলে ক্লাসে জয়েন হতে পারবেন।\r\nJoin Zoom Meeting\r\nhttps://us06web.zoom.us/j/88656442995...\r\nMeeting ID: 886 5644 2995\r\nPasscode: DIT', '377572063_263341269948765_8202134470244583210_n.jpg', 1, 'Admin', '2023-09-11', 3, 'স সময়ঃ সোমবার ও বুধবার  রাত  10.15  মিনিট। এই লিঙ্কের মাধ্যমে আপনাদের প্রতি সোমবার ও বুধবার  রাত 10.15  মিনিটে ক্লাস হবে।  সবাই এই লিংক', '  10.15 ,সোমবার ও বুধবার', 1),
(5, 'এই লিঙ্কের মাধ্যমে আপনাদের ক্লাস হবে।', '', '', 1, 'Admin', '2023-09-11', 3, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ceta_id` int NOT NULL AUTO_INCREMENT,
  `ceta_name` text NOT NULL,
  `ceta_des` text NOT NULL,
  PRIMARY KEY (`ceta_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ceta_id`, `ceta_name`, `ceta_des`) VALUES
(1, 'test', 'test msg'),
(2, 'Nature', 'nature is beautiful'),
(5, 'New Post', 'this category include by new post'),
(8, 'python', 'python is the most popular programming language ');

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_with_category`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `post_with_category`;
CREATE TABLE IF NOT EXISTS `post_with_category` (
`post_id` int
,`post_title` varchar(155)
,`post_content` longtext
,`post_thumbnail` varchar(255)
,`post_author` varchar(60)
,`post_date` date
,`post_comment_count` int
,`post_summery` varchar(200)
,`post_tag` varchar(255)
,`post_status` tinyint
,`ceta_id` int
,`ceta_name` text
);

-- --------------------------------------------------------

--
-- Structure for view `post_with_category`
--
DROP TABLE IF EXISTS `post_with_category`;

DROP VIEW IF EXISTS `post_with_category`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_with_category`  AS SELECT `blog_post`.`post_id` AS `post_id`, `blog_post`.`post_title` AS `post_title`, `blog_post`.`post_content` AS `post_content`, `blog_post`.`post_thumbnail` AS `post_thumbnail`, `blog_post`.`post_author` AS `post_author`, `blog_post`.`post_date` AS `post_date`, `blog_post`.`post_comment_count` AS `post_comment_count`, `blog_post`.`post_summery` AS `post_summery`, `blog_post`.`post_tag` AS `post_tag`, `blog_post`.`post_status` AS `post_status`, `category`.`ceta_id` AS `ceta_id`, `category`.`ceta_name` AS `ceta_name` FROM (`blog_post` join `category` on((`blog_post`.`post_category` = `category`.`ceta_id`)))  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
