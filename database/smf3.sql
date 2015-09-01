-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2015 at 07:13 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

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
  `applicant_id` int(11) NOT NULL,
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
  `cell_no` int(11) NOT NULL,
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
  `father_company_Add` text NOT NULL,
  `father_cellnum` int(11) NOT NULL,
  `father_birthdate` date NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `mother_occu` varchar(100) NOT NULL,
  `mother_company_Add` text NOT NULL,
  `mother_cellnum` int(11) NOT NULL,
  `mother_birthdate` date NOT NULL,
  `sibling` text NOT NULL,
  `sibling_age` text NOT NULL,
  `sibling_school` text NOT NULL,
  `sibling_grd_yr` text NOT NULL,
  `employed` enum('YES','NO') NOT NULL,
  `married` enum('YES','NO','','') NOT NULL,
  `household_income_per_yr` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `area_id` int(11) NOT NULL,
  `NCR` enum('METRO MANILA/RIZAL') NOT NULL,
  `ISABELA` enum('CAUAYAN') NOT NULL,
  `CAR` enum('BAGUIO') NOT NULL,
  `PANGASINAN` enum('ROSALES') NOT NULL,
  `ZAMBALES` enum('OLONGAPO') NOT NULL,
  `NUEVA_ECIJA` enum('CABANATUAN') NOT NULL,
  `TARLAC` enum('TARLAC') NOT NULL,
  `PAMPANGA` enum('CLARK','SAN FERNANDO') NOT NULL,
  `BULACAN` enum('BALIWAG','MARILAO') NOT NULL,
  `CAVITE` enum('BACOOR','DASMARINAS','MOLINO','ROSARIO') NOT NULL,
  `LAGUNA` enum('STA ROSA','CALAMBA','SAN PABLO','') NOT NULL,
  `BATANGAS` enum('BATANGAS','LIPA','','') NOT NULL,
  `QUEZON` enum('LUCENA') NOT NULL,
  `CAMARINES SUR` enum('NAGA') NOT NULL,
  `NEGROS_OCCIDENTAL` enum('BACOLOD') NOT NULL,
  `ILOILO` enum('ILOILO') NOT NULL,
  `CEBU` enum('CEBU','CONSOLACION','SRP','') NOT NULL,
  `LEYTE` enum('HERNANI','TACLOBAN','','') NOT NULL,
  `PALAWAN` enum('PUERTO PRINCESA') NOT NULL,
  `DAVAO` enum('DAVAO','LANANG') NOT NULL,
  `SOUTH_COTABATO` enum('GENSAN') NOT NULL,
  `MISAMIS_ORIENTAL` enum('CDO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
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
  `phase_id` int(11) NOT NULL,
  `grade_screening` enum('PASSED','FAILED') NOT NULL,
  `scholarship_exam` text NOT NULL,
  `interview` text NOT NULL,
  `home_visit_checklist` text NOT NULL,
  `points` int(11) NOT NULL,
  `scholarship_status` enum('ACCEPTED','DISQUALIFIED','','') NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `remarks` mediumtext NOT NULL,
  `date` datetime NOT NULL,
  `applicant_phase` int(11) NOT NULL,
  `school_attending_to` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(11) NOT NULL,
  `provincial` enum('Angeles University Foundation','Ateneo de Naga','Ateneo de Davao University','Baliuag University','Batangas State University - Main-Nasugbu','Batangas State University - Lipa','Bulacan State University','Cagayan Capitol College','Cavite State Unversity','Cebu Institute of Technology','Cebu Normal University','Central Philippine University','Colegio San Agustin - Bacolod','De La Salle Dasmariñas','De La Salle Lipa','First Asia Institute of Technology and Humanities','Holy Angel University','La Consolacion College - Biñan','Laguna College of Business & Arts - Calamba','Liceo de Cagayan','Lipa City Colleges','Lyceum Northern Luzon','Lyceum Northwestern','Manuel Enverga University Foundation','Meycauayan College','Naga College Foundation','National College of Science and Technology','Pangasinan State University','Philippine Women''s College - Davao','Rogationist College','San Sebastian College - Recoletos-Cavite','Southern Luzon State University','St. Louis University','St. Michael''s College of Laguna','Technological University of the Philippines Visayas','Universidad de Sta. Isabel Naga','University of Assumption','University of Batangas','University of Cebu - Main, Banilad, Lapu-lapu and Mandaue','University of Cordillera','University of Mindanao','University of Negros Occidental - Recoletos','University of Nueva Caceres Naga','University of Perpetual Help - Biñan','University of Perpetual Help - Calamba','University of San Agustin','University of San Carlos','University of San Jose Recoletos','University of South Eastern Philippines','University of St. La Salle','University of the Philippines - Baguio','University of the Philippines - Los Baños','University of the Philippines - Mindanao','University of the Visayas (UP Vis)','UP Visayas - Cebu College, Lahug','Western Institute of Technology','West Visayas State University','Xavier University') NOT NULL,
  `ncr` enum('Asia Pacific College','East Asia College','National University','Far Eastern University','Jose Rizal University','Pamantasan ng Lungsod ng Marikina','Pamantasan ng Lungsod ng Maynila',' Philippine Normal University','Philippine School of Business Administration','University of the East - Caloocan','University of the East - Manila','University of the Philippines - Diliman') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`applicant_id`), ADD KEY `region_of_hs_graduating_from` (`region_of_hs_graduating_from`), ADD KEY `college_to_apply1` (`college_to_apply1`), ADD KEY `college_to_apply2` (`college_to_apply2`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`phase_id`), ADD KEY `applicant_phase` (`applicant_phase`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
  MODIFY `phase_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
