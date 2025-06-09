-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2024 at 07:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicQualification`
--

CREATE TABLE `academicQualification` (
  `aqId` int(11) NOT NULL,
  `educationLevel` varchar(80) NOT NULL,
  `instituteName` varchar(150) NOT NULL,
  `programName` varchar(90) NOT NULL,
  `startYear` year(4) NOT NULL,
  `endYear` year(4) NOT NULL,
  `gpa` char(4) NOT NULL,
  `certificate` varchar(80) NOT NULL,
  `applicantEmail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academicQualification`
--

INSERT INTO `academicQualification` (`aqId`, `educationLevel`, `instituteName`, `programName`, `startYear`, `endYear`, `gpa`, `certificate`, `applicantEmail`) VALUES
(1, 'Degree', 'Institute of public administration', 'BAGES', '2013', '2019', '3.5', 'a-customised-curve-cv.pdf', 'jumahija@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `appId` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`appId`, `firstName`, `lastName`, `email`, `phoneNumber`) VALUES
(2, 'musaymah', 'hashir', 'musaymahhashir@gmail.com', '+255 778 432 563'),
(3, 'juma', 'hija', 'jumahija@gmail.com', '+255 678 432 563');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `applicantEmail` varchar(45) NOT NULL,
  `appStatus` varchar(15) NOT NULL DEFAULT 'On progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `postId`, `applicantEmail`, `appStatus`) VALUES
(1, 6, 'musaymahhashir@gmail.com', 'On progress'),
(2, 4, 'musaymahhashir@gmail.com', 'On progress'),
(3, 6, 'jumahija@gmail.com', 'On progress');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `cvId` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `cv` varchar(45) NOT NULL,
  `applicantEmail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cvId`, `category`, `cv`, `applicantEmail`) VALUES
(1, 'Applicantion Letter', 'a-customised-curve-cv.pdf', 'jumahija@gmail.com'),
(2, 'CV', 'a-customised-curve-cv.pdf', 'jumahija@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Declaration`
--

