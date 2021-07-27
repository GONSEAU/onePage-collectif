-- DUMPED ON 28/07/2021 at 00:41:06

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'John','$2y$10$n2TFHRPgeBS.F1M9SmEaj.j319hTAQMQsY0YIdNyF5IbNsyuve8N6'),(2,'pierre','$2y$10$KZjl4qMmmvGbIja45sNbBuDbuhhVp5gqW4dQvHMJ5Z.GdWibRlgGW'),(3,'will','$2y$10$FSB5TyPytlEQXMhgXN.M/OjMKg7ry7.ET68wVrriWLCjLr3Dg/qk2'),(4,'roro','$2y$10$ga.KNDJlGq262jaxzcAUS.AQqVNf1keeUTF8/JflA9iky3vtbAAjm'),(5,'riri','$2y$10$68kJ9KEz2bj9jm5LRGzqHO8XVQM38IelyvIFXbIUOcfNfD7T7PWTK'),(6,'loulou','$2y$10$NNDPhbzqRvTAq1AthPeFPO/L/Pe3M2QLgcOjf6Hi9EYuYljY9/m1G'),(7,'test','$2y$10$fHz47M3qQVxgL.gfDLRQg.gKzK7VxGiZVbepOyu2/lBQ/TW5Sn0j2'),(10,'ruru','$2y$10$6eN79RvSALThmvJ1nb333OeoayBtbjF2r59pedWR8T.2ZkfLRK5u.'),(11,'je suis fatigue','$2y$10$rmHq2dFbfzruvpbRXOWWGOp8qGW1Oj5nEuQEtNjpeB5tlH2u8uPQW'),(12,'popo','$2y$10$jwgi4C98pWo.7YrILRmtNOLA8l9qWr9Rop.0tzZ5TTGgziCExFBBi'),(13,'pascal','$2y$10$zAfWEtDyZNRHtr8rB4gVD.KGdkVjz39P/kVt799MSUy5QqkJYIrwW');
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
INSERT INTO `section_apropos` VALUES (1,'A propos','test3','Lorem Ipsum is simply ','test1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','Une équipe à votre service','C\'est chez vous que ça se passe !');
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
INSERT INTO `section_nav` VALUES (1,'logoRobinFinal','A propos','Team barber','Nos réalisations','Nous contacter','Barber Home','');
/*!40000 ALTER TABLE `section_nav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_team`
--

DROP TABLE IF EXISTS `section_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_team` (
  `photo_member` varchar(255) NOT NULL,
  `name_member` varchar(255) NOT NULL,
  `text_member` text NOT NULL,
  `facebook_member` varchar(255) NOT NULL,
  `twitter_member` varchar(255) NOT NULL,
  `insta_member` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_team`
--

LOCK TABLES `section_team` WRITE;
/*!40000 ALTER TABLE `section_team` DISABLE KEYS */;
INSERT INTO `section_team` VALUES ('Weber','Max','Es gibt zwei Arten, Politik zu machen: entweder eine für die Politik oder eine für die Politik.','','','',1),('Karl','Karl','Es gibt keine richtige oder falsche Ernährung, es gibt nur Grade der Ausbeutung der Menschheit.','','','',2),('freud','Sig','Artung papa maman ! Ich werde dich töten, um größer zu werden !','','','',3);
/*!40000 ALTER TABLE `section_team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-27 22:41:08
