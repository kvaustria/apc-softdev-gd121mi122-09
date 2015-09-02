-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2015 at 11:56 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smf3`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `add1_house_num` int(5) NOT NULL,
  `add1_st_add` varchar(50) NOT NULL,
  `add1_bry_add` varchar(50) NOT NULL,
  `add1_city_add` varchar(50) NOT NULL,
  `add2_house_num` int(5) DEFAULT NULL,
  `add2_st_add` varchar(50) DEFAULT NULL,
  `add2_bry_add` varchar(50) DEFAULT NULL,
  `add2_city_add` varchar(50) DEFAULT NULL,
  `cell_no` int(11) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(2) NOT NULL,
  `status` enum('Single','Married','Widowed','') NOT NULL,
  `sex` enum('Male','Female','','') NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `region_of_hs_graduating_from` int(11) NOT NULL,
  `type_of_hs_graduating_from` enum('PUBLIC','MASA') NOT NULL,
  `hs_graduating_from` varchar(100) NOT NULL,
  `section` int(2) NOT NULL,
  `complete_school_add` varchar(100) NOT NULL,
  `name_of_principal` varchar(100) NOT NULL,
  `school_tellno` int(10) NOT NULL,
  `organization` text NOT NULL,
  `position_held` text NOT NULL,
  `college_to_apply1` int(11) NOT NULL,
  `college_to_apply2` int(11) NOT NULL,
  `course_plan_to_take1` enum('BS in Computer Science','BS in Information Technology','BS in Information Management','BS in Electronics and Communications Engineering','BS in Computer Engineering','BS in Civil Engineering','BS in Electrical Engineering','BS in Mechanical Engineering','BS in Elementary Education','BS in Secondary Education major in Biology','BS in Secondary Education major in Chemistry','BS in Secondary Education major in Physics','BS in Secondary Education major in Mathematics','BS in Secondary Education major in English','BS in Accountancy','BS in Pharmacy') NOT NULL,
  `course_plan_to_take2` enum('BS in Computer Science','BS in Information Technology','BS in Information Management','BS in Electronics and Communications Engineering','BS in Computer Engineering','BS in Civil Engineering','BS in Electrical Engineering','BS in Mechanical Engineering','BS in Elementary Education','BS in Secondary Education major in Biology','BS in Secondary Education major in Chemistry','BS in Secondary Education major in Physics','BS in Secondary Education major in Mathematics','BS in Secondary Education major in English','BS in Accountancy','BS in Pharmacy') NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `father_occu` varchar(100) NOT NULL,
  `father_company_Add` text,
  `father_cellnum` int(11) DEFAULT NULL,
  `father_birthdate` date NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `mother_occu` varchar(100) NOT NULL,
  `mother_company_Add` text,
  `mother_cellnum` int(11) DEFAULT NULL,
  `mother_birthdate` date NOT NULL,
  `sibling` text NOT NULL,
  `sibling_age` text NOT NULL,
  `sibling_school` text NOT NULL,
  `sibling_grd_yr` text NOT NULL,
  `employed` enum('YES','NO') NOT NULL,
  `married` enum('YES','NO','','') NOT NULL,
  `household_income_per_yr` decimal(10,0) NOT NULL,
  `form138` varchar(200) DEFAULT NULL,
  `certificate` varchar(200) DEFAULT NULL,
  `taxreturn` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`applicant_id`),
  KEY `region_of_hs_graduating_from` (`region_of_hs_graduating_from`),
  KEY `college_to_apply1` (`college_to_apply1`),
  KEY `college_to_apply2` (`college_to_apply2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `region` enum('NCR','PROVINCIAL','','') NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`area_id`, `region`, `city`) VALUES
