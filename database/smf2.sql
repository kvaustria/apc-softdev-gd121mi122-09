-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2015 at 03:23 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
  `Public_high_school_graduating_from` varchar(100) NOT NULL,
  `complete_school_address` varchar(300) NOT NULL,
  `principal_fullname` varchar(45) NOT NULL,
  `section_no` int(2) NOT NULL,
  `second_grading_grade` double NOT NULL,
  `third_grading_grade` double NOT NULL,
  `high_school_gpa` double NOT NULL,
  `organization` mediumtext NOT NULL,
  `position_held` mediumtext NOT NULL,
`academic_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`Public_high_school_graduating_from`, `complete_school_address`, `principal_fullname`, `section_no`, `second_grading_grade`, `third_grading_grade`, `high_school_gpa`, `organization`, `position_held`, `academic_id`) VALUES
('pasay science hs', 'pasay', 'leslie samonte', 1, 0, 0, 98.75, 'math club', 'president', 1),
('Public High School 1', 'Mandaluyong City', 'Leslie Samonte', 2, 90.35, 89.97, 92.75, 'Parish Involvement', 'member', 2),
('Public High School 2', 'Taguig City', 'Hannah Bangibang', 5, 88.65, 89.03, 89.39, 'Parish involvement', 'Member', 3),
('Public High School 3', 'Quezon City', 'Virgielyn Salonga', 2, 92.57, 93.76, 93.45, 'Parish involvement', 'member', 4),
('Public High School 4', 'Mandaluyong City', 'Leslie Samonte', 1, 92.57, 89.97, 91.15, 'Parish involvment', 'member', 5),
('Public High School 5', 'Tarlac City', 'Hannah Bangibang', 2, 95.75, 96.86, 95.39, 'Parish involvement', 'member', 6);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
`applicant_id` int(11) NOT NULL,
  `applicant_personal_id` int(11) NOT NULL,
  `applicant_college_id` int(11) NOT NULL,
  `applicant_academic_id` int(11) NOT NULL,
  `applicant_family_id` int(11) NOT NULL,
  `status` enum('Pending','Approved','Denied','') NOT NULL,
  `test_result` text,
  `final_course` varchar(100) DEFAULT NULL,
  `final_school` varchar(100) DEFAULT NULL,
  `applicant_fileserver_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`applicant_id`, `applicant_personal_id`, `applicant_college_id`, `applicant_academic_id`, `applicant_family_id`, `status`, `test_result`, `final_course`, `final_school`, `applicant_fileserver_id`) VALUES
