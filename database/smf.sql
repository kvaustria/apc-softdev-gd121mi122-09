-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2015 at 01:48 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smf`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
`id` int(11) NOT NULL,
  `location` varchar(45) DEFAULT NULL,
  `type` enum('MAPSA','Public School') DEFAULT NULL,
  `hs_name` varchar(45) DEFAULT NULL,
  `section` int(2) DEFAULT NULL,
  `hs_add` varchar(45) DEFAULT NULL,
  `principal` varchar(45) DEFAULT NULL,
  `tel_no` int(11) DEFAULT NULL,
  `organization` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
`id` int(11) NOT NULL,
  `personal` int(11) DEFAULT NULL,
  `academic` int(11) DEFAULT NULL,
  `college` int(11) DEFAULT NULL,
  `family` int(11) DEFAULT NULL,
  `fileserver` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
`id` int(11) NOT NULL,
  `location` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `location`, `city`) VALUES
(1, 'Metro Manila', 'NCR'),
(2, 'Rizal', 'NCR'),
(3, 'Baguio', 'PROVINCIAL'),
(4, 'Pampanga', 'PROVINCIAL'),
(5, 'Pangasinan', 'PROVINCIAL'),
(6, 'Bulacan', 'PROVINCIAL'),
(7, 'Calamba', 'PROVINCIAL'),
(8, 'Cavite', 'PROVINCIAL'),
(9, 'Batangas', 'PROVINCIAL'),
(10, 'Lipa', 'PROVINCIAL'),
(11, 'Lucena', 'PROVINCIAL'),
(12, 'Naga', 'PROVINCIAL'),
(13, 'Cebu', 'PROVINCIAL'),
(14, 'Iloilo', 'PROVINCIAL'),
(15, 'Bacolod', 'PROVINCIAL'),
(16, 'Davao del Sur', 'PROVINCIAL'),
(17, 'Cagayan de Oro', 'PROVINCIAL'),
(18, 'Camarines Sur', 'PROVINCIAL'),
(19, 'Quezon', 'PROVINCIAL'),
(20, 'Misamis Oriental', 'PROVINCIAL'),
(21, 'Negros Occiental', 'PROVINCIAL');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
`id` int(11) NOT NULL,
  `college_to_apply1` varchar(45) DEFAULT NULL,
  `college_to_apply2` varchar(45) DEFAULT NULL,
  `course_to_take1` varchar(45) DEFAULT NULL,
  `course_to_take2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`id` int(11) NOT NULL,
  `course_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`) VALUES
