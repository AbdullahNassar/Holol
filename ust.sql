-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2018 at 09:00 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ust`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` text,
  `parent` int(1) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `parent`, `active`, `created_at`, `updated_at`) VALUES
(1, 'الاغذية والمشروبات', 1, 1, '2018-02-26 08:25:53', '2018-02-26 08:25:53'),
(2, 'الرعاية الصحية', 1, 1, '2018-02-26 08:25:53', '2018-02-26 08:25:53'),
(3, 'صناعى', 1, 1, '2018-02-26 08:25:53', '2018-02-26 08:25:53'),
(4, 'تصنيع', 1, 1, '2018-02-26 08:25:53', '2018-02-26 08:25:53'),
(5, 'النفط والغاز', 1, 1, '2018-02-26 08:25:53', '2018-02-26 08:25:53'),
(6, 'الأدوية', 1, 1, '2018-02-26 08:25:53', '2018-02-26 08:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `image` text,
  `active` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'مؤسسة دياب للتجارة', 'client-logo.png', 1, '2018-02-26 08:14:47', '2018-02-26 08:14:47'),
(2, 'مؤسسة دياب للتجارة', 'client-logo.png', 1, '2018-02-26 08:14:47', '2018-02-26 08:14:47'),
(3, 'مؤسسة دياب للتجارة', 'client-logo.png', 1, '2018-02-26 08:14:47', '2018-02-26 08:14:47'),
(4, 'مؤسسة دياب للتجارة', 'client-logo.png', 1, '2018-02-26 08:14:47', '2018-02-26 08:14:47'),
(5, 'مؤسسة دياب للتجارة', 'client-logo.png', 1, '2018-02-26 08:14:47', '2018-02-26 08:14:47'),
(6, 'مؤسسة دياب للتجارة', 'client-logo.png', 1, '2018-02-26 08:14:47', '2018-02-26 08:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` text,
  `email` text,
  `address` text,
  `facebook` text,
  `twitter` text,
  `google` text,
  `instagram` text,
  `youtube` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `facebook`, `twitter`, `google`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, '00966512345678', 'info@ust.com', 'مكة, المملكة العربية السعودية', 'facebook', 't', 'g', 'i', 'y', '2018-02-26 08:03:29', '2018-02-26 08:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` text,
  `image` text,
  `name` text,
  `head` text,
  `title` text,
  `content` text,
  `url` text,
  `active` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `logo`, `image`, `name`, `head`, `title`, `content`, `url`, `active`, `created_at`, `updated_at`) VALUES
