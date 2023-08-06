-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2023 at 01:04 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shashikant`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestskills`
--

DROP TABLE IF EXISTS `bestskills`;
CREATE TABLE IF NOT EXISTS `bestskills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `link3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bestskills`
--

INSERT INTO `bestskills` (`id`, `link1`, `link2`, `link3`) VALUES
(1, 'Https://sulabh.info.np/en', 'Https://sulabh.info.np/np', 'Https://sulabh.info.np');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `topic` text NOT NULL,
  `title` text NOT NULL,
  `duration` text NOT NULL,
  `content` longtext NOT NULL,
  `date` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `topic`, `title`, `duration`, `content`, `date`, `img`) VALUES
(1, 'testing', 'Blog-1', '6 min read', '<h1>This is <span style=\"text-decoration: underline;\"><strong>TESTING</strong></span></h1>\r\n<p><video controls=\"controls\" width=\"300\" height=\"150\">\r\n<source src=\"data:image/png;base64,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\" /></video></p>', 'Feb 10, 2022', 'blog-01.jpg'),
(2, 'lkhdfk', 'kldk', 'kjjdfhnk', '<div style=\"max-width: 650px;\" data-ephox-embed-iri=\"https://sulabh.info.np/portfolio/Images/projects/1641466475portfolio.png\"><img src=\"https://sulabh.info.np/portfolio/Images/projects/1641466475portfolio.png\" /></div>\r\n<p>ioshdoahfkjsfh</p>', '', 'blog-02.jpg'),
(3, 'lkhdfk', 'kldk', 'kjjdfhnk', '<div style=\"max-width: 650px;\" data-ephox-embed-iri=\"https://sulabh.info.np/portfolio/Images/projects/1641466475portfolio.png\"><img src=\"https://sulabh.info.np/portfolio/Images/projects/1641466475portfolio.png\" /></div>\r\n<p>ioshdoahfkjsfh</p>', '', 'blog-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bid` int NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `website` text NOT NULL,
  `comment` text NOT NULL,
  `time` text NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `bid`, `name`, `email`, `website`, `comment`, `time`, `ip`) VALUES
