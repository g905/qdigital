-- MariaDB dump 10.19  Distrib 10.9.4-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: qdigital
-- ------------------------------------------------------
-- Server version	10.9.4-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `authors` varchar(255) DEFAULT NULL,
  `favorite` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uid` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES
(1,'ASD Technical Report',NULL,'United States. Air Force. Systems Command. Aeronautical Systems Division',0,'2023-04-10 05:14:51','2023-04-10 07:21:16','7gvnAAAAMAAJ',0),
(3,'ASD Technical Report',NULL,NULL,0,'2023-04-10 05:25:40','2023-04-10 09:28:03','ZX31olPIKrgC',0),
(4,'My World With ASD','A young boy with autism spectrum disorder ( ASD) describes his life with ASD. He also tries to explain what ASD is through examples in his life. He does this by describing how he reacts and feels in different events in his life so that both children and adults can understand what ASD is and have more awareness of this disorder. This story also depicts this young boy\'s life from childhood to adulthood and shows how people with ASD can overcome adversity and live normal lives. Not only can they live normal lives, but they can also become very successful people! My World with ASD is a story that will inspire both children and adults. It gives a sense of hope for anyone who has a child with ASD or facing any challenges in their lives. It also shows how love and support from family or friends is a big part of the growth and development of a child with ASD. This story will help anyone facing any challenges in their life to be hopeful and encouraged. It will especially encourage anyone raising a child with ASD to feel optimistic and proud. My World with ASD will definitely turn your world around!','Berlinda Juste',0,'2023-04-10 05:32:13','2023-04-10 07:21:20','3nkuEAAAQBAJ',0),
(5,'sdfs Technical Report',NULL,'United States. Air Force. Systems Command. Aeronautical Systems Division',0,'2023-04-10 05:14:51','2023-04-10 10:30:59','dfggvnAAAAMAAJ',1),
(6,'EEE Technical Report',NULL,NULL,0,'2023-04-10 05:25:40','2023-04-10 09:51:06','56hf31olPIKrgC',0),
(7,'Your World With ASD','A young boy with autism spectrum disorder ( ASD) describes his life with ASD. He also tries to explain what ASD is through examples in his life. He does this by describing how he reacts and feels in different events in his life so that both children and adults can understand what ASD is and have more awareness of this disorder. This story also depicts this young boy\'s life from childhood to adulthood and shows how people with ASD can overcome adversity and live normal lives. Not only can they live normal lives, but they can also become very successful people! My World with ASD is a story that will inspire both children and adults. It gives a sense of hope for anyone who has a child with ASD or facing any challenges in their lives. It also shows how love and support from family or friends is a big part of the growth and development of a child with ASD. This story will help anyone facing any challenges in their life to be hopeful and encouraged. It will especially encourage anyone raising a child with ASD to feel optimistic and proud. My World with ASD will definitely turn your world around!','Berlinda Juste',0,'2023-04-10 05:32:13','2023-04-10 07:17:49','hjkhguEAAAQBAJ',0),
(8,'Old Testament Theology: The theology of Israel\'s historical traditions.-v. 2. The theology of Israel\'s prophetic traditions',NULL,'Gerhard von Rad',0,'2023-04-10 11:27:04','2023-04-10 11:27:04','-LYNAQAAIAAJ',0),
(9,'DFG-Schwerpunktprogramm: Reef evolution',NULL,'Joachim Reitner, Felix Gunkel',0,'2023-04-10 11:30:27','2023-04-10 11:32:16','NEdOAQAAIAAJ',0),
(10,'Class KJ, International Law',NULL,'Los Angeles County Law Library (Calif.)',0,'2023-04-10 11:32:50','2023-04-10 11:33:36','tQKntQcDiuIC',1),
(11,'KJ Goes Invisible','Introducing the Adventures of KJ the White CockatielKJ Goes Invisible is an inter-active children\'s picture book that incorporates colour charts, counting and spotting KJ within the story. A suitable read for parents and their young children, primary school students and anyone with a great affection for their pets.We first meet KJ and Koko in \"KJ Goes Invisible\". In this adventure, KJ the White Cockatiel loves to hide from Koko. Koko has trouble finding KJ because everything in the house is so white, and KJ is so white. How would she ever find him? KJ thinks he will not be found, but he\'s in for a big surprise. Koko comes up with a novel idea to ensure she never loses KJ again.There is always something to learn through KJ\'s many exploits and light-hearted adventures. No matter how often KJ gets into mischief, Koko somehow manages to keep her little bird out of trouble.KJ brings so much fun and adventure into Koko\'s life and he will do the same for all those who love a good adventure.','Koola Kaye',0,'2023-04-10 11:32:53','2023-04-10 11:32:53','MOByCAAAQBAJ',0),
(12,'Война и мир',NULL,'Лев Толстой',0,'2023-04-10 11:33:06','2023-04-10 11:33:06','C7SUrgEACAAJ',0);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phinxlog`
--