(1, 'brand-logo.png', 'brand-detail.jpg', 'Beko', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز\r\n\r\n', 'شركة بيكو', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.\r\n\r\nهنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.', 'http://www.beko.com.au/', 1, '2018-02-26 08:20:05', '2018-02-26 08:20:05'),
(2, 'brand-logo.png', 'brand-detail.jpg', 'Beko', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز\r\n\r\n', 'شركة بيكو', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.\r\n\r\nهنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.', 'http://www.beko.com.au/', 1, '2018-02-26 08:20:08', '2018-02-26 08:20:08'),
(3, 'brand-logo.png', 'brand-detail.jpg', 'Beko', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز\r\n\r\n', 'شركة بيكو', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.\r\n\r\nهنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.', 'http://www.beko.com.au/', 1, '2018-02-26 08:20:08', '2018-02-26 08:20:08'),
(4, 'brand-logo.png', 'brand-detail.jpg', 'Beko', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز\r\n\r\n', 'شركة بيكو', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.\r\n\r\nهنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.', 'http://www.beko.com.au/', 1, '2018-02-26 08:20:08', '2018-02-26 08:20:08'),
(5, 'brand-logo.png', 'brand-detail.jpg', 'Beko', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز\r\n\r\n', 'شركة بيكو', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.\r\n\r\nهنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.', 'http://www.beko.com.au/', 1, '2018-02-26 08:20:05', '2018-02-26 08:20:05'),
(6, 'brand-logo.png', 'brand-detail.jpg', 'Beko', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز\r\n\r\n', 'شركة بيكو', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.\r\n\r\nهنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.', 'http://www.beko.com.au/', 1, '2018-02-26 08:20:08', '2018-02-26 08:20:08'),
(7, 'brand-logo.png', 'brand-detail.jpg', 'Beko', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز\r\n\r\n', 'شركة بيكو', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.\r\n\r\nهنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.', 'http://www.beko.com.au/', 1, '2018-02-26 08:20:08', '2018-02-26 08:20:08'),
(8, 'brand-logo.png', 'brand-detail.jpg', 'Beko', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز\r\n\r\n', 'شركة بيكو', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.\r\n\r\nهنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن هذا النص, ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر.', 'http://www.beko.com.au/', 1, '2018-02-26 08:20:08', '2018-02-26 08:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `phone` text,
  `email` text,
  `subject` text,
  `message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah Mustafa Nassar', '01022105992', 'abdullah.nassar1000@gmail.com', 'hh', 'hh', '2018-03-03 14:18:07', '2018-03-03 14:18:07'),
(2, 'Abdullah Nassar', '01022105992', 'abdullah.nassar1000@gmail.com', 'hh', 'hh', '2018-03-03 14:18:26', '2018-03-03 14:18:26'),
(3, 'Abdullah Nassar', '01022105992', 'abdullah.nassar1000@gmail.com', 'hh', 'hh', '2018-03-03 14:18:37', '2018-03-03 14:18:37'),
(4, 'Abdullah Nassar', '01022105992', 'abdullah.nassar1000@gmail.com', 'hh', 'hh', '2018-03-03 14:19:31', '2018-03-03 14:19:31'),
(5, 'Abdullah Nassar', '01022105992', 'abdullah.nassar1000@gmail.com', 'hh', 'hh', '2018-03-03 14:19:42', '2018-03-03 14:19:42'),
(6, 'Abdullah Nassar', '01022105992', 'abdullah.nassar1000@gmail.com', 'hh', 'hh', '2018-03-03 14:20:08', '2018-03-03 14:20:08'),
(7, 'Abdullah Mustafa Nassar', '01022105992', 'abdullah.nassar1000@gmail.com', 'hh', 'hh', '2018-03-04 08:50:11', '2018-03-04 08:50:11'),
(8, 'Abdullah Mustafa Nassar', '01022105992', 'abdullah.nassar1000@gmail.com', 'hh', 'dd', '2018-03-04 08:55:01', '2018-03-04 08:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('6513cb70-1952-43d7-ab08-b24b3222d8d6', 'App\\Notifications\\notify_me', 1, 'App\\User', '{\"repliedTime\":{\"date\":\"2018-03-04 08:50:11.554084\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"user\":{\"id\":1,\"name\":\"Admin\",\"username\":\"admin\",\"type\":\"admin\",\"email\":\"mohamedsasa201042@yahoo.com\",\"country\":\"AF\",\"facebook\":\"https:\\/\\/www.facebook.com\\/mohamed.elbiheirytwi\",\"twitter\":\"https:\\/\\/twitter.com\\/elbiheiry\",\"google\":\"https:\\/\\/plus.google.com\\/101286892081706368377\",\"instagram\":\"https:\\/\\/www.instagram.com\\/\",\"phone\":\"1011093385\",\"address\":\"Cairo\",\"details\":\"i\'m a web developper\",\"image\":\"profile-img.png\",\"active\":1,\"created_at\":\"2017-01-25 08:32:05\",\"updated_at\":\"2018-01-20 15:20:34\"}}', '2018-03-04 06:52:28', '2018-03-04 06:50:11', '2018-03-04 06:52:28'),
('81687cc1-f15a-42d9-bbbd-5b5add364190', 'App\\Notifications\\notify_me', 1, 'App\\User', '{\"repliedTime\":{\"date\":\"2018-03-04 08:55:01.645065\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"user\":{\"id\":1,\"name\":\"\\u0623\\u062f\\u0645\\u0646\",\"username\":\"admin\",\"type\":\"admin\",\"email\":\"mohamedsasa201042@yahoo.com\",\"country\":\"AF\",\"facebook\":\"https:\\/\\/www.facebook.com\\/mohamed.elbiheirytwi\",\"twitter\":\"https:\\/\\/twitter.com\\/elbiheiry\",\"google\":\"https:\\/\\/plus.google.com\\/101286892081706368377\",\"instagram\":\"https:\\/\\/www.instagram.com\\/\",\"phone\":\"1011093385\",\"address\":\"Cairo\",\"details\":\"i\'m a web developper\",\"image\":\"profile-img.png\",\"active\":1,\"created_at\":\"2017-01-25 08:32:05\",\"updated_at\":\"2018-01-20 15:20:34\"}}', NULL, '2018-03-04 06:55:01', '2018-03-04 06:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  `name` text,
  `content` text,
  `cat_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `image`, `name`, `content`, `cat_id`, `s_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 1, 1, 1, '2018-02-26 08:37:27', '2018-02-26 08:37:27'),
(2, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 1, 2, 1, '2018-02-26 08:37:32', '2018-02-26 08:37:32'),
(3, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 1, 3, 1, '2018-02-26 08:37:32', '2018-02-26 08:37:32'),
(4, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 2, 1, 1, '2018-02-26 08:37:27', '2018-02-26 08:37:27'),
(5, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 2, 2, 1, '2018-02-26 08:37:32', '2018-02-26 08:37:32'),
(6, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 2, 3, 1, '2018-02-26 08:37:32', '2018-02-26 08:37:32'),
(7, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 3, 1, 1, '2018-02-26 08:37:27', '2018-02-26 08:37:27'),
(8, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 3, 2, 1, '2018-02-26 08:37:32', '2018-02-26 08:37:32'),
(9, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 3, 3, 1, '2018-02-26 08:37:32', '2018-02-26 08:37:32'),
(10, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 4, 1, 1, '2018-02-26 08:37:27', '2018-02-26 08:37:27'),
(11, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 4, 2, 1, '2018-02-26 08:37:32', '2018-02-26 08:37:32'),
(12, 'Png.png', 'النيتروجين\r\n\r\n', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 4, 3, 1, '2018-02-26 08:37:32', '2018-02-26 08:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head_ar` text,
  `head_en` text,
  `content_ar` text,
  `content_en` text,
  `image` text,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `head_ar`, `head_en`, `content_ar`, `content_en`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'هذا نص تعريفى للموقع يوحى بجمال', 'Get the magical smile that\r\n you have always wished for\r\n', 'هناك حقيقة مثبتة منذ زمن طويل وهى أن المحتوى المقروء لصفحة ما', 'Lorem ipsum dolor sit amet, lacus potenti\r\n duis sem dui, eu congue vestibulum ', 'Slider-1.png', 1, '2018-02-26 07:51:30', '2018-02-26 07:51:30'),
