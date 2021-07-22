-- DUMPED ON 22/07/2021 at 13:51:59

-- MariaDB dump 10.19  Distrib 10.5.11-MariaDB, for Linux (x86_64)
--
-- Host: mariadb    Database: niwee
-- ------------------------------------------------------
-- Server version	10.5.11-MariaDB

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
-- Current Database: `niwee`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `niwee` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `niwee`;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'John','password'),(4,'test','$2y$10$GG7hG31mL/XiecFDYBDtnuqQsb20f5bWTR3q0L.JPSZK/JovI6ZgS'),(5,'pierre','$2y$10$slrnXmD5ok97c4Kdo9fuLuyqYkgyJ64BfqcqIdNAQnNKZrAlMjsmS'),(6,'robin','$2y$10$K/5MDJbKc8fDbrZX7F5WzOCDQn9bTjkREiSdIa0sbO8v.Qf3N8Zle'),(7,'bernardo','$2y$10$tgQvgtuysIT3cEWN9COdP.CxlxzX7iFpBr5ry5I1vMyxek2L/3YJG');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_apropos`
--

DROP TABLE IF EXISTS `section_apropos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_apropos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `first_image` varchar(255) NOT NULL,
  `first_text` text NOT NULL,
  `second_image` varchar(255) NOT NULL,
  `second_text` text NOT NULL,
  `title_text_1` varchar(255) NOT NULL,
  `title_text_2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_apropos`
--

LOCK TABLES `section_apropos` WRITE;
/*!40000 ALTER TABLE `section_apropos` DISABLE KEYS */;
INSERT INTO `section_apropos` VALUES (1,'hello','','','','','','');
/*!40000 ALTER TABLE `section_apropos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_nav`
--

DROP TABLE IF EXISTS `section_nav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_logo` varchar(255) DEFAULT NULL,
  `item_1` varchar(255) DEFAULT NULL,
  `item_2` varchar(255) DEFAULT NULL,
  `item_3` varchar(255) DEFAULT NULL,
  `item_4` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `calendly` longblob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_nav`
--

LOCK TABLES `section_nav` WRITE;
/*!40000 ALTER TABLE `section_nav` DISABLE KEYS */;
INSERT INTO `section_nav` VALUES (1,'logoRobinFinal','A propos','Team berber','Nos réalisations','Nous contactez','Barber Home','');
/*!40000 ALTER TABLE `section_nav` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-22 11:52:01
