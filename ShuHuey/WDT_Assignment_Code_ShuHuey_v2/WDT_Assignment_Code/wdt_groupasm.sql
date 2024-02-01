-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2023 at 12:45 AM
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
-- Database: `wdt_groupasm`
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
  `Hospital` varchar(100) NOT NULL,
  PRIMARY KEY (`DoctorID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorID`, `LoginID`, `DoctorName`, `DoctorAge`, `DoctorIC`, `DoctorEmailAddress`, `DoctorPassword`, `SpecialtyName`, `Gender`, `Telephone`, `Hospital`) VALUES
('1', '3', 'Dr. Elizabeth White', 29, 1234, '', '', 'Cardiology', '', '', 'Hospital Klang'),
('2', '4', 'Dr. Chen Ming Hou', 33, 1234, '', '', 'Dermatology', '', '', 'Hospital Klang'),
('3', '5', 'Dr. Leonard Smith', 33, 1234, '', '', 'Physiotherapy', '', '', 'Hospital Klang'),
('4', '6', 'Dr. Azura binti Elias', 33, 1234, '', '', 'Cardiology', '', '', 'Hospital Cheras'),
('5', '7', 'Dr. Maya Morrison', 33, 1234, '', '', 'Dermatology', '', '', 'Hospital Cheras'),
('6', '8', 'Dr. Tan Hou Wei', 33, 1234, '', '', 'Physiotherapy', '', '', 'Hospital Cheras');

-- --------------------------------------------------------

--
-- Table structure for table `doctorreceiveappointment`
--

DROP TABLE IF EXISTS `doctorreceiveappointment`;
CREATE TABLE IF NOT EXISTS `doctorreceiveappointment` (
  `DoctorAppointmentID` int(11) NOT NULL AUTO_INCREMENT,
  `AppointmentID` int(11) NOT NULL,
  `AppointedTime` varchar(20) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `AcceptOrDecline` varchar(20) NOT NULL,
  PRIMARY KEY (`DoctorAppointmentID`),
  KEY `AppointmentID` (`AppointmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `doctorreceiveappointment`
--

INSERT INTO `doctorreceiveappointment` (`DoctorAppointmentID`, `AppointmentID`, `AppointedTime`, `DoctorID`, `AcceptOrDecline`) VALUES
(1, 28, '3pm', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `logincredential`
--

DROP TABLE IF EXISTS `logincredential`;
CREATE TABLE IF NOT EXISTS `logincredential` (
  `LoginID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` int(11) NOT NULL,
  PRIMARY KEY (`LoginID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `logincredential`
--

INSERT INTO `logincredential` (`LoginID`, `Email`, `Password`, `Type`) VALUES
(1, 'ali123@gmail.com', '12345', 0),
(2, 'doctor@gmail.com', '12345', 1),
(4, 'customer@gmail.com', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `PatID` int(11) NOT NULL AUTO_INCREMENT,
  `LoginID` int(11) NOT NULL DEFAULT '1',
  `PatFullName` varchar(255) NOT NULL,
  `PatAge` int(11) NOT NULL,
  `PatGender` varchar(5) NOT NULL,
  `PatIC` varchar(50) NOT NULL,
  `PatPhoneNumber` varchar(50) NOT NULL,
  `PatEmailAddress` varchar(255) NOT NULL,
  `PatPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`PatID`),
  KEY `LoginID` (`LoginID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatID`, `LoginID`, `PatFullName`, `PatAge`, `PatGender`, `PatIC`, `PatPhoneNumber`, `PatEmailAddress`, `PatPassword`) VALUES
(1, 1, 'Ali bin Azman', 75, 'Mr.', '410902132389', '0123456789', 'ali123@gmail.com', 'ali12345'),
(2, 3, 'Sofia binti Kaily', 80, 'Mrs.', '410902132376', '0123456987', 'sofia123@gmail.com', 'sofia12345');

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
  `DateChoice` date NOT NULL,
  `TimeChoice` varchar(20) NOT NULL,
  `PatID` varchar(50) NOT NULL,
  `ApptStatus` varchar(50) NOT NULL DEFAULT 'Pending',
  `AppointmentID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`AppointmentID`),
  KEY `PatID` (`PatID`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `patientmakeappointmentdetails`
--

INSERT INTO `patientmakeappointmentdetails` (`Hospital`, `DoctorName`, `PreferredSpecialty`, `MedicalConcern`, `DateChoice`, `TimeChoice`, `PatID`, `ApptStatus`, `AppointmentID`) VALUES
('Hospital Klang', 'Dr. Elizabeth White', 'Cardiology', 'heart very pain', '2023-02-01', '3pm', '1', 'Successful', 1),
('Hospital Klang', 'Dr. Elizabeth White', 'Cardiology', '', '2023-03-09', '4pm', '1', 'Successful', 2),
('Hospital Klang', 'Dr. Elizabeth White', 'Cardiology', '', '2023-02-08', '4pm', '1', 'Pending', 3),
('Hospital Klang', 'Dr. Elizabeth White', 'Cardiology', '', '2023-02-17', '10am', '1', 'Fail', 4),
('Hospital Klang', 'Dr. Elizabeth White', 'Cardiology', '', '2023-02-10', '4pm', '1', 'Successful', 5),
('Hospital Klang', 'Dr. Elizabeth White', 'Cardiology', '', '2022-12-31', '10am', '1', 'Fail', 6),
('Hospital Klang', 'Dr. Elizabeth White', 'Cardiology', '', '2022-12-31', '10am', '2', 'Fail', 7),
('Hospital Klang', 'Dr. Elizabeth White', 'Cardiology', '', '2023-01-03', '3pm', '1', 'Pending', 28);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