CREATE TABLE `Declaration` (
  `deId` int(11) NOT NULL,
  `signature` varchar(15) NOT NULL DEFAULT 'Declare',
  `applicantEmail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Declaration`
--

INSERT INTO `Declaration` (`deId`, `signature`, `applicantEmail`) VALUES
(1, 'Declare', 'jumahija@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `Lid` int(11) NOT NULL,
  `speak` varchar(15) NOT NULL,
  `lRead` varchar(15) NOT NULL,
  `applicantEmail` varchar(45) NOT NULL,
  `lWrite` varchar(15) NOT NULL,
  `language` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`Lid`, `speak`, `lRead`, `applicantEmail`, `lWrite`, `language`) VALUES
(3, 'Very good', 'Very good', 'jumahija@gmail.com', 'Very good', 'Swahili'),
(4, 'Good', 'Good', 'jumahija@gmail.com', 'Very good', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `officeName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `email`, `firstName`, `lastName`, `phoneNumber`, `officeName`) VALUES
(1, 'salmarashid@gmail.com', 'salma', 'rashid', '255 788 442 996', 'Zanzibar regulatory authority (ZRA)'),
(2, 'hassanmuselem@gmail.com', 'hassan', 'muselem', '255 788 442 880', 'Institute of public administration (IPA)'),
(3, 'habibarashid@gmail.com', 'habiba', 'rashid', '255 788 442 996', 'Zanzibar utility regulatory authority (ZURA)'),
(4, 'farhatsaidi@gmail.com', 'farhat', 'saidi', '+255 788 700 110', 'Tanzania railway coparation (TRC)');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `position` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `amount` int(11) NOT NULL,
  `postDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `officeName` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Opening'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `position`, `description`, `amount`, `postDate`, `endDate`, `officeName`, `status`) VALUES
(1, 'LIM ', 'Degree or Diploma s in one of the following fields: Library and records keeping development.', 12, '2024-06-27 19:22:31', '2024-06-28 10:20:25', 'Tanzania railway coparation (TRC)', 'Opening'),
(2, 'Civil engineer ', 'Degree or Diploma or certificate in one of the following fields: Civil engineer', 14, '2024-06-27 19:23:48', '2024-07-06 00:00:00', 'Tanzania railway coparation (TRC)', 'Opening'),
(3, 'ICT officers', 'Degree or Diploma or certificate in one of the following fields: Computer Science, Electronic Science, Computer Engineering, Information Technology, Information Systems and Data Science.', 8, '2024-06-27 20:32:41', '2024-08-01 20:10:45', 'Business property and registration agency (BPRA)', 'Opening'),
(4, 'HRM ', 'Description: Degree or Diploma in one of the following fields: Social studies,Human resources Management', 9, '2024-06-27 20:35:19', '2024-07-31 00:00:00', 'Business property and registration agency (BPRA)', 'Opening'),
(5, 'Civil enginer', 'Degree or Diploma or certificate in one of the following fields: Civil engineer', 6, '2024-08-14 20:26:37', '2024-08-30 00:00:00', 'Zanzibar utility regulatory authority (ZURA)', 'Opening'),
(6, 'ASSISTANT LECTURER IN ACCOUNTING AND TRANSPORT FINANCE', 'Degree  in one of the following fields: accounting and finance, business administration', 2, '2024-08-14 20:30:08', '2024-08-28 00:00:00', 'Institute of public administration (IPA)', 'Opening');

-- --------------------------------------------------------

--
-- Table structure for table `professionalQualification`
--

CREATE TABLE `professionalQualification` (
  `pqId` int(11) NOT NULL,
  `instituteName` varchar(80) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `certificate` varchar(45) NOT NULL,
  `applicantEmail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professionalQualification`
--

INSERT INTO `professionalQualification` (`pqId`, `instituteName`, `courseName`, `startDate`, `endDate`, `certificate`, `applicantEmail`) VALUES
(2, 'The state university of  zanzibar', 'Advance python programing ', '2024-06-04', '2024-08-08', 'a-customised-curve-cv.pdf', 'jumahija@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `referee`
--

CREATE TABLE `referee` (
  `reId` int(11) NOT NULL,
  `organizationName` varchar(45) NOT NULL,
  `phoneNumber` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `applicantEmail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referee`
--

INSERT INTO `referee` (`reId`, `organizationName`, `phoneNumber`, `email`, `fullName`, `applicantEmail`) VALUES
(1, 'The state university of zanzibar', '+255 678 432 563', 'suleiman@gmail.com', 'khalid mussa suleiman ', 'jumahija@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `role`) VALUES
('Admin', '$2y$10$H6VkCLjzvi5FWHIqt812UuvUQ8/7Dmg413N40sHeYzjLuMgGrEPDq', 'ADMIN'),
('farhatsaidi@gmail.com', '$2y$10$Dp5DaI.0TNF.kOhKVi9ameR3uyzBVye83jw0JgQOHQ5xnKnGoGd1q', 'ORGANIZATION'),
('habibarashid@gmail.com', '$2y$10$serZdqjQq1R1u8sgLxcto.GUGQlM8RNkiLug1wu6pAGzdY.hOIdy6', 'ORGANIZATION'),
('hassanmuselem@gmail.com', '$2y$10$.GIiSHSC9zlLkiIhoQSvXe/TwCDA7VjjISzdzD/N5x0E7byD2am.2', 'ORGANIZATION'),
('jumahija@gmail.com', '$2y$10$gWFDydzdrycrhmqWK5Hmy.ywZhEwAWEM4oz27leYdo3jAk816Cevu', 'APPLICANT'),
('musaymahhashir@gmail.com', '$2y$10$S7DpN7w/7bNCZHpBcV1yBOwSCYXdJDpSjTzGHRQnomViFSWssqVPC', 'APPLICANT'),
('salmarashid@gmail.com', '$2y$10$u7uOKVqr2ZRpcZIHz36a7O3EHcv87dCCuWy91u9VT4Un.j27kg4Dq', 'ORGANIZATION');

-- --------------------------------------------------------

--
-- Table structure for table `workingExperience`
--

CREATE TABLE `workingExperience` (
  `workId` int(11) NOT NULL,
  `organizationName` varchar(150) NOT NULL,
  `supervisorName` varchar(150) NOT NULL,
  `supervisorEmail` varchar(50) NOT NULL,
  `supervisorPhone` varchar(18) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `jobTitle` varchar(150) NOT NULL,
  `applicantEmail` varchar(45) NOT NULL,
  `duty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workingExperience`
--

INSERT INTO `workingExperience` (`workId`, `organizationName`, `supervisorName`, `supervisorEmail`, `supervisorPhone`, `startDate`, `endDate`, `jobTitle`, `applicantEmail`, `duty`) VALUES
(2, 'The state university of zanzibar', 'hija bakari ally', 'hijabakari@gmail.com', '0778 786 786', '2024-07-11', '2024-08-23', 'data entry', 'jumahija@gmail.com', 'data entry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicQualification`
--
ALTER TABLE `academicQualification`
  ADD PRIMARY KEY (`aqId`),
  ADD KEY `applicantEmail` (`applicantEmail`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`appId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postId` (`postId`),
  ADD KEY `applicantEmail` (`applicantEmail`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cvId`),
  ADD KEY `applicantEmail` (`applicantEmail`);

--
-- Indexes for table `Declaration`
--
ALTER TABLE `Declaration`
  ADD PRIMARY KEY (`deId`),
  ADD KEY `applicantEmail` (`applicantEmail`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`Lid`),
  ADD KEY `applicantEmail` (`applicantEmail`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `professionalQualification`
--
ALTER TABLE `professionalQualification`
  ADD PRIMARY KEY (`pqId`),
  ADD KEY `applicantEmail` (`applicantEmail`);

--
-- Indexes for table `referee`
--
ALTER TABLE `referee`
  ADD PRIMARY KEY (`reId`),
  ADD KEY `applicantEmail` (`applicantEmail`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `workingExperience`
--
ALTER TABLE `workingExperience`
  ADD PRIMARY KEY (`workId`),
  ADD KEY `applicantEmail` (`applicantEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicQualification`
--
ALTER TABLE `academicQualification`
  MODIFY `aqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `appId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cvId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Declaration`
--
ALTER TABLE `Declaration`
  MODIFY `deId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `professionalQualification`
--
ALTER TABLE `professionalQualification`
  MODIFY `pqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `referee`
--
ALTER TABLE `referee`
  MODIFY `reId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workingExperience`
--
ALTER TABLE `workingExperience`
  MODIFY `workId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academicQualification`
--
ALTER TABLE `academicQualification`
  ADD CONSTRAINT `academicQualification_ibfk_1` FOREIGN KEY (`applicantEmail`) REFERENCES `applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`applicantEmail`) REFERENCES `applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`applicantEmail`) REFERENCES `applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Declaration`
--
ALTER TABLE `Declaration`
  ADD CONSTRAINT `Declaration_ibfk_1` FOREIGN KEY (`applicantEmail`) REFERENCES `applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `language`
--
ALTER TABLE `language`
  ADD CONSTRAINT `language_ibfk_1` FOREIGN KEY (`applicantEmail`) REFERENCES `applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professionalQualification`
--
ALTER TABLE `professionalQualification`
  ADD CONSTRAINT `professionalQualification_ibfk_1` FOREIGN KEY (`applicantEmail`) REFERENCES `applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `referee`
--
ALTER TABLE `referee`
  ADD CONSTRAINT `referee_ibfk_1` FOREIGN KEY (`applicantEmail`) REFERENCES `applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workingExperience`
--
ALTER TABLE `workingExperience`
  ADD CONSTRAINT `workingExperience_ibfk_1` FOREIGN KEY (`applicantEmail`) REFERENCES `applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
