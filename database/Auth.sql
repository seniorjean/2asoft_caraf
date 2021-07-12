-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2017 at 06:32 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `word` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(95, NULL, '::1', NULL),
(94, NULL, '::1', NULL),
(93, NULL, '::1', NULL),
(92, NULL, '::1', NULL),
(91, NULL, '::1', NULL),
(90, NULL, '::1', NULL),
(89, NULL, '::1', NULL),
(88, NULL, '::1', NULL),
(155, 1506493472, '::1', 'LZCV6ISP'),
(143, 1506492915, '::1', '7WxjqlFC'),
(144, 1506492932, '::1', 'Mr2fRDem'),
(145, 1506492959, '::1', 'lZdK1Yzg'),
(146, 1506492988, '::1', 'm8ezTko7'),
(147, 1506492992, '::1', 'fcJsHOil'),
(148, 1506493027, '::1', '9W1qhZzr'),
(149, 1506493090, '::1', 'oCm3xKTp'),
(150, 1506493112, '::1', 'ast0VMcS'),
(151, 1506493175, '::1', 'QT7vqdVC'),
(152, 1506493194, '::1', 'OPyn5qkH'),
(153, 1506493353, '::1', 'mc2WCAs3'),
(154, 1506493370, '::1', 'IJzTfuqg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'Member', 'genrale user');

-- --------------------------------------------------------

--
-- Table structure for table `group_perm`
--

CREATE TABLE `group_perm` (
  `id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `perm_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_perm`
--

INSERT INTO `group_perm` (`id`, `group_id`, `perm_id`) VALUES
(487, 31, 10),
(488, 31, 11),
(489, 31, 12),
(542, 32, 10),
(543, 32, 11),
(544, 32, 14),
(545, 33, 13),
(546, 33, 14),
(547, 33, 15),
(548, 33, 16),
(549, 0, 10),
(550, 0, 11),
(551, 0, 13),
(568, 0, 10),
(569, 0, 11),
(575, 35, 10),
(590, 38, 10),
(591, 38, 11),
(592, 38, 12),
(593, 41, 12),
(594, 41, 13),
(595, 41, 14),
(596, 43, 10),
(597, 43, 11),
(598, 43, 12),
(599, 44, 16),
(611, 45, 17),
(622, 46, 10),
(623, 46, 11),
(624, 47, 10),
(625, 47, 11),
(626, 48, 10),
(627, 48, 11),
(628, 48, 12),
(629, 48, 14),
(630, 49, 11),
(631, 49, 12),
(635, 50, 10),
(636, 50, 13),
(660, 51, 12),
(661, 51, 13),
(662, 51, 16),
(663, 51, 17),
(702, 52, 10),
(703, 52, 11),
(704, 52, 17),
(725, 53, 10),
(726, 53, 11),
(727, 53, 14),
(728, 2, 10),
(729, 2, 11),
(730, 2, 17),
(752, 54, 10),
(753, 54, 16),
(754, 54, 17),
(762, 1, 10),
(763, 1, 11),
(764, 1, 12),
(765, 1, 13),
(766, 1, 14),
(767, 1, 15),
(768, 1, 16),
(769, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `perm_id` int(10) UNSIGNED NOT NULL,
  `perm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`perm_id`, `perm_name`) VALUES
(10, 'View Groups'),
(11, 'View Users'),
(12, 'Add Users'),
(13, 'Create Groups'),
(14, 'Permissions'),
(15, 'Site Configuration'),
(16, 'Backup & Export Users'),
(17, 'Adminstrator');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `registration_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `registration_status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `oauth_provider` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `bio` text NOT NULL,
  `user_img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `date`, `bio`, `user_img`) VALUES
(1, '', '', 'Salman Iqbal', '$2y$08$jd7OenN3a/yXG8pmnO62cu3x/unTfwJXeZlmMXQIS56M8GfxoR/ii', '', 'admin@admin.com', NULL, 'DJAu5-Gc.3YRBcgTkXrZo.0411f944283792fd95', 1507113028, NULL, 1268889823, '1512322231', 1, 'Salman', 'Iqbal', 'ADMIN', '0323-9047937', '2017-01-26', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'profile-avatar.jpg'),
(30, '', '221.120.236.254', 'Code Master', '$2y$08$19YzEE.hanRUn79UGTrLwOw1spuIxaRpDEnfEIZtH/OiolKDnbRka', NULL, 'codemaster@gmail.com', NULL, 'saR2znvXYC75Xp4H1NrFT.e0a6a6868922d9511c', 1487960168, NULL, 1487746792, '1512236955', 1, 'Code', 'Master', 'parexons', '098080', '2017-02-22', '', 'pro-ac-2.png'),
(129, '', '::1', 'shahzadkhan', '$2y$08$9Y/ppn5h12H9j426z5Z0neDTpXFuzW5PrGfUMqWNqthBtLVH9gzFy', NULL, 'shahzad@yahoo.com', NULL, NULL, NULL, NULL, 1512236817, NULL, 1, 'shahzad', 'khan', NULL, NULL, '2017-12-02', '', ''),
(130, 'facebook', '::1', 'Salman Iqbal', '$2y$08$sFJMo4bWe8Un47QpxlG/veCA2MFL1M66dy6aZMj08tJSlBJ4b0vxe', NULL, 'Salman Iqbal@facebook.com', NULL, NULL, NULL, 'qnZSK3AHIKy/Fk1YfZJiLe', 1512236835, '1512236835', 1, 'Salman', 'Iqbal', NULL, NULL, NULL, '', ''),
(131, 'twitter', '::1', 'Salman_iqbal937', '$2y$08$igJ6l7CzmvKpE1AQ2gvePOCXr8E13DEPYNpzWi/DUHo/bnKNCMa0K', NULL, 'Salman_iqbal937@twitter.com', NULL, NULL, NULL, '9NnIIb/GyX97LTTnTtOQ.O', 1512236862, '1512236862', 1, 'Salman', 'iqbal', NULL, NULL, '2017-12-02', '', ''),
(132, 'google', '::1', 'salman iqbal', '$2y$08$QBr5RQ/M8z5KG5Prt45VR.OHNRaaJZrbb5prNcC4mGIfolpHxnP92', NULL, 'si87841@gmail.com', NULL, NULL, NULL, 'KeQUiSdFvJY4PScbgOJWKO', 1512236892, '1512236892', 1, 'salman', 'iqbal', NULL, NULL, '2017-12-02', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(306, 122, 2),
(240, 83, 2),
(288, 102, 2),
(239, 1, 1),
(274, 105, 2),
(305, 121, 2),
(285, 109, 2),
(303, 119, 2),
(322, 132, 2),
(321, 131, 2),
(304, 120, 2),
(270, 101, 2),
(272, 103, 2),
(293, 112, 2),
(297, 116, 2),
(302, 118, 2),
(326, 30, 2),
(320, 130, 2),
(319, 129, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_perm`
--
ALTER TABLE `group_perm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`perm_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `group_perm`
--
ALTER TABLE `group_perm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=770;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `perm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
