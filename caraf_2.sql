-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Sam 28 Mars 2020 à 18:01
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `caraf_2`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `cat` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `summary` text NOT NULL,
  `content` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `cat`, `name`, `title`, `creation_date`, `summary`, `content`, `image`) VALUES
(1, 1, '', '', '2019-03-15 19:07:17', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>L&#39;&eacute;ducation pour tous est la cl&eacute; pour ins&eacute;rer les jeunes dans la soci&eacute;t&eacute;.</p>\r\n', '1557336175.jpg'),
(2, 2, '', 'Visite du Premier Ministre', '2019-03-15 19:10:55', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1552677090.jpg'),
(3, 2, '', 'Visite du Premier Ministre', '2019-03-15 19:11:30', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1552676677.jpg'),
(6, 2, '', 'A la une ', '2019-03-15 20:28:05', '<p><strong>Pagination is enabled by default, so if you want to have it you don&#39;t need to do anything.</strong></p>\r\n\r\n<p>Disabling features that you don&#39;t wish to use for a particular table is easily done by setting a variable in the initialisation object. The full list of available options is available in the&nbsp;<a href=\"https://mdbootstrap.com/docs/jquery/tables/datatables/#otpions-reference\">DataTables reference</a>.</p>\r\n', '<p><strong>Pagination is enabled by default, so if you want to have it you don&#39;t need to do anything.</strong></p>\r\n\r\n<p>Disabling features that you don&#39;t wish to use for a particular table is easily done by setting a variable in the initialisation object. The full list of available options is available in the&nbsp;<a href=\"https://mdbootstrap.com/docs/jquery/tables/datatables/#otpions-reference\">DataTables reference</a>.</p>\r\n', '1552681685.jpg'),
(7, 10, '', 'Contruction complexe', '2019-03-16 13:47:26', '<p>The&nbsp;<code>.btn</code>&nbsp;classes are designed to be used with the&nbsp;<code>&lt;button&gt;</code>&nbsp;element. However, you can also use these classes on&nbsp;<code>&lt;a&gt;</code>&nbsp;or&nbsp;<code>&lt;input&gt;</code>&nbsp;elements (though some browsers may apply a slightly different rendering).</p>\r\n\r\n<p>When using button classes on&nbsp;<code>&lt;a&gt;</code>&nbsp;elements that are used to trigger in-page functionality (like collapsing content), rather than linking to new pages or sections within the current page, these links should be given a&nbsp;<code>role=&quot;button&quot;</code>&nbsp;to appropriately convey their purpose to assistive technologies such as screen readers.</p>\r\n', '<p>The&nbsp;<code>.btn</code>&nbsp;classes are designed to be used with the&nbsp;&nbsp;element. However, you can also use these classes on&nbsp;&nbsp;or&nbsp;<code><input /></code>&nbsp;elements (though some browsers may apply a slightly different rendering).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>When using button classes on&nbsp;&nbsp;elements that are used to trigger in-page functionality (like collapsing content), rather than linking to new pages or sections within the current page, these links should be given a&nbsp;<code>role=&quot;button&quot;</code>&nbsp;to appropriately convey their purpose to assistive technologies such as screen readers.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1552744046.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `ID` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `calendar_events`
--

INSERT INTO `calendar_events` (`ID`, `title`, `start`, `end`, `description`) VALUES
(3, 'Test Event', '2019-02-16 04:17:20', '2019-02-17 09:16:29', ''),
(4, 'New Event', '2019-02-23 00:00:00', '2019-02-23 00:00:00', ''),
(5, 'New Event', '2019-03-23 00:00:00', '2019-03-23 00:00:00', ''),
(6, 'TEEST DATE', '2019-02-18 19:50:00', '2019-02-19 20:45:00', 'TEST'),
(7, 'kiffpay.com', '2019-02-18 17:13:02', '2019-02-18 17:13:02', 'TEST 2'),
(8, 'YEKA', '2019-02-27 04:05:00', '2019-02-28 22:25:00', 'TEST'),
(9, 'La grande nuit du rétro ', '0000-00-00 00:00:00', '2019-05-08 17:31:08', 'soirée dansante  africaine ');

-- --------------------------------------------------------

--
-- Structure de la table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `word` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `captcha`
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
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `summary` text NOT NULL,
  `content` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `cat`, `name`, `title`, `creation_date`, `summary`, `content`, `image`) VALUES
(1, 1, '', 'Education', '2019-03-15 19:07:17', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', 'masonry_01-750x499.jpg'),
(2, 2, '', 'Alimentation', '2019-03-15 19:10:55', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1552677090.jpg'),
(3, 3, '', 'Nécroloie', '2019-03-15 19:11:30', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1552676677.jpg'),
(6, 100, '', 'A la une ', '2019-03-15 20:28:05', '<p><strong>Pagination is enabled by default, so if you want to have it you don&#39;t need to do anything.</strong></p>\r\n\r\n<p>Disabling features that you don&#39;t wish to use for a particular table is easily done by setting a variable in the initialisation object. The full list of available options is available in the&nbsp;<a href=\"https://mdbootstrap.com/docs/jquery/tables/datatables/#otpions-reference\">DataTables reference</a>.</p>\r\n', '<p><strong>Pagination is enabled by default, so if you want to have it you don&#39;t need to do anything.</strong></p>\r\n\r\n<p>Disabling features that you don&#39;t wish to use for a particular table is easily done by setting a variable in the initialisation object. The full list of available options is available in the&nbsp;<a href=\"https://mdbootstrap.com/docs/jquery/tables/datatables/#otpions-reference\">DataTables reference</a>.</p>\r\n', '1552681685.jpg'),
(7, 10, '', 'Activités', '2019-03-15 19:11:30', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1552676677.jpg'),
(8, 4, '', 'Développement', '2019-03-15 19:11:30', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1552676677.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'Member', 'genrale user'),
(55, 'bureau', 'Les membre du bureau');

-- --------------------------------------------------------

--
-- Structure de la table `group_perm`
--

CREATE TABLE `group_perm` (
  `id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `perm_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `group_perm`
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
(769, 1, 17),
(770, 55, 10),
(771, 55, 11),
(772, 55, 12);

-- --------------------------------------------------------

--
-- Structure de la table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message_contact`
--

CREATE TABLE `message_contact` (
  `id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom_prenoms` varchar(200) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `pays` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message_contact`
--

INSERT INTO `message_contact` (`id`, `creation_date`, `nom_prenoms`, `tel`, `email`, `message`, `pays`) VALUES
(1, '2019-03-24 16:46:02', 'ABEU KPIDI FREDERIC', '+22549517916', 'abeufrederic@gmail.com', 'test', 'CI'),
(2, '2019-03-24 16:58:42', 'ABEU KPIDI FREDERIC', '+22549517916', 'abeufrederic@gmail.com', 'TEST', 'FR'),
(3, '2019-03-24 17:03:06', 'ABEU KPIDI FREDERIC', '+22549517916', 'abeufrederic@gmail.com', 'test', 'FR'),
(4, '2019-03-24 17:22:54', 'ABEU KPIDI FREDERIC', '+22549517916', 'abeufrederic@gmail.com', 'test', 'FR');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_num` bigint(20) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'usd',
  `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `card_num`, `card_cvc`, `card_exp_month`, `card_exp_year`, `item_name`, `item_number`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `payment_status`, `created`, `modified`) VALUES
(1, '135', 'ADON  FREDERIC', 'abeu.frederic@gmail.com', 0, 0, '', '', '', '', 5.00, 'eur', '5', 'eur', 'eur', 'txn_1E6z1KK3h1oDchDznMaodFIL', '2019-02-23 12:28:24', '0000-00-00 00:00:00'),
(2, '135', 'ADON - FREDERIC', 'abeu.frederic@gmail.com', 0, 0, '', '', '', '', 5.00, 'eur', '5', 'eur', 'eur', 'txn_1E70DoK3h1oDchDzCTysVxoL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '135', 'ADON - FREDERIC', 'abeu.frederic@gmail.com', 0, 0, '', '', '', '', 5.00, 'eur', '5', 'eur', 'eur', 'txn_1E70FaK3h1oDchDzI5LYZxp9', '2019-02-23 13:09:04', '0000-00-00 00:00:00'),
(4, '135', 'ADON - FREDERIC', 'abeu.frederic@gmail.com', 0, 0, '', '', '', '', 5.00, 'usd', '5', 'usd', 'usd', 'txn_1E70L0K3h1oDchDzBip4kRYq', '2019-02-23 13:14:40', '0000-00-00 00:00:00'),
(5, '141', 'KRA - EMMANUEL', 'kraemmanuel@yahoo.fr', 0, 0, '', '', '', '', 5.00, 'usd', '5', 'usd', 'usd', 'txn_1E789aK3h1oDchDzOqUa9GFR', '2019-02-23 21:35:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `perm_id` int(10) UNSIGNED NOT NULL,
  `perm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `permissions`
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
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `cat` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `summary` text NOT NULL,
  `content` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `cat`, `name`, `title`, `lieu`, `creation_date`, `summary`, `content`, `image`) VALUES
(1, 1, '', 'Projet de Maïs', 'Adzope Nyan', '2019-03-15 19:07:17', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1557338518.jpg'),
(2, 2, '', 'Visite du Premier Ministre', '', '2019-03-15 19:10:55', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1552677090.jpg'),
(3, 2, '', 'Visite du Premier Ministre', '', '2019-03-15 19:11:30', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '1552676677.jpg'),
(6, 2, '', 'A la une ', '', '2019-03-15 20:28:05', '<p><strong>Pagination is enabled by default, so if you want to have it you don&#39;t need to do anything.</strong></p>\r\n\r\n<p>Disabling features that you don&#39;t wish to use for a particular table is easily done by setting a variable in the initialisation object. The full list of available options is available in the&nbsp;<a href=\"https://mdbootstrap.com/docs/jquery/tables/datatables/#otpions-reference\">DataTables reference</a>.</p>\r\n', '<p><strong>Pagination is enabled by default, so if you want to have it you don&#39;t need to do anything.</strong></p>\r\n\r\n<p>Disabling features that you don&#39;t wish to use for a particular table is easily done by setting a variable in the initialisation object. The full list of available options is available in the&nbsp;<a href=\"https://mdbootstrap.com/docs/jquery/tables/datatables/#otpions-reference\">DataTables reference</a>.</p>\r\n', '1552681685.jpg'),
(7, 2, '', 'Popular Posts', 'ASSIKOI', '2019-03-16 08:21:26', '<p>Lorem ipsum dolor sit amet, eum at error nonumy, mel agam dictas praesent no. Id vide ignota it concl udatu rque mea. Veritus fierent ex quo, per cu elit prima. Ius impedit nominati et, suas heu quidam mei ea. Sit erant at populo suavitate an, eu est pericula persecuti, sea...</p>\r\n', '<p>Lorem ipsum dolor sit amet, eum at error nonumy, mel agam dictas praesent no. Id vide ignota it concl udatu rque mea. Veritus fierent ex quo, per cu elit prima. Ius impedit nominati et, suas heu quidam mei ea. Sit erant at populo suavitate an, eu est pericula persecuti, sea...</p>\r\n', '1552724486.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `registration_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`id`, `registration_status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_page`
--

CREATE TABLE `t_page` (
  `id` int(11) NOT NULL,
  `cat` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `title_1` text NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `summary` text NOT NULL,
  `content` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_page`
--

INSERT INTO `t_page` (`id`, `cat`, `name`, `page`, `title`, `title_1`, `creation_date`, `summary`, `content`, `image`) VALUES
(7, 7, 'about', 'about', ' Présentation de la CARAF', 'CONFEDERATION DES ASSOCIATIONS DES REGIONS AKYE EN FRANCE', '2019-03-16 05:15:41', '<p>La CARAF est une association &agrave; but non lucratif cr&eacute;&eacute;e en 1994 en France dont l&rsquo;objectif est de contribuer &agrave; la solidarit&eacute; des membres de la diaspora aky&eacute; en France.</p>\r\n', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Le constat historique donnant lieu &agrave; la cr&eacute;ation de la CARAF fin 1994 tient tout simplement sur un fait de soci&eacute;t&eacute; pour le moins douloureux.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">En effet, &agrave; la disparition d&rsquo;une s&oelig;ur en pays Aky&eacute;, une veill&eacute;e spontan&eacute;e de solidarit&eacute; a &eacute;t&eacute; organis&eacute;e comme cela est de coutume en pays Aky&eacute;.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Cette veill&eacute;e a enregistr&eacute; la participation des populations de toutes les r&eacute;gions Aky&eacute;s de la diaspora.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Face &agrave; l&rsquo;ampleur de cette retrouvaille, une de nos s&oelig;urs d&rsquo;Adzop&eacute; a propos&eacute; &agrave; certains fr&egrave;res pr&eacute;sents ce jour-l&agrave;, de saisir absolument de cette occasion pour se pencher &eacute;ventuellement sur la cr&eacute;ation d&rsquo;une organisation commune Aky&eacute; regroupant toutes les r&eacute;gions Aky&eacute;s.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Il convient de rappeler qu&rsquo;&agrave; cette &eacute;poque, l&rsquo;association Union des Ressortissants de la commune d&rsquo;Adzop&eacute; &laquo;&nbsp;URCA&nbsp;&raquo; dirig&eacute;e alors par Monsieur MONNET Gaudens, se situait au palmar&egrave;s des associations Aky&eacute;s en France.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">C&rsquo;est alors qu&rsquo;un comit&eacute; de r&eacute;flexion pour l&rsquo;&eacute;laboration d&rsquo;un projet de statuts de la future CARAF a &eacute;t&eacute; cr&eacute;&eacute;.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">&Agrave; la suite du brillant travail du comit&eacute; de r&eacute;flexion qui a recueilli l&rsquo;assentiment de l&rsquo;ensemble des Aky&eacute;s de France au cours d&rsquo;une assembl&eacute;e g&eacute;n&eacute;rale extraordinaire, fut mise en place de fa&ccedil;on d&eacute;finitive, rationnelle et harmonieuse la Conf&eacute;d&eacute;ration des Associations des R&eacute;gions Aky&eacute;s en France &laquo;&nbsp;CARAF&nbsp;&raquo;.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Ainsi, notre organisation associative est n&eacute;e avec pour objectif, la mise en place de levier &eacute;conomique et social au profil des Aky&eacute;s en France, en Europe et pour&nbsp; nos d&eacute;partements et villages.</span></span></span></span></p>\r\n', '1552713341.jpg'),
(8, 8, 'lepays', 'lepays', 'LE PAYS AKYE', 'Decouvrez le pays akye', '2019-03-16 05:15:41', '<p>La CARAF est une association &agrave; but non lucratif cr&eacute;&eacute;e en 1994 en France dont l&rsquo;objectif est de contribuer &agrave; la solidarit&eacute; des membres de la diaspora aky&eacute; en France.</p>\r\n', '<p>La CARAF est une association &agrave; but non lucratif cr&eacute;&eacute;e en 1994 en France dont l&rsquo;objectif est de contribuer &agrave; la solidarit&eacute; des membres de la diaspora aky&eacute; en France.</p>\r\n', '1552713341.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `numadhe` varchar(20) NOT NULL,
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
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `numadhe`, `oauth_provider`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `date`, `bio`, `user_img`) VALUES
(1, '201922378916', '', '', 'admin', '$2y$08$jd7OenN3a/yXG8pmnO62cu3x/unTfwJXeZlmMXQIS56M8GfxoR/ii', '', 'admin@admin.com', NULL, 'DJAu5-Gc.3YRBcgTkXrZo.0411f944283792fd95', 1507113028, 'uNC9wv561Apbm5/1tBipWO', 1268889823, '1585411602', 1, 'ABEU', 'FREDERIC', 'ADMIN', '0323-9047937', '2017-01-26', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'profile-avatar.jpg'),
(30, '201922350343', '', '221.120.236.254', 'Code Master', '$2y$08$19YzEE.hanRUn79UGTrLwOw1spuIxaRpDEnfEIZtH/OiolKDnbRka', NULL, 'codemaster@gmail.com', NULL, 'saR2znvXYC75Xp4H1NrFT.e0a6a6868922d9511c', 1487960168, NULL, 1487746792, '1512236955', 1, 'Code', 'Master', 'parexons', '098080', '2017-02-22', '', 'pro-ac-2.png'),
(129, '201922350379', '', '::1', 'shahzadkhan', '$2y$08$9Y/ppn5h12H9j426z5Z0neDTpXFuzW5PrGfUMqWNqthBtLVH9gzFy', NULL, 'shahzad@yahoo.com', NULL, NULL, NULL, NULL, 1512236817, NULL, 1, 'shahzad', 'khan', NULL, NULL, '2017-12-02', '', ''),
(130, '201922350789', 'facebook', '::1', 'Salman Iqbal', '$2y$08$sFJMo4bWe8Un47QpxlG/veCA2MFL1M66dy6aZMj08tJSlBJ4b0vxe', NULL, 'Salman Iqbal@facebook.com', NULL, NULL, NULL, 'qnZSK3AHIKy/Fk1YfZJiLe', 1512236835, '1512236835', 1, 'Salman', 'Iqbal', NULL, NULL, NULL, '', ''),
(131, '201922350341', 'twitter', '::1', 'Salman_iqbal937', '$2y$08$igJ6l7CzmvKpE1AQ2gvePOCXr8E13DEPYNpzWi/DUHo/bnKNCMa0K', NULL, 'Salman_iqbal937@twitter.com', NULL, NULL, NULL, '9NnIIb/GyX97LTTnTtOQ.O', 1512236862, '1512236862', 1, 'Salman', 'iqbal', NULL, NULL, '2017-12-02', '', ''),
(132, '201922310384', 'google', '::1', 'salman iqbal', '$2y$08$QBr5RQ/M8z5KG5Prt45VR.OHNRaaJZrbb5prNcC4mGIfolpHxnP92', NULL, 'si87841@gmail.com', NULL, NULL, NULL, 'KeQUiSdFvJY4PScbgOJWKO', 1512236892, '1512236892', 1, 'salman', 'iqbal', NULL, NULL, '2017-12-02', '', ''),
(135, '201922374184', '', '::1', 'abeufrede', '$2y$08$97dxrkpINotih8net6TbE.zgoqeOM6e9AddgB7e4VaYlee0us6EFq', NULL, 'abeu.frederic@gmail.com', NULL, NULL, NULL, NULL, 1550826724, '1550951680', 1, 'ADON', 'FREDERIC', NULL, '0022549517916', '2019-02-22', '', ''),
(136, '201922345284', '', '::1', 'abeufrederic', '$2y$08$naGukFq78v7xkNsC2pNrCOE./XWfP6bLek8MpzYNF9HDkz8NF6hzm', NULL, 'nguetiaabenankabecca@gmail.com', NULL, NULL, NULL, NULL, 1550931287, NULL, 1, 'faissal', 'benmoussa', NULL, NULL, '2019-02-23', '', ''),
(137, '201922349384', '', '::1', 'abeutest', '$2y$08$ZmM4DtOyDgariGw9tl1PKuaNyKSLgJY8PoTrotpRMqGrj8mO1RPkC', NULL, 'akarapsyci@gmail.com', NULL, NULL, NULL, NULL, 1550931522, NULL, 1, 'ABEU', 'FREDE', NULL, NULL, '2019-02-23', '', ''),
(138, '201922350374', '', '::1', 'felixyao', '$2y$08$1EtYS.cH/v9PJ9FuBB1AEOKj9lq7Jyw3sL1nLURIYzJg//p2VzwOu', NULL, 'akasamouth@gmail.com', NULL, NULL, NULL, NULL, 1550931809, NULL, 1, 'YAO', 'FELIX', NULL, NULL, '2019-02-23', '', ''),
(140, '201922359189', '', '154.68.5.107', 'asseolivier', '$2y$08$FyCIlE.judL3SkeFKVnplOUuoWGFrComt.JCA1WmiU8h.pw1PWG6K', NULL, 'asseolivier@gmail.com', NULL, NULL, NULL, NULL, 1550956135, '1550957027', 1, 'ASSE', 'OLIVIER', NULL, NULL, '2019-02-23', '', ''),
(141, 'CARAF-2019223212620', '', '154.68.5.107', 'kraemmanuel', '$2y$08$DuzYtyiyilmXAsL865sinuxqHz1rhOakcnTZu9eGDGIIYwljLA9SS', NULL, 'kraemmanuel@yahoo.fr', NULL, NULL, NULL, NULL, 1550957180, '1552623695', 1, 'KRA', 'EMMANUEL', NULL, NULL, '2019-02-23', '', ''),
(142, 'CARAF-2019223214741', '', '88.191.129.57', 'badje', '$2y$08$yjwxrlV9loJSpaTBHjkBEOiSW1f7hoJ.YJ2bRDiD8JFl/xGn4H2Nq', NULL, 'asseu.badje@yahoo.fr', NULL, NULL, NULL, NULL, 1550958461, '1550958508', 1, 'Asseu', 'Badjé', NULL, NULL, '2019-02-23', '', ''),
(143, 'CARAF-2019223220856', '', '176.186.157.97', 'binopro', '$2y$08$4s6tCeZSefBHmFnjw7K1Mec1St9uMtKl87w4Zy8bxJW4mI6r4CNoe', NULL, 'lanvin.adon@gmail.com', NULL, NULL, NULL, '9GAPNPS9jAU8wFjdKPEfMe', 1550959736, '1551444533', 1, 'ADON', 'ATSE LANVIN', NULL, NULL, '2019-02-23', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users_groups`
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
(319, 129, 2),
(328, 135, 2),
(329, 136, 2),
(330, 137, 2),
(331, 138, 2),
(332, 139, 2),
(333, 140, 2),
(334, 141, 2),
(335, 142, 2),
(336, 143, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `group_perm`
--
ALTER TABLE `group_perm`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message_contact`
--
ALTER TABLE `message_contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`perm_id`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_page`
--
ALTER TABLE `t_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `group_perm`
--
ALTER TABLE `group_perm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=773;
--
-- AUTO_INCREMENT pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `message_contact`
--
ALTER TABLE `message_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `perm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t_page`
--
ALTER TABLE `t_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