(2, 'NCR', 'Metro Manila'),
(3, 'NCR', 'Rizal'),
(4, 'PROVINCIAL', 'Baguio'),
(6, 'PROVINCIAL', 'Pampanga'),
(7, 'PROVINCIAL', 'Pangasinan'),
(9, 'PROVINCIAL', 'Bulacan'),
(10, 'PROVINCIAL', 'Calamba'),
(11, 'PROVINCIAL', 'Cavite'),
(12, 'PROVINCIAL', 'Batangas'),
(13, 'PROVINCIAL', 'Lipa'),
(14, 'PROVINCIAL', 'Lucena'),
(15, 'PROVINCIAL', 'Naga'),
(16, 'PROVINCIAL', 'Cebu'),
(17, 'PROVINCIAL', 'Iloilo'),
(18, 'PROVINCIAL', 'Bacolod'),
(19, 'PROVINCIAL', 'Davao del Sur'),
(20, 'PROVINCIAL', 'Cagayan de Oro'),
(21, 'PROVINCIAL', 'Camarines Sur'),
(22, 'PROVINCIAL', 'Quezon'),
(23, 'PROVINCIAL', 'Misamis Oriental'),
(24, 'PROVINCIAL', 'Negros Occidental');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1441084351),
('m130524_201442_init', 1441084356);

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE IF NOT EXISTS `phase` (
  `phase_id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_screening` enum('PASSED','FAILED') NOT NULL,
  `grd_screening_comment` mediumtext,
  `scholarship_exam` enum('PASSED','FAILED','','') DEFAULT NULL,
  `exam_result_comment` mediumtext,
  `interview` enum('PASSED','FAILED','','') DEFAULT NULL,
  `home_visit_checklist` text NOT NULL,
  `points` int(11) NOT NULL,
  `scholarship_status` enum('ACCEPTED','DISQUALIFIED','PENDING','') NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `remarks` mediumtext NOT NULL,
  `date` datetime NOT NULL,
  `applicant_phase` int(11) NOT NULL,
  `school_attending_to` text NOT NULL,
  PRIMARY KEY (`phase_id`),
  KEY `applicant_phase` (`applicant_phase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `schools` varchar(50) NOT NULL,
  `region` enum('NCR','PROVINCIAL','','') NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `schools`, `region`) VALUES
(1, 'Asia Pacific College', 'NCR'),
(2, 'East Asia College', 'NCR'),
(3, 'National University', 'NCR'),
(4, 'Far Eastern University', 'NCR'),
(5, 'Jose Rizal University', 'NCR'),
(6, 'Pamantasan ng Lungsod ng Marikina', 'NCR'),
(7, 'Pamantasan ng Lungsod ng Maynila', 'NCR'),
(8, 'Philippine Normal University', 'NCR'),
(9, 'Philippine School of Business Administration', 'NCR'),
(10, 'University of the East - Caloocan', 'NCR'),
(11, 'University of the East - Manila', 'NCR'),
(12, 'University of the Philippines', 'NCR'),
(13, 'Angeles University Foundation', 'PROVINCIAL'),
(14, 'Ateneo de Naga', 'PROVINCIAL'),
(15, 'Ateneo de Davao', 'PROVINCIAL'),
(16, 'Baliuag University', 'PROVINCIAL'),
(17, 'Batangas State University', 'PROVINCIAL'),
(18, 'Batangas State University - Nasugbu', 'PROVINCIAL'),
(19, 'Batangas State University - Lipa', 'PROVINCIAL'),
(20, 'Bulacan State University', 'PROVINCIAL'),
(21, 'Cagayan Capitol College', 'PROVINCIAL'),
(22, 'Cavite State Unversity', 'PROVINCIAL'),
(23, 'Cebu Institute of Technology', 'PROVINCIAL'),
(24, 'Cebu Normal University', 'PROVINCIAL'),
(25, 'Central Philippine University', 'PROVINCIAL'),
(26, 'Colegio San Agustin - Bacolod', 'PROVINCIAL'),
(27, 'De La Salle Dasmariñas', 'PROVINCIAL'),
(28, 'De La Salle Lipa', 'PROVINCIAL'),
(29, 'First Asia Institute of Technology and Humanities', 'PROVINCIAL'),
(30, 'Holy Angel University', 'PROVINCIAL'),
(31, 'La Consolacion College - Biñan', 'PROVINCIAL'),
(32, 'Laguna College of Business & Arts - Calamba', 'PROVINCIAL'),
(33, 'Liceo de Cagayan', 'PROVINCIAL'),
(34, 'Lipa City Colleges', 'PROVINCIAL'),
(35, 'Lyceum Northern Luzon', 'PROVINCIAL'),
(36, 'Lyceum Northwestern', 'PROVINCIAL'),
(37, 'Manuel Enverga University Foundation', 'PROVINCIAL'),
(38, 'Meycauayan College', 'PROVINCIAL'),
(39, 'Naga College Foundation', 'PROVINCIAL'),
(40, 'National College of Science and Technology', 'PROVINCIAL'),
(41, 'Pangasinan State University', 'PROVINCIAL'),
(42, 'Philippine Womens College - Davao', 'PROVINCIAL'),
(43, 'Rogationist College', 'PROVINCIAL'),
(44, 'San Sebastian College - Recoletos-Cavite', 'PROVINCIAL'),
(45, 'Southern Luzon State University', 'PROVINCIAL'),
(46, 'St. Louis University', 'PROVINCIAL'),
(47, 'St. Michael''s College of Laguna', 'PROVINCIAL'),
(48, 'Technological University of the Philippines Visaya', 'PROVINCIAL'),
(49, 'Universidad de Sta. Isabel Naga', 'PROVINCIAL'),
(50, 'University of Assumption', 'PROVINCIAL'),
(51, 'University of Batangas', 'PROVINCIAL'),
(52, 'University of Cebu - Main', 'PROVINCIAL'),
(53, 'University of Cebu - Banilad', 'PROVINCIAL'),
(54, 'University of Cebu - Lapu-lapu', 'PROVINCIAL'),
(55, 'University of Cebu - Mandaue', 'PROVINCIAL'),
(56, 'University of Cordillera', 'PROVINCIAL'),
(57, 'University of Mindanao', 'PROVINCIAL'),
(58, 'University of Negros Occidental - Recoletos', 'PROVINCIAL'),
(59, 'University of Nueva Caceres Naga', 'PROVINCIAL'),
(60, 'University of Perpetual Help - Biñan', 'PROVINCIAL'),
(61, 'University of Perpetual Help - Calamba', 'PROVINCIAL'),
(62, 'University of San Agustin', 'PROVINCIAL'),
(63, 'University of San Carlos', 'PROVINCIAL'),
(64, 'University of San Jose Recoletos', 'PROVINCIAL'),
(65, 'University of South Eastern Philippines', 'PROVINCIAL'),
(66, 'University of St. La Salle', 'PROVINCIAL'),
(67, 'University of the Philippines - Baguio', 'PROVINCIAL'),
(68, 'University of the Philippines - Los Baños', 'PROVINCIAL'),
(69, 'University of the Philippines - Mindanao', 'PROVINCIAL'),
(70, 'University of the Visayas (UP Vis)', 'PROVINCIAL'),
(71, 'UP Visayas - Cebu College, Lahug', 'PROVINCIAL'),
(72, 'Western Institute of Technology', 'PROVINCIAL'),
(73, 'West Visayas State University', 'PROVINCIAL'),
(74, 'Xavier University', 'PROVINCIAL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '4RTZnqlhj-l-N4QJuxn2ioQut_9GbAjV', '$2y$13$dRmTVcl5oYCuRf3P1ARKNus3Mxvoc86tVNMcNIzBNT31LBNWoW8Iq', NULL, 'admin@yahoo.com', 10, 1441097252, 1441097252),
(2, 'user1', 'Z2WUAVHXPe-uV6wO7mCXFOlRKgrlah4J', '$2y$13$Ep9C4wIZTfnEEyCnRKq75OZHBO7bQxisaNzqUjnQpNZuB5OWsksuS', NULL, 'user1@gmail.com', 10, 1441229058, 1441229058);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`region_of_hs_graduating_from`) REFERENCES `areas` (`area_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `applicants_ibfk_2` FOREIGN KEY (`college_to_apply1`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `applicants_ibfk_3` FOREIGN KEY (`college_to_apply2`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `phase`
--
ALTER TABLE `phase`
  ADD CONSTRAINT `phase_ibfk_1` FOREIGN KEY (`applicant_phase`) REFERENCES `applicants` (`applicant_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