LOCK TABLES `phinxlog` WRITE;
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
INSERT INTO `phinxlog` VALUES
(20230408133307,'CreateUsersTable','2023-04-08 09:34:19','2023-04-08 09:34:19',0),
(20230409173821,'CreateBooksTable','2023-04-09 13:40:27','2023-04-09 13:40:27',0),
(20230410090333,'AddUidToBooksTable','2023-04-10 05:10:52','2023-04-10 05:10:53',0),
(20230410103225,'AddDeletedToBooksTable','2023-04-10 06:33:11','2023-04-10 06:33:11',0),
(20230410124424,'CreateUsersBooksTable','2023-04-10 08:46:01','2023-04-10 08:46:01',0),
(20230410133653,'CreateUsersFavsTable','2023-04-10 09:37:29','2023-04-10 09:37:29',0);
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(10,'test','test@test.te','$2y$10$fpOgGlpNoOpZKgzZjS2.q.aFe1z8mBKgTdbaQ..ssYAI23BXCgshS','2023-04-08 23:52:00','2023-04-08 23:52:00'),
(11,'Егор','breakestra@yandex.ru','$2y$10$sBV3cBM637o7FWQh3JnSiues6Npbt2NGcWf0lfbMesFXOuH.1nx4S','2023-04-10 09:30:59','2023-04-10 09:30:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_books`
--

DROP TABLE IF EXISTS `users_books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_books`
--

LOCK TABLES `users_books` WRITE;
/*!40000 ALTER TABLE `users_books` DISABLE KEYS */;
INSERT INTO `users_books` VALUES
(1,10,3,'2023-04-10 15:32:08','0000-00-00 00:00:00'),
(2,10,5,'2023-04-10 15:32:08','0000-00-00 00:00:00'),
(3,11,6,'2023-04-10 15:32:08','0000-00-00 00:00:00'),
(4,10,1,'2023-04-10 15:32:08','0000-00-00 00:00:00'),
(5,10,4,'2023-04-10 15:32:08','0000-00-00 00:00:00'),
(6,11,9,'2023-04-10 11:32:16','2023-04-10 11:32:16'),
(7,11,10,'2023-04-10 11:32:50','2023-04-10 11:32:50'),
(8,11,11,'2023-04-10 11:32:53','2023-04-10 11:32:53'),
(9,11,12,'2023-04-10 11:33:06','2023-04-10 11:33:06');
/*!40000 ALTER TABLE `users_books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_favs`
--

DROP TABLE IF EXISTS `users_favs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_favs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_favs`
--

LOCK TABLES `users_favs` WRITE;
/*!40000 ALTER TABLE `users_favs` DISABLE KEYS */;
INSERT INTO `users_favs` VALUES
(7,10,'3nkuEAAAQBAJ','2023-04-10 10:30:35','2023-04-10 10:30:35'),
(11,11,'56hf31olPIKrgC','2023-04-10 11:19:34','2023-04-10 11:19:34'),
(12,11,'NEdOAQAAIAAJ','2023-04-10 11:32:38','2023-04-10 11:32:38'),
(13,11,'C7SUrgEACAAJ','2023-04-10 11:33:32','2023-04-10 11:33:32');
/*!40000 ALTER TABLE `users_favs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-10 19:34:26