(2, 'هذا نص تعريفى للموقع يوحى بجمال', 'Get the magical smile that you have always wished for\r\n', 'هناك حقيقة مثبتة منذ زمن طويل وهى أن المحتوى المقروء لصفحة ما', 'Lorem ipsum dolor sit amet, lacus potenti duis sem dui, eu congue vestibulum ', 'Slider-1.png', 1, '2018-02-26 07:51:30', '2018-02-26 07:51:30'),
(3, 'هذا نص تعريفى للموقع يوحى بجمال', 'Get the magical smile that you have always wished for\r\n', 'هناك حقيقة مثبتة منذ زمن طويل وهى أن المحتوى المقروء لصفحة ما', 'Lorem ipsum dolor sit amet, lacus potenti duis sem dui, eu congue vestibulum ', 'Slider-1.png', 1, '2018-02-26 07:51:30', '2018-02-26 07:51:30'),
(4, 'هذا نص تعريفى للموقع يوحى بجمال', 'Get the magical smile that you have always wished for\r\n', 'هناك حقيقة مثبتة منذ زمن طويل وهى أن المحتوى المقروء لصفحة ما.', 'Lorem ipsum dolor sit amet, lacus potenti duis sem dui, eu congue vestibulum ', 'Slider-1.png', 1, '2018-02-26 07:51:30', '2018-02-26 07:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `statics`
--

DROP TABLE IF EXISTS `statics`;
CREATE TABLE IF NOT EXISTS `statics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_image` text,
  `about_content` text,
  `vision` text,
  `mission` text,
  `message` text,
  `goals` text,
  `footer` text,
  `news` text,
  `contact` text,
  `clients` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statics`
--

INSERT INTO `statics` (`id`, `about_image`, `about_content`, `vision`, `mission`, `message`, `goals`, `footer`, `news`, `contact`, `clients`, `created_at`, `updated_at`) VALUES
(1, 'about-img.png', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .\r\n\r\nبينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات .', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات.', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات.', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات.', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص إيبسوم عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات.', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها ولذلك يتم طريقة.', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ.', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص تريد أن تستخدم نص لوريم إيبسوم ما.', 'بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة.', '2018-02-26 07:57:57', '2018-02-26 07:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

DROP TABLE IF EXISTS `subs`;
CREATE TABLE IF NOT EXISTS `subs` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` text,
  `active` int(1) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`sub_id`, `sub_name`, `active`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'الضغط العالى', 1, 1, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(2, 'الاسمنت السائبة', 1, 1, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(3, 'توليد النتيروتجين', 1, 1, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(4, 'الضغط العالى', 1, 2, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(5, 'الاسمنت السائبة', 1, 2, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(6, 'توليد النتيروتجين', 1, 2, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(7, 'الضغط العالى', 1, 3, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(8, 'الاسمنت السائبة', 1, 3, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(9, 'توليد النتيروتجين', 1, 3, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(10, 'الضغط العالى', 1, 4, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(11, 'الاسمنت السائبة', 1, 4, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(12, 'توليد النتيروتجين', 1, 4, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(13, 'الضغط العالى', 1, 5, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(14, 'الاسمنت السائبة', 1, 5, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(15, 'توليد النتيروتجين', 1, 5, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(16, 'الضغط العالى', 1, 6, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(17, 'الاسمنت السائبة', 1, 6, '2018-02-26 08:30:08', '2018-02-26 08:30:08'),
(18, 'توليد النتيروتجين', 1, 6, '2018-02-26 08:30:08', '2018-02-26 08:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'abdullah.nassar1000@gmail.com', '2018-03-03 08:12:47', '2018-03-03 08:12:47'),
(4, 'mohammed@gmail.com', '2018-03-03 08:30:28', '2018-03-03 08:30:28'),
(5, 'abdullah.nassar10022@gmail.com', '2018-03-03 08:33:19', '2018-03-03 08:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  `name` text,
  `title` text,
  `facebook` text,
  `twitter` text,
  `linkedin` text,
  `active` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `name`, `title`, `facebook`, `twitter`, `linkedin`, `active`, `created_at`, `updated_at`) VALUES
(1, 'team-member.jpg', 'يزيد السيف', 'مدير الشركة', 'f', 't', 'l', 1, '2018-02-26 08:11:05', '2018-02-26 08:11:05'),
(2, 'team-member.jpg', 'يزيد السيف', 'مدير الشركة', 'f', 't', 'l', 1, '2018-02-26 08:11:14', '2018-02-26 08:11:14'),
(3, 'team-member.jpg', 'يزيد السيف', 'مدير الشركة', 'f', 't', 'l', 1, '2018-02-26 08:11:14', '2018-02-26 08:11:14'),
(4, 'team-member.jpg', 'يزيد السيف', 'مدير الشركة', 'f', 't', 'l', 1, '2018-02-26 08:11:14', '2018-02-26 08:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` text COLLATE utf8_unicode_ci,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8_unicode_ci,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `type`, `email`, `password`, `country`, `facebook`, `twitter`, `google`, `instagram`, `phone`, `address`, `details`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'أدمن', 'admin', 'admin', 'mohamedsasa201042@yahoo.com', '$2y$10$fvmSPW7vx5Mny0P2WVOnHO6Iyx8mHddfMvdNdD7lwMnUvBJuKFRHW', 'AF', 'https://www.facebook.com/mohamed.elbiheirytwi', 'https://twitter.com/elbiheiry', 'https://plus.google.com/101286892081706368377', 'https://www.instagram.com/', '1011093385', 'Cairo', 'i\'m a web developper', 'profile-img.png', 1, '2017-01-25 06:32:05', '2018-01-20 13:20:34'),
(2, 'pepo', 'pepo', 'admin', 'abdullah.nassar100@gmail.com', '$2y$10$fvmSPW7vx5Mny0P2WVOnHO6Iyx8mHddfMvdNdD7lwMnUvBJuKFRHW', 'Egypt', 'f', 't', 'g', 'i', '1022105992', 'Cairo', 'd', 'profile-img.png', 1, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
