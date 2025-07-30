-- MySQL dump 10.13  Distrib 8.0.39, for Win64 (x86_64)
--
-- Host: localhost    Database: maqaad
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blogs_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'using-child-safety-seats-1','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(2,'using-child-safety-seats-2','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(3,'using-child-safety-seats-3','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(4,'using-child-safety-seats-4','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(5,'using-child-safety-seats-5','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(6,'using-child-safety-seats-6','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(7,'using-child-safety-seats-7','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(8,'using-child-safety-seats-8','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(9,'using-child-safety-seats-9','استخدام مقاعد الأمان للأطفال','Using Child Safety Seats','يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...','It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3','i:1;',1753786857),('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer','i:1753786857;',1753786857);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isReply` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Gloria Farley','bakevaxep@mailinator.com','Blanditiis quod vel',0,'2025-07-30 00:43:53','2025-07-30 08:02:53'),(2,'Yoshio Olsen','salowed@mailinator.com','Nobis minus et accus',0,'2025-07-30 08:20:28','2025-07-30 08:20:28'),(3,'Yoshio Olsen','salowed@mailinator.com','Nobis minus et accus',0,'2025-07-30 08:20:31','2025-07-30 08:20:31'),(4,'Yoshio Olsen','salowed@mailinator.com','Nobis minus et accus',0,'2025-07-30 08:20:33','2025-07-30 08:20:33'),(5,'Yoshio Olsen','salowed@mailinator.com','Nobis minus et accus',0,'2025-07-30 08:20:34','2025-07-30 08:20:34'),(6,'Yoshio Olsen','salowed@mailinator.com','Nobis minus et accus',0,'2025-07-30 08:20:49','2025-07-30 08:20:49'),(7,'Yoshio Olsen','salowed@mailinator.com','Nobis minus et accus',0,'2025-07-30 08:22:05','2025-07-30 08:22:05'),(8,'Jael James','xave@mailinator.com','Veritatis amet sint',0,'2025-07-30 08:22:10','2025-07-30 08:22:10'),(9,'Margaret Boyer','lizyqy@mailinator.com','In saepe amet sunt',0,'2025-07-30 08:22:29','2025-07-30 08:22:29'),(10,'Russell Grimes','ryturu@mailinator.com','Ut nulla cum laudant',0,'2025-07-30 08:30:58','2025-07-30 08:30:58'),(11,'Russell Grimes','ryturu@mailinator.com','Ut nulla cum laudant',0,'2025-07-30 08:31:08','2025-07-30 08:31:08'),(12,'Russell Grimes','ryturu@mailinator.com','Ut nulla cum laudant',0,'2025-07-30 08:31:10','2025-07-30 08:31:10'),(13,'Fatima Bradley','qamywa@mailinator.com','Quas esse molestiae',0,'2025-07-30 08:31:44','2025-07-30 08:31:44'),(14,'Fatima Bradley','qamywa@mailinator.com','Quas esse molestiae',0,'2025-07-30 08:31:45','2025-07-30 08:31:45'),(15,'Jillian Fischer','jizonihel@mailinator.com','Voluptate voluptatem',0,'2025-07-30 08:32:07','2025-07-30 08:32:07'),(16,'Jillian Fischer','jizonihel@mailinator.com','Voluptate voluptatem',0,'2025-07-30 08:32:09','2025-07-30 08:32:09'),(17,'fdhdfg','ahmed.wael1025@gmail.com','fdgfgdf',0,'2025-07-30 08:32:21','2025-07-30 08:32:21'),(18,'fdhdfg','ahmed.wael1025@gmail.com','fdgfgdf',0,'2025-07-30 08:34:08','2025-07-30 08:34:08'),(19,'لتلت','ahmed.wael1025@gmail.com','التات',0,'2025-07-30 08:34:18','2025-07-30 08:34:18'),(20,'لتلت','ahmed.wael1025@gmail.com','التات',0,'2025-07-30 08:35:55','2025-07-30 08:35:55'),(21,'لتلت','ahmed.wael1025@gmail.com','التات',0,'2025-07-30 08:35:58','2025-07-30 08:35:58'),(22,'Maite Barton','rowygu@mailinator.com','Ipsum et est ea qua',0,'2025-07-30 08:36:13','2025-07-30 08:36:13'),(23,'Hector Ewing','fiqop@mailinator.com','Voluptatem aliquip',0,'2025-07-30 08:37:42','2025-07-30 08:37:42'),(24,'Zachery Davidson','beka@mailinator.com','Nihil elit tempor a',0,'2025-07-30 08:37:59','2025-07-30 08:37:59'),(25,'Ira Berry','juhi@mailinator.com','Dolore quis deleniti',0,'2025-07-30 08:40:39','2025-07-30 08:40:39'),(26,'Brenda Woods','licito@mailinator.com','Possimus eu eos ci',0,'2025-07-30 08:42:05','2025-07-30 08:42:05'),(27,'Bevis Macias','soquqe@mailinator.com','Consequat Quo cillu',0,'2025-07-30 08:42:16','2025-07-30 08:42:16'),(28,'Meredith King','kazydati@mailinator.com','Ea velit ipsum moles',0,'2025-07-30 08:42:39','2025-07-30 08:42:39'),(29,'Jana Hess','sykelaboze@mailinator.com','Dolor cumque volupta',0,'2025-07-30 09:37:31','2025-07-30 09:37:31'),(30,'Kameko Mullins','xufexubo@mailinator.com','Ut adipisicing liber',0,'2025-07-30 09:37:42','2025-07-30 09:37:42');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'مشاركة مَقعد في فعالية ( السلامة المرورية ) المقامة فى جامعة المجمعة للتوعية بأهمية استخدام مَقعد الطفل بالسيارة .','Maqaad participation in the Road Safety event at Majmaah University.','2025-07-29 07:39:39','2025-07-29 07:39:39'),(2,'مشاركة مقعد في معرض السلامة المرورية بتنظيم أرامكو – نوفمبر 2024','Maqaad in Aramco Road Safety Expo – Nov 2024','2025-07-29 07:39:39','2025-07-29 07:39:39'),(3,'مشاركة مقعد في الملتقى السادس للسلامة المرورية – ديسمبر 2023','Maqaad at 6th Road Safety Forum – Dec 2023','2025-07-29 07:39:39','2025-07-29 07:39:39'),(4,'مشاركة مقعد في فعالية القيادة الآمنة بجامعة تبوك – نوفمبر 2023، ضمن برنامج توعوي يهدف إلى تعزيز أهمية استخدام مقعد الطفل في المركبات.','Maqaad at Safe Driving Event – University of Tabuk – Nov 2023','2025-07-29 07:39:39','2025-07-29 07:39:39'),(5,'مع كل ولادة، مقعد أمان.. رسالة حياة من مَقعد الوقفية','With every birth, a safety seat… Maqaad Waqf’s life message','2025-07-29 07:39:39','2025-07-29 07:39:39'),(6,'مشاركة مقعد في أسبوع سلامة الركاب الأطفال بالتعاون مع شركة نجم – سبتمبر 2023.','Maqaad in Child Passenger Safety Week with Najm – Sep 2023','2025-07-29 07:39:39','2025-07-29 07:39:39'),(7,'مشاركة مَقعد في فعالية ( السلامة المرورية ) المقامة فى جامعة المجمعة للتوعية بأهمية استخدام مَقعد الطفل بالسيارة .','Maqaad participation in the Road Safety event at Majmaah University.','2025-07-29 07:39:39','2025-07-29 07:39:39'),(8,'مشاركة مقعد في معرض السلامة المرورية بتنظيم أرامكو – نوفمبر 2024','Maqaad in Aramco Road Safety Expo – Nov 2024','2025-07-29 07:39:39','2025-07-29 07:39:39'),(9,'مشاركة مقعد في الملتقى السادس للسلامة المرورية – ديسمبر 2023','Maqaad at 6th Road Safety Forum – Dec 2023','2025-07-29 07:39:39','2025-07-29 07:39:39'),(10,'مشاركة مقعد في فعالية القيادة الآمنة بجامعة تبوك – نوفمبر 2023، ضمن برنامج توعوي يهدف إلى تعزيز أهمية استخدام مقعد الطفل في المركبات.','Maqaad at Safe Driving Event – University of Tabuk – Nov 2023','2025-07-29 07:39:39','2025-07-29 07:39:39'),(11,'مع كل ولادة، مقعد أمان.. رسالة حياة من مَقعد الوقفية','With every birth, a safety seat… Maqaad Waqf’s life message','2025-07-29 07:39:39','2025-07-29 07:39:39'),(12,'مشاركة مقعد في أسبوع سلامة الركاب الأطفال بالتعاون مع شركة نجم – سبتمبر 2023.','Maqaad in Child Passenger Safety Week with Najm – Sep 2023','2025-07-29 07:39:40','2025-07-29 07:39:40');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_images_gallery_id_foreign` (`gallery_id`),
  CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_images`
--

LOCK TABLES `gallery_images` WRITE;
/*!40000 ALTER TABLE `gallery_images` DISABLE KEYS */;
INSERT INTO `gallery_images` VALUES (1,1,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(2,1,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(3,1,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(4,2,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(5,2,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(6,2,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(7,3,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(8,3,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(9,4,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(10,4,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(11,4,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(12,5,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(13,5,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(14,5,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(15,5,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(16,5,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(17,5,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(18,6,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(19,7,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(20,7,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(21,7,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(22,8,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(23,8,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(24,8,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(25,9,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(26,9,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(27,10,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(28,10,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(29,10,'site/images/galleries/video-img.png','2025-07-29 07:39:39','2025-07-29 07:39:39'),(30,11,'site/images/galleries/video-img.png','2025-07-29 07:39:40','2025-07-29 07:39:40'),(31,11,'site/images/galleries/video-img.png','2025-07-29 07:39:40','2025-07-29 07:39:40'),(32,11,'site/images/galleries/video-img.png','2025-07-29 07:39:40','2025-07-29 07:39:40'),(33,11,'site/images/galleries/video-img.png','2025-07-29 07:39:40','2025-07-29 07:39:40'),(34,11,'site/images/galleries/video-img.png','2025-07-29 07:39:40','2025-07-29 07:39:40'),(35,11,'site/images/galleries/video-img.png','2025-07-29 07:39:40','2025-07-29 07:39:40'),(36,12,'site/images/galleries/video-img.png','2025-07-29 07:39:40','2025-07-29 07:39:40');
/*!40000 ALTER TABLE `gallery_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `install_seats`
--

DROP TABLE IF EXISTS `install_seats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `install_seats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `install_seats`
--

LOCK TABLES `install_seats` WRITE;
/*!40000 ALTER TABLE `install_seats` DISABLE KEYS */;
INSERT INTO `install_seats` VALUES (1,'طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)','How to install the seat suitable for your child (from birth to 12 months)','00:00','site/images/install_seats/video-img.png','#','2025-07-29 07:39:40','2025-07-29 07:39:40'),(2,'طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)','How to install the seat suitable for your child (from birth to 12 months)','00:00','site/images/install_seats/video-img.png','#','2025-07-29 07:39:40','2025-07-29 07:39:40'),(3,'طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)','How to install the seat suitable for your child (from birth to 12 months)','00:00','site/images/install_seats/video-img.png','#','2025-07-29 07:39:40','2025-07-29 07:39:40'),(4,'طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)','How to install the seat suitable for your child (from birth to 12 months)','00:00','site/images/install_seats/video-img.png','#','2025-07-29 07:39:40','2025-07-29 07:39:40');
/*!40000 ALTER TABLE `install_seats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2022_12_14_083707_create_settings_table',1),(5,'2025_07_24_083307_create_seats_table',1),(6,'2025_07_24_083330_create_gallery_table',1),(7,'2025_07_24_083531_create_blogs_table',1),(8,'2025_07_24_083545_create_news_table',1),(9,'2025_07_24_083703_create_questions_table',1),(10,'2025_07_24_083759_create_contacts_table',1),(11,'2025_07_24_083857_create_parteners_table',1),(12,'2025_07_24_085226_create_volunteers_table',1),(13,'2025_07_24_111506_create_sliders_table',1),(14,'2025_07_24_141027_create_install_seats_table',1),(15,'2025_07_24_142836_create_general_settings',1),(16,'2025_07_27_121455_create_gallery_images_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'child-safety-in-the-car-1','سلامة الطفل في السيارة','Child safety in the car','من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به','One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.','site/images/news/news1.png',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(2,'child-safety-in-the-car-2','سلامة الطفل في السيارة','Child safety in the car','من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به','One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.','site/images/news/news1.png',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(3,'child-safety-in-the-car-3','سلامة الطفل في السيارة','Child safety in the car','من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به','One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.','site/images/news/news1.png',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(4,'child-safety-in-the-car-4','سلامة الطفل في السيارة','Child safety in the car','من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به','One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.','site/images/news/news1.png',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(5,'child-safety-in-the-car-5','سلامة الطفل في السيارة','Child safety in the car','من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به','One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.','site/images/news/news1.png',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(6,'child-safety-in-the-car-6','سلامة الطفل في السيارة','Child safety in the car','من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به','One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.','site/images/news/news1.png',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(7,'child-safety-in-the-car-7','سلامة الطفل في السيارة','Child safety in the car','من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به','One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.','site/images/news/news1.png',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39'),(8,'child-safety-in-the-car-8','سلامة الطفل في السيارة','Child safety in the car','من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به','One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.','site/images/news/news1.png',1,'2025-03-19 22:00:00','2025-07-29 07:39:39','2025-07-29 07:39:39');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parteners`
--

DROP TABLE IF EXISTS `parteners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parteners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parteners`
--

LOCK TABLES `parteners` WRITE;
/*!40000 ALTER TABLE `parteners` DISABLE KEYS */;
INSERT INTO `parteners` VALUES (1,'نيوم','NEOM','site/images/partners/success(1).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(2,'نيوم','NEOM','site/images/partners/success(3).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(3,'نيوم','NEOM','site/images/partners/success(4).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(4,'نيوم','NEOM','site/images/partners/success(5).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(5,'نيوم','NEOM','site/images/partners/success(6).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(6,'نيوم','NEOM','site/images/partners/success(7).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(7,'نيوم','NEOM','site/images/partners/success(8).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(8,'نيوم','NEOM','site/images/partners/success(9).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(9,'نيوم','NEOM','site/images/partners/success(10).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(10,'نيوم','NEOM','site/images/partners/success(11).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39'),(11,'نيوم','NEOM','site/images/partners/success(12).png','#','2025-07-29 07:39:39','2025-07-29 07:39:39');
/*!40000 ALTER TABLE `parteners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟','When should a child start using a car seat?','يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.','A child should start using a car seat from birth. Newborns up to two years old should sit in rear-facing car seats to provide maximum protection for their head and neck.','2025-07-29 07:39:39','2025-07-29 07:39:39'),(2,'متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟','When should a child start using a car seat?','نحن نقدم مجموعة واسعة من خدمات السبك المعدني، بما في ذلك تصنيع القطع المعدنية للآلات الثقيلة، وتصنيع أجزاء خاصة بقطاعات الطاقة والبناء، إلى جانب خدمات تصنيع الهياكل المعدنية المخصصة.','We offer a wide range of metal casting services, including manufacturing metal parts for heavy machinery, custom components for energy and construction sectors, and custom metal structures.','2025-07-29 07:39:39','2025-07-29 07:39:39'),(3,'متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟','When should a child start using a car seat?','يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.','A child should start using a car seat from birth. Newborns up to two years old should sit in rear-facing car seats to provide maximum protection for their head and neck.','2025-07-29 07:39:39','2025-07-29 07:39:39'),(4,'متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟','When should a child start using a car seat?','يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.','A child should start using a car seat from birth. Newborns up to two years old should sit in rear-facing car seats to provide maximum protection for their head and neck.','2025-07-29 07:39:39','2025-07-29 07:39:39');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_from` tinyint unsigned NOT NULL,
  `age_to` tinyint unsigned DEFAULT NULL,
  `weight` tinyint unsigned DEFAULT NULL,
  `weight_type` enum('min','max') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` tinyint unsigned DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seats`
--

LOCK TABLES `seats` WRITE;
/*!40000 ALTER TABLE `seats` DISABLE KEYS */;
INSERT INTO `seats` VALUES (1,'مقعد الأطفال الرضع1','Infant Car Seat',0,1,13,'min',75,'site/images/seats/Baby 1.png',1,'2025-07-29 07:39:39','2025-07-29 07:39:39'),(2,'مقعد الأطفال الرضع2','Infant Car Seat',0,1,10,'min',50,'site/images/seats/Baby 1.png',1,'2025-07-29 07:39:39','2025-07-29 07:39:39'),(3,'مقعد الأطفال الرضع','Infant Car Seat',0,1,6,'max',60,'site/images/seats/Baby 1.png',1,'2025-07-29 07:39:39','2025-07-29 07:39:39'),(4,'مقعد الأطفال الرضع','Infant Car Seat',0,1,9,'max',75,'site/images/seats/Baby 1.png',1,'2025-07-29 07:39:39','2025-07-29 07:39:39');
/*!40000 ALTER TABLE `seats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('bsPsw3ddJdNaW02xUfbquNEzikAxkGMZugEepb95',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36','YTo4OntzOjY6Il90b2tlbiI7czo0MDoiNmtrRkhtaW43bE1FZ1dpdzVrUVlxaHJ5VXJjNmt0V05CRVNVenJ6eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoibG9jYWxlIjtzOjI6ImFyIjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkWm82eHZKZHVrM0RsN1FvRDdJZjU4dTgwSkhrTUtZUlouRjRGOVFkRmowVVpLaWlsZTMvWksiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fXM6NjoidGFibGVzIjthOjE6e3M6MjM6Ikxpc3RWb2x1bnRlZXJzX3Blcl9wYWdlIjtzOjE6IjUiO319',1753879062);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `payload` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_group_name_unique` (`group`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'general','site_name_ar',0,'\"مَقعد\"','2025-07-29 07:39:35','2025-07-30 00:43:33'),(2,'general','site_name_en',0,'\"Maqaad\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(3,'general','site_active',0,'true','2025-07-29 07:39:36','2025-07-30 00:43:33'),(4,'general','favicon',0,'\"site/images/Logo.svg\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(5,'general','logo',0,'\"site/images/Logo.svg\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(6,'general','social_twitter',0,'\"https://x.com/MaqaadSA\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(7,'general','social_facebook',0,'\"#\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(8,'general','social_instagram',0,'\"https://www.instagram.com/maqaadsa/\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(9,'general','social_youtube',0,'\"https://youtu.be/yAlg_iogKRk\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(10,'general','social_text',0,'\"MaqaadSA@\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(11,'general','hero_title_ar',0,'\"سعادتهم في سلامتهم!\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(12,'general','hero_title_en',0,'\"Their happiness is in their safety!\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(13,'general','hero_description_ar',0,'\"مبادرة “مَقعد” تهدف إلى نشر الوعي حول أهمية استخدام مقعد الطفل المخصص في السيارة لحمايته من الحوادث.\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(14,'general','hero_description_en',0,'\"The \\\"Maqaad\\\" initiative aims to raise awareness about the importance of using child car seats to protect them from accidents.\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(15,'general','home_banner',0,'\"site/images/banner.png\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(16,'general','about_banner',0,'\"site/images/about.png\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(17,'general','about_short_ar',0,'\"فريق يؤمن بدوره في خدمة المجتمع، ونسعى لإحداث أثر إيجابي ومستدام\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(18,'general','about_short_en',0,'\"A team that believes in its role in serving the community, striving to create a positive and sustainable impact.\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(19,'general','about_long_ar',0,'\"“مَقعد” هي مؤسسة وقفية للتوعية بأهمية استخدام مَقعد الطفل بالسيارة بموجب اتفاقية مع وزارة الصحة بالتعاون مع الجمعية السعودية للسلامة المرورية...\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(20,'general','about_long_en',0,'\"\\\"Maqaad\\\" is a charitable foundation raising awareness about child seat safety in cars, under agreement with the Ministry of Health in collaboration with various government and private entities...\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(21,'general','vision_ar',0,'\"#سعادتهم_في_سلامتهم.\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(22,'general','vision_en',0,'\"#Their_Happiness_Is_Their_Safety.\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(23,'general','mission_ar',0,'\"حث أولياء الأمور على الالتزام بإجراءات السلامة والمحافظة على أرواح الأطفال بالسيارة.\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(24,'general','mission_en',0,'\"Encourage parents to follow safety procedures and protect children’s lives in cars.\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(25,'general','goal_ar',0,'\"التوعية بأهمية استخدام مقاعد الأطفال\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(26,'general','goal_en',0,'\"Raise awareness about the importance of using child car seats\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(27,'general','contact_email',0,'\"info@maqaad.sa\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(28,'general','contact_phone',0,'\"0500664996\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(29,'general','contact_address_ar',0,'\"المملكة العربية السعودية\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(30,'general','contact_address_en',0,'\"Saudi Arabia\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(31,'general','terms_desc_ar',0,'\"جميع الحقوق محفوظة 2025© MAQAAD\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(32,'general','terms_desc_en',0,'\"All rights reserved 2025© MAQAAD\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(33,'general','progress_death_ar',0,'\"من مساهمة المقاعد في خفض وفيات الأطفال بالحوادث\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(34,'general','progress_death_en',0,'\"Contribution of seats in reducing child deaths in accidents\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(35,'general','progress_death_percent',0,'50','2025-07-29 07:39:36','2025-07-30 00:43:33'),(36,'general','progress_injury_ar',0,'\"من مساهمة المقاعد في تقليل خطر الإصابة بالحوادث\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(37,'general','progress_injury_en',0,'\"Contribution of seats in reducing injury risk\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(38,'general','progress_injury_percent',0,'80','2025-07-29 07:39:36','2025-07-30 00:43:33'),(39,'general','progress_use_ar',0,'\"من استخدام مقاعد الأمان للأطفال في المملكة العربية السعودية\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(40,'general','progress_use_en',0,'\"Usage of children\'s safety seats in Saudi Arabia\"','2025-07-29 07:39:36','2025-07-30 00:43:33'),(41,'general','progress_use_percent',0,'10','2025-07-29 07:39:36','2025-07-30 00:43:33'),(42,'general','installation_doc',0,'\"site/images/home.pdf\"','2025-07-30 09:32:43',NULL),(43,'general','initiative_presentation',0,'\"site/images/initiative_presentation.mp4\"','2025-07-30 09:32:46',NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'site/images/slider/hero-baby.png','2025-07-29 07:39:40','2025-07-29 07:39:40'),(2,'site/images/slider/hero-baby.png','2025-07-29 07:39:40','2025-07-29 07:39:40');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com','2025-07-29 07:39:39','$2y$12$Zo6xvJduk3Dl7QoD7If58u80JHkMKYRZ.F4F9QdFj0UZKiile3/ZK','admin','jsvcEDDr0Fiyd3023LCEt18F8oc3tKTvPOv2ivg5vtEgOeyKiJDSS0WGytt8','2025-07-29 07:39:39','2025-07-29 07:39:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `volunteers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteers`
--

LOCK TABLES `volunteers` WRITE;
/*!40000 ALTER TABLE `volunteers` DISABLE KEYS */;
INSERT INTO `volunteers` VALUES (1,'Cheyenne Rasmussen','sidynu@mailinator.com','+966501234567','Officiis ipsum asper','2025-07-30 04:32:08','2025-07-30 04:32:08'),(2,'Hilel Gardner','gipijo@mailinator.com','+966501234567','Laborum sed quis dol','2025-07-30 09:21:56','2025-07-30 09:21:56'),(3,'Uriel Callahan','nela@mailinator.com','+966501234567','Tempora vero a sit p','2025-07-30 09:25:15','2025-07-30 09:25:15'),(4,'Idola Blackwell','nudem@mailinator.com','+966501234567','Quia eos eligendi a','2025-07-30 09:25:26','2025-07-30 09:25:26'),(5,'Kuame Hopper','fuvef@mailinator.com','+966501234567','Natus quisquam quas','2025-07-30 09:26:18','2025-07-30 09:26:18'),(6,'Ursa Chen','sobesih@mailinator.com','+966501234567','Ut occaecat et repud','2025-07-30 09:29:17','2025-07-30 09:29:17');
/*!40000 ALTER TABLE `volunteers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'maqaad'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-30 15:39:19
