-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2022 at 01:42 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdt groupasm`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `DoctorID` varchar(50) NOT NULL,
  `LoginID` varchar(50) NOT NULL,
  `DoctorName` varchar(255) NOT NULL,
  `DoctorAge` int(11) NOT NULL,
  `DoctorIC` int(11) NOT NULL,
  `DoctorEmailAddress` varchar(100) NOT NULL,
  `DoctorPassword` varchar(50) NOT NULL,
  `SpecialtyName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  PRIMARY KEY (`DoctorID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `doctorreceiveappointment`
--

DROP TABLE IF EXISTS `doctorreceiveappointment`;
CREATE TABLE IF NOT EXISTS `doctorreceiveappointment` (
  `DoctorAppointmentID` varchar(100) NOT NULL,
  `AppointmentID` varchar(100) NOT NULL,
  `AppointedTime` varchar(20) NOT NULL,
  `DoctorID` varchar(50) NOT NULL,
  `AcceptOrDecline` varchar(20) NOT NULL,
  PRIMARY KEY (`DoctorAppointmentID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `logincredential`
--

DROP TABLE IF EXISTS `logincredential`;
CREATE TABLE IF NOT EXISTS `logincredential` (
  `LoginID` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` int(11) NOT NULL,
  PRIMARY KEY (`LoginID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `PatID` varchar(50) NOT NULL,
  `LoginID` varchar(50) NOT NULL,
  `PatFullName` varchar(255) NOT NULL,
  `PatAge` int(11) NOT NULL,
  `PatGender` varchar(5) NOT NULL,
  `PatIC` int(11) NOT NULL,
  `PatPhoneNumber` varchar(50) NOT NULL,
  `PatEmailAddress` varchar(255) NOT NULL,
  `PatPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`PatID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `patientmakeappointmentdetails`
--

DROP TABLE IF EXISTS `patientmakeappointmentdetails`;
CREATE TABLE IF NOT EXISTS `patientmakeappointmentdetails` (
  `Hospital` varchar(100) NOT NULL,
  `DoctorName` varchar(255) NOT NULL,
  `PreferredSpecialty` varchar(50) NOT NULL,
  `MedicalConcern` varchar(255) NOT NULL,
  `DataChoice` date NOT NULL,
  `TimeChoice` varchar(20) NOT NULL,
  `PatID` varchar(50) NOT NULL,
  `ApptStatus` varchar(50) NOT NULL,
  `AppointmentID` varchar(100) NOT NULL,
  PRIMARY KEY (`AppointmentID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