(1, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(2, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(3, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(4, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(5, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(6, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(7, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(8, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(9, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(10, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(11, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(12, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(13, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(14, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(15, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(16, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(17, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(18, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(19, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(20, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(21, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(22, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(23, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(24, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(25, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(26, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(27, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(28, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(29, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(30, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(31, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(32, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(33, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(34, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(35, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(36, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(37, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(38, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1'),
(39, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:21:04', '::1'),
(40, 2, 'jkdsbfks', 'kdfnk@KJkfe.com', 'https://Sulabh.info.np', 'jhnfdiksjb fksb k', 'Feb 08, 2022 18:26:09', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fb` text NOT NULL,
  `ig` text NOT NULL,
  `link` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fb`, `ig`, `link`, `phone`, `email`) VALUES
(1, 'https://www.facebook.com/passion.for.goal/', 'suhzf', 'jhdb', 'kjhbkdx', 'jkbxvkx');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `clgName` text NOT NULL,
  `des` text NOT NULL,
  `evaluation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `clgName`, `des`, `evaluation`) VALUES
(1, 'Test1', 'KIIT', 'The education should be very interactual. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris hendrerit ante.', '⭐⭐⭐⭐⭐'),
(3, 'Test1', 'KIIT', 'online', '⭐⭐⭐⭐⭐'),
(4, 'Test1', 'KIIT', 'online', '⭐⭐⭐⭐⭐');

-- --------------------------------------------------------

--
-- Table structure for table `expirence`
--

DROP TABLE IF EXISTS `expirence`;
CREATE TABLE IF NOT EXISTS `expirence` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cmpName` text NOT NULL,
  `title` text NOT NULL,
  `des` text NOT NULL,
  `evaluation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `expirence`
--

INSERT INTO `expirence` (`id`, `cmpName`, `title`, `des`, `evaluation`) VALUES
(1, 'Mango', 'Apple', 'Banana', '⭐⭐⭐'),
(3, 'hjdkfe,wsojlkzjdolesjd', 'job1', 'kjdl', '⭐⭐⭐'),
(4, 'knew sk ', 'lkksdmnnfk', 'ksmnn dflkesn ', '⭐⭐⭐⭐'),
(5, 'jsndfkne s,', 'lmdnckl', 'kseflmksfl', '⭐⭐⭐');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `name`, `description`) VALUES
(1, 'Shashikant | testing', 'hjxjchbdj', 'I will help you build your brand and grow your business. I create clarifying strategy, beautiful logo and identity design and engaging websites.');

-- --------------------------------------------------------

--
-- Table structure for table `keypoints`
--

DROP TABLE IF EXISTS `keypoints`;
CREATE TABLE IF NOT EXISTS `keypoints` (
  `id` int NOT NULL AUTO_INCREMENT,
  `point` text,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keypoints`
--

INSERT INTO `keypoints` (`id`, `point`, `type`) VALUES
(5, 'hddzvf', 'static'),
(4, 'Single page', 'static');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `pid` int NOT NULL,
  `ip` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`pid`, `ip`) VALUES
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, 'jh'),
(1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `ip` text NOT NULL,
  `time` text NOT NULL,
  `seen` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `phone`, `email`, `subject`, `message`, `ip`, `time`, `seen`) VALUES
(1, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(2, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(3, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(4, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0),
(5, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(6, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(7, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(8, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0),
(9, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(10, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(11, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(12, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0),
(13, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(14, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(15, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(16, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0),
(17, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(18, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(19, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(20, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0),
(21, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(22, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(23, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(24, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0),
(25, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(26, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(27, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(28, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0),
(29, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(30, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(31, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(32, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0),
(33, 'jhkhjk', '78787878', 'jvhj@hgjhg', 'hgkjhkh', 'jbjhjhgjgjh', '::1', '2022-02-06 15:27:46', 0),
(34, '', '', '', '', '', '::1', '2022-02-06 15:29:59', 0),
(35, '', '', '', '', '', '::1', '2022-02-10 09:53:55', 0),
(36, 'idhfnisk', 'kjbcdujs', 'dfhnidski@ydgfu', 'kjhsdfiuk', 'jkjskdfhisjdfbijskfbciskjaihhiusgib iuui iuehuiueh iesuih wehui hweio ihwk efhiuheik hefihwikjh ihokh o hfei oihwh io oContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '::1', '2022-02-10 09:56:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `tagline` text NOT NULL,
  `link` text NOT NULL,
  `likes` int NOT NULL DEFAULT '123',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `title`, `tagline`, `link`, `likes`) VALUES
(1, '1642950993Election Project.png', 'Web Development', 'Election Manifesto Comparison Website', 'https://sulabh.info.np', 123);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

DROP TABLE IF EXISTS `pricing`;
CREATE TABLE IF NOT EXISTS `pricing` (
  `type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` text NOT NULL,
  `subTitle` text NOT NULL,
  `des` text NOT NULL,
  `price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`type`, `title`, `subTitle`, `des`, `price`) VALUES
('static', 'Make Your Single Page', 'Elementor', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '$30.00'),
('standard', 'Make Your Single Page', 'Elementor', 'Elementor', 'Elementor'),
('premimum', 'Elementor', 'Elementor', 'Elementor', 'Elementor');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `value` text NOT NULL,
  `type` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `value`, `type`) VALUES
(3, 'photoshop', '100', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company` text COLLATE utf8mb4_0900_bin NOT NULL,
  `name` text COLLATE utf8mb4_0900_bin NOT NULL,
  `post` text COLLATE utf8mb4_0900_bin NOT NULL,
  `title` text COLLATE utf8mb4_0900_bin NOT NULL,
  `duration` text COLLATE utf8mb4_0900_bin NOT NULL,
  `des` text COLLATE utf8mb4_0900_bin NOT NULL,
  `evaluation` text COLLATE utf8mb4_0900_bin NOT NULL,
  `img` text COLLATE utf8mb4_0900_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_bin;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `company`, `name`, `post`, `title`, `duration`, `des`, `evaluation`, `img`) VALUES
(1, 'BST', 'BG', 'CEO', 'UJYALO DRISTI', '3', 'hvxhcvjsz', '⭐⭐⭐⭐', '1643887206bishnu dai.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uname` varchar(200) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `password`) VALUES
('apple', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `whatido`
--

DROP TABLE IF EXISTS `whatido`;
CREATE TABLE IF NOT EXISTS `whatido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `tagline` text NOT NULL,
  `dataFeather` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `whatido`
--

INSERT INTO `whatido` (`id`, `title`, `tagline`, `dataFeather`) VALUES
(1, 'Business Stratagy', 'I throw myself down among the tall grass by the stream as I lie close to the earth.', 'menu'),
(2, 'Business Stratagy', 'I throw myself down among the tall grass by the stream as I lie close to the earth.', 'menu'),
(3, 'Business Stratagy', 'I throw myself down among the tall grass by the stream as I lie close to the earth.', 'menu'),
(4, 'Business Stratagy', 'I throw myself down among the tall grass by the stream as I lie close to the earth.', 'menu'),
(5, 'Business Stratagy', 'I throw myself down among the tall grass by the stream as I lie close to the earth.', 'menu'),
(6, 'Business Stratagy', 'I throw myself down among the tall grass by the stream as I lie close to the earth.', 'book');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
