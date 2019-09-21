-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.37 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for doctor
CREATE DATABASE IF NOT EXISTS `doctor` /*!40100 DEFAULT CHARACTER SET cp1257 COLLATE cp1257_lithuanian_ci */;
USE `doctor`;

-- Dumping structure for table doctor.client
CREATE TABLE IF NOT EXISTS `client` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE cp1257_lithuanian_ci DEFAULT NULL,
  `DoctorID` smallint(6) DEFAULT NULL,
  `Status` smallint(6) DEFAULT NULL,
  `Timestamp` timestamp NULL DEFAULT NULL,
  KEY `Index 1` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=cp1257 COLLATE=cp1257_lithuanian_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
