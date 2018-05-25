-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 05:46 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `editing_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
`logo_id` int(10) NOT NULL,
  `logo_name` varchar(100) DEFAULT NULL,
  `logo_image` varchar(250) NOT NULL,
  `publication` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_name`, `logo_image`, `publication`) VALUES
(1, 'first logo', 'images/logo_images/logo2.png', 0),
(2, 'Second Logo', 'images/logo_images/opp.jpg', 0),
(3, 'Third logo', 'images/logo_images/logo.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`admin_id` int(2) NOT NULL,
  `admin_full_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_level` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_full_name`, `admin_email_address`, `admin_password`, `access_level`) VALUES
(1, 'First Admin', 'admin1@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 1),
(2, 'Second Admin', 'admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909', 2),
(3, 'Third Admin', 'admin3@gmail.com', '32cacb2f994f6b42183a1300d9a3e8d6', 1),
(5, 'service name', 'service@gmail.com', 'aaabf0d39951f3e6c3e8a7911df524c2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE IF NOT EXISTS `tbl_service` (
`category_id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_title` varchar(100) NOT NULL,
  `category_short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(250) NOT NULL,
  `fund_type` tinyint(1) NOT NULL,
  `location` varchar(50) NOT NULL,
  `official_website` varchar(250) NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0',
  `hit_count` tinyint(4) NOT NULL,
  `present_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author_name` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`category_id`, `category_name`, `category_title`, `category_short_description`, `category_long_description`, `category_image`, `fund_type`, `location`, `official_website`, `publication_status`, `hit_count`, `present_date_time`, `author_name`) VALUES
(16, 'Research', 'Solution for Research, Training, Innovation &Language; (SORTIL)', '<font face="Arial, Verdana"><span >SORTIL is an organization which will support the people to prepare qualitative research proposal, data analysis, thesis editing,&nbsp; report writing...</span></font>', '<p class="MsoNormal" ><b><span Times New Roman"">Background:\r\n<o:p></o:p></span></b></p>\r\n\r <p class="MsoNormal" >SORTIL <span Times New Roman"">is an organization which will support the people to prepare\r\nqualitative research proposal, data analysis, thesis editing,&nbsp; report writing, scholarship management and\r\nalso help to study different universities in abroad that contribute to the\r\neconomy and research advancement for national and global level. It will also\r\nprovide different types of training program such as IT training, language\r\ntraining, Modern office management training, Training of trainers (TOT) course\r\nand others training program depending on the requirements of different institutions.\r\nIt will help to arrange different types of seminar based on institutional\r\nneeds. <o:p></o:p></span></p>\r\n\r <p class="MsoNormal" ><span Times New Roman"">&nbsp;</span></p>\r\n\r <p class="MsoNormal" ><st :place w:st="on"><st1:city w:st="on"><b><span Times New Roman"">Mission</span></b></st1:city></st1:place><b><span Times New Roman"">: <o:p></o:p></span></b></p>\r\n\r <p class="MsoNormal" ><span Times New Roman";mso-bidi-font-weight:bold">-To improve\r\nthe innovative research incorporating with institutional mission, quality\r\nassurance to client through knowledge sharing that support economic development\r of the nation.<o:p></o:p></span></p><p class="MsoNormal" ><b><span Times New Roman"">Structure of\r organization:<o:p></o:p></span></b></p><p class="MsoNormal" ><span Times New Roman";mso-bidi-font-weight:\r bold">1-Chairman<o:p></o:p></span></p><p class="MsoNormal" >\r\n\r\n\r\n\r </p><p class="MsoNormal" ><span Times New Roman";mso-bidi-font-weight:\r bold">1- Director Administration &amp; Accounts<o:p></o:p></span></p><p class="MsoNormal" ><span Times New Roman";mso-bidi-font-weight:\r bold">1-Director Research<o:p></o:p></span></p><p class="MsoNormal" >\r\n\r <span Times New Roman","serif";mso-fareast-font-family:\r\n"MS Mincho";mso-ansi-language:EN-US;mso-fareast-language:JA;mso-bidi-language:\r BN;mso-bidi-font-weight:bold">1-Director Marketing</span></p><p class="MsoNormal" ><b><span Times New Roman"">Target group:<o:p></o:p></span></b></p><p class="MsoNormal" >\r\n\r <span Times New Roman","serif";mso-fareast-font-family:\r\n"MS Mincho";mso-ansi-language:EN-US;mso-fareast-language:JA;mso-bidi-language:\r\nBN;mso-bidi-font-weight:bold">Students, Research personnel, different NGO’S and\r institutions.</span></p><p class="MsoNormal" ><b><span Times New Roman"">Marketing:<o:p></o:p></span></b></p><p class="MsoNormal" >\r\n\r <span Times New Roman","serif";mso-fareast-font-family:\r\n"MS Mincho";mso-ansi-language:EN-US;mso-fareast-language:JA;mso-bidi-language:\r\nBN;mso-bidi-font-weight:bold">It will be marketed through leaflet/ circular in different\r types of local/ national media.</span></p><p class="MsoNormal" ><b><span Times New Roman"">Work price:<o:p></o:p></span></b></p><p class="MsoNormal" >\r\n\r <span Times New Roman","serif";mso-fareast-font-family:\r\n"MS Mincho";mso-ansi-language:EN-US;mso-fareast-language:JA;mso-bidi-language:\r\nBN;mso-bidi-font-weight:bold">Work price will be depend on types of work and\r will be fixed through open discussion.</span></p><p class="MsoNormal" ><b><span Times New Roman"">Legality:<o:p></o:p></span></b></p><p class="MsoNormal" >\r\n\r <span Times New Roman","serif";mso-fareast-font-family:\r\n"MS Mincho";mso-ansi-language:EN-US;mso-fareast-language:JA;mso-bidi-language:\r\nBN;mso-bidi-font-weight:bold">Every work will be done through maintaining\r proper law and order.</span></p><p class="MsoNormal" ><b><span Times New Roman"">Conclusion:<o:p></o:p></span></b></p><p class="MsoNormal" >\r\n\r <span Times New Roman","serif";mso-fareast-font-family:\r\n"MS Mincho";mso-ansi-language:EN-US;mso-fareast-language:JA;mso-bidi-language:\r\nBN;mso-bidi-font-weight:bold">We can conclude that this organization will\r\nprovide proper needs for the client and in future it will be the most\r\nprestigious institution not only in <st1:place w:st="on"><st1:country-region w:st="on">Bangladesh</st1:country-region></st1:place> but also all over the\r\nworld.</span></p>', 'images/research_images/logo28.png', 0, 'Habib Bhaban, 4th floor, Sadar Road, Barisal. ', '', 1, 0, '2017-11-29 10:10:11', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
 ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
 ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
MODIFY `logo_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