(15, 'BS in Accountancy'),
(6, 'BS in Civil Engineering'),
(5, 'BS in Computer Engineering'),
(1, 'BS in Computer Science'),
(7, 'BS in Electrical Engineering'),
(4, 'BS in Electronics and Communications Engineer'),
(9, 'BS in Elementary Education'),
(3, 'BS in Information Management'),
(2, 'BS in Information Technology'),
(8, 'BS in Mechanical Engineering'),
(16, 'BS in Pharmacy'),
(10, 'BS in Secondary Education major in Biology'),
(11, 'BS in Secondary Education major in Chemistry'),
(14, 'BS in Secondary Education major in English'),
(13, 'BS in Secondary Education major in Mathematic'),
(12, 'BS in Secondary Education major in Physics');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
`id` int(11) NOT NULL,
  `father_name` varchar(45) DEFAULT NULL,
  `father_occupation` varchar(45) DEFAULT NULL,
  `father_company` varchar(45) DEFAULT NULL,
  `father_contact` int(11) DEFAULT NULL,
  `father_birthdate` date DEFAULT NULL,
  `mother_name` varchar(45) DEFAULT NULL,
  `mother_occupation` varchar(45) DEFAULT NULL,
  `mother_company` varchar(45) DEFAULT NULL,
  `mother_contact` int(11) DEFAULT NULL,
  `mother_birthdate` date DEFAULT NULL,
  `guardian_name` varchar(45) DEFAULT NULL,
  `guardian_occupation` varchar(45) DEFAULT NULL,
  `guardian_company` varchar(45) DEFAULT NULL,
  `guardian_contact` int(11) DEFAULT NULL,
  `guardian_birthdate` date DEFAULT NULL,
  `sibling` varchar(45) DEFAULT NULL,
  `household_income` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fileserver`
--

CREATE TABLE IF NOT EXISTS `fileserver` (
`id` int(11) NOT NULL,
  `file_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fileserver`
--

INSERT INTO `fileserver` (`id`, `file_type`) VALUES
(1, 'form138'),
(2, 'certificate'),
(3, 'taxreturn');

-- --------------------------------------------------------

--
-- Table structure for table `household_checklist`
--

CREATE TABLE IF NOT EXISTS `household_checklist` (
`id` int(11) NOT NULL,
  `applicant_name` int(11) DEFAULT NULL,
  `address` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
`id` int(11) NOT NULL,
  `org_name` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
`id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `house_num1` varchar(6) DEFAULT NULL,
  `st_add1` varchar(45) DEFAULT NULL,
  `brgy_add1` varchar(45) DEFAULT NULL,
  `city_add1` varchar(45) DEFAULT NULL,
  `house_num2` varchar(6) DEFAULT NULL,
  `st_add2` varchar(45) DEFAULT NULL,
  `brgy_add2` varchar(45) DEFAULT NULL,
  `city_add2` varchar(45) DEFAULT NULL,
  `telno` int(7) DEFAULT NULL,
  `email_add` varchar(45) DEFAULT NULL,
  `celno` int(11) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `status` enum('Single','Married','Widowed') DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `birthplace` varchar(45) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `weight` int(2) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE IF NOT EXISTS `phase` (
`id` int(11) NOT NULL,
  `applicant` int(11) DEFAULT NULL,
  `grade_screening` enum('Passed','Failed') DEFAULT NULL,
  `screening_feedback` mediumtext,
  `exam` enum('Passed','Failed') DEFAULT NULL,
  `interview` enum('Passed','Failed') DEFAULT NULL,
  `interview_feedback` mediumtext,
  `checklist` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `status` enum('APPROVED','DISQUALIFIED') DEFAULT NULL,
  `remarks` mediumtext,
  `approved_by` varchar(45) DEFAULT NULL,
  `school_attending` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
`id` int(11) NOT NULL,
  `school_name` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school_name`, `location`) VALUES
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
(14, 'Ateneo de Davao University', 'PROVINCIAL'),
(15, 'Ateneo de Naga', 'PROVINCIAL'),
(16, 'Baliuag University', 'PROVINCIAL'),
(17, 'Batangas State University - Lipa', 'PROVINCIAL'),
(18, 'Batangas State University - Main-Nasugbu', 'PROVINCIAL'),
(19, 'Bulacan State University', 'PROVINCIAL'),
(20, 'Cagayan Capitol College', 'PROVINCIAL'),
(21, 'Cavite State Unversity', 'PROVINCIAL'),
(22, 'Cebu Institute of Technology', 'PROVINCIAL'),
(23, 'Cebu Normal University', 'PROVINCIAL'),
(24, 'Central Philippine University', 'PROVINCIAL'),
(25, 'Colegio San Agustin - Bacolod', 'PROVINCIAL'),
(26, 'De La Salle Dasmariñas', 'PROVINCIAL'),
(27, 'De La Salle Lipa', 'PROVINCIAL'),
(28, 'First Asia Institute of Technology and Humani', 'PROVINCIAL'),
(29, 'Holy Angel University', 'PROVINCIAL'),
(30, 'La Consolacion College - Biñan', 'PROVINCIAL'),
(31, 'Laguna College of Business & Arts - Calamba', 'PROVINCIAL'),
(32, 'Liceo de Cagayan', 'PROVINCIAL'),
(33, 'Lipa City Colleges', 'PROVINCIAL'),
(34, 'Lyceum Northern Luzon', 'PROVINCIAL'),
(35, 'Lyceum Northwestern', 'PROVINCIAL'),
(36, 'Manuel Enverga University Foundation', 'PROVINCIAL'),
(37, 'Meycauayan College', 'PROVINCIAL'),
(38, 'Naga College Foundation', 'PROVINCIAL'),
(39, 'National College of Science and Technology', 'PROVINCIAL'),
(40, 'Pangasinan State University', 'PROVINCIAL'),
(41, 'Philippine Women''s College - Davao', 'PROVINCIAL'),
(42, 'Rogationist College', 'PROVINCIAL'),
(43, 'San Sebastian College - Recoletos-Cavite', 'PROVINCIAL'),
(44, 'Southern Luzon State University', 'PROVINCIAL'),
(45, 'St. Louis University - Baguio', 'PROVINCIAL'),
(46, 'St. Michael''s College of Laguna', 'PROVINCIAL'),
(47, 'Technological University of the Philippines V', 'PROVINCIAL'),
(48, 'Universidad de Sta. Isabel Naga', 'PROVINCIAL'),
(49, 'University of Assumption', 'PROVINCIAL'),
(50, 'University of Batangas', 'PROVINCIAL'),
(51, 'University of Cebu - Main, Banilad, Lapu-lapu', 'PROVINCIAL'),
(52, 'University of Cordillera', 'PROVINCIAL'),
(53, 'University of Immaculate Concepcion', 'PROVINCIAL'),
(54, 'University of Mindanao', 'PROVINCIAL'),
(55, 'University of Negros Occidental - Recoletos', 'PROVINCIAL'),
(56, 'University of Nueva Caceres Naga', 'PROVINCIAL'),
(57, 'University of Perpetual Help - Biñan', 'PROVINCIAL'),
(58, 'University of Perpetual Help - Calamba', 'PROVINCIAL'),
(59, 'University of Philippines - Baguio', 'PROVINCIAL'),
(60, 'University of San Agustin', 'PROVINCIAL'),
(61, 'University of San Jose Recoletos', 'PROVINCIAL'),
(62, 'University of South Eastern Philippines', 'PROVINCIAL'),
(63, 'University of St. La Salle', 'PROVINCIAL'),
(64, 'University of the Philippines - Los Baños', 'PROVINCIAL'),
(65, 'University of the Philippines - Mindanao', 'PROVINCIAL'),
(66, 'University of the Visayas (UP Vis)', 'PROVINCIAL'),
(67, 'UP Visayas - Cebu College, Lahug', 'PROVINCIAL'),
(68, 'West Visayas State University', 'PROVINCIAL'),
(69, 'Western Institute of Technology', 'PROVINCIAL'),
(70, 'Xavier University', 'PROVINCIAL');

-- --------------------------------------------------------

--
-- Table structure for table `sibling`
--

CREATE TABLE IF NOT EXISTS `sibling` (
`id` int(11) NOT NULL,
  `sibling_name` varchar(45) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `school` varchar(45) DEFAULT NULL,
  `grd_yr` int(2) DEFAULT NULL,
  `employed` enum('Yes','No') DEFAULT NULL,
  `married` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
 ADD PRIMARY KEY (`id`), ADD KEY `location` (`location`), ADD KEY `organization` (`organization`), ADD KEY `position` (`position`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
 ADD PRIMARY KEY (`id`), ADD KEY `personal` (`personal`), ADD KEY `academic` (`academic`), ADD KEY `college` (`college`), ADD KEY `family` (`family`), ADD KEY `fileserver` (`fileserver`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`id`), ADD KEY `location` (`location`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
 ADD PRIMARY KEY (`id`), ADD KEY `college_to_apply1` (`college_to_apply1`), ADD KEY `college_to_apply2` (`college_to_apply2`), ADD KEY `course_to_take1` (`course_to_take1`), ADD KEY `course_to_take2` (`course_to_take2`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`id`), ADD KEY `course_name` (`course_name`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
 ADD PRIMARY KEY (`id`), ADD KEY `sibling` (`sibling`);

--
-- Indexes for table `fileserver`
--
ALTER TABLE `fileserver`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household_checklist`
--
ALTER TABLE `household_checklist`
 ADD PRIMARY KEY (`id`), ADD KEY `applicant_name` (`applicant_name`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
 ADD PRIMARY KEY (`id`), ADD KEY `org_name` (`org_name`), ADD KEY `position` (`position`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
 ADD PRIMARY KEY (`id`), ADD KEY `applicant` (`applicant`), ADD KEY `checklist` (`checklist`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
 ADD PRIMARY KEY (`id`), ADD KEY `school_name` (`school_name`);

--
-- Indexes for table `sibling`
--
ALTER TABLE `sibling`
 ADD PRIMARY KEY (`id`), ADD KEY `sibling_name` (`sibling_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fileserver`
--
ALTER TABLE `fileserver`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `household_checklist`
--
ALTER TABLE `household_checklist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `sibling`
--
ALTER TABLE `sibling`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
ADD CONSTRAINT `academic_ibfk_1` FOREIGN KEY (`location`) REFERENCES `area` (`location`) ON UPDATE CASCADE,
ADD CONSTRAINT `academic_ibfk_2` FOREIGN KEY (`position`) REFERENCES `organization` (`position`) ON UPDATE CASCADE,
ADD CONSTRAINT `academic_ibfk_3` FOREIGN KEY (`organization`) REFERENCES `organization` (`org_name`) ON UPDATE CASCADE;

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`personal`) REFERENCES `personal` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `applicant_ibfk_2` FOREIGN KEY (`academic`) REFERENCES `academic` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `applicant_ibfk_3` FOREIGN KEY (`college`) REFERENCES `college` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `applicant_ibfk_4` FOREIGN KEY (`family`) REFERENCES `family` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `applicant_ibfk_5` FOREIGN KEY (`fileserver`) REFERENCES `fileserver` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `college`
--
ALTER TABLE `college`
ADD CONSTRAINT `college_ibfk_1` FOREIGN KEY (`college_to_apply1`) REFERENCES `school` (`school_name`) ON UPDATE CASCADE,
ADD CONSTRAINT `college_ibfk_2` FOREIGN KEY (`college_to_apply2`) REFERENCES `school` (`school_name`) ON UPDATE CASCADE,
ADD CONSTRAINT `college_ibfk_3` FOREIGN KEY (`course_to_take1`) REFERENCES `course` (`course_name`) ON UPDATE CASCADE,
ADD CONSTRAINT `college_ibfk_4` FOREIGN KEY (`course_to_take2`) REFERENCES `course` (`course_name`) ON UPDATE CASCADE;

--
-- Constraints for table `family`
--
ALTER TABLE `family`
ADD CONSTRAINT `family_ibfk_1` FOREIGN KEY (`sibling`) REFERENCES `sibling` (`sibling_name`) ON UPDATE CASCADE;

--
-- Constraints for table `household_checklist`
--
ALTER TABLE `household_checklist`
ADD CONSTRAINT `household_checklist_ibfk_1` FOREIGN KEY (`applicant_name`) REFERENCES `personal` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `phase`
--
ALTER TABLE `phase`
ADD CONSTRAINT `phase_ibfk_1` FOREIGN KEY (`applicant`) REFERENCES `applicant` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `phase_ibfk_2` FOREIGN KEY (`checklist`) REFERENCES `household_checklist` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
