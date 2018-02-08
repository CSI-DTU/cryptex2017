-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2018 at 09:53 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptex17`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans` varchar(50) NOT NULL,
  `firstlast` varchar(5) NOT NULL,
  `anslen` int(11) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans`, `firstlast`, `anslen`, `ansid`) VALUES
('b41d3ef8d7c88b5ed9e74a10e86020867ad12131', 'te', 17, 0),
('22e46fee522adb3e6c709c24a31b2b043248ff73', 'bh', 20, 1),
('3649fa302f3cc92b05622142b8f08fa3ccd66549', 'na', 7, 2),
('fa85c8dc1b2d1da7db0e120b8664568f37bfdea1', 'la', 7, 3),
('04a6537a8533409bcecb9e96241a4cb474229ca5', 'sa', 13, 4),
('c8927c147f9cc89928c2b8882c0dbec4d67cbb38', 'ct', 13, 5),
('273bc4409225ea37d76e40a59b48b619e7c7eee0', 'sr', 23, 6),
('f74714576cc115b6ce83730ba7a53172177d67e2', 'gh', 19, 7),
('2a6dec500b596ec1b1bb4d2df24977db25ef6baf', '97', 5, 8),
('4337b07fdfb09407fc4c1e91bbe4c779a61d9de7', 'bh', 8, 9),
('67d8415c0c912670042de6ef7d251d4497434f79', 'j.', 32, 10),
('2621c1355c00362647d7736992678ab456b45494', 'dl', 8, 11),
('ff599807ae96ca605336235ea23a1199bbc95367', 'se', 26, 12),
('c2432c1307d3535afa4a47d708c79d5372e2423b', 'bl', 10, 13),
('cdf0bb4b8e714162de6742daf7a3db4c3460f4b0', 've', 20, 14),
('ea1bb32c450acee2304ed23ce4039fa3f415502b', 'bs', 17, 15),
('47bd95c5244c761e17c75272d215dadc8c0bb485', 'tl', 15, 16),
('e4bbe5b7a4c1eb55652965aee885dd59bd2ee7f4', 'ad', 7, 17),
('2b6fa54ddc1c9386d6db75e569f11b2156d01cca', 'li', 11, 18),
('a057d760c6557610180a36f615adb1e5f88cf7b5', 'nh', 15, 19),
('ad9921ed576cbd13febae1e7fc2e33d333fc1ba9', 'ce', 18, 20),
('24859e3c91bce09112abb8d213b73b8336b936e7', 'mr', 18, 21),
('77e492d109db59d1fe3093815f1ee944242db20c', 'in', 9, 22),
('c41fe0e5f3c4e1a61baa4220c3509224e1dc8e2d', 'ts', 14, 23),
('c3c168fb3687addb692498915fe2c5bf3297b34f', 'jr', 17, 24),
('1fc78d3e402d17eac80f9fc4f48f6ed8382c5655', 'sm', 14, 25),
('66abec747aa36a7908f1b090a77e4f9e590e6513', 'jr', 15, 26);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qno` int(11) NOT NULL,
  `ques` varchar(200) DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL,
  `audio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qno`, `ques`, `image1`, `image2`, `image3`, `video`, `audio`) VALUES
(0, NULL, 'ques0_1.jpg', 'ques0_2.jpg', NULL, NULL, NULL),
(1, NULL, 'ques1_1.jpg', 'ques1_2.jpg', 'ques1_3.jpg', NULL, NULL),
(2, NULL, 'ques2_1.png', 'ques2_2.png', NULL, NULL, NULL),
(3, NULL, 'ques3_1.png', 'ques3_2.png', NULL, NULL, NULL),
(4, NULL, 'ques4_1.png', 'ques4_2.png', 'ques4_3.png', NULL, NULL),
(5, NULL, 'ques5_1.png', NULL, NULL, NULL, NULL),
(6, NULL, 'ques6_1.png', 'ques6_2.png', 'ques6_3.png', NULL, NULL),
(7, 'International master is no longer the best. But remember the first one. \r\n\r\n“ I have just come here to chill, to see the scenery, eat some food, sleep and have fun.”', 'ques7_1.png', NULL, NULL, NULL, NULL),
(8, NULL, 'ques8_1.png', NULL, NULL, NULL, NULL),
(9, NULL, 'ques9_1.png', NULL, NULL, NULL, NULL),
(10, NULL, 'ques10_1.png', 'ques10_2.png', NULL, NULL, NULL),
(11, NULL, 'ques11_1.png', 'ques11_2.png', 'ques11_3.png', NULL, NULL),
(12, NULL, 'ques12_1.png', 'ques12_2.png', NULL, NULL, NULL),
(13, NULL, 'ques13_1.png', NULL, NULL, NULL, NULL),
(14, NULL, 'ques14_1.png', NULL, NULL, NULL, NULL),
(15, NULL, 'ques15_1.png', 'ques15_2.png', NULL, NULL, NULL),
(16, NULL, 'ques16_1.png', 'ques16_2.png', 'ques16_3.png', NULL, NULL),
(17, NULL, 'ques17_1.png', NULL, NULL, NULL, NULL),
(18, NULL, 'ques18_1.png', 'ques18_2.png', NULL, NULL, NULL),
(19, NULL, 'ques19_1.png', NULL, NULL, NULL, NULL),
(20, NULL, 'ques20_1.png', NULL, NULL, NULL, NULL),
(21, NULL, 'ques21_1.png', 'ques21_2.png', NULL, NULL, NULL),
(22, NULL, 'ques22_1.png', 'ques22_2.png', NULL, NULL, NULL),
(23, NULL, 'ques23_1.png', 'ques23_2.png', 'ques23_3.png', NULL, NULL),
(24, 'Accessing books for all since 2009.\r\n\r\nWork hard. Have fun. Make history.', 'ques24_1.png', NULL, NULL, NULL, NULL),
(25, 'Security will become a myth', 'ques25_1.png', NULL, NULL, NULL, NULL),
(26, '1. Thank you for participating in the hunt. You\'ve been a big part of this.On behalf of the entire CSI Group, you have our very sincere and strong thanks.\r\n 2.  What did you do just earlier?', 'ques26_1.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(100) DEFAULT NULL,
  `fb_id` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registertime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `levelskip` int(11) NOT NULL DEFAULT '-1',
  `firstlast` int(11) NOT NULL DEFAULT '-1',
  `anslen` int(11) NOT NULL DEFAULT '-1',
  `profilepic` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `fb_id`, `email`, `registertime`, `level`, `status`, `levelskip`, `firstlast`, `anslen`, `profilepic`) VALUES
('Prince Piyush', '1506258522787699', 'princepiyush98@gmail.com', '2017-10-19 14:16:00', 1, 1, -1, -1, 1, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/16142647_1226745707405650_9154579386767582228_n.jpg?oh=a6926a94d11b72bda88d898979551799&oe=5A867D84'),
('', '', '', '2017-10-21 06:40:35', 0, 1, -1, -1, -1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`fb_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
