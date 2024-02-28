# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: flight_laravel
# Generation Time: 2024-02-28 18:35:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;

INSERT INTO `admins` (`id`, `username`, `type`, `email`, `password`, `country`, `mobile`, `image`, `status`, `created_at`, `updated_at`)
VALUES
	(3,'vishal arora','admin','vishalarora1087@gmail.com','$2y$10$zCm40A0HiqnmMQdnexXCm.4JVqKN176nejEiagglS1rhduSQg4wm6','+91','+917508050111','vishal arora125.jpg',1,'2024-02-27 17:04:22','2024-02-27 17:04:22'),
	(4,'test','admin','test@gmail.com','$2y$10$wbXbSRtw8aye9ZEjxCffguqX6OVK5t4PBnD.6R.YZV448gTrBOuoW','+91','111111111','test233.jpg',1,'2024-02-27 18:39:03','2024-02-27 18:39:03');

/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table flight_schedules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `flight_schedules`;

CREATE TABLE `flight_schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FlightNumber` varchar(10) NOT NULL,
  `Airline` varchar(50) NOT NULL,
  `DepartureAirport` varchar(50) NOT NULL,
  `DepartureCity` varchar(50) NOT NULL,
  `DepartureTime` datetime NOT NULL,
  `ArrivalAirport` varchar(50) NOT NULL,
  `ArrivalCity` varchar(50) NOT NULL,
  `ArrivalTime` datetime NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `flight_schedules` WRITE;
/*!40000 ALTER TABLE `flight_schedules` DISABLE KEYS */;

INSERT INTO `flight_schedules` (`id`, `FlightNumber`, `Airline`, `DepartureAirport`, `DepartureCity`, `DepartureTime`, `ArrivalAirport`, `ArrivalCity`, `ArrivalTime`, `Price`, `status`)
VALUES
	(1,'SG205','SpiceJet','HYD','Hyderabad','2024-03-02 14:30:00','DEL','Delhi','2024-03-02 17:00:00',180.00,1),
	(2,'6E306','IndiGo','MAA','Chennai','2024-03-02 16:00:00','BOM','Mumbai','2024-03-02 18:30:00',210.00,1),
	(3,'AI105','Air India','DEL','Delhi','2024-03-02 17:30:00','BLR','Bangalore','2024-03-02 20:00:00',240.00,1),
	(4,'SG206','SpiceJet','BOM','Mumbai','2024-03-02 19:00:00','CCU','Kolkata','2024-03-02 21:30:00',190.00,1),
	(5,'6E307','IndiGo','BLR','Bangalore','2024-03-02 21:00:00','DEL','Delhi','2024-03-03 00:30:00',220.00,1),
	(6,'AI106','Air India','BOM','Mumbai','2024-03-03 08:00:00','HYD','Hyderabad','2024-03-03 10:00:00',220.00,1),
	(7,'SG207','SpiceJet','DEL','Delhi','2024-03-03 09:30:00','MAA','Chennai','2024-03-03 12:00:00',180.00,1),
	(8,'6E308','IndiGo','BOM','Mumbai','2024-03-03 11:00:00','PNQ','Pune','2024-03-03 13:15:00',200.00,1),
	(9,'AI107','Air India','HYD','Hyderabad','2024-03-03 12:30:00','BOM','Mumbai','2024-03-03 14:30:00',230.00,1),
	(10,'SG208','SpiceJet','MAA','Chennai','2024-03-03 14:00:00','DEL','Delhi','2024-03-03 16:30:00',190.00,1),
	(12,'SG209','SpiceJet','DEL','Delhi','2024-03-03 17:00:00','COK','Kochi','2024-03-03 19:30:00',200.00,1),
	(13,'6E309','IndiGo','MAA','Chennai','2024-03-03 18:30:00','CCU','Kolkata','2024-03-03 21:00:00',230.00,1),
	(15,'SG210','SpiceJet','COK','Kochi','2024-03-03 21:30:00','DEL','Delhi','2024-03-04 00:00:00',210.00,1),
	(16,'AI110','Air India','DEL','Delhi','2024-03-04 08:30:00','GOI','Goa','2024-03-04 10:30:00',270.00,1),
	(18,'6E310','IndiGo','GOI','Goa','2024-03-04 11:30:00','MAA','Chennai','2024-03-04 14:00:00',240.00,1),
	(19,'AI111','Air India','PNQ','Pune','2024-03-04 13:00:00','DEL','Delhi','2024-03-04 15:00:00',280.00,1),
	(20,'SG212','SpiceJet','CCU','Kolkata','2024-03-04 15:30:00','BOM','Mumbai','2024-03-04 18:00:00',230.00,1),
	(31,'AI112','Air India','HYD','Hyderabad','2024-03-04 16:30:00','COK','Kochi','2024-03-04 18:30:00',290.00,1),
	(32,'SG213','SpiceJet','MAA','Chennai','2024-03-04 18:00:00','GOI','Goa','2024-03-04 20:30:00',240.00,1),
	(33,'6E311','IndiGo','CCU','Kolkata','2024-03-04 19:30:00','DEL','Delhi','2024-03-04 22:00:00',260.00,1),
	(34,'AI113','Air India','BOM','Mumbai','2024-03-04 21:00:00','MAA','Chennai','2024-03-05 00:30:00',300.00,1),
	(36,'AI114','Air India','BOM','Mumbai','2024-03-05 10:30:00','GOI','Goa','2024-03-05 12:30:00',270.00,1),
	(37,'SG215','SpiceJet','DEL','Delhi','2024-03-05 12:00:00','HYD','Hyderabad','2024-03-05 14:30:00',230.00,1),
	(38,'6E312','IndiGo','MAA','Chennai','2024-03-05 13:30:00','PNQ','Pune','2024-03-05 15:45:00',280.00,1),
	(39,'AI115','Air India','PNQ','Pune','2024-03-05 15:00:00','BOM','Mumbai','2024-03-05 17:00:00',290.00,1);

