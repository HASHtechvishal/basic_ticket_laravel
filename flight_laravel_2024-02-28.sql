# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: flight_laravel
# Generation Time: 2024-02-27 21:34:46 +0000
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
  `type` varchar(100) DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `to` varchar(100) DEFAULT NULL,
  `departing` varchar(100) DEFAULT '',
  `returning` varchar(100) DEFAULT NULL,
  `adult` int(100) DEFAULT NULL,
  `child` int(100) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Search_flights` WRITE;
/*!40000 ALTER TABLE `Search_flights` DISABLE KEYS */;

INSERT INTO `Search_flights` (`id`, `user_id`, `type`, `from`, `to`, `departing`, `returning`, `adult`, `child`, `class`, `status`, `updated_at`, `created_at`)
VALUES
	(1,4,'one way','delhi','goa','1111-11-11','1111-11-11',1,0,'Economy class',1,'2024-02-27 21:24:58','2024-02-27 21:24:58');

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



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