(4, 9, 2, 1, 1, 'Pending', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `first_school_plan_to_enroll_in` mediumtext NOT NULL,
  `second_school_plan_to_enroll_in` mediumtext NOT NULL,
  `course_plan_to_take1` enum('BS in Computer Science','BS in Information Technology','BS in Information Management','BS in Electronics and Communications Engineering','BS in Computer Engineering','BS in Civil Engineering','BS in Electrical Engineering','BS in Mechanical Engineering','BS in Elementary Education','BS in Secondary Education major in Biology','BS in Secondary Education major in Chemistry','BS in Secondary Education major in Physics','BS in Secondary Education major in Mathematics','BS in Secondary Education major in English','BS in Accountancy','BS in Pharmacy') NOT NULL,
  `course_plan_to_take2` enum('BS in Computer Science','BS in Information Technology','BS in Information Management','BS in Electronics and Communications Engineering','BS in Computer Engineering','BS in Civil Engineering','BS in Electrical Engineering','BS in Mechanical Engineering','BS in Elementary Education','BS in Secondary Education major in Biology','BS in Secondary Education major in Chemistry','BS in Secondary Education major in Physics','BS in Secondary Education major in Mathematics','BS in Secondary Education major in English','BS in Accountancy','BS in Pharmacy') NOT NULL,
`college_plan_id` int(11) NOT NULL,
  `college_school_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`first_school_plan_to_enroll_in`, `second_school_plan_to_enroll_in`, `course_plan_to_take1`, `course_plan_to_take2`, `college_plan_id`, `college_school_id`) VALUES
('NATIONAL UNIVERSITY', '', 'BS in Computer Science', 'BS in Civil Engineering', 1, 0),
('la salle\r\napc\r\nnu', '', 'BS in Computer Science', 'BS in Information Management', 2, 0),
('East Asia College', 'Far Eastern University', 'BS in Electronics and Communications Engineering', 'BS in Computer Science', 3, 0),
('Far Eastern University', 'Jose Rizal University', 'BS in Computer Science', 'BS in Electronics and Communications Engineering', 4, 0),
('Cebu Normal University', 'Cebu Institute of Technology', 'BS in Civil Engineering', 'BS in Electrical Engineering', 5, 0),
('Asia Pacific College', 'University of the East - Manila', 'BS in Accountancy', 'BS in Computer Science', 6, 0),
('Pamantasan ng Lungsod ng Marikina', ' Philippine Normal University', 'BS in Computer Engineering', 'BS in Elementary Education', 7, 0),
('University of the Philippines - Diliman', 'Asia Pacific College', 'BS in Accountancy', 'BS in Computer Science', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
`fam_background_id` int(11) NOT NULL,
  `name_of_father` varchar(45) NOT NULL,
  `father_occupation` varchar(45) NOT NULL,
  `father_company_address` mediumtext NOT NULL,
  `father_phonenum` int(11) NOT NULL,
  `father_birthdate` date NOT NULL,
  `name_of_mother` varchar(45) NOT NULL,
  `mother_occupation` varchar(45) NOT NULL,
  `mother_company_address` mediumtext NOT NULL,
  `mother_phonenum` int(11) NOT NULL,
  `mother_birthdate` date NOT NULL,
  `sibling1_name` varchar(45) DEFAULT NULL,
  `sibling1_age` int(2) DEFAULT NULL,
  `sibling1_school` varchar(100) DEFAULT NULL,
  `sibling1_grade_or_year` int(11) DEFAULT NULL,
  `sibling1_employed` enum('Yes','No') DEFAULT NULL,
  `sibling1_married` enum('Yes','No') DEFAULT NULL,
  `sibling2_name` varchar(40) DEFAULT NULL,
  `sibling2_age` int(2) DEFAULT NULL,
  `sibling2_school` varchar(100) DEFAULT NULL,
  `sibling2_grade_or_year` int(11) DEFAULT NULL,
  `sibling2_employed` enum('Yes','No') DEFAULT NULL,
  `sibling2_married` enum('Yes','No') DEFAULT NULL,
  `income_per_year` decimal(10,0) NOT NULL,
  `income_per_year_in_words` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`fam_background_id`, `name_of_father`, `father_occupation`, `father_company_address`, `father_phonenum`, `father_birthdate`, `name_of_mother`, `mother_occupation`, `mother_company_address`, `mother_phonenum`, `mother_birthdate`, `sibling1_name`, `sibling1_age`, `sibling1_school`, `sibling1_grade_or_year`, `sibling1_employed`, `sibling1_married`, `sibling2_name`, `sibling2_age`, `sibling2_school`, `sibling2_grade_or_year`, `sibling2_employed`, `sibling2_married`, `income_per_year`, `income_per_year_in_words`) VALUES
(1, 'dadi', 'ghjkl', 'fhjkl', 1234567, '0000-00-00', 'fghjkl', 'ghjkl', 'ghjkl', 567890, '0000-00-00', '', NULL, '', NULL, '', '', '', NULL, '', NULL, '', '', '3456789', 'dfghjkl'),
(2, 'Father1', 'Employee', 'Mandaluyong City', 123456789, '1964-03-24', 'Mother1', 'Employee', 'Mandaluyong City', 987654321, '1969-07-07', 'Sibling1', 23, '', NULL, 'Yes', 'Yes', 'Sibling2', 18, 'Asia Pacific College', 1, 'No', 'No', '75000', 'Seventy five thousand'),
(3, 'Father2', 'Employee', 'Taguig City', 827426329, '1955-06-03', 'Mother2', 'Employee', 'Taguig City', 56789034, '1965-12-03', '', NULL, '', NULL, '', '', '', NULL, '', NULL, '', '', '80000', 'Eighty thousand'),
(4, 'Father3', 'Employee', 'Quezon City', 9273482, '1960-10-11', 'Mother3', 'Employee', 'Quezon City', 2147483647, '1960-08-23', 'Sibling1', 23, '', NULL, 'Yes', 'No', 'Sibling2', 28, '', NULL, 'Yes', 'Yes', '100000', 'One hundred thousand'),
(5, 'Father4', 'Employee', 'Manadaluyong City', 1234567, '1974-07-12', 'Mother1', 'Employee', 'Mandaluyong City', 56789034, '1970-10-23', '', NULL, '', NULL, '', '', '', NULL, '', NULL, '', '', '140000', 'One hundred forty thousand'),
(6, 'Father5', 'Employee', 'Tarlac City', 3434114, '2015-08-13', 'Mother5', 'Employee', 'Tarlac City', 567890876, '2015-08-27', '', NULL, '', NULL, '', '', '', NULL, '', NULL, '', '', '145000', 'One hundred forty five thousand');

-- --------------------------------------------------------

--
-- Table structure for table `fileserver`
--

CREATE TABLE IF NOT EXISTS `fileserver` (
`fileserver_id` int(11) NOT NULL,
  `f138` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `certificate` varchar(200) NOT NULL,
  `photo1` varchar(200) NOT NULL,
  `taxreturn` varchar(200) NOT NULL,
  `photo2` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fileserver`
--

INSERT INTO `fileserver` (`fileserver_id`, `f138`, `photo`, `certificate`, `photo1`, `taxreturn`, `photo2`) VALUES
(1, 'Asia Pacific College', '', '', '', '', ''),
(2, 'Juan dela Cruz, Torres High School', '', 'Juan dela Cruz, National University', '', 'Juan dela Cruz - Tax Return', ''),
(3, 'Juan dela Cruz, Torres High School', '', 'Juan dela Cruz, National University', '', 'Juan dela Cruz - Tax Return', ''),
(4, 'Mark Santos, Pio National High School', '', 'Mark Santos, Asia Pacific College', '', 'Mark Santos - Tax Return', ''),
(5, 'Jem Inid, Pio National High School', '', 'Jem Inid, Ateneo de Naga', '', 'Jem Inid - Tax Return', ''),
(6, 'Rizza Bisbal, Pitogo High School', '', 'Rizza Bisbal, Ateneo de Davao University', '', 'Rizza Bisbal - Tax Return', ''),
(7, 'Rizza Bisbal, Pitogo High School', '', 'Rizza Bisbal, Ateneo de Davao University', '', 'Rizza Bisbal - Tax Return', ''),
(8, 'Name, Public High School', '', 'Name, St. Louis University', '', 'Name - Tax Return', ''),
(9, 'Name, Public High School', '', 'Name, St. Louis University', '', 'Name - Tax Return', ''),
(10, 'Name, Public High School', '', 'Name, St. Louis University', '', 'Name - Tax Return', ''),
(11, 'Name, Public High School', '', 'Name, St. Louis University', '', 'Name - Tax Return', ''),
(12, 'Virgielyn Salonga, Public High School', '', 'Virgielyn Salonga, Far Eastern University', '', 'Virgielyn Salonga, Tax Return', ''),
(13, 'Adrienne Paul Corpuz, Public High School 2', '', 'Adrienne Paul Corpuz, Cebu Normal University', '', 'Adrienne Paul Corpuz, Tax Return', ''),
(14, 'Adrienne Paul Corpuz, Public High School 2', '', 'Adrienne Paul Corpuz, Cebu Normal University', '', 'Adrienne Paul Corpuz, Tax Return', ''),
(15, 'Armel Joan Mendoza, Public High School 3', '', 'Armel Joan Mendoza, Asia Pacific College', '', 'Armel Joan Mendoza, Tax Return', ''),
(16, 'Alecza Rose Arcos, Public High School 4', '', 'Alecza Rose Arcos, University of the East - Manila', '', 'Alecza Rose Arcos - Tax Return', ''),
(17, 'Maica Janique Cube, Public High School 5', '', 'Maica Janique Cube, Asia Pacific College', '', 'Maica Janique Cube - Tax Return', '');

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
('m000000_000000_base', 1438250032),
('m130524_201442_init', 1438250036);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `city_address` varchar(300) NOT NULL,
  `cellphone_no` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(2) NOT NULL,
  `status` enum('Single','Married','Separated','Widowed') NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `place_of_birth` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `weight` decimal(10,0) NOT NULL,
  `religion` varchar(30) NOT NULL,
`personal_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`last_name`, `first_name`, `middle_name`, `city_address`, `cellphone_no`, `date_of_birth`, `age`, `status`, `sex`, `place_of_birth`, `nationality`, `height`, `weight`, `religion`, `personal_id`) VALUES
('Payongayong', 'Lei Anne', 'Rumbines', '3646 Oton St. Pinagkaisahan Makati City', 915775966, '0000-00-00', 19, 'Single', 'Female', 'Makati City', 'Filipino', '5', '105', 'Catholic', 2),
('Bisbal', 'Ruby Elizabeth', 'Purificacion', 'AB128 Lapu lapu St., Galeria de Magallanes, Magallanes Village, Makati City', 2147483647, '0000-00-00', 21, 'Single', 'Female', 'Quezon City', 'Filipino', '157', '99', 'Born Again Christian', 3),
('Sample', 'Sample', 'Sample', 'Sample', 12323, '0000-00-00', 22, 'Single', 'Female', 'Quezon City', 'Filipino', '157', '99', 'Catholic', 5),
('Sample', 'Sample', 'Sample', 'asasfasf', 2147483647, '0000-00-00', 21, 'Married', 'Female', 'Quezon City', 'Filipino', '157', '99', 'Catholic', 6),
('Austria', 'Kevin Matthew', 'Villanueva', '18 Garcia St., Montevilla, Sun Valley, Paranaque City', 2147483647, '1991-11-07', 23, 'Single', 'Male', 'Manila', 'Filipino', '168', '160', 'Catholic', 7),
('sample3', 'sample3', 'sample3', 'sample3', 2131234124, '2015-08-20', 23, 'Single', 'Male', 'Quezon City', 'Filipino', '168', '99', 'Catholic', 8),
('Bangibang', 'Hannah', 'Keme', 'Pasay', 2147483647, '2015-08-22', 19, 'Single', 'Female', 'pasay', 'filipino', '157', '74', 'Catholic', 9),
('Salonga', 'Virgielyn', '', 'Sunshine City 100 Plaza, Mandaluyong City', 123456789, '1996-03-03', 19, 'Single', 'Female', 'Makati City', 'Filipino', '159', '110', 'Catholic', 10),
('Corpuz', 'Adrienne Paul', 'Santos', 'Taguig City', 5678910, '1995-04-19', 19, 'Single', 'Male', 'Taguig City', 'Filipino', '168', '160', 'Born Again Christian', 11),
('Mendoza', 'Armel Joan', '', 'Quezon City', 234573287, '1990-10-11', 25, 'Single', 'Female', 'Quezon City', 'Filipino', '150', '97', 'Catholic', 12),
('Arcos', 'Alecza Rose', 'Corpuz', '18 Garcia St., Montevilla, Sun Valley, Paranaque City', 2147483647, '1995-07-22', 20, 'Single', 'Female', 'Mandaluyong City', 'Filipino', '150', '74', 'Catholic', 13),
('Cube', 'Maica Janique', 'Miguel', 'Tarlac City', 2147483647, '1995-07-17', 20, 'Single', 'Female', 'Tarlac City', 'Filipino', '150', '110', 'Catholic', 14);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
`schools_id` int(11) NOT NULL,
  `provincial` enum('Angeles University Foundation','Ateneo de Naga','Ateneo de Davao University','Baliuag University','Batangas State University - Main-Nasugbu','Batangas State University - Lipa','Bulacan State University','Cagayan Capitol College','Cavite State Unversity','Cebu Institute of Technology','Cebu Normal University','Central Philippine University','Colegio San Agustin - Bacolod','De La Salle Dasmariñas','De La Salle Lipa','First Asia Institute of Technology and Humanities','Holy Angel University','La Consolacion College - Biñan','Laguna College of Business & Arts - Calamba','Liceo de Cagayan','Lipa City Colleges','Lyceum Northern Luzon','Lyceum Northwestern','Manuel Enverga University Foundation','Meycauayan College','Naga College Foundation','National College of Science and Technology','Pangasinan State University','Philippine Women''s College - Davao','Rogationist College','San Sebastian College - Recoletos-Cavite','Southern Luzon State University','St. Louis University','St. Michael''s College of Laguna','Technological University of the Philippines Visayas','Universidad de Sta. Isabel Naga','University of Assumption','University of Batangas','University of Cebu - Main, Banilad, Lapu-lapu and Mandaue','University of Cordillera','University of Mindanao','University of Negros Occidental - Recoletos','University of Nueva Caceres Naga','University of Perpetual Help - Biñan','University of Perpetual Help - Calamba','University of San Agustin','University of San Carlos','University of San Jose Recoletos','University of South Eastern Philippines','University of St. La Salle','University of the Philippines - Baguio','University of the Philippines - Los Baños','University of the Philippines - Mindanao','University of the Visayas (UP Vis)','UP Visayas - Cebu College, Lahug','Western Institute of Technology','West Visayas State University','Xavier University') DEFAULT NULL,
  `ncr` enum('Asia Pacific College','East Asia College','National University','Far Eastern University','Jose Rizal University','Pamantasan ng Lungsod ng Marikina','Pamantasan ng Lungsod ng Maynila',' Philippine Normal University','Philippine School of Business Administration','University of the East - Caloocan','University of the East - Manila','University of the Philippines - Diliman') DEFAULT NULL
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'e58q7WtePHOhs53hlBGNJ7DVyNbP3Atm', '$2y$13$Ehd6JBktAjd/8fg6lTaOHOgXG9k.ea13hDYj6eQksbnqQBEHQsl3a', NULL, 'admin@gmail.com', 10, 1438250218, 1438250218),
(2, 'rpbisbal', 'zKKx7aMO7njwigiQPKAQcp9t2jyya5Vv', '$2y$13$QW5EiVq1peFIII/EfBJd9.0GWtMbZ.Bl5gcwhdwOCt/KD3328WIhO', NULL, 'rizzabisbal@gmail.com', 10, 1439345749, 1439345749),
(3, 'applicant1', '8OFzxz00N5FB4ogMPZ8vHaM8ojh0O-dc', '$2y$13$4hpAFSXHU6u6mJCjBgfUqORk1N/LPensUEg2XR8jQIvKlGH3IgG4K', NULL, 'applicant1@gmail.com', 10, 1439425546, 1439425546),
(4, 'applicant2', 'xKjCAWThoOGfVJlDRVCS3Cjmp9deeIat', '$2y$13$vdQUKkhVhMLvx4TJRPhq3uXD3iT0jbVaDZ9aNd5guhAr6APBITYGq', NULL, 'applicant2@gmail.com', 10, 1439426552, 1439426552),
(5, 'applicant3', 'JCLXnYwRc4M1PevEiJLx-2MUE7Sz6B3S', '$2y$13$3kkIULMeipO.gAy7LgIf/e8YdWIFqSl2E/kH05Me0hnPghHILoy.S', NULL, 'applicant3@gmail.com', 10, 1439427136, 1439427136),
(6, 'applicant4', 'G0P-vTifc77sdqTu_9169255j6f5J_W0', '$2y$13$V59WedfjPlF85qQwkaZIEu266RQpAU7ay1kbVmfbs2WCr/SUawKg.', NULL, 'applicant$4@gmail.com', 10, 1439427747, 1439427747),
(7, 'applicant5', 'X9iAw-fva9i9X_lyRuWheI3l26F1ykkB', '$2y$13$q3cJ9t/35JCiOwr7Ch8W2uOmnJAKvGfMeTi6F3esy/Hjj2wrTSogq', NULL, 'applicant5@gmail.com', 10, 1439428022, 1439428022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
 ADD PRIMARY KEY (`academic_id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
 ADD PRIMARY KEY (`applicant_id`), ADD KEY `applicant_personal_id` (`applicant_personal_id`), ADD KEY `applicant_college_id` (`applicant_college_id`), ADD KEY `applicant_academic_id` (`applicant_academic_id`), ADD KEY `applicant_family_id` (`applicant_family_id`), ADD KEY `applicant_fileserver_id` (`applicant_fileserver_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
 ADD PRIMARY KEY (`college_plan_id`), ADD KEY `college_school_id` (`college_school_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
 ADD PRIMARY KEY (`fam_background_id`);

--
-- Indexes for table `fileserver`
--
ALTER TABLE `fileserver`
 ADD PRIMARY KEY (`fileserver_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
 ADD PRIMARY KEY (`schools_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
MODIFY `academic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
MODIFY `college_plan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
MODIFY `fam_background_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fileserver`
--
ALTER TABLE `fileserver`
MODIFY `fileserver_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
MODIFY `schools_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`applicant_academic_id`) REFERENCES `academic` (`academic_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `applicants_ibfk_2` FOREIGN KEY (`applicant_family_id`) REFERENCES `family` (`fam_background_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `applicants_ibfk_3` FOREIGN KEY (`applicant_personal_id`) REFERENCES `personal` (`personal_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `applicants_ibfk_4` FOREIGN KEY (`applicant_college_id`) REFERENCES `college` (`college_plan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
ADD CONSTRAINT `schools_ibfk_1` FOREIGN KEY (`schools_id`) REFERENCES `college` (`college_school_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