/*!40000 ALTER TABLE `flight_schedules` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table Search_flights
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Search_flights`;

CREATE TABLE `Search_flights` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(50) DEFAULT NULL,
  `flightID` int(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `to` varchar(100) DEFAULT NULL,
  `departing` varchar(100) DEFAULT '',
  `returning` varchar(100) DEFAULT NULL,
  `adult` int(100) DEFAULT NULL,
  `child` int(100) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Search_flights` WRITE;
/*!40000 ALTER TABLE `Search_flights` DISABLE KEYS */;

INSERT INTO `Search_flights` (`id`, `user_id`, `flightID`, `type`, `from`, `to`, `departing`, `returning`, `adult`, `child`, `class`, `price`, `status`, `updated_at`, `created_at`)
VALUES
	(22,3,16,'one way','delhi','goa','1111-11-11',NULL,1,0,'Economy class',NULL,1,'2024-02-28 18:04:48','2024-02-28 18:04:34'),
	(23,3,NULL,'one way','Mumbai','pune','2024-02-15',NULL,1,0,'Economy class',NULL,1,'2024-02-28 18:11:42','2024-02-28 18:11:42');

/*!40000 ALTER TABLE `Search_flights` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `type`, `email`, `password`, `country`, `mobile`, `image`, `status`, `created_at`, `updated_at`)
VALUES
	(3,'kritika','user','kritika@gmail.com','$2y$10$Ib63.6iBpHTR2y.uSaej7.Hw154Qp3OTXWE/bTkSh7YhpBXcOUHqq','+91','7508050111','kritika339.jpg',1,'2024-02-27 17:10:06','2024-02-27 17:10:06'),
	(4,'user','user','user@gmail.com','$2y$10$fj5oHaNSyE.YjM0f.GBWeOZJvvYScrJylRsgjPZWMAiz0OSBw8zjq','+91','123321123432','user229.jpg',1,'2024-02-27 18:06:33','2024-02-27 18:06:33');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



--
-- Dumping routines (PROCEDURE) for database 'flight_laravel'
--
DELIMITER ;;

# Dump of PROCEDURE InsertDummyPassengers
# ------------------------------------------------------------

/*!50003 DROP PROCEDURE IF EXISTS `InsertDummyPassengers` */;;
/*!50003 SET SESSION SQL_MODE="ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION"*/;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `InsertDummyPassengers`()
BEGIN
    DECLARE i INT DEFAULT 1;
    WHILE i <= 100 DO
        INSERT INTO passengers (first_name, last_name, email)
        VALUES (
            (SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 5)),
            (SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 5)),
            CONCAT('passenger', i, '@example.com')
        );
        SET i = i + 1;
    END WHILE;
END */;;

/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;;
DELIMITER ;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
